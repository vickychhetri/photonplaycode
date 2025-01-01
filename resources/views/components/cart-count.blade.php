<a href="{{route('customer.shopping.bag')}}" @if($total_count == 0) style="pointer-events: none" @endif>
    <img src="{{asset('assets\customer\images\add-to-cart-radar.png')}}" alt="Not Found" class="img-fluid me-5">
    @if($total_count > 0) <!-- Ensure $cartCount is available in your view -->
    <span style="
                                            position: absolute;
                                            top: -2px;
                                            right: 42px;
                                            background-color: #377fb4;
                                            color: #f3cfcf;
                                            border-radius: 50%;
                                            padding: 2px 8px;
                                            font-size: 12px;
                                            font-weight: bold;
                                        " id="cart_item_counts">{{ $total_count }}</span>
    @endif
</a>
