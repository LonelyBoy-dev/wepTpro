<div class="product-card mb-2 mx-res-0">
    @if($product->special)
        <div class="promotion-badge">
            فروش ویژه
        </div>
    @endif
    <div class="product-head">
        <div class="rating-stars">
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
            <i class="mdi mdi-star active"></i>
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

        @if($product->category)
            <a class="product-meta" href="{{ route('front.products.category', ['category' => $product->category]) }}">{{ $product->category->title }}</a>
        @endif

        <div class="product-prices-div">
            <span class="product-price">{{ $product->getLowestPrice() }}</span>

            @if($product->getLowestDiscount())
                <del class="product-price text-danger">{{ $product->getLowestDiscount() }}</del>
            @endif
        </div>

    </div>
</div>
