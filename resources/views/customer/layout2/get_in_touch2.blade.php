@php
use App\Models\Setting;
$setting = Setting::first();
@endphp
<section class="contact-form mt-1 pt-1" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <div class="text-start pb-2">
                        <h4 class="fs-md-2 mt-3" style="font-size: 40px;">Why Choose Us?</h4>
                        <hr style="width: 50px; height: 5px; background-color: black !important; color: black !important;">

                        <div class="d-flex gap-1 mb-3">
                            <div>
                                <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2024/02/Advanced-Technology.png" style="max-height: 50px;"/>
                            </div>
                            <div>
                                <h4> Advanced Technology </h4>
                                <p>
                                    With advanced technology, we provide real-time, accurate, and visually captivating information to enhance your investment experience.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-1 mb-3">
                            <div>
                                <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2024/02/Need-Icon.png" style="max-height: 50px;"/>
                            </div>
                            <div>
                                <h4> Customization Based on Needs</h4>
                                <p>
                                    We understand that every business is distinct, and we are committed to thoroughly studying your needs to develop a solution that perfectly aligns with your objectives.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-1 mb-3">
                            <div>
                                <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2024/02/CertificationIconLogo.png" style="max-height: 50px;"/>
                            </div>
                            <div>
                                <h4> Certified Company </h4>
                                <p>
                                    Have complete confidence in the durability and integrity of our company, as they are tested and meet the stringent requirements set by: ISO 9001:2015, UL-1950, ETL & CE.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-1 mb-3">
                            <div>
                                <img src="https://radar-speed-signs.photonplayinc.com/wp-content/uploads/2024/02/Customer-Support.png" style="max-height: 50px;"/>
                            </div>
                            <div>
                                <h4>
                                    Customer Support </h4>
                                <p>
                                    Whether you require advice, troubleshooting, or ongoing support, we remain by your side, offering continuous technical assistance and a steadfast commitment to your success.
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="text-start pb-2">
                    <h4 class="fs-md-2 mt-3" style="font-size: 40px;">Talk to our Radar Experts
                    </h4>
                    <p class="opacity-50">Contact our team of experts to suggest you the best product for your radar project.</p>
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
