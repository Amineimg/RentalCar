<!DOCTYPE html>

@if (Session::get('language') == 'en')
    <html lang="en">
@elseif(Session::get('language') == 'es')
    <html lang="es">
@elseif(Session::get('language') == 'it')
    <html lang="it">
@elseif(Session::get('language') == 'pl')
    <html lang="pl">
@elseif(Session::get('language') == 'nl')
    <html lang="nl">
@elseif(Session::get('language') == 'pt')
    <html lang="pt">
@else
    <html lang="fr">
@endif

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RHNWYWKB99"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RHNWYWKB99');
    </script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10830519419"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-10830519419');
    </script>
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "kwza2hzt1a");
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWPRDJ3C');</script>
    <!-- End Google Tag Manager -->

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo isset($_SERVER['SCRIPT_URI']) ? $_SERVER['SCRIPT_URI'] : ''; ?>" />
    <meta name="twitter:card" content="summary" />

    <meta name="twitter:description"
        content="{{ $static_data['strings']['home_meta_description'] }}" />
    {{-- <title>{{ $static_data['strings']['home_meta_title'] }}</title>

    <meta name="description" content="{{ $static_data['strings']['home_meta_description'] }}" /> --}}

    <meta name="twitter:image" content="https://www.jacarandacar.com/assets/images/home/logo.png" />

    {{-- <link rel="manifest" href="/manifest.json"> --}}
    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="iconn/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon.png">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <style>
        .mySlides {
            display: none
        }

        .w3-left,
        .w3-right,
        .w3-badge {
            cursor: pointer
        }

        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }
    </style>
    @yield('title')

    <link rel="preload" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    </noscript>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/tether.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link href="{{ asset('assets/css/plugins/toast.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home_layout.css') }}">




    @yield('head')

    {!! $custom_css !!}
    <!-- Google tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZL3HF1Q9ZH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZL3HF1Q9ZH');
    </script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11114720723"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-11114720723');
    </script>
</head>
