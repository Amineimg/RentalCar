{!! Form::open(['method' => 'post', 'url' => route('booking'), 'id' => 'search-form','name'=>'search-form']) !!}
<div class="filter-box">
    <h4><i class="fa fa-fw fa-car"></i> {{$static_data['strings']['fast_booking']}}</h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <label for="pickup_location_value"></label>
                    <span class="fa fa-map-marker input-group-addon"></span>
                    <input type="text" readonly id="pickup_location_value" name="pickup_location_value" value="{{ $static_data['locations'][0]->contentload->location }}" class="form-control filter-field" placeholder="{{$static_data['strings']['choose_location']}}">
                </div>
                <input type="hidden" name="pickup_location" value="{{ $static_data['locations'][0]->id }}" class="form-control filter-hidden hidden" placeholder="{{$static_data['strings']['choose_location']}}">
                <ul class="dropdown-filter-menu">
                    <li data-id="" data-name="{{ $static_data['strings']['choose_location'] }}">
                        <a href="#" class="category_id_picker">
                            <span>{{ $static_data['strings']['choose_location'] }}</span>
                        </a>
                    </li>
                    @foreach($static_data['locations'] as $location)
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
                    <label for="start_date"></label>
                    <span class="fa fa-calendar input-group-addon"></span>
                    <input type="text" id="start_date" name="start_date" class="form-control start_date-picker filter-field" placeholder="{{$static_data['strings']['checking_in']}}" autocomplete="off" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="start_time_value"></label>
                    <span class="fa fa-clock-o input-group-addon"></span>
                    <input type="text" readonly name="start_time_value" value="10:00" class="form-control filter-field">
                </div>
                <input type="hidden" name="start_time" value="10:00" class="form-control filter-hidden hidden">
                <ul class="dropdown-filter-menu">
                    @for($i=0;$i<24;$i++)
                    <li data-id="{{ sprintf("%02d", $i).':00' }}" data-name="{{ sprintf("%02d", $i).':00' }}">
                        <a href="#" class="start_time_picker">
                            <span>{{ sprintf("%02d", $i).':00' }}</span>
                        </a>
                    </li>
                    <li data-id="{{ sprintf("%02d", $i).':30' }}" data-name="{{ sprintf("%02d", $i).':30' }}">
                        <a href="#" class="start_time_picker">
                            <span>{{ sprintf("%02d", $i).':30' }}</span>
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
                    <label for="dropoff_location_value"></label>
                    <span class="fa fa-map-marker input-group-addon"></span>
                    <input type="text" readonly id="dropoff_location_value" name="dropoff_location_value" value="{{ $static_data['locations'][0]->contentload->location }}" class="form-control filter-field" placeholder="{{$static_data['strings']['choose_location']}}">
                </div>
                <input type="hidden" name="dropoff_location" value="{{ $static_data['locations'][0]->id }}" class="form-control filter-hidden hidden" placeholder="{{$static_data['strings']['choose_location']}}">
                <ul class="dropdown-filter-menu">
                    <li data-id="" data-name="{{ $static_data['strings']['choose_location'] }}">
                        <a href="#" class="category_id_picker">
                            <span>{{ $static_data['strings']['choose_location'] }}</span>
                        </a>
                    </li>
                    @foreach($static_data['locations'] as $location)
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
                    <label for="end_date"></label>
                    <span class="fa fa-calendar input-group-addon"></span>
                    <input type="text" disabled id="end_date" name="end_date" class="form-control end_date-picker filter-field" placeholder="{{$static_data['strings']['checking_out']}}" autocomplete="off" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="end_time_value"></label>
                    <span class="fa fa-clock-o input-group-addon"></span>
                    <input type="text" readonly name="end_time_value" value="10:00" class="form-control filter-field">
                </div>
                <input type="hidden" name="end_time" value="10:00" class="form-control filter-hidden hidden">
                <ul class="dropdown-filter-menu">
                    @for($i=0;$i<24;$i++)
                    <li data-id="{{ sprintf("%02d", $i).':00' }}" data-name="{{ sprintf("%02d", $i).':00' }}">
                        <a href="#" class="end_time_picker">
                            <span>{{ sprintf("%02d", $i).':00' }}</span>
                        </a>
                    </li>
                    <li data-id="{{ sprintf("%02d", $i).':30' }}" data-name="{{ sprintf("%02d", $i).':30' }}">
                        <a href="#" class="end_time_picker">
                            <span>{{ sprintf("%02d", $i).':30' }}</span>
                        </a>
                    </li>
                    @endfor
                </ul>
            </div>
    	</div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <input type="hidden" name="car_id" id="selected_car_id">
            <input type="hidden" name="home" value="false">
            <button type="submit" id="booking_submit_btn"  class="btn btn-success pull-right">{{$static_data['strings']['book']}}</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
