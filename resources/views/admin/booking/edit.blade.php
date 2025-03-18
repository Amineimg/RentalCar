@extends('layouts.admin')

@section('title')
    <title>{{get_string('edit_car') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection

@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('edit_car')}}</h3>
@endsection
<div class="col s12">
    @if(!$errors->isEmpty())
        <span class="wrong-error">* {{get_string('validation_error')}}</span>
    @endif
    {!!Form::open(['method' => 'patch', 'url' => route('update_booking', $booking->id), 'files' => 'true'])!!}
    <div class="panel">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="tab active"><a href="#data-panel" data-toggle="tab">{{get_string('data')}}</a></li>
                <li class="tab"><a href="#payments-panel" data-toggle="tab">{{get_string('payments')}}</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                <div id="data-panel" class="tab-pane active">
                    <div class="col m12 s6 right right-align">
                        <div class="form-group">
                            <div class="switch">
                                <label>
                                    {{get_string('confirmed')}}?  {{ Form::checkbox('featured', null, $booking->status!=0, ['value' => null, 'id' => 'activeSwitch', 'class' => 'form-control', true ? 'checked': ''])}}<span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- ROW CLIENTS --}}
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('client')}}</h5>
                    </div>
                    <div class="col l6 m6 s12">
                         <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
                            {{Form::label('name', get_string('name'))}}
                            {{Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => get_string('name')])}}
                            @if($errors->has('name'))
                                <span class="wrong-error">* {{$errors->first('name')}}</span>
                            @endif
                         </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('phone') ? 'has-error' : ''}}">
                           {{Form::label('phone', get_string('phone'))}}
                           {{Form::text('phone', $client->phone, ['class' => 'form-control', 'placeholder' => get_string('phone')])}}
                           @if($errors->has('phone'))
                               <span class="wrong-error">* {{$errors->first('phone')}}</span>
                           @endif
                        </div>
                   </div>
                   <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('email') ? 'has-error' : ''}}">
                        {{Form::label('email', get_string('email'))}}
                        {{Form::text('email', $client->email, ['class' => 'form-control', 'placeholder' => get_string('email')])}}
                        @if($errors->has('alias'))
                            <span class="wrong-error">* {{$errors->first('email')}}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('fight_number') ? 'has-error' : ''}}">
                           {{Form::label('flight_number', get_string('flight_number'))}}
                           {{Form::text('flight_number', $client->flight_number, ['class' => 'form-control', 'placeholder' => get_string('flight_number')])}}
                           @if($errors->has('flight_number'))
                               <span class="wrong-error">* {{$errors->first('flight_number')}}</span>
                           @endif
                        </div>
                   </div>

                   {{-- ROW DATES --}}

                   <div class="col s12 clearfix">
                       <h5 class="section-title">{{get_string('Dates')}}</h5>
                   </div>
                   <div class="col l4 m6 s12">
                        <div class="form-group  {{$errors->has('fight_number') ? 'has-error' : ''}}">
                            {{Form::label('start_date', get_string('start_date'))}}
                            {{Form::date('start_date', \Carbon\Carbon::parse($booking->start_date), ['id'=>'start_date','class' => 'form-control start_date-picker', 'placeholder' => get_string('start_date')])}}
                            @if($errors->has('start_date'))
                                <span class="wrong-error">* {{$errors->first('start_date')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l2 m6 s12">
                        <div class="form-group  {{$errors->has('start_time') ? 'has-error' : ''}}">
                            {{Form::label('start_time', get_string('start_time'))}}
                            {{Form::text('start_time', \Carbon\Carbon::parse($booking->start_date)->format('H:i'), [ 'class' => 'form-control', 'placeholder' => get_string('start_time')])}}
                            @if($errors->has('start_time'))
                                <span class="wrong-error">* {{$errors->first('start_time')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m6 s12">
                        <div class="form-group  {{$errors->has('end_date') ? 'has-error' : ''}}">
                            {{Form::label('end_date', get_string('end_date'))}}
                            {{Form::date('end_date', \Carbon\Carbon::parse($booking->end_date), ['id'=>'end_date','class' => 'form-control', 'placeholder' => get_string('end_date')])}}
                            @if($errors->has('end_date'))
                                <span class="wrong-error">* {{$errors->first('end_date')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l2 m6 s12">
                        <div class="form-group  {{$errors->has('end_time') ? 'has-error' : ''}}">
                            {{Form::label('end_time', get_string('end_time'))}}
                            {{Form::text('end_time', \Carbon\Carbon::parse($booking->end_date)->format('H:i'), ['class' => 'form-control', 'placeholder' => get_string('end_time')])}}
                            @if($errors->has('end_time'))
                                <span class="wrong-error">* {{$errors->first('end_time')}}</span>
                            @endif
                        </div>
                    </div>
                    {{-- ROW VEHICULES --}}
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('car')}}</h5>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('fight_number') ? 'has-error' : ''}}">
                           {{Form::label('cars', get_string('car'))}}
                           <select name="car_id" id="" class="category-select form-control">
                               @foreach ($cars as $car)
                                    <option value="{{$car->id}}" {{ $booking->car_id==$car->id? 'selected' : '' }}  >{{$car->alias}}</option>
                               @endforeach
                           </select>
                        </div>
                   </div>

                    {{-- ROW SERVICES --}}

                   <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('services')}}</h5>
                    </div>
                    <div class="col l12 m6 s12">
                        <div class="form-group s_qty  {{$errors->has('fight_number') ? 'has-error' : ''}}">
                           @foreach ($booked_services as $service)
                            <span><strong>{{$service['name']}} : </strong><input type="number" name="services_data[{{ $service['id']}}]" class="ml-3 mr-3 service" value="{{$service['count']}}" data-id="{{$service['id']}}" data-price="{{ ($service['price'])}}" min="0" max="4" step="1"/></span>
                           @endforeach
                        </div>
                   </div>
                   <div class="col s12 clearfix">
                        <h5 class="section-title"></h5>
                    </div>
                   <div class="col l12 m6 s12">
                      <ul class="car-srvc">
                            <li class="srv-franchise">
                                <div class="row">
                                    <div class="col l3 m6 s12">
                                        {{$static_data['strings']['full_fuel']}}
                                    </div>
                                    <input type="hidden" id="full_fuel_price" value="{{$car->full_fuel}}">
                                    <input type="hidden" name="full_fuel" id="full_fuel_input" value="{{$booking->full_fuel!=0? $booking->full_fuel : 0 }}">
                                    <div class="col l3 m6 s12">
                                        <div class="switch text-center">
                                            <label>
                                                {{$static_data['strings']['no']}}{{ Form::checkbox('', 0, $booking->full_fuel!=0, ['id' => 'full_fuel', 'class' => 'form-control'])}}<span class="lever"></span>{{$static_data['strings']['yes']}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div class="col s12 clearfix">
                                <h5 class="section-title"></h5>
                            </div>
                            <li class="srv-franchise">
                                <div class="row">
                                    <div class="col l3 m6 s12">
                                        {{$static_data['strings']['pay_deductible']}}
                                    </div>
                                    <input type="hidden" id="franchise_price" value="{{$booking->franchise}}">
                                    <input type="hidden" name="franchisess" id="franchise_input" value="{{$booking->franchise!=0 ? $booking->franchise :0}}">
                                    <div class="col l3 m6 s12">
                                        <div class="switch text-center">
                                            <label>
                                                {{$static_data['strings']['no']}}{{ Form::checkbox('', 0, $booking->franchise!=0, ['id' => 'franchise', 'class' => 'form-control'])}}<span class="lever"></span>{{$static_data['strings']['yes']}}

                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="col s12 clearfix">
                            <h5 class="section-title"></h5>
                        </div>
                        <div class="col l4 m6 s12">
                            <div class="form-group  {{$errors->has('total') ? 'has-error' : ''}}">
                                {{Form::label('total', get_string('total'))}}
                                {{Form::number('total', $booking->total, ['id'=>"total" ,'class' => 'form-control', 'placeholder' => get_string('total')])}}
                                @if($errors->has('total'))
                                    <span class="wrong-error">* {{$errors->first('total')}}</span>
                                @endif
                            </div>
                        </div>

                   </div>
                </div>
                <div id="payments-panel" class="tab-pane">
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('payments')}}</h5>
                    </div>
                    <div id="payment_list">
                        @foreach ($booking->payments as $payment)
                            <div class="col l3 m4 s12">
                                <div class="form-group {{$errors->has('amount') ? 'has-error' : ''}}">
                                    {{Form::label('amount', get_string('amount'))}}
                                    {{Form::number("payments[0][amount]", $payment->amount,['class' => 'form-control','min'=>'1' ,'placeholder' => get_string('amount')])}}
                                    @if($errors->has('franchise'))
                                        <span class="wrong-error">* {{$errors->first('amount')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group {{$errors->has('currency') ? 'has-error' : ''}}">
                                    {{ Form::label('devise', get_string('devise')) }}
                                    <select class="form-control" name="payments[0][currency]" id="">
                                        @foreach ($currencies as $currency)
                                            <option value="{{$currency->code}}">{{$currency->code}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('currency'))
                                        <span class="wrong-error">* {{$errors->first('currency')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group {{$errors->has('exchange_rate') ? 'has-error' : ''}}">
                                    {{Form::label('exchange_rate', get_string('exchange_rate_label'))}}
                                    <input type="number" name="payments[0][exchange_rate]" class="form-control" min="1" placeholder="{{get_string('exchange_rate_label')}}">
                                    @if($errors->has('exchange_rate'))
                                        <span class="wrong-error">* {{$errors->first('exchange_rate')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l2 m4 s12">
                                <div class="form-group {{$errors->has('date') ? 'has-error' : ''}}">
                                    {{Form::label('date', get_string('date'))}}
                                    <input type="text" name="payments[0][date]" class="form-control date-picker filter-field" placeholder="{{$static_data['strings']['date']}}" autocomplete="off">
                                    @if($errors->has('date'))
                                        <span class="wrong-error">* {{$errors->first('date')}}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="seasons" class="clearfix">
                    </div>
                    <a href="#" class="btn waves-effect mt-2" id="add-payment">{{get_string('add_payment')}} <i class="material-icons small accordion-disabled">add_circle</i></a>

                    <br><br>
                </div>
            </div>
            <div class="col clearfix s12 mtop10">
                <div class="form-group">
                    <button class="btn waves-effect" type="submit" name="status" value="1">{{get_string('update')}}</button>
                    <a href="{{route('admin.car.index')}}" class="btn waves-effect">{{get_string('return_to_bookings')}}</a>
                    <a href="#" class="delete-button btn waves-effect btn-red" data-id="{{$car->id}}"><i class="material-icons color-white">delete</i></a>
                </div>
            </div>
            {{Form::hidden('user_id', 1)}}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            let base_price  =  {{ $base_price }};
            let total       = {{ $booking->total }}
            let row_number  = 1;
            let price       = getBasePrice();


            $('.date-picker').datepicker({
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
                }
            });

            $('.service').change(function(event){
                caluclate_total_price();
            });

            $('#full_fuel').change(function(){
                caluclate_total_price();
            })

            $('#franchise').change(function(){
                caluclate_total_price();
            })

            function getBasePrice(){
                let date1 =new Date($('#start_date').val());
                let date2 =new Date($('#end_date').val());
                let start_date = date1.getDay()+'/'+(date1.getMonth()+1)+'/'+date1.getFullYear()+$('#start_time').val();
                let end_date = date2.getDay()+'/'+(date2.getMonth()+1)+'/'+date2.getFullYear()+$('#start_time').val();
                $.ajax({
                    url    : '{{ route('get_ajax_price') }}',
                    method : 'POST',
                    data   :{
                        _token     :  '{{ csrf_token() }}',
                        start_date : start_date,
                        end_date   : end_date
                    },
                    success : function(e){

                    },
                    error   : function(e){

                    }


                })
            }

            function caluclate_total_price(){
                var s_id        = 0;
                var s_price     = 0;

                let days = getDaysNumber();
                console.log(base_price);
                var total_price = base_price;



                $('#full_fuel_input').val(0);
                $('#franchise_input').val(0);
                $('.srv-list').html('');
                $('.service').each(function( index ) {
                    if( $(this).val() > 0 ){
                        s_id    = $(this).data('id');
                        s_price = $(this).data('price');
                        total_price +=  ( s_price * parseInt( $(this).val() ) );
                    }
                });
                if($('#full_fuel').prop('checked')){
                    total_price  += parseInt( $('#full_fuel_price').val() );
                    $('#full_fuel_input').val({{$car->full_fuel}});
                }
                if($('#franchise').prop('checked') ){
                    total_price  += parseInt( $('#franchise_price').val() );
                    $('#franchise_input').val({{$car->franchise}});
                }
                if($('#bank_card_payment').prop('checked') )
                    total_price  += total_price*3/100;
                $('#total').val( total_price );
            }

            function getDaysNumber(){
                // To set two dates to two variables
                var date1 = new Date($('#start_date').val());
                var date2 = new Date($("#end_date").val());

                // To calculate the time difference of two dates
                var Difference_In_Time = date2.getTime() - date1.getTime();

                // To calculate the no. of days between two dates
                var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
                return Difference_In_Days;
            }
            $('#add-payment').click(function(event){
                event.preventDefault();
                let row ='<div class="new_row row_'+row_number+'">'+
                '<div class="col l3 m4 s12 payment">'+
                    '<div class="form-group {{$errors->has("amount") ? "has-error" : ""}}">'+
                        '{{Form::label("amount", get_string("amount"))}}'+
                        '<input type="number" name="payments['+row_number+'][amount]" class="form-control" min="1" placeholder="{{get_string("amount")}}">'+
                        '@if($errors->has("franchise"))'+
                            '<span class="wrong-error">* {{$errors->first("amount")}}</span>'+
                        '@endif'+
                    '</div>'+
                '</div>'+
                '<div class="col l3 m4 s12 payment">'+
                    '<div class="form-group {{$errors->has("currency") ? "has-error" : ""}}">'+
                        '{{ Form::label("devise", get_string("devise")) }}'+
                        '<select class="form-control" name="payments['+row_number+'][currency]" id="">'+
                            '@foreach ($currencies as $currency)'+
                                '<option value="{{$currency->code}}">{{$currency->code}}</option>'+
                            '@endforeach'+
                        '</select>'+
                        '@if($errors->has("currency"))'+
                            '<span class="wrong-error">* {{$errors->first("currency")}}</span>'+
                        '@endif'+
                    '</div>'+
                '</div>'+
                '<div class="col l3 m4 s12 payment">'+
                    '<div class="form-group {{$errors->has("exchange_rate") ? "has-error" : ""}}">'+
                        '{{Form::label("exchange_rate", get_string("exchange_rate_label"))}}'+
                        '<input type="number" name="payments['+row_number+'][exchange_rate]" class="form-control" min="1" placeholder="{{get_string("exchange_rate_label")}}">'+
                        '@if($errors->has("exchange_rate"))'+
                            '<span class="wrong-error">* {{$errors->first("exchange_rate")}}</span>'+
                        '@endif'+
                    '</div>'+
                '</div>'+
                '<div class="col l2 m4 s12 payment">'+
                    '<div class="form-group {{$errors->has("date") ? "has-error" : ""}}">'+
                        '{{Form::label("date", get_string("date"))}}'+
                        '<input type="date" name="payments['+row_number+'][date]" class="form-control  filter-field" placeholder="{{$static_data["strings"]["date"]}}" autocomplete="off">'+
                        '@if($errors->has("date"))'+
                            '<span class="wrong-error">* {{$errors->first("date")}}</span>'+
                        '@endif'+
                    '</div>'+
                '</div>'+
                '<div class="col l1 m4 s12 payment">'+
                    '<div class="form-group">'+
                        '{{Form::label("delete", get_string("delete"))}}'+
                        '<a href="#" class="row-delete-btn btn waves-effect btn-red" data-id="'+row_number+'"><i class="material-icons color-white">delete</i></a>'+
                    '</div>'+
                '</div>'+
                '</div>'
                $('#payment_list').append(row)
                row_number++;
            })

            $(document).on('click','.row-delete-btn',function(event){
                event.preventDefault();
                console.log()
                $('.row_'+$(this).data('id')).remove();
            })

        });


    </script>
@endsection
