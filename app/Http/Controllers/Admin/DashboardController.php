<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use Carbon\Carbon;
use App\Models\User;
use App\Models\GetQuote;
use Illuminate\Http\Request;
use App\Models\ContactUsPageForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function change()
    {
        return view('admin.template.change');
    }

    public function profile()
    {
        $data['user'] = Auth::user();
        return view('admin.profile.index', $data);
    }

    public function update (Request $request)
    {
        try{
            $request->validate([
                'default_template' => 'required|string|max:255',
            ]);
            $id = Auth::user()->id;
            $user = User::find($id);
            if($user->is_template_changed == 1) {
                return redirect()->back()->with('error', "Template $user->default_template already selected");
            }
            $user->default_template = $request->input('default_template');
            $user->is_template_changed = 1;
            $user->save();
            return redirect()->back()->with('success', 'Template selected successfully');
        }
        catch(Throwable $th) {
            return redirect()->back()->with('error', 'Error making update');
        }
    }

    public function profileUpdate(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->save();
            return redirect()->back()->with('success', 'Profile updated successfully');
        }
        catch(Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
        $user->password = Hash::make($request->input('new_password'));
        $user->is_password_changed = 1;
        $user->save();
        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
