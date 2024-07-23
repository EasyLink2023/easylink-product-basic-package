<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsPage;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function index(Request $request) {
        $data['contactUs'] = ContactUsPage::orderBy('id','desc')->get();
        return view('admin.contact-us.index', $data);
    }

    public function create(Request $request) {
        return view('admin.contact-us.create');
    }
    public function edit($id) {
        $data['contactUs'] = ContactUsPage::find($id);
        return view('admin.contact-us.edit', $data);
    }

    public function store(Request $request) {
        try {
            $setting = new ContactUsPage;
            $setting->key = $request->key_name;
            $setting->value_type = $request->value_type;
            if($request->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/contact-us'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Contact Us Page Data Saved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function update(Request $request) {
        try {
            $setting = ContactUsPage::find($request->id);
            $setting->key = $request->key_name;
            if($setting->value_type == '2') {
                $image = $request->file('value');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/contact-us'), $imageName);
                $value = $imageName;
            }else{
                $value = $request->value;
            }
            $setting->value = $value;
            $setting->save();
            return redirect()->back()->with('success','Contact Us Page Data Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
