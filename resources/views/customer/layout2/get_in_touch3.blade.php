@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<style>
    .contact-header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }
    .contact-info p {
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
    }
    .contact-info a {
        color: #007bff;
        text-decoration: none;
    }
    .send-btn {
        background: linear-gradient(90deg, #9767cc, #51c4c0);
        color: #fff;
        border: none;
        font-weight: bold;
    }
    .send-btn:hover {
        opacity: 0.9;
    }
</style>
<section class="contact-form mt-0 pt-1" id="inquiry" style="position: relative; background-color: rgba(228,240,243,0.36);">
    <div class="container position-relative" style="z-index: 2;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header mt-4">
                        <h2 class="text-center"> HAVE SOME QUESTIONS? </h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 bg-white rounded-4 p-3 m-2">
                            <div class="d-flex flex-column flex-md-row justify-content-around align-items-center gap-3">
                                <div>
                                    <p class="h6 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-telephone-fill text-primary" style="font-size: 22px;"></i>
                                        &nbsp;
                                        <a href="tel:800-966-9329" class="text-decoration-none text-black" style="font-size: 22px;">800-966-9329</a>
                                        &nbsp;(Mon–Fri, 9 AM–6 PM EST)
                                    </p>
                                </div>
                                <div>
                                    <p class="h6 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-envelope-fill text-primary" style="font-size: 22px;"></i>
                                        &nbsp; &nbsp;
                                        <a href="mailto:sales@photonplay.com" class="text-decoration-none text-black" style="font-size: 22px;">sales@photonplay.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row contact-container align-items-center">
                <!-- Left Section -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('signv1/assets/images/open-mail.png') }}" alt="Email" class="img-fluid1 " style="max-height: 250px;">
                </div>
                <!-- Right Section -->
                <div class="col-md-6">
                    <form action="{{route('customer.inquery.submit')}}" method="post" >
                        @csrf
                        <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-5" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-5" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control rounded-5" name="email" placeholder="What's your email?" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control rounded-5" name="message" placeholder="Your questions..." rows="4" required></textarea>
                        </div>
                        <!-- Google Recaptcha -->
                        <div class="g-recaptcha mt-4 mb-4 " style="max-width: 100%;" data-sitekey={{config('services.recaptcha.key')}}></div>

                        <button type="submit" class="btn send-btn rounded-5 w-100">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave SVG -->
    <div style="position: absolute; bottom: 0; width: 100%; height: 500px; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="width: 100%; height: 100%; display: block;">
            <path d="M0.100,49.98 C100.00,50.00 400.78,200.00 500.00,100.98 L500.00,150.00 L0.00,150.00 Z" style="fill: white;"></path>
        </svg>
    </div>
</section>


