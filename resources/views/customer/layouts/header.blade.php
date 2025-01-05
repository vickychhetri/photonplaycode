<!doctype html>
<html lang="en-us">
@php
    use App\Models\Product;
    $currency = '$';
    $cartPrice = 0;
    if(!Session::get('user')){
        $cart = \DB::table('carts')->where('session_id', Session::getId())->get();
            foreach($cart as $i){
                //$cartPrice += $i->price * $i->quantity;
                $cartPrice += $i->quantity;
            }
    }else {
        $cart = \DB::table('carts')->where('user_id', Session::get('user')->id)->get();
            foreach($cart as $i){
                $cartPrice += $i->quantity;
            }
    }

    $productLists = Product::where('category_id',1)->take(5)->get();
@endphp

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link rel="stylesheet" href="{{ asset('assets\customer\css\style.css') }}">
    <link href="{{ asset('assets\customer\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick-theme.css') }}"/>
    <link rel="stylesheet" href="/signv1/assets/styles/index.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js" async defer></script>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async
            defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" async></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.0/dist/cdn.min.js" defer></script>

    @livewireStyles
    {{--            Start meta--}}
    <x-Customer.MetaSeoTag :seodata="$seo_meta??0"/>
    {{--        End    Start meta--}}
    <style>
        .sticky-header {
            position: sticky;
            top: 0;
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            z-index: 1000;
        }

        .sticky-header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .sticky-header nav ul li {
            display: inline;
            margin: 0 20px;
        }

        .sticky-header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .sticky-header nav ul li a:hover {
            text-decoration: underline;
        }

        #mobile-menu {
            position: fixed;
            top: 0;
            left: -100%; /* Start offscreen */
            width: 80%;
            max-width: 300px; /* Adjust to your preference */
            height: 100%;
            background: #fffefe;
            transition: left 0.3s ease;
        }

        #mobile-menu.open {
            left: 0; /* Slide in from the left */
        }

        #mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #mobile-menu li {
            padding: 10px;
        }

        #mobile-menu li a {
            text-decoration: none;
            color: #000;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 999; /* Ensure the overlay is on top of other elements */
        }

        .mega-menu {
            max-width: 100%; /* Ensure it fits within the viewport on mobile */
        }

        @media (max-width: 768px) {
            .mega-menu {
                position: static;
                padding: 10px;
            }

            .mega-menu .row {
                flex-direction: column; /* Stack items vertically on smaller devices */
            }
        }


    </style>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NJZBCGR');</script>
    <!-- End Google Tag Manager -->

</head>

<!-- <title>login</title> -->
<body>
@livewireScripts
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJZBCGR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<a href="#" id="scrollToTopButton" title="Scroll to Top" style="
      position: fixed;
      bottom: 70px;
      right: 20px;
      z-index: 99;">
    <img src="{{asset('/assets/images/arrow-up.png')}}" height="50px;"/>
</a>
<style>
    .navbar-nav {
        margin: 0 auto; /* Centers the navigation menu */
        display: flex;
        justify-content: center; /* Horizontal alignment */
    }
</style>
<nav class="navbar navbar-expand-lg bg-light pt-2 pb-0 border-bottom sticky-header">
    <div class="container">
        <a class="navbar-brand me-5" href="#">
            <img src="https://www.photonplay.com/assets/customer/images/logo-dark.png" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/radar-speed-signs">HOME</a>
                </li>
                <li class="nav-item dropdown position-relative solution-pos">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="color: #0c0c0c">
                        PRODUCTS
                    </a>

                    <ul class="dropdown-menu mega-menu w-100 bg-white" style="max-width: 600px;">
                        <li class="row p-3">
                            <!-- Radar Speed Signs Section -->
                            <div class="col-md-6 col-sm-12 mb-3">
                                <h6 class="font-weight-bold text-dark pb-2">
                                    <a class="dropdown-item px-0 text-uppercase" href="#"><b> RADAR SPEED SIGNS </b></a>
                                </h6>
                                <ul class=" ">
                                    @foreach($productLists ?? [] as $product)
                                        <li>
                                            <a
                                                class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                                href="{{ route('customer.radar.sign', $product->slug) }}">
                                                {{ strtoupper($product->title) }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                           href="/radar-cloud-management">
                                            Cloud Software
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Shop by Application Section -->
                            <div class="col-md-6 col-sm-12 mb-3 pb-2">
                                <h6>
                                    <a class="dropdown-item px-0 text-uppercase " href="#"><b> SHOP BY APPLICATION </b></a>
                                </h6>
                                <ul class="">
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="{{route("radar_speed_sign.school_zone")}}">School
                                            Zones</a>
                                    </li>
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="{{route("radar_speed_sign.neighbourhoods")}}">Neighbourhoods</a>
                                    </li>
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="{{route("radar_speed_sign.parking_lot")}}">Parking
                                            Zones</a>
                                    </li>
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2"
                                           href="{{route("radar_speed_sign.campus")}}">Campuses</a>
                                    </li>
                                    <li>
                                        <a class="text-wrap dropdown-item px-0 text-uppercase mb-2" href="{{route("radar_speed_sign.municipalities")}}">Municipalities</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="/blogs">NEWS & MEDIA</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('customer.radar.speed.signs__get_quote_v1')}}">GET
                        QUOTE
                    </a>
                </li>


            </ul>

            <div class="personal-information d-flex align-items-center gap-2">
                <a href="tel:+8009669329">
                    <img src="{{ asset('assets/images/call_now.webp') }}" alt="Phone Icon"
                         style="width: 100%; max-width: 150px; height: auto;">
                </a>
            </div>


            <form class="d-none  d-lg-flex header-side mt-lg-0 mt-4" role="search">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                @if (!Session::get('user'))
                    <div class="d-flex align-items-center">
                        <input type="hidden" name="grand_total" value="{{$cartPrice}}">
                        {{--                        <p class="me-2 mb-0">{{$cartPrice}}</p>--}}
                        <div style="position: relative; display: inline-block;">
                            <x-cart-count/>
                        </div>


                        <div class="d-flex flex-column align-items-center ">
                            <a href="{{route('customer.loginForm')}}"> <img
                                    src="{{asset('assets\customer\images\user.png')}}" alt="Not Found"
                                    class="img-fluid me-2 ">
                            </a>
                            <span class="text-dark">Login/Signup</span>
                        </div>

                        @else
                            <div class="d-flex align-items-center">

                                {{--                        <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif> <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found" class="img-fluid me-5"></a>--}}
                                {{--                        <p class="me-2 mb-0">{{$cartPrice}}</p>--}}
                                <div style="position: relative; display: inline-block;">
                                    <x-cart-count/>
                                </div>

                            </div>

                            <div class="d-flex align-items-center">


                                <div class="profile-circle">

                                    <div class="dropdown">
                                        <button
                                            class="btn dropdown-toggle"
                                            type="button"
                                            id="dropdownMenuButton"
                                            data-mdb-toggle="dropdown"
                                            aria-expanded="false"
                                        >
                                            <a><img src="{{asset('assets\customer\images\profile.png')}}"
                                                    alt="Not Found"
                                                    class="img-fluid rounded-circle d-block" width="36" height="36"></a>
                                            <span class="text-dark">Hello, {{Session::get('user')->name}}</span>
                                        </button>

                                        <ul class="dropdown-menu position-absolute end-0"
                                            aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{route('customer.edit.profile')}}">Account</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('customer.logout')}}">Logout</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                @endif

            </form>

        </div>
    </div>
</nav>
<header class="header bg-white sticky-top w-100">

    <nav id="mobile-menu">
        <div class="container">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item d-flex justify-content-between mobile-menu-items">
               <span class="mt-3">
                        <h5> <i class="bi bi-list"></i> Navigation</h5>
                    </span>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-left-circle-fill text-dark" style="font-size: 36px;"
                           onclick="closeMenu()"></i>
                    </div>
                </li>
                @if (Session::get('user'))
                    <li class="nav-item mobile-menu-items">
                        <div class="me-2">
                            <span class="text-capitalize">{{Session::get('user')->name}}</span>
                            <a href="{{route('customer.edit.profile')}} " class="nav-link text-uppercase "><p
                                    class="text-capitalize text-capitalize mb-0">Edit Profile</p>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mobile-menu-items">
                        <a href="{{route('customer.account.menu')}}" class="nav-link text-uppercase"> Account</a>
                    </li>
                @endif
                <li class="nav-item mobile-menu-items">
                    <a class="nav-link text-uppercase" href="{{route('customer.homePage')}}">HOME</a>
                </li>
                <li class="nav-item mobile-menu-items">
                    <a class="nav-link text-uppercase  {{Request::is('radar-speed-signs') ? 'active':''}}"
                       href="{{route('customer.radar.speed.signs')}}">THE SIGN</a>
                </li>

                <li class="nav-item mobile-menu-items">
                <span class="d-flex justify-content-between">
                <span>PRODUCTS </span>
                  <span id="openclose_products_inside_menu">  <i class="bi bi-plus-lg" style="color: grey;"></i></span>
                </span>

                    <ul class="item-radar-signs-menu p-2" style="display: none;">
                        @forelse ($productLists as $list)
                            <li class=""><a class="btn text-decoration-none"
                                            href="{{route('customer.radar.sign', $list->id)}}">{{$list->title}}</a></li>
                        @empty
                        @endforelse

                    </ul>
                <li class="nav-item mobile-menu-items">
                    <a class="nav-link text-uppercase {{Request::is('radar-cloud-management') ? 'active':''}}"
                       href="{{route('radar.cloud.management')}}"> Cloud SOFTWARE</a>
                </li>
                <li class="nav-item mobile-menu-items">
                    <a class="nav-link text-uppercase" href="{{route('customer.contact.us')}}">CONTACT US</a>
                </li>

                @if (!Session::get('user'))
                    <li class="nav-item mobile-menu-items">
                        <div class="d-flex align-items-center">
                            <input type="hidden" name="grand_total" value="{{$cartPrice}}">
                            <p class="me-2 mb-0">{{$cartPrice}}</p>
                            <a href="{{route('customer.shopping.bag')}}"
                               @if($cartPrice == 0) style="pointer-events: none" @endif>
                                <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found"
                                     class="img-fluid me-5"></a>

                        </div>
                    </li>
                    <li class="nav-item mobile-menu-items">
                        <a href="{{route('customer.loginForm')}}" class="nav-link text-uppercase"> Login</a>
                    </li>
                @else
                    <li class="nav-item mobile-menu-items">
                        <a href="{{route('customer.logout')}}" class="nav-link text-uppercase">
                            Logout</a></li>
                @endif

                0
            </ul>
        </div>
    </nav>
    <script>
        var menuToggle = document.getElementById('menu-toggle');
        var mobileMenu = document.getElementById('mobile-menu');
        var overlay = document.createElement('div');
        overlay.className = 'overlay';

        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('open');
            if (mobileMenu.classList.contains('open')) {
                document.body.style.overflow = 'hidden'; // Prevent scrolling
                document.body.appendChild(overlay);
                overlay.addEventListener('click', closeMenu);
            } else {
                document.body.style.overflow = ''; // Enable scrolling
                document.body.removeChild(overlay);
                overlay.removeEventListener('click', closeMenu);
            }
        });

        function closeMenu() {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = ''; // Enable scrolling
            document.body.removeChild(overlay);
            overlay.removeEventListener('click', closeMenu);
        }

        $(document).ready(function () {
            $('#openclose_products_inside_menu').click(function () {
                $('.item-radar-signs-menu').toggle();
            });
        });

    </script>


    <script>
        // Fetch user's IP information using ip-api API
        fetch('http://ip-api.com/json')
            .then(response => response.json())
            .then(data => {
                const ipAddress = data.query;
                const city = data.city;
                const region = data.regionName;
                const country = data.country;


                console.log('IP Address:', ipAddress);
                console.log('City:', city);
                console.log('Region:', region);
                console.log('Country:', country);

                // Now you can use this information as needed
            })
            .catch(error => {
                console.error('Error fetching IP information:', error);
                // You can handle errors here
            });

        document.getElementById("backToTop").addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Enables smooth scrolling
            });
        });


    </script>

</header>

