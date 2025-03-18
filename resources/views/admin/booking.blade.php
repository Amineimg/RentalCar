@extends('layouts.admin')

@section('title')
    <title>{{get_string('booking') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection
@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('booking')}}</h3>
@endsection
<div class="col s12">
    @if($bookings->count())
        <div class="table-responsive">
            <table class="table bordered striped">
                <thead class="thead-inverse">
                <tr>
                    <th>
                        <input type="checkbox" class="filled-in primary-color" id="select-all" />
                        <label for="select-all"></label>
                    </th>
                    <th>{{get_string('car')}}</th>
                    <th>{{get_string('start_date')}}</th>
                    <th>{{get_string('start_time')}}</th>
                    <th>{{get_string('end_date')}}</th>
                    <th>{{get_string('end_time')}}</th>
                    <th>{{get_string('total')}}</th>
                    <th>{{get_string('payment_method')}}</th>
                    <th>{{get_string('completed')}}</th>
                    <th class="icon-options">{{get_string('options')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr class="{{ $booking->completed ? 'disabled-style' : '' }}">
                        <td>
                            <input type="checkbox" class="filled-in primary-color" id="{{$booking->id}}" />
                            <label for="{{$booking->id}}"></label>
                        </td>
                        <td>{{$booking->car_name}}</td>
                        <td>{{\Carbon\Carbon::parse($booking->start_date)->format('d M Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($booking->start_date)->format('H:i')}}</td>
                        <td>{{\Carbon\Carbon::parse($booking->end_date)->format('d M Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($booking->end_date)->format('H:i')}}</td>
                        <td>{{$booking->total}} {{ $currency }}</td>
                        <td>{{$booking->payment_method==0? get_string('cash') : get_string('bank_card')}}</td>
                        <td class="booking-status">{{$booking->completed ? get_string('confirmed') : get_string('pending')}}</td>
                        <td>
                            <div class="icon-options">
                                <a href="{{ route('edit_booking',$booking->id) }}" class="confirmd-button" style="" data-id="{{$booking->id}}" title="{{get_string('approve_booking')}}"><i class="small material-icons color-primary">done</i></a>
                                <a href="#" class="reject-button" style="display: inline-block;" data-id="{{$booking->id}}" title="{{get_string('reject_booking')}}"><i class="small material-icons color-red">close</i></a>
                                <a href="#user-modal" data-toggle="modal" class="user-info" data-id="{{$booking->id}}"
                                                      data-name="{{ json_decode($booking->client_data)->name }}"
                                                      data-phone="{{ json_decode($booking->client_data)->phone }}"
                                                      data-email="{{ json_decode($booking->client_data)->email }}"
                                                      title="{{get_string('user_info')}}"><i class="small material-icons color-blue">person</i></a>
                                <a href="#" class="delete-button" data-id="{{$booking->id}}" title="{{get_string('delete_booking')}}"><i class="small material-icons color-red">delete</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$bookings->links()}}
    @else
        <strong class="center-align">{{get_string('no_results')}}</strong>
    @endif
</div>
<input type="hidden" class="token" value="{{ csrf_token() }}">
@endsection

@section('footer')
    <div id="user-modal" class="modal not-summernote fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#!" class="close" data-dismiss="modal" aria-label="Close"><i class="material-icons">clear</i></a>
                    <strong class="modal-title" id="modal_title">{{get_string('user_info')}}</strong>
                </div>
                <div class="modal-body" id="user-details"></div>
                <div class="modal-footer">
                    <a href="#!" class="waves-effect btn btn-default" data-dismiss="modal">{{get_string('close')}}</a>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#user-modal").on('hidden.bs.modal', function () {
            $('#user-details').html('');
        });
        $('.user-info').click(function(e){
            e.preventDefault();
            let html = "<p><strong>Nom   : </strong>"+$(this).data('name')+"<br>"+
                       "<p><strong>Phone : </strong>"+$(this).data('phone')+"<br>"+
                       "<p><strong>Email : </strong>"+$(this).data('email')+"<br>"

            $('#user-details').html(html);
        });

         $('.confirm-button').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var selector = $(this).parents('tr');
            var status = $('.booking-status', selector);
            var reject_button = $('.reject-button', selector);
            var confirm_button = $('.confirm-button', selector);
            var token = $('.token').val();
            //if(!selector.hasClass('disabled-style')) {
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('activate_booking_confirm')}}',
                    onEscape: true,
                    backdrop: true,
                    buttons: {
                        cancel: {
                            label: '{{get_string('no')}}',
                            className: 'btn waves-effect'
                        },
                        confirm: {
                            label: '{{get_string('yes')}}',
                            className: 'btn waves-effect'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            $.ajax({
                                url: '{{ url('/admin/booking/activate') }}/' + id,
                                type: 'post',
                                data: {_token: token},
                                beforeSend: function(){
                                    $('.table').addClass('loading');
                                },
                                success: function (msg) {
                                    confirm_button.hide();
                                    reject_button.show();
                                    selector.addClass('disabled-style');
                                    status.html('{{get_string('yes')}}');
                                    toastr.success(msg);
                                    $('.table').removeClass('loading');
                                },
                                error: function (msg) {
                                    toastr.error(msg.responseJSON);
                                    $('.table').removeClass('loading');
                                }
                            });
                        }
                    }
                });
            //}
        });

        $('.reject-button').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var selector = $(this).parents('tr');
            var status = $('.booking-status', selector);
            var reject_button = $('.reject-button', selector);
            var confirm_button = $('.confirm-button', selector);
            var token = $('.token').val();
            //if(!selector.hasClass('disabled-style')) {
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('reject_booking_confirm')}}',
                    onEscape: true,
                    backdrop: true,
                    buttons: {
                        cancel: {
                            label: '{{get_string('no')}}',
                            className: 'btn waves-effect'
                        },
                        confirm: {
                            label: '{{get_string('yes')}}',
                            className: 'btn waves-effect'
                        }
                    },
                    callback: function (result) {
                        console.log(result, $('[name="reason"]').val() != '');
                        if (result) {
                            $.ajax({
                                url: '{{ url('/admin/booking/reject') }}/' + id,
                                type: 'post',
                                data: {_token: token, reason: $('[name="reason"]').val()},
                                beforeSend: function(){
                                    $('.table').addClass('loading');
                                },
                                success: function (msg) {
                                    reject_button.hide();
                                    confirm_button.show();
                                    selector.removeClass('disabled-style');
                                    status.html('{{get_string('yes')}}');
                                    toastr.success(msg);
                                    $('.table').removeClass('loading');
                                },
                                error: function (msg) {
                                    toastr.error(msg.responseJSON);
                                    $('.table').removeClass('loading');
                                }
                            });
                        }
                    }
                });
            //}
        });

        $('.delete-button').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var selector = $(this).parents('tr');
            var token = $('.token').val();
            bootbox.confirm({
                title: '{{get_string('confirm_action')}}',
                message: '{{get_string('delete_confirm')}}',
                onEscape: true,
                backdrop: true,
                buttons: {
                    cancel: {
                        label: '{{get_string('no')}}',
                        className: 'btn waves-effect'
                    },
                    confirm: {
                        label: '{{get_string('yes')}}',
                        className: 'btn waves-effect'
                    }
                },
                callback: function (result) {
                    if(result){
                        $.ajax({
                            url: '{{ url('/admin/booking/delete') }}/'+id,
                            type: 'post',
                            data: {_token :token},
                            success:function(msg) {
                                selector.remove();
                                toastr.success(msg);
                            },
                            error:function(msg){
                                toastr.error(msg.responseJSON);
                            }
                        });
                    }
                }
            });
        });
    });
</script>
@endsection
