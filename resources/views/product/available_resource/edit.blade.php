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
                        <x-Product.HeaderMenu :page="7" :pid="$product->id"/>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">
                                    <div class="col-md-12">
                                        <h6>Product Resources</h6>
                                        <a href="{{route('admin.open_product_available_resources',$product->id )}}" class="btn btn-dark"> Back to List</a>
                                    </div>
                                    <hr/>
                                    <form action="{{ route('admin.open_product_resource_edit_form_page_update', $resource->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="pdf">Upload PDF</label>
                                            <input type="file" name="pdf" id="pdf" class="form-control">
                                            @if($resource->filename)
                                                <p>Current file: {{ $resource->filename }}</p>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="order">Order</label>
                                            <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $resource->order) }}" required>
                                            @error('order')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="1" {{ old('status', $resource->status ? '1' : '0') == '1' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status', $resource->status ? '1' : '0') == '0' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Resource</button>
                                    </form>
                                </div>
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
