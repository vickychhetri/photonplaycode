@include('customer.layouts.header')

<div class="container-cus pt-lg-5 pt-3">
    <div class="login-sec">
        <div class="form-section2 p-3">
            <div class="d-flex form-section-inner">
                <div class="login-parent">
                    <div class="login-parent-inner">
                        <h1 class="mb-lg-5 mb-4 text-dark">Login in to <br />Your account</h1>
                        <!-- Display error messages here -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form id="loginForm" action="{{ route('customer.login') }}" method="post">
                            @csrf
                            <input type="hidden" name="p" value="{{$p ?? 0}}">
                            <input type="hidden" name="s" value="{{$s ?? 0}}">

                            <!-- Email Validation -->
                            <label for="">Email Address</label><div class="error-message" id="emailError"></div>
                            <div class="input-group input-cus-group mb-4">
                                <input type="text" name="email" id="email" class="form-control input-cus" aria-label="Email Address">

                            </div>

                            <!-- Password Validation -->
                            <label for="">Password</label> <div class="error-message" id="passwordError"></div>
                            <div class="input-group input-cus-group mb-1">
                                <input type="password" name="password" id="password" class="form-control input-cus" aria-label="Password">
                                <span class="input-group-text toggle-password">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>

                            <label class="d-block mb-5">
                                <a href="{{ route('customer.forgot_password') }}" class="text-decoration-none text-colorr">Forgot password?</a>
                            </label>
                            <button type="submit" class="btn btn-primary rounded py-2 w-100 mb-3 fw-normal">Login</button>
                        </form>
                        <div class="mt-5">
                            <label class="d-block">Don't have an account? <a href="{{ route('customer.registerForm') }}" class="text-colorr">Signup here.</a></label>
                        </div>
                    </div>
                </div>

                <!-- Image Slider -->
                <div class="slider d-none d-lg-block">
                    <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                        <div class="carousel-indicators"></div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/customer/images/login.webp')}}" class="w-100" style="height: 100%;object-fit: cover;" />
                            </div>
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
        var email = document.querySelector('input[name="email"]');
        var form = document.getElementById('loginForm');

        // Toggle password visibility
        eye.addEventListener('click', function() {
            if (password.type === 'password') {
                password.type = 'text';
                eye.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                password.type = 'password';
                eye.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        // Form validation
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.querySelectorAll('.error-message').forEach(function(el) {
                el.textContent = '';
            });

            var isValid = true;

            // Email validation
            var emailValue = email.value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailValue || !emailRegex.test(emailValue)) {
                isValid = false;
                document.getElementById('emailError').textContent = 'Please enter a valid email address.';
            }

            // Password validation
            var passwordValue = password.value;
            if (!passwordValue || passwordValue.length < 6) {
                isValid = false;
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';
            }

            // Submit the form if valid
            if (isValid) {
                form.submit();
            }
        });
    });
</script>

<style>
    /* Error message styling */
    .error-message {
        color: red;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>
