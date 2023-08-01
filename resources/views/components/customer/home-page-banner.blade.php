{{--<style>--}}
{{--    .clider-content-wrapper {--}}
{{--        position: relative;--}}
{{--        /*overflow: hidden;*/--}}
{{--    }--}}

{{--    #background-video {--}}
{{--        position: absolute;--}}
{{--        top: 50%;--}}
{{--        left: 50%;--}}
{{--        transform: translate(-50%, -50%);--}}
{{--        min-width: 100%;--}}
{{--        min-height: 100%;--}}
{{--        width: auto;--}}
{{--        height: auto;--}}
{{--        z-index: -1;--}}
{{--    }--}}

{{--    @media (max-width: 768px) {--}}
{{--        #background-video {--}}
{{--            width: 100%;--}}
{{--            height: auto;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}



{{--<section class="pt-0 pb-sm-4 pb-lg-5 container-fluid">--}}
{{--    <div class="clints-content clints-content-banner mb-0">--}}
{{--        <div>--}}
{{--            <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                    <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>--}}
{{--                    <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                    <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize">About US</a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <video autoplay muted loop id="background-video">--}}
{{--                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




{{--<style>--}}
{{--    .video-section {--}}
{{--        position: relative;--}}
{{--    }--}}

{{--    .video-wrapper {--}}
{{--        position: absolute;--}}
{{--        top: 0;--}}
{{--        left: 0;--}}
{{--        width: 100%;--}}
{{--        height: 100%;--}}
{{--        overflow: hidden;--}}
{{--        z-index: -1;--}}
{{--    }--}}

{{--    .video-wrapper video {--}}
{{--        width: 100%;--}}
{{--        height: 100%;--}}
{{--        object-fit: cover;--}}
{{--    }--}}

{{--    .slider-content {--}}
{{--        position: relative;--}}
{{--        z-index: 2; /* Adjust the value as needed */--}}
{{--    }--}}


{{--</style>--}}

{{--<section class="pt-0 pb-sm-4 pb-lg-5 " >--}}
{{--    <div class="clints-content clints-content-banner mb-0" >--}}

{{--            <div>--}}
{{--                <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                    <div class="slider-content position-absolute top-50  start-50 translate-middle text-center">--}}
{{--                        <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>--}}
{{--                        <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                        <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>--}}
{{--                    </div>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <video width="100%" class="" style="width:100%;max-height: 900px;" autoplay loop muted>--}}
{{--                                <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}
{{--                            </video>--}}
{{--                        </div>--}}

{{--                                        <img src="" alt="Not-Found" >--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="pt-0 pb-sm-4 pb-lg-5 container-fluid video-section d-flex align-items-center  ">--}}
{{--    <div class="video-wrapper " >--}}
{{--        <video autoplay loop muted>--}}
{{--            <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}
{{--        </video>--}}
{{--    </div>--}}
{{--    <div class="clints-content clints-content-banner mb-0 " style="z-index: 2;">--}}
{{--        <div class="clider-content-wrapper position-relative ">--}}
{{--            <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>--}}
{{--                <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize">About US</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
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
    .overlay-video-img{
        position: relative;
    }
    .overlay-video-img:before {
        position: absolute;
        content: '';
        background: url("{{asset('assets/images/overlay.png')}}");
        height: 100%;
        width: 100%;
        z-index: 1;
    }
</style>

<section class="pt-0 pb-sm-4 pb-lg-5  mobile-display  " >

{{--    // remove from below div : clints-content-banner--}}
    <div class="clints-content  mb-0  " >
                    <div class="">
                        <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">
                            <div class="slider-content position-absolute   start-50 translate-middle text-center" style="margin-top: 250px;z-index:1;">
                                <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>
                                <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>
                                <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>
                            </div>
                                <div class="d-flex justify-content-center overlay-video-img" >


{{--                                    <video  style="object-fit: cover;" autoplay loop muted playsinline>--}}
{{--                                        <source src="{{asset('assets/videos/head_video_photon.mp4')}}" type="video/mp4">--}}


{{--                                    </video>--}}
                                    <video id="videoPlayer" poster="{{asset('assets/videos/video_back.webp')}}" preload="metadata" style="object-fit: cover;"   autoplay loop muted playsinline>
                                        <source src="" type="video/mp4">
                                    </video>

                                    <script>
                                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                                            // Get the video element
                                            const videoElement = document.getElementById('videoPlayer');
                                            const videoSrc ="assets/videos/video2.mp4#t=0.5";
                                            videoElement.src = `https://www.photonplay.com/${videoSrc}`;
                                            // Play the video
                                            videoElement.play();
                                        }

                                    </script>

                                    <script>
                                        // Function to hide the fallback image and show the video player
                                        function showVideoPlayer() {
                                            const videoPlayer = document.getElementById('videoPlayer');
                                            const fallbackImage = document.getElementById('fallback-image');
                                            videoPlayer.style.display = 'block';
                                            fallbackImage.style.display = 'none';
                                        }

                                        // Function to show the fallback image and hide the video player
                                        function showFallbackImage() {
                                            const videoPlayer = document.getElementById('videoPlayer');
                                            const fallbackImage = document.getElementById('fallback-image');
                                            videoPlayer.style.display = 'none';
                                            fallbackImage.style.display = 'block';
                                        }

                                        // Check if the video loaded properly after a specific time (in milliseconds)
                                        const checkVideoLoading = setTimeout(showFallbackImage, 10000); // Set to 10 seconds, you can adjust this time

                                        // Add an event listener to the video to check if it successfully loads
                                        const videoPlayer = document.getElementById('videoPlayer');
                                        videoPlayer.addEventListener('loadedmetadata', () => {
                                            clearTimeout(checkVideoLoading); // If the video loads, clear the timeout
                                            showVideoPlayer(); // Show the video player
                                        });

                                        // If an error occurs during video loading, show the fallback image
                                        videoPlayer.addEventListener('error', () => {
                                            showFallbackImage();
                                        });
                                    </script>


                                </div>

                        </div>
                    </div>
    </div>
</section>



<section class="pt-0 pb-sm-4 pb-lg-5 desktop-display"  >
    <div class="clints-content clints-content-banner mb-0 bg-primary"  >
        <div class="" >
            <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">
                <div class="slider-content position-absolute top-50 start-50 translate-middle text-center"   style="z-index:2;">
{{--                    style="z-index:3;"--}}
                    <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>
                    <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>
                    <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>
                </div>
                <div class="d-flex justify-content-center overlay-video-img"  >
                    <video  width="100%" preload="metadata" poster="{{asset('assets/videos/video_back.webp')}}"   autoplay loop muted playsinline>
                        <source src="{{asset('assets/videos/video2.mp4#t=0.5')}}" type="video/mp4">
                    </video>
                </div>

            </div>
        </div>
<script>
    // Function to hide the fallback image and show the video player
    function showVideoPlayer() {
        const videoPlayer = document.getElementById('video-player');
        const fallbackImage = document.getElementById('fallback-image');
        videoPlayer.style.display = 'block';
        fallbackImage.style.display = 'none';
    }

    // Function to show the fallback image and hide the video player
    function showFallbackImage() {
        const videoPlayer = document.getElementById('video-player');
        const fallbackImage = document.getElementById('fallback-image');
        videoPlayer.style.display = 'none';
        fallbackImage.style.display = 'block';
    }

    // Check if the video loaded properly after a specific time (in milliseconds)
    const checkVideoLoading = setTimeout(showFallbackImage, 10000); // Set to 10 seconds, you can adjust this time

    // Add an event listener to the video to check if it successfully loads
    const videoPlayer = document.getElementById('video-player');
    videoPlayer.addEventListener('loadedmetadata', () => {
        clearTimeout(checkVideoLoading); // If the video loads, clear the timeout
        showVideoPlayer(); // Show the video player
    });

    // If an error occurs during video loading, show the fallback image
    videoPlayer.addEventListener('error', () => {
        showFallbackImage();
    });
</script>

{{--        @foreach($banners as $banner)--}}
{{--            <div>--}}
{{--                <div class="clider-content-wrapper w-100 position-relative">--}}
{{--                    <div class="slider-content position-absolute top-50 start-50 translate-middle text-center">--}}
{{--                        <h1 class="title_home_page_banner">{{$banner->tagline}}</h1>--}}
{{--                        <h6 class="text-white mb-3">{{$banner->sub_tagline}}</h6>--}}
{{--                        <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>--}}
{{--                    </div>--}}
{{--                    <img src="{{asset('storage/'.$banner->image)}}" alt="Not-Found" class="img-fluid w-100">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}

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
