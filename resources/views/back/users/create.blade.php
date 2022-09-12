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
                                    <li class="breadcrumb-item">مدیریت کاربران
                                    </li>
                                    <li class="breadcrumb-item active">ایجاد کاربر
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body">
                <!-- Description -->
                <section id="main-card" class="card">
                    <div class="card-header">
                        <h4 class="card-title">ایجاد کاربر جدید</h4>
                    </div>

                    <div id="main-card" class="card-content">
                        <div class="card-body">
                            <div class="col-12 col-md-10 offset-md-1">
                                <form class="form" id="user-create-form" action="{{ route('admin.users.store') }}"
                                      method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <fieldset class="form-group">
                                                    <label>تصویر</label>
                                                    <input type="text" id="image_label"
                                                           class="form-control display-hidden" name="image"
                                                           aria-label="Image" aria-describedby="button-image">

                                                    <span class="remove-img-uploader-profile display-hidden">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                    <div class="file-uploader-profile dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image">
                                                        <div class="img-uploader display-hidden">
                                                            <img src="">
                                                        </div>
                                                        <div class="dz-message">برای آپلود کلیک کنید</div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>نام</label>
                                                    <input type="text" class="form-control" name="first_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>نام خانوادگی</label>
                                                    <input type="text" class="form-control" name="last_name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>آدرس ایمیل</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>شماره همراه </label>
                                                    <input type="text" class="form-control ltr" name="username">
                                                </div>
                                            </div>

                                        </div>

                                        {{--  <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>نوع کاربری</label>
                                                      <select id="level" class="form-control" name="level">
                                                          <option value="user">کاربر عادی</option>
                                                          <option value="admin">مدیر وبسایت</option>
                                                      </select>
                                                  </div>
                                              </div>

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>تصویر</label>
                                                    <div class="custom-file">
                                                        <input id="image" type="file" accept="image/*" name="image" class="custom-file-input">
                                                        <label class="custom-file-label" for="image"></label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                      <div id="roles-div" class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>انتخاب نقش ها</label>
                                                    <select id="roles" class="form-control" name="roles[]" multiple>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>--}}

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>گذرواژه</label>
                                                    <input type="password" id="password" class="form-control"
                                                           name="password" readonly
                                                           onfocus="this.removeAttribute('readonly');">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>تکرار گذرواژه</label>
                                                    <input type="password" class="form-control user-link ltr"
                                                           name="password_confirmation" readonly
                                                           onfocus="this.removeAttribute('readonly');">
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" name="verified_at">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span>شماره تلفن تایید شده</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ایجاد
                                                    کاربر
                                                </button>
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

@include('back.partials.plugins', ['plugins' => ['jquery.validate']])

@php
    $help_videos = [
        config('general.video-helpes.users')
    ];
@endphp

@push('scripts')
    <script src="{{ asset('back/assets/js/pages/users/all.js') }}"></script>
    <script src="{{ asset('back/assets/js/pages/users/create.js') }}"></script>
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
            $('.remove-img-uploader-profile').removeClass('display-hidden');
            $('#button-image img').attr('src', $url)
        }

        $('.remove-img-uploader-profile').click(function () {
            $('#button-image .img-uploader').addClass('display-hidden');
            $('.remove-img-uploader-profile').addClass('display-hidden');
            document.getElementById('image_label').value = null;
        })
    </script>
@endpush
