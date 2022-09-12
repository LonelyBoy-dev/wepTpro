@php
    $variables      = get_widget_mySite($widget);
    $abouts   = $variables['about-us'];
@endphp
@if ($abouts->count())
    @foreach ($abouts as $about)
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h4 class="title">{{$widget->option('title')}}</h4>
                            <h6 class="text-primary mb-4">{{$widget->option('titleBot')}}</h6>
                            <p class="text-muted mb-0">{{$widget->option('description')}}</p>
                            @if($widget->option('link'))
                            <div class="mt-4">
                                <a href="{{$widget->option('link')}}" class="btn btn-primary"><i class="uil uil-phone"></i> تماس با من</a>
                            </div>
                            @endif
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="{{ asset($widget->option('image')) }}" width="100%">
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section>
    @endforeach
@endif