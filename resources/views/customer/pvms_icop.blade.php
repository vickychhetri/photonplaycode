<?php
$seo_meta=[
    "title"=>"{$product->meta_title}",
    "description"=>"{$product->meta_description}",
    "keywords"=>"{$product->meta_keyword}",
    "schema"=>"{$product->schema}"
];
?>
@include('customer.layout2.header')
<!-- banner-start -->
    <section class="banner-inner pt-0 pb-0">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            </div>
            <div class="carousel-inner">
                @for ($i=1; $i<=3; $i++)
                <div class="carousel-item active">
                    <div class="banner">
                        <div
                            class="banner-image d-flex flex-wrap flex-sm-nowrap align-items-center justify-content-around p-2">
                            <div class="position-relative heading-banner ">
                                <h1 class="text-dark">{{$product->title}}
                                    <p class="mb-0 h3 font-weight-bold"><span> Highly  Equipped and Robust Message Sign  </span></p>
                                </h1>
                                <div class="">
                                    <p class="text-dark">No. 1 in Traffic Calming Solution</p>
                                </div>
                                <a href="{{asset("storage/".$product->brochure)}} " type="button"
                                    class="py-2 rounded border-0 px-4 mt-5 bg-white outline-0 btn-light text-decoration-none" target="_blank">Download
                                    Brochure <img class="fs-4 ms-2" width="10" src="{{asset('assets\customer\images\downarrow.png')}}"
                                        alt=""></a>
                                <div class="zigzack d-flex justify-content-start"><img src="{{asset('assets\customer\images\ziczac.png')}}"
                                        class="img-fluid d-none d-md-block" alt="not-found"></div>
                                <div
                                    class="circle-dotted position-absolute w-100 d-none d-md-flex align-items-center justify-content-start">
                                    <img src="{{asset('assets\customer\images\circles.png')}}" alt="Not Found" class="img-fluid">
                                </div>
                            </div>
                            <div class="desktop-display">
                                <img src="{{asset('storage/'.$product->cover_image)}}" alt="Not Found" class="mt-3 mt-sm-0" style="height: 450px;">



                            </div>
                            <!-- <div class="position-absolute top-50 start-0 translate-middle"> -->

                            <!-- </div> -->
                            <img src="{{asset('assets\customer\images\circlecolor.png')}}" alt="Not Found"
                                class="img-fluid d-none d-md-block">
                            <!-- <img src="./assets/images/sky-sights.jpg" alt="Not Found"> -->
                        </div>

                    </div>
                </div>
                @endfor

            </div>

        </div>
    </section>

    <!-- SPECIFICATION Sec Accordion -->

    <!-- Banner Sec End -->

    <!-- Desc and specification -->
    <section class="sepeicification bg-light position-relative">
        <div class="container ">
            <div class="accodion-wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div>
{{--                            <h4 class="text-capitalize">Description</h4>--}}
                            <p style="text-align: justify;">
                                {{$product->description}}
                            </p>
                            <div class="thumb-image d-flex justify-content-center">
                                <div class="row ">
                                    @forelse ($product->images as $image)
                                        <div class="col-md-4">
                                            <div class="thumb-image-item mb-3 " onclick="showModal('{{asset('storage/'.$image->image)}}')" >
                                                <img src="{{asset('storage/'.$image->image)}}" alt="" class="img-fluid" style="height: 200px;width: 200px;">
                                                <img src="{{asset('assets/customer/images/zoom-in.png')}}" alt="" onclick="showModal('{{asset('storage/'.$image->image)}}')" class="zoom-in">
                                            </div>

                                        </div>
                                    @empty

                                    @endforelse

                                    <x-Customer.ShowImageDisplay/>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mt-4 d-flex justify-content-center">
                            <h2 class="fs-md-2  mb-5 text-center">Specification</h2>
                        </div>
                        <div class="circle-floow foloowers position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                @foreach ($product->specs as $index => $spec)
                                    <div class="accordion-item border-0 position-inherit ">
                                        <h2 class="accordion-header" id="flush-headingOne{{$spec->id}}">
                                            <button class="accordion-button collapsed optic bg-white te-3 pb-2 shadow-none text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$spec->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$spec->id}}">
                                                {{$spec->spec}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{$spec->id}}" class="accordion-collapse collapse {{$index==0?'show':''}}" aria-labelledby="flush-headingOne{{$spec->id}}" data-bs-parent="#accordionFlushExample1">
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
        </div>
    </section>
    <!-- Dimension section -->
    <section class="dimention-sec pt-1" >
        <div class="heading-sec">
            <h2 class="fs-2 mt-3 title-text-h1">DIMENSIONS</h2>
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
<section class="portable px-lg-5 pt-0">
    <div class="container-fluid">
        <div class="message-sign d-flex  justify-content-center">
{{--            <h6 class="">iCop | Portable Variable Message Sign’s</h6>--}}

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
                <p>We offer flexible and user-friendly signage access options . The sign can be accessed in multiple ways either from remote or from on site </p>
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
                        <h4>Remote</h4>
                        <p class="mb-0">Cloud Access</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="connectivity-box text-white text-center p-4 mb-md-0">
                        <div
                            class="connectivity-box__  mx-auto mb-2 bg-white rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets\customer\images\blu.png')}}" alt="" class="object-fit-contain">
                        </div>
                        <h4>Near The Sign</h4>
                        <p class="mb-0">Bluetooth Access</p>
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
</body>
</html>
