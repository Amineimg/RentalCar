@extends('layouts.home_layout', ['static_data', $static_data])


@section('title')
    <title>{{ $static_data['strings']['title_caution'] }}</title>
    <meta name="title" content="{{ $static_data['strings']['title_caution'] }}">
    <meta name="description" content="{{ $static_data['strings']['description_caution'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['title_caution'] }}" />
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
                <h1 class="h1 car_details_header">{{ $static_data['strings']['h1_caution'] }}</h1>

            </div>
            @if (Session::get('language') == 'en')
                <div class="col-md-12 cta-hide" style="text-align:center;">
                    <a class="btn btn-success" style="text-align:center;"
                        href="https://jacarandacar.com/rental/car-rental-marrakech">See our cars</a>
                </div>
            @else
                <div class="col-md-12 cta-hide" style="text-align:center;">
                    <a class="btn btn-success" style="text-align:center;"
                        href="https://jacarandacar.com/car-rental-marrakech">Voir notre parc</a>
                </div>
            @endif
        </div>
        <br>


        @if (Session::get('language') == 'en')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>When renting a car with Jacaranda we assure you the best service in Marrakech city , beginning with
                        the best prices and deals with the many other advantages such as providing a car rental without
                        credit card , our client is free to pay in cash. </p>
                    <p>Jacaranda also gives its customers the ability to choose between renting a car without a deposit or
                        with deposit .</p>
                    <p>Jacarandacar will always work to find the best solution for your safety, convenience and comfort. You
                        can quickly and easily reserve a rental car directly on our website, or contact us by phone, and
                        within a short time the car will be delivered to your address. Renting a car with us is very easy,
                        all you will need is to pay the car rental fee, produce your driving license and provide a copy of
                        your passport. After you have signed the rental contract you can start using your car and we are
                        confident that you will be pleasantly surprised by its condition as all of our cars are maintained
                        to the highest standards.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/car-rental-no-deposit-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @elseif(Session::get('language') == 'es')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Cuando alquilas un coche con Jacaranda, te aseguramos el mejor servicio en la ciudad de Marrakech,
                        empezando por los mejores precios y las muchas otras ventajas como el alquiler de coches sin tarjeta
                        de crédito, nuestro cliente es libre de pagar en efectivo.</p>
                    <p>Jacaranda también ofrece a sus clientes la posibilidad de elegir entre alquilar un coche sin fianza o
                        con fianza.</p>
                    <p>Jacarandacar siempre se esforzará por encontrar la mejor solución para su seguridad, comodidad y
                        confort. Puede reservar un coche de alquiler de forma rápida y sencilla directamente en nuestro
                        sitio web, o ponerse en contacto con nosotros por teléfono, y en poco tiempo el coche será entregado
                        en su dirección. Alquilar un automóvil con nosotros es muy fácil, solo necesita pagar la tarifa de
                        alquiler del automóvil, mostrar su licencia de conducir y proporcionar una copia de su pasaporte.
                        Después de firmar el contrato de alquiler, puede comenzar a usar su automóvil y estamos seguros de
                        que se sorprenderá gratamente de su estado, ya que todos nuestros automóviles se mantienen con los
                        más altos estándares.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @elseif(Session::get('language') == 'it')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Quando noleggi un'auto con Jacaranda, ti assicuriamo il miglior servizio nella città di Marrakech, a
                        partire dai migliori prezzi e tanti altri vantaggi come il noleggio auto senza carta di credito, il
                        nostro cliente è libero di pagare in contanti.</p>
                    <p>Jacaranda offre inoltre ai suoi clienti la possibilità di scegliere tra il noleggio di un'auto senza
                        deposito o con deposito.</p>
                    <p>Jacarandacar cercherà sempre di trovare la soluzione migliore per la tua sicurezza, praticità e
                        comfort. Puoi prenotare un'auto a noleggio in modo rapido e semplice direttamente sul nostro sito
                        Web o contattarci telefonicamente e in breve tempo l'auto verrà consegnata al tuo indirizzo.
                        Noleggiare un'auto con noi è molto semplice, basta pagare il canone di noleggio dell'auto, mostrare
                        la patente di guida e fornire una copia del passaporto. Dopo aver firmato il contratto di noleggio
                        puoi iniziare a utilizzare la tua auto e siamo sicuri che rimarrai piacevolmente sorpreso dalle sue
                        condizioni poiché tutte le nostre auto sono mantenute secondo gli standard più elevati.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @elseif(Session::get('language') == 'pl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Kiedy wynajmujesz samochód z Jacaranda, zapewniamy Ci najlepszą obsługę w mieście Marrakesz, zaczynając od najlepszych cen i wielu innych korzyści, takich jak wynajem samochodu bez karty kredytowej, nasz klient może płacić gotówką.</p>
                    <p>Jacaranda oferuje również swoim klientom możliwość wyboru między wynajmem samochodu bez kaucji lub z kaucją.</p>
                    <p>JacarandaCar zawsze będzie starała się znaleźć najlepsze rozwiązanie dla Twojego bezpieczeństwa, wygody i komfortu. Możesz szybko i łatwo zarezerwować samochód bezpośrednio na naszej stronie internetowej lub skontaktować się z nami telefonicznie, a w krótkim czasie samochód zostanie dostarczony pod Twoje drzwi. Wynajem samochodu u nas jest bardzo prosty, wystarczy uiścić opłatę za wynajem, przedstawić prawo jazdy i dostarczyć kopię paszportu. Po podpisaniu umowy najmu możesz zacząć korzystać ze swojego samochodu, a jesteśmy przekonani, że będziesz mile zaskoczony jego stanem, ponieważ wszystkie nasze samochody są utrzymywane zgodnie z najwyższymi standardami.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @elseif(Session::get('language') == 'nl')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Bij het huren van een auto bij Jacaranda, verzekeren wij u van de beste service in de stad Marrakech, te beginnen met de beste prijzen en vele andere voordelen, zoals autoverhuur zonder creditcard; onze klant kan contant betalen.</p>
                    <p>Jacaranda biedt haar klanten ook de mogelijkheid om te kiezen tussen autoverhuur zonder borg of met borg.</p>
                    <p>Jacarandacar zal altijd proberen de beste oplossing te vinden voor uw veiligheid, gemak en comfort. U kunt snel en gemakkelijk een huurauto reserveren rechtstreeks op onze website, of ons telefonisch contacteren, en binnen korte tijd wordt de auto bij u afgeleverd. Het huren van een auto bij ons is heel eenvoudig; u hoeft alleen de huurprijs van de auto te betalen, uw rijbewijs te tonen en een kopie van uw paspoort te verstrekken. Na het ondertekenen van het huurcontract kunt u uw auto gaan gebruiken en wij zijn ervan overtuigd dat u aangenaam verrast zult zijn door de staat ervan, aangezien al onze auto's worden onderhouden volgens de hoogste normen.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @elseif(Session::get('language') == 'pt')
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Ao alugar um carro com a Jacaranda, garantimos o melhor serviço na cidade de Marrakech, começando com os melhores preços e muitos outros benefícios, como aluguel de carro sem cartão de crédito; nosso cliente pode pagar em dinheiro.</p>
                    <p>A Jacaranda também oferece aos seus clientes a opção de escolher entre aluguel de carro sem depósito ou com depósito.</p>
                    <p>A Jacarandacar sempre tentará encontrar a melhor solução para a sua segurança, conforto e comodidade. Você pode reservar um carro de aluguel de forma rápida e fácil diretamente em nosso site, ou entrar em contato conosco por telefone, e em pouco tempo o carro será entregue a você. Alugar um carro conosco é muito simples; você só precisa pagar o valor do aluguel do carro, apresentar sua carteira de motorista e fornecer uma cópia do seu passaporte. Após assinar o contrato de aluguel, você pode começar a usar seu carro, e estamos certos de que você ficará agradavelmente surpreso com o estado do veículo, uma vez que todos os nossos carros são mantidos de acordo com os mais altos padrões.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-6" style="text-align:justify;">
                    <p>Lorsque vous louez une voiture avec Jacaranda, nous vous assurons le meilleur service dans la ville
                        de Marrakech, à commencer par les meilleurs prix et les nombreux autres avantages tels que la
                        location de voiture sans carte de crédit, notre client est libre de payer en espèces.</p>
                    <p>Jacaranda offre également à ses clients la possibilité de choisir entre la location d'une voiture
                        sans caution ou avec caution.</p>
                    <p>Jacarandacar s'efforcera toujours de trouver la meilleure solution pour votre sécurité, votre
                        commodité et votre confort. Vous pouvez réserver rapidement et facilement une voiture de location
                        directement sur notre site internet, ou nous contacter par téléphone, et dans un court délai la
                        voiture sera livrée à votre adresse. Louer une voiture avec nous est très simple, il vous suffit de
                        payer les frais de location de voiture, de présenter votre permis de conduire et de fournir une
                        copie de votre passeport. Après avoir signé le contrat de location, vous pouvez commencer à utiliser
                        votre voiture et nous sommes convaincus que vous serez agréablement surpris par son état car toutes
                        nos voitures sont entretenues selon les normes les plus élevées.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="responsive" style="width:100%;"
                        src="{{ asset('/assets/images/location-voiture-sans-caution-marrakech.png') }}"
                        alt="{{ $static_data['strings']['h1_airport'] }}"
                        title="{{ $static_data['strings']['h1_airport'] }}">
                    <br>
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
