<style>
    /* Default styling for the radar item box */
    /*.radar-item-box {*/
    /*    */
    /*}*/

    /* Horizontal scrolling for mobile */
    @media (max-width: 767px) {
        .radar-scroll-container {
            display: flex;
            overflow-x: auto; /* Enable horizontal scrolling */
            -webkit-overflow-scrolling: touch; /* Smooth scrolling for iOS */
            gap: 10px; /* Add spacing between items */
        }

        .radar-scroll-container div {
            flex-shrink: 0; /* Prevent items from shrinking */
        }

        .radar-item-box img {
            max-width: 150px; /* Limit the size of the images */
            height: auto;
        }
    }
</style>

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
