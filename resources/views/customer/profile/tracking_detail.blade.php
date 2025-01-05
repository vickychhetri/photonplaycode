@include('customer.layouts.header')

<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <x-customer.profile-sidebar />

                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3">Order Tracking Information :: {{$order->order_number}}</h5>
                            <div class="card-box border p-3">
                                <h6 class="mb-3">Tracking Information</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>Estimated Delivery Date:</strong>
                                        {{ $order->estimated_delivery_date ?? 'Not Available' }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Carrier Name:</strong>
                                        {{ $order->carrier_name ?? 'Not Available' }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Tracking Number:</strong>
                                        {{ $order->tracking_number ?? 'Not Available' }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Tracking URL:</strong>
                                        @if(!empty($order->tracking_url))
                                            <a href="{{ $order->tracking_url }}" target="_blank">
                                                Track Your Package
                                            </a>
                                        @else
                                            Not Available
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Shipping Status:</strong>
                                        {{ $order->shipping_status ?? 'Not Available' }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('customer.layout2.footer')
