<div>
    <section class="our-product pt-2 pb-2">
{{--        <form id="myForm" action="{{ route('customer.store.shopping.bag') }}" method="post">--}}
        <form wire:submit.prevent="addToCart">
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
            <input type="hidden" wire:model="title" name="title" id="title" value="{{ $product->title }}">
            <input type="hidden" wire:model="category" name="category" id="category" value="{{ $product->category->title }}">
            <input type="hidden" wire:model="price" name="price" id="price" value="{{ $product->price }}">
            <input type="hidden" wire:model="cover_image" name="cover_image" id="cover_image" value="{{ $product->cover_image }}">

            <div class="container">
                <div class="row">
                    <!-- Product Image & Slider Section -->
                    <div class="col-lg-6">
                        <div id="dynamic_specs"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="desktop-display" style="max-height: 400px; overflow-y: auto;">
                                    <slider>
                                        @include('partials.slider')
                                    </slider>
                                </div>
                            </div>
                            <div class="col-md-9 bg-white">
                                <div class="responsive-two">
                                    <div>
                                        <div class="p-2" id="slider_static">
                                            <div class="img-leften d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('storage/' . ($product->images[0]->image ?? $product->cover_image)) }}"
                                                     class="img-fluid" style="max-height: 600px;" id="big-img-radar-product" alt="{{ $product->title }}">
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
                                        <img src="{{ asset('storage/'.$im_g->image) }}" class="img-fluid" alt="{{ $product->title }}">
                                    </div>
                                @endforeach
                                <div class="radar-item-box">
                                    <img src="{{ asset('storage/'.$product->cover_image) }}" class="img-fluid" alt="{{ $product->title }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details and Specifications Section -->
                    <div class="col-lg-6">
                        <div class="multiple-optionn pb-0 pt-lg-0 pt-5 pb-0">
                            <div class="d-flex justify-content-around align-items-center pt-1" style="float:right;">
                            </div>

                            <h4 class="font-weight-bold">{{ $product->category->title }}</h4>
                            <span class="text-capitalize d-block">{{ $product->title }}</span>

                            @if ($product && $product->sku)
                                <span class="text-capitalize d-block small"><b>SKU : </b>{{ strtoupper($product->sku) }}</span>
                            @endif

                            <!-- Star Rating Section -->
                            <div class="d-flex justify-content-start align-items-center gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <img src="{{ asset('assets/customer/images/star.svg') }}" alt="{{ $i }} Star" class="img-fluid" width="14px">
                                @endfor
                                <span>( 150+ Customers Reviews)</span>
                            </div>

                            <!-- Product Price Section -->
                            @if($product->is_price_hide != 1)
                                <p class="fw-bold fs-5" id="total_price2">${{ $price }}</p>
                            @else
                                <p class="fw-bold fs-5" id="total_price2"></p>
                            @endif

                            <!-- Specifications Section -->
                            <div>
                                <p class="specific-heading">Select Specification</p>
                                <div class="row mt-3">
                                    @foreach ($product->specilizations->reverse() as $specilization)
                                        <div class="col-md-8 bg-transparent">
                                            <h6 class="text-dark">{{ $specilization->specilization->title }}</h6>
                                            <select class="form-select mb-3" onchange="changecalculated_amount(this)" name="dynamic_specs[{{ $specilization->id }}]" wire:model="dynamic_specs.{{ $specilization->id }}" id="{{ $specilization->id }}" style="border: 2px solid black;font-weight: bold;" required>
                                                <option selected>--Choose an Option--</option>
                                                @foreach($specilization->options as $option)
                                                    <option value="{{ $option->id }}">
                                                        {{ $option->specializationoptions->option }} (+$<span class="price">{{ $option->specialization_price }}</span>)
                                                        @if($specilization->specilization->title == "Cloud-Access" && strtolower($option->specializationoptions->option) == "yes")
                                                            Subscription Free For 1 Year
                                                        @endif
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach

                                    <!-- Color Selection Section -->

                                    <div class="mt-4">
                                        <h6 class="text-dark fw-bold">Faceplate (Select color):</h6>
                                        <div class="d-flex align-items-center">
                                            <input type="hidden" wire:model="color" name="color" value="Amber" id="colorchoose">
                                            <div class="selected-anc d-flex border-1 p-2 shadow-smm">
                                                <div>
                                                    <img src="{{ asset('/assets/images/radar/color/Amber-Color.png') }}" style="height:40px;" id="imgicon_color_st" alt="color" />
                                                </div>

                                                <div x-data="{
                                                            color: @entangle('color'),
                                                            productId: @entangle('product_id'),
                                                            changeColor() {
                                                                changeColorJS(this.color, this.productId);
                                                            }
                                                        }"
                                                     x-init="changeColor()"
                                                     class="d-flex align-items-center">

                                                    <select class="form-select shadow-none" wire:model="color"
                                                            id="select-color" aria-label="Color select" required
                                                            style="background-color: transparent; border: none; border-radius: 0; -webkit-appearance: none; -moz-appearance: none; appearance: none; width: 120px;">
                                                        <option value="Amber-Color.png">Amber</option>
                                                        <option value="White-Color.png">White</option>
                                                        <option value="Green-Color.png">Green</option>
                                                    </select>

                                                </div>

                                            </div>
                                        </div>

                                        <script>
                                            const selectElement = document.getElementById('select-color');
                                            const iconElement = document.querySelector('#imgicon_color_st');
                                            const colorHolderElement = document.querySelector('#colorchoose');
                                            const baseurl = '{{ asset('/assets/images/radar/color/') }}';

                                            selectElement.addEventListener('change', function() {
                                                const selectedOption = this.options[this.selectedIndex];
                                                const selectedColor = this.value;
                                                colorHolderElement.value = selectedOption.text;
                                                iconElement.src = baseurl + '/' + selectedColor;
                                            });
                                        </script>
                                    </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="d-md-flex justify-content-start mt-lg-0 mt-4 buy-right align-items-center">
{{--                                                <div class="d-flex align-items-center border  p-2" style="background-color: white; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">--}}
{{--                                                    <a class="btn d-flex align-items-center justify-content-center m-0" onclick="increment()" style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">--}}
{{--                                                        +--}}
{{--                                                    </a>--}}

{{--                                                    <input id="demoInput" type="number" class="text-center border-0 m-0" wire:model="quantity" name="quantity" value="1" min="1" max="100" style="width: 60px; height: 30px; font-size: 16px; -moz-appearance: textfield; -webkit-appearance: none; margin: 0;">--}}

{{--                                                    <a class="btn d-flex align-items-center justify-content-center m-0" onclick="decrement()" style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">--}}
{{--                                                        ---}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                                <div x-data="{ quantity: @entangle('quantity') }" class="d-flex align-items-center border p-2" style="background-color: white; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <a class="btn d-flex align-items-center justify-content-center m-0"
                                                       @click="quantity = Math.min(parseInt(quantity) + 1, 100)"
                                                       style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                                        +
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
                                                       @click="quantity = Math.max(parseInt(quantity) - 1, 1)"
                                                       style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                                        -
                                                    </a>
                                                </div>



                                                <div class="px-4 py-lg-0 py-4">
                                                    <span style="display: none" class="one-thousand" id="total_price">${{ $product->price }}</span>
                                                </div>
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModalCenter" type="submit"  class="btn rounded-0 text-nowrap align-self-center px-4 m-2" >
                                                    <img style="height: 58px;" class="img_size" src="{{ asset('assets/images/add_to_cart.webp') }}">
                                                </button>
                                            </div>


                                        </div>

                                    <p class="mt-4">Comes with multiple power options such as Standalone Solar powered operations. <br> Shipping: 7-10 Working Days.</p>
                                </div>
                            </div>
                        </div>
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
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <div class="ms-auto text-black">${{ isset($item->price) ? number_format($item->price, 2) : '' }}</div>
                                </div>
                                <hr>
                            @endforeach

                            <div class="d-flex justify-content-between text-black fw-bold">
                                <span>Cart subtotal</span>
                                <span>${{ $cartTotal }}</span>
                            </div>
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
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
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
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane mt-3 fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            {!! $product->description!!}
                        </div>
                        <div class="tab-pane fade mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <x-Customer.Radar.Features />


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
                            <img src="{{ asset('storage/${res.image}') }}" class="img-fluid" alt="{{$product->title}}">
                        </div>
                    `;
                    slider.appendChild(imgBox);
                });

                sliderStatic.innerHTML = `
                    <div class="img-leften d-flex justify-content-center align-items-center">
                        <img src="{{ asset('storage/${data[0].image}') }}" class="img-fluid"
                             style="max-height: 600px;" id="big-img-radar-product" alt="{{$product->title}}">
                    </div>
                `;

                document.getElementById('prodImg-gallery').innerHTML = JSON.stringify(data);
            })
            .catch(error => {
                console.error('Error fetching images:', error);
            });

        document.querySelectorAll('.radar-item-box').forEach(item => {
            item.addEventListener('mouseenter', () => {
                document.querySelectorAll('.radar-item-box').forEach(i => i.classList.remove('radar-item-box-highlight'));
                item.classList.add('radar-item-box-highlight');
                const img = item.querySelector('img');
                const src = img.getAttribute('src');
                document.getElementById('big-img-radar-product').setAttribute('src', src);
            });
        });
    }
</script>

