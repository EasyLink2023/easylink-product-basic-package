<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::orderBy('id', 'desc')->get();
        return view('admin.service.index', $data);
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        try {
            $checkCount = Service::count();
            if($checkCount >= 10) {
                return redirect()->back()->with('error','You have added maximum number of service '. $checkCount);
            }
            $service = new Service;
            $service->name = $request->name;
            $service->description = $request->description;
            if ($request->has('cover_image')) {
                $image = $request->file('cover_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/service'), $imageName);
                $service->cover_image = $imageName;
            }
            $service->save();
            return redirect()->back()->with('success', 'Service crated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function update(Request $request)
    {
        try {
            $service = Service::find($request->id);
            $service->name = $request->name;
            $service->description = $request->description;
            if ($request->has('cover_image')) {
                $image = $request->file('cover_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/service'), $imageName);
                $service->cover_image = $imageName;
            }
            $service->save();
            return redirect()->back()->with('success', 'Service updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $data['service'] = Service::find($id);
        return view('admin.service.edit', $data);
    }

    public function destroy($id)
    {
        try {
            $data = Service::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Service Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
