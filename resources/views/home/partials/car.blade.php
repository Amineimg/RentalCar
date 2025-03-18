<?php if(!isset($class)) $class="col-md-6 col-sm-6 items-grid showed"; ?>
<div class="{{ $class }}" data-rooms="{{$car->rooms}}">
    <div class="item box-shadow">
        <div id="carousel-{{$car->id}}" class="main-image bg-overlay carousel slide" data-ride="carousel" data-interval="false">
            @if($car->featured)
            <div class="featured-sign">
                {{ $static_data['strings']['featured'] }}
            </div>
            @endif
            <?php
            $a_wish = '';
            $r_wish = 'display:none;';
            if(Session::has('wishlist') && in_array($car->id, Session::get('wishlist'))){
                $a_wish = 'display:none;';
                $r_wish = '';
            }
            ?>
           {{-- <ahref="#"class="add-wishlist"data-id="$car->id"style="$a_wish"><i class="fa fa-heart-o"></i></a>
            <a href="#" class="remove-wishlist" data-id="{{$car->id}}" style="{{$r_wish}}"><i class="fa fa-heart"></i></a>--}}
            <a href="{{route('single-car', $car->alias)}}" class="grid-link">&nbsp;</a>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                @if($car->front_image)
                    <img class="responsive-img" src="{{ asset('images/data').'/'.$car->front_image->image }}"/>
                @else
                    <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}"/>
                @endif
                </div>
            </div>
           {{-- <divclass="item-category"><iclass="fafa-map-marker"></i>$car->prop_location->contentload->location</div> --}}
            <div class="price">
               {{ currency((int)$car->price_per_night, $static_data['site_settings']['currency_code'], Session::get('currency')) }} <span class="currency"> {{ $static_data['strings']['per_night'] }}</span>
                {{--<span class="currency">{{ $static_data['strings']['from'] }}</span> {{ currency((int)$car->price_from, $static_data['site_settings']['currency_code'], Session::get('currency')) }} <span class="currency"> {{ $static_data['strings']['per_night'] }}</span>--}}
            </div>
        </div>
        <div class="data">
            <a href="{{route('single-car', $car->alias)}}"><h3 class="item-title primary-color">{{ $car->contentload->name }}</h3></a>
            <div class="item-content row">
                <ul>
                    <li><span>{{ $static_data['strings']['plot']}}</span><br>{{$car->car_info['plot_size'].' '.$static_data['site_settings']['measurement_unit'] }}</li>
                    <li><span>{{ $static_data['strings']['surface']}}</span><br>{{$car->car_info['living_space'].' '.$static_data['site_settings']['measurement_unit'] }}</li>
                    <li><span>{{ $static_data['strings']['rooms']}}</span><br>{{$car->rooms }}</li>
                    <li><span>Pax</span><br>{{$car->passengers_number}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
