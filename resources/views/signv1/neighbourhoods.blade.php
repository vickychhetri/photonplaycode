<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::NEIGHBOURHOOD)->first();
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
                            <li class="breadcrumb-item"> Safer Neighbourhoods </li>
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
            <h1 class="text-center mt-4 pb-2 text-dark"> Radar Speed Signs for Safer Neighbourhoods and
                Communities  </h1>

            <h5 class="text-dark pt-4">Promoting Road Safety in Residential Areas</h5>
            <p>
                Radar speed signs, also known as driver feedback signs, are an effective solution for
                improving road safety in neighbourhoods and community spaces. These signs display the
                speed of oncoming vehicles, encouraging drivers to slow down and comply with local speed
                limits. With growing concerns about speeding in residential areas, radar speed signs provide
                a proactive and non-intrusive traffic calming method.
            </p>

            <h5 class="text-dark pt-4">How Radar Speed Signs Work</h5>
            <p>
                Radar speed signs utilise advanced radar technology to measure the speed of vehicles as
                they approach. The detected speed is displayed prominently, often with visual cues like
                flashing lights or color changes to catch the driver's attention. This immediate feedback
                prompts drivers to correct their behaviour and maintain safer speeds.
            </p>

            <h5 class="text-dark pt-4">Benefits of Radar Speed Signs in Neighbourhoods and Communities  </h5>
            <ol class="ml-3 p-4">
                <li>
                    <strong> Increased Driver Awareness:</strong>   Real-time speed feedback encourages drivers to
                    monitor and adjust their speeds.
                </li>
                <li>
                    <strong> Improved Pedestrian and Cyclist Safety: </strong> Slower speeds reduce the risk of
                    accidents, especially in areas where children and families are present.
                </li>
                <li>
                    <strong> Non-Punitive Approach: </strong>  Encourages voluntary compliance with speed limits without
                    issuing fines or penalties.
                </li>
                <li>
                    <strong>Customisable Messaging Options:</strong> Display community messages, safety reminders,
                    and alerts alongside speed information.
                </li>
                <li>
                    <strong>Traffic Data Collection: </strong> Gather insights on traffic patterns to plan future safety
                    improvements.
                </li>
                <li>
                    <strong> Energy-Efficient Designs:</strong> Solar-powered models offer a sustainable and cost
                    effective solution.
                </li>
            </ol>
        </div>
    </div>
</section>
@include('signv1.best_suite')
<section class="pt-0 mt-0">
    <div class="container ">
        <div class="row">
            <h5 class="text-dark pt-2">Applications in Neighbourhoods and Communities </h5>
            <ul class="ml-3 p-4">
                <li><strong> School Zones: </strong> Keep students safe during school hours and activities.  </li>
                <li><strong> Parks and Playgrounds:</strong> Protect areas where children and families gather. </li>
                <li><strong> Residential Streets: </strong> Reduce speeding in areas with high foot traffic.  </li>
                <li><strong> Community Events:   </strong>   Temporary installations for events requiring enhanced traffic
                    management. </li>
                <li><strong>Senior Living Communities:</strong>   Ensure safe driving speeds around areas with elderly
                    pedestrians. </li>
            </ul>

            <h5 class="text-dark pt-2">Why Choose Our Radar Speed Signs?</h5>
            <p>
                Photonplay offers cutting-edge radar speed signs designed to address the unique needs of
                neighbourhoods and communities. Our products are:
            </p>
            <ul class="ml-3 p-4">
                <li><strong> Weather-Resistant and Durable: </strong> Built to perform in all weather conditions.   </li>
                <li><strong>  Easy to Install and Operate:</strong>  Suitable for permanent or portable setups.  </li>
                <li><strong>  Data-Driven and Smart:</strong>  Collect traffic data to analyse patterns and trends. </li>
                <li><strong>Eco-Friendly:</strong>Solar-powered models available for sustainable usage.</li>
            </ul>

            <h5 class="text-dark pt-2">Take the First Step Toward Safer Roads </h5>
            <p>
                Enhance safety and promote responsible driving behaviour in your neighbourhood or
                community with our advanced radar speed signs. Contact us today to learn more about our
                products and customisation options.
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

