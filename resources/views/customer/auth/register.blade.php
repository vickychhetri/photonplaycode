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
<div class="container-cus pt-lg-5 pt-3">
    <div class="login-sec">
        <div class="form-section2 p-3">
            <div class="d-flex flex-lg-row form-section-inner">
                <div class="login-parent">
                    <div class="login-parent-inner">
                        <h4 class="mb-lg-5 mb-1 text-dark">Create an Account</h4>

                        <!-- Display all validation errors here -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="registerForm" action="{{ route('customer.register') }}" method="post">
                            @csrf


                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <div class="error-message" id="nameError"></div>
                                    <div class="input-group input-cus-group mb-1">
                                        <input type="text" name="name" id="name" class="form-control input-cus"
                                               value="{{ old('name') }}" aria-label="Name">
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name</label>
                                    <div class="error-message" id="lastNameError"></div>
                                    <div class="input-group input-cus-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control input-cus"
                                               value="{{ old('last_name') }}" aria-label="Last Name">
                                    </div>
                                </div>
                            </div>


                            <label for="">Email Address</label>
                            <div class="error-message" id="emailError"></div>
                            <div class="input-group input-cus-group  mb-1">
                                <input type="email" name="email" id="email" class="form-control input-cus"
                                       value="{{ old('email') }}" aria-label="Email Address">
                            </div>


                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <div class="error-message" id="phone_number_error"></div>
                                <div class="d-flex gap-2">
                                    <!-- Dropdown for Country Code -->
                                    <select name="phone_code" id="country_code" class="form-select w-auto" aria-label="Country Code">
                                        @foreach($countries as $country)
                                            <option value="{{$country->dial_code}}">{{$country->dial_code}}</option>
                                        @endforeach
                                    </select>

                                    <input type="number" name="phone_number" id="phone_number"
                                           class="form-control flex-grow-1" value="{{ old('phone_number') }}"
                                           aria-label="Phone Number" placeholder="Enter phone number" min="1000000" max="9999999999"
                                           oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);">
                                </div>
                            </div>



                            <label for="">Password <span style="font-size: 10px;">  (Password must be 8-12 characters long and must contain one special character)</span></label>

                            <div class="error-message" id="passwordError"></div>
                            <div class="input-group input-cus-group  mb-1">
                                <input type="password" name="password" id="password" class="form-control input-cus"
                                       aria-label="Password">
                                <span class="input-group-text toggle-password-password">
            <i class="bi bi-eye"></i>
        </span>
                            </div>

                            <label for="">Confirm Password</label>
                            <div class="error-message" id="confirmPasswordError"></div>
                            <div class="input-group input-cus-group mb-4">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control input-cus" aria-label="Confirm Password">
                                <span class="input-group-text toggle-password-confirmation">
            <i class="bi bi-eye"></i>
        </span>
                            </div>

                            <button type="submit" class="btn btn-primary rounded py-2 w-100 mb-3 fw-normal">Register
                            </button>
                        </form>


                        <div class="mt-5">
                            <label class="d-block">Already have an account? <a href="{{ route('customer.loginForm') }}"
                                                                               class="text-colorr">Login
                                    here.</a></label>
                        </div>
                    </div>
                </div>

                <div class="slider d-none d-lg-block h-100">
                    <div id="carouselExampleCaptions" data-bs-interval="false" data-bs-ride="false"
                         data-bs-pause="hover" class="carousel slide">
                        <div class="carousel-indicators"></div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/customer/images/4957136_4957136.webp')}}" class="w-100"
                                     style="height: 100%;object-fit: cover;" alt=""/>
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
    document.addEventListener('DOMContentLoaded', function () {
        var eyePassword = document.querySelector('.toggle-password-password');
        var eyeConfirmation = document.querySelector('.toggle-password-confirmation');
        var password = document.querySelector('input[name="password"]');
        var confirmPassword = document.querySelector('input[name="password_confirmation"]');

        // Toggle password visibility
        eyePassword.addEventListener('click', function () {
            if (password.type === 'password') {
                password.type = 'text';
                eyePassword.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                password.type = 'password';
                eyePassword.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        eyeConfirmation.addEventListener('click', function () {
            if (confirmPassword.type === 'password') {
                confirmPassword.type = 'text';
                eyeConfirmation.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                confirmPassword.type = 'password';
                eyeConfirmation.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Clear any previous error messages
            document.querySelectorAll('.error-message').forEach(function (el) {
                el.textContent = '';
            });

            var isValid = true;

            // Validate Name
            var name = document.getElementById('name').value;
            if (!name) {
                isValid = false;
                document.getElementById('nameError').textContent = 'Name is required.';
            }

            // Validate Email
            var email = document.getElementById('email').value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email || !emailRegex.test(email)) {
                isValid = false;
                document.getElementById('emailError').textContent = 'Please enter a valid email address.';
            }

            // Validate Password
            var passwordValue = password.value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/;
            if (!passwordValue || !passwordRegex.test(passwordValue)) {
                isValid = false;
                document.getElementById('passwordError').textContent = 'Enter Password (Password must be 8-12 characters long, contain at least one letter, one number, and one special character like @$!%*?&)';
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

<style>
    /* Error message style */
    .error-message {
        color: red;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>
