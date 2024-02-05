@php
    $current_open_url=Illuminate\Support\Facades\URL::current();
@endphp
@if(isset($seodata['title']))
    <title> {{$seodata['title']}} </title>
    <meta name="title" content="{{$seodata['title']}}">
@endif
@if(isset($seodata['description']))
    <meta name="description" content="{{$seodata['description']}}">
@endif
<meta name="google-site-verification" content="x2TVSaiGBx9F_unjNk_O1mEB64-JF5s3lmTguSQvstw"/>
<link rel="icon" href=
    "{{asset('assets/images/photon_small.png')}}"
      type="image/x-icon">
<link rel="canonical" href="{{$current_open_url}}"/>
@if(isset($seodata['keywords']))
    <meta name="keywords" content="{{$seodata['keywords']}}">
@endif
<meta name="language" content="English">
<meta name="author" content="Photonplay">
<meta property="og:site_name" content="PHOTONPLAY" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="webpage" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<meta property="article:publisher" content="https://www.facebook.com/photonplaygroup/" />


<!-- Open Graph / Facebook -->
<meta property="og:title" content="{{$seodata['title']??''}}">
<meta property="og:description" content="{{$seodata['description']??''}}">
<meta property="og:url" content="{{$current_open_url}}">
<meta property="og:image" content="{{asset($seodata['feature_image']??'assets\images\photonshare_image.png')}}" />
<meta property="og:image:secure_url" content="{{asset($seodata['feature_image']??'assets\images\photonshare_image.png')}}" />

<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="596" />
<meta property="og:image:alt" content="{{$seodata['title']}}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:updated_time" content="2024-01-23T12:24:26+00:00" />
<meta property="article:published_time" content="2024-01-03T07:12:54+00:00" />
<meta property="article:modified_time" content="2024-01-23T12:24:26+00:00" />
<!-- Twitter -->
<meta property="twitter:title" content="{{$seodata['title']??''}}">
<meta property="twitter:description" content="{{$seodata['description']??''}}">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{$current_open_url}}">
<meta name="twitter:image" content="{{asset($seodata['feature_image']??'assets\images\photonshare_image.png')}}" />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="Photonplay" />
<meta name="twitter:site" content="@photonplayinc" />
<meta name="twitter:creator" content="@photonplayinc" />
@stack('header_meta_content')
{{--Schema--}}
{!! $seodata['schema']??'' !!}
{{--Schema End--}}
