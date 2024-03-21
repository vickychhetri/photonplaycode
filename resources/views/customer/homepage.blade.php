<?php

use App\Models\ManageSeo;

$data_record = ManageSeo::where('page_name', ManageSeo::HOME)->first();
$seo_meta = [
    "title" => $data_record->title ?? '',
    "description" => $data_record->description ?? '',
    "keywords" => $data_record->keyword ?? '',
    "schema" => $data_record->schema ?? '',
     "feature_image"=>"assets/customer/images/products_home/Smart-City-VMS-Front.webp"
];
?>
@include('customer.layout2.header')
<!-- banner-text-start -->
{{--    Banner Start --}}
<x-Customer.HomePageBanner/>
{{--Banner end--}}
<!-- undefeated-section-start -->

<section class="undefeated-wrapper pt-lg-0 shadow-lg">
    <div class="container  ">
        <div class="row justify-content-center align-items-center ">
            <div class="col-lg-10">
                <div class="row align-items-center ">
                    <div class="col-lg-6 pe-lg-0">
                        <div class="sucess-undeafeted p-4 py-5 text-white">
                            <p class="text-uppercase">From Idea to Implementation</p>
                            <h4 class="text-uppercase">Our 12+ Years of Undefeated Success</h4>
                            <p style="text-align: justify;">
                                PhotonPlay, a family-owned company, delivers high-quality intelligent transportation
                                systems (ITS) worldwide. For over 12 years, we've catered to system integrators,
                                government authorities, OEMs, and corporations across 30+ countries, focusing on safer,
                                more efficient, and sustainable mobility solutions. Our expertise, innovation, and
                                commitment to smarter transportation make us a trusted partner.
                            </p>
                            <a href="{{route('customer.contact.us')}}"
                               class="btn btn-whites bg-white rounded-0 text-uppercase btn-light px-4">WORK
                                WITH
                                US</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-0 col-md-12">
                        <div class="project-details d-flex d-lg-block flex-column align-items-center">
                            <div class="d-flex mt-md-5 mt-lg-0 mt-4 one-kk">
                                <div class="order-address text-center bg-white p-4 border px-5">
                                    <h2 class="title_home_page_banner fw-bold text-dark">1K+</h2>
                                    <p>Global Expertise with 1K+ Successful Projects</p>
                                </div>
                                <div class="order-address text-center bg-white p-4 border px-5">
                                    <h2 class="title_home_page_banner fw-bold text-dark">12+</h2>
                                    <p class="mb-0">Executing Excellence Worldwide for 12+ Years and Counting</p>
                                </div>
                            </div>
                            <div class="d-flex mt-0 one-kk">
                                <div class="order-address text-center bg-white p-4 border px-5 border-top-0 ">
                                    <h2 class="title_home_page_banner fw-bold text-dark">120+</h2>
                                    <p>120+ Experts, One Mission: To Deliver Outstanding Results</p>
                                </div>
                                <div class="order-address text-center bg-white p-4 border px-5 border-top-0">
                                    <h2 class="title_home_page_banner fw-bold text-dark">50+</h2>
                                    <p class="mb-0">Endless Choices, 50+ Products to Explore</p>
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
                <div class="mb-4">
                    <h2 class="fs-md-2 mt-3 text-uppercase">How Our Signs Help In Road Safety</h2>
                    <p style="text-align: justify;">
                        Step into a safer future with us, your trusted partner and No. 1 choice in Intelligent
                        Transportation Systems. At the forefront of road safety, we offer a comprehensive suite of
                        solutions, including accurate speed limit signs, radar speed signs, and state-of-the-art
                        Variable Message Signs (VMS). Our signs are intended to increase motorist awareness and serve as
                        a reminder to obey the speed limit. To help drivers navigate varying road conditions and
                        unforeseen incidents, our dynamic VMS offers real-time updates on traffic situations, road
                        closures, and emergencies. Our VMS can be used to display a variety of messages, such as traffic
                        updates, road closures, and emergency alerts. This can help drivers stay informed and make
                        better decisions about their travel. We are constantly innovating to develop new and better
                        solutions. We are always looking for ways to improve road safety.
                    </p>
                </div>

                <h2 class="fs-md-2 mt-3 text-uppercase">Products</h2>
                <h6 class="fs-6 text-colorr">Empowering Smarter Mobility with Innovative Product Solutions that Exceed
                    Expectations</h6>

            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-interval="3000" data-bs-ride="carousel">
            <div class="carousel-indicators mb-0 bg-transparent">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                        aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                        aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11"
                        aria-label="Slide 2"></button>


            </div>
            <div class="carousel-inner">
                {{--VMS--}}
                <div class="carousel-item active">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">VARIABLE MESSAGE SIGN (VMS)
                            </h6>
                            {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Smart-City-VMS-Front.webp" alt="Portable Variable
                                        Message Signs" class="lazyload">
                            <div>
                                <a href="{{route('customer.variable.message')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p> Photonplay’s outperforming VMS signs are highly reliable and rugged components of
                                    traffic management ecosystem for motorways, tunnels and urban traffic management
                                    systems.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- VMS END--}}
                @foreach($products as $product)

                    <div class="carousel-item">
                        <div class="products-two d-lg-flex justify-content-between">
                            <div class="common-wdth common-wdth_ inner-col align-self-center">
                                <h6 class="text-uppercase">{{$product->category->title}}</h6>
                                {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                            </div>
                            <div class="mask-layer common-wdth inner-col text-center">
                                <img data-src="/assets/customer/images/products_home/Radar-Speed-Sign.webp"
                                     alt="Radar Speed Sign" class="lazyload">
                                <div>
                                    <a href="{{route('customer.radar.sign',$product->slug)}}"
                                       class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4">Shop
                                        Now</a>
                                </div>
                            </div>
                            <div class="d-lg-flex align-self-center common-wdth inner-col">
                                <div class="ms-md-5">
                                    <p style="text-align: justify;">
                                        The sign has all the standard features combined in one product to make it the
                                        industry's best Radar Speed Sign. The sign acts like a Variable Message Sign to
                                        display graphics and custom text
                                    </p>
                                    <x-Customer.Socialshare/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--PVMS--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">Portable Variable
                                Message Sign</h6>
                            {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/iCop-MTO-Side-front.webp" alt="Portable Variable
                                        Message Signs" class="lazyload">
                            <div>
                                <a href="{{route('customer.portable.variable.message.signs')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify"> Depending on the traffic situation, signs are
                                    efficiently used to warn and guide about traffic congestion, routing information,
                                    speed limits, road work zones, accidents and other incidents on highways,
                                    expressways and arterial roads of cities.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--PVMS End--}}
                {{--VSLS Start--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase"> Variable Speed Limit Sign (VSLS)
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Variable-Speed-Limit-Sign.webp" alt="VSLS"
                                 class="lazyload">
                            <div>
                                <a href="{{route('customer.variable.speed.limit')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p> The ultra-bright and excellent-quality variable speed limit sign is a sign with a
                                    full matrix display area that allows speed limits and graphics to display
                                    practically any speed.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--VSLS End--}}

                {{--LCS Start--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase"> LANE CONTROL SIGN (LCS)
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/LCS-front-2.webp" alt="LCS" class="lazyload">
                            <div>
                                <a href="{{route('customer.lane.control.system')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p> These signs should be given legitimate consideration by drivers, and people on foot
                                    for their own security and for the wellbeing of others. There are various types of
                                    traffic control signs, one of which is the lane control signs.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--LCS End--}}
                {{--  PIDS Start--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase"> Passenger Information Display System (PIDS)
                            </h6>
                            {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/PIDS.webp" alt="Portable Variable
                                        Message Signs" class="lazyload">
                            <div>
                                <a href="/passenger-information-display-systems"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;"> PIDS is a digital and electronic system that provides
                                    information to passengers in various modes of transportation, such as airports,
                                    train stations, bus terminals, and subway stations.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  PIDS End--}}
                {{-- Emergency Telephone Sign--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">EMERGENCY TELEPHONE SIGN
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Emergency-Telephone-Signs.webp" alt="EMERGENCY TELEPHONE SIGN" class="lazyload">
                            <div>
                                <a href="/emergency-signage/product/emergency-telephone-sign"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;"> An emergency telephone sign is a sort of tunnel signage
                                    that indicates where emergency phones may be found.The emergency telephone sign's
                                    aim is to direct travellers to the nearest emergency phone in the event of an
                                    emergency or breakdown.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Emergency Telephone Sign End--}}
                {{-- Emergency Exit Sign--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">EMERGENCY EXIT SIGN
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Emergency-Exit-Sign.webp" alt="EMERGENCY Signs" class="lazyload">
                            <div>
                                <a href="emergency-signage/product/emergency-exit-sign"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;"> These signs identify the location of emergency exits as
                                    well as exits going to different destinations outside the tunnel.</p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Emergency Exit sign End--}}
                {{-- Way Finder--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">WAY FINDER</h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Way-Finder-Light-Glow.webp" alt="WAY FINDER"
                                 class="lazyload">
                            <div>
                                <a href="emergency-signage/product/way-finders"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify"> Way finders is a crucial component of tunnel safety
                                    since it assists vehicles in securely and effectively navigating tunnels. Photonplay
                                    additionally serves to ensure a safe passage from road and rail tunnels. </p>
                                <div class="social-two">

                                    <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)"> <img
                                            src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>

                                    <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                        <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>

                                    <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)"> <img
                                            src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--End WayFinder--}}

                {{-- Vehicle Actuated Speed Display (VASD) Start--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">Vehicle Actuated Speed Display (VASD)
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/VASD.webp" alt="Bus Sign" class="lazyload">
                            <div>
                                <a href="{{route('customer.solution.transit')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;">VASD is a highly reliable and efficient traffic calming
                                    and enforcement system, ideal for roads, highways, and tunnels. Let us help you
                                    enhance road safety and traffic flow with this advanced ITS technology. </p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Vehicle Actuated Speed Display (VASD) END --}}
                {{-- Bus Sign--}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase">Bus Sign
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/FDU-AMBER-FRONT.webp" alt="Bus Sign"
                                 class="lazyload">
                            <div>
                                <a href="{{route('customer.solution.transit')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;">Bus Signs are designed to provide real-time information
                                    to commuters and improve their overall transit experience. Our LED bus signs are
                                    highly visible, even in bright sunlight, and can display various types of
                                    information, including bus routes, arrival times, and other important
                                    information. </p>
                                <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Bus Sign End--}}
                {{--  LED Ticker --}}
                <div class="carousel-item">
                    <div class="products-two d-lg-flex justify-content-between">
                        <div class="common-wdth common-wdth_ inner-col align-self-center">
                            <h6 class="text-uppercase"> LED Ticker
                            </h6>
                        </div>
                        <div class="mask-layer common-wdth inner-col text-center">
                            <img data-src="/assets/customer/images/products_home/Circular_outer_led_ticker.webp"
                                 alt=" LED Tickers" class="lazyload">
                            <div>
                                <a href="{{route('customer.solution.city')}}"
                                   class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                            </div>
                        </div>
                        <div class="d-lg-flex align-self-center common-wdth inner-col">
                            <div class="ms-md-5">
                                <p style="text-align: justify;"> Designed for both indoor and outdoor use, our Tickers
                                    are durable, energy-efficient, and easy to install. They can be integrated with
                                    existing systems or operated as standalone displays, They are versatile solution for
                                    businesses of all types.</p>
                                    <x-Customer.Socialshare/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  LED Ticker End --}}
                {{--   end static--}}
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
<section class="team-members ">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center mb-lg-5">
                <h2 class="fs-md-2 mt-3">SOLUTIONS</h2>
                <p class="text-mutedd"> Transforming Transportation with Cutting-Edge ITS Solutions for Enhanced Safety,
                    Efficiency, and Connectivity</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                <a href="{{route('customer.solution.highway')}}" style="text-decoration: none;">
                    <div class="application-item">
                        <img data-src="{{ asset('assets/customer/images/Highway-Icons.webp') }}" alt="image" class="lazyload">
                        <div class="content-application-items members-profile" style="height: 310px;">
                            <h6 class="text-uppercase text-dark">Highways </h6>
                            <p class="mb-0 text-center">
                                Drive with confidence on the highways with our advanced ITS solutions designed to
                                improve traffic flow and enhance road safety.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0 gap-5">
                <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                    <div class="application-item">
                        <img data-src="{{ asset('assets/customer/images/Tunnels-Icons.webp') }}" alt="image" class="lazyload">
                        <div class="content-application-items members-profile " style="height: 310px;">
                            <h6 class="text-uppercase text-dark">Tunnels </h6>
                            <p class="mb-0 text-center">
                                Navigating tunnels becomes easier and safer with our intelligent ITS solutions that
                                offer comprehensive monitoring, ventilation control, and incident management.
                            </p>
                        </div>
                    </div>

                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                <a href="{{route('customer.solution.city')}}" style="text-decoration: none;">
                    <div class="application-item">
                        <img data-src="{{ asset('assets/customer/images/Smart-cities-icon.webp') }}" alt="image" class="lazyload">
                        <div class="content-application-items members-profile application-item" style="height: 310px;">
                            <h6 class="text-uppercase text-dark">Smart Cities </h6>
                            <p class="mb-0 text-center">
                                From intelligent traffic management to efficient public transportation, we provide
                                innovative solutions that improve urban mobility and reduce environmental impacts.
                            </p>
                        </div>
                    </div>

                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                    <div class="application-item">
                        <img data-src="{{ asset('assets/customer/images/Transits-Icons.webp') }}" alt="image" class="lazyload">
                        <div class="content-application-items members-profile application-item" style="height: 310px;">
                            <h6 class="text-uppercase text-dark">Transit</h6>
                            <p class="mb-0 text-center">
                                Our ITS solutions for transit authorities offer real-time information to commuters,
                                improving the overall transit experience.
                            </p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- ______________Our Solution End-----______________ -->
<section class="contact-form p-3 inquiryform-backgroundsection " id="inquiry">
    <div class="d-flex justify-content-center align-items-center">

        <div class="container">
            <div class="row ">
                <div class="com-md-3">
                </div>
                <div class="col-md-6 mx-auto mb-0 p-4">
                    <form action="{{route('customer.inquery.submit')}}" method="post">
                        @csrf
                        <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                        <div class="row bg-grant p-lg-5  p-3 mb-0">
                            <div class="col-lg-12 d-flex justify-content-center ">
                                <div class="text-center text-white pb-4">
                                    <h4 class="mt-3">Request a Quote</h4>
                                    <p>Ready to work together? Build a project with us!</p>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <input name="country" type="text" id="inputtext5" placeholder="Country*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                            </div>

                            <div class="col-md-12">
                                <input name="first_name" type="text" id="inputtext5"
                                       placeholder="Your Name* / Organization*"
                                       class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                            </div>
                            <div class="col-md-12">
                                <input name="email" type="text" id="inputtext5" placeholder="Email Address*"
                                       class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                            </div>

                            <div class="col-md-12">
                                <input name="phone_number" type="text" id="inputtext5"
                                       placeholder="Phone Number*"
                                       class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                            </div>
                            <div class="col-md-12">
                                <input name="subject" type="text" id="inputtext5" placeholder="Subject*"
                                       class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                            </div>

                            <div class="col-md-12">
                            <textarea name="message" class="form-control rounded-2 mb-4 " rows="4" placeholder="Message"
                                      aria-describedby="passwordHelpBlock"></textarea>
                            </div>
                            <!-- Google Recaptcha -->
                            <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>

                            <div class="text-center">
                                <button type="submit" class="btn text-colorr bg-white px-5 fw-bold py-3 rounded-pill">
                                    Contact
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Key-projects-start -->
<x-Customer.KeyProject/>
<!--___________________ key-project-end_________________ -->
<!-- _____________________Our clint Says start______________________ -->
@include('customer.layout2.client_testimonials')

<!-- _____________________Our clint Says End______________________ -->
<!-- _____________________latest News start______________________ -->
@include('customer.layout2.latest_blog')
<!-- _____________________latest News end______________________ -->
<!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
@include('customer.layout2.footer')

<script src="/assets/customer/js/bootstrap.bundle.min.js" async defer></script>
<script src="/assets/customer/js/jquery.js" ></script>
<script src="/assets/customer/slick/slick.min.js"  ></script>
<script>
    $(document).ready(function () {
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

        $('.clints-content-banner').slick({
            dots: false,
            infinite: false,
            // speed: 3000,
            slidesToShow: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 100000000,
            fade: true,
        })
        $('.clints-content-branding').slick({
            dots: false,
            infinite: true,
            speed: 700,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            // fade:true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                },

            ]
        })
    });
    window.addEventListener('click', function (e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>


<script>
    function shareOnSocialMedia(url, mode) {
        // Define the social media share URL based on the platform
        var facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
        var twitterUrl = "https://twitter.com/intent/tweet?url=" + encodeURIComponent(url);
        var linkedinUrl = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url);
        var pinterestUrl = "https://pinterest.com/pin/create/button/?url=" + encodeURIComponent(url);

        // Open the social media share dialog based on the platform
        if (mode == 1) {
            window.open(facebookUrl, "_blank", "width=600,height=400");
        } else if (mode == 2) {
            window.open(twitterUrl, "_blank", "width=600,height=400");
        } else if (mode == 3) {
            window.open(linkedinUrl, "_blank", "width=600,height=400");
        } else if (mode == 4) {
            window.open(pinterestUrl, "_blank", "width=600,height=400");
        }


    }
</script>




<script src="/dashjs/dash.all.min.js"></script>
{{--<script src="https://reference.dashif.org/dash.js/latest/contrib/akamai/controlbar/ControlBar.js"> </script>--}}
{{--<script src="https://reference.dashif.org/dash.js/latest/dist/dash.all.debug.js"> </script>--}}


<script>
    $(document).ready(function() {
        init();
    });
    var player;
    function init() {
        // var timerS='#'+timer;
        var url = '{{asset('assets/videos/data/output.mpd')}}';
        // var videoElement = document.querySelector('.videoContainer video');
        var videoElement = document.getElementById('videoHeaderPlay');
        player = dashjs.MediaPlayer().create();

        player.initialize(videoElement, url, true);
        player.updateSettings({
            'debug': {
                'logLevel': dashjs.Debug.LOG_LEVEL_NONE /* turns off console logging */
            },
            'streaming': {
                'scheduling': {
                    'scheduleWhilePaused': true,
                    /* stops the player from loading segments while paused */
                },
                'buffer': {
                    'fastSwitchEnabled': true /* enables buffer replacement when switching bitrates for faster switching */
                }
            }
        });
    }
</script>
</div>
</body>
</html>
