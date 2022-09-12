@extends('front::layouts.master')

@push('meta')
    <meta name="description" content="{{ option('info_short_description') }}">
    <meta name="keywords" content="{{ option('info_tags') }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "{{ route('front.index') }}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{ route('front.products.search') }}/?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

@endpush

@section('content')

    @foreach ($widgets as $widget)
        @switch($widget->key)
            @case('main-slider')
            @include('front::widgets.main-slider')
            @break

            @case('main-slider2')
            @include('front::widgets.main-slider2')
            @break

            @case('features')
            @include('front::widgets.features')
            @break

            @case('about-us')
            @include('front::widgets.about-us')
            @break

            @case('work-samples')
            @include('front::widgets.work-samples')
            @break

            @case('work-samples2')
            @include('front::widgets.work-samples2')
            @break

            @case('posts')
            @include('front::widgets.posts')
            @break

            @case('SpecialComment')
            @include('front::widgets.SpecialComment')
            @break

            @case('SpecialComment2')
            @include('front::widgets.SpecialComment2')
            @break

            @case('WorkSampleTechnology')
            @include('front::widgets.work_sample_technologies')
            @break
        @endswitch
    @endforeach







@endsection
