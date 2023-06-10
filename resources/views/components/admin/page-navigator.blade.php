<div class="row mb-3 p-2">
    <div class="col-md-3">
        <a href="/admin/manage-pages" class="btn d-flex justify-content-center">
            <i data-feather="list"> </i>
            Page Listing
        </a>
    </div>
</div>


<div class="row">
    <div class="col-md-2 mb-3">
        <a href="{{route('admin.manage.solution.create.sub.page',$pid)}}" class="btn btn-outline-{{$page==1?'success':'dark'}} w-100 align-items-center justify-content-center d-flex align-items-center" >
            <i data-feather="settings"> </i>
            Basic </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.manage.solution.create.specification.page',$pid)}}" class="btn btn-outline-{{$page==2?'success':'dark'}} w-100  d-flex align-items-center"  >
            <i data-feather="toggle-left"> </i>
            Specification </a>
    </div>


    <div class="col-md-2 mb-3">
        <a href="{{route('admin.manage.solution.create.features.page',$pid)}}" class="btn btn-outline-{{$page==3?'success':'dark'}} w-100  d-flex align-items-center"  >  <i data-feather="align-left"> </i> Features </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.manage.solution.create.images.page',$pid)}}" class="btn btn-outline-{{$page==4?'success':'dark'}} w-100  d-flex align-items-center"  >
            <i data-feather="image"> </i>
            Images </a>
    </div>
    <div class="col-md-2 mb-3">
        <a href="{{route('admin.manage.solution.create.gallery.page',$pid)}}" class="btn btn-outline-{{$page==5?'success':'dark'}} w-100  d-flex align-items-center"  >  <i data-feather="toggle-left"> </i> Gallery </a>
    </div>

</div>
