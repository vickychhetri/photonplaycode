@include('customer.layouts.header')
<section class="overview">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                <x-customer.profile-sidebar />

                    <div class="col-lg-8  col-md-6 col-12">
                        <div class="overview-wrapper">
                            <h5 class="btn-light fs-5 py-3 ">HISTORY</h5>
                            @forelse ($orders as $order)
                            <div class="card-box border p-3">
                                <div class="delivers d-flex align-items-center">
                                    <img src="{{asset('assets\customer\images\delivery.png')}}" alt="Not Found" class="me-2">
                                    <div>
                                        <p class="text-grey mb-0">Order Number :  {{$order->order_number}}</p>
                                        <p class="text-grey mb-0">{{strtoupper($order->delivery_status??"Order Placed Successfully ")}}</p>
                                        <span class="text-grey">{{date('M-d-Y', strtotime($order->created_at))}}</span>
                                    </div>
                                </div>
                                @foreach($order->orderedProducts as $product)
                                <div class="d-flex align-items-center p-2 my-4 border">
                                    <div class="inner-card-wrapper me-3">
                                        <img src="{{asset('storage/'.$product->product->cover_image)}}" class="img-fluid" style="max-height: 100%;">
                                    </div>
                                    <div>
                                        <p class="text-uppercase mb-1">{{$product->product->title}}</p>
                                        <span class="d-block text-capitalize"><b>Price: </b>{{$product->product->price}}</span>
                                        <span class="d-block text-capitalize">{{$product->product->category->title}}</span>
                                        <span class="d-block text-capitalize">Color</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @empty

                            @endforelse
                        </div>
                        <div class="my-4">
                            {{$orders->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('customer.layouts.footer')
