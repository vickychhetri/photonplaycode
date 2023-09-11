<?php

use App\Models\ManageSeo;

$data_record = ManageSeo::where('page_name', ManageSeo::VMS)->first();
$seo_meta = [
    "title" => $data_record->title,
    "description" => $data_record->description,
    "keywords" => $data_record->keyword,
    "schema" => $data_record->schema
];
?>

@include('customer.layout2.header')

<!-- iCop Series Features Start -->
<!-- Banner sec -->
<section class="highyway-imageses py-5" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
    <div class="container">
        <div class="slider-content">

            <div class="imaged m-auto">
                <div class="city-wrap flex-wrap">
                    <h1 class=" text-white fw-normal mb-1 title-text-h2">Variable Message Signs (VMS)</h1>
                    <h5 class=" text-white fw-normal mt-2 mb-2 ">
                        Highly visible and innovative, creating instant awareness <br/> about specific events to the
                        people commuting on the roads.
                    </h5>
                    <a href="#inquiry"
                       class="btn-primary-rounded  p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model">GET
                        QUOTE</a>
                </div>
                <div class=" m-auto desktop-display ">
                    <img src="{{ asset('assets/customer/images/F-SOLAR (1).png') }}" alt="alt"
                         class="d-block mx-auto product-feature-model-image " style="transform: scale(1.1);">
                </div>

            </div>


        </div>
    </div>
</section>
<!-- Banner Sec End -->
<!-- banner-text-start -->
<section class="bg-white pb-0">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-2"> Variable Message Signs (VMS) </h2>
                <div class="p-4 m-2">
                    <p style="text-align: justify;">
                        Viewed by millions of eyes every day and guiding millions of motorists back home safely every
                        day, Photonplay is contributing its part to humanity in its own way by enhancing road and
                        traffic safety. Photonplay’s outperforming VMS signs are highly reliable and rugged components
                        of the traffic management ecosystem for motorways, tunnels, and urban traffic management
                        systems.VMS are typically made of durable materials, such as aluminum or steel, and they are
                        equipped with bright LED lights that can be seen from a long distance. Traffic managers can
                        easily and quickly update the information displayed on the signs because they are controlled
                        remotely. Around the world, variable message signs (VMS) now play a significant role in traffic
                        control.
                    </p>
                    <p style="text-align: left;">
                        <br/>
                        Here are some specific ways that our VMS can be used to improve road safety:
                        <br/>
                    <ul style="text-align: left;">
                        <li>
                            To warn drivers of upcoming roadwork, accidents, or other hazards. This could motivate
                            drivers to slow down and use caution, which can help avoid accidents.
                        </li>
                        <li>
                            To direct traffic around road closures or other obstructions, which can help maintain
                            traffic flow and avoid congestion.
                        </li>
                        <li>
                            To display speed limits or other speed restrictions that can aid in lowering speeding, which
                            is a key contributor to accidents.
                        </li>
                        <li>
                            To provide drivers with real-time traffic updates, such as delays or road closures. Drivers
                            can use this information to plan routes and stay clear of traffic.
                        </li>
                        <li>
                            VMS is a valuable tool for improving road safety. By providing drivers with timely and
                            accurate information, VMS can help prevent accidents, reduce congestion, and keep motorists
                            safe.

                        </li>
                    </ul>

                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-text-end -->
<!-- Our Product-start -->
<section class="our-product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center ">
                    <!-- <h6 class="fs-6 text-colorr">photonplay’s </h6> -->
                    <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold">VMS Series</h2>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="row">
                    @foreach ($page as $i)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="text-start p-4 list-unsorted">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('storage/'.$i->cover_image)}}" alt="Not Found"
                                         class="img-fluid" style="max-height: 250px">
                                </div>
                                <div class="my-3 list-bacgunded px-4 py-4">
                                    <h5 class="fw-bold text-capitalize">{{ $i->title }}</h5>
                                    <p>{{ substr($i->description, 0, 60) }} ... </p>
                                    <a href="{{route('customer.vms.sub.page', $i->slug)}}"
                                       style="text-decoration: none;">
                                        <a href="{{route('customer.vms.sub.page', $i->slug)}}"
                                           style="text-decoration: none;"><h6 class="text-colorr">Know More >></h6></a>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Product -->

<!-- Application -->
<section class="application-section mt-0 pt-0">
    <div class="container">
        <h2 class="fs-md-2 mt-0 mb-2 text-center text-uppercase">Special Applications</h2>
        <p class="text-center mb-4">Variable signs for special needs in work zones safety and speed calming
            applications
        </p>
        <div class="row d-flex justify-content-center">

            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/Highway-Icons.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Highways </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/Tunnels-Icons.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Tunnels </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/Smart-cities-icon.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Smart Cities </h4>
                    </div>
                </div>
            </div>
            {{--                <div class="col-md-3">--}}
            {{--                    <div class="application-item">--}}
            {{--                        <img src="{{ asset('assets/customer/images/Transits-Icons.png') }}" alt="image">--}}
            {{--                        <div class="content-application-items">--}}
            {{--                            <h4 class="text-uppercase">Transits </h4>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
        </div>
    </div>
</section>
<!-- Application end -->
<!-- Photon play radar-start -->
<section class="portable px-lg-5 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/customer/images/VMS_Gantry.png') }}" alt="Not Found"
                         class="img-fluid bg-white">
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center ">
                <div class="radar-icop">
                    <h4 class="fs-6 mb-3 text-dark">GANTRY DESIGNS & MOUNTING</h4>
                    <p class="mt-4 mb-lg-0 mb-5">
                        VMS as the most visible product on an ITS Road, Design and aesthetics are on the most
                        important part along with the functionality, hundreds of designs to choose from. Free
                        Consultation on Gantry design and approvals by our dedicated team of CAD engineers
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact form -->
@include('customer.layout2.get_in_touch')
<!-- Contact form end -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fs-md-2 mt-3 text-center"> FAQ </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. What is the application of Variable Message Signs?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: To effectively communicate with drivers, variable message signs (VMS) provide
                            real-time updates and provide traveler information such as incidents, travel times,
                            deviations, special occasions, and current road conditions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. What is a variable message sign?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A digital road sign, often referred to as a variable message sign, is an electronic
                            traffic indicator that displays dynamic data. It is used to alert drivers of cars in motion
                            to current traffic conditions and passing events.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. What is a VMS road sign?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A VMS road sign serves as an electronic display that shows changing traffic
                            information and dynamic LED signs to provide important safety or educational messages to
                            drivers and pedestrians. VMS can display text, images, or a combination of both.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. What is the meaning of VMS?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: VMS stands for Variable Message Sign, conveying real-time traffic information.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. What are the different types of VMS signs?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Permanent and portable VMS are the two main types of VMS. Both of these varieties
                            come in an array of sizes that suit a range of applications, including text-based,
                            graphic-based, and LED matrix signs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. Where is VMS used?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: VMS is used on roads, highways, and urban areas to inform drivers about traffic
                            conditions.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. What are examples of VMS?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Examples of VMS include signs displaying roadwork warnings, speed limits, and
                            traffic updates.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEightA" aria-expanded="false"
                                aria-controls="collapseEightAx`blue ">
                            8. What is the work of VMS?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: VMS works by remotely displaying a variety of messages, such as road closures,
                            diversions, speed restrictions, and traffic updates.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9. What is the benefit of VMS?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The benefits of VMS include smoother traffic flow, less congestion, and increased
                            road safety.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10. What is VMS in access control?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The term "VMS" in access control refers to a "video management system" that controls
                            surveillance cameras and recordings.
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
<script src="/assets/customer/js/bootstrap.bundle.min.js"></script>
<script src="/assets/customer/js/jquery.js"></script>
<script src="/assets/customer/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.clint-wrapperr').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            arrows: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.key-slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
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
        $('.clints-content-banner').slick({
            dots: false,
            infinite: false,
            // speed: 3000,
            slidesToShow: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
        })
        $('.clints-content-branding').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
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
        })
    })
    // window.addEventListener('click', function (e) {
    //     if ($('.navbar-collapse').hasClass('show')) {
    //         $('.navbar-toggler').click();
    //     }
    // })
</script>

<script>
    // Hover attribute
    $('.dropdown .dropdown-toggle').mouseenter(function () {
        if (window.innerWidth > 991) {
            $(this).addClass('show');
            $(this).attr({
                'aria-expanded': true
            })
            $(this).siblings('.dropdown-menu').addClass('show');
            $(this).siblings('.dropdown-menu').attr({
                'data-bs-popper': "static"
            })
        }

    });
    $('.dropdown-menu').mouseleave(function () {
        if (window.innerWidth > 991) {
            $(this).removeAttr('data-bs-popper');
            $(this).siblings('.nav-link ').removeClass('show');
            $(this).removeClass('show');
            $(this).siblings('.nav-link').attr({
                'aria-expanded': false
            });
        }

    })
    $('.mega-menu h4').click(function () {
        // $(this).siblings('ul').slideDown();
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active')
        } else {
            $(this).parent().addClass('active');
        }
        $(this).parent().siblings().removeClass('active');
    });

    // $('.toggler-mega').click(function() {
    //     if ($(this).hasClass('active')) {
    //         $(this).removeClass('active')
    //         $('.mega-menu').slideUp();
    //     } else {
    //         $(this).addClass('active');
    //         $('.mega-menu').slideDown();
    //     }
    //
    // })
    $('.mega-menu-parent > h4').click(function () {
        var bodyColor = $('.drop-downs').attr("style");
        // console.log(bodyColor)
        if (bodyColor === 'display: block;') {
            $('.drop-downs').slideUp(200);
            $('.mega-menu-item').removeClass('active');
            // $('.toggler-mega').removeClass('active')
            return;
        }
        $('.drop-downs').slideDown(200);

    })
    // $('.mega-menu .col-md-2 > h4').click( function(){
    //     $(this).siblings('ul').slideDown();
    //     console.log(this)
    // })
</script>
