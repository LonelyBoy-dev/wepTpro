@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['posts'];
@endphp
@if ($items->count())
    <section class="section" style="padding-bottom: 100px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mb-4">{{$widget->option('title')}}</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">{{$widget->option('titleBot')}}</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach ($items as $item)
                @php $countComment=\App\Models\Comment::where(['commentable_type'=>'App\Models\Post','commentable_id'=>$item->id,'status'=>"accepted",'comment_id'=>null])->count(); @endphp
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{asset($item->image)}}" style="max-height: 278px;" class="card-img-top rounded-top" alt="{{$item->title}}">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="{{ route('front.blogs.show', ['blog' => $item]) }}" class="card-title title text-dark">{{$item->title}}</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                              {{--  <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>--}}
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{$countComment}}</a></li>
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
            <div class="col-12 mt-4 pt-2">
                <a href="page-blog-grid.html" class="btn btn-primary">نمایش بیشتر <i class="uil uil-angle-left-b"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    </section>
@endif
