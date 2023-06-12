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
                        <h5>Specifications</h5>
                    </div>
                    <div class="container">
                        <x-Admin.PageNavigator :page="2" :pid="$id"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <!-- All Client Table Start -->
     <div class="row">
        <div class="col-12">
                <div class="card-body">
                    <div class="dt-ext table-responsive">
                        <table class="display" id="basic-2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sub Pages<th>                                        <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($specs as $spec)
                                    <tr>
                                        <td>{{$spec->id}}</td>
                                        <td>{{$spec->spec}}</td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit(strip_tags($spec->description), 20, '...') }}
                                           </td>
                                        <td>
                                            <a href="{{route('admin.manage.solution.edit.specification.page', $spec->id)}}">
                                                <i data-feather="edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Client Table End -->
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
