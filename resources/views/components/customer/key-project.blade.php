<section class="key-project pb-0 key-wrap" style="margin-top: 50px;">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="text-center mb-lg-5">
                <h2 class="fs-md-2 mt-3">Key Projects</h2>
                <p class="fs-6">Our Key Projects Across the Globe - Discover How Our Innovative Solutions are Changing the Game!</p>
            </div>
        </div>
    </div>
    <div class="key-slider mb-0">
        @foreach($banners as $banner)
            <div>
                <img src="{{asset('storage/'.$banner->image)}}" alt="{{$banner->tagline}}" class="img-fluid w-100 h-100 slide-images-key">
            </div>
        @endforeach



    </div>
</section>
