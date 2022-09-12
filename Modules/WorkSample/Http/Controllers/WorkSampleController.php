<?php

namespace Modules\WorkSample\Http\Controllers;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Modules\WorkSample\Entities\WorkSample;
use Modules\WorkSample\Entities\WorkSampleCategory;
use Modules\WorkSample\Entities\WorkSampleTechnology;
use Modules\WorkSample\Http\Requests\StoreWorkSamplesRequest;
use Modules\WorkSample\Http\Requests\UpdateWorkSamplesRequest;
use Gate;

class WorkSampleController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('workSamples.index'),403,'شما به این بخش دسترسی ندارید');
        $workSamples = WorkSample::latest()->paginate(10);
        return view('worksample::workSample.index',compact('workSamples'));
    }

    public function create(Request $request)
    {
        abort_unless(Gate::allows('workSamples.create'),403,'شما به این بخش دسترسی ندارید');
        $categories = Category::where('type', 'workSampleCat')->orderBy('ordering')->get();
        $copy_product = $request->product ? WorkSample::where('slug', $request->product)->first() : null;
        $technologies = WorkSampleTechnology::all();
        return view('worksample::workSample.create', compact('categories','copy_product','technologies'));
    }

    public function store(StoreWorkSamplesRequest $request)
    {
        //$data=  $request->validated();
        $data=new WorkSample();
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
        $data->summary  = $request->input('summary');
        $data->content  = $request->input('content');
        $data->meta_title  = $request->meta_title;
        $data->meta_description  = $request->meta_description;
        //$data->tags  = $request->tags;
        $data->publish_date  = $request->publish_date;
        $data->applicant  = $request->applicant;
        $data->webSite  = $request->webSite;
        $data->place = $request->place;
        $data->admin_id    = auth('adminPanel')->user()->id;

        /*      if ($request->hasFile('image')) {
                  $file          = $request->image;
                  $name          = uniqid() . '.' . $file->getClientOriginalExtension();
                  $image         = $request->image->storeAs('posts', $name);
                  $data['image'] = '/uploads/' . $image;
              }*/

        $data->save();
        //WorkSample::create($data);


        $data->Categories()->attach($request->categories);
        $data->technologies()->attach($request->technologies);
        toastr()->success('نمونه کار با موفقیت ایجاد شد.');

        return response("success");
    }

    public function edit(WorkSample $workSample)
    {
        abort_unless(Gate::allows('workSamples.update'),403,'شما به این بخش دسترسی ندارید');
        $categories = Category::where('type', 'workSampleCat')->orderBy('ordering')->get();
        $technologies = WorkSampleTechnology::all();
        return view('worksample::workSample.edit', compact('workSample', 'categories','technologies'));
    }

    public function update(UpdateWorkSamplesRequest $request, WorkSample $workSample)
    {
        $data = $request->validated();

        if ($data['publish_date']) {
            $data['publish_date'] = Verta::parse($request->publish_date)->datetime();
        }else{
            $data['publish_date'] = Carbon::now()->format('Y-m-d H:00:00');
        }
        $data['slug']      = $data['slug'] ?: $data['title'];
        $data['published'] = $request->has('published');
        $data['image'] = $request->image;
        $data['summary'] = $request->summary;
        $data['language'] = $request->language;
        $data['applicant'] = $request->applicant;
        $data['webSite'] = $request->webSite;
        $data['place'] = $request->place;
        /*      if ($request->hasFile('image')) {
                  $file          = $request->image;
                  $name          = uniqid() . '.' . $file->getClientOriginalExtension();
                  $image         = $request->image->storeAs('posts', $name);
                  $data['image'] = '/uploads/' . $image;

                  Storage::disk('public')->delete($workSample->image);
              } else {
                  $data['image'] = $workSample->image;
              }*/
        $workSample->Categories()->sync($request->categories);
        $workSample->technologies()->sync($request->technologies);
        $workSample->update($data);

        toastr()->success('نمونه کار با موفقیت ویرایش شد.');

        return response("success");
    }

    public function destroy(WorkSample $workSample)
    {
        //Storage::disk('public')->delete($workSample->image);
        WorkSampleCategory::where('work_sample_id',$workSample->id)->delete();
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

        //$this->authorize('worksample::workSamples.category');
        abort_unless(Gate::allows('workSamples.category'),403,'شما به این بخش دسترسی ندارید');
        $categories = Category::where('type', 'workSampleCat')->whereNull('category_id')
            ->with('childrenCategories')
            ->orderBy('ordering')
            ->get();

        return view('worksample::workSample.categories', compact('categories'));
    }

    public function technology()
    {
        abort_unless(Gate::allows('workSamples.technology'),403,'شما به این بخش دسترسی ندارید');
        $technologies=WorkSampleTechnology::latest()->paginate(10);
        return view('worksample::technology.index', compact('technologies'));
    }
    public function technology_create()
    {
        abort_unless(Gate::allows('workSamples.technology'),403,'شما به این بخش دسترسی ندارید');
        return view('worksample::technology.create');
    }

    public function technology_store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $item=new WorkSampleTechnology();
        $item->name=$request->name;
        $item->image=$request->image;
        $item->save();

        toastr()->success('فناوری با موفقیت ایجاد شد.');

        return response("success");
    }

    public function technology_edit(WorkSampleTechnology $technology)
    {
        abort_unless(Gate::allows('workSamples.technology'),403,'شما به این بخش دسترسی ندارید');
        return view('worksample::technology.edit', compact('technology'));
    }

    public function technology_update(Request $request,$id)
    {

        $request->validate([
            'name'=>'required',
        ]);

        $item=WorkSampleTechnology::find($id);
        $item->name=$request->name;
        $item->image=$request->image;
        $item->save();

        toastr()->success('فناوری با موفقیت ویرایش شد.');

        return response("success");
    }

    public function technology_destroy(WorkSampleTechnology $technology)
    {

        $technology->delete();

        return response('success');
    }

    public function ajax_get(Request $request)
    {
        if ($request->term) {
            $brands = WorkSampleTechnology::where('name', 'like', '%' . $request->term . '%')->pluck('name')->toArray();

            return $brands;
        }
    }
}
