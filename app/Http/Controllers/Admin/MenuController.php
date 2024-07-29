<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Events\MenuCreated;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

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
            event(new MenuCreated($menu));
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
        $data = Menu::find($id);
        if($data) {
            $new_page = Pages::where('menu_id', $data->id)->first();
            $page = Pages::find($new_page->id);
            $page_name = str_replace(' ', '_', $data->menu_name);
            $viewPath = resource_path('views/frontend/pages/' . strtolower($page_name) . '.blade.php');
            if (file_exists($viewPath)) {
                unlink($viewPath);
            }
            $page->delete();
        }
        $data->delete();
        return redirect()->back()->with('success','Menu Deleted Successfully');
    }
}
