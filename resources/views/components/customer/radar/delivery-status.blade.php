
@if((!isset($status)) || $status=='order')
<div class="row justify-content-between">
    <div class="order-tracking completed">
        <span class="is-complete"></span>
        <p>Ordered  </p>
    </div>
    <div class="order-tracking  ">
        <span class="is-complete"></span>
        <p>Shipped </p>
    </div>
    <div class="order-tracking ">
        <span class="is-complete"></span>
        <p>Delivered</p>
    </div>
</div>
@elseif( $status=='shipped')
    <div class="row justify-content-between">
        <div class="order-tracking completed">
            <span class="is-complete"></span>
            <p>Ordered  </p>
        </div>
        <div class="order-tracking completed ">
            <span class="is-complete"></span>
            <p>Shipped </p>
        </div>
        <div class="order-tracking ">
            <span class="is-complete"></span>
            <p>Delivered</p>
        </div>
    </div>
@elseif( $status=='delivered')

    <div class="row justify-content-between">
        <div class="order-tracking completed">
            <span class="is-complete"></span>
            <p>Ordered  </p>
        </div>
        <div class="order-tracking completed ">
            <span class="is-complete"></span>
            <p>Shipped </p>
        </div>
        <div class="order-tracking completed ">
            <span class="is-complete"></span>
            <p>Delivered</p>
        </div>
    </div>
@else
<div class="bg-warning text-white">
    Status:: {{strtoupper($status)}}
</div>
@endif
