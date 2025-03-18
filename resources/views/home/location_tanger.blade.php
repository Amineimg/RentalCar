@extends('home.partials.home_layout', ['static_data', $static_data])

@section('title')
<title>{{ $static_data['strings']['title_location_tanger'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_location_tanger'] }}">
    <meta name="author" content="{{ $static_data['strings']['title_location_tanger'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_location_tanger'] }}" />
    <meta property="og:type" content="{{ $static_data['strings']['title_location_tanger'] }}" />
    <meta property="og:title" content="{{ $static_data['strings']['title_location_tanger'] }}" />
    <meta name="twitter:title" content="{{ $static_data['strings']['title_location_tanger'] }}" />

    <meta name="description" content="{{ $static_data['strings']['description_location_tanger'] }}" />
    <meta name="twitter:description" content="{{ $static_data['strings']['description_location_tanger'] }}" />
    <meta property="og:description" content="{{ $static_data['strings']['description_location_tanger'] }}" />

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

                        <h1 class="slider-heading">{{ $static_data['strings']['tanger_slider_heading'] }}</h1>

                        <h4 class="slider-subheading">{{ $static_data['strings']['tanger_slider_subheading'] }}</h4>

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

                        <h2 class="section-title-dark">{{ $static_data['strings']['tanger_fl_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['tanger_fl_subheading'] }}</p>

                    </div>

                </div>

                @if (Session::get('language') == 'en')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title" style="text-align:justify;">

                            <a href="#"><img src="{{ url('/') .
                                        '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp
                                                                        ' }}" title="Cheap car rental in Tangier" alt="Cheap car rental in Tangier" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Cheap car
                                    rental in Tangier!</a></h3>
                            <p>Are you looking for a cheap car rental for your stay in Tangier? Our agency is located
                                15 minutes from Tangier airport has a car park made up of recent and air-conditioned
                                vehicles and 4x4s. Provides you with car rental in Tangier, Fez,
                                Casablanca, Tangier and in Morocco, Do not hesitate to make your reservations in order
                                to 
                            </p>

                            <div class="opt-fl-text">
                                 

                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Tangier" alt="Location voitures Gueliz Tangier" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Car rental Tangier</a></h3>

                            <div class="opt-fl-text">
                                <p>For your stay in Morocco, only one address: Jacaranda Car - Tangier car rental,
                                    specializing in car rental, 4x4 in Tangier, offers rental and quality vehicles at
                                    very competitive prices. A car rental in Tangier will allow you to discover
                                    Morocco. Whatever the length of your stay, rent a vehicle in Tangier and make your
                                    trips successful experiences ...</p><br>
                                 
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"> <img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Tangier aéroport" alt="location voiture Tangier aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car hire
                                    Tangier airport</a></h3>

                            <div class="opt-fl-text">
                                <p>Our Tangier 4x4 Rental Agency offers you a young and varied 4x4 Park on Tangier
                                    airport to fulfill your desires whether you are on a business trip, with family or
                                    even between friends we have the 4x4 vehicle you need , at very competitive prices.
                                    Discover the city of Tangier and fully enjoy your vacation thanks to our Tangier
                                    4x4 rental service ...</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp') }} " title="Car rental Tangier without deposit" alt="Car rental Tangier without deposit" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car
                                    rental Tangier without deposit</a></h3>

                            <div class="opt-fl-text">
                                <p>When renting a car with Jacaranda we assure you the best service in Tangier city ,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }} " title="Automatic car rental in Tangier" alt="Automatic car rental in Tangier" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Automatic car rental in Tangier</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Drive with ease with our Automatic Cars</b><br>
                                    We understand that for some travelers, driving with ease is a priority.
                                    This is why we offer a wide selection of automatic cars in Tangier to meet your needs ....</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="4x4 rental Tangier" title="4x4 rental Tangier">
                            </a>


                            <h3 class="title"><a href="#">4x4 rental Tangier</a></h3>

                            <div class="opt-fl-text">
                                <p>Concerned about your means of transportation during your stay in Tangier? Jacarandacar,
                                    your 4x4 rental agency in Tangier, with qualified staff possessing experience in the rental field and a young team of guides and assistants,
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Manual car rental Tangier" title="Manual car rental Tangier">
                            </a>


                            <h3 class="title"><a href="#">Manual car rental Tangier</a></h3>

                            <div class="opt-fl-text">
                                <p>For lovers of traditional driving, we offer a variety of manual cars in Tangier.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Tánger" alt="location voiture Tánger" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches baratos en Tánger !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Quieres encontrar un coche de alquiler barato para tu estancia en Tánger?
                                    Nuestra agencia se encuentra a 15 minutos del aeropuerto de Tánger y dispone de
                                    una flota de
                                    coches compuesta por vehículos recientes, climatizados y 4x4.Puede estar seguro de
                                    que el <strong>alquiler coches Tánger</strong> ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Tánger" alt="Location voitures Gueliz Tánger" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Alquiler coches Tánger</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Para su estancia en Marruecos, sólo una dirección: Jacaranda Car - <strong>Alquiler coches Tánger</strong>,
                                    especializada en alquiler de coches, 4x4 en Tánger, ofrece vehículos de alquiler
                                    de calidad a
                                    precios muy competitivos. Un coche de alquiler en Tánger ...<br>  

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Tánger aéroport" alt="location voiture Tánger aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches en el aeropuerto de Tánger</a></h3>

                            <div class="opt-fl-text">
                                <p>Nuestra Agencia de Alquiler de 4x4 en Tánger te ofrece un Parque 4x4 joven y
                                    variado en
                                    el aeropuerto de Tánger para cumplir tus deseos ya sea que estés en un viaje de
                                    negocios,
                                    en familia o incluso con amigos, tenemos el vehículo 4x4 que necesitas, a precios
                                    muy competitivos ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Tánger aéroport" alt="location voiture Tánger aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Alquiler de coches sin
                                    deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Cuando alquilas un coche con Jacaranda, te aseguramos el mejor servicio en la ciudad
                                    de Tánger,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches automáticos en Tánger" title="Alquiler de coches automáticos en Tánger"></a>


                            <h3 class="title"><a href="#">Alquiler de coches automáticos en Tánger</a></h3>

                            <div class="opt-fl-text">
                                <p>
                                    <b>Conduce con tranquilidad con nuestros Coches Automáticos</b><br>
                                    Entendemos que para algunos viajeros conducir con tranquilidad es una prioridad.
                                    Por eso ofrecemos una amplia selección de coches automáticos en Tánger para satisfacer sus necesidades ....<br> 
                                </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Tánger" title="location voiture automatique Tánger">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de 4x4
                                    Tánger</a></h3>

                            <div class="opt-fl-text">
                                <p>Te preocupas por tu medio de transporte durante tu estancia en Tánger?
                                    Jacarandacar tu agencia de alquiler de 4x4 en Tánger con personal cualificado con
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches manuales en Tánger" title="Alquiler de coches manuales en Tánger">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de coches manuales en Tánger</a></h3>

                            <div class="opt-fl-text">
                                <p>Para los amantes de la conducción tradicional, ofrecemos una variedad de coches manuales en Tánger.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Autonoleggio Tangeri" alt="Autonoleggio Tangeri" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    economico a Tangeri!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vuoi trovare un noleggio auto economico per il tuo soggiorno a Tangeri?
                                    La nostra agenzia si trova a 15 minuti dall'aeroporto di Tangeri e dispone di un
                                    parco auto
                                    composto da veicoli recenti, climatizzati e 4x4.Puoi essere sicuro del noleggio auto
                                    a Tangeri ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autonoleggio Guéliz Tangeri" alt="Autonoleggio Guéliz Tangeri" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autonoleggio Tangeri</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Per il tuo soggiorno in Marocco, un solo indirizzo: Jacaranda Car - Noleggio auto
                                    Tangeri,
                                    specializzata nel noleggio auto 4x4 a Tangeri, offre veicoli a noleggio di qualità
                                    a prezzi molto competitivi.
                                    Un noleggio auto a Tangeri ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="autonoleggio aeroporto di Tangeri" alt="autonoleggio aeroporto di Tangeri" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    all'aeroporto di Tangeri</a></h3>

                            <div class="opt-fl-text">
                                <p>La nostra agenzia di noleggio 4x4 di Tangeri ti offre un parco 4x4 giovane e vario
                                    all'aeroporto di Tangeri
                                    per soddisfare i tuoi desideri sia che tu sia in viaggio d'affari,
                                    con la famiglia o anche con gli amici, abbiamo il veicolo 4x4 di cui hai bisogno. ,
                                    a prezzi molto competitivi ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="autonoleggio aeroporto di Tangeri" alt="autonoleggio aeroporto di Tangeri" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    senza deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Quando noleggi un'auto con Jacaranda, ti assicuriamo il miglior servizio nella città
                                    di Tangeri,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Tangeri" title="Noleggio auto automatiche a Tangeri"></a>


                            <h3 class="title"><a href="#">Noleggio auto con cambio automatico a Tangeri</a></h3>

                            <div class="opt-fl-text">
                                <p>Guida con facilità con le nostre auto automatiche</b><br>
                                    Comprendiamo che per alcuni viaggiatori guidare con facilità è una priorità.
                                    Ecco perché offriamo un'ampia selezione di auto automatiche a Tangeri per soddisfare le vostre esigenze ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Tangeri" title="Noleggio auto automatiche a Tangeri">
                            </a>


                            <h3 class="title"><a href="#">Noleggio 4x4
                                    Tangeri</a></h3>

                            <div class="opt-fl-text">
                                <p>Ti preoccupi per il tuo mezzo di trasporto durante il tuo soggiorno a Tangeri?
                                    Jacarandacar la tua agenzia di noleggio 4x4 a Tangeri con personale qualificato
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto manuale Tangeri" title="Noleggio auto manuale Tangeri">
                            </a>


                            <h3 class="title"><a href="#">Noleggio auto manuale Tangeri</a></h3>

                            <div class="opt-fl-text">
                                <p>Per gli amanti della guida tradizionale, offriamo una varietà di auto manuali a Tangeri.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Tanio wynajem samochodów w Tanger !" alt="Tanio wynajem samochodów w Tanger !" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Tanio wynajem samochodów w Tanger !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Chcesz znaleźć tanie wynajem samochodów na twój pobyt w Tanger? Nasze biuro znajduje się 15 minut od lotniska w Tanger i posiada flotę samochodów i nowych klimatyzowanych samochodów terenowych. Zapewniamy wynajem samochodów w Tanger ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Wynajem samochodów w Tanger" alt="Wynajem samochodów w Tanger" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Wynajem samochodów w Tanger</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Dla Państwa pobytu w Maroku jedno miejsce: Jacaranda Car - wynajem samochodów w Tanger, specjalizujący się w wynajmie samochodów, terenówek w Tanger,
                                    oferuje Państwu wynajem samochodów wysokiej jakości w bardzo konkurencyjnych cenach. Wynajem samochodów w Tanger ...<br>
                                     
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Wypożyczalnia samochodów na lotnisku w Tanger" alt="Wypożyczalnia samochodów na lotnisku w Tanger" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów na lotnisku w Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Nasze biuro wynajmu samochodów terenowych w Tanger oferuje Państwu młody i zróżnicowany park samochodów terenowych na lotnisku w Tanger, aby zaspokoić Państwa potrzeby, czy podróżujecie Państwo służbowo, w rodzinie czy nawet ze znajomymi mamy odpowiedni samochód terenowy dla Państwa, w bardzo konkurencyjnych cenach ...<br> </p>



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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem samochodów automatycznych w Tanger" title="Wynajem samochodów automatycznych w Tanger"></a>


                            <h3 class="title"><a href="#">Wynajem samochodów automatycznych w Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Jazda Bezproblemowa z Naszymi Samochodami Automatycznymi</b><br>
                                    Rozumiemy, że dla niektórych podróżnych jazda bezproblemowa jest priorytetem. Dlatego oferujemy szeroki wybór samochodów automatycznych w Tanger, aby sprostać Państwa potrzebom ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem 4x4 w Tanger" title="Wynajem 4x4 w Tanger">
                            </a>


                            <h3 class="title"><a href="#">Wynajem 4x4 w Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Zadbacie o swój środek transportu podczas pobytu w Tanger? Jacarandacar, Twoje biuro wynajmu samochodów terenowych w Tanger,
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wypożyczalnia samochodów manualnych w Tanger." title="Wypożyczalnia samochodów manualnych w Tanger.">
                            </a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów manualnych w Tanger.</a></h3>

                            <div class="opt-fl-text">
                                <p>Dla miłośników tradycyjnej jazdy proponujemy różnorodność samochodów z manualną skrzynią biegów w Tanger. Czy szukasz kompaktowego pojazdu do poruszania się po wąskich uliczkach w Medynie, czy może bardziej przestronnego modelu na wycieczki po okolicy ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'nl')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Goedkope autoverhuur in Tanger!" alt="Goedkope autoverhuur in Tanger!" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Goedkope autoverhuur in Tanger!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Wil je een goedkope auto huren voor je verblijf in Tanger? Ons bureau, gelegen op 15 minuten van de luchthaven van Tanger, heeft een wagenpark met recente en geklimatiseerde auto's en 4x4's. Wij bieden autoverhuur in Tanger aan ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autoverhuur Tanger" alt="Autoverhuur Tanger" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autoverhuur Tanger</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Voor uw verblijf in Marokko, slechts één adres: Jacaranda Car - autoverhuur Tanger, gespecialiseerd in autoverhuur, 4x4 in Tanger, biedt u kwaliteitsvoertuigen te huur aan tegen zeer concurrerende prijzen. Een auto huren in Tanger ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Autoverhuur op de luchthaven van Tanger" alt="Autoverhuur op de luchthaven van Tanger" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur op de luchthaven van Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Ons autoverhuurbedrijf in Tanger biedt u een jong en gevarieerd wagenpark van 4x4's op de luchthaven van Tanger om aan uw wensen te voldoen, of u nu op zakenreis bent, met familie of zelfs met vrienden, wij hebben de 4x4 die u nodig heeft, tegen zeer concurrerende prijzen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Autoverhuur zonder borg" alt="Autoverhuur zonder borg" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur zonder borg</a></h3>

                            <div class="opt-fl-text">
                                <p>Wanneer u een auto huurt bij Jacaranda, verzekeren wij u van de beste service in de stad Tanger, beginnend met de beste prijzen en vele andere voordelen zoals autoverhuur zonder creditcard, onze klant is vrij om contant te betalen. Jacaranda biedt haar klanten ook de mogelijkheid om ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur met automatische transmissie in Tanger" title="Autoverhuur met automatische transmissie in Tanger"></a>


                            <h3 class="title"><a href="#">Autoverhuur met automatische transmissie in Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Rijd gemakkelijk met onze automatische auto's</b><br>
                                    Wij begrijpen dat voor sommige reizigers, gemakkelijk rijden een prioriteit is.
                                    Daarom bieden wij een ruime selectie automatische auto's in Tanger om aan uw behoeften te voldoen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur 4x4 Tanger" title="Autoverhuur 4x4 Tanger">
                            </a>


                            <h3 class="title"><a href="#">Autoverhuur 4x4 Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Bent u bezorgd over uw vervoer tijdens uw verblijf in Tanger? Jacarandacar, uw 4x4-verhuuragentschap in Tanger, met gekwalificeerd personeel met ervaring in de verhuursector en een jong team van gidsen en assistenten, biedt u een gevarieerd aanbod aan recente 4x4-voertuigen, uitgerust met verschillende extra opties, te huur voor korte of lange termijn, aangepast aan uw behoeften, en dat alles tegen zeer aantrekkelijke en goed doordachte prijzen. Ontdek Marokko en beleef avonturen in de woestijnen met onze comfortabele 4x4-voertuigen en profiteer van onze 24/7 assistentie.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Handgeschakelde autoverhuur Tanger" title="Handgeschakelde autoverhuur Tanger">
                            </a>


                            <h3 class="title"><a href="#">Handgeschakelde autoverhuur Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Voor liefhebbers van traditioneel rijden bieden wij een verscheidenheid aan handgeschakelde auto's in Tanger aan. Of u nu op zoek bent naar een compact voertuig om door de smalle straatjes van de medina te navigeren, of naar een ruimer model voor uw uitstapjes in de regio ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'pt')
                    <div class="row">

                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Aluguel de carros baratos em Tânger!" alt="Aluguel de carros baratos em Tânger!" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros baratos em Tânger!</a></h3>

                                <div class="opt-fl-text">

                                    <p>
                                        Quer alugar um carro barato para sua estadia em Tânger? Nosso escritório, localizado a 15 minutos do aeroporto de Tânger, tem uma frota com carros recentes e climatizados e 4x4s. Oferecemos aluguel de carros em Tânger...<br>  
                                    </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Aluguel de carros Tânger" alt="Aluguel de carros Tânger" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros Tânger</a></h3>

                                <div class="opt-fl-text">

                                    <p>Para sua estadia em Marrocos, um único endereço: Jacaranda Car - aluguel de carros Tânger, especializado em aluguel de carros e 4x4 em Tânger, oferece veículos de qualidade a preços muito competitivos. Alugar um carro em Tânger...<br>  
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Aluguel de carros no aeroporto de Tânger" alt="Aluguel de carros no aeroporto de Tânger" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros no aeroporto de Tânger</a></h3>

                                <div class="opt-fl-text">
                                    <p>Nossa empresa de aluguel de carros em Tânger oferece uma frota jovem e variada de 4x4s no aeroporto de Tânger para atender às suas necessidades, seja você está em viagem de negócios, com a família ou até mesmo com amigos, temos o 4x4 que você precisa, a preços muito competitivos...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Aluguel de carros sem caução" alt="Aluguel de carros sem caução" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros sem caução</a></h3>

                                <div class="opt-fl-text">
                                    <p>Quando você aluga um carro na Jacaranda, garantimos o melhor serviço na cidade de Tânger, começando pelos melhores preços e muitos outros benefícios, como aluguel de carros sem cartão de crédito, nosso cliente pode pagar em dinheiro. Jacaranda também oferece aos seus clientes a possibilidade de...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com transmissão automática em Tânger" title="Aluguel de carros com transmissão automática em Tânger"></a>

                                <h3 class="title"><a href="#">Aluguel de carros com transmissão automática em Tânger</a></h3>

                                <div class="opt-fl-text">
                                    <p><b>Dirija facilmente com nossos carros automáticos</b><br>
                                        Entendemos que para alguns viajantes, dirigir com facilidade é uma prioridade. Portanto, oferecemos uma ampla seleção de carros automáticos em Tânger para atender às suas necessidades...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de 4x4 Tânger" title="Aluguel de 4x4 Tânger">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de 4x4 Tânger</a></h3>

                                <div class="opt-fl-text">
                                    <p>Está preocupado com o seu transporte durante a sua estadia em Tânger? Jacarandacar, sua agência de aluguel de 4x4 em Tânger, com equipe qualificada e experiente no setor de aluguel e uma equipe jovem de guias e assistentes, oferece uma ampla gama de veículos 4x4 recentes, equipados com várias opções adicionais, para alugar por curto ou longo prazo, adaptados às suas necessidades, tudo a preços muito atraentes e bem planejados. Descubra Marrocos e viva aventuras nos desertos com nossos confortáveis veículos 4x4 e aproveite nossa assistência 24/7.</p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->

                        <!-------------------------------------------------------------->

                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com câmbio manual em Tânger" title="Aluguel de carros com câmbio manual em Tânger">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de carros com câmbio manual em Tânger</a></h3>

                                <div class="opt-fl-text">
                                    <p>Para os amantes da condução tradicional, oferecemos uma variedade de carros com câmbio manual em Tânger. Seja você está procurando um veículo compacto para navegar pelas ruas estreitas da medina ou um modelo mais espaçoso para suas excursões na região...</p><br>

                                </div>

                            </div>

                        </div>

                        <!------------------------------------------------------------------------------->

                    </div>

                @else
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Tanger" alt="location voiture Tanger" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures pas cher à Tanger !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vous souhaitez trouver une location de voiture pas cher pour votre séjour à
                                    Tanger ? Notre agence est située à 15 minutes de l'aéroport de Tanger dispose
                                    d’un parc auto composé de véhicules et 4x4 récents et climatisés .vous assure à la
                                    location de voitures à Tanger ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Tanger" alt="Location voitures Gueliz Tanger" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Location de voiture Tanger</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Pour votre séjour au Maroc, une seule adresse: Jacaranda Car - location voiture
                                    Tanger , spécialisée dans la location de voitures, 4x4 à Tanger , vous propose
                                    des véhicules de location et de qualité à des prix très compétitifs. Une location de
                                    voiture à Tanger ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Tanger aéroport" alt="location voiture Tanger aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voiture aéroport Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Notre Agence de Location 4x4 Tanger vous propose un Parc de 4x4 jeune et varié sur
                                    l'aeroport de Tanger pour combler vos désirs que vous soyez en voyage d'affaire,
                                    en famille ou même entre amis on a le véhicule 4x4 qu'il vos faut, a des prix très
                                    compétitifs ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Tanger aéroport" alt="location voiture Tanger aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voitures sans caution</a></h3>

                            <div class="opt-fl-text">
                                <p>Lorsque vous louez une voiture avec Jacaranda, nous vous assurons le meilleur service
                                    dans la ville de Tanger, à commencer par les meilleurs prix et les nombreux
                                    autres avantages tels que la location de voiture sans carte de crédit, notre client
                                    est libre de payer en espèces. Jacaranda offre également à ses clients la
                                    possibilité de ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Tanger" title="location voiture automatique Tanger"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures automatiques à Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Conduisez en Toute Simplicité avec nos Voitures Automatiques</b><br>
                                    Nous comprenons que pour certains voyageurs, la conduite en toute simplicité est une priorité.
                                    C'est pourquoi nous proposons une large sélection de voitures automatiques à Tanger pour répondre à vos besoins ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Tanger" title="location voiture automatique Tanger">
                            </a>


                            <h3 class="title"><a href="#">Location 4x4
                                    Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Vous souciez de votre moyen de transport durant votre séjour à Tanger ?
                                    Jacarandacar votre agence de location 4x4 à Tanger avec un personnel qualifiés
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Location voiture manuelle Tanger" title="Location voiture manuelle Tanger">
                            </a>


                            <h3 class="title"><a href="#">Location voiture manuelle Tanger</a></h3>

                            <div class="opt-fl-text">
                                <p>Pour les amateurs de conduite traditionnelle, nous proposons une variété de voitures manuelles à Tanger.
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