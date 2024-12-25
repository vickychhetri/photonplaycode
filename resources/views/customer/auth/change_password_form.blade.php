@include('customer.layouts.header')

<div class="container-cus pt-lg-5 pt-3">
    <div class="login-sec">
        <div class="form-section2 p-3">
            <div class="d-flex form-section-inner">
                <div class="login-parent">
                    <div class="login-parent-inner">
                        <h4 class="mb-lg-5 mb-4">Create new password</h4>

                        <!-- Display validation errors from server -->
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="changePasswordForm" action="{{ route('customer.change_password') }}" method="post">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">

                            <label for="password">New Password</label>
                            <div class="input-group input-cus-group mb-4">
                                <input type="password" name="password" id="password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                <span class="input-group-text toggle-password-password">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                            <div id="passwordError" class="error-message text-danger"></div>

                            <label for="confirm_password">Repeat Password</label>
                            <div class="input-group input-cus-group mb-5">
                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control input-cus" aria-label="Dollar amount (with dot and two decimal places)">
                                <span class="input-group-text toggle-password-confirmation">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                            <div id="confirmPasswordError" class="error-message text-danger"></div>

                            <button type="submit" class="btn btn-primary w-100">Set Password</button>
                        </form>

                        <div class="mt-5">
                            <label class="d-block">Have an account? <a href="{{ route('customer.loginForm') }}" class="text-colorr">Login here</a></label>
                        </div>
                    </div>
                </div>

                <div class="slider d-none d-lg-block">
                    <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false" data-bs-pause="hover" class="carousel slide">
                        <div class="carousel-indicators">
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/customer/images/changepassword.webp') }}" class="w-100" style="height: 100%; object-fit: cover;" />
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
        var eyePassword = document.querySelector('.toggle-password-password');
        var eyeConfirmation = document.querySelector('.toggle-password-confirmation');
        var password = document.querySelector('input[name="password"]');
        var confirmPassword = document.querySelector('input[name="password_confirmation"]');

        // Toggle password visibility
        eyePassword.addEventListener('click', function() {
            if (password.type === 'password') {
                password.type = 'text';
                eyePassword.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                password.type = 'password';
                eyePassword.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        eyeConfirmation.addEventListener('click', function() {
            if (confirmPassword.type === 'password') {
                confirmPassword.type = 'text';
                eyeConfirmation.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                confirmPassword.type = 'password';
                eyeConfirmation.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        // Form validation
        document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(function(el) {
                el.textContent = '';
            });

            var isValid = true;

            // Validate Password
            var passwordValue = password.value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;
            if (!passwordValue || !passwordRegex.test(passwordValue)) {
                isValid = false;
                document.getElementById('passwordError').textContent = 'Password must be at least 8 characters long, include a letter and a number.';
            }

            // Validate Confirm Password
            var confirmPasswordValue = confirmPassword.value;
            if (confirmPasswordValue !== passwordValue) {
                isValid = false;
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
            }

            // Submit the form if valid
            if (isValid) {
                this.submit();
            }
        });
    });
</script>
