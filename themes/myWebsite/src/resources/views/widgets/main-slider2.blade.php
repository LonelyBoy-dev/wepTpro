@php
    $variables      = get_widget_mySite($widget);
    $main_sliders   = $variables['main_sliders2'];
@endphp

<!-- Hero Start -->
@if($main_sliders->count())
<section class="home-slider position-relative">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($main_sliders as $item)
                <?php
                $motionTitles=explode(',',$item->motionTitle);
                ?>
            <div class="carousel-item @if($loop->first)active @endif" data-bs-interval="3000">
                <div class="bg-home d-flex align-items-center" style="background: url('{{$item->image}}') center center no-repeat;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class=" mt-4">
                                    <h1 class="display-3 fw-bold mb-3 heading mb-3 text-white title-dark animated fadeInUpBig animation-delay-3">{{$item->title}}
                                    <br>
                                        <span class="text-primary typewrite" data-period="2000" data-type='[  @foreach ($motionTitles as $motionTitle) "{{$motionTitle}}", @endforeach "" ]'> <span class="wrap"></span> </span>
                                    </h1>
                                    <p class="para-desc text-light para-dark mx-auto animated fadeInUpBig animation-delay-7">{{$item->description}}</p>
                                    @if($item->link)
                                    <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-11">
                                        <a href="{{$item->link}}" class="btn btn-primary mt-2">ادامه</a>
                                    </div>
                                        @endif
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end slide-->
            </div>
            @endforeach

        </div>
        @if($main_sliders->count() >=2)
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">قبلی </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">بعدی </span>
        </a>
            @endif
    </div>
</section><!--end section-->
@endif
<!-- Hero End -->
