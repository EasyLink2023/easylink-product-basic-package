<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage() {
        return view('frontend.index');
    }
    public function contactUsPage() {
        return view('frontend.contact-us');
    }
}
