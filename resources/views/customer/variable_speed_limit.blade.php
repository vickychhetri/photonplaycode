<?php
$seo_meta=[
    "title"=>"{$page->meta_title}",
    "description"=>"{$page->meta_description}",
    "keywords"=>"{$page->meta_keyword}",
    "schema"=>"{$page->schema}",
    "feature_image"=>"storage/image/E19BwMBOVflgEtgP0G4eHQlxFjJUE6fTpgHHQAAi.png"
];
?>
@include('customer.layout2.header')
<!-- Modal Overlay and Image -->


    <!-- Banner sec -->
    <section class="highyway-imageses py-4" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
        <div class="container">
            <div class="slider-content ">
                <div class="imaged m-auto">
                    <div class="city-wrap">
                        <h1 class=" text-white fw-normal mb-1 title-text-h2">{{$page->title}}</h1>
                        <p class=" text-white fw-normal mt-2 mb-2 ">Highly visible and innovative, creating instant awareness of <br/>local speed limit</p>
                        <a  href="#inquiry" class="btn-primary-rounded p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model" >GET QUOTE</a>
                    </div>
                    <div class="desktop-display">
                    <img src="{{asset('storage/'.$page->cover_image)}}"  alt="alt" class="d-block img-fluid h-75 product-feature-model-image"  style="transform: scale(1.2);"  >
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Banner Sec End -->

    <!-- Desc and specification -->
    <section class="sepeicification bg-light position-relative">
        <div class="container ">
            <div class="accodion-wrapper pb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div>
{{--                            <h4 class="text-capitalize">Description</h4>--}}
                            <p style="text-align: justify;">
                            {!! $page->description !!}
                            </p>
                            <div class="thumb-image d-flex justify-content-center">
                                <div class="row">
                                    @forelse ($page->images as $image)
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
                    <div class="col-md-8 ">
                        <div class="">
                            <h2 class="fs-md-2  mb-2 text-center">Specification</h2>
                        </div>
                        <div class="circle-floow foloowers position-relative">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                @foreach ($page->specs as $index => $spec)
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
                <img class="dotted-imag img-fluid d-none d-md-inline" src="{{asset('assets/customer/images/dotted-tran.png')}}"
                    alt="not-found">
            </div>
        </div>
    </section>
    <!-- Desc and specificatio  end -->

<!-- Feature -->
@include('customer.layout2.features_page')
<!-- Feature end -->


<!-- Application -->
    <section class="application-section pt-4 pb-4 ">
        <div class="container p-0">
            <h2 class="fs-md-2  mb-2 text-center">APPLICATIONS</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="application-item">
                        <img src="{{ asset('assets/customer/images/Highway-Icons.png') }}" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Highways </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="application-item">
                        <img src="{{ asset('assets/customer/images/Tunnels-Icons.png') }}" alt="image">
                        <div class="content-application-items">
                            <h4 class="text-uppercase">Tunnels </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Application end -->

    <section class="con-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <h4 class="text-white text-center"> {{$page->title}} - Brochure</h4>
                </div>
                <div class="col-md-6 text-center">
                    <a href="{{asset('storage/'.$page->brochure)}}" target="_blank" class="btn btn-primary rounded-0">Download Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- _____________________ourclint-last-start___________________ -->

{{-- gallery--}}
@include('customer.layout2.model_gallery')
{{--gallery end --}}

{{--    <section class="our-clints-last">--}}
{{--        <div class="mb-lg-5 text-center">--}}
{{--            <h2 class="fs-md-2 mt-3">GALLERY</h2>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="px-4">--}}
{{--                <div class="clints-content-gallery mb-0 ">--}}
{{--                    @foreach ($page->galleries as $gallery)--}}
{{--                    <div>--}}
{{--                        <div class="px-2 branding-diss">--}}
{{--                            <img src="{{asset('storage/'.$gallery->image)}}" onclick="showModal('{{asset('storage/'.$gallery->image)}}')"  class="d-block mx-auto" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                        @foreach ($page->galleries as $gallery)--}}
{{--                            <div>--}}
{{--                                <div class="px-2 branding-diss">--}}
{{--                                    <img src="{{asset('storage/'.$gallery->image)}}" class="d-block mx-auto" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- _____________________ourclint-last-end___________________ -->

    <!-- contact form -->
@include('customer.layout2.get_in_touch')
    <!-- Contact form end -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fs-md-2 mt-3 text-center">  FAQ  </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1.	What is the purpose of the variable speed limit sign?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The variable speed restriction sign's goal is to make driving safer by updating speed recommendations based on real-time conditions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.	How can we improve safety on the road?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Safety on the road can be improved by adhering to speed limits, avoiding distractions, using seat belts, maintaining a safe following distance, and obeying traffic rules.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3.	What is the meaning of variable speed limit and camera?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The term "variable speed limit and camera" denotes a system where speed limits are enforced by cameras and change according to conditions.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4.	What is a variable speed sign?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: An electronic traffic sign that displays flexible speed limits to reflect the state of the road and the volume of traffic is known as a variable speed sign.
                        </div>
                    </div>
                </div>



                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5.	What does variable mean in speed?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: When an object travels a different distance at equal intervals of time, it is said to be moving at a variable speed. Variable speed aims to ensure safer driving by tailoring the speed limit to the current situation, promoting better road safety.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6.	Where is the end of the minimum speed limit sign?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The end of the minimum speed limit sign is usually placed after zones with mandatory minimum speeds, where drivers can resume normal speeds. You will see this sign at the end of the 30 miles per hour minimum speed requirement. After this point, the speed limit becomes whatever is indicated by subsequent signs or the type of road.


                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7.	What are the five importance of road safety?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Reducing accidents, saving lives, preventing injuries, ensuring smooth traffic flow, and promoting responsible driving behavior are the five key importance of road safety.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightA" aria-expanded="false" aria-controls="collapseEightAx`blue ">
                            8.	What is an exit speed limit sign?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: An exit speed limit sign indicates the maximum safe speed for vehicles approaching an exit ramp. An Exit Ramp Speed Limit sign means that you should slow down to the speed listed on the sign when you reach the end of the exit ramp.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9.	What is VSLS's maximum speed?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The maximum speed for Variable Speed Limit Systems (VSLS) varies depending on the road, traffic, and conditions at any given time. The VSLS displays variable speed limits from a minimum of 20km/h to a maximum of 110km/h in 10K increments. The LED display uses ultra-bright, high-intensity LEDs with flicker-free technology to ensure maximum visibility for the approaching motorist.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10.	What is the variable speed rule?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: According to the variable speed rule, drivers must adjust their speed by changing traffic and road conditions as indicated by variable speed limit signs. An electronic traffic sign shows the current speed limit, which is adjusted based on the weather and road conditions. The minimum and maximum speeds are frequently listed on signs.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


    <!-- _____________________ourclint-last-start___________________ -->
@include('customer.layout2.our_clients')
    <!-- _____________________ourclint-last-end___________________ -->

    @include('customer.layout2.footer_photon')
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}
{{--    <script src="/assets/customer/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="/assets/customer/js/jquery.js"></script>--}}
{{--    <script src="/assets/customer/slick/slick.min.js"></script>--}}
    <script>

{{--        $('.clints-content').slick({--}}
{{--            dots: false,--}}
{{--            infinite: false,--}}
{{--            speed: 300,--}}
{{--            slidesToShow: 4,--}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='{{asset('assets/customer/images/left-chevron.png')}}/></button>",--}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='{{asset('assets/customer/images/right-chevron.png')}}/></button>",--}}
{{--            slidesToScroll: 1,--}}
{{--            arrows: true,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 600,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 480,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
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
            });
        $('.clints-content-gallery').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='{{asset('assets/customer/images/left-chevron.png')}}/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='{{asset('assets/customer/images/right-chevron.png')}}/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,           // Enable auto-scroll
            autoplaySpeed: 2000,      // Set auto-scroll speed (in milliseconds)
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
        });

        window.addEventListener('click', function (e) {
            if (window.innerWidth > 992) {
                if ($('.navbar-collapse').hasClass('show')) {
                    $('.navbar-toggler').click();
                }
            }

        })

        // Hover attribute
        $('.dropdown .dropdown-toggle').mouseenter(function () {
            if (window.innerWidth > 991) {
                $(this).addClass('show');
                $(this).attr({
                    'aria-expanded': true
                })
                $(this).siblings('.dropdown-menu').addClass('show');
                $(this).siblings('.dropdown-menu').attr({
                    'data-bs-popper': "static"
                })
            }

        });
        $('.dropdown-menu').mouseleave(function () {
            if (window.innerWidth > 991) {
                $(this).removeAttr('data-bs-popper');
                $(this).siblings('.nav-link ').removeClass('show');
                $(this).removeClass('show');
                $(this).siblings('.nav-link').attr({
                    'aria-expanded': false
                });
            }

        })
        // $('.mega-menu h4').click(function () {
        //     // $(this).siblings('ul').slideDown();
        //     if ($(this).parent().hasClass('active')) {
        //         $(this).parent().removeClass('active')
        //     } else {
        //         $(this).parent().addClass('active');
        //     }
        //     $(this).parent().siblings().removeClass('active');
        // });
        //
        // $('.toggler-mega').click(function () {
        //     if ($(this).hasClass('active')) {
        //         console.log($(this).hasClass('active'))
        //         $(this).removeClass('active')
        //         $('.mega-menu').slideUp();
        //     } else {
        //         $(this).addClass('active');
        //         $('.mega-menu').slideDown();
        //     }
        //
        // })
        // $('.mega-menu-parent > h4').click(function () {
        //     var bodyColor = $('.drop-downs').attr("style");
        //     // console.log(bodyColor)
        //     if (bodyColor === 'display: block;') {
        //         $('.drop-downs').slideUp(200);
        //         $('.mega-menu-item').removeClass('active');
        //         // $('.toggler-mega').removeClass('active')
        //         return;
        //     }
        //     $('.drop-downs').slideDown(200);
        //
        // })
        // $('.mega-menu .col-md-2 > h4').click( function(){
        //     $(this).siblings('ul').slideDown();
        //     console.log(this)
        // })
    </script>
</body>
</html>
