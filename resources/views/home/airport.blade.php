@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_airport'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_airport'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_airport'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_airport'] }}" />
    <meta name="author" content="Jacarandacar">
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
@endsection

@section('bg')
    {{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_airport'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Concerned about our image in the field of car rental in Marrakech, we provide you with rental
                        vehicles of all types, in order to meet the demands of customers, who reserve their rental cars in
                        advance and in the last minutes a car or 4x4 all-terrain rental at Marrakech airport.
                    </p>
                    <p>
                        Jacarandacar is an agency made up of experts in the field who will warmly welcome you as soon as you
                        arrive at al Mènera airport. Jacarandacar also offers dilevery service to many cities in the
                        kingdom. customers can also return the rented vehicle to any location in the city including the
                        airport.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Preocupados por nuestra imagen en el campo del alquiler de coches en Marrakech, ponemos a su
                        suministro de vehículos de alquiler de todo tipo, con el fin de dar respuesta a las solicitudes de
                        los clientes, que
                        reservar sus coches de alquiler con antelación y en los últimos minutos un coche o un 4x4
                        alquiler todoterreno en el aeropuerto de Marrakech.
                    </p>
                    <p>
                        Jacarandacar es una agencia formada por expertos en la materia que le darán una cálida bienvenida.
                        a su llegada al aeropuerto de al Menera. Jacarandacar también ofrece el servicio de entrega a
                        muchas ciudades del reino. los clientes también pueden devolver el vehículo alquilado a cualquier
                        parte de la ciudad incluyendo el aeropuerto de Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Preoccupati per la nostra immagine nel campo dell'autonoleggio a Marrakech, mettiamo a tua
                        disposizione
                        fornitura di veicoli a noleggio di ogni tipo, al fine di rispondere alle richieste dei clienti, che
                        prenotare in anticipo le loro auto a noleggio e negli ultimi minuti un'auto o un 4x4
                        noleggio fuoristrada all'aeroporto di Marrakech.
                    </p>
                    <p>
                        Jacarandacar è un'agenzia composta da esperti del settore che ti accoglieranno calorosamente
                        al vostro arrivo all'aeroporto al Menera. Jacarandacar offre anche il servizio di dilevery a
                        molte città del regno. i clienti possono anche restituire il veicolo noleggiato a qualsiasi
                        parte della città compreso l'aeroporto di Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Z myślą o naszym wizerunku w dziedzinie wynajmu samochodów w Marrakeszu, udostępniamy Państwu pojazdy do wynajęcia
                        wszystkich rodzajów, aby sprostać potrzebom klientów, którzy rezerwują swoje samochody z wyprzedzeniem, jak również
                        w ostatniej chwili samochód lub terenówkę na lotnisku w Marrakeszu.
                    </p>
                    <p>
                        Jacarandacar to agencja składająca się z ekspertów w tej dziedzinie, którzy serdecznie Państwa przywitają
                        po przylocie na lotnisko Al Mènera. Jacarandacar oferuje również usługę dostawy do wielu miast w królestwie. Klienci
                        mogą także zwrócić wynajęty pojazd w dowolnym miejscu w mieście, w tym na lotnisku w Marrakeszu.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Om onze reputatie op het gebied van autoverhuur in Marrakech hoog te houden, bieden we voertuigen van alle soorten aan om te voldoen aan de wensen van klanten die hun huurauto's van tevoren of last-minute reserveren, zoals een auto of een 4x4 voor verhuur op het terrein van de luchthaven van Marrakech.</p>
                    <p>Jacarandacar is een bureau dat bestaat uit deskundigen op dit gebied die u hartelijk zullen verwelkomen zodra u op de luchthaven van Al Mènera aankomt. Jacarandacar biedt ook een bezorgservice naar veel steden in het koninkrijk. Klanten kunnen de gehuurde auto ook op elk gewenst moment op elke locatie in de stad inleveren, inclusief de luchthaven van Marrakech.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Para manter nossa reputação no setor de aluguel de carros em Marrakech, oferecemos veículos de todos os tipos para atender às necessidades dos clientes que reservam seus carros com antecedência ou no último minuto, como um carro ou um 4x4 para aluguel no aeroporto de Marrakech.</p>
                    <p>Jacarandacar é uma empresa composta por especialistas na área que irão recebê-lo calorosamente assim que você chegar ao Aeroporto de Al Mènera. A Jacarandacar também oferece um serviço de entrega para muitas cidades do reino. Os clientes também podem devolver o carro alugado a qualquer momento em qualquer local da cidade, incluindo o aeroporto de Marrakech.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Soucieux de notre image dans le domaine de la location de voiture à Marrakech, nous mettons à votre
                        disposition des véhicules de location de tous types, afin de répondre aux demandes des clients, qui
                        réservent leurs voitures de location à l'avance et dans les dernières minutes une voiture ou un 4x4
                        tout- location de terrain à l'aéroport de Marrakech.
                    </p>
                    <p>
                        Jacarandacar est une agence composée d'experts en la matière qui vous accueilleront chaleureusement
                        dès votre arrivée à l'aéroport d'al Mènera. Jacarandacar offre également le service de dilevery à de
                        nombreuses villes du royaume. les clients peuvent également rendre le véhicule loué à n'importe quel
                        endroit de la ville dont l'aeroport de Marrakech .
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-airport-aeroport-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                </div>
            </div>
        @endif
    </div>


    @include('home.partials.listingcar_carousel')


    </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
                center: true,
                dots: false,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endsection
