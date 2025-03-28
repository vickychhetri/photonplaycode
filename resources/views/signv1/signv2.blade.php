<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::RADAR_MUNICIPALITIES)->first();
if($data_record){
    $seo_meta=[
        "title"=>$data_record->title,
        "description"=>$data_record->description,
        "keywords"=>$data_record->keyword,
        "schema"=>$data_record->schema,
        "feature_image"=>"storage/image/banner%202.webp"
    ];
}
?>

@push('header_meta_content')
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
@endpush
@include('customer.layouts.header')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<style>
    /* Hide the content by default */
    .radar-container {
        display: none;
    }
</style>
<script>
    // Show the content after the page is fully loaded
    window.addEventListener("load", function () {
        document.querySelector(".radar-container").style.display = "block";
    });
</script>
<section class="pt-0 mt-0 pb-0 mb-0">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-12 ">

                <div class="d-flex justify-content-between align-items-center pt-2 pb-2">
                    <nav aria-label="breadcrumb m-3 p-3">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Traffic Signs</a></li>
                            <li class="breadcrumb-item"><a href="#">Radar Speed Sign</a></li>
                        </ol>
                    </nav>

                    <div class="text-end">


                    </div>
                </div>

            </div>
        </div>
    </div>

        <!-- -------------------- Stats section ------------------- -->
        @include("signv1.sound_pop_v")

        <section class="state-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-sm-4 gap-5 flex-wrap flex-sm-nowrap">
                            <div class="stats-card">
                                <div class="stats-image mb-4 pt-1">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/12k_.webp" alt="error">
                                </div>
                                <div class="state-content pt-3">
                                    Sign Installed <br> Worldwide
                                </div>
                            </div>
                            <div class="stats-card">
                                <div class="stats-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/same-day-shipping.webp" alt="error">
                                </div>
                                <div class="state-content">
                                    Same Day <br> Shipping
                                </div>
                            </div>
                            <div class="stats-card">
                                <div class="stats-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/One-Click-Easy-Returns-iocn.webp" alt="error">
                                </div>
                                <div class="state-content">
                                    One Click <br> Easy Return
                                </div>
                            </div>
                            <div class="stats-card">
                                <div class="stats-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Performance-Guarantee-Icon.webp" alt="error">
                                </div>
                                <div class="state-content">
                                    Performance <br>Guarantee
                                </div>
                            </div>
                            <div class="stats-card">
                                <div class="stats-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Guaranteed-Lowest-Price-Icon.webp" alt="error">
                                </div>
                                <div class="state-content">
                                    Guaranteed <br/>Lowest Price
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ Help Section -------------------------- -->
        <section class="help-section pb-0">
            <div class="container">
                <div class="row align-items-end gy-4">
                    <div class="col-12">
                        <div class="title">
                            <h2>Confused While Choosing the Right Sign Vendor?</h2>
                            <p class="text-uppercase text-tag">let me help you :)</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="help-image">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/Girl.webp" alt="error" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row gy-4 overflow-auto flex-wrap flex-sm-nowrap help-right pb-4">
                            <div class="col-md-4">
                                <div class="text-uppercase mb-5">
                                    <h2 class="text-secondary">Why Choose Photonplay</h2>
                                </div>
                                <ul class="list-unstyled radar-speed-list2 text-start" >
                                    <li>
                                        Hybrid Pixel Technology
                                    </li>
                                    <li>
                                        Warranty
                                    </li>
                                    <li>
                                        Cloud SSubscription (Free for 1 year)
                                    </li>
                                    <li>
                                        Starting Cost
                                    </li>
                                    <li>
                                        Free Shipping
                                    </li>
                                </ul>
                            </div>
                            <div class="col position-relative">
                                <div class="text-center">
                                    <img src="/signv1/assets/images/Photonplay_Speed_icon.webp" alt="">
                                </div>
                                <div class="btn btn-primary rounded-pill w-100">
                                    Photonplay
                                </div>
                                <ul class="list-unstyled list-grey mx-3 radar-speed-list">
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="col position-relative">
                                <div class="text-center">
                                    <img src="/signv1/assets/images/Other_company_2.webp" alt="">
                                </div>
                                <div class="btn btn-primary rounded-pill w-100">
                                    Other Company
                                </div>
                                <ul class="list-unstyled list-grey mx-3 radar-speed-list">
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="col position-relative">
                                <div class="text-center">
                                    <img src="/signv1/assets/images/Other_company_3.webp" alt="">
                                </div>
                                <div class="btn btn-primary rounded-pill w-100">
                                    Other Company
                                </div>
                                <ul class="list-unstyled list-grey mx-3 radar-speed-list">
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/cross-mark-icon.webp" alt="">
                                    </li>
                                    <li>
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/check-mark.webp" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -------------- Radar speed amount ----------------------- -->
        <section class="radar-speed-amount" id="product_shop">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <h2 class="fs-1"> Discover Our <br> Radar Speed Sign Models</h2>
                            <p class="fs-4">Choose the right product for your <span class="fw-bold">traffic calming
                            needs</span></p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="radar-speed-container">
                            <div class="radar-speed-card ">
                                <div class="row">
                                    <div class="col-md-3 px-0">
                                        <div class="price-card d-none d-sm-block bg-transparent">
                                        </div>
                                        <ul class="list-unstyled radar-speed-list">
                                            <li>
                                                Digit Size
                                            </li>
                                            <li>
                                                Speed Limit
                                            </li>
                                            <li>
                                                LED Color
                                            </li>
                                            <li>
                                                Messaging
                                            </li>
                                            <li>
                                                Beacon Option
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 px-0 position-relative">
                                        <div class="speed-count-image"  >
                                            <!-- Best Seller Icon -->
                                            <div class="best-seller-icon">
                                                <img src="https://cdn-icons-png.flaticon.com/512/8465/8465733.png" alt="Best Seller" />
                                            </div>
                                            <!-- Image -->
                                            <img src="https://www.photonplay.com/storage/image/radar-speed-sign-model-r1200-amber-front-side.webp" alt="" height="220">
                                        </div>

                                        <div class="price-card">
                                            R1200
                                        </div>
                                        <ul class="list-unstyled list-white radar-speed-list">
                                            <li>
                                                12
                                            </li>
                                            <li>
                                                Under <sub>45</sub> mph
                                            </li>
                                            <li>
                                                Amber / Red
                                            </li>
                                            <li>
                                                EV<small>12</small>FM only
                                            </li>
                                            <li>
                                                Yes

                                                <div class="text-center mt-3">
                                                    <a href="https://www.photonplay.com/radar-speed-signs/model/r1200"
                                                       class="btn btn-primary d-flex align-items-center justify-content-center mx-auto gap-3">Shop
                                                        Now <img src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp"
                                                                 alt="error"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 px-0 position-relative">
                                        <div class="speed-count-image speed-count-image-2">
                                            <img src="https://www.photonplay.com/storage/image/radar-speed-sign-model-r1500-amber-front-side.webp" alt="" height="250">
                                        </div>
                                        <div class="price-card">
                                            R1500
                                        </div>
                                        <ul class="list-unstyled list-white radar-speed-list px-3">
                                            <li>
                                                15
                                            </li>
                                            <li>
                                                Under <sub>45</sub> mph
                                            </li>
                                            <li>
                                                Amber / Red
                                            </li>
                                            <li>
                                                Yes
                                            </li>
                                            <li>
                                                Yes

                                                <div class="text-center mt-3">
                                                    <a href="https://www.photonplay.com/radar-speed-signs/model/r1500m"
                                                       class="btn btn-primary d-flex align-items-center justify-content-center mx-auto gap-3">Shop
                                                        Now <img src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp"
                                                                 alt="error"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 ps-0 position-relative">
                                        <div class="speed-count-image  speed-count-image-3">
                                            <img src="https://www.photonplay.com/storage/image/radar-speed-sign-model-r1800m-amber-front-side.webp" alt="" height="270">
                                        </div>
                                        <div class="price-card">
                                            R1800
                                        </div>
                                        <ul class="list-unstyled list-white radar-speed-list">
                                            <li>
                                                18
                                            </li>
                                            <li>
                                                Under <sub>55</sub> mph
                                            </li>
                                            <li>
                                                Amber / Red
                                            </li>
                                            <li>
                                                Yes
                                            </li>
                                            <li>
                                                Yes

                                                <div class="text-center mt-3">
                                                    <a href="https://www.photonplay.com/radar-speed-signs/model/r1800m"
                                                       class="btn btn-primary d-flex align-items-center justify-content-center mx-auto gap-3">Shop
                                                        Now <img src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp"
                                                                 alt="error"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ---------------------- Brand Section --------------------- -->

        <section class="brand-section p-4 m-1 not_show_until_load" >
            <div class="container">
                <div class="row">
                    <div class="col-md-3 " style="display: flex; align-items: center;flex-direction: column;">
                        <br/>
                        <p class="h5"><b>Trusted by <span class="text-primary">Leading <br />Organization and Municipalities</span></b></p>
                        <hr class="custom-border">
                    </div>
                    <div class="col-md-9">
                        <div class="slick-slider">
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/adm.webp" alt="adm">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/california-sciencenter.webp" alt="california sciencenter">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/enterprise-rent-a-car.webp" alt="enterprise rent-a-car">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/flexton.webp" alt="flexton">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/gm.webp" alt="gm">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/hillcrest-elementary-school.webp" alt="hillcrest elementary school">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/lockheed-martin.webp" alt="lockheed martin">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/maplewood-estates-apartment-homes.webp" alt="maplewood estates apartment homes">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/marathon-petroleum-corporation.webp" alt="marathon petroleum corporation">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/pine-hills-community-council.webp" alt="pine hills community council">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/police-city-of-shelbyville.webp" alt="police city of shelbyville">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/shelbyville-police.webp" alt="shelbyville police">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/tesla.webp" alt="tesla">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/the-port-of-los-angeles.webp" alt="the port of los angeles">
                            </div>
                            <div class="brand-image">
                                <img src="/signv1/assets/images/client/walmart.webp" alt="walmart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- --------------------- Form Section ----------------------- -->

        <section class="form-section"  id="inquiry"  >
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-container">
                            <h5 class="font-railway mb-3 text-white">Request A Quote</h5>
                            <p class="mb-4 fs-12 opacity-75 text-white">
                                Please complete the form below to request a quote, and we&apos;ll be in touch. Or you can
                                call <a href="tel:+18009669329" class="text-white">(800) 966-9329</a>, and our specialists will provide the necessary help!
                            </p>
                            <form action="{{route('customer.inquery.submit')}}" method="post">
                                @csrf
                                <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="first_name" class="form-control" placeholder="Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="country"  class="form-control" placeholder="Country" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" placeholder="Message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <!-- Google Recaptcha -->
                                    <div class="g-recaptcha mt-4 mb-4" style="max-height: 100px;" data-sitekey={{config('services.recaptcha.key')}}></div>
                                    <div class="col-12">
                                        <button class="btn btn-primary d-flex align-items-center gap-3"><img
                                                src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp" alt=""> Submit
                                            Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------- Client Section ------------------ -->
        <section class="client-section pb-0 not_show_until_load">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 mb-1">
                        <div class="title">
                            <h2>Voices of Trust</h2>
                            <p>Why Client Choose Us</p>
                        </div>
                    </div>
                    <div class="slick-client-slider">
                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> The radar speed signs have been a game-changer for our neighborhood. Cars actually slow down now, and our streets feel so much safer for kids to play.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Sarah Thompson, <span class="text-secondary">Maplewood Estates</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">We used to get complaints about reckless driving in our campus parking areas. Since adding 3 radar speed signs, the problem has been solved. Vehicle speeds are now consistently within safe limits. Thank you Mike for helping us to choose the right sign.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Lisa Warner, <span class="text-secondary">Harmony Business Park</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">The radar speed signs installed near our school have been a blessing. Cars now slow down significantly during drop-off and pick-up times, making the area much safer for children. Thank you, for making our school zone a safer place!</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Laura Simmons, <span class="text-secondary">Hillcrest Elementary School</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">Our residents love the visible speed reminders. The signs have been effective in keeping traffic calm, especially near the school zone.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Emily Carter, <span class="text-secondary">Oak Ridge Town</span></h6>
                                </div>
                            </div>
                        </div>




                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">We’ve had fewer incidents and complaints since the radar speed signs were put up outside the school. Drivers are more aware, and parents feel more secure about their kids crossing the road. A big thanks to Photonplay sales team for providing such an effective solution!</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Mark Taylor, <span class="text-secondary">Maple Grove School District</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">We were skeptical at first, but the radar speed signs have exceeded expectations. They’ve made a huge difference in slowing down vehicles on our busy streets.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>James Miller, <span class="text-secondary">Silver Lake Village</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">Initially we installed one iCop sign, it was a success so we decided to add 2 more signs to our neighborhood. We’ve had now fewer complaints about reckless driving since they were installed.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Priya Patel, <span class="text-secondary">Greenfield Park</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold">The radar speed signs not only slowed down vehicles in our school zone but also gave us detailed analytics. We discovered that 85% of drivers reduced their speed by 10-15 mph after seeing the signs.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Laura Simmons, <span class="text-secondary">Hillcrest Elementary School Zone</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> Thanks to the detailed reports provided by the radar signs, we learned that peak speeding times occurred between 4 PM and 6 PM. Using this data, we coordinated additional traffic calming measures, resulting in a 38% reduction in speeding incidents. Photonplay has been a fantastic partner to support the cause!</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Emily Carter , <span class="text-secondary">Oak Ridge Town</span></h6>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> The analytics provided by analytical reports generated by sign helped us realize that over 48% of drivers slowed down by at least 12 mph near the playground zone. This insight reassured us that the investment was worth it. The signs are doing a great job!</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Michelle Brown , <span class="text-secondary">Riverbend Heights</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> It’s incredible how a simple speed sign can have such a big impact. Drivers are more aware now, and it’s made our streets much safer.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>John Dawson , <span class="text-secondary">Pine Hill Community</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> We’ve seen a noticeable improvement in traffic behaviour. The radar speed signs have proven to be a great investment for our town.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Lisa Nguyen , <span class="text-secondary">Brookside Meadows</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 m-2">
                            <div class="client-card">
                                <div class="qoute-image mb-4">
                                    <img src="/signv1/assets/UI-01/UI-Data/Images/Quote-Icon.webp" alt="error">
                                </div>
                                <p class="fs-18 fw-semibold"> Installing radar speed signs has reduced speeding incidents significantly. We've noticed a calmer and more mindful driving culture in our community.</p>

                                <hr class="my-4">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rating-image">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/stars.webp" alt="error">
                                    </div>
                                    <h6>Tom Rodriguez , <span class="text-secondary">Willow Creek</span></h6>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </section>

        <!-- ----------------------- New & Update -------------------- -->

        <section class="new-and-update-section pt-4">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="title">
                            <h2>News and Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">

                    @foreach($blogs as $blog)
                            <?php
                            $image = Http::get((env('WORDPRESS_BASE_URL')??'https://blog.photonplay.com/') . 'wp-json/wp/v2/media/'. $blog['featured_media'])->json();
                            ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="news-card">
                                <div class="news-image">
                                    <img src="{{$image['media_details']['sizes']['medium']['source_url'] ?? null}}" alt="error"
                                         class="img-fluid">
                                    <div class="image-tag">Photon</div>
                                </div>
                                <div class="news-card-content">
                                    <h6 class="mb-4">{{$blog['title']['rendered']}}</h6>

                                    <p class="fs-12 fw-semibold text-secondary mb-4">Jan 22, 2022 - <span
                                            class="text-primary">Photonplay System</span></p>

                                    <p class="text-secondary fs-12 mb-4">{!! Str::limit($blog['excerpt']['rendered'], 200)  !!} </p>


                                    <a href="{{route("customer.blog_show",$blog['slug'])}}" class="btn news-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 text-center mt-5">
                        <a href="{{route('customer.blog')}}" class="text-black nav-link fw-bold fs-14">Check All Blog Posts <img
                                src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp" /></a>
                    </div>
                </div>
            </div>
        </section>

        <!------------------------- Looking Dealer -------------------------->
        <section class="looking-dealer">
            <div class="container">
                <div class="row align-items-center g-2">
                    <div class="col-md-6">
                        <h4 class="text-white">We are Looking for Dealers/Parterns</h4>
                    </div>
                    <div class="col-md-6" >
                        <form action="{{ route('customer.dealer.subscriptions.store') }}" method="POST"  >
                            @csrf
                            <div class="input-box d-flex align-items-center position-relative">
                                <input type="text" name="email" id="" placeholder="E-mail" class="form-control rounded-pill" />
                                <button class="btn p-0 h-100 position-absolute end-0 me-2"><img
                                        src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------------------- Faq Section ------------------------- -->
        <section class="faq-section" id="dealer-subscribe">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title">
                            <p class="fw-semibold text-start mb-2">Frequently Asked Section</p>
                            <h2 class=" text-start">Got Questions? We&apos;ve Got Answer!</h2>
                            <p class="text-secondary text-start fs-14 fw-semibold">Find answers to the most common questions
                                about our traffic safety solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="row gx-sm-5 gy-4">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        General Product Questions
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>1. What are radar speed signs?</h6>
                                        <p>Radar speed signs are electronic signs that use radar technology to detect and display the speed of oncoming vehicles, encouraging drivers to slow down if they are exceeding the speed limit.</p>

                                        <h6>2. How do radar speed signs help improve traffic safety?</h6>
                                        <p>By providing real-time feedback to drivers about their speed, radar speed signs encourage compliance with speed limits, reducing speeding incidents and improving safety for pedestrians and other road users.</p>

                                        <h6>3. Are radar speed signs effective in all weather conditions?</h6>
                                        <p>Yes, our radar speed signs are designed to function effectively in various weather conditions, including rain, snow, and extreme temperatures.</p>

                                        <h6>4. What are the power options for these signs?</h6>
                                        <p>Our signs are available with solar power, AC power, or battery options, allowing flexibility for different installation locations.</p>

                                        <h6>5. Can radar speed signs display customized messages?</h6>
                                        <p>Yes, many of our radar speed signs can display customizable messages like "Slow Down" or "Thank You" in addition to showing vehicle speeds.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Installation and Setup
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>6. How are radar speed signs installed?</h6>
                                        <p>The signs can be pole-mounted or wall-mounted. We provide detailed installation instructions and optional professional installation services.</p>

                                        <h6>7. What is the typical installation time?</h6>
                                        <p>Installation usually takes 2-4 hours, depending on the site conditions and power source being used.</p>

                                        <h6>8. Do I need a special permit to install radar speed signs?</h6>
                                        <p>Permit requirements vary by jurisdiction. It’s advisable to check with local authorities before installation.</p>

                                        <h6>9. Can these signs be installed in remote areas?</h6>
                                        <p>Yes, with solar power options, our radar speed signs are ideal for remote locations without access to an electrical grid.</p>

                                        <h6>10. What maintenance is required for radar speed signs?</h6>
                                        <p>Minimal maintenance is required, typically periodic cleaning of the display and checking the power source to ensure optimal performance.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Features and Functionality
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>11. What is the range of the radar detection?</h6>
                                        <p>Our radar speed signs typically detect vehicles within a range of 200-400 feet, depending on the model.</p>

                                        <h6>12. Do these signs capture any data about traffic?</h6>
                                        <p>Yes, our radar speed signs include traffic data analytics features that track vehicle speeds, traffic volume, and peak traffic times.</p>

                                        <h6>13. Can the brightness of the display be adjusted?</h6>
                                        <p>Yes, our signs feature automatic brightness adjustment based on ambient light conditions for maximum visibility.</p>

                                        <h6>14. Do the signs work at night?</h6>
                                        <p>Absolutely. The LED displays are highly visible in low-light and nighttime conditions.</p>

                                        <h6>15. Are the signs vandal-resistant?</h6>
                                        <p>Yes, our radar speed signs are built with durable, vandal-resistant materials to withstand tampering and damage.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion" id="p2accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p2headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#p2collapseOne" aria-expanded="true" aria-controls="p2collapseOne">
                                        Traffic Analytics and Reports
                                    </button>
                                </h2>
                                <div id="p2collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>16. What kind of data do the signs collect?</h6>
                                        <p>The signs collect data such as vehicle speed, volume of traffic, and time of day, which can be accessed through our user-friendly software.</p>

                                        <h6>17. How can I access the traffic data?</h6>
                                        <p>Traffic data can be accessed via a wireless connection, USB, or cloud-based platform, depending on the sign model.</p>

                                        <h6>18. Can I generate custom reports from the analytics data?</h6>
                                        <p>Yes, our software allows you to create custom reports based on specific time frames or traffic patterns.</p>

                                        <h6>19. How secure is the traffic data?</h6>
                                        <p>Our signs use encrypted storage and secure transmission protocols to protect all collected data.</p>

                                        <h6>20. Can the analytics data help with traffic planning?</h6>
                                        <p>Absolutely. The insights from our radar speed signs help communities make informed decisions about traffic management, road safety improvements, and future infrastructure planning.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p2headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#p2collapseTwo" aria-expanded="false" aria-controls="p2collapseTwo">
                                        Performance and Effectiveness
                                    </button>
                                </h2>
                                <div id="p2collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>21. How effective are radar speed signs in reducing speeding?</h6>
                                        <p>Studies show that radar speed signs can reduce vehicle speeds by 10-20% and decrease speeding incidents significantly.</p>

                                        <h6>22. Do radar speed signs work for all types of vehicles?</h6>
                                        <p>Yes, our signs can detect and display speeds for cars, motorcycles, buses, and trucks.</p>

                                        <h6>23. Do radar speed signs display exact speeds?</h6>
                                        <p>Yes, they show the real-time speed of vehicles, and certain models can display warnings if a speed limit is exceeded.</p>

                                        <h6>24. Can radar speed signs be used in high-traffic areas?</h6>
                                        <p>Yes, they are highly effective in both high-traffic and low-traffic zones, including urban streets, highways, and residential areas.</p>

                                        <h6>25. What happens if the speed limit is exceeded?</h6>
                                        <p>The sign can display a warning such as "Slow Down" or flash the speed in red to grab the driver’s attention.</p>

                                        <h6>26. Can the signs measure speeds of vehicles traveling in both directions?</h6>
                                        <p>Some models support bi-directional speed detection, but it depends on the specific sign configuration.</p>

                                        <h6>27. What is the lifespan of a radar speed sign?</h6>
                                        <p>Our signs are built to last 10-15 years with proper maintenance.</p>

                                        <h6>28. Are the signs visible in direct sunlight?</h6>
                                        <p>Yes, the LED displays are designed to be highly visible even in bright sunlight.</p>

                                        <h6>29. How accurate are radar speed signs?</h6>
                                        <p>Our signs are accurate to within ±1 mph, ensuring reliable speed detection.</p>

                                        <h6>30. Can radar speed signs reduce accidents?</h6>
                                        <p>Yes, they are proven to improve driver awareness, reduce speeding, and help lower the risk of accidents.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="p2headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#p2collapseThree" aria-expanded="false" aria-controls="p2collapseThree">
                                        Customization and Integration
                                    </button>
                                </h2>
                                <div id="p2collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6>31. Can I set specific speed thresholds for the signs?</h6>
                                        <p>Yes, you can customize the speed thresholds to match the local speed limits.</p>

                                        <h6>32. Do the signs integrate with other traffic systems?</h6>
                                        <p>Certain models can integrate with traffic management systems or cameras for additional functionality.</p>

                                        <h6>33. Can the signs display other information besides speed?</h6>
                                        <p>Yes, they can show messages such as "School Zone," "Slow Down," or even custom graphics.</p>

                                        <h6>34. Are there multilingual options for messages?</h6>
                                        <p>Yes, our signs can display messages in multiple languages based on your needs.</p>

                                        <h6>35. Can I add logos or branding to the signs?</h6>
                                        <p>Yes, custom branding or logos can be added to the sign for a personalized touch.</p>

                                        <h6>36. Do the signs support flashing lights or alerts?</h6>
                                        <p>Yes, many models include optional flashing lights or strobe alerts for increased visibility.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center mt-5">
                            <p class="fs-18 fw-semibold">Still Have Questions?</p>
                            <p class="fw-semibold text-secondary my-2">
                                Contact our support team today for personalized assistance!
                            </p>
                            <p class="fw-semibold">
                                Call Now:
                                <a href="tel:+18009669329" class="text-primary">+1 (800) 966-9329</a> |
                                Email:
                                <a href="mailto:support@photonplay.com" class="text-primary">support@photonplay.com</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- ---------------------- Traffic safety solution ------------------- -->
        <section class="traffic-safety-solutions">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="title">
                            <p class="fw-semibold mb-2">Intregated Traffic Safety Solutions & Real-Time Monitoring 24/7</p>
                            <h2>Creating Safer Roads Through Innovation and Data-Driven Insight</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center gy-4 mb-5">
                    <div class="col-md-5">
                        <div class="traffic-safety-content">
                            <p class="fw-semibold mb-3">Key Solutions 1 - Reducing Speed & Enhancing Safety</p>
                            <h3 class="font-railway mb-5">Educating Drivers to Slow Down & Ensure Safety</h3>
                            <p class="opacity-75"> Excessive speeding is a pressing issue, especially in sensitive areas like neighborhoods and school zones. PhotonPlay's radar speed signs go beyond simple speed detection; they actively encourage safer driving. By offering real-time speed feedback to drivers, our systems help reduce speeding and foster a culture of safety on the road.</p>

                            <ul class="list-unstyled mt-5">
                                <li class="fw-semibold fs-14 d-flex align-items-center gap-2"><img
                                        src="/signv1/assets/UI-01/UI-Data/Images/tick-image.webp" alt=""> Real time speed feedback
                                </li>
                                <li class="my-3 fw-semibold fs-14 d-flex align-items-center gap-2"> <img
                                        src="/signv1/assets/UI-01/UI-Data/Images/tick-image.webp" alt=""> Community-focused safety
                                    solutions</li>
                                <li class="fw-semibold fs-14 d-flex align-items-center gap-2"><img
                                        src="/signv1/assets/UI-01/UI-Data/Images/tick-image.webp" alt=""> Durable and eco-friendly
                                    design</li>
                            </ul>

                            <a href="#inquiry" class="btn btn-primary mt-5 d-flex align-items-center gap-3" style="max-width: 250px;">Meet Our Expert <img
                                    src="/signv1/assets/UI-01/UI-Data/Images/right-arrow.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="driver-image">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/Education-Drivers-image.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>


                <div class="row justify-content-between align-items-center gy-4 py-4 mb-5">
                    <div class="col-md-5">
                        <div class="driver-image">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/banner-image.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="traffic-safety-content">
                            <p class="fw-semibold mb-3">Key Solution 2 - Data Collection for Informed Decision-Making</p>
                            <h3 class="font-railway mb-5"> Data-Driven Insights for Smarter Traffic Management </h3>

                            Effective road planning starts with accurate data. PhotonPlay's radar systems capture detailed traffic data, including vehicle counts, speed averages, and peak travel times. This vital information helps municipalities make well-informed decisions, optimizing infrastructure and enhancing public safety based on real-world data. </p>

                            <h6 class="mt-5">Key Benefits:</h6>
                            <ol class="mt-2">
                                <li>Track vehicle counts</li>
                                <li>Analyze speed trends</li>
                                <li>Identify peak traffic hours</li>
                                <li>Support for infrastructure planning</li>
                                <li>Make data-backed safety improvements</li>
                            </ol>

                        </div>
                    </div>

                </div>

                <div class="row justify-content-between align-items-center gy-4 py-4">

                    <div class="col-md-5">
                        <div class="traffic-safety-content">
                            <p class="fw-semibold mb-3">Key Solution 3 - Community Engagement Through Public Messaging</p>
                            <h3 class="font-railway mb-5"> Engage & Inform Your Community with Real-Time Messaging </h3>
                            <p class="opacity-75">Connecting with residents is crucial for community building. PhotonPlay's radar displays can be used to share important messages, alerts, and event notifications in real-time. This feature not only promotes road safety but also strengthens community engagement by keeping citizens informed and connected.</p>

                            <div class="mt-4"  >
                                <button type="button" class="btn btn-primary m-2  " style="border-radius:50px;">Emergency alerts</button>
                                <button type="button" class="btn   m-2 btn-key-solution-rounded"  >Community event notifications</button>
                                <button type="button" class="btn btn-secondary  m-2 btn-key-solution-rounded" >Public safety messages</button>
                                <button type="button" class="btn btn-secondary m-2 btn-key-solution-rounded "  >Customized messages</button>
                            </div>
                            <div class="mt-4">
                                <p>
                                    Additionally, our team may offer preventative maintenance programs and security integration services for extremely complex sites.  Contact Us Now!
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="driver-image">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/Engage&informimage.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---------------------- Discover More Section ---------------------- -->
        <section class="discover-more">
            <div class="container py-sm-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <div class="text-center">
                            <h2 class="text-white">Empower Your Community with Smarter Traffic Solutions</h2>

                            <p class="text-white my-4 mb-5">From data-driven insights to impactful messaging, Photonplay
                                equips you with the tools to transform your roads and protect your Community. Discover how
                                we&apos;re shaping the future of roads safety today.</p>

                            <div class="d-flex align-items-center gap-4 fw-semibold justify-content-center flex-wrap">
                                <a href="#inquiry" class="btn btn-primary d-flex align-items-center gap-3">Discover More Info <img
                                        src="/signv1/assets/UI-01/UI-Data/Images/E-mail-arrow-icon.webp" alt=""></a>
                                <div class="d-flex gap-3 align-items-center">
                                    <a href="tel:8009669389">
                                        <img src="/signv1/assets/UI-01/UI-Data/Images/Phone-icon-header.webp" alt="Call Now">
                                    </a>
                                    <div class="content text-start">
                                        <p class="text-white opacity-75 fs-14">Call 24HR/7 Days</p>
                                        <p class="text-white fw-semibold">8009669389 (US)</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








@include('customer.layout2.get_in_touch3')
@include('customer.layout2.footer2')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
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

</script>
</body>

</html>

