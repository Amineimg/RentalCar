@extends('layouts.home_layout', ['static_data', $static_data])
<?php $max_price = get_setting('price_range_max', 'car') ?>
@section('title')
    <title>{{$category->contentload->name}}</title>
    <meta name="title" content="{{$category->contentload->name}}">
    <meta name="description" content="{{strip_tags($category->contentload->description)}}">
    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">
    <meta name="author" content="{{ $static_data['site_settings']['site_name'] }}">
    <meta car="og:title" content="{{$category->contentload->name}}" />
    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />
    <meta car="og:description" content="{{strip_tags($category->contentload->description)}}">
@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
@endsection
@section('bg')
    @if($category->featured_image)
        {{ $category->featured_image }}
    @else
        {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
    @endif
@endsection
@section('content')
    <div class="row header-tabs">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" id="header-tabs">
                @if(isset($cars) && count($cars))<li class="nav-item"><a class="nav-link active" href="#accordion-cars" data-toggle="tab" aria-expanded="true"><i class="fa fa-building-o"></i><span>{{ $static_data['strings']['cars'] }}</span></a></li>@endif
                @if(isset($services) && count($services))<li class="nav-item"><a class="nav-link @if(!count($cars)) active @endif" href="#accordion-services" data-toggle="tab" aria-expanded="false"><i class="fa fa-cutlery"></i><span>{{ $static_data['strings']['services'] }}</span></a></li>@endif
            </ul>
        </div>
    </div>
    <div class="row marginalized">
        <div class="col-sm-12">
            <h1 class="section-title-dark">{{$category->contentload->name}}</h1>
            <div class="tab-content">
                <div class="tab-pane active" id="accordion-cars" role="tabpanel">
                    <div class="row">
                        @if(!empty($cars))
                            {{--
                            @if(isset($featured_cars))
                                <div class="col-sm-12 featured-grid-cars items-grid">
                                    @foreach($featured_cars as $car)
                                        @include('home.partials.car_grid')
                                    @endforeach
                                </div>
                            @endif
                            --}}
                            <div id="filtered-cars" class="row">
                                @foreach($cars as $car)
                                    @include('home.partials.car')
                                @endforeach
                            </div>
                            <div class="col-sm-12 mtop5 text-centered"><a href="#" class="black-button load-more-cars">{{ $static_data['strings']['load_more'] }}</a><img src="{{asset('assets/images/ajax-loader.gif')}}" class="ajax-loader"/></div>
                        @else
                            @if(!count($cars) && !count($services))<div class="col-sm-12 text-centered"><strong class="center-align">{{$static_data['strings']['no_results']}}</strong></div>@endif
                        @endif
                    </div>
                </div>
                @if(get_setting('services_allowed', 'service'))
                    <div class="tab-pane @if(!count($cars)) active @endif" id="accordion-services" role="tabpanel">
                        <div class="row">
                            @if(isset($services) && count($services))
                                <div class="col-sm-12 mbot10"><h3 class="section-type text-uppercase">{{ $static_data['strings']['services'] }}</h3></div>
                                <div class="col-sm-12 filter-box">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="fa fa-map-marker input-group-addon"></span>
                                            <input type="text" readonly name="location_id_value" class="form-control filter-field" placeholder="{{$static_data['strings']['choose_your_location']}}">
                                        </div>
                                        <input type="hidden" name="location_id" value="0" class="form-control filter-hidden hidden" placeholder="{{$static_data['strings']['choose_your_location']}}">
                                        <ul class="dropdown-filter-menu">
                                            <li data-id="" data-name="{{ $static_data['strings']['all'] }}">
                                                <a href="#" class="location_id_picker">
                                                    <span>{{ $static_data['strings']['all'] }}</span>
                                                </a>
                                            </li>
                                            @foreach($static_data['locations'] as $location)
                                                <li data-id="{{ $location->id }}" data-name="{{ $location->contentload->location }}">
                                                    <a href="#" class="location_id_picker">
                                                        <span>{{ $location->contentload->location }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <a href="#" class="primary-button service-filter">{{$static_data['strings']['search']}}</a>
                                </div>
                                @if(isset($featured_services))
                                    <div class="col-sm-12 featured-grid-services items-grid">
                                        @foreach($featured_services as $service)
                                            
                                            @include('home.partials.service_grid')
                                            
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="row" id="filtered-services">
                                @foreach($services as $service)
                                   
                                    @include('home.partials.service')

                                @endforeach
                                </div>
                            <div class="col-sm-12 mtop5 text-centered"><a href="#" class="black-button load-more-services">{{ $static_data['strings']['load_more'] }}</a><img src="{{asset('assets/images/ajax-loader.gif')}}" class="ajax-loader"/></div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <input type="hidden" class="hidden token" value="{{ csrf_token() }}"/>
    <input type="hidden" class="hidden category_id" value="{{ $category->id }}"/>
    <input type="hidden" class="hidden" name="isExplore" value="0"/>
    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script type="text/javascript">
        $('document').ready(function(){

             $('.more-options').click(function(e){
                e.preventDefault();
                $('.features-filter-box').slideToggle();
            });
            
            // Load more cars
            var page_car = 3;
            $('.load-more-cars').click(function(e){
                var $this = $(this);
                var ajax_loader = $(this).parent().find('.ajax-loader');
                e.preventDefault();
                $.ajax({
                    url: '{{ url('marrakech-villas') .'/'. $category->id .'/cars?page=' }}' + page_car,
                    beforeSend: function(){
                        $this.hide(); ajax_loader.show();
                    }
                }).done(function(data){
                    if(data){$this.show();$('#filtered-cars').append(data);}else{$('#filtered-cars').append('<div class="col-sm-12 info-message text-centered">{{$static_data['strings']['no_results']}}</div>');setTimeout(function(){$('.info-message').slideUp()}, 2000);}
                    page_car++;
                    ajax_loader.hide();
                });
            });

            // Load more services
            var page_service = 3;
            $('.load-more-services').click(function(e){
                var $this = $(this);
                var ajax_loader = $(this).parent().find('.ajax-loader');
                e.preventDefault();
                $.ajax({
                    url: '{{ url('marrakech-villas') .'/'. $category->id .'/services?page=' }}' + page_service,
                    beforeSend: function(){
                        $this.hide();
                        ajax_loader.show();
                    }
                }).done(function(data){
                    if(data){
                        $this.show();
                        $('#filtered-services').append(data);
                    }else{
                        $('#filtered-services').append('<div class="col-sm-12 info-message text-centered">{{$static_data['strings']['no_results']}}</div>');
                        setTimeout(function(){$('.info-message').slideUp()}, 2000);
                    }
                    page_service++;
                    ajax_loader.hide();
                });
            });

            // Car Filter
            $('.car-filter').click(function(e){
                e.preventDefault();
                var parent = $(this).parent(),
                        rooms = $('[name="rooms"]').val(),
                        passengers_number = $('[name="passengers_number"]').val(),
                        price_min = $('[name="price_min"]').val(),
                        price_max = $('[name="price_max"]').val(),
                        token = $('.token').val(),
                        location_id = $('[name="location_id"]').val(),
                        category_id = $('[name="category_id"]').val(),
                        sort_id = $('[name="sort_id"]').val(),
                        start_date = $('[name="start_date"]').val(),
                        end_date = $('[name="end_date"]').val(),
                        features = [];
                $('[name^="features"]').each(function() {
                    if($(this).is(':checked')) features.push($(this).val());
                });
                $.ajax({
                    url: '{{ url('filter') }}/cars',
                    type: 'post',
                    data: {features: features, rooms: rooms, sort_id: sort_id, passengers_number: passengers_number, price_min: price_min, price_max: price_max, _token: token,location_id: location_id, category_id: category_id, start_date: start_date, end_date: end_date},
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
                });
            });

            // Datepickers
            $('.start_date-picker').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                onSelect: function(dateText, inst) {
                    var startDate = $(this).datepicker('getDate');
                    if($('.end_date-picker').hasClass('hasDatePicker')){
                        $('.end_date-picker').datepicker('destroy');
                    }
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

            // Service Filter
            $('.service-filter').click(function(e){
                e.preventDefault();
                var parent = $(this).parent(),
                        token = $('.token').val(),
                        location_id = $('[name="location_id"]').val(),
                        category_id = $('[name="category_id"]').val();
                $.ajax({
                    url: '{{ url('filter') }}/services',
                    type: 'post',
                    data: {_token: token, location_id: location_id, category_id: category_id},
                    beforeSend: function(){
                        parent.addClass('loading');
                    }
                }).done(function(data){
                    parent.removeClass('loading');
                    $('.load-more-services').hide();
                    if(data){$('#filtered-services').html(data);}else{$('#filtered-services').html('<div class="col-sm-12 info-message text-centered">{{$static_data['strings']['no_results']}}</div>');}
                    var target = $('#filtered-services');
                    $('html, body').animate({
                        scrollTop: target.offset().top - 150
                    }, 1000);
                });
            });

            // Load price range
            price_range({{ $max_price }});

        });
    </script>
@endsection