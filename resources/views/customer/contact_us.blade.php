<?php
$seo_meta=[
    "title"=>"Contact us ",
    "description"=>"Chat with our sales team to discover how
our product can work best for you, +1 (800) 966-9329 or sales@photonplay.com.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
    <!-- Contact Us Banner start -->
    <!-- <section class="contact us">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-lg-5 mb-5">
                        <h2 class="fs-2   mt-3">Contact Us</h2>
                        <p class="text-mutedd">We are waiting to help you and your team
                            <br> so don't hesitate to reach out!
                        </p>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-center gap-5 contact-peraa my-lg-5 contact-wrapper">
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconmap.png')}}" alt="Not Found">
                            <p class="mb-0">{{$setting->company_address}}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconTelephone.png')}}" alt="Not Found">
                            <p class="mb-0">
                            {{$setting->sales_phone}}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{asset('assets\customer\images\iconmessagesss.png')}}" alt="Not Found">
                            <p class="mb-0">
                            {{$setting->support_email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Contact Us Banner End -->
     <!-- banner-text-start -->
     <section class="pt-0 pb-sm-4 pb-lg-5">
        <div class="banner">

            <div class="about-wrapper" >
                <div class="d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                    <div >
                        <h1 class="text-white text-center" style="font-size: 60px;"  > Contact us</h1>
                    </div>
                </div>

            </div>

{{--            <div class="about-wrapper">--}}
{{--                <div class="about-wrapper d-flex justify-content-center align-items-center">--}}
{{--                    <h1 class="text-dark soft-text text-white "  style="text-shadow: black 2px 2px;">Contact us</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- </div> -->
    </section>
     <!-- undefeated-section-start -->
     <section class="undefeated-wrapper pt-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-10  pe-lg-0">
                            <div class="about-undeafeted text-dark">
                                <div class="text-center">
                                <h4 class="text-uppercase text-dark mb-4">Reach Our Team </h4>
                                <p class="text-uppercase">We love the questions & feedback, and we are always happy to help! <br/> Here are some ways to contact us.</p>
                                </div>
                               <div class="justify-content-around flex-column flex-md-row d-flex">
                                <div class="m-2  mb-md-2 mb-4">
                                    <h5 class="text-uppercase"><u>Talk to Sales</u></h5>
                                    <p>Chat with our sales team to discover how <br> our product can work best for you.</p>
                                    <span><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/>+1  (800) 966-9329</span>
                                    <span class="d-block"><img src="{{asset('assets\customer\images\message.png')}}" class="me-2"/> sales@photonplay.com</span>
                                </div>
                                   <div class="m-2">
                                    <h5 class="text-upercase"><u>Contact Customer Support</u></h5>
                                    <p>We are waiting to help you and your team  <br> – so don't hesitate to reach out!</p>
                                  <a  href="#inquiry" class="btn btn-primary text-uppercase rounded-0 py-0">CONTACT SUPPORT</a>
                                </div>
                               </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- undefeated-section-send -->
    <!-- map-Contact-start -->
    <section class="map-wrapper pt-0">
        <div class="container-fluid">
            <div class="row justify-content-center" id="inquiry">
                <div class="col-lg-10">
                    <div class="inner-map" >
                       <iframe class="w-75 py-5" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=23%20Overstone%20road,%20Georgetown,%20Ontario,%20L7G%200M9%20Canada+(Photonplay%20Systems%20Ltd)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"  height="700" style="border:0;" allowfullscreen="" loading="lazy"
                               referrerpolicy="no-referrer-when-downgrade"></iframe>

{{--                        <iframe class="w-75 py-5"--}}
{{--                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13686.924581218746!2d75.88485906787676!3d30.950072544206556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a84a965aaa167%3A0x5b0c9401857ab0e8!2sMeharban%2C%20Punjab%20141007!5e0!3m2!1sen!2sin!4v1681919215477!5m2!1sen!2sin"--}}
{{--                            height="700" style="border:0;" allowfullscreen="" loading="lazy"--}}
{{--                            referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                            <form action="{{route('customer.inquery.submit')}}" method="post">
                                @csrf
                                <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                                <div class="map-messanger shadow p-5 my-4">
                                    <h6 class="mb-4">Send us a message</h6>
                                    <div class="">
                                        <div class="d-flex justify-content-between flex-column flex-md-row">
                                            {{-- placeholder-names : apply this class in below div if need bold placeholder--}}
                                            <div class="">
                                                <span class="d-block text-secondary">Full Name</span>
                                                <b><input name="first_name" type="text" placeholder="Jimmy Newtron" class="form-control  shadow-none" required>
                                                </b>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <span class="d-block text-secondary">Email Address</span>
                                                    <span class="d-block text-secondary"></span>
                                                    <b><input name="email" type="text" placeholder="jimmynewtron@mail.com" class="form-control shadow-none" required>
                                                    </b>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between flex-column flex-md-row my-4">
                                            <div class="">
                                                <span class="d-block text-secondary">Phone Number</span>
                                                <b><input name="phone_number" type="text" placeholder="+12 3456 789" class="form-control shadow-none" required>
                                                </b>
                                            </div>
                                            <div class="">
                                                <span class="d-block text-secondary">Company Name</span>
                                                <b><input name="company_name" type="text" placeholder="Workgroup Studios" class="form-control shadow-none" required>
                                                </b>
                                            </div>

                                        </div>
                                        <div class="message-last py-5">
                                            <textarea name="message" class="form-control shadow-none rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="textHelpBlock" required></textarea>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between pt-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required
                                                    checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Accept terms & conditions
                                                </label>
                                            </div>
                                            <button class="btn btn-primary text-uppercase">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- area-section-start -->
<section class="dealership" style="padding-bottom: 0!important; ">
<div class="container">
            <div class="row bodered-classes pb-4">
                <div class="col-lg-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-10 pe-lg-0">
                            <div class="row">
                            <!-- <div class="col-lg- mb-5"> -->


                                <div class="col-lg-6 col-md-12 mb-lg-5 mb-md-4 mb-4">
                                    <h5 class="text-upercase"><u>CANADA</u></h5>
                                    <div class="d-flex align-items-start"> <img src="{{asset('assets\images\pin-map.png')}}"  class="me-2 mb-2"/>
                                        <p class="">Photonplay Systems Ltd. <br>23 Overstone road, Georgetown, Ontario, <br> L7G 0M9 Canada.Photonplay Systems Ltd</p>
                                    </div>
                                    <span><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/>  (800) 966-9329 </span>
                                    <span class="d-block"><img src="{{asset('assets\customer\images\message.png')}}" class="me-2"/> sales@photonplay.com</span>
                                </div>


                                <div class="col-lg-6 col-md-12 mb-lg-5 mb-md-4 mb-4">
                                    <h5 class="text-upercase"><u>INDIA</u></h5>
                                    <div class="d-flex align-items-start"> <img src="{{asset('assets\images\pin-map.png')}}"  class="me-2 mb-2"/>
                                        <p class="">Photonplay Systems (P) Ltd.
                                            <br> Advant Navis Business Park, B 1010, Noida-Greater Noida Expy, <br> Sector 142, Noida, Uttar Pradesh 201305, India</p>
                                    </div>
                                    <span><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/>+91 989 969 0347</span>
                                    <span class="d-block"><img src="{{asset('assets\customer\images\message.png')}}" class="me-2"/> sales@photonplay.com</span>
                                </div>


                                <div class="col-lg-6 col-md-12 mb-lg-5 mb-md-4 mb-4">
                                    <h5 class="text-upercase"><u>AUSTRALIA</u></h5>
                                    <div class="d-flex align-items-start"> <img src="{{asset('assets\images\pin-map.png')}}"  class="me-2 mb-2"/>
                                        <p class=""> Photonplay Systems Pty Ltd.
                                            <br> 4 Perrin circuit Tarneit, Vic-3029 Australia.</p></div>
                                    <span><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/> +61(02) 8015 2100</span>
                                    <span class="d-block"><img src="{{asset('assets\customer\images\message.png')}}" class="me-2"/> sales@photonplay.com</span>
                                </div>




                               <!-- </div> -->
                               <!-- <div class="col-lg-"> -->
                                <div class="col-lg-6 col-md-12 mb-lg-5 mb-md-4 mb-4">
                                    <h5 class="text-upercase"><u>EUROPE</u></h5>
                                    <div class="d-flex align-items-start"> <img src="{{asset('assets\images\pin-map.png')}}"  class="me-2 mb-2"/>
                                    <p class="">Photonplay Systems AS
                                      <br> Hilton 157 2040 klofta Ullensaker municipality</p>
                                        </div>
                                    <span><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/>   +44-203-608-7507</span>
                                    <span class="d-block"><img src="{{asset('assets\customer\images\message.png')}}" class="me-2"/> sales@photonplay.com</span>
                                </div>

                               <!-- </div> -->
                            </div>
</div>
</div>
</div>
</div>
</div>
<section class="text-center">
    <div class="container">
    <h5 class="text-upercase"><u>DEALERSHIP / TRADE INQUIRIES</u></h5>
    <p class="dealership-perra">Larry Kaura, Global Trade Manager</p>
    <div>
    <span class="text-dark"><img src="{{asset('assets\customer\images\phone.svg')}}" class="me-2 mb-2"/>+91 989 969 0347</span>
    <span class="text-dark"><img src="{{asset('assets\customer\images\message.png')}}" class="mx-2"/>larry@photonplay.com</span>
    </div>
    </div>
</section>
</section>
<!-- area-section-END -->
<!-- dealership-start -->

<!-- end -->
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
                    <h2 class="fs-md-2 mt-3">Latest News</h2>
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
            @php
                use App\Models\Blog;
                $blogs = Blog::latest()->take(3)->get();
            @endphp
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
    window.addEventListener('click', function (e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>



{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}

{{--    <script>--}}

{{--        $('.clint-wrapperr').slick({--}}
{{--            dots: false,--}}
{{--            infinite: true,--}}
{{--            speed: 300,--}}
{{--            slidesToShow: 3,--}}
{{--            slidesToScroll: 3,--}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",--}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",--}}
{{--            arrows: true,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 2,--}}
{{--                        slidesToScroll: 2,--}}
{{--                        infinite: true,--}}
{{--                        arrows: false,--}}
{{--                        dots: true--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 600,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        arrows: false,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 480,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        arrows: false,--}}
{{--                    }--}}
{{--                }--}}
{{--                // You can unslick at a given breakpoint now by adding:--}}
{{--                // settings: "unslick"--}}
{{--                // instead of a settings object--}}
{{--            ]--}}
{{--        });--}}
{{--        $('.key-slider').slick({--}}
{{--            dots: true,--}}
{{--            infinite: false,--}}
{{--            speed: 300,--}}
{{--            slidesToShow: 1,--}}
{{--            slidesToScroll: 1,--}}
{{--            arrows: false,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        infinite: true,--}}
{{--                        dots: true--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 600,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 480,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1--}}
{{--                    }--}}
{{--                }--}}
{{--                // You can unslick at a given breakpoint now by adding:--}}
{{--                // settings: "unslick"--}}
{{--                // instead of a settings object--}}
{{--            ]--}}
{{--        });--}}
{{--        $('.clints-content').slick({--}}
{{--            dots: false,--}}
{{--            infinite: false,--}}
{{--            speed: 300,--}}
{{--            slidesToShow: 4,--}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",--}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",--}}
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
{{--        })--}}
{{--        window.addEventListener('click', function (e) {--}}
{{--            if (window.innerWidth > 992) {--}}
{{--                if ($('.navbar-collapse').hasClass('show')) {--}}
{{--                    $('.navbar-toggler').click();--}}
{{--                }--}}
{{--            }--}}

{{--        })--}}
<script>
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
        $('.mega-menu h4').click(function () {
            // $(this).siblings('ul').slideDown();
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active')
            } else {
                $(this).parent().addClass('active');
            }
            $(this).parent().siblings().removeClass('active');
        });

        $('.toggler-mega').click(function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
                $('.mega-menu').slideUp();
            } else {
                $(this).addClass('active');
                $('.mega-menu').slideDown();
            }

        })
        $('.mega-menu-parent > h4').click(function () {
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
        // $('.mega-menu .col-md-2 > h4').click( function(){
        //     $(this).siblings('ul').slideDown();
        //     console.log(this)
        // })
    </script>


