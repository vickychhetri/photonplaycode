<style>
    table {
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid black;
        padding: 8px;
    }
</style>
<div>
    <div class="shadow-sm">
        <table width="100%" border="1" cellpadding="0">
<tr>
 <th>
     Order No:
 </th>
    <td>
        <p>   {{$order->order_number}}</p>
    </td>

    <th>
        Order Date & Time:
    </th>
    <td>
        <p>   {{$order->created_at}}</p>
    </td>
</tr>

            <tr>
                <th>
                    Payment Status :
                </th>
                <td>
                    <p>  <span class="{{$order->payment_status=='paid'?'text-success':'text-warning'}} p-1">
                                    {{ucfirst($order->payment_status)}} </span>   </p>
                </td>

                <th>
                    Order Status :
                </th>
                <td>
                    <p>  <span class="p-1">
                                    {{strtoupper($order->delivery_status)}} </span>   </p>
                </td>
            </tr>
            <tr>
                <th >
                    Transaction No. :
                </th>
                <td colspan="3">
                    <p>  <span>
                                {{$order->trx_id}}</span> </p>
                </td>
            </tr>
<tr>
    <th>
        Order Note:

    </th>
    <td colspan="3">
        <p> {{$order->order_notes??'Order notes not available.'}}</p>
    </td>
</tr>
        </table>


        <a href="{{route('admin.generate_order_invoice',$order->id)}}" target="_blank">
            <i data-feather="printer"></i>  </a>
    </div>


    <div class="dt-ext table-responsive">

        <h2> </h2>
        <div class="shadow-lg p-4 ">
            <h2> Product </h2>
            <hr/>
            <table style="width: 100%;" border="1">
                <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Options</th>
                    <th>Quantity</th>
                    <th>Price</th>

                </tr>
                </thead>
                <tbody>
                @foreach($order->orderedProducts as $prod)
                    <tr>
                        <td>{{ $prod->product_id }}</td>
                        <td><img src="{{asset("storage/".$prod->cover_image)}}" alt="empty_image" style="max-height: 70px;max-width:100px; " /></td>
                        <td>{{ $prod->title }}</td>
                        <td>
                            @foreach (explode(',',$prod->option_ids) as $option)
                                @php
                                    $options = \App\Models\ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$prod->product_id)->get();

                                @endphp
                                @foreach ($options as $opp)
                                    {{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>
                                @endforeach
                            @endforeach

                        </td>
                        <td>{{ $prod->quantity }}</td>
                        <td>${{$prod->price}}/-</td>
                    </tr>
                @endforeach
                <tr>
                    <td>

                    </td>
                    <td colspan="4">
                    </td>
                    <td>
                        ${{$order->grand_total}} /-
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <br/>

        <div class="shadow-lg p-4 ">
            <h2> Customer </h2>
            <hr/>
            <table style="width: 100%" border="1">
                <thead>
                <tr>
                    <th>User Id</th>
                    <th>Stripe Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>


                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>{{$order->user->id }}</td>
                    <td>{{$order->user->stripe_id}}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->user->phone_number }}</td>
                </tr>

                </tbody>
            </table>
        </div>
        <br/>
        <div class="shadow-lg p-4 ">
            <h2> Billing Address </h2>
            <hr/>
            <table  style="width: 100%" border="1">
                <thead>
                <tr>
                    <th>Billing Street</th>
                    <th>Billing Flat Suite</th>
                    <th>Billing City</th>
                    <th>Billing State</th>
                    <th>Billing Country</th>
                    <th>Billing Postcode</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$order->billing_street }}</td>
                    <td>{{$order->billing_flat_suite}}</td>
                    <td>{{ $order->billing_city }}</td>
                    <td>{{ $order->billing_state}}</td>
                    <td>{{ $order->billing_country }}</td>
                    <td>{{ $order->billing_postcode }}</td>
                </tr>


                </tbody>
            </table>
            <div class="shadow-sm p-3">
                <p>  <b> Address Note: </b>  {{$order->address}}</p>
            </div>

        </div>

    </div>
</div>



