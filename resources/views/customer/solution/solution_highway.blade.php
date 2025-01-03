<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::HIGHWAYS)->first();
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

            </div>
                    <div class="banner">
                        <div class="highyway-imageses" >
                            <div class="text-center  d-flex align-items-center justify-content-center h-100" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                                   <div class="d-flex justify-content-center ">
                                        <div class="w-100">
                                          <h1 class="text-uppercase text-white title-text-h1" >Highways Solutions</h1>
                                            <h6 class="text-white text-center mb-4" >
                                                Experience improved traffic flow and safer journeys with our cutting-edge ITS solutions tailored to highways
                                            </h6>
                                      <a  href="#inquiry"  class="btn-primary-rounded">GET QUOTE</a>
                                        </div>
                                   </div>
                             </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Multiple Size Options-start -->
    <section class="option-chose veriants pt-1 mb-0 pb-0">
        <div class="container option-chose-rows">
            <div class="d-flex justify-content-center  ">
                <div class="w-75">
                    <p class="text-center" >
{{--                        Derive with confidence on the highways with our advanced ITS solutions designed to improve traffic flow, and enhance road safety. our system provide real time information and analytics to enable  better decision-making and efficient operations.--}}
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
                            Variable Message Signs play a crucial role in displaying messages, warning signals, and information about specific events to commuters on roads. At Photonplay, our Variable Message Signs (VMS) enhance road and traffic safety by guiding millions of motorists every day. Our VMS product range includes a variety of highly reliable and rugged solutions designed specifically for traffic guidance and information purposes. Explore our VMS product range and choose from our Standard VMS, Solar VMS, and Smart City VMS solutions. Each of our solutions is designed to cater to the unique needs of traffic management systems.

                        </p>
{{--                        <p class="mb-0 fs-6">EXPLORE PRODUCTS:</p>--}}
{{--                        <ul class="ps-3">--}}
{{--                            <li> STANDARD VMS</li>--}}
{{--                            <li> SOLAR VMS</li>--}}
{{--                            <li> SMART CITY VMS </li>--}}
                        </ul>
                        <div class="d-block d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.message')}}" class="btn btn-primary text-uppercase rounded-2">Know More</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid " width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('/assets/images/solutions/R-CLOUD.png') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">

                    </div>
                </div>
            </div>


            <div class="row  py-0 align-items-center">
                <!-- option-two -->
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Variable Speed Limit Sign (VSLS) </h4>
                        <p style="text-align: justify;">
                            The Variable Speed Limit Sign (VSLS) is a revolutionary solution that generates instant recognition of centrally regulated speed limits from ITS systems. Our VSLS features a full matrix display area that allows speed limits and graphics to display practically any speed. Drive confidently on the highways with our advanced ITS solutions, including the VSLS, designed to improve traffic flow and enhance road safety. Our systems provide real-time information and analytics for better decision-making and efficient operations.
                        </p>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.variable.speed.limit')}}" class="btn btn-primary text-uppercase rounded-2">Know More</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/VSLS Rightside 2 (2).png') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Portable Variable Message Sign (PVMS) </h4>

                        <p style="text-align: justify;">
                            Portable VMS : Our PVMS offers flexible and efficient solutions for traffic management. These portable signs can be easily transported to different locations and offer a range of display options to suit a variety of traffic management needs. Ideal for applications on roads, highways, and tunnels, our PVMS provides a highly reliable and rugged solution for traffic guidance and information purposes. With real-time information and analytics, our systems provide better decision-making and efficient operations. At Photonplay, we are committed to providing cutting-edge technology for a better future. Let us help you create safer and more efficient roads with our PVMS solutions.
                     </p>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.portable.variable.message.signs')}}" class="btn btn-primary text-uppercase rounded-2">Know More</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/Portable-VMS-Right-Side.png') }}" alt="Not Found" class="img-fluid h-75 w-75 shadow-none">

                    </div>
                </div>
            </div>
            <div class="row py-lg-1 py-0 align-items-center">
                <!-- option-two -->

                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Vehicle Actuated Speed Display (VASD) </h4>
                        <p style="text-align: justify;">
                            Looking to revolutionize traffic management? Look no further than our Vehicle Actuated Speed Display (VASD). Our cutting-edge solution generates instant recognition of vehicle speed and displays the information to the driver using a full matrix display area. The VASD is highly reliable and efficient, making it ideal for roads, highways, and tunnels. Let us help you enhance road safety and traffic flow with our advanced ITS technology. Explore our VASD solutions today!
                        </p>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <button class="btn btn-primary text-uppercase rounded-2">Know More</button>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/VASD2.png') }}" alt="VASD" class="img-fluid shadow-none h-75 w-75">

                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--system-bus-start  -->
    <section class="bus-sign mt-0 pt-0">
        <div class="container">
            <div class="responsive">

                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/R-CLOUD.png') }}" alt="VMS" class="img-fluid m-auto" style="height: 300px">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Variable Message Sign </p>
                            <p class=""> (VMS)</p>
                            <a href="{{route('customer.variable.message')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/VSLS Sample-01 front (2).png') }}" alt="VSLS" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Variable Speed Limit Sign </p>
                            <p>(VSLS) </p>
                            <a href="{{route('customer.variable.speed.limit')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/Side-VMS-Resting.png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Portable Variable Message Sign </p>
                            <p class="">(PVMS) </p>
                           <a href="{{route('customer.portable.variable.message.signs')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
                           </a>
                        </div>
                    </div>
                </div>

                <div class="text-center mx-2">
                    <div class="inner-bus text-center py-4 px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/VASD2.png') }}" alt="not-found" class="img-fluid m-auto">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Vehicle Actuated Speed Display </p>
                            <p class="">(VASD)</p>
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid m-auto">
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
