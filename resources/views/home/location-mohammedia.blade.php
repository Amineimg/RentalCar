@extends('home.partials.home_layout', ['static_data', $static_data])

@section('title')
<title>{{ $static_data['strings']['title_location_mohammedia'] }}</title>
<meta name="title" content="{{ $static_data['strings']['title_location_mohammedia'] }}">
<meta name="author" content="{{ $static_data['strings']['title_location_mohammedia'] }}">
<meta car="og:title" content="{{ $static_data['strings']['title_location_mohammedia'] }}" />
<meta property="og:type" content="{{ $static_data['strings']['title_location_mohammedia'] }}" />
<meta property="og:title" content="{{ $static_data['strings']['title_location_mohammedia'] }}" />
<meta name="twitter:title" content="{{ $static_data['strings']['title_location_mohammedia'] }}" />

<meta name="description" content="{{ $static_data['strings']['desc_location_mohammedia'] }}" />
<meta name="twitter:description" content="{{ $static_data['strings']['desc_location_mohammedia'] }}" />
<meta property="og:description" content="{{ $static_data['strings']['desc_location_mohammedia'] }}" />

@if (Session::get('language') == 'en')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@elseif(Session::get('language') == 'es')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@elseif(Session::get('language') == 'it')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@elseif(Session::get('language') == 'pl')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@elseif(Session::get('language') == 'nl')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@elseif(Session::get('language') == 'pt')
<link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/location-de-voiture-mohammedia" />
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
@else
<link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-rental-mohammedia" />
<link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/alquiler-de-coches-mohammedia" />
<link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/noleggio-auto-mohammedia" />
<link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/wynajem-samochodów-mohammedia" />
<link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/autoverhuur-mohammedia" />
<link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/aluguel-carros-mohammedia" />
@endif
@endsection

@section('content')

<?php ob_start(); ?>

<body class="home-page">

    <div class="cover"></div>

    <div class="wrapper">

        <!--<div class="container-fluid header-container" @if ($static_data['design_settings']['slider_background']) style="background-image: url('{{ asset('/assets/images/home/location-de-voiture-marrakech.jpg') }}')" @endif>-->
        <div class="container-fluid header-container" @if ($static_data['design_settings']['slider_background']) style="background-image: url('{{ asset('/assets/images/home/backg1.webp') }}')"> @endif
            @include('home.partials.top-header') <div class="container" id="slider">

                <div class="row">

                    <div class="col-sm-12">

                        <h1 class="slider-heading">{{ $static_data['strings']['mohammedia_slider_heading'] }}</h1>

                        <h4 class="slider-subheading">{{ $static_data['strings']['mohammedia_slider_subheading'] }}</h4>

                        @include('home.partials.search_home')

                    </div>

                    <div id="scroll-down" class="col-sm-12 text-centered">

                        <a class="scroll-down-button" aria-label="{{$static_data['strings']['scroll-down-button']}}" href="#first-section"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

                        <div class="discover-more"></div>

                    </div>

                </div>

            </div>

        </div>



        <div id="first-section" class="container-fluid first-section">

            <div class="container first-container">

                <div class="row">

                    <div class="col-sm-12">

                        <h2 class="section-title-dark">{{ $static_data['strings']['mohammedia_fl_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['mohammedia_fl_subheading'] }}</p>

                    </div>

                </div>

                @if (Session::get('language') == 'en')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title" style="text-align:justify;">

                            <a href="#"><img src="{{ url('/') .
                                        '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp
                                                                        ' }}" title="Cheap car rental in Mohammedia" alt="Cheap car rental in Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Cheap car
                                    rental in Mohammedia!</a></h3>
                            <p>Are you looking for a cheap car rental for your stay in Mohammedia? Our agency is located
                                15 minutes from Mohammedia airport has a car park made up of recent and air-conditioned
                                vehicles and 4x4s. Provides you with car rental in Mohammedia, Essaouira, Fez,
                                Casablanca, Agadir and in Morocco, Do not hesitate to make your reservations in order
                                to 
                            </p>

                            <div class="opt-fl-text">
                                 

                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Mohammedia" alt="Location voitures Gueliz Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Car rental Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>For your stay in Morocco, only one address: Jacaranda Car - Mohammedia car rental,
                                    specializing in car rental, 4x4 in Mohammedia, offers rental and quality vehicles at
                                    very competitive prices. A car rental in Mohammedia will allow you to discover
                                    Morocco. Whatever the length of your stay, rent a vehicle in Mohammedia and make your
                                    trips successful experiences ...</p><br>
                                 
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"> <img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Mohammedia aéroport" alt="location voiture Mohammedia aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car hire
                                    Mohammedia airport</a></h3>

                            <div class="opt-fl-text">
                                <p>Our Mohammedia 4x4 Rental Agency offers you a young and varied 4x4 Park on Mohammedia
                                    airport to fulfill your desires whether you are on a business trip, with family or
                                    even between friends we have the 4x4 vehicle you need , at very competitive prices.
                                    Discover the city of Mohammedia and fully enjoy your vacation thanks to our Mohammedia
                                    4x4 rental service ...</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp') }} " title="Car rental Mohammedia without deposit" alt="Car rental Mohammedia without deposit" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car
                                    rental Mohammedia without deposit</a></h3>

                            <div class="opt-fl-text">
                                <p>When renting a car with Jacaranda we assure you the best service in Mohammedia city ,
                                    beginning with the best prices and deals with the many other advantages such as
                                    providing a car rental without credit card , our client is free to pay in
                                    cash.Jacaranda also gives its customers the ability to choose between renting a car
                                    without a deposit or with deposit  ....</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }} " title="Automatic car rental in Mohammedia" alt="Automatic car rental in Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Automatic car rental in Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Drive with ease with our Automatic Cars</b><br>
                                    We understand that for some travelers, driving with ease is a priority.
                                    This is why we offer a wide selection of automatic cars in Mohammedia to meet your needs ....</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="4x4 rental Mohammedia" title="4x4 rental Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">4x4 rental Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Concerned about your means of transportation during your stay in Mohammedia? Jacarandacar,
                                    your 4x4 rental agency in Mohammedia, with qualified staff possessing experience in the rental field and a young team of guides and assistants,
                                    offers you a diverse fleet of recent 4x4 vehicles equipped with various additional options available for short or long-term rental,
                                    tailored to your needs, all at highly attractive and well-studied prices.
                                    Explore Morocco and embark on adventures in the deserts with our range of comfortable 4x4 vehicles,
                                    and enjoy our 24/7 assistance ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Manual car rental Mohammedia" title="Manual car rental Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Manual car rental Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>For lovers of traditional driving, we offer a variety of manual cars in Mohammedia.
                                    Whether you are looking for a compact vehicle to navigate the narrow streets of the Medina or a
                                    more spacious model for your getaways in the region ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif(Session::get('language') == 'es')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Mohammedia" alt="location voiture Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches baratos en Mohammedia !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Quieres encontrar un coche de alquiler barato para tu estancia en Mohammedia?
                                    Nuestra agencia se encuentra a 15 minutos del aeropuerto de Mohammedia y dispone de
                                    una flota de
                                    coches compuesta por vehículos recientes, climatizados y 4x4.Puede estar seguro de
                                    que el <strong>alquiler coches Mohammedia</strong> ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Mohammedia" alt="Location voitures Gueliz Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Alquiler coches Mohammedia</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Para su estancia en Marruecos, sólo una dirección: Jacaranda Car - <strong>Alquiler coches Mohammedia</strong>,
                                    especializada en alquiler de coches, 4x4 en Mohammedia, ofrece vehículos de alquiler
                                    de calidad a
                                    precios muy competitivos. Un coche de alquiler en Mohammedia ...<br>  

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Mohammedia aéroport" alt="location voiture Mohammedia aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches en el aeropuerto de Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Nuestra Agencia de Alquiler de 4x4 en Mohammedia te ofrece un Parque 4x4 joven y
                                    variado en
                                    el aeropuerto de Mohammedia para cumplir tus deseos ya sea que estés en un viaje de
                                    negocios,
                                    en familia o incluso con amigos, tenemos el vehículo 4x4 que necesitas, a precios
                                    muy competitivos ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Mohammedia aéroport" alt="location voiture Mohammedia aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Alquiler de coches sin
                                    deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Cuando alquilas un coche con Jacaranda, te aseguramos el mejor servicio en la ciudad
                                    de Mohammedia,
                                    empezando por los mejores precios y las muchas otras ventajas como el alquiler de
                                    coches sin tarjeta de crédito,
                                    nuestro cliente es libre de pagar en efectivo. Jacaranda también ofrece a sus
                                    clientes la posibilidad de ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches automáticos en Mohammedia" title="Alquiler de coches automáticos en Mohammedia"></a>


                            <h3 class="title"><a href="#">Alquiler de coches automáticos en Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>
                                    <b>Conduce con tranquilidad con nuestros Coches Automáticos</b><br>
                                    Entendemos que para algunos viajeros conducir con tranquilidad es una prioridad.
                                    Por eso ofrecemos una amplia selección de coches automáticos en Mohammedia para satisfacer sus necesidades ....<br> 
                                </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Mohammedia" title="location voiture automatique Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de 4x4
                                    Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Te preocupas por tu medio de transporte durante tu estancia en Mohammedia?
                                    Jacarandacar tu agencia de alquiler de 4x4 en Mohammedia con personal cualificado con
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

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches manuales en Mohammedia" title="Alquiler de coches manuales en Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de coches manuales en Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Para los amantes de la conducción tradicional, ofrecemos una variedad de coches manuales en Mohammedia.
                                    Tanto si buscas un vehículo compacto para recorrer las estrechas calles de la Medina como un modelo más espacioso para tus escapadas a la región ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'it')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Autonoleggio Mohammedia" alt="Autonoleggio Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    economico a Mohammedia!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vuoi trovare un noleggio auto economico per il tuo soggiorno a Mohammedia?
                                    La nostra agenzia si trova a 15 minuti dall'aeroporto di Mohammedia e dispone di un
                                    parco auto
                                    composto da veicoli recenti, climatizzati e 4x4.Puoi essere sicuro del noleggio auto
                                    a Mohammedia ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autonoleggio Guéliz Mohammedia" alt="Autonoleggio Guéliz Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autonoleggio Mohammedia</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Per il tuo soggiorno in Marocco, un solo indirizzo: Jacaranda Car - Noleggio auto
                                    Mohammedia,
                                    specializzata nel noleggio auto 4x4 a Mohammedia, offre veicoli a noleggio di qualità
                                    a prezzi molto competitivi.
                                    Un noleggio auto a Mohammedia ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="autonoleggio aeroporto di Mohammedia" alt="autonoleggio aeroporto di Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    all'aeroporto di Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>La nostra agenzia di noleggio 4x4 di Mohammedia ti offre un parco 4x4 giovane e vario
                                    all'aeroporto di Mohammedia
                                    per soddisfare i tuoi desideri sia che tu sia in viaggio d'affari,
                                    con la famiglia o anche con gli amici, abbiamo il veicolo 4x4 di cui hai bisogno. ,
                                    a prezzi molto competitivi ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="autonoleggio aeroporto di Mohammedia" alt="autonoleggio aeroporto di Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    senza deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Quando noleggi un'auto con Jacaranda, ti assicuriamo il miglior servizio nella città
                                    di Mohammedia,
                                    a partire dai migliori prezzi e tanti altri vantaggi come il noleggio auto senza
                                    carta di credito,
                                    il nostro cliente è libero di pagare in contanti. Jacaranda offre ai propri clienti
                                    anche la possibilità di ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Mohammedia" title="Noleggio auto automatiche a Mohammedia"></a>


                            <h3 class="title"><a href="#">Noleggio auto con cambio automatico a Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Guida con facilità con le nostre auto automatiche</b><br>
                                    Comprendiamo che per alcuni viaggiatori guidare con facilità è una priorità.
                                    Ecco perché offriamo un'ampia selezione di auto automatiche a Mohammedia per soddisfare le vostre esigenze ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Mohammedia" title="Noleggio auto automatiche a Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Noleggio 4x4
                                    Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Ti preoccupi per il tuo mezzo di trasporto durante il tuo soggiorno a Mohammedia?
                                    Jacarandacar la tua agenzia di noleggio 4x4 a Mohammedia con personale qualificato
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

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto manuale Mohammedia" title="Noleggio auto manuale Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Noleggio auto manuale Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Per gli amanti della guida tradizionale, offriamo una varietà di auto manuali a Mohammedia.
                                    Che tu stia cercando un veicolo compatto per percorrere le strette strade della Medina o un modello più spazioso per le tue fughe nella regione ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'pl')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Tanio wynajem samochodów w Mohammedia !" alt="Tanio wynajem samochodów w Mohammedia !" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Tanio wynajem samochodów w Mohammedia !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Chcesz znaleźć tanie wynajem samochodów na twój pobyt w Mohammedia? Nasze biuro znajduje się 15 minut od lotniska w Mohammedia i posiada flotę samochodów i nowych klimatyzowanych samochodów terenowych. Zapewniamy wynajem samochodów w Mohammedia ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Wynajem samochodów w Mohammedia" alt="Wynajem samochodów w Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Wynajem samochodów w Mohammedia</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Dla Państwa pobytu w Maroku jedno miejsce: Jacaranda Car - wynajem samochodów w Mohammedia, specjalizujący się w wynajmie samochodów, terenówek w Mohammedia,
                                    oferuje Państwu wynajem samochodów wysokiej jakości w bardzo konkurencyjnych cenach. Wynajem samochodów w Mohammedia ...<br>
                                     
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Wypożyczalnia samochodów na lotnisku w Mohammedia" alt="Wypożyczalnia samochodów na lotnisku w Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów na lotnisku w Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Nasze biuro wynajmu samochodów terenowych w Mohammedia oferuje Państwu młody i zróżnicowany park samochodów terenowych na lotnisku w Mohammedia, aby zaspokoić Państwa potrzeby, czy podróżujecie Państwo służbowo, w rodzinie czy nawet ze znajomymi mamy odpowiedni samochód terenowy dla Państwa, w bardzo konkurencyjnych cenach ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Wynajem samochodów bez kaucji" alt="Wynajem samochodów bez kaucji" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Wynajem samochodów bez kaucji</a></h3>

                            <div class="opt-fl-text">
                                <p>Kiedy wynajmujesz samochód z Jacaranda, zapewniamy Ci najlepszą obsługę w mieście Marrakesz, począwszy od najlepszych cen i wielu innych korzyści, takich jak wynajem samochodu bez karty kredytowej, nasz klient może płacić gotówką. Jacaranda oferuje również swoim klientom możliwość ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem samochodów automatycznych w Mohammedia" title="Wynajem samochodów automatycznych w Mohammedia"></a>


                            <h3 class="title"><a href="#">Wynajem samochodów automatycznych w Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Jazda Bezproblemowa z Naszymi Samochodami Automatycznymi</b><br>
                                    Rozumiemy, że dla niektórych podróżnych jazda bezproblemowa jest priorytetem. Dlatego oferujemy szeroki wybór samochodów automatycznych w Mohammedia, aby sprostać Państwa potrzebom ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem 4x4 w Mohammedia" title="Wynajem 4x4 w Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Wynajem 4x4 w Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Zadbacie o swój środek transportu podczas pobytu w Mohammedia? Jacarandacar, Twoje biuro wynajmu samochodów terenowych w Mohammedia,
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

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wypożyczalnia samochodów manualnych w Mohammedia." title="Wypożyczalnia samochodów manualnych w Mohammedia.">
                            </a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów manualnych w Mohammedia.</a></h3>

                            <div class="opt-fl-text">
                                <p>Dla miłośników tradycyjnej jazdy proponujemy różnorodność samochodów z manualną skrzynią biegów w Mohammedia. Czy szukasz kompaktowego pojazdu do poruszania się po wąskich uliczkach w Medynie, czy może bardziej przestronnego modelu na wycieczki po okolicy ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'nl')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Goedkope autoverhuur in Mohammedia!" alt="Goedkope autoverhuur in Mohammedia!" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Goedkope autoverhuur in Mohammedia!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Wil je een goedkope auto huren voor je verblijf in Mohammedia? Ons bureau, gelegen op 15 minuten van de luchthaven van Mohammedia, heeft een wagenpark met recente en geklimatiseerde auto's en 4x4's. Wij bieden autoverhuur in Mohammedia aan ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autoverhuur Mohammedia" alt="Autoverhuur Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autoverhuur Mohammedia</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Voor uw verblijf in Marokko, slechts één adres: Jacaranda Car - autoverhuur Mohammedia, gespecialiseerd in autoverhuur, 4x4 in Mohammedia, biedt u kwaliteitsvoertuigen te huur aan tegen zeer concurrerende prijzen. Een auto huren in Mohammedia ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Autoverhuur op de luchthaven van Mohammedia" alt="Autoverhuur op de luchthaven van Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur op de luchthaven van Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Ons autoverhuurbedrijf in Mohammedia biedt u een jong en gevarieerd wagenpark van 4x4's op de luchthaven van Mohammedia om aan uw wensen te voldoen, of u nu op zakenreis bent, met familie of zelfs met vrienden, wij hebben de 4x4 die u nodig heeft, tegen zeer concurrerende prijzen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Autoverhuur zonder borg" alt="Autoverhuur zonder borg" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur zonder borg</a></h3>

                            <div class="opt-fl-text">
                                <p>Wanneer u een auto huurt bij Jacaranda, verzekeren wij u van de beste service in de stad Mohammedia, beginnend met de beste prijzen en vele andere voordelen zoals autoverhuur zonder creditcard, onze klant is vrij om contant te betalen. Jacaranda biedt haar klanten ook de mogelijkheid om ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur met automatische transmissie in Mohammedia" title="Autoverhuur met automatische transmissie in Mohammedia"></a>


                            <h3 class="title"><a href="#">Autoverhuur met automatische transmissie in Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Rijd gemakkelijk met onze automatische auto's</b><br>
                                    Wij begrijpen dat voor sommige reizigers, gemakkelijk rijden een prioriteit is.
                                    Daarom bieden wij een ruime selectie automatische auto's in Mohammedia om aan uw behoeften te voldoen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur 4x4 Mohammedia" title="Autoverhuur 4x4 Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Autoverhuur 4x4 Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Bent u bezorgd over uw vervoer tijdens uw verblijf in Mohammedia? Jacarandacar, uw 4x4-verhuuragentschap in Mohammedia, met gekwalificeerd personeel met ervaring in de verhuursector en een jong team van gidsen en assistenten, biedt u een gevarieerd aanbod aan recente 4x4-voertuigen, uitgerust met verschillende extra opties, te huur voor korte of lange termijn, aangepast aan uw behoeften, en dat alles tegen zeer aantrekkelijke en goed doordachte prijzen. Ontdek Marokko en beleef avonturen in de woestijnen met onze comfortabele 4x4-voertuigen en profiteer van onze 24/7 assistentie.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Handgeschakelde autoverhuur Mohammedia" title="Handgeschakelde autoverhuur Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Handgeschakelde autoverhuur Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Voor liefhebbers van traditioneel rijden bieden wij een verscheidenheid aan handgeschakelde auto's in Mohammedia aan. Of u nu op zoek bent naar een compact voertuig om door de smalle straatjes van de medina te navigeren, of naar een ruimer model voor uw uitstapjes in de regio ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'pt')
                    <div class="row">

                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Aluguel de carros baratos em Mohammedia!" alt="Aluguel de carros baratos em Mohammedia!" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros baratos em Mohammedia!</a></h3>

                                <div class="opt-fl-text">

                                    <p>
                                        Quer alugar um carro barato para sua estadia em Mohammedia? Nosso escritório, localizado a 15 minutos do aeroporto de Mohammedia, possui uma frota de carros recentes e climatizados, além de 4x4s. Oferecemos aluguel de carros em Mohammedia...<br>  
                                    </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Aluguel de carros Mohammedia" alt="Aluguel de carros Mohammedia" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros Mohammedia</a></h3>

                                <div class="opt-fl-text">

                                    <p>Para sua estadia em Marrocos, há um só endereço: Jacaranda Car - aluguel de carros Mohammedia, especializado em aluguel de carros e 4x4 em Mohammedia, oferecendo veículos de qualidade a preços muito competitivos. Alugar um carro em Mohammedia...<br>  
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Aluguel de carros no aeroporto de Mohammedia" alt="Aluguel de carros no aeroporto de Mohammedia" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros no aeroporto de Mohammedia</a></h3>

                                <div class="opt-fl-text">
                                    <p>Nossa empresa de aluguel de carros em Mohammedia oferece uma frota jovem e variada de 4x4s no aeroporto de Mohammedia para atender às suas necessidades, seja você a trabalho, com família ou amigos, temos o 4x4 que você precisa, a preços muito competitivos...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Aluguel de carros sem caução" alt="Aluguel de carros sem caução" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros sem caução</a></h3>

                                <div class="opt-fl-text">
                                    <p>Quando você aluga um carro com a Jacaranda, garantimos o melhor serviço na cidade de Mohammedia, começando pelos melhores preços e muitos outros benefícios, como aluguel de carros sem cartão de crédito, nossos clientes podem pagar em dinheiro. A Jacaranda também oferece a seus clientes a possibilidade de...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com transmissão automática em Mohammedia" title="Aluguel de carros com transmissão automática em Mohammedia"></a>

                                <h3 class="title"><a href="#">Aluguel de carros com transmissão automática em Mohammedia</a></h3>

                                <div class="opt-fl-text">
                                    <p><b>Dirija facilmente com nossos carros automáticos</b><br>
                                        Entendemos que para alguns viajantes, dirigir com facilidade é uma prioridade.
                                        Por isso, oferecemos uma ampla seleção de carros automáticos em Mohammedia para atender às suas necessidades...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de 4x4 Mohammedia" title="Aluguel de 4x4 Mohammedia">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de 4x4 Mohammedia</a></h3>

                                <div class="opt-fl-text">
                                    <p>Está preocupado com seu transporte durante sua estadia em Mohammedia? Jacarandacar, sua agência de aluguel de 4x4 em Mohammedia, com equipe qualificada e experiente no setor de locação e um time jovem de guias e assistentes, oferece uma variedade de veículos 4x4 recentes, equipados com várias opções adicionais, para aluguel a curto ou longo prazo, adaptados às suas necessidades, tudo a preços muito atraentes e bem pensados. Descubra Marrocos e viva aventuras nas desertos com nossos confortáveis veículos 4x4 e aproveite nossa assistência 24/7.</p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->

                        <!-------------------------------------------------------------->

                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com transmissão manual em Mohammedia" title="Aluguel de carros com transmissão manual em Mohammedia">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de carros com transmissão manual em Mohammedia</a></h3>

                                <div class="opt-fl-text">
                                    <p>Para os amantes da condução tradicional, oferecemos uma variedade de carros com transmissão manual em Mohammedia. Seja você está procurando um veículo compacto para navegar pelas ruas estreitas da medina, ou um modelo mais espaçoso para suas saídas na região...</p><br>

                                </div>

                            </div>

                        </div>

                        <!------------------------------------------------------------------------------->

                    </div>

                @else
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Mohammedia" alt="location voiture Mohammedia" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures pas cher à Mohammedia !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vous souhaitez trouver une location de voiture pas cher pour votre séjour à
                                    Mohammedia ? Notre agence est située à 15 minutes de l'aéroport de Mohammedia dispose
                                    d’un parc auto composé de véhicules et 4x4 récents et climatisés .vous assure à la
                                    location de voitures à Mohammedia ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Mohammedia" alt="Location voitures Gueliz Mohammedia" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Location de voiture Mohammedia</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Pour votre séjour au Maroc, une seule adresse: Jacaranda Car - location voiture
                                    Mohammedia , spécialisée dans la location de voitures, 4x4 à Mohammedia , vous propose
                                    des véhicules de location et de qualité à des prix très compétitifs. Une location de
                                    voiture à Mohammedia ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Mohammedia aéroport" alt="location voiture Mohammedia aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voiture aéroport Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Notre Agence de Location 4x4 Mohammedia vous propose un Parc de 4x4 jeune et varié sur
                                    l'aeroport de Mohammedia pour combler vos désirs que vous soyez en voyage d'affaire,
                                    en famille ou même entre amis on a le véhicule 4x4 qu'il vos faut, a des prix très
                                    compétitifs ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Mohammedia aéroport" alt="location voiture Mohammedia aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voitures sans caution</a></h3>

                            <div class="opt-fl-text">
                                <p>Lorsque vous louez une voiture avec Jacaranda, nous vous assurons le meilleur service
                                    dans la ville de Mohammedia, à commencer par les meilleurs prix et les nombreux
                                    autres avantages tels que la location de voiture sans carte de crédit, notre client
                                    est libre de payer en espèces. Jacaranda offre également à ses clients la
                                    possibilité de ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Mohammedia" title="location voiture automatique Mohammedia"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures automatiques à Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Conduisez en Toute Simplicité avec nos Voitures Automatiques</b><br>
                                    Nous comprenons que pour certains voyageurs, la conduite en toute simplicité est une priorité.
                                    C'est pourquoi nous proposons une large sélection de voitures automatiques à Mohammedia pour répondre à vos besoins ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Mohammedia" title="location voiture automatique Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Location 4x4
                                    Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Vous souciez de votre moyen de transport durant votre séjour à Mohammedia ?
                                    Jacarandacar votre agence de location 4x4 à Mohammedia avec un personnel qualifiés
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

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Location voiture manuelle Mohammedia" title="Location voiture manuelle Mohammedia">
                            </a>


                            <h3 class="title"><a href="#">Location voiture manuelle Mohammedia</a></h3>

                            <div class="opt-fl-text">
                                <p>Pour les amateurs de conduite traditionnelle, nous proposons une variété de voitures manuelles à Mohammedia.
                                    Que vous recherchiez un véhicule compact pour naviguer dans les ruelles étroites de la Médina ou un modèle plus spacieux pour vos escapades dans la région ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @endif

            </div>

        </div>

@endsection