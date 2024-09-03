<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimonial::all();
        return view('admin.testimonial.index', $data);
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        try {
            $checkCount = Testimonial::count();
            if($checkCount >= 4) {
                return redirect()->back()->with('error','You have added maximum number of testimonial '. $checkCount);
            }
            $blog = new Testimonial;
            $blog->name = $request->name;
            $blog->designation = $request->designation;
            $blog->rating = $request->rating;
            $blog->feedback = $request->feedback;
            if ($request->has('profile_image')) {
                $image = $request->file('profile_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/testimonial'), $imageName);
                $blog->profile_image = $imageName;
            }
            $blog->save();
            return redirect()->back()->with('success', 'Testimonial crated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Testimonial::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Testimonial Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
