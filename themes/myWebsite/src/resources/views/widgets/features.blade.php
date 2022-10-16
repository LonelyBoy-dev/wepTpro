@php
    $variables      = get_widget_mySite($widget);
    $items  = $variables['features'];
@endphp
@if ($items->count())
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">{{$widget->option('title')}}</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">{{$widget->option('titleBot')}}</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($items as $item)
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                            <span class="h1 icon2 text-primary">
                                <img width="80px" src="{{asset($item->image)}}">
                            </span>
                        <div class="card-body p-0 content">
                            <h5>{{$item->title}}</h5>
                            <p class="para text-muted mb-0">{{$item->body}}</p>
                        </div>
                        <span class="big-icon text-center">
                                <img width="100px" src="{{asset($item->image)}}">
                            </span>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div>
    </section>

@endif
