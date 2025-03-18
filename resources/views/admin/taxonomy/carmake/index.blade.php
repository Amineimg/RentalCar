@extends('layouts.admin')

@section('title')
    <title>{{get_string('carmakes') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection
@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('carmakes')}}</h3>
@endsection
    <div class="col l6 m8 s12 left left-align mbot10">
        {!!Form::open(['method' => 'post', 'url' => route('admin_taxonomy_carmake_search')]) !!}
        <div class="form-group col s8 autocomplete-fix">
            {{Form::text('term', null, ['class' => 'form-control', 'id' => 'term', 'placeholder' => get_string('search_carmakes')])}}
        </div>
        <div class="col l4 m4 s4">
            <button class="btn waves-effect" type="submit" name="action">{{get_string('filter')}}</button>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col l6 m4 s12 right right-align mbot10">
        <a href="{{route('admin.taxonomy.carmake.create')}}" class="btn waves-effect"> {{get_string('create_carmake')}} <i class="material-icons small">add_circle</i></a>
        <a href="#" class="mass-delete btn waves-effect btn-red"><i class="material-icons color-white">delete</i></a>
    </div>
    <div class="col s12">
        @if($carmakes->count())
        <div class="table-responsive">
        <table class="table bordered striped">
            <thead class="thead-inverse">
            <tr>
                <th>
                    <input type="checkbox" class="filled-in primary-color" id="select-all" />
                    <label for="select-all"></label>
                </th>
                <th>{{get_string('name')}}</th>
                <th>{{get_string('order')}}</th>
                <th class="icon-options">{{get_string('options')}}</th>
            </tr>
            </thead>
            <tbody>
                @foreach($carmakes as $carmake)
                    <tr>
                        <td>
                            <input type="checkbox" class="filled-in primary-color" id="{{$carmake->id}}" />
                            <label for="{{$carmake->id}}"></label>
                        </td>
                        <td>{{$carmake->contentDefault->name}}</td>
                        <td>{{$carmake->order}}</td>
                        <td>
                            <div class="icon-options">
                                <a href="{{url('carmake').'/'.$carmake->alias}}" title="{{get_string('view_page')}}"><i class="small material-icons color-primary">visibility</i></a>
                                <a href="{{route('admin.taxonomy.carmake.edit', $carmake->id)}}" title="{{get_string('edit_carmake')}}"><i class="small material-icons color-primary">mode_edit</i></a>
                                <a href="#" class="delete-button" data-id="{{$carmake->id}}" title="{{get_string('delete_carmake')}}"><i class="small material-icons color-red">delete</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{$carmakes->links()}}
        @else
            <strong class="center-align">{{get_string('no_results')}}</strong>
        @endif
    </div>
@endsection

@section('footer')

<script>

    $(document).ready(function(){

        $('.delete-button').click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var selector = $(this).parents('tr');
            var token = $('[name=_token]').val();
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
                            url: '{{ url('/admin/taxonomy/carmake/') }}/'+id,
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
        $('.mass-delete').click(function(event){
            event.preventDefault();
            var id = [];
            var selector = [];
            $("tbody input:checkbox:checked").each(function(){
                id.push($(this).attr('id'));
                selector.push($(this).parents('tr'));
            });
            var token = $('[name=_token]').val();
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
                    if(result) {
                        $.ajax({
                            url: '{{ url('/admin/taxonomy/carmake/massdestroy') }}',
                            type: 'post',
                            data: {id: id, _token :token},
                            success:function(msg) {
                                $.each(selector, function(index, item){
                                    $(this).remove();
                                });
                                $('#select-all').prop('checked', false);
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
        $('#term').autocomplete({
            source: '{{ url('/admin/taxonomy/carmake/autocomplete') }}',
            minLength: 0,
            delay: 0,
            focus: function( event, ui ) {
                $('#term').val( ui.item.name );
                return false;
            },
            select: function( event, ui ) {
                $('#term').val( ui.item.name).attr('data-id', ui.item.id);
                return false;
        }}).data("ui-autocomplete")._renderItem = function( ul, item ) {
             return $( "<li></li>" )
             .append( "<a href='#!'>" + item.name + "</a>" )
            .appendTo( ul );
         };
    });
</script>
@endsection