<?php $page = 'booking-detail'; ?>
@extends('front.layout.mainlayout')


@section('content')
    @component('front.components.breadcrumb')
        @slot('title')
            {{ __("website.checkout") }}
        @endslot

        @slot('li_1')
            {{ __("website.checkout") }}
        @endslot

    @endcomponent
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="car-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-4" >
                        <div class="car-list-sidebar">
                                    <div class="booking-header mb-4 text-center">
                                        <h3 class="title">{{ __("website.car_details") }}</h3>

                                        <div class="car-image mt-3">
                                            <img src="{{ URL::asset('images/data/'.$car->front_image->image ??  '') }}" class="img-fluid rounded" alt="Car">
                                        </div>
                                    </div>

                                    <div class="text-center mb-4">
                                        <h4 class="mb-2 fs-4">
                                            {{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }}
                                        </h4>
                                        <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}" class="text-primary fs-6">
                                            {{ __('website.car_details') }}
                                        </a>
                                    </div>

                                    <div class="car-content-location mt-4">
                                        <div class="booking-header mb-3">
                                            <h3 class="title">{{ __("website.location") }}</h3>
                                        </div>

                                        <div class="mb-4">
                                            @php
                                                $pickup_location_city = Helpers::getAttributeFromTranslate("location", Helpers::getDefaultLanguage('id'), 1, $pickup_location)
                                            @endphp
                                            <h5 class="fs-4">{{ __("website.departure") }}: {{ Carbon::parse($start_date)->format("Y-m-d") }}</h5>
                                            <p class="fs-5">
                                                {{ $pickup_location_city }}<br>
                                                ({{ __("website.convoyage") }}: {{ $pickup_location_city }} {{ Helpers::moneyFormatDevise($pickup_location->tarif) }})
                                            </p>
                                        </div>

                                        <div class="mb-4">
                                            @php
                                                $dropoff_location_city = Helpers::getAttributeFromTranslate("location", Helpers::getDefaultLanguage('id'), 1, $dropoff_location)
                                            @endphp
                                            <h5 class="fs-4">{{ __("website.return") }}: {{ Carbon::parse($end_date)->format("Y-m-d") }}</h5>
                                            <p class="fs-5">
                                                {{ $dropoff_location_city }}<br>
                                                ({{ __("website.convoyage") }}: {{ $dropoff_location_city }} {{ Helpers::moneyFormatDevise($dropoff_location->tarif) }})
                                            </p>
                                        </div>

                                    </div>

                        </div>


                        <div class="col-lg-12">
                            <table class="table resume">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    if ($nombreDeJours == 1) {
                                        $price = $car->d_1;
                                    } elseif ($nombreDeJours >= 2 && $nombreDeJours <= 4) {
                                        $price = $car->price_per_night * $nombreDeJours;
                                    } elseif ($nombreDeJours >= 5 && $nombreDeJours <= 10) {
                                        $price = $car->d_10 * $nombreDeJours;
                                    } else {
                                        $price = $car->d_11 * $nombreDeJours;
                                    }
                                    @endphp
                                    <tr>
                                        <td scope="row">{{ __("website.location") }} {{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }} {{ __("website.for") }} {{ $nombreDeJours }} {{ __("website.days") }}</td>
                                        <td scope="row">{{ Helpers::moneyFormatDevise($price) }}</td>
                                    </tr>

                                    <tr class="services">
                                    </tr>
                                    <tr class="franchise">

                                    </tr>
                                    <tr class="bank_fees">

                                    </tr>
                                    <tr class="booking_total">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="total-rate-card">
                            <div class="vehicle-total-price">
                                <h5 >{{ __("website.booking_total") }}</h5>
                                <span class="total"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="car-booking-items">
                            <div class="booking-sidebar-head d-flex justify-content-between align-items-center">
                                <h5 class="text-dark-blue">{{ __("website.accessories") }}</h5>
                            </div>
                            <div class="booking-sidebar-body">
                                <div class="booking-vehicle-rates">
                                    <ul class="mt-0">

                                      @forelse ($services as $service)
                                        <li>
                                            <div>
                                                @php
                                                    $service_name= Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$service)
                                                @endphp
                                                <h6>{{ $service_name }}</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($service->price) }}</span>
                                            <div>
                                                <select class=" form-control select service_select" name="services[{{ $service->id }}]" >
                                                   @for ($i = 0; $i < $service->max_number; $i++)
                                                        <option  data-price='{{ $service->price }}' data-name='{{ $service_name }}' value="{{ $i }}">{{ $i }}</option>
                                                   @endfor
                                                </select>
                                            </div>
                                        </li>
                                      @empty
                                      @endforelse
                                        <li class="total-rate">
                                            <h6>Total</h6>
                                            <h5 class="total-service"></h5>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="car-booking-items">
                            <div class="booking-sidebar-head d-flex justify-content-between align-items-center" role="alert">

                                <h5 class="text-dark-blue">{{ __("website.franchise") }}</h5>
                            </div>
                            <div class="booking-sidebar-body">
                                <div class="booking-vehicle-rates">
                                    <ul class="mt-0">
                                        <li>
                                            <div>
                                                <h6>{{ __('website.franchise_required') }}</h6>
                                            </div>
                                            <span>{{ Helpers::moneyFormatDevise($car->franchise) }}</span>
                                            <div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" data-value='{{ $car->franchise }}' value="yes" type="checkbox" role="switch" id="franchise"  name="franchise" >
                                                  </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="car-list-sidebar">
                            <form action="{{ route('book_car') }}" method="post" class="contact-form-items">

                                <div class="booking-header">
                                    <h3 class="title">{{ __("website.booking_info") }}</h3>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.first_name") }}<span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control" placeholder="{{ __("website.first_name") }}" name="first_name" required>
                                                    {{-- @dd($errors)    --}}
                                                        @error('first_name')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.last_name") }} <span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="{{ __("website.last_name") }}" name="last_name" required>
                                            @if ($errors->has('last_name'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('last_name') }}
                                                </em>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.email") }}<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" placeholder="{{ __("website.email") }}" name="email" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.phone") }} <span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control"
                                            placeholder="{{ __("website.phone") }}" name="phone" required>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">
                                                    {{ $errors->first('phone') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.flight_number") }}</label>
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __("website.flight_number") }}" name="flight_number" required>
                                                    @if ($errors->has('flight_number'))
                                                        <em class="invalid-feedback">
                                                            {{ $errors->first('flight_number') }}
                                                        </em>
                                                    @endif


                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.choose_paiement_mode") }}<span
                                                class="text-danger"> *</span></label>
                                        <select class=" form-control select payment_method" name="payment_method" id="" required>
                                            @forelse (Constant::getPaymentTypes() as $item)
                                                <option value="{{ $item["value"] }}">{{ $item["name"] }}</option>
                                            @empty

                                            @endforelse
                                        </select>
                                        @if ($errors->has('payment_method'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('payment_method') }}
                                            </em>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="form-label">{{ __("website.booking_description") }}</label>
                                                <textarea class="form-control" placeholder="{{ __("website.booking_description") }}" rows="5" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="car_id" value="{{ isset($car) ? $car->id : null }}">


                                    <div class="input-block m-0">
                                        <label class="custom_check d-inline-flex location-check m-0">
                                            <input type="checkbox" name="general_condition" id="general_condition" required>
                                            <span>{{ __("website.read_condition") }}</span> <span class="text-danger"> *</span>
                                        </label>
                                    </div>
                                    <div class="booking-info-btns d-flex justify-content-end">
                                        <button type="submit" class="theme-btn">{{ __("website.book_now") }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

<x-slider-cars />

@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const days = parseFloat("{{ $nombreDeJours }}");
        const pickupLocation = @json($pickup_location);
        const dropoffLocation = @json($dropoff_location);
        const priceOfDays = parseFloat(@json($price));
        let totalAllServices = 0;
        let franchise = 0;

        const formatMoney = (amount) => {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD'
            }).format(amount);
        };

        const calculateServicesPrice = () => {
            const serviceRows = document.querySelectorAll('.service_select');
            const servicesContainer = document.querySelector('.resume tbody');
            totalAllServices = 0;

            servicesContainer.querySelectorAll('.services').forEach(row => row.remove());

            serviceRows.forEach(select => {
                const quantity = parseInt(select.value);
                if (quantity > 0) {
                    const selectedOption = select.options[select.selectedIndex];
                    const name = selectedOption.dataset.name;
                    const price = parseFloat(selectedOption.dataset.price);
                    const totalServicePrice = price * quantity;
                    totalAllServices += totalServicePrice;

                    const row = `
                        <tr class="services">
                            <td>${name} x ${quantity}</td>
                            <td>${formatMoney(totalServicePrice)}</td>
                        </tr>
                    `;
                    servicesContainer.insertAdjacentHTML('beforeend', row);
                }
            });

            document.querySelector('.total-service').textContent = formatMoney(totalAllServices);
        };

        const calculateFranchise = () => {
            const franchiseCheckbox = document.querySelector('#franchise');
            const servicesContainer = document.querySelector('.resume tbody');

            servicesContainer.querySelectorAll('.franchise').forEach(row => row.remove());

            franchise = franchiseCheckbox.checked ? parseFloat(franchiseCheckbox.dataset.value) * days : 0;

            if (franchise > 0) {
                const row = `
                    <tr class="franchise">
                        <td>{{ __("website.franchise") }} (x${days} {{ __("website.days") }})</td>
                        <td>${formatMoney(franchise)}</td>
                    </tr>
                `;
                servicesContainer.insertAdjacentHTML('beforeend', row);
            }
        };

        const calculateTotal = () => {
            calculateServicesPrice();
            calculateFranchise();

            const servicesContainer = document.querySelector('.resume tbody');
            let total = priceOfDays + pickupLocation.tarif + dropoffLocation.tarif + totalAllServices + franchise;

            const paymentMethod = document.querySelector('.payment_method').value;
            if (paymentMethod === "{{ Constant::BANK_PAYMENT }}") {
                const bankFees = total * 0.03;
                total += bankFees;

                servicesContainer.querySelectorAll('.bank_fees').forEach(row => row.remove());

                const bankFeesRow = `
                    <tr class="bank_fees">
                        <td>{{ __("website.bank_fees") }}</td>
                        <td>${formatMoney(bankFees)}</td>
                    </tr>
                `;
                servicesContainer.insertAdjacentHTML('beforeend', bankFeesRow);
            }

            servicesContainer.querySelectorAll('.booking_total').forEach(row => row.remove());

            const totalRow = `
                <tr class="booking_total">
                    <td><strong>{{ __("website.booking_total") }}</strong></td>
                    <td>${formatMoney(total)}</td>
                </tr>
            `;
            servicesContainer.insertAdjacentHTML('beforeend', totalRow);

            document.querySelector('.total').textContent = formatMoney(total);
        };

        document.querySelectorAll('.payment_method, .service_select, #franchise').forEach(element => {
            element.addEventListener('change', calculateTotal);
        });

        calculateTotal();


    });
</script>
@endsection
