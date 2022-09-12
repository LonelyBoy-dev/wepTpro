<?php

namespace App\Http\Controllers\Back;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Post\StorePostRequest;
use App\Http\Requests\Back\Post\UpdatePostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('back.posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        $categories = Category::where('type', 'postcat')->orderBy('ordering')->get();
        $copy_product = $request->product ? Post::where('slug', $request->product)->first() : null;
        return view('back.posts.create', compact('categories','copy_product'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        $data=new Post();
        if ($data->publish_date ) {
            $data->publish_date  = Verta::parse($request->publish_date)->datetime();
        }else{
            $data->publish_date  = Carbon::now()->format('Y-m-d H:00:00');
        }

        $data->title  = $request->title ;
        $data->slug  = $data->slug  ?: $data->title ;
        $data->published  = $request->has('published');
        $data->image  = $request->image;
        $data->language  = $request->language;
        $data->content  = $request->input('content');
        $data->meta_title  = $request->meta_title;
        $data->edit  = "YES";
        $data->meta_description  = $request->meta_description;
        //$data->tags  = $request->tags;
        $data->publish_date  = $request->publish_date;
        $data->admin_id    = auth('adminPanel')->user()->id;


        $data->save();
        $data->Categories()->attach($request->categories);
        toastr()->success('نوشته با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(Post $post)
    {
        $categories = Category::where('type', 'postcat')->orderBy('ordering')->get();

        return view('back.posts.edit', compact('post', 'categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($data['publish_date']) {
            $data['publish_date'] = Verta::parse($request->publish_date)->datetime();
        }

        $data['slug']      = $data['slug'] ?: $data['title'];
        $data['published'] = $request->has('published');
        $data['image'] = $request->image;
        $data['language'] = $request->language;

        $post->update($data);
        $post->Categories()->sync($request->categories);
        toastr()->success('نوشته با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(Post $post)
    {
        //Storage::disk('public')->delete($post->image);
        PostCategory::where('post_id',$post->id)->delete();
        $taggables = DB::table('taggables')->where('taggable_id', $post->id)->get();
        foreach ($taggables as $taggabl){
            DB::table('tags')->where('id', $taggabl->tag_id)->delete();
            DB::table('taggables')->where('id', $taggabl->id)->delete();
        }
        $post->delete();
    }

    public function generate_slug(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    //------------- Category methods

    public function categories()
    {
        $this->authorize('posts.category');

        $categories = Category::where('type', 'postcat')->whereNull('category_id')
            ->with('childrenCategories')
            ->orderBy('ordering')
            ->get();

        return view('back.posts.categories', compact('categories'));
    }
}
