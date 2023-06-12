@extends('user-master')

@section('title', 'Page Specifications')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Model </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Create/Edit Model</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create/Edit Model </h5>
                    </div>
                    <div class="container">
                        <x-Admin.PageNavigator :page="4" :pid="$id"/>
                    </div>

                    <div class="card-body ">


                        <form method="POST" action="{{route('admin.manage.solution.update.single.image')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page_id" value="{{$id}}">
                            <div class="row mb-3 form-group  d-flex align-items-center">
                                <label for="brochure" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Brochure') }}</label>

                                <div class="col-md-3">
                                    <input type="file" name="brochure" class="form-control" >

                                    @error('brochure')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload PDF') }}
                                    </button>
                                </div>

                                <div class="col-md-4">
                                    <a href="{{asset("storage/".$brochure->brochure)}} " > Download </a>
                                </div>

                            </div>


                        </form>

                        <form method="POST" action="{{route('admin.manage.solution.update.multi.image')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page_id" value="{{$id}}">
                            <div class="row mb-3 form-group  d-flex align-items-center">
                                <label for="moreimage" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('More Images') }}</label>

                                <div class="col-md-6">
                                    <input  id="moreimage" type="file" name="images[]" class="form-control" multiple >

                                    @error('images')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload Images') }}
                                    </button>
                                </div>

                            </div>

                            {{--                                        /admin/product/delete/media/images/{id}--}}

                        </form>

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
                height: 500,
                // toolbar: [
                //     ['insert', ['picture']]
                // ],
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
            });
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
