@extends('layouts.home_layout', ['static_data', $static_data])

@section('title')

    <title>{{ $static_data['strings']['contact_title'] }}</title>

    <meta name="title" content="{{ $static_data['strings']['contact_title'] }}">

    <meta name="description" content="{{ $static_data['strings']['site_contact_description'] }}">

    <meta name="author" content="{{ $static_data['strings']['contact_title'] }}">

    <meta car="og:title" content="{{ $static_data['strings']['contact_title'] }}" />

    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />


@endsection

@section('bg')
    {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
@endsection

@section('content')

    <div class="row  marginalized">
        <div class="col-md-12">
             @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
              @endif
        </div>

        <div class="col-sm-12">

            <h1 class="section-title-dark">{{$static_data['strings']['contact']}}</h1>

        </div>

        <div class="col-md-4 col-sm-12 contact-info">

            <h2 class="section-type">{{ $static_data['strings']['information'] }}</h2>

            <ul class="footer-menu">

                @if($static_data['strings']['location_address'] || $static_data['site_settings']['location_city'] || $static_data['site_settings']['location_country'])<li><a href="https://goo.gl/maps/h47gh9ywYxDsBHNeA"><i class="fa fa-fw fa-home"></i> {{ $static_data['site_settings']['location_address'].', '.$static_data['site_settings']['location_city'].' - '.$static_data['site_settings']['location_country'] }}</a></li>@endif


                @if($static_data['site_settings']['contact_tel2'])<li><a href="tel:{{  str_replace( ' ', '', $static_data['site_settings']['contact_tel2'] ) }}"><i class="fa fa-fw fa-mobile-phone"></i> @if($static_data['site_settings']['contact_name2']){{ $static_data['site_settings']['contact_name2'] }} : @endif {{ $static_data['site_settings']['contact_tel2'] }}</a></li>@endif

                @if($static_data['site_settings']['contact_tel3'])<li><a href="tel:{{  str_replace( ' ', '', $static_data['site_settings']['contact_tel3'] ) }}"><i class="fa fa-fw fa-mobile-phone"></i> @if($static_data['site_settings']['contact_name3']){{ $static_data['site_settings']['contact_name3'] }} : @endif {{ $static_data['site_settings']['contact_tel3'] }}</a></li>@endif

                @if($static_data['site_settings']['contact_fax'])<li><a href="tel:{{ $static_data['site_settings']['contact_fax'] }}"><i class="fa fa-fw fa-fax"></i> {{ $static_data['site_settings']['contact_fax'] }}</a></li>@endif

                @if($static_data['site_settings']['contact_email'])<li><a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i class="fa fa-fw fa-envelope"></i> {{ $static_data['site_settings']['contact_email'] }}</a></li>@endif

                @if($static_data['site_settings']['contact_web'])<li><a href="{{ $static_data['site_settings']['contact_web'] }}"><i class="fa fa-fw fa-globe"></i> {{ $static_data['site_settings']['contact_web'] }}</a></li>@endif

            </ul>

            <ul class="social-icons">

                @if($static_data['site_settings']['social_facebook']) <li><a href="{{ $static_data['site_settings']['social_facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a></li> @endif

                @if($static_data['site_settings']['social_twitter']) <li><a href="{{ $static_data['site_settings']['social_twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif

                @if($static_data['site_settings']['social_youtube'])  <li><a href="{{ $static_data['site_settings']['social_youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif

                @if($static_data['site_settings']['social_instagram'])  <li><a href="{{ $static_data['site_settings']['social_instagram'] }}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif

                @if($static_data['site_settings']['social_google_plus'])  <li><a href="{{ $static_data['site_settings']['social_google_plus'] }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>@endif

                @if($static_data['site_settings']['social_pinterest'])  <li><a href="{{ $static_data['site_settings']['social_pinterest'] }}" target="_blank"><i class="fa fa-pinterest"></i></a></li>@endif

                @if($static_data['site_settings']['social_linkedin'])  <li><a href="{{ $static_data['site_settings']['social_linkedin'] }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>@endif

                @if($static_data['site_settings']['social_tripadvisor'])  <li><a href="{{ $static_data['site_settings']['social_tripadvisor'] }}" target="_blank"><i class="fa fa-tripadvisor"></i></a></li>@endif

            </ul>

        </div>

        <div class="col-md-8 col-sm-12 contact-form input-style">
            {!! Form::open(['method' => 'post', 'url' => route('send_contact')]) !!}

            <div class="row">

                <div class="col-sm-12 col-md-6">

                    <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">

                        <div class="input-group">

                            <span class="fa fa-user input-group-addon"></span>

                            {{Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => $static_data['strings']['your_name']])}}

                        </div>

                        <span class="wrong-error"></span>

                    </div>

                </div>

                <div class="col-sm-12 col-md-6">

                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">

                        <div class="input-group">

                            <span class="fa fa-envelope input-group-addon"></span>

                            {{Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => $static_data['strings']['your_email']])}}

                        </div>

                        <span class="wrong-error"></span>

                    </div>

                </div>

                <div class="col-sm-12">

                    <div class="form-group {{$errors->has('subject') ? 'has-error' : ''}}">

                        <div class="input-group">

                            <span class="fa fa-phone input-group-addon"></span>

                            {{Form::text('phone', null, ['class' => 'form-control', 'required', 'placeholder' => $static_data['strings']['your_phone']])}}

                        </div>

                        <span class="wrong-error"></span>

                    </div>

                </div>

                <div class="col-sm-12">

                    <div class="form-group  {{$errors->has('subject') ? 'has-error' : ''}}">

                        <div class="input-group">

                            <span class="fa fa-font input-group-addon"></span>

                            {{Form::text('subject', null, ['class' => 'form-control', 'required', 'placeholder' => $static_data['strings']['your_subject']])}}

                        </div>

                        <span class="wrong-error"></span>

                    </div>

                </div>

                <div class="col-sm-12">

                    <div class="form-group  {{$errors->has('body') ? 'has-error' : ''}}">

                        <div class="input-group">

                            <span class="fa fa-commenting-o input-group-addon"></span>

                            {{Form::textarea('body', null, ['class' => 'form-control', 'x4', 'required', 'placeholder' => $static_data['strings']['your_message']])}}

                        </div>

                        <span class="wrong-error"></span>

                    </div>

                </div>

                <div id="form-response" class="col-sm-12 mtop10">

                    <button class="primary-button send-form">{{ $static_data['strings']['submit'] }}</button>

                    <p class="green-color field-info"></p>

                </div>

            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-sm-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.7962193867525!2d-8.000651485465887!3d31.63942944842027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafefee6c6c6357%3A0xbbc7136983036de4!2sJacaranda%20car%20rental%20airport%20in%20Marrakech!5e0!3m2!1sfr!2sma!4v1665866143940!5m2!1sfr!2sma" 
            title="{{ $static_data['strings']['maps_title'] }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

        {{-- <div class="col-sm-12"><iframe src="http://www.google.com/maps/place/Jacaranda+Car/@31.63533,-8.0173397,17z/data=!4m5!3m4!1s0xdafee91c9d66c73:0xf10a73bbc6bc38eb!8m2!3d31.63533!4d-8.015151" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe></div> --}}

    </div>

@endsection

@section('footer')
    {{--
    <script src="https://maps.googleapis.com/maps/api/js?key={{$static_data['site_settings']['google_map_key']}}&libraries=places"></script>
    --}}
    <script src="{{asset('assets/js/plugins/richmarkers.min.js')}}"></script>

    <script type="text/javascript">

        $(document).ready(function(){



            // Google Map
            if(typeof google !== 'undefined'){
                var map = new google.maps.Map(document.getElementById('google-map'), {
                    center:{
                        lat: {{ $static_data['site_settings']['contact_map_lat'] }},
                        lng: {{ $static_data['site_settings']['contact_map_lon'] }}
                    },
                    mapTypeControl: false,
                    zoomControl: true,
                    scrollwheel: false,
                    zoom: {{ $static_data['site_settings']['google_map_zoom'] }},
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#6195a0"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":"0"},{"saturation":"0"},{"color":"#f5f5f2"},{"gamma":"1"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"-3"},{"gamma":"1.00"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#bae5ce"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fac9a9"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#787878"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.airport","elementType":"labels.icon","stylers":[{"hue":"#0a00ff"},{"saturation":"-77"},{"gamma":"0.57"},{"lightness":"0"}]},{"featureType":"transit.station.rail","elementType":"labels.text.fill","stylers":[{"color":"#43321e"}]},{"featureType":"transit.station.rail","elementType":"labels.icon","stylers":[{"hue":"#ff6c00"},{"lightness":"4"},{"gamma":"0.75"},{"saturation":"-68"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c7eced"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":"-49"},{"saturation":"-53"},{"gamma":"0.79"}]}]
                });

                var position = new google.maps.LatLng({{ $static_data['site_settings']['contact_map_lat']  }}, {{ $static_data['site_settings']['contact_map_lon']  }});
                marker = new RichMarker({
                    position: position,
                    animation: google.maps.Animation.DROP,
                    map: map,
                    draggable: false,
                    shadow: 'none',
                    content: '<div class="map-marker"><i class="fa fa-home"></i></div>'
                });
            }

            // Contact mail
            $('.send-form').click(function(e){
                e.preventDefault();
                var name = $('[name="name"]').val(),
                        email = $('[name="email"]').val(),
                        subject = $('[name="subject"]').val(),
                        body = $('[name="body"]').val(),
                        token = $('[name="_token"]').val();
                $.ajax({
                    url: '{{ url('mail/sendcontact') }}',
                    type: 'post',
                    data: {name: name, email: email, subject: subject, body: body, _token: token},
                    beforeSend: function(){
                        $('.contact-form').addClass('loading');
                        $('.wrong-error').html('').hide();
                    },
                    success: function(data){
                        if(data.status){
                            $('#form-response .field-info').html(data.msg).show();
                            $('.form-control').val('');
                            setTimeout(function(){$('#form-response .field-info').slideUp()}, 6000);
                        }else{
                            $.each(data.errors, function(key, value){
                                var parent = $('[name="'+ key +'"]').parents('.form-group');
                                $('.wrong-error', parent).html(value).show();
                            });
                        }
                        $('.contact-form').removeClass('loading');
                    },
                });
            });
        });
    </script>
@endsection
