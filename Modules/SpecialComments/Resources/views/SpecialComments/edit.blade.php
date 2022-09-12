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
                                    <li class="breadcrumb-item">مدیریت نظرات ویژه
                                    </li>
                                    <li class="breadcrumb-item active">ویرایش نظر
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
                        <h4 class="card-title">ایجاد نظر جدید</h4>
                    </div>

                    <div id="main-card" class="card-content">
                        <div class="card-body">
                            <div class="col-12 col-md-10 offset-md-1">
                                <form class="form" id="post-edit-form" action="{{ route('admin.special-comments.update', ['special_comment' => $special_comment]) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>نام و نام خانوادگی</label>
                                                    <input type="text" class="form-control" name="name" value="{{$special_comment->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>امتیاز</label>
                                                    <select name="rate" id="language" class="form-control">
                                                        @for($i=1;$i<=5;$i++)
                                                        <option @if($i==$special_comment->rate) selected @endif value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">متن نظر</label>
                                                    <textarea  class="form-control" rows="3" name="comment">{{$special_comment->comment}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">


                                            <div class="col-12 col-md-3">
                                                <fieldset class="form-group">
                                                    <label>آواتار</label>

                                                    <input type="text" id="image_label"
                                                           class="form-control display-hidden" name="image"
                                                           aria-label="Image" aria-describedby="button-image" value="{{@$special_comment->avatar}}">

                                                    <span class="remove-img-uploader @if(!$special_comment->avatar)display-hidden @endif">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                    <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image">
                                                        <div class="img-uploader @if(!$special_comment->avatar)display-hidden @endif">
                                                            <img src="{{asset($special_comment->avatar)}}">
                                                        </div>
                                                        <div class="dz-message">برای آپلود کلیک کنید</div>
                                                    </div>
                                                    <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.postImage') }}</span> پیکسل میباشد.</small></p>

                                                </fieldset>
                                            </div>



                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ویرایش نظر</button>
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
    <script src="{{ asset('back/assets/js/pages/SpecialComments/all.js') }}"></script>
    <script src="{{ asset('back/assets/js/pages/SpecialComments/edit.js') }}"></script>
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
