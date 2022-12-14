<?php

namespace App\Http\Controllers\Back;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Banner::class, 'banner');
    }

    public function index()
    {
        $banners = Banner::orderBy('ordering')->get();

        return view('back.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('back.banners.create');
    }

    public function store(Request $request)
    {
        // 'image' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
        $this->validate($request, [
            'image' =>'required',
            'group' => 'required',
            'title' => 'nullable',
            'description' => 'nullable',
        ]);

/*
        $file = $request->image;
        $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $request->image->storeAs('banners', $name);*/

        Banner::create([
            'link' => $request->link,
            'group' => $request->group,
            'published' => $request->published ? true : false,
            'image' => $request->image,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        toastr()->success('بنر با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(Banner $banner)
    {
        return view('back.banners.edit', compact('banner'));
    }

    public function update(Banner $banner, Request $request)
    {
        //'image' => 'mimes:jpeg,jpg,png,gif|max:2048',
        $this->validate($request, [
           'image' => 'required',
            'group' => 'required'
        ]);

        /* if ($request->hasFile('image')) {

           if ($banner->image) {
               Storage::disk('public')->delete($banner->image);
           }

           /*e = $request->image;
           $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
           $request->image->storeAs('banners', $name);

            $banner->image = $request->image;
            $banner->save();
        }*/

        $banner->update([
            'link' => $request->link,
            'group' => $request->group,
            'published' => $request->published ? true : false,
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        toastr()->success('بنر با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return response('success');
    }

    public function sort(Request $request)
    {
        $this->authorize('banners.update');

        $this->validate($request, [
            'banners' => 'required|array'
        ]);

        $i = 1;

        foreach ($request->banners as $banner) {
            Banner::findOrFail($banner)->update([
                'ordering' => $i++,
            ]);
        };

        return response('success');
    }
}
