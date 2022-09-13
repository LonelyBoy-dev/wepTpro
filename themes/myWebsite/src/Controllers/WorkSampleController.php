<?php

namespace Themes\myWebsite\src\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Taggabl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Modules\WorkSample\Entities\WorkSample;

class WorkSampleController extends Controller
{
    public function index()
    {
        $items = WorkSample::with('admin')->published()->latest()->paginate(10);
        $items->load(['comments' => function ($query) {
            $query->whereNull('comment_id')->where('status', 'accepted');
        }]);
        $latest_posts    = WorkSample::latest()->take(5)->get();
        $categories=Category::where('type','workSampleCat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::workSample.index', compact('items','latest_posts','categories','tags'));
    }

    public function category(Category $category)
    {


        if ($category->type != 'workSampleCat') {
            abort(404);
        }

        //$items = WorkSample::published()->whereIn('category_id', $category->allChildCategories())->latest()->paginate(5);

        $items = WorkSample::whereHas('Categories', function ($q) use ($category) {
            $q->where('slug', $category->slug);
        })->paginate(6);
        $latest_posts    = WorkSample::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::workSample.category', compact('items','latest_posts','categories','tags'));
    }
    public function search(Request $request)
    {
        if ($request->key==""){
            return redirect('/posts');
        }
        $posts = Post::published()->where('title', 'like','%'.$request->key.'%')->latest()->paginate(10);

        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::workSample.index', compact('posts','latest_posts','categories','tags'));
    }
    public function tag(Tag $tag)
    {
        $Taggable=Taggabl::where('tag_id',$tag->id)->get();
        $post_id=[];
        foreach ($Taggable as $item){
            $post_id[]=$item->taggable_id;
        }
        $posts = Post::published()->whereIn('id', $post_id)->latest()->paginate(10);

        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::workSample.index', compact('posts','latest_posts','categories','tags','tag'));
    }

    public function show(WorkSample $workSample)
    {
        if (!$workSample->isShowable()) {
            abort(404);
        }

        $comments_count = $workSample->comments()->where('status', 'accepted')->count();

        $workSample->load(['comments' => function ($query) {
            $query->whereNull('comment_id')->where('status', 'accepted')->orderby('id','desc')->with('admin');
        }]);
        $workSample->load(['technologies' => function ($query) {}]);

        $workSample->update([
            'view' => $workSample->view + 1
        ]);
        $most_view_posts = Post::orderBy('view', 'desc')->take(5)->get();
        $latest_posts    = Post::latest()->take(5)->get();
        $latest_posts_2    = Post::latest()->take(2)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::workSample.show', compact('workSample', 'comments_count', 'most_view_posts', 'latest_posts','latest_posts','latest_posts_2','categories','tags'));
    }

    public function comments(WorkSample $workSample, Request $request)
    {
        $this->validate($request, [
            'body'       => 'required|string|max:1000',
            'comment_id' => [
                'nullable',
                Rule::exists('comments', 'id')->where(function ($query) {
                    $query->where('comment_id', null);
                }),
            ],
        ]);
        $comment = $workSample->comments()->create([
            'body'       => $request->body,
            'name'       => $request->name,
            'email'       => $request->email,
            'commentable_id'       => $workSample->id,
            'commentable_type'       => "Modules\WorkSample\Entities\WorkSample",
            'comment_id' => $request->comment_id,
        ]);

        if(Auth::guard('adminPanel')->check()){
            $comment->update([
                'status' => 'accepted'
            ]);
        }
        session()->put('success','نظر شما با موفقیت ثبت شد و بعد از تایید مدیر در سایت نمایش داه می شود.');
        return redirect('/work-samples/'.$workSample->slug.'/#comment');
    }
}
