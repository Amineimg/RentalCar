<!DOCTYPE html>
<html lang="{{ Session::get('language') ?? 'fr' }}">

<head>
    <!-- Google tag (gtag.js) event - delayed navigation helper -->
    <script>
      // Helper function to delay opening a URL until a gtag event is sent.
      // Call it in response to an action that should navigate to a URL.
      function gtagSendEvent(url) {
        var callback = function () {
          if (typeof url === 'string') {
            window.location = url;
          }
        };
        gtag('event', 'ads_conversion_Parc_auto_voitures_1', {
          'event_callback': callback,
          'event_timeout': 2000,
          // <event_parameters>
        });
        return false;
      }
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>{{ $static_data['strings']['site_name'] }}</title>

    <meta charset="UTF-8">

    <meta name="title" content="{{ $static_data['strings']['site_name'] }}">

    <meta name="description" content="{{ $static_data['strings']['site_description_'] }}">

    <meta name="keywords" content="Jacarandacar">

    <meta name="author" content="{{ $static_data['strings']['site_name'] }}">

    <meta car="og:title" content="{{ $static_data['strings']['site_name'] }}" />

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

    <div class="container jumbotron text-center">

        <h1 class="display-5">{{$static_data['strings']['thank_you_for_book']}}</h1>

        <p class="lead"><strong></strong>{{$static_data['strings']['thank_you']}}</p>

        <hr>

        <p class="lead">

        <a class="btn btn-primary btn-sm" href="{{route('home')}}" role="button">{{$static_data['strings']['back_to_home_page']}}</a>

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

