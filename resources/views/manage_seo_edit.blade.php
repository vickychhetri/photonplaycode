@extends('user-master')

@section('title', 'SEO Manage')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> SEO Manage Edit</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">SEO Manage Edit</li>
    {{--    <li class="breadcrumb-item active">{{Request::is('add-employee') ? 'Add':'Edit'}} User</li>--}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5> SEO Manage Edit </h5>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <form i="form-seo" action="{{route('admin.manage_seo_edit_store',$data->id)}}" method="post">
                            @csrf
                            <label for="input1" >Page name</label><br>
                            <input type="text" id="input1" name="page_name"  value="{{$data->page_name}}" class="form-control" readonly><br>
                            <label for="input2">Title</label><br>
                            <input type="text" id="input2" name="title"  value="{{$data->title}}"  class="form-control"><br>
                            <label for="input3">keywords</label><br>
                            <input type="text" id="input3" name="keyword"  value="{{$data->keyword}}"  class="form-control"><br>
                            <label for="textbox1">Description</label><br>
                            <textarea id="textbox1" name="description" rows="4" cols="50" class="form-control">{{$data->description}}</textarea><br>
                            <label for="textbox2">schema</label><br>
                            <textarea id="textbox2" name="schema" rows="4" cols="50"class="form-control">{{$data->schema}}</textarea><br><br>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
