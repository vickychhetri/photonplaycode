<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::CONTACT)->first();
$seo_meta = [
    'title' => $data_record->title,
    'description' => $data_record->description,
    'keywords' => $data_record->keyword,
    'schema' => $data_record->schema,
    'feature_image' => 'storage/image/banner%202.webp',
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
                        <p claclints-content-brandingss="text-mutedd">We are waiting to help you and your team
                            <br> so don't hesitate to reach out!
                        </p>
                    </div>
                    <div
                        class="d-flex justify-content-center align-items-center gap-5 contact-peraa my-lg-5 contact-wrapper">
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{ asset('assets\customer\images\iconmap.png') }}" alt="Not Found">
                            <p class="mb-0">{{ $setting->company_address }}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{ asset('assets\customer\images\iconTelephone.png') }}" alt="Not Found">
                            <p class="mb-0">
                            {{ $setting->sales_phone }}
                            </p>
                        </div>
                        <div
                            class="d-flex justify-lg-content-center justify-content-start align-items-center gap-3 w-100">
                            <img src="{{ asset('assets\customer\images\iconmessagesss.png') }}" alt="Not Found">
                            <p class="mb-0">
                            {{ $setting->support_email }}
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

        <div class="about-wrapper">
            <div class="d-flex justify-content-center align-items-center"
                style="background-color: rgba(0, 0, 0, 0.4); height: 100%;">
                <div>
                    <h1 class="text-white text-center" style="font-size: 60px;"> Dealer Application </h1>
                </div>
            </div>

        </div>

        {{--            <div class="about-wrapper"> --}}
        {{--                <div class="about-wrapper d-flex justify-content-center align-items-center"> --}}
        {{--                    <h1 class="text-dark soft-text text-white "  style="text-shadow: black 2px 2px;">Contact us</h1> --}}
        {{--                </div> --}}
        {{--            </div> --}}
    </div>
    <!-- </div> -->
</section>
<!-- undefeated-section-start -->
<section class="undefeated-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10  pe-lg-0">
                        <div class="about-undeafeted text-dark">
                            <div class="text-center">
                                <h4 class="text-uppercase text-dark mb-4">Reach Our Team </h4>
                                <p>Contact a Photonplay representative for more detailed information. </br> Although the
                                    process may be
                                    a simple one, the benefits are vast. Don't wait, apply to be a dealer today!</p>
                                <>
                                    <p>To start the conversation, please fill out the form below so we can get to know
                                        you </br> and your goals a little better. </br> Once you submit the form, a
                                        Photonplay representative will contact you with more details of our Authorized
                                        Dealer program.
                                    </p>
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

<section style="padding: 20px 400px !important;">
    <div class="container">
        <div class="row">
            <form action="{{ route('vendor.store') }}" method="post">
                @csrf
                <b><label class="h5">Company Information</label></b>
                <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">
                <div class="form-group mt-2">
                    <label for="company_name">Company Name</label><span style="color: red">*</span>
                    <input name="company_name" type="text" class="form-control" placeholder="Company Name" required>
                </div>
                <div class="form-group mt-2">
                    <label for="address">Address</label><span style="color: red">*</span>
                    <textarea name="address" type="text" class="form-control" placeholder="Address" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="city">City</label><span style="color: red">*</span>
                    <input name="city" type="text" class="form-control" placeholder="City" required>
                </div>
                <div class="form-group mt-2">
                    <label for="state">State</label><span style="color: red">*</span>
                    <input name="state" type="text" class="form-control" placeholder="State" required>
                </div>
                <div class="form-group mt-2">
                    <label for="postal_code">Postal Code</label><span style="color: red">*</span>
                    <input name="postal_code" type="text" class="form-control" placeholder="Postal code" required>
                </div>
                <div class="form-group mt-2">
                    <label for="country">Country</label><span style="color: red">*</span>
                    <input name="country" type="text" class="form-control" placeholder="country" required>
                </div>
                <div class="form-group mt-2">
                    <label for="telephone_number">Telephone Number</label><span style="color: red">*</span>
                    <input name="telephone_number" type="number" class="form-control" placeholder="+12 3456 789" required>
                </div>
                <div class="form-group mt-2">
                    <label for="fax_number">Fax Number</label>
                    <input name="fax_number" type="text" class="form-control" placeholder="Fax Number">
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email Address</label><span style="color: red">*</span>
                    <input name="email" type="email" class="form-control" placeholder="email" required>
                </div>

                <div class="form-group mt-2">
                    <label for="website">Website</label>
                    <input name="website" type="text" class="form-control" placeholder="Website">
                </div>

                <div class="form-group mt-2">
                    <label for="year_of_business">Years of Business</label><span style="color: red">*</span>
                    <input name="year_of_business" type="website" class="form-control" placeholder="Years of Business" required>
                </div>

                <div class="form-group mt-2">
                    <label for="year_of_business_present_years">Years of Business Under Present Years</label><span style="color: red">*</span>
                    <input name="year_of_business_present_years" type="website" class="form-control" placeholder="Years of Business Under Present Years" required>
                </div>

                <div class="form-group mt-2">
                    <label for="year_of_business_present_location">Years of Business at present location</label><span style="color: red">*</span>
                    <input name="year_of_business_present_location" type="website" class="form-control" placeholder="Years of Business at present location" required>
                </div>

                <div class="form-group mt-2">
                    <label for="total_number_of_locations">Total Number of locations</label><span style="color: red">*</span>
                    <input name="total_number_of_locations" type="website" class="form-control" placeholder="Total Number of location" required>
                </div>

                <div class="form-group mt-2">
                    <label for="type_of_ownership">Type of Ownership</label><span style="color: red"> * </span>
                    <input name="type_of_ownership" type="website" class="form-control" placeholder="Type of Ownership" required>
                </div>


                {{-- key contacts --}}
                <hr>
                    <b><label class="h5">Key Contacts</label></b>

                <div class="form-group mt-2">
                    <label for="president">President / Owner(s)</label>
                    <input name="president" type="text" class="form-control" placeholder="President / Owner(s)">
                </div>

                <div class="form-group mt-2">
                    <label for="sale_marketing_manager">Sale Marketing Manager</label>
                    <input name="sale_marketing_manager" type="text" class="form-control" placeholder="Sale Marketing Manager">
                </div>

                <div class="form-group mt-2">
                    <label for="sale_marketing_manager">Accounting Manager</label>
                    <input name="sale_marketing_manager" type="text" class="form-control" placeholder="Accounting Manager">
                </div>


                <div class="form-group mt-2">
                    <label for="production_manager">Production Manager</label>
                    <input name="production_manager" type="text" class="form-control" placeholder="Production Manager">
                </div>

                <div class="form-group mt-2">
                    <label for="installation_manager">Installation Manager</label>
                    <input name="installation_manager" type="text" class="form-control" placeholder="Installation Manager">
                </div>

                <div class="form-group mt-2">
                    <label for="service_manager">Service Manager</label>
                    <input name="service_manager" type="text" class="form-control" placeholder="Service Manager">
                </div>

                <hr>
                <b><label class="h5">How did you know about Tickerplay ?</label></b>

                <div class="form-group mt-2">
                    <label for="know_about_tickerplay">How did you know about Tickerplay</label>
                    {{-- <input name="know_about_tickerplay" type="text" class="form-control" placeholder="How did you know about Tickerplay"> --}}
                    <select class="form-control" name="know_about_tickerplay" id="" required>
                        <option selected disabled >Choose...</option>
                        <option value="google_search" >Google Search</option>
                        <option value="yahoo" >Yahoo</option>
                        <option value="bing" >Bing</option>
                        <option value="email" >Email</option>
                        <option value="word_of_mouth" >Word of Mouth</option>
                    </select>
                </div>



                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>


                <div class="form-check mt-3 mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                    <label class="form-check-label" for="flexCheckChecked">
                        Accept terms & conditions
                    </label>
                </div>






                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
        </div>
    </div>
</section>

<!-- area-section-start -->
{{-- <section class="dealership" style="padding-bottom: 0!important; ">
    <div class="container">
        <div class="row bodered-classes pb-4">
            <form action="{{ route('customer.inquery.submit') }}" method="post">
                @csrf
            </form>
        </div>
    </div>
</section> --}}

@include('customer.layout2.footer')
<script src="/assets/customer/js/bootstrap.bundle.min.js" async defer></script>
<script src="/assets/customer/js/jquery.js"></script>
<script src="/assets/customer/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.clint-wrapperr').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            arrows: true,
            responsive: [{
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
            responsive: [{
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
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
        });
        $('.clints-content-branding').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            // fade:true,
            responsive: [{
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
        autoplaySpeed: 3000,
        fade: true,
    });
    $('.clints-content-branding').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/customer/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/customer/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        // fade:true,
        responsive: [{
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
    });
    window.addEventListener('click', function(e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>



{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script> --}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> --}}

{{--    <script> --}}

{{--        $('.clint-wrapperr').slick({ --}}
{{--            dots: false, --}}
{{--            infinite: true, --}}
{{--            speed: 300, --}}
{{--            slidesToShow: 3, --}}
{{--            slidesToScroll: 3, --}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>", --}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>", --}}
{{--            arrows: true, --}}
{{--            responsive: [ --}}
{{--                { --}}
{{--                    breakpoint: 1024, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 2, --}}
{{--                        slidesToScroll: 2, --}}
{{--                        infinite: true, --}}
{{--                        arrows: false, --}}
{{--                        dots: true --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 600, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                        slidesToScroll: 1, --}}
{{--                        arrows: false, --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 480, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                        slidesToScroll: 1, --}}
{{--                        arrows: false, --}}
{{--                    } --}}
{{--                } --}}
{{--                // You can unslick at a given breakpoint now by adding: --}}
{{--                // settings: "unslick" --}}
{{--                // instead of a settings object --}}
{{--            ] --}}
{{--        }); --}}
{{--        $('.key-slider').slick({ --}}
{{--            dots: true, --}}
{{--            infinite: false, --}}
{{--            speed: 300, --}}
{{--            slidesToShow: 1, --}}
{{--            slidesToScroll: 1, --}}
{{--            arrows: false, --}}
{{--            responsive: [ --}}
{{--                { --}}
{{--                    breakpoint: 1024, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                        slidesToScroll: 1, --}}
{{--                        infinite: true, --}}
{{--                        dots: true --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 600, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                        slidesToScroll: 1 --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 480, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                        slidesToScroll: 1 --}}
{{--                    } --}}
{{--                } --}}
{{--                // You can unslick at a given breakpoint now by adding: --}}
{{--                // settings: "unslick" --}}
{{--                // instead of a settings object --}}
{{--            ] --}}
{{--        }); --}}
{{--        $('.clints-content').slick({ --}}
{{--            dots: false, --}}
{{--            infinite: false, --}}
{{--            speed: 300, --}}
{{--            slidesToShow: 4, --}}
{{--            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>", --}}
{{--            nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>", --}}
{{--            slidesToScroll: 1, --}}
{{--            arrows: true, --}}
{{--            responsive: [ --}}
{{--                { --}}
{{--                    breakpoint: 1024, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 3, --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 600, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                    } --}}
{{--                }, --}}
{{--                { --}}
{{--                    breakpoint: 480, --}}
{{--                    settings: { --}}
{{--                        slidesToShow: 1, --}}
{{--                    } --}}
{{--                } --}}
{{--            ] --}}
{{--        }) --}}
{{--        window.addEventListener('click', function (e) { --}}
{{--            if (window.innerWidth > 992) { --}}
{{--                if ($('.navbar-collapse').hasClass('show')) { --}}
{{--                    $('.navbar-toggler').click(); --}}
{{--                } --}}
{{--            } --}}

{{--        }) --}}
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

    $('.toggler-mega').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $('.mega-menu').slideUp();
        } else {
            $(this).addClass('active');
            $('.mega-menu').slideDown();
        }

    })
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
    // $('.mega-menu .col-md-2 > h4').click( function(){
    //     $(this).siblings('ul').slideDown();
    //     console.log(this)
    // })
</script>
</body>

</html>
