@extends('front::user.layouts.master')

@section('user-content')
    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
        <div class="px-3 px-res-0">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                <h2>افزایش موجودی کیف پول</h2>
            </div>
            <div class="form-ui additional-info dt-sl dt-sn pt-4">
                <form id="wallet-create-form" action="{{ route('front.wallet.store') }}" class="setting_form" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-row-title">
                                <h3>مبلغ (تومان)</h3>
                            </div>
                            <div class="form-row form-group">
                                <input type="number" class="input-ui pr-2 amount-input" name="amount">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-row-title">
                                <h3>انتخاب درگاه پرداخت</h3>
                            </div>
                            <div class="form-row form-group">
                                <select class="form-control py-0" name="gateway" required>
                                    <option value="">انتخاب کنید</option>
                                    @foreach ($gateways as $gateway)
                                        <option value="{{ $gateway->key }}">{{ $gateway->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-row mt-3 justify-content-center">
                        <button id="submit-btn" type="submit" class="btn-primary-cm btn-with-icon ml-2">
                            <i class="mdi mdi-arrow-left"></i>
                            افزایش موجودی
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ theme_asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/jquery-validation/localization/messages_fa.min.js') }}"></script>

    <script src="{{ theme_asset('js/pages/wallet/create.js') }}"></script>
@endpush
