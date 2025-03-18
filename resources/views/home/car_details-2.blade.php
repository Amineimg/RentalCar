@extends('layouts.home_layout', ['static_data', $static_data])
@section('title')
    <title>{{ $car->contentload->name }}</title>
    <meta name="title" content="{{ $car->contentload->meta_title }}">
    <meta name="description" content="{{ $car->contentload->meta_description }}">
    <meta name="author" content="{{ $static_data['site_settings']['site_name'] }}">
    <meta car="og:title" content="{{ $car->contentload->meta_title }}" />
    <meta car="og:image"
        content="{{ asset('/assets/images/home/') . '/' . $static_data['design_settings']['slider_background'] }}" />
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
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4 car_details_header">{{ $car->contentload->name }}</h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-7">
                <img class="img-fluid" src="{{ asset('images/data') . '/' . $car->front_image->image }}"
                    alt="{{ $static_data['strings']['opt_fl_heading'] }}">
            </div>

            <div class="col-md-5">
                {{-- <h3 class="my-3">{{$static_data['strings']['from'].' '.currency($car->price_from, 'EUR', 'EUR')}} </h3> --}}
                <h3 class="my-3">{{ currency($car->price_per_night, 'EUR', 'EUR') }}</h3>
                <div class="features_table">
                    <div class="line grey_area">
                        @if (Session::get('language') == 'en')
                            <div class="left">Model</div>
                        @elseif(Session::get('language') == 'es')
                            <div class="left">Modelo</div>
                        @elseif(Session::get('language') == 'it')
                            <div class="left">Modello</div>
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
                        @else
                            <div class="left">Places:</div>
                        @endif

                        <div class="right">{{ $car->passengers_number }}</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4 font-weight-bold">{{ $static_data['strings']['pricing_strategy'] }}</h3>

        <div class="row">
            <div class="col-md-12 mb-4">
                <table class="table-bordered table-striped table-info table-sm w-100">
                    <thead>
                        <tr>
                            <th></th>
                            <th>{{$seasons_table_th[0] ?? ''}}</th>
                            <th>{{$seasons_table_th[1] ?? ''}}</th>
                            <th>{{$seasons_table_th[2] ?? ''}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seasons_table as $season)
                        <tr>
                            <th>{!! $season['title'] !!}</th>
                            <td>{{ $season['p1'] }}</td>
                            <td>{{ $season['p2'] }}</td>
                            <td>{{ $season['p3'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
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
                @else
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Assurance zéro
                        franchise</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Exonération des
                        dommages par collision</p>
                    <p><i class="fa fa-check-square-o text-success" aria-hidden="true"></i>&nbsp;&nbsp;Protection anti-vol
                    </p>
                @endif

            </div>


        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
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
