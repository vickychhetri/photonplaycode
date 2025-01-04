@include('customer.layouts.header')

<div class="container-cus pt-lg-5 pt-3">
    <div class="login-sec">
        <div class="form-section2 p-3">
            <div class="d-flex form-section-inner">
                <div class="login-parent">
                    <div class="login-parent-inner">


                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @else
                            <h4 class="mb-lg-5 mb-4">Enter your Email</h4>
                            <form action="{{ route('customer.forgot_password') }}" method="post">
                                @csrf
                                <label for="email">Email</label>
                                <div class="input-group input-cus-group mb-4">
                                    <input type="email" name="email" class="form-control input-cus" aria-label="Email">
                                </div>

                                <button class="btn btn-primary w-100">Send Verification Link</button>
                            </form>

                            @if (session('error'))
                                <div class="alert alert-danger mt-3">
                                    {{ session('error') }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

                <div class="slider d-none d-lg-block">
                    <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                        <div class="carousel-indicators"></div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/customer/images/forgot_pass.webp') }}" class="w-100" style="height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('customer.layout2.footer')
