    <!-- Footer -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top aos" data-aos="fade-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">{{ __('website.address') }}</h5>
                                    <p>
                                        {{ Config::get('dehbi.address') }}
                                    </p>

                                </div>
                                <!-- /Footer Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">Nos tags
                                    </h5>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Agence de location de voitures à Marrakech</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Location de voiture Marrakech</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Location de voiture Marrakech pas cher</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Location 4x4 Marrakech</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Location voiture aéroport Marrakech
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Location voiture marrakech sans caution
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Footer Widget -->
                                <div class="footer-widget footer-menu">
                                    <h5 class="footer-title">{{ __('links') }}</h5>
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}">{{ __('menu.home') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('search_home') }}">{{ __('menu.parking') }} </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">{{ __('menu.general_condition') }}</a>
                                        </li>
                                        <li>
                                            <a href="#faq">{{ __('menu.faq') }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">{{ __('menu.glogs') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">{{ __('menu.contact') }}</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /Footer Widget -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-contact footer-widget">
                            <h5 class="footer-title">{{ __('contact_info') }}</h5>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="feather-phone-call"></i></span>
                                    <div class="addr-info">
                                        <a
                                            href="tel:{{ Config::get('dehbi.primary_phone') }}">{{ Config::get('dehbi.primary_phone') }}</a>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-mail"></i></span>
                                    <div class="addr-info">
                                        {{-- @dd(config('dehbi')) --}}

                                        <a
                                            href="mailto:{{ config('dehbi.primary_emails') }}">{{ config('dehbi.primary_emails') }}</a>
                                    </div>
                                </div>
                                {{-- <div class="update-form">
                                    <form action="#">
                                        <span><i class="feather-mail"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter You Email Here">
                                        <button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
                                    </form>
                                </div> --}}
                            </div>
                            <div class="footer-social-widget">
                                <ul class="nav-social">
                                    @forelse (Config::get("dehbi.social") as $item)
                                        <li>
                                            <a title="{{ $item['name'] ?? '' }}" target="_blank"
                                                href="{{ $item['link'] ?? '' }}"><i
                                                    class=" {{ $item['footer-icons'] ?? '' }}"></i></a>
                                        </li>
                                    @empty
                                    @endforelse
                                    {{-- <li>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <!-- Copyright -->
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="copyright-text">
                                <p>© {{ Carbon::now()->year }} {{ __('website.copy_right') }}
                                    {{ __('website.powered_by') }}
                                    <a class="cscolor customize-unpreviewable" href="https://seocom.ma/" target="_blank"
                                        title="Agencia de diseño web Marrakech"><img
                                            src="https://jacarandacar.com/images/agence-web-maroc.png"
                                            alt="agence de communication à Casablanca"></a>

                                </p>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <!-- Copyright Menu -->
                            <div class="copyright-menu">
                                <div class="vistors-details">
                                    <ul class="d-flex">
                                        <li><a href="javascript:void(0)">{{__("website.powered_by")}}</a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/front/build/img/icons/visa.svg')}}" alt="Visa"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/front/build/img/icons/master.svg')}}" alt="Master"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{URL::asset('/front/build/img/icons/applegpay.svg')}}" alt="applegpay"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Copyright Menu -->
                        </div> --}}
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
        </div>
        <!-- /Footer Bottom -->
    </footer>
    <!-- /Footer -->
