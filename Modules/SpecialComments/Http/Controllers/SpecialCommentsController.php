<?php

namespace Modules\SpecialComments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SpecialComments\Entities\SpecialComment;

class SpecialCommentsController extends Controller
{
    public function __construct()
    {
        //$this->authorizeResource(WorkSample::class, 'workSample');
    }

    public function index()
    {
        $items = SpecialComment::latest()->paginate(10);
        return view('specialcomments::SpecialComments.index',compact('items'));
    }

    public function create(Request $request)
    {
        return view('specialcomments::SpecialComments.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ],[
            'comment.required'=>'فیلد متن نظر الزامی می باشد.'
        ]);

        $data=new SpecialComment();

        $data->name  = $request->name ;
        $data->rate  = $request->rate ;
        $data->avatar  = $request->image;
        $data->comment  = $request->comment;
        $data->save();
        toastr()->success('نطر با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(SpecialComment $special_comment)
    {
        return view('specialcomments::SpecialComments.edit', compact('special_comment'));
    }

    public function update(Request $request, SpecialComment $special_comment)
    {


        $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ],[
            'comment.required'=>'فیلد متن نظر الزامی می باشد.'
        ]);
        $special_comment->name  = $request->name ;
        $special_comment->rate  = $request->rate ;
        $special_comment->avatar  = $request->image;
        $special_comment->comment  = $request->comment;
        $special_comment->save();

        toastr()->success('نطر با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(SpecialComment $SpecialComment)
    {
        $SpecialComment->delete();
    }
}
