<?php

use App\Models\ManageSeo;

$data_record = ManageSeo::where('page_name', ManageSeo::SIGNAGE)->first();
$seo_meta = [
    "title" => $data_record->title ?? '',
    "description" => $data_record->description ?? '',
    "keywords" => $data_record->keyword ?? '',
    "schema" => $data_record->schema ?? '',
    "feature_image"=>"assets/customer/images/Emergency-Signages.png"
];
?>
@include('customer.layout2.header')

<!-- iCop Series Features Start -->
<!-- Banner sec -->
<section class="banner-sec-signage-signs py-4" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
    <div class="container">
        <div class="slider-content">
            <div class="imaged m-auto">
                <div class="city-wrap">
                    <h1 class=" text-white fw-normal mb-1 title-text-h2">EMERGENCY SIGNAGES</h1>
                    <h5 class=" text-white fw-normal mt-2 mb-2 ">Ensuring safe and secure passage while <br/> navigating
                        through tunnels</h5>
                    <a href="#inquiry"
                       class="btn-primary-rounded p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model">GET
                        QUOTE</a>
                </div>
                <div class="desktop-display">
                    <img src="{{asset('assets/customer/images/Emergency-Signages.png')}}" alt="alt"
                         class="d-block img-fluid h-75 product-feature-model-image" style="transform: scale(1.1);">
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Banner Sec End -->
<!-- banner-text-start -->
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div>
                    <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold"> Emergency Tunnel Signage: Lighting the Way to Safety</h2>
                    <p style="text-align: justify;">
                        Tunnel signage is a crucial component of tunnel safety since it assists vehicles in securely and
                        effectively navigating tunnels. Photonplay additionally serves to ensure a safe passage from
                        road and rail tunnels. To ensure a safe passage through the tunnel, it's essential to follow the
                        instructions on these signs.
                        <br/><br/>
                        When it comes to emergencies, every second counts. Our Emergency
                        Signages are intelligently crafted to provide clear and unmistakable guidance to individuals
                        navigating through tunnels in critical situations. The ultra-bright illumination ensures maximum
                        visibility, even in low light or smoke-filled conditions, making it easier for people to locate
                        the nearest exit points swiftly.
<br/><br/>
                        On the road and in tunnels, consider our emergency signs to be your safety heroes. Imagine
                        you're driving through a tunnel, and suddenly there's a problem like a fire. Our signs act as
                        friendly guides by lighting up and pointing you in the direction of the nearest exit, allowing
                        you to evacuate the premises quickly and safely.
                        <br/><br/>
                        And it's not only about tunnels; if something
                        unexpected occurs while you're walking through one, these emergency signs will direct you to
                        safety.

                        They also help the heroes, the emergency workers, find people who need help. Accidents and
                        injuries in hazardous locations, such as tunnels, can be decreased by installing emergency
                        signs. So, these signs aren't just signs; they're protectors. They monitor the tunnels and the
                        roadways to ensure that everyone is safe. They are an important part of a plan to keep us all
                        secure when circumstances are difficult.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-text-end -->
<!-- Our Product-start -->
<section class="our-product pt-lg-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <!-- <h6 class="fs-6 text-colorr">photonplay’s </h6> -->
                    <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold"> EMERGENCY SIGNAGES SERIES</h2>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="row">
                    @foreach ($pages as $page)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="text-start p-4 list-unsorted">
                                <div class="">
                                    <img src="{{asset('storage/'.$page->cover_image)}}" alt="{{$page->title}}"
                                         class="img-fluid">
                                </div>


                                <div class="my-3 listed-bacgunded px-4 py-4">
                                    <h5 class="fw-bold text-capitalize">{{strtoupper($page->title)}}</h5>
                                    <p>{{substr($page->description, 0, 60)}} ...</p>
                                    <a href="{{route('customer.signages.sub.page', $page->slug)}}"
                                       style="text-decoration: none;"><h6 class="text-colorr mb-0 mt-5">Know More
                                            >></h6></a>
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
<section class="application-section pt-0 pb-">
    <div class="container">
        <h2 class="fs-md-2 mt-0 mb-2 text-center text-uppercase">Special Applications</h2>
        <p class="text-center mb-4">
            Variable signs for special needs in work zones safety and speed calming applications
        </p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="application-item">
                    <img src="{{asset('assets/customer/images/Tunnels-Icons.png')}}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Tunnels </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Application end -->

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
                            1. What is an emergency signage?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A safety sign that says "Exit Signs" or "First Aid" is an example of an emergency
                            sign. Emergency signs also provide instructions to nearby emergency-related facilities. An
                            emergency sign provides guidance and directions to keep everyone safe in public and business
                            settings.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. What is emergency exit signage?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: In a public space (such as a building, airplane, or boat), an exit sign is a symbol
                            or brief text indicating the location of the closest emergency exit to be utilized in the
                            event of a fire or other emergency requiring a speedy evacuation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. What is the emergency directional signage displayed as?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The closest emergency evacuation route is indicated by emergency directional arrow
                            indicators.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. What is the importance of emergency signage?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: These signs must be used to aid people in leaving a dangerous situation since they
                            act as a source of knowledge, direction, and assurance along the fire exit route.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. What are the 3 Categories of Fire Evacuation?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer:
                            <ul>
                                <li>Safe Assembly</li>
                                <li>Escape Routes</li>
                                <li>Emergency Exit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. What color are fire exit signs?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Fire Exit Signs are typically green and white and include directional arrows to show
                            which way to go.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. What are three signage functions?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer:
                            <ul>
                                <li>Information: Signage conveys important information, such as directions,
                                    instructions, warnings, or identification, to help people navigate and understand
                                    their surroundings.
                                </li>
                                <li>Advertising: Signage promotes products, services, or events, acting as a visual
                                    advertisement to attract potential customers and generate interest.
                                </li>
                                <li>Wayfinding: Signage assists in guiding individuals to their desired destinations,
                                    ensuring efficient navigation within environments such as buildings, campuses, or
                                    public spaces.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEightA" aria-expanded="false"
                                aria-controls="collapseEightAx`blue ">
                            8. What is the importance of emergency and exit lighting?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Emergency lighting acts as a lifeline in difficult conditions created by this
                            complex environment. Its vital function is to guarantee the quick, efficient, and safe
                            evacuation of areas and buildings. This is true not just in cases where power outages leave
                            us in the dark, but even when natural lighting such as daylight is still present.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9. What size should fire exit signs be?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Ten inches
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10. What is code red?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: "Code Red" is a term often used to indicate a severe or critical situation that
                            requires immediate attention and action. It can refer to various emergencies, such as a
                            fire, smoke, a medical emergency, a security breach, or a high-level alert, in different
                            contexts.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- _____________________ourclint-last-start___________________ -->

<!-- _____________________ourclint-last-end___________________ -->


@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>

    $('.clint-wrapperr').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
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

    $('.clints-content').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
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
    })

    $('.clints-content-gallery').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
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
    })

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
</body>
</html>
