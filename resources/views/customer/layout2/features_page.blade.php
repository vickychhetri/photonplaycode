<!-- iCop Series Features Start -->
<section class=" pt-4">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
                <div class="text-center mb-lg-4 text-center">
                    <h2 class="fs-md-2 mt-3">Features</h2>
                    <p class="fs-6    text-center">Our product offers innovative solutions to meet your needs and seamlessly connect your device to various networks and devices, <br/>enabling easy data transfer and integration with other smart devices.
                    </p>
                </div>
            </div>

            @foreach($page->features as $feature)
            <div class="col-lg-4">
                <div class="d-flex align-items-center bg-white feature-card p-4">
                    <div class="me-3"><img src="{{asset('assets/customer/images/COMPLIANCE.png')}}" alt="Not Found"></div>
                    <div class="">
                        <h6>{{ $feature->feature}}</h6>
                        <p class="mb-0">{{ $feature->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-lg-4">--}}
{{--                <div class="d-flex align-items-center bg-white feature-card p-4">--}}
{{--                    <div class="me-3"><img src="{{asset('assets/customer/images/WEATHER.png')}}" alt="Not Found"></div>--}}
{{--                    <div class="">--}}
{{--                        <h6>All Weather Operation</h6>--}}
{{--                        <p class="mb-0"> The sign operates efficiently in all the weathers</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="d-flex align-items-center bg-white feature-card p-4">--}}
{{--                    <div class="me-3"><img src="{{asset('assets/customer/images/TRAFIC.png')}}" alt="Not Found"></div>--}}
{{--                    <div class="">--}}
{{--                        <h6>Traffic Data Analysis</h6>--}}
{{--                        <p class="mb-0"> Cloud based powerful tool for traffic data analysis</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="d-flex align-items-center bg-white feature-card p-4">--}}
{{--                    <div class="me-3"><img src="{{asset('assets/customer/images/BATTERY.png')}}" alt="Not Found"></div>--}}
{{--                    <div class="">--}}
{{--                        <h6>Battery Backup</h6>--}}
{{--                        <p class="mb-0"> Long battery backup increases operational hours </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="d-flex align-items-center bg-white feature-card p-4">--}}
{{--                    <div class="me-3"><img src="{{asset('assets/customer/images/COMPLIANCE.png')}}" alt="Not Found"></div>--}}
{{--                    <div class="">--}}
{{--                        <h6>Fully Compliance</h6>--}}
{{--                        <p class="mb-0"> Comply standard norms with other industries</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="d-flex align-items-center bg-white feature-card p-4">--}}
{{--                    <div class="me-3"><img src="{{asset('assets/customer/images/CLUDE.png')}}" alt="Not Found"></div>--}}
{{--                    <div class="">--}}
{{--                        <h6>24x7 Cloud Connectivity</h6>--}}
{{--                        <p class="mb-0"> All time access to the device</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- iCop Series Features End -->



{{--<section class="sec-feature m-0 pb-0">--}}
{{--    <div class="container">--}}
{{--        <h2 class="fs-md-2 text-center">Feature</h2>--}}
{{--        <div class="feature-list">--}}
{{--            <!-- <ul class=" m-0 p-0 "> -->--}}
{{--            <div class="d-lg-flex justify-content-between">--}}
{{--                <div class="row">--}}
{{--                    @foreach($page->features as $feature)--}}
{{--                        <div class="col-md-6 ">--}}
{{--                            <ul class="w-100 m-0 p-0 d-flex justify-content-center">--}}
{{--                                <li>--}}
{{--                                    <div class="content-feature" style="width: 300px;">--}}
{{--                                        <strong>{{ $feature->feature}}</strong>--}}
{{--                                        <span>{{$feature->description}}</span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- </ul> -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
