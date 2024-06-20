<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
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

        $counties = DB::table('all_country_pincodes')->select('id','country')->get();

    @endphp
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--            Start meta--}}
    <x-Customer.MetaSeoTag :seodata="$seo_meta??0"/>
    {{--        End    Start meta--}}

    <script src ="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick-theme.css"/>
    <link rel="stylesheet" href="/assets/customer/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css">


{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">--}}
    <style>
        .product-pvms-icop:hover {
            transform: scale(2);
        }

        .content_bootom_sticky_footer {
            padding: 20px;
            height: 1500px; /* Just to make the page scrollable */
        }

        .sticky-bottom_bootom_sticky_footer {
            z-index: 100;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #036eb1;
            color: #fff;
            text-align: center;
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.5);
        }
    </style>


{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" >
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js" ></script>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NJZBCGR');</script>
    <!-- End Google Tag Manager -->
    @if (!empty($schema))
        <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "BlogPosting",
          "@id": "{{$schema['page_url']}}",
          "inLanguage": "en-US",
          "mainEntityOfPage": "{{$schema['page_url']   }}",
          "headline": "{{$schema['headline']}}",
          "description": "{{$schema['meta_description']}}",
          "articleBody": "{{ $schema['full_blog']}}",
          "keywords": "{{$schema['keywords']}}",
          "name": "{{$schema['headline']}}",
          "url": "{{\Illuminate\Support\Facades\URL::full()}}",
          "datePublished": "{{$schema['datePublished']}}",
          "dateModified": "{{$schema['datePublished']}}",
          "publisher": {
            "@type": "Organization",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.photonplay.com/assets/customer/images/logo-dark.png",
              "width": "512",
              "height": "512"
            },
            "name": "{{$schema['author']['name']}}"
          },
          "image": "{{$schema['image']['url']}}",
          "author": {
            "@type": "{{$schema['author']['@type']}}",
            "name": "{{$schema['author']['name']}}",
            "url": "https://www.photonplay.com/company",
            "image": {
              "@type": "ImageObject",
              "url": "https://www.photonplay.com/assets/customer/images/logo-dark.png",
              "height": "512",
              "width": "512"
            }
          }

        }
</script>
    @endif

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJZBCGR" height="0" width="0"
                  style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a href="#" id="scrollToTopButton" title="Scroll to Top" style="
      position: fixed;
      bottom: 70px;
      right: 20px;
      z-index: 99;">
    <img src="{{asset('/assets/images/arrow-up.png')}}" height="50px;"/>
</a>
<div>
    <header class="header bg-white py-3 sticky-top">
        <div class="desktop_nav" style="display: none">
            <nav class="navbar navbar-expand-lg ">
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
                            <li class="nav-item ">
                                <a class="nav-link text-uppercase {{Request::is('/') ? 'active':''}}"
                                href="{{route('customer.homePage')}}">Home</a>
                            </li>
                            <li class="nav-item ">
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
                                    <li class="d-flex justify-content-between flex-wrap p-3 mega-menu-list">

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
                                                    href="{{route('customer.vehicle_actuated_speed_displays')}}">Vehicle
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
                                                    <li><a href="{{route('customer.led_ticker_tape')}}"
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
                                                    class="text-wrap dropdown-item px-0 text-uppercase text-wrap mb-2"> Emergency Signages</a></li>
                                                <li><a href="{{route('customer.lane.control.system')}}"
                                                    class="text-wrap dropdown-item px-0 text-uppercase mb-2">Lane
                                                        Control
                                                        Sign (LCS) </a>
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
                                                        Sign <br> (PIDS) </a></li>
                                                <li><a href="{{route('customer.bus_signs')}}" class="text-wrap dropdown-item px-0 text-uppercase mb-2">Bus Destination Signs</a></li>
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
                                <a class="nav-link text-uppercase text-nowrap {{Request::is('blog') ? 'active':''}}"
                                href="{{route('customer.blog')}}" >NEWS & EVENTS</a>
                            </li>
                            <li class="nav-item ui_hide">
                                <a class="nav-link text-uppercase {{Request::is('contact-us') ? 'active':''}}"
                                href="{{route('customer.contact.us')}}">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-sm btn-primary mobile_vendor" style="padding: 0px 25px;    border-radius: 51px; display:none; " id="openModalButton" data-backdrop="static" data-keyboard="false">  Become a Vendor  </button>
                            </li>
                            <li>
                                <button  class="btn btn-sm btn-primary desktop_vendor ui_hide" style="padding: 0px 25px;    border-radius: 51px; display:none; max-width: 192px;max-height: 36px; overflow:hidden; width: 192px;" id="openModalButton">Become a Vendor</button>
                            </li>
                        </ul>
                    </div>
                    <form class=" d-flex mt-lg-0 mt-4 align-items-center" role="search" method="get"
                action="{{route('customer.search_photon_things')}}">

                    <div class="position-relative search-heading">
                        <input class="form-control me-2 shadow-none border" name="search" type="search" id="search_id"
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
                
                

            </nav>

        </div>

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
                                        <li><a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="{{route('customer.vehicle_actuated_speed_displays')}}">Vehicle
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
                                        <li><a href="{{route('customer.led_ticker_tape')}}" class="text-wrap dropdown-item px-0 text-uppercase mb-2">LED
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
                                               class="text-wrap dropdown-item px-0 text-uppercase text-wrap mb-2"> Emergency Signages</a></li>
                                        <li><a href="{{route('customer.lane.control.system')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Lane
                                                Control
                                                Sign (LCS) </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-item">
                                    <h4 class="text-uppercase">TRANSIT</h4>
                                    <ul>
                                        <li><a href="{{route('customer.pasenger.information.display.system')}}"
                                               class="text-wrap dropdown-item px-0 text-uppercase mb-2">Passenger
                                                Information Display
                                                Sign <br> (PIDS) </a></li>
                                        <li><a href="{{route('customer.bus_signs')}}" class="text-wrap dropdown-item px-0 text-uppercase mb-2">Bus
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
                        <div class="mega-menu-items">
                            <button class="btn btn-sm btn-primary mobile_vendor" style="padding: 0px 15px; border-radius: 51px;margin-right: 10px;" id="openModalButton"> Become a vendor</button>
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

    <form id="vendorForm">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="map-messanger p-3 my-2">
                    <div class="modal-content" style="display: contents">
                        <div class="modal-header">
                            <h5>Vendor Application Form</h5>
                            <button type="button" class="btn-close" aria-label="Close"  data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-between flex-column flex-md-row">
                                <div class="me-1 mb-2 mb-md-0">
                                    <span class="d-block text-secondary mb-1">Name</span>
                                    <input class="form-control shadow-none" type="text" id="name_b" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="ms-1">
                                    <span class="d-block text-secondary mb-1">Email Address</span>
                                    <input name="email" type="text" placeholder="Your Email" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-column flex-md-row my-4">
                                <div class="me-1 mb-2 mb-md-0">
                                    <span class="d-block text-secondary mb-1">Phone Number</span>
                                    <b><input name="phone_number" type="number" placeholder="Your phone number" class="form-control shadow-none" required>
                                    </b>
                                </div>
                                <div class="ms-1">
                                    <span class="d-block text-secondary mb-1" >Company Name</span>
                                    <b><input name="company_name" type="text" placeholder="Your compnay name" class="form-control shadow-none" required>
                                    </b>
                                </div>

                            </div>
                            <div class="">
                                <span class="d-block text-secondary mb-2">Country</span>
                                <select id="country_select" class="form-control" name="country" >
                                    <option value="" selected disabled>Choose Country</option>
                                    @foreach($counties ?? [] as $country)
                                        <option value="{{$country->country}}">{{$country->country}}</option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="">
                                <span class="d-block text-secondary mb-1" >Message</span>
                                        <textarea name="message" rows="4" placeholder="Enter message" class="form-control shadow-none rounded-0 mb-4" aria-describedby="textHelpBlock" required></textarea>
                                        </div>
                        </div>


                        <div class="modal-footer justify-content-start">
                            <div class="">
                                <div id="g-recaptcha-response" class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                                <button class="btn btn-primary text-uppercase mt-2" type="submit">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- </html> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>

    <script>
        

        $(document).ready(function() {
            if ($(window).width() <= 767) {
                $('.mobile_vendor').css('display', 'block');
                $('.desktop_vendor').css('display', 'none');
                $('.desktop_nav').css('display', 'none');
            } else {
                $('.desktop_nav').css('display', 'block');
                $('.mobile_vendor').css('display', 'none');
                $('.desktop_vendor').css('display', 'block');
            }

        });

        $(document).ready(() => {
            $('#search_id').on('focus', function() {
                // console.log('click');
                $('.ui_hide').css('display', 'none');
            });

            $('#search_id').on('blur', function() {
                // console.log('blur');
                $('.ui_hide').css('display', 'block');
            });
        });
        
        $(document).ready(() => {
            $('#country_select').selectize();
        });
        $(document).ready(function() {


        $('.desktop_vendor , .mobile_vendor').on('click', function() {
            console.log('clicked');
            $('#exampleModal').modal('show');
        });

        $('#vendorForm').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            var recaptcha = $("#g-recaptcha-response").val();

            // if (recaptcha === "") {
            //     event.preventDefault();
            //     toastr.error('Complete the captcha to submit!');
            //     return false;
            // }

            $.ajax({
                url: '{{route("vendor.store")}}',
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#vendorForm')[0].reset();
                    toastr.success('Details successfully submitted!');
                    $('#exampleModal').modal('hide');

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    //
                }
            });
        });

        });

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

        });
    </script>
    <script>
        $(document).ready(function() {
            // Set a scroll threshold below which the button will be hidden
            var scrollThreshold = 100;

            // Check the scroll position on page load
            checkScrollPosition();

            // Check the scroll position when the user scrolls
            $(window).scroll(function() {
                checkScrollPosition();
            });

            function checkScrollPosition() {
                // Get the current scroll position
                var scrollPosition = $(window).scrollTop();

                // Show or hide the button based on the scroll position
                if (scrollPosition > scrollThreshold) {
                    $("#scrollToTopButton").fadeIn(); // Show the button
                } else {
                    $("#scrollToTopButton").fadeOut(); // Hide the button
                }
            }

            // Smoothly scroll to the top when the button is clicked
            $("#scrollToTopButton").click(function() {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
        });
    </script>
