<?php $page = 'listing-details'; ?>
@extends('front.layout.mainlayout')
@section('content')
    @component('front.components.breadcrumb')
        @slot('title')
            {{ Helpers::getAttributeFromTranslate('name', 2, Helpers::getDefaultLanguage('id'), $car) }}
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Chevrolet Camaro
        @endslot
    @endcomponent
    <!-- Detail Page Head-->
    <section class="product-detail-head">
        <div class="container">
            <div class="detail-page-head">
                <div class="detail-headings">
                    <div class="star-rated">
                        {{-- <ul class="list-rating">
                            <li>
                                <div class="car-brand">
                                    <span>
                                        <img src="{{ URL::asset('/front/build/img/icons/car-icon.svg') }}" alt="img">
                                    </span>
                                    Sedan
                                </div>
                            </li>
                            <li>
                                <span class="year">2023</span>
                            </li>
                            <li class="ratings">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-list-rating">(5.0)</span>
                            </li>
                        </ul> --}}
                        <div class="camaro-info">
                            <h3> {{ Helpers::getAttributeFromTranslate('name', 2, Helpers::getDefaultLanguage('id'), $car) }}
                            </h3>
                            <div class="camaro-location">
                                <div class="camaro-location-inner">
                                    <i class='bx bx-map'></i>
                                    <span>{{ __('website.location') }} :
                                        {{ Helpers::getAttributeFromTranslate('name', 2, Helpers::getDefaultLanguage('id'), $car->prop_location) }}
                                    </span>
                                </div>
                                {{-- <div class="camaro-location-inner">
                                    <i class='bx bx-show'></i>
                                    <span>Views : 250 </span>
                                </div>
                                <div class="camaro-location-inner">
                                    <i class='bx bx-car'></i>
                                    <span>Views : Listed on: 01 Jan, 2024 </span>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="details-btn">
                    {{-- <span class="total-badge"><i class='bx bx-calendar-edit'></i>Total Booking : 300</span>
                    <a href="#"> <i class='bx bx-git-compare'></i>Compare</a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- /Detail Page Head-->

    <section class="section product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail-product">
                        <div class="pro-info">
                            <div class="pro-badge">
                                {{-- <span class="badge-km"><i class="fa-solid fa-person-walking"></i>4.2 Km Away</span> --}}
                                <a href="javascript:void(0);" class="fav-icon"><i class="fa-regular fa-heart"></i></a>
                            </div>
                            <ul>
                                <li class="del-airport"><i
                                        class="fa-solid fa-check"></i>{{ __('website.airport_delevery') }}</li>
                                <li class="del-home"><i class="fa-solid fa-check"></i>{{ __('website.home_delevery') }}</li>
                            </ul>
                        </div>
                        <div class="slider detail-bigimg">
                            <div class="product-img">
                                <img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}" alt="Slider">
                            </div>
                            @forelse ($car->images as $image)
                                <div class="product-img">
                                    <img src="{{ URL::asset('images/data/' . $image->image ?? '') }}" alt="Slider">
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <div class="slider slider-nav-thumbnails">
                            <div><img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}"
                                    alt="product image">
                            </div>
                            @forelse ($car->images as $image)
                                <div><img src="{{ URL::asset('images/data/' . $image->image ?? '') }}" alt="product image">
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    {{-- <div class="review-sec pb-0">
                        <div class="review-header">
                            <h4>Extra Service</h4>
                        </div>
                        <div class="lisiting-service">
                            <div class="row">
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-01.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>GPS Navigation Systems</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-02.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Wi-Fi Hotspot</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-03.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Child Safety Seats</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-04.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Fuel Options</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-05.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Roadside Assistance</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-06.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Satellite Radio</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-07.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Additional Accessories</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ URL::asset('/front/build/img/icons/service-08.svg') }}" alt="Icon">
                                    </div>
                                    <div class="service-info">
                                        <p>Express Check-in/out</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Listing Section -->
                    <div class="review-sec mb-0">
                        <div class="review-header">
                            <h4>Description of Listing</h4>
                        </div>
                        <div class="description-list">
                            {!! Helpers::getAttributeFromTranslate('description', 2, Helpers::getDefaultLanguage('id'), $car) !!}
                            {{-- <div class="read-more">
                                <div class="more-text">
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum.It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <a href="javascript:void(0);" class="more-link">Show More</a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- /Listing Section -->

                    <!-- Specifications -->
                    <div class="review-sec specification-card ">
                        <div class="review-header">
                            <h4>{{ __('website.specifications') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="lisiting-featues">
                                <div class="row">
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/front/build/img/specification/specification-icon-1.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>Body </span>
                                            <h6> Sedan</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/front/build/img/specification/specification-icon-2.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>{{ __('website.brand') }} </span>
                                            <h6> {{ Helpers::getAttributeFromTranslate('name', Helpers::getDefaultLanguage('id'), 1, $car->carmodel->carmake) }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/front/build/img/specification/specification-icon-3.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>{{ __('website.transmission') }}

                                            </span>
                                            <h6> {{ $car->transmission == 'automatic' ? __('website.transmission_auto') : __('website.transmission_manual') }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/front/build/img/specification/specification-icon-4.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>{{ __('website.fuel_type') }}</span>
                                            <h6> {{ $car->carburant == 'diesel' ? __('website.diesel') : __('website.petrol') }}
                                            </h6>
                                        </div>
                                    </div>
                                    @if ($car->airconditioner == 1)
                                        <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                            <div class="feature-img">
                                                <img src="{{ URL::asset('/front/build/img/specification/specification-icon-8.svg') }}"
                                                    alt="Icon">
                                            </div>
                                            <div class="featues-info">
                                                <span>{{ __('website.air_condition') }} </span>
                                                <h6> {{ __('website.air_condition') }}</h6>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ URL::asset('/front/build/img/specification/specification-icon-10.svg') }}"
                                                alt="Icon">
                                        </div>
                                        <div class="featues-info">
                                            <span>{{ __('website.doors') }} </span>
                                            <h6> {{ $car->doors }} {{ __('website.doors') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Specifications -->

                    <!-- Car Features -->
                    {{-- <div class="review-sec listing-feature">
                        <div class="review-header">
                            <h4>Car Features</h4>
                        </div>
                        <div class="listing-description">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>Multi-zone A/C</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Heated front seats</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Andriod Auto</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Navigation system</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>Premium sound system</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Bluetooth</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Keyles Start</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Memory seat</li>
                                    </ul>

                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>6 Cylinders</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Adaptive Cruise Control</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Intermittent wipers</li>
                                        <li><span><i class="bx bx-check-double"></i></span>4 power windows</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /Car Features -->

                    <!-- Gallery -->
                    {{-- <div class="review-sec mb-0 pb-0">
                        <div class="review-header">
                            <h4>Gallery</h4>
                        </div>
                        <div class="gallery-list">
                            <ul>
                                <li>
                                    <div class="gallery-widget">
                                        <a href="{{URL::asset('/front/build/img/gallery/gallery-big-01.jpg')}}" data-fancybox="gallery1">
                                            <img class="img-fluid" alt="Image"
                                                src="{{ URL::asset('/front/build/img/gallery/gallery-thumb-01.jpg') }}">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="gallery-widget">
                                        <a href="{{URL::asset('/front/build/img/gallery/gallery-big-02.jpg')}}" data-fancybox="gallery1">
                                            <img class="img-fluid" alt="Image"
                                                src="{{ URL::asset('/front/build/img/gallery/gallery-thumb-02.jpg') }}">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="gallery-widget">
                                        <a href="{{URL::asset('/front/build/img/gallery/gallery-big-03.jpg')}}" data-fancybox="gallery1">
                                            <img class="img-fluid" alt="Image"
                                                src="{{ URL::asset('/front/build/img/gallery/gallery-thumb-03.jpg') }}">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="gallery-widget">
                                        <a href="{{URL::asset('/front/build/img/gallery/gallery-big-04.jpg')}}" data-fancybox="gallery1">
                                            <img class="img-fluid" alt="Image"
                                                src="{{ URL::asset('/front/build/img/gallery/gallery-thumb-04.jpg') }}">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- /Gallery -->



                    <!-- FAQ -->
                    {{-- <div class="review-sec faq-feature">
                        <div class="review-header">
                            <h4>FAQ’s</h4>
                        </div>
                        <div class="faq-info">
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqOne"
                                        aria-expanded="false">How old do I need to be to rent a car?</a>
                                </h4>
                                <div id="faqOne" class="card-collapse collapse">
                                    <p>We offer a diverse fleet of vehicles to suit every need, including compact cars,
                                        sedans, SUVs and luxury vehicles. You can browse our selection online or contact us
                                        for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo"
                                        aria-expanded="false">What documents do I need to rent a car?</a>
                                </h4>
                                <div id="faqTwo" class="card-collapse collapse">
                                    <p>We offer a diverse fleet of vehicles to suit every need, including compact cars,
                                        sedans, SUVs and luxury vehicles. You can browse our selection online or contact us
                                        for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqThree"
                                        aria-expanded="false">What types of vehicles are available for rent?</a>
                                </h4>
                                <div id="faqThree" class="card-collapse collapse">
                                    <p>We offer a diverse fleet of vehicles to suit every need, including compact cars,
                                        sedans, SUVs and luxury vehicles. You can browse our selection online or contact us
                                        for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFour"
                                        aria-expanded="false">Can I rent a car with a debit card?</a>
                                </h4>
                                <div id="faqFour" class="card-collapse collapse">
                                    <p>We offer a diverse fleet of vehicles to suit every need, including compact cars,
                                        sedans, SUVs and luxury vehicles. You can browse our selection online or contact us
                                        for assistance in choosing the right vehicle for you</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /FAQ -->

                </div>
                <div class="col-lg-4 theiaStickySidebar">

                    <div class="review-sec mt-0">
                        <div class="review-header">
                            <h4>{{ __('website.check_availability') }}</h4>
                        </div>
                        <div class="location-content">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="delivery">
                                    <form class="" action="{{ route('booking_details',['car_alias'=>$car->alias]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="car_id" value="{{ $car->id }}">

                                        <ul>
                                            <li class="column-group-main">
                                                <div class="input-block">
                                                    <label><i
                                                            class="bx bx-map"></i>{{ __('website.pickup_location') }}</label>
                                                    <div class="group-img">
                                                        <select class="form-control select" name="pickup_location">
                                                            @forelse ($locations as $location)
                                                                <option
                                                                    {{ Session::has('pickup_location') && !empty(Session::get('pickup_location')) && Session::get('pickup_location') == $location->id ? 'selected' : '' }}
                                                                    value="{{ $location->id }}">
                                                                    {{ $location->contentload->location }}</option>
                                                            @empty
                                                                <option>No locations</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block">
                                                    <label><i
                                                            class="bx bx-map"></i>{{ __('website.dropoff_location') }}</label>
                                                    <div class="group-img">
                                                        <select name="dropoff_location" class=" form-control select " id="">

                                                            @forelse ($locations as $location)
                                                            <option {{ Session::has("dropoff_location") && !empty(Session::get("dropoff_location") && Session::get("dropoff_location")==$location->id ? "selected" : '') }} value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                            @empty
                                                            <option>No locations</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block m-0">
                                                    <label><i
                                                            class="bx bx-calendar"></i>{{ __('website.start_date') }}</label>
                                                </div>
                                                <div class="input-block-wrapp sidebar-form">
                                                    <div class="input-block  me-lg-2">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control datetimepicker start_date" name="start_date" placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}">

                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-calendar-days"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control timepicker"
                                                                    name="start_time"
                                                                    value="{{ Session::has('start_date') && !empty(Session::get('start_date')) ? Carbon::parse(Session::get('start_date'))->format('H:i') : Carbon::now()->format('H:i') }}"
                                                                    placeholder="11:00 AM">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block m-0"> <label>{{ __('website.end_date') }}</label>
                                                </div>
                                                <div class="input-block-wrapp sidebar-form">
                                                    <div class="input-block me-lg-2">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control datetimepicker end_date" name="end_date"
                                                                placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("d-m-Y") : Carbon::now()->addDay()->format("d-m-Y") }}" >

                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-calendar-days"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control timepicker" name="end_time"
                                                                value="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("H:i") : Carbon::now()->format("H:i") }}"

                                                                    placeholder="11:00 AM">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-last">
                                                <div class="input-block mb-0">
                                                    <div class="search-btn">
                                                        <a href="{{ url('booking-checkout') }}"
                                                            class="btn btn-primary check-available w-100">{{ __("book_now") }}</a>                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- <div class="review-sec share-car mt-0 mb-0">
                        <div class="review-header">
                            <h4>Share</h4>
                        </div>
                        <ul class="nav-social">
                            <li>
                                <a href="javascript:void(0)"><i
                                        class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <x-slider-cars />
            </div>

        </div>
    </section>
@endsection
