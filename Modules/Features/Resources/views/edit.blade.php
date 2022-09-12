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
                                <li class="breadcrumb-item">مدیریت فناوری ها
                                </li>
                                <li class="breadcrumb-item active">ویرایش فناوری
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
                    <h4 class="card-title">ویرایش فناوری </h4>
                </div>
                
                <div id="main-card" class="card-content">
                    <div class="card-body">
                        <div class="col-12 col-md-10 offset-md-1">
                            <form class="form" id="brand-edit-form" method="post" action="{{ route('admin.features.update', ['feature' => $feature]) }}">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin: 0 auto">
                                            <div class="form-group">
                                                <label>نام</label>
                                                <input type="text" class="form-control" name="title" value="{{ $feature->title }}">
                                            </div>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin: 0 auto">
                                            <div class="form-group">
                                                <label>توضیحات</label>
                                                <textarea class="form-control" name="body">{{ $feature->body }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6" style="margin: 0 auto">
                                            <fieldset class="form-group">
                                                <label>تصویر </label>

                                                <input type="text" id="image_label"
                                                       class="form-control display-hidden" name="image"
                                                       aria-label="Image" aria-describedby="button-image" value="{{@$feature->image}}">

                                                <span class="remove-img-uploader @if(!$feature->image)display-hidden @endif">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                     id="button-image">
                                                    <div class="img-uploader @if(!$feature->image)display-hidden @endif">
                                                        <img src="{{asset($feature->image)}}">
                                                    </div>
                                                    <div class="dz-message">برای آپلود کلیک کنید</div>
                                                </div>
                                                {{--<p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.postImage') }}</span> پیکسل میباشد.</small></p>--}}

                                            </fieldset>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <fieldset class="checkbox" style="margin: 0 auto">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" name="published" {{ $feature->published ? 'checked' : '' }}>
                                                <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                <span>انتشار نوشته؟</span>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-primary mb-1 waves-effect waves-light">ویرایش فناوری</button>
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

@push('scripts') 
    <script src="{{ asset('back/app-assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('back/app-assets/plugins/jquery-validation/localization/messages_fa.min.js') }}"></script>

    <script src="{{ asset('back/assets/js/pages/workSamples/features/edit.js') }}"></script>
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