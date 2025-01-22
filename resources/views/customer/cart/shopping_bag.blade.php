
@php
    use App\Models\ProductSpcializationOption;
    use Illuminate\Support\Facades\Log;
    use App\Models\ManageSeo;
        $country_code = Illuminate\Support\Facades\Session::get('country_code', 'US');
@endphp

<?php

$data_record = ManageSeo::where('page_name', ManageSeo::SHOPPING_BAG)->first();
if($data_record){
    $seo_meta=[
        "title"=>$data_record->title,
        "description"=>$data_record->description,
        "keywords"=>$data_record->keyword,
        "schema"=>$data_record->schema,
        "feature_image"=>"storage/image/banner%202.webp"
    ];
}
?>
@include('customer.layouts.header')

<!-- header-end -->
<!-- Tabber-start -->
<section class="stepper-form-tabber pt-3 pb-0">
    <div>
        <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
            <li @if(Request::is('shopping-bag')) class="active" @endif>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
            <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
            <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
        </ul>
    </div>
</section>


<!-- Form -->
<section class="step-formation bg-light pb-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 table-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table border bg-white">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-capitalize text-center">Product</th>
                                        <th scope="col" class="text-capitalize text-center">Price</th>
                                        <th scope="col" class="text-capitalize text-center">Quantity</th>
                                        <th scope="col" class="text-capitalize text-center">Total Price</th>
                                        <th scope="col" class="text-capitalize text-center">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $currency_icon = session('currency_icon', '$');
                                        $exchange_rate = session('exchange_rate', '1');
                                    @endphp
                                    @forelse ($cart_table as $key => $cart)
                                        <tr>
                                            <td class="border border-end">
                                                <div class="d-flex align-items-center p-1 flex-wrap overflow-hidden">
                                                    <img src="{{asset('storage/'.$cart->cover_image)}}"
                                                         alt="Not Found"
                                                         class="profile-table me-2"
                                                         style="max-width: 60px; max-height: 100px; width: auto; height: auto;">
                                                    <div class="d-flex flex-column text-truncate" style="max-width: 200px;">
                                                        @if($cart->sku_code)
                                                            <span>SKU: {{$cart->sku_code}}</span>
                                                        @endif
                                                        <span>Brand: {{$cart->title}}</span>
                                                        @if (unserialize($cart->option_ids) != null)
                                                            @forelse (unserialize($cart->option_ids) as $option)
                                                                @php
                                                                    $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('id', $option)->get();
                                                                @endphp
                                                                @forelse ($options as $opp)
                                                                    @if(isset($opp->product_specilization))
                                                                        <span>
                                {{$opp->product_specilization->specilization->title}}:
                                {{$opp->specializationoptions->option}}
                                ({{$currency_icon}}{{$opp->specialization_price * $exchange_rate}})
                            </span>
                                                                    @endif

                                                                @empty
                                                                @endforelse
                                                            @empty
                                                            @endforelse
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="border border-end text-center">{{$currency_icon}}{{$cart->price}}</td>
                                            <td class="border border-end text-center">{{$cart->quantity}}</td>
                                            <td class="border border-end text-center">{{$currency_icon}} {{$total_price = $cart->price * $cart->quantity}}</td>
                                            <td class="border border-end text-center">
                                                <a href="{{ route('customer.delete.cart.table.item', $cart->id ?? $cart->id) }}">
                                                    <img src="{{ asset('assets/customer/images/crosss.png') }}" alt="Not Found" class="cartItem">
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" align="center"><span class="h6">No Item in Cart</span></td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            @if(count($cart_table) > 0)
                            <div class="container my-5">
                                <h6 class="mb-4 text-dark">These item(s) are often bought together with this product</h6>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                   @foreach($linked_products as $l_product)
                                        <div class="col-md-4">
                                            <form method="POST" action="{{ route('customer.store.shopping.accessory.bag') }}">
                                                @csrf
                                                <div class="card text-center border-0 shadow-sm" style="max-width: 250px; margin: auto;">
                                                    <a href="{{ route('customer.radar.sign', $l_product->slug) }}">
                                                    <img src="{{ asset('storage/' . $l_product->cover_image) }}"
                                                         class="card-img-top p-2"
                                                         alt="{{ $l_product->title }}"
                                                         style="max-height: 150px; object-fit: contain;">
                                                    </a>
                                                    <div class="card-body p-3">
                                                        <a href="{{ route('customer.radar.sign', $l_product->slug) }}" class="text-decoration-none">
                                                        <h6 class="card-title text-truncate">{{ $l_product->product_heading_text ?? $l_product->title }}</h6>
                                                        </a>
                                                        <p class="card-text text-primary fw-bold mb-2">
                                                            {{ $currency_icon }} {{ $country_code == 'CA' ? $l_product->price_canada * $exchange_rate : $l_product->price * $exchange_rate }}
                                                        </p>

                                                        <input type="hidden" name="product_id" value="{{ $l_product->id }}">
                                                        <input type="hidden" name="price" value="{{ $country_code == 'CA' ? $l_product->price_canada * $exchange_rate : $l_product->price * $exchange_rate }}">
                                                        <input type="hidden" name="title" value="{{ $l_product->title }}">
                                                        <input type="hidden" name="category" value="{{ $l_product->category->title }}">

                                                        <input type="hidden" name="cover_image" value="{{ $l_product->cover_image }}">
                                                        <div class="quantity-control d-flex align-items-center justify-content-center gap-2 pb-2">
                                                            <button type="button" class="btn btn-sm btn-outline-secondary decrement-btn p-2 pb-1 pt-1" style="width: 40px;max-width: 100%;">-</button>
                                                            <input type="number" name="quantity" value="1" class="form-control text-center quantity-input p-1" style="width: 60px; height: 30px;" min="1" readonly>
                                                            <button type="button" class="btn btn-sm btn-outline-secondary increment-btn p-2 pb-1 pt-1" style="width: 40px;max-width: 100%;">+</button>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm w-100">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </form>


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
                                   @endforeach

                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 " >
                <section class="step-form bg-light pt-0" >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="row">

                                    <div class="col-md-12 " >
                                        <div class="payment-details bg-white p-3 pb-1 py-4" style="border: 2px solid grey;">
                                            <h3>Order Summary</h3>
                                            @if(session('error'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Error:</strong> {{ session('error') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <ul class="order-details p-0 mb-5">
                                                <li class="d-flex justify-content-between">
                                                    <span class="text">Subtotal excluding Tax</span>
                                                    <span class="text-dark">{{$currency_icon}}{{$total}}</span>
                                                </li>
                                                @if($discounted_amount != 0)
                                                    <li class="d-flex justify-content-between">
                                                        <span class="text">Discount</span>
                                                        <span class="text-dark text-danger">{{$currency_icon}}{{$discounted_amount}}</span>
                                                    </li>
                                                @endif
                                                <li class="d-flex justify-content-between">
                                                    <span class="text text-capitalize">Estimated Shipping (BEST
WAY GROUND)</span>
                                                    @php
                                                        $shipping = 00.00;
                                                    @endphp
                                                    <span class="text-amount"> {{$shipping> 0 ? $shipping : "-"}}</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span class="text text-capitalize">Tax(%)</span>
                                                    <span class="text-dark">{{floor($gst = $taxes->gst) ?? 0}}%</span>
                                                </li>

                                                <li class="d-flex justify-content-between active">
                                                    <span class="text text-capitalize fw-bold">Total including Tax</span>
                                                    <span class="text-dark">{{$currency_icon}}{{$grand_total  + (($grand_total * $gst) / 100)}}</span>
                                                </li>
                                                @php

                                                    $maximum_total_order_amount_val=9999999;
                                                    $maximum_total_order_amount= \App\Models\MasterConfiguration::where('code','maximum_total_order_amount')->where('status',1)->first();
                                                    if(isset($maximum_total_order_amount)){
                                                        $maximum_total_order_amount_val=$maximum_total_order_amount->value;
                                                    }
                                                @endphp
                                                @if(($grand_total  + (($grand_total * $gst) / 100)) > $maximum_total_order_amount_val)
                                                    <li>
                                                    <span style="color: red;"> Please remove some product from the cart to proceed further. Maximum Amount must be less than $30000.</span>
                                                    </li>
                                                @endif
                                            </ul>
                                            <form action="{{route('customer.shopping.bag')}}" method="post">
                                                @csrf
                                                <div class="box-coupon bg-white pb-1 pt-1 py-4 h-100">
                                                    <h3>Promotional Code</h3>
                                                    <input type="text" name="coupon" class="form-control rounded-0 mb-4" placeholder="Enter your coupon here" @if ($coupon_name != 0) readonly @endif value="@if ($coupon_name != 0) {{strtoupper($coupon_name)}} @endif">
                                                    @if ($coupon_name == 0)
                                                        <input type="hidden" name="total" value="{{$grand_total}}">
                                                        <button class="btn btn-primary rounded-0 w-100 p-1 " <?php if(count($cart_table) <= 0){ ?> disabled <?php } ?>" >Apply Coupon</button>
                                                    @else
                                                        <input type="hidden" name="remove_coupon" value="1">
                                                        <span class="text-success"><b> Coupon Successfully Applied</b></span>
                                                        <button class="btn btn-sm bg-danger text-white p-1 w-100">Remove</button>
                                                    @endif
                                                </div>
                                            </form>
                                            <p class="mt-1 mb-1" style="font-size: 10px;font-weight: bold;">
                                                Promotional offers cannot be combined with any other offers or discounts, including those in a sales quote. Some exclusions may apply. Products shipped by truck are not eligible for free shipping. Free shipping offers apply only to the continental United States.
                                            </p>


                                            @if(!(($grand_total  + (($grand_total * $gst) / 100)) > $maximum_total_order_amount_val))
                                            @if(Session::get('user'))

                                                <form action="{{route('customer.checkout')}}" method="any">
                                                    @csrf
                                                    <input type="hidden" name="c" value="{{\Illuminate\Support\Facades\Crypt::encrypt($coupon_name)}}">
                                                    <input type="hidden" name="d" value="{{\Illuminate\Support\Facades\Crypt::encrypt($discounted_amount)}}">
                                                    <button type="submit" class=" btn btn-primary p-1 btn-block w-100 rounded-0 <?php if(count($cart_table) <= 0){ ?> disabled <?php } ?>" >Proceed to buy</button>
                                                </form>

                                            @else
                                                <input type="hidden" name="coupon_s" value="{{$coupon_name}}">
                                                <input type="hidden" name="discount_s" value="{{$discounted_amount}}">
                                            <a href="{{ route('customer.loginForm' , ['c' => \Illuminate\Support\Facades\Crypt::encrypt($coupon_name) , 'd' => \Illuminate\Support\Facades\Crypt::encrypt($discounted_amount)]) }}"  class="btn btn-primary p-1 btn-block w-100 rounded-0 {{ count($cart_table) <= 0 ? 'disabled' : '' }}">Proceed to buy </a>
                                            @endif
                                            @endif
                                            <!-- Main Form -->


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->


@include('customer.layout2.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $('.cartItem').on('click', function(){
        console.log($('.cartItem').val());
    });
  });
</script>
