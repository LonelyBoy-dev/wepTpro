@extends('front::layouts.master', ['title' => $workSample->meta_title ?: $workSample->title])

@push('meta')
    <meta property="og:title" content="{{ $workSample->meta_title ?: $workSample->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('front.blogs.show', ['post' => $workSample]) }}" />
    <meta name="description" content="{{ $workSample->meta_description ?: $workSample->short_description }}">
    <meta name="keywords" content="{{ $workSample->getTags }}">

    @if ($workSample->image)
        <meta property="og:image" content="{{ asset($workSample->image) }}">
    @endif

@endpush

@section('content')


    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> {{$workSample->title}} </h4>
                        <ul class="list-unstyled mt-4">
                            <li class="list-inline-item h6 user text-muted me-2"> <span class="text-dark">مشتری: </span>  {{$workSample->applicant}} </li>
                            <li class="list-inline-item h6 date text-muted"> <span class="text-dark">تاریخ :</span>
                                @if($workSample->publish_date)
                                    {{Verta::instance($workSample->publish_date)->format(' %d %B %Y')}}
                                @else
                                    {{Verta::instance($workSample->created_at)->format(' %d %B %Y')}}
                                @endif
                                </li>
                        </ul>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('front.work-samples.index')}}">نمونه کارها </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">جزئیات نمونه کار</li>
                                    <li class="breadcrumb-item"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start جزئیات نمونه کار -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
            {{--    <div class="col-12 text-center">
                    <img src="{{asset($workSample->image)}}" class="img-fluid rounded" alt="">
                </div>
--}}
                <div class="col-md-10 mt-4 pt-2">
                    <div class="bg-light rounded p-4">
                        <p class="text-muted fst-italic mb-0"><?= $workSample->content ?></p>
                    </div>


                    <div class="row align-items-center">
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="card work-details rounded bg-light border-0">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-3 mb-3">اطلاعات پروژه :</h5>
                                    <dl class="row mb-0">
                                        <dt class="col-md-4 col-5">مشتری: </dt>
                                        <dd class="col-md-8 col-7 text-muted">{{$workSample->applicant}}</dd>


                                        <dt class="col-md-4 col-5">تاریخ :</dt>
                                        <dd class="col-md-8 col-7 text-muted">
                                            @if($workSample->publish_date)
                                                {{Verta::instance($workSample->publish_date)->format(' %d %B %Y')}}
                                            @else
                                                {{Verta::instance($workSample->created_at)->format(' %d %B %Y')}}
                                            @endif
                                        </dd>

                                        <dt class="col-md-4 col-5">وب سایت:</dt>
                                        <dd class="col-md-8 col-7 text-muted">@if($workSample->webSite)<a target="_blank" href="{{$workSample->webSite}}">مشاهده</a>@else موجود نمی باشد @endif</dd>

                                        @if($workSample->place)
                                        <dt class="col-md-4 col-5">موقعیت :</dt>
                                        <dd class="col-md-8 col-7 text-muted">{{$workSample->place}}</dd>
                                            @endif

                                        <dt class="col-md-4 col-5">فناوری  :</dt>
                                        <dd class="col-md-8 col-7 text-muted technologies">
                                            @foreach($workSample->technologies as $technologies)
                                                <div class="btn-outline-primary">
                                                    <img width="20px" height="20px" src="{{asset($technologies->image)}}">
                                                    <span>{{$technologies->name}}</span>
                                                </div>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <img src="{{asset($workSample->image)}}" class="img-fluid rounded" style="max-height: 300px" alt="{{$workSample->title}}">
                        </div>
                        <div id="comment"></div>
                    </div>
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong style="margin-left: 5px;">موفق!</strong>{{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="بستن"> </button>
                                </div>
                            @endif

                            <h5 class="card-title mb-0">ارسال نظر :</h5>

                            <form class="mt-3" method="post" action="{{route('front.workSample.comments', ['work_sample' => $workSample])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">  نظر شما  <span class="text-danger">*</span> </label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="کامنت شما" rows="5" name="body" class="form-control ps-5" required=""></textarea>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">نام  <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name" name="name" type="text" placeholder="نام" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">ایمیل شما <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email" type="email" placeholder="ایمیل" name="email" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>

                    </div>
                    @if($workSample->comments->count())
                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">نظرات :</h5>

                                <ul class="media-list list-unstyled mb-0">
                                    @foreach($workSample->comments as $item)
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{asset('themes/myWebsite/img/svg/user.svg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">{{$item->name}}</a></h6>
                                                        <small class="text-muted"> {{Verta::instance($item->created_at)->format('در تاریخ %d %B %Y در ساعت H:i')}}</small>
                                                    </div>
                                                </div>
                                                {{-- <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>--}}
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded">{{$item->body}}</p>
                                            </div>
                                            @php $comments=\App\Models\Comment::where(['comment_id'=>$item->id,'status'=>"accepted"])->get(); @endphp
                                            @if($comments->count())
                                                <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                                    @foreach($comments as $comment)
                                                        <li class="mt-4">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <a class="pe-3" href="#">
                                                                        <img src="{{asset('themes/myWebsite/img/svg/user.svg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                                    </a>
                                                                    <div class="commentor-detail">
                                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">{{$comment->admin->fullname}} <span class="badge bg-soft-secondary me-2 mt-2">مدیر سایت </span></a></h6>
                                                                        <small class="text-muted"> {{Verta::instance($comment->created_at)->format('در تاریخ %d %B %Y در ساعت H:i')}}</small>
                                                                    </div>
                                                                </div>
                                                                {{-- <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>--}}
                                                            </div>
                                                            <div class="mt-3">
                                                                <p class="text-muted fst-italic p-3 bg-light rounded">{{$comment->body}}</p>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                @endif
                    <!-- Comments -->

                </div>
            </div>
        </div>
    </section>
    <!-- End جزئیات نمونه کار -->


@endsection

@push('scripts')
    <script src="{{ theme_asset('js/pages/comments.js') }}"></script>
@endpush
