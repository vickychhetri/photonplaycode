<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::CAMPUS)->first();
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
                            <li class="breadcrumb-item"> Municipal Traffic</li>
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
            <h1 class="text-center mt-4 pb-2 text-dark"> Radar Speed Signs for Safer Campus Environments </h1>

            <h5 class="text-dark pt-4">Promoting Safety Across Educational and Corporate Campuses </h5>
            <p>
                Radar speed signs are an essential tool for ensuring safety within campuses, whether
                educational, corporate, or industrial. These signs provide real-time speed feedback to drivers,
                encouraging compliance with speed limits and reducing the risk of accidents. As campuses
                often experience a mix of vehicular and pedestrian traffic, radar speed signs serve as an
                effective traffic-calming solution.
            </p>

            <h5 class="text-dark pt-4">Benefits of Radar Speed Signs in Campuses</h5>
            <ol class="ml-3 p-4">
                <li>
                    <strong>Enhanced Driver Awareness:</strong>  Instant feedback helps drivers monitor and adjust their
                    speeds.
                </li>
                <li>
                    <strong>Pedestrian Protection:</strong> Safer speeds lower the likelihood of accidents, especially in
                    areas with heavy foot traffic.
                </li>
                <li>
                    <strong> Non-Punitive Compliance:</strong>  Encourages voluntary speed regulation without fines or
                    enforcement measures.
                </li>
                <li>
                    <strong>Customizable Messaging:</strong> Display traffic warnings, road condition updates, or public service announcements.
                </li>
                <li>
                    <strong>Data Collection and Analysis:</strong> Display safety reminders, welcome messages, or event
                    notifications along with speed data.
                </li>
                <li>
                    <strong> Data Collection for Analysis: </strong> Track traffic patterns and monitor compliance to assess
                    safety trends.
                </li>
                <li>
                    <strong> Energy-Efficient Designs:</strong>  Solar-powered options reduce installation costs and
                    environmental impact.
                </li>
            </ol>
        </div>
    </div>
</section>
@include('signv1.best_suite')
<section class="pt-0 mt-0">
    <div class="container ">
        <div class="row">
            <h5 class="text-dark pt-2">Applications in Campuses</h5>
            <ul class="ml-3 p-4">
                <li><strong>School and University Grounds:</strong> Ensure safer speeds around classrooms,
                    dormitories, and recreational areas.</li>
                <li><strong>Corporate Campuses:</strong> Manage vehicle speeds in parking lots and private roads.</li>
                <li><strong>Hospital Campuses: </strong> Protect patients and staff in sensitive areas.</li>
                <li><strong>Industrial Complexes: </strong> Improve safety in zones with high pedestrian and vehicle
                    activity.</li>
            </ul>


            <h5 class="text-dark pt-2">Why Choose Our Radar Speed Signs?</h5>
            <p>
                Photonplay offers advanced radar speed sign solutions tailored to campus environments. Our
                products are:
            </p>
            <ul class="ml-3 p-2">
                <li><strong> Durable and Weather-Resistant:</strong>  Designed to withstand outdoor conditions year
                    round.</li>
                <li><strong> Easy to Install and Relocate:</strong>  Suitable for both permanent and temporary setups.</li>
                <li><strong>Data-Driven Insights: </strong> Collect traffic statistics to support safety planning. </li>
                <li><strong>Eco-Friendly Options:</strong> Solar-powered models for sustainable operations.</li>
            </ul>

            <h5 class="text-dark pt-1 mt-1">Make Your Campus Safer Today</h5>
            <p>
                Improve safety and promote responsible driving within your campus with our state-of-the-art
                radar speed signs. Contact us today to explore our range of customisable solutions and
                request a consultation with our traffic safety experts.
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

