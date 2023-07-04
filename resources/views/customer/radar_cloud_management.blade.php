<?php
$seo_meta=[
    "title"=>"iCop | RADAR SPEED SIGN - No.1 In Traffic Claiming Solution",
    "description"=>" The sign acts like a Variable Message Sign to display graphics and text along with white Alert Flashing Lights . The sign acts as a Smart Traffic data collector and analyzer. It is a cloud controlled and highly secured Radar Speed Sign.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];

?>
@include('customer.layouts.header')
{{--Radar Banner Start--}}
{{--<x-Customer.Radar.RadarBanner/>--}}

<section class="banner-inner pt-0 pb-0" >
    <div id="carouselExampleDark" class="carousel slide banner-image-new-radar-parent" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner container">
                    <div
                        class="banner-image-new-radar d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-start p-2 ">

                        <div class="position-relative heading-banner  ">

                            <h2 class="">RADAR CLOUD MANAGEMENT
                                <p class="mb-0 h4 font-weight-bold"><span> Manage Your Speed Sign Anywhere, Anytime </span></p>
                            </h2>

                            <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"
                                                                                   class="img-fluid d-none d-md-block" alt="not-found"></div>
                            <div
                                class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                {{--                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">--}}
                            </div>
                        </div>
                        <div class="desktop-display">

                        </div>
                        <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Not Found"
                             class="img-fluid d-none d-md-block">
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

{{--Radar Banner End--}}
<!-- Photon play radar-start -->
<section class="portable pb-0 mb-1" style="overflow-x:hidden ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="radar-icop">
                    <h4 class="text-uppercase text-center"> CONTROL RADAR SPPED SIGNS VIA CENTRALIZED RADAD CLOUD MANAGEMENT SOFTWARE.</h4>
                    <p class="mt-4 text-center">
                        The complete sign management includes basic sign configuration and settings, alert management, data analysis and data collection from anywhere for the connected device without installing any application.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Photon play radar-end -->

<!-- iCop Series Features Start -->
<section class="pt-0 mt-0" >
    <div class="container">
        <div class="row gy-5" style="margin-right: 12%;margin-left: 7%;" >
            <div class="col-lg-12">
                <div class="text-center mb-lg-4">
                    <h2 class="fs-md-2 mt-3">Cloud Features</h2>
                </div>
            </div>

            <div class="col-lg-6  ">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/TRAFIC.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>24/7 Uptime</h6>
                            <p class="mb-0"> Enhance the operational capabilities</p>
                        </div>

                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c1.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/icon.png')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>GPS Device Locator</h6>
                            <p class="mb-0"> Live Map to view all the device locations</p>

                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c2.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/BATTERY.png')}}" style="height: 70px;"  ></div>
                        <div class="">
                            <h6>User Authentication</h6>
                            <p class="mb-0"> Provides multiple user level access </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c3.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/COMPLIANCE.png')}}"  style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>Schedules</h6>
                            <p class="mb-0"> Schedules events by days, weeks and months dynamically</p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c4.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/CLUDE.png')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>Centrally Controlled</h6>
                            <p class="mb-0"> Single point of connect for multiple signs</p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c5.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/WEATHER.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Alert Management</h6>
                            <p class="mb-0"> Alerts for the events like over speeding and low battery </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c6.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/robust_01_02.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Pro Data Analysis</h6>
                            <p class="mb-0"> Data analysis and report generations</p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c7.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/easy_install_01_02.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Cost Reduction</h6>
                            <p class="mb-0"> Remote connectivity reduces the operational cost </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/cloudmanager/c8.png')}}"  class="img-fluid p-2"/>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- iCop Series Features End -->


<div class="container-fluid mb-0" style="overflow-x:hidden;">
    <div class="col-lg-12">
        <div class="text-center">
            <h2 class="fs-md-2 mt-3">Gallery</h2>
            <p class="fs-6">Our Key Projects Across the Globe - Discover How Our Innovative Solutions are Changing the Game!</p>
        </div>`
    </div>
    <div class="col-lg-12 pb-4 pt-0 mt-0">
        <div class="key-slider-sign-radar slide-images-key">
            <div>
                <img src="/assets/images/radar/gallery/UV9D2BRMlg5xvAE4fjxZdmNw1Kv4i731VzOTKlHN.jpg"  class="img-fluid w-100 h-100 slide-images-key">
            </div>
            <div>
                <img src="/assets/images/radar/gallery/0W2kZs8THRJN0mSOI6Lr9J4OxCLJ4gx4BjGwG5jn.jpg"  class="img-fluid w-100 h-100 slide-images-key">
            </div>

        </div>
    </div>
</div>

<!--  -->
@include('customer.layout2.get_in_touch')
<!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
<!-- _____________________ourclint-last-end___________________ -->

@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

    $(document ).ready( function(){
        $('.clints-content-branding').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay:true,
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
        autoplay:true,
        adaptiveHeight: true
    });
    // $('.carousel-inner').slick({
    //     dots: true,
    //     infinite: true,
    //     speed: 300,
    //     slidesToShow: 1,
    //     autoplay:true,
    //     adaptiveHeight: true
    // });

    //
    // $('.key-slider-sign-radar').slick({
    //     dots: true,
    //     infinite: true,
    //     speed: 300,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     responsive: [
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 infinite: true,
    //                 dots: true
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //     ]
    // });
</script>
</body>
</html>
