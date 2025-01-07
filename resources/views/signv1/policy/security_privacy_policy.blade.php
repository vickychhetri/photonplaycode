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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Security & Privacy policy</b>
                </h3>
                <h4 class="text-dark">  Security & Privacy Policy</h4>
                <p>
                    At Photonplay, your security and privacy are our top priorities. We are committed to protecting
                    your personal information and ensuring that your shopping experience is safe, secure, and
                    worry-free.
                </p>
                <h5>1. Information We Collect </h5>
                <p>
                    When you use our website or make a purchase, we may collect the following types of
                    information:
                </p>

                <p>
                   <b>  Personal Information: </b>Name, email address, phone number, shipping and billing
                    address.
                </p>
                <p>
                    <b> Payment Information:   </b>
                    Credit/debit card details (processed securely through our trusted
                    payment gateways).
                </p>
                <p>
                    <b> Browsing Data: </b>
                    IP address, device type, browser type, and other technical information
                    collected through cookies and similar technologies
                </p>

                <h4> 2. How We Use Your Information</h4>
                <p>We use your information to:</p>
                <ul>
                    <li>Process your orders and manage your account.</li>
                    <li>Provide customer service and support.</li>
                    <li>Send order updates, promotional offers, and other communications (only if you opt-in).</li>
                    <li>Improve our website and enhance your shopping experience.</li>
                    <li>Ensure compliance with legal and regulatory requirements.</li>
                </ul>
                <h4> 3. How We Protect Your Information </h4>
                <p>
                    We employ advanced security measures to safeguard your data, including:
                </p>
                <ul>
                    <li>Data Encryption: Sensitive information like payment details is encrypted using SSL (Secure Socket Layer) technology.</li>
                    <li>Secure Payments: Payments are processed through trusted and PCI-compliant payment gateways.</li>
                    <li>Restricted Access: Only authorized personnel have access to your information.</li>
                    <li>Regular Audits: Our systems are routinely monitored to ensure the highest level of security.</li>
                </ul>

                <h4>4. Sharing Your Information</h4>
                <p>We respect your privacy and will never sell or rent your personal information to third parties. We may share your information with:</p>
                <ul>
                    <li><strong>Service Providers:</strong> For order processing, shipping, and payment processing.</li>
                    <li><strong>Legal Authorities:</strong> When required by law or to protect against fraud or unauthorized activities.</li>
                </ul>

                <h4>5. Your Privacy Choices</h4>
                <p>You have the right to:</p>
                <ul>
                    <li><strong>Access Your Data:</strong> Request a copy of the personal information we hold about you.</li>
                    <li><strong>Update Your Data:</strong> Correct or update any inaccuracies in your information.</li>
                    <li><strong>Opt-Out:</strong> Unsubscribe from marketing communications at any time by clicking the "unsubscribe" link in our emails.</li>
                </ul>

                <h4>6. Cookies Policy</h4>
                <p>Our website uses cookies to enhance your experience. Cookies help us remember your preferences, track your orders, and provide personalized recommendations. You can manage your cookie preferences through your browser settings.</p>

                <h4>7. Third-Party Links</h4>
                <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these websites and encourage you to review their policies before providing personal information.</p>

                <h4>8. Updates to This Policy</h4>
                <p>We may update this policy from time to time to reflect changes in our practices or legal requirements. The latest version will always be available on this page, and we encourage you to review it periodically.</p>

                <h4>9. Contact Us</h4>
                <p>If you have any questions or concerns about our Security & Privacy Policy, please don’t hesitate to contact us:</p>
                <ul>
                    <li><strong>Email:</strong> sales@photonplay.com</li>
                    <li><strong>Phone:</strong> (800) 966-9329</li>
                    <li><strong>Address:</strong> Photonplay Systems Ltd, 733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada.</li>
                </ul>
                <p>Your trust means everything to us, and we are committed to providing you with a secure and enjoyable shopping experience.</p>

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

