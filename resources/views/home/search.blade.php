@extends('layouts.home_layout', ['static_data', $static_data])
<?php $max_price = get_setting('price_range_max', 'car') ?>
@section('title')
    <title>{{$static_data['strings']['search_results']}}</title>
    <meta charset="UTF-8">
    <meta name="title" content="{{ $static_data['strings']['site_name'] }}">
    <meta name="description" content="{{ $static_data['strings']['site_description_'] }}">
    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">
    <meta name="author" content="{{ $static_data['strings']['site_name'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['site_name'] }}" />
    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />

    <link href="{{ asset('assets/fontawesome-free-6.2.1/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome-free-6.2.1/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome-free-6.2.1/css/solid.css') }}" rel="stylesheet" />
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
@endsection
@section('bg')
    {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
@endsection
@section('content')
    @if(false)
    <div class="row header-tabs">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" id="header-tabs">
                @if(isset($cars) && count($cars))
                <li class="nav-item"><a class="nav-link active" href="#accordion-cars" data-toggle="tab" aria-expanded="true"><i class="fa fa-building-o"></i><span>
                    @if(count($cars) == 1)
                    {{ '1 '.$static_data['strings']['villa'] }}
                    @else
                    {{ count($cars).' '.$static_data['strings']['villas'] }}
                    @endif
                </span></a></li>
                @endif
            </ul>
        </div>
    </div>
    @endif

    <div class="row marginalized search_page">
        <div class="col-md-12">
            <section class="search_infos_container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="d_flex search_infos">
                            <div>
                                <h5>{{ $pickup_location->contentload->location }}</h5>
                                <span>
                                    {{ Session::get('start_date') . ", " . Session::get('start_time') }}
                                </span>
                            </div>
                            <div class="chevron_right"> > </div>
                            <div>
                                <h5>{{ $dropoff_location->contentload->location }}</h5>
                                <span>
                                    {{ Session::get('end_date') . ", " . Session::get('end_time') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" data-toggle="modal" data-target="#search-box-modal" class="btn btn-primary btn-select-car">{{$static_data['strings']['edit']}}</button>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-md-12 order-md-last order-first">
            <div class="tab-content" style="margin-top:6px;">
                <div class="tab-pane active" id="accordion-cars" role="tabpanel">
                @if(count($cars) == 1)
                    <h4 class="panel-title"><i class="fa fa-car"></i><span>{{ '1 '.$static_data['strings']['car'] }}</span></h4>
                @else
                    <h4 class="panel-title"><i class="fa fa-car"></i><span>{{ count($cars).' '.$static_data['strings']['cars'] }}</span></h4>
                @endif
                @if(count($cars))
                    <div id="filtered-cars">
                        <div class="row">
                            @if($selected_car)
                                @include('home.partials.selected_car')
                            @endif
                            <?php  $i = 0; ?>
                            @foreach($cars as $car)
                                @include('home.partials.car_style_1')
                                <?php  $i++; ?>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-sm-12 text-centered"><strong class="center-align">{{$static_data['strings']['no_results']}}</strong></div>
                @endif
                </div>
            </div>
        </div>

        <div id="search-box-modal" class="modal not-summernote fade" role="dialog">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                @include('home.partials.search_home', ['pickup_location' => $pickup_location, 'dropoff_location' => $dropoff_location])
            </div>
        </div>
    </div>
@endsection
@section('footer')
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>

<script type="text/javascript">
$('.filterbox ul#frooms li').click(function(){
    $('.filterbox ul#frooms li').not(this).removeClass('chkd');
    $(this).addClass('chkd');
    $f_rooms = 0;
    if( $(this).data('rooms') ){
        $f_rooms = $(this).data('rooms');
    }
    $( "#filtered-cars div.items-grid" ).each(function() {
        //console.log('-> '+$f_rooms+' - '+$(this).data('rooms'));
        if( $(this).data('rooms') && $(this).data('rooms') < $f_rooms){
            $(this).hide().removeClass('showed');
        }else{
            $(this).show().addClass('showed');
            if(!$(this).data('rooms') || $(this).data('rooms') == 0){
                $(this).hide().removeClass('showed');
            }
        }
    });

    var villas_number = $( "#filtered-cars div.items-grid.showed" ).length;
    if($( "#filtered-cars div.items-grid.showed" ).length == 1){
        $('#accordion-cars .panel-title span').html(villas_number+' Villa');
    }else{
        $('#accordion-cars .panel-title span').html(villas_number+' Villas');
    }
});
$('.read-info').hover(function(){
    $(this).closest('.item-list').find('.item-details').slideDown();
});

$('.item-details').mouseleave(function(){
    $(this).slideUp();
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

$(document).ready(function() {
    $('.submit_email').click(function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var user_devis_email = $('#user_devis_email_' + id).val();
        var car_id = $('#car_id_' + id).val();
        var booking_days = $('#booking_days_' + id).val();
        var booking_price = $('#booking_price_' + id).val();
        var pickup_loc = $('#pickup_loc_' + id).val();
        var dropoff_loc = $('#dropoff_loc_' + id).val();

        $.ajax({
            type: 'POST',
            url: '{{ route('devis_email') }}',
            data: { _token : '{{ csrf_token() }}', user_devis_email: user_devis_email, car_id: car_id, booking_days: booking_days, booking_price: booking_price, pickup_loc: pickup_loc, dropoff_loc: dropoff_loc },
            success: function(response) {
                if (response.success) {
                    $('#message_' + id).text("{!! $static_data['strings']['email_send_succes'] !!}");
                } else {
                    $('#message_' + id).text("{!! $static_data['strings']['error_send_email'] !!}");
                }
            },
            error: function() {
                $('#message_' + id).text("{!! $static_data['strings']['error_send_request'] !!}");
            }
        });
    });
});
</script>
@endsection
