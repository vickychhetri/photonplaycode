<div>
    <section class="our-product pt-2 pb-2">
        <form id="myForm" action="{{ route('customer.store.shopping.bag') }}" method="post">
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
            <input type="hidden" name="title" id="title" value="{{ $product->title }}">
            <input type="hidden" name="category" id="category" value="{{ $product->category->title }}">
            <input type="hidden" name="price" id="price" value="{{ $product->price }}">
            <input type="hidden" name="cover_image" id="cover_image" value="{{ $product->cover_image }}">

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
                                @if($product->brochure)
                                    <div>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="d-flex align-items-center text-decoration-none text-dark" style="height: 40px;padding:8px; width: 200px;">
                                            <img src="/assets/images/radar/pdf_icon.png" style="height:40px;" alt="PDF">
                                            &nbsp
                                            <span class="font-weight-bold"><u> {{$product->title}} PDF </u> </span>
                                        </a>
                                    </div>
                                @endif
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
                                <p class="fw-bold fs-5" id="total_price2">${{ $product->price }}</p>
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
                                            <select class="form-select mb-3" onchange="changecalculated_amount(this)" name="dynamic_specs[{{ $specilization->id }}]" id="{{ $specilization->id }}" style="border: 2px solid black;font-weight: bold;" required>
                                                <option selected disabled>--Choose an Option--</option>
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
                                            <input type="hidden" name="color" value="Amber" id="colorchoose">
                                            <div class="selected-anc d-flex border-1 p-2 shadow-smm">
                                                <div>
                                                    <img src="{{ asset('/assets/images/radar/color/Amber-Color.png') }}" style="height:40px;" id="imgicon_color_st" alt="color" />
                                                </div>

                                                <select class="form-select shadow-none" name="colorselected" id="select-color" aria-label="Default select example" required style="background-color: transparent; border: none; border-radius: 0; -webkit-appearance: none; -moz-appearance: none; appearance: none; width: 120px;">
                                                    <option value="Amber-Color.png"> Amber</option>
                                                    <option value="White-Color.png"> White</option>
                                                    <option value="Green-Color.png"> Green</option>
                                                </select>
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
                                                <div class="d-flex align-items-center border  p-2" style="background-color: white; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <a class="btn d-flex align-items-center justify-content-center m-0" onclick="increment()" style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                                        +
                                                    </a>

                                                    <input id="demoInput" type="number" class="text-center border-0 m-0" name="quantity" value="1" min="1" max="100" style="width: 60px; height: 30px; font-size: 16px; -moz-appearance: textfield; -webkit-appearance: none; margin: 0;">

                                                    <a class="btn d-flex align-items-center justify-content-center m-0" onclick="decrement()" style="height: 30px; width: 30px; font-size: 20px; border-radius: 4px;">
                                                        -
                                                    </a>
                                                </div>
                                                <div class="px-4 py-lg-0 py-4">
                                                    <span style="display: none" class="one-thousand" id="total_price">${{ $product->price }}</span>
                                                </div>
                                                <button type="submit" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Buy Now</button>
                                            </div>

                                        </div>

                                    <p class="mt-4">Comes with multiple power options such as Standalone Solar powered operations. <br> Shipping: 7-10 Working Days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary Section -->
            <section class="pt-lg-4 order-summery pb-4 border-bottom">
                <div class="container">
                    <div class="row w-100">
{{--                        <div class="col-lg-8 col-md-8">--}}
{{--                            <div class="d-flex align-items-md-center order-summery gap-2">--}}
{{--                                <div class="border-left">--}}
{{--                                    <h1 class="fw-bold fs-5 mb-0 py-lg-0 py-3 text-dark">{{ $product->category->title }} | {{ $product->title }}</h1>--}}
{{--                                    <p class="mb-0 opacity-50">{{ $product->color }} | {{ $product->warranty }} Warranty</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-4 col-md-4">--}}
{{--                            <div class="d-md-flex justify-content-end mt-lg-0 mt-4 buy-right align-items-center">--}}
{{--                                @if($product->is_price_hide != 1)--}}
{{--                                    <a class="btn btn-dark d-flex align-items-center m-2" onclick="increment()" style="height: 20px;width: 40px;">+</a>--}}
{{--                                    <input id="demoInput" type="number" class="text-center" name="quantity" value="1" min="1" max="100">--}}
{{--                                    <a class="btn btn-dark m-2 d-flex align-items-center" onclick="decrement()" style="height: 20px;width: 40px;">-</a>--}}
{{--                                    <div class="px-4 py-lg-0 py-4">--}}
{{--                                        <span class="one-thousand" id="total_price">${{ $product->price }}</span>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Buy Now</button>--}}
{{--                                    <button type="button" id="add_to_cart" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Add to Cart</button>--}}
{{--                                @endif--}}
{{--                                <div class="border-left">--}}
{{--                                    <a href="#inquiry" class="btn btn-dark rounded-0 text-nowrap align-self-center px-4 m-2">Inquiry</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </section>
        </form>
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

