<div class="row mb-3">
    <div class="col-md-3">
            <a href="/admin/product" class="btn d-flex justify-content-center">
                <i data-feather="list"> </i>
                Product Listing
            </a>
    </div>
</div>


<div class="row">
    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product.edit',$pid)}}" class="btn btn-outline-{{$page==1?'success':'dark'}} w-100 align-items-center justify-content-center d-flex align-items-center" >
            <i data-feather="settings"> </i>
            Basic </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product_media_page',$pid)}}" class="btn btn-outline-{{$page==2?'success':'dark'}} w-100  d-flex align-items-center"  >
            <i data-feather="image"> </i>
            Media </a>
    </div>
    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product_pricing_page',$pid)}}" class="btn btn-outline-{{$page==3?'success':'dark'}} w-100  d-flex align-items-center">
            <i data-feather="dollar-sign"> </i>
            Pricing </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product_seo_page',$pid)}}" class="btn btn-outline-{{$page==4?'success':'dark'}} w-100  d-flex align-items-center"  >  <i data-feather="globe"> </i> SEO </a>
    </div>


    <div class="col-md-2 mb-3">
        <a href="{{route('admin.open_product_description_form',$pid)}}" class="btn btn-outline-{{$page==5?'success':'dark'}} w-100  d-flex align-items-center"  >  <i data-feather="align-left"> </i> Details </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.open_product_publish_form',$pid)}}" class="btn btn-outline-{{$page==6?'success':'dark'}} w-100  d-flex align-items-center"  >  <i data-feather="toggle-left"> </i> Publish </a>
    </div>

</div>
