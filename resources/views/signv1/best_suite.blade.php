<section class="icop-series pt-0 mt-0">
    <div class="container" id="our_products">
        <div class="row">
            <div class="col-lg-12 p-0 m-0">
                <h4 class="text-center"> Best Suited Models</h4>
            </div>
            <div class="responsive">
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
                                        <span class="d-block">{{$more_product->product_heading_text??$more_product->title}}</span>
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
            </div>
        </div>
    </div>
</section>
