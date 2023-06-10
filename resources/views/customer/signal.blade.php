<?php
$seo_meta=[
    "title"=>"SIGNAGES",
    "description"=>"Tunnel signage is a crucial component of tunnel safety since it assists vehicles in securely and effectively navigating tunnels.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
<body>

    <!-- iCop Series Features Start -->
    <!-- Banner sec -->
    <section class="banner-sec-smart-city py-4" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
        <div class="container">
            <div class="slider-content">
{{--                <div class="image">--}}
{{--                    <img src="" alt="alt" class="d-block mx-auto img-fluid">--}}
{{--                </div>--}}
{{--                <div class="text-center">--}}
{{--                    <h4 class="text-white">SIGNAGES</h4>--}}
{{--                    <p class="text-white">Highly visible and innovative, creating instant awareness of local speed limit</p>--}}
{{--                    <a  href="#inquiry" class="btn btn-primary rounded-0 ">GET QUOTE</a>--}}
{{--                </div>--}}

                <div class="imaged m-auto">
                    <div class="city-wrap">
                        <h2 class=" text-white fw-normal mb-1 title-text-h2">SIGNAGES</h2>
                        <h5 class=" text-white fw-normal mt-2 mb-2 ">Highly visible and innovative, creating instant awareness of <br/>local speed limit</h5>
                        <a  href="#inquiry" class="btn-primary-rounded p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model" >GET QUOTE</a>
                    </div>
                    <img src="{{asset('assets/customer/images/Variable_Message_Signs.png')}}"  alt="alt" class="d-block img-fluid h-75 product-feature-model-image" >
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Sec End -->
    <!-- banner-text-start -->
    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div>
                        <p>
                            Tunnel signage is a crucial component of tunnel safety since it assists vehicles in securely
                            and effectively navigating tunnels. Photonplay additionally serves to ensure a safe passage
                            from road and rail tunnels. To ensure a safe passage through the tunnel, it's essential to
                            follow the instructions on these signs.
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
                        <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold">SIGNAGES Series</h2>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($pages as $page)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="text-start p-4 list-unsorted">
                                    <div class="roundedd-imageses">
                                        <img src="{{asset('storage/'.$page->cover_image)}}" alt="{{$page->title}}"
                                             class="img-fluid">
                                    </div>



                                    <div class="my-3 listed-bacgunded px-4 py-4">
                                        <h5 class="fw-bold text-capitalize">{{$page->title}}</h5>
                                        <p>{{substr($page->description, 0, 60)}} ...</p>
                                        <a href="{{route('customer.signages.sub.page', $page->slug)}}" style="text-decoration: none;"><h6 class="text-colorr mb-0 mt-5">Know More >></h6></a>
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
                <!-- <div class="col-md-3">
                    <div class="application-item">
                        <img src="./assets/images/Highway-Icons.png" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Highways </h4>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3">
                    <div class="application-item">
                        <img src="{{asset('assets/customer/images/Tunnels-Icons.png')}}" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Tunnels </h4>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="application-item">
                        <img src="./assets/images/Smart-cities-icon.png" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Smart Cities </h4>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="application-item">
                        <img src="./assets/images/Transits-Icons.png" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Transits </h4>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Application end -->

    <!-- contact form -->
    @include('customer.layout2.get_in_touch')
    <!-- Contact form end -->
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
