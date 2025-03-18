@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{ $static_data['strings']['title_location_marrakech'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_location_marrakech'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_location_marrakech'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_location_marrakech'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_location_marrakech'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
        <div class="row">
            <div class="col-md-6" style="text-align:justify;">
                <p>
                    For your stay in Morocco, only one address: Jacaranda Car - car rental Marrakech, specialized in car rental,
                    4x4 in Marrakech. We pride ourselves on providing you with a hassle-free car rental experience,
                    whether you are a knowledgeable traveler or an adventurer looking for new discoveries. Our vast fleet of rental vehicles,
                    constantly maintained and revised, guarantees reliability and safety on the road.
                    In addition, our very competitive rates allow you to make the most of your trip without exceeding your budget.
                </p>
                <p>
                    At Jacaranda Car, we understand that flexibility is essential when traveling.
                    That's why we offer a variety of rental options,
                    whether for a short jaunt through the bustling streets of Marrakech or a more extensive adventure across the country.
                    Our vehicles are equipped to suit all types of travel, whether you want to explore historic cities,
                    venture into the Atlas Mountains, or explore the vast deserts of Morocco.
                    Let us be the trusted partner for your car rental in Marrakech and discover Morocco in complete freedom.
                    Book today for an unforgettable experience.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/assets/images/home/locations/car-rental-marrakech.png') }}" style="width: 100%;"
                    alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
            </div>
        </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Para su estancia en Marruecos, sólo una dirección: Jacaranda Car - alquiler de coches Marrakech, especializada en alquiler de coches,
                        4x4 en Marrakech. Nos enorgullecemos de brindarle una experiencia de alquiler de automóviles sin complicaciones.
                        ya seas un viajero experto o un aventurero en busca de nuevos descubrimientos. Nuestra amplia flota de vehículos de alquiler,
                        constantemente mantenido y revisado, garantiza confiabilidad y seguridad en la carretera.
                        Además, nuestras tarifas muy competitivas te permiten aprovechar al máximo tu viaje sin exceder tu presupuesto.
                    </p>
                    <p>
                        En Jacaranda Car entendemos que la flexibilidad es fundamental a la hora de viajar.
                        Es por eso que ofrecemos una variedad de opciones de alquiler,
                        ya sea para un breve paseo por las bulliciosas calles de Marrakech o para una aventura más extensa por todo el país.
                        Nuestros vehículos están equipados para adaptarse a todo tipo de viajes, ya sea que desee explorar ciudades históricas,
                        aventúrese en las montañas del Atlas o explore los vastos desiertos de Marruecos.
                        Seamos su socio de confianza para su alquiler de coches en Marrakech y descubra Marruecos con total libertad.
                        Reserva hoy para vivir una experiencia inolvidable.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/car-rental-marrakech.png') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Per il tuo soggiorno in Marocco, un solo indirizzo: Jacaranda Car - autonoleggio Marrakech, specializzato nel noleggio auto,
                        4x4 a Marrakesh. Siamo orgogliosi di offrirti un'esperienza di noleggio auto senza problemi,
                        che tu sia un viaggiatore esperto o un avventuriero alla ricerca di nuove scoperte. La nostra vasta flotta di veicoli a noleggio,
                        costantemente manutenuta e revisionata, garantisce affidabilità e sicurezza su strada.
                        Inoltre, le nostre tariffe molto competitive ti consentono di sfruttare al meglio il tuo viaggio senza superare il tuo budget.
                    </p>
                    <p>
                        Noi di Jacaranda Car comprendiamo che la flessibilità è essenziale quando si viaggia.
                        Ecco perché offriamo una varietà di opzioni di noleggio,
                        sia per una breve gita attraverso le affollate strade di Marrakech o per un'avventura più estesa in tutto il paese.
                        I nostri veicoli sono attrezzati per adattarsi a tutti i tipi di viaggio, sia che tu voglia esplorare città storiche,
                        avventurati nelle montagne dell'Atlante o esplora i vasti deserti del Marocco.
                        Lasciaci essere il partner di fiducia per il tuo noleggio auto a Marrakech e scopri il Marocco in completa libertà.
                        Prenota oggi per un'esperienza indimenticabile.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/car-rental-marrakech.png') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Podczas pobytu w Maroku, tylko jeden adres: Jacaranda Car - wynajem samochodów w Marrakeszu, specjalizujący się w wynajmie samochodów,
                        terenówek w Marrakeszu. Jesteśmy dumni z zapewnienia Ci bezproblemowego doświadczenia wynajmu samochodu,
                        czy jesteś doświadczonym podróżnikiem czy poszukiwaczem nowych odkryć. Nasza ogromna flota pojazdów do wynajęcia,
                        ciągle utrzymywana i sprawdzana, gwarantuje niezawodność i bezpieczeństwo na drodze.
                        Ponadto nasze bardzo konkurencyjne ceny pozwalają Ci maksymalnie wykorzystać swoją podróż, nie przekraczając przy tym budżetu.
                    </p>
                    <p>
                        W Jacaranda Car rozumiemy, że elastyczność jest kluczowa podczas podróży.
                        Dlatego oferujemy różnorodne opcje wynajmu,
                        czy to na krótki wypad po zatłoczonych ulicach Marrakeszu czy na bardziej rozległą przygodę po całym kraju.
                        Nasze pojazdy są wyposażone, aby pasować do wszystkich rodzajów podróży, czy chcesz zwiedzać historyczne miasta,
                        wyruszyć w Góry Atlasowe czy odkryć rozległe pustynie Maroka.
                        Pozwól nam być zaufanym partnerem w wynajmie samochodów w Marrakeszu i odkryj Maroko w całkowitej swobodzie.
                        Zarezerwuj już dziś, by przeżyć niezapomniane doświadczenie.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-a-marrakech.webp') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Voor uw verblijf in Marokko is er maar één adres: Jacaranda Car - autoverhuur Marrakech, gespecialiseerd in autoverhuur, 4x4 in Marrakech. We zijn er trots op u een zorgeloze autoverhuurervaring te bieden, of u nu een ervaren reiziger bent of een avonturier op zoek naar nieuwe ontdekkingen. Onze uitgebreide vloot van huurvoertuigen, voortdurend onderhouden en gecontroleerd, garandeert u betrouwbaarheid en veiligheid op de weg. Bovendien stellen onze zeer concurrerende tarieven u in staat om optimaal te genieten van uw reis zonder uw budget te overschrijden.</p>
                    <p>Bij Jacaranda Car begrijpen we dat flexibiliteit essentieel is tijdens uw reizen. Daarom bieden we een verscheidenheid aan verhuuropties, of het nu gaat om een korte uitstap door de drukke straten van Marrakech of om een uitgebreid avontuur door het land. Onze voertuigen zijn uitgerust om aan alle soorten reizen te voldoen, of u nu de historische steden wilt verkennen, de bergen van de Atlas wilt verkennen of de uitgestrekte woestijnen van Marokko wilt ontdekken. Laat ons uw betrouwbare partner zijn voor autoverhuur in Marrakech en ontdek Marokko in alle vrijheid. Boek vandaag nog voor een onvergetelijke ervaring.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-a-marrakech.webp') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Para a sua estadia em Marrocos, há apenas um endereço: Jacaranda Car - aluguel de carros em Marrakech, especializado em aluguel de carros e 4x4 em Marrakech. Temos orgulho em oferecer-lhe uma experiência de aluguel de carros sem preocupações, seja você um viajante experiente ou um aventureiro em busca de novas descobertas. Nossa ampla frota de veículos de aluguel, continuamente mantidos e verificados, garante confiabilidade e segurança na estrada. Além disso, nossas tarifas altamente competitivas permitem que você aproveite ao máximo sua viagem sem ultrapassar seu orçamento.</p>
                    <p>Na Jacaranda Car, entendemos que a flexibilidade é essencial durante suas viagens. Por isso, oferecemos uma variedade de opções de aluguel, seja para uma curta viagem pelas movimentadas ruas de Marrakech ou para uma aventura prolongada pelo país. Nossos veículos estão equipados para atender a todos os tipos de viagens, seja para explorar as cidades históricas, as montanhas do Atlas ou os vastos desertos de Marrocos. Deixe-nos ser seu parceiro confiável para aluguel de carros em Marrakech e descubra Marrocos com total liberdade. Reserve hoje mesmo para uma experiência inesquecível.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-a-marrakech.webp') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Pour votre séjour au Maroc, une seule adresse: Jacaranda Car - location voiture Marrakech, spécialisée dans la location de voitures, 
                        4x4 à Marrakech. Nous sommes fiers de vous offrir une expérience de location de voiture sans tracas, 
                        que vous soyez un voyageur averti ou un aventurier en quête de nouvelles découvertes. Notre vaste flotte de véhicules de location, 
                        constamment entretenue et révisée, vous garantit fiabilité et sécurité sur la route. 
                        De plus, nos tarifs très compétitifs vous permettent de profiter au maximum de votre voyage sans dépasser votre budget.
                    </p>
                    <p>
                        Chez Jacaranda Car, nous comprenons que la flexibilité est essentielle lors de vos déplacements. 
                        C'est pourquoi nous offrons une variété d'options de location, 
                        que ce soit pour une courte escapade à travers les rues animées de Marrakech ou pour une aventure plus étendue à travers le pays. 
                        Nos véhicules sont équipés pour répondre à tous les types de voyage, que vous souhaitiez explorer les villes historiques, 
                        vous aventurer dans les montagnes de l'Atlas, ou partir à la découverte des vastes déserts du Maroc. 
                        Laissez-nous être le partenaire de confiance pour votre location de voiture à Marrakech et découvrez le Maroc en toute liberté. 
                        Réservez dès aujourd'hui pour une expérience inoubliable.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-a-marrakech.webp') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_marrakech'] }}" title="{{ $static_data['strings']['h1_location_marrakech'] }}">
                </div>
            </div>
        @endif
    </div>
<?php //dd($cars); ?>
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
