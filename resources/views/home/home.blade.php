@extends('home.partials.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{ $static_data['strings']['home_meta_title'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['home_meta_title'] }}">
    <meta name="author" content="{{ $static_data['strings']['home_meta_title'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['home_meta_title'] }}" />
    <meta property="og:type" content="{{ $static_data['strings']['home_meta_title'] }}" />
    <meta property="og:title" content="{{ $static_data['strings']['home_meta_title'] }}" />
    <meta name="twitter:title" content="{{ $static_data['strings']['home_meta_title'] }}" />

    <meta name="description" content="{{ $static_data['strings']['home_meta_description'] }}" />
    <meta name="twitter:description" content="{{ $static_data['strings']['home_meta_description'] }}" />
    <meta property="og:description" content="{{ $static_data['strings']['home_meta_description'] }}" />

    @if (Session::get('language') == 'en')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @elseif(Session::get('language') == 'es')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @elseif(Session::get('language') == 'it')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @elseif(Session::get('language') == 'pl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @elseif(Session::get('language') == 'nl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @elseif(Session::get('language') == 'pt')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
    @else
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel" />
    @endif
@endsection

@section('content')

<?php ob_start(); ?>
<body class="home-page">

    {{--<div class="cover"></div>--}}

    <div class="wrapper">

        <!--<div class="container-fluid header-container" @if ($static_data['design_settings']['slider_background']) style="background-image: url('{{ asset('/assets/images/home/location-de-voiture-marrakech.jpg') }}')" @endif>-->
        <div class="container-fluid header-container {{$static_data['design_settings']['slider_background'] ? 'home_slider_background' : ''}}" >
            @include('home.partials.top-header')
            <div class="row">

                <div class="container" id="slider">

                    <div class="col-sm-12">

                        <h1 class="slider-heading">{{ $static_data['strings']['opt_slider_heading'] }}</h1>

                        <h4 class="slider-subheading">{{ $static_data['strings']['opt_slider_subheading'] }}</h4>

                        @include('home.partials.search_home')

                    </div>

                    <div id="scroll-down" class="col-sm-12 text-centered">

                        <a class="scroll-down-button" aria-label="{{$static_data['strings']['scroll-down-button']}}" href="#first-section"><i class="fa fa-angle-down"
                                aria-hidden="true"></i></a>

                        <div class="discover-more"></div>

                    </div>

                </div>
            </div>

        </div>

    </div>



    <div id="first-section" class="container-fluid first-section">

        <div class="container first-container">

            <div class="row">

                <div class="col-sm-12">

                    <h2 class="section-title-dark">{{ $static_data['strings']['opt_fl_heading'] }}</h2>

                    <p class="section-description-dark">{{ $static_data['strings']['opt_fl_subheading'] }}</p>

                </div>

            </div>

            @if (Session::get('language') == 'en')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title" style="text-align:justify;">

                            <a href="https://www.jacarandacar.com/rental/cheap-car-hire-marrakech"><img
                                    src="{{ url('/') .
                                        '/assets/images/home/locations/cheap-car-rental-in-marrakech.png
                                                                        ' }}"
                                    title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                    style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://www.jacarandacar.com/rental/cheap-car-hire-marrakech">Cheap car
                                    rental in Marrakech!</a></h3>
                            <p>Looking for an affordable car rental for your stay in Marrakech? Our agency provides convenient airport pick-up, so you can get your vehicle quickly and easily. We offer a selection of recent, air-conditioned cars and SUVs to ensure your comfort. Book today and enjoy competitive rates for a hassle-free and enjoyable trip!
                            </p>

                            <div class="opt-fl-text">
                                <a
                                    href="https://www.jacarandacar.com/rental/cheap-car-hire-marrakech">{{ $static_data['strings']['read_more'] }}</a>

                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('car-rental-in-marrakech') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/car-rental-marrakech.png' }}"
                                    title="Location voitures Gueliz Marrakech"
                                    alt="Location voitures Gueliz Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>

                            <h3 class="title"><a href="{{ route('car-rental-in-marrakech') }}">Car rental Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>For your stay in Morocco, only one address: Jacaranda Car - Marrakech car rental,
                                    specializing in car rental, 4x4 in Marrakech, offers rental and quality vehicles at
                                    very competitive prices. A car rental in Marrakech will allow you to discover
                                    Morocco. Whatever the length of your stay, rent a vehicle in Marrakech and make your
                                    trips successful experiences...</p>

                                <br>
                                <a href="{{ route('car-rental-in-marrakech') }}">{{ $static_data['strings']['read_more'] }}</a>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="https://www.jacarandacar.com/rental/car-rental-marrakech-airport"> <img
                                    src="{{ url('/') . '/assets/images/home/locations/car-hire-marrakech-airport.png' }}"
                                    title="location voiture marrakech aéroport"
                                    alt="location voiture marrakech aéroport" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://www.jacarandacar.com/rental/car-rental-marrakech-airport">Car hire
                                    Marrakech airport</a></h3>

                            <div class="opt-fl-text">
                                <p>Our Marrakech 4x4 Rental Agency offers you a young and varied 4x4 Park on Marrakech
                                    airport to fulfill your desires whether you are on a business trip, with family or
                                    even between friends we have the 4x4 vehicle you need , at very competitive prices.
                                    Discover the city of Marrakech and fully enjoy your vacation thanks to our Marrakech
                                    4x4 rental service...</p>
                                <br>
                                <a
                                    href="https://www.jacarandacar.com/rental/car-rental-marrakech-airport">{{ $static_data['strings']['read_more'] }}</a>

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="https://jacarandacar.com/rental/car-rental-marrakech-without-deposit"><img
                                    src="{{ asset('assets/images/home/locations/marrakech-car-rental-no-deposit.png') }} "
                                    title="Car rental Marrakech without deposit"
                                    alt="Car rental Marrakech without deposit" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://jacarandacar.com/rental/car-rental-marrakech-without-deposit">Car
                                    rental Marrakech without deposit</a></h3>

                            <div class="opt-fl-text">
                                <p>When renting a car with Jacaranda we assure you the best service in Marrakech city ,
                                    beginning with the best prices and deals with the many other advantages such as
                                    providing a car rental without credit card , our client is free to pay in
                                    cash.Jacaranda also gives its customers the ability to choose between renting a car
                                    without a deposit or with deposit ....</p>
                                <br>
                                <a
                                    href="https://jacarandacar.com/rental/car-rental-marrakech-without-deposit">{{ $static_data['strings']['read_more'] }}</a>

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-automatique-marrakech_en') }}"><img
                                    src="{{ asset('assets/images/home/locations/automatic-car-rental-marrakech.webp') }} "
                                    title="Automatic car rental in Marrakech"
                                    alt="Automatic car rental in Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-automatique-marrakech_en') }}">Automatic car rental in Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Drive with ease with our Automatic Cars</b><br>
                                        We understand that for some travelers, driving with ease is a priority.
                                        This is why we offer a wide selection of automatic cars in Marrakech to meet your needs....</p>
                                <br>
                                <a
                                    href="{{ route('location-voiture-automatique-marrakech_en') }}">{{ $static_data['strings']['read_more'] }}</a>

                            </div>

                        </div>


                    </div>

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('4-x-4-hire-marrakech') }}">
                                <img    src="{{ asset('assets/images/home/locations/4x4-rental-marrakech.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="4x4 rental Marrakech"
                                    title="4x4 rental Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('4-x-4-hire-marrakech') }}">4x4 rental Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Concerned about your means of transportation during your stay in Marrakech? Jacarandacar,
                                your 4x4 rental agency in Marrakech, with qualified staff possessing experience in the rental field and a young team of guides and assistants,
                                offers you a diverse fleet of recent 4x4 vehicles equipped with various additional options available for short or long-term rental,
                                tailored to your needs, all at highly attractive and well-studied prices.
                                Explore Morocco and embark on adventures in the deserts with our range of comfortable 4x4 vehicles,
                                and enjoy our 24/7 assistance...</p>

                                <br>
                                <a
                                    href="{{ route('4-x-4-hire-marrakech') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->

                <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-manuelle-marrakech_en') }}">
                                <img    src="{{ asset('assets/images/home/locations/manual-car-rental-marrakech.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Manual car rental Marrakech"
                                    title="Manual car rental Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_en') }}">Manual car rental Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>For lovers of traditional driving, we offer a variety of manual cars in Marrakech.
                                Whether you are looking for a compact vehicle to navigate the narrow streets of the Medina or a
                                more spacious model for your getaways in the region...</p>

                                <br>
                                <a
                                    href="{{ route('location-voiture-manuelle-marrakech_en') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->


                </div>
            @elseif(Session::get('language') == 'es')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('alquiler-de-coches-marrakech-barato') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                                    title="location voiture marrakech" alt="location voiture marrakech"
                                    style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="{{ route('alquiler-de-coches-marrakech-barato') }}">
                                    Alquiler de coches baratos en Marrakech !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    ¿Buscas un alquiler de coche asequible para tu estancia en Marrakech? Nuestra agencia te entrega el vehículo directamente en el aeropuerto, asegurando una recogida rápida y conveniente. Ofrecemos una selección de coches y SUVs recientes y con aire acondicionado para garantizar tu comodidad. ¡Reserva hoy y disfruta de tarifas competitivas para un viaje sin estrés y placentero!<br> <a
                                        href="{{ route('alquiler-de-coches-marrakech-barato') }}">
                                        Leer más >></a>

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('car-rental-in-marrakech-es') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                                    title="Location voitures Gueliz Marrakech"
                                    alt="Location voitures Gueliz Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>

                            <h3 class="title" ><a href="{{ route('car-rental-in-marrakech-es') }}">Alquiler coches Marrakech</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Para su estancia en Marruecos, sólo una dirección: Jacaranda Car - <strong>Alquiler coches Marrakech</strong>,
                                    especializada en alquiler de coches, 4x4 en Marrakech, ofrece vehículos de alquiler
                                    de calidad a
                                    precios muy competitivos. Un coche de alquiler en Marrakech...<br> <a
                                        href="{{ route('car-rental-in-marrakech-es') }}">Leer más >></a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('alquiler-coche-marrakech-aeropuerto') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                                    title="location voiture marrakech aéroport"
                                    alt="location voiture marrakech aéroport" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a href="{{ route('alquiler-coche-marrakech-aeropuerto') }}">
                                    Alquiler de coches en el aeropuerto de Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Nuestra Agencia de Alquiler de 4x4 en Marrakech te ofrece un Parque 4x4 joven y
                                    variado en
                                    el aeropuerto de Marrakech para cumplir tus deseos ya sea que estés en un viaje de
                                    negocios,
                                    en familia o incluso con amigos, tenemos el vehículo 4x4 que necesitas, a precios
                                    muy competitivos...<br><a
                                        href="{{ route('alquiler-coche-marrakech-aeropuerto') }}">
                                        Leer más >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('alquiler-coche-marrakech-sin-deposito') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                                    title="location voiture marrakech aéroport"
                                    alt="location voiture marrakech aéroport" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('alquiler-coche-marrakech-sin-deposito') }}">Alquiler de coches sin
                                    deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Cuando alquilas un coche con Jacaranda, te aseguramos el mejor servicio en la ciudad
                                    de Marrakech,
                                    empezando por los mejores precios y las muchas otras ventajas como el alquiler de
                                    coches sin tarjeta de crédito,
                                    nuestro cliente es libre de pagar en efectivo. Jacaranda también ofrece a sus
                                    clientes la posibilidad de...<br><a
                                        href="{{ route('alquiler-coche-marrakech-sin-deposito') }}">
                                        Leer más >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-automatique-marrakech_es') }}"><img
                                    src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Alquiler de coches automáticos en Marrakech"
                                    title="Alquiler de coches automáticos en Marrakech"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-automatique-marrakech_es') }}">Alquiler de coches automáticos en Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>
                                    <b>Conduce con tranquilidad con nuestros Coches Automáticos</b><br>
                                        Entendemos que para algunos viajeros conducir con tranquilidad es una prioridad.
                                        Por eso ofrecemos una amplia selección de coches automáticos en Marrakech para satisfacer sus necesidades....<br><a
                                        href="{{ route('location-voiture-automatique-marrakech_es') }}">
                                        Leer más >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('alquiler-4-x-4-marrakech') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="location voiture automatique Marrakech"
                                    title="location voiture automatique Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('alquiler-4-x-4-marrakech') }}">Alquiler de 4x4
                                    Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Te preocupas por tu medio de transporte durante tu estancia en Marrakech?
                                    Jacarandacar tu agencia de alquiler de 4x4 en Marrakech con personal cualificado con
                                    experiencia en el campo del alquiler y un joven equipo de guías y asistentes te
                                    ofrece una
                                    flota diversificada de 4x4 recientes equipados con varias opciones adicionales para
                                    alquilar a
                                    corto o largo plazo adaptados a tus necesidades, todo a precios súper atractivos y
                                    bien considerados.
                                    Descubre Marruecos y vive la aventura en los desiertos con nuestra gama de cómodos
                                    4×4 y aprovecha nuestra asistencia 24/7.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-manuelle-marrakech_es') }}">
                                <img    src="{{ asset('assets/images/home/locations/manual-car-rental-marrakech.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Alquiler de coches manuales en Marrakech"
                                    title="Alquiler de coches manuales en Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_es') }}">Alquiler de coches manuales en Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Para los amantes de la conducción tradicional, ofrecemos una variedad de coches manuales en Marrakech.
                                Tanto si buscas un vehículo compacto para recorrer las estrechas calles de la Medina como un modelo más espacioso para tus escapadas a la región,..</p>

                                <br>
                                <a
                                    href="{{ route('location-voiture-manuelle-marrakech_es') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->


                </div>
            @elseif (Session::get('language') == 'it')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-de-voiture-marrakech-pas-cher_it') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                                    title="Autonoleggio marrakech" alt="Autonoleggio marrakech" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-de-voiture-marrakech-pas-cher_it') }}">Noleggio auto
                                    economico a Marrakech!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Cerchi un'auto a noleggio conveniente per il tuo soggiorno a Marrakech? La nostra agenzia ti consegna il veicolo direttamente all'aeroporto, garantendoti un ritiro rapido e comodo. Offriamo una selezione di auto recenti e SUV climatizzati per assicurarti il massimo del comfort. Prenota oggi e approfitta delle nostre tariffe competitive per un viaggio senza stress e piacevole!<br> <a
                                        href="{{ route('location-de-voiture-marrakech-pas-cher_it') }}">Per saperne di
                                        più >></a>

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('car-rental-in-marrakech-it') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                                    title="Autonoleggio Guéliz Marrakech" alt="Autonoleggio Guéliz Marrakech"
                                    style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="{{ route('car-rental-in-marrakech-it') }}">Autonoleggio Marrakech</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Per il tuo soggiorno in Marocco, un solo indirizzo: Jacaranda Car - Noleggio auto
                                    Marrakech,
                                    specializzata nel noleggio auto 4x4 a Marrakech, offre veicoli a noleggio di qualità
                                    a prezzi molto competitivi.
                                    Un noleggio auto a Marrakech...<br> <a href="{{ route('car-rental-in-marrakech-it') }}">Per saperne di
                                        più >></a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-marrakech-aeroport_it') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                                    title="autonoleggio aeroporto di Marrakech"
                                    alt="autonoleggio aeroporto di Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-marrakech-aeroport_it') }}">Noleggio auto
                                    all'aeroporto di Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>La nostra agenzia di noleggio 4x4 di Marrakech ti offre un parco 4x4 giovane e vario
                                    all'aeroporto di Marrakech
                                    per soddisfare i tuoi desideri sia che tu sia in viaggio d'affari,
                                    con la famiglia o anche con gli amici, abbiamo il veicolo 4x4 di cui hai bisogno. ,
                                    a prezzi molto competitivi...<br><a
                                        href="{{ route('location-voiture-marrakech-aeroport_it') }}">Per saperne di
                                        più >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-marrakech-sans-caution_it') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                                    title="autonoleggio aeroporto di Marrakech"
                                    alt="autonoleggio aeroporto di Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-marrakech-sans-caution_it') }}">Noleggio auto
                                    senza deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Quando noleggi un'auto con Jacaranda, ti assicuriamo il miglior servizio nella città
                                    di Marrakech,
                                    a partire dai migliori prezzi e tanti altri vantaggi come il noleggio auto senza
                                    carta di credito,
                                    il nostro cliente è libero di pagare in contanti. Jacaranda offre ai propri clienti
                                    anche la possibilità di...<br><a
                                        href="{{ route('location-voiture-marrakech-sans-caution_it') }}">Per saperne
                                        di più >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-automatique-marrakech_it') }}"><img
                                    src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Noleggio auto automatiche a Marrakech"
                                    title="Noleggio auto automatiche a Marrakech"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-automatique-marrakech_it') }}">Noleggio auto con cambio automatico a Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Guida con facilità con le nostre auto automatiche</b><br>
                                        Comprendiamo che per alcuni viaggiatori guidare con facilità è una priorità.
                                        Ecco perché offriamo un'ampia selezione di auto automatiche a Marrakech per soddisfare le vostre esigenze.....<br><a
                                        href="{{ route('location-voiture-automatique-marrakech_it') }}">Per
                                        saperne di più >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-4-x-4-marrakech_it') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Noleggio auto automatiche a Marrakech"
                                    title="Noleggio auto automatiche a Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-4-x-4-marrakech_it') }}">Noleggio 4x4
                                    Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Ti preoccupi per il tuo mezzo di trasporto durante il tuo soggiorno a Marrakech?
                                    Jacarandacar la tua agenzia di noleggio 4x4 a Marrakech con personale qualificato
                                    con esperienza nel settore
                                    del noleggio e un giovane team di guide e assistenti ti offre una flotta
                                    diversificata di recenti 4×4
                                    dotati di diverse opzioni aggiuntive per il noleggio a breve o lungo termine
                                    adattato a le tue esigenze,
                                    il tutto a prezzi super interessanti e ponderati. Scopri il Marocco e vivi
                                    l'avventura nei deserti con
                                    la nostra gamma di confortevoli 4×4 e approfitta della nostra assistenza 24 ore su
                                    24, 7 giorni su 7.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-manuelle-marrakech_it') }}">
                                <img    src="{{ asset('assets/images/home/locations/manual-car-rental-marrakech.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Noleggio auto manuale Marrakech"
                                    title="Noleggio auto manuale Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_it') }}">Noleggio auto manuale Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Per gli amanti della guida tradizionale, offriamo una varietà di auto manuali a Marrakech.
                                Che tu stia cercando un veicolo compatto per percorrere le strette strade della Medina o un modello più spazioso per le tue fughe nella regione,..</p>

                                <br>
                                <a
                                    href="{{ route('location-voiture-manuelle-marrakech_it') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->


                </div>
            @elseif (Session::get('language') == 'pl')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-de-voiture-marrakech-pas-cher_pl') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                                    title="Tanio wynajem samochodów w Marrakeszu !" alt="Tanio wynajem samochodów w Marrakeszu !"
                                    style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-de-voiture-marrakech-pas-cher_pl') }}">Tanio wynajem samochodów w Marrakeszu !</a></h3>

                            <div class="opt-fl-text">

                                <p>
Szukasz niedrogiego wynajmu samochodu na pobyt w Marrakeszu? Nasza agencja dostarczy Ci pojazd bezpośrednio na lotnisko, zapewniając szybki i wygodny odbiór. Oferujemy wybór nowoczesnych, klimatyzowanych samochodów i SUV-ów, aby zapewnić Ci komfort. Zarezerwuj już dziś i skorzystaj z konkurencyjnych cen na bezstresową i przyjemną podróż!                                        href="{{ route('location-de-voiture-marrakech-pas-cher_pl') }}">Czytaj więcej >></a>

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-de-voiture-a-marrakech_pl') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                                    title="Wynajem samochodów w Marrakeszu"
                                    alt="Wynajem samochodów w Marrakeszu" style="width: 100%;"
                                    class="responsive-img"></a>

                            <h3 class="title"><a href="{{ route('location-de-voiture-a-marrakech_pl') }}">Wynajem samochodów w Marrakeszu</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Dla Państwa pobytu w Maroku jedno miejsce: Jacaranda Car - wynajem samochodów w Marrakeszu, specjalizujący się w wynajmie samochodów, terenówek w Marrakeszu,
                                oferuje Państwu wynajem samochodów wysokiej jakości w bardzo konkurencyjnych cenach. Wynajem samochodów w Marrakeszu...<br>
                                <a href="{{ route('location-de-voiture-a-marrakech_pl') }}">Czytaj więcej >></a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-marrakech-aeroport_pl') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                                    title="Wypożyczalnia samochodów na lotnisku w Marrakeszu"
                                    alt="Wypożyczalnia samochodów na lotnisku w Marrakeszu" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-marrakech-aeroport_pl') }}">Wypożyczalnia samochodów na lotnisku w Marrakeszu</a></h3>

                            <div class="opt-fl-text">
                                <p>Nasze biuro wynajmu samochodów terenowych w Marrakeszu oferuje Państwu młody i zróżnicowany park samochodów terenowych na lotnisku w Marrakeszu, aby zaspokoić Państwa potrzeby, czy podróżujecie Państwo służbowo, w rodzinie czy nawet ze znajomymi mamy odpowiedni samochód terenowy dla Państwa, w bardzo konkurencyjnych cenach...<br><a
                                        href="{{ route('location-voiture-marrakech-aeroport_pl') }}">Czytaj więcej >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-marrakech-sans-caution_pl') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                                    title="Wynajem samochodów bez kaucji"
                                    alt="Wynajem samochodów bez kaucji" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="{{ route('location-voiture-marrakech-sans-caution_pl') }}">Wynajem samochodów bez kaucji</a></h3>

                            <div class="opt-fl-text">
                                <p>Kiedy wynajmujesz samochód z Jacaranda, zapewniamy Ci najlepszą obsługę w mieście Marrakesz, począwszy od najlepszych cen i wielu innych korzyści, takich jak wynajem samochodu bez karty kredytowej, nasz klient może płacić gotówką. Jacaranda oferuje również swoim klientom możliwość...<br><a
                                        href="{{ route('location-voiture-marrakech-sans-caution_pl') }}">Czytaj więcej >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{route('location-voiture-automatique-marrakech_pl')}}"><img
                                    src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Wynajem samochodów automatycznych w Marrakeszu"
                                    title="Wynajem samochodów automatycznych w Marrakeszu"></a>


                            <h3 class="title"><a
                                    href="{{route('location-voiture-automatique-marrakech_pl')}}">Wynajem samochodów automatycznych w Marrakeszu</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Jazda Bezproblemowa z Naszymi Samochodami Automatycznymi</b><br>
                                Rozumiemy, że dla niektórych podróżnych jazda bezproblemowa jest priorytetem. Dlatego oferujemy szeroki wybór samochodów automatycznych w Marrakeszu, aby sprostać Państwa potrzebom...<br><a
                                        href="{{route('location-voiture-automatique-marrakech_pl')}}">Czytaj więcej >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-4-x-4-marrakech_pl') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Wynajem 4x4 w Marrakeszu"
                                    title="Wynajem 4x4 w Marrakeszu">
                            </a>


                            <h3 class="title"><a href="{{ route('location-4-x-4-marrakech_pl') }}">Wynajem 4x4 w Marrakeszu</a></h3>

                            <div class="opt-fl-text">
                                <p>Zadbacie o swój środek transportu podczas pobytu w Marrakeszu? Jacarandacar, Twoje biuro wynajmu samochodów terenowych w Marrakeszu,
                                z wykwalifikowanym personelem posiadającym doświadczenie w dziedzinie wynajmu oraz młody zespół przewodników i asystentów,
                                oferuje zróżnicowany park najnowszych modeli samochodów terenowych wyposażonych w różnorodne dodatkowe opcje do wynajęcia na krótki lub długi okres,
                                dopasowany do Twoich potrzeb, wszystko po bardzo atrakcyjnych i starannie przemyślanych cenach.
                                Odkryj Maroko i przeżyj przygodę na pustyniach dzięki naszej wygodnej gamie samochodów terenowych i skorzystaj z naszej pomocy dostępnej 24 godziny na dobę,
                                7 dni w tygodniu.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-manuelle-marrakech_pl') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Wypożyczalnia samochodów manualnych w Marrakeszu."
                                    title="Wypożyczalnia samochodów manualnych w Marrakeszu.">
                            </a>


                            <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_pl') }}">Wypożyczalnia samochodów manualnych w Marrakeszu.</a></h3>

                            <div class="opt-fl-text">
                                <p>Dla miłośników tradycyjnej jazdy proponujemy różnorodność samochodów z manualną skrzynią biegów w Marrakeszu. Czy szukasz kompaktowego pojazdu do poruszania się po wąskich uliczkach w Medynie, czy może bardziej przestronnego modelu na wycieczki po okolicy,..</p>

                                <br>
                                <a
                                    href="{{ route('location-voiture-manuelle-marrakech_pl') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->


                </div>
            @elseif (Session::get('language') == 'nl')
            <div class="row">

                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{route('location-de-voiture-marrakech-pas-cher_nl')}}"><img
                                src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                                title="Goedkope autoverhuur in Marrakech!" alt="Goedkope autoverhuur in Marrakech!"
                                style="width: 100%;" class="responsive-img"></a>


                        <h3 class="title"><a
                                href="{{route('location-de-voiture-marrakech-pas-cher_nl')}}">Goedkope autoverhuur in Marrakech!</a></h3>

                        <div class="opt-fl-text">

                            <p>
                            Op zoek naar een voordelige autohuur voor je verblijf in Marrakech? Onze verhuurservice levert je de auto direct op de luchthaven af, zodat je snel en gemakkelijk op weg kunt. We bieden een selectie van recente, airconditioned voertuigen en SUV’s voor optimaal comfort. Boek vandaag nog en profiteer van concurrerende tarieven voor een zorgeloze en aangename reis!<br> <a
                                    href="{{route('location-de-voiture-marrakech-pas-cher_nl')}}">Lees meer >></a>

                            </p>


                        </div>

                    </div>

                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{ route('location-de-voiture-a-marrakech_nl') }}"><img
                                src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                                title="Autoverhuur Marrakech"
                                alt="Autoverhuur Marrakech" style="width: 100%;"
                                class="responsive-img"></a>

                        <h3 class="title"><a href="{{ route('location-de-voiture-a-marrakech_nl') }}">Autoverhuur Marrakech</a>
                        </h3>

                        <div class="opt-fl-text">

                            <p>Voor uw verblijf in Marokko, slechts één adres: Jacaranda Car - autoverhuur Marrakech, gespecialiseerd in autoverhuur, 4x4 in Marrakech, biedt u kwaliteitsvoertuigen te huur aan tegen zeer concurrerende prijzen. Een auto huren in Marrakech...<br> <a href="{{ route('location-de-voiture-a-marrakech_nl') }}">Lees meer >></a>
                            </p>

                        </div>
                    </div>
                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{route('location-voiture-marrakech-aeroport_nl')}}"><img
                                src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                                title="Autoverhuur op de luchthaven van Marrakech"
                                alt="Autoverhuur op de luchthaven van Marrakech" style="width: 100%;"
                                class="responsive-img"></a>


                        <h3 class="title"><a
                                href="{{route('location-voiture-marrakech-aeroport_nl')}}">Autoverhuur op de luchthaven van Marrakech</a></h3>

                        <div class="opt-fl-text">
                            <p>Ons autoverhuurbedrijf in Marrakech biedt u een jong en gevarieerd wagenpark van 4x4's op de luchthaven van Marrakech om aan uw wensen te voldoen, of u nu op zakenreis bent, met familie of zelfs met vrienden, wij hebben de 4x4 die u nodig heeft, tegen zeer concurrerende prijzen...<br><a
                                    href="{{route('location-voiture-marrakech-aeroport_nl')}}">Lees meer >></a></p>



                        </div>

                    </div>


                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{route('location-voiture-marrakech-sans-caution_nl')}}"><img
                                src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                                title="Autoverhuur zonder borg"
                                alt="Autoverhuur zonder borg" style="width: 100%;"
                                class="responsive-img"></a>


                        <h3 class="title"><a
                                href="{{route('location-voiture-marrakech-sans-caution_nl')}}">Autoverhuur zonder borg</a></h3>

                        <div class="opt-fl-text">
                            <p>Wanneer u een auto huurt bij Jacaranda, verzekeren wij u van de beste service in de stad Marrakech, beginnend met de beste prijzen en vele andere voordelen zoals autoverhuur zonder creditcard, onze klant is vrij om contant te betalen. Jacaranda biedt haar klanten ook de mogelijkheid om...<br><a
                                    href="{{route('location-voiture-marrakech-sans-caution_nl')}}">Lees meer >></a></p>



                        </div>

                    </div>


                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{route('location-voiture-automatique-marrakech_nl')}}"><img
                                src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                                style="width: 100%;" class="responsive-img"
                                alt="Autoverhuur met automatische transmissie in Marrakech"
                                title="Autoverhuur met automatische transmissie in Marrakech"></a>


                        <h3 class="title"><a
                                href="{{route('location-voiture-automatique-marrakech_nl')}}">Autoverhuur met automatische transmissie in Marrakech</a></h3>

                        <div class="opt-fl-text">
                            <p><b>Rijd gemakkelijk met onze automatische auto's</b><br>
                                Wij begrijpen dat voor sommige reizigers, gemakkelijk rijden een prioriteit is.
                                Daarom bieden wij een ruime selectie automatische auto's in Marrakech om aan uw behoeften te voldoen...<br><a
                                    href="{{route('location-voiture-automatique-marrakech_nl')}}">Lees meer >></a></p>



                        </div>

                    </div>


                </div>
                <!-------------------------------------------------->
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{ route('location-4-x-4-marrakech_nl') }}">
                            <img    src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                                style="width: 100%;" class="responsive-img"
                                alt="Autoverhuur 4x4 Marrakech"
                                title="Autoverhuur 4x4 Marrakech">
                        </a>


                        <h3 class="title"><a href="{{ route('location-4-x-4-marrakech_nl') }}">Autoverhuur 4x4 Marrakech</a></h3>

                        <div class="opt-fl-text">
                            <p>Bent u bezorgd over uw vervoer tijdens uw verblijf in Marrakech? Jacarandacar, uw 4x4-verhuuragentschap in Marrakech, met gekwalificeerd personeel met ervaring in de verhuursector en een jong team van gidsen en assistenten, biedt u een gevarieerd aanbod aan recente 4x4-voertuigen, uitgerust met verschillende extra opties, te huur voor korte of lange termijn, aangepast aan uw behoeften, en dat alles tegen zeer aantrekkelijke en goed doordachte prijzen. Ontdek Marokko en beleef avonturen in de woestijnen met onze comfortabele 4x4-voertuigen en profiteer van onze 24/7 assistentie.</p>



                        </div>

                    </div>


                </div>
                <!-------------------------------------------------->

                <!-------------------------------------------------------------->

                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{ route('location-voiture-manuelle-marrakech_nl') }}">
                            <img    src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech_.webp') }}"
                                style="width: 100%;" class="responsive-img"
                                alt="Handgeschakelde autoverhuur Marrakech"
                                title="Handgeschakelde autoverhuur Marrakech">
                        </a>


                        <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_nl') }}">Handgeschakelde autoverhuur Marrakech</a></h3>

                        <div class="opt-fl-text">
                            <p>Voor liefhebbers van traditioneel rijden bieden wij een verscheidenheid aan handgeschakelde auto's in Marrakech aan. Of u nu op zoek bent naar een compact voertuig om door de smalle straatjes van de medina te navigeren, of naar een ruimer model voor uw uitstapjes in de regio,..</p>

                            <br>
                            <a
                                href="{{ route('location-voiture-manuelle-marrakech_nl') }}">{{ $static_data['strings']['read_more'] }}</a>



                        </div>

                    </div>


                </div>


                <!------------------------------------------------------------------------------->


            </div>
            @elseif (Session::get('language') == 'pt')
            <div class="row">

                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                        <a href="{{route('location-de-voiture-marrakech-pas-cher_pt')}}"><img
                            src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                            title="Aluguel de carros baratos em Marrakech!" alt="Aluguel de carros baratos em Marrakech!"
                            style="width: 100%;" class="responsive-img"></a>

                        <h3 class="title"><a
                            href="{{route('location-de-voiture-marrakech-pas-cher_pt')}}">Aluguel de carros baratos em Marrakech!</a></h3>

                        <div class="opt-fl-text">
                            <p>
                                Procurando um aluguel de carro acessível para a sua estadia em Marrakech? Nossa agência entrega o veículo diretamente no aeroporto, garantindo uma retirada rápida e conveniente. Oferecemos uma seleção de carros e SUVs recentes e climatizados para garantir seu conforto. Reserve hoje e aproveite tarifas competitivas para uma viagem sem estresse e agradável!<br> <a
                                    href="{{route('location-de-voiture-marrakech-pas-cher_pt')}}">Leia mais >></a>
                            </p>
                        </div>


                    </div>

                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{ route('location-de-voiture-a-marrakech_pt') }}"><img
                        src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                        title="Aluguer de carros em Marrakech"
                        alt="Aluguer de carros em Marrakech" style="width: 100%;"
                        class="responsive-img"></a>

                    <h3 class="title"><a href="{{ route('location-de-voiture-a-marrakech_pt') }}">Aluguer de carros em Marrakech</a></h3>

                    <div class="opt-fl-text">
                        <p>Para a sua estadia em Marrocos, apenas um endereço: Jacaranda Car - aluguer de carros em Marrakech, especializado em aluguer de carros e 4x4 em Marrakech, oferece-lhe veículos de qualidade para alugar a preços muito competitivos. Alugar um carro em Marrakech...<br> <a href="{{ route('location-de-voiture-a-marrakech_pt') }}">Leia mais >></a></p>
                    </div>

                    </div>
                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{route('location-voiture-marrakech-aeroport_pt')}}"><img
                        src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                        title="Aluguel de carros no aeroporto de Marrakech"
                        alt="Aluguel de carros no aeroporto de Marrakech" style="width: 100%;"
                        class="responsive-img"></a>

                    <h3 class="title"><a href="{{route('location-voiture-marrakech-aeroport_pt')}}">Aluguel de carros no aeroporto de Marrakech</a></h3>

                    <div class="opt-fl-text">
                        <p>A nossa empresa de aluguer de carros em Marrakech oferece-lhe uma frota jovem e variada de 4x4 no aeroporto de Marrakech para satisfazer as suas necessidades, seja em viagem de negócios, com a família ou mesmo com amigos, temos o 4x4 que precisa, a preços muito competitivos...<br><a href="{{route('location-voiture-marrakech-aeroport_pt')}}">Leia mais >></a></p>
                    </div>


                    </div>


                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{route('location-voiture-marrakech-sans-caution_pt')}}">
                        <img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                            title="Aluguel de carro sem caução"
                            alt="Aluguel de carro sem caução" style="width: 100%;"
                            class="responsive-img">
                    </a>

                    <h3 class="title"><a href="{{route('location-voiture-marrakech-sans-caution_pt')}}">Aluguel de carro sem caução</a></h3>

                    <div class="opt-fl-text">
                        <p>Quando você aluga um carro na Jacaranda, garantimos o melhor serviço na cidade de Marrakech, começando com os melhores preços e muitos outros benefícios, como aluguel de carro sem cartão de crédito; nosso cliente pode pagar em dinheiro. A Jacaranda também oferece aos seus clientes a possibilidade de...<br><a
                                href="{{route('location-voiture-marrakech-sans-caution_pt')}}">Leia mais >></a></p>
                    </div>


                    </div>


                </div>
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{route('location-voiture-automatique-marrakech_pt')}}">
                        <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                            style="width: 100%;" class="responsive-img"
                            alt="Aluguel de carros com transmissão automática em Marrakech"
                            title="Aluguel de carros com transmissão automática em Marrakech">
                    </a>

                    <h3 class="title">
                        <a href="{{route('location-voiture-automatique-marrakech_pt')}}">Aluguel de carros com transmissão automática em Marrakech</a>
                    </h3>

                    <div class="opt-fl-text">
                        <p><b>Dirija com facilidade com nossos carros automáticos</b><br>
                            Entendemos que para alguns viajantes, dirigir com facilidade é uma prioridade.
                            Por isso, oferecemos uma ampla seleção de carros automáticos em Marrakech para atender às suas necessidades...<br>
                            <a href="{{route('location-voiture-automatique-marrakech_pt')}}">Leia mais >></a></p>
                    </div>


                    </div>


                </div>
                <!-------------------------------------------------->
                <!-------------------------------------------------->
                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{ route('location-4-x-4-marrakech_pt') }}">
                        <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                            style="width: 100%;" class="responsive-img"
                            alt="Aluguel de 4x4 Marrakech"
                            title="Aluguel de 4x4 Marrakech">
                    </a>

                    <h3 class="title"><a href="{{ route('location-4-x-4-marrakech_pt') }}">Aluguel de 4x4 Marrakech</a></h3>

                    <div class="opt-fl-text">
                        <p>Está preocupado com o seu transporte durante a sua estadia em Marrakech? A Jacarandacar, a sua agência de aluguel de 4x4 em Marrakech, com uma equipe qualificada e experiente no setor de locação e uma equipe jovem de guias e assistentes, oferece uma variedade de veículos 4x4 recentes, equipados com várias opções extras, para aluguel de curto ou longo prazo, adaptados às suas necessidades, tudo isso a preços muito atraentes e bem pensados. Descubra o Marrocos e viva aventuras nos desertos com nossos veículos 4x4 confortáveis e aproveite nosso suporte 24/7.</p>
                    </div>


                    </div>


                </div>
                <!-------------------------------------------------->

                <!-------------------------------------------------------------->

                <div class="col-md-4 col-sm-12 box">

                    <div class="opt-fl-text-title">

                    <a href="{{ route('location-voiture-manuelle-marrakech_pt') }}">
                        <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech_.webp') }}"
                            style="width: 100%;" class="responsive-img"
                            alt="Aluguel de carros com câmbio manual em Marrakech"
                            title="Aluguel de carros com câmbio manual em Marrakech">
                    </a>

                    <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech_pt') }}">Aluguel de carros com câmbio manual em Marrakech</a></h3>

                    <div class="opt-fl-text">
                        <p>Para os amantes da condução tradicional, oferecemos uma variedade de carros com câmbio manual em Marrakech. Seja você está procurando um veículo compacto para navegar pelas ruas estreitas da medina ou um modelo mais espaçoso para suas excursões na região, ..</p>

                        <br>
                        <a href="{{ route('location-voiture-manuelle-marrakech_pt') }}">{{ $static_data['strings']['read_more'] }}</a>
                    </div>

                    </div>

                </div>


                <!------------------------------------------------------------------------------->


            </div>

            @else
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="https://www.jacarandacar.com/location-de-voiture-marrakech-pas-cher"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher.webp' }}"
                                    title="location voiture marrakech" alt="location voiture marrakech"
                                    style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://www.jacarandacar.com/location-de-voiture-marrakech-pas-cher">Location
                                    de voitures pas cher à Marrakech !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                   Vous cherchez une location de voiture abordable pour votre séjour à Marrakech ? Notre agence vous remet votre véhicule directement à l'aéroport, vous offrant ainsi un accès rapide et pratique. Nous proposons une gamme de voitures récentes et SUV climatisés pour garantir votre confort. Réservez dès aujourd'hui et bénéficiez de tarifs compétitifs pour un voyage agréable et sans tracas !<br> <a
                                        href="https://www.jacarandacar.com/location-de-voiture-marrakech-pas-cher">Lire
                                        plus >></a>

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-de-voiture-a-marrakech') }}"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech_.webp' }}"
                                    title="Location voitures Gueliz Marrakech"
                                    alt="Location voitures Gueliz Marrakech" style="width: 100%;"
                                    class="responsive-img"></a>

                            <h3 class="title"><a href="{{ route('location-de-voiture-a-marrakech') }}">Location de voiture Marrakech</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Pour votre séjour au Maroc, une seule adresse: Jacaranda Car - location voiture
                                    Marrakech , spécialisée dans la location de voitures, 4x4 à Marrakech , vous propose
                                    des véhicules de location et de qualité à des prix très compétitifs. Une location de
                                    voiture à Marrakech...<br> <a href="{{ route('location-de-voiture-a-marrakech') }}">Lire plus >></a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="https://www.jacarandacar.com/location-voiture-marrakech-aeroport"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech_.webp' }}"
                                    title="location voiture marrakech aéroport"
                                    alt="location voiture marrakech aéroport" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://www.jacarandacar.com/location-voiture-marrakech-aeroport">Location de
                                    voiture aéroport Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Notre Agence de Location 4x4 Marrakech vous propose un Parc de 4x4 jeune et varié sur
                                    l'aeroport de Marrakech pour combler vos désirs que vous soyez en voyage d'affaire,
                                    en famille ou même entre amis on a le véhicule 4x4 qu'il vos faut, a des prix très
                                    compétitifs...<br><a
                                        href="https://www.jacarandacar.com/location-voiture-marrakech-aeroport">Lire
                                        plus >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="https://jacarandacar.com/location-voiture-marrakech-sans-caution"><img
                                    src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech_.webp' }}"
                                    title="location voiture marrakech aéroport"
                                    alt="location voiture marrakech aéroport" style="width: 100%;"
                                    class="responsive-img"></a>


                            <h3 class="title"><a
                                    href="https://jacarandacar.com/location-voiture-marrakech-sans-caution">Location de
                                    voitures sans caution</a></h3>

                            <div class="opt-fl-text">
                                <p>Lorsque vous louez une voiture avec Jacaranda, nous vous assurons le meilleur service
                                    dans la ville de Marrakech, à commencer par les meilleurs prix et les nombreux
                                    autres avantages tels que la location de voiture sans carte de crédit, notre client
                                    est libre de payer en espèces. Jacaranda offre également à ses clients la
                                    possibilité de...<br><a
                                        href="https://jacarandacar.com/location-voiture-marrakech-sans-caution">Lire
                                        plus >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{route('location-voiture-automatique-marrakech')}}"><img
                                    src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="location voiture automatique Marrakech"
                                    title="location voiture automatique Marrakech"></a>


                            <h3 class="title"><a
                                    href="{{route('location-voiture-automatique-marrakech')}}">Location
                                    de voitures automatiques à Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Conduisez en Toute Simplicité avec nos Voitures Automatiques</b><br>
                                        Nous comprenons que pour certains voyageurs, la conduite en toute simplicité est une priorité.
                                        C'est pourquoi nous proposons une large sélection de voitures automatiques à Marrakech pour répondre à vos besoins.....<br><a
                                        href="{{route('location-voiture-automatique-marrakech')}}">Lire
                                        plus >></a></p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-4-x-4-marrakech') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="location voiture automatique Marrakech"
                                    title="location voiture automatique Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-4-x-4-marrakech') }}">Location 4x4
                                    Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Vous souciez de votre moyen de transport durant votre séjour à Marrakech ?
                                    Jacarandacar votre agence de location 4x4 à Marrakech avec un personnel qualifiés
                                    dotés d’une expérience dans le domaine de location et une équipe jeune de guides et
                                    assistants vous propose un parc diversifiés de 4×4 récente équipés de plusieurs
                                    options supplémentaire à louer pour une courte ou longue durée adapté à votre
                                    besoin, le tout à des prix super attractifs et bien étudiés.
                                    Découvrez le Maroc et vivez l’aventure dans les déserts avec notre gamme de 4×4
                                    confortables et profitez de notre assistance 24h/24 7jrs/7.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="{{ route('location-voiture-manuelle-marrakech') }}">
                                <img    src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech_.webp') }}"
                                    style="width: 100%;" class="responsive-img"
                                    alt="Location voiture manuelle Marrakech"
                                    title="Location voiture manuelle Marrakech">
                            </a>


                            <h3 class="title"><a href="{{ route('location-voiture-manuelle-marrakech') }}">Location voiture manuelle Marrakech</a></h3>

                            <div class="opt-fl-text">
                                <p>Pour les amateurs de conduite traditionnelle, nous proposons une variété de voitures manuelles à Marrakech.
                                Que vous recherchiez un véhicule compact pour naviguer dans les ruelles étroites de la Médina ou un modèle plus spacieux pour vos escapades dans la région,..</p>

                                <br>
                                <a
                                    href="{{ route('location-voiture-manuelle-marrakech') }}">{{ $static_data['strings']['read_more'] }}</a>



                            </div>

                        </div>


                    </div>


                <!------------------------------------------------------------------------------->


                </div>
            @endif
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title">{{ $static_data['strings']['opt_fl_title4'] }}</h3>

                </div>
                <div class="col-md-6">
                    <div class="opt-fl-text-title">



                        <div class="opt-fl-text">

                            @php

                                echo $static_data['strings']['opt_fl_text4'];

                            @endphp

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @if (Session::get('language') == 'en')
                        <img    src="{{ url('/') . '/assets/images/home/locations/staying-marrakech.png' }}"
                            alt="Alquila un coche barato en Marrakech" title="Alquila un coche barato en Marrakech"
                            style="width: inherit;" class="responsive-img">
                    @elseif (Session::get('language') == 'pt')
                        <img src="{{ url('/') . '/assets/images/home/locations/sejour-location-voiture-marrakech.webp' }}"
                            alt="Alugue um carro barato em Marrakech" title="Alugue um carro barato em Marrakech"
                            style="width: inherit;" class="responsive-img">

                    @else
                        <img    src="{{ url('/') . '/assets/images/home/locations/sejour-location-voiture-marrakech.webp' }}"
                            alt="Alquila un coche barato en Marrakech" title="Alquila un coche barato en Marrakech"
                            style="width: inherit;" class="responsive-img">
                    @endif


                </div>
            </div>
        </div>

    </div>


    @if ($static_data['design_settings']['show_featured_locations'])
        <div id="second-section" class="container-fluid second-section">

            <div class="container first-container">

                <div class="row">

                    <div class="col-sm-12 mbot20">

                        <h2 class="section-title-dark">{{ $static_data['strings']['opt_fl_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['opt_fl_subheading'] }}</p>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="featured-location box-shadow">

                            <div class="inner bg-overlay">

                                <a href="#">

                                    <img    src="{{ url('/') . '/assets/images/home/locations/marrakech_medina_image.jpg' }}"
                                        class="responsive-img">

                                    <h3 class="title">{{ $static_data['strings']['opt_fl_title1'] }}</h3>

                                    <div class="hover-overlay">

                                        <div class="hover-overlay-inner"></div>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="featured-location box-shadow">

                            <div class="inner bg-overlay">

                                <a href="#">

                                    <img    src="{{ url('/') . '/assets/images/home/locations/marrakech_ville_wall.jpg' }}"
                                        class="responsive-img">

                                    <h3 class="title">{{ $static_data['strings']['opt_fl_title2'] }}</h3>

                                    <div class="hover-overlay">

                                        <div class="hover-overlay-inner"></div>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="featured-location box-shadow">

                            <div class="inner bg-overlay">

                                <a href="#">

                                    <img    src="{{ url('/') . '/assets/images/home/locations/aeroport-7.jpg' }}"
                                        class="responsive-img">

                                    <h3 class="title">{{ $static_data['strings']['opt_fl_title3'] }}</h3>

                                    <div class="hover-overlay">

                                        <div class="hover-overlay-inner"></div>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    @endif

    @if ($static_data['design_settings']['show_featured_cars'])

        <div class="container-fluid third-section">

            <div class="container second-container">

                <div class="row">

                    <div class="col-sm-12">

                        <h2 class="section-title-dark">{{ $static_data['strings']['opt_fp_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['opt_fp_subheading'] }}</p>

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

            </div>

        </div>

    @endif

    @if ($static_data['design_settings']['show_quick_boxes'])
        <div class="container-fluid third-section bg-overlay {{$static_data['design_settings']['qs_background'] ? 'qs_background_img' : ''}}" >

            <div class="container third-container">

                <div class="row">

                    <div class="col-sm-12 mtop20">

                        <h2 class="section-title-light">{{ $static_data['strings']['opt_qs_heading'] }}</h2>

                        <p class="section-description-light">{{ $static_data['strings']['opt_qs_subheading'] }}</p>

                    </div>

                </div>

            </div>

        </div>
    @endif


    <div id="second-section" class="container-fluid second-section">

        <div class="container first-container">


            @if (Session::get('language') == 'en')
                <p>
                <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    With Jacarandacar, enjoy a tempting <b> <a href="/rental"> car rental Marrakech </a> </b> promo!
                    Indeed our agency offers you to rent your rental car for only <b> 30 € </b> per day. <br><br>

                    Jacarandacar has a successful experience in short and long term car rental Marrakech. Equipped with
                    a large fleet of utility cars and SUV cars.

                    So book online and at the best price your <b> <a href="/rental"> car rental in Marrakech </a> </b>
                    with Jacarandacar!
                    Indeed, for the rental of a long-term car in Marrakech, for the rental of an SUV car or even in the
                    event that you will need the service of an experienced driver, Jacarandacar car meets your
                    expectations in the shortest possible time. time limit !
                </p>

                <div class="row why">
                    <h2 class="slider-heading" style="color:black;">
                        Why choosing Jacaranda Car for your car rental in Marrakech?
                    </h2>
                    <p>When planning your trip to <b>Marrakech</b>, finding the right <b>car rental</b> service is
                        essential to ensure a pleasant experience. enjoyable and hassle-free trip. At Jacaranda Car, we
                        pride ourselves on offering a quality <b><a href="https://jacarandacar.com/rental">car
                                rental</a></b> solution that will meet all your needs.</p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Wide choice of vehicles</b><br> We have a diverse fleet of vehicles, ranging from <b><a
                                    href="https://jacarandacar.com/rental/car-rental-marrakech">cars </a></b> from
                            compacts to spacious SUVs and luxury sedans. Whatever your style of travel or the number of
                            people with you, we have the perfect car for you.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Competitive rates</b><br> At Jacaranda Car, we believe in the importance of offering
                            <b>competitive rates</b> without compromising the quality of service. You can benefit from
                            our affordable rates without sacrificing the comfort and reliability of our cars.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Ease of booking</b><br> We have simplified the booking process to save you time and
                            effort. You can book your car online with just a few clicks, and our dedicated team is
                            always ready to assist you and answer all your questions.
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Top notch customer service</b><br> Your satisfaction is our top priority. Our friendly
                            and professional team are here to assist you with every step of your car rental, from
                            booking to vehicle return. We are committed to providing top-notch customer service to make
                            your experience as enjoyable as possible.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech "
                                class="responsive-img"><br>
                            <b>Flexibility and Convenience</b><br> We understand that your travel plans may change.
                            That's why we offer great flexibility in picking up and returning your rental car. Plus, we
                            offer vehicle delivery and collection options for your convenience.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>When you choose Jacaranda Car for your <b>car rental in Marrakech</b>, you can have peace of mind
                        knowing that you are getting reliable service, a wide choice of vehicles and competitive rates.
                        Trust us to make your <b>trip to Marrakech</b> as pleasant as possible."
                    </p>
                </div>
            @elseif (Session::get('language') == 'es')
                <p>
                <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Con Jacarandacar aproveche una atractiva promoción de <b><a href="{{route('home')}}">alquiler coches Marrakech</a></b> !
                    De hecho, nuestra agencia le ofrece alquilar su coche de alquiler por solo <b>20 €</b> por día.<br>

                    Jacarandacar tiene una exitosa experiencia en el <b><a href="{{route('home')}}">alquiler coches Marrakech</a></b> a corto y largo plazo.
                    Equipado con una amplia flota de utilitarios y vehículos todoterreno.

                    Así que reserva online y al mejor precio tu coche de alquiler en
                    Marrakech con Jacarandacar ! De hecho, para el alquiler de un coche a largo plazo en Marrakech,
                    para el alquiler de un coche todoterreno o incluso en el caso de que necesite el servicio de un
                    conductor experimentado,
                    coche Jacarandacar cumple con sus expectativas lo antes posible !
                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Dónde hospedarse en Marrakech ?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            En Marrakech también hay buenas fórmulas baratas para <b>alojarse</b> en
                            villas de lujo
                                    con piscina
                            de 03 a 05 habitaciones o en un riad.<br>
                            Puede elegir su <b>Villa</b> o <b>Apartamento</b> o <b>Riad</b> amueblado en Marrakech en la
                            medina o en el palmeral a
                            través de nuestros socios inmobiliarios de
                                    Marrakech con todas las comodidades
                            (cocina equipada, pantalla de plasma, aire acondicionado, piscina, etc.)
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img    src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Alquiler de coches baratos en Marrakech"
                            alt="Alquiler de coches baratos en Marrakech" style="width: 100%;"
                            class="responsive-img">
                    </div>
                </div>
                <!--<div class="row" style="background-color:gray;">
                    <div class="col-md-12">
                        <h2 class="slider-heading" style="color:black;">
                         Nos partenaires
                        </h2>
                    </div>
                    <div class="col-md-12">
                    <div class="container-fluid">
                          <section class="customer-logos slider">
                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-de-communication-evenementielle-marrakech.webp
                                                        ' }}">
                            </div>

                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-immobiliere-marrakech.webp
                                                        ' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}">
                            </div>
                          </section>


                        </div>
                    </div>
                </div>-->
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">POR QUÉ ELEGIR JACARANDA CAR PARA SU ALQUILER COCHES MARRAKECH ? </h2>
                    <p>
                        Al planificar su viaje <b>a Marrakech</b>, encontrar el servicio de
                        <b>alquiler</b> de <b>coches</b> adecuado es esencial para garantizar una experiencia de viaje
                        agradable y sin complicaciones.
                        En Jacaranda Car, nos enorgullecemos de ofrecer una solución de
                        <b><a href="{{ route('parc_auto_es') }}">alquiler de vehículos</a></b>
                        de calidad que satisfará todas sus necesidades.
                    </p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Alquiler de coches baratos en Marrakech"
                                alt="Alquiler de coches baratos en Marrakech" class="responsive-img"><br>
                            <b>Amplia variedad de vehículos </b><br>
                            Contamos con una diversa flota <b><a href="{{ route('parc_auto_es') }}">de
                                    vehículos</a></b>,
                            que van desde autos compactos hasta SUV espaciosos y sedanes de lujo.
                            Sea cual sea tu estilo de viaje o el número de personas que te acompañen, tenemos el coche
                            perfecto para ti.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Alquiler de coches baratos en Marrakech"
                                alt="Alquiler de coches baratos en Marrakech" class="responsive-img"><br>
                            <b>Tarifas competitivas</b><br>
                            En Jacaranda Car creemos en la importancia de ofrecer <b>tarifas competitivas</b> sin
                            comprometer la calidad del servicio.
                            Puede beneficiarse de nuestras tarifas asequibles sin sacrificar la comodidad y la
                            fiabilidad de nuestros coches.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Alquiler de coches baratos en Marrakech"
                                alt="Alquiler de coches baratos en Marrakech" class="responsive-img"><br>
                            <b>Facilidad de reserva</b><br>
                            Hemos simplificado el proceso de reserva para ahorrarle tiempo y energía.
                            Puede reservar su automóvil en línea con solo unos pocos clics,
                            y nuestro equipo dedicado siempre está listo para ayudarlo y responder todas sus preguntas.
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Alquiler de coches baratos en Marrakech"
                                alt="Alquiler de coches baratos en Marrakech" class="responsive-img"><br>
                            <b>Servicio al cliente de primer nivel</b><br>

                            Su satisfacción es nuestra máxima prioridad. Nuestro amable y profesional equipo está aquí
                            para ayudarlo en cada paso del camino.
                            alquiler de coches, desde la reserva hasta la devolución del vehículo. nos comprometemos
                            Brindar un servicio al cliente de primer nivel para que su experiencia sea lo más placentera
                            posible.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Alquiler de coches baratos en Marrakech"
                                alt="Alquiler de coches baratos en Marrakech" class="responsive-img"><br>
                            <b>Flexibilidad y conveniencia</b><br>
                            Entendemos que sus planes de viaje pueden cambiar. Por eso ofrecemos una gran flexibilidad a
                            la hora de recoger y
                            devolver tu coche de alquiler. Además, ofrecemos opciones de entrega y recogida de vehículos
                            para su comodidad.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>
                        Cuando elige Jacaranda Car para su <b>alquiler de autos en Marrakech</b>,
                        puede estar tranquilo sabiendo que está recibiendo un servicio confiable,
                        una amplia selección de vehículos y tarifas competitivas. Confía en nosotros para que tu
                        viaje a Marrakech sea lo más agradable posible.
                    </p>
                </div>
            @elseif (Session::get('language') == 'it')
                <p>
                <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Con Jacarandacar, approfitta di un'interessante promozione sul <b><a
                            href="{{ route('home') }}">noleggio auto Marrakech</a></b>!
                    Infatti la nostra agenzia ti offre di noleggiare la tua auto a noleggio a soli <b>20€</b> al
                    giorno.<br>
                    Jacarandacar ha un'esperienza di successo nel noleggio auto a breve e lungo termine a Marrakech.
                    Dotato di un'ampia flotta di utilitarie e SUV.
                    Prenota online e al miglior prezzo il tuo <b><a href="{{ route('home') }}">noleggio auto a
                            Marrakech</a></b> con Jacarandacar! Infatti,
                    per il noleggio di un'auto a lungo termine a Marrakech, per il noleggio di un'auto SUV o anche nel
                    caso in cui tu abbia bisogno del
                    servizio di un autista esperto, l'auto Jacarandacar soddisfa le tue aspettative il prima possibile.

                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Dove dormire a Marrakech?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            A Marrakech ci sono anche formule buone ed economiche per <b>soggiornare</b> a ville di
                                    lusso con piscina da 03 a 05 camere o in riad.<br>
                            Puoi scegliere la tua <b>Villa</b> o <b>Appartamento</b> o <b>Riad</b> arredato a
                            Marrakech nella medina o nel palmeto attraverso i nostri partner di immobiliare Marrakech con tutti i comfort (
                            cucina attrezzata, schermo al plasma, aria condizionata, piscina ecc.)

                        </p>
                    </div>
                    <div class="col-md-6">
                        <img    src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                            style="width: 100%;" class="responsive-img">
                    </div>
                </div>
                <!--<div class="row" style="background-color:gray;">
                    <div class="col-md-12">
                        <h2 class="slider-heading" style="color:black;">
                         Nos partenaires
                        </h2>
                    </div>
                    <div class="col-md-12">
                    <div class="container-fluid">
                          <section class="customer-logos slider">
                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-de-communication-evenementielle-marrakech.webp
                                                        ' }}">
                            </div>

                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-immobiliere-marrakech.webp
                                                        ' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}">
                            </div>
                          </section>


                        </div>
                    </div>
                </div>-->
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">PERCHÉ SCEGLIERE JACARANDA CAR PER IL TUO NOLEGGIO
                        AUTO A MARRAKECH ?</h2>
                    <p>Quando pianifichi il tuo viaggio <b>a Marrakech</b>, trovare quello giusto è essenziale
                        <b>auto</b> <b>noleggio</b> per garantire una piacevole esperienza di viaggio
                        e senza problemi. Noi di Jacaranda Car siamo orgogliosi di offrire un <b><a
                                href="{{ route('parc_auto_it') }}">noleggio auto</a></b> da
                        qualità che soddisferà tutte le vostre esigenze.
                    </p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                                class="responsive-img"><br>
                            <b>Ampia scelta di veicoli</b><br> Disponiamo di una flotta diversificata di veicoli,
                            che vanno da <b><a href="{{ route('parc_auto_it') }}">automobili</a></b>
                            dai compatti ai SUV spaziosi, comprese le berline di lusso. Qualunque sia il tuo stile
                            viaggio o il numero di persone con te, abbiamo l'auto perfetta per te.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                                class="responsive-img"><br>
                            <b>Tariffe competitive</b><br> Noi di Jacaranda Car crediamo nell'importanza dell'offerta
                            <b>tariffe competitive</b> senza compromettere la qualità del servizio. Potete
                            beneficiare delle nostre tariffe convenienti senza sacrificare il comfort e l'affidabilità
                            del nostro
                            automobili.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                                class="responsive-img"><br>
                            <b>Facilità di prenotazione</b><br> Abbiamo semplificato il processo di prenotazione a
                            risparmiare tempo ed energia. Puoi prenotare la tua auto online su
                            bastano pochi clic e il nostro team dedicato è sempre pronto ad assisterti e rispondere alle
                            tue
                            tutte le tue domande.
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                                class="responsive-img"><br>
                            <b>Servizio clienti di prim'ordine</b><br> La tua soddisfazione è la nostra massima
                            priorità.
                            Il nostro team amichevole e professionale è qui per aiutarti in ogni fase del processo.
                            noleggio auto, dalla prenotazione fino alla riconsegna del veicolo. Ci impegniamo
                            per fornire un servizio clienti di prim'ordine per rendere la tua esperienza piacevole
                            possibile.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Noleggio auto low cost in Marrakech" alt="Noleggio auto low cost in Marrakech"
                                class="responsive-img"><br>
                            <b>Flessibilità e convenienza</b><br> Comprendiamo che i tuoi piani di viaggio potrebbero
                            cambiare.
                            Ecco perché offriamo una grande flessibilità nei tempi di ritiro e
                            di ritorno dalla tua auto a noleggio. Inoltre, offriamo opzioni di consegna e
                            recupero del veicolo per la vostra comodità.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>
                        Quando scegli Jacaranda Car per il tuo <b>noleggio auto a Marrakech</b>, tu
                        puoi stare tranquillo sapendo che stai ricevendo un servizio affidabile, un ampio
                        scelta di veicoli e tariffe competitive. Affidati a noi per fare il tuo <b>viaggio a
                            Marrakech</b> il più piacevole possibile.
                    </p>
                </div>
            @elseif (Session::get('language') == 'pl')
                <p>
                    <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Aby zatrzymać przyciągającą promocję <b><a href="/wynajem">wynajmu samochodów w Marrakeszu</a></b> z Jacarandacar! Nasze biuro oferuje wynajem samochodów już od <b>20€</b> dziennie.<br>

                    Jacarandacar cieszy się udanym doświadczeniem w krótko- i długoterminowym wynajmie samochodów w Marrakeszu. Posiadamy duży parking samochodowy z samochodami dostawczymi i SUV-ami.

                    Zarezerwuj więc online i w najlepszej cenie swój <b><a href="/wynajem">wynajem samochodów w Marrakeszu</a></b> z Jacarandacar! Faktycznie, w przypadku wynajmu długoterminowego samochodu w Marrakeszu, wynajmu SUV-a lub nawet w przypadku potrzeby usług doświadczonego kierowcy, Jacarandacar odpowie na Twoje oczekiwania w najkrótszym możliwym czasie!

                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Gdzie się zatrzymać w Marrakeszu ?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            W Marrakeszu są także dobre, niedrogie oferty na <b>nocleg</b> w luksusowych willach z basenem o 03-05 pokojach lub w riadach.<br>
                            Możesz wybrać swoją <b>Willę</b> lub <b>Apartament</b> lub <b>Riad</b> w Marrakeszu w medynie lub w palmiarni poprzez naszych partnerów z
                            nieruchomości Marrakesz z pełnym komfortem (wyposażona kuchnia, telewizor plasma, klimatyzacja, basen itp...).

                        </p>
                    </div>
                    <div class="col-md-6">
                        <img    src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Wynajem tanich samochodów w Marrakeszu" alt="Wynajem tanich samochodów w Marrakeszu"
                            style="width: 100%;" class="responsive-img">
                    </div>
                </div>
                <!--<div class="row" style="background-color:gray;">
                    <div class="col-md-12">
                        <h2 class="slider-heading" style="color:black;">
                         Nos partenaires
                        </h2>
                    </div>
                    <div class="col-md-12">
                    <div class="container-fluid">
                          <section class="customer-logos slider">
                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-de-communication-evenementielle-marrakech.webp
                                                        ' }}">
                            </div>

                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-immobiliere-marrakech.webp
                                                        ' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}">
                            </div>
                          </section>


                        </div>
                    </div>
                </div>-->
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">
                        DLACZEGO WYBRAĆ JACARANDA CAR NA SWOJĄ WYPOŻYCZALNIĘ SAMOCHODÓW W MARRAKESZU ? </h2>
                    <p>Kiedy planujesz swoją podróż <b>do Marrakeszu</b>, ważne jest znalezienie odpowiedniej usługi <b>wynajmu</b> <b>samochodu</b>,
                    aby zapewnić sobie przyjemne i bezproblemowe doświadczenie podróży. W Jacaranda Car z dumą oferujemy wysokiej jakości usługę <b>
                        <a href="{{ route('parc_auto_pl') }}">wynajmu samochodów</a></b>, która spełni wszystkie Twoje potrzeby.</p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Tanie wypożyczenie samochodu w Marrakeszu" alt="Tanie wypożyczenie samochodu w Marrakeszu"
                                class="responsive-img"><br>
                            <b>Duży wybór pojazdów</b><br> Posiadamy zróżnicowany flotę pojazdów, począwszy od
                            <b><a href="https://jacarandacar.com/car-rental-marrakech">kompaktowych samochodów</a></b>,
                            przez przestronne SUV-y, aż po luksusowe limuzyny. Bez względu na Twój styl podróżowania lub liczbę osób towarzyszących, mamy idealny samochód dla Ciebie.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Tanie wypożyczenie samochodu w Marrakeszu" alt="Tanie wypożyczenie samochodu w Marrakeszu"
                                class="responsive-img"><br>
                            <b>Ceny konkurencyjne</b><br> W Jacaranda Car wierzymy w znaczenie oferowania <b>cen konkurencyjnych</b> bez kompromisów w jakości obsługi.
                            Możesz skorzystać z naszych przystępnych cen, nie rezygnując z komfortu i niezawodności naszych samochodów.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Tanie wypożyczenie samochodu w Marrakeszu" alt="Tanie wypożyczenie samochodu w Marrakeszu"
                                class="responsive-img"><br>
                            <b>Łatwość rezerwacji</b><br> Zupiększylismy proces rezerwacji,
                            aby zaoszczędzić Twój czas i energię. Możesz zarezerwować swój samochód online za pomocą kilku kliknięć,
                            a nasz oddany zespół jest zawsze gotowy, aby Ci pomóc i odpowiedzieć na wszystkie Twoje pytania.
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Tanie wypożyczenie samochodu w Marrakeszu" alt="Tanie wypożyczenie samochodu w Marrakeszu"
                                class="responsive-img"><br>
                            <b>Obsługa klienta na najwyższym poziomie</b><br> Państwa satysfakcja jest naszym najwyższym priorytetem.
                            Nasz przyjazny i profesjonalny zespół jest tu, aby pomóc na każdym etapie wypożyczenia samochodu,
                            począwszy od rezerwacji, aż do zwrotu pojazdu. Zobowiązujemy się do świadczenia obsługi klienta na najwyższym poziomie,
                            aby sprawić, że Państwa doświadczenie będzie jak najbardziej przyjemne.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Tanie wypożyczenie samochodu w Marrakeszu" alt="Tanie wypożyczenie samochodu w Marrakeszu"
                                class="responsive-img"><br>
                                <b>Elastyczność i wygoda</b><br> Rozumiemy, że Twoje plany podróży mogą się zmieniać.
                                Dlatego oferujemy szeroką elastyczność w godzinach odbioru i zwrotu wynajętego samochodu.
                                Dodatkowo proponujemy opcje dostawy i odbioru pojazdu dla Twojej wygody.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>Gdy wybierzesz Jacaranda Car na <b>wynajem samochodów w Marrakeszu</b>,
                    możesz być spokojny, wiedząc, że korzystasz z niezawodnej obsługi,
                    dużej gamy pojazdów i konkurencyjnych cen. Zaufaj nam, aby uczynić Twój <b>wyjazd do Marrakeszu</b> jak najbardziej przyjemnym.
                    </p>
                </div>
            @elseif (Session::get('language') == 'nl')
                <p>
                    <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Met Jacarandacar kunt u profiteren van een verleidelijke promotie voor autoverhuur in Marrakech! Ons bureau biedt u de mogelijkheid om uw huurauto te huren voor slechts €20 per dag.

                    Jacarandacar heeft een succesvolle ervaring in zowel korte als lange termijn autoverhuur in Marrakech. Met een uitgebreid wagenpark bestaande uit bestelwagens en SUV's.

                    Boek daarom uw autoverhuur in Marrakech online en tegen de beste prijs bij Jacarandacar! Of u nu een auto voor lange termijn in Marrakech wilt huren, een SUV wilt huren, of zelfs als u een ervaren chauffeur nodig heeft, Jacarandacar staat voor u klaar om aan uw wensen te voldoen!
                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Waar te verblijven in Marrakech ?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            In Marrakech zijn er ook goede en goedkope opties om te verblijven in luxe villa's met zwembad met 3 tot 5 kamers of in een riad. U kunt uw villa, appartement of gemeubileerde riad in Marrakech kiezen, ofwel in de medina of in de palmeraie, via onze partners in onroerend goed in Marrakech, met alle comfort (uitgeruste keuken, plasma-tv, airconditioning, zwembad, enzovoort).
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img    src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                            style="width: 100%;" class="responsive-img">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">
                        Waarom kiezen voor Jacaranda Car voor uw autoverhuur in Marrakech? </h2>
                    <p>Wanneer je je reis naar <b>Marrakech</b> plant, is het essentieel om de juiste <b>autoverhuur</b> service te vinden om een aangename en stressvrije reiservaring te garanderen. Bij Jacaranda Car zijn we trots om een kwalitatieve <b><a href="{{route('parc_auto_nl')}}">autoverhuur</a></b> oplossing aan te bieden die aan al je behoeften zal voldoen.</p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                                class="responsive-img"><br>
                                <b>Groot assortiment voertuigen </b><br> We hebben een gevarieerde vloot voertuigen, variërend van <b><a href="{{route('parc_auto_nl')}}">compacte auto's</a></b> tot ruime SUV's en luxe sedans. Wat uw reisstijl of het aantal mensen met u ook is, we hebben de perfecte auto voor u.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                                class="responsive-img"><br>
                                <b>Concurrerende tarieven</b><br> Bij Jacaranda Car geloven we in het belang van het aanbieden van <b>concurrerende tarieven</b> zonder concessies te doen aan de kwaliteit van de service. U kunt profiteren van onze betaalbare tarieven zonder in te leveren op het comfort en de betrouwbaarheid van onze auto's.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                                class="responsive-img"><br>
                                <b>Reserveringsgemak</b><br> We hebben het reserveringsproces vereenvoudigd om u tijd en energie te besparen. U kunt uw auto online reserveren in slechts een paar klikken, en ons toegewijde team staat altijd klaar om u te helpen en al uw vragen te beantwoorden."
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                                class="responsive-img"><br>
                                <b>Eersteklas klantenservice</b><br> Uw tevredenheid is onze absolute prioriteit. Ons vriendelijke en professionele team staat klaar om u te helpen bij elke stap van uw autoverhuur, van reservering tot het terugbrengen van het voertuig. We zijn toegewijd aan het leveren van eersteklas klantenservice om uw ervaring zo aangenaam mogelijk te maken.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Goedkope autoverhuur in Marrakech" alt="Goedkope autoverhuur in Marrakech"
                                class="responsive-img"><br>
                                <b>Flexibiliteit en gemak</b><br> We begrijpen dat uw reisplannen kunnen veranderen. Daarom bieden wij grote flexibiliteit in de ophaal- en terugbrengtijden van uw huurauto. Bovendien bieden wij opties voor het afleveren en ophalen van het voertuig voor uw gemak.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>Wanneer u Jacaranda Car kiest voor uw <b>autoverhuur in Marrakech</b>, kunt u gerust zijn in de wetenschap dat u kunt rekenen op betrouwbare service, een ruime keuze aan voertuigen en concurrerende tarieven. Vertrouw op ons om uw <b>reis naar Marrakech</b> zo aangenaam mogelijk te maken.
                    </p>
                </div>
            @elseif (Session::get('language') == 'pt')
                <p>
                    <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Com a Jacarandacar, você pode aproveitar uma promoção irresistível para aluguel de carros em Marrakech! Nosso escritório oferece a oportunidade de alugar seu carro por apenas €20 por dia.

                    A Jacarandacar tem uma experiência bem-sucedida tanto em aluguel de curto quanto de longo prazo em Marrakech. Com uma frota extensa que inclui furgões e SUVs.

                    Portanto, reserve seu aluguel de carro em Marrakech online e pelo melhor preço com a Jacarandacar! Seja para alugar um carro por longo prazo em Marrakech, um SUV ou até mesmo se precisar de um motorista experiente, a Jacarandacar está pronta para atender suas necessidades!
                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Onde ficar em Marrakech?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Em Marrakech, também há boas e opções baratas para se hospedar em vilas de luxo com piscina, com 3 a 5 quartos, ou em um riad. Você pode escolher sua vila, apartamento ou riad mobiliado em Marrakech, seja na medina ou na palmeraie, através de nossos parceiros imobiliários em Marrakech, com todo o conforto (cozinha equipada, TV plasma, ar condicionado, piscina, etc.).
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                            style="width: 100%;" class="responsive-img">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">
                        Por que escolher a Jacaranda Car para o seu aluguel de carros em Marrakech? </h2>
                    <p>Ao planejar sua viagem para <b>Marrakech</b>, é essencial encontrar o serviço de <b>aluguel de carros</b> certo para garantir uma experiência de viagem agradável e sem estresse. Na Jacaranda Car, temos orgulho de oferecer uma solução de <b><a href="{{route('parc_auto_pt')}}">aluguel de carros</a></b> de qualidade que atenderá a todas as suas necessidades.</p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                                class="responsive-img"><br>
                                <b>Grande variedade de veículos</b><br> Temos uma frota variada de veículos, que vai de <b><a href="{{route('parc_auto_pt')}}">carros compactos</a></b> a SUVs espaçosos e sedans de luxo. Independentemente do seu estilo de viagem ou do número de pessoas com você, temos o carro perfeito para você.
                        </p>
                        <p class="why col-md-6">
                            <img src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                                class="responsive-img"><br>
                                <b>Tarifas competitivas</b><br> Na Jacaranda Car, acreditamos na importância de oferecer <b>tarifas competitivas</b> sem comprometer a qualidade do serviço. Você pode aproveitar nossas tarifas acessíveis sem abrir mão do conforto e da confiabilidade de nossos carros.
                        </p>
                        <p class="why col-md-6">
                            <img src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                                class="responsive-img"><br>
                                <b>Facilidade de reserva</b><br> Simplificamos o processo de reserva para economizar seu tempo e energia. Você pode reservar seu carro online em apenas alguns cliques, e nossa equipe dedicada está sempre pronta para ajudá-lo e responder a todas as suas perguntas.
                        </p>
                        <p class="why col-md-6"><img src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                                class="responsive-img"><br>
                                <b>Atendimento ao cliente de primeira classe</b><br> Sua satisfação é nossa prioridade absoluta. Nossa equipe amigável e profissional está pronta para ajudá-lo em cada etapa do seu aluguel de carro, desde a reserva até a devolução do veículo. Estamos comprometidos em fornecer um atendimento ao cliente de primeira classe para tornar sua experiência o mais agradável possível.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Aluguel de carros barato em Marrakech" alt="Aluguel de carros barato em Marrakech"
                                class="responsive-img"><br>
                                <b>Flexibilidade e conveniência</b><br> Entendemos que seus planos de viagem podem mudar. Por isso, oferecemos grande flexibilidade nos horários de retirada e devolução do seu carro alugado. Além disso, oferecemos opções para a entrega e retirada do veículo para sua conveniência.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>Quando você escolhe a Jacaranda Car para seu <b>aluguel de carros em Marrakech</b>, pode ter a certeza de que pode contar com um serviço confiável, uma ampla seleção de veículos e tarifas competitivas. Confie em nós para tornar sua <b>viagem a Marrakech</b> o mais agradável possível.
                    </p>
                </div>

            @else
                <p>
                <h3 class="title"><b>Jacarandacar :</b> {{ $static_data['strings']['opt_fl_title5'] }}</h3>
                </p>
                <p>
                    Avec Jacarandacar profitez d’une alléchante promo de <b><a href="/">location de voitures
                            Marrakech</a></b> ! En effet notre agence vous propose de louer votre voiture de location
                    pour seulement <b>20€</b> par jour .<br>

                    Jacarandacar jouit d’une expérience réussie dans la location voitures Marrakech de courte et de
                    longue durée. Pourvu d’un grand parc automobile composé de voitures utilitaires, et de voitures SUV.

                    Réservez donc en ligne et au meilleur prix votre <b><a href="/">location de voiture à
                            Marrakech</a></b> avec Jacarandacar !
                    En effet, pour la location d’une voiture longue durée à Marrakech, pour la location d’une voiture
                    SUV ou même dans le cas où vous aurez besoin du service d’un chauffeur chevronné, Jacarandacar car
                    répond à vos attentes dans les plus courts délais !

                </p>
                <br> <br>
                <h2 class="slider-heading" style="color:black;">
                    Où se loger à Marrakech ?
                </h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            A Marrakech il y a aussi des bonnes formules pas chère pour <b>loger</b> dans des villas de
                                    luxe avec piscine de 03 à 05 pièces ou dans un riad.<br>
                            Vous pouvez choisir votre <b>Villa</b> ou <b>Appartement</b> ou bien <b>Riad</b> meublé à
                            Marrakech sur la medina ou au palmeraie à travers nos partenaires d’immobilier Marrakech avec tout le confort (
                            cuisine équipée,écran plasma,climatisation,piscine etc.. )

                        </p>
                    </div>
                    <div class="col-md-6">
                        <img    src="{{ url('/') . '/assets/images/home/immobilier-marrakech.webp' }}" width="540" height="264"
                            title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                            style="width: 100%;" class="responsive-img">
                    </div>
                </div>
                <!--<div class="row" style="background-color:gray;">
                    <div class="col-md-12">
                        <h2 class="slider-heading" style="color:black;">
                         Nos partenaires
                        </h2>
                    </div>
                    <div class="col-md-12">
                    <div class="container-fluid">
                          <section class="customer-logos slider">
                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-de-communication-evenementielle-marrakech.webp
                                                        ' }}">
                            </div>

                            <div class="slide"><img    src="{{ url('/') .
                                '/assets/images/partners/agence-immobiliere-marrakech.webp
                                                        ' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}"">
                            </div>

                            <div class="slide"><img    src="{{ url('/') . '/assets/images/partners/' }}">
                            </div>
                          </section>


                        </div>
                    </div>
                </div>-->
                <br><br>
                <div class="row">
                    <h2 class="slider-heading" style="color:black;">
                        POURQUOI CHOISIR JACARANDA CAR POUR VOTRE LOCATION DE VOITURE A MARRAKECH ? </h2>
                    <p>Lorsque vous planifiez votre voyage <b>à Marrakech</b>, il est essentiel de trouver le bon
                        service de <b>location</b> de <b>voiture</b> pour vous assurer une expérience de voyage agréable
                        et sans tracas. Chez Jacaranda Car, nous sommes fiers d'offrir une solution de <b><a
                                href="https://jacarandacar.com/car-rental-marrakech">location de voiture</a></b> de
                        qualité qui répondra à tous vos besoins.</p>
                    <div class="row">
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/car-rental-marrakech-suv.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Large choix de véhicules </b><br> Nous disposons d'une flotte diversifiée de véhicules,
                            allant <b><a href="https://jacarandacar.com/car-rental-marrakech">des voitures</a></b>
                            compactes aux VUS spacieux, en passant par les berlines de luxe. Quel que soit votre style
                            de voyage ou le nombre de personnes avec vous, nous avons la voiture parfaite pour vous.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-voiture-marrakech-bon-prix.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Tarifs compétitifs</b><br> Chez Jacaranda Car, nous croyons en l'importance d'offrir
                            <b>des tarifs compétitifs</b> sans compromettre la qualité du service. Vous pouvez
                            bénéficier de nos tarifs abordables sans sacrifier le confort et la fiabilité de nos
                            voitures.
                        </p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/louer-voiture.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Facilité de réservation</b><br> Nous avons simplifié le processus de réservation pour
                            vous faire gagner du temps et de l'énergie. Vous pouvez réserver votre voiture en ligne en
                            quelques clics, et notre équipe dévouée est toujours prête à vous assister et répondre à
                            toutes vos questions.
                        </p>
                        <p class="why col-md-6"><img
                                src="{{ url('/') . '/assets/images/home/service-qualite.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Service clientèle de premier ordre</b><br> Votre satisfaction est notre priorité absolue.
                            Notre équipe amicale et professionnelle est là pour vous aider à chaque étape de votre
                            location de voiture, depuis la réservation jusqu'au retour du véhicule. Nous nous engageons
                            à fournir un service clientèle de premier ordre pour rendre votre expérience aussi agréable
                            que possible.
                        </p>
                        <p class="why col-md-3"></p>
                        <p class="why col-md-6">
                            <img    src="{{ url('/') . '/assets/images/home/location-marrakech-facile.webp' }}"
                                title="Cheap car rental in Marrakech" alt="Cheap car rental in Marrakech"
                                class="responsive-img"><br>
                            <b>Flexibilité et commodité</b><br> Nous comprenons que vos plans de voyage peuvent changer.
                            C'est pourquoi nous offrons une grande flexibilité dans les horaires de prise en charge et
                            de retour de votre voiture de location. De plus, nous proposons des options de livraison et
                            de récupération du véhicule pour votre commodité.
                        </p>
                        <p class="why col-md-3"></p>

                    </div>

                    <p>Lorsque vous choisissez Jacaranda Car pour votre <b>location de voiture à Marrakech</b>, vous
                        pouvez avoir l'esprit tranquille, sachant que vous bénéficiez d'un service fiable, d'un large
                        choix de véhicules et de tarifs compétitifs. Faites-nous confiance pour rendre votre <b>voyage à
                            Marrakech</b> aussi agréable que possible.
                    </p>
                </div>
            @endif


        </div>
    </div>

    <div class="container-fluid fifth-section" hidden>

        <div class="container third-container">

            <div class="row">

                <div class="col-sm-12">

                    <h2 class="section-title  car_details_header">

                        <span>jacarandacar </span>

                    </h2>

                    <ul class="list-icons" style="text-align: left;list-style: none;">

                        <li><i class="fa fa-check-circle"></i>De nombreuses régions du Maroc vous invitent à découvrir
                            la culture extraordinaire et l'histoire de ce pays d’Afrique. Des plages de sable à
                            l'ambiance, par chaîne de montagnes magiques avec des spas et hôtels du château dans le Sud,
                            Le Maroc offre quelque chose pour tous les goûts. Découvrez le Maroc avec une
                            <strong>voiture de location Marrakech</strong> de Jacarandacar Pour faire preuve de
                            souplesse et de voyager sans tracas.
                        </li>

                        <li><i class="fa fa-check-circle"></i>Avec OYAMA car agence de <strong>location de voitures à
                                Marrakech</strong> vous pouvez réserver votre <strong>voiture de location</strong> en
                            ligne à votre convenance, nous fournissons une large gamme de voitures et de camions de
                            haute qualité pour la location à court et à long terme. Vous pouvez également louer des
                            fourgonnettes des minibus et plusieurs autres véhicules.</li>

                        <li><i class="fa fa-check-circle"></i>Notre réseau national assure une livraison rapide et une
                            reprise des véhicules en quelques heures à tout moment du jour et de la nuit. Sur notre
                            site, vous trouverez des offres attrayantes de <strong>location de voiture pas cher à
                                Marrakech</strong> des informations sur notre entreprise et les stations de location nos
                            offres d'emplois actuelles notre portail client ainsi que des nouvelles intéressantes sur
                            OYAMA car. Nous sommes fiers de notre étroit réseau de points de service qui assurent une
                            grande accessibilité des véhicules dans toute le Maroc dans un court laps de temps.</li>

                        <li><i class="fa fa-check-circle"></i><strong>Louez un véhicule à Marrakech</strong> avec OYAMA
                            car et bénéficiez de nos offres régulièrement mises à jour. Il suffit de réserver nos offres
                            de <strong>location de voitures aéroport Marrakech</strong> en ligne. En quelques minutes
                            seulement et avec quelques clics de souris, vous pouvez réserver votre voiture de location
                            chez OYAMA car à Marrakech.</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    @if ($static_data['design_settings']['show_blog_section'] && $static_data['site_settings']['allow_blog'] && !Session::get('language') == 'nl')

        <div class="container-fluid fourth-section">

            <div class="container fourth-container">

                <div class="row">

                    <div class="col-sm-12">

                        <h2 class="section-title-dark">{{ $static_data['strings']['opt_lb_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['opt_lb_subheading'] }}</p>

                    </div>

                    @foreach ($posts as $post)
                        <div class="items-grid col-md-4 col-sm-12">

                            <div class="item box-shadow">

                                <div class="main-image bg-overlay">

                                    <img    class="responsive-img" src="{{ url('/') . $post->image }}" />

                                </div>

                                <div class="data">

                                    <a href="{{ route('home') . '/blog/post' . '/' . $post->alias }}">
                                        <h3 class="item-title primary-color">{{ $post->contentload->title }}</h3>
                                    </a>

                                    <div class="item-category">{!! \Illuminate\Support\Str::limit(strip_tags($post->contentload->content), 117) !!}</div>

                                    <div class="small-text">{{ $static_data['strings']['posted_by'] }} :
                                        {{ $post->user->username }} | {{ $post->created_at }}</div>

                                </div>

                            </div>

                        </div>
                    @endforeach

                    <div class="col-sm-12 mtop20 text-centered"><a href="{{ route('blog') }}"
                            class="black-button">{{ $static_data['strings']['view_all_blog_posts'] }}</a></div>

                </div>

            </div>

        </div>

    @endif

    {{--

    @if ($static_data['design_settings']['show_icons_section'])

    <div class="container-fluid fifth-section">

        <div class="container fifth-container">

            <div id="icon-boxes" class="row">

                <div class="col-md-6 col-sm-12 mbot20">

                    <div class="icon"><i class="fa {{$static_data['design_settings']['is_icon1_icon']}} 2x primary-color"></i></div>

                    <div class="title">{{$static_data['design_settings']['is_icon1_head']}}</div>

                    <div class="description">{{$static_data['design_settings']['is_icon1_text']}}</div>

                </div>

                <div class="col-md-6 col-sm-12 mbot20">

                    <div class="icon"><i class="fa {{$static_data['design_settings']['is_icon2_icon']}} 2x primary-color"></i></div>

                    <div class="title">{{$static_data['design_settings']['is_icon2_head']}}</div>

                    <div class="description">{{$static_data['design_settings']['is_icon2_text']}}</div>

                </div>

                <div class="col-md-6 col-sm-12 mtop20">

                    <div class="icon"><i class="fa {{$static_data['design_settings']['is_icon4_icon']}} 2x primary-color"></i></div>

                    <div class="title">{{$static_data['design_settings']['is_icon3_head']}}</div>

                    <div class="description">{{$static_data['design_settings']['is_icon3_text']}}</div>

                </div>

                <div class="col-md-6 col-sm-12 mtop20">

                    <div class="icon"><i class="fa {{$static_data['design_settings']['is_icon4_icon']}} 2x primary-color"></i></div>

                    <div class="title">{{$static_data['design_settings']['is_icon4_head']}}</div>

                    <div class="description">{{$static_data['design_settings']['is_icon4_text']}}</div>

                </div>

            </div>

        </div>

    </div>

    @endif

    --}}
    <!--div class="container-fluid fifth-section pt-0">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="section-title-dark mb-5">{{ $static_data['strings']['testimonial'] }}</h1>
            </div>
        </div>
        <iframe src="https://widget.taggbox.com/122559" style="width:100%;height:370px;border:none;"></iframe>
    </div-->


    <!--HP start FAQ section-->

    <div class="container mt-4">
        <h2 class="slider-heading" style="color:black;">
            @if(Session::get('language') == 'en')
                Frequently asked questions
            @elseif(Session::get('language') == 'es')
                Preguntas frecuentes
            @elseif(Session::get('language') == 'it')
                Domande frequenti
            @elseif(Session::get('language') == 'pl')
                Często Zadawane Pytania
            @elseif(Session::get('language') == 'nl')
                Veelgestelde vragen
            @elseif(Session::get('language') == 'pt')
                Perguntas frequentes
            @else
                Questions fréquemment posées
            @endif
        </h2>

        @if(Session::get('language') == 'en')
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        What Are Included In The Prices Displayed On This Site?
                    </strong>
                    <ul class="faq-text">
                        <li>Full insurance</li>
                        <li>Unlimited mileage.</li>
                        <li>Support 24/7.</li>
                        <li>Free delivery and return at Marrakech airport as well as at your hotel or place of residence in Marrakech as well.</li>
                        <li>No hidden extras to pay.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is Car Delivery Free?
                    </strong>
                    <ul class="faq-text">
                        <li>Yes, you can be delivered for free to the airport or to the hotel or even to your home at no extra charge,
                        this service is free only in Marrakech, for other cities there is a supplement which varies depending on the city</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        What Documents Do I Present To Get My Vehicle?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            To get your vehicle you will need to present the driver's license of the driver (s) of the vehicle, a copy of passport in the name of the main driver.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        The Insurance Offered Are They The All Risks Insurance?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Yes, but there is a deductible if you are responsible in case of accident.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Can I book the same day of the rental?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Yes, you can do it until 04h working before departure. provided, Jacarandacar will only be able to offer you the categories of similar cars that are still available. ..
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        What Kind Of Insurance Are Included In The Prices Displayed?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            All-risk insurance with deductible. -Insurance for the driver and passengers carried
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Pay Less With Jacarandacar , Is It To The Detriment Of The Quality Of The Rented Vehicles?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            No, our cars are in excellent condition and undergo regular technical checks.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is There A Possibility To Extend The Duration Of My Rental Contract?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Of course, you just need to contact us by email or phone to get our agreement..
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        What are the steps to follow to be able to reserve a car with Jacarandacar?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Simply fill out the reservation form on our website and send it to us, you will have confirmation of availability in less than an hour.
                            Once this confirmation has been received, you will only have to confirm your reservation to us and your car will be blocked for the desired dates.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is It Possible To Cancel My Booking?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Of course, it is possible to cancel the reservation up to the last minute before picking up the car without cancellation fees.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        What should I do if I do not receive confirmation of my reservation?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            You must contact your Jacaranda Car agency by email, giving them the number of your reservation and your email address; or better contact by phone.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row" style='padding: 30px 0;'>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Qué incluyen los precios mostrados en este sitio?
                </strong>
                <ul class="faq-text">
                    <li>Seguro todo riesgo</li>
                    <li>Millaje ilimitado.</li>
                    <li>Soporte 24 horas al día, 7 días a la semana.</li>
                    <li>Entrega y devolución gratuita tanto en el aeropuerto de Marrakech como también en su hotel o lugar de residencia en Marrakech.</li>
                    <li>No hay que pagar extras ocultos.</li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿La entrega del coche es gratuita?
                </strong>
                <ul class="faq-text">
                    <li>Sí, te pueden entregar gratis en el aeropuerto o en el hotel o incluso en tu domicilio sin coste adicional, este servicio es gratuito sólo en Marrakech,
                    para otras ciudades hay un suplemento que varía según la ciudad</li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Qué documentos necesito presentar para recuperar mi vehículo?
                </strong>
                <ul class="faq-text">
                    <li>
                        Para recoger su vehículo necesitará presentar el permiso de conducir del conductor(es) del vehículo, una copia del pasaporte a nombre del conductor principal.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Los seguros que se ofrecen son seguros a todo riesgo?
                </strong>
                <ul class="faq-text">
                    <li>
                        Sí, pero hay que pagar un deducible si eres responsable en caso de accidente.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Qué tipo de seguro está incluido en los precios mostrados?
                </strong>
                <ul class="faq-text">
                    <li>
                        Seguro a todo riesgo con franquicia -Seguro para el conductor y las personas transportadas
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    Pagar menos con Jacarandacar, ¿va en detrimento de la calidad de los vehículos alquilados?
                </strong>
                <ul class="faq-text">
                    <li>
                        No, nuestros coches están en excelentes condiciones y se someten a controles técnicos periódicos.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Existe la posibilidad de ampliar la duración de mi contrato de alquiler actual?
                </strong>
                <ul class="faq-text">
                    <li>
                        Por supuesto, sólo necesita contactarnos por correo electrónico o por teléfono para obtener nuestro acuerdo.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Cuáles son los pasos a seguir para poder reservar un coche con Jacarandacar?
                </strong>
                <ul class="faq-text">
                    <li>
                        Simplemente rellena el formulario de reserva de nuestra web y envíanoslo, tendrás confirmación de disponibilidad en menos de una hora.
                        Una vez recibida esta confirmación sólo tendrás que confirmarnos tu reserva y tu coche quedará bloqueado para las fechas deseadas.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Es posible cancelar mi reserva?
                </strong>
                <ul class="faq-text">
                    <li>
                        Por supuesto, es posible cancelar la reserva hasta el último minuto antes de recoger el coche sin gastos de cancelación.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Qué debo hacer si no recibo la confirmación de mi reserva?
                </strong>
                <ul class="faq-text">
                    <li>
                        Deberás contactar con tu agencia Jacarandacar vía correo electrónico, proporcionándoles tu número de reserva y tu dirección de correo electrónico; o mejor contacto por teléfono.
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>

            <div class="col-md-6">
                <div class="faq">
                <strong class="faq-title">
                    ¿Puedo reservar el mismo día del alquiler?
                </strong>
                <ul class="faq-text">
                    <li>
                        Sí, puedes hacerlo hasta 4 horas hábiles antes de la salida. Siempre y cuando Jacarandacar sólo podrá ofrecerle categorías de coches similares que aún estén disponibles. ..
                    </li>
                </ul>
                <button class="faq-toggle">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            </div>
        </div>
        @elseif(Session::get('language') == 'it')
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Cosa includono i prezzi visualizzati su questo sito?
                    </strong>
                    <ul class="faq-text">
                        <li>Assicurazione tutti i rischi</li>
                        <li>Chilometraggio illimitato.</li>
                        <li>Supporto 24 ore su 24, 7 giorni su 7.</li>
                        <li>Consegna e reso gratuiti all'aeroporto di Marrakech, nonché al tuo hotel o luogo di residenza a Marrakech.</li>
                        <li>Nessun extra nascosto da pagare.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        La consegna dell'auto è gratuita?
                    </strong>
                    <ul class="faq-text">
                        <li>Sì, puoi essere consegnato gratuitamente all'aeroporto o all'hotel o anche a casa tua senza costi aggiuntivi, questo servizio è gratuito solo a Marrakech,
                        per le altre città è previsto un supplemento che varia a seconda della città</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Quali documenti devo presentare per recuperare il mio veicolo?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Per ritirare il tuo veicolo dovrai presentare la patente di guida del/i conducente/i del veicolo, una copia del passaporto a nome del conducente principale.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        L'assicurazione offerta è un'assicurazione completa?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Sì, ma è prevista una franchigia da pagare se sei responsabile in caso di incidente.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Che tipo di assicurazione è inclusa nei prezzi visualizzati?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Assicurazione casco con franchigia - Assicurazione per il conducente e le persone trasportate
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Pagare Meno Con Jacarandacar va a discapito della Qualità dei Veicoli Noleggiati?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            No, le nostre auto sono in ottime condizioni e vengono sottoposte a controlli tecnici regolari.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Esiste la possibilità di estendere la durata del mio attuale contratto di noleggio?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Naturalmente basta contattarci via email o telefono per ottenere la nostra convenzione.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Quali sono i passi da seguire per poter prenotare un’auto con Jacarandacar?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Basta compilare il modulo di prenotazione sul nostro sito e inviarcelo, avrete conferma della disponibilità in meno di un'ora.
                            Una volta ricevuta questa conferma, dovrai solo confermarci la tua prenotazione e la tua auto verrà bloccata per le date desiderate.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        E' possibile cancellare la mia prenotazione?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Naturalmente è possibile annullare la prenotazione fino all'ultimo minuto prima del ritiro dell'auto senza alcuna penale.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Cosa devo fare se non ricevo la conferma della mia prenotazione?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Devi contattare la tua agenzia Jacarandacar via e-mail, fornendo loro il numero di prenotazione e il tuo indirizzo e-mail; o miglior contatto telefonico.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Posso prenotare lo stesso giorno del noleggio?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Sì, puoi farlo fino a 4 ore lavorative prima della partenza. a condizione che Jacarandacar possa proporti solo le categorie di auto simili ancora disponibili. ..
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Co zawierają ceny wyświetlane na tej stronie?
                    </strong>
                    <ul class="faq-text">
                        <li>Pełne ubezpieczenie od wszystkich ryzyk.</li>
                        <li>Nielimitowany przebieg.</li>
                        <li>Asysta 24/24 i 7/7.</li>
                        <li>Darmowa dostawa i zwrot na lotnisko w Marrakeszu oraz do Państwa hotelu lub miejsca pobytu również w Marrakeszu.</li>
                        <li>Brak ukrytych dodatkowych opłat do zapłacenia.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Dostawa samochodu jest bezpłatna?
                    </strong>
                    <ul class="faq-text">
                        <li>Tak, możesz zostać dostarczony za darmo na lotnisko, do hotelu lub nawet do domu bez dodatkowych opłat. Ten serwis jest darmowy tylko w Marrakeszu, dla innych miast trzeba doliczyć opłatę, która różni się w zależności od miasta.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Jakie dokumenty muszę przedstawić, aby odebrać mój pojazd ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Aby odebrać swój pojazd, będziesz potrzebować przedstawienia prawa jazdy lub praw jazdy kierowców pojazdu, kopii paszportu na nazwisko głównego kierowcy.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Czy proponowane ubezpieczenia są ubezpieczeniami od wszystkich ryzyk ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Tak, ale istnieje franczyza do zapłacenia w przypadku, gdy jesteś odpowiedzialny za wypadek.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Jakie rodzaje ubezpieczeń są zawarte w wyświetlonych cenach ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Ubezpieczenie wszystkich ryzyk z franczyzą - Ubezpieczenie dla kierowcy i pasażerów
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Zapłacić mniej z Jacarandacar, Czy To Kosztem Jakości Wynajmowanych Pojazdów ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Nie, nasze samochody są w doskonałym stanie i regularnie przechodzą kontrole techniczne.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Czy istnieje możliwość przedłużenia czasu trwania mojej obecnej umowy najmu ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Będzie oczywiście wystarczające, aby skontaktować się z nami drogą mailową lub telefoniczną, aby uzyskać nasze zgodę.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Jakie są kroki do podjęcia, aby zarezerwować samochód w Jacarandacar ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Wystarczy wypełnić formularz rezerwacyjny dostępny na naszej stronie internetowej i przesłać go do nas, otrzymasz potwierdzenie dostępności w ciągu godziny.
                            Po otrzymaniu tego potwierdzenia, wystarczy potwierdzić rezerwację po swojej stronie, a samochód zostanie zarezerwowany na wybrane daty.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Czy jest możliwe anulowanie mojej rezerwacji ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Oczywiście, można anulować rezerwację nawet do ostatniej chwili przed odbiorem samochodu bez opłat za anulowanie.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Co mam zrobić, jeśli nie otrzymuję potwierdzenia mojej rezerwacji ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Należy skontaktować się e-mailem z agencją Jacarandacar, przekazując jej numer rezerwacji oraz adres e-mail; albo najlepiej skontaktować się telefonicznie.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Czy mogę zarezerwować ten sam dzień co wynajem ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Tak, jest możliwe do wykonania do 4 godzin roboczych przed wyjazdem. Warunkiem jest, że Jacarandacar będzie mógł zaoferować tylko dostępne jeszcze podobne kategorie samochodów.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Wat is inbegrepen in de getoonde prijzen op deze site?
                    </strong>
                    <ul class="faq-text">
                        <li>All-risk verzekering</li>
                        <li>Onbeperkt aantal kilometers.</li>
                        <li>24/7 bijstand.</li>
                        <li>Gratis levering en ophaling op de luchthaven van Marrakech en ook bij uw hotel of verblijfplaats in Marrakech.</li>
                        <li>Geen verborgen kosten.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is de autolevering gratis?
                    </strong>
                    <ul class="faq-text">
                        <li>Ja, u kunt gratis worden afgeleverd op de luchthaven, bij het hotel of zelfs bij u thuis zonder extra kosten, deze service is alleen gratis in Marrakech,
                        voor andere steden is er een toeslag die varieert afhankelijk van de stad</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Welke documenten moet ik overleggen om mijn voertuig op te halen?
                    </strong>
                    <ul class="faq-text">
                        <li>
                        Om uw voertuig op te halen, moet u het rijbewijs van de bestuurder(s) van het voertuig overleggen, evenals een kopie van het paspoort op naam van de hoofdbestuurder.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Zijn de aangeboden verzekeringen allriskverzekeringen?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Ja, maar er is een eigen risico als u verantwoordelijk bent voor een ongeval.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Welke soorten verzekeringen zijn inbegrepen in de getoonde prijzen?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Volledige verzekering met eigen risico - Verzekering voor de bestuurder en de passagiers
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Betekent minder betalen bij Jacarandacar dat de kwaliteit van de gehuurde voertuigen lager is?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Nee, onze auto's verkeren in uitstekende staat en worden regelmatig gecontroleerd op technische gebreken.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is Het Mogelijk Om De Looptijd Van Mijn Huurovereenkomst Te Verlengen?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Ja, natuurlijk. U hoeft alleen maar contact met ons op te nemen via e-mail of telefoon om onze goedkeuring te krijgen.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Wat zijn de stappen om een ​​auto te reserveren bij Jacarandacar?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Vul gewoon het reserveringsformulier in dat op onze website staat en stuur het naar ons op. U ontvangt binnen een uur een bevestiging van beschikbaarheid.
                            Zodra u deze bevestiging heeft ontvangen, hoeft u deze alleen maar aan uw kant te bevestigen en uw auto wordt geblokkeerd voor de gewenste data.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Is Het Mogelijk Om Mijn Reservering Te Annuleren?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Ja, het is mogelijk om de reservering te annuleren tot het laatste moment voor het ophalen van de auto, zonder annuleringskosten.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Wat moet ik doen als ik geen bevestiging van mijn reservering ontvang?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Neem per e-mail contact op met uw Jacarandacar-agentschap en vermeld het reserveringsnummer en uw e-mailadres; of nog beter, neem telefonisch contact op.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Kan ik op dezelfde dag van de huur reserveren?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Ja, dat is mogelijk tot 4 uur voor vertrek, mits Jacarandacar alleen nog beschikbare vergelijkbare autotypes kan aanbieden.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            O que está incluído nos preços exibidos neste site?
                        </strong>
                        <ul class="faq-text">
                            <li>Seguro contra todos os riscos</li>
                            <li>Kilometragem ilimitada</li>
                            <li>Assistência 24/7</li>
                            <li>Entrega e retirada gratuitas no aeroporto de Marrakech e também no seu hotel ou local de estadia em Marrakech</li>
                            <li>Sem custos ocultos</li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            A entrega do carro é gratuita?
                        </strong>
                        <ul class="faq-text">
                            <li>Sim, você pode ser entregue gratuitamente no aeroporto, no hotel ou até mesmo em sua casa sem custos adicionais. Este serviço é gratuito apenas em Marrakech; para outras cidades, há uma taxa adicional que varia conforme a cidade.</li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Quais documentos devo apresentar para retirar meu veículo?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Para retirar seu veículo, você deve apresentar a carteira de motorista do(s) motorista(s) do veículo, bem como uma cópia do passaporte em nome do condutor principal.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Os seguros oferecidos são seguros contra todos os riscos?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Sim, mas há uma franquia se você for responsável por um acidente.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Quais tipos de seguros estão incluídos nos preços exibidos?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Seguro completo com franquia - Seguro para o motorista e passageiros
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Pagar menos na Jacarandacar significa que a qualidade dos veículos alugados é inferior?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Não, nossos carros estão em excelente estado e são regularmente inspecionados quanto a falhas técnicas.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            É possível prolongar o período do meu contrato de aluguel?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Sim, claro. Você só precisa entrar em contato conosco por e-mail ou telefone para obter nossa aprovação.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Quais são os passos para reservar um carro na Jacarandacar?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Preencha o formulário de reserva que está em nosso site e envie-o para nós. Você receberá uma confirmação de disponibilidade dentro de uma hora.
                                Assim que você receber essa confirmação, basta confirmá-la e seu carro será reservado para as datas desejadas.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            É possível cancelar minha reserva?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Sim, é possível cancelar a reserva até o último momento antes da retirada do carro, sem custos de cancelamento.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            O que devo fazer se não receber a confirmação da minha reserva?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Entre em contato por e-mail com a sua agência Jacarandacar e informe o número da reserva e seu e-mail; ou ainda melhor, entre em contato por telefone.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                        <strong class="faq-title">
                            Posso reservar no mesmo dia do aluguel?
                        </strong>
                        <ul class="faq-text">
                            <li>
                                Sim, é possível até 4 horas antes da partida, desde que a Jacarandacar ainda tenha tipos de carros semelhantes disponíveis.
                            </li>
                        </ul>
                        <button class="faq-toggle">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

        @else
            <div class="row" style='padding: 30px 0;'>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Que Comprennent Les Prix Affiches Sur Ce Site ?
                    </strong>
                    <ul class="faq-text">
                        <li>Assurance tous risques</li>
                        <li>Kilométrage illimité.</li>
                        <li>Assistance 24 /24/ et 7/7.</li>
                        <li>Livraison et restitution gratuite à l’aéroport de Marrakech ainsi qu’à votre hôtel ou lieu de résidence à Marrakech également.</li>
                        <li>Aucun supplément caché à payer.</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        La Livraison De La Voiture Est-Elle Gratuite ?
                    </strong>
                    <ul class="faq-text">
                        <li>Oui, vous pouvez être livré gratuitement à l’aéroport ou bien à l’hôtel ou même chez vous sans supplément, ce service est gratuit uniquement sur Marrakech,
                        pour les autres villes il faut compter un supplément qui varie selon les villes</li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Quels Documents Dois-Je Présenter Pour Récupérer Mon Véhicule ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Pour récupérer votre véhicule vous aurez besoin de présenter le permis de conduire du ou des conducteurs du véhicule, une copie du passeport au nom du conducteur principal.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Les Assurances Proposées Sont-Elles Des Assurances Tous Risques ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Oui, mais il y a une franchise à payer si vous êtes responsable en cas d'accident.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Quelles Sont Le Genre D’assurances Incluses Dans Les Prix Affichés ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Une assurance tout risque avec franchise -Une assurance pour le conducteur et les personnes transportées
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Payer Moins Avec Jacarandacar, Est-Ce Au Détriment De La Qualité Des Véhicules Loués ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Non, nos voitures sont en excellent état et subissent régulièrement des contrôles techniques.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Y A-T-Il Une Possibilité De Prolonger La Durée De Mon Contrat En Cours De Location ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Bien sûr, il suffit juste de nous contacter par mail ou par téléphone pour prendre notre accord.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Quelles Sont Les Étapes À Suivre Pour Pouvoir Réserver Une Voiture Chez Jacarandacar ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Il suffit de remplir le formulaire de réservation qui est sur notre site web et de nous l’envoyer, vous aurez une confirmation de disponibilité en moins d’une heure.
                            Une fois cette confirmation reçue vous n’aurez qu’à nous confirmer votre réservation de votre côté et votre voiture sera bloquée pour les dates souhaitées.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Est-Il Possible D’annuler Ma Réservation ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Bien sûr, il est possible d’annuler la réservation jusqu’à la dernière minute avant la prise en charge de la voiture sans frais d’annulation.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Que dois-je faire si je ne reçois pas la confirmation de ma réservation?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Il faut contacter par email votre agence Jacarandacar en lui communiquant le numéro de votre réservation et votre adresse email; ou le mieux contacter par téléphone.
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>

                <div class="col-md-6">
                    <div class="faq">
                    <strong class="faq-title">
                        Est ce je peu réserver le méme jour de la location ?
                    </strong>
                    <ul class="faq-text">
                        <li>
                            Oui, vous c'est faisable jusqu’à 04h ouvrées avant le départ. à condition, Jacarandacar ne pourra vous proposer que les catégories de voitures similaires encore disponibles. ..
                        </li>
                    </ul>
                    <button class="faq-toggle">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                </div>
            </div>
        @endif


    </div>

    <!--HP end FAQ section-->

    {{--<div class="modal fade" id="popup_msg_promo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">{{ $static_data['strings']['popup_message'] }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">{{ $static_data['strings']['close'] }}</button>
                </div>
            </div>
        </div>
    </div>--}}

@endsection


