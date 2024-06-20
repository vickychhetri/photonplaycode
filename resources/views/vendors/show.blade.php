@extends('user-master')

@section('title', 'Show Inquiry')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Vendor</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Vendor</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">View Vendor</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">


                            <hr/>
                            <div>
                                <table class="table w-100">
                                    <tr>
                                        <td> Country: <b> {{$record->country}} </b></td>
                                    <td> Name: <b>  {{$record->name}} </b></td>
                                     <td>Email: <b> {{$record->email}} </b></td>
                                        
                                    </tr>
                                    <tr>
                                    <td>Phone Number: <b>  {{$record->phone_number}} </b></td>
                                        <td colspan="2"> Inquiry Created: <b> {{date('d M, Y',strtotime($record->created_at))}}</b> </td>


                                    </tr>
                                </table>
                            </div>
                            <div class="mb-3 mt-3">
                              <b>Message</b>
                            </div>
                                <div class="mt-4 mb-4">
                                        {{$record->message}}
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->



@endsection

@section('script')

@endsection
