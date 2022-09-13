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

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('admin')->published()->latest()->paginate(10);
        $posts->load(['comments' => function ($query) {
            $query->whereNull('comment_id')->where('status', 'accepted');
        }]);
        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::posts.index', compact('posts','latest_posts','categories','tags'));
    }

    public function category(Category $category)
    {

        if ($category->type != 'postcat') {
            abort(404);
        }

        $posts = Post::published()->whereIn('category_id', $category->allChildCategories())->latest()->paginate(9);
        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        dd($posts);
        return view('front::posts.index', compact('posts','latest_posts','categories','tags'));
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
        return view('front::posts.index', compact('posts','latest_posts','categories','tags'));
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
        return view('front::posts.index', compact('posts','latest_posts','categories','tags','tag'));
    }

    public function show(Post $blog)
    {
        if (!$blog->isShowable()) {
            abort(404);
        }

        $comments_count = $blog->comments()->where('status', 'accepted')->count();

        $blog->load(['comments' => function ($query) {
            $query->whereNull('comment_id')->where('status', 'accepted')->orderby('id','desc')->with('admin');
        }]);

        $blog->update([
            'view' => $blog->view + 1
        ]);
        $most_view_posts = Post::orderBy('view', 'desc')->take(5)->get();
        $latest_posts    = Post::latest()->take(5)->get();
        $latest_posts_2    = Post::latest()->take(2)->get();
        $categories=Category::where('type','postcat')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::posts.show', compact('blog', 'comments_count', 'most_view_posts', 'latest_posts','latest_posts','latest_posts_2','categories','tags'));
    }

    public function comments(Post $blog, Request $request)
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
        $comment = $blog->comments()->create([
            'body'       => $request->body,
            'name'       => $request->name,
            'email'       => $request->email,
            'commentable_id'       => $blog->id,
            'commentable_type'       => "App\Models\Post",
            'comment_id' => $request->comment_id,
        ]);

        if(Auth::guard('adminPanel')->check()){
            $comment->update([
                'status' => 'accepted'
            ]);
        }
        session()->put('success','نظر شما با موفقیت ثبت شد و بعد از تایید مدیر در سایت نمایش داه می شود.');
        return redirect('/blogs/'.$blog->slug.'/#comment');
    }
}
