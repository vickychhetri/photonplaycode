@php
    use App\Models\ClientTestimonial;
    use Illuminate\Support\Facades\Cache;
     function getClientTestimonials() {
    $key = 'client_testimonials';
    if (Cache::has($key)) {
        $client_says = Cache::get($key);
    } else {
        $client_says = ClientTestimonial::latest()->take(10)->get();
        Cache::put($key, $client_says, now()->addMinutes(60*24*365));
    }
    return $client_says;
}
$client_says = getClientTestimonials();
@endphp


<section class="our-clints pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-lg-5">
                    <h2 class="fs-md-2 mt-3">Our Client Says</h2>
                    <p class="fs-6"> See What Our Satisfied Clients Have to Say About Our Innovative ITS Solutions</p>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row clint-wrapperr">
                    <!-- <div class=""> -->

                    @foreach($client_says->reverse() as $says)
                        <div class="col-lg-4 ">
                            <div class="  members-profile mx-3  h-100">
                                <div class="p-4 position-re lative  inner-max-width">
                                    <div class="qutess position-absolute top-0 translate-middle">
                                        {{--   Icon ""--}}
                                        {{--    <img src="#" alt="Not Found">--}}
                                    </div>
                                    <div class="d-flex">
                                        <img class="lazyload profile-placeholder rounded-circle cicles"
                                             data-src="{{asset('storage/'.$says->image)}}" alt="Not Found">
                                        <div class="ms-2 d-flex flex-column align-items-center justify-content-start">
                                            <div class="five-star text-left w-100">

                                                @for ($j = 1; $j <= 5; $j++)
                                                    @if ($j <= $says->rating)
                                                        <i class="bi bi-star-fill text-primary"></i>
                                                    @else
                                                        <i class="bi bi-star text-primary"></i>
                                                    @endif
                                                @endfor
                                                {{--                                                <img src="/assets/customer/images/fivestar.png" alt="Not Found">--}}
                                            </div>
                                            <p class="text-capitalize mb-0 fs-6 full-names">{{$says->name}}</p>
                                            <p class="mb-0">{{$says->position}}</p>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <p> {{ \Illuminate\Support\Str::limit($says->message, 500) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
