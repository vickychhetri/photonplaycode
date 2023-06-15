{{--@php--}}
{{--    use App\Models\ProductSpcializationOption;--}}
{{--@endphp--}}
{{--<html>--}}
{{--<head>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>--}}
{{--</head>--}}
{{--<style>--}}

{{--    table {--}}
{{--        width: 100%;--}}
{{--        /* Other table styles */--}}
{{--    }--}}

{{--    .hh-grayBox {--}}
{{--        background-color: #F8F8F8;--}}
{{--        margin-bottom: 20px;--}}
{{--        padding: 35px;--}}
{{--        margin-top: 20px;--}}
{{--    }--}}
{{--    .pt45{padding-top:45px;}--}}
{{--    .order-tracking{--}}
{{--        text-align: center;--}}
{{--        width: 33.33%;--}}
{{--        position: relative;--}}
{{--        display: block;--}}
{{--    }--}}
{{--    .order-tracking .is-complete{--}}
{{--        display: block;--}}
{{--        position: relative;--}}
{{--        border-radius: 50%;--}}
{{--        height: 30px;--}}
{{--        width: 30px;--}}
{{--        border: 0px solid #AFAFAF;--}}
{{--        background-color: #f7be16;--}}
{{--        margin: 0 auto;--}}
{{--        transition: background 0.25s linear;--}}
{{--        -webkit-transition: background 0.25s linear;--}}
{{--        z-index: 2;--}}
{{--    }--}}
{{--    .order-tracking .is-complete:after {--}}
{{--        display: block;--}}
{{--        position: absolute;--}}
{{--        content: '';--}}
{{--        height: 14px;--}}
{{--        width: 7px;--}}
{{--        top: -2px;--}}
{{--        bottom: 0;--}}
{{--        left: 5px;--}}
{{--        margin: auto 0;--}}
{{--        border: 0px solid #AFAFAF;--}}
{{--        border-width: 0px 2px 2px 0;--}}
{{--        transform: rotate(45deg);--}}
{{--        opacity: 0;--}}
{{--    }--}}
{{--    .order-tracking.completed .is-complete{--}}
{{--        border-color: #27aa80;--}}
{{--        border-width: 0px;--}}
{{--        background-color: #27aa80;--}}
{{--    }--}}
{{--    .order-tracking.completed .is-complete:after {--}}
{{--        border-color: #fff;--}}
{{--        border-width: 0px 3px 3px 0;--}}
{{--        width: 7px;--}}
{{--        left: 11px;--}}
{{--        opacity: 1;--}}
{{--    }--}}
{{--    .order-tracking p {--}}
{{--        color: #A4A4A4;--}}
{{--        font-size: 16px;--}}
{{--        margin-top: 8px;--}}
{{--        margin-bottom: 0;--}}
{{--        line-height: 20px;--}}
{{--    }--}}
{{--    .order-tracking p span{font-size: 14px;}--}}
{{--    .order-tracking.completed p{color: #000;}--}}
{{--    .order-tracking::before {--}}
{{--        content: '';--}}
{{--        display: block;--}}
{{--        height: 3px;--}}
{{--        width: calc(100% - 40px);--}}
{{--        background-color: #f7be16;--}}
{{--        top: 13px;--}}
{{--        position: absolute;--}}
{{--        left: calc(-50% + 20px);--}}
{{--        z-index: 0;--}}
{{--    }--}}
{{--    .order-tracking:first-child:before{display: none;}--}}
{{--    .order-tracking.completed:before{background-color: #27aa80;}--}}


{{--</style>--}}
{{--<body>--}}

{{--<div class="container">--}}
{{--    <!-- All Client Table Start -->--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-md-12 hh-grayBox pt45 pb20">--}}
{{--                        <h1 style="padding: 32px;text-align: center;background-color: #0a58ca;color: white;" class="text-center bg-info">Status: {{strtoupper($order->delivery_status)}} </h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <div id="message" class="bg-success text-white"></div>--}}
{{--                    <div id="errormessage" class="bg-danger text-white"></div>--}}
{{--                    <h4 class="card-title p-1 d-flex justify-content-around align-items-center m-2 p-2">--}}
{{--                        <h2>   Order : {{$order->order_number}}</h2>--}}

{{--                    </h4>--}}

{{--                </div>--}}
{{--                <div class="card-body">--}}

{{--                    <div class="dt-ext table-responsive">--}}

{{--                        <h2> </h2>--}}
{{--                        <div class="shadow-lg p-4 ">--}}

{{--                            <hr/>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-container" style="width: 100%;">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Product </th>--}}
{{--                                        <th>Price</th>--}}

{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody style="font-size: 10px;">--}}
{{--                                    @foreach($order->orderedProducts as $prod)--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                {{ $prod->title }}  ,--}}
{{--                                                @foreach (explode(',',$prod->option_ids) as $option)--}}
{{--                                                    @php--}}
{{--                                                        $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$prod->product_id)->get();--}}
{{--                                                    @endphp--}}

{{--                                                    @foreach ($options as $opp){{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>--}}
{{--                                                    @endforeach--}}

{{--                                                @endforeach--}}
{{--                                                Color:  {{ $prod->color }}--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                {{ $prod->quantity }} x ${{$prod->price}}--}}

{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}

{{--                                    <tr>--}}

{{--                                        <td >--}}
{{--                                            Sub Total--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            ${{$order->cart_subtotal}}--}}

{{--                                        </td>--}}
{{--                                    </tr>--}}


{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            Shipping & handling--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            ${{$order->shipping}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}

{{--                                    <tr>--}}

{{--                                        <td >--}}
{{--                                            Grand Total--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            ${{$order->grand_total}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br/>--}}

{{--                        <div class="shadow-lg p-4 ">--}}
{{--                            <h6> Billing Address </h6>--}}
{{--                            <hr/>--}}
{{--                            <p>--}}
{{--                                {{$order->billing_street }} , {{$order->billing_flat_suite}}--}}
{{--                                {{ $order->billing_city }}, {{ $order->billing_state}} , {{ $order->billing_country }}, {{ $order->billing_postcode }}.--}}
{{--                            </p>--}}
{{--                            <div class="shadow-sm p-3">--}}
{{--                                <p>  <b> Address Note: </b>  {{$order->address}}</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- All Client Table End -->--}}

{{--</div>--}}

{{--</body>--}}

{{--</html>--}}
@component('mail::message')
Dear User,
Your {{$order->order_number}} order status is {{strtoupper($order->delivery_status)}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
