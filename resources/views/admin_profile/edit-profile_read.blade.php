@extends('user-master')

@section('title', 'Profile')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Profile</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Profile Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Name:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->name ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Email:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->email ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Phone:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->phone ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Address:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->address ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Gender:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->gender ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Date of Birth:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->birth_date ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url('admin/edit-profile') }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
