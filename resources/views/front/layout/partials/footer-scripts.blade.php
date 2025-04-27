
 @if (Route::is(['listing-map']))
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
     <script src="{{ URL::asset('/front/build/js/map.js') }}"></script>
 @endif

     <!-- Fullcalendar JS -->
     <script src="{{ URL::asset('/front/build/js/moment.min.js') }}"></script>
     <script src="{{ URL::asset('/front/build/plugins/fullcalendar/index.global.min.js') }}"></script>

 <!-- Datatables JS -->
 <script src="{{ URL::asset('/front/build/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ URL::asset('/front/build/plugins/datatables/datatables.min.js') }}"></script>

 <!-- Custom JS -->
 <script src="{{ URL::asset('/front/build/js/script.js') }}"></script>

 <script>
        function formatMoney(amount, currency = 'EUR') {
        return new Intl.NumberFormat('de-DE', {
            style: 'currency',
            currency: currency,
        }).format(amount);
    }
 </script>

 <script>

        if ($('.datetimepicker').length > 0) {
            $('.start_date').each(function () {
                var minDate = $(this).data('min-date'); // Get min date from HTML attribute
                var currentDate = $(this).data('current-date'); // Get min date from HTML attribute
                console.log(currentDate ,"hhh")
                $(this).datetimepicker({
                    format: 'DD-MM-YYYY',
                    minDate: minDate && moment(minDate, 'DD-MM-YYYY').isValid() ? moment(minDate, 'DD-MM-YYYY') : false, // Apply min date if set and valid
                    date: currentDate && moment(currentDate, 'DD-MM-YYYY').isValid() ? moment(currentDate, 'DD-MM-YYYY') : false, // Set current date as the default
                    icons: {
                        up: "fas fa-angle-up",
                        down: "fas fa-angle-down",
                        next: 'fas fa-angle-right',
                        previous: 'fas fa-angle-left'
                    }
                }).on('dp.change',function(e){

                    var selectedDate = e.date ? e.date.clone() : null; // Get selected date
                    if (selectedDate) {
                        selectedDate.add(1, 'days'); // Ensure end date is at least 1 day ahead
                    }

                    // Update End Date Picker
                    $('.end_date').data("DateTimePicker").minDate(selectedDate);
                    // $('.end_date').data("DateTimePicker").date(selectedDate); // Set default value

                });
                // $(this).trigger('dp.change');


            });
            $('.end_date').each(function () {
                var minDate = $(this).data('min-date'); // Get min date from HTML attribute
                var currentDate = $(this).data('current-date'); // Get min date from HTML attribute
                console.log( moment(minDate, 'YYYY-MM-DD'))
                $(this).datetimepicker({
                    format: 'DD-MM-YYYY',
                    minDate: minDate && moment(minDate, 'DD-MM-YYYY').isValid() ? moment(minDate, 'DD-MM-YYYY') : false, // Apply min date if set and valid
                    date: currentDate && moment(currentDate, 'DD-MM-YYYY').isValid() ? moment(currentDate, 'DD-MM-YYYY') : false, // Set current date as the default
                    icons: {
                        up: "fas fa-angle-up",
                        down: "fas fa-angle-down",
                        next: 'fas fa-angle-right',
                        previous: 'fas fa-angle-left'
                    }
                })

            });
        }
        if($('.timepicker').length > 0) {
            $('.timepicker').datetimepicker({
                format: "hh:mm",
                date: new Date() ,
                icons: {
                    up: "fa fa-angle-up",
                    down: "fa fa-angle-down",
                    next: 'fa fa-angle-right',
                    previous: 'fa fa-angle-left'
                }
            });

            // $('.timepicker').on('dp.change', function (e) {

            //     var selectedDate = e.date ? e.date.format('YYYY-MM-DD') : null;
            //     var today = moment().format('YYYY-MM-DD');
            //     var now = moment().format('HH:mm');

            //     if (selectedDate === today) {
            //         // If today, set minTime to current time
            //         $('.timepicker').data("DateTimePicker").minDate(moment().startOf('minute'));
            //         $('.timepicker').data("DateTimePicker").date(moment().startOf('minute')); // Set default time to now
            //     } else {
            //         // If not today, no min time required
            //         $('.timepicker').data("DateTimePicker").minDate(false);
            //         $('.timepicker').data("DateTimePicker").date(now); // Default time for other days
            //     }
            // });
	    }
 </script>
 @yield('scripts')
