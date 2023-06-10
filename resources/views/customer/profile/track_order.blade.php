@php
    use App\Models\ProductSpcializationOption;
    use Illuminate\Support\Facades\Log;
@endphp
@include('customer.layouts.header')
<!-- header-end -->
<!-- banner-start -->
<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <x-customer.profile-sidebar />
                    <div class="col-lg-8  col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-2 ">Overview</h5>
                            <div class="d-flex gap-4 mt-5">


                                <!-- All Client Table Start -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div id="message" class="bg-success text-white"></div>
                                                <div id="errormessage" class="bg-danger text-white"></div>
                                                <h4 class="card-title p-1 d-flex justify-content-around align-items-center m-2 p-2">
                                                    <span>   Order : {{$order->order_number}}</span>
                                                    <span>
                                <select class="form-select" id="myForm" name="delivery_status" class="shadow-none m-2">
                                    <option value="pending" {{$order->delivery_status=="pending"?"selected":""}}>Pending</option>
                                    <option value="processing" {{$order->delivery_status=="processing"?"selected":""}}>Processing</option>
                                    <option value="shipped" {{$order->delivery_status=="shipped"?"selected":""}}>Shipped</option>
                                    <option value="delivered" {{$order->delivery_status=="delivered"?"selected":""}}>Delivered</option>
                                     <option value="completed" {{$order->delivery_status=="completed"?"selected":""}}>Completed </option>
                                     <option value="cancelled" {{$order->delivery_status=="cancelled"?"selected":""}}>Cancelled</option>


                                     <option value="refunded" {{$order->delivery_status=="refunded"?"selected":""}}>Refunded</option>
                                     <option value="on_hold" {{$order->delivery_status=="on_hold"?"selected":""}}>On Hold</option>

                                     <option value="returned" {{$order->delivery_status=="returned"?"selected":""}}>Returned</option>
                                        <option value="partially_shipped" {{$order->delivery_status=="partially_shipped"?"selected":""}}> Partially Shipped</option>

                                </select>

                            </span>
                                                </h4>
                                                <div class="shadow-sm p-3">
                                                    <p> Payment Status : <span class="{{$order->payment_status=='paid'?'text-success':'text-warning'}} p-1">
                                    {{ucfirst($order->payment_status)}} </span>   </p>
                                                    <p> Order Status : <span class="p-1">
                                    {{strtoupper($order->delivery_status)}} </span>   </p>

                                                    <p>  <b> Order Note: </b>  {{$order->order_notes??'Order notes not available.'}}</p>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <div class="dt-ext table-responsive">

                                                    <h2> </h2>
                                                    <div class="shadow-lg p-4 ">

                                                        <hr/>
                                                        <table class="table">
                                                            <thead>
                                                            <tr>

                                                                <th>Product Image</th>
                                                                <th>Product Name</th>
                                                                <th>Options</th>
                                                                <th>Quantity</th>
                                                                <th>Color</th>
                                                                <th>Price</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($order->orderedProducts as $prod)
                                                                <tr>

                                                                    <td><img src="{{asset("storage/".$prod->cover_image)}}" alt="Image not found"  style="max-height: 50px;max-width: 100px;"/></td>
                                                                    <td>{{ $prod->title }}</td>
                                                                    <td>
                                                                        @foreach (explode(',',$prod->option_ids) as $option)

                                                                            @php
                                                                                $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$prod->product_id)->get();
                                                                            @endphp
                                                                            @foreach ($options as $opp){{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>
                                                                            @endforeach
                                                                        @endforeach

                                                                    </td>
                                                                    <td>{{ $prod->quantity }}</td>
                                                                    <td>{{ $prod->color }}</td>
                                                                    <td>${{$prod->price}}</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td colspan="4">
                                                                </td>
                                                                <td colspan="1">
                                                                    ${{$order->grand_total}}
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->
<section class="subscribe-section">
    <div class="container">
        <div class="row">
            <div class="subscribe-wrapper text-center">
                <h3 class="subscribe-title">Don’t miss our weekly updates about <br>
                    New Products</h3>
                <form action="" class="subscribr-form">
                    <div class="col-lg-4 mx-auto">
                        <div class="d-flex border-bottom">
                            <input type="text" placeholder="Enter your email address..."
                                   class="bg-transparent w-100 border-0 text-white outline-0 border-0 shadow-none">
                            <button class="bg-transparent border-0 text-white p-2">SUBSCRIBE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('customer.layout2.footer')
