<?php

use App\Models\ManageSeo;

$data_record = ManageSeo::where('page_name', ManageSeo::RADAR)->first();
$seo_meta = [
    "title" => $data_record->title ?? '',
    "description" => $data_record->description ?? '',
    "keywords" => $data_record->keyword ?? '',
    "schema" => $data_record->schema ?? '',
    "feature_image" => "assets\customer\images\Radar-Speed-Signs-Image_1.webp"
];
?>
@include('customer.layouts.header')

{{--Radar Banner Start--}}
{{--<x-Customer.Radar.RadarBanner/>--}}

<section class="banner-inner pt-0 pb-0">
    <div id="carouselExampleDark" class="carousel slide banner-image-new-radar-parent" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner container">
                    <div
                        class="banner-image-new-radar d-flex flex-wrap flex-sm-nowrap align-items-center p-2 ">

                        <div class="position-relative heading-banner  ">
                            <div class="d-flex ml-0">
                                    <div>
                                        <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2024/02/icop-photonplay-logo.png" class="img-fluid" style="height: 100px;"/>
                                    </div>
                                <div>
                                    <h1 class="text-white"> RADAR SPEED SIGNS</h1>
                                    <p class="mb-0 h4 font-weight-bold text-white"><span> No. 1 in Traffic Calming Solution </span></p>

                                    <a href="#our_products_check" type="button"
                                       class="py-2 rounded border-0 px-4 mt-2 bg-primary text-white outline-1 btn-light text-decoration-none border-1">Explore Products<img class="fs-4 ms-2" width="10"
                                                 src="{{asset('assets\customer\images\downarrow.png')}}"
                                                 alt="Down Arrow"></a>
                                </div>
                            </div>

                            <div
                                class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">

                            </div>
                        </div>
                        <div class="desktop-display">
{{--                            <img data-src="{{asset('assets\customer\images\Radar-Speed-Signs-Image_1.webp')}}"--}}
{{--                                 alt="Radar Speed Signs" class="lazyload mt-3 mt-sm-0 " style="height: 500px;">--}}
                        </div>
                        {{--                        <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Color"--}}
                        {{--                             class="img-fluid d-none d-md-block">--}}
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

{{--Radar Banner End--}}
<!-- Photon play radar-start -->
<section class="portable px-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <p style="text-align: justify;">
                    What sets Photonplay apart is our unrelenting dedication to quality. We understand that safety is
                    not a compromise, and neither is the quality of our products. We are committed to pushing the
                    boundaries of innovation while maintaining a steadfast focus on reliability and longevity, and we
                    proudly stand as the high-end choice in the industry. This reputation stems from our commitment to
                    uncompromising quality.
                </p>
            </div>
            <div class="col-lg-12 ">
                <div class="radar-icop">
                    <h2 class="text-uppercase text-center">
                        The Results Speak for Themselves</h2>
                    <center>
                        <hr style="width: 50px; height: 5px; background-color: black !important; color: black !important;">
                    </center>
                    <ul>
                        <li> Speeders slow down up to 80% of the time when alerted by a radar speed sign</li>
                        <li> Typical speed reductions range from 10% to 20%.</li>
                        <li> Overall compliance with posted speed limits increases by a remarkable 30% to 60%.</li>
                        <li> Photonplay is particularly effective at getting “super speeders” — those driving 20 mph or
                            more over the limit — to slow down.
                        </li>
                    </ul>

                    <div class="mt-4 text-center">
VIDEO                         <iframe width="840" height="474" style="max-width: 100%;" src="https://www.youtube.com/embed/TRLuZV_qSaE?autoplay=1"
                                title="iCop Radar Speed Signs - PHOTONPLAY | Driver Feedback Signs" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen autoplay></iframe>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Photon play radar-end -->


<section class="banner-inner pt-0 pb-0" >
<div class="container-fluid banner-image-info-company-radar" >
    <div class="row mt-4 mb-4 pb-4  pt-4" style="background-color: rgba(255,255,255,.4); height: 400px;">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
        <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2023/12/cropped-Photonplay-logo.webp"  class="img-fluid" style="max-height: 100px;"/>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center   ">
            <div>
            <h3 class="font-weight-bold"> Welcome to Photonplay </h3>
            <hr style="width: 100px;background-color: black;height: 5px;border: black;" class="border"/>
            <p style="text-align: justify;font-family: Roboto,sans-serif;font-size: 20px;">
                Photonplay, a family-owned company, delivers high-quality intelligent transportation systems (ITS) worldwide. For over 12 years, we’ve catered to system integrators, government authorities, OEMs, and corporations across 30+ countries, focusing on safer, more efficient, and sustainable mobility solutions. Our expertise, innovation, and commitment to smarter transportation make us a trusted partner.
            </p>

            </div>
        </div>
    </div>


</div>
</section>


@include('customer.layout2.get_in_touch2')

@include('customer.layout2.product_listing')

<!-- iCop Series Features Start -->
<section class=" pt-4">
    <div class="container-fluid">
        <div class="row gy-5" style="margin-right: 12%;margin-left: 7%;">
            <div class="col-lg-12">
                <div class="text-center mb-lg-4">
                    <h2 class="fs-md-2 mt-3">Series Features</h2>
                    <center>
                        <hr style="width: 50px; height: 5px; background-color: black !important; color: black !important;">
                    </center>
                    <p class="fs-6">iCop Radar Speed Signs enhance road safety, displaying real-time speeds to foster
                        responsible driving and create safer communities for all.
                    </p>

                </div>
            </div>

            <div class="col-md-6  desktop-display">
                <div class="d-flex" >
                    <div style="text-align: right;">
                        <h4> Traffic Data Analysis</h4>
                        <p > Cloud based powerful tool for traffic data analysis</p>
                    </div>
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS4.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6  mobile-display">
                <div>
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS4.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>

                    <div style="text-align: center;">
                        <h4> Traffic Data Analysis</h4>
                        <p > Cloud based powerful tool for traffic data analysis</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS3.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div>
                        <h4> 24x7 Cloud Connectivity</h4>
                        <p> All time access to the device</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS3.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div class="text-center "   >
                        <h4> 24x7 Cloud Connectivity</h4>
                        <p> All time access to the device</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div style="text-align: right;">
                        <h4> Solar Powered</h4>
                        <p > Cost-effective, solar-charged performance</p>
                    </div>
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS2.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mobile-display">
                <div class="">

                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS2.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>
                    <div style="text-align: center;">
                        <h4> Solar Powered</h4>
                        <p > Cost-effective, solar-charged performance</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS5.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div>
                        <h4> Battery Backup</h4>
                        <p> Extended operations with robust battery support</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS5.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div class="text-center">
                        <h4> Battery Backup</h4>
                        <p> Extended operations with robust battery support</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div style="text-align: right;">
                        <h4> Fully Compliance</h4>
                        <p > Embrace industry standards effortlessly with seamless integration</p>
                    </div>
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS6.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS6.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>
                    <div  class="text-center">
                        <h4> Fully Compliance</h4>
                        <p > Embrace industry standards effortlessly with seamless integration</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS1.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div>
                        <h4>All Weather Operation</h4>
                        <p> Efficient performance in any weather condition</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS1.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div class="text-center">
                        <h4>All Weather Operation</h4>
                        <p> Efficient performance in any weather condition</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div style="text-align: right;">
                        <h4> Robust</h4>
                        <p > Built tough for enduring extreme conditions</p>
                    </div>
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS7.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS7.webp')}}" class="lazyload  p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>
                    </div>
                    <div style="text-align: center;">
                        <h4> Robust</h4>
                        <p > Built tough for enduring extreme conditions</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 desktop-display">
                <div class="d-flex">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS8.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div>
                        <h4> Easy Installation</h4>
                        <p>Effortless setup with user-friendly installation</p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 mobile-display">
                <div class="">
                    <div>
                        <img data-src="{{asset('assets/images/radar/RSS8.webp')}}" class="lazyload p-2"
                             alt="24x7 Cloud Connectivity" style="max-height: 150px;"/>

                    </div>
                    <div class="text-center">
                        <h4> Easy Installation</h4>
                        <p>Effortless setup with user-friendly installation</p>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>
</section>
<!-- iCop Series Features End -->
<!-- SPECIFICATION Sec Accordion -->
<section class="sepeicification pt-md-4 pt-0  pb-0 position-relative mb-4">
    <div class="message-sign text-center text-primary">
        <!-- <h6 class="fs-6">photonplay’s</h6> -->
    </div>
    <div class="heading-sec">
        <h2 class="fs-md-2 mt-3">Multifunctional Display</h2>
        <center>
            <hr style="width: 50px; height: 5px; background-color: black !important; color: black !important;">
        </center>
        <p>Acts like a Messenger and a Speed Sign Full matrix-based Digital Speed Limit Sign with multi-functional
            display in 4 colors with high bright in-built warning FLASHING LIGHTS.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="border p-2" style="background-color: white;">
                    <img data-src="{{asset('assets/images/radar/RSS display.png')}}"
                         class="lazyload img-fluid p-2"
                         alt="Option to display graphic content with custom-made and standard graphic"/>
                    <h3> GRAPHICS</h3>
                    <p>
                        Option to display graphic content with custom-made and standard graphic library like "SLOW
                        DOWN", "THANK YOU", "WORK ZONE", etc.
                    </p>
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <div class="border p-2" style="background-color: white;">
                    <img data-src="{{asset('assets/images/radar/RSS Multicolor.png')}}"
                         class="lazyload img-fluid p-2"
                         alt="Multi-color Electronic Speed Signs display with GREEN, RED and AMBER colour options"/>
                    <h3> Multi-colour</h3>
                    <p>
                        Multi-color Electronic Speed Signs display with GREEN, RED and AMBER colour options.
                    </p>
                </div>
            </div>


            <div class="col-md-6 mb-2">
                <div class="border p-2" style="background-color: white;">
                    <img data-src="{{asset('assets/images/radar/RSS Text.png')}}"
                         class="lazyload img-fluid p-2"
                         alt="Option to display custom text messages like community notifications, traffic updates, etc"/>
                    <h3>Text Messages</h3>
                    <p>
                        Option to display custom text messages like community notifications, traffic updates, etc.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border p-2" style="background-color: white;">
                    <img data-src="{{asset('assets/images/radar/RSS Strobes.png')}}"
                         class="lazyload img-fluid p-2"
                         alt="White high bright flashing lights to alert the drivers, so one can never miss the attention"/>
                    <h3>Flashing Lights</h3>
                    <p>
                        White high bright flashing lights to alert the drivers, so one can never miss the attention
                    </p>
                </div>
            </div>

        </div>

    </div>


</section>
{{--content_gallery_001897.txt   :: here content availble in txt file --}}
<section class="contact-form  mt-1 pt-1" id="faq">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fs-md-2 mt-3 mb-3 text-center"> People also ask</h2>
                <center>
                    <hr style="width: 50px; height: 5px; background-color: black !important; color: black !important;">
                </center>
                <div class="mb-3 mt-3">
                    <h3 class="mt-3">
                        What does a radar speed sign mean? </h3>
                    <p class="mt-2 mb-2">
                        A radar speed sign is an interactive sign, typically made of LEDs, that displays vehicle speed
                        as driver’s approach and enhance road safety.
                    </p>
                </div>

                <div class="mb-3 mt-3">
                    <h3 class="mt-3">
                        How effective are radar speed signs? </h3>
                    <p class="mt-2 mb-2">
                        Radar speed signs are highly effective in reducing speeds, with studies showing decreases of up
                        to 9 mph. They serve as impactful tools for traffic calming in various environments, including
                        neighborhoods, school zones, and roadways, which can reduce average speeds by 10–20%.
                    </p>
                </div>


                <div class="mb-3 mt-3">
                    <h3 class="mt-3">
                        Do radar speed signs collect data? </h3>
                    <p class="mt-2 mb-2">
                        Yes, radar speed signs analyze and record traffic data, offering insights for informed
                        decision-making and improved road management. However, they may not capture factors like road
                        design or traffic volume contributing to speeding.
                    </p>
                </div>

                <div class="mb-3 mt-3">
                    <h3 class="mt-3">
                        What is the electronic speed limit sign?</h3>
                    <p class="mt-2 mb-2">
                        An electronic speed limit sign is a dynamic road sign that digitally displays current speed
                        limits, providing real-time information to drivers and enhancing overall traffic safety.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

@include('customer.layout2.get_in_touch')


<!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
<!-- _____________________ourclint-last-end___________________ -->

@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<style>
    .slick-prev,
    .slick-next {
        font-size: 50px; /* Increase the font size to make the arrows larger */
        /* Additional styles for the arrows */
    }
</style>
<script>

    $(document).ready(function () {
        $('.clints-content-branding').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            // fade:true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 6,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        speed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                    arrows: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.key-slider-sign-radar').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        adaptiveHeight: true
    });

</script>
</body>
</html>
