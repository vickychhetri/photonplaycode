@include('customer.layouts.header')

<section class="overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <x-customer.profile-sidebar />
                       
                        <div class="col-lg-8  col-md-6 col-12">
                            <div class="overview-wrapper">
                                <h5 class="btn-light fs-5 py-3 ">Edit Address</h5>
                                <div class="card-box border p-3">
                                    <form method="post" action="{{route('customer.update.address')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$address->id}}">
                                        <div class="mb-4">
                                            <input type="text" name="street_number" class="form-control shadow-none" value="{{$address->street_number}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Street Number">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="flat_suite" class="form-control shadow-none" value="{{$address->flat_suite}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Flat/Suite">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="city" class="form-control shadow-none" value="{{$address->city}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="City">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="state" class="form-control shadow-none" value="{{$address->state}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="State">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="country" class="form-control shadow-none" value="{{$address->country}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Country">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="postcode" class="form-control shadow-none" value="{{$address->postcode}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Postcode">
                                        </div>
                                        

                                        <button type="submit"
                                            class="btn btn-primary rounded text-uppercase">Update</button>
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