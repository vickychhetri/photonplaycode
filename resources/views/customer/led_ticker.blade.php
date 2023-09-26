<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::VMS)->first();
$seo_meta=[
    "title"=>$data_record->title,
    "description"=>$data_record->description,
    "keywords"=>$data_record->keyword,
    "schema"=>$data_record->schema
];
?>

@include('customer.layout2.header')

<!-- iCop Series Features Start -->
<!-- Banner sec -->
<section class="led_ticker_image py-5" style="background-color: rgba(0, 0, 0, 0.6); height: 100%;">
    <div class="container" >
        <div class="slider-content">

            <div class="imaged m-auto">
                <div class="city-wrap flex-wrap">
                    <h1 class=" text-white fw-normal mb-1 title-text-h2">
                        LED TICKER TAPES
                    </h1>
                    <h5 class=" text-white fw-normal mt-2 mb-2 ">
                        Explore the LED Stock Ticker for Real-Time Market Updates
                    </h5>
                    <a  href="#inquiry" class="btn-primary-rounded  p-0 m-0 d-flex align-items-center justify-content-center get-quote-button-header-model" >GET QUOTE</a>
                </div>
                <div class=" m-auto desktop-display " >
                    <img src="https://www.photonplay.com/assets/customer/images/products_home/Circular_outer_led_ticker.webp" alt="alt"
                         class="d-block mx-auto product-feature-model-image "  style="transform: scale(1.1);" >
                </div>
                {{--                    <img src="{{asset('storage/'.$page->cover_image)}}"  alt="alt" class="d-block img-fluid h-75 " >--}}
            </div>


        </div>
    </div>
</section>
<!-- Banner Sec End -->
<!-- banner-text-start -->
<section class="bg-white pb-0">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="text-center mb-2"> Enhancing Road Safety with LED Tickers: A Game-Changer in Traffic Management</h2>
                <div class="p-4">
                    <p >
                        LED tickers are a type of electronic sign that can be used to show information like the posted speed limit, weather alerts, construction updates, traffic data, and important announcements like those about upcoming exits, gas stations, restrooms, dining options, etc. They frequently go hand in hand with radar speed signs to increase traffic safety. By encouraging safer driving habits and reducing potential hazards, these announcements hope to keep motorists informed about various circumstances they might run into on the road. To modify their speed and behavior effectively, drivers can stay informed about changing road conditions, potential risks, and traffic congestion. <br/><br/>
                        The risk of accidents is decreased by the immediate and simple-to-read information provided by LED tickers, which helps to improve traffic flow and minimize unexpected braking or lane changes. Studies have shown that LED tickers can significantly increase traffic safety. LED tickers were found to lower speeding by 15% and road accidents by 10%, according to US research. Although LED tickers are a relatively new invention, they have the potential to be a useful tool for enhancing traffic safety. They are flexible enough to be tailored to the requirements of certain sites and are simple to install and maintain. We may anticipate even more creative use of LED tickers to improve road safety as the technology behind them continues to advance.

                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-text-end -->
<!-- Our Product-start -->
<section class="our-product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center ">
                    <!-- <h6 class="fs-6 text-colorr">photonplay’s </h6> -->
                    <h2 class="fs-md-2 fs-lg-1 mt-3 fw-bold">

                        Transform Your Business Environment with Mesmerizing LED Tickers Series

                    </h2>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="text-start p-4 list-unsorted">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('/assets/customer/images/led/led-stock-ticker.webp')}}"   alt="Not Found"
                                         class="img-fluid" style="max-height: 250px;min-height: 120px">
                                </div>
                                <div class="my-3 list-bacgunded px-4 py-2" style="min-height: 140px;">
                                    <h5 class="fw-bold text-capitalize"> STRAIGHT TICKERS</h5>
                                    <p> Stay informed with science, sports, and global news at your fingertips. </p>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="text-start p-4 list-unsorted">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('/assets/customer/images/led/Circular_outer_jpg.webp')}}" alt="Not Found"
                                     class="img-fluid" style="max-height: 250px;min-height: 120px">
                            </div>
                            <div class="my-3 list-bacgunded px-4 py-2" style="min-height: 140px;">
                                <h5 class="fw-bold text-capitalize"> CIRCULAR LED TICKERS</h5>
                                <p> Experience news and other updates come alive with the Circular LED Ticker. </p>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="text-start p-4 list-unsorted">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('/assets/customer/images/led/90deg_outter_jpg.webp')}}" alt="Not Found"
                                     class="img-fluid" style="max-height: 250px;min-height: 120px">
                            </div>
                            <div class="my-3 list-bacgunded px-4 py-2" style="min-height: 140px;">
                                <h5 class="fw-bold text-capitalize">  CUSTOM ANGLES</h5>
                                <p> Choose from various ticker display options tailored to your specifications. </p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Product -->

<!-- Application -->
<section class="application-section mt-0 pt-0">
    <div class="container">
        <h2 class="fs-md-2 mt-0 mb-2 text-center text-uppercase">Special Applications</h2>
        <p class="text-center mb-4"> Our LED stock ticker is designed with specific applications in mind, whether it's for financial institutions, sports arenas, newsrooms, or other specialized settings, our application-wise LED stock ticker delivers real-time stock updates.
        </p>
        <div class="row d-flex justify-content-center">

            <div class="col-md-6">
                <div class="application-item">
                    <img src="{{ asset('assets/customer/images/Smart-cities-icon.png') }}" alt="image">
                    <div class="content-application-items">
                        <h4 class="text-uppercase">Smart Cities </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Application end -->
<!-- Photon play radar-start -->
<section class="portable px-lg-5 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('/assets/customer/images/led/LED-Ticker-Types.webp')}}" alt="Not Found"
                         class="img-fluid bg-white">
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center ">
                <div class="radar-icop">
                    <h4 class="fs-6 mb-3 text-dark">LED Ticker Types</h4>
                    <p class="mt-4 mb-lg-0 mb-5">
                        We have a variety of LED Ticker tapes that can be used in various settings to convey information effectively. Used by organizations to enhance communication, engage viewers, and effectively deliver information in an eye-catching and dynamic manner such as.
                    </p>

<ul>
    <li> LED Ticker Tape- Mesmerizing strips of light that display scrolling messages, stock quotes, or personalized greetings, adding a vibrant energy to any space. </li>
    <li>
        Indoor Ticker Tapes- Sleek and slender strips that elevate indoor settings, bringing elegance, charm, and a captivating ambiance.
    </li>
    <li>
        Outdoor Ticker Tapes- Weather-resistant strips that light up outdoor areas, creating an enchanting spectacle for vibrant events and bustling streets.
    </li>
    <li>
        Flexible Ticker Tapes- Bendable strips that offer ultimate versatility, allowing creative shaping and designing to transform any space into a stunning visual masterpiece.
    </li>
</ul>




                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact form -->
@include('customer.layout2.get_in_touch')
<!-- Contact form end -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fs-md-2 mt-3 text-center"> FAQ </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. What is an LED ticker?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: A message medium known as an LED ticker display uses LED technology as its primary digital display device. A ticker often displays a line of text, numbers, or pictures that scroll past the viewer.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. What size are LED tickers?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The most typical LED tickers have a height of 32, 48, or 64 pixels. The distance between pixels determines the character's height.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. What is an LED scrolling display?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Examples of scrolling LED displays include simple outdoor LED message moving or scrolling sign boards, electronic projects that use an LED scroller generator for outdoor digital signage, and marketable LED sign boards with message scrolling.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. Why use an LED display?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The fact that an LED display consumes so little energy is one of its greatest benefits. An LED bulb uses 10 times less energy than a conventional light bulb.

                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. Why is it called a ticker?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: The term "Ticker Symbol" refers to the distinctive one- to five-letter symbol used by stock exchanges to identify a corporation. The reason it is termed a ticker symbol is that historically, stock quotes were written on a ticker tape machine.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6. How do LED signs work?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Each LED receives pulsating electronic signals from complex integrated electronic circuits and software, which, when activated, light up the individual LED lamp. Each LED bulb (pixel) is assembled in a matrix to form the LED Display's length and height.

                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            7. Are LED tickers only used for traffic-related information?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: No, LED tickers have a wide range of applications beyond traffic information. They can highlight crucial notifications like forthcoming exits, food options, neighborhood events, stock updates, and speed limits, in addition to the usual weather updates, traffic advisories, and speed limits.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEightA">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEightA" aria-expanded="false"
                                aria-controls="collapseEightAx`blue ">
                            8. How do LED tickers contribute to safer driving habits?
                        </button>
                    </h2>
                    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Drivers can learn a lot about the state of the road and potential dangers via LED tickers. They urge drivers to alter their speed and behavior by presenting real-time statistics and alarms, which lower the likelihood of unexpected braking or lane changes that might cause accidents.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            9. How are LED tickers powered and controlled?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: Electricity is often used to power LED tickers, and specialized gear or software is used to control them. This enables operators to change the messages they display, update data, and change settings as necessary.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            10. What makes LED tickers suitable for outdoor use in various weather conditions?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Answer: LED tickers are designed to be durable and weather-resistant. They are frequently constructed out of durable materials and sealed to guard against moisture, dust, and temperature changes. Because of their sturdy design, they can function dependably outside in a variety of weather conditions.
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
            infinite: false,
            speed: 300,
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
                        slidesToShow: 6,
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
    })

</script>

<script>
    // Hover attribute
    $('.dropdown .dropdown-toggle').mouseenter(function() {
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
    $('.dropdown-menu').mouseleave(function() {
        if (window.innerWidth > 991) {
            $(this).removeAttr('data-bs-popper');
            $(this).siblings('.nav-link ').removeClass('show');
            $(this).removeClass('show');
            $(this).siblings('.nav-link').attr({
                'aria-expanded': false
            });
        }

    })
    $('.mega-menu h4').click(function() {
        // $(this).siblings('ul').slideDown();
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active')
        } else {
            $(this).parent().addClass('active');
        }
        $(this).parent().siblings().removeClass('active');
    });


    $('.mega-menu-parent > h4').click(function() {
        var bodyColor = $('.drop-downs').attr("style");
        // console.log(bodyColor)
        if (bodyColor === 'display: block;') {
            $('.drop-downs').slideUp(200);
            $('.mega-menu-item').removeClass('active');
            // $('.toggler-mega').removeClass('active')
            return;
        }
        $('.drop-downs').slideDown(200);

    })

</script>
