<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index() {
        $data['settings'] = GeneralSetting::all();
        return view('admin.setting.index', $data);
    }

    public function create() {
        return view('admin.setting.create');
    }

    public function store(Request $request) {
        try {
            $setting = new GeneralSetting;
            $setting->key_name = $request->key_name;
            $setting->value_type = $request->value_type;
            if($request->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/setting'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Setting Saved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function edit($id) {
        $data['setting'] = GeneralSetting::find($id);
        return view('admin.setting.edit', $data);
    }

    public function update(Request $request) {
        try {
            $setting = GeneralSetting::find($request->id);
            if($setting->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/setting'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Setting Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
