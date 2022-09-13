@extends('front::layouts.master', ['title' => 'وبلاگ'])

@section('content')

    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> وبلاگ </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">صفحه اصلی </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">وبلاگ</li>
                                    <li class="breadcrumb-item"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->


    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Blog Start -->
    <section class="section">
        <div class="container">
            @if(count($posts))
            <div class="row">
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        @foreach($posts as $item)
                        <div class="col-lg-6 col-md-12 mb-4 pb-2">
                            <div class="card blog rounded border-0 shadow">
                                <div class="position-relative">
                                    <img src="{{asset($item->image)}}" style="height: 200px" class="card-img-top rounded-top" alt="{{$item->title}}">
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
                        <!-- PAGINATION START -->
                        <div class="col-12">

                            <ul class="pagination justify-content-center mb-0">
                                {{$posts->links()}}
                            </ul>
                        </div><!--end col-->
                        <!-- PAGINATION END -->
                    </div><!--end row-->
                </div><!--end col-->
                <!-- BLog End -->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get" action="{{route('front.blogs.search')}}">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="key" class="form-control border-0" placeholder="جستجوی کلمه کلیدی..." value="{{@$_GET['key']}}">
                                        <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
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
            @else
            <h5 class="text-center mb-4">چیزی برای نمایش وجود ندارد!</h5>
            @endif
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection
