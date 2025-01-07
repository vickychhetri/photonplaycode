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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Terms & Conditions</b>
                </h3>
                <h4>Terms & Conditions</h4>
                <p>
                    Welcome to Photonplay! These Terms & Conditions govern your use of our website and the
                    purchase of our traffic safety products. By accessing or using our website, you agree to these
                    terms. Please read them carefully.
                </p>
                <h4>1. General Information</h4>
                <h5>1.1 Company Details:</h5>
                <p>
                    <a href="https://www.Photonplay.com">www.Photonplay.com</a> is operated by Photonplay, located at Photonplay Systems Ltd, 733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada.
                </p>
                <h5>1.2 Acceptance of Terms:</h5>
                <p>
                    By using this website, you confirm that you are at least 18 years old or have the permission of a legal guardian to use it.
                </p>

                <h4>2. Product Information</h4>
                <h5>2.1 Product Descriptions:</h5>
                <p>
                    We strive to provide accurate descriptions and images of our products. However, slight variations in color, size, or design may occur due to manufacturing processes or display settings.
                </p>
                <h5>2.2 Product Availability:</h5>
                <p>
                    All products are subject to availability. We reserve the right to limit quantities or discontinue products without prior notice.
                </p>

                <h4>3. Pricing & Payments</h4>
                <h5>3.1 Prices:</h5>
                <p>
                    All prices are listed in USD and CAD and are subject to change without notice. Prices do not include applicable taxes or shipping fees, which will be calculated at checkout.
                </p>
                <h5>3.2 Payments:</h5>
                <p>
                    We accept secure payment methods, including Credit cards. Payment must be completed before your order is processed.
                </p>

                <h4>4. Orders & Shipping</h4>
                <h5>4.1 Order Confirmation:</h5>
                <p>
                    Once your order is placed, you will receive a confirmation email with the details.
                </p>
                <h5>4.2 Shipping:</h5>
                <p>
                    We offer shipping across the United States and Canada. Shipping costs and delivery times vary based on your location. For more details, visit our <a href="#">Shipping Policy Page</a>.
                </p>
                <h5>4.3 Order Cancellations:</h5>
                <p>
                    Orders can be canceled within [time frame, e.g., 24 hours] of placement. Contact our support team to request a cancellation.
                </p>

                <h4>5. Returns & Refunds</h4>
                <h5>5.1 Return Policy:</h5>
                <p>
                    Products can be returned within 15 days of receipt, provided they are unused and in original packaging. Customized or special-order products may not be eligible for returns.
                </p>
                <h5>5.2 Refunds:</h5>
                <p>
                    Refunds will be issued to the original payment method after the returned product passes inspection. Shipping fees are non-refundable unless the return is due to our error. For more details, visit our <a href="#">Returns & Refunds Policy Page</a>.
                </p>

                <h4>6. Warranty</h4>
                <h5>6.1 Limited Warranty:</h5>
                <p>
                    We warrant that our products are free from defects in material and workmanship. This warranty is limited to the replacement of the defective product and does not cover misuse or unauthorized modifications.
                </p>
                <h5>6.2 Disclaimer:</h5>
                <p>
                    This warranty is in lieu of all other warranties, express or implied, including warranties of merchantability or fitness for a particular purpose.
                </p>

                <h4>7. Limitation of Liability</h4>
                <p>
                    Under no circumstances will Photonplay be liable for any indirect, incidental, or consequential damages arising from the use or inability to use our products or website.
                </p>

                <h4>8. Intellectual Property</h4>
                <p>
                    All content on this website, including text, images, logos, and designs, is the property of Photonplay and is protected by copyright laws. Unauthorized use is prohibited.
                </p>

                <h4>9. User Conduct</h4>
                <p>
                    You agree to use this website for lawful purposes only and not to engage in any activities that may harm the website, its users, or the company.
                </p>

                <h4>10. Changes to Terms</h4>
                <p>
                    We reserve the right to update these Terms & Conditions at any time. The latest version will always be available on this page. Continued use of our website signifies your acceptance of any changes.
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

