<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\pageSeoData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    public function index()
    {
        $menus = Menu::select('url')->get();
        $urls = collect([
            ['loc' => url('/')],
            ['loc' => url('/blog')],
            ['loc' => url('/contact-us')],
        ]);
        $menuUrls = $menus->map(function ($menu) {
            return ['loc' => url("/{$menu->url}")];
        });
        $urls = $urls->merge($menuUrls);
        return view('admin.seo.index', ['urls' => $urls]);
    }

    public function edit($purl)
    {
        $url = base64_decode($purl);
        $data['pageData'] = pageSeoData::where('page_url', $url)->first();
        $data['url'] = $url;
        return view('admin.seo.edit', $data);
    }

    public function update(Request $request)
    {
        try {
            $seoData = pageSeoData::updateOrCreate(
                ['id' => $request->id],
                [
                    'page_url' => $request->page_url,
                    'title' => $request->title,
                    'description' => $request->description,
                    'keyword' => $request->keyword,
                ]
            );
            if ($seoData->wasRecentlyCreated) {
                $message = 'SEO data created successfully!';
            } else {
                $message = 'SEO data updated successfully!';
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
