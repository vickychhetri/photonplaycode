<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::RADAR_MUNICIPALITIES)->first();
if($data_record){
    $seo_meta=[
        "title"=>$data_record->title,
        "description"=>$data_record->description,
        "keywords"=>$data_record->keyword,
        "schema"=>$data_record->schema,
        "feature_image"=>"storage/image/banner%202.webp"
    ];
}
?>

@push('header_meta_content')
@endpush
@include('customer.layouts.header')
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<section class="pt-0 mt-0 pb-0 mb-0">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-12 ">

                <div class="d-flex justify-content-between align-items-center pt-2 pb-2">
                    <nav aria-label="breadcrumb m-3 p-3">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route("customer.radar.speed.signs")}}">Traffic Signs</a></li>
                            <li class="breadcrumb-item">Municipal Traffic</li>
                        </ol>
                    </nav>

                    <div class="text-end">


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container radar-container">
        <div class="row">
            <h1 class="text-center mt-4 pb-2 text-dark">Radar Speed Signs for Municipal Traffic Management</h1>

            <h5 class="text-dark pt-4">Supporting Safer Streets and Smarter Traffic Control</h5>
            <p>
                Radar speed signs are a vital tool for municipalities looking to enhance road safety, promote responsible driving, and manage traffic flow effectively.
                These signs provide real-time feedback to drivers, encouraging compliance with posted speed limits and reducing the risk of accidents in urban and suburban areas.
            </p>

            <h5 class="text-dark pt-4">How Radar Speed Signs Work</h5>
            <p>
                Equipped with radar technology, these signs detect the speed of oncoming vehicles and display it on a highly visible LED screen.
                Drivers exceeding the limit are alerted with visual signals, including flashing lights or color-coded warnings, prompting immediate speed adjustments.
            </p>

            <h5 class="text-dark pt-4">Benefits of Radar Speed Signs for Municipalities</h5>
            <ol class="ml-3 p-4">
                <li>
                    <strong>Improved Road Safety:</strong> Immediate speed feedback encourages drivers to slow down, reducing accidents and improving pedestrian safety.
                </li>
                <li>
                    <strong>Community-Friendly Compliance:</strong> Promotes voluntary adherence to speed limits without relying on fines or enforcement.
                </li>
                <li>
                    <strong>Traffic Flow Management:</strong> Helps regulate traffic speeds in congested or high-risk areas.
                </li>
                <li>
                    <strong>Customizable Alerts and Messaging:</strong> Display traffic warnings, road condition updates, or public service announcements.
                </li>
                <li>
                    <strong>Data Collection and Analysis:</strong> Record traffic data to monitor trends, identify problem areas, and optimize future safety measures.
                </li>
                <li>
                    <strong>Sustainable and Cost-Effective:</strong> Solar-powered models offer an environmentally friendly and low-maintenance solution.
                </li>
            </ol>
        </div>
    </div>
</section>
@include('signv1.best_suite')

<section class="pt-0 mt-0">
    <div class="container ">
        <div class="row">
            <h5 class="text-dark pt-2">Applications for Municipalities</h5>
            <ul class="ml-3 p-4">
                <li><strong>Residential Areas:</strong> Reduce speeding in neighborhoods and improve pedestrian safety.</li>
                <li><strong>School Zones:</strong> Protect students with targeted speed control during school hours.</li>
                <li><strong>Parks and Recreational Areas:</strong> Maintain safe driving speeds in pedestrian-heavy zones.</li>
                <li><strong>Construction Zones:</strong> Temporary deployments for safety in work areas.</li>
                <li><strong>Downtown and Commercial Districts:</strong> Manage traffic speeds in busy urban spaces.</li>
                <li><strong>Highways and Rural Roads:</strong> Reinforce speed limits and improve compliance in less monitored areas.</li>
            </ul>

            <h5 class="text-dark pt-2">Why Choose Our Radar Speed Signs?</h5>
            <p>
                Photonplay offers durable, customizable radar speed signs specifically designed to meet the needs of municipalities.
                Our products are:
            </p>
            <ul class="ml-3 p-4">
                <li><strong>Weatherproof and Rugged:</strong> Built to withstand harsh weather conditions.</li>
                <li><strong>Easy to Deploy and Relocate:</strong> Suitable for permanent installations or temporary use during events or construction.</li>
                <li><strong>Smart and Data-Enabled:</strong> Collect and analyze traffic data for improved planning and decision-making.</li>
                <li><strong>Eco-Friendly Options:</strong> Solar-powered models for sustainable operations.</li>
            </ul>

            <h5 class="text-dark pt-2">Empower Your Municipality with Smarter Traffic Management</h5>
            <p>
                Enhance safety, promote compliance, and improve traffic management with our cutting-edge radar speed signs.
                Whether for residential streets, school zones, or busy commercial areas, we have solutions to fit your municipality's needs.
                Contact us today to learn more about our products and customization options.
            </p>
        </div>

    </div>
</section>
@include('customer.layout2.get_in_touch3')
@include('customer.layout2.footer2')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
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
    });

</script>
</body>

</html>

