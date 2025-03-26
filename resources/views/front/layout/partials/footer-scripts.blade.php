 <!-- jQuery -->
 <script src="{{ URL::asset('/front/build/js/jquery-3.7.1.min.js') }}"></script>

 <!-- Bootstrap Core JS -->
 <script src="{{ URL::asset('/front/build/js/bootstrap.bundle.min.js') }}"></script>

         <!-- Select2 JS -->
         <script src="{{ URL::asset('/front/build/plugins/select2/js/select2.min.js') }}"></script>

     <!-- Aos -->
     <script src="{{ URL::asset('/front/build/plugins/aos/aos.js') }}"></script>

         <!-- Top JS -->
         <script src="{{ URL::asset('/front/build/js/backToTop.js') }}"></script>
     <!-- Sticky Sidebar JS -->
     <script src="{{ URL::asset('front/build/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
     <script src="{{ URL::asset('front/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
     <!-- Datatables JS -->
     <script src="{{ URL::asset('/front/build/plugins/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ URL::asset('/front/build/plugins/datatables/datatables.min.js') }}"></script>

     <!-- counterup JS -->
     <script src="{{ URL::asset('/front/build/js/jquery.waypoints.js') }}"></script>
     <script src="{{ URL::asset('/front/build/js/jquery.counterup.min.js') }}"></script>

     <!-- Owl Carousel JS -->
     <script src="{{ URL::asset('/front/build/js/owl.carousel.min.js') }}"></script>


     <!-- Datepicker Core JS -->
     <script src="{{ URL::asset('/front/build/plugins/moment/moment.min.js') }}"></script>
     <script src="{{ URL::asset('/front/build/js/bootstrap-datetimepicker.min.js') }}"></script>

     <!-- Fancybox JS -->
     <script src="{{ URL::asset('/front/build/plugins/fancybox/fancybox.umd.js') }}"></script>

     <!-- Slick JS -->
     <script src="{{ URL::asset('/front/build/plugins/slick/slick.js') }}"></script>

     <!-- Rangeslider JS -->
     <script src="{{ URL::asset('/front/build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
     <script src="{{ URL::asset('/front/build/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
     <!-- Fearther JS -->
     <script src="{{ URL::asset('/front/build/js/feather.min.js') }}"></script>

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
 @yield('scripts')
