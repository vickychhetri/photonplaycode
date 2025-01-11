@push('header_meta_content')
    <meta property="og:type" content="product.item"/>
@endpush
@include('customer.layouts.header')
<style>
    a {
        text-decoration: none;
    }

    .product.col-lg-3.col-md-4.col-sm-6.col-12.mb-4:hover {
        background-color: #f4f6f9;
    }
</style>
<!-- Our Product-start -->
<livewire:shop-product />

@include('customer.layout2.footer2')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>

</script>
</body>

</html>

