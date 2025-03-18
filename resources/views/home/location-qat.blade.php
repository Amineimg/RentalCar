@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_qat'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_qat'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_qat'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_qat'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_qat'] }}</h1>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">

                    <p>Marrakech, which offers a wide range of cars, 4x4s and cheap SUVs and puts its know-how and
                        professionalism at your disposal.

                        Our car rental agency combines the substance and the form of an authentic website on the vehicle
                        rental market at the best competitive prices in Morocco. Why Jacarandal? Because we are the only
                        ones to guarantee you the best value for money in the field of car rental in Marrakech.</p>

                    <p> A 4x4 car is your best choice for exploring Morocco and the surrounding areas of Marrakech easily
                        and comfortably, whether for trips to the Sahara or mountain hikes. Renting a 4x4 is also a good
                        choice if you are a large group of friends or on a family vacation.
                    </p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Marrakech que ofrece una amplia gama de coches, 4x4 y todoterrenos baratos y pone a tu disposición
                        su saber hacer y profesionalidad.
                    </p>
                    <p>
                        Nuestra agencia de alquiler de coches combina fondo y forma con un sitio web auténtico en el mercado
                        de alquiler de vehículos a los mejores precios competitivos en Marruecos. Por qué Jacarandal? Porque
                        somos los únicos en garantizarte la mejor relación calidad-precio en el campo del alquiler de coches
                        en Marrakech.
                    </p>
                    <p>Un coche 4x4 es tu mejor opción para descubrir Marruecos y los alrededores de Marrakech de forma
                        fácil y cómoda, ya sea para viajes al Sahara o excursiones por la montaña.
                        Alquilar un 4x4 también es una buena opción si sois un grupo grande de amigos o de vacaciones en
                        familia.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Marrakech che offre una vasta gamma di auto economiche, 4x4 e SUV e mette a tua disposizione il suo
                        know-how e la sua professionalità.
                    </p>
                    <p>
                        La nostra agenzia di autonoleggio combina sostanza e forma con un autentico sito web sul mercato del
                        noleggio di veicoli ai migliori prezzi competitivi in ​​Marocco. Perché Jacarandal? Perché siamo gli
                        unici a garantirti il ​​miglior rapporto qualità-prezzo nel campo del noleggio auto a Marrakech.
                    </p>
                    <p>Un'auto 4x4 è la scelta migliore per scoprire il Marocco e i dintorni di Marrakech in modo semplice e
                        confortevole, sia per viaggi nel Sahara che per escursioni in montagna.
                        Noleggiare un 4x4 è anche una buona scelta se sei un grande gruppo di amici o sei in vacanza con la
                        famiglia.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Marrakesz oferuje szeroką gamę tanich samochodów, terenówek i SUV-ów, udostępniając swoje doświadczenie
                        i profesjonalizm.
                    </p>
                    <p>
                        Nasza wypożyczalnia samochodów łączy treść i formę autentycznej strony internetowej na rynku wypożyczania pojazdów
                        w konkurencyjnych cenach w Maroku. Dlaczego Jacarandal? Ponieważ jesteśmy jedynymi, którzy gwarantują najlepszy
                        stosunek jakości do ceny w dziedzinie wynajmu samochodów w Marrakeszu.
                    </p>
                    <p>
                        Terenówka jest najlepszym wyborem do zwiedzania Maroka i okolic Marrakeszu z łatwością i wygodą, czy to podczas
                        podróży na Saharę, czy też w góry. Wynajem terenówki to również dobry wybór, jeśli jesteś dużą grupą przyjaciół
                        lub spędzasz wakacje z rodziną.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Marrakech biedt u een ruime keuze aan goedkope auto's, 4x4 en SUV's en zet haar expertise en professionaliteit tot uw beschikking.</p>
                    <p>Ons autoverhuurbedrijf combineert de inhoud en vorm van een authentieke website op de markt voor autoverhuur tegen de beste concurrerende prijzen in Marokko. Waarom Jacaranda? Omdat wij de enigen zijn die u de beste prijs-kwaliteitverhouding kunnen garanderen op het gebied van autoverhuur in Marrakech.</p>
                    <p>Een 4x4 auto is uw beste keuze om Marokko en de omgeving van Marrakech gemakkelijk en comfortabel te verkennen, of het nu gaat om reizen naar de Sahara of wandelingen in de bergen. Het huren van een 4x4 is ook een goede optie als u met een grote groep vrienden bent of op vakantie bent met uw familie.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Marrakech oferece uma ampla escolha de carros baratos, 4x4 e SUVs e coloca sua expertise e profissionalismo à sua disposição.</p>
                    <p>A nossa empresa de aluguer de carros combina o conteúdo e a forma de um site autêntico no mercado de aluguer de carros com os melhores preços competitivos em Marrocos. Por que Jacaranda? Porque somos os únicos que podem garantir o melhor custo-benefício no aluguer de carros em Marrakech.</p>
                    <p>Um carro 4x4 é a sua melhor escolha para explorar Marrocos e a área ao redor de Marrakech de forma fácil e confortável, seja para viagens ao deserto do Saara ou caminhadas nas montanhas. Alugar um 4x4 também é uma boa opção se você estiver com um grande grupo de amigos ou de férias com a sua família.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>
                        Marrakech qui vous propose une large gamme de voitures, 4x4 et SUV pas cher et met son savoir-faire
                        et son professionnalisme à votre disposition.
                    </p>
                    <p>
                        Notre agence de location voiture accouple le fond et la forme d'un authentique site internet sur le
                        marché de la location de véhicule au meilleurs prix compétitifs au Maroc. Pourquoi Jacarandal? Parce
                        que nous sommes les seuls à vous garantir le meilleur rapport qualité prix dans le domaine de la
                        location de voitures sur Marrakech .
                    </p>
                    <p>Une voiture 4x4 est votre meilleur choix pour découvrir le Maroc et les environs de Marrakech
                        facilement et confortablement, que ce soit pour des voyages au Sahara ou des randonnées en montagne.
                        Louer un 4x4 est également un bon choix si vous êtes un grand groupe d'amis ou en vacances en
                        famille.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-hire-4x4-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_qat'] }}" title="{{ $static_data['strings']['h1_qat'] }}">
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
