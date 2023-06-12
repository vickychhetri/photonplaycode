<?php
$seo_meta=[
    "title"=>"Transit Solutions",
    "description"=>"Revolutionize public transportation systems with our advanced ITS solutions that offer
real-time data, enhanced safety features, and improved passenger experience.",
    "keywords"=>"Passenger Information Display System (PIDS),Bus Signs,"
];
?>
@include('customer.layout2.header')
    <!-- header-end -->
    <!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner">
                        <div class="banner-imageses">


                            <div class="text-center  d-flex align-items-center justify-content-center h-100" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                                <div class="d-flex justify-content-center ">
                                    <div class="w-75">
                                        <h1 class="text-uppercase text-white title-text-h1" >TRANSIT SOLUTIONS</h1>
                                        <h6 class="text-white text-center mb-4" >
                                            Revolutionize public transportation systems with our advanced ITS solutions that offer
                                             real-time data, enhanced safety features, and improved passenger experience.
                                        </h6>
                                        <a  href="#inquiry"  class="btn-primary-rounded">GET QUOTE</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        //
                    </div>
                </div>
            </div>
    </section>

    <!-- Multiple Size Options-start -->
    <section class="option-chose veriants p-1 mb-1 mt-4">
        <div class="container option-chose-rows">
            <div class="d-flex justify-content-center ">
                <div class="w-75">
                    <p class="text-center" >
                        Derive with confidence on the highways with our advanced ITS solutions designed to improve traffic flow, and enhance road safety. our system provide real time information and analytics to enable  better decision-making and efficient operations.
                    </p>

                </div>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->
                <h2 class="title-text-h2  m-3 text-capitalize text-center ">Our Products </h2>

                <div class="col-lg-6 mt-3">
                    <div class="multiple-option pb-0">
                        <h4>Passenger Information Display System <br> (PIDS)</h4>
                     <p style="text-align: justify;">
                         Our Passenger Information Display Systems (PIDS) offer highly reliable and customizable solutions for train signaling and commuter information. With advanced technology and versatile display options, our PIDS are visible even in sunny conditions and function 24/7 for up to 20 years. Our PIDS products include concourse displays, Metro platform displays, and major overview train information displays.
                     </p>
                        <p style="text-align: justify;">
                         Our team provides software for all parameters and settings, allowing for easy manual or remote operation. We work closely with our customers to ensure product viability and design, and our team manages prototyping, development, and implementation from start to finish. Let us help you improve train safety and enhance commuter experiences with our innovative PIDS solutions.

                     </p>
                        <h6> Application</h6>
                        <ul class="ps-3">
                            <li> Bus</li>
                            <li> Rail Transits</li>
                        </ul>
                        <div class="d-block d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.pasenger.information.display.system')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/pids_solution.webp') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row py-lg-5 py-0 align-items-center">
                <!-- option-two -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Bus Signs </h4>
                     <p style="text-align: justify;">
                         Our Bus Signs are an essential component of intelligent transportation systems, designed to provide real-time information to commuters and improve their overall transit experience. Our LED bus signs are highly visible, even in bright sunlight, and can display various types of information, including bus routes, arrival times, and other important information. With our customizable solutions, we can tailor our bus signs to fit the unique needs of your transit system. Trust in our
                        </p>
                        <p style="text-align: justify;">
                         advanced ITS technology to enhance the efficiency and safety of your bus transportation system. Let us help you transform your transit system with our innovative and reliable Bus Signs.
                     </p>
                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <button class="btn btn-primary text-uppercase rounded-2">KNOW MORE</button>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/bussign_solution.webp') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--system-bus-start  -->
    <section class="bus-sign" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-12">
                            <div class="d-flex justify-content-between gap-4">
                                <div class="inner-bus text-center w-50 py-5">
                                    <div class="bus-radious">
                                        <img src="{{asset('assets/images/solutions/pids_solution.webp') }}" alt="not-found" class="img-fluid">
                                    </div>
                                    <div class="mt-4">
                                        <p class="mb-2">Passenger Information </p>
                                        <p>Display System (PIDS)</p>
                                        <a href="{{route('customer.pasenger.information.display.system')}}">
                                        <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid mt-5">
                                        </a>
                                    </div>
                                </div>
                                <div class="inner-bus text-center w-50 py-5">
                                    <div class="bus-radious">
                                        <img src="{{asset('assets/images/solutions/bussign_solution.webp') }}" alt="not-found" class="img-fluid">
                                    </div>
                                    <div class="mt-4">
                                        <p class="mb-2">Bus Signs </p>
                                        <p>Display System (PIDS)</p>
                                        <a href="#">
                                        <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid mt-5">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--system-bus-end  -->
    <!--form-export-start  -->
    @include('customer.layout2.get_in_touch')
    <!-- _____________________ourclint-last-end___________________ -->

@include('customer.layout2.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            dots: true,
            infinite: false,
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
