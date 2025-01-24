<style>
    .product-card {
        flex: 0 0 calc(45.333% - 1rem); /* Adjust width as needed */
        max-width: calc(45.333% - 1rem); /* Adjust width as needed */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #e0e0e0;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 5px;
        overflow: hidden;
        background: #fff;
        text-align: center;
    }

    .product-card .product-image {
        width: 100%;
        padding-top: 75%; /* Aspect ratio of 4:3 */
        background-position: center;
        background-size: contain;
    }

    .d-flex.flex-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* Align items left to right */
        gap: 1rem; /* Add spacing between cards */
    }

</style>
<section class="icop-series pt-0 mt-0 mobile-display">
    <div class="container" id="our_products">
        <div class="row">
            <div class="col-lg-12 p-0 m-0">
                <h4 class="mb-4 text-center">Related Products</h4>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($productLists as $more_product)
                    <div class="product-card me-3 mb-3">
                        <a href="{{ route('customer.radar.sign', $more_product->slug) }}"
                           class="text-decoration-none text-black">
                            <div class="inner-product">
                                <div class="product-image" style="
                                    background: url('{{ asset('storage/' . $more_product->cover_image) }}') no-repeat center;
                                    background-size: contain;">
                                </div>
                                <div class="speed-sign text-center">
                                    <span class="d-block">{{ $more_product->title }}</span>
                                    @if($more_product->is_price_hide != 1)
                                        <span class="d-block weight-font">
                                            {{ $currency_icon }}{{ number_format($more_product->price * $exchange_rate, 2) }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
