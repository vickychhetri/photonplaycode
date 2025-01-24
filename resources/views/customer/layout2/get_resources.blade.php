<style>
    .resource-card {
        background-color: rgba(128, 128, 128, 0.2); /* Light gray with transparency */
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .resource-card img {
        width: 50px;
        margin-bottom: 10px;
    }
    .resource-card a {
        text-decoration: none;
        color: #007bff;
    }
    .resource-card a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .resource-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            padding: 10px;
        }
        .resource-card img {
            width: 40px;
            margin-right: 10px;
        }
        .resource-card p {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
            flex-grow: 1;
        }
        .resource-card a {
            font-size: 12px;
        }
        .resources_title {
            text-align: center;
        }
    }

</style>
<section class="resources-placeholder mt-0 pb-0 pt-1 mb-0" id="" >
    <div class="container my-5">
        <h3 class="mb-4 resources_title">Resources</h3>
        <div class="row g-4">
                @foreach($product->product_resources as $item)

                <div class="col-md-4">
                    <div class="resource-card">
                        <img src="{{asset("assets/images/PDF_file_icon.svg")}}" alt="{{$item->filename}}">
                        <p class="mb-2">{{strtoupper($item->filename)}}</p>

                        <a href="{{asset('storage/'.$item->folder.'/'.$item->filename)}}" class="desktop-display" download>Download here</a>
                    </div>

                </div>

                @endforeach
        </div>
    </div>
</section>


