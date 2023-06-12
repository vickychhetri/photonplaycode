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
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.overview')}}" class="text-decoration-none text-dark"> Overview</a></h6></div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.history')}}" class="text-decoration-none text-dark"> Orders</a></h6></div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.edit.profile')}}" class="text-decoration-none text-dark"> Profile</a></h6></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.address')}}" class="text-decoration-none text-dark"> Address</a></h6></div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.logout')}}" class="text-decoration-none text-dark"> Address</a></h6></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','about-us')}}"  class="text-decoration-none text-dark"> About us</a></h6></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card  text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','term-conditions')}}"  class="text-decoration-none text-dark">Terms of Use</a></h6></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-dark bg-light mb-3" >
                                            <div class="card-header">  <h6 class="border-bottom border-1 py-3 d-block"> <a  href="{{route('customer.page_show_content','privacy-policy')}}"  class="text-decoration-none text-dark">Privacy Policy</a></h6></div>
                                        </div>
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
