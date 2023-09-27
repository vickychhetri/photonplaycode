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

{{--<section class="pt-0 pb-sm-4 pb-lg-5  mobile-display  " >--}}

{{--    <div class="clints-content  mb-0  " >--}}
{{--                    <div class="">--}}
{{--                        <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">--}}
{{--                            <div class="slider-content position-absolute   start-50 translate-middle text-center" style="margin-top: 250px;z-index:2;">--}}
{{--                                <h2 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h2>--}}
{{--                                <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>--}}
{{--                                <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>--}}
{{--                            </div>--}}
{{--                                <div class="d-flex justify-content-center overlay-video-img" >--}}
{{--                                    <video id="videoPlayer" poster="{{asset('assets/videos/video_back.webp')}}" preload="metadata" style="object-fit: cover;"   autoplay loop muted playsinline>--}}
{{--                                        <source src="" type="video/mp4">--}}
{{--                                    </video>--}}

{{--                                    <script>--}}
{{--                                        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){--}}
{{--                                            // Get the video element--}}
{{--                                            const videoElement = document.getElementById('videoPlayer');--}}
{{--                                            const videoSrc ="assets/videos/video2.mp4#t=0.5";--}}
{{--                                            videoElement.src = `https://www.photonplay.com/${videoSrc}`;--}}
{{--                                            // Play the video--}}
{{--                                            videoElement.play();--}}
{{--                                        }--}}

{{--                                    </script>--}}

{{--                                    <script>--}}
{{--                                        // Function to hide the fallback image and show the video player--}}
{{--                                        function showVideoPlayer() {--}}
{{--                                            const videoPlayer = document.getElementById('videoPlayer');--}}
{{--                                            const fallbackImage = document.getElementById('fallback-image');--}}
{{--                                            videoPlayer.style.display = 'block';--}}
{{--                                            fallbackImage.style.display = 'none';--}}
{{--                                        }--}}

{{--                                        // Function to show the fallback image and hide the video player--}}
{{--                                        function showFallbackImage() {--}}

{{--                                            const videoPlayer = document.getElementById('videoPlayer');--}}
{{--                                            const fallbackImage = document.getElementById('fallback-image');--}}
{{--                                            videoPlayer.style.display = 'none';--}}
{{--                                            fallbackImage.style.display = 'block';--}}
{{--                                        }--}}

{{--                                        // Check if the video loaded properly after a specific time (in milliseconds)--}}
{{--                                        const checkVideoLoading = setTimeout(showFallbackImage, 10000); // Set to 10 seconds, you can adjust this time--}}

{{--                                        // Add an event listener to the video to check if it successfully loads--}}
{{--                                        const videoPlayer = document.getElementById('videoPlayer');--}}
{{--                                        videoPlayer.addEventListener('loadedmetadata', () => {--}}

{{--                                            clearTimeout(checkVideoLoading); // If the video loads, clear the timeout--}}
{{--                                            showVideoPlayer(); // Show the video player--}}
{{--                                        });--}}

{{--                                        // If an error occurs during video loading, show the fallback image--}}
{{--                                        videoPlayer.addEventListener('error', (e) => {--}}

{{--                                            showFallbackImage();--}}
{{--                                        });--}}
{{--                                    </script>--}}


{{--                                </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--    </div>--}}
{{--</section>--}}


<style>
    /* For mobile devices (height: 600px) */
    @media (max-width: 767px) {
        #videoHeaderPlay {
            height: 600px;
            width: auto; /* This is not strictly necessary as width auto is the default value */
        }
    }

    /* For desktop devices (width: 100%) */
    @media (min-width: 768px) {
        #videoHeaderPlay {
            width: 100%;
            height: auto; /* This is not strictly necessary as height auto is the default value */
        }
    }
</style>
<section class="pt-0 pb-sm-4 pb-lg-5"  >
    <div class=" mb-0"  >
        <div class="" >
            <div class="clider-content-wrapper w-100 position-relative " style="margin-top: -100px;">

                <div class="d-flex justify-content-center overlay-video-img"  >
                    <video   id="videoHeaderPlay"  preload="metadata" poster="{{asset('assets/videos/video_back.webp')}}"   autoplay loop muted playsinline>
                        <source src="{{asset('assets/videos/video2.mp4#t=0.5')}}" type="video/mp4">
                    </video>
                </div>

            </div>

            <div class="  position-absolute   start-50 translate-middle text-center"   style="z-index:44;top: 50%;">
                <h1 class="title_home_page_banner">FROM TOKYO TO LOS ANGELES</h1>
                <h6 class="text-white mb-3">"Contributing to an efficient road and transit network"</h6>
                <a href="{{route('customer.about.us')}}" class="btn-primary-rounded text-capitalize" >About US</a>
            </div>
        </div>

    </div>

</section>
