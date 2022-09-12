@extends('front::layouts.master', ['title' => 'وبلاگ'])

@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> کار مدرن </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">نمونه کار ها</li>
                                    <li class="breadcrumb-item"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start Works -->
    <section class="section">
        <div class="container">


            <div id="grid" class="row">
                @foreach($items as $item)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 picture-item">
                    <div class="card work-container work-modern position-relative overflow-hidden shadow rounded border-0">
                        <div class="card-body p-0 text-center">
                            <img src="{{asset($item->image)}}" class="img-fluid rounded" style="max-height: 292px" alt=">{{$item->title}}">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="text-light tag mb-0 text-right"><a href="{{ route('front.work-samples.show', ['work_sample' => $item]) }}" class="text-white title">{{$item->title}}</a></h6>

                            </div>
                            <div class="client">
                                @if($item->applicant)<small class="text-light user d-block"><i class="uil uil-user"></i>{{$item->applicant}}</small>@endif
                                <small class="text-light date"><i class="muil uil-calendar-alt"></i>
                                    @if($item->publish_date)
                                        {{Verta::instance($item->publish_date)->format(' %d %B %Y')}}
                                    @else
                                        {{Verta::instance($item->created_at)->format(' %d %B %Y')}}
                                    @endif
                                </small>
                            </div>
                            <div class="icons text-center">
                                <a href="{{asset($item->image)}}" class="text-primary work-icon bg-white d-inline-block rounded-pill lightbox "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->

            <div class="row">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4 pt-2">
                    <ul class="pagination justify-content-center mb-0">
                        {{$items->links()}}
                    </ul>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Works -->




@endsection
