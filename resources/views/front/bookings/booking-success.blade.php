<?php $page = 'booking-success'; ?>
@extends('front.layout.mainlayout')
@section('content')
    @component('front.components.breadcrumb')
        @slot('title')
            Checkout
        @endslot

        @slot('li_1')
            Checkout
        @endslot
        @slot('li_2')
            Checkout
        @endslot
    @endcomponent
    <!-- Booking Success -->
    <div class="booking-new-module">
        <div class="container">
            <div class="booking-card">
                <div class="success-book">
                    <span class="success-icon">
                        <i class="fa-solid fa-check-double"></i>
                    </span>
                    <h5>{{ __("website.booking_thanks") }}</h5>
                    <h5 class="order-no">{{ __("website.booking_number") }} : <span>#{{ $booking->id }}</span></h5>
                </div>
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="{{ URL::asset('images/data/'.$car->front_image->image ??  '') }}" alt="img">
                        </div>
                        <div class="book-info">
                            <h6>{{  Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }}</h6>
                            <p> {{ __("website.brand") }} : {{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$car->carmodel->carmake) }}</p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>{{ __("website.booking_total") }}</p>
                        <h6>{{ Helpers::moneyFormatDevise($booking->total) }}</h6>

                    </div>
                </div>
                <div class="row">

                    <!-- Car Pricing -->

                    <!-- /Car Pricing -->

                    <!-- Location & Time -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>{{ __("website.location").' & '.__("website.time") }}</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        @php
                                            $pickup_location_city =  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$pickup_location)
                                        @endphp
                                        <h6>{{ __("website.departure")}} : {{ Carbon::parse($booking->start_date)->format("Y-m-d H:i") }}</h6>

                                        <p>{{ $pickup_location_city }} ( {{ __("website.convoyage").' : '.$pickup_location_city}} {{ Helpers::moneyFormatDevise($pickup_location->tarif)}} )</p>
                                        <p></p>
                                    </li>
                                    <li>
                                        @php
                                            $dropoff_location_city =  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$dropoff_location)
                                        @endphp
                                        <h6>{{ __("website.return")}} : {{ Carbon::parse($booking->end_date)->format("Y-m-d H:i") }}</h6>

                                        <p>{{ $dropoff_location_city }} ( {{ __("website.convoyage").' : '.$dropoff_location_city}} {{ Helpers::moneyFormatDevise($dropoff_location->tarif)}} )</p>
                                        <p></p>
                                    </li>
                                </ul>
                            </div>
                                <div class="book-head">
                                    <h6>{{ __("website.resume") }}</h6>
                                </div>
                                <div class="book-body">
                                    <ul class="pricing-lists">
                                        @php
                                            $totalWithoutServices = $price + $pickup_location->tarif + $dropoff_location->tarif;
                                        @endphp
                                        <li>
                                            <div>
                                                <h6>{{ __("website.location") }} {{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }} {{ __("website.for") }} {{ $nombreDeJours }} {{ __("website.days") }}</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($price) }}</span>

                                        </li>
                                        @if ($pickup_location->tarif>0)
                                        <li>
                                            <div>
                                                <h6>{{ __("website.convoyage").' : '.$pickup_location_city}} ( {{   __("website.departure") }} )</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($pickup_location->tarif) }}</span>

                                        </li>
                                        @endif
                                        @if ($dropoff_location->tarif>0)
                                        <li>
                                            <div>
                                                <h6>{{ __("website.convoyage").' : '.$dropoff_location_city}} ( {{   __("website.return") }} )</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($dropoff_location->tarif) }}</span>

                                        </li>
                                        @endif
                                        <li class="total">
                                            <p>{{   __("website.total") }}</p>
                                            <span>{{ Helpers::moneyFormatDevise($totalWithoutServices) }}</span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Add-ons Pricing</h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    @php
                                        $totalService = 0;
                                        $totalServices = 0;
                                    @endphp
                                    @forelse ($services as $key => $service)
                                        @if (isset($service['count']) && $service['count']>0)
                                        <li>
                                            <div>
                                                <h6>{{ $service['name'] }}</h6>
                                            </div>
                                            @php
                                                $totalService = $service['price'] * $service['count'];
                                                $totalServices+=$totalService;
                                            @endphp
                                            <span>{{ Helpers::moneyFormatDevise($service['price']) }}</span>
                                            <span>{{ $service['count'] }} Pieces</span>

                                        </li>
                                        @endif

                                    @empty

                                    @endforelse
                                    <li class="total">
                                        <p>Subtotal</p>
                                        <span>{{ Helpers::moneyFormatDevise($totalServices) }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /Location & Time -->

                    <!-- Add-ons Pricing -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>{{ __("website.accessories_pricing") }} </h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    @php
                                        $totalService = 0;
                                        $totalServices = 0;
                                    @endphp
                                    @forelse ($services as $key => $service)
                                        @if (isset($service['count']) && $service['count']>0)
                                        <li>
                                            <div>
                                                <h6>{{ $service['name'] }}</h6>
                                            </div>
                                            @php
                                                $totalService = $service['price'] * $service['count'];
                                                $totalServices+=$totalService;
                                            @endphp
                                            <span>{{ Helpers::moneyFormatDevise($service['price']) }}</span>
                                            <span>{{ $service['count'] }} {{ __("website.pieces") }}</span>

                                        </li>
                                        @endif

                                    @empty

                                    @endforelse
                                    <li class="total">
                                        <p>{{ __("website.total") }}</p>
                                        <span>{{ Helpers::moneyFormatDevise($totalServices) }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Add-ons Pricing -->

                    <!-- Driver Details -->

                    <!-- /Driver Details -->

                    <!-- Billing Information -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>{{ __("website.client_info") }}</h6>
                            </div>
                            <div class="book-body">
                                <ul class="billing-lists">
                                    <li> {{ __("website.full_name") }}  : {{ $client->name }}</li>
                                    <li>{{ __("website.email") }} : {{ $client->email }}</li>
                                    <li>{{ __("website.phone") }} : {{ $client->phone }}</li>
                                    <li>{{ __("website.flight_number") }} : {{ $client->flight_number }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Information -->

                    <!-- Payment  Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>{{ __("website.payment_details") }}</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>{{ __("website.paiement_mode") }}</h6>
                                        <p>{{ $booking->payment_method == Constant::BANK_PAYMENT ? __("website.by_bank_card") :__("website.cache") }}</p>
                                    </li>
                                    {{-- <li>
                                        <h6>Transaction ID</h6>
                                        <p><span>#13245454455454</span></p>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Payment  Details -->

                    <!-- Additional Information -->
                    {{-- <div class="col-lg-12">
                        <div class="book-card mb-0">
                            <div class="book-head">
                                <h6>Additional Information</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <p>Rental companies typically require customers to return the vehicle with a full
                                            tank of fuel. If the vehicle is returned with less than a full tank, customers
                                            may be charged for refueling the vehicle at a premium rate, often higher than
                                            local fuel prices.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /Additional Information -->

                </div>
            </div>
            <div class="print-btn text-center">
                <a href="{{ route('home') }}" class="btn btn-secondary">{{ __("website.back_to_home") }}</a>
            </div>
        </div>

    </div>
    <!-- /Booking Success -->
    @component('front.components.scrolltotop')
    @endcomponent
@endsection
