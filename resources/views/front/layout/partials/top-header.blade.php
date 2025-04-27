<header class="header header-two">

    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="J" class="letters-loading">
                    J
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Offcanvas Area Start -->

    <div class="offcanvas__overlay"></div>

    <!-- Header Top Section Start -->
    <div class="header-top-section " style="z-index: 1050; position: relative;">
        <div class="container-fluid">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="majdolinerentacar@gmail.com" class="link">majdolinerentacar@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        Avenue 11 janvier Marrakech, Maroc
                    </li>
                </ul>
                <div class="header-top-right">
                    <ul class="top-list">
                        <li><a href="contact.html">Help</a></li>
                        <li>/</li>
                        <li><a href="contact.html">Support</a></li>
                        <li>/</li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>

                    <!-- Language dropdown added here -->
                    <div class="dropdown header-dropdown country-flag" >
                        <a class="dropdown-toggle nav-tog d-flex align-items-center gap-2 text-white" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-expanded="false" >
                            <img src="{{ URL::asset(Helpers::getDefaultLanguage('flagPath')) }}" alt="Lang" width="20">
                            <span class="text-uppercase small text-white">{{ Helpers::getDefaultLanguage('language') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-0">
                            @forelse (Language::get() as $lang)
                                <li>
                                    <a href="{{ route('change_lang', ['lang' => $lang->code]) }}" class="dropdown-item d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset($lang->flagPath) }}" alt="Lang" width="20">
                                        <span  class="small">{{ $lang->language ?? '' }}</span>
                                    </a>
                                </li>
                            @empty
                                <li><span class="dropdown-item text-muted">{{ __('No Languages') }}</span></li>
                            @endforelse
                        </ul>
                    </div>
                    <!-- End Language dropdown -->

                    <div class="social-icon d-flex align-items-center">
                        <a href="https://x.com/MajdolineTravel"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/majdolinetravel/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://fr.pinterest.com/lahcenomo/"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="https://www.instagram.com/majdolinerentcars/?hl=fr"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <div id="header-sticky" class="header-1" >
        <div class="container-fluid" >
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{route('home')}}" class="header-logo">
                                <img src="{{ asset('assets_v2/img/logo/majdoline car logo.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('search_home') }}">Cars park</a>

                                        </li>
                                        <li>
                                            <a href="{{ route('about')}}">About Us</a>
                                        </li>



                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Page
                                                <i class="fas fa-angle-down"></i>

                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{route ('faq')}}">FAQ</a></li>
                                                <li><a href="{{route('generalconditions')}}">Conditions generales</a></li>

                                            </ul>


                                        </li>

                                        <li>
                                            <a href="{{ route('blogs') }}">Blogs</a>

                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="icon-items">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Call Anytime</p>
                                <h6><a href="tel:+212 618 700 526">+212 618 700 526</a></h6>
                            </div>
                        </div>
                        <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                        <div class="header-button">
                            <a href="{{ route('search_home') }}" class="header-btn">
                                {{ __("website.search") }}
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-wrap" >
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close" style="padding-top: 30px"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder={{ __("website.search") }}>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</header>

