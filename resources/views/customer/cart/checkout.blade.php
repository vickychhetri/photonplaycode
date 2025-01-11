@include('customer.layouts.header')
<head>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
{{--//main_shipping_double_address - vicky 26-12-2024 start--}}

<style>
    .error {
        border: 2px solid red;
    }
</style>

<style>
    .text-amount {
        font-family: Roboto, sans-serif;

    }

    #suggestions {
        max-height: 200px; /* Limit height to make scrolling possible for many suggestions */
        overflow-y: auto;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .list-group-item {
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    #billing_postcode {
        text-transform: uppercase;
    }

    #shipping_postcode {
        text-transform: uppercase;
    }

    .list-group-item:hover {
        background-color: #f8f9fa; /* Light gray hover effect */
    }
</style>
{{--//main_shipping_double_address - vicky 26-12-2024 end--}}
<section class="stepper-form-tabber pt-3 pb-0">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li @if(Request::is('shipping-and-checkout')) class="active" @endif>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>

    <!-- Form -->
    <section class="step-form">
        <div class="container">
{{--            //main_shipping_double_address - vicky 26-12-2024 start--}}
            <form id="myFormCheckoutProcess" action="{{route('customer.place.order')}}" method="post">
{{--                //main_shipping_double_address - vicky 26-12-2024 end--}}

            <div class="row">
                <div class="col-md-8">
                    @csrf
                    <div>
                        <h4>
                        @if($customer && !is_string($customer))
                            {{"Hello, ". $customer->name }}
                        <hr/>
                        @else
                            {{"Hello, Guest" }}
                        @endif
                        </h4>
                    </div>
                    <h3>billing details</h3>
{{--                    @if(!is_string($customer))--}}
{{--                    <div class="mb-3">--}}
{{--                        <select name="billing_address" id="saved_address" class="form-select">--}}
{{--                                <option value="0" selected> --Select Saved Address-- </option>--}}
{{--                            @forelse ($addresses as $address)--}}
{{--                                <option value="{{$address->id}}">{{$address->street_number . ' ... ' . $address->country}}</option>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    @endif--}}
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    @if(!is_string($customer))
                        <input type="hidden" class="form-control rounded-0 px-3" name="email_login" value="{{ $customer->email }}">
                    @else
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control rounded-0 px-3" maxlength="40" placeholder="Enter First Name" name="name" id="name" value="" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control rounded-0 px-3" maxlength="40" placeholder="Enter Last Name" name="last_name" id="last_name" value="" required>
                            </div>
                        </div>

                        <input type="text" class="form-control rounded-0 px-3" placeholder="Enter Email Address" id-="email" name="email" value="" id="email" maxlength="100" required>
{{--                        <input type="text" class="form-control rounded-0 px-3" placeholder="Enter Phone Number" name="phone_number" maxlength="13" value="" required pattern="\d*" inputmode="numeric">--}}
                        <span style="font-size: 8px"> (Country code : e.g US/CA) </span>
                        <div class="d-flex">

                            <select name="phone_code" id="country_code" class="form-control rounded-0 px-3 " style="max-width: 100px;" aria-label="Country Code">
                                @foreach($countries as $country)
                                    <option value="{{$country->dial_code}}">{{$country->code}}({{$country->dial_code}})</option>
                                @endforeach
                            </select>

                            <input type="text" name="phone_number" id="phone_number"
                                   class="form-control" value="{{ old('phone_number') }}"
                                   aria-label="Phone Number" placeholder="Enter phone number">
                        </div>
                    @endif
                    <div>
                        <label for="billing_street" class="form-label">Street Number</label>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_street" placeholder="Street Number" id="billing_street" value="" maxlength="150" required>
                    </div>

                    <div>
                        <label for="billing_flat_suite" class="form-label">Flat/Suite</label>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_flat_suite" placeholder="Flat/Suite" id="billing_flat_suite" maxlength="100" value="">
                    </div>
                    <div>
                        <label for="billing_flat_suite" class="form-label">Address line 2</label>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_address_line_2" placeholder="Address line 2" id="address">
                    </div>

                    <div>
                        <div>
                            <label for="billing_postcode" class="form-label">Postal Code</label>
                            <input type="text" class="form-control rounded-0 px-3 pb-0" name="billing_postcode" id="billing_postcode" placeholder="Postal Code" maxlength="8" required />
                            <span id="billing_postcode_error_msg" class="mb-2"></span>
                            <ul id="suggestions" class="list-group pt-0 mt-0 mb-2" style="display:none;"></ul>
                        </div>

                        <div>
                            <label for="billing_city" class="form-label">City</label>
                            <input type="text" id="billing_city" name="billing_city" class="form-control rounded-0 px-3 mt-2" placeholder="Enter City Name" required />
                        </div>

                        <div>
                            <label for="billing_state" class="form-label">State</label>
                            <input type="text" id="billing_state" name="billing_state" class="form-control rounded-0 px-3" placeholder="Enter State Name" required  />
                        </div>

                        <div>
                            <label for="billing_country" class="form-label">Country</label>
                            <input type="text" id="billing_country" placeholder="Enter Country Name" name="billing_country" class="form-control rounded-0 px-3" required  />
                        </div>

                    </div>

                    <script>
                        let debounceTimeout;

                        // Function to fetch location suggestions based on postal code
                        document.getElementById('billing_postcode').addEventListener('input', function () {
                            let postalCode = this.value.trim();
                            const suggestionsList = document.getElementById('suggestions');

                            // Reset associated fields when the postal code changes
                            resetFields();

                            // Hide suggestions if no postal code is entered
                            if (postalCode.length === 0) {
                                suggestionsList.style.display = 'none';
                                return;
                            }

                            // Only trigger the request if the postal code is at least 3 characters
                            if (postalCode.length >= 3) {
                                // Debounce: clear previous timeout if the user is still typing
                                clearTimeout(debounceTimeout);

                                // Set a new timeout to wait for the user to stop typing
                                debounceTimeout = setTimeout(function () {
                                    // Send request to backend after user stops typing
                                    fetch(`/search-locations?postal_code=${postalCode}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Check if the response is successful
                                            if (data.status === 'success' && data.data.length > 0) {
                                                // Clear previous suggestions
                                                suggestionsList.innerHTML = '';
                                                suggestionsList.style.display = 'block';

                                                if (data.data.length === 1) {
                                                    // If there's only one suggestion, populate fields directly
                                                    const location = data.data[0];
                                                    document.getElementById('billing_postcode').value = location.postal_code;
                                                    document.getElementById('billing_country').value = location.country_name;
                                                    document.getElementById('billing_state').value = location.province;
                                                    document.getElementById('billing_city').value = location.city;

                                                    suggestionsList.style.display = 'none';
                                                } else {
                                                    // Show suggestions for the postal code entered
                                                    data.data.forEach(location => {
                                                        const suggestionItem = document.createElement('li');
                                                        suggestionItem.classList.add('list-group-item', 'cursor-pointer');
                                                        suggestionItem.textContent = `${location.city}, ${location.postal_code} (${location.country})`;
                                                        suggestionItem.dataset.postalCode = location.postal_code; // Store postal code in the suggestion

                                                        // Add event listener to select a suggestion
                                                        suggestionItem.addEventListener('click', function () {
                                                            // Populate the form with selected suggestion
                                                            document.getElementById('billing_postcode').value = location.postal_code;
                                                            document.getElementById('billing_country').value = location.country_name;
                                                            document.getElementById('billing_state').value = location.province;
                                                            document.getElementById('billing_city').value = location.city;

                                                            suggestionsList.style.display = 'none';
                                                        });

                                                        // Append the suggestion item to the list
                                                        suggestionsList.appendChild(suggestionItem);
                                                    });
                                                }
                                            } else {
                                                // No suggestions found, show error message
                                                // const billingPostcodeErrorMsg = document.getElementById('billing_postcode_error_msg');
                                                // billingPostcodeErrorMsg.style.display = 'block';
                                                // billingPostcodeErrorMsg.style.color = 'black';
                                                // billingPostcodeErrorMsg.innerText = "Enter Address Manually";
                                                // suggestionsList.style.display = 'none';
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error fetching location data:', error);
                                            suggestionsList.style.display = 'none'; // Hide suggestions on error
                                        });
                                }, 200); // 200ms delay after the user stops typing
                            }
                        });

                        // Function to reset fields
                        function resetFields() {
                            document.getElementById('billing_country').value = '';
                            document.getElementById('billing_state').value = '';
                            document.getElementById('billing_city').value = '';
                        }

                    </script>
{{--                 <script>--}}
{{--                     let debounceTimeout;--}}

{{--                     // Function to fetch location suggestions based on postal code--}}
{{--                     document.getElementById('billing_postcode').addEventListener('input', function () {--}}
{{--                         let postalCode = this.value.trim();--}}
{{--                         const suggestionsList = document.getElementById('suggestions');--}}

{{--                         // Reset associated fields when the postal code changes--}}
{{--                         resetFields();--}}

{{--                         // Hide suggestions if no postal code is entered--}}
{{--                         if (postalCode.length === 0) {--}}
{{--                             suggestionsList.style.display = 'none';--}}
{{--                             return;--}}
{{--                         }--}}

{{--                         // Only trigger the request if the postal code is at least 3 characters--}}
{{--                         if (postalCode.length >= 3) {--}}
{{--                             // Debounce: clear previous timeout if the user is still typing--}}
{{--                             clearTimeout(debounceTimeout);--}}

{{--                             // Set a new timeout to wait for the user to stop typing--}}
{{--                             debounceTimeout = setTimeout(function () {--}}
{{--                                 // Send request to backend after user stops typing--}}
{{--                                 fetch(`/search-locations?postal_code=${postalCode}`)--}}
{{--                                     .then(response => response.json())--}}
{{--                                     .then(data => {--}}
{{--                                         // Check if the response is successful--}}
{{--                                         if (data.status === 'success' && data.data.length > 0) {--}}
{{--                                             // Clear previous suggestions--}}
{{--                                             suggestionsList.innerHTML = '';--}}
{{--                                             suggestionsList.style.display = 'block';--}}

{{--                                             if (data.data.length === 1) {--}}
{{--                                                 data.data.forEach(location => {--}}
{{--                                                     // Populate the form with selected suggestion--}}
{{--                                                     document.getElementById('billing_postcode').value = location.postal_code;--}}

{{--                                                     document.getElementById('billing_country').innerHTML = `<option value="${location.country_name}">${location.country_name}</option>`;--}}
{{--                                                     document.getElementById('billing_state').innerHTML = `<option value="${location.province_abbr}">${location.province}</option>`;--}}
{{--                                                     document.getElementById('billing_city').innerHTML = `<option value="${location.city}">${location.city}</option>`;--}}
{{--                                                     document.getElementById('billing_postcode_error_msg').style.display = "none";--}}
{{--                                                     // Hide the suggestions list after selection--}}
{{--                                                     suggestionsList.style.display = 'none';--}}
{{--                                                 });--}}
{{--                                             }else {--}}
{{--                                                 // Show suggestions for the postal code entered--}}
{{--                                                 data.data.forEach(location => {--}}
{{--                                                     const suggestionItem = document.createElement('li');--}}
{{--                                                     suggestionItem.classList.add('list-group-item', 'cursor-pointer');--}}
{{--                                                     suggestionItem.textContent = `${location.city}, ${location.postal_code} (${location.country})`;--}}
{{--                                                     suggestionItem.dataset.postalCode = location.postal_code; // Store postal code in the suggestion--}}

{{--                                                     // Add event listener to select a suggestion--}}
{{--                                                     suggestionItem.addEventListener('click', function () {--}}
{{--                                                         // Populate the form with selected suggestion--}}
{{--                                                         document.getElementById('billing_postcode').value = location.postal_code;--}}

{{--                                                         document.getElementById('billing_country').innerHTML = `<option value="${location.country_name}">${location.country_name}</option>`;--}}
{{--                                                         document.getElementById('billing_state').innerHTML = `<option value="${location.province_abbr}">${location.province}</option>`;--}}
{{--                                                         document.getElementById('billing_city').innerHTML = `<option value="${location.city}">${location.city}</option>`;--}}
{{--                                                         document.getElementById('billing_postcode_error_msg').style.display = "none";--}}
{{--                                                         // Hide the suggestions list after selection--}}
{{--                                                         suggestionsList.style.display = 'none';--}}
{{--                                                     });--}}

{{--                                                     // Append the suggestion item to the list--}}
{{--                                                     suggestionsList.appendChild(suggestionItem);--}}
{{--                                                 });--}}
{{--                                             }--}}


{{--                                         } else {--}}
{{--                                             // No suggestions found, hide the list--}}
{{--                                             const billingPostcodeErrorMsg = document.getElementById('billing_postcode_error_msg');--}}

{{--                                             document.getElementById('billing_postcode_error_msg').style.color = "red";--}}
{{--                                             document.getElementById('billing_postcode_error_msg').innerText =--}}

{{--                                             billingPostcodeErrorMsg.style.display = 'block';--}}
{{--                                             billingPostcodeErrorMsg.style.color = 'red';--}}
{{--                                             billingPostcodeErrorMsg.innerText = "Postal code is invalid. Make sure you’ve entered it correctly!";--}}
{{--                                             suggestionsList.style.display = 'none';--}}
{{--                                         }--}}
{{--                                     })--}}
{{--                                     .catch(error => {--}}
{{--                                         console.error('Error fetching location data:', error);--}}
{{--                                         suggestionsList.style.display = 'none'; // Hide suggestions on error--}}
{{--                                     });--}}
{{--                             }, 200); // 200ms delay after the user stops typing--}}
{{--                         }--}}
{{--                     });--}}

{{--                     // Function to reset fields--}}
{{--                     function resetFields() {--}}
{{--                         document.getElementById('billing_country').innerHTML = '<option value="">Select Country</option>';--}}
{{--                         document.getElementById('billing_state').innerHTML = '<option value="">Select State</option>';--}}
{{--                         document.getElementById('billing_city').innerHTML = '<option value="">Select City</option>';--}}
{{--                     }--}}

{{--                 </script>--}}

                    <h3 class="mt-5">Shipping Details</h3>
                    <label>
                        <input type="checkbox" id="is_shipping_same" name="is_shipping_same" value="1" checked>
                        My Shipping address is the same as my billing address?
                    </label>
                    <div class="mt-3">
                        <label>
                            <input type="radio" id="i_want_free_shipping" name="i_want_free_shipping" value="0" checked>
                            Free Shipping
                        </label>
                    </div>

                    <div class="mt-2">
                        <label>
                            <input type="radio" id="i_want_free_shipping" name="i_want_free_shipping" value="1">
                            Express Shipping
                        </label>
                    </div>
                    <div id="shipping-details" class="mt-3 d-none">

                        <div>
                            <label for="shipping_street" class="form-label">Street Number</label>
                            <input type="text" class="form-control rounded-0 px-3" name="shipping_street" id="shipping_street" placeholder="Street Number">
                        </div>

                        <div>
                            <label for="shipping_flat_suite" class="form-label">Flat/Suite</label>
                            <input type="text" class="form-control rounded-0 px-3" name="shipping_flat_suite" id="shipping_flat_suite" placeholder="Flat/Suite">
                        </div>
                        <div>
                            <label for="shipping_flat_suite" class="form-label">Address Line 2</label>
                            <input type="text" class="form-control rounded-0 px-3" name="shipping_address_line_2" placeholder="Address line 2" id="address">
                        </div>


                        <div>
                            <label for="shipping_postcode" class="form-label">Postal Code</label>

                            <input type="text" class="form-control rounded-0 px-3" name="shipping_postcode" id="shipping_postcode" placeholder="Postal Code"  autocomplete="off"
                                   autocorrect="off"
                                   autocapitalize="off" >
                            <span id="shipping_postcode_error_msg" class="mb-2"></span>
                            <ul id="shipping-suggestions" class="list-group mt-0 mb-2" style="display:none;"></ul>
                        </div>
                        <div>
                            <label for="shipping_city" class="form-label">City</label>
                            <input type="text" id="shipping_city" class="form-control rounded-0 px-3" placeholder="Enter City Name" name="shipping_city"  required />
                        </div>
                        <div>
                            <label for="shipping_state" class="form-label">State</label>
                            <input type="text" id="shipping_state" class="form-control rounded-0 px-3" placeholder="Enter State Name" name="shipping_state"  required />
                        </div>
                        <div>
                            <label for="shipping_country" class="form-label">Country</label>
                            <input type="text" id="shipping_country" class="form-control rounded-0 px-3" placeholder="Enter Country Name" name="shipping_country"  required />
                        </div>

                    </div>
<script>
    $(document).ready(function () {
        let shippingDebounceTimeout;

        // Toggle Shipping Details
        $('#is_shipping_same').change(function () {
            if ($(this).is(':checked')) {
                // Hide shipping details and reset fields
                $('#shipping-details').addClass('d-none');
                toggleRequiredFields('remove');
                resetShippingFields();
            } else {
                // Show shipping details
                toggleRequiredFields('add');
                $('#shipping-details').removeClass('d-none');
            }
        });

        // Function to reset shipping fields
        function resetShippingFields() {
            // $('#shipping_postcode').val('');
            $('#shipping_city').val('');
            $('#shipping_state').val('');
            $('#shipping_country').val('');
            $('#shipping-suggestions').hide().html('');
        }

        function toggleRequiredFields(action) {
            const fields = [
                '#shipping_postcode',
                '#shipping_street',
                '#shipping_flat_suite',
                '#shipping_city',
                '#shipping_state',
                '#shipping_country'
            ];

            fields.forEach(function (field) {
                if (action === 'add') {
                    $(field).attr('required', 'required');
                } else if (action === 'remove') {
                    $(field).removeAttr('required');
                }
            });
        }

        // Fetch shipping location suggestions based on postal code
        $('#shipping_postcode').on('input', function () {
            let shippingPostalCode = $(this).val().trim();
            const shippingSuggestionsList = $('#shipping-suggestions');

            // Reset dependent fields when postal code changes
            resetShippingFields();

            // Hide suggestions if no postal code is entered
            if (shippingPostalCode.length === 0) {
                shippingSuggestionsList.hide();
                return;
            }

            // Only trigger the request if the postal code is at least 3 characters
            if (shippingPostalCode.length >= 3) {
                // Debounce: clear previous timeout if the user is still typing
                clearTimeout(shippingDebounceTimeout);

                // Set a new timeout to wait for the user to stop typing
                shippingDebounceTimeout = setTimeout(function () {
                    fetch(`/search-locations?postal_code=${shippingPostalCode}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success' && data.data.length > 0) {
                                shippingSuggestionsList.html('').show();

                                if (data.data.length === 1) {
                                    // If only one suggestion, populate the fields directly
                                    const location = data.data[0];
                                    $('#shipping_postcode').val(location.postal_code);
                                    $('#shipping_country').val(location.country_name);
                                    $('#shipping_state').val(location.province);
                                    $('#shipping_city').val(location.city);
                                    // document.getElementById('shipping_postcode_error_msg').style.display = "none";
                                    shippingSuggestionsList.hide();
                                } else {
                                    // Show suggestions for multiple results
                                    data.data.forEach(location => {
                                        const suggestionItem = $('<li>')
                                            .addClass('list-group-item cursor-pointer')
                                            .text(`${location.city}, ${location.postal_code} (${location.country})`)
                                            .data('location', location);

                                        // Add click event to fill fields
                                        suggestionItem.click(function () {
                                            $('#shipping_postcode').val(location.postal_code);
                                            $('#shipping_country').val(location.country_name);
                                            $('#shipping_state').val(location.province);
                                            $('#shipping_city').val(location.city);
                                            // document.getElementById('shipping_postcode_error_msg').style.display = "none";
                                            shippingSuggestionsList.hide();
                                        });

                                        shippingSuggestionsList.append(suggestionItem);
                                    });
                                }
                            } else {
                                shippingSuggestionsList.hide();
                                // document.getElementById('shipping_postcode_error_msg').style.display = "block";
                                // document.getElementById('shipping_postcode_error_msg').style.color = "black";
                                // document.getElementById('shipping_postcode_error_msg').innerText = "Please enter your address manually!";
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching location data:', error);
                            shippingSuggestionsList.hide();
                        });
                }, 200); // 200ms delay
            }
        });
    });

</script>
{{--                    <script>--}}
{{--                        $(document).ready(function () {--}}
{{--                            let shippingDebounceTimeout;--}}

{{--                            // Toggle Shipping Details--}}
{{--                            $('#is_shipping_same').change(function () {--}}
{{--                                if ($(this).is(':checked')) {--}}
{{--                                    // Hide shipping details and reset fields--}}
{{--                                    $('#shipping-details').addClass('d-none');--}}
{{--                                    toggleRequiredFields('remove');--}}
{{--                                    resetShippingFields();--}}

{{--                                } else {--}}
{{--                                    // Show shipping details--}}
{{--                                    toggleRequiredFields('add');--}}
{{--                                    $('#shipping-details').removeClass('d-none');--}}
{{--                                }--}}
{{--                            });--}}

{{--                            // Function to reset shipping fields--}}
{{--                            function resetShippingFields() {--}}
{{--                                // $('#shipping_postcode').val('');--}}
{{--                                // $('#shipping_street').val('');--}}
{{--                                // $('#shipping_flat_suite').val('');--}}
{{--                                $('#shipping_country').html('<option value="">Select Country</option>');--}}
{{--                                $('#shipping_state').html('<option value="">Select State</option>');--}}
{{--                                $('#shipping_city').html('<option value="">Select City</option>');--}}
{{--                                $('#shipping-suggestions').hide().html('');--}}
{{--                            }--}}

{{--                            function toggleRequiredFields(action) {--}}
{{--                                const fields = [--}}
{{--                                    '#shipping_postcode',--}}
{{--                                    '#shipping_street',--}}
{{--                                    '#shipping_flat_suite',--}}
{{--                                    '#shipping_country',--}}
{{--                                    '#shipping_state',--}}
{{--                                    '#shipping_city'--}}
{{--                                ];--}}

{{--                                fields.forEach(function(field) {--}}
{{--                                    if (action === 'add') {--}}
{{--                                        $(field).attr('required', 'required');--}}
{{--                                    } else if (action === 'remove') {--}}
{{--                                        $(field).removeAttr('required');--}}
{{--                                    }--}}
{{--                                });--}}
{{--                            }--}}

{{--                            // Fetch shipping location suggestions based on postal code--}}
{{--                            $('#shipping_postcode').on('input', function () {--}}
{{--                                let shippingPostalCode = $(this).val().trim();--}}
{{--                                const shippingSuggestionsList = $('#shipping-suggestions');--}}

{{--                                // Reset dependent fields when postal code changes--}}
{{--                                resetShippingFields();--}}

{{--                                // Hide suggestions if no postal code is entered--}}
{{--                                if (shippingPostalCode.length === 0) {--}}
{{--                                    shippingSuggestionsList.hide();--}}
{{--                                    return;--}}
{{--                                }--}}

{{--                                // Only trigger the request if the postal code is at least 3 characters--}}
{{--                                if (shippingPostalCode.length >= 3) {--}}
{{--                                    // Debounce: clear previous timeout if the user is still typing--}}
{{--                                    clearTimeout(shippingDebounceTimeout);--}}

{{--                                    // Set a new timeout to wait for the user to stop typing--}}
{{--                                    shippingDebounceTimeout = setTimeout(function () {--}}
{{--                                        fetch(`/search-locations?postal_code=${shippingPostalCode}`)--}}
{{--                                            .then(response => response.json())--}}
{{--                                            .then(data => {--}}
{{--                                                if (data.status === 'success' && data.data.length > 0) {--}}
{{--                                                    shippingSuggestionsList.html('').show();--}}
{{--                                                    if (data.data.length === 1) {--}}
{{--                                                        data.data.forEach(location => {--}}
{{--                                                            $('#shipping_postcode').val(location.postal_code);--}}
{{--                                                            $('#shipping_country').html(`<option value="${location.country_name}">${location.country_name}</option>`);--}}
{{--                                                            $('#shipping_state').html(`<option value="${location.province_abbr}">${location.province}</option>`);--}}
{{--                                                            $('#shipping_city').html(`<option value="${location.city}">${location.city}</option>`);--}}
{{--                                                            document.getElementById('shipping_postcode_error_msg').style.display = "none";--}}
{{--                                                        });--}}
{{--                                                    }else {--}}
{{--                                                        // Show suggestions for the entered postal code--}}
{{--                                                        data.data.forEach(location => {--}}
{{--                                                            const suggestionItem = $('<li>')--}}
{{--                                                                .addClass('list-group-item cursor-pointer')--}}
{{--                                                                .text(`${location.city}, ${location.postal_code} (${location.country})`)--}}
{{--                                                                .data('location', location);--}}

{{--                                                            // Add click event to fill fields--}}
{{--                                                            suggestionItem.click(function () {--}}
{{--                                                                $('#shipping_postcode').val(location.postal_code);--}}
{{--                                                                $('#shipping_country').html(`<option value="${location.country_name}">${location.country_name}</option>`);--}}
{{--                                                                $('#shipping_state').html(`<option value="${location.province_abbr}">${location.province}</option>`);--}}
{{--                                                                $('#shipping_city').html(`<option value="${location.city}">${location.city}</option>`);--}}
{{--                                                                document.getElementById('shipping_postcode_error_msg').style.display="none";--}}
{{--                                                                shippingSuggestionsList.hide();--}}
{{--                                                            });--}}

{{--                                                            shippingSuggestionsList.append(suggestionItem);--}}
{{--                                                        });--}}
{{--                                                    }--}}

{{--                                                } else {--}}
{{--                                                    shippingSuggestionsList.hide();--}}
{{--                                                        document.getElementById('shipping_postcode_error_msg').style.display = "block";--}}
{{--                                                        document.getElementById('shipping_postcode_error_msg').style.color = "red";--}}
{{--                                                        document.getElementById('shipping_postcode_error_msg').innerText = "Postal code is invalid. Make sure you’ve entered it correctly!";--}}
{{--                                                }--}}
{{--                                            })--}}
{{--                                            .catch(error => {--}}
{{--                                                console.error('Error fetching location data:', error);--}}
{{--                                                shippingSuggestionsList.hide();--}}
{{--                                            });--}}
{{--                                    }, 200); // 200ms delay--}}
{{--                                }--}}
{{--                            });--}}
{{--                        });--}}
{{--                    </script>--}}

                    <input name="address" type="hidden" value=" "/>
                    {{-- <h3 class="mt-5 mb-2">SHIPPING ADDRESS</h3> --}}
                    {{-- <label for=""> <input type="checkbox" class="me-2 d-inline-block">SHIP TO A DIFFERENT
                        ADDRESS?</label> --}}
                    <label class="d-block mt-3">Order Comments</label>
                    <textarea name="order_notes" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Enter Order Notes"></textarea>
                    <button id="checkout-button" onclick="showAlert(event)" class="btn btn-primary btn-block mt-4 p-2 -">Checkout &amp; Pay</button>
                </div>
{{--                //main_shipping_double_address - vicky 26-12-2024 start--}}
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <div class="p-2 bg-white mt-4 pt-4" style="border: 2px solid grey; position: sticky; top: 100px; z-index: 10;">
                     <h3 class="mt-4">Order Summary</h3>
                     <ul class="order-details p-0 mb-5">
                         @php
                         $total_counting_product=0;
                         @endphp
                         @foreach ($cart_table as $item)
                             @php
                                 $total_counting_product +=$item->quantity;
                             @endphp
                             <input type="hidden" name="product_ids[]" value="{{$item->id}}">

                             <li class="d-flex justify-content-between">
                                 <span class="text">{{$item->title}} x {{$item->quantity}}</span>
                                 <span class="text-amount">{{session("currency_icon","$")}}{{$item->price * $item->quantity}}</span>
                             </li>
                         @endforeach
                         <input type="hidden" value="{{ (request()->query('c')) }}" name="coupon_name">
                         @if(\Illuminate\Support\Facades\Session::get('user'))
                         @if(isset($discount_a) && $discount_a != 0)
                             <li class="d-flex justify-content-between">
                                 <span class="text">Discount</span>
                                 <span class="text-amount text-danger">{{session("currency_icon","$")}}{{ $discount_a }}</span>
                             </li>
                         @endif
                             @else
                             <li class="d-flex justify-content-between">
                                 <span class="text">Discount</span>
                                 <span class="text-amount text-danger">{{session("currency_icon","$")}}{{ $discount = \Illuminate\Support\Facades\Crypt::decrypt(request()->query('d') )}}</span>
                             </li>
                         @endif
                         <li class="d-flex justify-content-between" >
                             <span class="text-amount">Estimated Shipping (BEST <br/> WAY GROUND)</span>
{{--                              <span class="text-amount">${{$shipping = $taxes->shipping_time ?? 00}}</span>--}}
                             <span class="text" id="submittername" style="display: none;">{{$shipping = 0}}</span>
                         </li>

                         <li class="d-flex justify-content-between">
                             <span class="text"><b>Subtotal excluding Tax</b></span>
                             <span class="text-amount">{{session("currency_icon","$")}}{{$total - $discount_a}}</span>
                         </li>
                             @php
                                 $gst = $taxes->gst??0;
                             @endphp

                             <li class="d-flex justify-content-between">
                                 <span class="text">Estimated Tax</span>
                                 <span class="text-amount">{{session("currency_icon","$")}}{{ $gstAmount = (($total - $discount_a) + $shipping) * $gst / 100 }}</span>
                                 <input type="hidden" value="{{ $gstAmount }}" name="estimated_tax">
                             </li>

                         <li class="d-flex justify-content-between">
                             <span class="text"><b>Total including Tax</b></span>
                             <span id="grand_total" class="text-amount">
                                 {{session("currency_icon","$")}}{{$grand_total = ($discounted = $total - $discount_a) + $shipping + (($discounted  * $gst) / 100)}}</span>
                             <span style="display : none;" id="grand_total_static" class="text-amount">{{$grand_totall = ($discounted = $total - $discount_a) + $shipping + (($discounted  * $gst) / 100)}}</span>
                         </li>
                     </ul>

                     <input type="hidden" id="inputGrandTotal" name="grand_total" value="">
                     <input type="hidden" name="cart_subtotal" value="{{$total}}">
                     <input type="hidden" name="gst" value="{{$gst}}">
                     <input type="hidden" name="shipping" id="shipping" value="{{$shipping}}">
                     <input type="hidden" name="shipping_am" id="shipping_am" value="{{$shipping}}">
                     <button   id="checkout-button"  onclick="showAlert(event)"  class="btn btn-primary btn-block w-100">Checkout & Pay</button>
                     <p class="mt-2" style="font-size: 10px;font-weight: bold;">
                         Promotional offers cannot be combined with any other offers or discounts, including those in a sales quote. Some exclusions may apply. Products shipped by truck are not eligible for free shipping. Free shipping offers apply only to the continental United States.
                     </p>
                 </div>

                </div>
            </div>
                </form>


{{--            //main_shipping_double_address - vicky 26-12-2024 end--}}
        </div>
    </section>
@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.tabber-list-container li').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    })

    $(document).ready(function() {
        $('#saved_address').on('click', function () {
            var addressId = $('#saved_address').val();

            if(!addressId){
                return;
            }
            if(addressId=="0"){
                return;
            }
            // Fetch the selected address ID
            var url = "{{ route('customer.get-saved-address', ':id') }}";
            url = url.replace(':id', addressId);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (result) {
                    if (result) {
                        // Set text values for street, flat, and postcode
                        $('#billing_street').val(result.street_number);
                        $('#billing_flat_suite').val(result.flat_suite);
                        $('#billing_postcode').val(result.postcode);

                        // Set the selected country and trigger change event to populate states
                        if (result.country) {
                            $('#billing_country').val(result.country).trigger('change');
                        }

                        // Load states if a country is selected and set the selected state
                        function loadStates(selectedCountry, selectedState) {
                            const apiBaseUrl = "https://countriesnow.space/api/v0.1";
                            $.ajax({
                                url: `${apiBaseUrl}/countries/states`,
                                type: "POST",
                                contentType: "application/json",
                                data: JSON.stringify({ country: selectedCountry }),
                                success: function (data) {
                                    if (data.data) {
                                        const stateSelect = $('#billing_state');
                                        stateSelect.empty().append('<option value="">Select State</option>');
                                        data.data.states.forEach(state => {
                                            const option = $('<option>').val(state.name).text(state.name);
                                            stateSelect.append(option);
                                        });
                                        stateSelect.val(selectedState).trigger('change');
                                    }
                                }
                            });
                        }

                        // Load cities if a state is selected and set the selected city
                        function loadCities(selectedState, selectedCity) {
                            const apiBaseUrl = "https://countriesnow.space/api/v0.1";
                            $.ajax({
                                url: `${apiBaseUrl}/countries/state/cities`,
                                type: "POST",
                                contentType: "application/json",
                                data: JSON.stringify({ country: result.country, state: selectedState }),
                                success: function (data) {
                                    if (data.data) {
                                        const citySelect = $('#billing_city');
                                        citySelect.empty().append('<option value="">Select City</option>');
                                        data.data.forEach(city => {
                                            const option = $('<option>').val(city).text(city);
                                            citySelect.append(option);
                                        });
                                        citySelect.val(selectedCity);
                                    }
                                }
                            });
                        }

                        // Load states and cities if necessary
                        if (result.country && result.state) {
                            loadStates(result.country, result.state);
                        }
                        if (result.state && result.city) {
                            loadCities(result.state, result.city);
                        }
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error fetching address:", status, error);
                    alert("An error occurred while fetching the address data.");
                }
            });
        });


        // Function to load states based on country
        function loadStates(country, selectedState) {
            var stateSelect = $('#billing_state');
            stateSelect.empty().append(new Option("Select State", ""));

            // Replace this with the actual API or data for states per country
            $.ajax({
                url: "/get-states-for-country/" + country,  // Your API endpoint for states
                type: 'GET',
                success: function(states) {
                    states.forEach(function(state) {
                        var option = new Option(state.name, state.name);
                        stateSelect.append(option);
                    });

                    // Set the selected state
                    if (selectedState) {
                        stateSelect.val(selectedState);
                    }
                },
                error: function() {
                    console.error("Error loading states.");
                }
            });
        }

        // Function to load cities based on state
        function loadCities(state, selectedCity) {
            var citySelect = $('#billing_city');
            citySelect.empty().append(new Option("Select City", ""));

            // Replace this with the actual API or data for cities per state
            $.ajax({
                url: "/get-cities-for-state/" + state,  // Your API endpoint for cities
                type: 'GET',
                success: function(cities) {
                    cities.forEach(function(city) {
                        var option = new Option(city.name, city.name);
                        citySelect.append(option);
                    });

                    // Set the selected city
                    if (selectedCity) {
                        citySelect.val(selectedCity);
                    }
                },
                error: function() {
                    console.error("Error loading cities.");
                }
            });
        }
    });


    $(document).ready(function() {
        $('#billing_postcode, #shipping_postcode').on('change', function() {

            if ($("#is_shipping_same").prop("checked")) {
                var txtInput = $("#billing_postcode").val();
            }else {
                var txtInput = $("#shipping_postcode").val();
            }
            var selectedShipping = document.querySelector('input[name="i_want_free_shipping"]:checked').value;
                var url = "{{ route('customer.get.user.postal.code') }}";
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: 'GET',
                    data: {
                        shipping_type: selectedShipping,
                        postal_code: txtInput
                    },
                    dataType: 'json',
                    success: function (result) {
                        // console.log(result);
                        var icon_currency =  '{{session('currency_icon', '$')}}';
                        var exchange_rate = '{{session('exchange_rate', '1')}}';
                        var resuPrice= parseFloat(result)*parseFloat(exchange_rate)

                        $('#submittername').empty();
                        var shipping = $('#submittername').append(icon_currency + resuPrice);
                        $('#shipping').val(resuPrice);
                        $('#shipping_am').val(resuPrice);
                        var total = $('#grand_total_static').text();

                        $('#grand_total').text(parseFloat(total) + parseFloat(resuPrice));
                        $('#inputGrandTotal').val(parseFloat(total) + parseFloat(resuPrice));
                        // $('#submittername').empty();
                        $('#submittername').show();

                    },

                });
        });
    });

    $('input[name="i_want_free_shipping"]').change(function() {
        // Trigger the postal code change event manually
        $('#billing_postcode, #shipping_postcode').trigger('change');
    });
    //
    // function isValidPostalCode(postalCode) {
    //     const usPostalCodeRegex = /^\d{5}(-\d{4})?$/; // US: 5 digits or 5 digits-4 digits
    //     const canadaPostalCodeRegex = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/; // Canada: Format A1A 1A1 or A1A1A1
    //     if ( usPostalCodeRegex.test(postalCode) || canadaPostalCodeRegex.test(postalCode)) {
    //          return true;
    //     }
    //
    //     return false;
    // }
    //
    //
    // // Example usage
    // document.getElementById('shipping_postcode').addEventListener('input', function () {
    //     const postalCode = this.value.trim();
    //     const errorMsg = document.getElementById('shipping_postcode_error_msg');
    //     if (postalCode) {
    //         if (isValidPostalCode(postalCode)) {
    //             errorMsg.style.display = 'block';
    //             errorMsg.innerText = " Correct";
    //             errorMsg.style.color = 'green';
    //         } else {
    //             errorMsg.style.display = 'block';
    //             errorMsg.innerText = " Incorrect postal code";
    //             errorMsg.style.color = 'red'; //
    //
    //         }
    //     }
    // });

</script>

<script>
    // Debounce timeout variables
    let debounceTimeoutShipping;
    let debounceTimeoutBilling;

    // Function to validate postal code (example for US and Canada)
    // function isValidPostalCode(postalCode) {
    //     const usPostalCodeRegex = /^\d{5}(-\d{4})?$/;
    //     const canadaPostalCodeRegex = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
    //
    //     // Example validation for US and Canada postal codes
    //     return usPostalCodeRegex.test(postalCode) || canadaPostalCodeRegex.test(postalCode);
    // }
    function isValidPostalCode(postalCode) {
        const minLength = 4;
        const maxLength = 10;

        // Check if the postal code length is within the allowed range
        return postalCode.length >= minLength && postalCode.length <= maxLength;
    }

    // Function to run the validation for postal code
    function validatePostalCode(inputId, errorMsgId) {
        const postalCode = document.getElementById(inputId).value.trim();
        const errorMsg = document.getElementById(errorMsgId);

        if (postalCode) {
            if (isValidPostalCode(postalCode)) {
                errorMsg.style.display = 'none'; // Hide error message if valid
            } else {
                errorMsg.style.display = 'block'; // Show error message if invalid
                errorMsg.innerHTML = "Postal code is invalid. Make sure you’ve entered it correctly!";
                errorMsg.style.color = 'red';
            }
        } else {
            // Hide the error message if the input is empty
            errorMsg.style.display = 'none';
        }
    }

    // Event listener for shipping postal code input (typing)
    document.getElementById('shipping_postcode').addEventListener('input', function () {
        // Clear the previous debounce timeout if the user is still typing
        clearTimeout(debounceTimeoutShipping);

        // Set a new timeout for 200ms delay
        debounceTimeoutShipping = setTimeout(function () {
            // Validate postal code for shipping after 200ms
            validatePostalCode('shipping_postcode', 'shipping_postcode_error_msg');
        }, 2000);
    });

    // Event listener for billing postal code input (typing)
    document.getElementById('billing_postcode').addEventListener('input', function () {
        // Clear the previous debounce timeout if the user is still typing
        clearTimeout(debounceTimeoutBilling);

        // Set a new timeout for 200ms delay
        debounceTimeoutBilling = setTimeout(function () {
            // Validate postal code for billing after 200ms
            validatePostalCode('billing_postcode', 'billing_postcode_error_msg');
        }, 2000);
    });

    document.querySelector('input[name="phone_number"]').addEventListener('input', function(e) {
        // Replace non-numeric characters with an empty string
        this.value = this.value.replace(/\D/g, '');
    });
</script>


<script>
    function showAlert(event) {
        event.preventDefault(); // Prevent the default form submission


        @if($customer && !is_string($customer))
        var fieldsWithMessages = {
            '#shipping_postcode': 'Shipping postcode is required',
            '#shipping_street': 'Shipping street is required',
            '#shipping_flat_suite': 'Shipping flat/suite is required',
            '#shipping_country': 'Shipping country is required',
            '#shipping_state': 'Shipping state is required',
            '#shipping_city': 'Shipping city is required',
            '#billing_postcode': 'Billing postcode is required',
            '#billing_street': 'Billing street is required',
            '#billing_flat_suite': 'Billing flat/suite is required',
            '#billing_country': 'Billing country is required',
            '#billing_state': 'Billing state is required',
            '#billing_city': 'Billing city is required'
        };

        @else
            var fieldsWithMessages = {
            '#shipping_postcode': 'Shipping postcode is required',
            '#shipping_street': 'Shipping street is required',
            '#shipping_flat_suite': 'Shipping flat/suite is required',
            '#shipping_country': 'Shipping country is required',
            '#shipping_state': 'Shipping state is required',
            '#shipping_city': 'Shipping city is required',
            '#billing_postcode': 'Billing postcode is required',
            '#billing_street': 'Billing street is required',
            '#billing_flat_suite': 'Billing flat/suite is required',
            '#billing_country': 'Billing country is required',
            '#billing_state': 'Billing state is required',
            '#billing_city': 'Billing city is required',
            '#phone_number': 'Phone number is required',
            '#name': 'Name is required',
            '#last_name': 'Last name is required',
            '#email': 'Email is required'
        };


        @endif


        // Determine if shipping is the same as billing
        const isShippingSame = $("#is_shipping_same").prop("checked");

        // Process fields based on whether shipping is the same
        const fieldsToCheck = isShippingSame ? Object.keys(fieldsWithMessages).filter(selector => !selector.startsWith('#shipping')) : Object.keys(fieldsWithMessages);

        let hasErrors = false; // Flag to track if there are any errors

        // Loop through fields to check and apply styles/messages
        fieldsToCheck.forEach(selector => {
            const field = document.querySelector(selector);
            const messageContainer = document.createElement('div');

            if (field && field.value.trim() === '') {
                // Add a red border
                field.style.border = '1px solid red';

                // Create and display the error message
                messageContainer.classList.add('error-message');
                messageContainer.style.color = 'red';
                messageContainer.style.fontSize = '12px';
                messageContainer.style.marginTop = '5px';
                messageContainer.innerText = fieldsWithMessages[selector];


                // Insert the message above the field
                if (!field.previousElementSibling || !field.previousElementSibling.classList.contains('error-message')) {
                    if(field.id=="phone_number"){
                        return;
                    }else {
                        field.parentNode.insertBefore(messageContainer, field);
                    }

                }

                if (field === fieldsToCheck[0]) {
                    // Scroll to the first error field
                    field.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }

                hasErrors = true; // Set the flag to true if there is an error
            } else {
                // Reset border and remove message if not empty
                field.style.border = '';
                if (field.previousElementSibling && field.previousElementSibling.classList.contains('error-message')) {
                    field.previousElementSibling.remove();
                }
            }
        });

        // If there are no errors, submit the form
        if (!hasErrors) {
            // Assuming you have a form element with ID 'myForm'
            document.getElementById('myFormCheckoutProcess').submit(); // Replace 'myForm' with your actual form ID
        }
    }
</script>




