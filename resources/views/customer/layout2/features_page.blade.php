<section class="sec-feature">
    <div class="container">
        <h2 class="fs-md-2 mt-3 text-center">Feature</h2>
        <div class="feature-list">
            <!-- <ul class=" m-0 p-0 "> -->
            <div class="d-lg-flex justify-content-between">
                <div class="row">
                    @foreach($page->features as $feature)
                        <div class="col-md-6 ">
                            <ul class="w-100 m-0 p-0 d-flex justify-content-center">
                                <li>
                                    <div class="content-feature" style="width: 300px;">
                                        <strong>{{ $feature->feature}}</strong>
                                        <span>{{$feature->description}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- </ul> -->
        </div>
    </div>
</section>
