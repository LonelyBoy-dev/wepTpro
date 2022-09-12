<?php

namespace Modules\Features\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Features\Entities\Feature;
use Modules\WorkSample\Entities\WorkSample;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gate;

class FeaturesController extends Controller
{

    public function index()
    {
        abort_unless(Gate::allows('workSamples.features'),403,'شما به این بخش دسترسی ندارید');
        $items = Feature::orderBy('ordering')->paginate(10);
        return view('features::index',compact('items'));
    }


    public function create(Request $request)
    {
        abort_unless(Gate::allows('workSamples.features'),403,'شما به این بخش دسترسی ندارید');
        return view('features::create');
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);



        $item=new Feature();
        $item->title=$request->title;
        $item->body=$request->body;
        $item->image=$request->image;
        $item->published=$request->has('published');
        $item->save();

        toastr()->success('ویژگی با موفقیت ایجاد شد.');

        return response("success");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('features::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Feature $feature)
    {
        abort_unless(Gate::allows('workSamples.features'),403,'شما به این بخش دسترسی ندارید');
        return view('features::edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);


        $item=Feature::find($id);
        $item->title=$request->title;
        $item->body=$request->body;
        $item->image=$request->image;
        $item->published=$request->has('published');;
        $item->save();

        toastr()->success('ویژگی با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();

        return response('success');
    }


    public function sort(Request $request)
    {
        $request->validate([
            'widgets' => 'required|array'
        ]);
        $i = 1;
        foreach ($request->widgets as $widget) {
            Feature::find($widget)->update(['ordering' => $i++]);
        };

        return response('success');
    }
}
