@extends('user-master')

@section('title', 'Welcome To Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- 4 Columns Start -->
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user"></i></div>
                            <div class="media-body">
                                <span class="m-0">Total Users</span>
                                <h4 class="mb-0 counter">{{$users}}</h4>
                                <i class="icon-bg" data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-check"></i></div>
                            <div class="media-body">
                                <span class="m-0">Categories</span>
                                <h4 class="mb-0 counter">{{$category}}</h4>
                                <i class="icon-bg" data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-info b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="edit-3"></i></div>
                            <div class="media-body">
                                <span class="m-0">Products</span>
                                <h4 class="mb-0 counter">{{$products}}</h4>
                                <i class="icon-bg" data-feather="edit-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-success b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-x"></i></div>
                            <div class="media-body">
                                <span class="m-0">Orders</span>
                                <h4 class="mb-0 counter">{{$orders}}</h4>
                                <i class="icon-bg" data-feather="user-x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 Columns End -->

        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Orders</h5>
                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display" id="basic-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order No.</th>

                                        <th>Grand Total</th>
                                        <th>City</th>
                                        <th>Delivery Status</th>
                                        <th>Payment Status </th>

                                        <th>Created at</th>
                                        <th>Options</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($orderr as $item)
                                        <tr id="Item-{{$item->id}}">
                                            <td>{{$Sr++}}</td>
                                            <td>{{$item->order_number}}</td>

                                            <td>${{$item->grand_total}}/-</td>
                                            <td>{{$item->billing_city}}</td>

                                            <td>
                                                {{$item->delivery_status ? strtoupper($item->delivery_status) : 'Pending'}}

                                            </td>
                                            <td><span class="{{$item->payment_status=='paid'?'bg-success p-2':''}}">{{$item->payment_status}}</span></td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.orders_show', $item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Show">
                                                    <i data-feather="eye"></i>
                                                </a>
{{--                                                <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">--}}
{{--                                                    <i data-feather="trash-2"></i>--}}
{{--                                                </a>--}}
                                                <script>
                                                    $('#Delete-{{$item->id}}').click(function(){
                                                        console.log("hello");
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            icon: 'question',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                $.ajaxSetup({
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    }
                                                                });

                                                                $.ajax({
                                                                    type:'DELETE',
                                                                    url:'{{url('admin/coupons/'.$item->id)}}',
                                                                    data:'_token = {{ @csrf_token() }}',
                                                                    success:function(data) {
                                                                        $("#Item-{{$item->id}}").hide();
                                                                    }
                                                                });

                                                            }
                                                        });
                                                    });
                                                </script>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script type="text/javascript">
            var session_layout = '{{ session()->get('layout') }}';
        </script>
    @endsection

    @section('script')

    @endsection
