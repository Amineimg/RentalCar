{!! Form::open([
    'method' => 'post',
    'url' => route('search_home'),
    'id' => 'search-form',
    'style' => 'margin-top: 30px;',
]) !!}

<?php

    $pickup_location_value = "";
    $pickup_loc = $static_data['locations'][0]->id;
    $dropoff_location_value = "";
    $dropoff_loc = $static_data['locations'][0]->id;
    $start_date = $end_date = "";
    $start_time_value = $end_time_value = "10:00";
    $email = "";
    

    if(Route::currentRouteName() === 'search_home') {
        $pickup_location_value =  !empty($pickup_location->contentload->location) ? $pickup_location->contentload->location : "";
        $pickup_loc = Session::get('pickup_location');
        $dropoff_location_value = !empty($dropoff_location->contentload->location) ? $dropoff_location->contentload->location : "";
        $dropoff_loc = Session::get('dropoff_location');
        $start_date = Session::get('start_date');
        $end_date = Session::get('end_date');
        $start_time_value = Session::get('start_time');
        $end_time_value = Session::get('end_time');
        $email = Session::get('user_email');
    } else {
        $pickup_location_value =  isset($current_location) ? $current_location->contentload->location : "";
        $pickup_loc = isset($current_location) ? $current_location->id : $pickup_loc;
        $dropoff_location_value = isset($current_location) ? $current_location->contentload->location : "";
        $dropoff_loc = isset($current_location) ? $current_location->id : $dropoff_loc;
    }
?>
<div class="filter-box search_home">
    <h4><i class="fa fa-fw fa-car"></i> {{ $static_data['strings']['fast_booking'] }}</h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <label for="pickup_location_value0"></label>
                    <span class="fa fa-map-marker input-group-addon"></span>
                    <input type="text" readonly id="pickup_location_value0" name="pickup_location_value"
                        class="form-control filter-field"
                        placeholder="{{ $static_data['strings']['choose_location'] }}"
                        value="{{$pickup_location_value}}">
                </div>
                <input type="hidden" name="pickup_location" value="{{ $pickup_loc }}"
                    class="form-control filter-hidden hidden"
                    placeholder="{{ $static_data['strings']['choose_location'] }}">
                <ul class="dropdown-filter-menu">
                    @foreach ($static_data['locations'] as $location)
                        <li data-id="{{ $location->id }}" data-name="{{ $location->contentload->location }}">
                            <a href="#" class="pickup_location_picker">
                                <span>{{ $location->contentload->location }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="form-group not-after">
                <div class="input-group start_date_input_group">
                    <label for="start_date0"></label>
                    <span class="fa fa-calendar input-group-addon"></span>
                    <input type="text" id="start_date0" name="start_date"
                        class="form-control start_date-picker filter-field"
                        placeholder="{{ $static_data['strings']['checking_in'] }}" autocomplete="off"
                        value="{{$start_date}}" readonly >
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="start_time_value"></label>
                    <span class="fa fa-clock-o input-group-addon"></span>
                    <input type="text" readonly id="start_time_value" name="start_time_value" value="{{$start_time_value}}"
                        class="form-control filter-field">
                </div>
                <input type="hidden" name="start_time" value="{{$start_time_value}}" class="form-control filter-hidden hidden">
                <ul class="dropdown-filter-menu">
                    @for ($i = 0; $i < 24; $i++)
                        <li data-id="{{ sprintf('%02d', $i) . ':00' }}" data-name="{{ sprintf('%02d', $i) . ':00' }}">
                            <a href="#" class="start_time_picker">
                                <span>{{ sprintf('%02d', $i) . ':00' }}</span>
                            </a>
                        </li>
                        <li data-id="{{ sprintf('%02d', $i) . ':30' }}" data-name="{{ sprintf('%02d', $i) . ':30' }}">
                            <a href="#" class="start_time_picker">
                                <span>{{ sprintf('%02d', $i) . ':30' }}</span>
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <label for="dropoff_location_value0"></label>
                    <span class="fa fa-map-marker input-group-addon"></span>
                    <input type="text" readonly id="dropoff_location_value0" name="dropoff_location_value"
                        class="form-control filter-field"
                        placeholder="{{ $static_data['strings']['choose_location'] }}"
                        value="{{$dropoff_location_value}}">
                </div>
                <input type="hidden" name="dropoff_location" value="{{ $dropoff_loc }}"
                    class="form-control filter-hidden hidden"
                    placeholder="{{ $static_data['strings']['choose_location'] }}">
                <ul class="dropdown-filter-menu">
                    @foreach ($static_data['locations'] as $location)
                        <li data-id="{{ $location->id }}" data-name="{{ $location->contentload->location }}">
                            <a href="#" class="dropoff_location_picker">
                                <span>{{ $location->contentload->location }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="form-group not-after">
                <div class="input-group end_date_input_group">
                    <label for="end_date0"></label>
                    <span class="fa fa-calendar input-group-addon"></span>
                    <input type="text"  id="end_date0" name="end_date"
                        class="form-control end_date-picker filter-field"
                        placeholder="{{ $static_data['strings']['checking_out'] }}" autocomplete="off"
                        value="{{$end_date}}" readonly >
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="end_time_value"></label>
                    <span class="fa fa-clock-o input-group-addon"></span>
                    <input type="text" readonly id="end_time_value" name="end_time_value" value="{{$end_time_value}}"
                        class="form-control filter-field">
                </div>
                <input type="hidden" name="end_time" value="{{$end_time_value}}" class="form-control filter-hidden hidden">
                <ul class="dropdown-filter-menu">
                    @for ($i = 0; $i < 24; $i++)
                        <li data-id="{{ sprintf('%02d', $i) . ':00' }}" data-name="{{ sprintf('%02d', $i) . ':00' }}">
                            <a href="#" class="end_time_picker">
                                <span>{{ sprintf('%02d', $i) . ':00' }}</span>
                            </a>
                        </li>
                        <li data-id="{{ sprintf('%02d', $i) . ':30' }}" data-name="{{ sprintf('%02d', $i) . ':30' }}">
                            <a href="#" class="end_time_picker">
                                <span>{{ sprintf('%02d', $i) . ':30' }}</span>
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>

            {{--<div class="user_email_form_group">
                <div class="input-group">
                    <label for="user_email"></label>
                    <span class="fa fa-envelope input-group-addon"></span>
                    <input type="email" id="user_email" name="user_email" class="form-control filter-field" value="{{$email}}" placeholder="{{$static_data['strings']['user_email_optional']}}">
                </div>
            </div>--}}
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            <button type="submit" id="booking_submit_btn" class="btn btn-success pull-right"><i
                    class="fa fa-search"></i> {{ $static_data['strings']['search'] }}</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
