@include('customer.layouts.header')
<style>
    .input-cus-group .form-control{
        height: 45px;
    }
    .input-cus-group .input-group-text{
        height: 45px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .alert-danger ul {
        padding-left: 20px;
    }

    .alert-danger li {
        line-height: 1.5;
    }

</style>
<div class="container py-5">
    <h3 class="mb-4 pb-4 text-dark">Choose a Secure Checkout Method</h3>
    <div class="row">
        <!-- Login Section -->
        <div class="col-lg-6 border-end">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="mb-3">Sign in for Express Checkout</h4>
                    <!-- Display error messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <form id="loginForm" action="{{ route('customer.login') }}" method="post">
                        @csrf
                        <input type="hidden" name="p" value="{{$p ?? 0}}">
                        <input type="hidden" name="s" value="{{$s ?? 0}}">

                        <!-- Email Input -->
                        <label for="email">Email Address</label>
                        <div class="error-message" id="emailError"></div>
                        <div class="input-group input-cus-group mb-3">
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Enter your email">
                        </div>

                        <!-- Password Input -->
                        <label for="password">Password</label>
                        <div class="error-message" id="passwordError"></div>
                        <div class="input-group input-cus-group mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                            <span class="input-group-text toggle-password">
                        <i class="bi bi-eye"></i>
                    </span>
                        </div>

                        <div class="mb-4">
                            <a href="{{ route('customer.forgot_password') }}" class="text-decoration-none">Forgot your password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary  mb-3">Sign In / Login</button>
                    </form>
                    <p>Don’t have an account? <a href="{{ route('customer.registerForm') }}">Sign up here</a></p>
                </div>
            </div>

        </div>

        <!-- Guest Checkout Section -->
        <div class="col-lg-6 text-center">
            <h4 class="mb-3 mt-4">Checkout as a Guest</h4>
            <p>Customers checking out as a guest will have the opportunity to create an account after placing your order.</p>
            @if($total_cart_count >0)
                <form action="{{ route('customer.checkout', [ 'c' => request()->query('c'), 'd' => request()->query('d') ] ) }}" method="POST">
                    @csrf
            @else
                <form action="{{ route('customer.product.shop') }}" method="GET">
            @endif
                <button type="submit" class="btn btn-primary mt-3  btn-block rounded-0" >
                    Checkout as a Guest
                </button>
            </form>

        </div>
    </div>
</div>


@include('customer.layout2.footer')

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function() {--}}
{{--        var eye = document.querySelector('.toggle-password');--}}
{{--        var password = document.querySelector('input[name="password"]');--}}
{{--        var email = document.querySelector('input[name="email"]');--}}
{{--        var form = document.getElementById('loginForm');--}}

{{--        // Toggle password visibility--}}
{{--        eye.addEventListener('click', function() {--}}
{{--            if (password.type === 'password') {--}}
{{--                password.type = 'text';--}}
{{--                eye.innerHTML = '<i class="bi bi-eye-slash"></i>';--}}
{{--            } else {--}}
{{--                password.type = 'password';--}}
{{--                eye.innerHTML = '<i class="bi bi-eye"></i>';--}}
{{--            }--}}
{{--        });--}}

{{--        // Form validation--}}
{{--        form.addEventListener('submit', function(event) {--}}
{{--            event.preventDefault();--}}

{{--            // Clear previous errors--}}
{{--            document.querySelectorAll('.error-message').forEach(function(el) {--}}
{{--                el.textContent = '';--}}
{{--            });--}}

{{--            var isValid = true;--}}

{{--            // Email validation--}}
{{--            var emailValue = email.value;--}}
{{--            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;--}}
{{--            if (!emailValue || !emailRegex.test(emailValue)) {--}}
{{--                isValid = false;--}}
{{--                document.getElementById('emailError').textContent = 'Please enter a valid email address.';--}}
{{--            }--}}

{{--            // Password validation--}}
{{--            var passwordValue = password.value;--}}
{{--            if (!passwordValue || passwordValue.length < 6) {--}}
{{--                isValid = false;--}}
{{--                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';--}}
{{--            }--}}

{{--            // Submit the form if valid--}}
{{--            if (isValid) {--}}
{{--                form.submit();--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<style>
    /* Error message styling */
    .error-message {
        color: red;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>
