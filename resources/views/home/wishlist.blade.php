@extends('layouts.home_layout', ['static_data' => $static_data, 'page_style' => 'home-explore'])

<?php $max_price = get_setting('price_range_max', 'car') ?>

@section('title')

    <title>{{$static_data['strings']['explore'] .' - '. $static_data['strings']['cars']}}</title>

    <meta name="title" content="{{$static_data['strings']['explore'] .' - '. $static_data['strings']['services']}}">

    <meta name="description" content="{{$static_data['strings']['cars']}}">

    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">

    <meta name="author" content="{{$static_data['strings']['explore'] .' - '. $static_data['strings']['services']}}">

    <meta car="og:title" content="{{$static_data['strings']['cars']}}" />

    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />

@endsection

@section('head')

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">

@endsection

@section('bg')

    {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}

@endsection

@section('content')

    @if(count($cars))

        

        @if(isset($featured_cars))

            <div id="half-map-featured" class="col-sm-12 items-grid">

                @foreach($featured_cars as $car)

                    @include('home.partials.car_grid')

                @endforeach

            </div>

        @endif

        <div id="filtered-cars" class="row">

            @foreach($cars as $car)

                 @include('home.partials.car', ['class' => 'col-md-6 col-sm-6 items-grid'])

            @endforeach

        </div>

        <div class="col-sm-12 mtop5 text-centered"><a href="#" class="black-button load-more-cars">{{ $static_data['strings']['load_more'] }}</a><img src="{{asset('assets/images/ajax-loader.gif')}}" class="ajax-loader"/></div>

    @else

        @if(!count($cars))<div class="col-sm-12 text-centered"><strong class="center-align">{{$static_data['strings']['no_results']}}</strong></div>@endif

    @endif



@endsection

@section('footer')

    <input type="hidden" class="hidden token" value="{{ csrf_token() }}"/>

    <input type="hidden" class="hidden" name="isExplore" value="1"/>

    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}" defer></script>

    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}" defer></script>

    <script src="{{asset('assets/js/plugins/clusters.min.js')}}" defer></script>

    <script type="text/javascript">

    $(document).ready(function(){



        $('.more-options').click(function(e){

            e.preventDefault();

            $('.features-filter-box').slideToggle();

        });



        // Load more cars

        var page_car = 4;

        $('.load-more-cars').click(function(e){

            var $this = $(this);

            var ajax_loader = $(this).parent().find('.ajax-loader');

            e.preventDefault();

            $.ajax({

                url: '{{ url('explore') .'/getwishlistcars?page=' }}' + page_car,

                beforeSend: function(){

                    $this.hide(); ajax_loader.show();

                }

            }).done(function(data){

                //$('#google-map').removeClass('loading');

                if(data){$this.show();$('#filtered-cars').append(data);}else{$('#filtered-cars').append('<div class="col-sm-12 info-message text-centered">{{$static_data['strings']['no_results']}}</div>');setTimeout(function(){$('.info-message').slideUp()}, 2000);}

                page_car++;

                ajax_loader.hide();

                var options = {

                    imagePath: '/images/home/icons/m'

                };

            });

        });



        // Car Filter

        $('.car-filter').click(function(e){

            e.preventDefault();

            var parent = $(this).parent(),

                rooms = $('[name="rooms"]').val(),

                passengers_number = $('[name="passengers_number"]').val(),

                {{--

                price_min = $('[name="price_min"]').val(),

                price_max = $('[name="price_max"]').val(),

                --}}

                price_min = '';

                price_max = '';

                token = $('.token').val(),

                sort_id = $('[name="sort_id"]').val(),

                location_id = $('[name="location_id"]').val(),

                category_id = $('[name="category_id"]').val(),

                start_date = $('[name="start_date"]').val(),

                end_date = $('[name="end_date"]').val(),

                features = [];

            $('[name^="features"]').each(function() {

                if($(this).is(':checked')) features.push($(this).val());

            });

            $.ajax({

                url: '{{ url('filter') }}/cars',

                type: 'post',

                data: {features: features, rooms: rooms, isExplore: 1, sort_id: sort_id, passengers_number: passengers_number, price_min: price_min, price_max: price_max, _token: token,location_id: location_id, category_id: category_id, start_date: start_date, end_date: end_date},

                beforeSend: function(){

                    parent.addClass('loading');

                }

            }).done(function(data){

                parent.removeClass('loading');

                $('.load-more-cars').hide();

                if(data){$('#filtered-cars').html(data);}else{$('#filtered-cars').html('<div class="col-sm-12 info-message text-centered">{{$static_data['strings']['no_results']}}</div>');}

                var target = $('#filtered-cars');

                $('html, body').animate({

                    scrollTop: target.offset().top - 150

                }, 1000);

                var options = {

                    imagePath: '/images/home/icons/m'

                };

            });

        });



        // Datepickers

        $('.start_date-picker').datepicker({

            dateFormat: 'dd/mm/yy',

            minDate: 0,

            onSelect: function(dateText, inst) {

                if($('.end_date-picker').hasClass('hasDatePicker')){

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



        // Load price range

        price_range({{ $max_price }});

    }

    );

    </script>

@endsection