@extends('user-master')

@section('title', 'Welcome to Photon Play')

@section('css')

@endsection

@section('style')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 25px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: background-color 0.4s;
            border-radius: 34px;
        }

        .slider::before {
            content: '';
            position: absolute;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: transform 0.4s;
        }

        input:checked + .slider {
            background-color: #4caf50;
        }

        input:checked + .slider::before {
            transform: translateX(25px);
        }
    </style>
@endsection

@section('breadcrumb-title')
    <h3>Edit Product</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item">Settings</li>
    <li class="breadcrumb-item active">Edit Product</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Product</h5>

                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 p-2">
                                <div class="border-2 shadow-lg p-4">

                                    <div class="col-md-12 ">
                                        <a href="/admin/product" > Back</a>
                                        <h6> Product Information</h6>
                                        <hr/>
                                    </div>
                                    <form method="POST" action="{{route('admin.product.update',$product->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3 form-group">
                                            <label for="category" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category') }}</label>

                                            <div class="col-md-10">
                                                <select id="category" name="category_id" class="form-select form-select" aria-label=".form-select-sm">
                                                    <option selected disabled> Product Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{$category->id==$product->category_id?"selected":""}}>{{$category->title}}</option>
                                                    @endforeach

                                                </select>

                                                @error('category_selected')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        @php
                                            $disable_category_for_multi_c_p=false;
                                                $config = \App\Models\MasterConfiguration::where('code',\App\Util\Configure::PRODUCT_CATEGORY_MULTI_NOT_REQUIRED)->first();
                                                if ($config) {
                                                    $value = $config->value;
                                                    if($value==$product->category_id){
                                                        $disable_category_for_multi_c_p=true;
                                                    }
                                                }
                                        @endphp
                                        @if(!$disable_category_for_multi_c_p)
                                            <div class="row mb-3 form-group">
                                                <label for="categories_linked" class="col-md-2 col-form-label text-md-end">
                                                    <span>* </span>{{ __('Categories') }}
                                                </label>

                                                @php
                                                    $categories_all = \App\Models\Category::where('id', '!=', $product->category_id)->get();

                                                    $selected_categories = json_decode($product->categories_linked, true) ?? [];
                                                @endphp

                                                <div class="col-md-10">
                                                    <select id="categories_linked"
                                                            class="form-control @error('categories_linked') is-invalid @enderror"
                                                            name="categories_linked[]"
                                                            multiple="multiple" >
                                                        @foreach($categories_all as $item)
                                                            <option value="{{ $item->id }}"
                                                                    @if(in_array($item->id, $selected_categories)) selected @endif>
                                                                {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('categories_linked')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3 form-group">
                                                <label for="products_linked" class="col-md-2 col-form-label text-md-end">
                                                    <span>* </span>{{ __('Link Product') }}
                                                </label>

                                                @php
                                                    $product_all = \App\Models\Product::where('id', '!=', $product->id)->get();

                                                    $selected_products = json_decode($product->products_linked, true) ?? [];
                                                @endphp

                                                <div class="col-md-10">
                                                    <select id="products_linked"
                                                            class="form-control @error('products_linked') is-invalid @enderror"
                                                            name="products_linked[]"
                                                            multiple="multiple" >
                                                        @foreach($product_all as $item)
                                                            <option value="{{ $item->id }}"
                                                                    @if(in_array($item->id, $selected_products)) selected @endif>
                                                                {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('products_linked')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif



                                        <div class="row mb-3 form-group">
                                            <label for="title" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Name') }}</label>

                                            <div class="col-md-10    ">
                                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$product->title}}" required autocomplete="title" autofocus>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="row mb-3 form-group">
                                            <label for="code" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Code') }}</label>
                                            <div class="col-md-10    ">
                                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{$product->code}}" required autocomplete="code" autofocus>
                                                @error('code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group">
                                            <label for="product_heading_text" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Label') }}</label>
                                            <div class="col-md-10">
                                                <input id="product_heading_text" type="text" class="form-control @error('product_heading_text') is-invalid @enderror" name="product_heading_text" value="{{$product->product_heading_text}}" required autocomplete="title" autofocus>

                                                @error('product_heading_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group">
                                            <label for="product_breadcrumb_text" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Breadcrumb') }}</label>
                                            <div class="col-md-10">
                                                <input id="product_breadcrumb_text" type="text" class="form-control @error('product_breadcrumb_text') is-invalid @enderror" name="product_breadcrumb_text" value="{{$product->product_breadcrumb_text}}" required autocomplete="title" autofocus>

                                                @error('product_breadcrumb_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 form-group">
                                            <label for="pdf_download_text" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('PDF Label') }}</label>
                                            <div class="col-md-10">
                                                <input id="pdf_download_text" type="text" class="form-control @error('pdf_download_text') is-invalid @enderror" name="pdf_download_text" value="{{$product->pdf_download_text}}" required autocomplete="title" autofocus>

                                                @error('pdf_download_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-3 form-group">
                                            <label for="shipping_text" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Shipping Text') }}</label>
                                            <div class="col-md-10">
                                                <input id="shipping_text" type="text" class="form-control @error('shipping_text') is-invalid @enderror" name="shipping_text" value="{{$product->shipping_text}}" required autocomplete="title" autofocus>

                                                @error('shipping_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row mb-3 form-group">
                                            <label for="slug" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Slug') }}</label>

                                            <div class="col-md-10    ">
                                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{$product->slug}}" required autocomplete="slug" autofocus>

                                                @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row mb-2 form-group">
                                            <label for="price" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Price') }}</label>

                                            <div class="col-md-10">
                                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$product->price}}" required autocomplete="price" autofocus>

                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>

                                        <div class="row mb-3 form-group">
                                            <label for="product_breadcrumb_text" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Sku Start range') }}</label>
                                            <div class="col-md-10">
                                                <input id="sku_start_range" type="number" class="form-control @error('sku_start_range') is-invalid @enderror" name="sku_start_range" value="{{$product->sku_start_range}}" required autocomplete="title" autofocus>

                                                @error('sku_start_range')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-2 form-group">
                                            <label for="shipping_type" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Shipping Type') }}</label>

                                            <div class="col-md-10">
                                                <select id="shipping_type" class="form-control @error('shipping_type') is-invalid @enderror" name="shipping_type" required>
                                                    <option value="1" {{ old('shipping_type', $product->shipping_type) == 1 ? 'selected' : '' }}>Free Shipping</option>
                                                    <option value="2" {{ old('shipping_type', $product->shipping_type) == 2 ? 'selected' : '' }}>Paid Shipping</option>
                                                </select>

                                                @error('shipping_type')
                                                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-2 form-group">
                                            <label for="shipping_fees_us" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Shipping Fees (US)') }}</label>

                                            <div class="col-md-10">
                                                <input id="shipping_fees_us" type="number" step="0.01" class="form-control @error('shipping_fees_us') is-invalid @enderror" name="shipping_fees_us" value="{{ old('shipping_fees_us', $product->shipping_fees_us) }}" required>

                                                @error('shipping_fees_us')
                                                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                                @enderror
                                            </div>
                                        </div>

{{--                                        <div class="row mb-2 form-group">--}}
{{--                                            <label for="shipping_fees_can" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Shipping Fees (Canada)') }}</label>--}}

{{--                                            <div class="col-md-10">--}}
{{--                                                <input id="shipping_fees_can" type="number" step="0.01" class="form-control @error('shipping_fees_can') is-invalid @enderror" name="shipping_fees_can" value="{{ old('shipping_fees_can', $product->shipping_fees_can) }}" required>--}}

{{--                                                @error('shipping_fees_can')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--            <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-2 form-group">--}}
{{--                                            <label for="free_shipping_label" class="col-md-2 col-form-label text-md-end">{{ __('Free Shipping Label') }}</label>--}}

{{--                                            <div class="col-md-10">--}}
{{--                                                <input id="free_shipping_label" type="text" class="form-control @error('free_shipping_label') is-invalid @enderror" name="free_shipping_label" value="{{ old('free_shipping_label', $product->free_shipping_label) }}">--}}

{{--                                                @error('free_shipping_label')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--            <strong>{{ $message }}</strong>--}}
{{--        </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-2 form-group">--}}
{{--                                            <label for="paid_shipping_label" class="col-md-2 col-form-label text-md-end">{{ __('Paid Shipping Label') }}</label>--}}

{{--                                            <div class="col-md-10">--}}
{{--                                                <input id="paid_shipping_label" type="text" class="form-control @error('paid_shipping_label') is-invalid @enderror" name="paid_shipping_label" value="{{ old('paid_shipping_label', $product->paid_shipping_label) }}">--}}

{{--                                                @error('paid_shipping_label')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-2 form-group">--}}
{{--                                            <label for="price_canada" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Price (Canada)') }}</label>--}}

{{--                                            <div class="col-md-10">--}}
{{--                                                <input id="price_canada" type="number" step="0.01" class="form-control @error('price_canada') is-invalid @enderror" name="price_canada" value="{{ old('price_canada', $product->price_canada) }}" required>--}}

{{--                                                @error('price_canada')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                        <strong>{{ $message }}</strong>--}}
{{--                                                    </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                            <div class="row mb-2 form-group">
                                            <label for="sku" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Category Heading') }}</label>

                                            <div class="col-md-10">
                                                <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{$product->sku}}" required autocomplete="sku" autofocus>

                                                @error('sku')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                            </div>


                                        </div>

                                        <div class="row mb-2 form-group">
                                            <label for="brochure" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Brochure') }}</label>

                                            <div class="col-md-7">
                                                <input id="brochure" type="file" class="form-control @error('brochure') is-invalid @enderror" name="brochure" value=""  autocomplete="brochure" autofocus>

                                                @error('brochure')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                @if(isset($product->brochure))
                                                <a href="{{asset('storage/'.$product->brochure)}}" class="btn btn-dark-gradien">Download</a>
                                                @endif
                                            </div>




                                        </div>

                                        <div class="row mb-2 form-group">
                                            <label for="cover_image" class="col-md-2 col-form-label text-md-end"><span>* </span>{{ __('Cover Image') }}</label>

                                            <div class="col-md-7">
                                                <input id="cover_image" type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" value=""  autocomplete="cover_image" autofocus>

                                                @error('cover_image')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                @if(isset($product->cover_image))
                                                <a href="{{asset('storage/'.$product->cover_image)}}" class="btn btn-dark-gradien">View</a>
                                                @endif
                                            </div>




                                        </div>

                                        <div class="row mb-2 form-group">
                                            <label for="price" class="col-md-2 col-form-label text-md-end">{{ __('Hide Price') }}</label>
                                            <div class="col-md-10 mt-1">
                                                <label class="switch">
                                                    <input name="is_price_hide" type="checkbox"
                                                           @if($product->is_price_hide == 1) checked @endif>
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary d-flex justify-content-center ">
                                                    <i data-feather="save"> </i>
                                                    {{ __('Update') }}
                                                </button>

                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Select2 CSS and JS (CDN) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Photon Play Systems',
                tabsize: 2,
                height: 200
            });

        });

            $(document).ready(function() {
            $('#categories_linked').select2({
                placeholder: "Select Categories"
            });
                $('#products_linked').select2({
                    placeholder: "Select Products"
                });
        });

    </script>
@endsection
