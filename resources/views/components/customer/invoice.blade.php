<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Receipt</title>
    <style>

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
                <th>Product Name</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderedProducts as $prod)
                <tr>
                    <td>{{ $prod->product_id }}</td>
                    <td>{{ $prod->title }}</td>
                    <td>{{ $prod->sku_code }}</td>
                    <td>{{ $prod->quantity }}</td>
                    <td>${{ $prod->price }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="totals">Shipping Charges</td>
                <td>{{ $order->shipping==0?"Free":"$".$order->shipping }}</td>
            </tr>
            <tr>
                <td colspan="4" class="totals">VAT Charges</td>
                <td>{{ ($order->gst*$order->cart_subtotal)/100 }}</td>
            </tr>
            <tr>
                <td colspan="4" class="totals">Total</td>
                <td>${{ $order->grand_total }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="invoice-section">
        <h3>Billing Address</h3>
        <p> {{$order->billing_street}}, {{$order->billing_flat_suite}}, {{$order->billing_city}}, {{$order->billing_state}}, {{$order->billing_country}}, {{$order->billing_postcode}}.</p>
        <div class="shadow-sm p-3">
            <p><strong>Note:</strong> {{$order->address}}</p>
        </div>
    </div>
    @if(!$order->is_shipping_same)
    <div class="invoice-section">
        <h3>Shipping Address</h3>
        <p> {{$order->shipping_street}}, {{$order->shipping_flat_suite}}, {{$order->shipping_city}}, {{$order->shipping_state}}, {{$order->shipping_country}}, {{$order->shipping_postcode}}</p>
    </div>
    @endif
    <div class="invoice-section">
        <h3>Status</h3>
        <p> {{"Payment Status : ".$order->payment_status}}</p>
        <p> {{"Delivery Status : ".$order->delivery_status}}</p>
        <p> {{"Last Updated at : ".$order->updated_at}}</p>

    </div>
    <div class="footer">
        <p>Thank you for your purchase! If you have any questions, feel free to contact us at sales@photonplay.com or visit website <a href="https://www.photonplay.com"> www.photonplay.com </a></p>
    </div>
</div>
</body>
</html>
