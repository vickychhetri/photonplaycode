<section class="latest-wrapper pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                    <h2 class="fs-md-2 mt-3 ">Latest News</h2>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <p class="text-mutedd">
                            "Stay Up-to-Date on the Latest Innovations and Industry News in Transportation with Our
                            Latest News Section.
                            <br>
                            Check back regularly for the latest updates and insights!"
                        </p>
                        <a href="{{route('customer.blog')}}" class="btn btn-outline rounded-2">Load More</a>
                    </div>
                </div>
            </div>
            @foreach($blogs as $blog)
                    <?php
                    $image = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/media/'. $blog['featured_media'])->json();
                    ?>
                <div class="col-lg-4">
                    <div class="inner-cqategory mb-lg-0 mb-4">
                        <div class="">
                            <a href="{{route("customer.blog_show",$blog['slug'])}}"> <img
                                    data-src="{{$image['media_details']['sizes']['medium']['source_url'] ?? null}}" alt=""
                                    class="mb-4 category-image img-fluid w-100 lazyload"  > </a>
                        </div>
                        <div class="p-4">
                            <!-- <p class="btn-light">category</p> -->
                            <a href="{{route("customer.blog_show",$blog['slug'])}}" class="text-decoration-none"><p
                                    class="dollor-seat"> {{$blog['title']['rendered']}}
                                </p>
                            </a>
                            <p>
                                {!! Str::limit($blog['excerpt']['rendered'], 200)  !!} <a href="{{route("customer.blog_show",$blog['slug'])}}">Read
                                    More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
