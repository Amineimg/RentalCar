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

<div class="cover"></div>

<div class="wrapper">

    <div class="container-fluid header-container" @if($static_data['design_settings']['slider_background']) style="background-image: url('{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}')" @endif>

        @include('home.partials.top-header')

        <div class="container" id="slider">

            <div class="row">

                <div class="col-sm-12">

                    <h1 class="slider-heading">{{$static_data['strings']['opt_slider_heading']}}</h1>

                    <h4 class="slider-subheading">{{$static_data['strings']['opt_slider_subheading']}}</h4>

                    @include('home.partials.search_home')

                </div>

                <div id="scroll-down" class="col-sm-12 text-centered">

                    <a class="scroll-down-button" aria-label="{{$static_data['strings']['scroll-down-button']}}" href="#first-section"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

                    <div class="discover-more"></div>

                </div>

            </div>

        </div>

    </div>

</div>

@include('home.partials.footer')

</div>

<script src="{{asset('assets/js/plugins/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/tether.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/slidereveal.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/toast.min.js')}}"></script>

<script type="text/javascript">

    window.paceOptions = {

        ajax: false,

        restartOnRequestAfter: false,

    };

</script>

<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/home_init.js')}}"></script>

<script type="text/javascript">

<script type="text/javascript">

    $(document).ready(function(){



        $('.more-options').click(function(e){

            e.preventDefault();

            $('.features-filter-box').slideToggle();

        });



        // Datepickers

        $('.start_date-picker').datepicker({

            dateFormat: 'dd/mm/yy',

            minDate: 0,

            onSelect: function(dateText, inst) {

                if($('.end_date-picker').hasClass('hasDatePicker')){

                    $('.end_date-picker').datepicker('destroy');

                }

                var startDate = $(this).datepicker('getDate');

                startDate.setDate(startDate.getDate() + 1);

                $("[name='start_date']").val(dateText);

                $("[name='end_date']").removeAttr('disabled');

                $('.end_date-picker').datepicker({

                    dateFormat: 'dd/mm/yy',

                    minDate: startDate,

                    onSelect: function(dateText, inst) {

                        $("[name='end_date']").val(dateText);

                    }

                });

            }

        });



        $('.currency-switcher').click(function(e){

            e.preventDefault();

            var code = $(this).data('code'),

                token = $('[name="_token"]').val();

            if(typeof token === 'undefined'){

                token = $('.token').val();

            }

            $.ajax({

                url: '{{route('change_currency')}}',

                type: 'post',

                data: {code: code, _token: token},

                success: function(){

                   location.reload();

                },

                error: function(){

                   location.reload();

                }

            });

            return false;

        });



        $(document).on('click', '.add-wishlist', function(e){



        });



        $(document).on('click', '.remove-wishlist', function(e){

        });

    });

</script>

</body>

</html>

