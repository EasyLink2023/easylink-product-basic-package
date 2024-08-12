<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\GetQuote;
use Illuminate\Http\Request;
use App\Models\ContactUsPageForm;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $data['quotes'] = GetQuote::whereDate('created_at', $today)->get();
        $data['contacts'] = ContactUsPageForm::whereDate('created_at', $today)->get();
        $data['today_date'] = $today;
        return view('admin.dashboard', $data);
    }

    public function allQuotes()
    {
        $data['quotes'] = GetQuote::all();
        return view('admin.all-quotes', $data);
    }

    public function allContactFormData()
    {
        $data['contacts'] = ContactUsPageForm::all();
        return view('admin.contact-us-form', $data);
    }
}
