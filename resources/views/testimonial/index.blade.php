@extends('user-master')

@section('title', 'Testimonials')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Our Testimonials</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Our Testimonials</li>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Our Testimonials</h5>
                        <a href="{{ route('admin.clients_create')}}" class="btn btn-primary ms-auto">Add Testimonial</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table-bordered" id="basic-2">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Name</th>
                                        <th class="all">Position</th>
                                        <th class="all">Rating</th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($records as $item)
                                        <tr id="Item-{{$item->id}}">
                                            <td>{{$Sr++}}</td>
                                            <td> <img src="/storage/{{$item->image }}" class="img-fluid" style="height: 100px;"/></td>
                                            <td> {{$item->name }}</td>
                                            <td> {{$item->rating}}</td>
                                            <td>{{ date('d-m-Y',strtotime($item->created_at)) ?? ''}}</td>
                                            <td>
                                                <a href="{{url("admin/testimonials/".$item->id) }}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                    <i data-feather="eye"></i>
                                                </a>

                                                <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                                    <i data-feather="trash-2"></i>
                                                </a>
                                                <script>
                                                    $('#Delete-{{$item->id}}').click(function(){
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
                                                                $.ajaxSetup({
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    }
                                                                });

                                                                $.ajax({
                                                                    type:'DELETE',
                                                                    url:'{{url('admin/cms/clients/'.$item->id)}}',
                                                                    data:'_token = {{ @csrf_token() }}',
                                                                    success:function(data) {
                                                                        $("#Item-{{$item->id}}").hide();
                                                                    }
                                                                });

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
        </div>



        <script type="text/javascript">
            var session_layout = '{{ session()->get('layout') }}';
        </script>
@endsection

@section('script')

@endsection
