@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<section class="contact-form bg-light" id="inquiry">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-sec-info">
                    <div class="text-start pb-2">
                        <h2 class="fs-md-2 mt-3">Request a Demo</h2>
                        <p class="opacity-50">We're dedicated to creating meaningful connections
                            that propel your success forward.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            @if ($setting)
                            <a href="tel:{{$setting->sales_phone}}" class="text-decoration-none"> <i class="bi bi-telephone-inbound-fill text-primary"></i> &nbsp {{$setting->sales_phone}}</a>

                            <a href="tel:{{$setting->support_phone ?? ''}}" class="text-decoration-none">
                                <i class="bi bi-telephone-inbound-fill text-primary"></i> &nbsp{{$setting->support_phone}}</a>

                            <a href="mailto:{{$setting->sales_email ?? ''}}" class="text-decoration-none">
                                <i class="bi bi-envelope-fill text-primary"></i> &nbsp {{$setting->sales_email}}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-start pb-2">
                    <h2 class="fs-md-2 mt-3">GET IN TOUCH</h2>
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
                            <textarea name="message" class="form-control rounded-0 mb-4" rows="4" placeholder="Message" aria-describedby="textHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="text-start">
                    <button type="submit" class="btn btn-primary px-5 rounded-0">Send Now</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</section>
