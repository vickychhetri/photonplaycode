@include('customer.layouts.header')

<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <x-customer.profile-sidebar />

                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3">Add New Address</h5>
                            <div class="card-box border p-3">
                                <form method="post" action="{{ route('customer.add.address') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="text" name="street_number" class="form-control shadow-none" placeholder="Street Number">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" name="flat_suite" class="form-control shadow-none" placeholder="Flat/Suite">
                                    </div>
                                    <div class="mb-4">
                                        <select name="country" id="country-select" class="form-control shadow-none">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <select name="state" id="state-select" class="form-control shadow-none" disabled>
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <select name="city" id="city-select" class="form-control shadow-none" disabled>
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" name="postcode" class="form-control shadow-none" placeholder="Postcode">
                                    </div>

                                    <button type="submit" class="btn btn-primary rounded text-uppercase">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('customer.layouts.footer')

<script>
    const apiBaseUrl = "https://countriesnow.space/api/v0.1";

    // Function to populate countries
    async function populateCountries() {
        try {
            const response = await fetch(`${apiBaseUrl}/countries`);
            const data = await response.json();

            if (data.error) {
                console.error("Failed to fetch countries:", data.msg);
                return;
            }

            const countrySelect = document.getElementById("country-select");
            data.data.forEach(country => {
                const option = document.createElement("option");
                option.value = country.country;
                option.textContent = country.country;
                countrySelect.appendChild(option);
            });

            countrySelect.addEventListener("change", populateStates);
        } catch (error) {
            console.error("Error fetching countries:", error);
        }
    }

    // Function to populate states based on the selected country
    async function populateStates() {
        const countrySelect = document.getElementById("country-select");
        const stateSelect = document.getElementById("state-select");
        const citySelect = document.getElementById("city-select");
        const selectedCountry = countrySelect.value;

        stateSelect.innerHTML = '<option value="">Select State</option>';
        citySelect.innerHTML = '<option value="">Select City</option>';
        citySelect.disabled = true;

        if (!selectedCountry) {
            stateSelect.disabled = true;
            return;
        }

        try {
            const response = await fetch(`${apiBaseUrl}/countries/states`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ country: selectedCountry }),
            });
            const data = await response.json();

            if (data.error) {
                console.error("Failed to fetch states:", data.msg);
                return;
            }

            data.data.states.forEach(state => {
                const option = document.createElement("option");
                option.value = state.name;
                option.textContent = state.name;
                stateSelect.appendChild(option);
            });

            stateSelect.disabled = false;
            stateSelect.addEventListener("change", populateCities);
        } catch (error) {
            console.error("Error fetching states:", error);
        }
    }

    // Function to populate cities based on the selected state
    async function populateCities() {
        const stateSelect = document.getElementById("state-select");
        const citySelect = document.getElementById("city-select");
        const selectedState = stateSelect.value;
        const selectedCountry = document.getElementById("country-select").value;

        citySelect.innerHTML = '<option value="">Select City</option>';

        if (!selectedState) {
            citySelect.disabled = true;
            return;
        }

        try {
            const response = await fetch(`${apiBaseUrl}/countries/state/cities`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ country: selectedCountry, state: selectedState }),
            });
            const data = await response.json();

            if (data.error) {
                console.error("Failed to fetch cities:", data.msg);
                return;
            }

            data.data.forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });

            citySelect.disabled = false;
        } catch (error) {
            console.error("Error fetching cities:", error);
        }
    }

    // Initialize by populating countries
    document.addEventListener("DOMContentLoaded", populateCountries);
</script>
