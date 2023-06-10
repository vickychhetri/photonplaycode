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

                    <form method="POST" action="{{url('admin/specilization/'. $specilization->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3 form-group">
                            <label for="title" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Title') }}</label>
                            <input type="hidden" name="id" value="{{$specilization->id}}">
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $specilization->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 form-group">
                            <label for="image" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 ">
                                <img src="{{asset('storage/'.$specilization->image)}}" />
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary d-flex align-items-center">
                                    <i data-feather="save"> </i>
                                    {{ __('Update Specilization') }}
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
