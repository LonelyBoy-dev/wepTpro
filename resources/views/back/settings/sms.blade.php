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
                                    <li class="breadcrumb-item">تنظیمات
                                    </li>
                                    <li class="breadcrumb-item active">تنظیمات پیامک
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
                                    <form id="sms-form" action="{{ route('admin.settings.sms') }}" method="POST">

                                        <h3 class="my-2">اطلاعات پنل پیامک</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>نام کاربری</label>
                                                <div class="input-group mb-75">
                                                    <input type="text" name="SMS_PANEL_USERNAME" class="form-control ltr" value="{{ option('SMS_PANEL_USERNAME') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>رمز عبور</label>
                                                <div class="input-group mb-75">
                                                    <input type="text" name="SMS_PANEL_PASSWORD" class="form-control ltr" value="{{ option('SMS_PANEL_PASSWORD') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>شماره ارسالی</label>
                                                <div class="input-group mb-75">
                                                    <input type="text" name="SMS_PANEL_FROM" class="form-control ltr" value="{{ option('SMS_PANEL_FROM') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>شماره تلفن مدیر برای ارسال اطلاع رسانی ها</label>
                                                <div class="input-group mb-75">
                                                    <input type="text" name="admin_mobile_number" class="form-control ltr" value="{{ option('admin_mobile_number') }}">
                                                </div>
                                            </div>

                                        </div>

                                        <h3 class="my-2">تنظیمات ارسال پیامک</h3>
                                        <hr>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input data-class="sms_on_user_register" type="checkbox" name="sms_on_user_register" {{ option('sms_on_user_register') == 'on' ? 'checked' : '' }} >
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">ارسال پیامک موقع ایجاد کاربر</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>کد پترن خوش آمدگویی</label>
                                                        <div class="input-group mb-75">
                                                            <input type="text" name="user_register_pattern_code" class="form-control ltr sms_on_user_register" value="{{ option('user_register_pattern_code') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>متن نمونه ایجاد پترن</label>
                                                        <textarea readonly class="form-control sms_on_user_register" rows="4">%fullname% عزیز خوش آمدید.&#13;&#10 {{ option('info_site_title') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input data-class="sms_to_verify_user" type="checkbox" name="sms_to_verify_user" {{ option('sms_to_verify_user') == 'on' ? 'checked' : '' }} >
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">تایید کاربر با شماره همراه</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input data-class="forgot_password_link" type="checkbox" name="forgot_password_link" {{ option('forgot_password_link') == 'on' ? 'checked' : '' }} >
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">بازیابی رمز عبور با کد تایید</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>کد پترن ارسال کد تایید</label>
                                                        <div class="input-group mb-75">
                                                            <input type="text" name="user_verify_pattern_code" class="form-control ltr" value="{{ option('user_verify_pattern_code') }}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>متن نمونه ایجاد پترن</label>
                                                        <textarea readonly class="form-control" rows="4">کد تایید: %code% &#13;&#10 {{ option('info_site_title') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input data-class="sms_on_order_paid" type="checkbox" name="sms_on_order_paid" {{ option('sms_on_order_paid') == 'on' ? 'checked' : '' }} >
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">ارسال پیامک به مدیر موقع پرداخت سفارش</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>کد پترن پرداخت سفارش</label>
                                                        <div class="input-group mb-75">
                                                            <input type="text" name="order_paid_pattern_code" class="form-control ltr sms_on_order_paid" value="{{ option('order_paid_pattern_code') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <label>متن نمونه ایجاد پترن</label>
                                                        <textarea readonly class="form-control sms_on_order_paid" rows="4">سفارش جدید با شماره سفارش %order_id% ثبت و پرداخت شد.&#13;&#10 {{ option('info_site_title') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow">ذخیره تغییرات</button>
                                            </div>
                                        </div>
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

@include('back.partials.plugins', ['plugins' => ['jquery.validate']])

@php
    $help_videos = [
        config('general.video-helpes.sms-config')
    ];
@endphp

@push('scripts')
    <script src="{{ asset('back/assets/js/pages/settings/sms.js') }}"></script>
@endpush
