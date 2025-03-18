@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_man_auto'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_man_auto'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_man_auto'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_man_auto'] }}" />
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
                <div class="h1 car_details_header">{{ $static_data['strings']['h1_man_auto'] }}</div>

            </div>
        </div>
        <br><br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Jacarandacar car rental agency based in Marrakech. We offer a wide choice of rental car models.
                        Automatic car, family car, city car or sedan, you will find all the car models that match your
                        search. For a simple stay in Marrakech or for an excursion around Marrakech, we suggest you rent the
                        car or the 4 × 4 that suits you to fully enjoy your stay.</p>
                    <p>whether you are looking for a manual or automatic car Jacarandarcar provides you with the car of your
                        needs at no additional cost.</p>
                    <p>Our services cover car rental in Marrakech and all of Morocco, car rental has never been so easy as
                        with us, whether you are at Marrakech airport or Hotel for example or any city in Morocco, we
                        deliver your car to you with or without a driver, as soon as possible and in the best condition.</p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_man_auto'] }}"
                        title="{{ $static_data['strings']['h1_man_auto'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Agencia de alquiler de coches Jacarandacar con sede en Marrakech. Ofrecemos una amplia variedad de
                        modelos de coches de alquiler. Coche automático, coche familiar, coche urbano o sedán, encontrarás
                        todos los modelos de coche que corresponden a tu búsqueda. Para una estancia sencilla en Marrakech o
                        para una excursión por Marrakech, te sugerimos alquilar el coche o 4×4 que más te convenga para
                        disfrutar al máximo de tu estancia.</p>
                    <p>si buscas un coche manual o automático Jacarandacar te ofrece el coche de tus necesidades, sin coste
                        adicional.</p>
                    <p>Nuestros servicios cubren el alquiler de coches en Marrakech y todo Marruecos, el alquiler de coches
                        nunca ha sido tan fácil como con nosotros, ya sea que esté en el aeropuerto de Marrakech u Hotel por
                        ejemplo o en cualquier ciudad de Marruecos, le entregamos su coche con o sin conductor, tan pronto
                        como sea posible. posible y en las mejores condiciones.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_man_auto'] }}"
                        title="{{ $static_data['strings']['h1_man_auto'] }}">
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Agenzia di autonoleggio Jacarandacar con sede a Marrakech. Offriamo una vasta scelta di modelli di
                        auto a noleggio. Auto automatica, familiare, city car o berlina, troverai tutti i modelli di auto
                        che corrispondono alla tua ricerca. Per un semplice soggiorno a Marrakech o per un'escursione nei
                        dintorni di Marrakech, ti suggeriamo di noleggiare l'auto o il 4×4 che fa per te per goderti appieno
                        il tuo soggiorno.</p>
                    <p>se stai cercando un'auto manuale o automatica Jacarandarcar ti offre l'auto delle tue esigenze, senza
                        costi aggiuntivi.</p>
                    <p>I nostri servizi coprono il noleggio auto a Marrakech e in tutto il Marocco, il noleggio auto non è
                        mai stato così facile come con noi, che tu sia all'aeroporto o all'hotel di Marrakech, ad esempio o
                        in qualsiasi città del Marocco, consegniamo la tua auto con o senza conducente, non appena possibile
                        e nelle migliori condizioni.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/assets/images/location-voiture-manuelle-autoatique-marrakech.jpg') }}"
                        alt="{{ $static_data['strings']['h1_man_auto'] }}"
                        title="{{ $static_data['strings']['h1_man_auto'] }}">
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
                        alt="{{ $static_data['strings']['h1_man_auto'] }}"
                        title="{{ $static_data['strings']['h1_man_auto'] }}">
                </div>
            </div>
        @endif

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="h3 py-3" style="text-align: center">{{ $static_data['strings']['listingcar'] }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme center">
                @foreach ($cars as $car)
                    <div class="item">
                        <div class="col-md-12">
                            <div class="item-list">
                                <div class="price-sign">
                                    @if (!empty($car->price_per_night))
                                        {{ currency($car->price_per_night, 'EUR', 'EUR') }}
                                    @endif
                                </div>
                                <h3 class="item-title primary-color">{{ $car->contentload->name }}</h3>
                                <a href="#" class="read-info"><i class="fa fa-info-circle fa-2x"></i></a>
                                <div class="item-details">
                                    {{ $car->contentload->description }}
                                </div>
                                <div class="row">
                                    <div class="col-md-7 col-8">
                                        <div class="car-img">
                                            @if ($car->front_image)
                                                <img class="responsive-img"
                                                    src="{{ asset('images/data') . '/' . $car->front_image->image }}" />
                                            @else
                                                <img class="responsive-img" src="{{ asset('images/') . '/no_image.jpg' }}" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-4">
                                        <ul class="car-preferences">
                                            @if (!empty($car->passengers))
                                                <li class="ic-passengers">{{ $car->passengers_number }}</li>
                                            @endif
                                            @if (!empty($car->doors))
                                                <li class="ic-doors">{{ $car->doors }}</li>
                                            @endif
                                            @if (!empty($car->suitcases))
                                                <li class="ic-suitcases">{{ $car->suitcases }}</li>
                                            @endif
                                            @if (!empty($car->airconditioner))
                                                <li class="ic-airconditioner">A/C</li>
                                            @endif
                                            @if (!empty($car->transmission))
                                                <li class="ic-transmission">
                                                    {{ $static_data['strings'][$car->transmission] }}</li>
                                            @endif
                                            @if (!empty($car->carburant))
                                                <li class="ic-carburant">{{ $static_data['strings'][$car->carburant] }}
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <a href="{{ route('car_details', [$car->id, $car->alias]) }}"
                                                class="btn btn-success">{{ $static_data['strings']['more_details'] }}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


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
