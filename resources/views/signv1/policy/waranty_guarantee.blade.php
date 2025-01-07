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
    .policy_data p {
        text-align: justify;
        margin-bottom: 15px;
    }
</style>

<section class="pt-0 mt-0 pb-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 policy_data">
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Warranty & Guarantee</b>
                </h3>
                <p>
                    Photonplay products are sold with the understanding that the buyer will evaluate their
                    suitability for their intended use through actual application. Photonplay guarantees to the
                    buyer that its products are free from defects in materials and workmanship. However,
                    Photonplay’s responsibility under this warranty is strictly limited to the replacement of the
                    defective product.
                </p>
                <p>
                    This warranty applies solely to the original buyer and does not extend to any third parties who
                    may acquire the product from the buyer.
                </p>
                <p>
                    This warranty replaces all other warranties, whether expressed or implied, including, but not
                    limited to, implied warranties of merchantability or fitness for a specific purpose. Furthermore,
                    Photonplay disclaims any additional obligations or liabilities in connection with its products.
                </p>
                <p>
                    Under no circumstances will Seton be held liable for any losses, damages, expenses, or
                    consequential damages arising from the use or inability to use its products.
                </p>
            </div>
        </div>
    </div>
</section>
<br/>
<br/>
<br/>
<br/>

@include('customer.layout2.footer2')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>

</body>

</html>

