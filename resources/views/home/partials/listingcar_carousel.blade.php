<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h4 class="h3 py-3" style="text-align: center">{{ $static_data['strings']['listingcar'] }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="owl-carousel owl-theme center">
            @foreach ($cars as $car)
                <div class="item">
                    <div class="col-md-12">
                        <div class="item-list">
                            <div class="price-sign">
                                @if (!empty($car->price_per_night))
                                    {{ currency($car->price_per_night, 'EUR', 'EUR') }}
                                @endif
                            </div>
                            {{-- Personnaliser l'affichage des noms des voitures en fonction de la destination --}}
                            
                            @php
                                $car_alt_carousel = !empty($car->contentload->name) 
                                ? $car->contentload->name . ' ' . $static_data['strings']['alt_car'] 
                                : "";
                            @endphp

                            @if(isset($destination))
                                @php
                                    $car_name = str_ireplace("marrakech", $destination, $car->contentload->name);
                                @endphp
                            @endif
                            
                            <h3 class="item-title primary-color"><a title="{{ !empty($car_name) ? $car_name : $car->contentload->name }}" href="{{ route('car_details', [$car->id, $car->alias]) }}"
                                            class="">{{ !empty($car_name) ? $car_name : $car->contentload->name }}</a></h3>
                            <a href="#" class="read-info"><i class="fa fa-info-circle fa-2x"></i></a>
                            <div class="item-details">
                                {{ $car->contentload->description }}
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-8">
                                    <div class="car-img">
                                        @if ($car->front_image)
                                            <img class="responsive-img"
                                                src="{{ asset('images/data') . '/' . $car->front_image->image }}"
                                                alt="{{$car_alt_carousel}}" />
                                        @else
                                            <img class="responsive-img" src="{{ asset('images/') . '/no_image.jpg' }}" alt="{{$car_alt_carousel}}"/>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5 col-4">
                                    <ul class="car-preferences">
                                        @if (!empty($car->passengers_number))
                                            <li class="ic-passengers">{{ $car->passengers_number  . " " . $static_data['strings']['places'] }}</li>
                                        @endif
                                        @if (!empty($car->doors))
                                            <li class="ic-doors">{{ $car->doors . " " . $static_data['strings']['doors'] }}</li>
                                        @endif
                                        @if (!empty($car->suitcases))
                                            <li class="ic-suitcases">{{ $car->suitcases . " " . $static_data['strings']['suitcases'] }}</li>
                                        @endif
                                        @if (!empty($car->airconditioner))
                                            <li class="ic-airconditioner">{{ $static_data['strings']['airconditioner'] }}</li>
                                        @endif
                                        @if (!empty($car->transmission))
                                            <li class="ic-transmission">
                                                {{ $static_data['strings'][$car->transmission] }}</li>
                                        @endif
                                        @if (!empty($car->carburant))
                                            <li class="ic-carburant">{{ $static_data['strings'][$car->carburant] }}
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <a href="{{ route('car_details', [$car->id, $car->alias]) }}"
                                            class="btn btn-success">{{ $static_data['strings']['more_details'] }}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
