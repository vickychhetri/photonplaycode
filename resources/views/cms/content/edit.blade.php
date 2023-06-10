@extends('user-master')

@section('title', 'Manage Content')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Content</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Edit About us</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit - About us</h5>
                    </div>

                    <div class="card-body">

                        <section class="content-pages">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class='common-card'>
                                            <div class='mb-4'>
                                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                                     aria-label="breadcrumb">
                                                    <ol class="breadcrumb mb-0">
                                                        <li class="breadcrumb-item"><a href="/">Management</a></li>
                                                        <li class="breadcrumb-item"><a href="/about-us">{{$record->title}}</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                            <!--  Title  -->
                                            <div class='mb-3 mb-md-4'>
                                                <div>
                                                    <h4 class='m-0 lh-normal'>Edit {{$record->title}}</h4>
                                                </div>
                                            </div>
                                            <div class='card-form-wrapper'>
                                                <form name="edit_profile" class="edit-profile-form" method="post" action="{{route('admin.content_store_update',$record->page_name)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="page_name" value="{{$record->page_name}}">
                                                    <div class='upload-image my-4 cover-image-wrapper'>
                                                        <img src="{{asset('storage/'.$record->image)}}"  alt="avataar"  class='img-fluid w-100' id="output" />
                                                        <div class="upload-image-field">
                                                            <input type="file" class="w-100 h-100 opacity-1 form-control" name="image" onchange="loadFile(event)"  />
                                                        </div>
                                                    </div>
                                                    <!-- description -->
                                                    <div class="mb-4">
                                                        <label for="name">Description</label>
                                                        <textarea id="summernote" name="description">{{$record->description}}</textarea>
                                                    </div>
                                                    <!-- Button -->
                                                    <button type="submit" class="btn btn-primary">
                                                        Save Changes
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <script>
                            @if (session()->has('success'))
                            Toastify({
                                text: "{{ session('success') }}",
                                duration: 3000,
                                className: "info",
                                destination: "https://github.com/apvarun/toastify-js",
                                newWindow: true,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                                },
                                onClick: function(){} // Callback after click
                            }).showToast();

                            @endif

                            @if (session()->has('error'))
                            Toastify({
                                text: "{{ session('error') }}",
                                duration: 3000,
                                className: "info",
                                destination: "https://github.com/apvarun/toastify-js",
                                newWindow: true,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "red",
                                    color:"white",
                                },
                                onClick: function(){} // Callback after click
                            }).showToast();

                            @endif

                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                output.onload = function() {
                                    URL.revokeObjectURL(output.src) // free memory
                                }
                            };
                        </script>

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
                height: 500
            });

        });
    </script>

@endsection
