@include('customer.layouts.header')

<body>
    <div class="container-cus pt-lg-5 pt-3">
        <div class="login-sec">
            <div class="form-section p-3"  >
                <div class="d-flex form-section-inner" >
                    <div class="login-parent">
                        <div class="login-parent-inner">
                            <h2 class="mb-lg-5 mb-4">Create new <br />password</h2>
                            <form action="{{ route('customer.change_password') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{$email}}">

                                <label for="">New Password</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="password" name="password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">
                                        <img src="{{ asset('assets\customer\images\eye.png') }}" alt="eye" />
                                    </span>
                                </div>
                                <label for="">Repeat Password</label>
                                <div class="input-group input-cus-group mb-5">
                                    <input type="password" name="confirm_password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">
                                        <img src="{{ asset('assets\customer\images\eye.png') }}" alt="eye" />
                                    </span>
                                </div>
                                <button class="btn btn-primary w-100">Set Password</button>
                            </form>

                            <div class="mt-5">
                                <label class="d-block">have an account? <a href="{{ route('customer.loginForm') }}" class="text-colorr">Login here</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="slider d-none d-lg-block" >
                        <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                            <div class="carousel-indicators">
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <img src="{{asset('assets/customer/images/changepassword.webp')}}" class="w-100" style="height: 100%;object-fit: cover;"/>

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
