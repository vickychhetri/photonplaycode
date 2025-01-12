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
                                <h5>Product Specifications:: </h5>

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


    <div class="container">
            <div class="row">
                    @php
                    $product_skus=\App\Models\ProductSku::where('pid',$product->id)->get();
                    @endphp

                <div class="col-md-6 card-body">
                    <h4>
                        SKU RANGE :: {{$product->title}}
                    </h4>
                    <a href="{{route("admin.sku_generate",$product->id)}}" class="btn btn-danger"> Generate SKU</a>
                    <p style="font-size: 10px;color:red;"> Before click here to generate SKU Range, please set starting range.
                    create all specifications.
                    </p>
                    @if(!isset($product_skus))
                        SKU Not Generated for this , please add range In product edit and then generate sku.
                    @endif
                    <table class="table " style="max-width: 400px;">
                        <tr>
                            <th>
                                Combination
                            </th>
                            <th>
                                Range
                            </th>
                        </tr>

                        @foreach($product_skus as $product_sku)
                        <tr>
                    <td>
                        {{$product_sku->specification_condition}}
                    </td>
                    <td>
                        {{$product_sku->sku_code}}
                    </td>
                        </tr>
                    @endforeach
                    </table>



                </div>
                <div class="col-md-6 card-body">
                    @php
                        $product_s=\App\Models\Product::all();
                    @endphp
                    <h4>
                        SKU RANGE Already Start Allocated.
                    </h4>
                    <p style="font-size: 10px;color:red;"> All the Products SKU Start range is for references purpose only.
                        if please change (RED TEXT) then you need to change the range because allocated to another product already.
                        or empty.
                    </p>
                    <table class="table table-bordered " style="max-width: 400px;">
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Range
                            </th>
                        </tr>
                            @php
                            $common=[];
                            @endphp
                        @foreach($product_s as $product_s_item)
                            <tr>
                                <td>
                                    @if($product->id ==$product_s_item->id)
                                        <span class="text-success font-weight-bold"> {{$product_s_item->title}} </span>
                                    @else
                                        {{$product_s_item->title}}
                                    @endif

                                </td>
                                <td>
                                    @php
                                    if(in_array($product_s_item->sku_start_range,$common)){
                                                echo "<span class='text-danger'> (Please change) </span>";
                                    }
                                    @endphp
                                    X >= {{$product_s_item->sku_start_range??"Not Set"}}
                                </td>

                            </tr>
                            @php
                                $common[]=$product_s_item->sku_start_range;
                            @endphp
                        @endforeach
                    </table>



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
