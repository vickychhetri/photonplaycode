@include('customer.layouts.header')
<section class="overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                    <x-customer.profile-sidebar />
                        <div class="col-lg-8  col-md-6 col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                    </div>
                                        <div class="overview-wrapper">
                                            <h5 class="btn-light fs-5 py-2 text-capitalize">Saved Addresses</h5>

                                        </div>


                                        <div class="">
                                           <a href="{{route('customer.add.address.form')}}">
                                               <div
                                                class="order-address text-center bg-white p-4 border d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{asset('assets/customer/images/pluse-add.png')}}" alt="Not Found" class="mb-4">
                                                <h6 class="text-grey">ADD NEW ADDRESS</h6>
                                                <p>Check your order status</p>
                                            </div>
                                           </a>
                                        </div>
                                </div>
                                @foreach ($user->address as $address)

                                    <div class="col-md-6">
                                                <div class="text-center bg-white p-4 m-3  border ">
                                                    <img src="{{asset('assets/customer/images/address-review.png')}}" alt="Not Found" class="mb-4">
                                                    <h6>{{$user->name}}</h6>
                                                    <p class="mb-0">{{$address->street_number}}</p>
                                                    <p class="mb-0">{{$address->flat_suite}}</p>
                                                    <p class="mb-0">{{$address->city}} , {{$address->state}}</p>
                                                    <p class="mb-0">{{$address->country}}</p>
                                                    <p class="mb-0">{{$address->postcode}}</p>
                                                    @if($user->phone_numner)<p>Mobile: {{$user->phone_numner}}</p>@endif
                                                    <p class="text-grey"><a href="{{ route('customer.edit.address', $address->id) }}"> Edit </a>
                                                     | <a href="{{ route('customer.delete.address', $address->id) }}"> Remove </a> @if (!$address->is_default)| <a href="{{ route('customer.default.address', $address->id) }}"> Set as Default </a></p>@endif
                                                </div>
                                    </div>

                                @endforeach
                            </div>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="" class="subscribr-form">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                    class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@include('customer.layouts.footer')
