<script src="{{ asset('assets\customer\js\bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets\customer\js\bootstrap.jquery.js') }}"></script>
    <script src="{{ asset('assets\customer\js\bootstrap.slick.min.js') }}"></script>


<script>
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


    </script>

<script>
    // Fetch user's IP information using ip-api API
    fetch('http://ip-api.com/json')
        .then(response => response.json())
        .then(data => {
            const ipAddress = data.query;
            const city = data.city;
            const region = data.regionName;
            const country = data.country;

            console.log('IP Address:', ipAddress);
            console.log('City:', city);
            console.log('Region:', region);
            console.log('Country:', country);

            // Now you can use this information as needed
        })
        .catch(error => {
            console.error('Error fetching IP information:', error);
            // You can handle errors here
        });

</script>
