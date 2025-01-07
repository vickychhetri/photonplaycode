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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Do Not Sell or Share My Personal Information</b>
                </h3>
                <h4>Do Not Sell or Share My Personal Information</h4>
                <p>
                    At <b> Photonplay Systems Ltd </b>, we value your privacy and are committed to protecting your personal information. We respect your rights and ensure compliance with privacy regulations and local data protection laws worldwide.
                </p>

                <h3>Your Privacy Rights</h3>
                <p>As a customer, you have the right to:</p>
                <ul>
                    <li>
                        <strong>Opt-Out of the Sale or Sharing of Your Personal Information:</strong>
                        We do not sell or share your personal information for profit. However, if you wish to explicitly opt-out of any data-sharing practices required for operational purposes (e.g., with shipping partners or payment processors), you can let us know.
                    </li>
                    <li>
                        <strong>Access Your Data:</strong> Request details about the personal information we collect about you.
                    </li>
                    <li>
                        <strong>Delete Your Data:</strong> Request deletion of your personal information from our systems.
                    </li>
                </ul>

                <h3>How to Submit a Request</h3>
                <p>If you wish to exercise your privacy rights, please contact us through one of the following methods:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:support@photonplay.com">support@photonplay.com</a></li>
                    <li><strong>Phone:</strong> (800) 966-9329</li>
                    <li>
                        <strong>Mail:</strong><br>
                        Photonplay Systems Ltd<br>
                        733 Mississauga Rd<br>
                        Mississauga, ON L5N 6J5<br>
                        Canada
                    </li>
                </ul>

                <p>When submitting a request, please provide:</p>
                <ol>
                    <li>Your full name.</li>
                    <li>The email address or phone number associated with your account.</li>
                    <li>A description of the request (e.g., opt-out, access, delete).</li>
                </ol>

                <h3>Verification Process</h3>
                <p>
                    To protect your privacy, we may require additional information to verify your identity before processing your request. This ensures that only authorised individuals can access or modify personal information.
                </p>

                <h3>Exceptions</h3>
                <p>
                    Please note that some information may need to be retained for:
                </p>
                <ul>
                    <li>Fulfilling ongoing transactions or legal obligations.</li>
                    <li>Operational purposes, such as fraud prevention and security.</li>
                </ul>

                <p>
                    At Photonplay Systems Ltd, your trust is our priority. If you have any questions or concerns about your privacy or this policy, feel free to reach out to us.
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

