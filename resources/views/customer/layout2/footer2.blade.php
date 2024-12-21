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
            <div class="col-md-3">
                <h6 class="fw-bold">My Account</h6>
                <ul>
                    <li><a href="#" class="text-white text-decoration-none">Cloud Login</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Account Login</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Check Order Status</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Cart</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Report an Issue</a></li>
                </ul>
            </div>

            <!-- Customer Service Section -->
            <div class="col-md-3">
                <h6 class="fw-bold">Customer Service</h6>
                <ul>
                    <li><a href="#" class="text-white text-decoration-none">Contact Support</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Warranty and Guarantee</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Request a Quote</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Send us Feedback</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Security & Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Secure Shopping</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Do Not Sell or Share My Personal Info</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Accessibility</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Shipping & Returns</a></li>
                </ul>
            </div>

            <!-- Products Section -->
            <div class="col-md-3">
                <h6 class="fw-bold">Products</h6>
                <ul>
                    <li><a href="#" class="text-white text-decoration-none">Radar Speed Signs</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Stop Signs</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Portable Trailers</a></li>
                </ul>
            </div>

            <!-- Join Our Community Section -->
            <div class="col-md-3">
                <h6 class="fw-bold">Join Our Community</h6>
                <ul class="list-unstyled d-flex align-items-center gap-3 mt-4">
                    <li>
                        <a href="https://www.facebook.com/photonplaygroup/">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/Footer-Facebook.png" alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PhotonplayInc">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Twitter.png" alt="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/photonplay-systems/">
                            <img src="/signv1/assets/UI-01/UI-Data/Images/footer-Linkedin.png" alt="LinkedIn">
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
