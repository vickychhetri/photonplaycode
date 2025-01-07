@php
   $country_code = Illuminate\Support\Facades\Session::get('country_code', 'US');
@endphp
<div>
    <section class="our-product pt-2 pb-2">
{{--        <form id="myForm" action="{{ route('customer.store.shopping.bag') }}" method="post">--}}
        <form wire:submit.prevent="addToCart">
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
            <input type="hidden" wire:model="title" name="title" id="title" value="{{ $product->title }}">
            <input type="hidden" wire:model="category" name="category" id="category" value="{{ $product->category->title }}">
            <input type="hidden" wire:model="price" name="price" id="price" value="{{ $country_code=="CA"? $product->price_canada*$exchange_rate:$product->price*$exchange_rate }}">
            <input type="hidden" wire:model="cover_image" name="cover_image" id="cover_image" value="{{ $product->cover_image }}">

            <div class="container">
                <div class="row">
                    <!-- Product Image & Slider Section -->
                    <div class="col-lg-6">
                        <div id="dynamic_specs"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="desktop-display" style="max-height: 400px; overflow-y: auto;" wire:ignore >
                                    <slider>
                                        @include('partials.slider')
                                    </slider>
                                </div>
                            </div>
                            <div class="col-md-9 bg-white" id="main_screen_image_cover_div" wire:ignore >
                                <div class="responsive-two">
                                    <div>
                                        <div class="p-2 v_zoom-product-container" id="slider_static">
                                            <div class="img-leften d-flex justify-content-center align-items-center v_zoom-image-container">
                                                <img src="{{ asset('storage/' . ($product->images[0]->image ?? $product->cover_image)) }}"
                                                      class="thumb img-fluid" style="max-height: 600px;" id="big-img-radar-product" alt="{{ $product->title }}"  wire:ignore>
                                                <div id="v_zoom-focus-area" class="v_zoom-focus-area"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Display Images -->
                        <div class="mobile-display">
                            <div class="d-flex flex-row flex-wrap">
                                @foreach($product->images as $im_g)
                                    <div class="radar-item-box">
                                        <img src="{{ asset('storage/'.$im_g->image) }}" class="img-fluid" alt="{{ $product->title }}"  wire:ignore >
                                    </div>
                                @endforeach
                                <div class="radar-item-box">
                                    <img src="{{ asset('storage/'.$product->cover_image) }}" class="img-fluid" alt="{{ $product->title }}"  wire:ignore>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details and Specifications Section -->
                    <div class="col-lg-6">
                        <div class="multiple-optionn pb-0 pt-lg-0 pt-5 pb-0" >
                            <div class="d-flex justify-content-around align-items-center pt-1" style="float:right;">
                            </div>

                            <h4 class="font-weight-bold">{{ $product->product_heading_text??$product->title }}</h4>
                            <span class="text-capitalize d-block">{{ $product->category->title }}</span>
                            <div>
                                <label for="sku" class="sku_dis" >SKU:</label>
                                <span id="sku-display" class="sku_dis"  wire:ignore ></span>
                            </div>
                            <!-- Product Price Section -->
                            @if($product->is_price_hide != 1)
                                <p class="fs-2" id="total_price2"><span x-ref="total_price">{{$currency_icon}}{{ $price }}</span></p>
                            @else
                                <p class="fw-bold fs-5" id="total_price2"></p>
                            @endif

                            <!-- Specifications Section -->
                            <div>
                                <p class="specific-heading pb-1">Select Specification</p>
                                </div>
                                <div x-data="{
                                        dynamic_specs: {},
                                        total_amount_single_product: {{ $country_code=="CA"? $product->price_canada*$exchange_rate:$product->price*$exchange_rate }},
                                        product_amount: {{ $country_code=="CA"?$product->price_canada*$exchange_rate:$product->price*$exchange_rate }},
                                        counts: 1,
                                        total_price: {{ $country_code=="CA"?$product->price_canada*$exchange_rate:$product->price*$exchange_rate }},

                                        changeCalculatedAmount(specId, priceElement) {
                                            const selectedOption = priceElement.options[priceElement.selectedIndex];

                                            let amount = this.extractAmountFromString(selectedOption.text);

                                            this.dynamic_specs[specId] = amount;

                                            let extra_option_amount = 0;
                                            Object.values(this.dynamic_specs).forEach(value => {
                                                extra_option_amount += parseInt(value);
                                            });

                                            this.total_amount_single_product = this.product_amount + extra_option_amount;

                                            this.updateTotalPrice();
                                        },

                                        extractAmountFromString(inputString) {
                                            const amountMatch = inputString.match(/\(\+?\$([0-9]+)\)/);
                                            return amountMatch ? amountMatch[1] : 0;
                                        },

                                        updateTotalPrice() {
                                            const total_price = this.counts * this.total_amount_single_product;

                                            @this.set('price', total_price);

                                            this.$nextTick(() => {
                                                const priceElements = this.$el.querySelectorAll('.total-price');
                                                priceElements.forEach(priceElement => {
                                                    priceElement.innerText = '$' + total_price;
                                                });
                                            });
                                        }
                                    }" class="row">

                                    @foreach ($product->specilizations->reverse() as $specilization)
                                        <div class="col-md-8 bg-transparent">

                                            <h6 class="text-dark" style="font-weight: bold;">{{ $specilization->specilization->title }}</h6>

                                            @if($specilization->specilization->code=="CR")
                                                <div class="d-flex justify-content-center">
                                                    <select x-on:change="changeCalculatedAmount({{ $specilization->id }}, $event.target)"
                                                            x-bind:name="'dynamic_specs[' + {{ $specilization->id }} + ']'"
                                                            x-model="dynamic_specs.{{ $specilization->id }}"
                                                            wire:model="dynamic_specs.{{ $specilization->id }}"
                                                            id="{{ $specilization->id }}"
                                                            class="form-select mb-3 color_select_box_handler sku-builder"
                                                            style="border: 2px solid black;"
                                                            data-code="{{$specilization->specilization->code}}"
                                                            wire:ignore
                                                            required>
                                                        <option selected>--Choose an Option--</option>
                                                        <!-- Loop through each option for this specialization -->
                                                        @foreach($specilization->options as $option)
                                                            <option value="{{ $option->id }}"  data-code="{{ $option->specializationoptions->code }}">
                                                                {{ $option->specializationoptions->option }}
                                                                @if($country_code=="CA")
                                                                    (+$<span class="price">{{ $option->specialization_price_ca*$exchange_rate }}</span>)
                                                                @else
                                                                    (+$<span class="price">{{ $option->specialization_price*$exchange_rate }}</span>)
                                                                @endif
                                                                @if($specilization->specilization->title == "Cloud-Access" && strtolower($option->specializationoptions->option) == "yes")
                                                                    Subscription Free For 1 Year
                                                                @endif
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    &nbsp;
                                                    <span>
                                                    <img src="{{asset('/assets/images/radar/color/AM.png')}}" style="height:40px;" id="imgicon_color_st-{{ $specilization->id }}"  alt="color" wire:ignore />
                                                   </span>

                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function () {
                                                            // Get the select element and image element
                                                            const selectElement = document.getElementById('{{ $specilization->id}}');
                                                            console.log(selectElement);
                                                            const imgElement = document.getElementById('imgicon_color_st-{{ $specilization->id }}');
                                                            // Add an event listener to handle changes
                                                            selectElement.addEventListener('change', function () {
                                                                // Get the selected option
                                                                const selectedOption = selectElement.options[selectElement.selectedIndex];
                                                                // Retrieve the data-code attribute
                                                                const code = selectedOption.getAttribute('data-code');
                                                                @php
                                                                    $base_url_website=env('APP_URL', 'http://127.0.0.1:8000/')
                                                                @endphp
                                                                // Update the image source dynamically
                                                                if (code) {
                                                                    const newImageSrc = `{{$base_url_website}}/assets/images/radar/color/${code}.png`;
                                                                    console.log('Preloading image:', newImageSrc);
                                                                    const preloadImage = new Image();
                                                                    console.log('Preload object created');
                                                                    preloadImage.src = newImageSrc;
                                                                    preloadImage.onload = function () {
                                                                        console.log('Image successfully loaded:', newImageSrc);
                                                                        imgElement.src = newImageSrc;
                                                                    };
                                                                    preloadImage.onerror = function () {
                                                                        console.error('Failed to preload image:', newImageSrc);
                                                                    };
                                                                }
                                                            });
                                                        });
                                                    </script>

                                                </div>

                                            @else
                                                <select x-on:change="changeCalculatedAmount({{ $specilization->id }}, $event.target)"
                                                        x-bind:name="'dynamic_specs[' + {{ $specilization->id }} + ']'"
                                                        x-model="dynamic_specs.{{ $specilization->id }}"
                                                        wire:model="dynamic_specs.{{ $specilization->id }}"
                                                        id="{{ $specilization->id }}"
                                                        class="form-select mb-3 sku-builder"
                                                        style="border: 2px solid black;"
                                                        data-code="{{$specilization->specilization->code}}"
                                                        wire:ignore
                                                        required>
                                                    <option selected>--Choose an Option--</option>
                                                    <!-- Loop through each option for this specialization -->
                                                    @foreach($specilization->options as $option)
                                                        <option value="{{ $option->id }}"  data-code="{{ $option->specializationoptions->code }}">
                                                            {{ $option->specializationoptions->option }}
                                                            @if($country_code=="CA")
                                                                (+$<span class="price">{{ $option->specialization_price_ca*$exchange_rate }}</span>)
                                                            @else
                                                                (+$<span class="price">{{ $option->specialization_price*$exchange_rate }}</span>)
                                                            @endif
                                                            @if($specilization->specilization->title == "Cloud-Access" && strtolower($option->specializationoptions->option) == "yes")
                                                                Subscription Free For 1 Year
                                                            @endif
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    @endforeach


                                        <!-- Hidden input to store the SKU -->
                                        <input type="hidden" id="sku" wire:model="product_sku_code">
                                        <input type="hidden" id="product_code" name="product_code" value="{{ $product->code}}" readonly>


                                        <script>
                                            document.addEventListener('DOMContentLoaded', function () {
                                                const selects = document.querySelectorAll('.sku-builder');
                                                const skuInput = document.getElementById('sku');
                                                const skuDisplay = document.getElementById('sku-display'); // For displaying the SKU
                                                const productCodeInput = document.getElementById('product_code');

                                                function updateSKU() {
                                                    const productCode = productCodeInput.value; // Get product code
                                                    const skuParts = Array.from(selects).map(select => {
                                                        const specializationCode = select.getAttribute('data-code'); // Get specialization data-code
                                                        const selectedOption = select.options[select.selectedIndex];
                                                        const optionCode = selectedOption ? selectedOption.getAttribute('data-code') : '';
                                                        return specializationCode + (optionCode ? '/' + optionCode : ''); // Combine specialization and option codes with '/'
                                                    }).filter(Boolean);

                                                    // Combine product code and other SKU parts with '-' between different specifications
                                                    const sku = productCode + '-' + skuParts.join('-');

                                                    // Update the hidden input value and the display span
                                                    skuInput.value = sku;
                                                    skuDisplay.textContent = sku;
                                                   @this.set('product_sku_code', sku);
                                                }

                                                selects.forEach(select => {
                                                    select.addEventListener('change', updateSKU);
                                                });

                                                // Initial SKU update
                                                updateSKU();
                                            });
                                        </script>


                                </div>
                            </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="d-md-flex justify-content-start mt-lg-0 mt-4 buy-right align-items-center">
                                <div x-data="{ quantity: @entangle('quantity') }" class="d-flex align-items-center border p-2" style="background-color: white; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                    <a class="btn d-flex align-items-center justify-content-center m-0"
                                       @click="quantity = Math.max(parseInt(quantity) - 1, 1)"
                                       style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                        -
                                    </a>
                                    <input id="uniqueQuantityInput"
                                           type="number"
                                           class="text-center border-0 m-0"
                                           wire:model="quantity"
                                           x-model="quantity"
                                           min="1"
                                           max="100"
                                           style="width: 60px; height: 30px; font-size: 16px; -moz-appearance: textfield; -webkit-appearance: none; margin: 0;">
                                    <a class="btn d-flex align-items-center justify-content-center m-0"
                                       @click="quantity = Math.min(parseInt(quantity) + 1, 100)"
                                       style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                        +
                                    </a>
                                </div>



                                <div class="px-4 py-lg-0 py-4">
                                    <span style="display: none" class="one-thousand" id="total_price">
                                        @if($country_code=="CA")
                                            ${{ $product->price_canada*$exchange_rate }}</span>
                                        @else
                                            ${{ $product->price*$exchange_rate }}</span>
                                        @endif

                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModalCenter" type="submit"  class="btn rounded-0 text-nowrap align-self-center px-4 m-2" >
                                    <img style="height: 58px;" class="img_size" src="{{ asset('assets/images/add_to_cart.webp') }}">
                                </button>
                            </div>
                        </div>
                        <p class="mt-4">{{$product->shipping_text??"Comes with multiple power options such as Standalone Solar powered operations. <br> Shipping: 7-10 Working Days"}}.</p>
                    </div>
                </div>
            </div>
        </form>
            <!-- Order Summary Section -->
            <section class="pt-lg-4 order-summery pb-4 border-bottom">
                <div class="container">
                    <div class="row w-100">
                    </div>
                </div>
            </section>

{{--            modal starts cart--}}
{{--            start --}}
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between align-items-center">
                            <h5 class="modal-title text-black" id="exampleModalLongTitle">Recently Added Item(s)</h5>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Continue Shopping</button>
                        </div>
                        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">

                            @php
                            $cartTotal = 0;
                            @endphp
                            @foreach($cartItems as $item)
                                @php
                                    $cartTotal = $item->quantity * $item->price;
                                @endphp
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('storage/' . $item->cover_image )  }}"
                                         alt="Item Image"
                                         style="width: 50px; height: 50px; margin-right: 10px; display: block;">
                                    <div>
                                        <div class="text-black fw-bold">{{ $item->title }}</div>
                                        <div>Qty: {{ $item->quantity }}</div>
                                    </div>
                                    <div class="ms-auto text-black">{{$currency_icon}}{{ isset($item->price) ? number_format($item->price, 2) : '' }}</div>
                                </div>
                                <hr>
                            @endforeach
                            <script>
                                document.addEventListener('livewire:load', function () {
                                    Livewire.on('cartUpdated', quantity => {
                                        document.getElementById('cart_item_counts').innerText = quantity;
                                        document.getElementById('cart_item_counts').style.backgroundColor = 'red';
                                        document.getElementById('cart_item_counts').style.pointerEvents = 'auto';
                                    });
                                });
                            </script>
{{--                            <div class="d-flex justify-content-between text-black fw-bold">--}}
{{--                                <span>Cart subtotal</span>--}}
{{--                                <span>{{$currency_icon}}{{ $cartTotal }}</span>--}}
{{--                            </div>--}}
                        </div>
                        <div class="modal-footer">
                            <button wire:click="navigateToShopping" class="btn btn-primary w-100">View Cart / Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
{{--            End--}}

        </section>
        <section>
        <div class='container '>
            <div class='row'>
                <div class='col-lg-9'>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark active ms-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Features
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#specification-tab-pane" type="button" role="tab" aria-controls="specification-tab-pane" aria-selected="false">
                                Specifications
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#shipping-tab-pane" type="button" role="tab" aria-controls="shipping-tab-pane" aria-selected="false">
                                Shipping & Return
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane mt-3 fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            {!! $product->description!!}
                        </div>
                        <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <x-Customer.Radar.Features />
                        </div>
                        <div class="tab-pane fade mt-3" id="specification-tab-pane" role="tabpanel" aria-labelledby="specification-tab-pane" tabindex="0">
                            {!! $product->specification!!}
                        </div>
                        <div class="tab-pane fade mt-3" id="shipping-tab-pane" role="tabpanel" aria-labelledby="shipping-tab-pane" tabindex="0">
                            {!! $product->feature!!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pt-4">
                    <div class="row">
                        <style>
                            .feature-item {
                                display: flex;
                                align-items: center;
                                padding: 15px;
                                border: 1px solid #7c7a7a;
                                border-radius: 20px;
                                background-color: #d5d4d4;
                                margin-bottom: 15px;
                                width: 100%;
                            }
                            .feature-item img {
                                height: 40px;
                                margin-right: 10px;
                            }
                            .note {
                                font-size: 0.9rem;
                                color: #333;
                            }
                            .note span {
                                color: red;
                                font-weight: bold;
                            }
                        </style>
                        <div class="container mt-5">

                            @foreach($product->product_features as $pf)
                                <div class="feature-item">
                                    <img src="{{ asset('storage/' . $pf->icon )  }}" alt="{{$pf->heading_text}}">
                                    <span style="font-weight: bold;font-size: 13px;">{{$pf->heading_text}}</span>
                                </div>
                            @endforeach

                            <p class="note">
                                Note: All above features <span>worth $1450</span> are included in this product without any extra/hidden cost (limited time offer).
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container text-center my-5">
                            <h5 class="mb-4 text-black">Compatible Accessories</h5>
                            @foreach($linked_products as $ap)
                                <div class="col-md-12 mb-3">
                                    <form wire:submit.prevent="addAccessory" >

{{--                                        <input type="text" wire:model="price" value="{{ $country_code == "CA" ? $ap->price_canada * $exchange_rate : $ap->price * $exchange_rate }}">--}}
{{--                                        <input type="text" wire:model="title" value="{{ $ap->product_heading_text ?? $ap->title }}">--}}
                                        @csrf
                                        <div class="card" >
                                            <div class="d-flex justify-content-center align-items-center w-100 p-4 pb-2 border-1">
                                                <img x-init="@this.set('cover_image_a', {{$ap->cover_image}})" src="{{ asset('storage/' . $ap->cover_image )  }}" class="card-img-top"
                                                     alt="{{$ap->title}}"
                                                     style="max-width: 100%; ">
                                            </div>

                                            <div class="card-body">
                                                @php
                                                    $exchange_rate = session('exchange_rate', '1');
                                                @endphp
                                                <h5 class="card-title" > {{$ap->product_heading_text ?? $ap->title}}</h5>
                                                <p class="card-text" x-init="@this.set('price_a', {{$country_code == 'CA' ? ($ap->price_canada * $exchange_rate) : ($ap->price * $exchange_rate)}})">
                                                    {{ $currency_icon ?? '$' }}
                                                    {{ $country_code == 'CA' ? ($ap->price_canada * $exchange_rate) : ($ap->price * $exchange_rate) }}
                                                </p>

                                                <p class="text-muted p-2" x-init="@this.set('category_a', {{$ap->category->title}})">{{$ap->category->title}}</p>

                                                <input type="hidden" x-init="@this.set('Pid_a', {{$ap->id}})" name="product_id" value="{{ $ap->id }}">
                                                <input type="hidden" name="price" value="{{ $country_code == "CA" ? $ap->price_canada * $exchange_rate : $ap->price * $exchange_rate }}">
                                                <input type="hidden" wire:model="title_a" name="title" value="{{ $ap->product_heading_text ?? $ap->title }}">
                                                <input type="hidden" wire:model="title_a" name="title" value="{{ $ap->product_heading_text ?? $ap->title }}">
                                                <input type="hidden" name="category" value="{{ $ap->category->title }}">
                                                <input type="hidden" name="cover_image" value="{{ $ap->cover_image }}">
                                                <input type="hidden" name="p" value="1">

                                                <div class="quantity-control d-flex align-items-center justify-content-center gap-2">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary decrement-btn p-2 pb-1 pt-1" style="width: 40px;max-width: 100%;" >-</button>
                                                    <input type="number" wire:model="quantity_a" name="quantity" value="1" class="form-control text-center quantity-input p-1" style="width: 60px; height: 30px;" min="1" readonly>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary increment-btn p-2 pb-1 pt-1" style="width: 40px;max-width: 100%;">+</button>
                                                </div>


                                                <button data-bs-toggle="modal" data-bs-target="#exampleModalCenter" type="submit" type="submit" class="btn btn-primary mt-3">Add to Cart</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    document.querySelectorAll('.increment-btn').forEach(btn => {
                                        btn.addEventListener('click', function() {
                                            const quantityInput = this.previousElementSibling;
                                            quantityInput.value = parseInt(quantityInput.value) + 1;
                                        });
                                    });

                                    document.querySelectorAll('.decrement-btn').forEach(btn => {
                                        btn.addEventListener('click', function() {
                                            const quantityInput = this.nextElementSibling;
                                            if (parseInt(quantityInput.value) > 1) {
                                                quantityInput.value = parseInt(quantityInput.value) - 1;
                                            }
                                        });
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<script>

    function changeColorJS(selectedColor, productId) {
        var color = selectedColor.toLocaleLowerCase();
        var id = productId;

        document.getElementById('colorMultipleImages').value = color;

        fetch(`/product/${id}/edit/media-ajax?id=${id}&color=${color}&frontSlider=true`)
            .then(response => response.json())
            .then(data => {
                const slider = document.querySelector('slider');
                const sliderStatic = document.getElementById('slider_static');
                slider.innerHTML = '';
                sliderStatic.innerHTML = '';

                data.forEach(res => {
                    const imgBox = document.createElement('div');
                    imgBox.classList.add('radar-item-box');
                    imgBox.innerHTML = `
                    <div class="radar-item-box">
                        <img src="{{ asset('storage/thumbnail/${res.image}') }}" class="img-fluid" alt="{{$product->title}}">
                    </div>
                `;
                    slider.appendChild(imgBox);
                });

                sliderStatic.innerHTML = `
                <div class="img-leften d-flex justify-content-center align-items-center v_zoom-image-container">
                    <img class="thumb img-fluid"
                         src="{{ asset('storage/${data[0].image}') }}"
                         style="max-height: 600px;"
                         id="big-img-radar-product"
                         alt="{{$product->title}}">
                </div>
                <div id="v_zoom-focus-area" class="v_zoom-focus-area"></div>
            `;

                initializeMagnifier();

                document.querySelectorAll('.radar-item-box').forEach(item => {
                    item.addEventListener('click', () => {
                        // Remove highlight from all items
                        document.querySelectorAll('.radar-item-box').forEach(i => i.classList.remove('radar-item-box-highlight'));

                        // Highlight the clicked item
                        item.classList.add('radar-item-box-highlight');

                        // Get the image element and its source
                        const img = item.querySelector('img');
                        let src = img.getAttribute('src');

                        // Remove "thumbnail" from the src
                        src = src.replace('thumbnail', '');

                        // Set the modified source to the big image
                        document.getElementById('big-img-radar-product').setAttribute('src', src);
                    });
                });


                document.getElementById('prodImg-gallery').innerHTML = JSON.stringify(data);
            })
            .catch(error => {
                console.error('Error fetching images:', error);
            });
    }

    const sliderStatic = document.getElementById('main_screen_image_cover_div');
    const preview1 = document.getElementById('preview1');
    // Set z-index to 999 when mouse enters
    sliderStatic.addEventListener('mouseover', () => {
        preview1.style.zIndex = '999';
        preview1.style.display = 'block';
    });

    // Reset z-index to -999 when mouse leaves
    sliderStatic.addEventListener('mouseout', () => {
        preview1.style.zIndex = '-999';
        preview1.style.display = 'none';
    });



    //
    // var evt = new Event(),
    //     m = new Magnifier(evt);
    //
    // function initializeMagnifier() {
    //     m.attach({
    //         thumb: '.thumb',
    //         large: document.getElementById('big-img-radar-product').src,
    //         largeWrapper: 'preview1',
    //         zoom: 2,
    //         zoomable: true
    //     });
    // }
    // initializeMagnifier();


</script>


