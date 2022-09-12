@extends('front::layouts.master', ['title' => 'محصولات ویژه'])

@section('content')

    <!-- Start main-content -->
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="header-cover">
            <div class="promotion-header-img"></div>
        </div>
        <div class="container main-container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 search-card-res">
                    <!-- Start Content -->
                    <div class="title-breadcrumb-special dt-sl mb-3">
                        <div class="breadcrumb dt-sl">
                            <nav>
                                <a href="/">خانه</a>
                                <a href="{{ route('front.products.index') }}">محصولات</a>
                                <span>محصولات ویژه</span>
                            </nav>
                        </div>
                    </div>
                    @if($products->count())
                        <div class="dt-sl dt-sn px-0 search-amazing-tab">
                            <div class="row mb-3 mx-0 px-res-0">
                                @foreach($products as $product)

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        @include('front::products.partials.product-card', ['product' => $product])
                                    </div>

                                @endforeach
                            </div>

                            {{ $products->appends(request()->all())->links('front::components.paginate') }}
                        </div>
                    @else
                        @include('front::partials.empty')
                    @endif
                </div>
                <!-- End Content -->
            </div>

        </div>
    </main>
    <!-- End main-content -->


@endsection
