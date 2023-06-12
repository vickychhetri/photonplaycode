@extends('user-master')

@section('title', 'Product Publish')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Publish</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Publish</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Publish</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="6" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Publish</h6>
                                    </div>
                                    <hr/>

                                    <form method="POST" action="{{route('admin.product_publish_update',)}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="status" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Change Status') }}</label>

                                            <div class="col-md-8">
                                               <select class="form-control"  name="status">
                                                   <option value="Draft" {{$product->status=="Draft"?"selected":""}} >Draft </option>
                                                   <option value="Listed"  {{$product->status=="Listed"?"selected":""}}>Listed </option>
                                                   <option value="Unlisted"  {{$product->status=="Unlisted"?"selected":""}}>Unlisted </option>
                                               </select>

                                                @error('meta_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary d-flex align-items-center">
                                                    <i data-feather="save"> </i>
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div>

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
