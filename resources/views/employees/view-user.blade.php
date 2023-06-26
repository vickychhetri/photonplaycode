@extends('user-master')

@section('title', ' Manage Employees')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>View User</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">View User</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>User Details</h5>
                </div>

                <div class="card-body d-flex justify-content-center">
                    <table class="table table-bordered w-50">
                        <tr>
                            <tr>
                            <td>
                                Name
                            </td>
                            <th>
                                {{$employee->name ?? ''}}
                            </th>
                            </tr>

                        <tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <th>
                                {{$employee->email ?? ''}}
                            </th>
                        </tr>

                        <tr>
                            <td>
                                Phone
                            </td>
                            <th>
                                {{$employee->phone_number ?? ''}}
                            </th>
                        </tr>

                        <tr>
                            <td>
                                Blocked
                            </td>
                            <th>
                                <a href="{{route('admin.user.block',$employee->id)}}" class="btn {{$employee->is_block?'btn-success':'btn-danger'}}">{{$employee->is_block?'Unblock':'Block'}} </a>

                            </th>
                        </tr>

                        <tr>
                            <td>
                                Edit
                            </td>
                            <th>
                                <a href="{{ url('admin/edit-employee/'.$employee->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
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

<script>
    $('#eye_pass').click(function(){
        if ($('#password').attr('type') == 'text') {
            $('#password').attr('type', 'password');
            $(this).html('Show');
        } else {
            $('#password').attr('type', 'text');
            $(this).html('Hide');
        }
    });
    $('#eye_c_pass').click(function(){
        if ($('#password-confirm').attr('type') == 'text') {
            $('#password-confirm').attr('type', 'password');
            $(this).html('Show');
        } else {
            $('#password-confirm').attr('type', 'text');
            $(this).html('Hide');
        }
    });

</script>
@endsection
