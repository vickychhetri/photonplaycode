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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Secure Shopping</b>
                </h3>
                <h4>Secure Shopping</h4>
                <p>
                    At Photonplay, Your Security is Our Top Priority.We are dedicated to providing you with a safe and worry-free shopping experience. From browsing to checkout, we implement advanced technologies and best practices to ensure your personal and payment information is always protected.
                </p>

                <h4>Why Shop Securely With Us?</h4>
                <ol>
                    <li>
                        <strong>Encrypted Transactions:</strong>
                        We use industry-standard SSL (Secure Socket Layer) encryption to protect your data during all transactions. This ensures that your personal and payment information is securely transmitted to our servers.
                    </li>
                    <li>
                        <strong>Secure Payment Gateways:</strong>
                        All payments are processed through trusted and PCI-compliant payment gateways. Your credit card and payment details are never stored on our servers.
                    </li>
                    <li>
                        <strong>Fraud Protection:</strong>
                        We continuously monitor our systems for suspicious activities and employ fraud prevention measures to protect your account and purchases.
                    </li>
                    <li>
                        <strong>Privacy Assurance:</strong>
                        Your personal information is used only to process your orders and improve your shopping experience. We never sell or share your data with third parties without your consent.
                    </li>
                    <li>
                        <strong>Protected Accounts:</strong>
                        Our website allows you to create secure accounts with strong password requirements.
                    </li>
                </ol>

                <h4>Tips for Safe Online Shopping</h4>
                <ul>
                    <li>Always ensure your account password is strong and unique.</li>
                    <li>Avoid sharing your login credentials with others.</li>
                    <li>Check for the secure "https://" and padlock icon in the address bar before entering personal information.</li>
                    <li>Keep your device’s software and antivirus updated for optimal protection.</li>
                </ul>

                <h4>Our Commitment</h4>
                <p>
                    We continuously update our security protocols to stay ahead of evolving threats, ensuring your trust and confidence in us. If you ever have questions or concerns about your shopping security, our customer support team is here to help.
                </p>
                <p>
                    At Photonplay, secure shopping isn’t just a feature – it’s our promise to you. Shop confidently knowing we’ve got your safety covered every step of the way!
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

