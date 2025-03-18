<div class="col-md-6">
    <div class="item-list">
        <div class="price-sign">
            @if(!empty($car->booking_price))
                {{currency($car->booking_price,'EUR','EUR')}}
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
                        <img class="responsive-img" src="{{ asset('images/data').'/'.$car->front_image->image }}"/>
                    @else
                        <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}"/>
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
                </ul>

            </div>

            <div class="col-8">
                <div class="InfosDevis_buttons">
                    <button type="button" data-toggle="modal" data-target="{{ '#important_infos' . $i }}" class="">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> {{$static_data['strings']['booking_important_infos']}}
                    </button>
                    <div id="{{ 'important_infos' . $i }}" class="modal not-summernote fade" role="dialog">
                        <div class="modal-dialog modal-dialog modal-dialog-centered">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="modal_container">
                                            <h4>{{$static_data['strings']['booking_important_infos']}}</h4>
                                            <div class="modal_content">
                                                <div class="faq active">
                                                    @if (Session::get('language') == 'en')
                                                        <strong class="faq-title">
                                                            Important info
                                                        </strong>
                                                        <div class="faq-text">
                                                            <div class="faq-text-content">
                                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                                <div class="text-padding">
                                                                    <strong>Driver & licence requirements</strong>
                                                                </div>
                                                                <div>
                                                                    <p>When you pick the car up, you'll need just :</p>
                                                                    <ul>
                                                                        <li>Passport or national ID card</li>
                                                                        <li>Driving licence</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @elseif(Session::get('language') == 'es')
                                                            <strong class="faq-title">
                                                                Información importante
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Documentación necesaria</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>A la hora de recoger el vehículo, necesitarás :</p>
                                                                        <ul>
                                                                            <li>Pasaporte o documento nacional de identidad</li>
                                                                            <li>Permiso de conducir</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif(Session::get('language') == 'it')
                                                            <strong class="faq-title">
                                                                Informazioni importanti
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Requisiti di guida e patente</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>Al momento del ritiro dell'auto ti serviranno solo :</p>
                                                                        <ul>
                                                                            <li>Passaporto o carta d'identità nazionale</li>
                                                                            <li>Patente di guida</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif(Session::get('language') == 'pl')
                                                            <strong class="faq-title">
                                                                ważny
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Wymagania dotyczące kierowcy i prawa jazdy</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>Podczas odbioru pojazdu będziesz potrzebować następujących dokumentów:</p>
                                                                        <ul>
                                                                            <li>Paszport lub dowód osobisty</li>
                                                                            <li>Prawo jazdy</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif(Session::get('language') == 'nl')
                                                            <strong class="faq-title">
                                                                Belangrijk
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Eisen met betrekking tot de bestuurder en het rijbewijs</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>Bij het overnemen van het voertuig heeft u de volgende items nodig :</p>
                                                                        <ul>
                                                                            <li>Paspoort of identiteitskaart</li>
                                                                            <li>Rijbewijs</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif(Session::get('language') == 'pt')
                                                            <strong class="faq-title">
                                                                Importante
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Requisitos relativos ao condutor e à carta de condução</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>Ao receber o veículo, você precisará dos seguintes itens:</p>
                                                                        <ul>
                                                                            <li>Passaporte ou cartão de identidade</li>
                                                                            <li>Carta de condução</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <strong class="faq-title">
                                                                Important
                                                            </strong>
                                                            <div class="faq-text">
                                                                <div class="faq-text-content">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    <div class="text-padding">
                                                                        <strong>Exigences relatives au conducteur et au permis de conduire</strong>
                                                                    </div>
                                                                    <div>
                                                                        <p>Lors de la prise en charge du véhicule, vous aurez besoin des éléments suivants :</p>
                                                                        <ul>
                                                                            <li>Passeport ou carte d'identité</li>
                                                                            <li>Permis de conduire</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    <button class="faq-toggle">
                                                        <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" data-toggle="modal" data-target="{{ '#devis_email' . $i }}" class="">
                        <i class="fa fa-envelope" aria-hidden="true"></i> {{$static_data['strings']['devis_email']}}
                    </button>
                    <div id="{{ 'devis_email' . $i }}" class="modal not-summernote fade" role="dialog">
                        <div class="modal-dialog modal-dialog modal-dialog-centered">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="modal_container">
                                            <h4>{{$static_data['strings']['devis_email']}}</h4>
                                            <div class="modal_devis_email_content">
                                                <strong class="modal-titre-content">
                                                    {{ $car->contentload->name }}
                                                </strong>
                                                <div class="modal-body-content">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="car-img">
                                                                @if($car->front_image)
                                                                    <img class="responsive-img" src="{{ asset('images/data').'/'.$car->front_image->image }}"/>
                                                                @else
                                                                    <img class="responsive-img" src="{{ asset('images/').'/no_image.jpg' }}"/>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="car-preferences">
                                                                @if(!empty($car->passengers_number))<li class="ic-passengers">{{ $car->passengers_number  . " " . $static_data['strings']['places'] }}</li>@endif
                                                                @if(!empty($car->doors))<li class="ic-doors">{{ $car->doors . " " . $static_data['strings']['doors'] }}</li>@endif
                                                                @if(!empty($car->suitcases))<li class="ic-suitcases">{{ $car->suitcases . " " . $static_data['strings']['suitcases'] }}</li>@endif
                                                                @if(!empty($car->airconditioner))<li class="ic-airconditioner">{{ $static_data['strings']['airconditioner'] }}</li>@endif
                                                                @if(!empty($car->transmission))<li class="ic-transmission">{{ $static_data['strings'][$car->transmission] }}</li>@endif
                                                                @if(!empty($car->carburant))<li class="ic-carburant">{{ $static_data['strings'][$car->carburant] }}</li>@endif
                                                            </ul>

                                                        </div>
                                                    </div><hr>

                                                    @if (Session::get('language') == 'en')
                                                        <div class="">
                                                            <h6><strong>{{"Price for " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Deductible " . currency($car->franchise,'EUR','EUR') . " for " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Total price : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @elseif (Session::get('language') == 'es')
                                                        <div class="">
                                                            <h6><strong>{{"Precio por " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Deducible " . currency($car->franchise,'EUR','EUR') . " durante " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Precio total : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @elseif (Session::get('language') == 'it')
                                                        <div class="">
                                                            <h6><strong>{{"Prezzo per " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Deducibile " . currency($car->franchise,'EUR','EUR') . " per " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Prezzo totale : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @elseif (Session::get('language') == 'pl')
                                                        <div class="">
                                                            <h6><strong>{{"Cena za " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Więcej " . currency($car->franchise,'EUR','EUR') . " za franczyzę dla " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Całkowita cena : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @elseif (Session::get('language') == 'nl')
                                                        <div class="">
                                                            <h6><strong>{{"Prijs voor " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Plus " . currency($car->franchise,'EUR','EUR') . " eigen risico voor " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Totale prijs : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @elseif (Session::get('language') == 'pt')
                                                        <div class="">
                                                            <h6><strong>{{"Preço para " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Mais " . currency($car->franchise,'EUR','EUR') . " franquia por " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Preço total : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @else
                                                        <div class="">
                                                            <h6><strong>{{"Prix pour " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }} </strong> {{ currency($car->booking_price,'EUR','EUR') }} </h6>
                                                            <h6><strong>{{"Plus " . currency($car->franchise,'EUR','EUR') . " de franchise pour " . $nombreDeJours . " " . $static_data['strings']['days'] . " : " }}</strong> {{ currency($car->franchise * $nombreDeJours,'EUR','EUR') }} </h6>
                                                            @if($pickup_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $pickup_location->contentload->location . " : " }} </strong> {{ $pickup_location->tarif }} &euro; </h6>
                                                            @endif
                                                            @if($dropoff_location->tarif != 0)
                                                                <h6><strong>{{ $static_data['strings']['conveying'] . " " . $dropoff_location->contentload->location . " : " }} </strong> {{ $dropoff_location->tarif }} &euro; </h6>
                                                            @endif
                                                            <h5><strong>Prix totale : </strong> {{ currency( $car->booking_price + ( $car->franchise * $nombreDeJours ) + $pickup_location->tarif + $dropoff_location->tarif ,'EUR','EUR') }} </h5>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="devis_email_form">
                                                {!! Form::open(['method' => 'post', 'url' => route('devis_email')]) !!}
                                                <div class="form-group">
                                                    <label for="{{'user_devis_email_' . $i}}"><b>{{$static_data["strings"]["your_email"]}}</b></label><br>
                                                    <input type="email" id="{{'user_devis_email_' . $i}}" name="user_devis_email" class="form-control filter-field" required >
                                                    <span>
                                                        @if (Session::get('language') == 'en')
                                                            Make sure your email address does not contain any typos.
                                                        @elseif (Session::get('language') == 'es')
                                                            Asegúrese de que su dirección de correo electrónico no contenga errores tipográficos.
                                                        @elseif (Session::get('language') == 'it')
                                                            Assicurati che il tuo indirizzo email non contenga errori di battitura.
                                                        @elseif (Session::get('language') == 'pl')
                                                            Upewnij się, że twój adres e-mail nie zawiera literówek.
                                                        @elseif (Session::get('language') == 'nl')
                                                            Zorg ervoor dat uw e-mailadres geen typfouten bevat.
                                                        @elseif (Session::get('language') == 'pt')
                                                            Certifique-se de que seu endereço de e-mail não contém erros de digitação.
                                                        @else
                                                            Assurez-vous que votre adresse e-mail ne contienne pas de faute de frappe.
                                                        @endif
                                                    </span>
                                                </div>
                                                <input type="hidden" id="{{'car_id_' . $i}}" name="car_id" value="{{$car->id}}" class="hidden" >
                                                <input type="hidden" id="{{'booking_days_' . $i}}" name="booking_days" value="{{$nombreDeJours}}" class="hidden" >
                                                <input type="hidden" id="{{'booking_price_' . $i}}" name="booking_price" value="{{$car->booking_price}}" class="hidden" >
                                                <input type="hidden" id="{{'pickup_loc_' . $i}}" name="pickup_loc" value="{{$pickup_location->id}}" class="hidden" >
                                                <input type="hidden" id="{{'dropoff_loc_' . $i}}" name="dropoff_loc" value="{{$dropoff_location->id}}" class="hidden" >
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary message submit_email" data-id="{{ $i }}">{{$static_data['strings']['submit']}}</button>
                                                </div>
                                                {!! Form::close() !!}
                                                <div id="{{'message_' . $i}}" style="font-weight:700;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                {!! Form::open(['method' => 'post', 'url' => route('booking')]) !!}
                <input type="hidden" name="car_id" value="{{$car->id}}" class="hidden" >
                <button type="submit" class="btn btn-primary pull-right">{{$static_data['strings']['select']}}</button>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
