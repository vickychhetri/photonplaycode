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
                        <div class="col-lg-12 mb-4 pt-4">
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
                                        <span class="text-uppercase">Invoice</span>
                                        <span class="text-uppercase">
                                            <a href="{{route('customer.customer_order_invoice',$orders->id)}}?download=Y">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                      <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                                                    </svg>
                                            </a>
                                         </span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">Payment Method</span>
                                        <span class="text-uppercase">Online</span>
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
