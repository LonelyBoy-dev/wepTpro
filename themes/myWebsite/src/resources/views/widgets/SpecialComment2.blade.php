@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['SpecialComment2'];
@endphp
@if ($items->count())

    <!-- Testi Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center w-100">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">{{$widget->option('title')}}</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">{{$widget->option('titleBot')}}</p>
                </div>
            </div>
        </div><!--end row-->

        <div class="row justify-content-center w-100">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="tiny-three-item">
                    @foreach ($items as $item)
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{$item->avatar ? asset($item->avatar) : asset('themes/myWebsite/img/svg/user.svg')}}" class="avatar avatar-small client-image rounded shadow" alt="{{$item->name}}">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    @for($i=1;$i<=$item->rate;$i++)
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    @endfor
                                </ul>
                                <p class="text-muted mt-2">{{$item->comment}}</p>
                                <h6 class="text-primary"> {{$item->name}} </h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Testi end -->
@endif
