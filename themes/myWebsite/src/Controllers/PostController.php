<?php

namespace Themes\myWebsite\src\Controllers;

use App\Models\Admin;
use App\Models\AdminRole;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\Taggabl;
use App\Notifications\CommentPostCreated;
use Codedge\Updater\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('admin')->published()->latest()->paginate(10);
        $posts->load(['comments' => function ($query) {
            $query->whereNull('comment_id')->where('status', 'accepted');
        }]);
        $most_view_posts = Post::orderBy('view', 'desc')->take(5)->get();
        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->orderby('ordering','asc')->get();
        $tags=Tag::where('type','post')->get();

        return view('front::posts.index', compact('posts','latest_posts','categories','tags','most_view_posts'));
    }

    public function category(Category $category)
    {


        if ($category->type != 'postcat') {
            abort(404);
        }
        $categories_id=PostCategory::where('category_id',$category->id)->get();
        $cat_id=[];
        foreach ($categories_id as $category_id){
            $cat_id[]=$category_id->post_id;
        }
        $cat_id=array_unique($cat_id);
        $most_view_posts = Post::orderBy('view', 'desc')->take(5)->get();
        $posts = Post::published()->whereIn('id', $cat_id)->latest()->paginate(9);
        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->orderby('ordering','asc')->get();
        $tags=Tag::where('type','post')->get();

        return view('front::posts.index', compact('posts','most_view_posts','latest_posts','categories','tags'));
    }
    public function search(Request $request)
    {
        if ($request->key==""){
            return redirect('/posts');
        }
        $posts = Post::published()->where('title', 'like','%'.$request->key.'%')->latest()->paginate(10);

        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->orderby('ordering','asc')->get();
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
        $most_view_posts = Post::orderBy('view', 'desc')->take(5)->get();
        $latest_posts    = Post::latest()->take(5)->get();
        $categories=Category::where('type','postcat')->orderby('ordering','asc')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::posts.index', compact('posts','most_view_posts','latest_posts','categories','tags','tag'));
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
        $latest_posts_2    = Post::latest()->whereNotIn('id',[$blog->id])->take(2)->get();
        $categories=Category::where('type','postcat')->orderby('ordering','asc')->get();
        $tags=Tag::where('type','post')->get();
        return view('front::posts.show', compact('blog', 'comments_count', 'most_view_posts', 'latest_posts','latest_posts_2','categories','tags'));
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
        // Notification
        $role=Role::where('slug','نویسنده')->first();
        $admin_roles=AdminRole::where('role_id',$role->id)->get();
        $admins=[];
        foreach ($admin_roles as $admin_role){
            $admins[]=$admin_role->admin_id;
        }
        $creatorAdmin=['1'];
        $admins=array_merge($admins,$creatorAdmin);
        $admins=array_unique($admins);
        $admins = Admin::whereIn('id', $admins)->get();
        Notification::send($admins,new CommentPostCreated($comment));
        // Notification

        session()->put('success','نظر شما با موفقیت ثبت شد و بعد از تایید مدیر در سایت نمایش داه می شود.');
        return redirect('/blogs/'.$blog->slug.'/#comment');
    }
}
