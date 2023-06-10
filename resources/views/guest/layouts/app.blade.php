<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="google-site-verification" content="x2TVSaiGBx9F_unjNk_O1mEB64-JF5s3lmTguSQvstw" />

    <!-- Meta -->
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="">
    <meta property="twitter:description" content="">

    <!-- Static -->
    <meta name="author" content="Photonplay">
    <meta name="publisher" content="Photonplay">
    <meta property="locale" content="en_US" />
    <meta property="type" content="website" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

    <!-- Start Schema -->
{{--    {{seo.schma | raw}}--}}
    <!-- End Schema -->

{{--    {{current_path}}--}}
    <link rel="canonical" href="" />

{{--    /old--}}
    <link rel="shortcut icon" href="/img/faviicon.png" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/old/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/old/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/old/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/old/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168260545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-168260545-1');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MXJCLSBCFP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MXJCLSBCFP');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NJZBCGR');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJZBCGR" height="0" width="0"
                  style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<a id="start"></a>

<x-Guest.Header/>


    @yield('content')

<x-Guest.Footer/>


<!-- Loading Scripts -->
<script src="/old/js/jquery-3.1.1.min.js"></script>
<script src="/old/js/isotope.min.js"></script>
<script src="/old/js/granim.min.js"></script>
<script src="/old/js/jquery.steps.min.js"></script>
<script src="/old/js/smooth-scroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/old/js/scripts.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5da70a23df22d913399f714f/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script>

    $(document).ready(function () {
        $("#query").submit(function (event) {
            $("#ajaxStart").attr("disabled", true);
            event.preventDefault();

            if (grecaptcha === undefined) {
                alert('Recaptcha not defined');
                return;
            }

            var response = grecaptcha.getResponse();

            if (!response) {
                alert('Coud not get recaptcha response');
                return;
            }

            $.ajax({
                url: "https://mailo.photonplay.com/index.php",
                type: "POST",
                data: $('#query').serialize(),
                success: function (response) {
                    console.log(response);
                    if (response == "success") {
                        window.location.href = 'https://www.photonplay.com/thankyou';
                        /*$('#query').trigger("reset");
                        alert("Thanks for Quote", "We Will Contact You Shortly!");
                        swal("Thanks for Quote", "We Will Contact You Shortly!", "success");
                        $("#ajaxStart").attr("disabled", false);*/
                    }
                    else {
                        $("#ErrorModal").modal('show');
                        console.log("ERROR");
                    }
                }
            });

            return false;

        });

    });

    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
    });


</script>
</body>

</html>
