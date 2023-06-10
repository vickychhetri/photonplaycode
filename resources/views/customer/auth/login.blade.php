@include('customer.layouts.header')
<body>

    <!-- header-end -->
    <div class="container-cus pt-lg-5 pt-3">
        <div class="login-sec">
            <div class="form-section p-3" >
                <div class="d-flex form-section-inner" >
                    <div class="login-parent">
                        <div class="login-parent-inner">
                            <h2 class="mb-lg-5 mb-4">Login in to <br />Your account</h2>
                            <form action="{{ route('customer.login') }}" method="post">
                                @csrf
                                <input type="hidden" name="p" value="{{$p ?? 0}}">
                                <input type="hidden" name="s" value="{{$s ?? 0}}">
                                <label for="">Email Address</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="text" name="email" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                                <label for="">Repeat Password</label>
                                <div class="input-group input-cus-group mb-1">
                                    <input type="password" name="password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text toggle-password">
                                     <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                                <label class="d-block mb-5"><a href="{{ route('customer.forgot_password') }}" class="text-decoration-none text-colorr">Forgot password ?</a></label>
                                <button type="submit" class="btn btn-primary rounded py-2 w-100 mb-3 fw-normal">Login</button>
                                <a href="{{ route('customer.social.login') }}" class="btn btn-light rounded py-3 w-100 google-login d-flex align-items-center justify-content-center text-dark bg-white">
                                    <img src="{{ asset('assets\customer\images\google.png') }}"> Login with google</a>
                            </form>
                            <div class="mt-5">
                                <label class="d-block">Don't have an account? <a href="{{ route('customer.registerForm') }}" class="text-colorr">Signup here.</a></label>
                            </div>

                        </div>
                    </div>
                    <div class="slider d-none d-lg-block"  >
                        <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                            <div class="carousel-indicators">
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item  active">
                              <img src="{{asset('assets/customer/images/login.webp')}}"         class="w-100" style="height: 100%;object-fit: cover;"/>
                                </div>
{{--                                <div class="carousel-item">--}}
{{--                                    <img src="https://pbs.twimg.com/media/FsnPfg4WIAAz5Ve?format=jpg&name=large" class="w-100"  />--}}

{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    12--}}
{{--                                </div>--}}
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var eye = document.querySelector('.toggle-password');
            var password = document.querySelector('input[name="password"]');

            eye.addEventListener('click', function() {
                if (password.type === 'password') {
                    password.type = 'text';
                    eye.innerHTML = '<i class="bi bi-eye-slash"></i>';
                } else {
                    password.type = 'password';
                    eye.innerHTML = '<i class="bi bi-eye"></i>';
                }
            });
        });

    </script>




    @push('head')

    @endpush


