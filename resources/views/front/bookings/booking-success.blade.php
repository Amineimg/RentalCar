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
                    <h5>Thank you! Your Order has been Recieved</h5>
                    <h5 class="order-no">Order Number : <span>#{{ $booking->id }}</span></h5>
                </div>
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="{{ URL::asset('images/data/'.$car->front_image->image ??  '') }}" alt="img">
                        </div>
                        <div class="book-info">
                            <h6>{{  Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }}</h6>
                            <p> Marque : {{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$car->carmodel->carmake) }}</p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>Total Amount</p>
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
                                <h6>Location & Time</h6>
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
                                    <h6>Resume</h6>
                                </div>
                                <div class="book-body">
                                    <ul class="pricing-lists">
                                        @php
                                            $totalWithoutServices = $price + $pickup_location->tarif + $dropoff_location->tarif;
                                        @endphp
                                        <li>
                                            <div>
                                                <h6>Location {{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }} pour {{ $nombreDeJours }} Jours</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($price) }}</span>

                                        </li>
                                        @if ($pickup_location->tarif>0)
                                        <li>
                                            <div>
                                                <h6>{{ __("website.convoyage").' : '.$pickup_location_city}} ( Départ )</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($pickup_location->tarif) }}</span>

                                        </li>
                                        @endif
                                        @if ($dropoff_location->tarif>0)
                                        <li>
                                            <div>
                                                <h6>{{ __("website.convoyage").' : '.$dropoff_location_city}} ( Retour )</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($dropoff_location->tarif) }}</span>

                                        </li>
                                        @endif
                                        <li class="total">
                                            <p>Subtotal</p>
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
                    </div>
                    <!-- /Add-ons Pricing -->

                    <!-- Driver Details -->

                    <!-- /Driver Details -->

                    <!-- Billing Information -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Billing Information</h6>
                            </div>
                            <div class="book-body">
                                <ul class="billing-lists">
                                    <li>Full name Name : {{ $client->name }}</li>
                                    <li>Email : {{ $client->email }}</li>
                                    <li>Phone : {{ $client->phone }}</li>
                                    <li>Flight Number : {{ $client->flight_number }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Information -->

                    <!-- Payment  Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>Payment Details</h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>Payment Mode</h6>
                                        <p>{{ $booking->payment_method == Constant::BANK_PAYMENT ? 'Par carte bancaire' : 'Cache' }}</p>
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
                <a href="javascript:void(0);" class="btn btn-secondary">Print Order</a>
            </div>
        </div>

    </div>
    <!-- /Booking Success -->
    @component('front.components.scrolltotop')
    @endcomponent
@endsection
