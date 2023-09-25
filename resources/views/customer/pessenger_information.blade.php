<?php
$seo_meta = [
    "title" => "{$page->meta_title}",
    "description" => "{$page->meta_description}",
    "keywords" => "{$page->meta_keyword}",
    "schema" => "{$page->schema}"
];
?>
@include('customer.layout2.header')

<!-- Banner sec -->
<section class="banner-sec-pids-sign py-4">
    <div class="container">
        <div class="slider-content ">
            <div class="imaged m-auto">
                <div class="city-wrap flex-wrap">
                    <h1 class=" text-white fw-normal mb-1 title-text-h2">{{$page->title}}</h1>
                    <p class=" text-white fw-normal"> Provides real-time information of public transport and make your
                        daily commute hassle free </p>
                    <a href="#inquiry"
                       class="btn-primary-rounded p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model">GET
                        QUOTE</a>
                </div>
                <div class="desktop-display">
                    <img src="{{asset('storage/'.$page->cover_image)}}" alt="alt"
                         class="d-block img-fluid h-75 product-feature-model-image">
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Banner Sec End -->

<!-- Desc and specification -->
<section class="sepeicification bg-light position-relative">
    <div class="container pb-lg-5">
        <div class="accodion-wrapper pb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div>
                        {{--                            <h4 class="text-capitalize">Description</h4>--}}
                        <p style="text-align: justify;">
                            {!! $page->description !!}
                        </p>
                        <div class="thumb-image d-flex justify-content-center">
                            <div class="row">
                                @forelse ($page->images as $image)
                                    <div class="col-md-4  thumb-image-item">

                                        <div class="mb-3">
                                            <img src="{{asset('storage/'.$image->image)}}" alt="" class="img-fluid"
                                                 style="height: 200px;">
                                            <img src="{{asset('assets/customer/images/zoom-in.png')}}" alt=""
                                                 onclick="showModal('{{asset('storage/'.$image->image)}}')"
                                                 class="zoom-in">
                                        </div>

                                    </div>
                                @empty

                                @endforelse
                                <x-Customer.ShowImageDisplay/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <h2 class="fs-md-2 mb-5 text-center">Specification</h2>
                    </div>
                    <div class="circle-floow foloowers position-relative">
                        <div class="accordion accordion-flush" id="accordionFlushExample1">
                            @foreach ($page->specs as $index => $spec)
                                <div class="accordion-item border-0 position-inherit ">
                                    <h2 class="accordion-header" id="flush-headingOne{{$spec->id}}">
                                        <button
                                            class="accordion-button collapsed optic bg-white te-3 pb-2 shadow-none text-dark"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne{{$spec->id}}" aria-expanded="false"
                                            aria-controls="flush-collapseOne{{$spec->id}}">
                                            {{$spec->spec}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne{{$spec->id}}"
                                         class="accordion-collapse collapse {{$index==0?'show':''}}"
                                         aria-labelledby="flush-headingOne{{$spec->id}}"
                                         data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body pt-0">
                                            {!! $spec->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="stone-accordian position-absolute d-flex align-items-center ">
                                <img src="{{asset('assets/customer/images/object.png')}}"
                                     class="img-fluid circle-image d-none d-md-block" alt="not-found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="dotted-imag img-fluid d-none d-md-inline"
                 src="{{asset('assets/customer/images/dotted-tran.png')}}" alt="not-found">
        </div>
    </div>
</section>
<!-- Desc and specificatio  end -->

<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <div>
                <p>The effectiveness and convenience of public transport systems, including buses, trains, and airports,
                    are significantly improved by the use of passenger information display signs (PIDS).</p>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Display Type</td>
                        <td> Function</td>
                    </tr>
                    <tr>
                        <th>
                            Departure Board
                        </th>
                        <td>
                            Shows scheduled departure times and platform information for different modes of
                            transportation.
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Arrival Board
                        </th>
                        <td>
                            Shows estimated arrival times and gate details for incoming journeys
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Route map
                        </th>
                        <td>
                            Shows the entire route, including all stops
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Real-time update
                        </th>
                        <td>
                            Notifies passengers of any schedule changes, delays, or disruptions
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Information screen
                        </th>
                        <td>
                            Provides general information about the transportation network, such as fare structures,
                            timetables, and connection points
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Advertising screen
                        </th>
                        <td>
                            Displays advertisements and promotional content
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Wayfinding sign
                        </th>
                        <td>
                            Helps passengers navigate complex transportation hubs
                        </td>
                    </tr>
                    </tbody>
                </table>

                <p>
                    Passenger Information Display Signs are the bedrock of efficient and well-informed public
                    transportation. These displays empower travelers to make informed decisions and navigate complex
                    transportation networks with confidence, ensuring road safety.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- Feature -->
@include('customer.layout2.features_page')
<!-- Feature end -->



<!-- Application -->
<section class="application-section pt-4 pb-4">
    <div class="container">
        <h2 class="fs-md-2 mb-3 text-center">APPLICATIONS</h2>
        <div class="row d-flex justify-content-center">


            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/application-img-1.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Bus and Rail Transits </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Application end -->

<section class="con-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <h4 class="text-white text-center">Passenger Information Display System (PIDS)- Brochure</h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="{{asset('storage/'.$page->brochure)}}" class="btn btn-primary rounded-0" target="_blank">Download
                    Now</a>
            </div>
        </div>
    </div>
</section>

<!-- _____________________ourclint-last-start___________________ -->

{{-- gallery--}}
@include('customer.layout2.model_gallery')
{{--gallery end --}}

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
                            1.	What is the meaning of passenger information?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A passenger information system, or passenger information display sign, is an automated system that provides information to users of public transportation about the nature and status of a public transportation service using visual, voice, or other media.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	Why is passenger information important?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: To improve traveler experiences, precise real-time information is provided to travelers to enable them to better plan their trips and cut down on waiting times.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	How does a passenger information system work?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The PIS, or passenger information system, is the operational tool in charge of automatically or manually providing visual and audio information to passengers at stations and transfer facilities at any time.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What is API for travel?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Airlines are now required to submit information about their passengers before their flights by the US, the majority of EU members, and other nations for security reasons. Advance Passenger Information (API) is the term for this. They will let you know what they need from you.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	What is the passenger information system for trains?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: It displays the difference between the actual train times and the timetable as well as any known delays and predicted train arrival and departure times.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	What are API and PNR?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: API: Advance Passenger Information , PNR: Passenger Name Record

                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	What is a passenger management system?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Passenger Flow Management (PFM) is a set of tools used to monitor, control, and detect the total flow of passengers across airport touchpoints.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEightA" aria-expanded="false"
                                aria-controls="collapseEightAxblue ">
                            8.	What is PIS in trains?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Passenger Information System
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9.	What benefits do Passenger Information Display Signs (PIDS) offer to travelers?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: PIDS provides real-time updates on schedules, routes, delays, and essential information, allowing travelers to plan their journeys efficiently and minimize waiting times.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10.	How are real-time updates displayed on Passenger Information Display Signs (PIDS)?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: PIDS employs a combination of text, graphics, and animations to show real-time data, ensuring passengers receive accurate and easily understandable information for their journeys.
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
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}
<script>
    $('.clints-content-branding').slick({
        dots: false,
        infinite: true,
        speed: 700,
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
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },

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

    window.addEventListener('click', function (e) {
        if (window.innerWidth > 992) {
            if ($('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        }

    })

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

    });

    /**
     *  Remove belopw code from every page : vicky
     */

    // $('.mega-menu h4').click(function () {
    //     // $(this).siblings('ul').slideDown();
    //     if ($(this).parent().hasClass('active')) {
    //         $(this).parent().removeClass('active')
    //     } else {
    //         $(this).parent().addClass('active');
    //     }
    //     $(this).parent().siblings().removeClass('active');
    // });

    // $('.toggler-mega').click(function () {
    //     if ($(this).hasClass('active')) {
    //         $(this).removeClass('active')
    //         $('.mega-menu').slideUp();
    //     } else {
    //         $(this).addClass('active');
    //         $('.mega-menu').slideDown();
    //     }
    //
    // })
    // $('.mega-menu-parent > h4').click(function () {
    //     var bodyColor = $('.drop-downs').attr("style");
    //     // console.log(bodyColor)
    //     if (bodyColor === 'display: block;') {
    //         $('.drop-downs').slideUp(200);
    //         $('.mega-menu-item').removeClass('active');
    //         // $('.toggler-mega').removeClass('active')
    //         return;
    //     }
    //     $('.drop-downs').slideDown(200);
    //
    // })
    // $('.mega-menu .col-md-2 > h4').click( function(){
    //     $(this).siblings('ul').slideDown();
    //     console.log(this)
    // })
</script>
