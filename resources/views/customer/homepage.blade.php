<?php
$seo_meta=[
    "title"=>"Variable Message Signs | Radar Speed Signs | Driver Feedback Signs - Photonplay",
    "description"=>"PhotonPlay is a financially independent, global technology company established in 2006 with wholly-owned subsidiaries in the USA, Norway, and Australia.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
    <!-- banner-text-start -->
{{--    Banner Start --}}
<x-Customer.HomePageBanner/>
{{--Banner end--}}

    <!-- enddd -->
    <!-- undefeated-section-start -->
    <section class="undefeated-wrapper pt-lg-0 shadow-lg">
        <div class="container " >
            <div class="row justify-content-center align-items-center ">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pe-lg-0">
                            <div class="sucess-undeafeted p-4 py-5 text-white">
                                <p class="text-uppercase">From Idea to Implementation</p>
                                <h4 class="text-uppercase">Our 16+ Years of Undefeated Success</h4>
                                <p>
                                    PhotonPlay, a family-owned Indian company, delivers high-quality intelligent transportation systems (ITS) worldwide. For over 16 years, we've catered to system integrators, government authorities, OEMs, and corporations across 30+ countries, focusing on safer, more efficient, and sustainable mobility solutions. Our expertise, innovation, and commitment to smarter transportation make us a trusted partner.
                                </p>
                                <a href="{{route('customer.contact.us')}}" class="btn btn-whites bg-white rounded-0 text-uppercase btn-light px-4">WORK
                                    WITH
                                    US</a>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-0 col-md-12">
                            <div class="project-details d-flex d-lg-block flex-column align-items-center">
                                <div class="d-flex mt-md-5 mt-lg-0 mt-4 one-kk">
                                    <div class="order-address text-center bg-white p-4 border px-5">
                                        <h1 class="fw-bold text-dark">1K+</h1>
                                        <p>Global Expertise with 1K+ Successful Projects</p>
                                    </div>
                                    <div class="order-address text-center bg-white p-4 border px-5">
                                        <h1 class="fw-bold text-dark">17+</h1>
                                        <p class="mb-0">Executing Excellence Worldwide for 17+ Years and Counting</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-0 one-kk">
                                    <div class="order-address text-center bg-white p-4 border px-5 border-top-0 ">
                                        <h1 class="fw-bold text-dark">120+</h1>
                                        <p>120+ Experts, One Mission: To Deliver Outstanding Results For You</p>
                                    </div>
                                    <div class="order-address text-center bg-white p-4 border px-5 border-top-0">
                                        <h1 class="fw-bold text-dark">50+</h1>
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
                    <h2 class="fs-md-2 mt-3 text-uppercase">Products</h2>
                    <h6 class="fs-6 text-colorr">Empowering Smarter Mobility with Innovative Product Solutions that Exceed Expectations.</h6>
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


                </div>
                <div class="carousel-inner">
                    @foreach($products as $product)

                    <div class="carousel-item {{ $loop->index === 0 ? 'active' : ''}}">
                        <div class="products-two d-lg-flex justify-content-between">
                            <div class="common-wdth common-wdth_ inner-col align-self-center">
                                <h6>{{$product->category->title}}</h6>
{{--                                <p class="mb-0">{{$product->title}}</p>--}}
                            </div>
                            <div class="mask-layer common-wdth inner-col text-center">
                                <img src="/assets/customer/images/KEPLER-US-12.png" alt="Not Found" class="">
                               <div>
                               <a href="{{route('customer.radar.sign',$product->id)}}" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4">Shop
                                    Now</a>
                               </div>
                            </div>
                            <div class="d-lg-flex align-self-center common-wdth inner-col">
                                <div class="ms-md-5">
                                    <h6 class="text-capitalize">Description</h6>
{{--                                    <p>{!! substr(strip_tags($product->description), 0, 100) !!}</p>--}}
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($product->description), 200, '...') }}</p>

                                    <div class="social-two">
                                        <p class="text-capitalize fs-5">share:</p>
                                        <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                        <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                            <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>


                                        <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        {{--Start Static--}}
                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6>WAY FINDERS</h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/way_finder_main.webp" alt="Not Found" class="">
                                    <div>
                                        <a href="signages/way-finders" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4">  Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>

                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6>Portable Variable
                                        Message Signs</h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/pvms_main.webp" alt="Portable Variable
                                        Message Signs" class="">
                                    <div>
                                        <a href="portable-variable-message-signs" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6>EMERGENCY EXIT SIGN
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/emergency_exit.webp" alt="Portable Variable
                                        Message Signs" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>

                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6>EMERGENCY TELEPHONE SIGN
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/emergency_phone.webp" alt="Portable Variable
                                        Message Signs" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6> Passenger Information Display System (PIDS)
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/pids_product.webp" alt="Portable Variable
                                        Message Signs" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6>VARIABLE MESSAGE SIGNS (VMS)
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/vms_product.webp" alt="Portable Variable
                                        Message Signs" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>

                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6> Variable Speed Limit Signs (VSLS)
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/vsls_product.webp" alt="VSLS" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>

                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="products-two d-lg-flex justify-content-between">
                                <div class="common-wdth common-wdth_ inner-col align-self-center">
                                    <h6> LED Tickers
                                    </h6>
                                    {{--                                <p class="mb-0">{{$product->title}}</p>--}}
                                </div>
                                <div class="mask-layer common-wdth inner-col text-center">
                                    <img src="/assets/customer/images/products_home/caterpiller.webp" alt=" LED Tickers" class="">
                                    <div>
                                        <a href="signages/emergency-exit-sign" class="btn btn-primary text-capitalize  py-0 px-3 m-auto mt-3 mb-4"> Know More</a>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-self-center common-wdth inner-col">
                                    <div class="ms-md-5">
                                        <h6 class="text-capitalize">Description</h6>
                                        <p> orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="social-two">
                                            <p class="text-capitalize fs-5">share:</p>
                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',1)">  <img src="/assets/customer/images/facebook2.png" class="ms-0" alt="facebook"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',2)">
                                                <img src="/assets/customer/images/twitter2.png" alt="Twitter"></a>


                                            <a href="#" onclick="shareOnSocialMedia('{{ url()->current() }}',4)">  <img src="/assets/customer/images/pintrest2.png" alt="Pinterest"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




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
                    <p class="text-mutedd"> Transforming Transportation with Cutting-Edge ITS Solutions for Enhanced Safety, Efficiency, and Connectivity</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                    <a href="{{route('customer.solution.highway')}}" style="text-decoration: none;">
                    <div class="application-item">
                        <img src="{{ asset('assets/customer/images/Highway-Icons.png') }}" alt="image">
                        <div class="content-application-items members-profile h-100">
                            <h6 class="text-uppercase text-dark">Highways </h6>
                            <p class="mb-0 text-center">
                            Drive with confidence on the highways with our advanced ITS solutions designed to improve traffic flow and enhance road safety.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/images/highway-Icon.png" alt="Not Found">
                            <h6 class="text-uppercase">Highways</h6>
                            <p class="mb-0 text-center">
                            Drive with confidence on the highways with our advanced ITS solutions designed to improve traffic flow and enhance road safety.
                            </p>
                        </div>
                    </div> -->
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0 gap-5">
                <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                <div class="application-item">
                <img src="{{ asset('assets/customer/images/Tunnels-Icons.png') }}" alt="image">
                        <div class="content-application-items members-profile h-100">
                            <h6 class="text-uppercase text-dark">Tunnels </h6>
                            <p class="mb-0 text-center">
                            Navigating tunnels becomes easier and safer with our intelligent ITS solutions that offer comprehensive monitoring, ventilation control, and incident management.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/images/tunnels-Icon.png" alt="Not Found">
                            <h6 class="text-uppercase">Tunnels</h6>
                            <p class="mb-0 text-center">
                            Navigating tunnels becomes easier and safer with our intelligent ITS solutions that offer comprehensive monitoring, ventilation control, and incident management.
                            </p>
                        </div>
                    </div> -->
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                <a href="{{route('customer.solution.city')}}" style="text-decoration: none;">
                <div class="application-item">
                <img src="{{ asset('assets/customer/images/Smart-cities-icon.png') }}" alt="image">
                        <div class="content-application-items members-profile h-100 application-item">
                            <h6 class="text-uppercase text-dark">Smart Cities </h6>
                            <p class="mb-0 text-center">
                            Navigating tunnels becomes easier and safer with our intelligent ITS solutions that offer comprehensive monitoring, ventilation control, and incident management.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/customer/images/Smart-cities-icon.png"
                                 alt="Not Found">
                            <h6 class="text-uppercase">Smart Cities</h6>
                            <p class="mb-0 text-center">
                            From intelligent traffic management to efficient public transportation, we provide innovative solutions that improve urban mobility and reduce environmental impact.
                           </p>
                        </div>
                    </div> -->
                </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4 mb-xl-0">
                <a href="{{route('customer.solution.tunnel')}}" style="text-decoration: none;">
                <div class="application-item">
                <img src="{{ asset('assets/customer/images/Transits-Icons.png') }}" alt="image">
                        <div class="content-application-items members-profile h-100 application-item">
                            <h6 class="text-uppercase text-dark">Transits</h6>
                            <p class="mb-0 text-center">
                            Navigating tunnels becomes easier and safer with our intelligent ITS solutions that offer comprehensive monitoring, ventilation control, and incident management.
                            </p>
                        </div>
                    <!-- <div class="members-profile h-100">
                        <div class="p-4 ">
                            <img class="profile-placeholderss mb-5" src="/assets/images/Transits-Icon-bus.png" alt="Not Found">
                            <h6 class="text-uppercase">Transits</h6>
                            <p class="mb-0 text-center">
                            Our ITS solutions for transit authorities offer real-time information to commuters, improving the overall transit experience.
                            </p>
                        </div>
                    </div> -->
                </div>
                </a>
                </div>
            </div>
        </div>
    </section>

<!-- contact form -->
{{--@include('customer.layout2.get_in_touch')--}}
<!-- Contact form end -->

    <!-- ______________Our Solution End-----______________ -->
    <section class="contact-form p-3 inquiryform-backgroundsection " id="inquiry" >
        <div class="d-flex justify-content-center align-items-center">

        <div class="container">
            <div class="row ">
                <div class="com-md-3">
                </div>
                <div class="col-md-6 mx-auto mb-0 p-4" >
                    <form action="{{route('customer.inquery.submit')}}" method="post">
                        @csrf
                        <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                        <div class="row bg-grant p-lg-5  p-3 mb-0" >
                        <div class="col-lg-12 d-flex justify-content-center ">
                            <div class="text-center text-white pb-4">
                                <h4 class="mt-3">Request a Quote</h4>
                                <p>Ready to work together? Build a project with us!</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input name="first_name" type="text" id="inputtext5" placeholder="Your Name* / Organization*"
                                   class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <input name="email" type="text" id="inputtext5" placeholder="Email Address*"
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
                        <div class="text-center">
                            <button type="submit" class="btn text-colorr bg-white px-5 fw-bold py-3 rounded-pill">Contact</button>
                        </div>
                        </div>
                    </form>
                </div>
{{--                <div class="col-md-5">--}}
{{--                    <div class="imge-qutes h-100">--}}
{{--                        <img src="/assets/customer/images/businessman.jpg" alt="Not Found">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        </div>
    </section>
    <!-- team-members-start -->
{{--    <section class="team-members">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="text-center mb-lg-5">--}}
{{--                        <h2 class="fs-md-2 mt-3">Team Members</h2>--}}
{{--                        <p class="text-mutedd">A break from all your worries sure would help a lot and you know <br>--}}
{{--                            then a--}}
{{--                            tale of a fateful trip this tropic port</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @foreach($team_members as $member)--}}

{{--                <div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12 mb-xl-0 mb-4">--}}
{{--                    <div class="members-profile h-100">--}}
{{--                        <div class="p-4 ">--}}
{{--                            <img class="profile-placeholder" src="{{asset('storage/'.$member->image)}}" alt="{{$member->name}}">--}}
{{--                            <h6 class="text-capitalize">{{$member->name}}</h6>--}}
{{--                            <p class="text-center"> {{$member->detail}}--}}
{{--                            </p>--}}
{{--                            <img class="tripple-icons" src="/assets/customer/images/tripple-icons.png" alt="Not Found">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- team-members-end -->

    <!-- Key-projects-start -->

    <x-Customer.KeyProject/>
    <!--___________________ key-project-end_________________ -->

    <!-- _____________________Our clint Says start______________________ -->
@include('customer.layout2.client_testimonials')

<!-- _____________________Our clint Says End______________________ -->
    <!-- _____________________latest News start______________________ -->
    <section class="latest-wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <h2 class="fs-md-2 mt-3 ">Latest News</h2>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="text-mutedd">
                                "Stay Up-to-Date on the Latest Innovations and Industry News in Transportation with Our Latest News Section.
                                <br>
                            Check back regularly for the latest updates and insights!"
                            </p>
                            <a href="{{route('customer.blog')}}" class="btn btn-outline rounded-2">Load More</a>
                        </div>
                    </div>
                </div>

                @foreach($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="inner-cqategory mb-lg-0 mb-4">
                            <div class="">
                                <a href="{{route("customer.blog_show",$blog->slug)}}" > <img src="{{asset("storage/".$blog->image)}}" alt="" class="mb-4 category-image img-fluid w-100"> </a>
                            </div>
                            <div class="p-4">
                                <p class="btn-light">{{$blog->category}}</p>
                                <a href="{{route("customer.blog_show",$blog->slug)}}"  class="text-decoration-none">  <p class="dollor-seat"> {{$blog->title}}
                                    </p>
                                </a>
                                <p>
                                    {{$blog->description}}  <a href="{{route("customer.blog_show",$blog->slug)}}" >Read More..</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- _____________________latest News end______________________ -->
    <!-- _____________________ourclint-last-start___________________ -->
    @include('customer.layout2.our_clients')
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
            infinite: true,
            speed: 700,
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
    function shareOnSocialMedia(url,mode) {
        // Define the social media share URL based on the platform
        var facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
        var twitterUrl = "https://twitter.com/intent/tweet?url=" + encodeURIComponent(url);
        var linkedinUrl = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url);
        var pinterestUrl = "https://pinterest.com/pin/create/button/?url=" + encodeURIComponent(url);

        // Open the social media share dialog based on the platform
        if(mode==1){
            window.open(facebookUrl, "_blank", "width=600,height=400");
        }else if(mode==2){
            window.open(twitterUrl, "_blank", "width=600,height=400");
        }
        else if(mode==3){
            window.open(linkedinUrl, "_blank", "width=600,height=400");
        }
        else if(mode==4){
            window.open(pinterestUrl, "_blank", "width=600,height=400");
        }




    }
</script>
</div>
</body>

