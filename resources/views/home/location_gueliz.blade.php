@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{ $static_data['strings']['title_location_gueliz'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_location_gueliz'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_location_gueliz'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_location_gueliz'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_location_gueliz'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
        <div class="row">
            <div class="col-md-6" style="text-align:justify;">
                <b>Explore Gueliz in complete freedom</b>
                <p>
                    Our <a href="{{ route('home') }}">car rental in Marrakech</a> service opens the doors to the dynamic Gueliz district, a modern oasis in the heart of the historic Medina.
                    Gueliz is a perfect juxtaposition of contemporary and traditional, with its trendy cafes,
                    its designer boutiques and refined restaurants. Our fleet of well-maintained vehicles allows you to explore Gueliz at your own pace,
                    while providing a convenient way to discover the treasures of this neighborhood. From the Place du 16 Novembre to the Majorelle gardens,
                    from art galleries to luxury spas, Gueliz offers you an unforgettable experience.
                </p>
                <b>The Jewels of Gueliz to Discover</b>
                <p>
                    Gueliz is full of exciting places to visit. The Place du 16 Novembre is a central point,
                    surrounded by restaurants and cafes where you can taste delicious cuisine while enjoying the lively atmosphere.
                    The Majorelle Gardens, designed by French artist Jacques Majorelle, are a haven of peace with their palette of bright blues and exotic plants.
                    Explore culture and art at the nearby Yves Saint Laurent Museum.
                    Our car rental in Gueliz gives you the freedom to discover all these treasures and much more.
                    Book today for an enriching experience in this dynamic neighborhood of Marrakech.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                    alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">

            </div>
        </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explora Gueliz con total libertad</b>
                    <p>
                        Nuestro servicio de <a href="{{ route('home') }}">alquiler de coches en Marrakech</a> le abre las puertas al dinámico distrito de Gueliz, un oasis moderno en el corazón de la histórica Medina.
                        Gueliz es una yuxtaposición perfecta entre lo contemporáneo y lo tradicional, con sus cafés de moda,
                        sus boutiques de diseño y sus refinados restaurantes. Nuestra flota de vehículos en buen estado le permite explorar Gueliz a su propio ritmo,
                        al mismo tiempo que proporciona una manera conveniente de descubrir los tesoros de este vecindario. Desde la plaza del 16 de Noviembre hasta los jardines Majorelle,
                        desde galerías de arte hasta spas de lujo, Gueliz te ofrece una experiencia inolvidable.
                    </p>
                    <b>Las Joyas de Gueliz por Descubrir</b>
                    <p>
                        Gueliz está lleno de lugares interesantes para visitar. La Place du 16 Novembre es un punto central,
                        Rodeado de restaurantes y cafeterías donde podrás degustar una deliciosa gastronomía mientras disfrutas del animado ambiente.
                        Los Jardines Majorelle, diseñados por el artista francés Jacques Majorelle, son un remanso de paz con su paleta de azules brillantes y plantas exóticas.
                        Explore la cultura y el arte en el cercano Museo Yves Saint Laurent.
                        Nuestro alquiler de coches en Gueliz te da la libertad de descubrir todos estos tesoros y mucho más.
                        Reserve hoy para vivir una experiencia enriquecedora en este dinámico barrio de Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">

                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Esplora Gueliz in completa libertà</b>
                    <p>
                        Il nostro servizio di <a href="{{ route('home') }}">noleggio auto a Marrakech</a> apre le porte al dinamico quartiere Gueliz, un'oasi moderna nel cuore della storica Medina.
                        Gueliz è una perfetta giustapposizione tra contemporaneo e tradizionale, con i suoi caffè alla moda,
                        le sue boutique di stilisti e ristoranti raffinati. La nostra flotta di veicoli ben mantenuti ti consente di esplorare Gueliz al tuo ritmo,
                        fornendo allo stesso tempo un modo conveniente per scoprire i tesori di questo quartiere. Dalla Place du 16 Novembre ai giardini Majorelle,
                        dalle gallerie d'arte alle spa di lusso, Gueliz ti offre un'esperienza indimenticabile.
                    </p>
                    <b>I gioielli di Gueliz da scoprire</b>
                    <p>
                        Gueliz è piena di luoghi interessanti da visitare. La Place du 16 Novembre è un punto centrale,
                        circondato da ristoranti e caffè dove potrete gustare una cucina deliziosa godendovi l'atmosfera vivace.
                        I Giardini Majorelle, progettati dall'artista francese Jacques Majorelle, sono un'oasi di pace con la loro tavolozza di blu brillanti e piante esotiche.
                        Esplora la cultura e l'arte nel vicino Museo Yves Saint Laurent.
                        Il nostro noleggio auto a Gueliz ti dà la libertà di scoprire tutti questi tesori e molto altro ancora.
                        Prenota oggi per un'esperienza arricchente in questo dinamico quartiere di Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">

                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Odkryj Gueliz w Pełnej Swobodzie</b>
                    <p>
                        Nasza usługa <a href="{{ route('home') }}">wynajmu samochodów w Marrakeszu</a> otwiera przed Tobą drzwi do dynamicznego dzielnicy Gueliz, nowoczesnej oazy pośrodku historycznej Medyny. Gueliz to doskonałe połączenie współczesności z tradycją, z modnymi kawiarniami, sklepami projektantów i wyszukanymi restauracjami. Nasza flota dobrze utrzymanych pojazdów pozwoli Ci odkrywać Gueliz w swoim tempie, zapewniając jednocześnie wygodny sposób na odkrywanie skarbów tej dzielnicy. Od placu 16 listopada po ogrody Majorelle, przez galerie sztuki i luksusowe spa, Gueliz zapewni Ci niezapomniane przeżycia.
                    </p>
                    <b>Klejnoty do Odkrycia w Gueliz</b>
                    <p>
                        Gueliz obfituje w pasjonujące miejsca do odwiedzenia. Plac 16 listopada to centralny punkt, otoczony restauracjami i kawiarniami, gdzie możesz skosztować wyśmienitej kuchni, delektując się tętniącą atmosferą. Ogrody Majorelle, zaprojektowane przez francuskiego artystę Jacques'a Majorelle'a, to oaza spokoju z ich paletą żywych niebieskich barw i egzotycznymi roślinami. Odkryj kulturę i sztukę w pobliskim muzeum Yves'a Saint Laurenta. Nasz wynajem samochodów w Gueliz daje Ci swobodę odkrywania wszystkich tych skarbów i nie tylko. Zarezerwuj już dziś, by przeżyć wzbogacającą przygodę w tej dynamicznej dzielnicy Marrakeszu.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">
                        
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Verken Gueliz in alle vrijheid</b>
                    <p>
                        Onze <a href="{{ route('home') }}">autoverhuurservice in Marrakech</a> opent de deuren naar de levendige wijk Gueliz, een moderne oase in het hart van de historische medina. Gueliz is een perfecte mix van hedendaags en traditioneel, met trendy cafés, designerwinkels en verfijnde restaurants. Onze goed onderhouden vloot van voertuigen stelt u in staat om Gueliz op uw eigen tempo te verkennen, terwijl het een handige manier biedt om de schatten van deze wijk te ontdekken. Van het Place du 16 Novembre tot de Majorelle-tuinen, langs kunstgalerijen en luxe spa's, biedt Gueliz u een onvergetelijke ervaring.
                    </p>
                    <b>De juwelen van Gueliz om te ontdekken</b>
                    <p>
                        Gueliz zit vol spannende plekken om te bezoeken. Het Place du 16 Novembre is een centraal punt, omringd door restaurants en cafés waar u kunt genieten van heerlijk eten terwijl u geniet van de levendige sfeer. De Majorelle-tuinen, ontworpen door de Franse kunstenaar Jacques Majorelle, zijn een oase van rust met hun levendige blauwe tinten en exotische planten. Verken de cultuur en kunst in het Yves Saint Laurent Museum, gelegen in de buurt. Onze autoverhuur in Gueliz biedt u de vrijheid om al deze schatten en nog veel meer te ontdekken. Boek vandaag nog voor een verrijkende ervaring in deze levendige wijk van Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">
                        
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explore Gueliz com total liberdade</b>
                    <p>
                        Nosso <a href="{{ route('home') }}">serviço de aluguel de carros em Marrakech</a> abre as portas para o vibrante bairro de Gueliz, um oásis moderno no coração da histórica medina. Gueliz é uma mistura perfeita de contemporâneo e tradicional, com cafés modernos, lojas de designer e restaurantes refinados. Nossa frota bem mantida de veículos permite que você explore Gueliz no seu próprio ritmo, oferecendo uma maneira conveniente de descobrir os tesouros deste bairro. Desde a Place du 16 Novembre até os Jardins Majorelle, passando por galerias de arte e spas de luxo, Gueliz oferece uma experiência inesquecível.
                    </p>
                    <b>Os tesouros de Gueliz para descobrir</b>
                    <p>
                        Gueliz está repleta de lugares emocionantes para visitar. A Place du 16 Novembre é um ponto central, cercado por restaurantes e cafés onde você pode saborear uma deliciosa refeição enquanto desfruta da atmosfera vibrante. Os Jardins Majorelle, projetados pelo artista francês Jacques Majorelle, são um oásis de tranquilidade com seus tons azuis vibrantes e plantas exóticas. Explore a cultura e a arte no Museu Yves Saint Laurent, localizado nas proximidades. Nosso serviço de aluguel de carros em Gueliz oferece a liberdade para descobrir todos esses tesouros e muito mais. Reserve hoje mesmo para uma experiência enriquecedora neste vibrante bairro de Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <b>Explorez Gueliz en Toute Liberté</b>
                    <p>
                        Notre service de <a href="{{ route('home') }}">location de voiture à Marrakech</a> vous ouvre les portes du quartier dynamique de Gueliz, une oasis moderne au cœur de la Médina historique. 
                        Gueliz est une juxtaposition parfaite du contemporain et de la tradition, avec ses cafés branchés, 
                        ses boutiques de créateurs et ses restaurants raffinés. Notre flotte de véhicules bien entretenus vous permet d'explorer Gueliz à votre rythme, 
                        tout en offrant un moyen pratique de découvrir les trésors de ce quartier. De la place du 16 novembre aux jardins de Majorelle, 
                        en passant par les galeries d'art et les spas de luxe, Gueliz vous offre une expérience inoubliable.
                    </p>
                    <b>Les Joyaux de Gueliz à Découvrir</b>
                    <p>
                        Gueliz regorge de lieux passionnants à visiter. La place du 16 novembre est un point central, 
                        entourée de restaurants et de cafés où vous pourrez déguster une cuisine délicieuse tout en profitant de l'atmosphère animée. 
                        Les jardins de Majorelle, conçus par l'artiste français Jacques Majorelle, sont un havre de paix avec leur palette de bleus vifs et de plantes exotiques. 
                        Explorez la culture et l'art au musée Yves Saint Laurent, situé à proximité. 
                        Notre location de voiture à Gueliz vous offre la liberté de découvrir tous ces trésors et bien plus encore. 
                        Réservez dès aujourd'hui pour une expérience enrichissante dans ce quartier dynamique de Marrakech.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/home/locations/location-voiture-gueliz.avif') }}" style="width: 100%;"
                        alt="{{ $static_data['strings']['h1_location_gueliz'] }}" title="{{ $static_data['strings']['h1_location_gueliz'] }}">
                        
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
