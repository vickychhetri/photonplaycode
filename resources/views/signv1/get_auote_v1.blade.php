<?php
use App\Models\ManageSeo;
$data_record = ManageSeo::where('page_name', ManageSeo::CONTACT)->first();
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
                            <li class="breadcrumb-item">Contact us</li>
                        </ol>
                    </nav>

                    <div class="text-end">


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b> CONTACT US</b>
               </h3>

            <h5 class=" text-center pt-4 p-4" style="color: grey;"> <b>For General Inquiries call us at 800-966-9329 (Mon–Sat, 9 AM–6 PM)<br/>
                    For write us at sales@photonplay.com </b></h5>
        </div>
    </div>
</section>

@include('customer.layout2.get_in_touch3')

<div class="container mb-4 pb-4">
    <div class="row">
        <h3 class=" text-center pt-4 p-4" style="color: grey;"> <b> For <b>Dealership/Trade Inquiries </b> Call 647-323-0527<br/>
                For email us at vik@photonplay.com </b></h3>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>

@include('customer.layout2.footer2')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>


</body>

</html>

