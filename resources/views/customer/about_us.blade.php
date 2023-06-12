<?php

$seo_meta=[
    "title"=>"About us",
    "description"=>"PhotonPlay is a financially independent, global technology company established in 2006 with wholly-owned subsidiaries in the USA, Norway, and Australia.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];

    ?>
@include('customer.layout2.header')
    <!-- header-end -->
    <!-- banner-text-start -->
    <section class="pt-0 pb-sm-4 pb-lg-5">
        <div class="banner">
            <div class="about-wrapper" >
                <div class="d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                       <div >
                           <h1 class="text-white text-center title-text-h1"   > About Us</h1>
                           <h6 class=" text-white text-center" >Driving Smarter Transportation Solutions for 16+ Years</h6>
                       </div>
                </div>

            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- enddd -->
    <!-- undefeated-section-start -->
    <section class="undefeated-wrapper pt-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 pe-lg-0">
                            <div class="about-undeafeted text-dark text-center">
{{--                                <h4 class="text-uppercase text-dark mb-4">About us </h4>--}}

                                <p class="mb-4">
                                    At PhotonPlay, we are a family-owned Indian company that has been delivering intelligent transportation systems (ITS) to clients worldwide for over 16 years. Our focus on creating safer, more efficient, and sustainable mobility solutions has earned us a reputation as a trusted partner for system integrators, government authorities, OEMs, and corporations across 30+ countries.


                                </p>
                                <p class="mb-5">
                                    We take pride in our expertise, innovation, and commitment to excellence in every aspect of our work. From the initial idea to implementation, we strive to provide unparalleled service to our clients. Our passion for smarter transportation solutions has enabled us to stay at the forefront of our industry for 16+ years, and we look forward to continuing to drive innovation and create value for our clients for years to come.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- undefeated-section-send -->

    <!-- ______________Our Solution Start-----______________ -->
    <section class="team-members">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2 mt-3">PHOTONPLAY AT A GLANCE</h2>
                        <p class="text-mutedd"> PhotonPlay is a financially independent, global technology company established in 2006 with wholly-owned subsidiaries in the USA, Norway, and Australia. With a group revenue of over $82 million, we deliver cutting-edge intelligent transportation systems worldwide.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                            <div class="members-profile h-100">
                                <div class="p-4 ">
                                    <h1 class="text-capitalize text-dark">1K+</h1>
                                    <p class="mb-0 text-center">
                                        Global Expertise with 1K+ Successful Projects
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0 gap-5">
                            <div class="members-profile h-100">
                                <div class="p-4 ">
                                    <h1 class="text-capitalize text-dark">17+</h1>
                                    <p class="mb-0 text-center">
                                        Executing Excellence Worldwide for 17+ Years and Counting
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                            <div class="members-profile h-100">
                                <div class="p-4 ">
                                    <h1 class="text-capitalize text-dark">120+</h1>
                                    <p class="mb-0 text-center">
                                        120+ Experts, One Mission: To Deliver Outstanding Results For You
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                            <div class="members-profile h-100">
                                <div class="p-4 ">

                                    <h1 class="text-capitalize text-dark">50+
                                    </h1>
                                    <p class="mb-0 text-center">
                                        Endless Choices, 50+ Products to Explore
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- market-segmet-start -->
    <section class="segmet-market pb-4">
{{--start--}}
        <div class="container">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">MARKET SEGMENTS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <a href="{{route('customer.solution.highway')}}" style="text-decoration: none;">
                        <div class="members-profile h-100">
                            <div class="p-4 ">
                                <img class="profile-placeholderss mb-5" src="/assets/customer/images/Highway-Icons.png" alt="Not Found">
                                <h6 class="text-capitalize">Highways</h6>
                                <p class="mb-0 text-center"> Drive confidently on the highways with our advanced ITS solutions designed to improve traffic flow and enhance road safety.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0 gap-5">
                    <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                        <div class="members-profile h-100">
                            <div class="p-4 ">
                                <img class="profile-placeholderss mb-5" src="/assets/customer/images/Tunnels-Icons.png" alt="Not Found">
                                <h6 class="text-capitalize">Tunnels</h6>
                                <p class="mb-0 text-center"> Navigating tunnels becomes easier and safer with our intelligent ITS solutions that offer comprehensive monitoring, ventilation control, and incident management.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <a href="{{route('customer.solution.city')}}" style="text-decoration: none;">
                        <div class="members-profile h-100">
                            <div class="p-4 ">
                                <img class="profile-placeholderss mb-5" src="/assets/customer/images/Smart-cities-icon.png"
                                     alt="Not Found">
                                <h6 class="text-capitalize">Smart Cities</h6>
                                <p class="mb-0 text-center"> From intelligent traffic management to efficient public transportation, we provide innovative solutions that improve urban mobility and reduce environmental impacts.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                        <div class="members-profile h-100">
                            <div class="p-4 ">
                                <img class="profile-placeholderss mb-5" src="/assets/customer/images/Transits-Icons.png" alt="Not Found">
                                <h6 class="text-capitalize">Transits</h6>
                                <p class="mb-0 text-center"> Our ITS solutions for transit authorities offer real-time information to commuters, improving the overall transit experience.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

{{--        end--}}


{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-11">--}}
{{--                    <div class="text-center mb-lg-5">--}}
{{--                        <h2 class="fs-md-2 mt-3">MARKET SEGMENTS</h2>--}}
{{--                        <div class="light-about d-flex justify-content-between py-4">--}}
{{--                            <div class="">--}}
{{--                                <img class="mb-4" src="./assets/images/about-light.png" alt="Not Found">--}}
{{--                                <p>PUBLIC TRANSPORT</p>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <img class="mb-4" src="./assets/images/about-light.png" alt="Not Found">--}}
{{--                                <p>PUBLIC TRANSPORT</p>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <img class="mb-4" src="./assets/images/about-light.png" alt="Not Found">--}}
{{--                                <p>PUBLIC TRANSPORT</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="text-mutedd px-">--}}
{{--                            PHOTONPLAY is developing and delivering technology with tangible benefits--}}
{{--                            to public transport ecosystem is strategically positioned to provide solutions to connect--}}
{{--                            passengers/drivers to crucial information while contributing to the operational objectives--}}
{{--                            of a safe road network around the globe. Supporting governments, transit authorities, system--}}
{{--                            integrators as well as business around the globe, PHOTONPLAY is developing and delivering--}}
{{--                            technology with tangible benefits to public transport ecosystem.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <{{--div class="banner">
            <div class="about-segmet">

            </div>
        </div>--}}
    </section>

<!--___________________ key-project-end_________________ -->
    <x-Customer.KeyProject/>
<!--___________________ key-project-end_________________ -->


<!-- _____________________Our clint Says start______________________ -->

@include('customer.layout2.client_testimonials')

<!-- _____________________Our clint Says End______________________ -->
<!-- _____________________latest News start______________________ -->
<section class="latest-wrapper pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <h2 class="fs-md-2 mt-3">Latest News</h2>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <p class="text-mutedd">
                            "Stay Up-to-Date on the Latest Innovations and Industry News in Transportation with Our Latest News Section.
                            <br>
                            Check back regularly for the latest updates and insights!"
                        </p>
                        <a href="{{route('customer.blog')}}" class="btn btn-outline rounded-2">Load More</a>
                    </div>
                </div>
            </div>

            @foreach($blogs as $blog)
                <div class="col-lg-4">
                    <div class="inner-cqategory mb-lg-0 mb-4">
                        <div class="">
                            <a href="{{route("customer.blog_show",$blog->slug)}}" > <img src="{{asset("storage/".$blog->image)}}" alt="" class="mb-4 category-image img-fluid w-100"> </a>
                        </div>
                        <div class="p-4">
                            <p class="btn-light">{{$blog->category}}</p>
                            <a href="{{route("customer.blog_show",$blog->slug)}}"  class="text-decoration-none">  <p class="dollor-seat"> {{$blog->title}}
                                </p>
                            </a>
                            <p>
                                {{$blog->description}}  <a href="{{route("customer.blog_show",$blog->slug)}}" >Read More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- _____________________latest News end______________________ -->
<!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')

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
<script>
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
    })
    window.addEventListener('click', function (e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>
