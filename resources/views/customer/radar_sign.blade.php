<?php
if (!isset($product)) {
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
        "feature_image" => 'storage/' . $product->cover_image
    ];
}

$currency_icon = session('currency_icon', '$');
$exchange_rate = session('exchange_rate', '1');
?>

@php
    // foreach($product->specilizations as $specilization){
    // foreach($specilization->options as $option){
    // //dd($option);
    // }
    // }
@endphp
@push('header_meta_content')
    <meta property="og:type" content="product.item" />
    <meta property="product:price:amount" content="{{$product->price}}" />
    <meta property="product:price:currency" content="USD" />
    <meta property="product:category" content="Radar Speed Signs" />
    <meta property="product:availability" content="in stock" />
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
                "shippingDestination": [{
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/magnifier/magnifier.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/magnifier/custom_magnifier.css') }}">

{{--    <script type="text/javascript" src="{{ asset('assets/js/magnifier/Event.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('assets/js/magnifier/Magnifier.js') }}"></script>--}}


@endpush
@include('customer.layouts.header')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    #preview1 {
        z-index: -999;
        transition: z-index 0.3s ease;
        display: none;
    }
    @media screen and (min-width: 1024px) {
        .slider_static:hover #preview1 {
            z-index: 999;
            display: block;
        }
    }
    .v_zoom-product-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .v_zoom-image-container {
        width: 400px;
        height: 400px;
        position: relative;
    }

    #big-img-radar-product {
        width: 100%;
        height: 100%;
        object-fit: cover;
        cursor: pointer;
    }

    .v_zoom-zoom-container {
        position: absolute;
        top: 165px;
        left: 720px; /* Adjust to position next to the image */
        width: 600px;
        height: 500px;
        /*border: 3px solid #ccc;*/
        display: none;
        overflow: hidden;
        /*background-color: rgba(223, 223, 230, 0.8);*/
    }

    #v_zoom-zoomed-image {
        position: absolute;
        width: 900px; /* Adjust to match zoom scale */
        height: 900px; /* Adjust to match zoom scale */
        transform-origin: top left;
        transition: transform 0.1s ease;
    }

    .v_zoom-focus-area {
        position: absolute;
        /*border: 2px dashed rgba(0, 0, 0, 0.5);*/
        pointer-events: none;
        width: 200px;
        height: 200px;
        visibility: hidden;
        background: rgba(0, 0, 0, 0.2);
    }

</style>


{{--<div id="preview1" style="display: block; position: absolute; right:10%;max-height: 100%;max-width:1000px;overflow: hidden;height: 500px;width: 500px;">--}}
{{--</div>--}}
    <div id="v_zoom-zoom-container" class="v_zoom-zoom-container">
        <img id="v_zoom-zoomed-image" src="" alt="Zoomed Product Image">
    </div>
<!-- Our Product-start -->
<section class="pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="d-flex justify-content-between align-items-center pt-2 pb-2">
                    <nav aria-label="breadcrumb m-3 p-3">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$product->category->title}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route("customer.product.shop")}}">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
                        </ol>
                    </nav>

                    <div class="text-end">
                        <img src="https://cdn-icons-png.flaticon.com/512/9165/9165147.png" style="max-width: 50px;">
                        <button href="#" class="btn btn-primary btn-sm p-1 pt-0 pb-0 " id="liveChatButton" style="border-radius: 15px;"> Live Chat</button>
                        <script type="text/javascript">
                            // Wait for the document to load
                            document.addEventListener('DOMContentLoaded', function () {
                                // Get the button element
                                const liveChatButton = document.getElementById('liveChatButton');

                                // Add click event listener
                                liveChatButton.addEventListener('click', function (event) {
                                    event.preventDefault(); // Prevent default button behavior
                                    // Check if the Tawk API is loaded
                                    if (typeof Tawk_API !== 'undefined') {
                                        Tawk_API.toggle(); // Open/close the Tawk.to chat widget
                                    } else {
                                        console.error('Tawk.to API is not available.');
                                    }
                                });
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


{{--product details start--}}
<livewire:radar :product_id="$id"/>
{{--product details end--}}
@include('customer.layout2.get_resources')

<section class="icop-series pt-4">
    <div class="container" id="our_products">
        <div class="row">
            <div class="col-lg-12 p-0 m-0">
                <h4>Related Products</h4>
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
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.get_in_touch3')


@include('customer.layout2.footer2')
<!-- Modal -->
<form id="downloadForm">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Download Brochure</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <input type="hidden" value="{{ $id }}" name="model_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name_b" class="form-label">Your Name</label>
                        <input class="form-control" type="text" id="name_b" name="name_b" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_b" class="form-label">Your Email</label>
                        <input class="form-control" type="email" id="email_b" name="email_b" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number_b" class="form-label">Your Phone Number</label>
                        <input class="form-control" type="number" id="phone_number_b" name="phone_number_b" required>
                    </div>
                    <input type="hidden" name="pdf" value="{{$product->brochure}}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Download</button>

                </div>
            </div>
        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('#downloadForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route("download.brochure") }}',
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status && response.download_url) {
                        var link = document.createElement('a');
                        link.href = response.download_url;
                        link.target = '_blank';
                        link.download = 'brochure.pdf';

                        document.body.appendChild(link);
                        link.click();

                        document.body.removeChild(link);

                        $('#downloadForm')[0].reset();
                        $('#exampleModal').modal('hide');
                    } else {
                        alert('Error downloading brochure: File not found');
                    }
                },
                error: function (xhr, status, error) {
                    alert('Error downloading brochure');
                }
            });
        });
    });
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
                data: {
                    dict: dict
                },
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
                data: {
                    dict: dict
                },
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
                    // location.reload();
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
        responsive: [{
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
    $(document).ready(function() {

        $(".color_select_box_handler").change(function() {
            var color_code = $(this).children("option:selected").attr("data-code").toLocaleLowerCase();
            console.log(color_code)
            const colorMap = {
                "am": "amber",
                "wh": "white",
                "gc": "green"
            };
           var color= colorMap[color_code];
            var id = $('#product_id').val();
            $("#colorMultipleImages").val(color);

            $.ajax({
                url: "/product/" + id + "/edit/media-ajax",
                type: "GET",
                data: {
                    'id': id,
                    'color': color,
                    'frontSlider': true
                },
                success: function(response) {
                    // console.log(response);
                    $('slider').html('');
                    $('#slider_static').html('');

                    response.map((res) => {
                        $('slider').append(
                            `<div>
                                        <div class="radar-item-box">
                                            <img src="{{asset('storage/thumbnail/${res.image}')}}" class="img-fluid"
                                                    alt="{{$product->title}}">
                                        </div>
                                    </div>`
                        )

                        // console.log(res)
                    })
                    $('#slider_static').append(
                        `<div class="img-leften  d-flex justify-content-center align-items-center v_zoom-image-container">
                                            <img src="{{ asset('storage/${response[0].image}') }}" class="img-fluid"
                                                 style="max-height: 600px;" id="big-img-radar-product"
                                                 alt="{{$product->title}}">
                                        </div>
                                        <div id="v_zoom-focus-area" class="v_zoom-focus-area"></div>`
                    )
                    $('#prodImg-gallery').html(response)
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                },
                complete: function() {
                    $('.radar-item-box').click(function() {
                        // Remove highlight from all items
                        $('.radar-item-box').removeClass("radar-item-box-highlight");

                        // Highlight the clicked item
                        $(this).addClass("radar-item-box-highlight");

                        // Get the image element and its source
                        let image = $(this).find('img');
                        let src = image.attr('src');

                        // Remove "thumbnail" from the src
                        src = src.replace('thumbnail', '');

                        // Set the modified source to the big image
                        $('#big-img-radar-product').attr('src', src);
                    });

                    const productImage = document.getElementById('big-img-radar-product');
                    const zoomContainer = document.getElementById('v_zoom-zoom-container');
                    const zoomedImage = document.getElementById('v_zoom-zoomed-image');
                    const imageContainer = document.querySelector('.v_zoom-image-container');
                    const focusArea = document.getElementById('v_zoom-focus-area');
                    const scale = 1; // Adjust zoom level

                    productImage.addEventListener('mousemove', function(e) {
                        var dynamic_image = productImage.src;
                        zoomedImage.src = dynamic_image;
                        zoomContainer.style.display = 'block';
                        focusArea.style.visibility = 'visible';

                        const containerRect = imageContainer.getBoundingClientRect();
                        const mouseX = e.pageX - containerRect.left - window.scrollX;
                        const mouseY = e.pageY - containerRect.top - window.scrollY;

                        const focusWidth = focusArea.offsetWidth;
                        const focusHeight = focusArea.offsetHeight;

                        const focusX = Math.max(0, Math.min(mouseX - focusWidth / 2, containerRect.width - focusWidth));
                        const focusY = Math.max(0, Math.min(mouseY - focusHeight / 2, containerRect.height - focusHeight));

                        focusArea.style.left = `${focusX}px`;
                        focusArea.style.top = `${focusY}px`;

                        const zoomX = (focusX / containerRect.width) * (zoomedImage.offsetWidth + zoomContainer.offsetWidth);
                        const zoomY = (focusY / containerRect.height) * (zoomedImage.offsetHeight + zoomContainer.offsetHeight);

                        zoomedImage.style.transform = `translate(-${zoomX}px, -${zoomY}px) scale(${scale})`;
                    });

                    productImage.addEventListener('mouseleave', function() {
                        zoomContainer.style.display = 'none';
                        focusArea.style.visibility = 'hidden';
                    });

                }
            });

        });

        $('.radar-item-box').click(function() {
            // Remove highlight from all items
            $('.radar-item-box').removeClass("radar-item-box-highlight");

            // Highlight the clicked item
            $(this).addClass("radar-item-box-highlight");

            // Get the image element and its source
            let image = $(this).find('img');
            let src = image.attr('src');

            // Remove "thumbnail" from the src
            src = src.replace('thumbnail', '');

            // Set the modified source to the big image
            $('#big-img-radar-product').attr('src', src);
        });



    });

    /**************************************
     // Vicky Chhetri JS ZONE : Begin
     ************************************/
    var total_amount = {{$product->price ?? 0}};
    var product_amount = {{$product->price ?? 0}};
    var total_amount_single_product = {{$product->price ?? 0}};
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


    // function changecalculated_amount(price_element) {
    //     console.log('price_element', price_element);
    //     const selectedOption = price_element.options[price_element.selectedIndex];
    //     console.log('selectedOption', selectedOption);
    //
    //     var total_price = document.getElementById('total_price');
    //     console.log('total_price', total_price);
    //     var total_price2 = document.getElementById('total_price2');
    //     console.log('total_price2', total_price2);
    //
    //     var counts = document.getElementById('demoInput').value;
    //     console.log('counts', counts);
    //
    //     var inputString = selectedOption.text;
    //     console.log('inputString', inputString);
    //
    //     var amount = extractAmountFromString(inputString);
    //     console.log('amount', amount);
    //
    //     single_items_cart[price_element.id] = amount;
    //     console.log('single_items_cart', single_items_cart);
    //
    //     console.log('total_amount_single_product', total_amount_single_product);
    //
    //     let extra_option_amount = 0;
    //     for (let key in single_items_cart) {
    //         if (single_items_cart.hasOwnProperty(key)) {
    //             let value = single_items_cart[key];
    //             extra_option_amount += parseInt(value);
    //         }
    //     }
    //     console.log('extra_option_amount', extra_option_amount);
    //
    //     if (amount != null) {
    //         total_amount_single_product = product_amount + extra_option_amount;
    //     }
    //     console.log('product_amount', product_amount);
    //
    //     console.log(total_amount_single_product);
    //     total_price.innerText = '$' + counts * total_amount_single_product;
    //     total_price2.innerText = '$' + counts * total_amount_single_product;
    //
    // }

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

    const productImage = document.getElementById('big-img-radar-product');
    const zoomContainer = document.getElementById('v_zoom-zoom-container');
    const zoomedImage = document.getElementById('v_zoom-zoomed-image');
    const imageContainer = document.querySelector('.v_zoom-image-container');
    const focusArea = document.getElementById('v_zoom-focus-area');
    const scale = 1; // Adjust zoom level

    productImage.addEventListener('mousemove', function(e) {
        var dynamic_image = productImage.src;
        zoomedImage.src = dynamic_image;
        zoomContainer.style.display = 'block';
        focusArea.style.visibility = 'visible';

        const containerRect = imageContainer.getBoundingClientRect();
        const mouseX = e.pageX - containerRect.left - window.scrollX;
        const mouseY = e.pageY - containerRect.top - window.scrollY;

        const focusWidth = focusArea.offsetWidth;
        const focusHeight = focusArea.offsetHeight;

        const focusX = Math.max(0, Math.min(mouseX - focusWidth / 2, containerRect.width - focusWidth));
        const focusY = Math.max(0, Math.min(mouseY - focusHeight / 2, containerRect.height - focusHeight));

        focusArea.style.left = `${focusX}px`;
        focusArea.style.top = `${focusY}px`;

        const zoomX = (focusX / containerRect.width) * (zoomedImage.offsetWidth + zoomContainer.offsetWidth);
        const zoomY = (focusY / containerRect.height) * (zoomedImage.offsetHeight + zoomContainer.offsetHeight);

        zoomedImage.style.transform = `translate(-${zoomX}px, -${zoomY}px) scale(${scale})`;
    });

    productImage.addEventListener('mouseleave', function() {
        zoomContainer.style.display = 'none';
        focusArea.style.visibility = 'hidden';
    });
</script>
</body>

</html>

