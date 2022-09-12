<div class="item">
    <div class="product-card mb-3">
        <div class="product-head">
            <div class="rating-stars">
                <i class="mdi mdi-star active"></i>
                <i class="mdi mdi-star active"></i>
                <i class="mdi mdi-star active"></i>
                <i class="mdi mdi-star active"></i>
                <i class="mdi mdi-star"></i>
            </div>
            @if($product->discount)
                <div class="discount">
                    <span>{{ $product->discount }}%</span>
                </div>
            @endif
        </div>
        <a class="product-thumb" href="{{ route('front.products.show', ['product' => $product]) }}">
            <img data-src="{{ $product->image ? asset($product->image) : '/no-image-product.png' }}" src="{{ theme_asset('images/600-600.png') }}" alt="{{ $product->title }}">
        </a>
        <div class="product-card-body">
            <h5 class="product-title">
                <a href="{{ route('front.products.show', ['product' => $product]) }}">{{ $product->title }}</a>
            </h5>
            <a class="product-meta" href="{{ $product->category ? $product->category->link : '#' }}">{{ $product->category ? $product->category->title : 'بدون دسته بندی' }}</a>
            <div class="price-index-h">
                <span class="product-price">{{ $product->getLowestPrice() }}</span>

                @if($product->getLowestDiscount())
                    <del class="product-price-del">{{ $product->getLowestDiscount() }}</del>
                @endif

            </div>
        </div>
    </div>
</div>
