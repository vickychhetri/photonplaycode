@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Pricing</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Pricing</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pricing</h5>
                        <hr/>
                        <x-Product.HeaderMenu :page="4" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>

                                    <form method="POST" action="{{route('admin.product_seo_store')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_title" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Meta Title') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="meta_title" class="form-control" placeholder="Title must be within 70 Character"  value="{{ old('meta_title') ??  $product_seo->meta_title ?? ''}}">

                                                @error('meta_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_description" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Meta Description') }}</label>

                                            <div class="col-md-8">
                                                <textarea  name="meta_description" class="form-control" placeholder="Description must be within 150 Character" >{{ old('meta_description') ??  $product_seo->meta_description ?? ''}}</textarea>

                                                @error('meta_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="meta_keywords" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Meta Keywords') }}</label>

                                            <div class="col-md-8">
                                                <textarea  name="meta_keywords" class="form-control" placeholder="Keyword1, keyword2, keyword3, keyword4" >{{ old('meta_keywords') ??  $product_seo->meta_keywords ?? ''}}</textarea>

                                                @error('meta_keywords')
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

                                    <img src="{{asset('assets/admin/product_seo.png')}}" class="w-100"/>


                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
