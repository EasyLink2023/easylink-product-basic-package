<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blogs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blogs::orderBy('id', 'desc')->get();
        return view('admin.blog.index', $data);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        try {
            $blog = new Blogs;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->tags = $request->tags;
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->content = $request->content;
            $blog->created_by = $request->created_by;
            if ($request->has('cover_image')) {
                $image = $request->file('cover_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/blogs'), $imageName);
                $blog->cover_image = $imageName;
            }
            $blog->save();
            return redirect()->back()->with('success', 'Blog crated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function update(Request $request)
    {
        try {
            $blog = Blogs::find($request->id);
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->tags = $request->tags;
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->content = $request->content;
            $blog->created_by = $request->created_by;
            if ($request->has('cover_image')) {
                $image = $request->file('cover_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/blogs'), $imageName);
                $blog->cover_image = $imageName;
            }
            $blog->save();
            return redirect()->back()->with('success', 'Blog updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $data['blog'] = Blogs::find($id);
        return view('admin.blog.edit', $data);
    }

    public function destroy($id)
    {
        try {
            $data = Blogs::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Blog Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
