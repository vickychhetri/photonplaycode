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
                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;">
                    <b>Shipping & Returns</b>
                </h3>
                <h4>Shipping & Returns</h4>
                <p>
                    At PHOTONPLAY SYSTEMS LTD., we are committed to providing a seamless shopping experience for our customers. Please review our shipping and returns policy for details on how we handle the delivery of your orders and the return of products.
                </p>

                <h3>Shipping Policy</h3>

                <h4>1. Shipping Locations</h4>
                <p>
                    We ship our traffic safety products across USA and Canada. If your location is outside our standard shipping zones, please contact us to discuss custom shipping options.
                </p>

                <h4>2. Processing Time</h4>
                <ul>
                    <li>Orders are typically processed within <strong>1-3 business days</strong> after confirmation.</li>
                    <li>You will receive an email notification once your order is shipped.</li>
                </ul>

                <h4>3. Shipping Charges</h4>
                <p>
                    Shipping fees are calculated at checkout based on the size, weight, and destination of your order. Any applicable taxes or customs duties are the responsibility of the buyer.
                </p>

                <h4>4. Delivery Times</h4>
                <ul>
                    <li><strong>Standard Shipping:</strong> Estimate delivery timeframe, 5-7 business days.</li>
                    <li><strong>Express Shipping:</strong> Estimate delivery timeframe, 2-3 business days.</li>
                </ul>
                <p>
                    Delivery times may vary due to unforeseen circumstances, such as weather conditions or carrier delays.
                </p>

                <h4>5. Tracking Your Order</h4>
                <p>
                    Once your order is shipped, you will receive a tracking number via email to monitor its progress. For assistance with tracking, contact us at <a href="mailto:orders@photonplay.com">orders@photonplay.com</a> or call (800) 966-9329.
                </p>

                <h3>Returns Policy</h3>

                <h4>1. Return Eligibility</h4>
                <ul>
                    <li>Products must be returned within <strong>30 days</strong> of receipt.</li>
                    <li>Items must be in their original condition, unused, and in the original packaging.</li>
                    <li>Customised or special-order products are non-returnable.</li>
                </ul>

                <h4>2. How to Initiate a Return</h4>
                <p>To request a return, please contact us:</p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:returns@photonplay.com">returns@photonplay.com</a></li>
                    <li><strong>Phone:</strong> (800) 966-9329</li>
                    <li>
                        <strong>Address:</strong><br>
                        Photonplay Systems Ltd<br>
                        6733 Mississauga Rd<br>
                        Mississauga, ON L5N 6J5<br>
                        Canada
                    </li>
                </ul>
                <p>Provide the following information when submitting a return request:</p>
                <ol>
                    <li>Your order number.</li>
                    <li>A description of the issue or reason for the return.</li>
                    <li>Photos of the product, if applicable.</li>
                </ol>

                <h4>3. Return Shipping</h4>
                <p>
                    The customer is responsible for return shipping costs unless the return is due to a defective or incorrect item. We recommend using a trackable shipping method to ensure safe delivery.
                </p>

                <h4>4. Refunds</h4>
                <ul>
                    <li>Refunds will be issued to the original payment method once the returned product is received and inspected.</li>
                    <li>Shipping fees are non-refundable, except in cases of our error (defective or incorrect product).</li>
                </ul>

                <h4>5. Exchanges</h4>
                <p>
                    Exchanges are available for defective or incorrect items. Contact us to arrange an exchange within <strong>10 days</strong> of receipt.
                </p>

                <h3>Damaged or Defective Items</h3>
                <p>
                    If your order arrives damaged or defective, please contact us immediately at <a href="mailto:returns@photonplay.com">returns@photonplay.com</a> or call (800) 966-9329. Include photos of the damaged product and packaging to help us resolve the issue promptly.
                </p>

                <h3>Contact Us</h3>
                <p>
                    If you have any questions or need assistance with shipping or returns, don’t hesitate to reach out to us:
                </p>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:returns@photonplay.com">returns@photonplay.com</a></li>
                    <li><strong>Phone:</strong> (800) 966-9329</li>
                    <li>
                        <strong>Address:</strong><br>
                        Photonplay Systems Ltd<br>
                        6733 Mississauga Rd<br>
                        Mississauga, ON L5N 6J5<br>
                        Canada
                    </li>
                </ul>
                <p>
                    We’re here to help and ensure your shopping experience with Photonplay Systems Ltd is exceptional.
                </p>
            </div>


{{--            <div class="col-md-10 policy_data">--}}
{{--                <h3 class="text-center mt-4 pb-2 text-grey" style="color: grey;"> <b>Shipping & Returns</b>--}}
{{--                </h3>--}}
{{--                <h4>Shipping & Returns</h4>--}}
{{--                <p>--}}
{{--                    At Photonplay Systems Ltd, we are committed to providing a seamless shopping experience for our customers. Please review our shipping and returns policy for details on how we handle the delivery of your orders and the return of products.--}}
{{--                </p>--}}

{{--                <h3>Shipping Policy</h3>--}}

{{--                <h4>1. Shipping Locations</h4>--}}
{{--                <p>--}}
{{--                    We ship our traffic safety products across [list regions/countries where you ship]. If your location is outside our standard shipping zones, please contact us to discuss custom shipping options.--}}
{{--                </p>--}}

{{--                <h4>2. Processing Time</h4>--}}
{{--                <ul>--}}
{{--                    <li>Orders are typically processed within <strong>[1-3 business days]</strong> after confirmation.</li>--}}
{{--                    <li>You will receive an email notification once your order is shipped.</li>--}}
{{--                </ul>--}}

{{--                <h4>3. Shipping Charges</h4>--}}
{{--                <p>--}}
{{--                    Shipping fees are calculated at checkout based on the size, weight, and destination of your order. Any applicable taxes or customs duties are the responsibility of the buyer.--}}
{{--                </p>--}}

{{--                <h4>4. Delivery Times</h4>--}}
{{--                <ul>--}}
{{--                    <li><strong>Standard Shipping:</strong> [Estimate delivery timeframe, e.g., 5-7 business days].</li>--}}
{{--                    <li><strong>Express Shipping:</strong> [Estimate delivery timeframe, e.g., 2-3 business days].</li>--}}
{{--                </ul>--}}
{{--                <p>--}}
{{--                    Delivery times may vary due to unforeseen circumstances, such as weather conditions or carrier delays.--}}
{{--                </p>--}}

{{--                <h4>5. Tracking Your Order</h4>--}}
{{--                <p>--}}
{{--                    Once your order is shipped, you will receive a tracking number via email to monitor its progress. For assistance with tracking, contact us at <a href="mailto:orders@photonplay.com">orders@photonplay.com</a> or call (800) 966-9329.--}}
{{--                </p>--}}

{{--                <h3>Returns Policy</h3>--}}

{{--                <h4>1. Return Eligibility</h4>--}}
{{--                <ul>--}}
{{--                    <li>Products must be returned within <strong>[30 days]</strong> of receipt.</li>--}}
{{--                    <li>Items must be in their original condition, unused, and in the original packaging.</li>--}}
{{--                    <li>Customised or special-order products are non-returnable.</li>--}}
{{--                </ul>--}}

{{--                <h4>2. How to Initiate a Return</h4>--}}
{{--                <p>To request a return, please contact us:</p>--}}
{{--                <ul>--}}
{{--                    <li><strong>Email:</strong> <a href="mailto:returns@photonplay.com">returns@photonplay.com</a></li>--}}
{{--                    <li><strong>Phone:</strong> (800) 966-9329</li>--}}
{{--                    <li>--}}
{{--                        <strong>Address:</strong><br>--}}
{{--                        Photonplay Systems Ltd<br>--}}
{{--                        733 Mississauga Rd<br>--}}
{{--                        Mississauga, ON L5N 6J5<br>--}}
{{--                        Canada--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <p>Provide the following information when submitting a return request:</p>--}}
{{--                <ol>--}}
{{--                    <li>Your order number.</li>--}}
{{--                    <li>A description of the issue or reason for the return.</li>--}}
{{--                    <li>Photos of the product, if applicable.</li>--}}
{{--                </ol>--}}

{{--                <h4>3. Return Shipping</h4>--}}
{{--                <p>--}}
{{--                    The customer is responsible for return shipping costs unless the return is due to a defective or incorrect item. We recommend using a trackable shipping method to ensure safe delivery.--}}
{{--                </p>--}}

{{--                <h4>4. Refunds</h4>--}}
{{--                <ul>--}}
{{--                    <li>Refunds will be issued to the original payment method once the returned product is received and inspected.</li>--}}
{{--                    <li>Shipping fees are non-refundable, except in cases of our error (e.g., defective or incorrect product).</li>--}}
{{--                </ul>--}}

{{--                <h4>5. Exchanges</h4>--}}
{{--                <p>--}}
{{--                    Exchanges are available for defective or incorrect items. Contact us to arrange an exchange within <strong>[10 days]</strong> of receipt.--}}
{{--                </p>--}}

{{--                <h3>Damaged or Defective Items</h3>--}}
{{--                <p>--}}
{{--                    If your order arrives damaged or defective, please contact us immediately at <a href="mailto:returns@photonplay.com">returns@photonplay.com</a> or call (800) 966-9329. Include photos of the damaged product and packaging to help us resolve the issue promptly.--}}
{{--                </p>--}}

{{--                <h3>Contact Us</h3>--}}
{{--                <p>--}}
{{--                    If you have any questions or need assistance with shipping or returns, don’t hesitate to reach out to us:--}}
{{--                </p>--}}
{{--                <ul>--}}
{{--                    <li><strong>Email:</strong> <a href="mailto:returns@photonplay.com">returns@photonplay.com</a></li>--}}
{{--                    <li><strong>Phone:</strong> (800) 966-9329</li>--}}
{{--                    <li>--}}
{{--                        <strong>Address:</strong><br>--}}
{{--                        Photonplay Systems Ltd<br>--}}
{{--                        733 Mississauga Rd<br>--}}
{{--                        Mississauga, ON L5N 6J5<br>--}}
{{--                        Canada--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <p>--}}
{{--                    We’re here to help and ensure your shopping experience with Photonplay Systems Ltd is exceptional.--}}
{{--                </p>--}}

{{--            </div>--}}
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

