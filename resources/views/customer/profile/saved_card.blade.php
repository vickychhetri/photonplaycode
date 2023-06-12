@include('customer.layouts.header')
<section class="overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                    <x-customer.profile-sidebar />
                        <div class="col-lg-8  col-md-6 col-12">
                            <div class="overview-wrapper">
                                <h5 class="btn-light fs-5 py-2 text-capitalize">Saved Cards</h5>

                            </div>
                            <div class="d-md-flex gap-4 mt-5">
                                <div
                                    class="order-address text-center bg-white p-4 border d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{asset('assets/customer/images/pluse-add.png')}}" alt="Not Found" class="mb-4">
                                    <h6 class="text-grey">ADD CARD</h6>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="" class="subscribr-form">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                    class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@include('customer.layouts.footer')