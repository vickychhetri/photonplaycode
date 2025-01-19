<div>
    <section class="mt-0 pt-0">
        <div class="bg-dark-transparent-lighter p-md-5"
             style="background-image: url('https://www.photonplay.com/storage/image/banner%204.webp');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            z-index: 0;">
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
                background: url('https://www.photonplay.com/storage/image/banner%204.webp');
                background-size: cover;
                background-position: center;
                filter: blur(8px); z-index: -1;">
            </div>

            <div class="container py-4 text-center" style="position: relative; z-index: 1;">
                <h1 class="h1 py-2 mt-5 mb-0 mx-xl-5 px-xl-5 text-white text-uppercase">
                    <strong>RADAR SPEED SIGN </strong>
                </h1>
            </div>
        </div>


        <div class="bg-light text-center mb-4">
            <p class="h3 text-uppercase py-3 px-3">Browse Products</p>
        </div>
        <div class="container py-1">
            <div class="mb-5">
                <div class="row">
                    <div class="col-6 col-lg-auto order-lg-3">
                        <select class="form-control form-control-sm" wire:model.live="limit" id="limit">
                            @foreach($limit_data as $item)
                                <option value="{{$item}}">{{$item}} Products Per Page</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 col-lg-auto order-lg-4">
                        <select class="form-control form-control-sm" wire:model.live="sort" id="sort">
                            <option selected="" disabled>Sort</option>
                            @foreach($sorting_data as $value => $item)
                                <option value="{{ $value }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-none d-sm-block col-6 order-lg-2 col-lg text-right pt-3 pt-lg-0">
                        <div class="col-6 col-lg-auto order-lg-3">
                            <button wire:click="clearFilters" class="btn btn-sm btn-warning rounded">Clear Filters</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <aside class="col-md-4 col-lg-3 col-xxl-2">
                    <nav class="navbar navbar-expand-md navbar-light bg-white flex-md-column px-0 pb-0 p-md-0">
                        <span class="navbar-brand d-md-none mr-auto pb-2">Refine Your Results</span>
                        <a class="btn btn-outline-dark btn-sm mb-2 d-md-none collapsed" role="button" href="#"
                           data-toggle="collapse" data-target="#admin-navbar-sidebar"
                           aria-controls="admin-navbar-sidebar"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <strong><i class="fa fa-filter"></i> Expand<span
                                    class="d-none d-sm-inline"> Filters</span></strong>
                        </a>
                        <div class="navbar-collapse collapse w-100" id="admin-navbar-sidebar">
                            <div class="w-100">
                                <div class="card mb-3 w-100">
                                    <div class="card-body">
                                        <p class="h6 mb-3"><strong>Applied Filters</strong></p>
                                        <small class="text-muted"><em>No filters applied</em></small>
                                    </div>
                                </div>

                                <div x-data="{
                                            priceRange: @entangle('priceRange'),
                                            minPrice: {{ $minPrice }},
                                            maxPrice: {{ $maxPrice }},
                                            minRange: {{ $minPrice }},
                                            maxRange: {{ $maxPrice }},
                                            $init() {
                                                this.minPrice = this.priceRange[0];
                                                this.maxPrice = this.priceRange[1];
                                            }
                                        }" class="card mb-3 w-100">

                                    <div class="card-body">
                                        <p class="h6 mb-3"><strong>Price Range</strong></p>

                                        <small class="text-muted" x-show="minPrice === {{$minPrice}} && maxPrice === {{ $maxPrice }}"><em>No filters applied</em></small>
                                        <small class="text-muted" x-show="minPrice !== {{$minPrice}} || maxPrice !== {{ $maxPrice }}">
                                            <em>Range: $<span x-text="minPrice"></span> - $<span x-text="maxPrice"></span></em>
                                        </small>

                                        <div class="mt-3">

                                            <div class="range-slider">
                                                <input type="range"
                                                       x-model="minPrice"
                                                       x-bind:min="minRange"
                                                       x-bind:max="maxRange"
                                                       step="1"
                                                       class="form-range"
                                                       @input="@this.set('priceRange', [minPrice, maxPrice])" />

                                                <input type="range"
                                                       x-model="maxPrice"
                                                       x-bind:min="minRange"
                                                       x-bind:max="maxRange"
                                                       step="1"
                                                       class="form-range"
                                                       style="display: none"
                                                       @input="@this.set('priceRange', [minPrice, maxPrice])" />
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                    </nav>
                </aside>

                <div class="col-md-8 col-lg-9 col-xxl-10">
                    <div class="row">
{{--                        @for($i = 0; $i <= 2; $i++)--}}
                        @foreach ($productLists as $more_product)
                            <!-- Product Card -->
                            <div class="product col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                <article class="text-center">
                                    <figure class="card-figure position-relative">
                                        <div class="card-img-container">
                                            <a href="{{ route('customer.radar.sign', $more_product->slug) }}">
                                                <img class="img-fluid img-thumbnail-md lazyautosizes lazyloaded"
                                                     src="{{ url('storage') . '/' . ($more_product->cover_image ?? '/default.png') }}"
                                                     alt="{{ $more_product->title }}"
                                                     title="{{ $more_product->title }}">
                                            </a>

                                        </div>
                                    </figure>
                                    <div class="card-body pt-0">
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="{{ route('customer.radar.sign', $more_product->slug) }}"
                                                   class="text-dark">{{ $more_product->title }}</a>
                                            </strong>
                                        </h4>
                                        <div class="card-text">
                                            <span class="price price-non-sale price-without-tax">
                                                {{ session('currency_icon', '$') }}{{ number_format($more_product->price * session('exchange_rate', '1'), 2) }}
                                            </span>
                                        </div>
                                        <div class="brand-holder text-truncate">
                                            <a href="#!" class="link-faceless text-muted small">
                                                <span>{{ $more_product->category->title }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        @endforeach
{{--                        @endfor--}}
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md"></div>
                <div class="col-md">
                    <nav>
                        <ul class="pagination justify-content-center justify-content-md-end">
                            {{ $productLists->links('pagination::bootstrap-4') }}
                        </ul>
                    </nav>
                </div>
            </div>


            <!-- accessories -->
            <div class="bg-light text-center mb-4">
                <p class="h3 text-uppercase py-3 px-3">Browse Accessories</p>
            </div>

            <div class="row">
                <aside class="col-md-4 col-lg-3 col-xxl-2">
                    <nav class="navbar navbar-expand-md navbar-light bg-white flex-md-column px-0 pb-0 p-md-0">
                    </nav>
                </aside>
                <div class="col-md-8 col-lg-9 col-xxl-10">
                    <div class="row">
                        {{--                        @for($i = 0; $i <= 2; $i++)--}}
                        @foreach ($accessories as $more_product)
                            <!-- Product Card -->
                            <div class="product col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                <article class="text-center">
                                    <figure class="card-figure position-relative">
                                        <div class="card-img-container">
{{--                                            <a href="{{ route('customer.radar.sign', $more_product->slug) }}">--}}
                                                <img class="img-fluid img-thumbnail-md lazyautosizes lazyloaded"
                                                     src="{{ url('storage') . '/' . ($more_product->cover_image ?? '/default.png') }}"
                                                     alt="{{ $more_product->title }}"
                                                     title="{{ $more_product->title }}">
{{--                                            </a>--}}

                                        </div>
                                    </figure>
                                    <div class="card-body pt-0">
                                        <h4 class="card-title">
                                            <strong>
{{--                                                <a href="{{ route('customer.radar.sign', $more_product->slug) }}"--}}
{{--                                                   class="text-dark">{{ $more_product->title }}</a>--}}
                                                <span>{{ $more_product->title }}</span>
                                            </strong>
                                        </h4>
                                        <div class="card-text">
                                            <span class="price price-non-sale price-without-tax">
                                                {{ session('currency_icon', '$') }}{{ number_format($more_product->price * session('exchange_rate', '1'), 2) }}
                                            </span>
                                        </div>
                                        <div class="brand-holder text-truncate">
{{--                                            <a href="#!" class="link-faceless text-muted small">--}}
                                                <span>{{ $more_product->category->title }}</span>
{{--                                            </a>--}}
                                        </div>
                                    </div>
                                </article>
                            </div>

                        @endforeach
                        {{--                        @endfor--}}
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-md"></div>
                <div class="col-md">
                    <nav>
                        <ul class="pagination justify-content-center justify-content-md-end">
                            {{ $accessories->links('pagination::bootstrap-4') }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </section>
</div>
