@extends('user-master')

@section('title', 'Settings')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Settings</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Settings </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/settings') }}">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Homepage Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $data->title ?? ''}}" required autocomplete="name" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="description" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Homepage Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ old('description') ?? $data->description ?? ''}}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="sales_email" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Sales Email ') }}</label>

                                <div class="col-md-6">
                                    <input id="sales_email" type="text" class="form-control @error('sales_email') is-invalid @enderror" name="sales_email" value="{{ old('sales_email') ?? $data->sales_email ?? ''}}" required autocomplete="sales_email" autofocus>

                                    @error('sales_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="sales_phone" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Sales Phone ') }}</label>

                                <div class="col-md-6">
                                    <input id="sales_phone" type="text" class="form-control @error('sales_phone') is-invalid @enderror" name="sales_phone" value="{{ old('sales_phone') ?? $data->sales_phone ?? ''}}" required autocomplete="sales_phone" autofocus>

                                    @error('sales_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="support_email" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Support Email ') }}</label>

                                <div class="col-md-6">
                                    <input id="support_email" type="text" class="form-control @error('support_email') is-invalid @enderror" name="support_email" value="{{ old('support_email') ?? $data->support_email ?? ''}}" required autocomplete="support_email" autofocus>

                                    @error('support_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="support_phone" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Support Phone ') }}</label>

                                <div class="col-md-6">
                                    <input id="support_phone" type="text" class="form-control @error('support_phone') is-invalid @enderror" name="support_phone" value="{{ old('support_phone') ?? $data->support_phone ?? ''}}" required autocomplete="support_phone" autofocus>

                                    @error('support_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="company_location" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="company_location" type="text" class="form-control @error('company_location') is-invalid @enderror" name="company_location" value="{{ old('company_location') ?? $data->company_location ?? ''}}" required autocomplete="company_location" autofocus>

                                    @error('company_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="company_name" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control @error('name') is-invalid @enderror" name="company_name" value="{{ old('company_name') ?? $data->company_name ?? ''}}" required autocomplete="company_name" autofocus>

                                    @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="company_address" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Company Address') }}</label>

                                <div class="col-md-6">
                                    <input id="company_address" type="text" class="form-control @error('name') is-invalid @enderror" name="company_address" value="{{ old('company_address') ?? $data->company_address ?? ''}}" required autocomplete="company_address" autofocus>

                                    @error('company_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="company_phone" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Company Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="company_phone" type="text" class="form-control @error('company_phone') is-invalid @enderror" name="company_phone" value="{{ old('company_phone') ?? $data->company_phone ?? ''}}" required autocomplete="company_phone" autofocus>

                                    @error('company_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="company_email" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Company Email') }}</label>

                                <div class="col-md-6">
                                    <input id="company_email" type="text" class="form-control @error('company_email') is-invalid @enderror" name="company_email" value="{{ old('company_email') ?? $data->company_email ?? ''}}" required autocomplete="company_email" autofocus>

                                    @error('company_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="facebook" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Facebook') }}</label>

                                <div class="col-md-6">
                                    <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') ?? $data->facebook ?? ''}}" required autocomplete="facebook" autofocus>

                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="instagram" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Instagram') }}</label>

                                <div class="col-md-6">
                                    <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') ?? $data->instagram ?? ''}}" required autocomplete="instagram" autofocus>

                                    @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="twitter" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Twitter') }}</label>

                                <div class="col-md-6">
                                    <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') ?? $data->twitter ?? ''}}" required autocomplete="twitter" autofocus>

                                    @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="linkedin" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Linkedin') }}</label>

                                <div class="col-md-6">
                                    <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') ?? $data->linkedin ?? ''}}" required autocomplete="linkedin" autofocus>

                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="gst" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('GST(%)') }}</label>

                                <div class="col-md-6">
                                    <input id="gst" type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" value="{{ old('gst') ?? $data->gst ?? ''}}" required autocomplete="gst" autofocus>

                                    @error('gst')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="shipping_time" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Shipping Charges') }}</label>

                                <div class="col-md-6">
                                    <input id="shipping_time" type="text" class="form-control @error('shipping_time') is-invalid @enderror" name="shipping_time" value="{{ old('shipping_time') ?? $data->shipping_time ?? ''}}" required autocomplete="gst" autofocus>

                                    @error('shipping_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#eye_pass').click(function(){
            if ($('#password').attr('type') == 'text') {
                $('#password').attr('type', 'password');
                $(this).html('Show');
            } else {
                $('#password').attr('type', 'text');
                $(this).html('Hide');
            }
        });
        $('#eye_c_pass').click(function(){
            if ($('#password-confirm').attr('type') == 'text') {
                $('#password-confirm').attr('type', 'password');
                $(this).html('Show');
            } else {
                $('#password-confirm').attr('type', 'text');
                $(this).html('Hide');
            }
        });

    </script>
@endsection
