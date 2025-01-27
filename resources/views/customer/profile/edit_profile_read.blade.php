@include('customer.layouts.header')

<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <x-customer.profile-sidebar />

                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3">Account Details</h5>
                            <div class="card-box border p-3">
                                <form method="post" action="{{route('customer.update.profile')}}"
                                      id="profileUpdateForm">
                                    @csrf
                                    <div class="mb-4">
                                        <label> Email</label>
                                    <input type="email" name="email" class="form-control shadow-none" style="background-color: #faf4f4;" value="{{$customer->email}}" readonly>
                                    </div>
                                    <div class="mb-4">
                                        <label> Name</label>
                                        <input type="text" name="name" class="form-control shadow-none" value="{{$customer->name}}"
                                               id="name" placeholder="Customer First Name">
                                    </div>
                                    <div class="mb-4">
                                        <label> Last Name</label>
                                        <input type="text" name="last_name" class="form-control shadow-none" value="{{$customer->last_name}}"
                                               id="last_name" placeholder="Last Name">
                                    </div>

                                    <div class="mb-4">

                                        <label for="password">Password
                                            <span style="font-size: 10px;">
                                                (Password must be 8-12 characters long, contain at least one letter, one number, and one special character like @$!%*?&)
                                            </span>
                                        </label>
                                        <div class="error-message" id="passwordError"></div>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control shadow-none"
                                                   id="password" placeholder="Password">
                                            <span class="input-group-text toggle-password">
                                                <i class="bi bi-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <div class="error-message" id="phone_number_error"></div>
                                        <div class="d-flex gap-2">
                                            <!-- Dropdown for Country Code -->
                                            <select name="phone_code" id="country_code" class="form-select w-auto" aria-label="Country Code" >
                                                @foreach($countries as $country)
                                                    <option value="{{$country->dial_code}}" {{$country->dial_code==$customer->phone_code?"selected":''}}>{{$country->code}}({{$country->dial_code}})</option>
                                                @endforeach
                                            </select>

                                            <input type="number" name="phone_number" id="phone_number"
                                                   class="form-control flex-grow-1" value="{{$customer->phone_number}}"
                                                   aria-label="Phone Number" placeholder="Enter phone number" >
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label> Company</label>
                                        <input type="text" name="company_name" class="form-control shadow-none" value="{{$customer->company_name}}"
                                               id="exampleInputPassword3" placeholder="Company Name">
                                    </div>

                                    <button type="submit" class="btn btn-primary rounded text-uppercase">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var eyePassword = document.querySelector('.toggle-password');
        var password = document.querySelector('input[name="password"]');

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

        // Form validation
        document.getElementById('profileUpdateForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Clear previous error messages
            document.getElementById('passwordError').textContent = '';

            var isValid = true;

            // Validate Password
            var passwordValue = password.value;
            var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/;
            if (!passwordValue || !passwordRegex.test(passwordValue)) {
                isValid = false;
                document.getElementById('passwordError').textContent = 'Enter Password (Password must be 8-12 characters long, contain at least one letter, one number, and one special character like @$!%*?&)';
            }

            var phoneNumber = document.getElementById('phone_number').value;
            var phoneRegex = /^[0-9]{8,11}$/; // Allows only 8–11 digits
            if (!phoneNumber || !phoneRegex.test(phoneNumber)) {
                isValid = false;
                document.getElementById('phone_number_error').textContent = 'Please enter a valid phone number.';
            } else {
                document.getElementById('phone_number_error').textContent = ''; // Clear the error if valid
            }


            // Submit form if valid
            if (isValid) {
                this.submit();
            }
        });
    });
</script>

<style>
    .error-message {
        color: red;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>
