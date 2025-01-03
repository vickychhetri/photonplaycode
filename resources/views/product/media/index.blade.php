@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')

@endsection

@section('breadcrumb-title')
<h3>Media</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Media</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Media</h5>
                    <hr />
                    <x-Product.HeaderMenu :page="2" :pid="$product->id" />
                </div>

                <div class="card-body">
                    <div class="row">


                        <div class="col-md-12 p-2">
                            <div class="border-2 shadow-lg p-4">

                                <div class="col-md-12 mt-3">
                                    <h6> Product Media</h6>
                                </div>
                                <form method="POST" action="{{route('admin.product_media_store')}}" enctype="multipart/form-data">
                                <!-- <form enctype="multipart/form-data"> -->
                                <div class="col-md-6 mt-3">
                                    <select name="color" id="dropDownIdColor" class="form-select" required>
                                        @foreach(\App\Models\ProductImage::COLOR as $color)
                                            <option value="{{$color}}"> {{ucfirst($color)}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr />
                                
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <div class="row mb-3 form-group  d-flex align-items-center">
                                        <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Solar Image') }}</label>

                                        <div class="col-md-3">
                                            <input type="file" name="solar_image" class="form-control">

                                            @error('category_selected')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Upload Solar Image') }}
                                            </button>
                                        </div>

                                        <div class="col-md-4">
                                            <div style="height: 300px;width: 300px;" class="border d-flex align-items-center justify-content-center">
                                                @if(isset($product->solar_image))
                                                <img src="{{asset('storage/'.$product->solar_image)}}" class="w-100 h-100" />
                                                @else
                                                <p> No Image uploaded yet</p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>


                                </form>

                                <form method="POST" action="{{route('admin.product_media_store_images')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{\App\Models\ProductImage::COLOR[0]}}" name="color" id="colorMultipleImages">
                                    <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                                    <div class="row mb-3 form-group  d-flex align-items-center">
                                        <label for="moreimage" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('More Images') }}</label>

                                        <div class="col-md-6">
                                            <input id="moreimage" type="file" name="images[]" class="form-control" multiple>

                                            @error('images')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Upload Images') }}
                                            </button>
                                        </div>
                                    <div id="prodImg-gallery" class="row">
                                        @include('partials.pro_gallery')
                                    </div>
                                    </div>

                                    {{-- /admin/product/delete/media/images/{id}--}}

                                </form>

                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {
    
    $("#dropDownIdColor").change (function () {  
        var color = $(this).children("option:selected").val();
        var id = $('#product_id').val();
        $("#colorMultipleImages").val(color);

        $.ajax({
        url: "/product/" + id + "/edit/media-ajax",
        type: "GET",
        data: {'id': id, 'color': color},
        success: function(response) {
            $('#prodImg-gallery').html(response)
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });


    });  


});


    function deleteImg(id) {
        console.log(id)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(async (result) => {
            if (result.isConfirmed) {
                const res = await fetch(`/admin/product/delete/media/images/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })

                const deleteRes = await res.json()

                if (deleteRes.isDeleted) {
                    document.getElementById(`prodImg-${id}`).remove()


                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            }
        })
    }
</script>
@endsection