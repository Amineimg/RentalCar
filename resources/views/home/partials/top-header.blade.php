<?php $lang_prefix = Session::has('language') && Session::get('language') == 'en' ? '/rental' : ''; ?>

<div class="">
    <div id="top">

        <div class="row" style="background: #7c78d8;padding: 5px;">
            <div class="col-md-9 topbar-left">
                <span class="top-text">
                    @if ($static_data['site_settings']['contact_tel2'])<a
                            href="tel:{{ str_replace(' ', '', $static_data['site_settings']['contact_tel2']) }}"><i
                                class="fa fa-fw fa-mobile-phone"></i>
                            @if ($static_data['site_settings']['contact_name2'])
                                {{ $static_data['site_settings']['contact_name2'] }} :
                            @endif {{ $static_data['site_settings']['contact_tel2'] }}
                        </a> | @endif
                    @if ($static_data['site_settings']['contact_tel3'])<a
                            href="tel:{{ str_replace(' ', '', $static_data['site_settings']['contact_tel3']) }}"><i
                                class="fa fa-fw fa-mobile-phone"></i>
                            @if ($static_data['site_settings']['contact_name3'])
                                {{ $static_data['site_settings']['contact_name3'] }} :
                            @endif {{ $static_data['site_settings']['contact_tel3'] }}
                        </a> | @endif
                    @if ($static_data['site_settings']['contact_email'])
                        <a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i
                                class="fa fa-fw fa-envelope"></i>
                            {{ $static_data['site_settings']['contact_email'] }}</a>
                    @endif
                </span>
                <span class="top-text-mob">
                    @if ($static_data['site_settings']['contact_email'])
                        <a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i
                                class="fa fa-fw fa-envelope"></i>
                            {{ $static_data['site_settings']['contact_email'] }}</a>
                    @endif
                </span>
            </div>
            <div class="col-md-3 topbar-right">
                <ul class="top-social">
                    @if ($static_data['design_settings']['show_social_top_bar'])
                        @if ($static_data['site_settings']['social_facebook'])
                            <li><a aria-label="{{ $static_data['strings']['icon_fb_title'] }}" href="{{ $static_data['site_settings']['social_facebook'] }}" target="_blank"><i
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
                            <li><a aria-label="{{ $static_data['strings']['icon_insta_title'] }}" href="{{ $static_data['site_settings']['social_instagram'] }}" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                        @endif
                        @if ($static_data['site_settings']['social_google_plus'])
                            <li><a href="{{ $static_data['site_settings']['social_google_plus'] }}" target="_blank"><i
                                        class="fa fa-google-plus"></i></a></li>
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
                            <li><a aria-label="{{ $static_data['strings']['icon_tripad_title'] }}" href="{{ $static_data['site_settings']['social_tripadvisor'] }}" target="_blank"><i
                                        class="fa fa-tripadvisor"></i></a></li>
                        @endif
                    @endif
                </ul>
                {{-- <ul class="top-menu">
                    <li class="dropdown">
                        <a href="http://jacarandacar.com" class="dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-language"></i>&nbsp;&nbsp;
                            <img src="{{ asset('assets/images/flags/en.png') }}" alt="location voiture marrakech" class="img-responsive" width="16" height="11"> English
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language-dropdown">
                            <a class="dropdown-item" href="http://jacarandacar .com" target="_blank"> <img src="{{ asset('assets/images/flags/de.png') }}" alt="location voiture marrakech" class="img-responsive" width="16" height="11"> Deutsch</a>
                            <a class="dropdown-item" href="http://jacarandacar marrakech.com" target="_blank"> <img src="{{ asset('assets/images/flags/us.png') }}" class="img-responsive" alt="location voiture marrakech" width="16" height="11"> Français</a>
                            <a class="dropdown-item" href="http://jacarandacar.com" target="_blank"> <img src="{{ asset('assets/images/flags/fr.png') }}" alt="Location voiture Marrakech" class="img-responsive" width="16" height="11"> Français</a>
                            <a class="dropdown-item" href="http://rentalcarsmarrakech.com" target="_blank"> <img src="{{ asset('assets/images/flags/it.png') }}" alt="Location voiture  Marrakech" class="img-responsive" width="16" height="11"> Italian</a>
                            <a class="dropdown-item" href="http://jacarandacar s.com" target="_blank"> <img src="{{ asset('assets/images/flags/es.png') }}" class="img-responsive" alt="Location voiture Marrakech" width="16" height="11"> Spanish</a>
                        </div>
                    </li>
                </ul> --}}
                {{--
                @if (count($static_data['languages']) > 1)
                <ul class="top-menu" style="margin-left: 20px;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language"></i>
                        @if (Session::has('language'))
                        @foreach ($static_data['languages'] as $language)
                            @if (Session::get('language'))
                                @if (strpos(Session::get('language'), $language->code) !== false)
                                    {{$language->language}}
                                @endif
                            @endif
                        @endforeach
                        @else
                            {{$default_language->language}}
                        @endif
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language-dropdown">
                            @foreach ($static_data['languages'] as $language)
                                <a class="dropdown-item language-switcher" data-code="{{$language->code}}" href="#">{{$language->language}}</a>
                            @endforeach
                        </div>
                    </li>
                {!! csrf_field() !!}
                </ul>
                @endif --}}

                @if (count($static_data['languages']) > 1)
                    <ul class="top-menu" style="margin-left: 20px;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="language-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-language"></i>
                                @if (Session::has('language'))
                                    @foreach ($static_data['languages'] as $language)
                                        @if (Session::get('language'))
                                            @if (strpos(Session::get('language'), $language->code) !== false)
                                                {{ $language->language }}
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    {{ $default_language->language }}
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language-dropdown">
                                {{--
                                        @foreach ($static_data['languages'] as $language)
                                            <a class="dropdown-item language-switcher" data-code="{{$language->code}}" href="#">{{$language->language}}</a>
                                        @endforeach
                                        --}}
                                <a class="dropdown-item" href="{{ url('/') }}">Français</a>
                                <a class="dropdown-item" href="{{ url('/rental') }}">English</a>
                                <a class="dropdown-item" href="{{ url('/es') }}">Española</a>
                                <a class="dropdown-item" href="{{ url('/noleggio') }}">Italiano</a>
                                <a class="dropdown-item" href="{{ url('/wynajem') }}">Polski</a>
                                <a class="dropdown-item" href="{{ url('/verhuur') }}">Nederlands</a>
                                <a class="dropdown-item" href="{{ url('/aluguel') }}">Português</a>
                            </div>
                        </li>
                        {!! csrf_field() !!}
                    </ul>
                @endif

                @if (count($currencies ?? '') > 1)
                    <ul class="top-menu" style="margin-left: 20px;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="currencies-dropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-money"></i>
                                {{ currency()->getUserCurrency() }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="currencies-dropdown">
                                @foreach ($currencies ?? '' as $currency)
                                    <a class="dropdown-item currency-switcher" data-code="{{ $currency['code'] }}"
                                        href="#">{{ $currency['symbol'] }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
        <!--<div class="row" style="background: #f1c12f;">-->
        <!--    <div class="col-md-12">-->
        <!--       <p class="announce"><span>{{$static_data['strings']['annonce_f']}}</span> <a  target="_blank" href="https://maps.app.goo.gl/76bDsywzzhSrnY6EA">{{$static_data['strings']['here']}}</a>.<span> {{$static_data['strings']['annonce_s']}}</span></p>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
<div id="header-phantom" class="hidden"></div>
<div id="header" class="row sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-2">
                <div id="logo">
                    <a href="{{ route('home') }}"><img class="img-fluid" width="150" height="80"
                            title="location de voitures marrakech jacarandacar "
                            alt="Location voitures Marrakech jacarandacar "
                            src="{{ asset('assets/images/home/location-voiture-marrakech.png') }}" /></a>
                </div>
            </div>
            <div class="col-md-12 col-lg-10">
                {{--
                {!! Form::open(['method' => 'post', 'url' => route('searchref'), 'id' => 'ref-search-form']) !!}
                    <input type="text" name="reference" placeholder="Référence{{$static_data['strings']['reference']}}">
                    <button type="submit" class="searchref-button"><i class="fa fa-search"></i></button>
                {!! Form::close() !!}
                --}}
                <ul class="main-menu">
                    {{--
                    <li><a href="{{route('home')}}">{{$static_data['strings']['home']}}</a></li>
                    @foreach ($static_data['categories'] as $category)
                    <li><a href="{{url('/marrakech-villas').'/'.$category->alias}}">{{ $category->contentload->name }}</a></li>
                    @endforeach
                    <li class="{{ setActive('wishlist') }}"><a href="{{route('wishlist')}}">{{$static_data['strings']['my_wishlist']}}</a></li> --}}
                    @if (Session::get('language') == 'en')
                        <li class="{{ setActive('rental') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('rental/car-rental-marrakech') }}"><a
                                href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('rental/general-conditions') }}"><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('rental/faq') }}"><a
                                href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('rental/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('rental/contact-us') }}"><a
                                href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @elseif(Session::get('language') == 'es')
                        <li class="menu_es {{ setActive('es') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="menu_es {{ setActive('es/alquiler-de-coches-marrakech') }}"><a
                                href="{{ route('parc_auto_es') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="menu_es {{ setActive('es/general_conditions') }}"><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="menu_es {{ setActive('es/faq') }}"><a
                                href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="menu_es {{ setActive('es/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="menu_es {{ setActive('es/contact') }}"><a
                                href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @elseif(Session::get('language') == 'it')
                        <li class="{{ setActive('noleggio') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('noleggio/autonoleggio-marrakech') }}"><a
                                href="{{ route('parc_auto_it') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('noleggio/condizioni-generali') }}"><a
                                href="{{ route('generalconditions_it') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('noleggio/faq') }}"><a
                                href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('noleggio/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('noleggio/Contattaci') }}"><a
                                href="{{ route('contact_it') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @elseif(Session::get('language') == 'pl')
                        <li class="{{ setActive('wynajem') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('wynajem/wypożyczalnia-samochodów-marrakesz') }}"><a
                                href="{{ route('parc_auto_pl') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('wynajem/ogólne-warunki') }}"><a
                                href="{{ route('generalconditions_pl') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('wynajem/pytania-i-odpowiedzi') }}"><a
                                href="{{ route('faq_pl') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('wynajem/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('wynajem/Kontakt') }}"><a
                                href="{{ route('contact_pl') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @elseif(Session::get('language') == 'nl')
                        <li class="{{ setActive('verhuur') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('verhuur/autoverhuur-marrakech') }}"><a
                                href="{{ route('parc_auto_nl') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('verhuur/algemene-voorwaarden') }}"><a
                                href="{{ route('generalconditions_nl') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('verhuur/veelgestelde-vragen') }}"><a
                                href="{{ route('faq_nl') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('verhuur/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('verhuur/contact') }}"><a
                                href="{{ route('contact_nl') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @elseif(Session::get('language') == 'pt')
                        <li class="{{ setActive('aluguel') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('aluguel/aluguel-de-carros-marrakech') }}"><a
                                href="{{ route('parc_auto_pt') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('aluguel/condições-gerais') }}"><a
                                href="{{ route('generalconditions_pt') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('aluguel/perguntas-frequentesn') }}"><a
                                href="{{ route('faq_pt') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('aluguel/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('aluguel/contato') }}"><a
                                href="{{ route('contact_pt') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @else
                        <li class="{{ setActive('/') }}"><a
                                href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
                        <li class="{{ setActive('car-rental-marrakech') }}"><a
                                href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
                        <li class="{{ setActive('general-conditions') }}"><a
                                href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
                        </li>
                        <li class="{{ setActive('faq') }}"><a
                                href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
                        <li class="{{ setActive('blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ setActive('contact-us') }}"><a
                                href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-12 hidden-md-up">
        <a href="#" aria-label="{{ $static_data['strings']['mobile_menu_btn_title'] }}"  class="mobile-menu-button"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="mobile-menu">
    <ul class="mobile-main-menu">
        {{--
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> {{$static_data['strings']['home']}}</a></li>
        @foreach ($static_data['categories'] as $category)
        <li><a href="{{url('/marrakech-villas').'/'.$category->alias}}"><i class="fa fa-circle-o"></i> {{ $category->contentload->name }}</a></li>
        @endforeach
        --}}
        @if (Session::get('language') == 'en')
            <li class="{{ setActive('rental') }}"><a
                    href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
            <li class="{{ setActive('rental/car-rental-marrakech') }}"><a
                    href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
            <li class="{{ setActive('rental/general-conditions') }}"><a
                    href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
            </li>
            <li class="{{ setActive('rental/faq') }}"><a
                    href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
            <li class="{{ setActive('rental/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ setActive('rental/contact-us') }}"><a
                    href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
        @elseif(Session::get('language') == 'es')
            <li class="{{ setActive('es') }}"><a
                    href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
            <li class="{{ setActive('es/alquiler-de-coches-marrakech') }}"><a
                    href="{{ route('parc_auto_es') }}">{{ $static_data['strings']['car_park'] }}</a></li>
            <li class="{{ setActive('es/general_conditions') }}"><a
                    href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
            </li>
            <li class="{{ setActive('es/faq') }}"><a
                    href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
            <li class="{{ setActive('es/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ setActive('es/contact') }}"><a
                    href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
        @elseif (Session::get('language') == 'it')
            <li class="{{ setActive('noleggio') }}"><a
                    href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
            <li class="{{ setActive('noleggio/autonoleggio-marrakech') }}"><a
                    href="{{ route('parc_auto_it') }}">{{ $static_data['strings']['car_park'] }}</a></li>
            <li class="{{ setActive('noleggio/condizioni-generali') }}"><a
                    href="{{ route('generalconditions_it') }}">{{ $static_data['strings']['general_conditions'] }}</a>
            </li>
            <li class="{{ setActive('noleggio/faq') }}"><a
                    href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
            <li class="{{ setActive('noleggio/blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ setActive('noleggio/Contattaci') }}"><a
                    href="{{ route('contact_it') }}">{{ $static_data['strings']['contact'] }}</a></li>
        @else
            <li class="{{ setActive('/') }}"><a
                    href="{{ route('home') }}">{{ $static_data['strings']['home'] }}</a></li>
            <li class="{{ setActive('car-rental-marrakech') }}"><a
                    href="{{ route('parc_auto') }}">{{ $static_data['strings']['car_park'] }}</a></li>
            <li class="{{ setActive('general-conditions') }}"><a
                    href="{{ route('generalconditions') }}">{{ $static_data['strings']['general_conditions'] }}</a>
            </li>
            <li class="{{ setActive('faq') }}"><a
                    href="{{ route('faq') }}">{{ $static_data['strings']['faq'] }}</a></li>
            <li class="{{ setActive('blog') }}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{ setActive('contact-us') }}"><a
                    href="{{ route('contact') }}">{{ $static_data['strings']['contact'] }}</a></li>
        @endif
    </ul>
</div>
