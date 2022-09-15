@extends('back.layouts.master')

@push('styles')
    <style>
        .file-uploader.dropzone .dz-message{
            top: 23%;
        }
        .file-uploader.dropzone .dz-message:before{
            top: 80px;
        }
        .remove-img-uploader{
            top: 34px;
        }
        .file-uploader.dropzone img{
            max-width: 82%;
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
                                    <li class="breadcrumb-item">تنظیمات
                                    </li>
                                    <li class="breadcrumb-item active">تنظیمات کلی
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div id="main-card" class="card-content">
                            <div class="card-body">

                                <div class="tab-content">

                                    <form id="information-form" action="{{ route('admin.settings.information') }}" method="POST">
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <fieldset class="form-group">
                                                    <label>آیکون</label>

                                                    <input type="text" id="image_label"
                                                           class="form-control display-hidden" name="info_icon"
                                                           aria-label="Image" aria-describedby="button-image" value="{{ option('info_icon') }}">

                                                   <span class="remove-img-uploader @if(!option('info_icon'))display-hidden @endif">
                                                            <i class="fa fa-trash text-danger px-1"></i>
                                                    </span>

                                                    <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image">
                                                        <div class="img-uploader @if(!option('info_icon'))display-hidden @endif" style="text-align: center">
                                                            <img src="{{ option('info_icon') }}">
                                                        </div>
                                                        <div class="dz-message @if(option('info_icon'))display-hidden @endif">برای آپلود کلیک کنید</div>
                                                    </div>
                                                      <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.icon') }}</span> پیکسل میباشد.</small></p>

                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <fieldset class="form-group">
                                                    <label>لوگوی شرکت</label>

                                                    <input type="text" id="image_label2"
                                                           class="form-control display-hidden" name="info_logo"
                                                           aria-label="Image" aria-describedby="button-image" value="{{ option('info_logo') }}">

                                                    <span class="remove-img-uploader @if(!option('info_logo'))display-hidden @endif">
                                                             <i class="fa fa-trash text-danger px-1"></i>
                                                     </span>

                                                    <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image2">
                                                        <div class="img-uploader @if(!option('info_logo'))display-hidden @endif">
                                                            <img src="{{ option('info_logo') }}">
                                                        </div>
                                                        <div class="dz-message @if(option('info_logo'))display-hidden @endif">برای آپلود کلیک کنید</div>
                                                    </div>
                                                      <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.logo') }}</span> پیکسل میباشد.</small></p>

                                                </fieldset>
                                            </div>

                                            <div class="col-12 col-md-3">
                                                <fieldset class="form-group">
                                                    <label>لوگوی شرکت تیره</label>

                                                    <input type="text" id="image_label3"
                                                           class="form-control display-hidden" name="info_logo_dark"
                                                           aria-label="Image" aria-describedby="button-image" value="{{ option('info_logo_dark') }}">

                                                    <span class="remove-img-uploader @if(!option('info_logo_dark'))display-hidden @endif">
                                                             <i class="fa fa-trash text-danger px-1"></i>
                                                     </span>

                                                    <div class="file-uploader dropzone dropzone-area mb-2 ui-sortable dz-clickable"
                                                         id="button-image3">
                                                        <div class="img-uploader @if(!option('info_logo_dark'))display-hidden @endif">
                                                            <img src="{{ option('info_logo_dark') }}">
                                                        </div>
                                                        <div class="dz-message @if(option('info_logo_dark'))display-hidden @endif">برای آپلود کلیک کنید</div>
                                                    </div>
                                                      <p><small>بهترین اندازه <span class="text-danger">{{ config('front.imageSizes.logo') }}</span> پیکسل میباشد.</small></p>

                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عنوان وبسایت</label>
                                                        <input type="text" name="info_site_title" class="form-control" value="{{ option('info_site_title') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>تلفن</label>
                                                        <input type="text" name="info_tel" class="form-control" value="{{ option('info_tel') }}" >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>فکس</label>
                                                        <input type="text" name="info_fax" class="form-control" value="{{ option('info_fax') }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>کد پستی</label>
                                                        <input type="text" name="info_postal_code" class="form-control" value="{{ option('info_postal_code') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>استان</label>
                                                    <select id="province"  name="info_province_id" class="form-control">
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->id }}" @if($province->id == option('info_province_id')) selected @endif>{{ $province->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="city-div" class="form-group">
                                                    <label>شهر</label>
                                                    <select id="city" name="info_city_id" class="form-control">
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}" @if($city->id == option('info_city_id')) selected @endif>{{ $city->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>کلمات کلیدی</label>
                                                    <input id="tags" type="text" name="info_tags" class="form-control" value="{{ option('info_tags') }}">
                                                </fieldset>

                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>توضیحات کوتاه</label>
                                                    <textarea name="info_short_description" class="form-control" rows="3">{{ option('info_short_description') }}</textarea>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>اسکریپت نماد</label>
                                                    <textarea name="info_enamad" class="form-control ltr" rows="3">{{ option('info_enamad') }}</textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>کد ساماندهی</label>
                                                    <textarea name="info_samandehi" class="form-control ltr" rows="3">{{ option('info_samandehi') }}</textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>آدرس</label>
                                                    <textarea  name="info_address" class="form-control" rows="3">{{ option('info_address') }}</textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>متن فوتر</label>
                                                    <textarea  name="info_footer_text" class="form-control" rows="3">{{ option('info_footer_text') }}</textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>اسکریپت های اضافه</label>
                                                    <textarea  name="info_scripts" class="form-control ltr" rows="3">{{ option('info_scripts') }}</textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label>اسکریپت های اضافه در تگ"<head>"</label>
                                                    <textarea  name="info_scripts" class="form-control ltr" rows="3">{{ option('info_scripts_head') }}</textarea>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>ایمیل</label>
                                                        <input type="text" name="info_email" class="form-control" value="{{ option('info_email') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>پیشوند آدرس ورود به بخش مدیریت سایت</label>
                                                        <input type="text" name="admin_route_prefix" class="form-control" value="{{ config('general.admin_route_prefix') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <dir class="row p-0">
                                            <div class="col-12">
                                                <h5>نقشه در صفحه تماس با ما</h5>
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>طول جغرافیایی</label>
                                                        <input type="number" step="any" id="Longitude" name="info_Longitude" class="form-control" value="{{ option('info_Longitude', '46.28582686185837') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>عرض جغرافیایی</label>
                                                        <input type="number" step="any" id="latitude" name="info_latitude" class="form-control" value="{{ option('info_latitude', '38.07709880960678') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input info_map_type" id="info_map_type_google" name="info_map_type" value="google" {{ option('info_map_type') == 'google' ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="info_map_type_google">نقشه گوگل</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input info_map_type" id="info_map_type_mapir" name="info_map_type" value="mapir" {{ option('info_map_type') == 'mapir' ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="info_map_type_mapir">نقشه map.ir</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="map" id="googleMap"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="map" id="mapIr"></div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow">ذخیره تغییرات</button>

                                            </div>
                                        </dir>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>

@endsection

@include('back.partials.plugins', ['plugins' => ['jquery-tagsinput', 'jquery.validate', 'mapp', 'google-map']])

@push('scripts')
    <script>
        var info_latitude = "{{ option('info_latitude', '38.07709880960678') }}";
        var info_Longitude = "{{ option('info_Longitude', '46.28582686185837') }}";

        var mapIrApiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjYwMTBjYWE1OWU4ZDAyYzM0YWI2MGFhZDE5MTBhNjM5ZTZkYTI0MzA1ZmMwNzQzY2NmMjRkZmQ2Y2FlMzFjOThmODg4MjExYWY4ZDkwMGE1In0.eyJhdWQiOiIxMjcxOSIsImp0aSI6IjYwMTBjYWE1OWU4ZDAyYzM0YWI2MGFhZDE5MTBhNjM5ZTZkYTI0MzA1ZmMwNzQzY2NmMjRkZmQ2Y2FlMzFjOThmODg4MjExYWY4ZDkwMGE1IiwiaWF0IjoxNjEyODY3Mjc2LCJuYmYiOjE2MTI4NjcyNzYsImV4cCI6MTYxNTM3Mjg3Niwic3ViIjoiIiwic2NvcGVzIjpbImJhc2ljIl19.QNujb2BIyM8mIMy2AhivkMTpVCRyanpUIifJguxoEe4hXB1MESD2CWnO0WPq854Bi6yQyfD2w-oqjOi5N1aZmX4prggmrYelHy_mC1JEwAhWien_6QviFAvkhGDC-aPW4zjFKG2REUkQzXaeL2em543P6-hWdjFaUVSibm1XL4_CUnjJiafQsMQ67ZJ5E7Cpk92L89nJ0LMaBocex56tRqz7_7wZQUAtDYjfal90h2XaGh3QZ2rMwl69ZfMTrOEeTM9O6YCynT3IoTpDnNSXExJeMDuGv4zCD37UYG1gpVtNfipwgvc2J_LzLMXS4rnVAV2ednLKEYu7-jUXr68psg';
    </script>

    <script src="{{ asset('back/assets/js/pages/settings/information.js') }}"></script>
    <script src="{{ asset('back/app-assets/js/scripts/navs/navs.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'image_label';
                inputIdBtn = 'button-image';
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // second button
            document.getElementById('button-image2').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'image_label2';
                inputIdBtn = 'button-image2';

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
            // second button
            document.getElementById('button-image3').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'image_label3';
                inputIdBtn = 'button-image3';

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        let inputId = '';
        let inputIdBtn = '';
        // set file link
        function fmSetLink($url) {
            document.getElementById(inputId).value = $url
            $('#'+inputIdBtn+' .img-uploader').removeClass('display-hidden');

            $('#'+inputIdBtn).parent().find('.remove-img-uploader').removeClass('display-hidden');
            $('#'+inputIdBtn+' .dz-message').addClass('display-hidden');
            $('#'+inputIdBtn+' img').attr('src', $url)
        }

        $('.remove-img-uploader').click(function () {
            var item=this;
            $(item).parent().find('.img-uploader').addClass('display-hidden');
            $(item).parent().find('.dz-message').removeClass('display-hidden');
            $(item).parent().find('input').val('');
            $(item).addClass('display-hidden');
        })
    </script>
@endpush
