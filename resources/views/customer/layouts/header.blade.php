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

$productLists = Product::take(5)->get();

@endphp

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link rel="stylesheet" href="{{ asset('assets\customer\css\style.css') }}">
    <link href="{{ asset('assets\customer\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick-theme.css') }}" />
    <link rel="stylesheet" href="/signv1/assets/styles/index.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js" async defer></script>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" async></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"  async defer></script>

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
    </style>
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

</head>

<!-- <title>login</title> -->
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
<nav class="navbar navbar-expand-lg bg-light pt-2 pb-0 border-bottom sticky-header">
    <div class="container">
        <a class="navbar-brand me-5" href="#">
            <img src="https://www.photonplay.com/assets/customer/images/logo-dark.png" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/radar-speed-signs">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/company">COMPANY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-black dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PRODUCT
                    </a>
                    <ul class="dropdown-menu rounded-3 shadow-lg p-2" aria-labelledby="productDropdown">
                        @foreach($productLists ?? [] as $product)
                            <li><a class="dropdown-item px-4 py-3 text-black border-bottom hover-bg-light" href="{{ route('customer.radar.sign', $product->slug) }}">{{ $product->title }}</a></li>
                        @endforeach
                        <li><a class="dropdown-item px-4 py-3 text-black hover-bg-light text-black" href="/radar-cloud-management"> Cloud Software</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/blogs">NEWS & MEDIA</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('customer.radar.speed.signs__get_quote_v1')}}">GET QUOTE
                    </a>
                </li>





            </ul>

            <div class="personal-information d-flex align-items-center gap-2">
                <a href="tel:+8009669329">
                    <img src="/signv1/assets/UI-01/UI-Data/Images/Phone-icon-header.png" alt="Phone Icon">
                </a>
                <div class="info">
                    <p class="text-white fw-bold mb-0 text-black"> (800)966-9329</p>
                    <p class="text-secondary fs-14 fw-semibold mb-0 ">sales@photonplay.com</p>
                </div>
            </div>


            <form class="d-none  d-lg-flex header-side mt-lg-0 mt-4" role="search">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                @if (!Session::get('user'))
                    <div class="d-flex align-items-center">
                        <input type="hidden" name="grand_total" value="{{$cartPrice}}">
                        <p class="me-2 mb-0">{{$cartPrice}}</p>

                        <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif>  <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found" class="img-fluid me-5"></a>
                    </div>
                    <a href="{{route('customer.loginForm')}}"> <img src="{{asset('assets\customer\images\user.png')}}" alt="Not Found" class="img-fluid "> </a>
                @else
                    <div class="d-flex align-items-center">

                        <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif> <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found" class="img-fluid me-5"></a>
                        <p class="me-2 mb-0">{{$cartPrice}}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-2">
                            <span class="text-capitalize">Good Day!</span>
                            <p class="text-capitalize mb-0">{{Session::get('user')->name}}</p>
                        </div>
                        <div class="profile-circle">

                            <div class="dropdown">
                                <button
                                    class="btn dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-mdb-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <a ><img src="{{asset('assets\customer\images\profile.png')}}" alt="Not Found"
                                             class="img-fluid rounded-circle d-block" width="36" height="36"></a>
                                </button>
                                <ul class="dropdown-menu position-absolute end-0" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="{{route('customer.edit.profile')}}">Account</a></li>
                                    <li><a class="dropdown-item" href="{{route('customer.logout')}}">Logout</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

            </form>

        </div>
    </div>
</nav>
<header class="header bg-white sticky-top w-100" >

    <nav id="mobile-menu"  >
        <div class="container">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

            <li class="nav-item d-flex justify-content-between mobile-menu-items"  >
               <span class="mt-3">
                        <h5> <i class="bi bi-list"></i> Navigation</h5>
                    </span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-arrow-left-circle-fill text-dark" style="font-size: 36px;" onclick="closeMenu()"></i>
                </div>
            </li>
            @if (Session::get('user'))
            <li class="nav-item mobile-menu-items">
                <div class="me-2">
                    <span class="text-capitalize">{{Session::get('user')->name}}</span>
                    <a   href="{{route('customer.edit.profile')}} " class="nav-link text-uppercase ">  <p class="text-capitalize text-capitalize mb-0">Edit Profile</p>
                    </a>
                </div>
            </li>
                <li class="nav-item mobile-menu-items">
                    <a href="{{route('customer.account.menu')}}"  class="nav-link text-uppercase" > Account</a>
                </li>
            @endif
            <li class="nav-item mobile-menu-items">
                <a class="nav-link text-uppercase" href="{{route('customer.homePage')}}">HOME</a>
            </li>
            <li class="nav-item mobile-menu-items">
                <a class="nav-link text-uppercase  {{Request::is('radar-speed-signs') ? 'active':''}}" href="{{route('customer.radar.speed.signs')}}">THE SIGN</a>
            </li>

            <li class="nav-item mobile-menu-items" >
                <span class="d-flex justify-content-between">
                <span>PRODUCTS </span>
                  <span id="openclose_products_inside_menu">  <i class="bi bi-plus-lg"   style="color: grey;"></i></span>
                </span>

                <ul class="item-radar-signs-menu p-2" style="display: none;">
                    @forelse ($productLists as $list)
                        <li class=""><a class="btn text-decoration-none" href="{{route('customer.radar.sign', $list->id)}}">{{$list->title}}</a></li>
                    @empty
                    @endforelse

                </ul>
            <li class="nav-item mobile-menu-items">
                <a class="nav-link text-uppercase {{Request::is('radar-cloud-management') ? 'active':''}}"
                   href="{{route('radar.cloud.management')}}">   Cloud SOFTWARE</a>
            </li>
            <li class="nav-item mobile-menu-items">
                <a class="nav-link text-uppercase" href="{{route('customer.contact.us')}}">CONTACT US</a>
            </li>

                @if (!Session::get('user'))
                    <li class="nav-item mobile-menu-items">
                        <div class="d-flex align-items-center">
                        <input type="hidden" name="grand_total" value="{{$cartPrice}}">
                        <p class="me-2 mb-0">{{$cartPrice}}</p>
                        <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif>
                            <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found" class="img-fluid me-5"></a>

                        </div>
                    </li>
                    <li class="nav-item mobile-menu-items">
                    <a href="{{route('customer.loginForm')}}" class="nav-link text-uppercase"> Login</a>
                    </li>
                @else
                <li class="nav-item mobile-menu-items">
                    <a  href="{{route('customer.logout')}}" class="nav-link text-uppercase">
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

    menuToggle.addEventListener('click', function() {
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

    $(document).ready(function() {
        $('#openclose_products_inside_menu').click(function() {
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
                alert("dsd"+ipAddress);

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

