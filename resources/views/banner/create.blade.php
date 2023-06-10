@extends('user-master')

@section('title', 'Banner Add')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Banner</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Banner</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Banner </h5>
                    </div>
    <div class="w-100 d-flex justify-content-center">

        <img src="{{asset('assets/images/banner.webp')}}" alt="Image banner" id="output"  style="height:300px;max-height:300px;" class="w-75 m-2"/>

        </div>

                    <div class="card-body">
                        <form method="POST" action="{{route("admin.banners_store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 form-group">
                                <label for="type" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Type') }}</label>

                                <div class="col-md-6">
                                    <select id="type"   class="form-select @error('type') is-invalid @enderror" name="type" required>
                                        <option value="" selected disabled> --Select Type-- </option>
                                        <option value="1">Homepage</option>
                                        <option value="2">Key Project</option>
                                        <option value="3">Radar Speed Sign</option>
                                        <option value="4">Portable Variable Message Sign</option>
                                    </select>

                                    @error('sub_tagline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3 form-group">
                                <label for="tagline" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Tagline') }}</label>

                                <div class="col-md-6">
                                    <input id="tagline" type="text" class="form-control @error('tagline') is-invalid @enderror" name="tagline" value="{{ old('tagline') ?? $data->tagline ?? ''}}"  autocomplete="tagline" required autofocus>

                                    @error('tagline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="sub_tagline" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Sub Tagline') }}</label>

                                <div class="col-md-6">
                                    <input id="tagline" type="text" class="form-control @error('sub_tagline') is-invalid @enderror" name="sub_tagline" value="{{ old('sub_tagline') ?? $data->sub_tagline ?? ''}}"  autocomplete="sub_tagline"  autofocus>

                                    @error('sub_tagline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="row mb-3 form-group">
                                <label for="image" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Clients') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $data->image ?? ''}}" required autocomplete="image" onchange="loadFile(event)"   autofocus>

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3 form-group">
                                <label for="order" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('order') }}</label>

                                <div class="col-md-6">
                                    <input id="order" type="text" class="form-control @error('order') is-invalid @enderror" name="order" value="{{ old('order') ?? $data->order ?? ''}}"  autocomplete="order" autofocus>

                                    @error('order')
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
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection
