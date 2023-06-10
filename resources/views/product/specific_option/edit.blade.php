@extends('user-master')

@section('title', 'Add Specification')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Specification Options</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Add Specification Options</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>   Specification Options </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('admin.product_specification_options_edit_store') }}">
                            @csrf
                            <input type="hidden" name="product_id"  value="{{$specialization_options->product_id}}">
                            <input type="hidden" name="product_specilizations_id" value="{{$specialization_options->id}}">

                            <div class="row mb-3 form-group">
                                <label for="specialization_option_id" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Option') }}</label>
                                <div class="col-md-3">
                                    <select id="specialization_option_id" name="specialization_option_id" class="form-select form-select" aria-label=".form-select-sm">
                                        <option value="{{$specialization_options->specializationoptions()->first()->id}}">{{$specialization_options->specializationoptions()->first()->option}}</option>
                                    </select>

                                    @error('specialization_option_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="specialization_price" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Price') }}</label>

                                <div class="col-md-3">
                                    <input id="specialization_price" type="text" class="form-control @error('specialization_price') is-invalid @enderror" name="specialization_price" value="{{ old('specialization_price') ?? $specialization_options->specialization_price ?? ''}}" required autocomplete="specialization_price" autofocus>


                                    @error('specialization_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i data-feather="save"> </i>
                                        Save
                                    </button>
                                    <a href="{{route('admin.product_specification_options',[$specialization_options->product_id,
                                        $specialization_options->product_specilizations_id])}}" class="btn btn-dark">
                                        <i data-feather="corner-down-right"> </i>
                                        Return Back
                                    </a>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
