<?php

namespace App\Http\Controllers\Back;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Post\StorePostRequest;
use App\Http\Requests\Back\Post\UpdatePostRequest;
use App\Models\Post;
use App\Models\WorkSample;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkSamplesController extends Controller
{
    public function __construct()
    {
        //$this->authorizeResource(WorkSample::class, 'workSample');
    }

    public function index()
    {
        $workSamples = WorkSample::latest()->paginate(10);
        return view('back.workSample.index', compact('workSamples'));
    }

    public function create()
    {
        $categories = Category::where('type', 'workSampleCat')->orderBy('ordering')->get();

        return view('back.workSample.create', compact('categories'));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        if ($data['publish_date']) {
            $data['publish_date'] = Verta::parse($request->publish_date)->datetime();
        }

        $data['slug']      = $data['slug'] ?: $data['title'];
        $data['published'] = $request->has('published');
        $data['image'] = $request->image;
        $data['language'] = $request->language;
        $data['user_id']   = auth('adminPanel')->user()->id;

  /*      if ($request->hasFile('image')) {
            $file          = $request->image;
            $name          = uniqid() . '.' . $file->getClientOriginalExtension();
            $image         = $request->image->storeAs('posts', $name);
            $data['image'] = '/uploads/' . $image;
        }*/

        WorkSample::create($data);

        toastr()->success('نمونه کار با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(WorkSample $workSample)
    {
        $categories = Category::where('type', 'postcat')->orderBy('ordering')->get();

        return view('back.workSample.edit', compact('workSample', 'categories'));
    }

    public function update(UpdatePostRequest $request, WorkSample $workSample)
    {
        $data = $request->validated();

        if ($data['publish_date']) {
            $data['publish_date'] = Verta::parse($request->publish_date)->datetime();
        }

        $data['slug']      = $data['slug'] ?: $data['title'];
        $data['published'] = $request->has('published');
        $data['image'] = $request->image;
        $data['language'] = $request->language;
  /*      if ($request->hasFile('image')) {
            $file          = $request->image;
            $name          = uniqid() . '.' . $file->getClientOriginalExtension();
            $image         = $request->image->storeAs('posts', $name);
            $data['image'] = '/uploads/' . $image;

            Storage::disk('public')->delete($workSample->image);
        } else {
            $data['image'] = $workSample->image;
        }*/

        $workSample->update($data);

        toastr()->success('نمونه کار با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(WorkSample $workSample)
    {
        Storage::disk('public')->delete($workSample->image);

        $workSample->delete();
    }

    public function generate_slug(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $slug = SlugService::createSlug(WorkSample::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    //------------- Category methods

    public function categories()
    {
        $this->authorize('workSamples.category');

        $categories = Category::where('type', 'workSampleCat')->whereNull('category_id')
            ->with('childrenCategories')
            ->orderBy('ordering')
            ->get();

        return view('back.workSample.categories', compact('categories'));
    }
}
