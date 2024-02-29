@extends('user-master')

@section('title', 'SEO Manage')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> SEO Manage </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">SEO Manage</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> SEO Manage </h5>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <table class="display w-100" id="basic-2"   >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Created at</th>
                                {{-- <th>Status </th> --}}
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$Sr++}}</td>
                                    <td>{{$item->page_name}}</td>
                                    <td>{{$item->title}}</td>

                                    <td>{{$item->created_at->format('d/m/Y')}}</td>
                                    <td>
                                        <a href="{{route('admin.manage_seo_edit_form',$item->id)}}" class="text-success p-1" data-toggle="tooltip" title="Edit">
                                            <i data-feather="edit-3"></i>
                                        </a>
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

@endsection
