@extends('user-master')

@section('title', 'Manage Vendors Listing')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Vendors Listing</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Vendors Listing</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Vendors</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Company Name</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($records as $value => $item)
                                    <tr id="Item-{{$item->id}}">
                                        <td>{{++$value}}</td>
                                        <td>{{ucfirst($item->name)}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone_number }}</td>
                                        <td>{{$item->company_name}}</td>
                                        <td>{{$item->country}}</td>
                                        <td>{{date('d M, Y',strtotime($item->created_at))}}</td>
                                        <td><a href="{{route('admin.vendor.show', $item->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
