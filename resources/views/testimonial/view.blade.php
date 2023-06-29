@extends('user-master')

@section('title', 'View testimonial')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>View Testimonial</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Testimonial</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Testimonial Details</h5>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <table class="table table-bordered w-50">
                            <tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <th>
                                    {{$record->name ?? ''}}
                                </th>
                            </tr>

                            <tr>
                            <tr>
                                <td>
                                    Position
                                </td>
                                <th>
                                    {{$record->position ?? ''}}
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Image/Icon
                                </td>
                                <th>
                                    @if(isset($record->image))
                                        <img src="{{asset('storage/'.$record->image)}}" style="height: 70px;"/>
                                    @endif
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Rating
                                </td>
                                <th>
                                    {{$record->rating ?? ''}}
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Message
                                </td>
                                <th>
                                    {{$record->message ?? ''}}
                                </th>
                            </tr>


                            <tr>
                                <td>
                                    Edit
                                </td>
                                <th>
                                    <a href="{{ url('admin/testimonials/'.$record->id.'/edit')}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                        <i data-feather="edit"></i>
                                    </a>
                                </th>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
