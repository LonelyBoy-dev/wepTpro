@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['work-samples'];
@endphp
@if ($items->count())
    <section class="section">
     <div class="container" id="portfolio">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <h4 class="title mb-4">{{$widget->option('title')}}</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">{{$widget->option('titleBot')}}</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card border-0 work-container work-modern position-relative d-block overflow-hidden rounded post-shadow">
                            <div class="portfolio-box-img position-relative overflow-hidden text-center">
                                <img class="item-container img-fluid mx-auto" src="{{asset($item->image)}}" alt="{{$item->title}}" style="height: 292px"/>
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <h6 class="text-light tag mb-0 text-right"><a href="{{ route('front.workSample.show', ['work_sample' => $item]) }}" class="text-white title ">{{$item->title}}</a></h6>
                                </div>
                                <div class="client text-right">
                                    @if($item->applicant)<small class="text-light user d-block"><i class="uil uil-user"></i> {{$item->applicant}}</small>@endif
                                    <small class="text-light date"><i class="muil uil-calendar-alt"></i>
                                        @if($item->publish_date)
                                            {{Verta::instance($item->publish_date)->format(' %d %B %Y')}}
                                        @else
                                            {{Verta::instance($item->created_at)->format(' %d %B %Y')}}
                                        @endif</small>
                                </div>
                                <div class="icons text-center">
                                    <a href="{{asset($item->image)}}" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <a href="{{route('front.work-samples.index')}}" class="btn btn-outline-primary">نمایش بیشتر <i class="uil uil-angle-left-b"></i></a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
    </section>
@endif
