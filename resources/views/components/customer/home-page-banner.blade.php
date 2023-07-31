<style>
    .video-container {
        display: block;
    }

    .video-container video {
        display: block;
    }

    @media (max-width: 567px) {
        .video-container {
            display: none;
        }
    }
</style>

<section class="pt-0 pb-sm-4 pb-lg-5 mobile-display" >
    {{--    // remove from below div : clints-content-banner--}}
    <div class="clints-content mb-0">
        <div class="">
            <div class="clider-content-wrapper w-100 position-relative" style="margin-top: -100px;">
                <div class="slider-content position-absolute start-50 translate-middle text-center" style="margin-top: 250px; z-index:3;">
                    <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>
                    <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>
                    <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize">About US</a>
                </div>
                <div class="d-flex justify-content-center video-container">
                    <video style="object-fit: cover;" autoplay loop muted playsinline>
                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0 pb-sm-4 pb-lg-5 desktop-display" >
    <div class="clints-content clints-content-banner mb-0" >
        <div class="">
            <div class="clider-content-wrapper w-100 position-relative" style="margin-top: -100px;">
                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center" style="z-index:3;">
                    <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>
                    <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>
                    <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize">About US</a>
                </div>
                <div class="d-flex justify-content-center video-container">
                    <video width="100%" autoplay loop muted playsinline>
                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- --}}
{{--<style>--}}
{{--    .video-container {--}}
{{--        display: block;--}}
{{--    }--}}

{{--    .video-container video {--}}
{{--        display: block;--}}
{{--    }--}}

{{--    @media (max-width: 567px) {--}}
{{--        .video-container {--}}
{{--            display: none;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}

{{--<section class="pt-0 pb-sm-4 pb-lg-5 mobile-display " >--}}

{{--    // remove from below div : clints-content-banner--}}
{{--    <div class="clints-content  mb-0 " >--}}
{{--                    <div class="">--}}
{{--                        <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">--}}
{{--                            <div class="slider-content position-absolute   start-50 translate-middle text-center" style="margin-top: 250px;z-index:3;">--}}
{{--                                <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>--}}
{{--                                <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                                <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>--}}
{{--                            </div>--}}
{{--                                <div class="d-flex justify-content-center " >--}}
{{--                                    <video  style="object-fit: cover;" autoplay loop muted playsinline>--}}
{{--                                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}
{{--                                    </video>--}}
{{--                                </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--    </div>--}}
{{--</section>--}}



{{--<section class="pt-0 pb-sm-4 pb-lg-5 desktop-display" >--}}
{{--    <div class="clints-content clints-content-banner mb-0" >--}}
{{--        <div class="">--}}
{{--            <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center" style="z-index:3;">--}}
{{--                    <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>--}}
{{--                    <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                    <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center " >--}}
{{--                    <video width="100%" autoplay loop muted playsinline>--}}
{{--                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</section>--}}
