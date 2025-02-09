@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Add Specilization</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Add Product</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>New Product</h5>
                    {{--<div class="row">--}}
                    {{-- <div class="col-md-3 mb-3">--}}
                    {{-- <a href="#" class="btn btn-info w-100" > Product Information </a>--}}
                    {{-- </div>--}}
                    {{-- <div class="col-md-3 mb-3">--}}
                    {{-- <a href="#" class="btn btn-info w-100" >Specifications </a>--}}
                    {{-- </div>--}}
                    {{-- <div class="col-md-3 mb-3">--}}
                    {{-- <a href="#" class="btn btn-info w-100"  > Shipping </a>--}}
                    {{-- </div>--}}
                    {{-- <div class="col-md-3 mb-3">--}}
                    {{-- <a href="#" class="btn btn-info w-100"> Vat/Tax </a>--}}
                    {{-- </div>--}}
                    {{--</div>--}}
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 p-2">
                            <div class="border-2 shadow-lg p-4">

                                <div class="col-md-12 ">
                                    <h6> Product Information</h6>
                                </div>
                                <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3 form-group">
                                        <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category') }}</label>

                                        <div class="col-md-10">
                                            <select id="category" name="category_id" class="form-select form-select" aria-label=".form-select-sm">
                                                <option selected disabled> Product Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach

                                            </select>

                                            @error('category_selected')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 form-group">
                                        <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Name') }}</label>

                                        <div class="col-md-10    ">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row mb-3 form-group">
                                        <label for="slug" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Slug') }}</label>

                                        <div class="col-md-10    ">
                                            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>

                                            @error('slug')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row mb-2 form-group">
                                        <label for="price" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Price') }}</label>

                                        <div class="col-md-10">
                                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                        </div>


                                    </div>

                                    <div class="row mb-2 form-group">
                                        <label for="sku" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('SKU') }}</label>

                                        <div class="col-md-10">
                                            <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{ old('sku') }}" autocomplete="sku" autofocus>

                                            @error('sku')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror


                                        </div>


                                    </div>

                                    <div class="row mb-2 form-group">
                                        <label for="brochure" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Brochure') }}</label>

                                        <div class="col-md-7">
                                            <input id="brochure" type="file" class="form-control @error('brochure') is-invalid @enderror" name="brochure" value=""  autocomplete="brochure" autofocus>

                                            @error('brochure')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            @if(isset($product->brochure))
                                            <a href="{{asset('storage/'.$product->brochure)}}" class="btn btn-dark-gradien">Download</a>
                                            @endif
                                        </div>


                                    </div>





                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add Product') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                        {{-- <div class="col-md-5">--}}
                        {{-- <div class="border-2 shadow-lg p-4">--}}
                        {{-- <div class="col-md-12 ">--}}
                        {{-- <h6> Product Specifications</h6>--}}
                        {{-- </div>--}}

                        {{-- <div class="row mb-3 form-group">--}}
                        {{-- <div class="col-md-12">--}}

                        {{-- <select id="color" name="color" class="form-select form-select" aria-label=".form-select-sm">--}}
                        {{-- <option selected disabled>-- Select Specification --</option>--}}
                        {{-- <option>Batteries</option>--}}
                        {{-- <option>Power</option>--}}

                        {{-- </select>--}}

                        {{-- @error('color')--}}
                        {{-- <span class="invalid-feedback" role="alert">--}}
                        {{-- <strong>{{ $message }}</strong>--}}
                        {{-- </span>--}}
                        {{-- @enderror--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- @for($i=0;$i<3;$i++)--}}
                        {{-- <div class="row mb-3 form-group">--}}
                        {{-- <div class="col-md-12">--}}
                        {{-- <div class="row">--}}

                        {{-- <div class="col-md-5">--}}
                        {{-- <select id="color" name="color" class="form-select form-select" aria-label=".form-select-sm">--}}
                        {{-- <option selected disabled>--Option--</option>--}}
                        {{-- <option>3 Days</option>--}}
                        {{-- <option>5 Days</option>--}}

                        {{-- </select>--}}

                        {{-- </div>--}}
                        {{-- <div class="col-md-5">--}}
                        {{-- <input type="text" class="form-control" placeholder="$">--}}
                        {{-- </div>--}}

                        {{-- <div class="col-md-2 p-1">--}}
                        {{-- <button class="btn btn-sm btn-dark">+ </button>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- @endfor--}}


                        {{-- </div>--}}



                        {{-- </div>--}}
                    </div>







                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello Photon Play Systems',
            tabsize: 2,
            height: 200
        });

    });
</script>
@endsection
