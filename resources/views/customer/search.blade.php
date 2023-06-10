<?php
$seo_meta=[
    "title"=>"Search -".$query,
    "description"=>"PhotonPlay is a financially independent, global technology company established in 2006 with wholly-owned subsidiaries in the USA, Norway, and Australia.",
    "keywords"=>"photonplay, radar speed sign, variable message signs, driver feedback"
];
?>
@include('customer.layout2.header')
<body>

<!-- Banner sec -->
<section class="inner-banner-bg">
    <h3 class="text-white text-center mb-0">Search</h3>
</section>
<!-- Banner Sec End -->
<section class="blog-content-list position-relative">
    <div class="social-icons position-absolute start-0">
        <img src="./assets/images/social-media iconss.png" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 col-md-12">

                <form class="mt-lg-0 mt-4 align-items-center" role="search">
                    <div class="form-group">
                        <input class="form-control shadow-none border" type="search" name="search" placeholder="Search" aria-label="Search" value="{{$query??''}}"/>
                    </div>
                </form>
                <hr/>
                @forelse($data_page as $item)
                    <div class="post-item mb-4">
                        <img src="{{asset("storage/".$item['image'])}}" class="mb-4" style="max-height: 300px;">
                        <div class="mb-4 pb-4 post-info">
                            @if($item['type']==2)
                            <a href="{{route("customer.blog_show",$item['slug'])}}"   class="text-decoration-none">   <h2 class="text-uppercase"> <b>   {{$item['title']}} </b></h2></a>
                                <div>{{$item['created_at']}}  {{$item['author']?"By ".$item['author']:""}}</div>
                            @elseif($item['type']==1)
                                <a href="{{route("customer.radar.sign",$item['id'])}}"   class="text-decoration-none">   <h2 class="text-uppercase"> <b>   {{$item['title']}} </b></h2></a>
                            @endif

                            <p>

                                {{ \Illuminate\Support\Str::limit(strip_tags($item['description']), 200, '...') }}
                            </p>
                                @if($item['type']==2)
                                    <a href="{{route("customer.blog_show",$item['slug'])}}" class="btn btn-primary">
                                        Read More
                                    </a>
                                @elseif($item['type']==1)
                                    <a href="{{route("customer.radar.sign",$item['id'])}}" class="btn btn-primary">
                                       Shop Now
                                    </a>
                                @elseif($item['type']==3)

                                    @if($item['page_type_id']==3)
                                        <a href="/pvms-i-cop/{{$item['id']}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @elseif($item['page_type_id']==7)
                                        <a  href="/signages/{{$item['slug']}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @elseif($item['id']==2)
                                        <a href="{{route('customer.pasenger.information.display.system')}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @elseif($item['id']==9)
                                        <a href="{{route('customer.variable.speed.limit')}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @elseif($item['id']==1)
                                        <a href="{{route('customer.lane.control.system')}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @else
                                        <a href="/solution/{{$item['slug']}}" class="btn btn-primary">
                                            Know More
                                        </a>
                                    @endif

                                @endif
                        </div>
                        <div class="post-action d-flex justify-content-between">
                            @if($item['type']=="blog")
                                <a href="{{route("customer.blog_show",$item['slug'])}}" class="text-decoration-none text-secondary">READ MORE</a>
                                <div class="post-action-fire">
                                    <ul class="d-flex p-0 m-0 align-items-center">
                                        <li class="text-secondary">  <i class="bi bi-suit-heart-fill"></i> {{$item['likes']}}</li>
                                    </ul>
                                </div>
                            @endif

                        </div>
                    </div>
                    @empty
                    <div class="d-flex justify-content-center">
                        <h2 class="text-danger"> Nothing Found ! </h2>
                    </div>
                    <hr/>
                    @endforelse

                <div class="d-flex justify-content-center ">
                    {!! $data_page->links() !!}
                </div>
            </div>

        </div>
    </div>
</section>

<!-- blog-banner end  -->
@include('customer.layout2.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>

    $('.clint-wrapperr').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
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

    $('.clints-content').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
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
    $('.rules-content').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
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

    $('.clints-content-gallery').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        prevArrow: "<button type='button' class='slick-prev pull-left'><img src='./assets/images/left-chevron.png'/></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><img src='./assets/images/right-chevron.png'/></button>",
        slidesToScroll: 1,
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

<script>
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
    window.addEventListener('click', function (e) {
        if ($('.navbar-collapse').hasClass('show')) {
            $('.navbar-toggler').click();
        }
    })
</script>
