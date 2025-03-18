@include('home.partials.head')

@if(!empty($page_style))

<?php $pstyle = $page_style; ?>

@else

<?php $pstyle = 'home-layout'; ?>

@endif

<body class="{{$pstyle}}">

<div class="cover"></div>

<div class="wrapper">

    <div class="container-fluid header-container" style="background-image: url(@yield('bg'))">

    @include('home.partials.top-header')

    </div>

    @if(!empty($pstyle) && $pstyle == 'home-explore') 

    <div class="container main-content">

        <div class="row">

            @yield('content')

        </div>

    </div>

    @else

    <div class="container-fluid main-content">

        <div class="main-container box-shadow">

            @yield('content')

        </div>

    </div>

    @endif

</div>

@include('home.partials.footer')

</div>

<script src="{{asset('assets/js/plugins/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/tether.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/slick.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/slidereveal.min.js')}}" defer></script>

<script src="{{asset('assets/js/plugins/toast.min.js')}}" defer></script>

<script type="text/javascript">

    window.paceOptions = {

        ajax: false,

        restartOnRequestAfter: false,

    };



    $(document).ready(function(){

        $('.currency-switcher').click(function(e){

            e.preventDefault();

            var code = $(this).data('code'),

                token = $('[name="_token"]').val();

            if(typeof token === 'undefined'){

                token = $('.token').val();

            }

            $.ajax({

                url: '{{route('change_currency')}}',

                type: 'post',

                data: {code: code, _token: token},

                success: function(){

                   location.reload();

                },

                error: function(){

                   location.reload();

                }

            });

            return false;

        });



        $(document).on('click', '.add-wishlist', function(e){

            e.preventDefault();

            var car_id = $(this).data('id');

            $.ajax({

                url: '{{ url('add-wishlist') }}',

                type: 'post',

                data: {

                    car_id: car_id,

                    _token: '{{ csrf_token() }}',

                },

                success: function (data) {

                    $('.add-wishlist').each(function() {

                        if( $.inArray( String($(this).data('id')), data ) >= 0 ){

                            $('.remove-wishlist[data-id="'+$(this).data('id')+'"]').show();

                            $(this).hide();

                        }else{

                            $('.remove-wishlist[data-id="'+$(this).data('id')+'"]').hide();

                            $(this).show();

                        }

                    });

                }, error: function (data) {

                    console.log(data);

                }

            });

            return false;

        });



        $(document).on('click', '.remove-wishlist', function(e){

            e.preventDefault();

            var car_id = $(this).data('id');

            $.ajax({

                url: '{{ url('remove-wishlist') }}',

                type: 'post',

                data: {

                    car_id: car_id,

                    _token: '{{ csrf_token() }}',

                },

                success: function (data) {

                    console.log(data);

                    $('.add-wishlist').each(function() {

                        if( $.inArray( String($(this).data('id')), data ) >= 0 ){

                            $('.remove-wishlist[data-id="'+$(this).data('id')+'"]').show();

                            $(this).hide();

                        }else{

                            $('.remove-wishlist[data-id="'+$(this).data('id')+'"]').hide();

                            $(this).show();

                        }

                    });

                }, error: function (data) {

                    console.log(data);

                }

            });

            return false;

        });

    });

</script>

<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}" defer></script>

<script src="{{asset('assets/js/home_init.js')}}" defer></script>

@yield('footer')

{!! csrf_field() !!}

@if($static_data['user'] && $owner_request)

<div class="modal fade" id="upgrade-confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">{{ $static_data['strings']['confirm_action'] }}</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                {{ $static_data['strings']['upgrade_request_confirm'] }}

            </div>

            <div class="modal-footer">

                <button type="button" class="primary-button" data-dismiss="modal">{{ $static_data['strings']['close'] }}</button>

                <a href="#" data-id="{{ $static_data['user']->id }}" class="primary-button confirm-request" data-dismiss="modal">{{ $static_data['strings']['request'] }}</a>

            </div>

            <script type="text/javascript">

            $(document).ready(function(){

                $('.confirm-request').click(function(e){

                    e.preventDefault();

                    var id = $(this).data('id'),

                        token = $('[name="_token"]').val();

                    $.ajax({

                        url: '{{ url('/user-request') }}',

                        type: 'post',

                        data: {_token: token, id: id},

                            success: function(){

                            toastr.success('{{ $static_data['strings']['text_for_request'] }}');

                            setTimeout(function(){location.reload();}, 1200);



                        }

                    });

                });

            });

            </script>

        </div>

    </div>

</div>

@endif

</body>

</html>