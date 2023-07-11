@component('mail::message')
# Introduction

Dear Customer,
We would like to express our sincere gratitude for choosing to purchase our product. This email serves as both a thank you and an acknowledgment of your recent purchase. On behalf of Photonplay System, we want to assure you that your satisfaction is our top priority, and we are committed to delivering a seamless and exceptional experience throughout your journey with us. We are pleased to confirm that your order has been successfully received and is currently being processed. Our dedicated team is working diligently to prepare your package for shipping.
<table width="100%">
    <tr><td>Order Number</td><th>{{$data["order_number"]}}</th></tr>
    <tr>
        <td>
            Product
        </td>
        <th>
            {{$data["product_name"]}}
        </th>
    </tr>
    <tr>
        <td>
            Image
        </td>
        <th>
            <img src='{{$data["product_cover_image"]}}' style="max-width: 100%;height:70px;"/>
        </th>
    </tr>
    <tr>
        <td>
            Color
        </td>
        <th>
            {{$data["product_color"]}}
        </th>
    </tr>
    <tr>
        <td>
            Quantity
        </td>
        <th>
            {{$data["product_quantity"]}}
        </th>
    </tr>
    <tr>
        <td>
            Amount
        </td>
        <th>
            {{$data["grand_total"]}}
        </th>
    </tr>
    <tr>
        <td>
            Payment Status
        </td>
        <th>
            {{$data["payment_status"]}}
        </th>
    </tr>
    <tr>
        <td>
            Delivery Status
        </td>
        <th>
            {{$data["delivery_status"]}}
        </th>
    </tr>
</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
