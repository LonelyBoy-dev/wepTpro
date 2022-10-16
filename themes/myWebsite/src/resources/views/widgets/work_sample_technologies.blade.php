@php
    $variables      = get_widget_mySite($widget);
    $items   = $variables['WorkSampleTechnology'];
@endphp
@if ($items->count())

    <!-- Client start -->
    <section class="py-4 ">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                <div class="col text-center mb-4">
                    <img src="{{$item->image}}" class="avatar" style="max-height: 50px" alt="{{$item->name}}">
                </div>
                @endforeach
            </div>

        </div><!--end container-->
    </section><!--end section-->
    <!-- Client End -->
@endif
