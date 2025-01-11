
<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name',ManageSeo::NEWS_EVENT)->first();
$seo_meta=[
    "title"=>$data_record->title,
    "description"=>$data_record->description,
    "keywords"=>$data_record->keyword,
    "schema"=>$data_record->schema,
    "feature_image"=>"assets/customer/images/products_home/iCop-MTO-Side-front.webp"
];

$page = $_GET['page'] ?? 1;
?>
@include('customer.layout2.header')

<!-- Banner sec -->
<section class="inner-banner-bg">
    <h5 class="text-white text-center mb-0 h1">NEWS & EVENTS</h5>
</section>
<!-- Banner Sec End -->
<section class="blog-content-list position-relative">
    <div class="social-icons position-absolute start-0">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @foreach($posts as $s_blog)
                    @if ($s_blog['status'] == "publish")
                    <div class="post-item mb-4" >
<?php
//                        dd($s_blog); ?><!---->

                                                <div class="">
                            <a href="{{route("customer.blog_show",$s_blog['slug'])}}"> <img
                                    data-src="{{$s_blog['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium']['source_url'] ?? ''}}" alt=""
                                    class="mb-4 img-fluid lazyload"  > </a>
                        </div>

                            <div class="mb-4 pb-4 post-info">
                                <a href="{{route('customer.blog_show', $s_blog['slug'])}}"   class="text-decoration-none">   <h2 class="text-uppercase"> <b>   {{$s_blog['title']['rendered']}} </b></h2></a>
                                <div>

                                    @if($s_blog['date'])
                                        {{ \Carbon\Carbon::parse($s_blog['date'])->format('M d, Y \a\t h:i A') }}

                                    @endif
                                    by {{$s_blog['_embedded']['author'][0]['name']}}</div>
                                <p>
                                    {!! $s_blog['excerpt']['rendered'] !!}
                                </p>
                            </div>
                            <div class="post-action d-flex justify-content-between">
                                <a href="" class="text-decoration-none text-secondary">READ MORE</a>
                                <div class="post-action-fire">
                                    <ul class="d-flex p-0 m-0 align-items-center">
                                        <a href="{{route('customer.blog_show',$s_blog['slug'])}}" class="text-decoration-none">
                                        <li class="text-secondary">  <i class="bi bi-suit-heart-fill"></i> </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endif

                @endforeach

                   <div class="d-flex justify-content-center ">
                   <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{route('customer.blog', ['page' => ($page == 1) ? 1 : $page - 1])}}">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="{{route('customer.blog', ['page' => $page + 1])}}">Next</a></li>
                        </ul>
                    </nav>
                    </div>
            </div>
            <div class="col-lg-4 col-md-12 position-sticky top-0 h-100">
                <form method="get" action="{{route('customer.search_photon_things')}}">
                <div class="search mb-5 position-relative">
                    <input type="text" name="search" placeholder="Search" class="border-0 ">

                    <i class="bi bi-search"></i>
                </div>
                </form>
                <div class="sec-sidebar">
                    <div class="sidebar-item">
                        <div class="side-bar-title">Categories</div>
                        <ul class="m-0 p-0">
                            @foreach($categories as $category)
                                <li class=" "><a href="/blogs?category={{$category['slug']}}" class="text-decoration-none text-uppercase">{{$category['name']}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <div class="side-bar-title text-uppercase">RECENT POSTS</div>
                        <ul class="m-0 p-0 latest-post">
                            @foreach($latestBlogRecords as $lt_blog)
                                <li>
                                    <a href="{{route('customer.blog_show',$lt_blog['slug'])}}" class="d-flex align-items-center text-decoration-none text-secondary">
                                        <!-- <img src="" /> -->
                                        <div class="latest-post-content ms-2">
                                            <h4>{{$lt_blog['title']['rendered']}}</h4>
                                            <span>
                                                <?php
                                                    $blog_created_date = date('F d Y', strtotime($lt_blog['date']));
                                                    echo $blog_created_date;
                                                    ?>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-item">
                        <div class="side-bar-title">Archive</div>
                        <ul class="m-0 p-0">
                            @foreach($groupedPosts as $postarchive)
                                <li><a href="#" class="text-decoration-none">{{$postarchive}} </a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <!-- </div> -->
        </div>
    </div>
</section>

<!-- blog-banner end  -->
@include('customer.layout2.our_clients')
@include('customer.layout2.footer_photon')
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}
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

    // window.addEventListener('click', function (e) {
    //     if (window.innerWidth > 992) {
    //         if ($('.navbar-collapse').hasClass('show')) {
    //             $('.navbar-toggler').click();
    //         }
    //     }
    //
    // })

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

    });
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

</script>
</body>
</html>
