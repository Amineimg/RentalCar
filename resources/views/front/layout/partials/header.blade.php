     <!-- Header -->
     @if (!Route::is(['home']))
        <header class="header header-two">
                <div class="header-two-top">
                    <div class="container">
                        <div class="header-top-items">
                            <ul class="header-address">
                                <li><span><i class="bx bxs-phone"></i></span>{{ Config::get("dehbi.primary_phone") }}</li>
                                <li><span><i class="bx bx-map"></i></span>{{ Config::get("dehbi.address") }}
                                </li>
                            </ul>
                            <div class="header-top-right d-flex align-items-center">
                                <div class="header-top-flag-drops d-flex align-items-center">
                                    <div class="header-top-drpodowns me-3">
                                        <div class="dropdown header-dropdown country-flag">
                                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                                href="javascript:void(0);">
                                                <img src="{{ URL::asset( Helpers::getDefaultLanguage("flagPath")) }}"
                                                    alt="Img">{{ Helpers::getDefaultLanguage('language') }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                {{-- @dd(Language::get()); --}}
                                                @forelse (Language::get() as $languge)
                                                    <a href="{{ route("change_lang",["lang"=>$languge->code]) }}" class="dropdown-item">
                                                        <img src="{{ URL::asset($languge->flagPath) }}" alt="Img">{{ $languge->language ?? '' }}
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
                                                <a title="{{ $item["name"] ?? '' }}" target="_blank" href="{{ $item["link"] ?? '' }}"><i class="{{ $item["icon"] ?? '' }}"></i></a>
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
                                    alt="Logo" style="width: 18%;">
                            </a>
                            <a href="{{ url('/') }}" class="navbar-brand logo-small">
                                <img src="{{ URL::asset('/front/build/img/DEHBI LUX LOGO-BLACK v2.png') }}" class="img-fluid"
                                    alt="Logo" style="width: 20%;">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="{{ url('/') }}" class="menu-logo">
                                    <img src="{{ URL::asset('/front/build/img/logo.svg') }}" class="img-fluid"
                                        alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                        class="fas fa-times"></i></a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu active">
                                    <a href="{{ route('home') }}">{{ __("menu.home") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('search_home') }}">{{ __("menu.parking") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.general_condition") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.faq") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.glogs") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('contact') }}">{{ __("menu.contact") }}</a>
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
     @endif

     @if (Route::is(['home']))

     <!-- Hero Sec Main -->
        <div class="hero-sec-main">
            <!-- Header -->
            <header class="header header-two">
                <div class="header-two-top">
                    <div class="container">
                        <div class="header-top-items">
                            <ul class="header-address">
                                <li><span><i class="bx bxs-phone"></i></span>{{ Config::get("dehbi.primary_phone") }}</li>
                                <li><span><i class="bx bx-map"></i></span>{{ Config::get("dehbi.address") }}
                                </li>
                            </ul>
                            <div class="header-top-right d-flex align-items-center">
                                <div class="header-top-flag-drops d-flex align-items-center">
                                    <div class="header-top-drpodowns me-3">
                                        <div class="dropdown header-dropdown country-flag">
                                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                                href="javascript:void(0);">
                                                <img src="{{ URL::asset( Helpers::getDefaultLanguage("flagPath")) }}"
                                                    alt="Img">{{ Helpers::getDefaultLanguage('language') }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                {{-- @dd(Language::get()); --}}
                                                @forelse (Language::get() as $languge)
                                                    <a href="{{ route("change_lang",["lang"=>$languge->code]) }}" class="dropdown-item">
                                                        <img src="{{ URL::asset($languge->flagPath) }}" alt="Img">{{ $languge->language ?? '' }}
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
                                                <a title="{{ $item["name"] ?? '' }}" target="_blank" href="{{ $item["link"] ?? '' }}"><i class="{{ $item["icon"] ?? '' }}"></i></a>
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
                                    alt="Logo" style="width: 18%;">
                            </a>
                            <a href="{{ url('/') }}" class="navbar-brand logo-small">
                                <img src="{{ URL::asset('/front/build/img/DEHBI LUX LOGO-BLACK v2.png') }}" class="img-fluid"
                                    alt="Logo" style="width: 20%;">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="{{ url('/') }}" class="menu-logo">
                                    <img src="{{ URL::asset('/front/build/img/logo.svg') }}" class="img-fluid"
                                        alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                        class="fas fa-times"></i></a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu active">
                                    <a href="{{ route('home') }}">{{ __("menu.home") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('search_home') }}">{{ __("menu.parking") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.general_condition") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.faq") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="#faq">{{ __("menu.glogs") }}</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="{{ route('contact') }}">{{ __("menu.contact") }}</a>
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
            <!-- /Header -->

            <!-- Banner -->
            <section class="banner-section banner-sec-two banner-slider">
                <div class="banner-img-slider owl-carousel">
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/dehbi (3).png') }}" alt="Img">
                    </div>
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/dehbi (5).png') }}" alt="Img">
                    </div>
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/home-banner-img-03.png') }}" alt="Img">
                    </div>
                </div>
                <div class="container">
                    <div class="home-banner">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="hero-sec-contents">
                                    <div class="banner-title">
                                        <h1>{{ __("website.home_page_title") }}.
                                            <span>{{ __("website.brand_name") }}</span>
                                        </h1>
                                        <p>{{ __("website.home_page_description") }}
                                        </p>
                                    </div>
                                    <div class="banner-form">
                                        <form action="{{ route("search_home") }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="banner-search-list">
                                                        <div class="input-block">
                                                            <label><i class="bx bx-map"></i> {{ __("website.pickup_location") }}</label>
                                                            <select class="select" name="pickup_location">
                                                                @forelse ($locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                                @empty
                                                                <option>No locations</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="input-block">
                                                            <label><i class="bx bx-calendar"></i>{{ __("website.start_date") }}</label>
                                                            <div class="date-widget">
                                                                <div class="group-img">
                                                                    <input type="text" class="form-control datetimepicker start_date" name="start_date" placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-block">
                                                            <label><i class="bx bx-calendar"></i>{{ __("website.start_time") }}</label>
                                                            <div class="date-widget">
                                                                <div class="group-img">
                                                                    <input type="text" class="form-control timepicker" name="start_time"
                                                                        placeholder="11:00 AM">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="banner-search-list">
                                                    <div class="input-block">
                                                        <label><i class="bx bx-map"></i>{{ __("website.dropoff_location") }}</label>
                                                        <select class="select" name="dropoff_location">
                                                            @forelse ($locations as $location)
                                                                <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                            @empty
                                                            <option>No locations</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="input-block">
                                                        <label><i class="bx bx-calendar"></i>{{ __("website.end_date") }}</label>
                                                        <div class="date-widget">
                                                            <div class="group-img">
                                                                <input type="text" class="form-control datetimepicker end_date" name="end_date"
                                                                placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("d-m-Y") : Carbon::now()->addDay()->format("d-m-Y") }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <label><i class="bx bx-calendar"></i>{{ __("website.end_time") }}</label>
                                                        <div class="date-widget">
                                                            <div class="group-img">
                                                                <input type="text" class="form-control timepicker"  name="end_time"
                                                                    placeholder="11:00 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="input-block-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="bx bx-search-alt me-2"></i> {{ __("website.search") }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="banner-user-group text-center">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li class="users-text">
                                                <h5>6K + Customers</h5>
                                                <span>has used our renting services </span>
                                            </li>
                                        </ul>
                                    </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Banner -->
        </div>
     @endif
     <!-- /Hero Sec Main -->
