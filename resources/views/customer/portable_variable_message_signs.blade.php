<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::PVMS)->first();
$seo_meta=[
    "title"=>$data_record->title ?? '',
    "description"=>$data_record->description ?? '',
    "keywords"=>$data_record->keyword ?? '',
    "schema"=>$data_record->schema ?? '',
    "feature_image"=>"assets/customer/images/Side-VMS-Resting%20(1).png"
];
?>

@include('customer.layout2.header')
<!-- banner-start -->
<section class="banner-inner pt-0 pb-0">
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            @for ($i=1; $i<=3; $i++)
                <div class="carousel-item active">
                    <div class="banner">
                        <div
                            class="banner-image d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-around p-2">
                            <div class="position-relative heading-banner ">
                                <h1 class="title-text-h2 title-text-h2 text-dark"> PORTABLE VARIABLE MESSAGE SIGN
                                    <p class="mb-0 h4 font-weight-bold">
                                        <span>
                                        Highly  Equipped and Robust Message Sign
                                        </span></p>
                                </h1>
                                <div class="fs-6 ">
                                    <p class="text-dark">No. 1 in Traffic Calming Solution</p>
                                    <a href="#inquiry" class="btn-primary-rounded">GET QUOTE</a>
                                </div>

                                <div class="zigzack d-flex justify-content-start"><img
                                        src="{{asset('assets\customer\images\ziczac.png')}}"
                                        class="img-fluid d-none d-md-block" alt=""></div>
                                <div
                                    class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found"
                                         class="img-fluid">
                                </div>
                            </div>
                                <div class="desktop-display">
                                    <img src="{{asset('assets\customer\images\Side-VMS-Resting (1).png')}}" alt="Not Found"
                                         class="mt-3 mt-sm-0" style="height: 450px;">

                                </div>

                            <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Not Found"
                                 class="img-fluid d-none d-md-block">
                        </div>

                    </div>
                </div>
            @endfor

        </div>

    </div>
</section>

<!-- Photon play radar-start -->
<section class="portable px-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="radar-icop  ">
                    <h5 class="mb-2 text-center">
                        Photonplay's Portable Variable Message Signs: Enhancing Traffic Management with Dynamic
                        Messaging Solutions
                    </h5>
                    <p class="mt-4 mb-lg-0 mb-5 text-justify" style="text-align: justify;">
                        Portable variable message sign, also known as a portable VMS or a portable message board, is a device used to display variable messages or information to motorists and pedestrians.

                        <br/> <br/>
                        These signs are often used in traffic management, construction zones, special events, or any situation where temporary messaging is needed.These signs are designed to be easily transported and set up at different locations. They are typically mounted on trailers or stands and can be moved using a vehicle.
                        These signs are commonly used for traffic management purposes, such as providing information about road closures, detours, lane shifts, speed limits, or upcoming hazards. They can help regulate traffic flow and improve safety.
                        <br/> <br/>
                        Many areas are affected by serious problems like traffic jams, poor roadways, bad visibility from the weather, accidents, and violating traffic laws. Road safety is increasingly dependent on adopting international best practices, such as Portable Variable Message Signs.
                        <br/> <br/>
                        Using portable and fixed variable message signs is meant to be governed by an evolving standard. PVMS, which is highly effective on a global scale, will begin to demonstrate certain benefits as adoption rises. Because drivers are more aware of and responsive to PVMS, using them for quick driver education campaigns instead of fixed signage is more effective. Driver education is supported, and efficiency remains intact through regular PVMS installation across roadways.
                        <br/> <br/>
                        Portability brings the advantages of easy deployment, mobility, and maintenance. PVMS may include weather monitors for real-time updates and driver warnings in hazardous situations, like fog. Control via the Central Operations Centre is improved by integrating weather data into Advanced Traffic Management Systems.

                    </p>
                </div>
            </div>

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
                @foreach ($products->reverse() as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{route('customer.pvms.i.cop', $item->slug)}}" class="text-decoration-none">
                            <div class="text-start p-4 list-unsorted">
                                <div class="">
                                    <img src="{{asset('storage/'.$item->cover_image)}}" alt="Not Found"
                                         class="img-fluid">
                                </div>
                                <div class="my-3 list-bacgund px-4 py-4" style="font-size: 13px;height: 240px;overflow: hidden;">
                                    <h5 class="fw-bold text-capitalize text-dark">{{$item->title}}</h5>
                                    <ul class="text-dark">
                                        @foreach ($item->features as $feature)
                                            <li>{{$feature->feature }} - {{$feature->description}}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{route('customer.pvms.i.cop', $item->slug)}}" class="text-decoration-none"> Learn More >> </a>
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
    <div class="container pb-lg-2">
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

                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <span class="text-dark" style="font-size: 16px;">Rapid and Easy Deployment</span>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('assets/customer/images/pvms/Automatic-lift-mechanism-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                        </div>

                                    </div>

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
                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <span>Protection from rust, humidity and other impact.</span>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('assets/customer/images/pvms/powder-coating-Circle.png')}}" onclick="showModal('{{asset('assets/customer/images/pvms/Secure-and-Vandal-Proof-Circle.png')}}')"  class="img-fluid h-100" style="max-height: 250px" >
                                        </div>

                                    </div>




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
                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <span>Protection of Battery Box and Controller Box through secure locks</span>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('assets/customer/images/pvms/Secure-and-Vandal-Proof-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                        </div>

                                    </div>



                                </div>
                            </div>
                            <div class="d-flex justify-content-end position-absolute circle-stone">
                                <img src="{{asset('/assets/customer/images/circle_stone.png')}}" alt="not-found"
                                     class="img-fluid">
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
                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <span>Manage Storage Space</span>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <img src="{{asset('assets/customer/images/pvms/Tonge-Wheel-Jack-2-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                        </div>

                                    </div>
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
                                        class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsejack"
                                        aria-expanded="false" aria-controls="flush-collapsejack">
                                        Tongue Wheel Jack
                                    </button>
                                </h2>
                                <div id="flush-collapsejack" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingjack" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body pt-0">
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <span>Effortless and Secure Trailer Assembly</span>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                <img src="{{asset('assets/customer/images/pvms/Tonge-Wheel-Jack-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 position-inherit ">
                                <h2 class="accordion-header" id="flush-headingjackss">
                                    <button
                                        class="accordion-button collapsed bg-white shadow-none te-3 pb-2 shadow-none "
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsejackss" aria-expanded="false"
                                        aria-controls="flush-collapsejackss">
                                        Leveling Jack
                                    </button>
                                </h2>
                                <div id="flush-collapsejackss" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingjackss" data-bs-parent="#accordionFlushExample1">
                                    <div class="accordion-body pt-0">
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <span>Stabilizing the trailer</span>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                <img src="{{asset('assets/customer/images/pvms/Leveling-Jack-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                            </div>

                                        </div>
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
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <span>Stable erection of sign</span>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                <img src="{{asset('assets/customer/images/pvms/Rugge-Mast-Brake-Circle.png')}}"  class="img-fluid h-100" style="max-height: 250px" >
                                            </div>

                                        </div>
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
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <span>Enhance Longevity</span>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center" >
                                                <img src="{{asset('assets/customer/images/pvms/Heavy-Duty-Plastic-Fender-Circle.png')}}"  class= "img-fluid h-100" style="max-height: 250px" >
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stone-accordian position-absolute d-flex align-items-center ">
                            <img src="{{asset('assets\customer\images\object.png')}}"
                                 class="img-fluid circle-image d-none d-md-block"
                                 alt="not-found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="dotted-imag img-fluid d-none d-md-inline" src="{{asset('assets\customer\images\dotted-tran.png')}}"
             alt="not-found">
    </div>
</section>

<!-- PVMS Gallery -->
{{--<x-Pvms.PvmsGallery/>--}}
<!-- End of PVMS Gallery-->


<!-- Dimension section -->
<section class="connectivity bg-light">
    <div class="container">
        <h3 class="text-center fs-2">Connectivity with Sign</h3>
        <div class="sub-header-message text-center col-md-6 mx-auto">
            <p>We offer flexible and user-friendly signage access options . The sign can be accessed in multiple ways either from remote or from on site </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="connectivity-box text-white text-center p-4 mb-3 mb-md-0">
                    <div
                        class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{asset('assets\customer\images\on-the-sign.png')}}" alt=""
                             class="object-fit-contain">
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fs-md-2 mt-3 text-center">  FAQ  </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1.	What is a PVMS?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A portable variable message sign, or PVMS, is a tool that shows dynamic messages to drivers and pedestrians and is frequently used for traffic control, construction zones, and special events.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	Where is PVMS used?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: PVMS is used for temporary messaging for road users in situations requiring traffic management, construction zones, special events, and other circumstances.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	How are PVMS transported and set up?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: PVMS can be set up in numerous locations and is conveniently portable. They may be moved using vehicles because they are mounted on stands or trailers.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What information do PVMS display?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: PVMS displays variable messages such as road closures, detours, speed limits, lane shifts, and upcoming hazards to regulate traffic and enhance safety.
                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	Why is PVMS important for road safety?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: By delivering real-time information, enhancing driver awareness, and facilitating traffic flow, particularly under difficult conditions, PVMS helps to improve road safety.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	How does PVMS improve driver education?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Due to increased motorist awareness and responsiveness, PVMS is more effective for driver education programs than fixed signs.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	What benefits does PVMS portability offer?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Portability brings advantages like easy deployment, mobility, and simplified maintenance of the message signs.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightA" aria-expanded="false" aria-controls="collapseEightAx`blue ">
                            8.	Can PVMS address adverse weather conditions?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Yes, PVMS can include weather monitors for real-time updates, warning drivers about hazardous situations like fog.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9.	How does integrating weather data help PVMS?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Advanced Traffic Management Systems that incorporate meteorological data improve control through the Central Operations Centre, resulting in more efficient traffic management.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10.	Why is the standard for PVMS use evolving?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Both portable and fixed variable message signs will be used by an emerging standard that will ensure consistent and efficient messaging techniques.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>



@include('customer.layout2.footer_photon')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>
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

    $('.clints-content-gallery').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='{{asset('assets/customer/images/left-chevron.png')}}/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='{{asset('assets/customer/images/right-chevron.png')}}/></button>",
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,           // Enable auto-scroll
        autoplaySpeed: 2000,      // Set auto-scroll speed (in milliseconds)
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
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

</script>
    </body>
    </html>
