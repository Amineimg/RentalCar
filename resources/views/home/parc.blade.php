<!DOCTYPE html>
<html lang="{{ Session::get('language') ?? 'fr' }}">

<head>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWPRDJ3C');</script>
    <!-- End Google Tag Manager -->
    
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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="canonical" href="<?php echo isset($_SERVER['SCRIPT_URI']) ? $_SERVER['SCRIPT_URI'] : ''; ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta charset="UTF-8">
    <title>{{ $static_data['strings']['parc_title'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['parc_title'] }}">
    <meta name="description" content="{{ $static_data['strings']['parc_description'] }}">
    <meta name="author" content="{{ $static_data['strings']['parc_title'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['parc_title'] }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
        
    @if (Session::get('language') == 'en')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @elseif(Session::get('language') == 'es')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @elseif(Session::get('language') == 'it')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @elseif(Session::get('language') == 'pl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @elseif(Session::get('language') == 'nl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @elseif(Session::get('language') == 'pt')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-rental-marrakech" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
    @else
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-marrakech" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-coches-marrakech" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/autonoleggio-marrakech" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wypo%C5%BCyczalnia-samochod%C3%B3w-marrakesz" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-marrakech" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-de-carros-marrakech" />
    @endif

    {{-- <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon.png"> --}}

    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="preload" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    </noscript>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/tether.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link href="{{ asset('assets/css/plugins/toast.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/home_layout.css') }}">

    @if ($static_data['site_settings']['google_analytics'])
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {

                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),

                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)

            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');



            ga('create', '{{ $static_data['site_settings']['google_analytics'] }}', 'auto');

            ga('send', 'pageview');
        </script>
    @endif

    {!! $custom_css !!}

    <style>
        body.home-page.pace-done {
            overflow-x: hidden;
        }
    </style>
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


<body class="home-page" style="background-color: white;">
    <div class="container-fluid">

        @include('home.partials.top-header')

        <div class="container-fluid second-section">

            <div class="container-fluid second-container">

                <div class="row">

                    <div class="col-sm-12">

                        <h1 class="section-title-dark">{{ $static_data['strings']['opt_fp_heading'] }}</h1>

                        <p class="section-description-dark"></p>

                    </div>

                </div>

                <div class="row">

                    <div id="filtered-cars" class="row">

                        @foreach ($cars as $car)
                            @include('home.partials.car_style_2', [
                                'class' => 'col-md-4 col-sm-4 items-grid',
                            ])
                        @endforeach

                    </div>

                </div>

                <div class="col-sm-12 text-centered">

                    <div class="dots-navigation-1"></div>

                </div>

                <div class="row">

                    <div class="col-sm-12">

                        <p class="section-description-dark">@php echo $static_data['strings']['opt_fp_subheading']; @endphp</p>

                    </div>

                </div>

            </div>

        </div>
        <div id="search-box-modal" class="modal not-summernote fade" role="dialog">

            <div class="modal-dialog modal-dialog modal-dialog-centered">

                @include('home.partials.search_box_modal')

            </div>

        </div>
    </div>
    @include('home.partials.footer')



    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/tether.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/slidereveal.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/toast.min.js') }}"></script>

    <script type="text/javascript">
        window.paceOptions = {

            ajax: false,

            restartOnRequestAfter: false,

        };
    </script>

    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/home_init.js') }}"></script>

    <script type="text/javascript"></script>

    {!! csrf_field() !!}

    @if ($static_data['user'] && $owner_request)
        <div class="modal fade" id="upgrade-confirm-modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">
                            {{ $static_data['strings']['confirm_action'] }}</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        {{ $static_data['strings']['upgrade_request_confirm'] }}

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="primary-button"
                            data-dismiss="modal">{{ $static_data['strings']['close'] }}</button>

                        <a href="#" data-id="{{ $static_data['user']->id }}"
                            class="primary-button confirm-request"
                            data-dismiss="modal">{{ $static_data['strings']['request'] }}</a>

                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {

                            $('.confirm-request').click(function(e) {

                                e.preventDefault();

                                var id = $(this).data('id'),

                                    token = $('[name="_token"]').val();

                                $.ajax({

                                    url: '{{ url('/user-request') }}',

                                    type: 'post',

                                    data: {
                                        _token: token,
                                        id: id
                                    },

                                    success: function() {

                                        toastr.success('{{ $static_data['strings']['text_for_request'] }}');

                                        setTimeout(function() {
                                            location.reload();
                                        }, 1200);

                                    }

                                });

                            });

                        });
                    </script>

                </div>

            </div>

        </div>
    @endif

    <script type="text/javascript">
        $(document).ready(function() {



            $('.more-options').click(function(e) {

                e.preventDefault();

                $('.features-filter-box').slideToggle();

            });



            // Datepickers

            $('.start_date-picker').datepicker({

                dateFormat: 'dd/mm/yy',

                minDate: 0,

                onSelect: function(dateText, inst) {

                    if ($('.end_date-picker').hasClass('hasDatePicker')) {

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



            $('.currency-switcher').click(function(e) {

                e.preventDefault();

                var code = $(this).data('code'),

                    token = $('[name="_token"]').val();

                if (typeof token === 'undefined') {

                    token = $('.token').val();

                }

                $.ajax({

                    url: '{{ route('change_currency') }}',

                    type: 'post',

                    data: {
                        code: code,
                        _token: token
                    },

                    success: function() {

                        location.reload();

                    },

                    error: function() {

                        location.reload();

                    }

                });

                return false;

            });



            $('.btn-select-car').click(function(e) {

                $('#selected_car_id').val($(this).data('id'));

            });



            $(document).on('click', '.add-wishlist', function(e) {

                e.preventDefault();

                var car_id = $(this).data('id');

                $.ajax({

                    url: '{{ url('add-wishlist') }}',

                    type: 'post',

                    data: {

                        car_id: car_id,

                        _token: '{{ csrf_token() }}',

                    },

                    success: function(data) {

                        $('.add-wishlist').each(function() {

                            if ($.inArray(String($(this).data('id')), data) >= 0) {

                                $('.remove-wishlist[data-id="' + $(this).data('id') +
                                    '"]').show();

                                $(this).hide();

                            } else {

                                $('.remove-wishlist[data-id="' + $(this).data('id') +
                                    '"]').hide();

                                $(this).show();

                            }

                        });

                    },
                    error: function(data) {

                        console.log(data);

                    }

                });

                return false;

            });



            $(document).on('click', '.remove-wishlist', function(e) {

                e.preventDefault();

                var car_id = $(this).data('id');

                $.ajax({

                    url: '{{ url('remove-wishlist') }}',

                    type: 'post',

                    data: {

                        car_id: car_id,

                        _token: '{{ csrf_token() }}',

                    },

                    success: function(data) {

                        console.log(data);

                        $('.add-wishlist').each(function() {

                            if ($.inArray(String($(this).data('id')), data) >= 0) {

                                $('.remove-wishlist[data-id="' + $(this).data('id') +
                                    '"]').show();

                                $(this).hide();

                            } else {

                                $('.remove-wishlist[data-id="' + $(this).data('id') +
                                    '"]').hide();

                                $(this).show();

                            }

                        });

                    },
                    error: function(data) {

                        console.log(data);

                    }

                });

                return false;

            });

            $(document).on('click', '#booking_submit_btn', function(e) {

                var isValid = true;

                $("#start_date_input_group").removeClass('invalid')

                $("#end_date_input_group").removeClass('invalid')

                if ($("input[name=end_date]").val() == '') {

                    isValid = false;

                    $("#end_date_input_group").addClass('invalid')

                }

                if ($("input[name=start_date]").val() == '') {

                    $("#start_date_input_group").addClass('invalid')

                    isValid = false;

                }

                if (!isValid) {

                    e.preventDefault();

                }

            });

        });
    </script>

</body>

</html>
