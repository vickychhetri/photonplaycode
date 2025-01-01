<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation – Thank You for Your Purchase!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h1, h2, h3 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .order-summary {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #45a049;
        }
        .product-image {
            max-width: 80px;
            height: auto;
            border-radius: 5px;
        }
        .disclaimer {
            font-size: 12px;
            color: #777;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Order Confirmation – Thank You for Your Purchase!</h1>
    <p>Dear <strong>{{ $data['customer_first_name'] }}</strong>,</p>
    <p>Thank you for shopping with <strong>{{ config('app.name') }}</strong>! We’ve received your order and it’s being processed.</p>

    <div class="order-summary">
        <h2>Order Details:</h2>
        <table>
            <tr>
                <td><strong>Order Number:</strong></td>
                <td>{{ $data['order_number'] }}</td>
            </tr>
            <tr>
                <td><strong>Order Date:</strong></td>
                <td>{{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d') }}</td>
            </tr>
        </table>
    </div>

    <h3>Items Ordered:</h3>
    <table>
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data['item'] as $product)
            <tr>
                <td>{{ $product['product_name'] }}</td>
                <td>{{ $product['product_quantity'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="order-summary">
        <h3>Shipping Address:</h3>
        <p>{{ $data['shipping_address'] }}</p>

        <h3>Total Amount:</h3>
        <table>
            <tr>
                <td><strong>Payment Status:</strong></td>
                <td>{{ strtoupper($data['payment_status']) }}</td>
            </tr>
            <tr>
                <td><strong>Delivery Status:</strong></td>
                <td>{{ strtoupper($data['delivery_status']) }}</td>
            </tr>
            <tr>
                <td><strong>Grand Total:</strong></td>
                <td>${{ $data['grand_total'] }}</td>
            </tr>
        </table>
    </div>

    <p>You’ll receive another email as soon as your order ships, including tracking information to keep you updated every step of the way.</p>

    <p>If you have any questions or need to make changes to your order, please don’t hesitate to contact us at <a href="support@photonplay.com">support@photonplay.com</a> or (800)-866-9329.</p>

    <p>Thank you for choosing <strong> Photonplay </strong>. We look forward to serving you again soon!</p>

    <div class="footer">
        <p>Warm regards,<br>Vick Kaura <br> Sales Team</p>
        <p>6733 Mississauga Road, Mississauga, on, l5N 6J5, Canada<br>
            <a href="https://www.photonplay.com/" class="button">Visit our Website</a></p>
    </div>

    <div class="disclaimer">
        <p>The contents of this email and any attachment(s) are confidential and intended for the named recipient(s) only. It shall not attach any liability on the originator or {{ config('app.name') }} or its affiliates. Any views or opinions presented in this email are solely those of the author and may not necessarily reflect the opinions of {{ config('app.name') }} or its affiliates.</p>
    </div>
</div>
</body>
</html>
