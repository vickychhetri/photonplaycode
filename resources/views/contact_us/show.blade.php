@extends('user-master')

@section('title', 'Show Inquiry')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Contact us</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Contact Us</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">View Contact/Inquiry</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
<div class="d-flex justify-content-around">

    <h4> Subject: {{$record->subject}}</h4>
   <a href="{{route('admin.contact_us_change_status',$record->id)}}" class="btn btn-{{$record->status=="Open"?'danger':'success'}}"> {{$record->status=="Open"?"Closed Inquiry":"Open Inquiry"}}</a>
</div>

                            <hr/>
                            <div>
                                <table class="table w-100">
                                    <tr>
                                        <td> Country: <b> {{$record->country}} </b></td>
                                    <td> First Name: <b>  {{$record->first_name}} </b></td>
                                    <td> Last Name: <b> {{$record->last_name}} </b></td>
                                     <td>Email: <b> {{$record->email}} </b></td>
                                        <td>Phone Number: <b>  {{$record->phone_number}} </b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Inquiry Created: <b> {{$record->created_at}}</b> </td>
                                        <td colspan="2"> Last Updated: <b> {{$record->updated_at}}</b> </td>
                                        <td colspan="2"> Current Status: <b class=" text-{{$record->status=="Open"?'success':'danger'}}">  {{$record->status}}</b> </td>


                                    </tr>
                                </table>
                            </div>
                            <div class="mb-3 mt-3">
                              Inquiry Page:  <a href="{{$record->url}}"> {{$record->url}}</a>
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
