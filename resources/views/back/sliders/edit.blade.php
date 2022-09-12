@extends('back.layouts.master')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('back/app-assets/plugins/jquery-ui/jquery-ui.css') }}">
    <style>
        .file-uploader.dropzone .dz-message{
            top: 14%;
        }
        .file-uploader.dropzone .dz-message:before{
            top: 100px;
        }
    </style>
@endpush

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
                                <li class="breadcrumb-item">مدیریت اسلایدرها
                                </li>
                                <li class="breadcrumb-item active">ویرایش اسلایدر
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Description -->
            <section class="card">
                <div class="card-header">
                    <h4 class="card-title">ویرایش اسلایدر </h4>
                </div>
                
                <div id="main-card" class="card-content">
                    <div class="card-body">
                        <div class="col-12 col-md-10 offset-md-1">
                            <form class="form" id="slider-edit-form" action="{{ route('admin.sliders.update', ['slider' => $slider]) }}" method="slider">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <fieldset class="form-group">
                                                <label>تصویر شاخص</label>

                                                <input type="text" id="image_label"
                                                       class="form-control display-hidden" name="image"
                                                       aria-label="Image" aria-describedby="button-image" value="{{@$slider->image}}">

                                                <span class="remove-img-uploader @if(!$slider->image)display-hidden @endif">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                     id="button-image">
                                                    <div class="img-uploader @if(!$slider->image)display-hidden @endif">
                                                        <img src="{{asset($slider->image)}}">
                                                    </div>
                                                    <div class="dz-message">برای آپلود کلیک کنید</div>
                                                </div>
                                                {{--  <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.postImage') }}</span> پیکسل میباشد.</small></p>--}}

                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>عنوان <small>(اختیاری)</small></label>
                                                <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>لینک <small>(اختیاری)</small></label>
                                                <input type="text" class="form-control slider-link ltr" name="link" value="{{ $slider->link }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <fieldset class="form-group">
                                                <label>عنوان حرکتی <small>(اختیاری)</small></label>
                                                <input id="motionTitle" type="text" name="motionTitle" class="form-control" value="{{ $slider->motionTitle }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="first-name-vertical">توضیحات <small>(اختیاری)</small></label>
                                                <textarea id="description" class="form-control" rows="4" name="description">{{ $slider->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>گروه</label>
                                                <select class="form-control" name="group">
                                                    @if (config('front.sliderGroups'))

                                                        @foreach (config('front.sliderGroups') as $sliderGroup)
                                                            <option value="{{ $sliderGroup['group'] }}" {{ ($slider->group == $sliderGroup['group']) ? 'selected' : '' }}>{{ $sliderGroup['name'] }} {{ $sliderGroup['size'] }}</option>
                                                        @endforeach
                                                        
                                                    @endif
                                                </select>
                                            </div>



                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" name="published" {{ $slider->published ? 'checked' : '' }}>
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span>انتشار اسلایدر؟</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ویرایش اسلایدر</button>
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
@include('back.partials.plugins', ['plugins' => [ 'jquery-tagsinput']])
@push('scripts') 
    <script src="{{ asset('back/app-assets/plugins/jquery-ui/jquery-ui.js') }}"></script>

    <script>
        var pages =  [
            @foreach($pages as $page)
                "/pages/{{ $page }}",
            @endforeach
        ];
    </script>

    <script src="{{ asset('back/assets/js/pages/sliders/edit.js') }}"></script>
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