<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $data['faqs'] = Faqs::orderBy('id', 'desc')->get();
        return view('admin.faqs.index', $data);
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        try {
            $checkCount = Faqs::count();
            if($checkCount >= 6) {
                return redirect()->back()->with('error','You have added maximum number of faqs '. $checkCount);
            }
            $faq = new Faqs;
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            return redirect()->back()->with('success', 'Faq crated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Faqs::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Faqs Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
