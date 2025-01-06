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
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <p class="form-control-plaintext">{{$customer->email}}</p>
                                </div>
                                <div class="mb-4">
                                    <label for="phone_number" class="form-label">Phone Number:</label>
                                    <p class="form-control-plaintext">{{isset($customer->phone_number)?"+".$customer->phone_number:"Not Available"}}</p>
                                </div>
                                <div class="mb-4">
                                    <label for="company_name" class="form-label">Company Name:</label>
                                    <p class="form-control-plaintext">{{$customer->company_name}}</p>
                                </div>
                                <div class="mt-4 mb-4">
                                    <a href="{{ route('customer.edit.my.profile') }}" class="btn btn-primary rounded text-uppercase">
                                        Edit Profile
                                    </a>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.footer')
