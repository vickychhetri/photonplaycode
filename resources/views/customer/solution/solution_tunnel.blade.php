<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::TUNNELS)->first();
$seo_meta=[
    "title"=>$data_record->title ?? '',
    "description"=>$data_record->description ?? '',
    "keywords"=>$data_record->keyword ?? '',
    "schema"=>$data_record->schema ?? ''
];
?>


@include('customer.layout2.header')

    <!-- header-end -->
    <!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">

            <div class="carousel-inner">
                <div class="">
                    <div class="banner">
                        <div class="tunels-imageses p-2">
                            <div class="text-center  d-flex align-items-center justify-content-center h-100" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                                <div class="d-flex justify-content-center ">
                                    <div class="w-75">
                                        <h1 class="text-uppercase text-white title-text-h1" >TUNNELS SOLUTIONS</h1>
                                        <h6 class="text-white text-center mb-4" >
                                            Navigate through tunnels with ease and confidence with our advanced
                                            ITS solutions designed for optimal safety and efficiency.
                                        </h6>
                                        <a  href="#inquiry"  class="btn-primary-rounded">GET QUOTE</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Multiple Size Options-start -->
    <section class="option-chose veriants pt-1 mb-0 pb-0 ">
        <div class="container option-chose-rows">
            <div class="d-flex justify-content-center ">
                <div class="w-75">
                    <p class="text-center" >

                    </p>

                </div>
            </div>

            <div class="row align-items-center">
                <!-- option-one -->
                <h2 class="title-text-h2  m-3 text-capitalize text-center ">Our Products </h2>

                <div class="col-lg-6 mt-3">
                    <div class="multiple-option pb-0">
                        <h4 class="text-capitalize mb-4">Variable Message Sign (VMS)</h4>

                        <p style="text-align: justify;">
                            Variable Message Signs play a crucial role in displaying messages, warning signals, and information about specific events to commuters on roads. At Photonplay, our Variable Message Signs (VMS) enhance road and traffic safety by guiding millions of motorists every day. Our VMS product range includes a variety of highly reliable and rugged solutions designed specifically for traffic guidance and information purposes. Explore our VMS product range and choose from our Standard VMS, Solar VMS, and Smart City VMS solutions. Each of our solutions is designed to cater to the unique needs of traffic management systems
                        </p>

                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.message')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/R-CLOUD.png') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row  py-0 align-items-center">
                <!-- option-two -->
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Variable Speed Limit Sign (VSLS) </h4>

                        <p style="text-align: justify">
                            The Variable Speed Limit Sign (VSLS) is a revolutionary solution that generates instant recognition of centrally regulated speed limits from ITS systems. Our VSLS features a full matrix display area that allows speed limits and graphics to display practically any speed. Drive confidently on the highways with our advanced ITS solutions, including the VSLS, designed to improve traffic flow and enhance road safety. Our systems provide real-time information and analytics for better decision-making and efficient operations.
                        </p>

                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.speed.limit')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid " width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/VSLS Rightside 2 (1).png') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Emergency Signages </h4>

                        <p style="text-align: justify;">
                            Signages play a crucial role in ensuring safe and effective navigation through tunnels. At Photonplay, we offer a wide range of signage designed specifically for tunnel safety. Our signages not only provide clear instructions for drivers but also helps ensure a safe passage for both road and rail tunnels. From way finders to emergency exit signs and telephone signs, Photonplay offers a comprehensive range of signage solutions that enhance tunnel safety and traffic management.
                        </p>

                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="/emergency-signage" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/Emergency Exit Sign-Right 2.png') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row  py-0 align-items-center">
                <!-- option-two -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Lane Control Sign (LCS) </h4>
                        <p>

                            The Lane Control System (LCS) is an integral part of any tunnel management system. The LCS offers real-time monitoring and control of the traffic flow within the tunnel, ensuring a smooth and safe journey for commuters. The sign comprises of RED and GREEN directional arrows to guide the drivers to the correct lanes and warn them of any potential hazards.
                        </p>
                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="/lane-control-sign" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/OHLS expright 2.png') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--system-bus-start  -->
    <section class="bus-sign">
        <div class="container">
            <div class="responsive">
                <!-- <div class="col-lg-12">
                    <div class="row justify-content-center"> -->
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/R-CLOUD.png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Variable Message Sign </p>
                            <p class=""> (VMS)</p>
                            <a href="/variable-sign-language">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/VSLS Sample-01 front (2).png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Variable Speed Limit Sign </p>
                            <p>(VSLS) </p>
                            <a href="/variable-speed-limit-signs">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/Way-Finder-Light-Glow_signage2.png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Emergency Signages </p>
                            <p class="">SIGN</p>
                            <a href="/signages">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/LCS front 2_img.png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Lane Control Sign  </p>
                            <p class="">(LCS)</p>
                            <a href="lane-control-system">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div>
                </div> -->
        </div>
        </div>
    </section>
    <!--system-bus-end  -->
    <!--form-export-start  -->
    @include('customer.layout2.get_in_touch')
    <!-- _____________________ourclint-last-end___________________ -->
@include('customer.layout2.footer_photon')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
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
        window.addEventListener('click', function (e) {
            if ($('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        })

        // Hover attribute
        $('.dropdown .dropdown-toggle').hover(function () {
            $(this).addClass('show');
            $(this).attr({
                'aria-expanded': true
            })
            $(this).siblings('.dropdown-menu').addClass('show');
            $(this).siblings('.dropdown-menu').attr({
                'data-bs-popper': "static"
            })
        });
    </script>
