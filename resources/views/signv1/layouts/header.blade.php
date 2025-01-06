@php
    $products = \App\Models\Product::select('id','slug','title')->where('category_id', 1)->take(5)->get();
@endphp
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Radar Speed Signs | Buy Best Radar Speed Signs in USA – Photonplay </title>
    <meta name="title" content="Radar Speed Signs | Buy Best Radar Speed Signs in USA – Photonplay">
    <meta name="description" content="Photonplay offers high-quality radar speed signs for traffic calming. Buy radar speed signs with customizable options and enhance road safety.">
    <meta name="google-site-verification" content="x2TVSaiGBx9F_unjNk_O1mEB64-JF5s3lmTguSQvstw"/>

    <link rel="icon" href=
        "https://www.photonplay.com/assets/images/photon_small.png"
          type="image/x-icon">
    <link rel="canonical" href="https://www.photonplay.com/radar-speed-signs"/>
    <meta name="keywords" content="radar speed sign, speed limit sign, digital radar speed signs, driver feedback sign, your speed sign, traffic calming solutions,">
    <link rel="alternate" hreflang="en-us">
    <meta name="language" content="English">
    <meta name="author" content="Photonplay">
    <meta property="og:site_name" content="PHOTONPLAY" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:type" content="webpage" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <meta property="article:publisher" content="https://www.facebook.com/photonplaygroup/" />


    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Radar Speed Signs | Buy Best Radar Speed Signs in USA – Photonplay">
    <meta property="og:description" content="Photonplay offers high-quality radar speed signs for traffic calming. Buy radar speed signs with customizable options and enhance road safety.">
    <meta property="og:url" content="https://www.photonplay.com/radar-speed-signs">
    <meta property="og:image" content="https://www.photonplay.com/assets\customer\images\Radar-Speed-Signs-Image_1.webp" />
    <meta property="og:image:secure_url" content="https://www.photonplay.com/assets\customer\images\Radar-Speed-Signs-Image_1.webp" />

    <meta property="og:image:width" content="900" />
    <meta property="og:image:height" content="596" />
    <meta property="og:image:alt" content="Radar Speed Signs | Buy Best Radar Speed Signs in USA – Photonplay" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:updated_time" content="2024-01-23T12:24:26+00:00" />
    <meta property="article:published_time" content="2024-01-03T07:12:54+00:00" />
    <meta property="article:modified_time" content="2024-01-23T12:24:26+00:00" />
    <!-- Twitter -->
    <meta property="twitter:title" content="Radar Speed Signs | Buy Best Radar Speed Signs in USA – Photonplay">
    <meta property="twitter:description" content="Photonplay offers high-quality radar speed signs for traffic calming. Buy radar speed signs with customizable options and enhance road safety.">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.photonplay.com/radar-speed-signs">
    <meta name="twitter:image" content="https://www.photonplay.com/assets\customer\images\Radar-Speed-Signs-Image_1.webp" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="Photonplay" />
    <meta name="twitter:site" content="@photonplayinc" />
    <meta name="twitter:creator" content="@photonplayinc" />

    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('assets\customer\css\style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/signv1/assets/styles/index.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        .slick-slider .brand-image img {
            max-height: 100px;        /* Set a consistent maximum height */
            width: auto;              /* Allow width to adjust based on aspect ratio */
            display: block;           /* Center the image */
            margin: auto;             /* Center the image horizontally */
            object-fit: contain;      /* Ensures images fit within the box without distorting */
        }


        .slick-arrow {
            background: #ddd;
            border-radius: 50%;
            padding: 10px;
            position: absolute;
            z-index: 10;
        }

        .slick-prev {
            left: -40px;
        }

        .slick-next {
            right: -40px;
        }

        .rotated-button {
            position: fixed; /* Keeps the button fixed on the screen */
            top: 50%; /* Center the button vertically */
            left: -120px; /* Fixed position on the left side of the screen */
            transform: translateY(-90%) rotate(-90deg); /* Center vertically and apply rotation */
            background-color: #206bbd; /* Button color */
            color: #fff; /* Text color */
            padding: 10px 20px;
            text-decoration: none;
            z-index: 1000; /* Ensures the button appears above other elements */
        }

        @media (max-width:767px) {
            .rotated-button {
                left: auto; /* Reset the left position */
                right: -110px; /* Move to the right side */
            }
            .best-seller-icon{
                display: none;
            }
        }

        .not_show_until_load {
            display: none;
        }
        .navbar {
            transition: all 0.3s ease-in-out;
        }

        .navbar .dropdown-menu {
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .best-seller-icon {
            position: absolute;
            top: 20px; /* Adjust the top distance */
            left: 10px; /* Adjust the left distance */
            z-index: 10; /* Ensure it's above the image */
        }

        .best-seller-icon img {
            width: 50px; /* Set the size of the icon */
            height: auto;
        }
    </style>

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

        /*.sticky-header nav ul {*/
        /*    list-style-type: none;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*}*/

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
    @stack('styles')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l !== 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NJZBCGR');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJZBCGR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

@include("signv1.sound_pop_v")

<a href="/dealership" class="rotated-button" style="text-decoration: none;color: white;">Want to be Dealers/Partners?</a>
<!-- ------------------ Hero section------------------ -->

    <!----------------------- Header ---------------------------->

<section class="banner-section pt-0">
    <!----------------------- Header ---------------------------->

{{--    <nav class="navbar navbar-expand-lg bg-transparent pt-2 pb-0 border-bottom">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand me-5" href="#">--}}
{{--                <img src="https://www.photonplay.com/assets/customer/images/logo-dark.png" alt="Logo" height="30px">--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">--}}
{{--                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="/radar-speed-signs">HOME</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            PRODUCTS--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu rounded-3 shadow-lg p-2" aria-labelledby="productDropdown">--}}
{{--                            @foreach($products as $product)--}}
{{--                                <li><a class="dropdown-item px-4 py-3 text-black border-bottom hover-bg-light" href="{{ route('customer.radar.sign', $product->slug) }}">{{ $product->title }}</a></li>--}}
{{--                            @endforeach--}}
{{--                            <li><a class="dropdown-item px-4 py-3 text-black hover-bg-light" href="/radar-cloud-management"> Cloud Software</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/blogs">NEWS & MEDIA</a>--}}
{{--                    </li>--}}



{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('customer.radar.speed.signs__get_quote_v1')}}">GET QUOTE--}}
{{--                        </a>--}}
{{--                    </li>--}}





{{--                </ul>--}}

{{--                <div class="personal-information d-flex align-items-center gap-2">--}}
{{--                    <a href="tel:+8009669329">--}}
{{--                        <img src="/signv1/assets/UI-01/UI-Data/Images/Phone-icon-header.png" alt="Phone Icon">--}}
{{--                    </a>--}}
{{--                    <div class="info">--}}
{{--                        <p class="text-white fw-bold mb-0"> (800)966-9329</p>--}}
{{--                        <p class="text-secondary fs-14 fw-semibold mb-0">sales@photonplay.com</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <style>
        .navbar-nav {
            margin: 0 auto; /* Centers the navigation menu */
            display: flex;
            justify-content: center; /* Horizontal alignment */
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light pt-2 pb-0 border-bottom sticky-header">
        <div class="container">
            <a class="navbar-brand me-5" href="/">
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
                                        <a class="dropdown-item px-0 text-uppercase text-dark" href="#"><b> RADAR SPEED SIGNS </b></a>
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
                        </div>


                        <form class="d-none  d-lg-flex header-side mt-lg-0 mt-4" role="search">
                            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->


                        </form>

                </div>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="row pt-4">
            <div class="col-12 col-lg-6">
                <div class="banner-content">

                    <p>Over 10,000+ Signs Installed Worldwide!</p>
                    <h1 class="mt-2 mb-3"> iCop Radar Speed Feedback Signs </h1>
                    <p class="fs-4 mb-4">For Traffic Calming & Reduction in traffic related incidents</p>

                    <p>Enhance Road Safety with the industry's No.1 & Most Affordable Radar Speed
                        Feedback Signs, now with Multi-function Display and Cloud Control access. </p>

                    <div class="d-flex gap-4 mt-4">
                        <a href="#product_shop" style="text-decoration: none;">  <img
                                src="{{asset("assets/images/radar/shop_now_radar.png")}}" alt="shop now" style="max-width: 200px;"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@yield('content')

<!-- ------------------------ Footer ----------------------------- -->
@include('signv1/layouts/footer')


</body>

</html>

@stack('scripts')
