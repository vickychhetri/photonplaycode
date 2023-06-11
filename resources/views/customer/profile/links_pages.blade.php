@include('customer.layouts.header')

<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8  col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3 ">Account</h5>
                            <div class="card-box border p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.overview')}}" class="text-decoration-none text-white"> Overview</a></h4></div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.history')}}" class="text-decoration-none text-white"> Orders</a></h4></div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.edit.profile')}}" class="text-decoration-none text-white"> Profile</a></h4></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.address')}}" class="text-decoration-none text-white"> Address</a></h4></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.logout')}}" class="text-decoration-none text-white"> Address</a></h4></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','about-us')}}"  class="text-decoration-none text-white"> About us</a></h4></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','term-conditions')}}"  class="text-decoration-none text-white">Terms of Use</a></h4></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-white bg-dark mb-3" >
                                            <div class="card-header">  <h4 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','privacy-policy')}}"  class="text-decoration-none text-white">Privacy Policy</a></h4></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="review-inner">



                                    <div class="py-3  border-bottom border-1">
                                        <span>ORDERS</span>
                                        <a ><p class="">History</p></a>
                                    </div>
                                    <div class="py-3 border-bottom border-1">
                                        <span class="text-capitalize">account</span>
                                        <a  style="text-decoration: none"><p class="mb-0 text-grey">Profile </p></a>

                                        <a style="text-decoration: none"><p class="mb-0">Addresses</p></a>

                                        <a  style="text-decoration: none"><p class="mb-0 ">Logout</p></a>
                                    </div>
                                    <div class="py-3">
                                        <span class="text-capitalize">LEGAL</span>
                                        <a class="mb-0 text-decoration-none"><p class="mb-0">About us</p></a>
                                        <a href="{{route('customer.page_show_content','term-conditions')}}" class="mb-0 text-decoration-none"><p class="mb-0">Terms of Use </p></a>
                                        <a href="{{route('customer.page_show_content','privacy-policy')}}" class="mb-0 text-decoration-none"><p class="mb-0">Privacy Policy </p></a>
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
@include('customer.layout2.footer')
