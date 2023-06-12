@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Specification</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Add Specification</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Product Specification  </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('admin.add_specification_store',$product->id) }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <div class="row mb-3 form-group">
                                <label for="specification" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Specification') }}</label>

                                <div class="col-md-6">
                                    <select id="specification" name="specialization_id" class="form-select form-select" aria-label=".form-select-sm">
                                        <option selected disabled> Product Specification</option>
                                        @foreach($specializations as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach

                                    </select>


                                    @error('specification')
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
                                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-dark">
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
