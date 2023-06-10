    @extends('user-master')

    @section('title', 'Create Blog')

    @section('css')

    @endsection

    @section('style')

    @endsection

    @section('breadcrumb-title')
        <h3> Blog </h3>
    @endsection

    @section('breadcrumb-items')
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Blog </li>
        {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
    @endsection

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5> New Blog  </h5>
                        </div>

                        <div class="card-body ">
                            <form method="POST" action="{{ url('/admin/blogs') }}"  enctype="multipart/form-data" >
                                @csrf
                                <div class="row mb-3 form-group">
                                    <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Title') }}</label>

                                    <div class="col-md-10">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $data->title ?? ''}}" required autocomplete="title" autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 form-group">
                                    <label for="description" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Description') }}</label>

                                    <div class="col-md-10">
                                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ old('description') ?? $data->description ?? ''}}</textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3 form-group">
                                    <label for="keywords" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Keywords') }}</label>

                                    <div class="col-md-10">
{{--                                        <textarea id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" required autocomplete="keywords" data-role="tagsinput" autofocus>{{ old('keywords') ?? $data->keywords ?? ''}}</textarea>--}}
                                        <input
                                            id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" required autocomplete="keywords"
                                            class="form-control p-4"
                                            data-role="tagsinput"
                                        />
                                        @error('keywords')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3 form-group">
                                    <label for="author" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Author') }}</label>

                                    <div class="col-md-10">
                                        <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') ?? $data->author ?? ''}}" required autocomplete="author" autofocus>

                                        @error('author')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 form-group">
                                    <label for="image" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Image') }}</label>

                                    <div class="col-md-10">
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $data->image ?? ''}}" required autocomplete="image" autofocus>

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3 form-group">
                                    <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category') }}</label>

                                    <div class="col-md-10">

                                        <select id="category" name="category_selected" class="form-select form-select" aria-label=".form-select-sm">
                                            <option selected disabled>--Select Category--</option>
                                            @foreach($blog_categories as $b_cate)
                                                <option value="{{$b_cate->id}}"> {{$b_cate->category}}</option>
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
                                    <label for="summernote" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Editor') }}</label>

                                    <div class="col-md-10">
                                        <textarea id="summernote"  type="text" class="form-control @error('keywords') is-invalid @enderror" name="body" required autocomplete="body" autofocus>{{ old('body') ?? $data->body ?? ''}}</textarea>

                                        @error('body')
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
                                        <a href="{{url('admin/blogs')}}" class="btn btn-dark">
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

            $(document).ready(function() {
                $('#summernote').summernote(
                    {
                    placeholder: 'Hello Photon Play Systems',
                    tabsize: 2,
                    height: 500,
                    callbacks: {
                        onImageUpload: function(files) {
                            var formData = new FormData();
                            formData.append('photo', files[0]);
                            formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token to the form data
                            $.ajax({
                                url: '{{ route('upload-photo-summernote') }}',
                                method: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    $('#summernote').summernote('insertImage', data.url);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.error(textStatus + ': ' + errorThrown);
                                }
                            });
                        }
                    }
                }

                );
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

        <script>
            $(function () {
                $('input')
                    .on('change', function (event) {
                        var $element = $(event.target);
                        var $container = $element.closest('.example');

                        if (!$element.data('tagsinput')) return;

                        var val = $element.val();
                        if (val === null) val = 'null';
                        var items = $element.tagsinput('items');

                        $('code', $('pre.val', $container)).html(
                            $.isArray(val)
                                ? JSON.stringify(val)
                                : '"' + val.replace('"', '\\"') + '"'
                        );
                        $('code', $('pre.items', $container)).html(
                            JSON.stringify($element.tagsinput('items'))
                        );
                    })
                    .trigger('change');
            });
        </script>

    @endsection
