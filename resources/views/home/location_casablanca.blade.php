@extends('home.partials.home_layout', ['static_data', $static_data])

@section('title')
<title>{{ $static_data['strings']['title_location_casablanca'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_location_casablanca'] }}">
    <meta name="author" content="{{ $static_data['strings']['title_location_casablanca'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_location_casablanca'] }}" />
    <meta property="og:type" content="{{ $static_data['strings']['title_location_casablanca'] }}" />
    <meta property="og:title" content="{{ $static_data['strings']['title_location_casablanca'] }}" />
    <meta name="twitter:title" content="{{ $static_data['strings']['title_location_casablanca'] }}" />

    <meta name="description" content="{{ $static_data['strings']['description_location_casa'] }}" />
    <meta name="twitter:description" content="{{ $static_data['strings']['description_location_casa'] }}" />
    <meta property="og:description" content="{{ $static_data['strings']['description_location_casa'] }}" />

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

                        <h1 class="slider-heading">{{ $static_data['strings']['casablanca_slider_heading'] }}</h1>

                        <h4 class="slider-subheading">{{ $static_data['strings']['casablanca_slider_subheading'] }}</h4>

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

                        <h2 class="section-title-dark">{{ $static_data['strings']['casablanca_fl_heading'] }}</h2>

                        <p class="section-description-dark">{{ $static_data['strings']['casablanca_fl_subheading'] }}</p>

                    </div>

                </div>

                @if (Session::get('language') == 'en')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title" style="text-align:justify;">

                            <a href="#"><img src="{{ url('/') .
                                        '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp
                                                                        ' }}" title="Cheap car rental in Casablanca" alt="Cheap car rental in Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Cheap car
                                    rental in Casablanca!</a></h3>
                            <p>Are you looking for a cheap car rental for your stay in Casablanca? Our agency is located
                                15 minutes from Casablanca airport has a car park made up of recent and air-conditioned
                                vehicles and 4x4s. Provides you with car rental in Casablanca, Casablanca, Fez,
                                Casablanca, Casablanca and in Morocco, Do not hesitate to make your reservations in order
                                to 
                            </p>

                            <div class="opt-fl-text">
                                 

                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Casablanca" alt="Location voitures Gueliz Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Car rental Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>For your stay in Morocco, only one address: Jacaranda Car - Casablanca car rental,
                                    specializing in car rental, 4x4 in Casablanca, offers rental and quality vehicles at
                                    very competitive prices. A car rental in Casablanca will allow you to discover
                                    Morocco. Whatever the length of your stay, rent a vehicle in Casablanca and make your
                                    trips successful experiences ...</p><br>
                                 
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"> <img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Casablanca aéroport" alt="location voiture Casablanca aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car hire
                                    Casablanca airport</a></h3>

                            <div class="opt-fl-text">
                                <p>Our Casablanca 4x4 Rental Agency offers you a young and varied 4x4 Park on Casablanca
                                    airport to fulfill your desires whether you are on a business trip, with family or
                                    even between friends we have the 4x4 vehicle you need , at very competitive prices.
                                    Discover the city of Casablanca and fully enjoy your vacation thanks to our Casablanca
                                    4x4 rental service ...</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp') }} " title="Car rental Casablanca without deposit" alt="Car rental Casablanca without deposit" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Car
                                    rental Casablanca without deposit</a></h3>

                            <div class="opt-fl-text">
                                <p>When renting a car with Jacaranda we assure you the best service in Casablanca city ,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }} " title="Automatic car rental in Casablanca" alt="Automatic car rental in Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Automatic car rental in Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Drive with ease with our Automatic Cars</b><br>
                                    We understand that for some travelers, driving with ease is a priority.
                                    This is why we offer a wide selection of automatic cars in Casablanca to meet your needs ....</p>
                                <br>
                                 

                            </div>

                        </div>


                    </div>

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="4x4 rental Casablanca" title="4x4 rental Casablanca">
                            </a>


                            <h3 class="title"><a href="#">4x4 rental Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Concerned about your means of transportation during your stay in Casablanca? Jacarandacar,
                                    your 4x4 rental agency in Casablanca, with qualified staff possessing experience in the rental field and a young team of guides and assistants,
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Manual car rental Casablanca" title="Manual car rental Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Manual car rental Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>For lovers of traditional driving, we offer a variety of manual cars in Casablanca.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Casablanca" alt="location voiture Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches baratos en Casablanca !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Quieres encontrar un coche de alquiler barato para tu estancia en Casablanca?
                                    Nuestra agencia se encuentra a 15 minutos del aeropuerto de Casablanca y dispone de
                                    una flota de
                                    coches compuesta por vehículos recientes, climatizados y 4x4.Puede estar seguro de
                                    que el <strong>alquiler coches Casablanca</strong> ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Casablanca" alt="Location voitures Gueliz Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Alquiler coches Casablanca</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Para su estancia en Marruecos, sólo una dirección: Jacaranda Car - <strong>Alquiler coches Casablanca</strong>,
                                    especializada en alquiler de coches, 4x4 en Casablanca, ofrece vehículos de alquiler
                                    de calidad a
                                    precios muy competitivos. Un coche de alquiler en Casablanca ...<br>  

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Casablanca aéroport" alt="location voiture Casablanca aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">
                                    Alquiler de coches en el aeropuerto de Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Nuestra Agencia de Alquiler de 4x4 en Casablanca te ofrece un Parque 4x4 joven y
                                    variado en
                                    el aeropuerto de Casablanca para cumplir tus deseos ya sea que estés en un viaje de
                                    negocios,
                                    en familia o incluso con amigos, tenemos el vehículo 4x4 que necesitas, a precios
                                    muy competitivos ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Casablanca aéroport" alt="location voiture Casablanca aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Alquiler de coches sin
                                    deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Cuando alquilas un coche con Jacaranda, te aseguramos el mejor servicio en la ciudad
                                    de Casablanca,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches automáticos en Casablanca" title="Alquiler de coches automáticos en Casablanca"></a>


                            <h3 class="title"><a href="#">Alquiler de coches automáticos en Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>
                                    <b>Conduce con tranquilidad con nuestros Coches Automáticos</b><br>
                                    Entendemos que para algunos viajeros conducir con tranquilidad es una prioridad.
                                    Por eso ofrecemos una amplia selección de coches automáticos en Casablanca para satisfacer sus necesidades ....<br> 
                                </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Casablanca" title="location voiture automatique Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de 4x4
                                    Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Te preocupas por tu medio de transporte durante tu estancia en Casablanca?
                                    Jacarandacar tu agencia de alquiler de 4x4 en Casablanca con personal cualificado con
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Alquiler de coches manuales en Casablanca" title="Alquiler de coches manuales en Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Alquiler de coches manuales en Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Para los amantes de la conducción tradicional, ofrecemos una variedad de coches manuales en Casablanca.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Autonoleggio Casablanca" alt="Autonoleggio Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    economico a Casablanca!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vuoi trovare un noleggio auto economico per il tuo soggiorno a Casablanca?
                                    La nostra agenzia si trova a 15 minuti dall'aeroporto di Casablanca e dispone di un
                                    parco auto
                                    composto da veicoli recenti, climatizzati e 4x4.Puoi essere sicuro del noleggio auto
                                    a Casablanca ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autonoleggio Guéliz Casablanca" alt="Autonoleggio Guéliz Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autonoleggio Casablanca</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>
                                    Per il tuo soggiorno in Marocco, un solo indirizzo: Jacaranda Car - Noleggio auto
                                    Casablanca,
                                    specializzata nel noleggio auto 4x4 a Casablanca, offre veicoli a noleggio di qualità
                                    a prezzi molto competitivi.
                                    Un noleggio auto a Casablanca ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="autonoleggio aeroporto di Casablanca" alt="autonoleggio aeroporto di Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    all'aeroporto di Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>La nostra agenzia di noleggio 4x4 di Casablanca ti offre un parco 4x4 giovane e vario
                                    all'aeroporto di Casablanca
                                    per soddisfare i tuoi desideri sia che tu sia in viaggio d'affari,
                                    con la famiglia o anche con gli amici, abbiamo il veicolo 4x4 di cui hai bisogno. ,
                                    a prezzi molto competitivi ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="autonoleggio aeroporto di Casablanca" alt="autonoleggio aeroporto di Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Noleggio auto
                                    senza deposito</a></h3>

                            <div class="opt-fl-text">
                                <p>Quando noleggi un'auto con Jacaranda, ti assicuriamo il miglior servizio nella città
                                    di Casablanca,
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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Casablanca" title="Noleggio auto automatiche a Casablanca"></a>


                            <h3 class="title"><a href="#">Noleggio auto con cambio automatico a Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Guida con facilità con le nostre auto automatiche</b><br>
                                    Comprendiamo che per alcuni viaggiatori guidare con facilità è una priorità.
                                    Ecco perché offriamo un'ampia selezione di auto automatiche a Casablanca per soddisfare le vostre esigenze ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto automatiche a Casablanca" title="Noleggio auto automatiche a Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Noleggio 4x4
                                    Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Ti preoccupi per il tuo mezzo di trasporto durante il tuo soggiorno a Casablanca?
                                    Jacarandacar la tua agenzia di noleggio 4x4 a Casablanca con personale qualificato
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Noleggio auto manuale Casablanca" title="Noleggio auto manuale Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Noleggio auto manuale Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Per gli amanti della guida tradizionale, offriamo una varietà di auto manuali a Casablanca.
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

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Tanio wynajem samochodów w Casablanca !" alt="Tanio wynajem samochodów w Casablanca !" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Tanio wynajem samochodów w Casablanca !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Chcesz znaleźć tanie wynajem samochodów na twój pobyt w Casablanca? Nasze biuro znajduje się 15 minut od lotniska w Casablanca i posiada flotę samochodów i nowych klimatyzowanych samochodów terenowych. Zapewniamy wynajem samochodów w Casablanca ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Wynajem samochodów w Casablanca" alt="Wynajem samochodów w Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Wynajem samochodów w Casablanca</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Dla Państwa pobytu w Maroku jedno miejsce: Jacaranda Car - wynajem samochodów w Casablanca, specjalizujący się w wynajmie samochodów, terenówek w Casablanca,
                                    oferuje Państwu wynajem samochodów wysokiej jakości w bardzo konkurencyjnych cenach. Wynajem samochodów w Casablanca ...<br>
                                     
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Wypożyczalnia samochodów na lotnisku w Casablanca" alt="Wypożyczalnia samochodów na lotnisku w Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów na lotnisku w Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Nasze biuro wynajmu samochodów terenowych w Casablanca oferuje Państwu młody i zróżnicowany park samochodów terenowych na lotnisku w Casablanca, aby zaspokoić Państwa potrzeby, czy podróżujecie Państwo służbowo, w rodzinie czy nawet ze znajomymi mamy odpowiedni samochód terenowy dla Państwa, w bardzo konkurencyjnych cenach ...<br> </p>



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

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem samochodów automatycznych w Casablanca" title="Wynajem samochodów automatycznych w Casablanca"></a>


                            <h3 class="title"><a href="#">Wynajem samochodów automatycznych w Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Jazda Bezproblemowa z Naszymi Samochodami Automatycznymi</b><br>
                                    Rozumiemy, że dla niektórych podróżnych jazda bezproblemowa jest priorytetem. Dlatego oferujemy szeroki wybór samochodów automatycznych w Casablanca, aby sprostać Państwa potrzebom ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wynajem 4x4 w Casablanca" title="Wynajem 4x4 w Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Wynajem 4x4 w Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Zadbacie o swój środek transportu podczas pobytu w Casablanca? Jacarandacar, Twoje biuro wynajmu samochodów terenowych w Casablanca,
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Wypożyczalnia samochodów manualnych w Casablanca." title="Wypożyczalnia samochodów manualnych w Casablanca.">
                            </a>


                            <h3 class="title"><a href="#">Wypożyczalnia samochodów manualnych w Casablanca.</a></h3>

                            <div class="opt-fl-text">
                                <p>Dla miłośników tradycyjnej jazdy proponujemy różnorodność samochodów z manualną skrzynią biegów w Casablanca. Czy szukasz kompaktowego pojazdu do poruszania się po wąskich uliczkach w Medynie, czy może bardziej przestronnego modelu na wycieczki po okolicy ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'nl')
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Goedkope autoverhuur in Casablanca!" alt="Goedkope autoverhuur in Casablanca!" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Goedkope autoverhuur in Casablanca!</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Wil je een goedkope auto huren voor je verblijf in Casablanca? Ons bureau, gelegen op 15 minuten van de luchthaven van Casablanca, heeft een wagenpark met recente en geklimatiseerde auto's en 4x4's. Wij bieden autoverhuur in Casablanca aan ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Autoverhuur Casablanca" alt="Autoverhuur Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Autoverhuur Casablanca</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Voor uw verblijf in Marokko, slechts één adres: Jacaranda Car - autoverhuur Casablanca, gespecialiseerd in autoverhuur, 4x4 in Casablanca, biedt u kwaliteitsvoertuigen te huur aan tegen zeer concurrerende prijzen. Een auto huren in Casablanca ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Autoverhuur op de luchthaven van Casablanca" alt="Autoverhuur op de luchthaven van Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur op de luchthaven van Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Ons autoverhuurbedrijf in Casablanca biedt u een jong en gevarieerd wagenpark van 4x4's op de luchthaven van Casablanca om aan uw wensen te voldoen, of u nu op zakenreis bent, met familie of zelfs met vrienden, wij hebben de 4x4 die u nodig heeft, tegen zeer concurrerende prijzen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Autoverhuur zonder borg" alt="Autoverhuur zonder borg" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Autoverhuur zonder borg</a></h3>

                            <div class="opt-fl-text">
                                <p>Wanneer u een auto huurt bij Jacaranda, verzekeren wij u van de beste service in de stad Casablanca, beginnend met de beste prijzen en vele andere voordelen zoals autoverhuur zonder creditcard, onze klant is vrij om contant te betalen. Jacaranda biedt haar klanten ook de mogelijkheid om ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur met automatische transmissie in Casablanca" title="Autoverhuur met automatische transmissie in Casablanca"></a>


                            <h3 class="title"><a href="#">Autoverhuur met automatische transmissie in Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Rijd gemakkelijk met onze automatische auto's</b><br>
                                    Wij begrijpen dat voor sommige reizigers, gemakkelijk rijden een prioriteit is.
                                    Daarom bieden wij een ruime selectie automatische auto's in Casablanca om aan uw behoeften te voldoen ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Autoverhuur 4x4 Casablanca" title="Autoverhuur 4x4 Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Autoverhuur 4x4 Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Bent u bezorgd over uw vervoer tijdens uw verblijf in Casablanca? Jacarandacar, uw 4x4-verhuuragentschap in Casablanca, met gekwalificeerd personeel met ervaring in de verhuursector en een jong team van gidsen en assistenten, biedt u een gevarieerd aanbod aan recente 4x4-voertuigen, uitgerust met verschillende extra opties, te huur voor korte of lange termijn, aangepast aan uw behoeften, en dat alles tegen zeer aantrekkelijke en goed doordachte prijzen. Ontdek Marokko en beleef avonturen in de woestijnen met onze comfortabele 4x4-voertuigen en profiteer van onze 24/7 assistentie.</p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->

                    <!-------------------------------------------------------------->

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Handgeschakelde autoverhuur Casablanca" title="Handgeschakelde autoverhuur Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Handgeschakelde autoverhuur Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Voor liefhebbers van traditioneel rijden bieden wij een verscheidenheid aan handgeschakelde auto's in Casablanca aan. Of u nu op zoek bent naar een compact voertuig om door de smalle straatjes van de medina te navigeren, of naar een ruimer model voor uw uitstapjes in de regio ...</p><br>
                                 



                            </div>

                        </div>


                    </div>


                    <!------------------------------------------------------------------------------->


                </div>
                @elseif (Session::get('language') == 'pt')
                    <div class="row">
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="Aluguel de carro barato em Casablanca!" alt="Aluguel de carro barato em Casablanca!" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carro barato em Casablanca!</a></h3>

                                <div class="opt-fl-text">

                                    <p>
                                        Quer alugar um carro barato para a sua estadia em Casablanca? Nosso escritório, localizado a 15 minutos do aeroporto de Casablanca, possui uma frota de carros recentes e climatizados, além de 4x4. Oferecemos aluguel de carros em Casablanca ...<br>  
                                    </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Aluguel de carros Casablanca" alt="Aluguel de carros Casablanca" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros Casablanca</a></h3>

                                <div class="opt-fl-text">

                                    <p>Para a sua estadia em Marrocos, apenas um endereço: Jacaranda Car - aluguel de carros em Casablanca, especializado em aluguel de carros e 4x4 em Casablanca, oferece veículos de qualidade a preços muito competitivos. Alugar um carro em Casablanca ...<br>  
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="Aluguel de carros no aeroporto de Casablanca" alt="Aluguel de carros no aeroporto de Casablanca" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros no aeroporto de Casablanca</a></h3>

                                <div class="opt-fl-text">
                                    <p>Nossa empresa de aluguel de carros em Casablanca oferece uma frota jovem e variada de 4x4 no aeroporto de Casablanca para atender às suas necessidades, seja para uma viagem de negócios, com a família ou até mesmo com amigos, temos o 4x4 que você precisa, a preços muito competitivos ...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="Aluguel de carros sem caução" alt="Aluguel de carros sem caução" style="width: 100%;" class="responsive-img"></a>

                                <h3 class="title"><a href="#">Aluguel de carros sem caução</a></h3>

                                <div class="opt-fl-text">
                                    <p>Quando você aluga um carro com a Jacaranda, garantimos o melhor serviço na cidade de Casablanca, começando pelos melhores preços e muitos outros benefícios, como aluguel de carros sem cartão de crédito, nosso cliente pode pagar em dinheiro. A Jacaranda também oferece aos seus clientes a possibilidade de ...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com transmissão automática em Casablanca" title="Aluguel de carros com transmissão automática em Casablanca"></a>

                                <h3 class="title"><a href="#">Aluguel de carros com transmissão automática em Casablanca</a></h3>

                                <div class="opt-fl-text">
                                    <p><b>Dirija facilmente com nossos carros automáticos</b><br>
                                        Entendemos que para alguns viajantes, dirigir com facilidade é uma prioridade. Por isso, oferecemos uma ampla seleção de carros automáticos em Casablanca para atender às suas necessidades ...<br> </p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->
                        <!-------------------------------------------------->
                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de 4x4 Casablanca" title="Aluguel de 4x4 Casablanca">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de 4x4 Casablanca</a></h3>

                                <div class="opt-fl-text">
                                    <p>Está preocupado com o transporte durante a sua estadia em Casablanca? A Jacarandacar, sua agência de aluguel de 4x4 em Casablanca, com equipe qualificada e experiente no setor de aluguel e um jovem time de guias e assistentes, oferece uma variedade de veículos 4x4 recentes, equipados com várias opções adicionais, para aluguel a curto ou longo prazo, adaptados às suas necessidades, e tudo isso a preços muito atraentes e bem pensados. Descubra o Marrocos e viva aventuras nos desertos com nossos confortáveis veículos 4x4 e aproveite nossa assistência 24/7.</p>

                                </div>

                            </div>

                        </div>
                        <!-------------------------------------------------->

                        <!-------------------------------------------------------------->

                        <div class="col-md-4 col-sm-12 box">

                            <div class="opt-fl-text-title">

                                <a href="#">
                                    <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Aluguel de carros com câmbio manual Casablanca" title="Aluguel de carros com câmbio manual Casablanca">
                                </a>

                                <h3 class="title"><a href="#">Aluguel de carros com câmbio manual Casablanca</a></h3>

                                <div class="opt-fl-text">
                                    <p>Para os amantes da condução tradicional, oferecemos uma variedade de carros com câmbio manual em Casablanca. Se você está procurando um veículo compacto para navegar pelas ruas estreitas da medina, ou um modelo mais espaçoso para suas excursões na região ...</p><br>

                                </div>

                            </div>

                        </div>

                        <!------------------------------------------------------------------------------->

                    </div>
                @else
                <div class="row">

                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech-pas-cher-1.webp' }}" title="location voiture Casablanca" alt="location voiture Casablanca" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures pas cher à Casablanca !</a></h3>

                            <div class="opt-fl-text">

                                <p>
                                    Vous souhaitez trouver une location de voiture pas cher pour votre séjour à
                                    Casablanca ? Notre agence est située à 15 minutes de l'aéroport de Casablanca dispose
                                    d’un parc auto composé de véhicules et 4x4 récents et climatisés .vous assure à la
                                    location de voitures à Casablanca ...<br>  

                                </p>


                            </div>

                        </div>

                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-a-marrakech--1.webp' }}" title="Location voitures Gueliz Casablanca" alt="Location voitures Gueliz Casablanca" style="width: 100%;" class="responsive-img"></a>

                            <h3 class="title"><a href="#">Location de voiture Casablanca</a>
                            </h3>

                            <div class="opt-fl-text">

                                <p>Pour votre séjour au Maroc, une seule adresse: Jacaranda Car - location voiture
                                    Casablanca , spécialisée dans la location de voitures, 4x4 à Casablanca , vous propose
                                    des véhicules de location et de qualité à des prix très compétitifs. Une location de
                                    voiture à Casablanca ...<br>  
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-de-voiture-aeroport-marrakech-1.webp' }}" title="location voiture Casablanca aéroport" alt="location voiture Casablanca aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voiture aéroport Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Notre Agence de Location 4x4 Casablanca vous propose un Parc de 4x4 jeune et varié sur
                                    l'aeroport de Casablanca pour combler vos désirs que vous soyez en voyage d'affaire,
                                    en famille ou même entre amis on a le véhicule 4x4 qu'il vos faut, a des prix très
                                    compétitifs ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ url('/') . '/assets/images/home/locations/location-voiture-sans-caution-marrakech-1.webp' }}" title="location voiture Casablanca aéroport" alt="location voiture Casablanca aéroport" style="width: 100%;" class="responsive-img"></a>


                            <h3 class="title"><a href="#">Location de
                                    voitures sans caution</a></h3>

                            <div class="opt-fl-text">
                                <p>Lorsque vous louez une voiture avec Jacaranda, nous vous assurons le meilleur service
                                    dans la ville de Casablanca, à commencer par les meilleurs prix et les nombreux
                                    autres avantages tels que la location de voiture sans carte de crédit, notre client
                                    est libre de payer en espèces. Jacaranda offre également à ses clients la
                                    possibilité de ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#"><img src="{{ asset('assets/images/home/locations/location-voiture-automatique-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Casablanca" title="location voiture automatique Casablanca"></a>


                            <h3 class="title"><a href="#">Location
                                    de voitures automatiques à Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p><b>Conduisez en Toute Simplicité avec nos Voitures Automatiques</b><br>
                                    Nous comprenons que pour certains voyageurs, la conduite en toute simplicité est une priorité.
                                    C'est pourquoi nous proposons une large sélection de voitures automatiques à Casablanca pour répondre à vos besoins ...<br> </p>



                            </div>

                        </div>


                    </div>
                    <!-------------------------------------------------->
                    <!-------------------------------------------------->
                    <div class="col-md-4 col-sm-12 box">

                        <div class="opt-fl-text-title">

                            <a href="#">
                                <img src="{{ asset('assets/images/home/locations/location-4x4-suv-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="location voiture automatique Casablanca" title="location voiture automatique Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Location 4x4
                                    Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Vous souciez de votre moyen de transport durant votre séjour à Casablanca ?
                                    Jacarandacar votre agence de location 4x4 à Casablanca avec un personnel qualifiés
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
                                <img src="{{ asset('assets/images/home/locations/location-voiture-automatique-manuelle-marrakech-1.webp') }}" style="width: 100%;" class="responsive-img" alt="Location voiture manuelle Casablanca" title="Location voiture manuelle Casablanca">
                            </a>


                            <h3 class="title"><a href="#">Location voiture manuelle Casablanca</a></h3>

                            <div class="opt-fl-text">
                                <p>Pour les amateurs de conduite traditionnelle, nous proposons une variété de voitures manuelles à Casablanca.
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