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
                                    <li class="breadcrumb-item active">لیست نظرات
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
                            <h4 class="card-title">لیست نظرات</h4>
                        </div>
                        <div class="card-content" id="main-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center"> آواتار</th>
                                                <th class="text-center">نام و نام خانوادگی</th>
                                                <th class="text-center">امتیاز</th>
                                                <th class="text-center">متن نظر</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr id="post-{{ $item->id }}-tr">
                                                    <td class="text-center">
                                                        <img class="post-thumb" src="{{ $item->avatar ? asset($item->avatar) : asset('/empty.jpg') }}" alt="image">
                                                    </td>
                                                    <td class="text-center"><span class="d-inline-block">{{$item->name}}</span></td>
                                                    <td class="text-center"><span class="d-inline-block">{{$item->rate}}</span></td>
                                                    <td class="text-center"><span class="d-inline-block">{{$item->comment}}</span></td>
                                                    <td class="text-center">

                                                            <a href="{{ route('admin.special-comments.edit', ['special_comment' => $item]) }}" class="btn btn-success mr-1 waves-effect waves-light">ویرایش</a>

                                                            <button type="button" data-post="{{ $item->id }}" data-id="{{ $item->id }}" class="btn btn-danger mr-1 waves-effect waves-light btn-delete"  data-toggle="modal" data-target="#delete-modal">حذف</button>


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
                            <h4 class="card-title">لیست نوشته ها</h4>
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

    {{-- delete post modal --}}
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
                    با حذف نوشته دیگر قادر به بازیابی آن نخواهید بود
                </div>
                <div class="modal-footer">
                    <form action="#" id="post-delete-form">
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

@push('scripts')
    <script src="{{ asset('back/assets/js/pages/SpecialComments/index.js') }}"></script>
@endpush
