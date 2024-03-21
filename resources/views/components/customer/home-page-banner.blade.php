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
                    <video   id="videoHeaderPlay"  preload="metadata" poster="{{asset('assets/videos/video_back.webp')}}"    data-dashjs-player autoplay loop muted playsinline>
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
