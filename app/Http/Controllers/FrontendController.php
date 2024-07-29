<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage($page=null) {
        if(!$page) {
            return view('frontend.index');
        }
        else if($page == 'contact-us') {
            return view('frontend.contact-us');
        }
        else if($page == 'login') {
            return view('auth.login');
        }
        else{
            $menu = Menu::where('url', $page)->first();
            if($menu) {
                $data['page'] = Pages::where('menu_id', $menu->id)->first();
                $data['menu'] = $menu;
                $page_name = str_replace(' ', '_', $menu->menu_name);
                $page_name = strtolower($page_name);
                return view("frontend.pages.$page_name", $data);
            }
            else{
                return view('frontend.index'); 
            }
        }
    }
    public function contactUsPage() {
        return view('frontend.contact-us');
    }
}
