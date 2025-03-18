@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_manual'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_manual'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_manual'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_manual'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_location_manual'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Traditional Driving in Marrakech</b>
                    <p>
                        For lovers of traditional driving, we offer a variety of manual cars in Marrakech. Whether you are looking for a compact vehicle to navigate the narrow streets of the Medina or a more spacious model for your getaways in the region, our manual cars offer an authentic driving experience. Discover Marrakech at your own pace, changing gears manually for a more interactive feel of the road. Our fleet of manual cars is well maintained and ready to accompany you on your adventures in Marrakech.
                    </p>
                    <b>The Art of Driving in Marrakech</b>
                    <p>
                        Manual driving in Marrakech provides a unique experience. Whether you want to visit the bustling souks, explore the botanical gardens, or explore the surrounding desert, our manual cars give you complete control of your trip. Enjoy the pleasure of changing gears while exploring the treasures of Marrakech. Book your manual car rental in Marrakech now and get ready to experience an authentic adventure in this captivating Moroccan city.
                    </p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Conducción tradicional en Marrakech</b>
                    <p>
                        Para los amantes de la conducción tradicional, ofrecemos una variedad de coches manuales en Marrakech. Tanto si buscas un vehículo compacto para recorrer las estrechas calles de la Medina como un modelo más espacioso para tus escapadas a la región, nuestros coches manuales ofrecen una auténtica experiencia de conducción. Descubra Marrakech a su propio ritmo, cambiando de marcha manualmente para tener una sensación más interactiva de la carretera. Nuestra flota de coches manuales está bien mantenida y lista para acompañarle en sus aventuras en Marrakech.
                    </p>
                    <b>El arte de conducir en Marrakech</b>
                    <p>
                        La conducción manual en Marrakech proporciona una experiencia única. Ya sea que desee visitar los bulliciosos zocos, explorar los jardines botánicos o explorar el desierto circundante, nuestros autos manuales le brindan control total de su viaje. Disfrute del placer de cambiar de marcha mientras explora los tesoros de Marrakech. Reserva ahora tu alquiler de coche manual en Marrakech y prepárate para vivir una auténtica aventura en esta cautivadora ciudad marroquí.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Guida tradizionale a Marrakech</b>
                    <p>
                        Per gli amanti della guida tradizionale, offriamo una varietà di auto manuali a Marrakech. Che tu stia cercando un veicolo compatto per percorrere le strette strade della Medina o un modello più spazioso per le tue fughe nella regione, le nostre auto con cambio manuale offrono un'autentica esperienza di guida. Scopri Marrakech al tuo ritmo, cambiando marcia manualmente per una sensazione più interattiva della strada. La nostra flotta di auto manuali è ben mantenuta e pronta ad accompagnarti nelle tue avventure a Marrakech.
                    </p>
                    <b>L'arte di guidare a Marrakech</b>
                    <p>
                        La guida manuale a Marrakech offre un'esperienza unica. Sia che tu voglia visitare i vivaci suk, esplorare i giardini botanici o esplorare il deserto circostante, le nostre auto manuali ti danno il controllo completo del tuo viaggio. Goditi il ​​piacere di cambiare marcia mentre esplori i tesori di Marrakech. Prenota subito il tuo noleggio auto manuale a Marrakech e preparati a vivere un'autentica avventura in questa affascinante città marocchina.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Tradycyjna jazda w Marrakeszu</b>
                    <p>
                       Dla miłośników tradycyjnej jazdy oferujemy różnorodne samochody manualne w Marrakeszu. Czy szukasz kompaktowego pojazdu, aby poruszać się po wąskich uliczkach Medyny, czy też bardziej przestronnego modelu na wyprawy po okolicy, nasze samochody manualne zapewniają autentyczne doświadczenie jazdy. Poznaj Marrakesz we własnym tempie, zmieniając biegi ręcznie, by jeszcze bardziej aktywnie odczuwać trasę. Nasza flota samochodów manualnych jest starannie utrzymana i gotowa towarzyszyć Ci w przygodach w Marrakeszu.
                    </p>
                    <b>Sztuka jazdy w Marrakeszu</b>
                    <p>
                       Manualna jazda w Marrakeszu pozwala na wyjątkowe doświadczenie. Czy chcesz odwiedzić tętniące życiem bazary, odkryć ogrody botaniczne czy wybrać się na wyprawę po okoliczną pustynię, nasze samochody manualne dają Ci pełną kontrolę nad Twoją podróżą. Ciesz się przyjemnością zmiany biegów podczas odkrywania skarbów Marrakeszu. Zarezerwuj już teraz swój samochód manualny w Marrakeszu i przygotuj się na autentyczną przygodę w tej fascynującej marokańskiej miejscowości.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Traditioneel Rijden in Marrakech</b>
                    <p>
                        Voor liefhebbers van traditioneel rijden bieden wij een verscheidenheid aan handgeschakelde auto's in Marrakech aan. Of u nu op zoek bent naar een compact voertuig om door de smalle steegjes van de medina te manoeuvreren of een ruimer model voor uw uitstapjes in de regio, onze handgeschakelde auto's bieden een authentieke rijervaring. Ontdek Marrakech op uw eigen tempo door handmatig te schakelen voor een meer interactieve rijervaring. Onze vloot van handgeschakelde auto's is goed onderhouden en klaar om u te vergezellen op uw avonturen in Marrakech.
                    </p>
                    <b>De Kunst van het Rijden in Marrakech</b>
                    <p>
                        Het rijden met een handgeschakelde auto in Marrakech zorgt voor een unieke ervaring. Of u nu de levendige soeks wilt bezoeken, de botanische tuinen wilt verkennen of de omliggende woestijn wilt ontdekken, onze handgeschakelde auto's geven u volledige controle over uw reis. Geniet van het plezier van handmatig schakelen terwijl u de schatten van Marrakech verkent. Reserveer nu uw handgeschakelde autoverhuur in Marrakech en maak u klaar voor een authentiek avontuur in deze betoverende Marokkaanse stad.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Dirigindo Tradicionalmente em Marrakech</b>
                    <p>
                        Para os amantes da condução tradicional, oferecemos uma variedade de carros com câmbio manual em Marrakech. Se você está procurando um veículo compacto para manobrar pelas ruas estreitas da medina ou um modelo mais espaçoso para suas excursões pela região, nossos carros com câmbio manual proporcionam uma experiência de condução autêntica. Descubra Marrakech no seu próprio ritmo trocando manualmente para uma experiência de condução mais interativa. Nossa frota de carros com câmbio manual é bem mantida e está pronta para acompanhá-lo em suas aventuras em Marrakech.
                    </p>
                    <b>A Arte de Dirigir em Marrakech</b>
                    <p>
                        Dirigir um carro com câmbio manual em Marrakech proporciona uma experiência única. Se você deseja visitar os vibrantes souks, explorar os jardins botânicos ou descobrir o deserto ao redor, nossos carros com câmbio manual oferecem total controle sobre sua viagem. Aproveite o prazer de trocar manualmente enquanto explora as maravilhas de Marrakech. Reserve agora o seu aluguel de carro com câmbio manual em Marrakech e prepare-se para uma aventura autêntica nesta encantadora cidade marroquina.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Une Conduite Traditionnelle à Marrakech</b>
                    <p>
                        Pour les amateurs de conduite traditionnelle, nous proposons une variété de voitures manuelles à Marrakech. Que vous recherchiez un véhicule compact pour naviguer dans les ruelles étroites de la Médina ou un modèle plus spacieux pour vos escapades dans la région, nos voitures manuelles offrent une expérience de conduite authentique. Découvrez Marrakech à votre rythme, en changeant de vitesse manuellement pour une sensation plus interactive de la route. Notre flotte de voitures manuelles est bien entretenue et prête à vous accompagner dans vos aventures à Marrakech.
                    </p>
                    <b>L'Art de Conduire à Marrakech</b>
                    <p>
                        La conduite manuelle à Marrakech permet de vivre une expérience unique. Que vous souhaitiez visiter les souks animés, explorer les jardins botaniques, ou partir à la découverte du désert environnant, nos voitures manuelles vous donnent le contrôle complet de votre voyage. Profitez du plaisir de changer de vitesse tout en explorant les trésors de Marrakech. Réservez dès maintenant votre location de voiture manuelle à Marrakech et préparez-vous à vivre une aventure authentique dans cette ville marocaine captivante.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-manuelle-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_location_manual'] }}" width="100%"
                        title="{{ $static_data['strings']['h1_location_manual'] }}">
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
