@php
    use App\Models\ProductSpcializationOption;
    use Illuminate\Support\Facades\Log;
@endphp
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
            <div class="col-lg-9 table-responsive">
                <table class="table border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-capitalize text-center">Product</th>
                            <th scope="col" class="text-capitalize text-center">price</th>
                            <th scope="col" class="text-capitalize text-center">quantity</th>
                            <th scope="col" class="text-capitalize text-center">total price</th>
                            <th scope="col" class="text-capitalize text-center">remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($cart_table as $key => $cart)

                        <tr>
                            <td class="border border-end">
                                <div class="d-flex align-items-center p-1">
                                    <img src="{{asset('storage/'.$cart->cover_image)}}" alt="Not Found" class="profile-table me-2 h-25 w-25">
                                    <div class="d-flex flex-column">
                                        <h6 class="text-uppercase">{{$cart->category}}</h6>
                                        <span>Brand : {{$cart->title}}</span>
                                        {{-- <span>Model: ---</span> --}}
                                        <span>Color : {{$cart->color}}</span>
                                        @foreach (explode(',',$cart->option_ids) as $option)

                                            @php
                                                $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$cart->product_id)->get();
                                            @endphp
                                            @foreach ($options as $opp)
                                                <span> {{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <span><br>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                            <td class="border border-end text-center">${{$cart->price}}</td>
                            <td class="border border-end text-center">{{$cart->quantity}}</td>
                            <td class="border border-end text-center">${{$total_price =  $cart->price * $cart->quantity}}</td>
                            <td class="border border-end text-center"><a href="{{route('customer.delete.cart.table.item', $cart->id ?? $cart->id)}}"><img src="{{asset('assets/customer/images/crosss.png')}}" alt="Not Found" class="cartItem"></a>

                            </td>
                        </tr>
                        @empty
                        <tr >
                        <td colspan="5" align="center" > <span class="h6"> No Item in cart </span></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->
<section class="step-form bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('customer.shopping.bag')}}" method="post">
                            @csrf
                            <div class="box-coupon bg-white p-3 py-4 h-100">
                            <h3>Coupon Discount</h3>
                            <label class="d-block mb-3 opacity-50">Enter your coupon code if you have one!</label>
                            <input type="text" name="coupon" class="form-control rounded-0 mb-4" placeholder="Enter your coupon here" @if ($coupon_name != 0) readonly @endif value="@if ($coupon_name != 0) {{strtoupper($coupon_name)}} @endif">
                            @if ($coupon_name == 0)
                            <input type="hidden" name="total" value="{{$grand_total}}">
                                <button class="btn btn-primary rounded-0 ">Apply Coupon</button>
                            @else
                            <input type="hidden" name="remove_coupon" value="1">
                                <span class="text-success"><b> Coupon Successfully Applied</b></span>
                                <button class="btn btn-sm bg-danger text-white mx-4">Remove</button>
                            @endif
                        </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-details bg-white p-3 py-4">
                            <h3>Payment Details</h3>
                            <ul class="order-details p-0 mb-5">
                                <li class="d-flex justify-content-between">
                                    <span class="text">Cart Subtotal</span>
                                    <span class="text-amount">${{$total}}</span>
                                </li>
                                @if($discounted_amount != 0)
                                <li class="d-flex justify-content-between">
                                    <span class="text">Discount</span>
                                    <span class="text-amount text-danger">${{$discounted_amount}}</span>
                                </li>
                                @endif
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Shipping and Handing</span>
                                    <span class="text-amount">${{$shipping = $taxes->shipping_time ?? 00.00}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="text text-capitalize">Tax/GST</span>
                                    <span class="text-amount">{{floor($gst = $taxes->gst) ?? 0}}%</span>
                                </li>

                                <li class="d-flex justify-content-between active">
                                    <span class="text text-capitalize fw-bold">Order total</span>
                                    <span class="text-amount">${{$grand_total + $shipping + (($grand_total * $gst) / 100)}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-coupon bg-white p-3 py-4 my-5">
                            <h3>Checkout</h3>
                            <label for="" class=" d-block mb-4 opacity-50">Click to proceed</label>
                            @if (!Session::get('user'))
                                <a href="{{route('customer.loginForm', ['p' => 1, 's' => Session::getId()])}}" class=" btn btn-primary rounded-0" >Proceed to buy</a>
                            @else
                            <!-- confirmation form -->
                                <form action="{{route('customer.checkout')}}" method="any">
                                    @csrf
                                    <input type="hidden" name="coupon_s" value="{{$coupon_name}}">
                                    <input type="hidden" name="discount_s" value="{{$discounted_amount}}">
                                    <button type="submit" class=" btn btn-primary rounded-0" >Proceed to buy</button>
                                </form>
                            <!-- confirmation form ends-->

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $('.cartItem').on('click', function(){
        console.log($('.cartItem').val());
    });
  });
</script>
