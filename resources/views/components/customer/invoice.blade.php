<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Receipt</title>
    <style>
        .invoice-section {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .shadow-sm {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-header .company-info {
            text-align: left;
        }

        .invoice-header .company-info h2 {
            margin: 0;
            color: #007bff;
        }

        .invoice-header .invoice-info {
            text-align: right;
        }

        .invoice-header .invoice-info p {
            margin: 0;
        }

        .invoice-section {
            margin-bottom: 20px;
        }

        .invoice-section h3 {
            margin: 0 0 10px;
            font-size: 1.2rem;
            color: #343a40;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f1f3f5;
            font-weight: bold;
        }

        .totals {
            text-align: right;
        }

        .totals td {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="invoice-container">
    <div class="invoice-header">
        <div class="company-info">
            <h2>Photonplay Systems Ltd.</h2>
            <p>6733 Mississauga Rd, Mississauga, ON L5N 6J5, Canada</p>
            <p>+1 (800) 966-9329 | sales@photonplay.com</p>
        </div>
        <div class="invoice-info">
            <p><strong>Order No:</strong> {{$order->order_number}}</p>
            <p><strong>Order Date & Time:</strong> {{$order->created_at}}</p>
        </div>
    </div>

    <div class="invoice-section">
        <h3>Customer Information</h3>
        <p><strong>Name:</strong> {{$order->user->name}}</p>
        <p><strong>Email:</strong> {{$order->user->email}}</p>
    </div>

    <div class="invoice-section">
        <h3>Products</h3>
        <table>
            <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Options</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderedProducts as $prod)
                <tr>
                    <td>{{ $prod->product_id }}</td>
                    <td><img src="{{asset('storage/'.$prod->cover_image)}}" alt="Product Image" style="max-height: 70px; max-width: 100px;"></td>
                    <td>{{ $prod->title }}</td>
                    <td>
                        @foreach (explode(',', $prod->option_ids) as $option)
                            @php
                                $options = \App\Models\ProductSpcializationOption::with('specializationoptions', 'product_specilization.specilization')
                                    ->where('specialization_option_id', $option)
                                    ->where('product_id', $prod->product_id)
                                    ->get();
                            @endphp
                            @foreach ($options as $opp)
                                {{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}} (${{$opp->specialization_price}})<br>
                            @endforeach
                        @endforeach
                    </td>
                    <td>{{ $prod->sku_code }}</td>
                    <td>{{ $prod->quantity }}</td>
                    <td>${{ $prod->price }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6" class="totals">Shipping Charges</td>
                <td>${{ $order->shipping==0?"Free":$order->shipping }}</td>
            </tr>
            <tr>
                <td colspan="6" class="totals">VAT Charges</td>
                <td>${{ ($order->gst/$order->grand_total)*100 }}%</td>
            </tr>
            <tr>
                <td colspan="6" class="totals">Total</td>
                <td>${{ $order->grand_total }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="invoice-section">
                <h3>Billing Address</h3>
                <p>Street : {{$order->billing_street}}</p>
                <p>Address1 : {{$order->billing_flat_suite}}</p>
                <p>City : {{$order->billing_city}}</p>
                <p>State : {{$order->billing_state}}</p>
                <p>Country: {{$order->billing_country}}</p>
                <p>Postal Code :  {{$order->billing_postcode}}</p>
                <div class="shadow-sm p-3">
                    <p><strong>Note:</strong> {{$order->address}}</p>
                </div>
            </div>
        </div>

        @if(!$order->is_shipping_same)
            <div class="col-sm-6">
                <div class="invoice-section">
                    <h3>Shipping Address</h3>
                    <p>Street : {{$order->shipping_street}}</p>
                    <p>Address1 : {{$order->shipping_flat_suite}}</p>
                    <p>City : {{$order->shipping_city}}</p>
                    <p>State : {{$order->shipping_state}}</p>
                    <p>Country: {{$order->shipping_country}}</p>
                    <p>Postal Code : {{$order->shipping_postcode}}</p>
                    <div class="shadow-sm p-3">
                        -
                    </div>
                </div>
            </div>
        @endif
    </div>


    <div class="footer">
        <p>Thank you for your purchase! If you have any questions, feel free to contact us at sales@photonplay.com.</p>
    </div>
</div>
</body>
</html>
