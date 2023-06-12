<?php
$seo_meta=[
    "title"=>"{$product->title}",
    "description"=>"{$product->description}",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
<!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
{{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"--}}
{{--                    aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"--}}
{{--                    aria-label="Slide 3"></button>--}}
            </div>
            <div class="carousel-inner">
                @for ($i=1; $i<=3; $i++)
                <div class="carousel-item active">
                    <div class="banner">
                        <div
                            class="banner-image d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-around p-2">
                            <div class="position-relative heading-banner ">
                                <h2 class="">{{$product->title}}
                                    <p class="mb-0"><span> Message Sign-MTO</span></p>
                                </h2>
                                <div class="fs-6 mt-md-4">
                                    <p class="text-dark">No. 1 in Traffic Calming Solution</p>
                                </div>
                                <a href="{{asset("storage/".$product->brochure)}} " type="button"
                                    class="py-2 rounded border-0 px-4 mt-5 bg-white outline-0 btn-light text-decoration-none">Download
                                    Brochure <img class="fs-4 ms-2" width="10" src="{{asset('assets\customer\images\downarrow.png')}}"
                                        alt=""></a>
                                <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"
                                        class="img-fluid d-none d-md-block" alt="not-found"></div>
                                <div
                                    class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                            <!-- <div class="position-absolute top-50 start-0 translate-middle"> -->
                            <img src="{{asset('assets\customer\images\MTO.png')}}" alt="Not Found" class="img-fluid mt-3 mt-sm-0">
                            <!-- </div> -->
                            <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Not Found"
                                class="img-fluid d-none d-md-block">
                            <!-- <img src="./assets/images/sky-sights.jpg" alt="Not Found"> -->
                        </div>

                    </div>
                </div>
                @endfor

            </div>
{{--            <button class="carousel-control-prev" data-bs-target="#carouselExampleDark" type="button"--}}
{{--                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Previous</span>--}}
{{--            </button>--}}
{{--            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"--}}
{{--                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Next</span>--}}
{{--            </button>--}}
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
        </div>
    </section>

    <!-- SPECIFICATION Sec Accordion -->

    <!-- Banner Sec End -->

    <!-- Desc and specification -->
    <section class="sepeicification bg-light position-relative">
        <div class="container pb-lg-5">
            <div class="accodion-wrapper pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <h4 class="text-capitalize">Description</h4>
                            <p>
                                {{$product->description}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h4>Specification</h4>
                        </div>
                        <div class="circle-floow foloowers position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                @foreach ($product->specs as $spec)
                                    <div class="accordion-item border-0 position-inherit ">
                                        <h2 class="accordion-header" id="flush-headingOne{{$spec->id}}">
                                            <button class="accordion-button collapsed optic bg-white te-3 pb-2 shadow-none text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$spec->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$spec->id}}">
                                                {{$spec->spec}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{$spec->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$spec->id}}" data-bs-parent="#accordionFlushExample1">
                                            <div class="accordion-body pt-0">
                                                {!! $spec->description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="stone-accordian position-absolute d-flex align-items-center ">
                                    <img src="{{asset('assets/customer/images/object.png')}}" class="img-fluid circle-image d-none d-md-block" alt="not-found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="dotted-imag img-fluid d-none d-md-inline" src="{{asset('assets/customer/images/dotted-tran.png')}}" alt="not-found">
            </div>
    </section>
    <!-- Dimension section -->
    <section class="dimention-sec">
        <div class="heading-sec">
            <h2 class="fs-2 mt-3">DIMENSION</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($product->galleries as $gallery)
                <div class="col-md-3">
                    <div class="dimention-box d-flex align-items-center justify-content-center flex-column px-2 py-4">
                        <img src="{{asset('storage/'.$gallery->image)}}" alt="" class="img-fluid product-pvms-icop">
                        <div class="plus-search">
                            <img src="{{asset('assets\customer\images\zoom-copyr.png')}}" width="18px" height="18px" alt="zoom">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


<!-- Portable Variable Message Sign’s -->
<section class="portable px-lg-5">
    <div class="container-fluid">
        <div class="message-sign d-flex  justify-content-center">
            <h6 class="">iCop | Portable Variable Message Sign’s</h6>

        </div>
        <div class="heading-sec">
            <h2 class="fs-2 mt-3">APPLICATIONS</h2>
        </div>
        <div class="d-flex mb-5 message-box gap-3 mt-3 flex-xl-nowrap flex-wrap justify-content-center">
            <div class="app-box  p-2 text-white  d-flex align-items-center justify-content-center"> Cities
                and Counties</div>
            <div class="app-box p-2 text-white  d-flex align-items-center justify-content-center"> Highways
                Constructions</div>
            <div class="app-box p-2 text-white  d-flex align-items-center justify-content-center"> Ministry of
                Transportation</div>
            <div class="app-box p-2 text-white  d-flex align-items-center justify-content-center"> Smart
                Work Zones</div>
            <div class="app-box p-2 text-white  d-flex align-items-center justify-content-center"> Special
                Areas</div>
        </div>
        <div class="text-center">
            <a href="#inquiry" class="btn-primary-rounded">Get Quote</a>
        </div>
    </div>
</section>
    <section class="connectivity bg-light">
        <div class="container">
            <h3 class="text-center fs-2">Connectivity with Sign</h3>
            <div class="sub-header-message text-center col-md-6 mx-auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-3 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\on-the-sign.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>On The Sign</h4>
                        <p class="mb-0">Controller</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-3 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\remote.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>On The Sign</h4>
                        <p class="mb-0">Controller</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\blu.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>On The Sign</h4>
                        <p class="mb-0">Controller</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('customer.layout2.get_in_touch')

    @include('customer.layout2.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
