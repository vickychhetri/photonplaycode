<a href="{{route('customer.shopping.bag')}}" @if($total_count == 0) style="pointer-events: none" @endif>
    <img src="{{asset('assets\images\cart.png')}}" style="height: 50px;" alt="Not Found" class="img-fluid me-5">
    @if($total_count > 0) <!-- Ensure $cartCount is available in your view -->
    <span style="
                                            position: absolute;
                                            top: 1px;
                                            right: 42px;
                                            background-color: red;
                                            color: white;
                                            border-radius: 50%;
                                            padding: 2px 10px;
                                            font-size: 12px;
                                            font-weight: bold;
                                        " id="cart_item_counts">{{ $total_count }}</span>
    @endif
</a>
