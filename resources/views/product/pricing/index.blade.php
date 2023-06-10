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
                        <x-Product.HeaderMenu :page="3" :pid="$product->id"/>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Pricing</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="{{route('admin.product_pricing_store')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="cost_price" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Cost Price') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="cost_price" class="form-control" placeholder="$$$" value="{{ old('cost_price') ??  $product_price->cost_price ?? ''}}" >

                                                @error('cost_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

{{--                                        <div class="row mb-3 form-group  d-flex align-items-center">--}}
{{--                                            <label for="sale_price" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Sale Price') }}</label>--}}

{{--                                            <div class="col-md-8">--}}
{{--                                                <input type="text" name="sale_price" class="form-control" placeholder="$$$" value="{{ old('sale_price') ??  $product_price->sale_price ?? ''}}" >--}}

{{--                                                @error('sale_price')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}



                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="discount" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Discount') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="discount" class="form-control" placeholder="%" value="{{ old('discount') ??  $product_price->discount ?? ''}}">

                                                @error('discount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="price_type_set" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Pricing Type') }}</label>

                                            <div class="col-md-8">
                                                <select  name="price_type_set" class="form-select" >
                                                    <option selected disabled>--Select Pricing Type--</option>

                                                    @if($product_price)
                                                        <option value="normal" {{$product_price->price_type_set=="normal"?'selected':''}}> Normal </option>
                                                        <option value="sale"  {{$product_price->price_type_set=="sale"?'selected':''}}> Sale </option>
                                                    @else
                                                        <option value="normal"> Normal </option>
                                                        <option value="sale"> Sale </option>
                                                    @endif
                                                </select>

                                                @error('price_type_set')
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
                            <div class="col-md-6 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <h6> Product Quantity</h6>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="{{route('admin.open_quantity_store')}}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}"/>

                                        <div class="row mb-3 form-group  d-flex align-items-center">
                                            <label for="quantity" class="col-md-3 col-form-label text-md-end"><span>* </span>{{ __('Quantity') }}</label>

                                            <div class="col-md-8">
                                                <input type="text" name="quantity" class="form-control" placeholder="500" value="{{ old('quantity') ??  $product_price->quantity ?? ''}}" >

                                                @error('cost_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row ">
                                            <div class="col-md-12 d-flex justify-content-center ">
                                                <button type="submit" class="btn btn-primary d-flex justify-content-center  align-items-center">
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
<script>
    @if (session()->has('success'))
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500
    })
    @endif

</script>
@endsection
