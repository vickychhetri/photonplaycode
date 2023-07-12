@component('mail::message')
Dear Customer,<br/>
We would like to express our sincere gratitude for choosing to purchase our product. This email serves as both a thank you and an acknowledgment of your recent purchase.
<br/>
<table width="100%" style="border: 1px solid black;border-collapse: collapse;" >
    <tr><td style="border: 1px solid black;border-collapse: collapse;">Order Number</td><th style="border: 1px solid black;border-collapse: collapse;">{{$data["order_number"]}}</th></tr>
</table>
<br/>
<table width="100%" border="1" style="border: 1px solid black;border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black;border-collapse: collapse;">
            Product
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            Image
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            Color
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            Quantity
        </td>
    </tr>
    @foreach($data["item"] as $prod)
    <tr>
        <td style="border: 1px solid black;border-collapse: collapse;">
            {{$prod["product_name"]}}
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            <img src='{{$prod["product_cover_image"]}}' style="max-width: 100%;height:70px;"/>
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            {{$prod["product_color"]}}
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            {{$prod["product_quantity"]}}
        </td>
    </tr>
    @endforeach
</table>
<br/><br/>
<table width="100%" border="1" style="border: 1px solid black;border-collapse: collapse;">
    <tr>
        <th style="border: 1px solid black;border-collapse: collapse;">
        Payment Status
        </th>
        <th style="border: 1px solid black;border-collapse: collapse;">
        Delivery Status
        </th>
        <th style="border: 1px solid black;border-collapse: collapse;">
            Grand Total
        </th>
    </tr>
    <tr>
        <td style="border: 1px solid black;border-collapse: collapse;">
            {{strtoupper($data["payment_status"])}}
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            {{strtoupper($data["delivery_status"])}}
        </td>
        <td style="border: 1px solid black;border-collapse: collapse;">
            ${{$data["grand_total"]}}/-
        </td>
    </tr>
</table>
<br/><br/>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
