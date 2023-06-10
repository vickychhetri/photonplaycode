@extends('user-master')

@section('title', 'Welcome To Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Banner</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Banners</li>
@endsection

@section('content')

    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Banner</h5>
                        <a href="{{ route('admin.banners_create')}}" class="btn btn-primary ms-auto">Add New Banner</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div class="dt-ext table-responsive">
                                <table class="display table-bordered w-100" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th class="all">#</th>
                                        <th class="all">Type </th>
                                        <th class="all">Image </th>
                                        <th class="all">Tagline </th>
                                        <th class="all">Sub Tagline </th>
                                        <th class="all">Order </th>
                                        <th class="all">Created</th>
                                        <th class="all">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($records as $item)
                                        <tr id="Item-{{$item->id}}">
                                            <td>{{$Sr++}}</td>
                                            <td>
                                                <p class="p-2 m-2">
                                                @if($item->type==1)
                                                Homepage
                                                @elseif($item->type==2)
                                                    Key Projects
                                                @elseif($item->type==3)
                                                        Radar Speed Sign
                                                @elseif($item->type==4)
                                                        Portable Variable Message Sign
                                                @endif
                                                </p>

                                            </td>
                                            <td>
                                                <img src="/storage/{{$item->image }}" class="img-fluid p-1 m-2" style="height: 100px;width: 200px;"/></td>

                                            <td>{{ $item->tagline?? '-'}}</td>
                                            <td>{{  $item->sub_tagline?? '-'}}</td>
                                            <td>{{ $item->order?? '0'}}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td>
                                                <a href="{{route("admin.banners_edit",$item->id) }}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                                    <i data-feather="edit"></i>
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
                                                                    url:'{{route('admin.banners_delete',$item->id)}}',
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
