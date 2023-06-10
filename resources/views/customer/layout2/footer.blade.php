@php
use App\Models\Setting;
use App\Models\Category;
use App\Models\Blog;
$setting = Setting::first();
$categories = Category::select('title')->take(3)->get();
$blogs = Blog::select('slug','title')->take(4)->get();
@endphp

<!-- _____________________ourclint-last-end___________________ -->
    <section class="subscribe-section" id="subscribed">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                        New Products</h3>
                    <form action="{{route('customer.newsletter.store')}}" class="subscribr-form" method="post">
                        @csrf
                        <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                        <div class="col-lg-4 mx-auto">
                            <div class="d-flex border-bottom">
                                <input type="text" placeholder="Enter your email address..."
                                       class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none" name="email" autocomplete="off">
                                <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section px-2">
        <div class="footer-section-inner d-lg-flex justify-content-center">
            <div class="footer-item mb-0 mb-md-5 footer-item-1">
                <div class="logo-bottom mb-lg-4 w-100">
                    <img src="{{asset('assets\customer\images\logo-dark.png')}}" alt="">
                </div>
                <div class="description">
                    <p style="text-align: justify">
                    PHOTONPLAY is a family owned, India based design, develop and manufacturing of Systems for the ITS
                    industry since 2006. With subsidiary offices in US, Australia and Norway plus distribution facility
                    in
                    the US and representatives all over the world, PHOTONPLAY has satisfied customers (System
                    integrators,
                    Govt Authorities, OEMs and corporates) in over 30 countries worldwide.
                    </p>
                </div>

            </div>
            <!-- <div class="footer-item mb-0 mb-md-5 footer-item-three">
                <h2>SHOP</h2>
                <ul class="p-0">
                    @forelse ($categories as $category)
                    <li><a>{{$category->title}}</a></li>
                    @empty

                    @endforelse
                </ul>
            </div> -->
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h2>QUICK LINKS</h2>
                <ul class="p-0">
                    <li><a href="/" class="text-capitalize">Home</a></li>
                    <li><a href="{{route('customer.about.us')}}" class="text-capitalize">About us</a></li>
                    <li><a href="{{route('customer.contact.us')}}" class="text-capitalize">Contact us</a></li>
                    <li><a href="{{route('customer.blog')}}" class="text-capitalize">News & Events</a></li>
                    <li><a href="/sitemap.xml" class="text-capitalize">Sitemap</a></li>
                    <!-- @forelse ($categories as $category)
                    <li><a>{{$category->title}}</a></li>
                    @empty

                    @endforelse -->
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h2 class="text-uppercase">SOLUTIONS</h2>
                <ul class="p-0">
                    <li><a href="{{route('customer.solution.highway')}}">Highway</a></li>
                    <li><a href="{{route('customer.solution.tunnel')}}">Tunnels</a></li>
                    <li><a href="{{route('customer.solution.city')}}">Smart Cities</a></li>
                    <li><a href="{{route('customer.solution.transit')}}">Transit</a></li>
                </ul>
            </div>
            <!-- <div class="footer-item mb-0 mb-md-5 footer-item-four">
                <h2>NEWS & EVENTS</h2>
                <ul class="p-0">
                    @forelse ($blogs as $blog)
                    <li><a href="{{$blog->slug}}">{{$blog->title}}</a></li>
                    @empty

                    @endforelse

                </ul>
            </div> -->
            <div class="footer-item mb-0 mb-md-5 footer-item-5">
                <h2 class="w-100">Get in Touch with Us</h2>
                <div class="contact-info w-100">
                    <div class="contact-info-item w-100">
                        @if ($setting)
                        <a href="tel:{{$setting->sales_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->sales_phone}}</a>
                        @if ($setting->support_phone !=null)
                        <a href="tel:{{$setting->support_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->support_phone}}</a>
                        @endif
                        <a href="mailto:{{$setting->sales_email}}"><img src="{{asset('assets\customer\images\message.png')}}" /> {{$setting->sales_email}}</a>
                        @endif
                    </div>
{{--                    <a href="{{route('customer.contact.us')}}" class="btn btn-primary mt-3">Contact Now</a>--}}
                    <ul class="social-media w-100">
                    <li><a class="" href="{{$setting->facebook ?? ''}}"><img src="{{asset('assets\customer\images\facebook.svg')}}" /></a></li>
                    <li><a class="" href="{{$setting->twitter  ?? ''}}"><img src="{{asset('assets\customer\images\twitter.jpg')}}" /></a></li>
                    <li><a class="" href="{{$setting->linkedin ?? ''}}"><img src="{{asset('assets\customer\images\linkdin.jpg')}}" /></a></li>
                    <li><a class="" href="{{$setting->instagram ?? ''}}"><img src="{{asset('assets\customer\images\instagram.png')}}" /></a></li>

                </ul>
                </div>
            </div>
        </div>
    </footer>
       <div class="container-fluid">
          <div class="sec-copyright py-3 text-center m-auto d-flex justify-content-between align-items-center">
              <p>
                 <a href="{{route('customer.show_page_policy','term-conditions')}}"> Terms </a>
                  |    <a href="{{route('customer.show_page_policy','privacy-policy')}}">Privacy </a> |    <a href="{{route('customer.show_page_policy','shipping')}}">Shipping </a>|    <a href="{{route('customer.show_page_policy','return-policy')}}">Refund/Return Policy</a>
              </p>
              <p>© 2023 Photonplay Systems Inc. All right reserved</p>
          </div>
       </div>
<script>
    @if (session()->has('success'))
    Toastify({
        text: '{{ session('success') }}',
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "green",
            color:"text",
        },
        onClick: function(){} // Callback after click
    }).showToast();
    @endif

    @if (session()->has('error'))
    Toastify({
        text: '{{ session('error') }}',
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "#FF3333",
            color:"text",
        },
        onClick: function(){} // Callback after click
    }).showToast();
    @endif

</script>



<script>
    function showModal(imgurl) {
        var modalOverlay = document.getElementById("modalOverlay");
        var modalContent = document.getElementById("modalContent");
        var image = document.getElementById("myImage");
        image.src=imgurl;
        // image.style.width="500px";
        // image.style.height="500px";
        modalOverlay.style.display = "block";
        image.style.display = "block";
        // modalContent.style.width = image.width + "px";
        // modalContent.style.height = image.height + "px";
    }

    function hideModal() {
        var modalOverlay = document.getElementById("modalOverlay");
        var image = document.getElementById("myImage");
        modalOverlay.style.display = "none";
        image.style.display = "none";
    }

    $('.key-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true, // Enable autoplay
        autoplaySpeed: 4000, // Set autoplay speed (in milliseconds)
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
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(slick.$slides.get(currentSlide)).removeClass('bounceOut');
        $(slick.$slides.get(nextSlide)).addClass('bounceIn');
    });
</script>

