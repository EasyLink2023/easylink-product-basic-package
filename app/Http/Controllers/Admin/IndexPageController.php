<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IndexPage;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function index(Request $request) {
        $data['indexPage'] = IndexPage::orderBy('id','desc')->get();
        return view('admin.index.index', $data);
    }

    public function create(Request $request) {
        return view('admin.index.create');
    }
    public function edit($id) {
        $data['indexPage'] = IndexPage::find($id);
        return view('admin.index.edit', $data);
    }

    public function store(Request $request) {
        try {
            $setting = new IndexPage;
            $setting->key = $request->key_name;
            $setting->value_type = $request->value_type;
            if($request->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/index-page'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Page Data Saved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function update(Request $request) {
        try {
            $setting = IndexPage::find($request->id);
            $setting->key = $request->key_name;
            if($setting->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/index-page'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Page Data Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
