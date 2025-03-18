@extends('layouts.admin')

@section('title')
    <title>{{get_string('search_results') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection
@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('search_results')}}</h3>
@endsection
<div class="col s8 right right-align mbot10">
    <a href="{{route('admin.car.index')}}" class="btn waves-effect"> {{get_string('car_all')}}</a>
    <a href="{{route('admin.car.create')}}" class="btn waves-effect"> {{get_string('create_car')}} <i class="material-icons small">add_circle</i></a>
    <a href="#" class="mass-delete btn waves-effect btn-red"><i class="material-icons color-white">delete</i></a>
</div>
    <div class="col s12">
        @if($cars->count())
            <div class="table-responsive">
                <table class="table bordered striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th>
                            <input type="checkbox" class="filled-in primary-color" id="select-all" />
                            <label for="select-all"></label>
                        </th>
                        <th>{{get_string('car')}}</th>
                        <th>{{get_string('user')}}</th>
                        <th>{{get_string('category')}}</th>
                        <th>{{get_string('location')}}</th>
                        <th>{{get_string('status')}}</th>
                        <th>{{get_string('featured')}}</th>
                        <th class="icon-options">{{get_string('options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>
                                <input type="checkbox" class="filled-in primary-color" id="{{$car->id}}" />
                                <label for="{{$car->id}}"></label>
                            </td>
                            <td>{{$car->contentDefault->name}}</td>
                            <td>@if($car->user){{$car->user->username}}@else <i class="small material-icons color-red">clear</i> @endif</td>
                            <td>{{$car->category->contentDefault->name}}</td>
                            <td>{{$car->prop_location->contentDefault->location}}</td>
                            <td class="page-status">{{$car->status ? get_string('active') : get_string('pending')}}</td>
                            <td class="page-featured">{{$car->featured ? get_string('yes') : get_string('no')}}</td>
                            <td>
                                <div class="icon-options">
                                    <a href="{{route('single-car', $car->alias)}}" title="{{get_string('view_car')}}"><i class="small material-icons color-primary">visibility</i></a>
                                    <a href="{{route('admin.car.edit', $car->id)}}" title="{{get_string('edit_car')}}"><i class="small material-icons color-primary">mode_edit</i></a>
                                     <a href="{{route('admin_car_date', $car->id)}}" title="{{get_string('car_availability')}}"><i class="small material-icons color-blue">date_range</i></a>
                                    <a href="#" class="delete-button" data-id="{{$car->id}}" title="{{get_string('delete_car')}}"><i class="small material-icons color-red">delete</i></a>
                                    <a href="#" class="activate-button {{$car->status ? 'hidden': ''}}" data-id="{{$car->id}}" title="{{get_string('activate_car')}}"><i class="small material-icons color-primary">done</i></a>
                                    <a href="#" class="deactivate-button {{$car->status ? '': 'hidden'}}" data-id="{{$car->id}}" title="{{get_string('deactivate_car')}}"><i class="small material-icons color-primary">close</i></a>
                                    <a href="#" class="make-featured-button {{$car->featured ? 'hidden': ''}}" data-id="{{$car->id}}" title="{{get_string('make_featured')}}"><i class="small material-icons color-primary">grade</i></a>
                                    <a href="#" class="make-default-button {{$car->featured ? '': 'hidden'}}" data-id="{{$car->id}}" title="{{get_string('make_default')}}"><i class="small material-icons color-yellow">grade</i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$cars->links()}}
        @else
            <strong class="center-align">{{get_string('no_results')}}</strong>
        @endif
    </div>
<input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('.delete-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var selector = $(this).parents('tr');
                var token = $('[name="_token"]').val();
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
                                url: '{{ url('/admin/car/') }}/'+id,
                                type: 'post',
                                data: {_method: 'delete', _token :token},
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

            $('.activate-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var selector = $(this).parents('tr');
                var thisBtn = $(this).parents('.icon-options');
                var status = selector.children('.page-status');
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('activate_car_confirm')}}',
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
                                url: '{{ url('/admin/car/activate/') }}/'+id,
                                type: 'post',
                                data: {_token :token},
                                success:function(msg) {
                                    thisBtn.children('.activate-button').addClass('hidden');
                                    thisBtn.children('.deactivate-button').removeClass('hidden');
                                    status.html('{{get_string('active')}}');
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

            $('.deactivate-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var selector = $(this).parents('tr');
                var thisBtn = $(this).parents('.icon-options');
                var status = selector.children('.page-status');
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('deactivate_car_confirm')}}',
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
                                url: '{{ url('/admin/car/deactivate/') }}/'+id,
                                type: 'post',
                                data: {_token :token},
                                success:function(msg) {
                                    thisBtn.children('.deactivate-button').addClass('hidden');
                                    thisBtn.children('.activate-button').removeClass('hidden');
                                    status.html('{{get_string('pending')}}');
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

            $('.make-featured-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var selector = $(this).parents('tr');
                var thisBtn = $(this).parents('.icon-options');
                var status = selector.children('.page-featured');
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('make_featured_confirm')}}',
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
                                url: '{{ url('/admin/car/makefeatured/') }}/'+id,
                                type: 'post',
                                data: {_token :token},
                                success:function(msg) {
                                    thisBtn.children('.make-featured-button').addClass('hidden');
                                    thisBtn.children('.make-default-button').removeClass('hidden');
                                    status.html('{{get_string('yes')}}');
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

            $('.make-default-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var selector = $(this).parents('tr');
                var thisBtn = $(this).parents('.icon-options');
                var status = selector.children('.page-featured');
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('make_default_confirm')}}',
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
                                url: '{{ url('/admin/car/makedefault/') }}/'+id,
                                type: 'post',
                                data: {_token :token},
                                success:function(msg) {
                                    thisBtn.children('.make-default-button').addClass('hidden');
                                    thisBtn.children('.make-featured-button').removeClass('hidden');
                                    status.html('{{get_string('no')}}');
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


            $('.mass-delete').click(function(event){
                event.preventDefault();
                var id = [];
                var selector = [];
                $("tbody input:checkbox:checked").each(function(){
                    id.push($(this).attr('id'));
                    selector.push($(this).parents('tr'));
                });
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('delete_confirm_bulk')}}',
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
                                url: '{{ url('/admin/car/massdestroy') }}',
                                type: 'post',
                                data: {id: id, _token :token},
                                success:function(msg) {
                                    $.each(selector, function(index, item){
                                        $(this).remove();
                                    });
                                    $('#select-all').prop('checked', false);
                                    toastr.success(msg);
                                },
                                error: function(msg){
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