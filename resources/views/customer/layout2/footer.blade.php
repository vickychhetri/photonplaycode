@php
use App\Models\Setting;
use App\Models\Category;
use App\Models\Blog;
$setting = Setting::first();
$categories = Category::select('title')->take(3)->get();
$blogs = Blog::select('slug','title')->take(4)->get();
@endphp

<script>
    // Add a click event listener to the button

        window.addEventListener('consoltoEvent', (e) => { // Listen to events sent from Consolto

            document.getElementById('startvideochat').addEventListener('click', function () {
                // console.log("hitted");
            if (e.detail.consoltoReady) { // Will be true only when Consolto becomes ready

                var event = new CustomEvent('consolto_h2w', { // Create a custom event that will be dispatched and trigger one of the actions.

                    detail: {

                        'et-click-type': 'start-call', // One of the 5 available actions

                    },

                });

                window.dispatchEvent(event); // Here we programmatically trigger the Consolto widget

            }

        });
    });

</script>

<!-- _____________________ourclint-last-end___________________ -->
    <section class="subscribe-section" id="subscribed">
        <div class="container">
            <div class="row">
                <div class="subscribe-wrapper text-center">
                    <p class="subscribe-title" style="font-size: 24px;">Don’t miss our weekly updates about <br>
                        New Products</p>
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
                    <img src="{{asset('assets\customer\images\logo-dark.png')}}"  class="lazyload" alt="Photonplay System">
                </div>
                <div class="footer_Desc" style="text-align: justify;word-spacing:-1px;clear: both;">
                    <p>
                        PhotonPlay, a family-owned company, delivers high quality intelligent transportation systems (ITS) worldwide. For over 12 years, we've catered to system integrators, government authorities, OEMs, and corporations across 30+ countries, focusing on safer, more efficient, and sustainable mobility solutions.
                        Our expertise,innovation, and commitment to smarter transportation make us a trusted partner.
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
                <h5 style="font-size: 20px;">QUICK LINKS</h5>
                <ul class="p-0">
                    <li><a href="/" class="text-capitalize">Home</a></li>
                    <li><a href="{{route('customer.about.us')}}" class="text-capitalize">About us</a></li>
                    <li><a href="{{route('customer.contact.us')}}" class="text-capitalize">Contact us</a></li>
                    <li><a href="{{route('customer.blog')}}" class="text-capitalize">News & Events</a></li>

                    <!-- @forelse ($categories as $category)
                    <li><a>{{$category->title}}</a></li>
                    @empty

                    @endforelse -->
                </ul>
            </div>
            <div class="footer-item mb-0 mb-md-5 footer-item-2">
                <h5 class="text-uppercase" style="font-size: 20px;">SOLUTIONS</h5>
                <ul class="p-0">
                    <li><a href="{{route('customer.solution.highway')}}">Highways</a></li>
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
                <h5 class="w-100" style="font-size: 20px;">Get in Touch with Us</h5>
                <div class="contact-info w-100">
                    <div class="contact-info-item w-100">
                            @php
                                $url_open=\Illuminate\Support\Facades\URL::full();
                            @endphp
                            @if (preg_match('/.*(radar-speed-signs).*/', $url_open))
                                <a href="tel:+18009669329"><img src="{{asset('assets\customer\images\phone.svg')}}" />+1 (800) 966-9329 (US)</a>
                            @else
                            @if ($setting)
                                <a href="tel:{{$setting->sales_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->sales_phone}}</a>
                                @if ($setting->support_phone !=null)
                                    <a href="tel:{{$setting->support_phone}}"><img src="{{asset('assets\customer\images\phone.svg')}}" /> {{$setting->support_phone}} </a>
                                @endif
                                <a href="mailto:{{$setting->sales_email}}"><img src="{{asset('assets\customer\images\message.png')}}" /> {{$setting->sales_email}}</a>
                                  @endif
                            @endif

                    </div>
{{--                    <a href="{{route('customer.contact.us')}}" class="btn btn-primary mt-3">Contact Now</a>--}}
                    <ul class="social-media w-100">
                    <li><a class="" href="{{$setting->facebook ?? ''}}"><img src="{{asset('assets\customer\images\facebook.svg')}}" class="lazyload" /></a></li>
                    <li><a class="" href="{{$setting->twitter  ?? ''}}"><img src="{{asset('assets\customer\images\twitter.jpg')}}" class="lazyload" /></a></li>
                    <li><a class="" href="{{$setting->linkedin ?? ''}}"><img src="{{asset('assets\customer\images\linkdin.jpg')}}" class="lazyload" /></a></li>
                    <li><a class="" href="{{$setting->instagram ?? ''}}"><img src="{{asset('assets\customer\images\instagram.png')}}" class="lazyload" /></a></li>

                </ul>
                </div>
            </div>
        </div>
    </footer>

       <div class="contain0er-fluid">
          <div class="sec-copyright py-3 text-center m-auto d-flex justify-content-between align-items-center">
              <p>
                 <a href="{{route('customer.show_page_policy_term_conditions')}}"> Terms </a>
                  |    <a href="{{route('customer.show_page_policy_privacy_policy')}}">Privacy </a> |    <a href="{{route('customer.show_page_policy_shipping')}}">Shipping </a>|    <a href="{{route('customer.show_page_policy_return_policy')}}">Refund/Return Policy</a>
              </p>
              <p>© 2024 Photonplay Systems Inc. All right reserved</p>
          </div>
       </div>
{{--<script>window.addEventListener('load', function () { var el = document.createElement('script'); el.setAttribute('src', 'https://client.consolto.com/iframeApp/iframeApp.js'); el.id = 'et-iframe'; el.async = true; el.setAttribute('data-widgetId', '64e312c9c0265947a3d8f062'); el.setAttribute('data-version', 0.5); el.setAttribute('data-test', false); document.body.appendChild(el); }); </script>--}}

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5da70a23df22d913399f714f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>

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

        image.src = imgurl;
        image.src = imgurl;
        image.style.display = "block";
        image.style.margin = "0 auto";
        image.style.padding = "20px";

        modalOverlay.style.display = "block";

        modalContent.style.display = "flex";
        modalContent.style.justifyContent = "center";
        modalContent.style.alignItems = "center";

        // image.src=imgurl;
        // // image.style.width="500px";
        // // image.style.height="500px";
        // modalOverlay.style.display = "block";
        // image.style.display = "block";

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
