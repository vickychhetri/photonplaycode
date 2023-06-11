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
                                <div class="review-inner">
                                    <span class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.overview')}}" style="text-decoration:none;"> Overview</a></span>
                                    <div class="py-3  border-bottom border-1">
                                        <span>ORDERS</span>
                                        <a href="{{route('customer.history')}}"><p class="">History</p></a>
                                    </div>
                                    <div class="py-3 border-bottom border-1">
                                        <span class="text-capitalize">account</span>
                                        <a href="{{route('customer.edit.profile')}}" style="text-decoration: none"><p class="mb-0 text-grey">Profile </p></a>

                                        <a href="{{route('customer.address')}}" style="text-decoration: none"><p class="mb-0">Addresses</p></a>

                                        <a href="{{route('customer.logout')}}" style="text-decoration: none"><p class="mb-0 ">Logout</p></a>
                                    </div>
                                    <div class="py-3">
                                        <span class="text-capitalize">LEGAL</span>
                                        <a href="{{route('customer.page_show_content','about-us')}}" class="mb-0 text-decoration-none"><p class="mb-0">About us</p></a>
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
