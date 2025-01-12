<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::PARKING_LOT)->first();
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
                            <li class="breadcrumb-item"> Parking Lot Safety</li>
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
            <h1 class="text-center mt-4 pb-2 text-dark">Radar Speed Signs for Parking Lot Safety </h1>

            <h5 class="text-dark pt-4">Enhancing Safety and Traffic Control in Parking Lots</h5>
            <p>
                Radar speed signs are a highly effective tool for managing vehicle speeds and improving
                safety in parking lots. These areas often experience mixed traffic, including pedestrians,
                cyclists, and vehicles, making speed control critical for preventing accidents and ensuring a
                safe environment.
            </p>

            <h5 class="text-dark pt-4">How Radar Speed Signs Work</h5>
            <p>
                Radar speed signs use advanced radar technology to measure the speed of approaching
                vehicles and display it in real time. When drivers exceed the designated speed limit, visual
                alerts such as flashing lights or changing colours prompt them to slow down immediately.
                This instant feedback encourages safe driving behaviour and helps maintain order in busy
                parking areas.
            </p>

            <h5 class="text-dark pt-4">Benefits of Radar Speed Signs in Parking Lots </h5>
            <ol class="ml-3 p-4">
                <li>
                    <strong> Improved Driver Awareness:</strong>   Real-time speed feedback reminds drivers to slow
                    down and drive carefully.
                </li>
                <li>
                    <strong>Pedestrian Safety: </strong> Slower speeds reduce the likelihood of accidents, especially in
                    areas with high foot traffic.
                </li>
                <li>
                    <strong>Non-Enforcement Compliance:  </strong>  Encourages voluntary speed reductions without fines or penalties.
                </li>
                <li>
                    <strong> Customisable Messaging:</strong> Display important notifications, parking rules, or
                    directional guidance alongside speed data.
                </li>
                <li>
                    <strong> Traffic Monitoring: </strong>Collect traffic data to analyze speed trends and optimize safety measures.
                </li>
                <li>
                    <strong> Energy-Efficient Designs:</strong> Solar-powered models provide a sustainable and cost-effective solution.
                </li>
            </ol>
        </div>
    </div>
</section>
@include('signv1.best_suite')
<section class="pt-0 mt-0">
    <div class="container ">
        <div class="row">
            <h5 class="text-dark pt-2">Applications in Parking Lots </h5>
            <ul class="ml-3 p-4">
                <li><strong>Shopping Centres: </strong> Ensure pedestrian safety in crowded retail parking areas. </li>
                <li><strong> Office Complexes:</strong> Manage traffic flow and speed limits in employee and visitor
                    parking zones.  </li>
                <li><strong>Hospitals and Medical Facilities:</strong> Protect patients and staff by enforcing safe driving
                    practices. </li>
                <li><strong>Schools and Universities:  </strong>   Maintain safe speeds around parking areas near
                    campuses. </li>
                <li><strong>Event Venues:</strong>  Temporary setups for events requiring enhanced traffic management.  </li>
            </ul>

            <h5 class="text-dark pt-2">Why Choose Our Radar Speed Signs?</h5>
            <p>
                Photonplay offers high-quality radar speed signs specifically designed for parking lots. Our
                products are:
            </p>
            <ul class="ml-3 p-4">
                <li><strong> Durable and Weather-Resistant:</strong> Built to handle outdoor conditions and frequent use.  </li>
                <li><strong> Easy to Install and Relocate:</strong>  Ideal for both permanent and temporary setups. </li>
                <li><strong> Smart and Data-Driven:</strong>  Collect traffic data for safety assessments and reporting. </li>
                <li><strong>Eco-Friendly Options:</strong>Solar-powered models for sustainable operation.</li>
            </ul>

            <h5 class="text-dark pt-2">Take Control of Parking Lot Safety </h5>
            <p>
                Invest in radar speed signs to promote safety and order in your parking lot. With customizable
                features and advanced traffic monitoring capabilities, our signs are designed to meet your
                specific needs. Contact us today to learn more about our solutions.
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

