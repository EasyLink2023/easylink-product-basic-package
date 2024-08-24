<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\ContactUsPageForm;
use App\Models\Faqs;
use App\Models\Gallery;
use App\Models\GetQuote;
use App\Models\Menu;
use App\Models\Pages;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class FrontendController extends Controller
{
    public function homePage($page = null)
    {
        $data['background_color'] = _get_setting_value('BACKGROUND_COLOR');
        $data['font_color'] = _get_setting_value('FONT_COLOR');
        $active_template = _get_setting_value('TEMPLATE_NUMBER');
        if (!$page) {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->get()->take(3);
            $data['testimonials'] = Testimonial::orderBy('id', 'desc')->get()->take(5);
            $data['services'] = Service::orderBy('id', 'desc')->get()->take(10);
            $data['galleries'] = Gallery::orderBy('id', 'desc')->get()->take(12);
            $data['faqs'] = Faqs::orderBy('id', 'desc')->get();
            if ($active_template == '2') {
                return view('frontend.template2.index', $data);
            } else {
                return view('frontend.index', $data);
            }
        } else if ($page == 'contact-us') {
            if ($active_template == '2') {
                return view('frontend.template2.contact-us', $data);
            } else {
                return view('frontend.contact-us', $data);
            }
        } else if ($page == 'login') {
            return view('auth.login', $data);
        } else if ($page == 'sitemap') {
            $sitemap = Sitemap::create();
            $posts = Blogs::all();
            $menus = Menu::get();
            $sitemap->add(Url::create('/')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.00));
            $sitemap->add(Url::create('/blog')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.80));
            $sitemap->add(Url::create('/contact-us')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.80));
            foreach ($menus as $menu) {
                $sitemap->add(Url::create("{$menu->url}")
                    ->setLastModificationDate($menu->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.80));
            }
            foreach ($posts as $post) {
                $sitemap->add(Url::create("/blog/{$post->slug}")
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.80));
            }
            return $sitemap->writeToFile(public_path('sitemap.xml'));
        } else if ($page == 'blog') {
            $data['blogs'] = Blogs::orderBy('id', 'desc')->paginate(9);
            if ($active_template == '2') {
                return view('frontend.template2.blog', $data);
            } else {
                return view('frontend.blog', $data);
            }
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
        $data['background_color'] = _get_setting_value('BACKGROUND_COLOR');
        $data['font_color'] = _get_setting_value('FONT_COLOR');
        $active_template = _get_setting_value('TEMPLATE_NUMBER');
        $data['blog'] = Blogs::where('slug', $slug)->first();
        if ($active_template == '2') {
            return view('frontend.template2.blog-detail', $data);
        } else {
            return view('frontend.blog-detail', $data);
        }
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
            $message = _get_contact_us_page_data('FORM_REQUEST_SAVE_RESPONSE');
            return redirect()->back()->with(['success-contact' => $message]);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error-contact' => $th->getMessage()]);
        }
    }

    // public function generateSiteMap() {
    //     $sitemap = Sitemap::create();
    //     $posts = Blogs::all();
    //     foreach ($posts as $post) {
    //         $sitemap->add(Url::create("/blog/{$post->slug}")
    //             ->setLastModificationDate($post->updated_at)
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
    //             ->setPriority(0.8));
    //     }
    //     return $sitemap->writeToFile(public_path('sitemap.xml'));
    // }
}
