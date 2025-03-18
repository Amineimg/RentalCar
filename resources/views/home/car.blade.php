@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')
    <title>{{$static_data['strings']['car'] .' - '. $car->contentload->name}}</title>
    <meta name="title" content="@if($car->meta_title) {{ $car->meta_title }} @else {{$static_data['strings']['car'] .' - '. $car->contentload->name}} @endif">
    <meta name="description" content="@if($car->meta_description) {{ $car->meta_description }} @else {{strip_tags(Str::limit($car->contentload->description, 200))}} @endif">
    <meta name="keywords" content="@if($car->meta_keywords) {{ $car->meta_keywords }} @else {{ $static_data['site_settings']['site_keywords'] }} @endif">
    <meta name="author" content="{{ $static_data['site_settings']['site_name'] }}">
    <meta car="og:title" content="@if($car->meta_title) {{ $car->meta_title }} @else {{$static_data['strings']['car'] .' - '. $car->contentload->name}} @endif" />
    <meta car="og:image" content="@if(count($car->images)) {{ asset('images/data').'/'.$car->images[0]->image }} @else{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}} @endif" />
    <meta car="og:description" content="@if($car->meta_description) {{ $car->meta_description }} @else {{strip_tags(Str::limit($car->contentload->description, 200))}} @endif">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
@endsection

@section('bg')
    @if($car->front_image && get_setting('show_first_image', 'car'))
        {{ asset('images/data').'/'.$car->front_image->image }}
    @else
        {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
    @endif
@endsection

<?php
    $share_links = Share::load(Request::fullUrl(), $car->contentload->name)->services('facebook', 'gplus', 'twitter', 'pinterest', 'email', 'reddit', 'linkedin');
?>
@section('content')
    <div class="row marginalized">
        <div class="col-sm-12"><h1 class="section-title-dark">{{ $car->contentload->name }}</h1>
            <p class="meta-data">{{ $car->category->contentload->name .', '. $car->prop_location->contentload->location }}</p>
            @if(Session::has('reviewDone'))<p class="field-info text-centered green-color">{{ $static_data['strings']['thank_you_for_review'] }}</p>@endif
        </div>
        <div class="col-md-8 col-sm-12">
            <div id="carousel-images" class=" bg-overlay carousel slide" data-ride="carousel" data-interval="2000">
                @if(count($car->images))
                <div class="carousel-inner" role="listbox">
                    <?php $c = 0; ?>
                    @foreach($car->images as $image)
                        <div class="carousel-item @if(!$c) active <?php $c++; ?> @endif">
                            <img class="img-fluid d-block" src="{{ asset('images/data').'/'.$image->image }}"/>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel-images" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{$static_data['strings']['previous']}}</span>
                </a>
                <a class="carousel-control-next" href="#carousel-images" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{$static_data['strings']['next']}}</span>
                </a>
                @else
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}"/>
                        </div>
                    </div>
                @endif
            </div>
            <div style="overflow: hidden;">
                <p class="description mbot0">{!! $car->contentload->description !!}</p>
            </div>
            @if(!empty($features))
            <div class="features">
                <h3>{{$static_data['strings']['features']}}</h3>
                <div class="row">
                    <?php 
                    $ft_icons = array(
                            'WiFi'       => 'fa-wifi',
                            'Parking'    => 'fa-car',
                            'Kitchen'    => 'fa-cutlery',
                            'TV'         => 'fa-television',
                            'Fireplace'  => 'fa-fire',
                            'Heating'    => 'fa-sun-o',
                            'Phone'      => 'fa-phone',
                            'Restaurant' => 'fa-cutlery',
                            'Fax'        => 'fa-fax'
                            );
                    ?>
                    @foreach($features as $feature)
                        @if(isset($car->features) && in_array($feature->id, $car->features))
                    <div class="col-sm-3 amenity">
                        <span class="tooltip-feature" data-toggle="tooltip" data-placement="top" title="{{ $feature->feature[$default_language->id] }}">
                            @if(array_key_exists($feature->feature[$default_language->id], $ft_icons))
                            <i class="primary-color fa fa-fw {{$ft_icons[$feature->feature[$default_language->id]]}}"></i>
                            @else
                            <i class="primary-color fa fa-fw fa-check"></i>
                            @endif
                            {{ $feature->feature[$default_language->id] }}</span>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            {{--
            @if(!empty($car->services))
            <div class="srv-box">
                <h3>{{$static_data['strings']['included_services']}}</h3>
                <div class="row">
                    @foreach($services as $service)
                        @if(isset($car->services) && in_array($service->id, $car->services))
                    <div class="col-md-3 col-sm-6">
                        <div class="srv-image" style='background-image: url("{{ asset($service->image) }}");'></div>
                        <div class="srv-name">{{$service->service[$default_language->id]}}</div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif
            --}}

            @if(!empty($car->services))
            <div class="features">
                <h3>{{$static_data['strings']['included_services']}}</h3>
                <div class="row">
                    @foreach($services as $service)
                        @if(isset($car->services) && in_array($service->id, $car->services))
                    <div class="col-sm-3 amenity">
                        <span class="tooltip-feature" data-toggle="tooltip" data-placement="top" title="{{ $service->service[$default_language->id] }}"><i class="primary-color fa fa-check"></i> {{ $service->service[$default_language->id] }}</span>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif


            @if(!empty($car->extraservices))
            <div class="features">
                <h3>{{$static_data['strings']['extra_services']}}</h3>
                <div class="row">
                    @foreach($extraservices as $extraservice)
                        @if(isset($car->extraservices) && in_array($extraservice->id, $car->extraservices))
                    <div class="col-sm-3 amenity">
                        <span class="tooltip-feature" data-toggle="tooltip" data-placement="top" title="{{ $extraservice->extraservice[$default_language->id] }}"><i class="primary-color fa fa-check"></i> {{ $extraservice->extraservice[$default_language->id] }}</span>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif

            @if(!empty($car->highlights))
            <div class="features">
                <h3>{{$static_data['strings']['highlights']}}</h3>
                <div class="row">
                    @foreach($highlights as $highlight)
                        @if(isset($car->highlights) && in_array($highlight->id, $car->highlights))
                    <div class="col-sm-3 amenity">
                        <span class="tooltip-feature" data-toggle="tooltip" data-placement="top" title="{{ $highlight->highlight[$default_language->id] }}"><i class="primary-color fa fa-check"></i> {{ $highlight->highlight[$default_language->id] }}</span>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif
            
            <hr />
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="car-info mtop20">
                        <h3 class="section-type">{{ $static_data['strings']['car_info'] }}</h3>
                        @if(isset($car->car_info['plot_size']))
                        <p class="listing-data"><i class="primary-color fa fa-info-circle"></i> {{ $static_data['strings']['plot_size'].': '}} <strong> {{$car->car_info['plot_size'] }} {{ $static_data['site_settings']['measurement_unit'] }}</strong></p>
                        @endif
                        
                        @if(isset($car->car_info['living_space']))
                        <p class="listing-data"><i class="primary-color fa fa-info-circle"></i> {{ $static_data['strings']['living_space'].': '}} <strong> {{$car->car_info['living_space'] }} {{ $static_data['site_settings']['measurement_unit'] }}</strong></p>
                        @endif
                        
                        @if(isset($car->car_info['passengers_number']))
                        <p class="listing-data"><i class="primary-color fa fa-info-circle"></i> {{ $static_data['strings']['passengers_number'].': '}} <strong> {{$car->car_info['passengers_number'] }}</strong></p>
                        @endif
                        
                        @if(isset($car->car_info['rooms']))
                        <p class="listing-data"><i class="primary-color fa fa-info-circle"></i> {{ $static_data['strings']['car_rooms'].': '}}<strong> {{$car->car_info['rooms'] }} </strong></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="car-info">
                        <h3 class="section-type">{{ $static_data['strings']['car_prices'] }}</h3>
                        @if(!empty($seasons))
                        <table class="prices-table">
                            <tr>
                                <th>&nbsp;</th>
                                <th>{{ $static_data['strings']['price_per_night'].': '}}</th>
                                <th>{{ $static_data['strings']['price_d_7'].': '}}</th>
                                <th>{{ $static_data['strings']['price_d_14'].': '}}</th>
                            </tr>
                            @foreach($seasons as $p_season)
                            <tr>
                                <th>{{ $p_season->start_date . ' ' . $static_data['strings']['to'] . ' ' . $p_season->end_date }}</th>
                                <td>     
                                @if(!empty($p_season->price_per_night))
                                    {{ currency($p_season->price_per_night, $static_data['site_settings']['currency_code'], Session::get('currency')) }}
                                @endif
                                </td>
                                <td>
                                @if(!empty($p_season->prices['d_7']))
                                    {{ currency($p_season->prices['d_7'], $static_data['site_settings']['currency_code'], Session::get('currency')) }}
                                @endif
                                </td>
                                <td>
                                @if(!empty($p_season->prices['d_14']))
                                    {{ currency($p_season->prices['d_14'], $static_data['site_settings']['currency_code'], Session::get('currency')) }}
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 sidebar">
            @if(get_setting('guest_booking', 'user') || $static_data['user'])
            <p class="success-book green-color" style="display: none;">{{ $static_data['strings']['thank_you_for_book'] }}</p>
            
            <div class="booking-form input-style filter-box mbot20">
                {!! Form::open(['method' => 'post', 'url' => route('booking_pay_page')]) !!}
                <h3 class="section-type text-centered mbot5">{{ $static_data['strings']['book_now'] }}</h3>
                <p class="field-info text-centered mbot5">{{ $static_data['strings']['fill_fields_to_book'] }}</p>
                <div class="form-group not-after">
                    <div class="input-group">
                        <span class="fa fa-user input-group-addon"></span>
                        <input type="text" value="@if($static_data['user']){{ $static_data['user']->info->first_name }}@endif" name="first_name" required class="form-control slider-field" placeholder="{{$static_data['strings']['your_name']}}">
                    </div>
                </div>
                <div class="form-group not-after">
                    <div class="input-group">
                        <span class="fa fa-envelope input-group-addon"></span>
                        <input type="email" value="@if($static_data['user']){{ $static_data['user']->email }}@endif" name="email" class="form-control slider-field" required placeholder="{{$static_data['strings']['your_email']}}">
                    </div>
                </div>
                <div class="form-group not-after">
                    <div class="input-group">
                        <span class="fa fa-phone input-group-addon"></span>
                        <input type="text" value="" required name="phone" class="form-control slider-field" placeholder="{{$static_data['strings']['your_phone']}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="fa fa-user-o input-group-addon"></span>
                        <input type="text" disabled name="passengers_number_value" value="@if(session('passengers_number') && session('passengers_number') != (get_setting('passengers_number_max','car') + 1)){{ session('passengers_number') }}@endif" class="form-control filter-field" placeholder="{{$static_data['strings']['passengers_number']}}">
                    </div>
                    <input type="hidden" name="passengers_number" value="@if(session('passengers_number')){{session('passengers_number')}}@else{{'1'}}@endif" class="form-control filter-hidden hidden" placeholder="{{$static_data['strings']['passengers_number']}}">

                </div>
                <div class="form-group not-after">
                    <div class="input-group">
                        <span class="fa fa-calendar input-group-addon"></span>
                        <input type="text" name="start_date" class="form-control start_date-picker filter-field" placeholder="{{$static_data['strings']['checking_in']}}" value="{{ session('start_date') }}" autocomplete="off">
                    </div>
                </div>
                <div class="form-group not-after">
                    <div class="input-group">
                        <span class="fa fa-calendar input-group-addon"></span>
                        <input type="text" disabled name="end_date" class="form-control end_date-picker filter-field" placeholder="{{$static_data['strings']['checking_out']}}" value="{{ session('end_date') }}" autocomplete="off">
                    </div>
                </div>
                <input type="hidden" name="total" class="hidden total-field" >
                <input type="hidden" name="car_id" value="{{ $car->id }}" class="hidden car-field" >
                <input type="hidden" value="{{ Session::get('currency') }}" class="currency_code" name="currency_code" />
                <div class="form-group not-after booking-data">
                    <p class="wrong-error"></p>
                </div>
                <div class="row booking-total">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{{ $static_data['strings']['nights'] }} </td><td class="total-nights"><strong>@if(session('days')){{session('days')}}@endif</strong></td>
                                </tr>
                                <tr><td>{{ $static_data['strings']['total'] }} </td><td class="total-book"><strong>@if(session('total_book')){{session('total_book')}}@endif</strong>{{ userCurrencySymbol() }}</td></tr>
                            </table>
                        </div>
                        @if(!get_setting('booking_by_payment', 'payment')) <a href="#" class="primary-button book-now">{{ $static_data['strings']['book_now'] }}</a>
                        @else
                        <button type="submit" class="primary-button pay-now">{{ $static_data['strings']['book_now'] }}</button>
                        @endif
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            
            @else
                <p class="field-info text-centered mbot5">{{ $static_data['strings']['login_to_book'] }}</p>
            @endif
            <div class="features">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="listing-data">
                            <a href="#"><i class="fa primary-color fa-home"></i> {{ $car->location['address'].', '.$car->prop_location->contentload->location.' - '.$car->location['country'] }}</a>
                        </p>
                        <div class="listing-data mtop20 text-center">
                            <img src="{{ asset('assets/images/cyrille.jpg') }}" alt="cyrille">
                            <p class="listing-data mtop20">Cyrille<br>Votre spécialiste villa</p>
                            <p class="listing-data mtop10">
                            @if($car->contact['tel1'])
                                <a href="tel:{{ $car->contact['tel1'] }}"><i class="fa primary-color fa-phone"></i> {{ $car->contact['tel1'] }}</a>
                                @if($car->contact['tel2'])
                                <a href="tel:{{ $car->contact['tel2'] }}"> | {{ $car->contact['tel2'] }}</a>
                                @endif
                            @else
                                @if($static_data['site_settings']['contact_tel1'])
                                <a href="tel:{{ $static_data['site_settings']['contact_tel1'] }}"><i class="fa primary-color fa-phone"></i> {{ $static_data['site_settings']['contact_tel1'] }}</a>
                                    @if($static_data['site_settings']['contact_tel2'])
                                <a href="tel:{{ $static_data['site_settings']['contact_tel2'] }}"> | {{ $static_data['site_settings']['contact_tel2'] }}</a>
                                    @endif
                                @endif
                            @endif
                            </p>
                            @if($car->contact['fax'])
                            <p class="listing-data">
                                <a href="tel:{{ $car->contact['fax'] }}"><i class="fa primary-color fa-fax"></i> {{ $car->contact['fax'] }}</a>
                            </p>
                            @endif
                            <p class="listing-data">
                            @if($car->contact['email'])
                                <a href="mailto:{{ $car->contact['email'] }}"><i class="fa primary-color fa-envelope"></i> {{ $car->contact['email'] }}</a>
                            @else
                                @if($static_data['site_settings']['contact_email'])
                            <a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i class="fa primary-color fa-envelope"></i> {{ $static_data['site_settings']['contact_email'] }}</a>
                                @endif
                            @endif
                            </p>
                            @if($car->contact['web'])
                            <p class="listing-data">
                                <a href="{{ $car->contact['web'] }}"><i class="fa primary-color fa-globe"></i> {{ $car->contact['web'] }}</a>
                            </p>
                            @endif
                        </div>
                        {{--
                        @if($car->user)
                        <p class="owner-info">{{ $static_data['strings']['owner'] .' - '. $car->user->username }}</p>
                        @endif
                        <ul class="social-icons">
                            @if($car->social['facebook']) <li><a href="{{ $car->social['facebook'] }}" target="_blank"><i class="fa primary-color fa-facebook"></i></a></li> @endif
                            @if($car->social['twitter']) <li><a href="{{ $car->social['twitter'] }}" target="_blank"><i class="fa primary-color fa-twitter"></i></a></li>@endif
                            @if($car->social['instagram'])  <li><a href="{{ $car->social['instagram'] }}" target="_blank"><i class="fa primary-color fa-instagram"></i></a></li>@endif
                            @if($car->social['gplus'])  <li><a href="{{ $car->social['gplus'] }}" target="_blank"><i class="fa primary-color fa-google-plus"></i></a></li>@endif
                            @if($car->social['pinterest'])  <li><a href="{{ $car->social['pinterest'] }}" target="_blank"><i class="fa primary-color fa-pinterest"></i></a></li>@endif
                            @if($car->social['linkedin'])  <li><a href="{{ $car->social['linkedin'] }}" target="_blank"><i class="fa primary-color fa-linkedin"></i></a></li>@endif
                        </ul>
                        --}}
                    </div>
                </div>
                {{--
                @if($car->user && $static_data['user'])
                    <div class="row">
                        <div class="col-sm-12 text-centered">
                            <p class="mbot0 mtop10"><a class="primary-button" href="#" data-toggle="modal" data-target="#message-modal"><i class="fa fa-envelope"></i> {{ $static_data['strings']['contact_owner'] }}</a></p>
                        </div>
                    </div>
                @endif
                --}}
                <div class="row">
                    <div class="col-sm-12 text-centered">
                        <div class="social-buttons">
                            <h3 class="section-type">{{ $static_data['strings']['share'] }}</h3>
                            <a href="{{ $share_links['facebook'] }}" target="_blank" class="primary-color"><i class="fa fa-facebook-official"></i></a>
                            <a href="{{ $share_links['twitter'] }}" target="_blank" class="primary-color"> <i class="fa fa-twitter-square"></i></a>
                            <a href="{{ $share_links['gplus'] }}" target="_blank" class="primary-color"><i class="fa fa-google-plus-square"></i></a>
                            <a href="{{ $share_links['pinterest'] }}" target="_blank" class="primary-color"><i class="fa fa-pinterest-square"></i></a>
                            <a href="{{ $share_links['reddit'] }}" target="_blank" class="primary-color"><i class="fa fa-reddit-square"></i></a>
                            <a href="{{ $share_links['linkedin'] }}" target="_blank" class="primary-color"><i class="fa fa-linkedin-square"></i></a>
                            <a href="{{ $share_links['email'] }}" target="_blank" class="primary-color"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--
        @if($static_data['user'])
        <div class="col-sm-12 mtop20">
        <hr />
            <h3 class="section-type">{{ $static_data['strings']['review'] }}</h3>
            <div id="review">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
                            {{Form::text('name', $static_data['user']->info->first_name, ['class' => 'form-control', 'required', 'placeholder' => $static_data['strings']['name']])}}
                            @if($errors->has('name'))
                                <span class="wrong-error">* {{$errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mbot10">
                            <p class="mbot0 review-label">{{ $static_data['strings']['rating'].' ' }}</p>
                            <select id="rating-select" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="rating" value="0" class="rating-value hidden" />
                <div class="form-group  {{$errors->has('review') ? 'has-error' : ''}}">
                    {{Form::textarea('review', null, ['class' => 'form-control', 'x4', 'required', 'placeholder' => $static_data['strings']['review']])}}
                    @if($errors->has('review'))
                        <span class="wrong-error">* {{$errors->first('review')}}</span>
                    @endif
                    {!! Form::hidden('car_id', $car->id) !!}
                    {!! Form::hidden('user_id', $static_data['user']->id) !!}
                </div>
                <input type="button" id="reviews" name="reviews" class="primary-button" value="{{ $static_data['strings']['submit'] }}">
            </div>
        </div>
        @endif

        @if(count($reviews))
            <div class="col-sm-12">
                <h3 class="section-type mtop20">{{ $static_data['strings']['reviews'] }}</h3>
                <ul class="review-list">
                    @foreach($reviews as $review)
                        <li class="review-item">
                            <div class="review-description">
                                <span>{{ $review->review }}</span>
                                <div class="br-wrapper br-theme-fontawesome-stars-o">
                                    @if($review->user)<p class="meta-data"> {{ $static_data['strings']['posted_by'] .': '. $review->user->username }}</p>@endif
                                    <div class="br-widget">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review->rating)
                                                <a href="#" data-rating-value="{{ $i }}" data-rating-text="{{  $i }}" class="br-active"></a>
                                            @else
                                                <a href="#" data-rating-value="{{ $i }}" data-rating-text="{{  $i }}"></a>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        --}}
        @if($similar->count())
        <div class="col-sm-12 mtop20">
        <hr />
            <div class="row hidden-md-down">
                <div class="col-sm-12"><h3 class="section-type">{{ $static_data['strings']['similar_cars'] }}</h3></div>
                @foreach($similar as $car)
                    @include('home.partials.car', ['class' => 'col-md-4 col-sm-4 items-grid'])
                @endforeach
            </div>
        </div>
        @endif
    </div>
    {{ csrf_field() }}
@endsection
@section('footer')
    @if($static_data['user'])
        <div class="modal fade" id="message-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $static_data['strings']['write_your_message'] }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12">
                            {!! Form::open(['method' => 'post', 'url' => route('message_owner'), 'id' => 'message-form']) !!}
                            <div class="form-group">
                                {!! Form::textarea('message', null, ['class' => 'form-control form-message', 'required', 'placeholder' => $static_data['strings']['write_your_message']]) !!}
                                <span class="wrong-error hidden">{{ $static_data['strings']['required_field'] }}</span>
                            </div>
                            {!! Form::hidden('user_id', $static_data['user']->id) !!}
                            {!! Form::hidden('owner_id', $car->user_id) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="send-form primary-button" data-dismiss="modal">{{ $static_data['strings']['close'] }}</button>
                        <a href="#" class="send-message primary-button">{{ $static_data['strings']['submit'] }}</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="{{asset('assets/js/plugins/readmore.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/rating.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#reviews').click(function(){
                var name = $('input[name="name"]').val(),
                    ratingselect = $('#rating-select').val(),
                    rating = $('input[name="rating"]').val(),
                    car_id = $('input[name="car_id"]').val(),
                    user_id = $('input[name="user_id"]').val(),
                    review = $('textarea[name="review"]').val();
                console.log(name,ratingselect,rating,car_id,user_id,review);
                var token = $('[name="_token"]').val();
                $.ajax({
                    url: '{{ route('make_review') }}',
                    type: 'post',
                    data: {name : name,ratingselect : ratingselect,rating : rating,car_id : car_id,user_id : user_id,review : review, _token: token},
                    success: function(data){
                        alert('{{ $static_data['strings']['thank_you_for_review'] }}');
                        console.log(data);
                    }
                });
            });
            
            $('.description').readmore({
                speed: 100,
                collapsedHeight: 150,
                moreLink: '<a class="primary-color" href="#">{{ $static_data['strings']['read_more'] }}</a>',
                lessLink: '<a class="primary-color" href="#">{{ $static_data['strings']['read_less'] }}</a>',
            });

            // Contact mail
            $('.send-form').click(function(e){
                e.preventDefault();
                if($('.form-message').val() != ''){
                    $('#message-form').submit();
                }else{
                    $('.wrong-error', parent).removeClass('hidden');
                }
            });

            // Code commenté pour ne pas prendre la disponibilité en considération
            //var array = <?php echo json_encode($dates); ?>;
            var array = [];
            // Datepickers

            $('.start_date-picker').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                beforeShowDay: function(date){
                    var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
                    return [ array.indexOf(string) == -1 ]
                },
                onSelect: function(dateText, inst) {
                    if($('.end_date-picker').hasClass('hasDatepicker')){
                        $('.end_date-picker').datepicker('destroy');
                        $('.end_date-picker').val('');
                        //$('.booking-total').hide();
                    }
                    var startDate = $(this).datepicker('getDate');
                    var fstartDate = $(this).datepicker('getDate');
                    startDate.setDate(startDate.getDate() + 1);
                    fstartDate.setDate(fstartDate.getDate() + 1);
                    //console.log(startDate)
                    $("[name='start_date']").val(dateText);
                    $("[name='end_date']").removeAttr('disabled');
                    $('.end_date-picker').datepicker({
                        dateFormat: 'dd/mm/yy',
                        minDate: startDate,
                        beforeShowDay: function(date){
                            var string = jQuery.datepicker.formatDate('dd/mm/yy', date);
                            return [ array.indexOf(string) == -1 ]
                        },
                        onSelect: function(dateText, inst) {
                            $('.booking-form').addClass('loading');
                            $('.booking-data, .booking-total').hide();
                            $("[name='end_date']").val(dateText);


                            var endDate = $(this).datepicker('getDate');
                            var dates = getDates(startDate, endDate);
                            var condition = 1;
                            $.each(dates, function(i){
                                if(array.indexOf(dates[i]) != -1){
                                    condition = 0;
                                    return false;
                                }
                            });
                            if(condition){
                                startDate.setDate(fstartDate.getDate()-1);
                                var startdate =  startDate.getFullYear() + "-" + (startDate.getMonth()+1) + "-" + startDate.getDate();
                                var enddate =  endDate.getFullYear() + "-" + (endDate.getMonth()+1) + "-" + endDate.getDate();
                                //console.log('--->'+startdate+' | '+enddate);
                                $.ajax({
                                    url : '{{ route('get_ajax_price') }}',
                                    type : 'POST',
                                    data : { '_token' : '{{ csrf_token() }}', start_date : startdate, end_date : enddate, id : '{{ $mainCar->id }}' },
                                    success : function(data){

                                        $('.booking-total').show();
                                        $('.total-nights strong').html(data.days);
                                        // $('.price-per-night strong').html(price);
                                        $('.total-book strong').html(Math.round(data.total * 100) / 100);
                                        $('.total-field').val(Math.round(data.total * 100) / 100);
                                    }
                                });
                            }else{
                                $('.booking-data').show();
                                $('.booking-data .wrong-error').html('* {{ $static_data['strings']['dates_overlap'] }}')
                            }
                            $('.booking-form').removeClass('loading');
                        },
                    });
                    setTimeout(function(){
                        $('.end_date-picker').datepicker('show');
                    }, 100);
                },
            });

            @if(Session::has('start_date') && Session::has('end_date'))
            if($('.end_date-picker').hasClass('hasDatepicker')){
                $('.end_date-picker').datepicker('destroy');
                $('.end_date-picker').val('');
                //$('.booking-total').hide();
            }
            var startDate = $('.start_date-picker').datepicker('getDate');
            startDate.setDate(startDate.getDate() + 1);
            //console.log(startDate)
            $("[name='end_date']").removeAttr('disabled');
            var fstartDate = $('.start_date-picker').datepicker('getDate');
            fstartDate.setDate(fstartDate.getDate() + 1);
            $('.end_date-picker').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: startDate,
                beforeShowDay: function(date){
                    var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
                    return [ array.indexOf(string) == -1 ]
                },
                onSelect: function(dateText, inst) {
                    $('.booking-form').addClass('loading');
                    $('.booking-data, .booking-total').hide();
                    $("[name='end_date']").val(dateText);


                    var endDate = $(this).datepicker('getDate');
                    var dates = getDates(startDate, endDate);
                    var condition = 1;
                    $.each(dates, function(i){
                        if(array.indexOf(dates[i]) != -1){
                            condition = 0;
                            return false;
                        }
                    });
                    if(condition){
                        startDate.setDate(fstartDate.getDate()-1);
                        var startdate =  startDate.getFullYear() + "-" + (startDate.getMonth()+1) + "-" + startDate.getDate();
                        var enddate =  endDate.getFullYear() + "-" + (endDate.getMonth()+1) + "-" + endDate.getDate();
                        //console.log('--->'+startdate+' | '+enddate);
                        $.ajax({
                            url : '{{ route('get_ajax_price') }}',
                            type : 'POST',
                            data : { '_token' : '{{ csrf_token() }}', start_date : startdate, end_date : enddate, id : '{{ $mainCar->id }}' },
                            success : function(data){

                                $('.booking-total').show();
                                $('.total-nights strong').html(data.days);
                                // $('.price-per-night strong').html(price);
                                $('.total-book strong').html(Math.round(data.total * 100) / 100);
                                $('.total-field').val(Math.round(data.total * 100) / 100);
                            }
                        });
                    }else{
                        $('.booking-data').show();
                        $('.booking-data .wrong-error').html('* {{ $static_data['strings']['dates_overlap'] }}')
                    }
                    $('.booking-form').removeClass('loading');
                },
            });
            @endif

            $('#rating-select').barrating({
                theme: 'fontawesome-stars-o',
                onSelect: function(value, text, event){
                    $('[name="rating"]').val(value);
                }
            });

            @if(!get_setting('booking_by_payment', 'payment'))
            $('.book-now').click(function(e){
                e.preventDefault();
                $('.booking-form').addClass('loading');
                var first_name  = $('[name="first_name"]').val(),
                    email       = $('[name="email"]').val(),
                    phone       = $('[name="phone"]').val(),
                    start_date  = $('[name="start_date"]').val(),
                    end_date    = $('[name="end_date"]').val(),
                    total       = $('[name="total"]').val(),
                    currency    = $('.currency_code').val(),
                    passengers_number      = $('[name="passengers_number"]').val(),
                    car_id = $('.car-field').val(),
                    token       = $('[name="_token"]').val();
                if(first_name == ''){
                    $('.booking-data').show();
                    $('.booking-data .wrong-error').html('{{ $static_data['strings']['fill_fields_to_book'] }}');
                    $('.booking-form').removeClass('loading');
                }else if(!isEmail(email)){
                    $('.booking-data').show();
                    $('.booking-data .wrong-error').html('{{ $static_data['strings']['email_invalid'] }}');
                    $('.booking-form').removeClass('loading');
                }else if(phone == ''){
                    $('.booking-data').show();
                    $('.booking-data .wrong-error').html('{{ $static_data['strings']['fill_fields_to_book'] }}');
                    $('.booking-form').removeClass('loading');
                }else if(!isPhone(phone)){
                    $('.booking-data').show();
                    $('.booking-data .wrong-error').html('{{ $static_data['strings']['phone_number_validation'] }}');
                    $('.booking-form').removeClass('loading');
                }else{
                    $.ajax({
                        url: '{{ url('bookcar') }}',
                        type: 'post',
                        data: {
                            first_name: first_name,
                            email: email,
                            car_id: car_id,
                            start_date: start_date,
                            end_date: end_date,
                            total: total,
                            passengers_number: passengers_number,
                            _token: token,
                            phone: phone,
                            currency: currency,
                        },
                        success: function (data) {
                            $('.booking-form').removeClass('loading');
                            $('.success-book').show();
                            $('.booking-data, .book-now, .booking-form form').hide();
                            setTimeout(function () {
                                // window.location.reload()
                            }, 3000);
                        }, error: function (data) {
                            console.log(data);
                            $('.booking-form').removeClass('loading');
                            $('.booking-data').show();
                            $('.booking-data .wrong-error').html('{{ $static_data['strings']['something_happened'] }}');
                        }
                    });
                }
            });
            @endif
        });
    </script>
@endsection