@extends('user-master')

@section('title', 'Welcome to Photon Playa')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Edit Product</h3>
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
                        <h5>Edit Product</h5>

                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <a href="/admin/product" > Back</a>
                                        <h6> Product Information</h6>
                                        <hr/>
                                    </div>
                                    <form method="POST" action="{{route('admin.product.update',$product->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3 form-group">
                                            <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category') }}</label>

                                            <div class="col-md-10">
                                                <select id="category" name="category_id" class="form-select form-select" aria-label=".form-select-sm">
                                                    <option selected disabled> Product Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$category->id==$product->category_id?"selected":""}}>{{$category->title}}</option>
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
                                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$product->title}}" required autocomplete="title" autofocus>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row mb-2 form-group">
                                            <label for="price" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Price') }}</label>

                                            <div class="col-md-10">
                                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$product->price}}" required autocomplete="price" autofocus>

                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>


                                        </div>




                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary d-flex justify-content-center ">
                                                    <i data-feather="save"> </i>
                                                    {{ __('Update') }}
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
