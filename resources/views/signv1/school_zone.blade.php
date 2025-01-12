<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::SCHOOL_ZONE)->first();
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
                            <li class="breadcrumb-item">  School Zone Safety</li>
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
            <h1 class="text-center mt-4 pb-2 text-dark">Radar Speed Signs for School Zone Safety</h1>

            <h5 class="text-dark pt-4">Ensuring Child Safety in School Zones</h5>
            <p>
                Radar speed signs are an essential tool for improving safety in school zones by encouraging
                drivers to slow down and comply with posted speed limits. With children crossing streets and
                walking near roadways, it is critical to implement measures that effectively manage vehicle
                speeds and protect young pedestrians.
            </p>

            <h5 class="text-dark pt-4">How Radar Speed Signs Work</h5>
            <p>
                Radar speed signs detect the speed of approaching vehicles using radar technology. The
                vehicle's speed is displayed in real time, often with visual alerts like flashing lights or
                changing colors to grab the driver’s attention. This immediate feedback prompts drivers to
                reduce speed, especially in areas where children are present.
            </p>

            <h5 class="text-dark pt-4">Benefits of Radar Speed Signs in School Zones</h5>
            <ol class="ml-3 p-4">
                <li>
                    <strong> Improved Driver Awareness:</strong>  Real-time feedback alerts drivers to slow down when
                    entering school zones.
                </li>
                <li>
                    <strong>Enhanced Pedestrian Safety: </strong> Slower speeds reduce the risk of accidents, protecting
                    children and families.
                </li>
                <li>
                    <strong>Non-Punitive Compliance:</strong>  Focuses on voluntary speed reduction rather than issuing
                    fines.
                </li>
                <li>
                    <strong> Custom Messaging Options: </strong>  Display messages such as "School Zone Ahead" or
                    "Slow Down" along with speed data.
                </li>
                <li>
                    <strong> Traffic Data Collection:</strong>  Provides insights into traffic patterns to help authorities
                    monitor compliance and plan safety improvements.
                </li>
                <li>
                    <strong> Eco-Friendly and Energy-Efficient: </strong>Solar-powered options make installations cost
                    effective and sustainable.
                </li>
            </ol>
        </div>
    </div>
</section>

@include('signv1.best_suite')

<section class="pt-0 mt-0">
    <div class="container ">
        <div class="row">
            <h5 class="text-dark pt-2">Applications in School Zones</h5>
            <ul class="ml-3 p-4">
                <li><strong>Crosswalks and Drop-Off Areas: </strong> Reduce speeds where children frequently cross the
                    road. </li>
                <li><strong> Playgrounds and Recreational Spaces:</strong>Ensure safe driving speeds near play areas. </li>
                <li><strong>Parks and Recreational Areas:</strong> Maintain safe driving speeds in pedestrian-heavy zones.</li>
                <li><strong>Entry and Exit Points: </strong> Manage traffic flow and enforce speed limits at school
                    entrances and exits. </li>
                <li><strong>Temporary School Events:</strong> : Provide portable options for events or activities requiring
                    enhanced traffic control. </li>
            </ul>

            <h5 class="text-dark pt-2">Why Choose Our Radar Speed Signs?</h5>
            <p>
                Photonplay offers high-quality radar speed signs specifically designed for school zone safety.
                Our products are:
            </p>
            <ul class="ml-3 p-4">
                <li><strong> Durable and Weather-Resistant:</strong> Engineered to withstand various environmental
                    conditions. </li>
                <li><strong> Easy to Install and Relocate:</strong> Suitable for both permanent and portable use. </li>
                <li><strong> Smart and Data-Driven:</strong> Collect traffic data to analyse patterns and compliance. </li>
                <li><strong>Eco-Friendly Options:</strong> Solar-powered models for sustainable and low-maintenance
                    operation.</li>
            </ul>

            <h5 class="text-dark pt-2">Make School Zones Safer Today </h5>
            <p>
                Invest in the safety of your school zone with our advanced radar speed signs. Protect children
                and encourage responsible driving with effective, customisable solutions. Contact us today to
                learn more about our products and customisation options.
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

