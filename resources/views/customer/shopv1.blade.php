@push('header_meta_content')
    <meta property="og:type" content="product.item"/>
@endpush
@include('customer.layouts.header')

<!-- Our Product-start -->


<section style="background-color: #eee;" class="mt-0 pt-0">
    <div class="container py-5">

        <h4 class="mb-5"><strong>Browse Products</strong></h4>
        <hr/>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-around">
                <h5 class="card-title">Filter</h5>
                <div>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}" class="btn btn-link {{ $sortOrder === 'asc' ? 'active' : '' }}">Price: Low to High</a>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}" class="btn btn-link {{ $sortOrder === 'desc' ? 'active' : '' }}">Price: High to Low</a>
                </div>
            </div>
            <hr/>
            @foreach ($productLists as $more_product)

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 ">
                    <div class="card m-2">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">{{$more_product->title}}</p>
                        </div>

                        <a href="{{route('customer.radar.sign', $more_product->slug)}}" class="text-dark"> <img
                                src="{{url("storage")."/".($more_product->cover_image??"/default.png")}}"
                                class="card-img-top" alt="{{$more_product->category->title}}"/> </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">{{$more_product->category->title}}</a>
                                </p>
                                @php
                                    $exchange_rate = session('exchange_rate', '1');
                                    $currency_icon = session('currency_icon', '$');
                                @endphp
                                <h5 class="text-dark mb-0">{{$currency_icon}}{{number_format($more_product->price * $exchange_rate,2)}}</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Hello</h5>
                                <span> <a href="{{route('customer.radar.sign', $more_product->slug)}}"
                                          class="text-dark"> Learn More </a> </span>
                            </div>

                            <div class="d-flex justify-content-between mb-2">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('customer.layout2.footer2')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>

</script>
</body>

</html>

