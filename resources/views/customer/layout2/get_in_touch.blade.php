@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<section class="contact-form bg-light mt-1 pt-1" id="inquiry">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="contact-sec-info">
                    <div class="text-start pb-2">
                        <h4 class="fs-md-2 mt-3" style="font-size: 40px;">Request a Demo</h4>
                        <p class="opacity-50">We're dedicated to creating meaningful connections
                            that propel your success forward.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            @php
                                $url_open=\Illuminate\Support\Facades\URL::full();
                            @endphp
                            @if (preg_match('/.*(radar-speed-signs).*/', $url_open))
                                <a href="tel:+18009669329" class="font-weight-bold"><img src="{{asset('assets\customer\images\phone.svg')}}" />+1 (800) 966-9329 (US)</a>
                            @else
                            @if ($setting)
                            <a href="tel:{{$setting->sales_phone}}" class="text-decoration-none font-weight-bold"> <i class="bi bi-telephone-inbound-fill text-primary"></i> &nbsp {{$setting->sales_phone}}</a>

                            <a href="tel:{{$setting->support_phone ?? ''}}" class="text-decoration-none font-weight-bold">
                                <i class="bi bi-telephone-inbound-fill text-primary"></i> &nbsp{{$setting->support_phone}}</a>

                            @endif
                            @endif
                            <a href="mailto:{{$setting->sales_email ?? ''}}" class="text-decoration-none font-weight-bold">
                                <i class="bi bi-envelope-fill text-primary"></i> &nbsp {{$setting->sales_email}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-start pb-2">
                    <h4 class="fs-md-2 mt-3" style="font-size: 40px;">GET IN TOUCH</h4>
                    <p class="opacity-50">Empowering connections that drive your success.</p>
                </div>
                <form action="{{route('customer.inquery.submit')}}" method="post">
                    @csrf
                    <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                    <div class="row">
                        <div class="col-md-6">
                            <input name="company_name" type="text" id="inputtext5" placeholder="Company Name / Organization*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="country" type="text" id="inputtext5" placeholder="Country*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="first_name" type="text" id="inputtext5" placeholder="First Name*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="last_name" type="text" id="inputtext5" placeholder="Last Name*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="inputtext5" placeholder="Email Address*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="phone_number" type="text" id="inputtext5" placeholder="Phone Number*" class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <input name="subject" type="text" id="inputtext5" placeholder="Subject*"
                                   class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" class="form-control rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="textHelpBlock"></textarea>
                        </div>
                    </div>
                    <!-- Google Recaptcha -->
                    <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>

                    <div class="text-start">
                    <button type="submit" class="btn btn-primary px-5 rounded-0">Send Now</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</section>
