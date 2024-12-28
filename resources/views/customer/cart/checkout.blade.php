@include('customer.layouts.header')
<head>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
{{--//main_shipping_double_address - vicky 26-12-2024 start--}}
<style>
    .text-amount {
        font-family: Roboto, sans-serif;

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
            <form action="{{route('customer.place.order')}}" method="post">
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
                    @if(!is_string($customer))
                    <div class="mb-3">
                        <select name="billing_address" id="saved_address" class="form-select">
                                <option value="0" selected> --Select Saved Address-- </option>
                            @forelse ($addresses as $address)
                                <option value="{{$address->id}}">{{$address->street_number . ' ... ' . $address->country}}</option>
                            @empty
                                <option value="0">No addresses saved.</option>
                            @endforelse
                        </select>
                    </div>
                    @endif
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    @if(!is_string($customer))
                        <input type="hidden" class="form-control rounded-0 px-3" name="email_login" value="{{ $customer->email }}">
                    @else
                        <input type="text" class="form-control rounded-0 px-3" placeholder="Enter Name" name="name" value="" required>
                        <input type="text" class="form-control rounded-0 px-3" placeholder="Enter Email Address" name="email" value="" required>
                    @endif
                    <input type="text" class="form-control rounded-0 px-3" name="billing_street" placeholder="Street Number" id="billing_street" value="" required>
                    <input type="text" class="form-control rounded-0 px-3" name="billing_flat_suite" placeholder="Flat/Suite" id="billing_flat_suite" value="">
                    <div>
                        <select id="billing_country"  name="billing_country"  class="form-control rounded-0 px-3" required>
                            <option value="">Select Country</option>
                        </select>
                        <select id="billing_state"  name="billing_state" class="form-control rounded-0 px-3" required>
                            <option value="">Select State</option>
                        </select>
                        <select id="billing_city" name="billing_city" class="form-control rounded-0 px-3" required>
                            <option value="">Select City</option>
                        </select>
                        <input type="text" class="form-control rounded-0 px-3" name="billing_postcode" id="billing_postcode" placeholder="Postal Code"  required />
                    </div>

                    <h3 class="mt-5">Shipping Details</h3>
                    <label>
                        <input type="checkbox" id="is_shipping_same" name="is_shipping_same" value="1" checked>
                        My Shipping address is the same as my billing address?
                    </label>

                    <div id="shipping-details" class="mt-3 d-none">
                        <input type="text" class="form-control rounded-0 px-3" name="shipping_street" placeholder="Street Number">

                        <input type="text" class="form-control rounded-0 px-3" name="shipping_flat_suite" placeholder="Flat/Suite">
                        <select id="shipping_country" class="form-control rounded-0 px-3" name="shipping_country">
                            <option value="">Select Country</option>
                        </select>
                        <select id="shipping_state" class="form-control rounded-0 px-3" name="shipping_state">
                            <option value="">Select State</option>
                        </select>
                        <select id="shipping_city" class="form-control rounded-0 px-3" name="shipping_city">
                            <option value="">Select City</option>
                        </select>
                        <input type="text" class="form-control rounded-0 px-3" name="shipping_postcode" id="shipping_postcode" placeholder="Postal Code">
                    </div>


                    <script>
                        $(document).ready(function () {
                            // Toggle Shipping Details
                            $('#is_shipping_same').change(function () {
                                if ($(this).is(':checked')) {
                                    $('#shipping-details').addClass('d-none');
                                } else {
                                    $('#shipping-details').removeClass('d-none');
                                }
                            });
                        });

                        $(document).ready(function () {
                            const apiBaseUrl = "https://countriesnow.space/api/v0.1";

                            // Populate Countries for Billing
                            fetch(`${apiBaseUrl}/countries`)
                                .then(response => response.json())
                                .then(data => {
                                    const countries = data.data;
                                    countries.forEach(country => {
                                        $('#billing_country').append(new Option(country.country, country.country));
                                        $('#shipping_country').append(new Option(country.country, country.country)); // For Shipping
                                    });
                                })
                                .catch(err => console.error("Error fetching countries:", err));

                            // Handle Country Change for Billing
                            $('#billing_country').change(function () {
                                const selectedCountry = $(this).val();
                                if (selectedCountry) {
                                    $('#billing_state').empty().append(new Option("Select State", ""));
                                    $('#billing_city').empty().append(new Option("Select City", ""));
                                    $('#billing_postcode').val("");

                                    fetch(`${apiBaseUrl}/countries/states`, {
                                        method: "POST",
                                        headers: { "Content-Type": "application/json" },
                                        body: JSON.stringify({ country: selectedCountry })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            const states = data.data.states || [];
                                            states.forEach(state => {
                                                $('#billing_state').append(new Option(state.name, state.name));
                                            });
                                        })
                                        .catch(err => console.error("Error fetching states:", err));
                                }
                            });

                            // Handle State Change for Billing
                            $('#billing_state').change(function () {
                                const selectedCountry = $('#billing_country').val();
                                const selectedState = $(this).val();
                                if (selectedState) {
                                    $('#billing_city').empty().append(new Option("Select City", ""));
                                    $('#billing_postcode').val("");

                                    fetch(`${apiBaseUrl}/countries/state/cities`, {
                                        method: "POST",
                                        headers: { "Content-Type": "application/json" },
                                        body: JSON.stringify({ country: selectedCountry, state: selectedState })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            const cities = data.data || [];
                                            cities.forEach(city => {
                                                $('#billing_city').append(new Option(city, city));
                                            });
                                        })
                                        .catch(err => console.error("Error fetching cities:", err));
                                }
                            });

                            // Handle Country Change for Shipping
                            $('#shipping_country').change(function () {
                                const selectedCountry = $(this).val();
                                if (selectedCountry) {
                                    $('#shipping_state').empty().append(new Option("Select State", ""));
                                    $('#shipping_city').empty().append(new Option("Select City", ""));
                                    $('#shipping_postcode').val("");

                                    fetch(`${apiBaseUrl}/countries/states`, {
                                        method: "POST",
                                        headers: { "Content-Type": "application/json" },
                                        body: JSON.stringify({ country: selectedCountry })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            const states = data.data.states || [];
                                            states.forEach(state => {
                                                $('#shipping_state').append(new Option(state.name, state.name));
                                            });
                                        })
                                        .catch(err => console.error("Error fetching states:", err));
                                }
                            });

                            // Handle State Change for Shipping
                            $('#shipping_state').change(function () {
                                const selectedCountry = $('#shipping_country').val();
                                const selectedState = $(this).val();
                                if (selectedState) {
                                    $('#shipping_city').empty().append(new Option("Select City", ""));
                                    $('#shipping_postcode').val("");

                                    fetch(`${apiBaseUrl}/countries/state/cities`, {
                                        method: "POST",
                                        headers: { "Content-Type": "application/json" },
                                        body: JSON.stringify({ country: selectedCountry, state: selectedState })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            const cities = data.data || [];
                                            cities.forEach(city => {
                                                $('#shipping_city').append(new Option(city, city));
                                            });
                                        })
                                        .catch(err => console.error("Error fetching cities:", err));
                                }
                            });

                            // Optional: Synchronize Shipping with Billing if "is_shipping_same" is checked
                            $('#is_shipping_same').change(function () {
                                if (this.checked) {
                                    $('#shipping_street').val($('#billing_street').val());
                                    $('#shipping_flat_suite').val($('#billing_flat_suite').val());
                                    $('#shipping_country').val($('#billing_country').val()).trigger('change');
                                    $('#shipping_state').val($('#billing_state').val()).trigger('change');
                                    $('#shipping_city').val($('#billing_city').val()).trigger('change');
                                    $('#shipping_postcode').val($('#billing_postcode').val());
                                } else {
                                    // Clear Shipping fields if unchecked
                                    $('#shipping_street, #shipping_flat_suite, #shipping_postcode').val("");
                                    $('#shipping_country, #shipping_state, #shipping_city').val("").trigger('change');
                                }
                            });
                        });


                    </script>
{{--                    //main_shipping_double_address - vicky 26-12-2024 end--}}

                    <input name="address" type="hidden" value=" "/>
                    {{-- <h3 class="mt-5 mb-2">SHIPPING ADDRESS</h3> --}}
                    {{-- <label for=""> <input type="checkbox" class="me-2 d-inline-block">SHIP TO A DIFFERENT
                        ADDRESS?</label> --}}
                    <label class="d-block mt-3">Order Comments</label>
                    <textarea name="order_notes" class="form-control rounded-0 mt-2" rows="5"
                        placeholder="Enter Order Notes"></textarea>
                </div>
{{--                //main_shipping_double_address - vicky 26-12-2024 start--}}
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                 <div class=" p-2  bg-white" style="border: 2px solid grey;">
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
                         <li class="d-flex justify-content-between" >
                             <span class="text-amount">Estimated Shipping (BEST <br/> WAY GROUND)</span>
{{--                              <span class="text-amount">${{$shipping = $taxes->shipping_time ?? 00}}</span>--}}
                             <span class="text" id="submittername" style="display: none;">{{$shipping = 0}}</span>
                         </li>
                         <li class="d-flex justify-content-between">
                             <span class="text"><b>Subtotal excluding Tax</b></span>
                             <span class="text-amount">{{session("currency_icon","$")}}{{$total}}</span>
                         </li>
                             @php
                                 $gst = $taxes->gst??0;
                             @endphp

                             <li class="d-flex justify-content-between">
                                 <span class="text">Estimated Tax</span>
                                 <span class="text-amount">{{session("currency_icon","$")}}{{ $gstAmount = (($total - $discount) + $shipping) * $gst / 100 }}</span>
                             </li>
                         @if($discount != 0)
                             <li class="d-flex justify-content-between">
                                 <span class="text">Discount</span>
                                 <span class="text-amount text-danger">{{session("currency_icon","$")}}{{$discount}}</span>
                             </li>
                         @endif
                         <li class="d-flex justify-content-between">
                             <span class="text"><b>Total including Tax</b></span>
                             <span id="grand_total" class="text-amount">
                                 {{session("currency_icon","$")}}{{$grand_total = ($discounted = $total - $discount) + $shipping + (($discounted  * $gst) / 100)}}</span>
                             <span style="display : none;" id="grand_total_static" class="text-amount">{{$grand_totall = ($discounted = $total - $discount) + $shipping + (($discounted  * $gst) / 100)}}</span>
                         </li>
                     </ul>

                     <input type="hidden" id="inputGrandTotal" name="grand_total" value="">
                     <input type="hidden" name="cart_subtotal" value="{{$total}}">
                     <input type="hidden" name="gst" value="{{$gst}}">
                     <input type="hidden" name="shipping" id="shipping" value="{{$shipping}}">
                     <button type="submit" id="checkout-button" class="btn btn-primary btn-block w-100">Checkout & Pay</button>
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
        $('#saved_address').on('click', function() {
            var addressId = $('#saved_address').val(); // You might want to make sure this is the correct way to fetch addressId
            var url = "{{ route('customer.get-saved-address', ':id') }}";
            url = url.replace(':id', addressId);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    if (result) {
                        // Set text values
                        $('#billing_street').val(result.street_number);
                        $('#billing_flat_suite').val(result.flat_suite);
                        $('#billing_postcode').val(result.postcode);

                        // Set selected country
                        if (result.country) {
                            $('#billing_country').val(result.country);
                        }

                        // Load states if available (only if country is selected)
                        if (result.country && result.state) {
                            loadStates(result.country, result.state);
                        }

                        // Load cities if available (only if state is selected)
                        if (result.state && result.city) {
                            loadCities(result.state, result.city);
                        }
                    }
                },
                error: function(xhr, status, error) {
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
            console.log("enter");
            if ($("#is_shipping_same").prop("checked")) {
                console.log("from billing ");
                var txtInput = $("#billing_postcode").val();
            }else {
                console.log("from shiiping ");
                var txtInput = $("#shipping_postcode").val();
            }
            console.log(txtInput);
                var url = "{{ route('customer.get.user.postal.code', ":id") }}";
                url = url.replace(':id', txtInput);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function (result) {
                        // console.log(result);
                        var resuPrice= parseFloat(result)* parseInt({{$total_counting_product??0}})

                        $('#submittername').empty();
                        var shipping = $('#submittername').append('$' + resuPrice);
                        $('#shipping').val(resuPrice);
                        var total = $('#grand_total_static').text();

                        $('#grand_total').text(parseFloat(total) + parseFloat(resuPrice));
                        $('#inputGrandTotal').val(parseFloat(total) + parseFloat(resuPrice));
                        // $('#submittername').empty();
                        $('#submittername').show();

                    },

                });
        });
    });


</script>
