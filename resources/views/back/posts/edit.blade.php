@extends('back.layouts.master')

@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb no-border">
                                    <li class="breadcrumb-item">مدیریت
                                    </li>
                                    <li class="breadcrumb-item">مدیریت وبلاگ
                                    </li>
                                    <li class="breadcrumb-item active">ویرایش نوشته
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">ویرایش نوشته </h4>
                    </div>

                    <div id="main-card" class="card-content">
                        <div class="card-body">
                            <div class="col-12 col-md-10 offset-md-1">
                                <form class="form" id="post-edit-form" action="{{ route('admin.posts.update', ['post' => $post]) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>عنوان</label>
                                                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>دسته بندی ها</label>

                                                    <select class="form-control product-categories" name="categories[]" multiple>
                                                        @foreach ($categories as $category)
                                                            @php $postCat=\App\Models\PostCategory::where(['post_id'=>$post->id,'category_id'=>$category->id])->first(); @endphp
                                                            <option
                                                                    class="l{{ $category->parents()->count() + 1 }} {{ $category->categories()->count() ? 'non-leaf' : '' }}"
                                                                    data-pup="{{ $category->category_id }}"
                                                                    {{ $postCat ? 'selected' : '' }}
                                                                    value="{{ $category->id }}">{{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>url</label>
                                                    <input id="slug" type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                                                    <p>
                                                        <small >
                                                            <a id="generate-post-slug" href="#">ایجاد خودکار</a>
                                                            <span id="slug-spinner" class="spinner-grow spinner-grow-sm text-success" role="status" style="display: none;">
                                                                <span class="sr-only">Loading...</span>
                                                            </span>
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>زبان انتشار</label>
                                                    <select name="language" id="language" class="form-control">
                                                        <option value="fa" @if($post->language == "fa") selected @endif>فارسی</option>
                                                        <option value="en" @if($post->language == "en") selected @endif>انگلیسی</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">محتوا</label>
                                                    <textarea id="content" class="form-control" rows="3" name="content">{{ $post->content }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>عنوان سئو</label>
                                                    <input type="text" class="form-control" name="meta_title" value="{{ $post->meta_title }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>تاریخ انتشار</label>
                                                    <input autocomplete="off" type="text" class="form-control" id="publish_date_picker" value="{{ $post->publish_date ? tverta($post->publish_date)->timestamp : '' }}">
                                                    <input type="hidden" name="publish_date" id="publish_date" value="{{ $post->publish_date ? tverta($post->publish_date) : '' }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>توضیحات سئو</label>
                                                    <textarea class="form-control" name="meta_description" rows="3">{{ $post->meta_description }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <fieldset class="form-group">
                                                    <label>کلمات کلیدی</label>
                                                    <input id="tags" type="text" name="tags" class="form-control" value="{{ $post->getTags }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <fieldset class="form-group">
                                                    <label>تصویر شاخص</label>

                                                    <input type="text" id="image_label"
                                                           class="form-control display-hidden" name="image"
                                                           aria-label="Image" aria-describedby="button-image" value="{{@$post->image}}">

                                                    <span class="remove-img-uploader @if(!$post->image)display-hidden @endif">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                    <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image">
                                                        <div class="img-uploader @if(!$post->image)display-hidden @endif">
                                                            <img src="{{asset($post->image)}}">
                                                        </div>
                                                        <div class="dz-message">برای آپلود کلیک کنید</div>
                                                    </div>
                                                    <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.postImage') }}</span> پیکسل میباشد.</small></p>

                                                </fieldset>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" name="published" {{ $post->published ? 'checked' : '' }}>
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span>انتشار نوشته؟</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ویرایش نوشته</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Description -->

            </div>
        </div>
    </div>

@endsection

@include('back.partials.plugins', ['plugins' => ['ckeditor', 'jquery-tagsinput', 'jquery-ui', 'persian-datepicker', 'jquery.validate']])

@push('scripts')
    <script src="{{ asset('back/assets/js/pages/posts/all.js') }}"></script>
    <script src="{{ asset('back/assets/js/pages/posts/edit.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
            $('#button-image .img-uploader').removeClass('display-hidden');
            $('.remove-img-uploader').removeClass('display-hidden');
            $('#button-image img').attr('src', $url)
        }

        $('.remove-img-uploader').click(function () {
            $('#button-image .img-uploader').addClass('display-hidden');
            $('.remove-img-uploader').addClass('display-hidden');
            document.getElementById('image_label').value = null;
        })
    </script>
@endpush
