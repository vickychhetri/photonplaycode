<section class="pt-0 pb-sm-4 pb-lg-5" >
    <div class="clints-content clints-content-banner mb-0">

        @foreach($banners as $banner)
            <div>
                <div class="clider-content-wrapper w-100 position-relative">
                    <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">
                        <h1 class="title_home_page_banner">{{$banner->tagline}}</h1>
                        <h6 class="text-white mb-3">{{$banner->sub_tagline}}</h6>
                        <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>
                    </div>
                    <img src="{{asset('storage/'.$banner->image)}}" alt="Not-Found" class="img-fluid w-100">
                </div>
            </div>
        @endforeach

{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1>FROM TOKYO TO LOS ANGLES</h1>--}}
{{--                    <h6 class="text-white">Contributing To A Efficient Road And Transit Network</h6>--}}
{{--                    <a href="{{route('customer.about.us')}}" class="btn btn-primary text-capitalize py-0 px-4 m-auto mt-4 mb-4 rounded-0" >About US</a>--}}
{{--                </div>--}}
{{--                <img src="/assets/customer/images/aboutBAnner.png" alt="Not-Found" class="img-fluid w-100">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1>From Tokyo to Los Angles</h1>--}}
{{--                    <h6 class="text-white">Contributing To A Efficient Road And Transit Network</h6>--}}
{{--                    <button class="btn btn-primary text-capitalize d-block py-0 px-4 m-auto mt-4 mb-4 rounded-0">About US</button>--}}
{{--                </div>--}}
{{--                <img src="/assets/images/Banner-Image.png" alt="Not-Found" class="img-fluid w-100">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1>From Tokyo to Los Angles</h1>--}}
{{--                    <h6 class="text-white">Contributing To A Efficient Road And Transit Network</h6>--}}
{{--                    <button class="btn btn-primary text-capitalize d-block py-0 px-4 m-auto mt-4 mb-4 rounded-0">About US</button>--}}
{{--                </div>--}}
{{--                <img src="/assets/customer/images/aboutBAnner.png" alt="Not-Found" class="img-fluid w-100">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1>From Tokyo to Los Angles</h1>--}}
{{--                    <h6 class="text-white">Contributing To A Efficient Road And Transit Network</h6>--}}
{{--                </div>--}}
{{--                <img src="/assets/images/Banner-Image.png" alt="Not-Found" class="img-fluid w-100">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1>From Tokyo to Los Angles</h1>--}}
{{--                    <h6 class="text-white">Contributing To A Efficient Road And Transit Network</h6>--}}
{{--                </div>--}}
{{--                <img src="/assets/customer/images/aboutBAnner.png" alt="Not-Found" class="img-fluid w-100">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

</section>
