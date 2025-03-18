@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{ $static_data['strings']['title_location_medina'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_location_medina'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_location_medina'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_location_medina'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_location_medina'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
        <div class="row">
            <div class="col-md-6" style="text-align:justify;">
                <b>Explore the Medina of Marrakech in complete freedom</b>
                <p>
                    Our <a href="{{ route('home') }}">car rental in Marrakech</a> service offers you the opportunity to immerse yourself in the heart of the Medina,
                    the historic soul of the red city. The Medina of Marrakech is a fascinating labyrinth of alleys, bustling souks,
                    and historical monuments. Thanks to our varied fleet of well-maintained vehicles, you can personalize your exploration of the Medina,
                    by combining tradition with modernity. Among the must-sees, visit the Jemaa el-Fna square, the Bahia Palace, the Menara gardens,
                    and many other hidden treasures. Our Marrakech Medina car rental gives you the flexibility to explore this wonderful part of the city at your own pace.
                </p>
                <b>The Jewels of the Medina to Discover</b>
                <p>
                    The Medina of Marrakech is full of exciting places to explore. Stroll through the colorful souks to buy authentic souvenirs.
                    Visit the Koutoubia, the largest mosque in Marrakech, or the Bahia Palace, a masterpiece of Moroccan architecture.
                    The Menara Gardens are a great place to relax. Don't miss tasting traditional dishes at local restaurants.
                    With our car rental service in the Medina of Marrakech, you have the freedom to discover all these treasures.
                    Book now for a memorable experience in this iconic part of the city.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                    alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                    
                <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">

            </div>
        </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explora la Medina de Marrakech con total libertad</b>
                    <p>
                        Nuestro servicio de <a href="{{ route('home') }}">alquiler de coches en Marrakech</a> te ofrece la oportunidad de sumergirte en el corazón de la Medina,
                        el alma histórica de la ciudad roja. La Medina de Marrakech es un fascinante laberinto de callejuelas, bulliciosos zocos,
                        y monumentos históricos. Gracias a nuestra variada flota de vehículos en buen estado, podrás personalizar tu exploración de la Medina,
                        combinando tradición con modernidad. Entre las visitas obligadas, visite la plaza Jemaa el-Fna, el Palacio de la Bahía, los jardines de la Menara,
                        y muchos otros tesoros escondidos. Nuestro alquiler de coches en la Medina de Marrakech te ofrece la flexibilidad de explorar esta maravillosa parte de la ciudad a tu propio ritmo.
                    </p>
                    <b>Las Joyas de la Medina por Descubrir</b>
                    <p>
                        La Medina de Marrakech está llena de lugares interesantes para explorar. Pasee por los coloridos zocos para comprar auténticos recuerdos.
                        Visite la Koutoubia, la mezquita más grande de Marrakech, o el Palacio de la Bahía, una obra maestra de la arquitectura marroquí.
                        Los Jardines de Menara son un gran lugar para relajarse. No dejes de probar platos tradicionales en los restaurantes locales.
                        Con nuestro servicio de alquiler de coches en la Medina de Marrakech, tienes la libertad de descubrir todos estos tesoros.
                        Reserva ahora para vivir una experiencia memorable en esta parte icónica de la ciudad.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">

                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Esplora la Medina di Marrakech in completa libertà</b>
                    <p>
                        Il nostro servizio di <a href="{{ route('home') }}">noleggio auto a Marrakech</a> ti offre l'opportunità di immergerti nel cuore della Medina,
                        l’anima storica della città rossa. La Medina di Marrakech è un affascinante labirinto di vicoli, vivaci souk,
                        e monumenti storici. Grazie alla nostra variegata flotta di veicoli ben mantenuti, puoi personalizzare la tua esplorazione della Medina,
                        unendo la tradizione alla modernità. Tra le cose da vedere, visitare la piazza Jemaa el-Fna, il Palazzo Bahia, i giardini Menara,
                        e molti altri tesori nascosti. Il nostro noleggio auto alla Medina di Marrakech ti offre la flessibilità di esplorare questa meravigliosa parte della città al tuo ritmo.
                    </p>
                    <b>I gioielli della Medina da scoprire</b>
                    <p>
                        La Medina di Marrakech è piena di luoghi emozionanti da esplorare. Passeggia nei colorati suk per acquistare souvenir autentici.
                        Visita la Koutoubia, la più grande moschea di Marrakech, o il Palazzo Bahia, capolavoro dell'architettura marocchina.
                        I Giardini Menara sono il luogo ideale per rilassarsi. Da non perdere la degustazione dei piatti tradizionali nei ristoranti locali.
                        Con il nostro servizio di noleggio auto nella Medina di Marrakech, hai la libertà di scoprire tutti questi tesori.
                        Prenota ora per un'esperienza memorabile in questa parte iconica della città.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">

                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Wolne Zwiedzanie Medyny w Marrakeszu</b>
                    <p>
                        Nasza usługa <a href="{{ route('home') }}">wynajmu samochodów w Marrakeszu</a> daje Ci możliwość zanurzenia się w sercu Medyny, 
                        historycznej duszy czerwonego miasta. Medyna w Marrakeszu to fascynujący labirynt uliczek, tętniących bazarków i zabytków historycznych. 
                        Dzięki naszej zróżnicowanej flocie dobrze utrzymanych pojazdów, możesz dostosować swoje zwiedzanie Medyny, łącząc tradycję z nowoczesnością. 
                        Wśród niezwykłości odwiedź plac Jemaa el-Fna, Pałac Bahia, ogrody Menara i wiele innych ukrytych skarbów. 
                        Nasz wynajem samochodów w Medynie w Marrakeszu zapewnia Ci niezbędną elastyczność do zwiedzania tego wspaniałego obszaru miasta w swoim tempie.
                    </p>
                    <b>Klejnoty do Odkrycia w Medynie</b>
                    <p>
                        Medyna w Marrakeszu jest pełna ekscytujących miejsc do odkrycia. Przechadzaj się po kolorowych bazarkach, aby kupić autentyczne pamiątki. 
                        Odwiedź Koutoubię, największą meczet w Marrakeszu, lub Pałac Bahia, arcydzieło marokańskiej architektury. 
                        Ogrody Menara są doskonałym miejscem do relaksu. Nie zapomnij spróbować tradycyjnych potraw w lokalnych restauracjach. 
                        Dzięki naszej usłudze wynajmu samochodów w Medynie w Marrakeszu, masz wolność, aby odkryć wszystkie te skarby. 
                        Zarezerwuj już teraz, aby przeżyć niezapomniane doświadczenie w tym ikonicznym fragmencie miasta.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                    
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                <b>Verken de Medina van Marrakech in alle vrijheid</b>
                <p>
                    Onze <a href="{{ route('home') }}">autoverhuurservice in Marrakech</a> biedt u de mogelijkheid om het hart van de Medina te verkennen, 
                    de historische ziel van de rode stad. De Medina van Marrakech is een fascinerend doolhof van steegjes, levendige souks en historische monumenten. 
                    Dankzij onze gevarieerde vloot van goed onderhouden voertuigen kunt u uw verkenning van de Medina personaliseren, waarbij traditie en moderniteit samenkomen. 
                    Bezoek de Jemaa el-Fna, het Bahia Paleis, de tuinen van Menara en vele andere verborgen schatten. Onze autoverhuur in de Medina van Marrakech biedt u de nodige flexibiliteit om deze prachtige stad op uw eigen tempo te verkennen.
                </p>
                <b>Ontdek de Juwelen van de Medina</b>
                <p>
                    De Medina van Marrakech zit boordevol spannende plekken om te ontdekken. Dwaal door de kleurrijke souks om authentieke souvenirs te kopen. 
                    Bezoek de Koutoubia, de grootste moskee van Marrakech, of het Bahia Paleis, een meesterwerk van Marokkaanse architectuur. 
                    De tuinen van Menara zijn een geweldige plek om te ontspannen. Vergeet niet om traditionele gerechten te proeven in lokale restaurants. 
                    Met onze autoverhuurservice in de Medina van Marrakech heeft u de vrijheid om al deze schatten te ontdekken. Boek nu voor een onvergetelijke ervaring in dit iconische deel van de stad.
                </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explore a Medina de Marrakech com total liberdade</b>
                    <p>
                        O nosso <a href="{{ route('home') }}">serviço de aluguer de carros em Marrakech</a> oferece-lhe a oportunidade de explorar o coração da Medina, 
                        a alma histórica da cidade vermelha. A Medina de Marrakech é um fascinante labirinto de ruelas, souks vibrantes e monumentos históricos. 
                        Com a nossa frota diversificada de veículos bem conservados, pode personalizar a sua exploração da Medina, onde tradição e modernidade se encontram. 
                        Visite a Jemaa el-Fna, o Palácio Bahia, os Jardins de Menara e muitos outros tesouros escondidos. O nosso aluguer de carros na Medina de Marrakech oferece-lhe a flexibilidade necessária para explorar esta cidade magnífica ao seu próprio ritmo.
                    </p>
                    <b>Descubra as Joias da Medina</b>
                    <p>
                        A Medina de Marrakech está cheia de lugares emocionantes para descobrir. Passeie pelos souks coloridos para comprar souvenirs autênticos. 
                        Visite a Koutoubia, a maior mesquita de Marrakech, ou o Palácio Bahia, uma obra-prima da arquitetura marroquina. 
                        Os Jardins de Menara são um ótimo lugar para relaxar. Não se esqueça de provar pratos tradicionais em restaurantes locais. 
                        Com o nosso serviço de aluguer de carros na Medina de Marrakech, você tem a liberdade de descobrir todos esses tesouros. Reserve agora para uma experiência inesquecível nesta parte icônica da cidade.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explorez la Médina de Marrakech en Toute Liberté</b>
                    <p>
                        Notre service de <a href="{{ route('home') }}">location de voiture à Marrakech</a> vous offre la possibilité de plonger au cœur de la Médina, 
                        l'âme historique de la ville rouge. La Médina de Marrakech est un labyrinthe fascinant de ruelles, de souks animés, 
                        et de monuments historiques. Grâce à notre flotte variée de véhicules bien entretenus, vous pouvez personnaliser votre exploration de la Médina, 
                        en alliant la tradition à la modernité. Parmi les incontournables, visitez la place Jemaa el-Fna, le Palais de la Bahia, les jardins de la Menara, 
                        et bien d'autres trésors cachés. Notre location de voiture dans la Médina de Marrakech vous offre la flexibilité nécessaire pour explorer cette merveilleuse partie de la ville à votre rythme.
                    </p>
                    <b>Les Joyaux de la Médina à Découvrir</b>
                    <p>
                        La Médina de Marrakech regorge de lieux passionnants à explorer. Flânez dans les souks colorés pour acheter des souvenirs authentiques. 
                        Visitez la Koutoubia, la plus grande mosquée de Marrakech, ou le Palais de la Bahia, un chef-d'œuvre de l'architecture marocaine. 
                        Les jardins de la Menara sont un endroit idéal pour se détendre. Ne manquez pas de déguster des plats traditionnels dans les restaurants locaux. 
                        Avec notre service de location de voiture dans la Médina de Marrakech, vous avez la liberté de découvrir tous ces trésors. 
                        Réservez dès maintenant pour une expérience mémorable dans cette partie emblématique de la ville.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina1.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-medina2.jpg') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_medina'] }}" title="{{ $static_data['strings']['h1_location_medina'] }}">
                        
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
