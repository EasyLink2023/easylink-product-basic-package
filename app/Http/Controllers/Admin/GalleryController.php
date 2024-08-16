<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $data['galleries'] = Gallery::orderBy('id', 'desc')->get();
        return view('admin.gallery.index', $data);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image_url.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);
            $files = $request->file('image_url');
            foreach ($files as $file) {
                $gallery = new Gallery;
                $imageName = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('asset/gallery'), $imageName);
                $gallery->image_url = $imageName;
                $gallery->save();
            }
            return back()->with('success', 'Images uploaded successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            $imagePath = public_path('asset/gallery/').$gallery->image_url;
            if (file_exists($imagePath)) {
                unlink($imagePath);
                $gallery->delete();
            }
            return back()->with('success', 'Image deleted successfully!');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
