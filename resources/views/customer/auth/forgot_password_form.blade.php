@include('customer.layouts.header')

<body>
    <div class="container-cus pt-lg-5 pt-3">
        <div class="login-sec">
            <div class="form-section p-3" >
                <div class="d-flex form-section-inner" >
                    <div class="login-parent">
                        <div class="login-parent-inner">
                            <h2 class="mb-lg-5 mb-4">Enter your <br />Email</h2>
                            <form action="{{ route('customer.forgot_password') }}" method="post">
                                @csrf
                                <label for="">Email</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="email" name="email" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">

                                </div>
                                <button class="btn btn-primary w-100">Send Verification Link</button>
                            </form>

                        </div>
                    </div>
                    <div class="slider d-none d-lg-block" >
                        <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                            <div class="carousel-indicators">
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <img src="{{asset('assets/customer/images/forgot_pass.webp')}}"  class="w-100" style="height: 100%;object-fit: cover;"/>
                                </div>

                            </div>

{{--                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
{{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                <span class="visually-hidden">Previous</span>--}}
{{--                            </button>--}}
{{--                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
{{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                <span class="visually-hidden">Next</span>--}}
{{--                            </button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('customer.layout2.footer')
