@include('customer.layouts.header')
    <!-- header-end -->
    <!-- Tabber-start -->
    <section class="stepper-form-tabber pt-3 pb-0 bg-white">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li @if(Request::is('confirmation')) class="active" @endif>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>
    <section class="step-form  py-0">
        <div class="container">
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-lg-9 border-bottom border-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="py-4 border-top border-bottom">
{{--                                //main_shipping_double_address - vicky 26-12-2024 start--}}
                                <h3 class=" mb-0 text-dark"> Thank You for Your Order!</h3>
                                <p>
                                    We truly appreciate your trust in Photonplay. Your order has been
                                    successfully placed, and we’re already working to get it to you as
                                    quickly as possible.
                                </p>
                                <p>
                                    You’ll receive a confirmation email with all the details shortly.
                                </p>
                                <p>
                                    If you have any questions or need assistance, feel free to reach out
                                    to us at support@photonplay.com or (800) 966-9329.

                                </p>
                                <p>
                                    Happy shopping, and thank you for choosing Photonplay!!
                                </p>
{{--                                //main_shipping_double_address - vicky 26-12-2024 end--}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-delievery  border-bottom border-0">
                                <ul
                                    class="product-delievery__ d-flex flex-wrap justify-content-center align-items-center p-0 m-0">
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">Order no</span>
                                        <span class="text-uppercase">{{$orders->order_number}}</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">date</span>
                                        <span class="text-uppercase">{{date('M-d-Y',strtotime($orders->created_at))}}</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">total</span>
                                        <span class="text-uppercase">${{$orders->grand_total}}</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">Payment Method</span>
                                        <span class="text-uppercase">Online</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="payment-details bg-white p-3 pb-4 h-100">
                                <h3 class="text-uppercase">our order</h3>
                                <ul class="order-details p-0 mb-5">
                                    @foreach ($orders->orderedProducts as $product)
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text-dark">{{$product->product->title}}  </span>
                                        <span class="text-dark"> x {{$product->quantity}}</span>
{{--                                        <span class="text-amount">${{$product->price}}</span>--}}
                                    </li>
                                    @endforeach
{{--                                    <li class="d-flex justify-content-between py-3">--}}
{{--                                        <span class="text text-capitalize">Cart Subtotal</span>--}}
{{--                                        <span class="text-amount">${{$orders->cart_subtotal}}</span>--}}
{{--                                    </li>--}}
{{--                                    <li class="d-flex justify-content-between py-3">--}}
{{--                                        <span class="text text-capitalize"> Shipping and Handing</span>--}}
{{--                                        <span class="text-amount">${{$orders->shipping}}</span>--}}
{{--                                    </li>--}}
{{--                                    <li class="d-flex justify-content-between py-3">--}}
{{--                                        <span class="text text-capitalize">VAT</span>--}}
{{--                                        <span class="text-amount">${{$orders->gst}}</span>--}}
{{--                                    </li>--}}
{{--                                    @if($orders->discounted_amount != 0)--}}
{{--                                    <li class="d-flex justify-content-between py-3">--}}
{{--                                        <span class="text text-capitalize">Discount</span>--}}
{{--                                        <span class="text-amount text-danger">${{$orders->discounted_amount}}</span>--}}
{{--                                    </li>--}}
{{--                                    @endif--}}

{{--                                    <li class="d-flex justify-content-between py-3 active">--}}
{{--                                        <span class="text text-capitalize fw-bold">Order total</span>--}}
{{--                                        <span class="text-amount">${{$orders->grand_total}}</span>--}}
{{--                                    </li>--}}
{{--                                    <li class="d-flex justify-content-between py-3 active">--}}
{{--                                        <span class="text text-capitalize fw-bold">Invoice</span>--}}
{{--                                        <span class="text-amount"><a href="{{route('customer.customer_order_invoice',$orders->id)}}"><i class="bi bi-receipt"></i> </a></span>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-coupon bg-white p-3 pt-4 pb-0 h-100">
                                <h3 class="text-uppercase">Billing Details</h3>
                                <ul class="order-details p-0 mb-5">
                                    <li class="d-flex justify-content-start border-0 ">
                                        <span class="text-amount text-uppercase">Address :  </span> &nbsp
                                        <span class="text-dark">{{$orders->billing_street .' '. $orders->billing_flat_suite .' '. $orders->billing_city .' '. $orders->billing_state .' '. $orders->billing_country .' '.( $orders->billing_postcode)}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">email : </span>
                                        <span class="text">{{$orders->user->email}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">phone : </span>
                                        <span class="text">{{$orders->user->phone_number}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('customer.layout2.footer')
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/slick/slick.min.js"></script>
    <script>
        $('.tabber-list-container li').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        })
    </script>
