<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsPageForm;
use App\Models\GetQuote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function allQuotes() {
        $data['quotes'] = GetQuote::all();
        return view('admin.all-quotes', $data);
    }

    public function allContactFormData() {
        $data['contacts'] = ContactUsPageForm::all();
        return view('admin.contact-us-form', $data);
    }
}
