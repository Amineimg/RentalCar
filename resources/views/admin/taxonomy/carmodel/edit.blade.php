@extends('layouts.admin')

@section('title')
    <title>{{get_string('edit_carmodel') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection

@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('edit_carmodel')}}</h3>
@endsection
<div class="col s12">
    @if(!$errors->isEmpty())
        <span class="wrong-error">* {{get_string('validation_error')}}</span>
    @endif
        {!! Form::open(['method' => 'patch', 'url' => route('admin.taxonomy.carmodel.update', $carmodel->id), 'files' => 'true']) !!}
    <div class="panel">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="tab active"><a href="#content-panel" data-toggle="tab">{{get_string('content')}}</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                <div id="content-panel" class="tab-pane active">
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                @foreach($languages as $language)
                                    <li class="tab {{$language->default ? 'active' : ''}}"><a href="#lang{{$language->id}}" data-parent="#content" data-toggle="tab"><img src="{{asset($language->flag)}}"/><span>{{$language->language}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                @foreach($languages as $language)
                                    <div id="lang{{$language->id}}" class="tab-pane {{$language->default ? 'active' : ''}}">
                                        <div class="col s12">
                                            <div class="form-group  {{$errors->has('name.'.$language->id.'') ? 'has-error' : ''}}">
                                                {{Form::label('name['.$language->id.']', get_string('carmodel_name'))}}
                                                {{Form::text('name['.$language->id.']', $carmodel->content($language->id)->name, ['class' => 'form-control', 'placeholder' => get_string('enter_carmodel_name')])}}
                                                @if($errors->has('name.'.$language->id.''))
                                                    <span class="wrong-error">* {{$errors->first('name.'.$language->id.'')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group  {{$errors->has('meta_title.'.$language->id.'') ? 'has-error' : ''}}">
                                                {{Form::label('meta_title['.$language->id.']', "Meta Title")}}
                                                {{Form::text('meta_title['.$language->id.']', $carmodel->content($language->id)->meta_title, ['class' => 'form-control', 'placeholder' => 'Meta Title'])}}
                                                @if($errors->has('meta_title.'.$language->id.''))
                                                    <span class="wrong-error">* {{$errors->first('meta_title.'.$language->id.'')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group  {{$errors->has('meta_description.'.$language->id.'') ? 'has-error' : ''}}">
                                                {{Form::label('meta_description['.$language->id.']', "Meta Description")}}
                                                {{Form::text('meta_description['.$language->id.']', $carmodel->content($language->id)->meta_description, ['class' => 'form-control', 'placeholder' => 'Meta Description'])}}
                                                @if($errors->has('meta_description.'.$language->id.''))
                                                    <span class="wrong-error">* {{$errors->first('meta_description.'.$language->id.'')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="form-group  {{$errors->has('carmake_id') ? 'has-error' : ''}}">
                            {{Form::label('carmake_id', get_string('carmake'))}}
                            {{Form::select('carmake_id', $carmakes, $carmodel->carmake_id, ['class' => 'carmake-select form-control', 'placeholder' => get_string('choose_carmake')])}}
                            @if($errors->has('carmake_id'))
                                <span class="wrong-error">* {{$errors->first('carmake_id')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="form-group">
                            {{Form::label('order', get_string('order'))}}
                            {{Form::number('order', $carmodel->order, ['class' => 'form-control', 'min' => '0', 'step' => 1, 'placeholder' => get_string('order')])}}
                        </div>
                    </div>
                    <div class="col l12">
                        <div class="input-group {{$errors->has('featured_image') ? 'has-error' : ''}}">
                            <label class="input-group-btn">
                            <span class="btn btn-primary waves-effect">{{get_string('upload_featured_image')}} <i class="material-icons small">add_circle</i>
                                {!! Form::file('featured_image', ['id' => 'featured_image', 'class' => 'hidden']) !!}
                            </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('featured_image'))
                            <span class="wrong-error">* {{$errors->first('featured_image')}}</span>
                        @endif
                        <span class="field-info">{{get_string('min_dimension_featured')}}</span>
                    </div>
                    @if($carmodel->featured_image)
                    <div class="col l4 m4 s4">
                        <a href="#!" class="delete-featured-image btn waves-effect btn-red" data-id="{{$carmodel->id}}"><i class="material-icons color-white">delete</i>{{ get_string('delete_image') }}</a>
                    </div>
                        <img id="featured-image" class="img-responsive mtop10" src="{{$carmodel->featured_image}}"/>
                    @endif
                </div>
            </div>
            <div class="col clearfix s12 mtop10">
                <div class="form-group">
                    <button class="btn waves-effect" type="submit" name="action">{{get_string('edit_carmodel')}}</button>
                    <a href="{{route('admin.taxonomy.carmodel.index')}}" class="btn waves-effect">{{get_string('carmodel_all')}}</a>
                    <a href="#!" class="delete-button btn waves-effect btn-red" data-id="{{$carmodel->id}}"><i class="material-icons color-white">delete</i></a>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){

            $('.delete-button').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
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
                                url: '{{ url('/admin/taxonomy/carmodel/') }}'+id,
                                type: 'post',
                                data: {_method: 'delete', _token :token},
                                success:function(msg) {
                                    window.location = "/admin/taxonomy/carmodel";
                                }
                            });
                        }
                    }
                });
            });

            $('.delete-featured-image').click(function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var token = $('[name="_token"]').val();
                bootbox.confirm({
                    title: '{{get_string('confirm_action')}}',
                    message: '{{get_string('delete_featured_image')}}',
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
                                url: '{{ url('/admin/taxonomy/carmodel/deleteImage') }}/'+id,
                                type: 'post',
                                data: {_token :token},
                                success:function(msg) {
                                    $('#featured-image').remove();
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
