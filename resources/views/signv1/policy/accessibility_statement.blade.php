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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Accessibility Statement</b>
                </h3>
                <h4 class="text-dark">  Accessibility Statement</h4>
                <p>
                    At Photonplay Systems Ltd, we are committed to ensuring that our website and services are accessible to all users, regardless of their abilities or disabilities. Our goal is to provide an inclusive and user-friendly experience for everyone, enabling easy access to information, products, and support.
                </p>

                <h4>Our Commitment</h4>
                <p>
                    We strive to meet recognized accessibility standards, including the <strong>Web Content Accessibility Guidelines (WCAG) 2.1</strong>, to provide an accessible and seamless experience for all visitors. We believe that everyone should be able to navigate our website with ease and confidence.
                </p>

                <h4>Accessibility Features</h4>
                <p>To enhance usability, we have implemented the following features on our website:</p>
                <ul>
                    <li><strong>Keyboard Navigation:</strong> Our website supports full navigation using a keyboard for users with mobility challenges.</li>
                    <li><strong>Text Alternatives:</strong> Images and non-text content include descriptive alt text to assist users with visual impairments.</li>
                    <li><strong>Readable Fonts:</strong> We use clear, legible fonts and ensure high contrast between text and background for better readability.</li>
                    <li><strong>Responsive Design:</strong> Our website is optimized for various devices, including desktops, tablets, and smartphones, to ensure accessibility across all platforms.</li>
                    <li><strong>Assistive Technology Support:</strong> Our site is compatible with most screen readers and other assistive technologies.</li>
                </ul>

                <h4>Continuous Improvements</h4>
                <p>
                    We are continuously improving our website's accessibility and functionality based on user feedback, testing, and advancements in accessibility standards. Our team regularly reviews and updates the site to address any accessibility barriers.
                </p>

                <h4>Third-Party Content</h4>
                <p>
                    While we aim to ensure accessibility across our website, some third-party content or features (e.g., embedded videos or payment gateways) may not fully meet accessibility standards. We encourage users to contact us if they experience any issues.
                </p>

                <h4>Feedback and Assistance</h4>
                <p>
                    We value your feedback. If you encounter any accessibility barriers or have suggestions to improve your experience, please let us know. Our team is here to assist and address any concerns promptly.
                </p>

                <h4>Contact Us</h4>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:feedback@photonplay.com">feedback@photonplay.com</a></li>
                    <li><strong>Phone:</strong> (800) 966-9329</li>
                    <li><strong>Mail:</strong> Photonplay Systems Ltd, 733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada</li>
                </ul>

                <h4>Future Goals</h4>
                <p>
                    We are committed to enhancing the accessibility of our website and are exploring new tools and technologies to make our platform even more inclusive.
                </p>
                <p>
                    At Photonplay Systems Ltd, we believe in equal access for everyone and are dedicated to ensuring that our website is a space where all users feel welcomed and supported. Thank you for visiting us!
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

