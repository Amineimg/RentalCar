<div class="col-md-4">
    <div class="item-list">
        <div class="price-sign">
            @php
                $car_alt = !empty($car->contentload->name) 
                ? $car->contentload->name . ' ' . $static_data['strings']['alt_car'] 
                : "";
            @endphp
            @if(!empty($car->d_11))
                {{$static_data['strings']['from'] .' '. currency($car->d_11,'EUR','EUR')}}
            @endif
        </div>
        <h3 class="item-title primary-color"><a title="{{ $car->contentload->name }}" href="{{ route('car_details', [$car->id, $car->alias]) }}"
                                            class="">{{ $car->contentload->name }}</a></h3>
        <a href="#" class="read-info"><i class="fa fa-info-circle fa-2x"></i></a>
        <div class="item-details">
            {{$car->contentload->description}}
        </div>
        <div class="row">
            <div class="col-md-7 col-8">
                <div class="car-img">
                    @if($car->front_image)
                        <img class="responsive-img" src="{{ asset('images/data').'/'.$car->front_image->image }}" alt="{{$car_alt}}" />
                    @else
                        <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}" alt="{{$car_alt}}"/>
                    @endif
                </div>
            </div>
            <div class="col-md-5 col-4">
                <ul class="car-preferences">
                    @if(!empty($car->passengers_number))<li class="ic-passengers">{{ $car->passengers_number  . " " . $static_data['strings']['places'] }}</li>@endif
                    @if(!empty($car->doors))<li class="ic-doors">{{ $car->doors . " " . $static_data['strings']['doors'] }}</li>@endif
                    @if(!empty($car->suitcases))<li class="ic-suitcases">{{ $car->suitcases . " " . $static_data['strings']['suitcases'] }}</li>@endif
                    @if(!empty($car->airconditioner))<li class="ic-airconditioner">{{ $static_data['strings']['airconditioner'] }}</li>@endif
                    @if(!empty($car->transmission))<li class="ic-transmission">{{ $static_data['strings'][$car->transmission] }}</li>@endif
                    @if(!empty($car->carburant))<li class="ic-carburant">{{ $static_data['strings'][$car->carburant] }}</li>@endif
                </ul> {{--
                {!! Form::open(['method' => 'post', 'url' => route('search_page',$car->id)]) !!}
                <input type="hidden" name="car_id" value="{{$car->id}}" class="hidden" >
                <button type="submit" class="btn btn-primary pull-right">{{$static_data['strings']['select']}}</button>
                {!! Form::close() !!} --}}
            </div>

            <div class="col-md-12">
                <div class="text-left">
                    <a href="{{route('car_details',[$car->id,$car->alias])}}" class="btn btn-success">{{$static_data['strings']['more_details']}}</a>
                    <button type="button" data-id="{{ $car->id }}"  data-toggle="modal" data-target="#search-box-modal" class="btn btn-primary btn-select-car">{{$static_data['strings']['select']}}</button>
                </div>
            </div>

        </div>
    </div>
</div>
