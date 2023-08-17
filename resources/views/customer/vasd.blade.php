<?php
$seo_meta=[
    "title"=>"Vehicle Actuated Speed Display",
    "description"=>" The sign acts like a Variable Message Sign to display graphics and text along with white Alert Flashing Lights . The sign acts as a Smart Traffic data collector and analyzer. It is a cloud controlled and highly secured Radar Speed Sign.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];

?>
@include('customer.layouts.header')
{{--Radar Banner Start--}}
{{--<x-Customer.Radar.RadarBanner/>--}}

<section class="banner-inner pt-0 pb-0" >
    <div id="carouselExampleDark" class="carousel slide banner-image-new-vasd-parent" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner container">
                    <div
                        class="banner-image-new-radar d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-start p-2 ">

                        <div class="position-relative heading-banner  ">

                            <h1 class="text-dark" style="font-size: 36px;">Vehicle Actuated Speed Display
                                <p class="mb-0 h4 font-weight-bold text-primary"><span> Traffic Management Tool For Real time speed feedback  and Enforcement </span></p>
                            </h1>



{{--                            <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"--}}
{{--                                                                                   class="img-fluid d-none d-md-block" alt="not-found"></div>--}}
                            <div
                                class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                {{--                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">--}}
                            </div>
                        </div>
                        <div class="desktop-display">

                            <img src="{{asset('assets\customer\images\vasd\camerab.webp')}}" alt="Not Found"
                                 class="img-fluid d-none d-md-block">
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
                    <h4 class="text-uppercase text-center">  Vehicle-Actuated Speed Display (VASD)  </h4>
                    <p class="mt-4 text-center">
                        Vehicle-Actuated Speed Display (VASD) is a traffic management tool used to display the speed of approaching vehicles to encourage them to adhere to the speed limit. The basic concept behind a VASD is to provide drivers with real-time feedback on their current speed. The device consists of a radar sensor that measures the speed of approaching vehicles. The measured speed is then displayed on a prominent electronic sign or LED display board When a vehicle exceeds the predefined threshold speed (usually the posted speed limit), the VASD activates the display, which shows the vehicle's current speed. The intention is to remind drivers of their speed and encourage them to slow down, promoting safer driving habits.  VASD ANPR systems play a crucial role in enforcing traffic laws. By automatically classifying the vehicle class,  reading license plates, ANPR cameras can identify vehicles that are speeding, or violating other traffic regulations. The system integrates with standard government portals for enforcing chalans .  ANPR technology enables law enforcement agencies to efficiently monitor traffic and enforce compliance with road safety regulations.
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
        <div class="row gy-5"   >
            <div class="col-lg-12">
                <div class="text-center ">
                    <h2 class="fs-md-2 mt-3"> Features</h2>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v1.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Vehicle classification  </h6>
                            <p class="mb-0" style="font-size: 10px;"> categorizing different types of vehicles based on size like two wheerlers , four wheelers , heavy vehicles </p>
                        </div>

                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/1.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v2.png')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>ANPR Solution</h6>
                            <p class="mb-0" style="font-size: 10px;"> Automatic number plate recognition with high accuracy  </p>

                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/2.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v3.png')}}" style="height: 70px;"  ></div>
                        <div class="">
                            <h6>Traffic Enforcement </h6>
                            <p class="mb-0" style="font-size: 10px;">  All the infractions are logged and integrate with central law enforcement agencies  like VAHAN portal  </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/3.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v4.png')}}"  style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>Automatic Lane Identification</h6>
                            <p class="mb-0" style="font-size: 10px;"> Automatic and accurate detection of Lane in multi lane scenario </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/4.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v5.webp')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>24x7 Operation </h6>
                            <p class="mb-0" style="font-size: 10px;"> Fully optimized to work in day and night conditions</p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/5.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v6.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>High performance  Radar</h6>
                            <p class="mb-0" style="font-size: 10px;"> High performance 4D radar is used to detect the speeds and Lanes  </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/6.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v7.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Clear Visibility </h6>
                            <p class="mb-0" style="font-size: 10px;"> The speed signs are visible from a distance of 300mtrs . The motorist shall be well aware of speed from a distance </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/7.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v8.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Dynamic Message Broadcast</h6>
                            <p class="mb-0" style="font-size: 10px;"> Overspeed warning messages and white flashing strobe lights for over speeding vehicles  </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/8.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/vasd/icon/v1.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Highly Accurate</h6>
                            <p class="mb-0" style="font-size: 10px;"> The system is highly accurate to achieve an accuracy of more than 95% on vehicle detection , classification and ANPR </p>
                        </div>
                    </div>
                    <img src="{{asset('assets/customer/images/vasd/features/9.jpg')}}"  class="img-fluid p-2"/>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- iCop Series Features End -->
@include('customer.layout2.model_gallery')
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
