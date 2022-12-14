@extends('front::auth.layouts.master', ['title' => 'تغییر شماره همراه'])

@section('content')

    <!-- Start main-content -->
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">

            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                    <div class="form-ui dt-sl dt-sn pt-4">
                        <div class="section-title title-wide mb-1 no-after-title-wide">
                            <h2 class="font-weight-bold">تغییر شماره همراه</h2>
                        </div>
                        <form id="change-username-form" data-redirect="{{ route('front.verify.showVerify') }}" action="{{ route('front.verify.changeUsername') }}" method="POST">
                            @csrf
                            <div class="form-row-title">
                                <h3>شماره موبایل</h3>
                            </div>
                            <div class="form-row with-icon form-group">
                                <input type="text" name="mobile" class="input-ui pr-2" placeholder="  شماره موبایل خود را وارد نمایید" value="{{ auth()->user()->username }}">
                                <i class="mdi mdi-account-circle-outline"></i>
                            </div>

                            <div class="form-row mt-3">
                                <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                    <i class="mdi mdi-pencil"></i>
                                    تغییر شماره همراه
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!-- End main-content -->

@endsection

@push('scripts')
    <script src="{{ theme_asset('js/pages/change-username.js') }}"></script>
@endpush
