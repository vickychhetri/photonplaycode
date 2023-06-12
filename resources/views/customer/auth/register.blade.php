@include('customer.layouts.header')

<body>
    <div class="container-cus pt-lg-5 pt-3">
        <div class="login-sec px-2"  >
            <div class="form-section p-3"  >
                <div class="d-flex flex-lg-row form-section-inner" >
                    <div class="login-parent">
                        <div class="login-parent-inner">
                            <h2 class="mb-lg-5 mb-4">Create account</h2>
                            <form action="{{ route('customer.register') }}" method="post">
                                @csrf
                                <label for="">Name</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="text" name="name" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                                <label for="">Email Address</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="email" name="email" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                                <label for="">Password</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="password" name="password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text toggle-password">
                                     <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary rounded py-2 w-100 mb-3 fw-normal">Register</button>
                                </form>
                                <a href="{{ route('customer.social.login') }} "  class="btn btn-light rounded py-3 w-100 google-login d-flex align-items-center justify-content-center text-dark bg-white">
                                    <img src="{{ asset('assets\customer\images\google.png') }}"> Login with google</a>
                                <div class="mt-5 ">
                                    <label class="d-block">Already have an account? <a href="{{ route('customer.loginForm') }}" class="text-colorr">Login here.</a></label>
                                </div>

                        </div>
                    </div>
                    <div class="slider d-none d-lg-block h-100" >
                        <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                            <div class="carousel-indicators">

                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">

                                  <img src="{{asset('assets/customer/images/4957136_4957136.webp')}}" class="w-100" style="height: 100%;object-fit: cover;"/>
                              </div>
{{--                              <div class="carousel-item">--}}
{{--                                    12--}}
{{--                              </div>--}}
{{--                              <div class="carousel-item">--}}
{{--                                12--}}
{{--                              </div>--}}
                            </div>

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
