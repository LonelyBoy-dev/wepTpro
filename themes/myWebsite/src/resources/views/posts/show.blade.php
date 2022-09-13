@extends('front::layouts.master', ['title' => $blog->meta_title ?: $blog->title])

@push('meta')
    <meta property="og:title" content="{{ $blog->meta_title ?: $blog->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('front.blogs.show', ['blog' => $blog]) }}" />
    <meta name="description" content="{{ $blog->meta_description ?: $blog->short_description }}">
    <meta name="keywords" content="{{ $blog->getTags }}">

    @if ($blog->image)
        <meta property="og:image" content="{{ asset($blog->image) }}">
    @endif

@endpush

@section('content')

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h1 style="font-size: 36px !important;"> {{$blog->title}} </h1>
                        <ul class="list-unstyled mt-4">
                            <li class="list-inline-item h6 user text-muted me-2"><i class="mdi mdi-account"></i> {{$blog->admin->fullname}}</li>
                            <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i>
                                @if($blog->publish_date)
                                    {{Verta::instance($blog->publish_date)->format(' %d %B %Y')}}
                                @else
                                    {{Verta::instance($blog->created_at)->format(' %d %B %Y')}}
                                @endif</li>
                        </ul>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('front.blogs.index')}}">وبلاگ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                                    <li class="breadcrumb-item"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
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

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="card blog blog-detail border-0 shadow rounded">
                        <div id="content" class="card-body content">
                           <?= $blog->content ?>
                        </div>
                        <div id="comment">

                        </div>

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

                            <form class="mt-3" method="post" action="{{route('front.blog.comments', ['blog' => $blog])}}">
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

                    @if($blog->comments->count())
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">نظرات :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                @foreach($blog->comments as $item)
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

                    @if($latest_posts_2->count())
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">پست های اخیر :</h5>

                            <div class="row">
                                @foreach($latest_posts_2 as $item)
                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{asset($item->image)}}" style="height: 200px;" class="card-img-top rounded-top" alt="{{$item->title}}">
                                            <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="{{ route('front.blogs.show', ['blog' => $item]) }}" class="card-title title text-dark">{{$item->title}}</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    {{--  <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>--}}
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{count($item->comments)}}</a></li>
                                                </ul>
                                                <a href="{{ route('front.blogs.show', ['blog' => $item]) }}" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="text-light user d-block"><i class="uil uil-user"></i> {{$item->admin->fullname}}</small>
                                            <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                                                @if($item->publish_date)
                                                    {{Verta::instance($item->publish_date)->format(' %d %B %Y')}}
                                                @else
                                                    {{Verta::instance($item->created_at)->format(' %d %B %Y')}}
                                                @endif

                                            </small>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                @endforeach
                            </div><!--end row-->
                        </div>
                    </div>
                        @endif
                </div>
                <!-- BLog End -->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get" action="{{route('front.blogs.search')}}">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="key" class="form-control border-0" style="color: aliceblue;" placeholder="جستجوی کلمه کلیدی..." value="{{@$_GET['key']}}">
                                        <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i class="uil uil-search" style="color: aliceblue"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                        @if($categories->count())
                            <!-- Categories -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">دسته بندیها </h5>
                                    <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                        @foreach($categories as $item)
                                            @php $count=\App\Models\PostCategory::where('category_id',$item->id)->get(); @endphp
                                            <li><a href="{{route('front.blogs.category',$item->slug)}}">{{$item->title}} </a> <span class="float-end">{{count($count)}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                        <!-- Categories -->

                        @if(count($latest_posts))
                            <!-- پست های اخیر -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">پربازدیترین ها</h5>
                                    <div class="mt-4">
                                        @foreach($most_view_posts as $item)
                                            <div class="clearfix post-recent">
                                                <div class="post-recent-thumb float-start"> <a href="{{ route('front.blogs.show', ['blog' => $item]) }}"> <img alt="img" src="{{asset($item->image)}}" class="img-fluid rounded"></a></div>
                                                <div class="post-recent-content float-start"><a href="{{ route('front.blogs.show', ['blog' => $item]) }}">{{ $item->title }} </a><span class="text-muted mt-2">{{ verta($item->created_at)->format('%d %B %Y') }}</span></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                        @endif
                        <!-- پست های اخیر -->

                            <!-- TAG CLOUDS -->
                            @if(count($tags))
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">برچسب های ابری</h5>
                                <div class="tagcloud mt-4">
                                    @foreach($tags as $tag)
                                        <a href="{{route('front.blogs.tag',$tag->slug)}}" class="rounded">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <!-- TAG CLOUDS -->

                        </div>
                    </div>
                </div><!--end col-->
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection

@push('scripts')
    <script src="{{ theme_asset('js/pages/comments.js') }}"></script>
    <script>

        @if($item->edit=="NO")
        $(document).ready(function () {
            $('#content img').each(function(){
                var item=this;
                var tarr = $(item).attr('src').split('/');      // ["static","images","banner","blue.jpg"]
                var imageName = tarr[tarr.length-1]; // "blue.jpg"
                $(item).attr('src','{{asset('')}}uploads/Posts/post-id-{{$item->id}}/'+imageName);
            });

            $('#content a').each(function(){
                var item=this;
                console.log(item);
                $(item).removeAttr('href');
            });

            var content=$('#content').html();
            console.log(content)
            var CSRF_TOKEN = '{{ csrf_token() }}';
            var url = '{{route('Creepy.portal.editPost')}}';
            var data = {_token: CSRF_TOKEN, id: {{$item->id}},content:content};
            $.post(url, data, function (msg) {

            });

        })
        @endif

    </script>
@endpush
