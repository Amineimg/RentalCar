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
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="car-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="car-details-items">
                            <div class="car-image">
                                <img src="{{ asset('images/data/' . ($car->front_image->image ?? 'default.jpg')) }}" alt="{{ $car->car_model }}">
                            </div>
                            <div class="car-content">


                                <h3>{{ Helpers::getAttributeFromTranslate('name', Helpers::getDefaultLanguage('id'), 1, $car->carmodel->carmake) }}</h3>
                                <h6>From {{ Helpers::moneyFormatDevise($car->d_11) }} <span>/ Day</span></h6>
                                <p class="mt-4 mb-4">
                                    To deliver on the promise of technology and human We help our clients become sions of themselves. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem ipsum has been the industry’s standard dummy text ever since the 1500s.
                                </p>
                                <div class="icon-details-area">
                                    <h4>{{ __('website.specifications') }}</h4>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{ asset('assets_v2/img/car/icon/07.png') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>body:</h6>
                                                <p>{{ $car->body_type ?? 'Sedan' }}</p>
                                            </div>
                                        </div>

                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{ asset('assets_v2/img/car/icon/07.png') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Year:</h6>
                                                <p>{{ $car->year ?? '2024' }}</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{ asset('assets_v2/img/car/seat.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>Passengers:</h6>
                                                <p>{{ $car->passengers_number }} Seats</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="icon-details-main-items">
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{ asset('assets_v2/img/car/automatic.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>{{ __('website.transmission') }}:</h6>
                                                <p>{{ $car->transmission == 'automatic' ? __('website.transmission_auto') : __('website.transmission_manual') }}</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{asset('assets_v2/img/car/door.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>{{ __('website.doors') }}:</h6>
                                                <p> {{ $car->doors }} {{ __('website.doors') }}</p>
                                            </div>
                                        </div>
                                        <div class="icon-items">
                                            <div class="icon">
                                                <img src="{{ asset('assets_v2/img/car/petrol.svg') }}" alt="img">
                                            </div>
                                            <div class="content">
                                                <h6>{{ __('website.fuel_type') }}:</h6>
                                                <p>{{ $car->carburant == 'diesel' ? __('website.diesel') : __('website.petrol') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-table-area">
                                    <h6>Table Price <span>( Promotional rates )</span></h6>
                                    <div class="price-table-items section-bg">
                                        <p>Prix 1 ( 1 Jour )</p>
                                        <p>{{Helpers::moneyFormatDevise ($car->d_1)}} </p>
                                    </div>
                                    <div class="price-table-items">
                                        <p>Prix 2 ( 2 à 4 Jours )</p>
                                        <p>{{Helpers::moneyFormatDevise ($car->price_per_night)}} </p>
                                    </div>
                                    <div class="price-table-items section-bg">
                                        <p>Prix 3 ( 5 à 10 Jours )</p>
                                        <p>{{Helpers::moneyFormatDevise ($car->d_10)}} </p>
                                    </div>
                                    <div class="price-table-items">
                                        <p>Prix 4 ( Plus de 11 Jours )</p>
                                        <p>{{Helpers::moneyFormatDevise ($car->d_11)}} </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="car-list-sidebar">
                            <h4 class="title">{{ __('website.check_availability') }}</h4>
                            <form action="{{ route('booking_details',['car_alias'=>$car->alias]) }}" id="contact-form2" method="POST" class="contact-form-items">
                                @csrf
                                <div class="row g-4">
                                    <!-- Pickup Location -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">{{ __('website.pickup_location') }}</label>
                                            <div class="category-oneadjust">
                                                <select class="form-control select" name="pickup_location">
                                                    @forelse ($locations as $location)
                                                        <option
                                                            {{ Session::has('pickup_location') && !empty(Session::get('pickup_location')) && Session::get('pickup_location') == $location->id ? 'selected' : '' }}
                                                            value="{{ $location->id }}">
                                                            {{ $location->contentload->location }}
                                                        </option>
                                                    @empty
                                                        <option>No locations</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">{{ __('website.start_date') }}</label>
                                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" name="start_date"
                                                    value="{{ Session::has('start_date') && !empty(Session::get('start_date')) ? Carbon::parse(Session::get('start_date'))->format('d-m-Y') : '' }}" readonly>
                                                <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">{{ __('website.end_date') }}</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check out" name="end_date"
                                                    value="{{ Session::has('end_date') && !empty(Session::get('end_date')) ? Carbon::parse(Session::get('end_date'))->format('d-m-Y') : '' }}" readonly>
                                                <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dropoff Location -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">{{ __('website.dropoff_location') }}</label>
                                            <div class="category-oneadjust">
                                                <select class="form-control select" name="dropoff_location">
                                                    @forelse ($locations as $location)
                                                        <option
                                                            {{ Session::has('dropoff_location') && !empty(Session::get('dropoff_location')) && Session::get('dropoff_location') == $location->id ? 'selected' : '' }}
                                                            value="{{ $location->id }}">
                                                            {{ $location->contentload->location }}
                                                        </option>
                                                    @empty
                                                        <option>No locations</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <button type="submit" class="theme-btn">{{ __("website.book_now") }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slider-cars />
    </section>


@endsection
