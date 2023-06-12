@extends('user-master')

@section('title', 'Welcome to Photon Playa')

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
                    {{--    <div class="col-md-3 mb-3">--}}
                    {{--        <a href="#" class="btn btn-info w-100" > Product Information </a>--}}
                    {{--    </div>--}}
                    {{--    <div class="col-md-3 mb-3">--}}
                    {{--        <a href="#" class="btn btn-info w-100" >Specifications </a>--}}
                    {{--    </div>--}}
                    {{--    <div class="col-md-3 mb-3">--}}
                    {{--        <a href="#" class="btn btn-info w-100"  > Shipping </a>--}}
                    {{--    </div>--}}
                    {{--    <div class="col-md-3 mb-3">--}}
                    {{--        <a href="#" class="btn btn-info w-100"> Vat/Tax </a>--}}
                    {{--    </div>--}}
                    {{--</div>--}}
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 p-2">
                            <div class="border-2 shadow-lg p-4">

                                <div class="col-md-12 ">
                                    <h6> Product Information</h6>
                                </div>
                                <form method="POST" action="{{route('admin.pvms.product.store')}}">
                                    @csrf
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
