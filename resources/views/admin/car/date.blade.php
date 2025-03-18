@extends('layouts.admin')

@section('title')
    <title>{{get_string('car_availability') . ' - ' . get_setting('site_name', 'site')}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/fullcalendar-2/fullcalendar-2.css') }}">

    <style type="text/css">
        .calendar-sidebar .panel-success {
            border-color: #d6e9c6;
        }
        .calendar-sidebar .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
        .calendar-sidebar .panel-body {
            padding: 15px;
        }
    </style>
@endsection
@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('car_availability')}} - {{ $car->contentDefault->name }}</h3>
    <div class="seasons_requirements">
        <h6  style="color:red;"><b>Haute saison : Du 01/07 Au 30/09</b></h6>
    </div>

@endsection
    <div class="col l9 m8 s12 calendar-body">
        <div id="calendar"></div>
    </div>

    <div class="calendar-sidebar col l3 m4 s12 pull-right">
        <div class="calendar-sidebar-row">
            <div class="panel panel-success">
                <div class="panel-heading">Panel heading</div>
                <div class="panel-body">
                    <form role="form" id="Prices_form">
                        {{ csrf_field() }}
                        <h5>Sélection</h5>
                        <div class="form-group">
                            <label for="start_date">{{ get_string("start_date") }} :</label>
                            <input class="form-control date-picker" name="start_date" type="text" id="start_date" >
                        </div>
                        <div class="form-group">
                            <label for="end_date">{{ get_string("end_date") }} :</label>
                            <input class="form-control date-picker" name="end_date" type="text" id="end_date" >
                        </div>
                        <hr>
                        <h5>Tarification</h5>
                        <div class="form-group">
                            <label for="d_4">Prix (1  à  4 Jours) :</label>
                            <input class="form-control" name="d_4" type="number" min="1" step="any" lang="fr" value="0" id="d_4">
                        </div>
                        <div class="form-group">
                            <label for="d_10">Prix (5  à  10 Jours) :</label>
                            <input class="form-control" name="d_10" type="number" min="1" step="any" lang="fr" value="0" id="d_10">
                        </div>
                        <div class="form-group">
                            <label for="d_11">Prix (Plus de 11 Jours) :</label>
                            <input class="form-control" name="d_11" type="number" min="1" step="any" lang="fr" value="0" id="d_11">
                        </div>
                        <div class="form-group text-center">
                            <input class="btn btn-success" name="submit" type="submit" id="submit" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('assets/js/plugins/multidatespicker.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
    <script src="{{ asset('assets/js/plugins/fullcalendar-2/fullcalendar-2.js') }}"></script>
    <script src="{{asset('assets/js/plugins/datepicker-fr.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2"></script>


    <script type="text/javascript">
        var booked_dates = [];
        var dateToday = new Date();

        $(document).ready(function() {
            $('.date-picker').datepicker({
                dateFormat: 'dd/mm/yy',
            });

            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'year,month,basicWeek,basicDay'
                },
                timezone: 'local',
                height: "auto",
                selectable: true,
                dragabble: false,
                defaultView: 'year',
                yearColumns: 3,
                durationEditable: true,
                bootstrap: false,
                events: [
                    @if ($events)
                        @foreach ($events as $event)
                            {
                                title: "{{ $event['title']['d_4'] }}\n{{ $event['title']['d_10'] }}\n{{ $event['title']['d_11'] }}\n",
                                start: new Date("{{ $event['start'] }}"),
                                end: new Date("{{ $event['end'] }}"),
                                allDay: "{{ $event['allDay'] }}",
                                color: "{{ $event['color'] }}",
                            },
                        @endforeach
                    @endif
                ],
                select: function(start, end, allDay) {
                    $('#start_date').val( start.format('DD/MM/YYYY') );
                    $('#end_date').val( end.format('DD/MM/YYYY') );

                    var event = {
                        id: 1,
                        instructorid: 1,
                        start: start.format('YYYY-MM-DD'),
                        end: end.format('YYYY-MM-DD'),
                        display: 'background',
                        color: '9fcce2'
                    };

                    calendar.fullCalendar('removeEvents', 1 )
                    calendar.fullCalendar('renderEvent', event, true);
                },
            });

            $(document).on('submit', '#Prices_form', function(e) {
                e.preventDefault();
                $.ajax({
                    url : '{{ route('store_prices_car', $car->id) }}',
                    type : 'POST',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success : function(data){
                        if (data.success == 1) {
                            Swal.fire({
                                title: 'Success',
                                text: "Modification bien Enregistrer",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        }
                    }
                });
            });

        });
    </script>
@endsection
