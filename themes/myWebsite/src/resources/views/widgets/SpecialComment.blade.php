@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['SpecialComment'];
@endphp
@if ($items->count())
    <!-- Testi Start -->
    <section class="section" @if($widget->option('image'))style="background: url('{{$widget->option('image')}}') center center;" @endif>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="tiny-single-item">
                        @foreach ($items as $item)
                        <div class="tiny-slide">
                            <div class="client-testi text-center">
                                <p class="text-light para-dark h6 fst-italic dir-rtl" style="direction: rtl">{{$item->comment}}</p>
                                <ul class="list-unstyled mb-0 mt-3">
                                    @for($i=1;$i<=$item->rate;$i++)
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    @endfor
                                </ul>
                                <h6 class="text-light title-dark"> {{$item->name}} </h6>
                                <img src="{{$item->avatar ? asset($item->avatar) : asset('themes/myWebsite/img/svg/user.svg')}}" class="img-fluid avatar avatar-small mt-3 rounded-circle mx-auto shadow" alt="{{$item->name}}">
                            </div><!--end customer testi-->
                        </div>
                        @endforeach
                    </div><!--end owl carousel-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Testi End -->

@endif