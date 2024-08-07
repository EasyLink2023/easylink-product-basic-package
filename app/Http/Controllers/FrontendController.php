<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\ContactUsPageForm;
use App\Models\GetQuote;
use App\Models\Menu;
use App\Models\Pages;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage($page = null)
    {
        if (!$page) {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->get()->take(3);
            $data['testimonials'] = Testimonial::orderBy('id', 'desc')->get()->take(5);
            return view('frontend.index', $data);
        } else if ($page == 'contact-us') {
            return view('frontend.contact-us');
        } else if ($page == 'login') {
            return view('auth.login');
        } else if ($page == 'blog') {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->paginate(9);
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

    public function addQuote(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);
        
        try {
            $add = new GetQuote;
            $add->name = $request->name;
            $add->email = $request->email;
            $add->phone = $request->phone;
            $add->message = $request->message;
            $add->save();
            return redirect()->back()->with(['success' => 'Get Quote Request Added Successfully', 'modal' => true]);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => $th->getMessage(), 'modal' => true]);
        }
    }
    public function addContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);
        
        try {
            $add = new ContactUsPageForm;
            $add->name = $request->name;
            $add->email = $request->email;
            $add->phone = $request->phone;
            $add->message = $request->message;
            $add->save();
            return redirect()->back()->with(['success-contact' => 'Contact Us Request Added Successfully']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error-contact' => $th->getMessage()]);
        }
    }
}
