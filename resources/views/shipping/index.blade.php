@extends('user-master')

@section('title', 'Manage Shipping Rate')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Shipping Rate</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Specifications</li>
@endsection

@section('content')
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                    <h5 class="card-title">All Shipping Rates</h5>
                    <a href="{{route('admin.shipping-rate.create')}}" class="btn btn-primary ms-auto d-flex align-items-center">
                        <i data-feather="plus-circle"> </i>
                        Add Shipping Rate</a>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Postal Code</th>
                                        <th>Shipping Rate</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i)
                                        <tr>
                                            <td>{{$i->id}}</td>
                                            <td>{{$i->city}}</td>
                                            <td>{{$i->state}}</td>
                                            <td>{{$i->country}}</td>
                                            <td>{{$i->postal_code}}</td>
                                            <td>${{$i->shipping_rate}}</td>
                                            <td>
                                            <a href="{{route('admin.shipping-rate.edit', $i->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit"></i>
                                            </a>

                                            <a id="Delete-{{$i->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <script>
                                                $('#Delete-{{$i->id}}').click(function(){
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
                                                        window.location.href = "{{ url('admin/shipping-rate/delete/'.$i->id)}}";
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
        <!-- All Client Table End -->






    @endsection

    @section('script')

    @endsection
