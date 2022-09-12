<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Slider::class, 'slider');
    }

    public function index()
    {
        $sliders = Slider::orderBy('ordering')->get();

        return view('back.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('back.sliders.create');
    }

    public function store(Request $request)
    {
        //'image' => 'mimes:jpeg,jpg,png,gif,svg|required|max:2048',
        $this->validate($request, [
            'image' =>'required',
            'group' => 'required'
        ]);

        /*$file = $request->image;
        $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $request->image->storeAs('sliders', $name);*/

        Slider::create([
            'title'       => $request->title,
            'link'        => $request->link,
            'motionTitle'        => $request->motionTitle,
            'group'       => $request->group,
            'description' => $request->description,
            'published'   => $request->published ? true : false,
            'image'       => $request->image
        ]);

        toastr()->success('اسلایدر با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(Slider $slider)
    {
        return view('back.sliders.edit', compact('slider'));
    }

    public function update(Slider $slider, Request $request)
    {
        //  'image' => 'mimes:jpeg,jpg,png,gif|max:2048',
        $this->validate($request, [
            'image' =>'required',
            'group' => 'required'
        ]);

        /*if ($request->hasFile('image')) {

            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }

            $file = $request->image;
            $name = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $request->image->storeAs('sliders', $name);

            $slider->image = '/uploads/sliders/' . $name;
            $slider->save();
        }*/

        $slider->update([
            'title'       => $request->title,
            'link'        => $request->link,
            'motionTitle'        => $request->motionTitle,
            'group'       => $request->group,
            'description' => $request->description,
            'published'   => $request->published ? true : false,
            'image'       => $request->image
        ]);

        toastr()->success('اسلایدر با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return response('success');
    }

    public function sort(Request $request)
    {
        $this->authorize('sliders.update');

        $this->validate($request, [
            'sliders' => 'required|array'
        ]);

        $i = 1;

        foreach ($request->sliders as $slider) {
            Slider::findOrFail($slider)->update([
                'ordering' => $i++,
            ]);
        };

        return response('success');
    }
}
