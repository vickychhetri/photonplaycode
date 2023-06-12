@extends('user-master')

@section('title', 'Welcome To Easy Returns Dashboard')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Specification Options</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Add Options</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <a href="{{route('admin.product.edit',$product->id)}}" class="d-flex align-items-center">
                                <i data-feather="corner-down-right"> </i>
                               Back</a>

                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <h5>Product Specifications Options</h5>
                                <a href="{{ url('/admin/product-specification-options/'.$product->id.'/'.$specialization_id).'/form'}}" class="btn btn-primary ms-auto d-flex align-items-center">
                                    <i data-feather="plus-circle"> </i>
                                    Add  Options</a>

                            </div>

                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <table class="display" id="basic-2">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Option</th>
                                        <th class="all">Price</th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($product_spcialization_options as $item)
                                        <tr id="Item-{{$item->id}}">
                                            <td>{{$Sr++}}</td>
                                            <td>{{$item->specializationoptions()->first()->option }}</td>
                                            <td>{{$item->specialization_price}}</td>
                                            <td>{{ date('d-m-Y',strtotime($item->created_at)) ?? ''}}</td>
                                            <td>
                                                <a href="{{ url('admin/product-specification-options-edit/'.$item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                    <i data-feather="edit"></i>
                                                </a>

                                                <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                    <i data-feather="trash-2"></i>
                                                </a>
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
                                                                    url:'{{url('admin/product-specification-options-delete/'.$item->id)}}',
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
    </div>


@endsection
