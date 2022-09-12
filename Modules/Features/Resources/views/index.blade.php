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
                                    <li class="breadcrumb-item">مدیریت ویژگی ها
                                    </li>
                                    <li class="breadcrumb-item active">لیست ویژگی ها
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @if($items->count())
                    <section class="card">
                        <div class="card-header">
                            <h4 class="card-title">لیست ویژگی ها</h4>
                        </div>
                        <div class="card-content" id="main-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0" >
                                        <thead>
                                            <tr>
                                                <th class="text-center">ردیف</th>
                                                <th class="text-center">تصویر</th>
                                                <th>عنوان</th>
                                                <th>توضیحات</th>
                                                <th class="text-center">وضعیت</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody id="widgets-sortable" data-action="{{ route('admin.features.sort') }}">
                                            @foreach ($items as $item)
                                                <tr id="widget-{{ $item->id }}">
                                                    <td class="text-center draggable-handler">
                                                        <div class="fonticon-wrap"><i class="feather icon-move"></i></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <img class="post-thumb" src="{{ $item->image ? asset($item->image) : asset('/empty.jpg') }}" alt="image">
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->body }}</td>
                                                    <td class="text-center">
                                                        @if($item->published)
                                                            <div class="badge badge-pill badge-success badge-md">نمایش</div>
                                                        @else
                                                            <div class="badge badge-pill badge-danger badge-md">عدم نمایش</div>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.features.edit', ['feature' => $item]) }}" class="btn btn-success mr-1 waves-effect waves-light">ویرایش</a>

                                                        <button type="button" data-brand="{{ $item->id }}" data-id="{{ $item->id }}" class="btn btn-danger mr-1 waves-effect waves-light btn-delete"  data-toggle="modal" data-target="#delete-modal">حذف</button>
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
                            <h4 class="card-title">لیست ویژگی ها</h4>
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
                {{ $items->links() }}

            </div>
        </div>
    </div>

    {{-- delete brand modal --}}
    <div class="modal fade text-left" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel19">آیا مطمئن هستید؟</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    با حذف ویژگی دیگر قادر به بازیابی آن نخواهید بود
                </div>
                <div class="modal-footer">
                    <form action="#" id="brand-delete-form">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="modal">خیر</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">بله حذف شود</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@include('back.partials.plugins', ['plugins' => ['jquery-ui-sortable']])
@push('scripts')
    <script src="{{ asset('back/assets/js/pages/workSamples/features/index.js') }}"></script>
@endpush
