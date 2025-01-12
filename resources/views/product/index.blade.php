@extends('user-master')

@section('title', 'Manage Products')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Products</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Products</li>
@endsection

@section('content')
    <div class="container-fluid">

        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                    <h5 class="card-title">All Products</h5>
                    <a href="{{route('admin.product.create')}}" class="btn btn-primary ms-auto d-flex align-items-center">
                        <i data-feather="plus-circle"> </i>
                        Add New Product</a>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive table-bordered responsive ">
                            <table class="display w-100" id="basic-2"   >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Code</th>
                                        <th>Created at</th>
                                        {{-- <th>Status </th> --}}
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$Sr++}}</td>
                                        <td>
                                            <a class="text-decoration-underline text-reset" href="{{route('admin.product_basic_update',$product->id)}}">
                                            {{$product->title}}
                                            </a>
                                        </td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <span> {{$product->code??"NOT ASSIGNED"}} </span>

                                        </td>

                                        <td>{{$product->created_at->format('d/m/Y')}}</td>
                                        <td>
{{--                                            <a href="{{route('admin.product_basic_update',$product->id)}}" class="text-success p-1" data-toggle="tooltip" title="Edit">--}}
{{--                                                <i data-feather="edit-3"></i>--}}
{{--                                            </a>--}}
                                            <a href="{{route('admin.product_copy',$product->id)}}" class="text-success p-1" data-toggle="tooltip" title="Edit" onclick="return confirm('Are you sure want to copy this product?')">
                                                <i data-feather="copy"></i>
                                            </a>
                                            <a href="{{route('admin.product.edit',$product->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit"></i>
                                            </a>

{{--                                            <a id="Delete-" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">--}}
{{--                                                <i data-feather="trash-2"></i>--}}
{{--                                            </a>--}}
{{--                                            <script>--}}
{{--                                                $('#Delete-').click(function(){--}}
{{--                                                    console.log("hello");--}}
{{--                                                    Swal.fire({--}}
{{--                                                    title: 'Are you sure?',--}}
{{--                                                    text: "You won't be able to revert this!",--}}
{{--                                                    icon: 'question',--}}
{{--                                                    showCancelButton: true,--}}
{{--                                                    confirmButtonColor: '#3085d6',--}}
{{--                                                    cancelButtonColor: '#d33',--}}
{{--                                                    confirmButtonText: 'Yes, delete it!'--}}
{{--                                                    }).then((result) => {--}}
{{--                                                    if (result.isConfirmed) {--}}
{{--                                                        window.location.href = "{{ url('admin/delete-employee/')}}";--}}
{{--                                                    }--}}
{{--                                                    });--}}
{{--                                                });--}}
{{--                                            </script>--}}
                                            <a id="Delete-{{ $product->id }}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <a target="_blank" href="{{ route('customer.radar.sign', $product->slug) }}" class="text-primary p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="link"></i>
                                            </a>

                                            <script>
                                                $('#Delete-{{ $product->id }}').click(function(){
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
                                                            $.ajax({
                                                                url: "{{ route('admin.product.destroy', $product->id) }}",
                                                                type: 'DELETE',
                                                                data: {
                                                                    _token: '{{ csrf_token() }}',
                                                                },
                                                                success: function(response) {
                                                                    Swal.fire('Deleted!', 'Your product has been deleted.', 'success').then(function() {
                                                                        window.location.reload();
                                                                    });
                                                                },
                                                                error: function(xhr, status, error) {
                                                                    Swal.fire('Error!', 'There was an issue deleting the product. Please try again.', 'error');
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
        <!-- All Client Table End -->

        <script type="text/javascript">
            var session_layout = '{{ session()->get('layout') }}';

        </script>

    @endsection

    @section('script')

    @endsection
