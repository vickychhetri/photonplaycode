<style>
    .loader_related_product {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader_related_product .spinner {
        border: 4px solid rgba(255, 255, 255, 0.3);
        border-top: 4px solid #000;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
<div class="loader_related_product" id="loader_related_product">
    <div class="spinner"></div>
</div>

<section class="icop-series pt-4">
    <div class="container" id="our_products">
        <div class="row">
            <div class="col-lg-12 p-0 m-0">
                <h4>Related Products</h4>
            </div>
            <div class="responsive">
                @foreach ($productLists as $more_product)
                    @foreach ($productLists as $more_product)
                        @foreach ($productLists as $more_product)
                @foreach ($productLists as $more_product)
                    <div>
                        <div class="">
                            <a href="{{route('customer.radar.sign', $more_product->slug)}}"
                               class="text-decoration-none text-black">
                                <div class="inner-product">
                                    <div class="w-100 h-100 light-product m-auto" style="background: url('{{ asset('storage/'. $more_product->cover_image) }}') no-repeat center;
                                    background-size: contain;transform: scale(1.2);">
                                    </div>
                                    <div class="speed-sign text-center">
                                        <span class="d-block">{{$more_product->title}}</span>
                                        @if($more_product->is_price_hide != 1)
                                            <span class="d-block weight-font">
                                            {{$currency_icon}}{{number_format($more_product->price * $exchange_rate,2)}}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                        @endforeach
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loader_related_product = document.getElementById('loader_related_product');
        loader_related_product.style.display = 'none';
    });
</script>
