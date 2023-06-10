<!doctype html>
<html>
<head>
    @php
        $currency = '$';
        $cartPrice = 0;
        if(!Session::get('user')){
            $cart = \DB::table('carts')->where('session_id', Session::getId())->get();
                foreach($cart as $i){
                    $cartPrice += $i->price * $i->quantity;
                }
        }else {
            $cart = \DB::table('carts')->where('user_id', Session::get('user')->id)->get();
                foreach($cart as $i){
                    $cartPrice += $i->price * $i->quantity;
                }
        }
    @endphp

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link href="/assets/customer/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick-theme.css"/>
    <link rel="stylesheet" href="/assets/customer/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{--            Start meta--}}
    <x-Customer.MetaSeoTag :seodata="$seo_meta??0"/>
    {{--        End    Start meta--}}

    <style>
        .product-pvms-icop:hover {
            transform: scale(2);
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
<a href="#" id="scrollToTopButton" title="Scroll to Top" style="
      position: fixed;
      bottom: 70px;
      right: 20px;
      z-index: 99;">
    <img src="{{asset('/assets/images/arrow-up.png')}}" height="50px;"/>
</a>
<div>
    <header class="header bg-white py-3 sticky-top">
        <nav class="navbar navbar-expand-lg custome-mega-amenu">
            <div class="container">
                <a class="navbar-brand" href="{{route('customer.homePage')}}"><img
                        src="{{asset('assets\customer\images\logo-dark.png')}}" alt="Photon Plays System"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse header-font navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5 mx-4">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{Request::is('/') ? 'active':''}}"
                               href="{{route('customer.homePage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  {{Request::is('about-us') ? 'active':''}}"
                               href="{{route('customer.about.us')}}">COMPANY</a>
                        </li>
                        <!-- hjgjhkl -->

                        <li class="nav-item dropdown position-relative solution-pos">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                SOLUTIONS <img src="{{asset('assets\customer\images\Down-Arrow.png')}}" alt="Not Found"
                                               class="ms-1 mb-">
                            </a>

                            <ul class="dropdown-menu mega-menu">
                                <li class="d-flex justify-content-between flex-wrap p-3">

                                    <div class="col-md-3">
                                        <h4><a class="dropdown-item px-0 text-uppercase"
                                               href="{{route('customer.solution.highway')}}">Highways</a></h4>
                                        <ul>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                                   href="{{route('customer.variable.message')}}">Variable
                                                    Message
                                                    Sign (VMS)</a>
                                            </li>
                                            <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2 text-wrap"
                                                   href="{{route('customer.variable.speed.limit')}}">Variable
                                                    Speed Limit
                                                    Sign
                                                    (VSLS)</a></li>
                                            <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                                   href="{{route('customer.portable.variable.message.signs')}}">Portable
                                                    Variable
                                                    Message Sign
                                                    (PVMS) </a></li>
                                            <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                                   href="#">Vehicle
                                                    Actuated
                                                    Speed Display
                                                    (VASD) </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <h4><a class="dropdown-item px-0 text-uppercase"
                                                   href="{{route('customer.solution.city')}}">Smart
                                                    Cities</a>
                                            </h4>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <ul>
                                                <li><a href="{{route('customer.radar.speed.signs')}}"
                                                       class="text-wrap dropdown-item px-0 text-uppercase mb-2">Radar
                                                        Speed Sign </a></li>
                                                <li><a href="{{route('customer.portable.variable.message.signs')}}"
                                                       class="text-wrap dropdown-item px-0 text-uppercase mb-2">Portable
                                                        Variable Message Sign (PVMS)</a></li>
                                                <li><a href="{{route('customer.variable.message')}}"
                                                       class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                        Message Sign (VMS) </a></li>
                                                <li><a href="#"
                                                       class="text-wrap dropdown-item px-0 text-uppercase mb-2">LED
                                                        Tickers </a></li>

                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <h4><a class="dropdown-item px-0 text-uppercase"
                                                   href="{{route('customer.solution.tunnel')}}">Tunnels</a>
                                            </h4>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="{{route('customer.variable.message')}}"
                                                   class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                    Message
                                                    Sign (VMS)</a>
                                            </li>
                                            <li><a href="{{route('customer.variable.speed.limit')}}"
                                                   class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                    Speed
                                                    Limit Sign
                                                    (VSLS)</a></li>
                                            <!-- <li><a href="#" class="text-wrap dropdown-item px-0 text-uppercase mb-2">Way
                                                    Finders
                                                </a>
                                            </li> -->
                                            <li><a href="{{route('customer.signal')}}"
                                                   class="text-wrap dropdown-item px-0 text-uppercase text-wrap mb-2">Signages
                                                    – Emergency
                                                    Exit Sign ,
                                                    Emergency Telephone Sign</a></li>
                                            <li><a href="{{route('customer.lane.control.system')}}"
                                                   class="text-wrap dropdown-item px-0 text-uppercase mb-2">Lane
                                                    Control
                                                    System (LCS) </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <h4><a class="dropdown-item px-0 text-uppercase"
                                                   href="{{route('customer.solution.transit')}}">TRANSIT</a>
                                            </h4>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="{{route('customer.pasenger.information.display.system')}}"
                                                   class="text-wrap dropdown-item px-0 text-uppercase mb-2">Passenger
                                                    Information Display
                                                    System <br> (PIDS) </a></li>
                                            <li><a href="#" class="text-wrap dropdown-item px-0 text-uppercase mb-2">Bus
                                                    Signs</a></li>
                                            <li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <!-- end -->
                        <!-- <div class="position-absolute down-image">

                            </div> -->
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{Request::is('blog') ? 'active':''}}"
                               href="{{route('customer.blog')}}">NEWS & EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{Request::is('contact-us') ? 'active':''}}"
                               href="{{route('customer.contact.us')}}">CONTACT</a>
                        </li>
                    </ul>
                    <form class=" d-flex mt-lg-0 mt-4 align-items-center" role="search" method="get"
                          action="{{route('customer.search_photon_things')}}">

                        <div class="position-relative search-heading">
                            <input class="form-control me-2 shadow-none border" name="search" type="search"
                                   placeholder="Search" aria-label="Search" value="{{$query??""}}"/>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                {{-- <img src={SearchBg.src} alt="Not Found" /> --}}
                                <img src="{{asset('assets\customer\images\search.png')}}" alt="Not Found"
                                     class="img-fluid me-2" width="18px"
                                     height="18px">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="ul-mega">
            <!-- <div class="hamburger"> -->
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">

                            <a class="mega-brand" href="{{route('customer.homePage')}}"><img
                                    src="{{asset('assets\customer\images\logo-dark.png')}}" alt="Not Found"></a>
                            <div class="toggler-mega "><img src="{{asset('assets\customer\images\icons8-menu-50.png')}}"
                                                            alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <ul class="">
                <li>
                    <!-- About -->
                    <div class="mega-menu mt-4">
                        <div class="mega-menu-items">
                            <a href="{{route('customer.homePage')}}" class="text-decoration-none text-dark"><h4
                                    class="text-uppercase">Home</h4></a>
                        </div>
                        <div class="mega-menu-items">
                            <a href="{{route('customer.about.us')}}" class="text-decoration-none text-dark"><h4
                                    class="text-uppercase">Company</h4></a>
                        </div>
                        <div class="mega-menu-parent">
                            <!-- <ul class="ps-0"><li class="text-uppercase">Company</li></ul> -->
                            <h4>SOLUTIONS</h4>
                            <div class="drop-downs">
                                <div class="mega-menu-item">
                                    <h4>Highways</h4>
                                    <ul>
                                        <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                               href="{{route('customer.variable.message')}}">Variable
                                                Message
                                                Sign (VMS)</a>
                                        </li>
                                        <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2 text-wrap"
                                               href="{{route('customer.variable.speed.limit')}}">Variable
                                                Speed Limit
                                                Sign
                                                (VSLS)</a></li>
                                        <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                               href="{{route('customer.portable.variable.message.signs')}}">Portable
                                                Variable
                                                Message Sign
                                                (PVMS) </a></li>
                                        <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="#">Vehicle
                                                Actuated
                                                Speed Display
                                                (VASD) </a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-item">
                                    <h4 class="text-uppercase">Smart Cities</h4>
                                    <ul>
                                        <li><a href="{{route('customer.radar.speed.signs')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Radar
                                                Speed Sign </a></li>
                                        <li><a href="{{route('customer.portable.variable.message.signs')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Portable
                                                Variable Message Sign (PVMS)</a></li>
                                        <li><a href="{{route('customer.variable.message')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                Message Sign (VMS) </a></li>
                                        <li><a href="#" class="text-wrap dropdown-item px-0 text-uppercase mb-2">LED
                                                Tickers </a></li>

                                    </ul>
                                </div>
                                <div class="mega-menu-item">
                                    <h4 class="text-uppercase">Tunnels</h4>
                                    <ul>
                                        <li><a href="{{route('customer.variable.message')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                Message
                                                Sign (VMS)</a>
                                        </li>
                                        <li><a href="{{route('customer.variable.speed.limit')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Variable
                                                Speed
                                                Limit Sign
                                                (VSLS)</a></li>
                                        <li><a href="{{route('customer.signal')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase text-wrap mb-2">Signages
                                                – Emergency
                                                Exit Sign ,
                                                Emergency Telephone Sign</a></li>
                                        <li><a href="{{route('customer.lane.control.system')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Lane
                                                Control
                                                System (LCS) </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-item">
                                    <h4 class="text-uppercase">TRANSIT</h4>
                                    <ul>
                                        <li><a href="{{route('customer.pasenger.information.display.system')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Passenger
                                                Information Display
                                                System <br> (PIDS) </a></li>
                                        <li><a href="#" class="text-wrap dropdown-item px-0 text-uppercase mb-2">Bus
                                                Signs</a></li>
                                        <li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mega-menu-items">
                            <!-- <ul><li>NEWS & EVENTS</li></ul> -->

                            <a class="nav-link text-uppercase" href="{{route('customer.blog')}}"><h4>NEWS & EVENTS</h4>
                            </a>
                        </div>
                        <div class="mega-menu-items">
                            <a class="nav-link text-uppercase" href="{{route('customer.contact.us')}}"><h4>CONTACT</h4>
                            </a>
                        </div>

                        <form class=" d-flex mt-lg-0 mt-4 align-items-center" role="search">


                            <div class="position-relative search-heading">
                                <input class="form-control me-2 shadow-none border" type="search" placeholder="Search"
                                       aria-label="Search"/>
                                <div class="position-absolute top-50 end-0 translate-middle">
                                    <img src="{{asset('assets\customer\images\search.png')}}" alt="Search"
                                         class="img-fluid me-2" width="18px"
                                         height="18px">
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- </html> -->
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

        //
        // $('.key-slider').slick({
        //     dots: true,
        //     infinite: false,
        //     speed: 300,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     arrows: false,
        //
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


        $('.clints-content').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
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
