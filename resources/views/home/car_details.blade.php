@extends('layouts.home_layout', ['static_data', $static_data])
@section('title')
    <title>{{ $car->contentload->name }}</title>
    <meta name="title" content="{{ $car->contentload->meta_title }}">
    <meta name="description" content="{{ $car->contentload->meta_description }}">
    <meta name="author" content="{{ $static_data['strings']['site_name'] }}">
    <meta car="og:title" content="{{ $car->contentload->meta_title }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
        
    @if (Session::get('language') == 'en')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @elseif(Session::get('language') == 'es')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @elseif(Session::get('language') == 'it')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @elseif(Session::get('language') == 'pl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @elseif(Session::get('language') == 'nl')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @elseif(Session::get('language') == 'pt')
        <link rel="alternate" hreflang="fr" href="https://www.jacarandacar.com/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
    @else
        <link rel="alternate" hreflang="en" href="https://www.jacarandacar.com/rental/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="es" href="https://www.jacarandacar.com/es/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="it" href="https://www.jacarandacar.com/noleggio/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pl" href="https://www.jacarandacar.com/wynajem/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="nl" href="https://www.jacarandacar.com/verhuur/car-details/{{$car->id}}/{{$car->alias}}" />
        <link rel="alternate" hreflang="pt" href="https://www.jacarandacar.com/aluguel/car-details/{{$car->id}}/{{$car->alias}}" />
    @endif
    
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{ $static_data['strings']['location'] . ' ' . $car->contentload->name }}",
      "image": "{{asset('images/data').'/'.$car->front_image->image}}",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "EUR",
        "price": "{{$car->price_per_night}}"
      }
    }
    </script>
@endsection
@section('bg')
    {{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}
@endsection
@section('content')
    <div class="container car_details_page">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4 car_details_header">{{ $car->contentload->name }}</h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-7">
                <img class="img-fluid" src="{{ asset('images/data') . '/' . $car->front_image->image }}"
                    alt="{{ $static_data['strings']['opt_fl_heading'] }}">
            </div>

            <div class="col-md-5 desktop_pricing_strategy">
                <h3 class="my-4 font-weight-bold">{{ $static_data['strings']['pricing_strategy'] }}</h3>

                @foreach ($seasons_table as $season)
                @php
                    //$active_class = ($season['current_season'] == $season['title']) ? ' active' : '';
                @endphp
                    <div class="faq active">
                      <strong class="faq-title">
                          @php
                            //$season_title = preg_replace('/<br>/', "  <span class='and_span'>&</span>  ", $season['title'], 1);
                          @endphp
                          {!! $season['title'] !!}
                      </strong>
                      <div class="faq-text">
                          <table class="table-bordered table-striped table-info table-sm w-100 pricing_strategy_table">
                            <thead>
                                <tr>
                                    <th class="text-center">{{$seasons_table_th[0] ?? ''}}</th>
                                    <th class="text-center">{{$seasons_table_th[1] ?? ''}}</th>
                                    <th class="text-center">{{$seasons_table_th[2] ?? ''}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ $season['p1'] }}</td>
                                    <td class="text-center">{{ $season['p2'] }}</td>
                                    <td class="text-center">{{ $season['p3'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <button class="faq-toggle">
                          <i class="fa fa-chevron-down"></i>
                          <i class="fa fa-times"></i>
                      </button>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->


        <div class="row mobile_order">

            <div class="col-md-3 mb-4">
                <div class="left h5">{{ $static_data['strings']['franchise'] }}
                    <strong>{{ currency($car->franchise, 'EUR', 'EUR') }}</strong> / {{ $static_data['strings']['day'] }}</div>
                <hr>
                @if (Session::get('language') == 'en')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Zero deductible
                        insurance</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Collision Damage
                        Waiver</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Anti-theft
                        protection</p>
                @elseif(Session::get('language') == 'es')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Seguro de deducible
                        cero</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Exención de daños
                        por colisión</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Protección anti-vol
                    </p>
                @elseif(Session::get('language') == 'it')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Assicurazione zero
                        franchigia</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Assicurazione per
                        incidenti</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Protezione antivol
                    </p>
                @elseif(Session::get('language') == 'pl')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Ubezpieczenie bez własnej odpowiedzialności</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Zwolnienie z szkód spowodowanych kolizją</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Ochrona przed kradzieżą</p>
                @elseif(Session::get('language') == 'nl')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Geen eigen risico verzekering</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Vrijstelling van botsingsschade</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Diefstalbeveiliging</p>
                @elseif(Session::get('language') == 'pt')
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Sem seguro de risco próprio</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Isenção de danos por colisão</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Proteção contra roubo</p>
                @else
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Assurance zéro
                        franchise</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Exonération des
                        dommages par collision</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Protection anti-vol
                    </p>
                @endif

            </div>

            <!-------------------    mobile pricing strategy       --------------------->

            <div class="col-sm-12 col-xs-12 mb-4 mobile_pricing_strategy">
                <h3 class="my-4 font-weight-bold">{{ $static_data['strings']['pricing_strategy'] }}</h3>
                @foreach ($seasons_table as $season)
                @php
                    //$active_class = ($season['current_season'] == $season['title']) ? ' active' : '';
                @endphp
                    <div class="faq active">
                      <strong class="faq-title">
                          @php
                            // $season_title = preg_replace('/<br>/', "  <span class='and_span'>&</span>  ", $season['title'], 1);
                          @endphp
                          {!! $season['title'] !!}
                      </strong>
                      <div class="faq-text">
                          <table class="table-bordered table-striped table-info table-sm w-100 pricing_strategy_table">
                            <thead>
                                <tr>
                                    <th class="text-center">{{$seasons_table_th[0] ?? ''}}</th>
                                    <th class="text-center">{{$seasons_table_th[1] ?? ''}}</th>
                                    <th class="text-center">{{$seasons_table_th[2] ?? ''}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ $season['p1'] }}</td>
                                    <td class="text-center">{{ $season['p2'] }}</td>
                                    <td class="text-center">{{ $season['p3'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <button class="faq-toggle">
                          <i class="fa fa-chevron-down"></i>
                          <i class="fa fa-times"></i>
                      </button>
                    </div>
                @endforeach
            </div>

            <!--------------------------------------------------------------------->

            <div class="col-md-9 ">
                {{-- <h3 class="my-3">{{$static_data['strings']['from'].' '.currency($car->price_from, 'EUR', 'EUR')}} </h3> --}}
                {{-- <h3 class="my-3">{{ !empty($car->price_per_night) ? currency($car->price_per_night, 'EUR', 'EUR') : '' }}</h3> --}}
                <div class="features_table">
                    <div class="line grey_area">
                        @if (Session::get('language') == 'en')
                            <div class="left">Model</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">Modelo</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Modello</div>
                        @elseif(Session::get('language') == 'pl')
                            <div class="left">Model</div>
                        @elseif(Session::get('language') == 'nl')
                            <div class="left">Model</div>
                        @elseif(Session::get('language') == 'pt')
                            <div class="left">Modelo</div>
                        @else
                            <div class="left">Modèle</div>
                        @endif
                        <div class="right">{{ $car->contentload->name }}</div>
                    </div>
                    <div class="line ">

                        @if (Session::get('language') == 'en')
                            <div class="left">Fuel:</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">Combustible:</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Carburante:</div>
                        @elseif(Session::get('language') == 'pl')
                            <div class="left">Paliwo:</div>
                        @elseif(Session::get('language') == 'nl')
                            <div class="left">Brandstof:</div>
                        @elseif(Session::get('language') == 'pt')
                            <div class="left">Combustível:</div>
                        @else
                            <div class="left">Carburant:</div>
                        @endif

                        <div class="right">{{ $car->carburant }}</div>
                    </div>
                    <div class="line grey_area">
                        @if (Session::get('language') == 'en')
                            <div class="left">Air conditioning:</div>
                            <div class="right">{{ $car->airconditioner ? 'Yes' : 'No' }}</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">Aire acondicionado:</div>
                            <div class="right">{{ $car->airconditioner ? 'Sí' : 'No' }}</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Aria condizionata:</div>
                            <div class="right">{{ $car->airconditioner ? 'SÌ' : 'No' }}</div>
                        @elseif(Session::get('language') == 'pl')
                            <div class="left">Klimatyzacja:</div>
                            <div class="right">{{ $car->airconditioner ? 'Tak' : 'Nie' }}</div>
                        @elseif(Session::get('language') == 'nl')
                            <div class="left">Airconditioning:</div>
                            <div class="right">{{ $car->airconditioner ? 'Ja' : 'Nee' }}</div>
                        @elseif(Session::get('language') == 'pt')
                            <div class="left">Ar condicionado:</div>
                            <div class="right">{{ $car->airconditioner ? 'Sim' : 'Não' }}</div>
                        @else
                            <div class="left">Air conditionné:</div>
                            <div class="right">{{ $car->airconditioner ? 'Oui' : 'Non' }}</div>
                        @endif


                    </div>
                    <div class="line ">
                        @if (Session::get('language') == 'en')
                            <div class="left">Doors:</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">puertas:</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Porte:</div>
                        @elseif(Session::get('language') == 'pl')
                            <div class="left">Drzwi:</div>
                        @elseif(Session::get('language') == 'nl')
                            <div class="left">Deuren:</div>
                        @elseif(Session::get('language') == 'pt')
                            <div class="left">Portas:</div>
                        @else
                            <div class="left">Portes:</div>
                        @endif
                        <div class="right">{{ $car->doors }}</div>
                    </div>
                    <div class="line grey_area">
                        @if (Session::get('language') == 'en')
                            <div class="left">Seats:</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">Asientos:</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Sedili:</div>
                        @elseif(Session::get('language') == 'pl')
                            <div class="left">Miejsca:</div>
                        @elseif(Session::get('language') == 'nl')
                            <div class="left">Plaatsen:</div>
                        @elseif(Session::get('language') == 'pt')
                            <div class="left">Lugares:</div>
                        @else
                            <div class="left">Places:</div>
                        @endif

                        <div class="right">{{ $car->passengers_number }}</div>
                    </div>
                </div>

            </div>


        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="" id="book_car_btn" data-toggle="modal" data-target="#search-box-modal"
                    data-id="{{ $car->id }}"
                    class="btn btn-primary pull-right">{{ $static_data['strings']['book_this_car'] }}</a>
            </div>
        </div>


        <div id="search-box-modal" class="modal not-summernote fade" role="dialog">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                @include('home.partials.search_box_modal')
            </div>
        </div>

    </div>
@endsection
@section('footer')
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            // Datepickers
            $('.start_date-picker').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                onSelect: function(dateText, inst) {
                    if ($('.end_date-picker').hasClass('hasDatePicker')) {
                        $('.end_date-picker').datepicker('destroy');
                    }
                    var startDate = $(this).datepicker('getDate');
                    startDate.setDate(startDate.getDate() + 1);
                    $("[name='start_date']").val(dateText);
                    $("[name='end_date']").removeAttr('disabled');
                    $('.end_date-picker').datepicker({
                        dateFormat: 'dd/mm/yy',
                        minDate: startDate,
                        onSelect: function(dateText, inst) {
                            $("[name='end_date']").val(dateText);
                        }
                    });
                }
            });
            $('#book_car_btn').click(function(e) {
                e.preventDefault();
                $('#selected_car_id').val($(this).data('id'));
            });
            $('search-form').submit(function(e) {
                e.preventDefault();
                let start_date = $("[name='start_date']").val();
                let end_date = $("[name='end_date']").val();
                if (start_date == null || end_date == null)
                    e.preventDefault();
            });
            $(document).on('click', '#booking_submit_btn', function(e) {
                var isValid = true;
                $(".start_date_input_group").removeClass('invalid')
                $(".end_date_input_group").removeClass('invalid')
                if ($("input[name=end_date]").val() == '') {
                    isValid = false;
                    $(".end_date_input_group").addClass('invalid')
                }
                if ($("input[name=start_date]").val() == '') {
                    $(".start_date_input_group").addClass('invalid')
                    isValid = false;
                }
                if (!isValid) {
                    e.preventDefault();
                }
            });


        });
    </script>
@endsection
