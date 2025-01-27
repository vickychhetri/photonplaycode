@php
use App\Models\ProductSpcializationOption;
use Illuminate\Support\Facades\Log;
@endphp
@extends('user-master')

@section('title', 'Show Orders')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Show Orders</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Show Orders</li>
@endsection

@section('content')
    <div class="container-fluid">



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
                                    <option value="order" {{$order->delivery_status=="order"?"selected":""}}>Order</option>
                                    <option value="shipped" {{$order->delivery_status=="shipped"?"selected":""}}>Shipped</option>
                                    <option value="delivered" {{$order->delivery_status=="delivered"?"selected":""}}>Delivered</option>

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

                        <p> Transaction No. : <span>
                                {{$order->trx_id}}</span> </p>
                        <p>  <b> Order Note: </b>  {{$order->order_notes??'Order notes not available.'}}</p>
                            <a href="{{route('customer.customer_order_invoice',$order->id)}}" target="_blank">
                                <i data-feather="printer"></i>  </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="dt-ext table-responsive">
                            <div class="shadow-lg p-4">
                                <h2>Tracking Details</h2>
                                <hr />
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Estimated Delivery Date</th>
                                        <th>Carrier Name</th>
                                        <th>Tracking Number</th>
                                        <th>Shipping Status</th>
                                        <th>Tracking Url</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $order->order_number }}</td>
                                        <td>{{ $order->estimated_delivery_date ?? 'Not Set' }}</td>
                                        <td>{{ $order->carrier_name ?? 'Not Set' }}</td>
                                        <td>{{ $order->tracking_number ?? 'Not Set' }}</td>
                                        <td>{{ $order->shipping_status ?? 'Pending' }}</td>
                                        <td>
                                            @if($order->tracking_url)
                                                <a href="{{ $order->tracking_url }}" target="_blank">Track Order</a>
                                            @else
                                                Not Set
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trackingModal">Edit</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal for Editing Tracking Details -->
                            <div class="modal fade" id="trackingModal" tabindex="-1" aria-labelledby="trackingModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.orders.updateTracking', $order->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="trackingModalLabel">Update Tracking Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="estimated_delivery_date" class="form-label">Estimated Delivery Date</label>
                                                    <input type="date" class="form-control" id="estimated_delivery_date" name="estimated_delivery_date" value="{{ $order->estimated_delivery_date }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="carrier_name" class="form-label">Carrier Name</label>
                                                    <input type="text" class="form-control" id="carrier_name" name="carrier_name" value="{{ $order->carrier_name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tracking_number" class="form-label">Tracking Number</label>
                                                    <input type="text" class="form-control" id="tracking_number" name="tracking_number" value="{{ $order->tracking_number }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tracking_url" class="form-label">Tracking Url</label>
                                                    <input type="text" class="form-control" id="tracking_url" name="tracking_url" value="{{ $order->tracking_url }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="shipping_status" class="form-label">Shipping Status</label>
                                                    <select class="form-select" id="shipping_status" name="shipping_status">
                                                        <option value="Pending" {{ $order->shipping_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="In Transit" {{ $order->shipping_status == 'In Transit' ? 'selected' : '' }}>In Transit</option>
                                                        <option value="Delivered" {{ $order->shipping_status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <br/>
                            <div class="shadow-lg p-4 ">
                                <h2> Product </h2>
                                <hr/>
                            <table class="table table-bordered  table-hover">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>SKU</th>
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
                                        <td>{{ $prod->sku_code??"NA" }}</td>
                                        <td><img src="{{asset("storage/".$prod->cover_image)}}" alt="Image not found"  style="max-height: 100px;max-width: 100px;"/></td>
                                        <td>{{ $prod->title }}</td>
                                        <td>
                                            @if (unserialize($prod->option_ids) != null)
                                            @foreach (unserialize($prod->option_ids) as $option)
                                                @php
                                                $options = ProductSpcializationOption::with('specializationoptions','product_specilization.specilization')->where('specialization_option_id', $option)->where('product_id',$prod->product_id)->get();
                                                @endphp
                                                @foreach ($options as $opp)
                                                    {{$opp->product_specilization->specilization->title}} : {{$opp->specializationoptions->option}}(${{$opp->specialization_price}}) <br>
                                                @endforeach
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>{{ $prod->quantity }}</td>
                                        <td>${{$prod->price}}/-</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>

                                    </td>
                                    <td colspan="5">
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
                            <table class="table table-bordered table-hover">
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
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Billing Street</th>
                                        <th>Billing Flat Suite</th>
                                        <th>Billing City</th>
                                        <th>Billing State</th>
                                        <th>Billing Countryr</th>
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
                </div>
            </div>
        </div>
        <!-- All Client Table End -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function() {

                // Event handler for select element change
                $('#myForm').change(function() {
                    var selectedStatus = $(this).val(); // Get the selected value
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');

                    // Set the CSRF token in AJAX request headers
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        }
                    });

                    // AJAX request to save the status
                    $.ajax({
                        url: '{{route('admin.change_status_order_product',$order->id)}}',
                        method: 'put', // or 'GET' depending on your API
                        data: { status: selectedStatus },
                        success: function(response) {
                            console.log('Status saved successfully.');
                            $('#message').text('Status updated. Status changed to: ' + selectedStatus);
                        },
                        error: function(xhr, status, error) {
                            console.log('Error saving status: ' + error);
                            $('#errormessage').text('Error saving status: ' + error);

                        }
                    });
                });
            });
        </script>


        @endsection

@section('script')

@endsection

