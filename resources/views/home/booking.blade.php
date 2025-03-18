@extends('layouts.home_layout', ['static_data', $static_data])
<?php $max_price = get_setting('price_range_max', 'car'); ?>
@section('title')
    <title>{{ $static_data['strings']['search_results'] }}</title>
    <meta charset="UTF-8">
    <meta name="title" content="{{ $static_data['strings']['booking_meta_title'] }}">
    <meta name="description" content="{{ $static_data['strings']['booking_meta_description'] }}">
    <meta name="author" content="JacarandaCar">
    <meta car="og:title" content="{{ $static_data['strings']['booking_meta_title'] }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
@endsection
@section('bg')
    {{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}
@endsection
@section('content')
    @if (false)
        <div class="row header-tabs">
            <div class="col-sm-12">
                <ul class="nav nav-tabs" id="header-tabs">
                    @if (isset($cars) && count($cars))
                        <li class="nav-item"><a class="nav-link active" href="#accordion-cars" data-toggle="tab"
                                aria-expanded="true"><i class="fa fa-building-o"></i><span>
                                    @if (count($cars) == 1)
                                        {{ '1 ' . $static_data['strings']['villa'] }}
                                    @else
                                        {{ count($cars) . ' ' . $static_data['strings']['villas'] }}
                                    @endif
                                </span></a></li>
                    @endif
                </ul>
            </div>
        </div>
    @endif
    <div class="float-price"><span class="total-price">{{ $price + $pickup_location->tarif + $dropoff_location->tarif }}</span> &euro;</div>
    <div class="row marginalized">
        <div class="col-md-12 order-md-last order-first">
            <div class="tab-content">
                <h4 class="panel-title"><i
                        class="fa fa-fw fa-car"></i><span>{{ $static_data['strings']['booking'] }}</span></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="filterbox">
                            <h5>{{ $static_data['strings']['booking_info'] }}</h5>
                            <p><i class="fa fa-fw fa-car"></i>{{ $car->contentload->name }}</p>
                            @if ($pickup_location->tarif == 0)
                                <p><strong>{{ $static_data['strings']['pickup'] }} :
                                    </strong>{{ $pickup_loc->location }} <br>
                                @else
                                <p><strong>{{ $static_data['strings']['pickup'] }} :
                                    </strong>{{ $pickup_loc->location }}
                                    ({{ $static_data['strings']['conveying'] }} :
                                    {{ $pickup_loc->location }} {{ $pickup_location->tarif }}
                                    &euro;)<br>
                            @endif
                            <i class="fa fa-fw fa-calendar"></i>{{ session('start_date') }}<i
                                class="fa fa-fw fa-clock-o"></i>{{ session('start_time') }}<p>
                                @if ($dropoff_location->tarif == 0)
                                    <p><strong>{{ $static_data['strings']['dropoff'] }} :
                                        </strong>{{ $dropoff_loc->location }}<br>
                                    @else
                                    <p><strong>{{ $static_data['strings']['dropoff'] }} : </strong>
                                        {{ $dropoff_loc->location }}
                                        ({{ $static_data['strings']['conveying'] }} :
                                        {{ $dropoff_loc->location }} {{ $dropoff_location->tarif }}
                                        &euro;)<br>
                                @endif
                                <i class="fa fa-fw fa-calendar"></i>{{ session('end_date') }}<i
                                    class="fa fa-fw fa-clock-o"></i>{{ session('end_time') }}
                            </p>
                            {{-- <p>
                                <ul class="srv-list"></ul>
                            </p>
                            <p><strong>Total : </strong><span class="total-price">{{$price}}</span> &euro;</p> --}}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        {!! Form::open(['method' => 'post', 'url' => route('book_car'), 'id' => 'book_now']) !!}
                        <input type="hidden" name="price_base" value="{{ $price + $pickup_location->tarif + $dropoff_location->tarif }}">
                        <input type="hidden" name="start_date"
                            value="{{ session('start_date') . ' ' . session('start_time') }}">
                        <input type="hidden" name="end_date" value="{{ session('end_date') . ' ' . session('end_time') }}">

                        {{--<input type="hidden" name="dropoff_location" value="{{ $dropoff_location->contentDefault->location }}">--}}
                        <input type="hidden" name="dropoff_location" value="{{ $dropoff_loc->location }}">
                        {{--<input type="hidden" name="pickup_location" value="{{ $pickup_location->contentDefault->location }}">--}}
                        <input type="hidden" name="pickup_location" value="{{ $pickup_loc->location }}">
                        <input type="hidden" name="dropoff_tarif" value="{{ $dropoff_location->tarif }}">
                        <input type="hidden" name="pickup_tarif" value="{{ $pickup_location->tarif }}">
                        <ul class="car-srvc">
                            @if ($car_services)
                                @foreach ($car_services as $car_service)
                                    <li>
                                        <div class="row">
                                            <div class="col-3"><img src="{{ asset($car_service->image) }}" alt="{{ $car_service->service[$current_language] }}"
                                                    width="80" /></div>
                                            <div class="col-3">{{ $car_service->service[$current_language] }}</div>
                                            <div class="col-3">{{ currency($car_service->price, 'EUR', 'EUR') }}</div>
                                            <div class="col-3 s_qty input-style mbot0">
                                                <select name="services_data[{{ $car_service->id }}]"
                                                    data-id="{{ $car_service->id }}"
                                                    data-price="{{ $car_service->price }}"
                                                    data-service="{{ $car_service->service[$current_language] }}">
                                                    @for ($i = 0; $i <= $car_service->max_number; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                            {{-- <li class="srv-franchise">
                                <div class="row">
                                    <div class="col-6">
                                        {{$static_data['strings']['full_fuel']}}
                                    </div>
                                    <div class="col-3">{{currency($car->full_fuel, 'EUR', 'EUR')}}</div>
                                    <input type="hidden" id="full_fuel_price" value="{{$car->full_fuel}}">
                                    <input type="hidden" name="full_fuel" id="full_fuel_input" value="0">
                                    <div class="col-3">
                                        <div class="switch text-center">
                                            <label>
                                                {{$static_data['strings']['no']}}{{ Form::checkbox('', 0, false, ['id' => 'full_fuel', 'class' => 'form-control'])}}<span class="lever"></span>{{$static_data['strings']['yes']}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="srv-franchise">
                                <div class="row">
                                    <div class="col-6">
                                        {{ $static_data['strings']['pay_deductible'] }}
                                    </div>
                                    <div class="col-3">{{ currency($car->franchise, 'EUR', 'EUR') }}</div>
                                    <input type="hidden" id="franchise_price" value="{{ $car->franchise }}">
                                    <input type="hidden" name="franchise" id="franchise_input" value="0">
                                    <div class="col-3">
                                        <div class="switch text-center">
                                            <label>
                                                {{ $static_data['strings']['no'] }}{{ Form::checkbox('', 0, false, ['id' => 'franchise', 'class' => 'form-control']) }}<span
                                                    class="lever"></span>{{ $static_data['strings']['yes'] }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="booking-form input-style mbot20" style="max-width: 100% !important;">
                            @csrf
                            <h3 class="section-type text-centered mbot5">{{ $static_data['strings']['book_now'] }}</h3>
                            <p class="field-info text-centered mbot5">{{ $static_data['strings']['fill_fields_to_book'] }}
                            </p>
                            <div class="form-group not-after">
                                <div class="input-group">
                                    <span class="fa fa-user input-group-addon"></span>
                                    <input type="text"
                                        value="@if ($static_data['user']) {{ $static_data['user']->info->first_name }} @endif"
                                        name="name" required class="form-control slider-field"
                                        placeholder="{{ $static_data['strings']['your_name'] }}">
                                </div>
                            </div>
                            <div class="form-group not-after">
                                <div class="input-group">
                                    <span class="fa fa-envelope input-group-addon"></span>
                                    <input type="email"
                                        value="@if ($static_data['user']) {{ $static_data['user']->email }} @endif"
                                        name="email" class="form-control slider-field" required
                                        placeholder="{{ $static_data['strings']['your_email'] }}">
                                </div>
                            </div>
                            <div class="form-group not-after">
                                <div class="input-group">
                                    <span class="fa fa-phone input-group-addon"></span>
                                    <input type="text" value="" required name="phone"
                                        class="form-control slider-field"
                                        placeholder="{{ $static_data['strings']['your_phone'] }}">
                                </div>
                            </div>
                            <div class="form-group not-after">
                                <div class="input-group">
                                    <span class="fa fa-plane input-group-addon"></span>
                                    <input type="text" value="" name="flight_number"
                                        class="form-control slider-field"
                                        placeholder="{{ $static_data['strings']['flight_number'] }}">
                                </div>
                            </div>
                            <input type="hidden" name="car_id" value="{{ $car->id }}" class="hidden car-field">
                            <input type="hidden" value="{{ Session::get('currency') }}" class="currency_code"
                                name="currency_code" />
                            <div class="form-group not-after booking-data">
                                <p class="wrong-error"></p>
                            </div>

                            <div class="mb-2">
                                <input type="hidden" value="0" name="payment_method">
                                {{ $static_data['strings']['choose_payment_method'] }}
                            </div>
                            <div class="custom-control custom-radio custom-control-inline ml-2">
                                <input type="radio" class="custom-control-input" id="cash_payment"
                                    name="payment_method_check" checked value="{{ $static_data['strings']['cash'] }}">
                                <label class="custom-control-label"
                                    for="cash_payment">{{ $static_data['strings']['cash'] }}</label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline ml-2 form-group">
                                <input type="radio" class="custom-control-input" id="bank_card_payment"
                                    name="payment_method_check" value="{{ $static_data['strings']['bank_card'] }}">
                                <label class="custom-control-label"
                                    for="bank_card_payment">{{ $static_data['strings']['bank_card'] . ' (+3%)' }}</label>
                            </div>

                            <div class="booking-total">
                                <div class="table-responsive">
                                    <input type="hidden" id="nights_number" name="nights_number"
                                        value="{{ $nights }}">
                                    <input type="hidden" class="total-price" name="total"
                                        value="{{ $price + $pickup_location->tarif + $dropoff_location->tarif }}">
                                    <p>
                                    <ul class="srv-list"></ul>
                                    </p>
                                    <table class="table table-bordered">
                                        <?php //dd($price);
                                        ?>
                                        <tr>
                                            <td><strong>{{ $static_data['strings']['location'] }}
                                                    {{ $car->alias }} {{$static_data['strings']['for'] . " " . $nights . " " . $static_data['strings']['days'] }}</strong></td>
                                            <td><strong> {{ $price }} €</strong></td>
                                        </tr>
                                        @if ($pickup_location->tarif != 0 && $dropoff_location->tarif != 0)
                                            <tr>
                                                <td><strong>{{ $static_data['strings']['conveying'] }}
                                                        {{ $pickup_loc->location }} (
                                                        {{ $static_data['strings']['pickup'] }} ) </strong></td>
                                                <td><strong>{{ $pickup_location->tarif }} &euro;</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>{{ $static_data['strings']['conveying'] }}
                                                        {{ $dropoff_loc->location }} (
                                                        {{ $static_data['strings']['dropoff'] }} ) </strong></td>
                                                <td><strong>{{ $dropoff_location->tarif }} &euro;</strong></td>
                                            </tr>
                                        @elseif ($pickup_location->tarif == 0 && $dropoff_location->tarif != 0)
                                            <tr>
                                                <td><strong>{{ $static_data['strings']['conveying'] }}
                                                        {{ $dropoff_loc->location }} (
                                                        {{ $static_data['strings']['dropoff'] }} ) </strong></td>
                                                <td><strong>{{ $dropoff_location->tarif }} &euro;</strong></td>
                                            </tr>
                                        @elseif ($dropoff_location->tarif == 0 && $pickup_location->tarif != 0)
                                            <tr>
                                                <td><strong>{{ $static_data['strings']['conveying'] }}
                                                        {{ $pickup_loc->location }} (
                                                        {{ $static_data['strings']['pickup'] }} ) </strong></td>
                                                <td><strong>{{ $pickup_location->tarif }} &euro;</strong></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td><strong>{{ $static_data['strings']['booking_total'] }}</strong></td>
                                            <td> <span class="total-nights"><strong class="total-price">{{ $price + $pickup_location->tarif + $dropoff_location->tarif }}</strong></span><strong>
                                                    &euro;</strong></td>
                                        </tr>
                                    </table>

                                </div>
                                <button type="submit"
                                    class="primary-button pay-now">{{ $static_data['strings']['book_now'] }}</button>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script type="text/javascript">
        $(document).ready(function() {
            let base_price = parseInt($('input[name="price_base"]').val())
            $('.s_qty select').change(function(event) {
                caluclate_total_price();
            });

            $('#full_fuel').change(function() {
                caluclate_total_price();
            })
            $('#franchise').change(function() {
                caluclate_total_price();
            })

            function caluclate_total_price() {
                var s_id = 0;
                var s_price = 0;
                var total_price = base_price;
                $('#full_fuel_input').val(0);
                $('#franchise_input').val(0);
                $('.srv-list').html('');
                $('.s_qty select').each(function(index) {
                    if ($(this).val() > 0) {
                        s_id = $(this).data('id');
                        s_price = $(this).data('price');
                        $('.srv-list').append('<strong><li>' + $(this).val() + ' ' + $(this).data(
                            'service') + ' ' + s_price + ' € </li></strong>');
                        total_price += (s_price * parseInt($(this).val()));
                    }
                });
                if ($('#full_fuel').prop('checked')) {
                    total_price += parseInt($('#full_fuel_price').val());
                    $('#full_fuel_input').val({{ $car->full_fuel }});
                }
                if ($('#franchise').prop('checked')) {
                    total_price += parseInt($('#franchise_price').val()) * parseInt($('#nights_number').val());
                    $('#franchise_input').val({{ $car->franchise }});
                }
                if ($('#bank_card_payment').prop('checked')) {
                    total_price += total_price * 3 / 100;
                    $('input[name=payment_method]').val(1);
                } else {
                    $('input[name=payment_method]').val(0);
                }
                $('.total-price').html(total_price);
                $('input[name=total]').val(total_price);
            }

            $('#bank_card_payment').on('change', function() {
                caluclate_total_price();
            })
            $('#cash_payment').on('change', function() {
                caluclate_total_price();
            });
        });
    </script>
@endsection
