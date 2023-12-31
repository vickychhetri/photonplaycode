@php
use App\Models\Client;
$clients = Client::get();
@endphp

<section class="{{Request::is('/') ||  Route::currentRouteName() === 'customer.about.us' ||Route::currentRouteName() === 'customer.contact.us'? 'our-clints-last':''}} ">
        <div class="mb-lg-5 text-center">
            <h3 class="fs-md-2 mt-3" style="font-size: 40px;">Our Clients</h3>
        </div>
        <div class="container">
            <div class="px-2">
                <div class="clints-content-branding mb-0 d-flex align-items-center justify-content-center">
                   @for($i=0;$i<2;$i++)
                    @forelse ($clients as $client)
                    <div>
                        <div class="px-2 branding-diss shadow-sm" id="{{$client->index}}">
                            <img data-src="{{asset('storage/'.$client->image)}}" class="lazyload d-block mx-auto image-client-logo" loading="lazy" alt="{{$client->name}}"/>
                        </div>
                    </div>
                    @empty
                    @endforelse
                    @endfor
                </div>
            </div>
        </div>
    </section>
