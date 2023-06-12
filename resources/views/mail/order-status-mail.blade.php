@php
    use App\Models\ProductSpcializationOption;
@endphp
<html>
<head>
</head>
<body>

<div class="container">
    <!-- All Client Table Start -->
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 hh-grayBox pt45 pb20">
                        <h3>{{$order->delivery_status}} </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div id="message" class="bg-success text-white"></div>
                    <div id="errormessage" class="bg-danger text-white"></div>
                    <h4 class="card-title p-1 d-flex justify-content-around align-items-center m-2 p-2">
                        <span>   Order : {{$order->order_number}}</span>

                    </h4>

                </div>
                <div class="card-body">

                    <div class="dt-ext table-responsive">

                        <h2> </h2>
                        <div class="shadow-lg p-4 ">

                            <hr/>
                            <div class="table-responsive">
                                <table class="table table-container">
                                    <thead>
                                    <tr>
                                        <th>Product </th>
                                        <th>Price</th>

                                    </tr>
                                    </thead>
                                    <tbody style="font-size: 10px;">

                                    @foreach($order->orderedProducts as $prod)
                                        <tr>
                                            <td>{{ $prod->title }} <br/>
                                                @foreach (explode(',',$prod->option_ids) as $option)

                                                    @php
                                                        $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$prod->product_id)->get();
                                                    @endphp

                                                    @foreach ($options as $opp){{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>
                                                    @endforeach

                                                @endforeach
                                                Color:  {{ $prod->color }}
                                            </td>

                                            <td>{{ $prod->quantity }} x ${{$prod->price}}

                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td>

                                        </td>
                                        <td >
                                            Sub Total
                                        </td>
                                        <td>
                                            ${{$order->cart_subtotal}}

                                        </td>
                                    </tr>


                                    <tr>
                                        <td>

                                        </td>
                                        <td colspan="1">
                                            Shipping & handling
                                        </td>
                                        <td colspan="1">
                                            ${{$order->shipping}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>
                                        <td colspan="1">
                                            Grand Total
                                        </td>
                                        <td colspan="1">
                                            ${{$order->grand_total}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br/>

                        <div class="shadow-lg p-4 ">
                            <h6> Billing Address </h6>
                            <hr/>
                            <p>
                                {{$order->billing_street }} , {{$order->billing_flat_suite}}
                                {{ $order->billing_city }}, {{ $order->billing_state}} , {{ $order->billing_country }}, {{ $order->billing_postcode }}.
                            </p>
                            <div class="shadow-sm p-3">
                                <p>  <b> Address Note: </b>  {{$order->address}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Client Table End -->

</div>

</body>

</html>
{{--@component('mail::message')--}}
{{--#--}}

{{--Dear User,--}}
{{--Your {{$body['order_number']}} order status is {{$body['message']}}.--}}

{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
{{--@endcomponent--}}
