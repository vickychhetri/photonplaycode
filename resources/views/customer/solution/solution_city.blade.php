<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::SMARTCITY)->first();
$seo_meta=[
    "title"=>$data_record->title,
    "description"=>$data_record->description,
    "keywords"=>$data_record->keyword,
    "schema"=>$data_record->schema
];
?>
@include('customer.layout2.header')

    <!-- header-end -->
    <!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner">
                        <div class="security-imageses">

                            <div class="text-center  d-flex align-items-center justify-content-center h-100" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                                <div class="d-flex justify-content-center ">
                                    <div class="w-75">
                                        <h1 class="text-uppercase text-white title-text-h1" >SMART CITIES </h1>
                                        <h6 class="text-white text-center mb-4" >
                                            Transform urban mobility and drive sustainable growth with our comprehensive ITS solutions
                                             that enable seamless integration and smarter decision-making for cities of the future.
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
    <section class="option-chose veriants  pt-1 mb-0 pb-0">
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
                        <h4 class="text-capitalize mb-4">Radar Speed Sign</h4>
                        <p style="text-align: justify">
                            Our Radar Speed Signs provide an effective solution for managing speed on the roads. Using advanced radar technology, these signs detect the speed of vehicles and display it to the driver, encouraging them to slow down and improve road safety. Our Radar Speed Signs are highly reliable and durable, making them ideal for use on highways, roads, and tunnels. They can be easily installed in any location and offer a range of display options to suit different traffic management needs. Explore our range of Radar Speed Signs and discover how they can help you enhance road safety with our advanced ITS technology.
                        </p>

                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.radar.speed.signs')}}" class="btn btn-primary text-uppercase rounded-2">BUY NOW</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/Radar Speed Sign 2.png') }}" alt="Not Found" class="img-fluid shadow-none h-75 w-75">
                    </div>
                </div>
            </div>

            <div class="row  py-0 align-items-center">
                <!-- option-two -->
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Portable Variable Message Sign (PVMS) </h4>
                        <!-- <span class="text-capitalize d-block">Designed to withstand extreme weather
                            conditions</span> -->
                        <p style="text-align: justify;">
                            Portable VMS : Our PVMS offers flexible and efficient solutions for traffic management. These portable signs can be easily transported to different locations and offer a range of display options to suit a variety of traffic management needs. Ideal for applications on roads, highways, and tunnels, our PVMS provides a highly reliable and rugged solution for traffic guidance and information purposes. With real-time information and analytics, our systems provide better decision-making and efficient operations. At Photonplay, we are committed to providing cutting-edge technology for a better future. Let us help you create safer and more efficient roads with our PVMS solutions.
                        </p>

                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="{{route('customer.portable.variable.message.signs')}}" class="btn btn-primary text-uppercase rounded-2">KNOW MORE</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/Portable-VMS-left-Side.png') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- option-one -->

                <div class="col-lg-6">
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
                        <h4>LED Tickers </h4>
                      <p style="text-align: justify;">
                          Our LED Tickers provide a dynamic way to display information in real-time. With a variety of customizable options, our Tickers can be tailored to suit the needs of any industry, including finance, sports, and news.
                          Designed for both indoor and outdoor use, our Tickers are durable, energy-efficient, and easy to install. They can be integrated with existing systems or operated as standalone displays, making them a versatile solution for businesses of all sizes.

                        Explore our range of LED Tickers and discover how they can help you engage your audience, increase visibility, and enhance your brand image.
                      </p>
                        <div class="d-block  d-flex align-items-center justify-content-between dotted-imagess">
                            <button class="btn btn-primary text-uppercase rounded-2">KNOW MORE</button>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg') }}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/images/solutions/LED Ticker Tape 2.png') }}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--system-bus-start  -->
    <section class="bus-sign mt-1 pt-1">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="row justify-content-center"> -->
                <div class="col-lg-3">
                    <div class="inner-bus text-center px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/Radar Speed Sign 2.png') }}" alt="not-found" class="img-fluid">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Radar Speed Sign </p>
                            <p class="">Display System</p>
                            <a href="{{route('customer.radar.speed.signs')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="inner-bus text-center px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/Side-VMS-Resting.png') }}" alt="not-found" class="img-fluid">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Portable Variable Message Sign </p>
                            <p>(PVMS) </p>
                            <a href="{{route('customer.portable.variable.message.signs')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="inner-bus text-center px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/R-CLOUD.png') }}" alt="not-found" class="img-fluid">
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Variable Message Sign</p>
                            <p class="">(VMS)</p>
                            <a href="{{route('customer.variable.message')}}">
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Variable Message Sign (VMS)" class="img-fluid ">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="inner-bus text-center px-3 h-100">
                        <div class="bus-radious">
                            <img src="{{asset('assets/images/solutions/Circular_outer_led_ticker.png') }}" alt="not-found" class="img-fluid">
                        </div>
                        <div class="mt-4 mb-2">
                            <p class="mb-2">LED Tickers </p>
                            <p class="">Display System (PIDS)</p>
                            <img src="{{asset('assets/customer/images/next-bus.png') }}" alt="Not Found" class="img-fluid">
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
