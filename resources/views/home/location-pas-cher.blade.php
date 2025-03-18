@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_cher'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_cher'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_cher'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_cher'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_cher'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Need a cheap car rental Marrakech? Our Marrakech car rental agency offers car rental at Marrakech
                        airport, vehicle rental, Economy, SUV in Marrakech, and with a fleet of over 20 cars well
                        maintained, reliable vehicles. We're confident we've got the vehicle and the daily rate that's right
                        for you. We offer immediate online confirmation so that you can rent Marrakech vehicles and confirm
                        your Marrakech car rental any hour of the day, 7 days a week!
                    </p>
                    <p>
                        Rent a car in Marrakech and benefit from low prices, professional service and a large listing of
                        new, comfortable cars. And since our car rental stations located in and around the world are exactly
                        what you need - in city centers, airports and train stations you will be on the road in no time, for
                        business trips or for pleasure……</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Necesitas un coche de alquiler barato en Marrakech? Nuestra agencia de alquiler de coches en
                        Marrakech ofrece alquiler de coches en el aeropuerto de Marrakech, alquiler de vehículos, Económico,
                        SUV en Marrakech, y con una flota de más de 20 vehículos fiables y en buen estado. Estamos
                        seguros de que tenemos el vehículo y la tarifa diaria adecuada para usted. ¡Ofrecemos confirmación
                        instantánea en línea para que pueda alquilar vehículos en Marrakech y confirmar su alquiler de
                        automóviles en Marrakech en cualquier momento del día, los 7 días de la semana!
                    </p>
                    <p>
                        Alquile un coche en Marrakech y disfrute de precios bajos, un servicio profesional y una gran lista
                        de coches nuevos y cómodos. Y dado que nuestras estaciones de alquiler de vehículos ubicadas en y
                        alrededor del mundo corresponden exactamente a sus necesidades, en los centros de las ciudades,
                        aeropuertos y estaciones de tren, estará en la carretera en poco tiempo, para viajes de negocios o
                        por placer…
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Hai bisogno di un noleggio auto economico a Marrakech? La nostra agenzia di noleggio auto a
                        Marrakech offre noleggio auto all'aeroporto di Marrakech, noleggio di veicoli, Economy, SUV a
                        Marrakech e con una flotta di oltre 20 veicoli affidabili e ben tenuti. Siamo certi di avere il
                        veicolo e la tariffa giornaliera giusta per te. Offriamo una conferma online immediata in modo che
                        tu possa noleggiare veicoli a Marrakech e confermare il tuo noleggio auto a Marrakech in qualsiasi
                        momento della giornata, 7 giorni alla settimana!
                    </p>
                    <p>
                        Noleggia un'auto a Marrakech e goditi prezzi bassi, un servizio professionale e un ottimo elenco di
                        auto nuove e confortevoli. E poiché le nostre stazioni di autonoleggio situate nel mondo e in tutto
                        il mondo corrispondono esattamente alle tue esigenze - nei centri città, negli aeroporti e nelle
                        stazioni ferroviarie sarai in viaggio in pochissimo tempo, per viaggi di lavoro o per piacere...
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Potrzebujesz taniego wynajmu samochodu w Marrakeszu? Nasze biuro wynajmu samochodów w Marrakeszu oferuje wynajem samochodów na lotnisku w Marrakeszu, wynajem samochodów, samochody ekonomiczne, SUV-y, terenówki w Marrakeszu, dysponując flotą ponad 20 dobrze utrzymanych samochodów, niezawodowych pojazdów. Jesteśmy przekonani, że mamy dla Ciebie odpowiedni pojazd i codzienną stawkę. Oferujemy natychmiastowe potwierdzenie online, dzięki czemu możesz wynająć samochód w Marrakeszu i potwierdzić rezerwację samochodu w Marrakeszu o każdej porze dnia, 7 dni w tygodniu!
                    </p>
                    <p>
                        Wynajmij samochód w Marrakeszu i skorzystaj z niskich cen, profesjonalnej obsługi oraz szerokiej gamy nowych, komfortowych samochodów. Ponieważ nasze punkty wynajmu samochodów zlokalizowane są dokładnie tam, gdzie ich potrzebujesz - w centrach miast, na lotniskach i dworcach kolejowych, będziesz gotowy do drogi w krótkim czasie, zarówno w podróży służbowej, jak i rekreacyjnej...
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Op zoek naar een goedkope autoverhuur in Marrakech? Ons autoverhuurbedrijf in Marrakech biedt autoverhuur op de luchthaven van Marrakech, autoverhuur, Economy, SUV in Marrakech, en met een vloot van meer dan 20 goed onderhouden auto's, betrouwbare voertuigen. We zijn ervan overtuigd dat we het voertuig en het dagtarief hebben dat goed voor u is. We bieden onmiddellijke online bevestiging, zodat u op elk moment van de dag, 7 dagen per week een auto kunt huren en uw autoverhuur in Marrakech kunt bevestigen!</p>
                    <p>Huur een auto in Marrakech en profiteer van lage prijzen, professionele service en een uitgebreide lijst met nieuwe comfortabele auto's. En omdat onze autoverhuurlocaties over de hele wereld precies aan uw behoeften voldoen - in stadscentra, luchthavens en treinstations bent u binnen de kortste keren onderweg, voor zakenreizen of plezier...</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Procurando por um aluguel de carro barato em Marrakech? Nossa empresa de aluguel de carros em Marrakech oferece aluguel de carros no aeroporto de Marrakech, aluguel de carros, Economy, SUV em Marrakech, e com uma frota de mais de 20 carros bem mantidos, veículos confiáveis. Estamos confiantes de que temos o veículo e a tarifa diária que são bons para você. Oferecemos confirmação online imediata, para que você possa alugar um carro e confirmar seu aluguel de carro em Marrakech a qualquer hora do dia, 7 dias por semana!</p>
                    <p>Alugue um carro em Marrakech e aproveite preços baixos, serviço profissional e uma extensa lista de carros novos e confortáveis. E como nossas locações de aluguel de carros em todo o mundo atendem exatamente às suas necessidades - em centros urbanos, aeroportos e estações de trem, você estará a caminho rapidamente, seja para viagens de negócios ou lazer...</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Besoin d'une location de voiture pas cher Marrakech ? Notre agence de location de voiture Marrakech
                        offre de location de voitures à l'aéroport Marrakech, la location de véhicules, Economique, SUV à Marrakech, et avec une flotte de plus de 20 voitures bien entretenus, des véhicules fiables. Nous
                        sommes convaincus que nous avons le véhicule et le taux quotidien qui est bon pour vous. Nous
                        offrons confirmation immédiate, en ligne afin que vous puissiez louer véhicules marrakech et
                        confirmer votre location voiture Marrakech toute heure du jour, 7 jours par semaine!
                    </p>
                    <p>
                        Louez une voiture à Marrakech et profitez de bas prix, d’un service professionnel et d’un grand
                        listage de nouveaux voitures confortables. Et puisque nos stations de location de voitures situées
                        dans et autour du monde correspondent exactement à vos besoins – dans les centres-villes, les
                        aéroports et les gares vous prendrez la route en un rien de temps, pour des voyages d’affaires ou
                        pour le plaisir……
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-a-marrakech-pas-cher.webp') }}"
                        alt="{{ $static_data['strings']['h1_cher'] }}" title="{{ $static_data['strings']['h1_cher'] }}">
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
