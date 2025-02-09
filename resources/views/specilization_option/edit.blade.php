@extends('user-master')

@section('title', 'Welcome To Easy Returns Dashboard')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Edit Specilization</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Edit Specilization</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Specilization Details</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{url('admin/specilization-option/'. $option->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3 form-group">
                            <label for="title" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Title') }}</label>
                            <input type="hidden" name="id" value="{{$option->id}}">
                            <input type="hidden" name="id" value="{{$option->specialization_id}}">
                            <div class="col-md-6">
                                <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option" value="{{ $option->option }}" required autocomplete="option" autofocus>

                                @error('option')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 form-group">
                            <label for="code" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('code') }}</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $option->code }}" required autocomplete="code" autofocus>

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Option') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
