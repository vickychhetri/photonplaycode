<?php
$seo_meta=[
"title"=>"iCop | RADAR SPEED SIGN - No.1 In Traffic Claiming Solution",
"description"=>" The sign acts like a Variable Message Sign to display graphics and text along with white Alert Flashing Lights . The sign acts as a Smart Traffic data collector and analyzer. It is a cloud controlled and highly secured Radar Speed Sign.",
"keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];

?>
@include('customer.layouts.header')
{{--Radar Banner Start--}}
<x-Customer.Radar.RadarBanner/>
{{--Radar Banner End--}}
    <!-- Photon play radar-start -->
    <section class="portable px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="radar-icop">
                        <h4 class="text-uppercase text-center">MOST CAPABLE AND HIGHLY-EQUIPPED RADAR SPEED SIGN EVER BUILT !</h4>
                        <p class="mt-4">
                            The sign has all the standard features combined in one product to make it industry's best
                            Radar
                            Speed Sign. The sign acts like a Variable Message Sign to display graphics and text along
                            with
                            white Alert Flashing Lights . The sign acts as a Smart Traffic data collector and analyzer.
                            It
                            is a cloud controlled and highly secured Radar Speed Sign.
                        </p>
                    </div>
                </div>
{{--                <div class="col-lg-6 ">--}}
{{--                    <div class="radar-icop-image d-flex justify-content-center align-items-center">--}}
{{--                        <div class="bg-colored"></div>--}}
{{--                        <img src="{{ asset('assets\customer\images\iCop icon.png') }}" alt="Not Found" class="img-fluid">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Photon play radar-end -->
    <!-- Our Product-start -->
    <section class="icop-series pt-4">
        <div class="container"  id="our_products">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2 mt-3">Our Products</h2>
                        <h6 class="fs-6 text-colorr text-uppercase">Our product offers innovative solutions to meet your needs and exceed your expectations.
                        </h6>
                    </div>
                </div>
                <div class="responsive">
                    @foreach ($products as $product)
                    <div >
                        <div class="p-2">
                            <div class="product_highlight inner-product bg-white">
                                <div class=" w-75 h-75 light-product m-auto" style="background: url('{{ asset('storage/'. $product->cover_image) }}') no-repeat center;
                                    background-size: cover;">
{{--                                    <img class=""  src="" alt="">--}}
                                </div>
                                <div class="speed-sign text-center mt-3">
                                    <span class="d-block weight-font">
                                        Radar Speed Sign
                                    </span>
                                    <span class="d-block">{{$product->title}}</span>
                                    <div class="d-flex justify-content-center align-items-center my-2 gap-1">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="Not Found" class="img-fluid"
                                            width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="Not Found" class="img-fluid"
                                            width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="Not Found" class="img-fluid"
                                            width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="Not Found" class="img-fluid"
                                            width="14px">
                                        <img src="{{ asset('assets\customer\images\star.svg') }}" alt="Not Found" class="img-fluid"
                                            width="14px">
                                    </div>
                                    <span class="d-block weight-font">${{$product->price}}</span>
                                    <a href="{{route('customer.radar.sign', $product->id)}}" class="btn btn-primary text-capitalize mt-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Our Product -->
    <!-- iCop Series Features Start -->
    <section class=" pt-4">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-4">
                        <h2 class="fs-md-2 mt-3">iCop Series Features</h2>
                        <p class="fs-6">Our product offers innovative solutions to meet your needs and
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/icon.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>Solar Powered</h6>
                            <p class="mb-0"> Makes the device cost effective</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/WEATHER.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>All Weather Operation</h6>
                            <p class="mb-0"> The sign operates efficiently in all the weathers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/TRAFIC.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>Traffic Data Analysis</h6>
                            <p class="mb-0"> Cloud based powerful tool for traffic data analysis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/BATTERY.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>Battery Backup</h6>
                            <p class="mb-0"> Long battery backup increases operational hours </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/COMPLIANCE.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>Fully Compliance</h6>
                            <p class="mb-0"> Comply standard norms with other industries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center bg-white feature-card p-4">
                        <div class="me-3"><img src="{{asset('assets/customer/images/CLUDE.png')}}" alt="Not Found"></div>
                        <div class="">
                            <h6>24x7 Cloud Connectivity</h6>
                            <p class="mb-0"> All time access to the device</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- iCop Series Features End -->
    <!-- SPECIFICATION Sec Accordion -->
    <section class="sepeicification  pt-md-4 pt-0 position-relative">
        <div class="message-sign text-center text-primary">
            <!-- <h6 class="fs-6">photonplay’s</h6> -->
        </div>
        <div class="heading-sec">
            <h2 class="fs-md-2 mt-3">Multi Functional Display</h2>
            <p>Acts like a Messenger and a Speed Sign</p>
            <p>Full matrix-based Digital Speed Limit Sign with multi-functional display in 4</p>
            <p> colors with high bright in-built warning FLASHING LIGHTS.</p>
        </div>
        <div class="container pb-lg-5">
            <div class="accodion-wrapper pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion accordion-flush position-relative" id="accordionFlushExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none py-3 pb-2 shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne"
                                        aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Dimensions and weight
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0"> <code
                                            class="d-block">Overall Length - <span>5000 mm </span></code>
                                        <code class="d-block"> Overall Width - <span>2350 mm</span></code>
                                        <code class="d-block">Operational Height - <span>4625 mm</span></code>
                                        <code class="d-block">Travelling Height - <span>3250 mm</span></code>
                                        <code class="d-block">Weight -<span>1132 kgs</span></code>
                                        <code class="d-block"></code>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none ty-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Display
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">Placeholder content for this accordion, which is
                                        <code class="d-block"> Overall Width - <span>2350 mm</span></code>
                                        <code class="d-block">Operational Height - <span>4625 mm</span></code>
                                        <code class="d-block">Travelling Height - <span>3250 mm</span></code>
                                        <code class="d-block">Weight -<span>1132 kgs</span></code>
                                        <code class="d-block"></code>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none tex3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Power
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0"><code
                                            class="d-block"> Overall Width - <span>2350 mm</span></code>
                                        <code class="d-block">Operational Height - <span>4625 mm</span></code>
                                        <code class="d-block">Travelling Height - <span>3250 mm</span></code>
                                        <code class="d-block">Weight -<span>1132 kgs</span></code>
                                        <code class="d-block"></code>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end position-absolute circle-stone">
                                    <img src="{{asset('assets/customer/images/circle_stone.png')}}" alt="not-found" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="circle-floow position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingOne1">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1"
                                            aria-expanded="false" aria-controls="flush-collapseOne1">
                                            Warranty
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne1" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            <p class="accordion-button shadow-none te-3 p-0 mb-1 shadow-none bg-white">
                                                Construction</p>
                                            <code
                                                class="d-block"> Trailer: <span>All welded structural steel</span></code>
                                            <code
                                                class="d-block">Display cabinet: <span>Aluminium sheet and welded channels</span></code>
                                            <code
                                                class="d-block">Finish:  <span>Hydraulic lift raises display cabinet, operated with toggle switch</span></code>
                                            <code class="d-block">Hydraulics: <span>1132 kgs</span></code>
                                            <code
                                                class="d-block">Axle Capacity: <span>3500 lbs , 82" Round Tube , 4 " Drop Trailer Axle</span></code>
                                            <code
                                                class="d-block">Tires: <span>15 " Tyre with Overall Diameter : 27.5" , Capacity 1820 lbs each , Load</span></code>
                                            <code class="d-block">Range : <span>C (6-Ply Rating)</span></code>
                                            <code class="d-block"></code>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="stone-accordian position-absolute d-flex align-items-center ">
                                <img src="{{asset('assets/customer/images/object.png')}}" class="img-fluid circle-image d-none d-md-block"
                                    alt="not-found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="dotted-imag img-fluid d-none d-md-inline" src="/assets/customer/images/dotted-tran.png" alt="not-found">
        </div>
    </section>
    <!-- Dimension section -->
    <!-- Multiple Size Options-start -->
    <section class="option-chose ">
        <div class="container option-chose-rows">
            <div class="row align-items-center">
                <!-- option-one -->
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/your_speed.webp')}}" alt="" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Multiple Size Options</h4>
                        <span class="text-capitalize d-block">Three Size Options To Choose From</span>
                        <p>Depending upon the application and visibility requirement, Visible up to 1000 ft. <br>
                            12", 15”- and 18”-Character Height Radar Speed Signs are available.</p>
                        <ul class="ps-3">
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                            <li> Work Zone Safety - <span>12" and 15" Models are recommended</span></li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <!-- option-two -->
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/key-speed.webp')}}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Robust</h4>
                        <span class="text-capitalize d-block">Designed to withstand extreme weather
                            conditions</span>
                        <p>Radar your speed signs are designed to work all weather conditions including high
                            temperatures of middle-east to the cold Alaska winters.</p>
                        <ul class="ps-3">
                            <li> UV Resistant - <span>Double Layer UV coating protecting electronics from Ultra
                                    Violet
                                    rays and extreme heats of middle east (GE-LEXAN)</span></li>
                            <li>Water Proofing - <span>IP66 Rated Enclosure made with marine grade aluminium</span>
                            </li>
                            <li> High Grade Batteries -<span> Military Grade Batteries to operate in all
                                    temperature</span></li>
                            <li> High Grade Batteries - <span>12" and 15" Models are recommended</span></li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <!-- option-three -->
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/Data-analysis-cloud-radar-sign.webp')}}" alt="" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Traffic Data Analysis</h4>
                        <span class="text-capitalize d-block">Cloud based powerful tools for traffic data
                            analysis</span>
                        <p>Professional data collection system and analysis tool set for historic analysis of the
                            traffic trends and effects on the traffic behaviour, this comes as a standard package
                            with
                            all our models.</p>
                        <ul class="ps-3">
                            <li> Access - <span>Realtime Access and analyse data from anywhere, anytime at our
                                    Cloud</span></li>
                            <li>Unlimited - <span>Cloud database with unlimited storage in terms of no of
                                    vehicles</span></li>
                            <li>Control - <span>Control and configure the radar signs</span></li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid " width="80">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <!-- option-four -->
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/iMAGE-HOLDER.jpg')}}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Solar Powered (Optional)</h4>
                        <span class="text-capitalize d-block">Power options including Solar with backup upto 7
                            days</span>
                        <p>Solar Powered Speed Signs options with an extended battery back of up to 7 days without
                            sunlight.</p>
                        <ul class="ps-3">
                            <li> UV Resistant - <span>Double Layer UV coating protecting electronics from Ultra
                                    Violet
                                    rays and
                                    extreme heats of middle east</span></li>
                            <li> Water Proofing - <span>Enclosure made from marine grade aluminium</span></li>
                            <li> High Grade Batteries - <span>Military Grade Batteries to operate in all temperature
                                    scenarios with
                                    maximum efficiency</span></li>
                            <div class="d-block mt-md-5">
                                <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            </div>
                    </div>
                </div>
                <!-- option-five -->
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/trans-canada.webp')}}" alt="Not Found" class="img-fluid h-75 w-75" >
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Standards And Compliances</h4>
                        <!-- <span class="text-capitalize d-block">Power options including Solar with backup upto 7
                                days</span> -->
                        <p>Be it Driver Feedback Signs, Radar Speed Signs, or Speed Feedback Sign, all are designed
                            to
                            comply with all traffic needs around the globe, including European and North American
                            industry standards, while also aligning with safety initiatives across the US and
                            Canada.
                        </p>
                        <ul class="ps-3">
                            <li> MUTCD approved - <span>Text and display fonts complying with Manual on Uniform
                                    Traffic
                                    Control Devices (MUTCD)</span></li>
                            <li> Transport Canada approved</li>
                            <li> IP66</li>
                            <li> Safe Routes to School aligned</li>
                            <li> FCC Approved</li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid " width="80">
                        </div>
                    </div>
                </div>
                <!--option six -->
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/ballon-HOLDER.webp')}}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>High Grade Retro Reflective Facia</h4>
                        <span class="text-capitalize d-block">Diamond grade retro Reflective Sheeting</span>
                        <p>Various Sheeting color options to choose from special can be made on requests.</p>
                        <ul class="ps-3">
                            <li> Orange Color - <span>Traffic Calming in Construction Zone</span></li>
                            <li> Yellow Color (Most widely used) - <span>12" and 15" Models are recommended</span>
                            </li>
                            <li> Work Zone Safety - <span>Yellow signifies WARNING. Yellow traffic signs stand for
                                    slowing down, driving with caution, or a general warning</span></li>
                            <li> White - <span>Regulatory signs tell you what you can and can’t do on the
                                    road</span>
                            </li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>

                <!-- option-seven -->
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <div class="img-left">
                        <img src="{{asset('assets/customer/images/trans-canada.webp')}}" alt="Not Found" class="img-fluid h-75 w-75">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="multiple-option pb-0">
                        <h4>Easy Installation</h4>
                        <span class="text-capitalize d-block">Very easy to install</span>
                        <p>Radar speed signs are designed in such a way to be used like a plug and play device, with
                            very easy accessible mounting options and connections to install a signs on a standard
                            sign
                            post or a pole.</p>
                        <ul class="ps-3">
                            <li> Instant - <span>15 minutes installation</span></li>
                        </ul>
                        <div class="d-block mt-md-5 d-flex align-items-center justify-content-between dotted-imagess">
                            <a href="#our_products" class="btn btn-primary text-uppercase rounded-2">Shop Now</a>
                            <img src="{{asset('assets/customer/images/Dot-Patternc.jpg')}}" alt="Not Found" class="img-fluid" width="80">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- Multiple Size Options-end -->
    <!--  -->
@include('customer.layout2.get_in_touch')
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
    </script>
