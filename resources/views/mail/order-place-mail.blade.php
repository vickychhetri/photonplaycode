@component('mail::message')
Dear Customer,<br/>
We would like to express our sincere gratitude for choosing to purchase our product. This email serves as both a thank you and an acknowledgment of your recent purchase. On behalf of Photonplay System, we want to assure you that your satisfaction is our top priority, and we are committed to delivering a seamless and exceptional experience throughout your journey with us. We are pleased to confirm that your order has been successfully received and is currently being processed. Our dedicated team is working diligently to prepare your package for shipping.
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table width="100%">
    <tr><td>Order Number</td><th>{{$data["order_number"]}}</th></tr>
</table>

<table width="100%" border="1">
    <tr>
        <td>
            Product
        </td>
        <td>
            Image
        </td>
        <td>
            Color
        </td>
        <td>
            Quantity
        </td>
    </tr>
    @foreach($data["item"] as $prod)
    <tr>
        <td>
            {{$prod["product_name"]}}
        </td>
        <td>
            <img src='{{$prod["product_cover_image"]}}' style="max-width: 100%;height:70px;"/>
        </td>
        <td>
            {{$prod["product_color"]}}
        </td>
        <td>
            {{$prod["product_quantity"]}}
        </td>
    </tr>
    @endforeach
</table>
<br/><br/>
<table width="100%" border="1">
    <tr>
        <th>
            Grand Total
        </th>
        <th>
        Payment Status
        </th>
        <th>
        Delivery Status
        </th>
    </tr>
    <tr>
        <td>
            {{$data["grand_total"]}}
        </td>
        <td>
            {{$data["payment_status"]}}
        </td>
        <td>
            {{$data["delivery_status"]}}
        </td>
    </tr>
</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
