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
    <li class="breadcrumb-item active">Edit {{$record->title}}</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit - {{$record->title}}</h5>
                    </div>

                    <div class="card-body">


                        <!-- Section  -->
                        <section class="content-pages">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class='common-card'>
                                            <div class='mb-4'>
                                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                                     aria-label="breadcrumb">
                                                    <ol class="breadcrumb mb-0">
                                                        <li class="breadcrumb-item"><a href="#">Content</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">{{$record->title}}</li>
                                                    </ol>
                                                </nav>
                                            </div>


                                            <!--  Title  -->
                                            <div class='d-flex justify-content-sm-between align-items-sm-center gap-3 flex-column flex-sm-row'>
                                                <div>
                                                    <h4 class='m-0 lh-normal'>{{$record->title}}</h4>
                                                </div>
                                                <div class="d-flex">

                                                    <a href="{{route('admin.show_page_content_edit',$record->page_name)}}" class="btn btn-primary">
                                                        <i class="bx bx-edit fw-bold fs-5 align-bottom"></i>
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class='card-form-wrapper'>
                                                <div class="cover-image-wrapper">
                                                    <img src="{{asset('storage/'.$record->image)}}" class="img-fluid w-100" alt="banner-image">
                                                    <div class="page-content mt-4">
                                                        {!! $record->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


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

        @if (session()->has('error'))
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif

    </script>

@endsection
