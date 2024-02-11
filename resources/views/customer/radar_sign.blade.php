<?php
if(!isset($product)){
    ?>
    <div style="height: 100vh;text-align: center;display: flex;justify-content: center;align-items: center;">
        <h3>Sorry, This page not exist! </h3>
        <p> Visit <a href="https://photonplay.com">photonplay.com</a> for more information. </p>
    </div>
<?php

    return redirect()->route('customer.radar.speed.signs');
}
$seo_record = \App\Models\ProductSeo::where('product_id', $product->id)->first();
if (isset($seo_record)) {
    $seo_meta = [
        "title" => "{$seo_record->meta_title}",
        "description" => "{$seo_record->meta_description}",
        "keywords" => "{$seo_record->meta_keywords}",
        "schema" => "{$seo_record->schema}",
        "feature_image"=>'storage/'. $product->cover_image
    ];
}

?>

@php
    //    foreach($product->specilizations as $specilization){
    //    foreach($specilization->options as $option){
    //        //dd($option);
    //    }
    //    }
@endphp
@push('header_meta_content')
    <meta property="og:type" content="product.item"/>
    <meta property="product:price:amount" content="{{$product->price}}"/>
    <meta property="product:price:currency" content="USD"/>
    <meta property="product:category" content="Radar Speed Signs"/>
    <meta property="product:availability" content="in stock"/>
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Radar Speed Signs {{$seo_record->meta_title}}",
  "image": "{{ asset('storage/'. $product->cover_image) }}",
  "description": "{{$seo_record->meta_description}}",
  "brand": {
    "@type": "Brand",
    "name": "Photonplay"
  },
  "sku": "{{strtolower(str_replace(' ', '', $product->title))}}",
  "offers": {
    "@type": "Offer",
    "url": "{{route('customer.radar.sign', $product->slug)}}",
    "priceCurrency": "USD",
    "price": "{{$product->price}}",
    "priceValidUntil": "2024-02-29",
    "shippingDetails": {
      "@type": "OfferShippingDetails",
      "shippingRate": {
        "@type": "MonetaryAmount",
        "value": {{$product->price}},
        "currency": "USD"
      },
      "shippingDestination":[ {
          "@type": "DefinedRegion",
          "addressCountry": "US"
        }, {
          "@type": "DefinedRegion",
          "addressCountry": "CA"
        }],
      "deliveryTime": {
        "@type": "ShippingDeliveryTime",
        "handlingTime": {
          "@type": "QuantitativeValue",
          "minValue": 7,
          "maxValue": 10,
          "unitCode": "DAY"
        },
        "transitTime": {
          "@type": "QuantitativeValue",
          "minValue": 5,
          "maxValue": 10,
          "unitCode": "DAY"
        }
      }
    },
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition",
    "hasMerchantReturnPolicy": {
      "@type": "MerchantReturnPolicy",
      "applicableCountry": "CH",
      "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
      "merchantReturnDays": 60,
      "returnMethod": "https://schema.org/ReturnByMail",
      "returnFees": "https://schema.org/FreeReturn"
    }
  },

  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.75",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "2",
    "reviewCount": "2"
  }
  }]
}
</script>
@endpush
@include('customer.layouts.header')
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<!-- Our Product-start -->
<section class="pt-0 pb-0">
    <ul class="list-style-ul pt-2 m-0 pb-2 d-flex justify-content-center align-items-center flex-wrap">
        @forelse ($productLists as $list)
            <a href="{{route('customer.radar.sign', $list->slug)}}" class="gap-1 text-decoration-none text-dark"><span
                    class="p-2  {{ request()->url() == route('customer.radar.sign', [$list->slug]) ? 'bg-dark text-white' : '' }}
 m-2">{{$list->title}}</span></a>
        @empty

        @endforelse
    </ul>
</section>
<!-- End Varient Section -->
<!-- Our Product-start -->
<section class="our-product pt-2 pb-2">
    <form id="myForm" action="{{route('customer.store.shopping.bag')}}" method="post">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
        <input type="hidden" name="title" id="title" value="{{$product->title}}">
        <input type="hidden" name="category" id="category" value="{{$product->category->title}}">
        <input type="hidden" name="price" id="price" value="{{$product->price}}">
        <input type="hidden" name="cover_image" id="cover_image" value="{{$product->cover_image}}">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div id="dynamic_specs">
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="desktop-display " style="max-height: 400px; overflow-y: auto;">
                                <slider>
                                    @include('partials.slider')
                                </slider>
                            </div>
                        </div>


                        <div class="col-md-9 bg-white">
                            <div class="responsive-two">
                                <div>
                                    <div class="p-2" id="slider_static">
                                    <div class="img-leften  d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('storage/' . ($product->images[0]->image ?? $product->cover_image)) }}" class="img-fluid"
                                                 style="max-height: 600px;" id="big-img-radar-product"
                                                 alt="{{$product->title}}">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="mobile-display">
                        <div class="d-flex flex-row flex-wrap">
                            @foreach($product->images as $im_g)

                                <div class="radar-item-box">
                                    <img src="{{asset('storage/'.$im_g->image)}}" class="img-fluid"
                                         alt="{{$product->title}}">
                                </div>
                            @endforeach
                            <div class="radar-item-box">
                                <img src="{{ asset('storage/'. $product->cover_image) }}" class="img-fluid"
                                     alt="{{$product->title}}">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="multiple-optionn pb-0 pt-lg-0 pt-5 pb-0">
                        <div class="d-flex justify-content-around align-items-center pt-1" style="float:right;">
                            @if($product->brochure)
                                <div>
                                    <a href="{{asset('storage/'.$product->brochure)}}"
                                       class="d-flex align-items-center text-decoration-none text-dark"
                                       style="height: 40px;padding:8px; width: 200px;" target="_blank">
                                        <img src="/assets/images/radar/pdf_icon.png" style="height:40px;" alt="PDF">
                                        &nbsp
                                        <span class="font-weight-bold"><u> {{$product->title}} PDF </u> </span>

                                    </a>
                                </div>
                            @endif

                        </div>
                        <h4 class="font-weight-bold">{{$product->category->title}}</h4>


                    <span class="text-capitalize d-block">
                        {{$product->title}}
                    </span>
                    @if ($product && $product->sku)
                        <span class="text-capitalize d-block">
                            <b>SKU : </b>{{$product->sku}}
                        </span>
                    @endif

                        <div class="d-flex justify-content-start align-items-center gap-1">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="1 Star" class="img-fluid"
                                 width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="2 Star" class="img-fluid"
                                 width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="3 Star" class="img-fluid"
                                 width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="4 Star" class="img-fluid"
                                 width="14px">
                            <img src="{{asset('assets\customer\images\star.svg')}}" alt="5 Star" class="img-fluid"
                                 width="14px">
                            <span>( 150+ Customers Reviews)</span>
                        </div>
                        <p class="fw-bold fs-5" id="total_price2">${{$product->price}}</p>
                        <div>
                            <p class="specific-heading">Select Specification</p>
                            <div class="row mt-3">

                                {{-- Loop to Start Specifications--}}
                                @foreach ($product->specilizations->reverse() as $specilization)
                                    <div class="col-md-8 bg-transparent">
                                        <div class="">
                                            <h6 class="text-dark"> {{$specilization->specilization->title}} </h6>
                                            <select class="form-select mb-3 " onchange="changecalculated_amount(this)"
                                                    name="dynamic_specs[{{$specilization->id}}]"
                                                    id="{{$specilization->id}}"
                                                    style="border: 2px solid black;font-weight: bold;" required>
                                                <option selected disabled>--Choose an Option--</option>
                                                @foreach($specilization->options as $option)

                                                    <option
                                                        value="{{$option->id}}">{{$option->specializationoptions->option}}
                                                        (+$<span class="price">{{$option->specialization_price}}</span>)
                                                        @if($specilization->specilization->title=="Cloud-Access")
                                                            @if(strtolower($option->specializationoptions->option)=="yes")
                                                                Subscription Free For 1 Year
                                                            @endif
                                                        @endif

                                                    </option>
                                                @endforeach
                                            </select>

                                            <!-- <p class="mb-0"><input type="checkbox"> 6 Days
                                                (+$50)
                                            </p> -->
                                        </div>
                                    </div>
                                @endforeach

                                <div class="mt-4">
                                    <h6 class="text-dark fw-bold">Faceplate (Select color):</h6>
                                    <div class="d-flex align-items-center ">
                                        <input type="hidden" name="color" value="Amber" id="colorchoose">
                                        <div class="selected-anc d-flex border-1 p-2 shadow-smm ">
                                            <div>
                                                <img src="{{asset('/assets/images/radar/color/Amber-Color.png')}}"
                                                     style="height:40px;" id="imgicon_color_st" alt="color"/>
                                            </div>

                                            <select class="form-select shadow-none" name="colorselected"
                                                    id="select-color" aria-label="Default select example" required
                                                    style="background-color: transparent; border: none;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;width: 120px;">
                                                <option value="Amber-Color.png"> Amber</option>
                                                <option value="White-Color.png"> White</option>
                                                <option value="Green-Color.png"> Green</option>
                                                {{--                                            <option value="Red-Color.png"> Orange </option>--}}

                                            </select>
                                            {{-- <input type="text" class="form-control shadow-none" name="postal_code" value="{{$postalCode->postal_code ?? null}}" placeholder="Postal Code" @if ($cartCount > 0) readonly @endif> --}}


                                        </div>

                                        <script>
                                            const selectElement = document.getElementById('select-color');
                                            const iconElement = document.querySelector('#imgicon_color_st');
                                            const colorHolderElement = document.querySelector('#colorchoose');
                                            const baseurl = '{{asset('/assets/images/radar/color/')}}';

                                            selectElement.addEventListener('change', function () {
                                                const selectedOption = this.options[this.selectedIndex];
                                                const selectedText = selectedOption.text;
                                                const selectedColor = this.value;
                                                colorHolderElement.value = selectedText;
                                                iconElement.src = baseurl + '/' + selectedColor;
                                            });
                                        </script>


                                    </div>
                                    <p class="mt-4">Comes with multiple power option such as Standalone Salar powered
                                        operations. <br>
                                        Shipping:7-10 Working Days.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>
        <!-- order summery-end -->
</section>
<section class="pt-lg-4 order-summery pb-4 border-bottom ">
    <!-- order summery-start -->
    <div class="container">
        <div class="row w-100">
            <!-- <div class=" px-3"> -->
            <div class="col-lg-8 col-md-8">
                <div class="d-flex align-items-md-center order-summery gap-2 ">
                    {{--                    <span class="border-1 border-right d-block  pe-lg-5 pe-4">Order--}}
                    {{--                        Summary</span>--}}
                    <div class="border-left  ">
                        <h1 class="fw-bold fs-5 mb-0 py-lg-0 py-3 text-dark">{{$product->category->title}}
                            | {{$product->title}}</h1>
                        <p class="mb-0 opacity-50">{{$product->color}} | {{$product->warranty}}
                            Warranty</p>
                    </div>
                    <div class="border-left  ">
                        <a href="#inquiry"
                           class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Inquiry</a>
                    </div>

                </div>
            </div>
            <div class=" col-lg-4 col-md-4">
                <div class="d-md-flex  justify-content-end mt-lg-0 mt-4 buy-right align-items-center">
                    <a class="btn btn-dark d-flex align-items-center m-2" onclick="increment()"
                       style="height: 20px;width: 40px;">+</a>
                    <input id=demoInput type=number class="text-center " name="quantity" value="1" min=1 max=100>
                    <a class="btn btn-dark m-2 d-flex align-items-center" onclick="decrement()"
                       style="height: 20px;width: 40px;">-</a>
                    <div class=" px-4 py-lg-0 py-4">
                        <span class="one-thoshand" id="total_price">${{$product->price}}</span>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Buy
                        Now
                    </button>
                    <button type="button" id="add_to_cart" value="add_to_cart"
                            class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Add to Cart
                    </button>
                </div>
            </div>


            <!-- </div> -->
        </div>
    </div>
</section>
</form>

<!-- improving-section-start -->


<section>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark active ms-0" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">
                            Description
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                            Features
                        </button>
                    </li>
                    {{--                    <li class="nav-item" role="presentation">--}}
                    {{--                        <button class="nav-link text-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">--}}
                    {{--                            Features--}}
                    {{--                        </button>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item" role="presentation">--}}
                    {{--                        <button class="nav-link text-dark" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">--}}
                    {{--                            Power option--}}
                    {{--                        </button>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item" role="presentation">--}}
                    {{--                        <button class="nav-link text-dark" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-panel" type="button" role="tab" aria-controls="contact-tab-panel" aria-selected="false">--}}
                    {{--                            Visibility--}}
                    {{--                        </button>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item" role="presentation">--}}
                    {{--                        <button class="nav-link text-dark" id="deal-tabish" data-bs-toggle="tab" data-bs-target="#deal-tab" type="button" role="tab" aria-controls="deal-tab" aria-selected="false">--}}
                    {{--                            Ideal For--}}
                    {{--                        </button>--}}
                    {{--                    </li>--}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane mt-3 fade show active" id="home-tab-pane" role="tabpanel"
                         aria-labelledby="home-tab" tabindex="0">
                        {!! $product->description!!}
                    </div>
                    <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                         tabindex="0">
                        <x-Customer.Radar.Features/>


                    </div>
                    {{--                    <div class="tab-pane fade mt-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">   {!!$product->feature!!}</div>--}}
                    {{--                    <div class="tab-pane fade mt-3" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0"> {!!$product->power_option!!} </div>--}}
                    {{--                    <div class="tab-pane fade mt-3" id="contact-tab-panel" role="tabpanel" aria-labelledby="visibility-tab " tabindex="0">  {!!$product->visibility!!} </div>--}}
                    {{--                    <div class="tab-pane fade mt-3" id="deal-tab" role="tabpanel" aria-labelledby="deal-tabish" tabindex="0"> {!!$product->ideal_for!!}</div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.get_in_touch')

<section class="icop-series pt-4">
    <div class="container" id="our_products">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">More Products</h2>
                    <h6 class="fs-6 text-colorr text-uppercase">Our product offers innovative solutions to meet your
                        needs and exceed your expectations.
                    </h6>
                </div>
            </div>
            <div class="responsive">
                @foreach ($productLists as $more_product)
                    <div>
                        <div class="p-2">
                            <div class="product_highlight inner-product bg-white">
                                <div class=" w-100 h-100 light-product m-auto" style="background: url('{{ asset('storage/'. $more_product->cover_image) }}') no-repeat center;
                                    background-size: contain;">
                                    {{--                                    <img class=""  src="" alt="">--}}
                                </div>
                                <div class="speed-sign text-center mt-3">
                                    <span class="d-block weight-font">
                                        Radar Speed Sign
                                    </span>
                                    <span class="d-block">{{$more_product->title}}</span>
                                    <div class="d-flex justify-content-center align-items-center my-2 gap-1">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="1 Star"
                                             class="img-fluid"
                                             width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="2 Star"
                                             class="img-fluid"
                                             width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="3 Star"
                                             class="img-fluid"
                                             width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="4 Star"
                                             class="img-fluid"
                                             width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="5 Star"
                                             class="img-fluid"
                                             width="14px">
                                    </div>
                                    <span class="d-block weight-font">$ {{$more_product->price}}</span>
                                    <a href="{{route('customer.radar.sign', $more_product->slug)}}"
                                       class="btn btn-primary text-capitalize mt-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.responsive-two').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.responsive-two',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        autoplay: true,
        arrows: false
    });
    let totalPrice = 0
    // function increment() {
    //     let inputV=document.getElementById('demoInput')
    //     inputV.stepUp();
    //     let innerPrice=document.getElementById("total_price")
    //     const totl=Number(innerPrice.innerHTML.slice(1,innerPrice.length))
    //     if(!totalPrice) totalPrice=totl-selectedValue.reduce((a,b)=>a+b,0)
    //     innerPrice.innerHTML=`$${totl+totalPrice+selectedValue.reduce((a,b)=>a+b,0)}`
    // }
    // function decrement() {
    //     let inputV=document.getElementById('demoInput')
    //     console.log(inputV.value)
    //     if(inputV.value==1) return
    //     inputV.stepDown();
    //     let innerPrice=document.getElementById("total_price")
    //     const totl=Number(innerPrice.innerHTML.slice(1,innerPrice.length))
    //     if(!totalPrice) totalPrice=totl
    //     innerPrice.innerHTML=`$${totl-totalPrice-selectedValue.reduce((a,b)=>a+b,0)}`
    // }

    var dict = {};
    const selectedValue = []

    function GetSelected(radio) {
        var chected = new Array();
        if (radio.checked) {
            dict[radio.id] = radio.value;
            $.ajax({
                url: '{{ route("customer.specification.ajax") }}',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {dict: dict},
                success: function (response) {
                    $('#dynamic_specs').html("");
                    var input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "dynamic_spec[]";
                    input.value = response;
                    document.getElementById("dynamic_specs").appendChild(input);
                    let innerPrice = document.getElementById("total_price")
                    let inputV = document.getElementById('demoInput')
                    selectedValue.push(Number(radio.title))
                    innerPrice.innerHTML = `$${Number(innerPrice.innerHTML.slice(1, innerPrice.length)) + (Number(radio.title) * Number(inputV.value))}`
                },
            });
        } else {
            let val = dict[radio.id];
            $.ajax({
                url: '{{ route("customer.specification.ajax") }}',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {dict: dict},
                success: function (response) {
                    $('#dynamic_specs').html("");
                    var input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "spec[]";
                    input.value = response;
                    document.getElementById("dynamic_specs").appendChild(input);
                    let innerPrice = document.getElementById("total_price")
                    let inputV = document.getElementById('demoInput')
                    let find = selectedValue.indexOf(Number(radio.title))
                    selectedValue.splice(find, 1)
                    innerPrice.innerHTML = `$${Number(innerPrice.innerHTML.slice(1, innerPrice.length)) - (Number(radio.title) * (Number(inputV.value)))}`
                },
            });
        }

        const checkboxes = document.querySelectorAll(`input[name="${radio.id}"]`);
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('click', () => {
                if (checkbox.checked) {
                    checkboxes.forEach((otherCheckbox) => {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    }

    $(document).ready(function () {
        $('#add_to_cart').click(function () {
            var formData = $('#myForm').serialize(); // Serialize the form data
            var url = "{{ route('customer.store.shopping.bag', ['p' => 1]) }}";
            $.ajax({
                url: url, // Replace with your API endpoint
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Handle the success response from the server
                    location.reload();
                },
                error: function (xhr, status, error) {
                    // Handle the error response from the server
                }
            });
        });
    });
</script>
<script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    // CODE TO CHANGE IMAGE ON HOVER
    $(document).ready(function () {

        $("#select-color").change(function() {
                    var color = $(this).children("option:selected").text().toLocaleLowerCase();
                    // console.log(color)
                    var id = $('#product_id').val();
                    $("#colorMultipleImages").val(color);

                    $.ajax({
                        url: "/product/" + id + "/edit/media-ajax",
                        type: "GET",
                        data: {
                            'id': id,
                            'color': color,
                            'frontSlider':true
                        },
                        success: function(response) {
                            // console.log(response);
                            $('slider').html('');
                            $('#slider_static').html('');

                            response.map((res)=>{
                                $('slider').append(
                                    `<div>
                                        <div class="radar-item-box">
                                            <img src="{{asset('storage/${res.image}')}}" class="img-fluid"
                                                    alt="{{$product->title}}">
                                        </div>
                                    </div>`
                                )

                                // console.log(res)
                            })
                            $('#slider_static').append(
                                    `<div class="img-leften  d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('storage/${response[0].image}') }}" class="img-fluid"
                                                 style="max-height: 600px;" id="big-img-radar-product"
                                                 alt="{{$product->title}}">
                                        </div>`
                                )
                            $('#prodImg-gallery').html(response)
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        },
                        complete: function() {
                            $('.radar-item-box').hover(function () {
                                $('.radar-item-box').removeClass("radar-item-box-highlight");
                                $(this).addClass("radar-item-box-highlight");
                                let image = $(this).find('img');
                                let src = image.attr('src');
                                $('#big-img-radar-product').attr('src', src)
                            });
                        }
                    });

        });


        $('.radar-item-box').hover(function () {
            $('.radar-item-box').removeClass("radar-item-box-highlight");
            $(this).addClass("radar-item-box-highlight");
            let image = $(this).find('img');
            let src = image.attr('src');
            $('#big-img-radar-product').attr('src', src)


        });


    });

    /**************************************
     // Vicky Chhetri JS ZONE : Begin
     ************************************/
    var total_amount = {{$product->price??0}};
    var product_amount = {{$product->price??0}};
    var total_amount_single_product = {{$product->price??0}};
    var single_items_cart = {};

    function extractAmountFromString(string) {
        var regex = /\+\$(\d+(?:\.\d{2})?)/;
        var match = string.match(regex);
        if (match) {
            var amount = parseFloat(match[1]);
            return amount;
        }
        return null; // Return null if no amount is found
    }


    function changecalculated_amount(price_element) {
        console.log('price_element', price_element);
        const selectedOption = price_element.options[price_element.selectedIndex];
        console.log('selectedOption', selectedOption);

        var total_price = document.getElementById('total_price');
        console.log('total_price', total_price);
        var total_price2 = document.getElementById('total_price2');
        console.log('total_price2', total_price2);

        var counts = document.getElementById('demoInput').value;
        console.log('counts', counts);

        var inputString = selectedOption.text;
        console.log('inputString', inputString);

        var amount = extractAmountFromString(inputString);
        console.log('amount', amount);

        single_items_cart[price_element.id] = amount;
        console.log('single_items_cart', single_items_cart);

        console.log('total_amount_single_product', total_amount_single_product);

        let extra_option_amount = 0;
        for (let key in single_items_cart) {
            if (single_items_cart.hasOwnProperty(key)) {
                let value = single_items_cart[key];
                extra_option_amount += parseInt(value);
            }
        }
        console.log('extra_option_amount', extra_option_amount);

        if (amount != null) {
            total_amount_single_product = product_amount + extra_option_amount;
        }
        console.log('product_amount', product_amount);

        console.log(total_amount_single_product);
        total_price.innerText = '$' + counts * total_amount_single_product;
        total_price2.innerText = '$' + counts * total_amount_single_product;

    }

    function increment() {
        let inputV = document.getElementById('demoInput')
        inputV.stepUp();
        // let innerPrice=document.getElementById("total_price")
        // const totl=Number(innerPrice.innerHTML.slice(1,innerPrice.length))
        // if(!totalPrice) totalPrice=totl-selectedValue.reduce((a,b)=>a+b,0)
        // innerPrice.innerHTML=`$${totl+totalPrice+selectedValue.reduce((a,b)=>a+b,0)}`

        var total_price = document.getElementById('total_price');
        var total_price2 = document.getElementById('total_price2');
        var counts = document.getElementById('demoInput').value;
        total_amount = parseInt(counts) * parseFloat(total_amount_single_product);
        total_price.innerText = '$' + total_amount;
        total_price2.innerText = '$' + total_amount;


    }

    function decrement() {
        let inputV = document.getElementById('demoInput')
        console.log(inputV.value)
        if (inputV.value == 1) return
        inputV.stepDown();
        var total_price = document.getElementById('total_price');
        var total_price2 = document.getElementById('total_price2');
        var counts = document.getElementById('demoInput').value;
        total_amount = parseInt(counts) * parseFloat(total_amount_single_product);
        total_price.innerText = '$' + total_amount;
        total_price2.innerText = '$' + total_amount;
        // let innerPrice=document.getElementById("total_price")
        // const totl=Number(innerPrice.innerHTML.slice(1,innerPrice.length))
        // if(!totalPrice) totalPrice=totl
        // innerPrice.innerHTML=`$${totl-totalPrice-selectedValue.reduce((a,b)=>a+b,0)}`
    }
</script>
</body>
</html>
