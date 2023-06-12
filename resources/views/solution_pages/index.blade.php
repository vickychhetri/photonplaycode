@extends('user-master')

@section('title', 'Manage Pages')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Manage Pages</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Pages</li>
@endsection

@section('content')
    <div class="container-fluid">



        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pages</th>                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @forelse ($pages as $page)
                                            <tr>
                                                <td>{{$page->id}}</td>
                                                <td>{{$page->title}}</td>
                                                <td>
                                                    <a href="{{route('admin.manage.solution.sub.page', $page->id)}}">
                                                        <i data-feather="eye"></i></a>
                                                </td>
                                            </tr>
                                        @empty

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
