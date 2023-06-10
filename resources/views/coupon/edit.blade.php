@extends('user-master')

@section('title', 'Edit Coupon')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Edit Coupon</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Edit Coupon</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Coupon Details</h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('admin.coupons.update',$coupon->id)}}">
                            @csrf
                            @method("PUT")
                            <div class="row mb-3 form-group">
                                <label for="coupon_name" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Coupon') }}</label>

                                <div class="col-md-6">
                                    <input id="coupon_name" type="text" class="form-control @error('coupon_name') is-invalid @enderror" name="coupon_name" value="{{$coupon->coupon_name}}" required autocomplete="coupon_name" placeholder="Photon50"   autofocus>

                                    @error('coupon_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="value" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Value') }}</label>

                                <div class="col-md-6">
                                    <input id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value" value="{{$coupon->value}}" required autocomplete="value" placeholder="$10 or 10%"  autofocus>

                                    @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="type" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Type') }}</label>

                                <div class="col-md-6">
                                    <select id="type" name="type" class="form-select form-select" aria-label=".form-select-sm">
                                        <option selected disabled>--Select Type--</option>
                                        <option value="1" {{$coupon->type==1?"selected":""}}>Fixed</option>
                                        <option value="2" {{$coupon->type==2?"selected":""}}>Percentage</option>
                                    </select>

                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="status" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <select id="status" name="status" class="form-select form-select" aria-label=".form-select-sm">
                                        <option selected disabled>--Select Type--</option>
                                        <option value="1" {{$coupon->status==1?"selected":""}}>Active</option>
                                        <option value="2" {{$coupon->status==2?"selected":""}}>Expired</option>
                                    </select>

                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3 form-group">
                                <label for="expiry_date" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Expiry Date') }}</label>

                                <div class="col-md-6">
                                    <input id="expiry_date" type="date" class="form-control @error('expiry_date') is-invalid @enderror" name="expiry_date" value="{{$coupon->expiry_date}}" required autocomplete="expiry_date" placeholder="expiry date"   autofocus>

                                    @error('expiry_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary ">
                                        <i data-feather="save"></i>
                                        {{ __('Add Coupon') }}
                                    </button>
                                    <a href="{{route('admin.coupons.index')}}" class="btn btn-dark">
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
