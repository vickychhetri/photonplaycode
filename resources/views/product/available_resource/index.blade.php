@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Product Resources</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Product Resources</li>
@endsection

@section('content')
    <!-- Main Content -->
    <div id="main-content" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Resources</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="8" :pid="$product->id"/>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">
                                    <div class="col-md-12">
                                        <h6>Product Resources</h6>
                                    </div>
                                    <hr/>
                                    <form action="{{ route('admin.open_product_resource_form_store') }}" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                        @csrf
                                        <div>
                                            <label for="pdf">Upload PDF</label>
                                            <input type="file" name="pdf" id="pdf" required>
                                        </div>

                                        <div>
                                            <label for="order">Order</label>
                                            <input type="number" name="order" id="order" required>
                                        </div>

                                        <div>
                                            <label for="status">Status</label>
                                            <select name="status" id="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>

                                        <div>
                                            <input type="submit" value="Save">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <!-- List of Product Features -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6>Existing Product Resources</h6>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Resource</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productResources as $feature)
                                        <tr>`
                                            <td> <a href="{{asset('storage/'.$feature->folder.'/'.$feature->filename)}}" download>{{ $feature->filename }}</a></td>
                                            <td>{{ $feature->filename }}</td>
                                            <td>{{  strtoupper(($feature->type??"Unknown")) }}</td>
                                            <td>{{ $feature->order }}</td>
                                            <td>{{ $feature->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('admin.open_product_resource_edit_form_page', ['id' => $product->id, 'f_id' => $feature->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admin.open_product_available_resource_delete', $feature->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this feature?')">Delete</button>
                                                </form>
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

@section('scripts')
    <script>
        @if (session()->has('success'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
        @endif
    </script>
@endsection
