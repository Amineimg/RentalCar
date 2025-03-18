<!DOCTYPE html>

@if (Session::get('language') == 'en')
    <html lang="en">
@elseif(Session::get('language') == 'es')
    <html lang="es">
@elseif(Session::get('language') == 'pl')
    <html lang="pl">
@elseif(Session::get('language') == 'nl')
    <html lang="nl">
@else
    <html lang="fr">
@endif

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWPRDJ3C');</script>
    <!-- End Google Tag Manager -->
    
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "kwza2hzt1a");
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>{{ $static_data['site_settings']['site_name'] }}</title>

    <meta charset="UTF-8">

    <meta name="title" content="{{ $static_data['site_settings']['site_name'] }}">

    <meta name="description" content="{{ $static_data['site_settings']['site_description'] }}">

    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">

    <meta name="author" content="{{ $static_data['site_settings']['site_name'] }}">

    <meta car="og:title" content="{{ $static_data['site_settings']['site_name'] }}" />

    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />

    <link rel="preload" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    </noscript>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/tether.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link href="{{ asset('assets/css/plugins/toast.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home_layout.css') }}">

    @if($static_data['site_settings']['google_analytics'])

        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



            ga('create', '{{ $static_data['site_settings']['google_analytics'] }}', 'auto');

            ga('send', 'pageview');



        </script>

    @endif

    {!! $custom_css !!}

</head>

<body class="home-page">

@include('home.partials.top-header')

<div class="wrapper">

    <div class="jumbotron text-center">

        <h1 class="display-3">Thank you for getting in touch!</h1>

        <p class="lead"><strong></strong>We appreciate you contacting Jacarandacar. One of our colleagues will get back in touch with you soon!Have a great day!</p>

        <hr>

        <p class="lead">

        <a class="btn btn-primary btn-sm" href="/" role="button">Homz</a>

        </p>

    </div>

</div>



@include('home.partials.footer')

</div>

<script src="{{asset('assets/js/plugins/jquery.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/tether.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/slick.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/slidereveal.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/toast.min.js')}}" defer></script>

<script type="text/javascript">

    window.paceOptions = {

        ajax: false,

        restartOnRequestAfter: false,

    };

</script>

<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}" defer></script>

<script src="{{asset('assets/js/home_init.js')}}" defer></script>

<script type="text/javascript">



</body>

</html>

