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
                                    <li class="breadcrumb-item">مدیریت سفارشات
                                    </li>
                                    <li class="breadcrumb-item active">هزینه های ارسال
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Add city -->
                <section class="card">
                    <div class="card-header">
                        <h4 class="card-title">افزودن شهر</h4>
                    </div>

                    <div class="card-content" id="form-card">
                        <div class="card-body">
                            <div class="col-12 col-md-10 offset-md-1">
                                <form class="form" id="shipping-cost-create-form"
                                    action="{{ route('admin.shipping-costs.store') }}" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>استان</label>
                                                    <select id="province" name="province_id" class="form-control" required>
                                                        <option value="">انتخاب کنید</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->id }}">{{ $province->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="city-div" class="form-group">
                                                    <label>شهر</label>
                                                    <select id="city" name="city_id" class="form-control" required></select>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>حداقل مبلغ سفارش</label>
                                                    <input name="price" type="number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>هزینه ارسال</label>
                                                    <input name="cost" type="number" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <button type="submit"
                                                    class="btn btn-primary mb-1 waves-effect waves-light">افزودن شهر
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Add city -->

                <div id="main-content-div">
                    @if ($shipping_costs->count())
                        <section class="card">
                            <div class="card-header">
                                <h4 class="card-title">لیست شهر ها</h4>
                            </div>
                            <div class="card-content" id="main-card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>نام شهر</th>
                                                    <th class="text-center">حداقل مبلغ سفارش</th>
                                                    <th class="text-center">هزینه ارسال</th>
                                                    <th class="text-center">عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($shipping_costs as $shipping_cost)
                                                    <tr id="shipping_cost-{{ $shipping_cost->id }}-tr">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $shipping_cost->cityName() }}
                                                        </td>
                                                        <td class="text-center">{{ $shipping_cost->price }}</td>
                                                        <td class="text-center">{{ $shipping_cost->cost }}</td>
                                                        <td class="text-center">

                                                            <button type="button" data-id="{{ $shipping_cost->id }}"
                                                                class="btn btn-danger mr-1 waves-effect waves-light btn-delete"
                                                                data-toggle="modal" data-target="#delete-modal">حذف</button>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                    @else
                        <section class="card">
                            <div class="card-header">
                                <h4 class="card-title">لیست شهر ها</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p>چیزی برای نمایش وجود ندارد!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                </div>

            </div>
        </div>
    </div>

    {{-- delete shipping_cost modal --}}
    <div class="modal fade text-left" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel19">آیا مطمئن هستید؟</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">با حذف این مورد تغییراتی در هزینه ارسال ها ایجاد می شود.</div>
                <div class="modal-footer">
                    <form action="#" id="shipping_cost-delete-form">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-success waves-effect waves-light"
                            data-dismiss="modal">خیر</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">بله حذف شود</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('back/assets/js/pages/shipping-costs/index.js') }}"></script>
@endpush
