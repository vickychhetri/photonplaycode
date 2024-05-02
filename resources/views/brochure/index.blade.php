@extends('user-master')

@section('title', 'Manage Brochures Listing')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Brochures Listing</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Brochures Listing</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Brochures Downloads</h5>
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
                                    <th>Pdf</th>
                                    <th>Downloaded At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($records as $value => $item)
                                    <tr id="Item-{{$item->id}}">
                                        <td>{{++$value}}</td>
                                        <td>{{ucfirst($item->name)}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone_number }}</td>
                                        <td>{{$item->pdf}}</td>
                                        <td>{{date('d M, Y',strtotime($item->created_at))}}</td>
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
