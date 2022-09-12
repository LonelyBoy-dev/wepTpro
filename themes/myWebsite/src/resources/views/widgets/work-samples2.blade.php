@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['work-samples2'];
@endphp
@if ($items->count())
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">{{$widget->option('title')}}</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">{{$widget->option('titleBot')}}</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-md-5 mt-4 pt-2">
                <ul class="nav nav-pills bg-white nav-justified flex-column mb-0" id="pills-tab" role="tablist">
                    @foreach($items as $item)
                    <li class="nav-item bg-light rounded-md @if(!$loop->first)mt-4 @endif">
                        <a class="nav-link rounded-md @if($loop->first)active @endif" id="worksample-{{$item->id}}" data-bs-toggle="pill" href="#work-sample-{{$item->id}}" role="tab" aria-controls="work-sample-{{$item->id}}" aria-selected="false">
                            <div class="p-3 text-start">
                                <h5 class="title">{{$item->title}}</h5>
                                <p class="text-muted tab-para mb-0">{{$item->summary}}</p>
                            </div>
                        </a><!--end nav link-->
                    </li><!--end nav item-->
                    @endforeach
                </ul><!--end nav pills-->
            </div><!--end col-->

            <div class="col-md-7 col-12 mt-4 pt-2">
                <div class="tab-content ms-lg-4" id="pills-tabContent">
                    @foreach($items as $item)
                    <div class="tab-pane fade show @if($loop->first)active @endif" id="work-sample-{{$item->id}}" role="tabpanel" aria-labelledby="worksample{{$item->id}}">
                        <img src="{{asset($item->image)}}" class="img-fluid mx-auto rounded-md shadow-lg d-block" alt="{{$item->title}}">
                    </div><!--end teb pane-->
                    @endforeach
                </div><!--end tab content-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <a href="{{route('front.work-samples.index')}}" class="btn btn-outline-primary">نمایش بیشتر <i class="uil uil-angle-left-b"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
@endif