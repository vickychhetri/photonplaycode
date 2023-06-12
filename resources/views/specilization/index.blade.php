@extends('user-master')

@section('title', 'Manage Specilization')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Specilization</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Specifications</li>
@endsection

@section('content')
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                    <h5 class="card-title">All Specifications</h5>
                    <a href="{{route('admin.specilization.create')}}" class="btn btn-primary ms-auto d-flex align-items-center">
                        <i data-feather="plus-circle"> </i>
                        Add Specifications</a>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Specilization</th>                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($specilizations as $specilization)
                                 <tr>
                                        <td>{{$Sr++}}</td>
                                         <td>
                                             <img src="{{asset('storage/'.$specilization->image)}}" style="max-height: 60px;"/>
                                         </td>
                                        <td>{{$specilization->title}}</td>
                                        <td>
                                            <a href="{{route('admin.specilization-option.show', $specilization->id)}}">
                                                <i data-feather="eye"></i></a>

                                            <a href="{{route('admin.specilization.edit', $specilization->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                <i data-feather="edit"></i>
                                            </a>

                                            <a id="Delete-{{$specilization->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                <i data-feather="trash-2"></i>
                                            </a>
                                            <script>
                                                $('#Delete-{{$specilization->id}}').click(function(){
                                                    console.log("hello");
                                                    Swal.fire({
                                                    title: 'Are you sure?',
                                                    text: "You won't be able to revert this!",
                                                    icon: 'question',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        window.location.href = "{{ url('admin/specilization/delete/'.$specilization->id)}}";
                                                    }
                                                    });
                                                });
                                            </script>
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






    @endsection

    @section('script')

    @endsection
