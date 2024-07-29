<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function editPage($id) {
        $menu_id = base64_decode($id);
        $data['page'] = Pages::where('menu_id', $menu_id)->first();
        return view('admin.pages.edit', $data);
    }

    public function updatePage(Request $request) {
        try {
            $Pages = Pages::find($request->id);
            $Pages->page_name = $request->page_name;
            $Pages->sec_1_text = $request->sec_1_text;
            $Pages->sec_1_description = $request->sec_1_description;
            $Pages->content = $request->content;
            if($request->has('cover_image')) {
                $image = $request->file('cover_image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('asset/pages'), $imageName);
                $Pages->cover_image = $imageName;
            }
            $Pages->save();
            return redirect()->back()->with('success','Page Data Saved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
