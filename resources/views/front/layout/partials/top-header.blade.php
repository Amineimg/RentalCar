<header class="header header-two">
    <div class="header-two-top">
        <div class="container">
            <div class="header-top-items">
                <ul class="header-address">
                    @forelse (Config::get("dehbi.phones") as $item)
                        <li><a class="text-decoration-none white-color" target="_blank"
                                href="{{ $item['href'] . $item['number'] }}"> <span><i
                                        class='{{ $item['icons'] }}'></i></span>{{ $item['number'] }} </a></li>

                    @empty
                    @endforelse
                    <li><span><i class="bx bx-map"></i></span>{{ Config::get('dehbi.address') }}

                </ul>
                <div class="header-top-right d-flex align-items-center">
                    <div class="header-top-flag-drops d-flex align-items-center">
                        <div class="header-top-drpodowns me-3">
                            <div class="dropdown header-dropdown country-flag">
                                <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
                                    <img src="{{ URL::asset(Helpers::getDefaultLanguage('flagPath')) }}"
                                        alt="Img">{{ Helpers::getDefaultLanguage('language') }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    {{-- @dd(Language::get()); --}}
                                    @forelse (Language::get() as $languge)
                                        <a href="{{ route('change_lang', ['lang' => $languge->code]) }}"
                                            class="dropdown-item">
                                            <img src="{{ URL::asset($languge->flagPath) }}"
                                                alt="Img">{{ $languge->language ?? '' }}
                                        </a>
                                    @empty
                                    @endforelse


                                </div>
                            </div>
                        </div>
                        {{-- <div class="header-top-drpodowns">
                            <div class="dropdown header-dropdown country-flag">
                                <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                    href="javascript:void(0);">
                                    <i class="bx bx-globe me-2"></i>USD
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        Euro
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        INR
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="header-top-social-links">
                        <ul>
                            @forelse (Config::get("dehbi.social") as $item)
                                <li>
                                    <a title="{{ $item['name'] ?? '' }}" target="_blank"
                                        href="{{ $item['link'] ?? '' }}"><i class="{{ $item['icon'] ?? '' }}"></i></a>
                                </li>
                            @empty
                            @endforelse

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ url('/') }}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/front/build/img/DEHBI LUX LOGO-BLACK v2.png') }}" class="img-fluid"
                        alt="" style="width: 18%;">
                </a>
                <a href="{{ url('/') }}" class="navbar-brand logo-small">
                    <img src="{{ URL::asset('/front/build/img/DEHBI LUX LOGO-BLACK v2.png') }}" class="img-fluid"
                        alt="" style="width: 20%;">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{ url('/') }}" class="menu-logo">
                        <img src="{{ URL::asset('/front/build/img/DEHBI LUX LOGO-BLACK v2.png') }}" class="img-fluid"
                            alt="" style="width: 18%;">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu active">
                        <a href="{{ route('home') }}">{{ __('menu.home') }}</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('search_home') }}">{{ __('menu.parking') }}</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('home').'/#faq_section' }}">{{ __('menu.general_condition') }}</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('home').'/#faq_section' }}">{{ __('menu.faq') }}</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('blogs') }}">{{ __('menu.glogs') }}</a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('contact') }}">{{ __('menu.contact') }}</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                {{-- <li class="nav-item">
                    <a class="nav-link login-link" href="{{ url('login') }}"><span><i
                                class="bx bx-user me-2"></i></span>Sign In / </a>
                    <a class="nav-link login-link ms-1" href="{{ url('register') }}">Register </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{ url('listing-list') }}"><span><i
                                class="bx bx-plus-circle"></i></span>Add Listing</a>
                </li> --}}
            </ul>
        </nav>
    </div>
</header>
