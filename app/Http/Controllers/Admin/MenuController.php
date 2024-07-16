<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index() {
        $data['menus'] = Menu::all();
        return view('admin.menu.index', $data);
    }

    public function create() {
        return view('admin.menu.create');
    }

    public function store(Request $request) {
        try{
            $checkCount = Menu::count();
            if($checkCount >= 3) {
                return redirect()->back()->with('error','You have added maximum number of menu '. $checkCount);
            }
            $menu = new Menu;
            $menu->menu_name = $request->menu_name;
            $menu->url = Str::slug($request->menu_name);
            $menu->save();
            return redirect()->back()->with('success','Menu Saved Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
    public function edit($id) {
        $data['menu'] = Menu::find($id);
        return view('admin.menu.edit', $data);
    }

    public function update(Request $request) {
        try{
            $menu = Menu::find($request->id);
            $menu->menu_name = $request->menu_name;
            $menu->url = Str::slug($request->menu_name);
            $menu->save();
            return redirect()->back()->with('success','Menu Update Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function destroy($id) {
        $data= Menu::find($id);
        $data->delete();
        return redirect()->back()->with('success','Menu Deleted Successfully');
    }
}
