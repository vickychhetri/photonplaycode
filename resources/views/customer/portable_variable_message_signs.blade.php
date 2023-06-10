<?php
$seo_meta=[
    "title"=>"Portable Variable Message Signs (VMS)",
    "description"=>"Photonplay’s outperforming VMS signs are highly reliable and rugged components of traffic management ecosystem for motorways, tunnels and urban traffic management systems.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>

@include('customer.layout2.header')
<!-- banner-start -->


<section class="banner-inner pt-0 pb-0">
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            {{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"--}}
            {{--                    aria-label="Slide 2"></button>--}}
            {{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"--}}
            {{--                    aria-label="Slide 3"></button>--}}
        </div>
        <div class="carousel-inner">
            @for ($i=1; $i<=3; $i++)
                <div class="carousel-item active">
                    <div class="banner">
                        <div
                            class="banner-image d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-around p-2">
                            <div class="position-relative heading-banner ">
                                <h2 class="">Portable Variable
                                    Message Signs (VMS)
                                    <p class="mb-0"><span> MOST CAPABLE AND HIGHLY-EQUIPPED RADAR SPEED SIGN EVER BUILT</span></p>
                                </h2>
                                <div class="fs-6 mt-md-4">
                                    <p class="text-dark">No. 1 in Traffic Calming Solution</p>
                                    <a  href="#inquiry"  class="btn-primary-rounded">GET QUOTE</a>
                                </div>

                                <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"
                                                                                       class="img-fluid d-none d-md-block" alt="not-found"></div>
                                <div
                                    class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                            <!-- <div class="position-absolute top-50 start-0 translate-middle"> -->
                            <img src="{{asset('assets\customer\images\MTO.png')}}" alt="Not Found" class="img-fluid mt-3 mt-sm-0">
                            <!-- </div> -->
                            <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Not Found"
                                 class="img-fluid d-none d-md-block">
                            <!-- <img src="./assets/images/sky-sights.jpg" alt="Not Found"> -->
                        </div>

                    </div>
                </div>
            @endfor

        </div>

    </div>
</section>


{{--    <section class="banner-threee position-relative pt-0">--}}
{{--        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="false" data-interval="true">--}}
{{--            <div class="carousel-indicators">--}}
{{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"--}}
{{--                    aria-current="true" aria-label="Slide 1"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"--}}
{{--                    aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"--}}
{{--                    aria-label="Slide 3"></button>--}}
{{--            </div>--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <div class="banner-three">--}}
{{--                        <div class=" d-flex align-items-center justify-content-around h-100">--}}
{{--                            <div class="slider-heading">--}}
{{--                                <!-- <img src="./assets/images/MTO.png" alt="Not Found" class="img-fluid"> -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <div class="banner-three">--}}
{{--                        <div class=" d-flex align-items-center justify-content-around h-100">--}}
{{--                            <div class="slider-heading">--}}
{{--                                <!-- <img src="./assets/images/MTO.png" alt="Not Found" class="img-fluid"> -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="carousel-item">--}}
{{--                    <div class="banner-three">--}}
{{--                        <div class=" d-flex align-items-center justify-content-around h-100">--}}
{{--                            <div class="slider-heading">--}}
{{--                                <!-- <img src="./assets/images/MTO.png" alt="Not Found" class="img-fluid"> -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button class="carousel-control-prev" data-bs-target="#carouselExampleDark" type="button"--}}
{{--            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"--}}
{{--            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
{{--        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button> -->--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Photon play radar-start -->
    <section class="portable px-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="radar-icop w-75 ">
{{--                        <h1 class="mb-">Portable Variable <br> Message Signs (VMS) </h1>--}}
{{--                        <span class="text-uppercase">MOST CAPABLE AND HIGHLY-EQUIPPED RADAR SPEED SIGN EVER BUILT</span>--}}
                        <p class="mt-4 mb-lg-0 mb-5 text-center">
                            Photonplay's Portable Variable Message Signs (VMS) are one of the key elements of dynamic
                            traffic management systems. Depending on the traffic situation, signs are efficiently used
                            to warn and guide about traffic congestion, routing information, speed limits, road work
                            zones, accidents and other incidents on highways, expressways and arterial roads of cities
                        </p>
                    </div>
                </div>
{{--                <div class="col-lg-6 ">--}}
{{--                    <div class="radar-icop-images d-flex justify-content-center align-items-center">--}}
{{--                        <div class="bg-colored"></div>--}}
{{--                        <img src="{{asset('assets\customer\images\converted.png')}}" alt="Not Found" class="img-fluid bg-white">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Photon play radar-end -->
    <!-- Our Product-start -->
    <section class="our-product pt-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold">iCop Series</h2>
                    </div>
                </div>
<div class="row">
    @foreach ($products as $item)
            <div class="col-lg-3 col-md-6 col-12">
                <a href="{{route('customer.pvms.i.cop', $item->id)}}" class="text-decoration-none">
                <div class="text-start p-4 list-unsorted">
                    <div class="roundedd-image">
                        <img src="{{asset('storage/'.$item->cover_image)}}" alt="Not Found" class="img-fluid">
                    </div>
                    <div class="my-3 list-bacgund px-4 py-4">
                        <h5 class="fw-bold text-capitalize">{{$item->title}}</h5>
                        <ul>
                            @foreach ($item->features as $feature)
                            <li>{{$feature->feature }} - {{$feature->description}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </a>
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
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-4">
                        <h2 class="fs-md-2 mt-3 fw-bold">iCop Series Features</h2>
                        <p class="fs-6">Highly Equipped and Robust Portable VMS </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\Comp.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>Compliance</h6>
                            <p class="mb-0">Fully Comply with NEMA, NTCIP and MTO standards</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\Robust.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>Robust</h6>
                            <p class="mb-0">Rugged, reliable and high quality trailer construction</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\TS.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>Touch Screen</h6>
                            <p class="mb-0"> User friendly controls to manage the device</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\weatherss.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>All Weather Operation</h6>
                            <p class="mb-0"> Great visibility and robust functioning in all weather conditions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\24 w.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>24 x 7 Connectivity</h6>
                            <p class="mb-0"> All time access to the device through cloud access</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="d-flex align-items-center justify-content-center bg-white feature-card p-4">
                        <div class="me-3 bgcolor text-center">
                            <img src="{{asset('assets\customer\images\SP.png')}}" alt="Not Found">
                        </div>
                        <div class="">
                            <h6>Solar Powered</h6>
                            <p class="mb-0"> Makes the device cost effective with long battery backup</p>
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
            <h2 class="fs-md-2 mt-3">Exclusively Constructed Trailer</h2>
            <p>Ensuring Safety, Delivering Quality </p>
        </div>
        <div class="container pb-lg-5">
            <div class="accodion-wrapper pb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="accordion accordion-flush position-relative mb-4 mt-lg-0"
                            id="accordionFlushExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button
                                        class="accordion-button  collapsed bg-white shadow-none py-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Automatic Hydraulic Lift Mechanism
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 acc-spn">
                                        <span>Rapid and Easy Deployment</span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none ty-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Finest Powder Coat Finish
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">
                                        <span>Secure and Vandal Proof</span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none tex3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Secure and Vandal Proof
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">
                                        <span>Enter The Data</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end position-absolute circle-stone">
                                    <img src="{{asset('/assets/customer/images/circle_stone.png')}}" alt="not-found" class="img-fluid">
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="flush-headingTwos">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none ty-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwos"
                                        aria-expanded="false" aria-controls="flush-collapseTwos">
                                        Removable Tongue
                                    </button>
                                </h2>
                                <div id="flush-collapseTwos" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwos" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0">
                                        <span>Secure and Vandal Proof tongueee</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="circle-floow position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingjack">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsejack"
                                            aria-expanded="false" aria-controls="flush-collapsejack">
                                            Tongue Wheel Jack
                                        </button>
                                    </h2>
                                    <div id="flush-collapsejack" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingjack" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            <span>Effortless and Secure Trailer Assembly</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingjackss">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsejackss" aria-expanded="false"
                                            aria-controls="flush-collapsejackss">
                                            Leveling Jack
                                        </button>
                                    </h2>
                                    <div id="flush-collapsejackss" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingjackss" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            <span>Effortless and Secure Trailer Assembly</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingjackfouee">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsejackfouee" aria-expanded="false"
                                            aria-controls="flush-collapsejackfouee">
                                            Rugged Mast Brake
                                        </button>
                                    </h2>
                                    <div id="flush-collapsejackfouee" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingjackfouee"
                                        data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            <span>Effortless and Secure Trailer Assembly</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingjackfouee">
                                        <button
                                            class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsefender" aria-expanded="false"
                                            aria-controls="flush-collapsefender">
                                            Heavy Duty Plastic Fenders
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefender" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingfender" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            <span>Heavy Duty Plastic Fenders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stone-accordian position-absolute d-flex align-items-center ">
                                <img src="{{asset('assets\customer\images\object.png')}}" class="img-fluid circle-image d-none d-md-block"
                                    alt="not-found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="dotted-imag img-fluid d-none d-md-inline" src="{{asset('assets\customer\images\dotted-tran.png')}}" alt="not-found">
    </section>
    <!-- Dimension section -->
    <section class="connectivity bg-light">
        <div class="container">
            <h3 class="text-center fs-2">Connectivity with Sign</h3>
            <div class="sub-header-message text-center col-md-6 mx-auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-3 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\on-the-sign.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>On The Sign</h4>
                        <p class="mb-0">Controller</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-3 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\remote.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>Remote</h4>
                        <p class="mb-0">Cloud Access</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\blu.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>Near The Sign</h4>
                        <p class="mb-0">Bluetooth Access</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    @include('customer.layout2.get_in_touch')

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
    </script>
