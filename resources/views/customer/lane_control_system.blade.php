<?php
$seo_meta = [
    "title" => "{$page->meta_title}",
    "description" => "{$page->meta_description}",
    "keywords" => "{$page->meta_keyword}",
    "schema" => "{$page->schema}" ?? ''
];
?>
@include('customer.layout2.header')

<!-- Banner sec -->
<section class="banner-sec-signage-signs py-4">
    <div class="container">
        <div class="slider-content ">

            <div class="imaged m-auto">
                <div class="city-wrap">
                    <h1 class=" text-white fw-normal mb-1 title-text-h2">{{$page->title}}</h1>
                    <p class=" text-white fw-normal mt-2 mb-2 ">Offering real-time monitoring and control of traffic
                        flow</p>
                    <a href="#inquiry"
                       class="btn-primary-rounded p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model">GET
                        QUOTE</a>
                </div>
                <div class="desktop-display">
                    <img src="{{asset('storage/'.$page->cover_image)}}" alt="alt"
                         class="d-block img-fluid h-75 product-feature-model-image" style="transform: scale(1.2);">
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
            <div class="row">
                <div class="col-md-6">
                    <div>
                        {{--                            <h4 class="text-capitalize">Description</h4>--}}
                        <p style="text-align: justify;">
                            {{$page->description}}
                        </p>
                        <div class="thumb-image">
                            <div class="row">
                                @forelse ($page->images as $image)
                                    <div class="col-md-4">

                                        <div class="thumb-image-item mb-3 ">
                                            <img src="{{asset('storage/'.$image->image)}}" alt="" class="img-fluid"
                                                 style="height: 200px;width: 200px;">
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
                <div class="col-md-6">
                    <div class="">
                        <h4>Specification</h4>
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
<!-- Feature -->
@include('customer.layout2.features_page')
<!-- Feature end -->


<!-- Application -->
<section class="application-section pt-4 pb-4">
    <div class="container">
        <h2 class="fs-md-2 mb-5 text-center">APPLICATION</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/Tunnels-Icons.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Tunnels - Lane Use and Control in tunnels </h4>
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
                <h4 class="text-white text-center text-capitalize">{{ucfirst($page->title)}} - Brochure</h4>
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

{{--    <section class="our-clints-last">--}}
{{--        <div class="mb-lg-5 text-center">--}}
{{--            <h2 class="fs-md-2 mt-3">GALLERY</h2>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="px-4">--}}
{{--                <div class="clints-content-gallery mb-0">--}}
{{--                    @foreach ($page->galleries as $gallery)--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="{{asset('storage/'.$gallery->image)}}" onclick="showModal('{{asset('storage/'.$gallery->image)}}')" class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- _____________________ourclint-last-end___________________ -->

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
                            1.	What is a lane control sign?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The function of lane control signs is to permit or prohibit the use of specific lanes on roadways or highways. These signs are typically used for reversible lane control, according to the Manual on Uniform Traffic Control Devices (MUTCD), though they can also be seen in nonreversible freeway lane situations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	Why are lane signals used?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: They are often placed at consistent intervals to continually remind drivers about lane conditions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	What is the meaning of 4 lanes?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: It implies the presence of two lanes for traffic in each direction.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What are the lane-use signs at an intersection?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Lane use control signs are rectangular, black, and white signs that indicate if turning motions are necessary or unusual turning actions are allowed from certain lanes at an intersection.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	How does lane control work?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: In lane-keeping technology's steering takeover scenario, the car is controlled by its electronic steering system. In some vehicles, lane-keep assist makes use of the antilock brakes. It pulls the car back towards the lane center by giving brake pressure to a particular wheel.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	What color are destination signs?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Green traffic signs denote authorized movements as well as directions or instructions, such as the proximity of upcoming destinations to highway or tunnel entrances and exits.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	What is the meaning of lane end?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Lane Ends signs are frequently used to alert drivers to the termination of a lane from the right or left side of the road downstream of their direction of travel.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEightA" aria-expanded="false"
                                aria-controls="collapseEightAx`blue ">
                            8.	What is the meaning of a double, solid yellow line?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A double, solid yellow line marks the center of a two-lane road where traffic moves in both directions. Crossing or passing over this line is not allowed at any time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9.	Is lane-driving safe?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Yes, when following traffic rules and staying attentive.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10.	What is the full form of "LANE"?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The term LANE refers to Local Area Network Emulation.
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

    $('.toggler-mega').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $('.mega-menu').slideUp();
        } else {
            $(this).addClass('active');
            $('.mega-menu').slideDown();
        }

    })
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
