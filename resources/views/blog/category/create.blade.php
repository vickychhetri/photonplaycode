@extends('user-master')

@section('title', 'Create Blog Category')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Blog Category</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Blog Category</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Blog Category </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/admin/blog-categories') }}">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="category" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Blog Category') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') ?? $data->title ?? ''}}" required autocomplete="category" autofocus>

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
                                        <i data-feather="save"> </i>
                                        Save
                                    </button>
                                    <a href="{{url('admin/blog-categories')}}" class="btn btn-dark">
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
