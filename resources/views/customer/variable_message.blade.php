<?php
$seo_meta=[
    "title"=>"Variable Message Signs (VMS)",
    "description"=>"Photonplay’s outperforming VMS signs are highly reliable and rugged components of traffic management ecosystem for motorways, tunnels and urban traffic management systems.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>

@include('customer.layout2.header')

<body>

    <!-- iCop Series Features Start -->
    <!-- Banner sec -->
    <section class="banner-sec-smart-city py-5" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
        <div class="container" >
            <div class="slider-content">

                <div class="imaged m-auto">
                    <div class="city-wrap flex-wrap">
                        <h2 class=" text-white fw-normal mb-1 title-text-h2">Variable Message Signs (VMS)</h2>
                        <h5 class=" text-white fw-normal mt-2 mb-2 ">Highly visible and innovative, creating instant awareness of <br/>local speed limit</h5>
                        <a  href="#inquiry" class="btn-primary-rounded  p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model" >GET QUOTE</a>
                    </div>
                    <div class=" m-auto desktop-display " >
                        <img src="{{ asset('assets/customer/images/vms_land.webp') }}" alt="alt"
                             class="d-block mx-auto img-fluid product-feature-model-image" >
                    </div>
{{--                    <img src="{{asset('storage/'.$page->cover_image)}}"  alt="alt" class="d-block img-fluid h-75 " >--}}
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
                    <h2 class="text-center mb-2"> Variable Message Signs (VMS) </h2>
                    <div class="p-4 m-2">
                        <p>
                            Viewed by millions of eyes every day, guiding way to millions of motorist to drive them back
                            home safely every day, Photonplay is contributing its part to the humanity in it own way by
                            enhanced road and traffic safety.
                        </p>
                        <p>
                            The product range starting from Variable message sign solutions for traffic guidance and
                            information purposes. Photonplay’s outperforming VMS signs are highly reliable and rugged
                            components of traffic management ecosystem for motorways, tunnels and urban traffic
                            management systems.
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
                        <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold">VMS Series</h2>
                    </div>
                </div>

                <div class="col-lg-10">
                    <div class="row">
                        @foreach ($page as $i)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="text-start p-4 list-unsorted">
                                    <div class="roundedd-imagese">
                                        <img src="{{asset('storage/'.$i->cover_image)}}" alt="Not Found"
                                            class="img-fluid">
                                    </div>
                                    <div class="my-3 list-bacgunded px-4 py-4">
                                        <h5 class="fw-bold text-capitalize">{{ $i->title }}</h5>
                                        <p>{{ substr($i->description, 0, 60) }} ... </p>
                                        <a href="{{route('customer.vms.sub.page', $i->slug)}}" style="text-decoration: none;">
                                            <a href="{{route('customer.vms.sub.page', $i->slug)}}" style="text-decoration: none;"><h6 class="text-colorr">Know More >></h6></a>
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
    <section class="application-section">
        <div class="container">
            <h2 class="fs-md-2 mt-0 mb-2 text-center text-uppercase">Special Applications</h2>
            <p class="text-center mb-4">Variable signs for special needs in work zones safety and speed calming
                applications
            </p>
            <div class="row">
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
                <div class="col-md-3">
                    <div class="application-item">
                        <img src="{{ asset('assets/customer/images/Transits-Icons.png') }}" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Transits </h4>
                        </div>
                    </div>
                </div>
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
    <!-- _____________________ourclint-last-start___________________ -->
    @include('customer.layout2.our_clients')
    <!-- _____________________ourclint-last-end___________________ -->

    @include('customer.layout2.footer')
    <script src="/assets/customer/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/customer/js/jquery.js"></script>
    <script src="/assets/customer/slick/slick.min.js"></script>
    <script>
        $(document ).ready( function(){
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
                autoplay:true,
                autoplaySpeed: 3000,
                fade:true,
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
        })
        // window.addEventListener('click', function (e) {
        //     if ($('.navbar-collapse').hasClass('show')) {
        //         $('.navbar-toggler').click();
        //     }
        // })
    </script>

    <script>
        // Hover attribute
        $('.dropdown .dropdown-toggle').mouseenter(function() {
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
        $('.dropdown-menu').mouseleave(function() {
            if (window.innerWidth > 991) {
                $(this).removeAttr('data-bs-popper');
                $(this).siblings('.nav-link ').removeClass('show');
                $(this).removeClass('show');
                $(this).siblings('.nav-link').attr({
                    'aria-expanded': false
                });
            }

        })
        $('.mega-menu h4').click(function() {
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
        $('.mega-menu-parent > h4').click(function() {
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
