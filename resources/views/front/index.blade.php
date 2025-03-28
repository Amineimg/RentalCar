<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')
    <!-- Banner -->
    {{-- <section class="banner-section banner-slider">
        <div class="container">
            <div class="home-banner">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-down">
                        <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted car
                            rental platform in the World</p>
                        <h1><span>Find Your Best</span> <br>
                            Dream Car for Rental</h1>
                        <p>Experience the ultimate in comfort, performance, and sophistication with our luxury car rentals.
                            From sleek sedans and stylish coupes to spacious SUVs and elegant convertibles, we offer a range
                            of premium vehicles to suit your preferences and lifestyle. </p>
                        <div class="view-all">
                            <a href="{{ url('listing-grid') }}" class="btn btn-view d-inline-flex align-items-center">View
                                all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="banner-imgs">
                            <img src="{{ URL::asset('/front/build/img/car-right.png') }}" class="img-fluid aos" alt="bannerimage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->

    <!-- Search -->
    {{-- <div class="section-search">
        <div class="container">
            <div class="search-box-banner">
                <form action="{{ url('listing-grid') }}">
                    <ul class="align-items-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Pickup Location</label>
                                <div class="group-img">
                                    <input type="text" class="form-control"
                                        placeholder="Enter City, Airport, or Address">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Pickup Date</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widget">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <ul class="align-items-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Pickup Location</label>
                                <div class="group-img">
                                    <input type="text" class="form-control"
                                        placeholder="Enter City, Airport, or Address">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Return Date</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-last">
                            <div class="input-block">
                                <div class="search-btn">
                                    <button class="btn search-button" type="submit"> <i class="fa fa-search"
                                            aria-hidden="true"></i>Search</button>
                                </div>
                            </div>
                        </li>

                    </ul>

                </form>
            </div>
        </div>
    </div>
    <!-- /Search --> --}}

    <!-- services -->
    <section class="section services">
        <div class="service-right">
            <img src="{{ URL::asset('/front/build/img/bg/service-right.svg') }}" class="img-fluid" alt="services right">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>{{ __("website.how_it_works") }}</h2>
                <p>{{ __("website.how_it_works_description") }}</p>
            </div>
            <!-- /Heading title -->
            <div class="services-work">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-date flex-fill">
                            <div class="services-icon border-secondary">
                                <img class="icon-img bg-secondary"
                                    src="{{ URL::asset('/front/build/img/icons/services-icon-01.svg') }}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>{{ __("website.how_it_works_title_step_1") }}</h3>
                                <p>{{ __("website.how_it_works_description_step_1") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-loc flex-fill">
                            <div class="services-icon border-warning">
                                <img class="icon-img bg-warning"
                                    src="{{ URL::asset('/front/build/img/icons/services-icon-02.svg') }}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>{{ __("website.how_it_works_title_step_2") }}</h3>
                                <p>{{ __("website.how_it_works_description_step_2") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down">
                        <div class="services-group service-book flex-fill">
                            <div class="services-icon border-dark">
                                <img class="icon-img bg-dark"
                                    src="{{ URL::asset('/front/build/img/icons/services-icon-03.svg') }}" alt="Choose Locations">
                            </div>
                            <div class="services-content">
                                <h3>{{ __("website.how_it_works_title_step_3") }}</h3>
                                <p>{{ __("website.how_it_works_description_step_3") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /services -->

    <!-- Popular Services -->
    {{-- <section class="section popular-services popular-explore">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Explore Most Popular Cars</h2>
                <p>Here's a list of some of the most popular cars globally, based on sales and customer preferences</p>
            </div>
            <!-- /Heading title -->
            <div class="row justify-content-center">
                <div class="col-lg-12" data-aos="fade-down">
                    <div class="listing-tabs-group">
                        <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
                            <li>
                                <a class="active" aria-current="true" data-bs-toggle="tab" href="#Carmazda">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-01.svg') }}" alt="Mazda">
                                    </span>
                                    Mazda
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Caraudi">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-02.svg') }}" alt="Audi">
                                    </span>
                                    Audi
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Carhonda">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-03.svg') }}" alt="Honda">
                                    </span>
                                    Honda
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Cartoyota">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-04.svg') }}" alt="Toyota">
                                    </span>
                                    Toyota
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Caracura">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-05.svg') }}" alt="Acura">
                                    </span>
                                    Acura
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#Cartesla">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon-06.svg') }}" alt="Tesla">
                                    </span>
                                    Tesla
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="Carmazda">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Featured</span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Featured</span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-05.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-05.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">2018 Chevrolet Camaro</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0) 200 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="18 KM"></span>
                                                <p>18 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Germany
                                        </div>
                                        <div class="listing-price">
                                            <h6>$36 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-warning">Top Rated</span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Featured</span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="Caraudi">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                                <div class="feature-text">
                                    <span class="bg-danger">Featured</span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="Carhonda">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="Cartoyota">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="Caracura">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <div class="tab-pane fade" id="Cartesla">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-08-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-08.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-01-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Toyota</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Washington
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-02-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">KIA</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.0m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Audi</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 150 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ferrai</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 160 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.5m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2022"></span>
                                                <p>2022</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/front/build/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item justify-content-end">
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Acura</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-06.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 125 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.2m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-07-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Chevrolet</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-07.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 165 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">3.6m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide1.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide2.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        <div class="slide-images">
                                            <a href="{{ url('listing-details') }}">
                                                <img src="{{ URL::asset('/front/build/img/cars/car-10-slide3.jpg') }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i class="feather-image"></i>04</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="featured-text">Ford</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="{{ URL::asset('/front/build/img/profiles/avatar-10.jpg') }}"
                                                    alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="{{ url('listing-details') }}">Ford Mustang 4.0 AT</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 170 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="list-km">
                                            <span class="km-count"><img
                                                    src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                    alt="author">4.1m</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /Popular Services -->

    <!-- Popular Cartypes -->

    <!-- /Popular Cartypes -->
      <!-- Rental deals -->
      <x-slider-cars />

    <!-- /Rental deals -->

    <!-- Facts By The Numbers -->
    <section class="section facts-number">
        <div class="facts-left">
            <img src="{{ URL::asset('/front/build/img/bg/facts-left.png') }}" class="img-fluid" alt="facts left">
        </div>
        <div class="facts-right">
            <img src="{{ URL::asset('/front/build/img/bg/facts-right.png') }}" class="img-fluid" alt="facts right">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2 class="title text-white">{{ __("website.fact_numbers") }}</h2>
                <p class="description">{{ __("website.fact_numbers_description") }}</p>
            </div>
            <!-- /Heading title -->
            <div class="counter-group">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{ URL::asset('/front/build/img/icons/bx-heart.svg') }}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">16</span>K+</h4>
                                    <p>{{ __("website.happy_customers") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{ URL::asset('/front/build/img/icons/bx-car.svg') }}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">2547</span>+</h4>
                                    <p>{{ __("website.count_of_cars") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{ URL::asset('/front/build/img/icons/bx-headphone.svg') }}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">625</span>+</h4>
                                    <p>{{ __("website.car_center_solutions") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                        <div class="count-group flex-fill">
                            <div class="customer-count d-flex align-items-center">
                                <div class="count-img">
                                    <img src="{{ URL::asset('/front/build/img/icons/bx-history.svg') }}" alt="Icon">
                                </div>
                                <div class="count-content">
                                    <h4><span class="counterUp">15000</span>+</h4>
                                    <p>{{ __("website.total_kilometer") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Facts By The Numbers -->


    <!--Why Choose Us-->
    <!-- About us Testimonials -->
    <!-- FAQ  -->
    <!-- Pricing Plan -->
    @component('front.components.client-section',["posts"=>$posts])
    @endcomponent
    <!-- /Pricing Plan -->
    <!-- /FAQ  -->
    <!-- /About us Testimonials -->
    <!--/Why Choose Us-->
@endsection
