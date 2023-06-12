@extends('user-master')

@section('title', 'Db Backup')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Db Backup</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Db Backup</li>
{{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> DB Backup </h5>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <a href="{{route('admin.dbbackup') }}">
                        <div>

                            <h3 class="flex-column"><i data-feather="download"></i> Download</h3>
                        </div>
                        </a>
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
