<div class="col-md-6">
    <div class="item-list" style="-webkit-border-radius: 11px 7px 7px 7px;border: 2px dashed #db5b15;">
        <h3 class="item-title primary-color">{{ $selected_car->contentload->name }}</h3>
        <a href="#" class="read-info"><i class="fa fa-info-circle fa-2x"></i></a>
        <div class="item-details">
            {{$selected_car->contentload->description}}
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="car-img">
                    @if($selected_car->front_image)
                        <img class="responsive-img" src="{{ asset('images/data').'/'.$selected_car->front_image->image }}"/>
                    @else
                        <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}"/>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <ul class="car-preferences">
                    @if(!empty($selected_car->passengers))<li class="ic-passengers">{{ $selected_car->passengers_number }}</li>@endif
                    @if(!empty($selected_car->doors))<li class="ic-doors">{{ $selected_car->doors }}</li>@endif
                    @if(!empty($selected_car->suitcases))<li class="ic-suitcases">{{ $selected_car->suitcases }}</li>@endif
                    @if(!empty($selected_car->airconditioner))<li class="ic-airconditioner">A/C</li>@endif
                    @if(!empty($selected_car->transmission))<li class="ic-transmission">{{ $static_data['strings'][$selected_car->transmission] }}</li>@endif
                    @if(!empty($selected_car->carburant))<li class="ic-carburant">{{ $static_data['strings'][$selected_car->carburant] }}</li>@endif
                </ul>
                {!! Form::open(['method' => 'post', 'url' => route('booking')]) !!}
                <input type="hidden" name="car_id" value="{{$selected_car->id}}" class="hidden" >
                <button type="submit" class="btn btn-primary pull-right">{{$static_data['strings']['select']}}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
