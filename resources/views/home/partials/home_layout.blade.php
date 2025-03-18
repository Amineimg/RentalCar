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
    
    <!-- Google Tag Manager -->
    <script defer async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
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

    @yield('title')

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
    <meta property="og:url" content="https://www.jacarandacar.com/" />
    <meta property="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />

    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" async>-->

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    </noscript>
    
    <link rel="preconnect" href="https://www.jacarandacar.com/">
    <link rel="dns-prefetch" href="https://www.jacarandacar.com/">

    {{--
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon.png">


    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">

     --}}
     
    <meta name="google-site-verification" content="QQy5ryucYRGH1NQI5nFZKqJYz3SjctYLOXHQSZZdCVc" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="google-site-verification" content="1L7GqnDOF6XdiY4OBEj0kpQw7xEq0bRU_Skzvs9ctoA" />  <!--  -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">  <!--  -->

    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{route('home')}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta charset="UTF-8">

    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" defer>--}}

    <link rel="preload" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    </noscript>

    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet" async>-->

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap">
    </noscript>

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/tether.min.css') }}">

    <link href="{{ asset('assets/css/plugins/toast.min.css') }}" rel="stylesheet">

    <!--<link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">-->

    <link rel="preload" href="{{ asset('assets/css/plugins/slick.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
    </noscript>

    {{--<link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">--}}
    
    <link rel="preload" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}"></noscript>

    {{--<link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">--}}
    <link rel="preload" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}"></noscript>

    <!--<link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">-->

    <link rel="preload" href="{{ asset('assets/css/home_style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/home_style.css') }}">
    </noscript>

    <!--<link rel="stylesheet" href="{{ asset('assets/css/home_layout.css') }}">-->

    <link rel="preload" href="{{ asset('assets/css/home_layout.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/home_layout.css') }}">
    </noscript>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "{{$static_data['strings']['name_micro_data']}}",
      "image": "https://www.jacarandacar.com/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp",
      "@id": "https://www.jacarandacar.com/",
      "url": "https://www.jacarandacar.com/",
      "telephone": "+212662151010",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "07 Avenue 11 Janvier, Immeuble Al Abraj, entrée C n°3",
        "addressLocality": "Marrakech",
        "postalCode": "40000",
        "addressCountry": "+212",
        "addressRegion": "40000"
      },
      "priceRange": "38,125",
      "sameAs": [
        "https://www.facebook.com/jacarandacars/",
        "https://www.instagram.com/riaddaryassine/",
        "https://www.tripadvisor.com/Attraction_Review-g293734-d15554504-Reviews-Jacaranda_Car-Marrakech_Marrakech_Safi.html"
      ]
    }
    </script>



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

@yield('content')

<div class="col-sm-12">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d849.2006304734223!2d-7.998472110872709!3d31.6392569127608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafefee6c6c6357%3A0xbbc7136983036de4!2sJacaranda%20car%20rental%20Marrakech!5e0!3m2!1sen!2sma!4v1692289354954!5m2!1sen!2sma" 
            title="{{ $static_data['strings']['maps_title'] }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    </div>
    </div>

    <div id="search-box-modal" class="modal not-summernote fade" role="dialog">

        <div class="modal-dialog modal-dialog modal-dialog-centered">

            @include('home.partials.search_box_modal')

        </div>

    </div>

    @include('home.partials.footer')

    </div>

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

            $(document).on('click', '#booking_submit_btn', function(e) {

                var isValid = true;

                $(".start_date_input_group").removeClass('invalid')

                $(".end_date_input_group").removeClass('invalid')

                if ($("input[name=end_date]").val() == '') {

                    isValid = false;

                    $(".end_date_input_group").addClass('invalid')

                }

                if ($("input[name=start_date]").val() == '') {

                    $(".start_date_input_group").addClass('invalid')

                    isValid = false;

                }

                if (!isValid) {

                    e.preventDefault();

                }

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

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".customer-logos").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>