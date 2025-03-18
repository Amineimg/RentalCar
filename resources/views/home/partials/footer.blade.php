<div class="container-fluid footer-container">
    <div class="container">

        <div class="row">


            <div class="col-sm-3 footer-widgets">

                <h2 class="widget-title">{{ $static_data['strings']['contact'] }}</h2>

                <ul class="footer-menu">

                    @if (
                        $static_data['site_settings']['location_address'] ||
                            $static_data['site_settings']['location_city'] ||
                            $static_data['site_settings']['location_country']
                    )
                        <li><a href="https://goo.gl/maps/h47gh9ywYxDsBHNeA" target="_blank"><i class="fa fa-fw fa-home"></i>
                                {{ $static_data['strings']['address'] . ' : ' . $static_data['strings']['location_address'] }}</a>
                        </li>
                    @endif


                    @if ($static_data['site_settings']['contact_tel2'])
                        <li><a href="tel:{{ str_replace(' ', '', $static_data['site_settings']['contact_tel2']) }}"><i
                                    class="fa fa-fw fa-mobile-phone"></i>
                                @if ($static_data['site_settings']['contact_name2'])
                                    {{ $static_data['site_settings']['contact_name2'] }} :
                                @endif {{ $static_data['site_settings']['contact_tel2'] }}
                            </a></li>
                    @endif

                    @if ($static_data['site_settings']['contact_tel3'])
                        <li><a href="tel:{{ str_replace(' ', '', $static_data['site_settings']['contact_tel3']) }}"><i
                                    class="fa fa-fw fa-mobile-phone"></i>
                                @if ($static_data['site_settings']['contact_name3'])
                                    {{ $static_data['site_settings']['contact_name3'] }} :
                                @endif {{ $static_data['site_settings']['contact_tel3'] }}
                            </a></li>
                    @endif

                    @if ($static_data['site_settings']['contact_fax'])
                        <li><a href="tel:{{ $static_data['site_settings']['contact_fax'] }}"><i
                                    class="fa fa-fw fa-fax"></i>{{ $static_data['site_settings']['contact_fax'] }}</a>
                        </li>
                    @endif

                    @if ($static_data['site_settings']['contact_email'])
                        <li><a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i
                                    class="fa fa-fw fa-envelope"></i>{{ $static_data['site_settings']['contact_email'] }}</a>
                        </li>
                    @endif

                    @if ($static_data['site_settings']['contact_web'])
                        <li><a href="{{ $static_data['site_settings']['contact_web'] }}"><i
                                    class="fa fa-fw fa-globe"></i>
                                {{ str_replace(['http:', 'https:', '/'], '', $static_data['site_settings']['contact_web']) }}</a>
                        </li>
                    @endif

                </ul>

            </div>

            <div class="col-sm-3 footer-widgets">

                @if (Session::get('language') == 'en')
                    <h2 class="widget-title">Our tags</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Car rental agency in Marrakech</a></li>
                        <li><a href="{{route('parc_auto')}}">Car rental Marrakech</a></li>
                        <li><a href="{{ route('cheap-car-hire-marrakech') }}">Cheap car rental Marrakech</a></li>
                        <li><a href="{{ route('4-x-4-hire-marrakech') }}">4x4 rental Marrakech</a></li>
                        <li><a href="{{ route('car-rental-marrakech-airport') }}">Car rental Marrakech airport</a></li>
                        <li><a href="{{ route('car-rental-marrakech-without-deposit') }}">Car rental Marrakech without deposit</a></li>
                        <li><a href="{{ route('location-voiture-automatique-marrakech_en') }}">Automatic car rental Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_en') }}">Manual car rental Marrakech</a></li>
                        <li><a href="{{ route('cheap-car-hire-marrakech') }}">Cheap car rental in Marrakech</a></li>
                        <li><a target="_blank" href="https://www.rentalmotomarrakech.com/motorcycle-rental-marrakech">Motorcycle rental in Marrakech</a></li>
                        <li><a target="_blank" href="https://www.location-scooter-marrakech.com/rental/scooter-rental-marrakech">Scooter rental in Marrakech</a></li>
                        <li><a target="_blank" href="https://mlbrentacar.com/car-rental-marrakech-cars">Rent car in Marrakech</a></li>
                        <li><a target="_blank" href="https://myprivatevillamarrakech.com/en/location-villa-marrakech">Luxury villa for rent in Marrakech</a></li>
                        <li><a target="_blank" href="https://seocom.qa/">Qatar web agency</a></li>
                        <li><a target="_blank" href="https://seocom.qa/services/web-design/">Qatar webdesign</a></li>
                        <li><a target="_blank" href="https://www.agencekna.com/en">Real estate agency Marrakech</a></li> 
                    </ul>
                @elseif(Session::get('language') == 'es')
                    <h2 class="widget-title">Nuestras etiquetas</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Agencia de alquiler de coches en Marrakech</a></li>
                        <li><a href="{{ route('parc_auto_es') }}">Alquiler de coches Marrakech</a></li>
                        <li><a target="_blank" href="https://desirecars.ma/es/alquiler-coches-marrakech-barato">Alquiler de coches barato en Marrakech</a></li>
                        <li><a href="{{ route('alquiler-4-x-4-marrakech') }}">Alquiler de 4x4 en Marrakech</a></li>
                        <li><a href="{{ route('alquiler-coche-marrakech-aeropuerto') }}">Alquiler de coches en el aeropuerto de Marrakech</a></li>
                        <li><a href="{{ route('alquiler-coche-marrakech-sin-deposito') }}">Alquiler de coches en Marrakech sin depósito</a></li>
                        <li><a href="{{ route('location-voiture-automatique-marrakech_es') }}">Alquiler de coches automáticos en Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_es') }}">Alquiler de coches manuales en Marrakech</a></li>
                        <li><a target="_blank" href="https://www.location-scooter-marrakech.com/es/alquiler-coches-marrakech">Alquiler de scooters en Marrakech</a></li>
                    </ul>
                @elseif(Session::get('language') == 'it')
                    <h2 class="widget-title">Taggaci</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Noleggio auto Marrakech</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_it') }}">Noleggio auto Marrakech economico</a></li>
                        <li><a href="{{ route('car-rental-in-marrakech-it') }}">Noleggio auto a Marrakech</a></li>
                        <li><a href="{{ route('location-4-x-4-marrakech_it') }}">Noleggio 4x4 Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-aeroport_it') }}">Autonoleggio aeroporto di Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-sans-caution_it') }}">Noleggio auto a Marrakech senza deposito</a></li>
                        <li><a href="{{ route('parc_auto_it') }}">Autonoleggio Marrakech manuale automatico</a></li>
                        <li><a href="{{ route('location-voiture-automatique-marrakech_it') }}">Noleggio auto automatica Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_it') }}">Noleggio auto manuale Marrakech</a></li>
                        <li><a href="{{ route('parc_auto_it') }}">Noleggio scooter Marrakech</a></li>
                    </ul>
                @elseif(Session::get('language') == 'pl')
                    <h2 class="widget-title">Nasze tagi</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Wypożyczalnia samochodów w Marrakeszu</a></li>
                        <li><a href="{{route('parc_auto_pl')}}">Wynajem samochodów Marrakesz</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_pl') }}">Wynajem samochodów w Marrakeszu tanio</a></li>
                        <li><a href="{{ route('location-4-x-4-marrakech_pl') }}">Wynajem 4x4 Marrakesz</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-aeroport_pl') }}">Wynajem samochodów na lotnisku w Marrakeszu</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-sans-caution_pl') }}">Wynajem samochodów Marrakesz bez kaucji</a></li>
                        <li><a href="{{ route('parc_auto_pl') }}">Marrakeszu - manualne i automatyczne</a></li>
                        <li><a href="{{ route('car_details', ['id' => $car->id, 'car_name' => $car->alias] ) }}">Wynajem samochodów automatycznych Marrakesz</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_pl') }}">Wynajem samochodów manualnych Marrakesz</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_pl') }}">Tani wynajem samochodów</a></li>
                    </ul>
                @elseif(Session::get('language') == 'nl')
                    <h2 class="widget-title">Onze tags</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Autoverhuurbedrijf in Marrakech</a></li>
                        <li><a href="{{ route('parc_auto_nl') }}">Autoverhuur Marrakech</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_nl') }}">Goedkope autoverhuur Marrakech</a></li>
                        <li><a href="{{ route('location-4-x-4-marrakech_nl') }}">4x4 autoverhuur Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-aeroport_nl') }}">Autoverhuur op de luchthaven Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-sans-caution_nl') }}">Autoverhuur Marrakech zonder borg</a></li>
                        <li><a href="{{ route('parc_auto_nl') }}">Autoverhuur Marrakech handmatig en automatisch</a></li>
                        <li><a href="{{ route('car_details', ['id' => $car->id, 'car_name' => $car->alias] ) }}">Automatische autoverhuur in Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_nl') }}">Handmatige autoverhuur in Marrakech</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_nl') }}">Goedkope autoverhuur</a></li>
                    </ul>
                @elseif(Session::get('language') == 'pt')
                    <h2 class="widget-title">Nossas tags</h2>

                    <ul class="footer-menu">
                        <li><a href="{{ route('home') }}">Aluguel de Carros Marrakech</a></li>
                        <li><a href="{{ route('generalconditions_pt') }}">Aluguel de carros em Marrakech</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher_pt') }}">Aluguel de carros baratos em Marrakech</a></li>
                        <li><a href="{{ route('location-4-x-4-marrakech_pt') }}">Aluguel de 4x4 em Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-aeroport_pt') }}">Aluguel de carro no aeroporto de Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-sans-caution_pt') }}">Aluguel de carro em Marrakech sem depósito</a></li>
                        <li><a href="{{ route('generalconditions_pt') }}">Aluguel de carro em Marrakech - manual e automático</a></li>
                        <li><a href="{{ route('car_details', ['id' => $car->id, 'car_name' => $car->alias] ) }}">Aluguel de carro automático em Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech_pt') }}">Aluguel de carro manual em Marrakech</a></li>
                    </ul>

                @else
                    <h2 class="widget-title">Nos tags</h2>

                    <ul class="footer-menu">
                        <li><a href="/">Agence de location de voitures à Marrakech</a></li>
                        <li><a href="{{route('location-de-voiture-a-marrakech')}}">Location de voiture à Marrakech</a></li>
                        <li><a href="{{ route('location-de-voiture-marrakech-pas-cher') }}">Location de voiture Marrakech pas cher</a>
                        </li>
                        <li><a href="{{ route('location-4-x-4-marrakech') }}">Location 4x4 Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-aeroport') }}">Location voiture marrakech aéroport</a></li>
                        <li><a href="{{ route('location-voiture-marrakech-sans-caution') }}">Location voiture marrakech sans caution</a></li>
                        <li><a href="{{ route('location-voiture-automatique-marrakech') }}">Location voiture automatique Marrakech</a></li>
                        <li><a target="_blank" href="https://jacarandacar.fr/location-voiture-marrakech">location voiture Marrakech</a></li>
                        <li><a href="{{ route('location-voiture-manuelle-marrakech') }}">Location voiture manuelle Marrakech</a></li>
                        
                        <li><a target="_blank" href="https://www.location-scooter-marrakech.com/">Location scooter Marrakech</a></li>
                        <li><a target="_blank" href="https://myprivatevillamarrakech.com/">Location villa Marrakech</a></li>
                        <li><a target="_blank" href="https://www.agencekna.com/luxe/vente-villa-marrakech">Vente villa Marrakech</a></li>
                       
                    </ul>
                @endif



            </div>

            <div class="col-sm-3 footer-widgets">

                @if (Session::get('language') == 'en')
                    <h2 class="widget-title">Links</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @elseif (Session::get('language') == 'es')
                    <h2 class="widget-title">Vínculos</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto_es') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @elseif (Session::get('language') == 'it')
                    <h2 class="widget-title">Link</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto_it') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions_it') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact_it') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @elseif (Session::get('language') == 'pl')
                    <h2 class="widget-title">Połączenia</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto_pl') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions_pl') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq_pl') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact_pl') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @elseif (Session::get('language') == 'nl')
                    <h2 class="widget-title">Links</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto_nl') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions_nl') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq_nl') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact_nl') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @elseif (Session::get('language') == 'pt')
                    <h2 class="widget-title">Links</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto_pt') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions_pt') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq_pt') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact_pt') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @else
                    <h2 class="widget-title">Liens utiles</h2>
                    <ul class="footer-menu">
                        <li class=""><a href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class=""><a
                                href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class=""><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class=""><a href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class=""><a href="{{ route('blog') }}">Blog</a></li>
                        <li class=""><a href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a>
                        </li>
                    </ul>
                @endif

            </div>

            <div class="col-sm-3 footer-widgets">


                @if (Session::get('language') == 'en')
                    <h2 class="widget-title">Destinations</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_en') }}">Agadir Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_en') }}">Casablanca Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_en') }}">Rabat Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_en') }}">Tangier Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_en') }}">Mohammedia Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_en') }}">Essaouira Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_en') }}">Fes Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_en') }}">Gueliz Car rental</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_en') }}">Medina Car rental</a></li>
                        <li><a href="https://myprivatevillamarrakech.com/en" title="Marrakech villa rental" target="_blank">Marrakech villa rental</a></li>
                    </ul>
                @elseif(Session::get('language') == 'es')
                    <h2 class="widget-title">Destinos</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_es') }}">Alquiler de coches Agadir</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_es') }}">Alquiler de coches Casablanca</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_es') }}">Alquiler de coches Rabat</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_es') }}">Alquiler de coches Tánger</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_es') }}">Alquiler de coches Mohammedia</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_es') }}">Alquiler de coches Essaouira</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_es') }}">Alquiler de coches Fès</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_es') }}">Alquiler de coches Gueliz</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_es') }}">Alquiler de coches Medina</a></li>
                    </ul>
                @elseif(Session::get('language') == 'it')
                    <h2 class="widget-title">Destinazioni</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_it') }}">Autonoleggio Agadir</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_it') }}">Autonoleggio Casablanca</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_it') }}">Autonoleggio Rabat</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_it') }}">Autonoleggio Tanger</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_it') }}">Autonoleggio Mohammedia</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_it') }}">Autonoleggio Essaouira</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_it') }}">Autonoleggio Fez</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_it') }}">Autonoleggio Gueliz</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_it') }}">Autonoleggio Medina</a></li>

                    </ul>
                @elseif(Session::get('language') == 'pl')
                    <h2 class="widget-title">Destynacje</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_pl') }}">Wynajem samochodów Agadir</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_pl') }}">Wynajem samochodów Casablanca</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_pl') }}">Wynajem samochodów Rabat</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_pl') }}">Wynajem samochodów Tanger</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_pl') }}">Wynajem samochodów Mohammedia</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_pl') }}">Wynajem samochodów Essaouirze</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_pl') }}">Wynajem samochodów Fez</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_pl') }}">Wynajem samochodów Gueliz</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_pl') }}">Wynajem samochodów Medina</a></li>
                    </ul>
                @elseif(Session::get('language') == 'nl')
                    <h2 class="widget-title">Bestemmingen</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_nl') }}">Agadir autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_nl') }}">Casablanca autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_nl') }}">Rabat autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_nl') }}">Tanger autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_nl') }}">Mohammedia autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_nl') }}">Essaouira autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_nl') }}">Fez autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_nl') }}">Gueliz autoverhuur</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_nl') }}">Medina autoverhuur</a></li>
                    </ul>
                @elseif(Session::get('language') == 'pt')
                    <h2 class="widget-title">Destinos</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir_pt') }}">Aluguel de carros em Agadir</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca_pt') }}">Aluguel de carros em Casablanca</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat_pt') }}">Aluguel de carros em Rabat</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger_pt') }}">Aluguel de carros em Tanger</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia_pt') }}">Aluguel de carros em Mohammedia</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira_pt') }}">Aluguel de carros em Essaouira</a></li>
                        <li><a href="{{ route('location-de-voiture-fes_pt') }}">Aluguel de carros em Fez</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz_pt') }}">Aluguel de carros em Gueliz</a></li>
                        <li><a href="{{ route('location-de-voiture-medina_pt') }}">Aluguel de carros em Medina</a></li>
                    </ul>

                @else
                    <h2 class="widget-title">Destinations</h2>
                    <ul class="footer-menu">
                        <li><a href="{{ route('location-de-voiture-agadir') }}">Location de voiture Agadir</a></li>
                        <li><a href="{{ route('location-de-voiture-casablanca') }}">Location de voiture Casablanca</a></li>
                        <li><a href="{{ route('location-de-voiture-rabat') }}">Location de voiture Rabat</a></li>
                        <li><a href="{{ route('location-de-voiture-tanger') }}">Location de voiture Tanger</a></li>
                        <li><a href="{{ route('location-de-voiture-mohammedia') }}">Location de voiture Mohammedia</a></li>
                        <li><a href="{{ route('location-de-voiture-essaouira') }}">Location de voiture Essaouira</a></li>
                        <li><a href="{{ route('location-de-voiture-fes') }}">Location de voiture Fès</a></li>
                        <li><a href="{{ route('location-de-voiture-gueliz') }}">Location de voiture Gueliz</a></li>
                        <li><a href="{{ route('location-de-voiture-medina') }}">Location de voiture Medina</a></li>
                        <li><a href="https://myprivatevillamarrakech.com/" title="Location villa Marrakech" target="_blank">Location villa Marrakech</a></li>
                    </ul>
                @endif



            </div>


            @if (\Route::current()->getName() == 'generalconditions' && Session::get('language') == 'en')
                <div class="col-sm-4  footer-widgets">

                    <h2 class="widget-title">Useful links</h2>

                    <ul class="footer-menu">
                        <li><a href="https://www.kna.ma/en" target="_blank">Luxury real estate Marrakech</a></li>
                    </ul>

                </div>
            @endif



            @if ($static_data['design_settings']['footer_social'])

                <div class="col-md-12 col-sm-12 footer-social footer-widgets">

                    <ul class="social-icons">

                        @if ($static_data['site_settings']['social_facebook'])
                            <li><a href="{{ $static_data['site_settings']['social_facebook'] }}" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_twitter'])
                            <li><a href="{{ $static_data['site_settings']['social_twitter'] }}" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_youtube'])
                            <li><a href="{{ $static_data['site_settings']['social_youtube'] }}" target="_blank"><i
                                        class="fa fa-youtube"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_instagram'])
                            <li><a href="{{ $static_data['site_settings']['social_instagram'] }}" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_google_plus'])
                            <li><a href="{{ $static_data['site_settings']['social_google_plus'] }}"
                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_pinterest'])
                            <li><a href="{{ $static_data['site_settings']['social_pinterest'] }}" target="_blank"><i
                                        class="fa fa-pinterest"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_linkedin'])
                            <li><a href="{{ $static_data['site_settings']['social_linkedin'] }}" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                        @endif

                        @if ($static_data['site_settings']['social_tripadvisor'])
                            <li><a href="{{ $static_data['site_settings']['social_tripadvisor'] }}"
                                    target="_blank"><i class="fa fa-tripadvisor"></i></a></li>
                        @endif

                    </ul>
                    <br>
                    <!-- TrustBox script -->
                    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                    <!-- End TrustBox script -->
                    
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6773d9653a025c23cd02c870" data-style-height="52px" data-style-width="100%">
                      <a href="https://www.trustpilot.com/review/jacarandacar.com" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
                
                

            @endif
            <div class="tr-widget" data-id="5360" data-view="flash" data-lang=""><a href="https://trust.reviews/" class="trcr" target="_blank"></a></div><script type="text/javascript" src="{{ asset('assets/js/embed.min.js') }}" defer></script>

        </div>

    </div>

    <div class="row copyright-row">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 copyright">

                    <p>{{ $static_data['strings']['copyright'] . date('Y') . ' ' . $static_data['strings']['rights_reserved'] . $static_data['strings']['bottom_bar'] }}
                    </p>

                </div>

                <div class="col-sm-6 powered-by">

                    <p> {{-- {!! $static_data['strings']['powered_by'] !!} --}}</p>
                    <div class="apps col-md-4 pull-right">
                        <span class="copyright-text">
                            Powered By: <a class="cscolor customize-unpreviewable" href="https://seocom.ma/"
                                target="_blank" title="Agencia de diseño web Marrakech"><img
                                    src="{{ asset('images/agence-web-maroc.png') }}"
                                    alt="agence de communication à Casablanca"></a>
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
    <!--tripad-->
    <!--<script defer async src='https://cdn.trustindex.io/loader.js?427cae523f0289292b667697263'></script>-->
    <!--google-->
    <!--<script defer async src='https://cdn.trustindex.io/loader.js?2c0562b2348d89747626294bcfa'></script>-->
    
    <!--widget tripadvisor-->
    <!--<div class="widget_rs tripadvisor_widget">-->
    <!--    <a target="_blank" href="https://www.tripadvisor.com/UserReviewEdit-g293734-d15554504-Jacaranda_Car-Marrakech_Marrakech_Safi.html">-->
    <!--        <div class="widget_rs_logo">-->
    <!--            <img src="{{ asset('images/home/images/icons/Tripadvisor-Logo.webp') }}" />-->
    <!--        </div>-->
    <!--        <div class="widget_rs_stars">-->
    <!--            <span>5</span>-->
    <!--            <i class="fa-solid fa-star"></i>-->
    <!--        </div>-->
    <!--        <div class="widget_rs_text">-->
    <!--            <span>18 reviews</span>-->
    <!--        </div>-->
    <!--    </a>-->
    <!--</div>-->
    
    <!--widget facebook-->
    <!--<div class="widget_rs facebook_widget">-->
    <!--    <a target="_blank" href="https://www.facebook.com/jacarandacars/">-->
    <!--        <div class="widget_rs_logo">-->
    <!--            <img src="{{ asset('images/home/images/icons/facebook-logo.webp') }}" />-->
    <!--        </div>-->
    <!--        <div class="widget_rs_stars">-->
    <!--            <span>5</span>-->
    <!--            <i class="fa-solid fa-star"></i>-->
    <!--        </div>-->
    <!--        <div class="widget_rs_text">-->
    <!--            <span>526 followers</span>-->
    <!--        </div>-->
    <!--    </a>-->
    <!--</div>-->
    
    <!--widget google-->
    <!--<div class="widget_rs google_widget">-->
    <!--    <a target="_blank" href="https://www.google.com/maps/place/Jacaranda+car/@31.6393131,-7.9980759,15z/data=!4m6!3m5!1s0xdafefee6c6c6357:0xbbc7136983036de4!8m2!3d31.6393131!4d-7.9980759!16s%2Fg%2F11rhf9vpjp?entry=ttu">-->
    <!--        <div class="widget_rs_logo">-->
    <!--            <img src="{{ asset('images/home/images/icons/google-logo.webp') }}" />-->
    <!--        </div>-->
    <!--        <div class="widget_rs_stars">-->
    <!--            <span>5</span>-->
    <!--            <i class="fa-solid fa-star"></i>-->
    <!--        </div>-->
    <!--        <div class="widget_rs_text">-->
    <!--            <span>348 reviews</span>-->
    <!--        </div>-->
    <!--    </a>-->
    <!--</div>-->

</div>



<ul class="floating-buttons">

    @if ($static_data['site_settings']['contact_tel1'])
        <li><a href="tel:{{ $static_data['site_settings']['contact_tel1'] }}"><span class="fa-stack fa-lg">

                    <i class="fa fa-circle fa-stack-2x"></i>

                    <i class="fa fa-phone fa-stack-1x fa-inverse">1</i>

                </span></a></li>

        <li><a href="tel:{{ $static_data['site_settings']['contact_tel3'] }}"><span class="fa-stack fa-lg">

                    <i class="fa fa-circle fa-stack-2x"></i>

                    <i class="fa fa-phone fa-stack-1x fa-inverse">2</i>

                </span></a></li>

        <li><a href="https://wa.me/{{ $static_data['site_settings']['contact_tel1'] }}" target="_blank"><span
                    class="fa-stack fa-lg">

                    <i class="fa fa-circle fa-stack-2x" style="color: #00E676;"></i>

                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>

                </span></a></li>
    @endif

    <li><a href="{{ route('contact') }}"><span class="fa-stack fa-lg">

                <i class="fa fa-circle fa-stack-2x" style="color: #0af;"></i>

                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>

            </span></a></li>

</ul>

@include('cookie-consent')

<script defer async src="https://www.google.com/recaptcha/api.js?render=6LcrYnsiAAAAANVyKD48XhRPbPGcDF5COPzWxLg1"></script>
{{--<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcrYnsiAAAAANVyKD48XhRPbPGcDF5COPzWxLg1', {
                action: 'submit'
            }).then(function(token) {
                // Add your logic to submit to your backend server here.
            });
        });
    }
</script>--}}
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }

        if (typeof x[slideIndex - 1] != 'undefined') {
            x[slideIndex - 1].style.display = "block";
        }

        if (typeof dots[slideIndex - 1] != 'undefined') {
            dots[slideIndex - 1].className += " w3-white";
        }
    }
</script>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }

        if (typeof x[myIndex - 1] != 'undefined') {
            x[myIndex - 1].style.display = "block";
        }
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWPRDJ3C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

