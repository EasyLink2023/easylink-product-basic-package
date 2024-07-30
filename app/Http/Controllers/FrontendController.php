<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage($page = null)
    {
        if (!$page) {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->get()->take(3);
            return view('frontend.index', $data);
        } else if ($page == 'contact-us') {
            return view('frontend.contact-us');
        } else if ($page == 'login') {
            return view('auth.login');
        } else if ($page == 'blog') {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->get();
            return view('frontend.blog', $data);
        } else {
            $menu = Menu::where('url', $page)->first();
            if ($menu) {
                $data['page'] = Pages::where('menu_id', $menu->id)->first();
                $data['menu'] = $menu;
                $page_name = str_replace(' ', '_', $menu->menu_name);
                $page_name = strtolower($page_name);
                return view("frontend.pages.$page_name", $data);
            } else {
                return redirect(route('index'));
            }
        }
    }

    public function contactUsPage()
    {
        return view('frontend.contact-us');
    }

    public function blogDeatil($slug)
    {
        $data['blog'] = Blogs::where('slug', $slug)->first();
        return view('frontend.blog-detail', $data);
    }
}
