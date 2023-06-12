@include('customer.layouts.header')

<section class="overview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <x-customer.profile-sidebar />

                        <div class="col-lg-8  col-md-6 col-12">
                            <div class="overview-wrapper">
                                <h5 class="btn-light fs-5 py-3 ">Profile Details</h5>
                                <div class="card-box border p-3">
                                    <form method="post" action="{{route('customer.update.profile')}}">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" name="email" class="form-control shadow-none" value="{{$customer->email}}" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="User Name">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" name="password" class="form-control shadow-none" value="**********"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="phone_number" class="form-control shadow-none" value="{{$customer->phone_number}}"
                                                id="exampleInputPassword2" placeholder="+000 00000 00000">
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" name="company_name" class="form-control shadow-none" value="{{$customer->company_name}}"
                                                id="exampleInputPassword3" placeholder="Company Name">
                                        </div>

                                        <button type="submit"
                                            class="btn btn-primary rounded text-uppercase">Edit</button>
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
