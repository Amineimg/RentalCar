@if(count($filter_rooms))
{!! Form::open(['method' => 'post', 'url' => route('search_home'), 'id' => 'filter-form']) !!}
<div class="filter-box">
    <div class="form-group not-after">
        <input type="hidden" name="location_id" value="@if(session('location_id')){{session('location_id')}}@endif">
        <input type="hidden" name="start_date" value="@if(session('start_date')){{session('start_date')}}@endif">
        <input type="hidden" disabled name="end_date" value="@if(session('end_date')){{session('end_date')}}@endif">
        <input type="hidden" readonly name="passengers_number" value="@if(session('passengers_number')){{session('passengers_number')}}@endif">
        
        <div class="radio-group">
            <h5>{{$static_data['strings']['rooms_number']}}</h5>
        @foreach($filter_rooms as $filter_room)
            <input type="radio" name="rooms" value="{{ $filter_room }}" id="froom-{{ $filter_room }}"@if(session('rooms') && session('rooms') == $filter_room) checked="checked" @endif><label for="froom-{{ $filter_room }}">{{ $filter_room.'+' }}</label><br>
        @endforeach
        </div>
        
    </div>
</div>
<button type="submit" class="primary-button" style="margin-left: 6px;"><i class="fa fa-search"></i>{{$static_data['strings']['filter']}}</button>
{!! Form::close() !!}
@endif