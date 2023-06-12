@extends('user-master')

@section('title', 'Photon Play System')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Add Specilization</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Add Product</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Setup</h5>
                        <hr/>

                        <x-Product.HeaderMenu  :pid="$product->id" :page="1"/>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <h5>Product Specifications</h5>
                                <a href="{{ url('/admin/add/product-specification/'.$product->id)}}" class="btn btn-primary ms-auto">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="plus-circle"> </i>
                                       <span> Add Specification</span>
                                    </div>
                                   </a>
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
                                        <th class="all">Specification</th>
                                        <th class="all">Counts</th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>

@foreach ($product_specilizations as $item)
    <tr id="Item-{{$item->id}}">
        <td>{{$Sr++}}</td>
        <td>{{$item->specilization()->first()->title }}</td>
        <td>{{$item->counts}}</td>
        <td>{{ date('d-m-Y',strtotime($item->created_at)) ?? ''}}</td>
        <td>
            <a href="{{ url('admin/product-specification-options/'.$product->id.'/'.$item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                <i data-feather="eye"></i>
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
                                url:'{{url('admin/delete/product-specification/'.$item->id)}}',
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


    <script>
        $(document).ready(function() {

            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });


    </script>
@endsection
