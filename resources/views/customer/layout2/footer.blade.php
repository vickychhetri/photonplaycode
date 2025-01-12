@php
    use Illuminate\Support\Facades\Cache;
    use App\Models\Setting;
    if (!function_exists('getSetting')) {
    function getSetting() {
        $key = 'setting';
        if (Cache::has($key)) {
            $setting = Cache::get($key);
        } else {
            $setting = Setting::first();
            Cache::put($key, $setting, now()->addMinutes(60*24*365));
        }
        return $setting;
    }
    }
    // Retrieve setting
    $setting = getSetting();
@endphp
<footer class=" text-white pt-4" style="background-color: #0d69a8;">
    <div class="container">
        <!-- Main Sections -->
        <div class="row">
            <!-- My Account Section -->
            <div class="col-md-3 ">
                <h6 class="fw-bold">My Account</h6>
                <ul>
                    <li><a href="https://www.photonplayinc.com/devicelogin1.html?_gl=1*1ndnfou*_ga*MTExNDMxMzQ2NS4xNzM0NjczMzE4*_ga_E7ZY3YK2KC*MTczNjE1ODEyNC41LjEuMTczNjE1ODgyMy41NS4wLjA" class="text-white text-decoration-none">Cloud Login</a></li>
                    <li><a href="{{route("customer.loginForm")}}" class="text-white text-decoration-none">Account Login</a></li>
                    <li><a href="{{route("customer.history")}}" class="text-white text-decoration-none">Check Order Status</a></li>
                    <li><a href="{{route("customer.shopping.bag")}}" class="text-white text-decoration-none">Cart</a></li>
                    <li><a href="{{route("customer.contact.us")}}" class="text-white text-decoration-none">Report an Issue</a></li>
                </ul>
{{--                <h6 class="fw-bold">Currency</h6>--}}
{{--                <span class="mb-4">--}}
{{--                          <x-CurrencySelector/>--}}
{{--                    </span>--}}
            </div>

            <!-- Customer Service Section -->
            <div class="col-md-3">
                <h6 class="fw-bold">Customer Service</h6>
                <ul>
                    <li><a href="{{route("customer.contact.us")}}" class="text-white text-decoration-none">Contact Support</a></li>
                    <li><a href="{{route("radar.warranty_guarantee")}}" class="text-white text-decoration-none">Warranty and Guarantee</a></li>
                    <li><a href="{{route("customer.radar.speed.signs__get_quote_v1")}}" class="text-white text-decoration-none">Request a Quote</a></li>
                    <li><a href="{{route("customer.contact.us")}}" class="text-white text-decoration-none">Send us Feedback</a></li>
                    <li><a href="{{route("radar.security_privacy_policy")}}" class="text-white text-decoration-none">Security & Privacy Policy</a></li>
                    <li><a href="{{route("radar.secure_shopping")}}" class="text-white text-decoration-none">Secure Shopping</a></li>
                    <li><a href="{{route("radar.terms_conditions")}}" class="text-white text-decoration-none">Terms & Conditions</a></li>
                    <li><a href="{{route("radar.do_not_sell")}}" class="text-white text-decoration-none">Do Not Sell or Share My Personal Info</a></li>
                    <li><a href="{{route("radar.accessibility_statement")}}" class="text-white text-decoration-none">Accessibility</a></li>
                    <li><a href="{{route("radar.shipping_return")}}" class="text-white text-decoration-none">Shipping & Returns</a></li>
                </ul>
            </div>

            <!-- Products Section -->
            <div class="col-md-3">
                <h6 class="fw-bold">Products</h6>
                <ul>
                    <li><a href="{{route("customer.radar.speed.signs")}}" class="text-white text-decoration-none">Radar Speed Signs</a></li>
                    {{--                    <li><a href="#" class="text-white text-decoration-none">Stop Signs</a></li>--}}
                    <li><a href="{{route("customer.portable.variable.message.signs")}}" class="text-white text-decoration-none">Portable Trailers</a></li>
                </ul>
            </div>

            <!-- Join Our Community Section -->
            <div class="col-md-3">
                <h6 class="fw-bold pb-3">Join Our Community</h6>
                <ul class="list-unstyled social-media w-100">
                    <li>
                        <a class="" href="https://www.facebook.com/photonplaygroup/" style="height: 2em;width: 2em;">
                            <svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#799AF9" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="" href="https://twitter.com/PhotonplayInc" style="height: 2em;width: 2em;">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#89C8F9" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="" href="https://www.linkedin.com/company/photonplay-systems/" style="height: 2em;width: 2em;">
                            <svg class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3A94D8" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="" href="https://www.instagram.com/photonplayinc/" style="height: 2em;width: 2em;">
                            <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#F47B9B" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>

                <address>
                    Photonplay Systems Ltd<br>
                    6733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada.<br>
                    Call Us: <a href="tel:8009669329" class="text-white text-decoration-none">(800) 966-9329</a><br>
                    Email: <a href="mailto:sales@photonplay.com" class="text-white text-decoration-none">sales@photonplay.com</a>
                </address>
                <h6 class="fw-bold">We Accept:</h6>
                <p class="mb-0">

                    <img src="{{ asset('signv1/assets/images/payment.jpg') }}" alt="Visa" class="mx-1" style="width: 130px;">

                </p>
            </div>
        </div>

        <!-- Footer Bottom Section -->

    </div>

    <!-- Light Bottom Bar -->
    <div class="bg-primary text-white py-2">
        <p class="m-2"> Copyright &copy; 2025 Photonplay Systems Ltd.</p>
    </div>
</footer>

<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5da70a23df22d913399f714f/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
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
            color: "text",
        },
        onClick: function () {
        } // Callback after click
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
            color: "text",
        },
        onClick: function () {
        } // Callback after click
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
        ]
    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $(slick.$slides.get(currentSlide)).removeClass('bounceOut');
        $(slick.$slides.get(nextSlide)).addClass('bounceIn');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"
        integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>





{{--@php--}}
{{--   use Illuminate\Support\Facades\Cache;--}}
{{--   use App\Models\Setting;--}}
{{--   if (!function_exists('getSetting')) {--}}
{{--   function getSetting() {--}}
{{--       $key = 'setting';--}}
{{--       if (Cache::has($key)) {--}}
{{--           $setting = Cache::get($key);--}}
{{--       } else {--}}
{{--           $setting = Setting::first();--}}
{{--           Cache::put($key, $setting, now()->addMinutes(60*24*365));--}}
{{--       }--}}
{{--       return $setting;--}}
{{--   }--}}
{{--   }--}}
{{--   // Retrieve setting--}}
{{--   $setting = getSetting();--}}
{{--@endphp--}}
{{--    <!-- _____________________ourclint-last-end___________________ -->--}}
{{--<section class="subscribe-section" id="subscribed">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="subscribe-wrapper text-center">--}}
{{--                <p class="subscribe-title" style="font-size: 24px;">Don’t miss our weekly updates about <br>--}}
{{--                    New Products</p>--}}
{{--                <form action="{{route('customer.newsletter.store')}}" class="subscribr-form" method="post">--}}
{{--                    @csrf--}}
{{--                    <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">--}}
{{--                    <div class="col-lg-4 mx-auto">--}}
{{--                        <div class="d-flex border-bottom">--}}
{{--                            <input type="text" placeholder="Enter your email address..."--}}
{{--                                   class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none"--}}
{{--                                   name="email" autocomplete="off">--}}
{{--                            <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<footer class="footer-section px-2">--}}
{{--    <div class="footer-section-inner d-lg-flex justify-content-center">--}}
{{--        <div class="footer-item mb-0 mb-md-5 footer-item-1">--}}
{{--            <div class="logo-bottom mb-lg-4 w-100">--}}
{{--                <img src="{{asset('assets\customer\images\logo-dark.png')}}" class="lazyload" alt="Photonplay System">--}}
{{--            </div>--}}
{{--            <div class="contact-info w-100">--}}
{{--                <div class="contact-info-item w-100">--}}
{{--                    @php--}}
{{--                        $url_open=\Illuminate\Support\Facades\URL::full();--}}
{{--//                    @endphp--}}
{{--                    @if (preg_match('/.*(radar-speed-signs).*/', $url_open))--}}
{{--                        <a href="tel:+18009669329"><img src="{{asset('assets\customer\images\phone.svg')}}" style="height: 15px;"/>+1 (800)--}}
{{--                            966-9329 (US)</a>--}}
{{--                    @else--}}
{{--                        @if ($setting)--}}
{{--                            <a href="tel:{{$setting->sales_phone}}"><img--}}
{{--                                    src="{{asset('assets\customer\images\phone.svg')}}" style="height: 15px;"/> {{$setting->sales_phone}}</a>--}}
{{--                            @if ($setting->support_phone !=null)--}}
{{--                                <a href="tel:{{$setting->support_phone}}"><img--}}
{{--                                        src="{{asset('assets\customer\images\phone.svg')}}" style="height: 15px;"/> {{$setting->support_phone}}--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                        @endif--}}
{{--                    @endif--}}
{{--                    <a href="mailto:{{$setting->sales_email}}"><img--}}
{{--                            src="{{asset('assets\customer\images\message.png')}}" style="height: 15px;"/> {{$setting->sales_email}}</a>--}}
{{--                </div>--}}
{{--                --}}{{----}}{{--                    <a href="{{route('customer.contact.us')}}" class="btn btn-primary mt-3">Contact Now</a>--}}
{{--                <ul class="social-media w-100">--}}
{{--                    <li><a class="" href="{{$setting->facebook ?? ''}}" style="height: 2em;width: 2em;">--}}

{{--                            <svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill="#316FF6"--}}
{{--                                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>--}}
{{--                            </svg>--}}

{{--                        </a></li>--}}
{{--                    <li><a class="" href="{{$setting->twitter  ?? ''}}" style="height: 2em;width: 2em;">--}}

{{--                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill="#1DA1F2"--}}
{{--                                      d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>--}}
{{--                            </svg>--}}

{{--                        </a></li>--}}
{{--                    <li><a class="" href="{{$setting->linkedin ?? ''}}" style="height: 2em;width: 2em;">--}}

{{--                            <svg class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill="#0077B5"--}}
{{--                                      d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>--}}
{{--                            </svg>--}}
{{--                        </a></li>--}}
{{--                    <li><a class="" href="{{$setting->instagram ?? ''}}" style="height: 2em;width: 2em;">--}}

{{--                            <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill="#E4405F"--}}
{{--                                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>--}}
{{--                            </svg>--}}

{{--                        </a></li>--}}

{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="footer-item mb-0 mb-md-5 footer-item-2">--}}
{{--            <h5 style="font-size: 20px;">QUICK LINKS</h5>--}}
{{--            <ul class="p-0">--}}
{{--                <li><a href="/" class="text-capitalize">Home</a></li>--}}
{{--                <li><a href="{{route('customer.about.us')}}" class="text-capitalize">About us</a></li>--}}
{{--                <li><a href="{{route('customer.contact.us')}}" class="text-capitalize">Contact us</a></li>--}}
{{--                <li><a href="{{route('customer.blog')}}" class="text-capitalize">News & Events</a></li>--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="footer-item mb-0 mb-md-5 footer-item-2">--}}
{{--            <h5 class="text-uppercase" style="font-size: 20px;">SOLUTIONS</h5>--}}
{{--            <ul class="p-0">--}}
{{--                <li><a href="{{route('customer.solution.highway')}}">Highways</a></li>--}}
{{--                <li><a href="{{route('customer.solution.tunnel')}}">Tunnels</a></li>--}}
{{--                <li><a href="{{route('customer.solution.city')}}">Smart Cities</a></li>--}}
{{--                <li><a href="{{route('customer.solution.transit')}}">Transit</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="footer-item mb-0 mb-md-5 footer-item-2">--}}
{{--            <h5 class="w-75 pl-3" style="font-size: 20px;padding-left: 15px;">Important Links</h5>--}}
{{--            <ul class="p-0">--}}
{{--                <li><a href="{{route('customer.show_page_policy_shipping')}}">Shipping Policy</a></li>--}}
{{--                <li><a href="{{route('customer.show_page_policy_return_policy')}}">Return/Refund Policy</a></li>--}}
{{--                <li><a href="{{route('customer.show_page_policy_term_conditions')}}">Terms & Conditions</a></li>--}}
{{--                <li><a href="{{route('customer.show_page_policy_privacy_policy')}}">Privacy Policy--}}
{{--                    </a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<div class="sticky-bottom_bootom_sticky_footer">--}}
{{--    TALK TO OUR SALES ::--}}
{{--    <a href="tel:+18009669329" style="text-decoration: none;color: white;" >--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">--}}
{{--            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>--}}
{{--        </svg>--}}
{{--        +1 (800)--}}
{{--        966-9329  </a>--}}
{{--    &nbsp;</div>--}}

{{--    &nbsp;--}}

{{--    <footer class="footer">--}}
{{--        <div class="container">--}}
{{--            <div class="row g-3 justify-content-between">--}}
{{--                <div class="col-md-3">--}}
{{--                    <h5 class="mb-4">Quick Contact</h5>--}}

{{--                    <ul class="list-unstyled">--}}
{{--                        <li>If you have any questions or need help, feel free to contact our team.</li>--}}
{{--                        <li class="d-flex align-items-center gap-2">--}}
{{--                            <a href="mailto:Sales@photonplay.com" class="fs-18 text-primary fw-semibold">Sales@photonplay.com</a>--}}
{{--                        </li>--}}
{{--                        <li class="d-flex align-items-center gap-4">--}}
{{--                            <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Phone-Icon.png" alt="Phone Icon">--}}
{{--                            <a href="tel:+18009669329" class="fs-18 text-primary fw-semibold">(800) 966-9329</a>--}}
{{--                        </li>--}}
{{--                        <li>6733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada.</li>--}}
{{--                        <li class="d-flex align-items-center gap-2">--}}
{{--                            <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Location-Icon.png" alt="Location Icon">--}}
{{--                            <a href="https://www.google.com/maps/search/?api=1&query=6733+Mississauga+Rd,+Mississauga,+ON+L5N+6J5,+Canada"--}}
{{--                               target="_blank"--}}
{{--                               class="fw-bold text-white">--}}
{{--                                Get Direction--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}

{{--                <div class="col-md-2">--}}
{{--                    <h5 class="mb-4">Company</h5>--}}

{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="{{route('customer.radar.speed.signs')}}" class="nav-link">Home</a></li>--}}
{{--                        <li><a href="{{route('customer.about.us')}}" class="nav-link">About us</a></li>--}}
{{--                        <li><a href="{{route('customer.contact.us')}}" class="nav-link">Contact us</a></li>--}}
{{--                        <li><a href="{{route('customer.blog')}}" class="nav-link">News & Events</a></li>--}}


{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <h5 class="mb-4">Products</h5>--}}

{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="https://www.photonplay.com/radar-cloud-management" class="nav-link"> Cloud SOFTWARE </a></li>--}}
{{--                        <li><a href="https://www.photonplay.com/radar-speed-signs/model/r1200" class="nav-link"> iCop R1200</a></li>--}}
{{--                        <li><a href="https://www.photonplay.com/radar-speed-signs/model/r1500" class="nav-link">  iCop R1500</a></li>--}}
{{--                        <li><a href="https://www.photonplay.com/radar-speed-signs/model/r1500m" class="nav-link"> iCop R1500M</a></li>--}}
{{--                        <li><a href="https://www.photonplay.com/radar-speed-signs/model/r1800m" class="nav-link"> iCop R1800M</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <h5 class="mb-5">Have A Project</h5>--}}
{{--                    <a href="#inquiry"  style="max-width: 250px;" class="btn btn-primary">Get A Free Quote</a>--}}

{{--                    <ul class="list-unstyled d-flex align-items-center gap-3 mt-4">--}}
{{--                        <li>--}}
{{--                            <a href="https://www.facebook.com/photonplaygroup/">--}}
{{--                                <img src="/signv1/assets/UI-01/UI-Data/Images/Footer-Facebook.png" alt="Facebook">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://twitter.com/PhotonplayInc">--}}
{{--                                <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Twitter.png" alt="Twitter">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.linkedin.com/company/photonplay-systems/">--}}
{{--                                <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Linkedin.png" alt="LinkedIn">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--    <div class="back-to-top" id="backToTop" style="cursor: pointer;">--}}
{{--        <div class="back-to-top-text text-center">--}}
{{--        <span>--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">--}}
{{--                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>--}}
{{--            </svg>--}}
{{--        </span>--}}
{{--            Back To Top--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="footer-copyright px-3 d-flex flex-wrap justify-content-center align-items-center gap-5">--}}
{{--        <p class="text-secondary fs-14">&copy; 2024 Photonplay Systems Inc. All Right Reserved.</p>--}}
{{--        <ul class="list-unstyled m-0 d-flex align-items-center flex-wrap gap-4">--}}
{{--            <li><a href="/term-conditions" class="nav-link fs-14 fw-semibold text-black m-0">Terms & Conditions</a></li>--}}
{{--            <li>.</li>--}}
{{--            <li><a href="/privacy-policy" class="nav-link fs-14 fw-semibold text-black m-0">Privacy Policy</a></li>--}}
{{--            <li>.</li>--}}
{{--            <li><a href="/sitemap.xml" class="nav-link fs-14 fw-semibold text-black m-0">Sitemap</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--<script type="text/javascript">--}}
{{--    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();--}}
{{--    (function () {--}}
{{--        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];--}}
{{--        s1.async = true;--}}
{{--        s1.src = 'https://embed.tawk.to/5da70a23df22d913399f714f/default';--}}
{{--        s1.charset = 'UTF-8';--}}
{{--        s1.setAttribute('crossorigin', '*');--}}
{{--        s0.parentNode.insertBefore(s1, s0);--}}
{{--    })();--}}
{{--</script>--}}

{{--<script>--}}
{{--    @if (session()->has('success'))--}}
{{--    Toastify({--}}
{{--        text: '{{ session('success') }}',--}}
{{--        duration: 3000,--}}
{{--        newWindow: true,--}}
{{--        close: true,--}}
{{--        gravity: "top", // `top` or `bottom`--}}
{{--        position: "center", // `left`, `center` or `right`--}}
{{--        stopOnFocus: true, // Prevents dismissing of toast on hover--}}
{{--        style: {--}}
{{--            background: "green",--}}
{{--            color: "text",--}}
{{--        },--}}
{{--        onClick: function () {--}}
{{--        } // Callback after click--}}
{{--    }).showToast();--}}
{{--    @endif--}}

{{--    @if (session()->has('error'))--}}
{{--    Toastify({--}}
{{--        text: '{{ session('error') }}',--}}
{{--        duration: 3000,--}}
{{--        newWindow: true,--}}
{{--        close: true,--}}
{{--        gravity: "top", // `top` or `bottom`--}}
{{--        position: "center", // `left`, `center` or `right`--}}
{{--        stopOnFocus: true, // Prevents dismissing of toast on hover--}}
{{--        style: {--}}
{{--            background: "#FF3333",--}}
{{--            color: "text",--}}
{{--        },--}}
{{--        onClick: function () {--}}
{{--        } // Callback after click--}}
{{--    }).showToast();--}}
{{--    @endif--}}

{{--</script>--}}


{{--<script>--}}
{{--    function showModal(imgurl) {--}}
{{--        var modalOverlay = document.getElementById("modalOverlay");--}}
{{--        var modalContent = document.getElementById("modalContent");--}}
{{--        var image = document.getElementById("myImage");--}}

{{--        image.src = imgurl;--}}
{{--        image.src = imgurl;--}}
{{--        image.style.display = "block";--}}
{{--        image.style.margin = "0 auto";--}}
{{--        image.style.padding = "20px";--}}

{{--        modalOverlay.style.display = "block";--}}

{{--        modalContent.style.display = "flex";--}}
{{--        modalContent.style.justifyContent = "center";--}}
{{--        modalContent.style.alignItems = "center";--}}
{{--    }--}}

{{--    function hideModal() {--}}
{{--        var modalOverlay = document.getElementById("modalOverlay");--}}
{{--        var image = document.getElementById("myImage");--}}
{{--        modalOverlay.style.display = "none";--}}
{{--        image.style.display = "none";--}}
{{--    }--}}

{{--    $('.key-slider').slick({--}}
{{--        dots: true,--}}
{{--        infinite: false,--}}
{{--        speed: 300,--}}
{{--        slidesToShow: 1,--}}
{{--        slidesToScroll: 1,--}}
{{--        arrows: false,--}}
{{--        autoplay: true, // Enable autoplay--}}
{{--        autoplaySpeed: 4000, // Set autoplay speed (in milliseconds)--}}
{{--        responsive: [--}}
{{--            {--}}
{{--                breakpoint: 1024,--}}
{{--                settings: {--}}
{{--                    slidesToShow: 1,--}}
{{--                    slidesToScroll: 1,--}}
{{--                    infinite: true,--}}
{{--                    dots: true--}}
{{--                }--}}
{{--            },--}}
{{--            {--}}
{{--                breakpoint: 600,--}}
{{--                settings: {--}}
{{--                    slidesToShow: 1,--}}
{{--                    slidesToScroll: 1--}}
{{--                }--}}
{{--            },--}}
{{--            {--}}
{{--                breakpoint: 480,--}}
{{--                settings: {--}}
{{--                    slidesToShow: 1,--}}
{{--                    slidesToScroll: 1--}}
{{--                }--}}
{{--            }--}}
{{--        ]--}}
{{--    }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {--}}
{{--        $(slick.$slides.get(currentSlide)).removeClass('bounceOut');--}}
{{--        $(slick.$slides.get(nextSlide)).addClass('bounceIn');--}}
{{--    });--}}
{{--</script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"--}}
{{--        integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
