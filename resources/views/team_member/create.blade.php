@extends('user-master')

@section('title', 'Add New Team Member')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Our Team Member</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Our Team Member</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Team Member </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route("admin.team_member_store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $data->name ?? ''}}"  autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 form-group">
                                <label for="image" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Clients') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $data->image ?? ''}}"  autocomplete="image" autofocus>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="detail" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Detail') }}</label>

                                <div class="col-md-6">
                                    <input id="detail" type="text" class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{ old('detail') ?? $data->detail ?? ''}}"  autocomplete="detail" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="facebook" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Facebook') }}</label>

                                <div class="col-md-6">
                                    <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') ?? $data->facebook ?? ''}}"  autocomplete="facebook" autofocus>

                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="linkedin" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Linkedin') }}</label>

                                <div class="col-md-6">
                                    <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') ?? $data->linkedin ?? ''}}"  autocomplete="linkedin" autofocus>

                                    @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="twitter" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Twitter') }}</label>

                                <div class="col-md-6">
                                    <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') ?? $data->twitter ?? ''}}"  autocomplete="twitter" autofocus>

                                    @error('twitter')
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
                                    <a href="{{route('admin.team_member_index')}}" class="btn btn-dark">
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
