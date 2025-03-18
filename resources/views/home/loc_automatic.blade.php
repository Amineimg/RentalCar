@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_automatic'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_automatic'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_automatic'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_automatic'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_location_automatic'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Drive with ease with our Automatic Cars</b>
                    <p>
                        We understand that for some travelers, driving with ease is a priority.
                        This is why we offer a wide selection of automatic cars in Marrakech to meet your needs.
                        Our automatic vehicles are equipped with the latest technologies to provide a pleasant and hassle-free driving experience.
                        Whether you're a business traveler looking for efficient city driving or a tourist looking for comfort,
                        our automatic cars allow you to travel with complete comfort.
                        Discover Marrakech without the hassle of changing gears thanks to our fleet of modern and well-maintained automatic vehicles.
                    </p>
                    <b>Automatic Cars for All Your Adventures</b>
                    <p>
                        Marrakech is a vibrant city to explore, and our automatic cars make every adventure even more enjoyable.
                        Whether you want to visit the Medina, discover the Majorelle gardens, or explore the surrounding landscapes,
                        our automatic cars offer you smooth and easy driving. Enjoy the comfort and ease of driving,
                        especially in urban traffic.
                        Book your automatic car rental in Marrakech now and get ready for a hassle-free experience in this enchanting Moroccan city.
                    </p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Conduce con tranquilidad con nuestros Coches Automáticos</b>
                    <p>
                        Entendemos que para algunos viajeros conducir con tranquilidad es una prioridad.
                        Por eso ofrecemos una amplia selección de coches automáticos en Marrakech para satisfacer sus necesidades.
                        Nuestros vehículos automáticos están equipados con las últimas tecnologías para brindar una experiencia de conducción placentera y sin complicaciones.
                        Tanto si es un viajero de negocios que busca una conducción eficiente en la ciudad como si es un turista que busca comodidad,
                        Nuestros coches automáticos te permiten viajar con total comodidad.
                        Descubra Marrakech sin la molestia de cambiar de marcha gracias a nuestra flota de vehículos automáticos modernos y en buen estado.
                    </p>
                    <b>Coches automáticos para todas tus aventuras</b>
                    <p>
                        Marrakech es una ciudad vibrante para explorar y nuestros coches automáticos hacen que cada aventura sea aún más agradable.
                        Si desea visitar la Medina, descubrir los jardines Majorelle o explorar los paisajes de los alrededores,
                        Nuestros coches automáticos le ofrecen una conducción suave y sencilla. Disfrute de la comodidad y facilidad de conducción,
                        especialmente en el tráfico urbano.
                        Reserva ahora tu alquiler de coche automático en Marrakech y prepárate para una experiencia sin complicaciones en esta encantadora ciudad marroquí.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Guida con facilità con le nostre auto automatiche</b>
                    <p>
                        Comprendiamo che per alcuni viaggiatori guidare con facilità è una priorità.
                        Ecco perché offriamo un'ampia scelta di auto con cambio automatico a Marrakech per soddisfare le tue esigenze.
                        I nostri veicoli automatici sono dotati delle più recenti tecnologie per offrire un'esperienza di guida piacevole e senza problemi.
                        Che tu sia un viaggiatore d'affari alla ricerca di una guida efficiente in città o un turista alla ricerca della comodità,
                        le nostre auto automatiche ti permettono di viaggiare in tutta comodità.
                        Scopri Marrakech senza il fastidio di cambiare marcia grazie alla nostra flotta di veicoli automatici moderni e ben mantenuti.
                    </p>
                    <b>Auto automatiche per tutte le tue avventure</b>
                    <p>
                        Marrakech è una città vivace da esplorare e le nostre auto automatiche rendono ogni avventura ancora più piacevole.
                        Che tu voglia visitare la Medina, scoprire i giardini Majorelle o esplorare i paesaggi circostanti,
                        le nostre auto automatiche ti offrono una guida fluida e facile. Goditi il comfort e la facilità di guida,
                        soprattutto nel traffico urbano.
                        Prenota subito il tuo noleggio auto con cambio automatico a Marrakech e preparati per un'esperienza senza problemi in questa incantevole città marocchina.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Kieruj bezproblemowo naszymi samochodami automatycznymi</b>
                    <p>Rozumiemy, że dla niektórych podróżujących łatwa jazda jest priorytetem. Dlatego oferujemy szeroki wybór samochodów automatycznych w Marrakeszu, aby sprostać Twoim potrzebom. Nasze samochody automatyczne wyposażone są w najnowsze technologie, aby zapewnić przyjemne i bezproblemowe doświadczenie jazdy. Bez względu na to, czy jesteś podróżującym biznesowym szukającym efektywnej jazdy po mieście, czy turystą poszukującym komfortu, nasze samochody automatyczne pozwalają Ci poruszać się wygodnie. Odkrywaj Marrakesz bez obaw o zmianę biegów dzięki naszej floty nowoczesnych i dobrze utrzymanych samochodów automatycznych.</p>
                    <b>Samochody Automatyczne dla Twoich Przygód</b>
                    <p>Marrakesz to tętniące życiem miasto, które warto zwiedzić, a nasze samochody automatyczne sprawiają, że każda przygoda jest jeszcze przyjemniejsza. Niezależnie od tego, czy chcesz zwiedzić Medynę, odkryć ogrody Majorelle czy wybrać się na wycieczkę po okolicznych krajobrazach, nasze samochody automatyczne zapewniają płynną i łatwą jazdę. Ciesz się komfortem i łatwością prowadzenia, zwłaszcza w ruchu miejskim. Zarezerwuj już teraz swój samochód automatyczny w Marrakeszu i przygotuj się na bezproblemowe doświadczenie w tym urokliwym marokańskim mieście.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Rijden in alle gemak met onze Automatische Auto's</b>
                    <p>We begrijpen dat voor sommige reizigers het gemak van het rijden prioriteit heeft. Daarom bieden we een ruime selectie van automatische auto's in Marrakech om aan uw behoeften te voldoen. Onze automatische voertuigen zijn uitgerust met de nieuwste technologieën om een plezierige en moeiteloze rijervaring te bieden. Of u nu een zakenreiziger bent die efficiënt door de stad wil rijden of een toerist op zoek naar comfort, onze automatische auto's bieden u gemak bij het verplaatsen. Verken Marrakech zonder de zorgen van schakelen dankzij onze moderne en goed onderhouden vloot van automatische voertuigen.</p>
                    <b>Automatische Auto's voor al uw Avonturen</b>
                    <p>Marrakech is een bruisende stad om te verkennen, en onze automatische auto's maken elk avontuur nog aangenamer. Of u nu de medina wilt bezoeken, de Majorelletuin wilt ontdekken of de omliggende landschappen wilt verkennen, onze automatische auto's bieden u soepel en gemakkelijk rijden. Geniet van het comfort en het gemak van rijden, vooral in stadsverkeer. Reserveer nu uw automatische huurauto in Marrakech en maak u klaar voor een moeiteloze ervaring in deze betoverende Marokkaanse stad.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Dirija com Toda a Simplicidade com Nossos Carros Automáticos</b>
                    <p>
                        Entendemos que para alguns viajantes, dirigir com toda a simplicidade é uma prioridade.
                        É por isso que oferecemos uma ampla seleção de carros automáticos em Marrakech para atender às suas necessidades.
                        Nossos veículos automáticos estão equipados com as últimas tecnologias para proporcionar uma experiência de condução agradável e sem complicações.
                        Se você é um viajante de negócios buscando uma condução eficiente na cidade ou um turista em busca de conforto,
                        nossos carros automáticos permitem que você se desloque com total comodidade.
                        Descubra Marrakech sem se preocupar com trocas de marcha, graças à nossa frota de veículos automáticos modernos e bem mantidos.
                    </p>
                    <b>Carros Automáticos para Todas as Suas Aventuras</b>
                    <p>
                        Marrakech é uma cidade vibrante para explorar, e nossos carros automáticos tornam cada aventura ainda mais agradável.
                        Se você deseja visitar a Medina, explorar os Jardins de Majorelle ou descobrir as paisagens ao redor,
                        nossos carros automáticos oferecem uma condução suave e fácil. Aproveite o conforto e a facilidade de dirigir,
                        especialmente no tráfego urbano.
                        Reserve agora sua locação de carro automático em Marrakech e prepare-se para viver uma experiência sem preocupações nesta encantadora cidade marroquina.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Conduisez en Toute Simplicité avec nos Voitures Automatiques</b>
                    <p>
                        Nous comprenons que pour certains voyageurs, la conduite en toute simplicité est une priorité.
                        C'est pourquoi nous proposons une large sélection de voitures automatiques à Marrakech pour répondre à vos besoins.
                        Nos véhicules automatiques sont équipés des dernières technologies pour offrir une expérience de conduite agréable et sans tracas.
                        Que vous soyez un voyageur d'affaires cherchant une conduite efficace en ville ou un touriste en quête de confort,
                        nos voitures automatiques vous permettent de vous déplacer en toute commodité.
                        Découvrez Marrakech sans souci de changement de vitesse grâce à notre flotte de véhicules automatiques modernes et bien entretenus.
                    </p>
                    <b>Des Voitures Automatiques pour Toutes Vos Aventures</b>
                    <p>
                        Marrakech est une ville vibrante à explorer, et nos voitures automatiques rendent chaque aventure encore plus agréable.
                        Que vous souhaitiez visiter la Médina, découvrir les jardins de Majorelle, ou partir à la découverte des paysages environnants,
                        nos voitures automatiques vous offrent une conduite fluide et aisée. Profitez du confort et de la facilité de conduite,
                        surtout dans la circulation urbaine.
                        Réservez dès maintenant votre location de voiture automatique à Marrakech et préparez-vous à vivre une expérience sans tracas dans cette ville marocaine envoûtante.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_automatic'] }}"
                        title="{{ $static_data['strings']['h1_location_automatic'] }}">
                </div>
            </div>
        @endif

    </div>


    @if( count($cars) == 1 )
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="h3 py-3">{{ $static_data['strings']['listingcar_auto'] }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="item-list">
                        <div class="price-sign">
                            @if (!empty($cars->first()->price_per_night))
                                {{ currency($cars->first()->price_per_night, 'EUR', 'EUR') }}
                            @endif
                        </div>
                        <h3 class="item-title primary-color"><a title="{{ $cars->first()->contentload->name }}" href="{{ route('car_details', [$car->id, $car->alias]) }}"
                                            class="">{{ $cars->first()->contentload->name }}</a></h3>
                        <a href="#" class="read-info"><i class="fa fa-info-circle fa-2x"></i></a>
                        <div class="item-details">
                            {{ $cars->first()->contentload->description }}
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-8">
                                <div class="car-img">
                                    @if ($cars->first()->front_image)
                                        <img class="responsive-img"
                                            src="{{ asset('images/data') . '/' . $cars->first()->front_image->image }}" />
                                    @else
                                        <img class="responsive-img" src="{{ asset('images/') . '/no_image.jpg' }}" />
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5 col-4">
                                <ul class="car-preferences">
                                    @if (!empty($cars->first()->passengers_number))
                                        <li class="ic-passengers">{{ $cars->first()->passengers_number  . " " . $static_data['strings']['places']  }}</li>
                                    @endif
                                    @if (!empty($cars->first()->doors))
                                        <li class="ic-doors">{{ $cars->first()->doors . " " . $static_data['strings']['doors'] }}</li>
                                    @endif
                                    @if (!empty($cars->first()->suitcases))
                                        <li class="ic-suitcases">{{ $cars->first()->suitcases . " " . $static_data['strings']['suitcases'] }}</li>
                                    @endif
                                    @if (!empty($cars->first()->airconditioner))
                                        <li class="ic-airconditioner">{{ $static_data['strings']['airconditioner'] }}</li>
                                    @endif
                                    @if (!empty($cars->first()->transmission))
                                        <li class="ic-transmission">
                                            {{ $static_data['strings'][$cars->first()->transmission] }}</li>
                                    @endif
                                    @if (!empty($cars->first()->carburant))
                                        <li class="ic-carburant">{{ $static_data['strings'][$cars->first()->carburant] }}
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <a href="{{ route('car_details', [$cars->first()->id, $cars->first()->alias]) }}"
                                        class="btn btn-success">{{ $static_data['strings']['more_details'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (count($cars) > 1)
        @include('home.partials.listingcar_carousel')
    @endif

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
