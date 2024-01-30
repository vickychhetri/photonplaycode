@foreach($product_images as $img)
<div class="col-md-3 m-3" id="prodImg-{{$img->id}}">
    <div style="height: 300px;width: 300px;" class="border position-relative ">
        <a href="#" onclick="deleteImg({{$img->id}})" class="position-absolute text-danger border p-1 m-1" style="right: 10px;"> <b> X </b> </a>
        <img src="{{asset('storage/'.$img->image)}}" class="w-100 h-100 " />
    </div>
</div>
@endforeach