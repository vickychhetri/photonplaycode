@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Product Features</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Product Features</li>
@endsection

@section('content')
    <!-- Main Content -->
    <div id="main-content" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Features</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="7" :pid="$product->id"/>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">
                                    <div class="col-md-12">
                                        <h6>Product Features</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="{{ route('admin.open_product_features_form_store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"/>

                                        <!-- Form Inputs in Same Line -->
                                        <div class="row mb-3 form-group">
                                            <!-- Icon Image Field -->
                                            <div class="col-md-2">
                                                <label for="icon" class="col-form-label"><span>* </span>{{ __('Icon (Image)') }}</label>
                                                <input type="file" name="icon" class="form-control">
                                            </div>

                                            <!-- Heading Text Field -->
                                            <div class="col-md-6">
                                                <label for="heading_text" class="col-form-label"><span>* </span>{{ __('Heading Text') }}</label>
                                                <input type="text" name="heading_text" class="form-control" placeholder="Enter heading text" value="{{ old('heading_text') }}">
                                            </div>

                                            <!-- Order Field -->
                                            <div class="col-md-1">
                                                <label for="order" class="col-form-label"><span>* </span>{{ __('Order') }}</label>
                                                <input type="number" name="order" class="form-control" placeholder="Enter Sequence" value="{{ old('order') }}">
                                            </div>

                                            <!-- Status Field -->
                                            <div class="col-md-2">
                                                <label for="status" class="col-form-label"><span>* </span>{{ __('Status') }}</label>
                                                <select name="status" class="form-select">
                                                    <option value="1" selected>Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="col-md-1">
                                                <label for="submit_button" class="col-form-label"><span>* </span>{{ __('Save') }}</label>
                                                <button type="submit" class="btn btn-primary d-flex align-items-center" id="submit_button">
                                                    <i data-feather="save"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- List of Product Features -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6>Existing Product Features</h6>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Heading Text</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productFeatures as $feature)
                                        <tr>`
                                            <td><img src="{{ asset('storage/' . $feature->icon) }}" alt="Icon" width="50" height="50"></td>
                                            <td>{{ $feature->heading_text }}</td>
                                            <td>{{ $feature->order }}</td>
                                            <td>{{ $feature->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('admin.open_product_features_edit_form_page', ['id' => $product->id, 'f_id' => $feature->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admin.open_product_features_deleted', $feature->id) }}" method="POST" style="display:inline;">
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
