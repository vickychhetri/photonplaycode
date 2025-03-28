<div class="col-lg-12">
    <div class="overview-headingh border-bottom border-2 pb-3">
        <h6 class="mb-0">Account</h6>
        <span class="f-6">{{ $username }}</span>
    </div>
</div>
<div class="col-lg-12 mobile-display">
    <div class="review-inner text-center">
        <!-- Horizontal Menu -->
        <div class="menu-links d-flex flex-wrap justify-content-center gap-3 py-3 border-top border-bottom border-2">
            <a href="{{ route('customer.overview') }}" class="text-decoration-none">Overview</a>
            <a href="{{ route('customer.history') }}" class="text-decoration-none">Orders History</a>
            <a href="{{ route('customer.edit.profile') }}" class="text-decoration-none">Profile</a>
{{--            <a href="{{ route('customer.address') }}" class="text-decoration-none">Addresses</a>--}}
            <a href="{{ route('customer.logout') }}" class="text-decoration-none">Logout</a>
            <a href="{{ route('customer.page_show_content', 'about-us') }}" class="text-decoration-none">About Us</a>
            <a href="{{ route('customer.page_show_content', 'term-conditions') }}" class="text-decoration-none">Terms of Use</a>
            <a href="{{ route('customer.page_show_content', 'privacy-policy') }}" class="text-decoration-none">Privacy Policy</a>
        </div>
    </div>
</div>

                        <div class="col-lg-4  col-md-6 col-12 border-end border-2">
                            <div class="review-inner desktop-display">
                                <span class="border-bottom border-1 py-3 d-block"> <a href="{{route('customer.overview')}}" style="text-decoration:none;"> Overview</a></span>
                                <div class="py-3  border-bottom border-1">
                                    <span>ORDERS</span>
                                    <a href="{{route('customer.history')}}"><p class="">History</p></a>
                                </div>
                                <div class="py-3 border-bottom border-1">
                                    <span class="text-capitalize">account</span>
                                    <a href="{{route('customer.edit.profile')}}" style="text-decoration: none"><p class="mb-0 text-grey">Profile </p></a>

{{--                                    <a href="{{route('customer.address')}}" style="text-decoration: none"><p class="mb-0">Addresses</p></a>--}}

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
