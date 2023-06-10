@php
use App\Models\Product;
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
    <link rel="stylesheet" href="{{ asset('assets\customer\css\style.css') }}">
    <link href="{{ asset('assets\customer\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\customer\slick\slick-theme.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    {{--            Start meta--}}
    <x-Customer.MetaSeoTag :seodata="$seo_meta??0"/>
    {{--        End    Start meta--}}

    <style>
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
</head>

<!-- <title>login</title> -->
<body>
<header class="header bg-white py-3 sticky-top w-100" >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{asset('assets\customer\images\logo-dark.png')}}" alt="Not Found"></a>
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"--}}
{{--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                    aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                  --}}
{{--                </button>--}}

                <a id="menu-toggle" class="mobile-display">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div class="collapse header-font navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-5 gap-2 px-4">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercasen" href="{{route('customer.homePage')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  {{Request::is('radar-speed-signs') ? 'active':''}}" href="{{route('customer.radar.speed.signs')}}">THE SIGN</a>
                        </li>

                        <li class="nav-item dropdown position-relative solution-pos">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu bg-light borderes">
                                @forelse ($productLists as $list)
                                    <li><a class="dropdown-item px-lg-3 px-0 pb-4 pb-lg-3" href="{{route('customer.radar.sign', $list->id)}}">{{$list->title}}</a></li>
                                @empty

                                @endforelse

                            </ul>
                            <div class="position-absolute down-image">
                                <img src="{{asset('assets\customer\images\Down-Arrow.png')}}" alt="Not Found">
                            </div>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{route('customer.contact.us')}}">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="d-none  d-lg-flex header-side mt-lg-0 mt-4" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                        @if (!Session::get('user'))
                        <div class="d-flex align-items-center">
                        <input type="hidden" name="grand_total" value="{{$currency .''.$cartPrice}}">
                            <p class="me-2 mb-0">{{$currency .''.$cartPrice}}</p>

                          <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif>  <img src="{{asset('assets\customer\images\shoping.png')}}" alt="Not Found" class="img-fluid me-5"></a>
                        </div>
                        <a href="{{route('customer.loginForm')}}"> <img src="{{asset('assets\customer\images\user.png')}}" alt="Not Found" class="img-fluid "> </a>
                        @else
                        <div class="d-flex align-items-center">
                            <p class="me-2 mb-0">{{$currency .''.$cartPrice}}</p>
                            <a href="{{route('customer.shopping.bag')}}" @if($cartPrice == 0) style="pointer-events: none" @endif> <img src="{{asset('assets\customer\images\shoping.png')}}" alt="Not Found" class="img-fluid me-5"></a>
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
            <li class="nav-item mobile-menu-items">
                <a class="nav-link text-uppercasen" href="{{route('customer.homePage')}}">HOME</a>
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
                <a class="nav-link text-uppercase" href="{{route('customer.contact.us')}}">CONTACT US</a>
            </li>
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

    </header>

