<?php
$seo_meta=[
    "title"=>"Tunnel Solutions",
    "description"=>"Navigate through tunnels with ease and confidence with our advanced
ITS solutions designed for optimal safety and efficiency..",
    "keywords"=>"Variable Message Sign (VMS),Variable Speed Limit Sign (VSLS),Way Finders,Signages"
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

{{--                                <div class="text-center mt-4 pt-3 d-flex align-items-center justify-content-center h-100">--}}
{{--                                          <div>--}}
{{--                                          <h2 class="text-uppercase fs-2 text-white fw-normal">TUNNELS SOLUTIONS</h2>--}}
{{--                                            <h6 class="text-white mt-3">--}}
{{--                                            Navigate through tunnels with ease and confidence with our advanced--}}
{{--                                            <br> ITS solutions designed for optimal safety and efficiency.--}}
{{--                                            </h6>--}}
{{--                                              <a  href="#inquiry"  class="btn btn-primary rounded-0 mt-3 py-0">GET QUOTE</a>--}}
{{--                                          </div>--}}
{{--                                </div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Multiple Size Options-start -->
    <section class="option-chose veriants">
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
                        <h4 class="text-capitalize mb-4">Variable Message Sign (VMS)</h4>
                        <h6 class="mb-3">Highly visible and innovative, creating instant awareness of local speed limit
                        </h6>
                        <!-- <span class="text-capitalize d-block">Three Size Options To Choose From</span> -->
                        <p>
                            Photonplay's Variable Message Signs (VMS) is a crucial component of our traffic management ecosystem. These signs are highly reliable and rugged and are ideal for traffic guidance and information purposes on motorways, tunnels, and urban traffic management systems. Our VMS solutions are designed to enhance road and traffic safety by providing real-time information to millions of motorists every day, ensuring that they reach their destinations safely and efficiently. With our advanced VMS technology, we enable comprehensive monitoring and incident management, ensuring smooth traffic flow and an enhanced driving experience for commuters.


                        </p>
                        <p class="mb-0 fs-6">EXPLORE PRODUCTS:</p>
                        <ul class="ps-3">
                            <li> STANDARD VMS</li>
                            <li> SOLAR VMS</li>
                            <li> SMART CITY VMS </li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.message')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/vms_smart.webp') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row py-lg-5 py-0 align-items-center">
                <!-- option-two -->
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Variable Speed Limit Sign (VSLS) </h4>
                        <h6 class="mb-3">Highly visible and innovative, creating instant awareness of local speed limit
                        </h6>

                        <p>
                            Our Variable Speed Limit Signs (VSLS) are revolutionizing highway safety by generating instant recognition of centrally regulated speed limits from ITS systems. With a full matrix display area
                        </p>
                        <p style="text-align: justify;">
                            that can display practically any speed and graphics, our VSLS provides drivers with the confidence to navigate highways and tunnels safely.
                        </p>
                        <p style="text-align: justify;">
                            Our advanced ITS solutions improve traffic flow and enhance road safety by providing real-time information and analytics that enable better decision-making and efficient operations. Our VSLS products are perfect for use on roads, highways, and tunnels, making them ideal for transportation authorities looking to improve safety and efficiency in their communities.

                        </p>

                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.speed.limit')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid " width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/vsls_squre.webp') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Signages </h4>

                        <p style="text-align: justify;">
                            Signages play a crucial role in ensuring safe and effective navigation through tunnels. At Photonplay, we offer a wide range of signage designed specifically for tunnel safety. Our signages not only provide clear instructions for drivers but also helps ensure a safe passage for both road and rail tunnels. From way finders to emergency exit signs and telephone signs, Photonplay offers a comprehensive range of signage solutions that enhance tunnel safety and traffic management.
                       </p>
                        <p style="text-align: justify;">
                            Photonplay's comprehensive signage solutions for tunnels include intelligent and programmable signage systems that offer clear and concise information to drivers, ensuring safer and more efficient travel through tunnels. Trust us to provide you with reliable and effective signage solutions for your tunnel infrastructure needs.

                        </p>
                        <ul class="ps-3">
                            <li> Way Finders</li>
                            <li> Emergency Exit Sign</li>
                            <li> Emergency Telephone Sign</li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="/signages" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/wayfinders.webp') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row py-lg-5 py-0 align-items-center">
                <!-- option-two -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Lane Control System (LCS) </h4>
                        <p>

                            The Lane Control System (LCS) is an integral part of any tunnel management system. The LCS offers real-time monitoring and control of the traffic flow within the tunnel, ensuring a smooth and safe journey for commuters. The system comprises variable message signs, signal heads, and other safety equipment to guide the drivers to the correct lanes and warn them of any potential hazards.
                            </p>
                            <p style="text-align: justify;">
                            In the era of modern technology, the LCS provides an additional layer of safety to the tunnel ecosystem. The LCS systems offered by Photonplay are highly reliable and robust and are designed to operate in the harshest of environments. They can be customized to meet the specific requirements of the tunnel infrastructure, providing a tailor-made solution to ensure maximum safety and efficiency.

                        </p>

                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="/lane-control-system" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/lcs_solution.webp') }}" alt="Not Found" class="img-fluid h-75 w-75">
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
                            <img src="{{asset('assets/images/solutions/vms_smart.webp') }}" alt="not-found" class="img-fluid m-auto">
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
                            <img src="{{asset('assets/images/solutions/vsls_squre.webp') }}" alt="not-found" class="img-fluid m-auto">
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
                            <img src="{{asset('assets/images/solutions/wayfinders.webp') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Signages </p>
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
                            <img src="{{asset('assets/images/solutions/lcs_solution.webp') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Lane Control System  </p>
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
@include('customer.layout2.footer')
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
