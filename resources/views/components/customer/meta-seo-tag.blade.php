@if(isset($seodata['title']))
<title> {{$seodata['title']}} </title>
<meta name="title" content="{{$seodata['title']}}">
@endif
@if(isset($seodata['description']))
    <meta name="description" content="{{$seodata['description']}}">
@endif
<meta name="google-site-verification" content="x2TVSaiGBx9F_unjNk_O1mEB64-JF5s3lmTguSQvstw" />

<link rel = "icon" href =
    "{{asset('assets/images/photon_small.png')}}"
      type = "image/x-icon">
<link rel="canonical" href="{{Illuminate\Support\Facades\URL::current()}}" />

@if(isset($seodata['keywords']))
<meta name="keywords" content="{{$seodata['keywords']}}">
@endif

<!-- Open Graph / Facebook -->
<meta property="og:title" content="{{$seodata['title']??''}}">
<meta property="og:description" content="{{$seodata['description']??''}}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{\Illuminate\Support\Facades\URL::full()}}">


<!-- Twitter -->
<meta property="twitter:title" content="{{$seodata['title']??''}}">
<meta property="twitter:description" content="{{$seodata['description']??''}}">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{\Illuminate\Support\Facades\URL::full()}}">


<!-- Static -->
<meta name="author" content="Photonplay">
<meta name="publisher" content="Photonplay">
<meta property="locale" content="en_US" />
<meta property="type" content="website" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Photonplay">

 
<meta property="og:image" content="{{asset($seodata['feature_image']??'assets\images\photonshare_image.png')}}">
<meta property="twitter:image" content="{{asset($seodata['feature_image']??'assets\images\photonshare_image.png')}}">
{{--Schema--}}
{!! $seodata['schema']??'' !!}
{{--Schema End--}}
