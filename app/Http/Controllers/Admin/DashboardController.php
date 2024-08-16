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

    public function allQuotes(Request $request)
    {
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = Carbon::parse($request->input('start_date'));
            $end_date = Carbon::parse($request->input('end_date'));
            $data['quotes'] = GetQuote::whereBetween('created_at', [$start_date, $end_date])->get();
        } else {
            $data['quotes'] = GetQuote::all();
        }
        return view('admin.all-quotes', $data);
    }

    public function allContactFormData(Request $request)
    {
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = Carbon::parse($request->input('start_date'));
            $end_date = Carbon::parse($request->input('end_date'));
            $data['contacts'] = ContactUsPageForm::whereBetween('created_at', [$start_date, $end_date])->get();
        } else {
            $data['contacts'] = ContactUsPageForm::all();
        }
        return view('admin.contact-us-form', $data);
    }
}
