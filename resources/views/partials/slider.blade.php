

<!-- Container for images -->
<div class="radar-scroll-container" wire:ignore>
    @foreach($product->images as $im_g)
        <div>
            <div class="radar-item-box" style="" wire:ignore>
                <img src="{{ asset('storage/thumbnail/' . $im_g->image) }}" class="img-fluid"
                     alt="{{ $product->title }}" wire:ignore>
            </div>
        </div>
    @endforeach
</div>
