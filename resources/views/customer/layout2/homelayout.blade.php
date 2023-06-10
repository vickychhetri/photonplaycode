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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/customer/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/customer/slick/slick-theme.css" />
    <link rel="stylesheet" href="/assets/customer/css/style.css">

    <title>Home Page</title>

</head>
<body>
<div>
    <header class="header bg-white py-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="/assets/customer/images/logo-dark.png" alt="Not Found"></a>
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
                            <a class="nav-link text-uppercase" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">COMPANY</a>
                        </li>

                        <li class="nav-item dropdown position-relative solution-pos">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                SOLUTIONS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SOLUTIONS</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <div class="position-absolute down-image">
                                <img src="/assets/customer/images/Down-Arrow.png" alt="Not Found">
                            </div>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">NEWS & EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">CONTACT</a>
                        </li>
                    </ul>
                    <form class=" d-flex header-side mt-lg-0 mt-4 align-items-center" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <div class="hease-user">
                            <!-- <div class="dropdown">
                                <button class="btn dropdown-toggle border-0 shadow-none p-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/assets/customer/images/user.png" alt="Not Found" class="img-fluid me-5">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-capitalize" href="#">Profile</a></li>
                                    <li><a class="dropdown-item text-capitalize py-3" href="#">Change Password</a></li>
                                    <li><a class="dropdown-item text-capitalize" href="#">Log Out</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <img src="/assets/customer/images/search.png" alt="Not Found" class="img-fluid" width="18px"
                             height="18px">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- banner-text-start -->
    <section class="pt-0 pb-sm-4 pb-lg-5">
        <div class="tokoyo-banner">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                        <h1>From Tokyo to Los Angles</h1>
                        <p class="text-capitalize">contributing to a efficient road and transit network</p>
                        <button class="btn btn-primary text-uppercase border-0 rounded-0 button-slice">About US</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- enddd -->
    <!-- undefeated-section-start -->
    <section class="undefeated-wrapper pt-lg-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pe-lg-0">
                            <div class="sucess-undeafeted p-4 text-white">
                                <p class="text-uppercase">EXPERIENCE, KNOW-HOW AND FLEXIBILITY</p>
                                <h4 class="text-uppercase">16+ YEARS OF UNDEFEATED SUCESS</h4>
                                <p>
                                    PHOTONPLAY is a family owned, India based design, develop and manufacturing of
                                    Systems for the ITS industry since 2006. With subsidiary offices in US, Australia
                                    and Norway plus distribution facility in the US and representatives all over the
                                    world, PHOTONPLAY has satisfied customers (System integrators, Govt Authorities,
                                    OEMs and corporates) in over 30 countries worldwide.
                                </p>
                                <button class="btn btn-whites bg-white rounded-0 text-uppercase btn-light px-4">WORK
                                    WITH
                                    US</button>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 ">
                            <div class="project-details d-flex d-lg-block flex-column align-items-center">
                                <div class="d-flex mt-md-5 mt-lg-0 mt-4">
                                    <div class="order-address text-center bg-white p-4 border px-5">
                                        <h4>1K</h4>
                                        <p>Projects</p>
                                    </div>
                                    <div class="order-address text-center bg-white p-4 border px-5">
                                        <h4>17+</h4>
                                        <p class="mb-0">Experience</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-0">
                                    <div class="order-address text-center bg-white p-4 border px-5 border-top-0">
                                        <h4>120+</h4>
                                        <p>Projects</p>
                                    </div>
                                    <div class="order-address text-center bg-white p-4 border px-5 border-top-0">
                                        <h4>$82 M</h4>
                                        <p class="mb-0">Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slider-start -->

    <section class="products bg-white pt-0">
        <div class="container overflow-hidden pb-4 pt-0">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">Our Products</h2>
                    <h6 class="fs-6 text-colorr">Our product offers innovative solutions to meet your needs and exceed
                        your
                        expectations.</h6>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators mb-0 bg-transparent">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="products-two d-lg-flex justify-content-between">
                            <div class="common-wdth common-wdth_ inner-col align-self-center">
                                <h6>Radar Speed Sign</h6>
                                <p class="mb-0">R1200</p>
                            </div>
                            <div class="mask-layer common-wdth inner-col text-center">
                                <img src="/assets/customer/images/KEPLER-US-12.png" alt="Not Found" class="">
                                <button class="btn btn-primary text-capitalize d-block py-0 px-3 m-auto mt-3 mb-4">Shop
                                    Now</button>
                            </div>
                            <div class="d-lg-flex align-items-start flex-column common-wdth inner-col">
                                <div class="ms-md-5">
                                    <h6 class="text-capitalize">Description</h6>
                                    <p>Product description here Product description here <br>
                                        Product description here Product description here<br>
                                        Product description here Product description here<br>
                                        Product description here</p>

                                    <p>Product description here Product description here<br>
                                        Product description here Product description here<br>
                                        Product description here </p>
                                    <div class="social-two">
                                        <p class="text-capitalize fs-5">share:</p>
                                        <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="Not Found">
                                        <img src="/assets/customer/images/twitter2.png" alt="Not Found">
                                        <img src="/assets/customer/images/instagram2.png" alt="Not Found">
                                        <img src="/assets/customer/images/pintrest2.png" alt="Not Found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="products-two d-lg-flex justify-content-between">
                            <div class="common-wdth common-wdth_ inner-col align-self-center">
                                <h6>Radar Speed Sign</h6>
                                <p class="mb-0">R1200</p>
                            </div>
                            <div class="mask-layer common-wdth inner-col text-center">
                                <img src="/assets/customer/images/KEPLER-US-12.png" alt="Not Found" class="">
                                <button class="btn btn-primary text-capitalize d-block py-0 px-3 m-auto mt-3 mb-4">Shop
                                    Now</button>
                            </div>
                            <div class="d-lg-flex align-items-start flex-column common-wdth inner-col">
                                <div class="ms-md-5">
                                    <h6 class="text-capitalize">Description</h6>
                                    <p>Product description here Product description here <br>
                                        Product description here Product description here<br>
                                        Product description here Product description here<br>
                                        Product description here</p>

                                    <p>Product description here Product description here<br>
                                        Product description here Product description here<br>
                                        Product description here </p>
                                    <div class="social-two">
                                        <p class="text-capitalize fs-5">share:</p>
                                        <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="Not Found">
                                        <img src="/assets/customer/images/twitter2.png" alt="Not Found">
                                        <img src="/assets/customer/images/instagram2.png" alt="Not Found">
                                        <img src="/assets/customer/images/pintrest2.png" alt="Not Found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- slider-end -->
    <!-- ______________Our Solution Start-----______________ -->
    <section class="team-members pt-0">
        <div class="container">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">OUR SOLUTIONS</h2>
                    <p class="text-mutedd">Our innovative and reliable ITS solutions empower governments, transit
                        authorities, <br> and businesses to enhance safety, efficiency, and connectivity in the
                        transportation ecosystem.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/customer/images/factory.png" alt="Not Found">
                            <h6 class="text-capitalize">Highways</h6>
                            <p class="mb-0 text-center">Experience improved traffic flow and safer journeys with our
                                cutting-edge
                                ITS
                                solutions tailored to highways and tunnels.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0 gap-5">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/customer/images/freedom.png" alt="Not Found">
                            <h6 class="text-capitalize">Tunnels</h6>
                            <p class="mb-0 text-center">Navigate through tunnels with ease and confidence with our
                                advanced ITS
                                solutions
                                designed for optimal safety and efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/customer/images/growth-graph.png"
                                 alt="Not Found">
                            <h6 class="text-capitalize">Smart Cities</h6>
                            <p class="mb-0 text-center">Transform urban mobility and drive sustainable growth with our
                                comprehensive
                                ITS
                                solutions that enable seamless integration and smarter decision-making for cities of the
                                future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/customer/images/branch.png" alt="Not Found">
                            <h6 class="text-capitalize">Transits</h6>
                            <p class="mb-0 text-center">Revolutionize public transportation systems with our advanced
                                ITS solutions
                                that offer
                                real-time data, enhanced safety features, and improved passenger experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ______________Our Solution End-----______________ -->
    <section class="contact-form pt-3">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6 mx-auto">
                    <div class="row bg-grant p-lg-5  p-3">
                        <div class="col-lg-12">
                            <div class="text-start text-white pb-4">
                                <h4 class="mt-3">Request a Quote</h4>
                                <p>Ready to work together? Build a project with us!</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="password" id="inputPassword5" placeholder="Your Name* / Organization*"
                                   class="form-control rounded-2 mb-4" aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <input type="password" id="inputPassword5" placeholder="Email Address*"
                                   class="form-control rounded-2 mb-4" aria-describedby="passwordHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <input type="password" id="inputPassword5" placeholder="Subject*"
                                   class="form-control rounded-2 mb-4" aria-describedby="passwordHelpBlock">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control rounded-2 mb-4 " rows="4" placeholder="Message"
                                      aria-describedby="passwordHelpBlock"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn text-colorr bg-white px-5 fw-bold py-3 rounded-pill">Contact</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="imge-qutes h-100">
                        <img src="/assets/customer/images/businessman.jpg" alt="Not Found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-members-start -->
    <section class="team-members pb-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2 mt-3">Team Members</h2>
                        <p class="text-mutedd">A break from all your worries sure would help a lot and you know <br>
                            then a
                            tale of a fateful trip this tropic port</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12 mb-xl-0 mb-4">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholder" src="/assets/customer/images/download.png" alt="Not Found">
                            <h6 class="text-capitalize">Full Name</h6>
                            <p class="text-center">Detials Here Detials Here Detials <br> Here Detials Here Detials Here
                                <br> Detials
                                Here
                            </p>
                            <img class="tripple-icons" src="/assets/customer/images/tripple-icons.png" alt="Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12 mb-xl-0 mb-4">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholder" src="/assets/customer/images/download.png" alt="Not Found">
                            <h6 class="text-capitalize">Full Name</h6>
                            <p class="text-center">Detials Here Detials Here Detials <br> Here Detials Here Detials Here
                                <br> Detials
                                Here
                            </p>
                            <img class="tripple-icons" src="/assets/customer/images/tripple-icons.png" alt="Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12 mb-xl-0 mb-4">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholder" src="/assets/customer/images/download.png" alt="Not Found">
                            <h6 class="text-capitalize">Full Name</h6>
                            <p class="text-center">Detials Here Detials Here Detials <br> Here Detials Here Detials Here
                                <br> Detials
                                Here
                            </p>
                            <img class="tripple-icons" src="/assets/customer/images/tripple-icons.png" alt="Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12 mb-xl-0 mb-4">
                    <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholder" src="/assets/customer/images/download.png" alt="Not Found">
                            <h6 class="text-capitalize">Full Name</h6>
                            <p class="text-center">Detials Here Detials Here Detials <br> Here Detials Here Detials Here
                                <br> Detials
                                Here
                            </p>
                            <img class="tripple-icons" src="/assets/customer/images/tripple-icons.png" alt="Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-members-end -->
    <!-- Key-projects-start -->
    <section class="key-project pb-0">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">Key Projects</h2>
                </div>
            </div>
        </div>
        <div class="key-slider mb-0">
            <div>
                <img src="/assets/customer/images/pexels-luna.jpg" alt="Not-Found" class="img-fluid">
            </div>
            <div>
                <img src="/assets/customer/images/pexels-luna.jpg" alt="Not-Found" class="img-fluid">
            </div>
            <div>
                <img src="/assets/customer/images/pexels-luna.jpg" alt="Not-Found" class="img-fluid">
            </div>

        </div>
    </section>
    <!--___________________ key-project-end_________________ -->
    <!-- _____________________Our clint Says start______________________ -->
    <section class="our-clints pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mb-lg-5">
                        <h2 class="fs-md-2 mt-3">Our Client Says</h2>
                        <p class="text-mutedd">A break from all your worries sure would help a lot and you know <br>
                            then a
                            tale of a fateful trip this tropic port</p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row clint-wrapperr">
                        <!-- <div class=""> -->
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals are operate bove the law it's time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals are operate bove the law it's time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="members-profile h-100 mx-3 h-100">
                                <div class="p-4 position-re lative h-100 inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        <img src="/assets/customer/images/quotion.png" alt="Not Found">
                                    </div>
                                    <div class="d-flex">
                                        <img class="profile-placeholder rounded-circle cicles"
                                             src="/assets/customer/images/download.png" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">
                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">Full Name</p>
                                            <p class="mb-0">Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p>The ship set ground on the shore of this uncharted desert isle with mad
                                            illigan the kid too the millionaire and his wife in a freak the
                                            powerless in a world of criminals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- _____________________Our clint Says End______________________ -->
    <!-- _____________________latest News start______________________ -->
    <section class="latest-wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <h2 class="fs-md-2 mt-3">Latest News</h2>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="text-mutedd">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                <br>
                                tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <button class="btn btn-outline rounded-2">Load More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner-cqategory mb-lg-0 mb-4">
                        <div class="category-image"></div>
                        <div class="p-4">
                            <p class="btn-light">CATEGORY</p>
                            <p class="dollor-seat">Topic here Topic here Topic here Topic here Topic here Topic here
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner-cqategory mb-lg-0 mb-4">
                        <div class="category-image"></div>
                        <div class="p-4">
                            <p class="btn-light">CATEGORY</p>
                            <p class="dollor-seat">Topic here Topic here Topic here Topic here Topic here Topic here
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inner-cqategory">
                        <div class="category-image"></div>
                        <div class="p-4">
                            <p class="btn-light">CATEGORY</p>
                            <p class="dollor-seat">Topic here Topic here Topic here Topic here Topic here Topic here
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- _____________________latest News end______________________ -->
    <!-- _____________________ourclint-last-start___________________ -->
    <section class="our-clints-last">
        <div class="mb-lg-5 text-center">
            <h2 class="fs-md-2 mt-3">Our Clients</h2>
        </div>
        <div class="container">
            <div class="px-4">
                <div class="clints-content mb-0 d-flex align-items-center">
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="/assets/customer/images/brand-logo.png" class="d-block mx-auto" />
                        </div>
                    </div>
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="/assets/customer/images/brand-logo.png" class="d-block mx-auto" />
                        </div>
                    </div>
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="/assets/customer/images/brand-logo.png" class="d-block mx-auto" />
                        </div>
                    </div>
                    <div>
                        <div class="px-2 branding-diss">
                            <img src="/assets/customer/images/brand-logo.png" class="d-block mx-auto" />
                        </div>
                    </div>
                    <div>
                        <div class="px-2">
                            <img src="/assets/customer/images/brand-logo.png" class="d-block mx-auto" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- _____________________ourclint-last-end___________________ -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="" class="subscribr-form">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                       class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section px-2">
        <div class="footer-section-inner d-lg-flex">
            <div class="footer-item footer-item-1">
                <div class="logo-bottom">
                    <img src="/assets/customer/images/logo-dark.png" alt="">
                </div>
                <div class="description">
                    PHOTONPLAY is a family owned, India based design, develop and manufacturing of Systems for the ITS
                    industry since 2006. With subsidiary offices in US, Australia and Norway plus distribution facility
                    in
                    the US and representatives all over the world, PHOTONPLAY has satisfied customers (System
                    integrators,
                    Govt Authorities, OEMs and corporates) in over 30 countries worldwide.
                </div>
                <ul class="social-media pt-md-5 py-4">
                    <li><a href="#"><img src="/assets/customer/images/facebook.svg" /></a></li>
                    <li><a href="#"><img src="/assets/customer/images/twitter.jpg" /></a></li>
                    <li><a href="#"><img src="/assets/customer/images/linkdin.jpg" /></a></li>
                    <li><a href="#"><img src="/assets/customer/images/instagram.png" /></a></li>
                    <!-- <li><a href="#"><img src="/assets/customer/images/facebook.svg" /></a></li> -->
                </ul>
            </div>
            <div class="footer-item footer-item-2">
                <h2>SOLUTIONS</h2>
                <ul class="ps-3">
                    <li><a href="#">Variable Message Signs</a></li>
                    <li><a href="#">Radar Speed Signs</a></li>
                    <li><a href="#">LED Destination Signs</a></li>
                    <li><a href="#">Variable Speed Limit Signs</a></li>
                    <li><a href="#">Toll Booths</a></li>
                </ul>
            </div>
            <div class="footer-item footer-item-3">
                <h2>PUBLIC TRANSPORT</h2>
                <ul class="ps-3">
                    <li><a href="#">Bus Systems</a></li>
                    <li><a href="#">Train Systems</a></li>
                </ul>
            </div>
            <div class="footer-item footer-item-4">
                <h2>NEWS & EVENTS</h2>
                <ul class="ps-3">
                    <li><a href="#">7 Benefits of Using Speed Sign...</a></li>
                    <li><a href="#">How Does a Speed Radar Sign Wo...</a></li>
                    <li><a href="#">What are Electronic Speed Limi...</a></li>
                    <li><a href="#">Importance of digital speed si...</a></li>
                </ul>
            </div>
            <div class="footer-item footer-item-5">
                <h2>Get in Touch with Us</h2>
                <div class="contact-info">
                    <div class="contact-info-item">
                        <a href="#"><img src="/assets/customer/images/phone.svg" /> 800.966.9329 (US)</a>
                        <a href="#"><img src="/assets/customer/images/phone.svg" /> 800.966.9329 (US)</a>
                        <a href="#"><img src="/assets/customer/images/message.png" /> sales@photonplay.com</a>
                    </div>
                    <button class="btn btn-primary mt-3">Contact</button>
                </div>
            </div>
        </div>
    </footer>
    <section class="sec-copyright py-3 border-top px-2 text-center">
        <div>Photon Play Systems - © 2023 All Rights Reserved <a href="#">Privacy Policy</a></div>
    </section>
    <script src="/assets/customer/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/customer/js/jquery.js"></script>
    <script src="/assets/customer/slick/slick.min.js"></script>
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
         $('.clints-content-branding').slick({
        dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            autoplay:true;
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
    </script>
</div>
</body>
</html>
