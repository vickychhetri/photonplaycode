@extends('user-master')

@section('title', 'Add Specilization Option')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Add Specilization Option - <b>{{$specilization->title}}</b></h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Add Specilization Option</li>
@endsection

@section('content')
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.specilization-option.store')}}">
                            @csrf
                            <input type="hidden" name="specilization_id" value="{{$specilization->id}}">
                            <div class="row mb-3 form-group">
                                <label for="title" class="col-md-4 col-form-label text-md-end"><span>* </span>{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="option" type="text" class="form-control @error('option') is-invalid @enderror" name="option" value="{{ old('option') }}" required autocomplete="option" autofocus>

                                    @error('option')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Option') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Specilization Option</th>                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @forelse ($options as $option)
                                    <tr>
                                    <td>{{$option->id}}</td>
                                    <td>{{$option->option}}</td>
                                    <td>
                                        <a href="{{route('admin.specilization-option.edit', $option->id)}}" class="text-warning p-1" data-toggle="tooltip" title="Edit">
                                            <i data-feather="edit"></i>
                                        </a>

                                        <a id="Delete-{{$option->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                        <script>
                                            $('#Delete-{{$option->id}}').click(function(){
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
                                                    window.location.href = "{{ url('admin/specilization-option/delete/'.$option->id)}}";
                                                }
                                                });
                                            });
                                        </script>
                                    </td>
                                </tr>
                                    @empty
                                    <td></td>
                                    <td>No options currently</td>
                                    <td></td>
                                    @endforelse


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
