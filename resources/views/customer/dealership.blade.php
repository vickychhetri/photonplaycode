<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::CONTACT)->first();
$seo_meta = [
    'title' => 'Dealer Application',
    'description' => $data_record->description,
    'keywords' => $data_record->keyword,
    'schema' => $data_record->schema,
    'feature_image' => 'storage/image/banner%202.webp',
];
?>

@include('customer.layout2.header')
<section class="undefeated-wrapper-dealership ">
    <div class="container-fluid">
        <div class="row">

            <form action="{{ route('vendor.store') }}" method="post" class="col-lg-11 mx-auto">
                <h2 style="color: black;"> Dealer Application</h2>
                <p>Please fill out the form below so we can get to know you and your goals a little better. Once you submit the form, a Photonplay representative will contact you with more details of our Authorized Dealer program. </p>
                <hr/>
                @csrf

                <!-- Company Information Section -->
                <div class="mb-4">
                    <h4 class="mb-3">Company Information</h4>
                    <input type="hidden" name="url" value="{{ \Illuminate\Support\Facades\URL::full() }}">

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="company_name" class="form-label">Company Name <span style="color: red">*</span></label>
                            <input name="company_name" type="text" class="form-control" placeholder="Company Name" required>
                        </div>

                        <div class="col-md-4">
                            <label for="year_of_business" class="form-label">Years of Business <span style="color: red">*</span></label>
                            <input name="year_of_business" type="number" class="form-control" placeholder="Years of Business" required>
                        </div>
                        <div class="col-md-4">
                            <label for="year_of_business_present_years" class="form-label">Years of Business Under Present Years <span style="color: red">*</span></label>
                            <input name="year_of_business_present_years" type="number" class="form-control" placeholder="Years of Business Under Present Years" required>
                        </div>
                        <div class="col-md-4">
                            <label for="year_of_business_present_location" class="form-label">Years of Business at present location <span style="color: red">*</span></label>
                            <input name="year_of_business_present_location" type="number" class="form-control" placeholder="Years of Business at present location" required>
                        </div>
                        <div class="col-md-4">
                            <label for="total_number_of_locations" class="form-label">Total Number of locations <span style="color: red">*</span></label>
                            <input name="total_number_of_locations" type="number" class="form-control" placeholder="Total Number of locations" required>
                        </div>
                        <div class="col-md-4">
                            <label for="type_of_ownership" class="form-label">Type of Ownership <span style="color: red">*</span></label>
                            <input name="type_of_ownership" type="text" class="form-control" placeholder="Type of Ownership" required>
                        </div>

                        <div class="col-md-4">
                            <label for="telephone_number" class="form-label">Telephone Number <span style="color: red">*</span></label>
                            <input name="telephone_number" type="tel" class="form-control" placeholder="+12 3456 789" required>
                        </div>

                        <div class="col-md-4">
                            <label for="fax_number" class="form-label">Fax Number</label>
                            <input name="fax_number" type="tel" class="form-control" placeholder="Fax Number">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email Address <span style="color: red">*</span></label>
                            <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-4">
                            <label for="website" class="form-label">Website</label>
                            <input name="website" type="url" class="form-control" placeholder="Website">
                        </div>

                        <div class="col-md-4">
                            <label for="city" class="form-label">City <span style="color: red">*</span></label>
                            <input name="city" type="text" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label">State <span style="color: red">*</span></label>
                            <input name="state" type="text" class="form-control" placeholder="State" required>
                        </div>
                        <div class="col-md-4">
                            <label for="postal_code" class="form-label">Postal Code <span style="color: red">*</span></label>
                            <input name="postal_code" type="text" class="form-control" placeholder="Postal code" required>
                        </div>
                        <div class="col-md-4">
                            <label for="country" class="form-label">Country <span style="color: red">*</span></label>
                            <input name="country" type="text" class="form-control" placeholder="Country" required>
                        </div>
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address <span style="color: red">*</span></label>
                            <textarea name="address" class="form-control" placeholder="Address" required></textarea>
                        </div>



                    </div>
                </div>

                <!-- Key Contacts Section -->
                <div class="mb-4">
                    <h4 class="mb-3">Key Contacts</h4>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="president" class="form-label">President / Owner(s)</label>
                            <input name="president" type="text" class="form-control" placeholder="President / Owner(s)">
                        </div>
                        <div class="col-md-4">
                            <label for="sale_marketing_manager" class="form-label">Sales Marketing Manager</label>
                            <input name="sale_marketing_manager" type="text" class="form-control" placeholder="Sales Marketing Manager">
                        </div>
                        <div class="col-md-4">
                            <label for="accounting_manager" class="form-label">Accounting Manager</label>
                            <input name="accounting_manager" type="text" class="form-control" placeholder="Accounting Manager">
                        </div>
                        <div class="col-md-4">
                            <label for="production_manager" class="form-label">Production Manager</label>
                            <input name="production_manager" type="text" class="form-control" placeholder="Production Manager">
                        </div>
                        <div class="col-md-4">
                            <label for="installation_manager" class="form-label">Installation Manager</label>
                            <input name="installation_manager" type="text" class="form-control" placeholder="Installation Manager">
                        </div>
                        <div class="col-md-4">
                            <label for="service_manager" class="form-label">Service Manager</label>
                            <input name="service_manager" type="text" class="form-control" placeholder="Service Manager">
                        </div>
                    </div>
                </div>

                <!-- How did you know about Tickerplay? Section -->
                <div class="mb-4">
                    <h4 class="mb-3">How did you know about Tickerplay?</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="know_about_tickerplay" class="form-label">How did you know about Tickerplay?</label>
                            <select class="form-select" name="know_about_tickerplay" required>
                                <option selected disabled>Choose...</option>
                                <option value="google_search">Google Search</option>
                                <option value="yahoo">Yahoo</option>
                                <option value="bing">Bing</option>
                                <option value="email">Email</option>
                                <option value="word_of_mouth">Word of Mouth</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Captcha and Terms & Conditions -->
                <div class="mb-4">
                    <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>

                    <div class="form-check mt-3 mb-3">
                        <input class="form-check-input" type="checkbox" name="i_agree_terms" value="1" id="flexCheckChecked" required>
                        <label class="form-check-label" for="flexCheckChecked">
                            Accept terms & conditions
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary btn-block" id="dealership_submit_btn" disabled>Submit</button>
                </div>
                <p> <i> Note: Once you submit the form, a Photonplay representative will contact you with more details of our Authorized Dealer program.
                        </i>
                </p>
            </form>
        </div>
    </div>
</section>

@include('customer.layout2.footer_photon')
<script src="/assets/customer/js/bootstrap.bundle.min.js" async defer></script>
<script src="/assets/customer/js/jquery.js"></script>
<script src="/assets/customer/slick/slick.min.js"></script>

<script>
    // Get the checkbox and submit button elements
    const checkbox = document.getElementById('flexCheckChecked');
    const submitButton = document.getElementById('dealership_submit_btn');

    // Add event listener to checkbox for change event
    checkbox.addEventListener('change', function() {
        // Check if checkbox is checked
        if (checkbox.checked) {
            // Enable submit button
            submitButton.removeAttribute('disabled');
        } else {
            // Disable submit button
            submitButton.setAttribute('disabled', 'disabled');
        }
    });
</script>
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
