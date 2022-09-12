@extends('front::layouts.master', ['title' => 'خطا صفحه یافت نشد'])

@section('content')
    <section class="bg-home d-flex align-items-center" style="height: auto;padding: 6% 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <img src="{{asset('themes/myWebsite/images/404.svg')}}" class="img-fluid" alt="">
                    <div class="text-uppercase mt-4 display-3">وای نه!</div>
                    <div class="text-capitalize text-dark mb-4 error-page">صفحه ای یافت نشد</div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="/" class="btn btn-primary mt-4 ms-2">برو صفحه اصلی </a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
@endsection
