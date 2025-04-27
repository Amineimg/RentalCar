<?php $page = 'listing-list'; ?>
@extends('front.layout.mainlayout')
@section('content')
<div class="main-wrapper listing-page">
    @component('front.components.breadcrumb')

        @slot('title')
            {{ __("menu.parking")}}
        @endslot
        @slot('li_1')
            {{ __("menu.parking")}}

        @endslot
        @slot('li_1_url')
            {{ route('search_home')}}

 @endslot

    @endcomponent
    <div class="container">
        <form action="{{ route("search_home") }}" method="post">
            @csrf
            <div class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                <div class="pickup-items">
                    <label class="field-label">{{ __("website.pickup_location") }}</label>
                    <div class="category-oneadjust">
                        <select class="category" name="pickup_location">
                            @forelse ($locations as $location)
                                <option value="{{ $location->id }}"
                                    {{ session('pickup_location') == $location->id ? 'selected' : '' }}>
                                    {{ $location->contentload->location }}
                                </option>
                            @empty
                                <option>No locations</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">{{ __("website.start_date") }}</label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" name="start_date" placeholder="Check in"
                               data-min-date="{{ Carbon::now()->format('d-m-Y') }}"
                               value="{{ Session::has('start_date') && !empty(Session::get('start_date')) ? Carbon::parse(Session::get('start_date'))->format('d-m-Y') : Carbon::now()->format('d-m-Y') }}">
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">{{ __("website.end_date") }}</label>
                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" name="end_date" placeholder="Check out"
                               data-min-date="{{ Carbon::now()->addDay()->format('d-m-Y') }}"
                               value="{{ Session::has('end_date') && !empty(Session::get('end_date')) ? Carbon::parse(Session::get('end_date'))->format('d-m-Y') : Carbon::now()->addDay()->format('d-m-Y') }}">
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">{{ __("website.dropoff_location") }}</label>
                    <div class="category-oneadjust">
                        <select name="dropoff_location" class="category">
                            @forelse ($locations as $location)
                                <option value="{{ $location->id }}"
                                    {{ session('dropoff_location') == $location->id ? 'selected' : '' }}>
                                    {{ $location->contentload->location }}
                                </option>
                            @empty
                                <option>No locations</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label style-2">button</label>
                <button class="pickup-btn" type="submit">
                    {{ __("website.search") }}
                </button>
                </div>
            </div>
        </form>
    </div>
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="row g-4">
                @forelse ($cars as $car)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items h-100 d-flex flex-column">
                            <div class="car-image" style="height: 200px;overflow: hidden;border-radius: 12px;">
                                <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">
                                    <img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}" alt="img" style="width: 100%;height: 100%;object-fit: cover;display: block;">
                                </a>
                            </div>
                            <div class="car-content flex-grow-1 d-flex flex-column justify-content-between">
                                <div class="post-cat">
                                    {{$car->carmodel->alias}} Model
                                </div>

                                <h4>
                                    <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">
                                        {{ Helpers::getAttributeFromTranslate("name", Helpers::getDefaultLanguage('id'), 1, $car) }}
                                    </a>
                                </h4>
                                <h6>From {{ Helpers::moneyFormatDevise($car->d_11) }} <span>/{{ __("website.day") }}</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets_v2/img/car/seat.svg')}}" alt="img" class="me-1">
                                            {{ $car->passengers_number.' '.__("website.persons") }}
                                        </li>
                                        <li>
                                            <img src="{{asset('assets_v2/img/car/door.svg')}}" alt="img" class="me-1">
                                            {{ $car->doors_number }} Doors

                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets_v2/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            {{ $car->transmission=="automatic" ? __("website.transmission_auto") : __("website.transmission_manual")  }} </li>
                                        </li>
                                        <li>
                                            <img src="{{asset('assets_v2/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            {{ $car->carburant=="diesel" ? __("website.diesel") : __("website.petrol") }}
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}" class="theme-btn bg-color w-100 text-center">{{ __('website.book_now') }}  <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                @endforelse

            </div>
        </div>
    </section>

    <!-- Car Grid View -->


    <!-- /Car Grid View -->
</div>
@endsection
