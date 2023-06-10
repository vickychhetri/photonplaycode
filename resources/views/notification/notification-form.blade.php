@extends('user-master')

@section('title', 'Notifications')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Notifications </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Notifications </li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> New Notifications  </h5>
                    </div>
                    @if(Session::get('notification_sent'))
                        <script>
                            Swal.fire(
                                'Notifications!',
                                'Email notifications sent!',
                                'success'
                            )
                        </script>
                    @endif

                    <div class="card-body ">
                        <form method="POST" action="{{ route('admin.send_email_notification') }}"  enctype="multipart/form-data" >
                            @csrf


                            <div class="row mb-3 form-group">
                                <label for="subject" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Type') }}</label>
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" onclick="remove_seleted_user()" name="mode" id="allusers">
                                            <label class="form-check-label" for="allusers">
                                                All Users
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mode" id="selectedusers"  onclick="load_emails()" >
                                            <label class="form-check-label" for="selectedusers">
                                                Selected Users
                                            </label>
                                        </div>
                                    </div>
                            </div>

                            <div class="row mb-3 form-group justify-content-end" id="show_all_users">
                                <label for="selectusers_multi" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Select Users') }}</label>

                                <div class="col-md-10">
                                    <input type="text" placeholder="Search emails" class="form-control" onkeyup="load_emails(this)"/>
                                    <select id="selectusers_multi" name="mySelect[]" class="form-select form-select" onchange="onSelectedKey(this)" multiple>
                                        <option class="text-center">No Data Found</option>
                                    </select>
                                    @error('selectusers_multi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-10  d-flex  mt-2 flex-wrap" id="selectedUserEmail">
                                </div>

                            </div>

                            <div class="row mb-3 form-group">
                                <label for="subject" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Subject') }}</label>

                                <div class="col-md-10">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') ?? $data->subject ?? ''}}" required autocomplete="subject" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="summernote" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Editor') }}</label>

                                <div class="col-md-10">
                                    <textarea id="summernote"  type="text" class="form-control @error('keywords') is-invalid @enderror" name="body" required autocomplete="body" autofocus>{{ old('body') ?? $data->body ?? ''}}</textarea>

                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i data-feather="send"> </i>
                                        Send
                                    </button>
                                    <a href="{{url('admin/blogs')}}" class="btn btn-dark">
                                        <i data-feather="corner-down-right"> </i>
                                        Return Back
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
