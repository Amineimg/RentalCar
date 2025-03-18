<div class="container-fluid footer-container">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 footer-widgets">
                {{--
                <h2 class="widget-title">{{ $static_data['strings']['about_us'] }}</h2>
                <p>{{$static_data['strings']['opt_site_description']}}</p>
                --}}
            </div>
            <div class="col-md-3 col-sm-12 footer-widgets">
                {{--
                <h2 class="widget-title">{{ $static_data['strings']['opt_footer_menu1_head'] }}</h2>
                <ul class="footer-menu">
                    <li><a href="{{$static_data['design_settings']['footer_menu1_link1']}}">{{$static_data['strings']['opt_footer_menu1_text1']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu1_link2']}}">{{$static_data['strings']['opt_footer_menu1_text2']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu1_link3']}}">{{$static_data['strings']['opt_footer_menu1_text3']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu1_link4']}}">{{$static_data['strings']['opt_footer_menu1_text4']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu1_link5']}}">{{$static_data['strings']['opt_footer_menu1_text5']}}</a></li>                    </ul>
                --}}
            </div>
            <div class="col-md-3 col-sm-12 footer-widgets">
                {{--
                <h2 class="widget-title">{{ $static_data['strings']['opt_footer_menu2_head'] }}</h2>
                <ul class="footer-menu">
                    <li><a href="{{$static_data['design_settings']['footer_menu2_link1']}}">{{$static_data['strings']['opt_footer_menu2_text1']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu2_link2']}}">{{$static_data['strings']['opt_footer_menu2_text2']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu2_link3']}}">{{$static_data['strings']['opt_footer_menu2_text3']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu2_link4']}}">{{$static_data['strings']['opt_footer_menu2_text4']}}</a></li>
                    <li><a href="{{$static_data['design_settings']['footer_menu2_link5']}}">{{$static_data['strings']['opt_footer_menu2_text5']}}</a></li>
                </ul>
                --}}
            </div>
            <div class="col-md-3 col-sm-6 footer-widgets">
                <h2 class="widget-title">{{ $static_data['strings']['contact'] }}</h2>
                <ul class="footer-menu">
                    @if($static_data['site_settings']['location_address'] || $static_data['site_settings']['location_city'] || $static_data['site_settings']['location_country'])<li><a href="#"><i class="fa fa-home"></i> {{ $static_data['site_settings']['location_address'].', '.$static_data['site_settings']['location_city'].', '.$static_data['site_settings']['location_state'].' - '.$static_data['site_settings']['location_country'] }}</a></li>@endif
                    @if($static_data['site_settings']['contact_tel1'])<li><a href="tel:{{ $static_data['site_settings']['contact_tel1'] }}"><i class="fa fa-phone"></i> {{ $static_data['site_settings']['contact_tel1'] }}</a></li>@endif
                    @if($static_data['site_settings']['contact_tel2'])<li><a href="tel:{{ $static_data['site_settings']['contact_tel2'] }}"><i class="fa fa-phone"></i> {{ $static_data['site_settings']['contact_tel2'] }}</a></li>@endif
                    @if($static_data['site_settings']['contact_fax'])<li><a href="tel:{{ $static_data['site_settings']['contact_fax'] }}"><i class="fa fa-fax"></i>{{ $static_data['site_settings']['contact_fax'] }}</a></li>@endif
                    @if($static_data['site_settings']['contact_email'])<li><a href="mailto:{{ $static_data['site_settings']['contact_email'] }}"><i class="fa fa-envelope"></i>{{ $static_data['site_settings']['contact_email'] }}</a></li>@endif
                    @if($static_data['site_settings']['contact_web'])<li><a href="{{ $static_data['site_settings']['contact_web'] }}"><i class="fa fa-globe"></i> {{ str_replace(array('http:', 'https:','/'), '', $static_data['site_settings']['contact_web']) }}</a></li>@endif
                </ul>
            </div>
            @if($static_data['design_settings']['footer_social'])
                <div class="col-sm-12 footer-divider"></div>
                <div class="col-sm-12 footer-social footer-widgets">
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
            @endif
        </div>
    </div>
    <div class="row copyright-row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 copyright">
                    <p>{{ $static_data['strings']['copyright'] . date('Y') . ' ' . $static_data['strings']['rights_reserved'] . get_setting('site_name', 'site')}}</p>
                </div>
                <div class="col-sm-6 powered-by">
                    <p>{!! $static_data['strings']['powered_by'] !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="floating-buttons">
    @if($static_data['site_settings']['contact_tel1'])
    <li><a href="tel:{{ $static_data['site_settings']['contact_tel1'] }}"><span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
    </span></a></li>
    <li><a href="https://wa.me/{{ $static_data['site_settings']['contact_tel1'] }}"><span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x" style="color: #00E676;"></i>
      <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></a></li>
    @endif
    <li><a href="{{route('contact')}}"><span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x" style="color: #0af;"></i>
      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
    </span></a></li>
</ul>