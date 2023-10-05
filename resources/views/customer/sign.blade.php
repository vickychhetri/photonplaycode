<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::RADAR)->first();
$seo_meta=[
    "title"=>$data_record->title ?? '',
    "description"=>$data_record->description ?? '',
    "keywords"=>$data_record->keyword ?? '',
    "schema"=>$data_record->schema ?? ''
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
                            class="banner-image-new-radar d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-around p-2 ">

                            <div class="position-relative heading-banner  ">

                                <h1 class="text-dark">iCop | RADAR SPEED SIGN
                                    <p class="mb-0 h4 font-weight-bold"><span> No. 1 in Traffic Calming Solution </span></p>
                                </h1>
                                <div class="">
                                    <p class="text-dark">Best safety score with standout visibility and features.</p>
                                </div>
                                <a href="#our_products" type="button"
                                   class="py-2 rounded border-0 px-4 mt-5 bg-white outline-1 btn-light text-decoration-none border-1" >Shop Now <img class="fs-4 ms-2" width="10" src="{{asset('assets\customer\images\downarrow.png')}}"
                                                  alt=""></a>
                                <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"
                                                                                       class="img-fluid d-none d-md-block" alt="not-found"></div>
                                <div
                                    class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
{{--                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">--}}
                                </div>
                            </div>
                            <div class="desktop-display">
                                <img src="{{asset('assets\customer\images\Radar-Speed-Signs-with-Pole.webp')}}" alt="Not Found" class="mt-3 mt-sm-0" style="height: 110%;">
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
    <section class="portable px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <p class="text-center"> A radar speed sign, also known as a radar speed display or a driver feedback sign, is a device that gives drivers real-time feedback on the speed of their vehicle. These signs are frequently put on roadways, mainly where speeding is a concern or speed limits must be enforced. Radar speed signs' main purpose is to encourage drivers to slow down and obey imposed speed limits, improving road safety.</p>
                </div>
                <div class="col-lg-12 ">
                    <div class="radar-icop">
                        <h4 class="text-uppercase text-center">MOST CAPABLE AND HIGHLY-EQUIPPED RADAR SPEED SIGN EVER BUILT !</h4>
                        <p class="mt-4" style="text-align: justify;">
                            The sign has all the standard features combined in one product to make it industry's best
                            Radar
                            Speed Sign. The sign acts like a Variable Message Sign to display graphics and text along
                            with
                            white Alert Flashing Lights . The sign acts as a Smart Traffic data collector and analyzer.
                            It
                            is a cloud controlled and highly secured Radar Speed Sign.
                            Radar speed signs act as friendly guides on city streets, prioritizing our safety. Instead of punishing us, they gently encourage us to drive more responsibly. These signs can be set up in various places where safety might be a concern, like schools and busy spots. Radar speed signs,  which are located on the rear of the sign, use radar technology to determine the speed of approaching vehicles by measuring the amount of time it takes for the radar signal to return. Studies have shown that radar speed signs can reduce average speeds by 10-20%. This can help prevent accidents caused by distracted or inattentive driving.
                            <br/>
                            Radar speed signs may enforce speed limits, instruct drivers on good driving habits, and build a sense of community by boosting safety and awareness, in addition to being more affordable than alternatives like speed bumps or roundabouts. Controlling traffic on the road is the best way to improve safety. So, these signs aren't just about numbers—they're about helping us drive better, keeping everyone happy and safe, and being part of the cool technology that makes our cities smarter and our roads accident-free.

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Photon play radar-end -->
    <!-- Our Product-start -->
    <section class="icop-series pt-1 mt-1" >
        <div class="container"  id="our_products">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2">Our Products</h2>
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
                                    <a href="{{route('customer.radar.sign', $product->slug)}}" class="btn btn-primary text-capitalize mt-3">Shop Now</a>
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
            <div class="row gy-5" style="margin-right: 12%;margin-left: 7%;" >
                <div class="col-lg-12">
                    <div class="text-center mb-lg-4">
                        <h2 class="fs-md-2 mt-3">iCop Series Features</h2>
                        <p class="fs-6">Our product offers innovative solutions to meet your needs and seamlessly connect your device to various networks and devices,
                            enabling easy data transfer and integration with other smart devices.
                        </p>

                    </div>
                </div>

                <div class="col-lg-6  ">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/TRAFIC.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>Traffic Data Analysis</h6>
                            <p class="mb-0"> Cloud based powerful tool for traffic data analysis</p>
                        </div>

                    </div>
                    <img src="{{asset('assets/images/radar/RSS4.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/CLUDE.png')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>24x7 Cloud Connectivity</h6>
                            <p class="mb-0"> All time access to the device</p>
                        </div>
                    </div>
                        <img src="{{asset('assets/images/radar/RSS3.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/icon.png')}}" style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>Solar Powered</h6>
                            <p class="mb-0"> Makes the device cost effective</p>

                        </div>
                         </div>
                        <img src="{{asset('assets/images/radar/RSS2.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/BATTERY.png')}}" style="height: 70px;"  ></div>
                        <div class="">
                            <h6>Battery Backup</h6>
                            <p class="mb-0"> Long battery backup increases operational hours </p>
                        </div>
                    </div>
                        <img src="{{asset('assets/images/radar/RSS5.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><img src="{{asset('assets/customer/images/COMPLIANCE.png')}}"  style="height: 70px;" alt="Not Found"></div>
                        <div class="">
                            <h6>Fully Compliance</h6>
                            <p class="mb-0"> Comply standard norms with other industries</p>
                        </div>
                    </div>
                        <img src="{{asset('assets/images/radar/RSS6.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                    <div class="d-flex align-items-center ">
                        <div class="me-3"><img src="{{asset('assets/customer/images/WEATHER.png')}}" style="height: 70px;"  alt="Not Found"></div>
                        <div class="">
                            <h6>All Weather Operation</h6>
                            <p class="mb-0"> The sign operates efficiently in all the weathers</p>
                        </div>
                    </div>
                        <img src="{{asset('assets/images/radar/RSS1.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                        <div class="d-flex align-items-center ">
                            <div class="me-3"><img src="{{asset('assets/customer/images/robust_01_02.png')}}" style="height: 70px;"  alt="Not Found"></div>
                            <div class="">
                                <h6>Robust</h6>
                                <p class="mb-0"> Designed to withstand extreme weather conditions </p>
                            </div>
                        </div>
                        <img src="{{asset('assets/images/radar/RSS7.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-card p-4 bg-white">
                        <div class="d-flex align-items-center ">
                            <div class="me-3"><img src="{{asset('assets/customer/images/easy_install_01_02.png')}}" style="height: 70px;"  alt="Not Found"></div>
                            <div class="">
                                <h6>Easy Installation</h6>
                                <p class="mb-0"> Easy to handle and Install with efficient mounting fixture </p>
                            </div>
                        </div>
                        <img src="{{asset('assets/images/radar/RSS8.webp')}}"  class="img-fluid p-2"/>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- iCop Series Features End -->
    <!-- SPECIFICATION Sec Accordion -->
    <section class="sepeicification  pt-md-4 pt-0  pb-0 position-relative">
        <div class="message-sign text-center text-primary">
            <!-- <h6 class="fs-6">photonplay’s</h6> -->
        </div>
        <div class="heading-sec">
            <h2 class="fs-md-2 mt-3">Multi Functional Display</h2>
            <p>Acts like a Messenger and a Speed Sign Full matrix-based Digital Speed Limit Sign with multi-functional display in 4 colors with high bright in-built warning FLASHING LIGHTS.</p>
        </div>
        <div class="container ">
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
                                        GRAPHICS
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">
                                        <p>
                                            Option to display graphic content with custom-made and standard graphic library like "SLOW DOWN", "THANK YOU", "WORK ZONE", etc.
                                        </p>
                                        <img src="{{asset('assets/images/radar/RSS display.png')}}"  class="img-fluid p-2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none ty-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        TEXT MESSAGES
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">
                                        <p>
                                            Option to display custom text messages like community notifications, traffic updates, etc.
                                        </p>
                                        <img src="{{asset('assets/images/radar/RSS Text.png')}}"  class="img-fluid p-2"/>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="circle-floow position-relative">

                            <div class="accordion accordion-flush position-relative" id="accordionFlushExampleSecond">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none py-3 pb-2 shadow-none"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOneSecond"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseOneSecond">
                                            MULTI-COLOUR
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOneSecond" class="accordion-collapse collapse show"
                                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExampleSecond">
                                        <div class="accordion-body pt-0">
                                            <p>
                                                Multi-color Electronic Speed Signs display with GREEN, RED and AMBER colour options.
                                            </p>


                                            <img src="{{asset('assets/images/radar/RSS Multicolor.png')}}"  class="img-fluid p-2"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none ty-3 pb-2 shadow-none"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwoThird"
                                            aria-expanded="false" aria-controls="flush-collapseTwoThird">
                                            FLASHING LIGHTS
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwoThird" class="accordion-collapse collapse"
                                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExampleSecond">
                                        <div class="accordion-body pt-0">
                                            <p>
                                                White high bright flashing lights to alert the drivers, so one can never miss the attention
                                            </p>
                                            <img src="{{asset('assets/images/radar/RSS Strobes.png')}}"  class="img-fluid p-2"/>

                                        </div>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="stone-accordian position-absolute d-flex align-items-center ">--}}
{{--                                <img src="{{asset('assets/customer/images/object.png')}}" class="img-fluid circle-image d-none d-md-block"--}}
{{--                                    alt="not-found">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <img class="dotted-imag img-fluid d-none d-md-inline" src="/assets/customer/images/dotted-tran.png" alt="not-found">
        </div>
    </section>
{{--content_gallery_001897.txt   :: here content availble in txt file --}}
@include('customer.layout2.get_in_touch')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fs-md-2 mt-3 text-center">  FAQ  </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How does a radar speed sign work?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Radar speed signs detect vehicle speed and show it on a digital sign using radar.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How accurate are radar speed signs?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Radar speed indications are usually accurate to within 1-2 miles per hour.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What are the speed digital signs?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Speed digital signs promote safe driving by displaying speed restrictions or vehicle speeds.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What does radar speed limit sign mean?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Radar speed limit signs display speed restrictions and warn drivers when they exceed them.
                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What are the signs that show your speed?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Radar technology is used to indicate the speed of your vehicle on speed display signs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            What is a speed control sign?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A speed control sign displays the area's specified speed restriction.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What is the speed flashing sign?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A speed flashing sign is one that flashes your current speed to warn you if you're going too fast.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightA" aria-expanded="false" aria-controls="collapseEightAx`blue ">
                            How effective are radar speed signs?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Radar speed signs are excellent in getting cars to slow down and obey speed restrictions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            What is a driver feedback sign?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A driver feedback sign is a sign that gives drivers with real-time speed information.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            How effective are driver feedback signs?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Driver feedback signs can help reduce speeding and improve road safety.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            What are speed feedback signs?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Speed feedback indicators provide drivers with real-time speed information in order to encourage safe driving.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            What is a driver feedback sign?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A driver feedback sign displays the driver's current speed, encouraging safer driving.
                        </div>
                    </div>
                </div>





            </div>

        </div>

    </div>

</div>



<!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
<!-- _____________________ourclint-last-end___________________ -->

    @include('customer.layout2.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" async defer></script>
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
