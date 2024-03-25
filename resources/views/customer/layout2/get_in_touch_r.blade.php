@php
   use Illuminate\Support\Facades\Cache;
   use App\Models\Setting;
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
   // Retrieve setting
   $setting = getSetting();
@endphp
<section class="contact-form  pt-1" id="inquiry" style="background-color: #F5F3FD;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="contact-sec-info">
                    <div class="text-start pb-2">
                        <h4 class="fs-md-2 mt-3 font-f-choose32" style="font-weight: bold;">Request a Demo</h4>
                        <span class="black-line" style="width: 100px;"></span>
                        <p class="get-in-font-para text-dark mt-4">We're dedicated to creating meaningful connections
                            that propel your success forward.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            @php
                                $url_open=\Illuminate\Support\Facades\URL::full();
                            @endphp
                            @if (preg_match('/.*(radar-speed-signs).*/', $url_open))
                                <a href="tel:+18009669329" class="font-weight-bold font-f-choose text-dark"
                                   style="font-weight: bold;"><img src="{{asset('assets\customer\images\phone.svg')}}"/>+1
                                    (800) 966-9329 (US)</a>
                            @else
                                @if ($setting)
                                    <a href="tel:{{$setting->sales_phone}}"
                                       class="text-decoration-none font-f-choose font-weight-bold text-dark"
                                       style="font-weight: bold;"> <i
                                            class="bi bi-telephone-inbound-fill text-primary"></i>
                                        &nbsp {{$setting->sales_phone}}</a>

                                    <a href="tel:{{$setting->support_phone ?? ''}}"
                                       class="text-decoration-none font-f-choose font-weight-bold text-dark"
                                       style="font-weight: bold;">
                                        <i class="bi bi-telephone-inbound-fill text-primary"></i>
                                        &nbsp{{$setting->support_phone}}</a>

                                @endif
                            @endif
                            <a href="mailto:{{$setting->sales_email ?? ''}}"
                               class="text-decoration-none font-f-choose font-weight-bold text-dark"
                               style="font-weight: bold;">
                                <i class="bi bi-envelope-fill text-primary"></i> &nbsp {{$setting->sales_email}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 rounded p-4 mt-4 " style="background-color: white; ">
                <div class="text-start pb-2">
                    <h3 class="fs-md-2 mt-3 font-f-choose32 text-center" style="font-weight: bold;">Talk to our Radar
                        Experts</h3>
                    <p class="get-in-font-para text-center">Contact our team of experts to suggest you the best product
                        for your radar project.</p>
                </div>
                <form action="{{route('customer.inquery.submit')}}" method="post">
                    @csrf
                    <input type="hidden" name="url" value="{{\Illuminate\Support\Facades\URL::full()}}">
                    <div class="row">
                        <div class="col-md-6">
                            <input name="company_name" type="text" id="inputtext5"
                                   placeholder="Company Name / Organization*" class="form-control rounded-0 mb-4"
                                   aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="country" type="text" id="inputtext5" placeholder="Country*"
                                   class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="first_name" type="text" id="inputtext5" placeholder="First Name*"
                                   class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="last_name" type="text" id="inputtext5" placeholder="Last Name*"
                                   class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="text" id="inputtext5" placeholder="Email Address*"
                                   class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-6">
                            <input name="phone_number" type="text" id="inputtext5" placeholder="Phone Number*"
                                   class="form-control rounded-0 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <input name="subject" type="text" id="inputtext5" placeholder="Subject*"
                                   class="form-control rounded-2 mb-4" aria-describedby="textHelpBlock">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" class="form-control rounded-0 mb-4" rows="4" placeholder="Message"
                                      aria-describedby="textHelpBlock"></textarea>
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
