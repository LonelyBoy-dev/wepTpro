@php
    $variables      = get_widget_mySite($widget);
    $main_sliders   = $variables['main_sliders'];
    $mobile_sliders = $variables['mobile_sliders'];
    $index_slider_banners = $variables['index_slider_banners'];
@endphp
@if ($main_sliders->count())
    @foreach ($main_sliders as $slider)
        <?php
         $motionTitles=explode(',',$slider->motionTitle);
        ?>
<!-- Hero Start -->
<section class="bg-home rtl-personal-hero bg-light d-flex align-items-center" style="background:url('{{ asset($slider->image) }}') 0 55px no-repeat !important;" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="title-heading mt-4">
                    <h1 class="display-3 fw-bold mb-3">{{ $slider->title }} <br> <span class="text-primary typewrite" data-period="2000" data-type='[  @foreach ($motionTitles as $motionTitle) "{{$motionTitle}}", @endforeach "" ]'> <span class="wrap"></span> </span> </h1>
                    <p class="para-desc text-muted">{{$slider->description}}</p>
                    <div class="mt-4 pt-2">
                        @if($slider->link)  <a href="{{$slider->link}}" class="btn btn-primary mt-2 me-2"> ادامه </a>@endif
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->
    @endforeach
@endif