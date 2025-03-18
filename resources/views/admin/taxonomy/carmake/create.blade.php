@extends('layouts.admin')

@section('title')
    <title>{{get_string('create_carmake') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection

@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('create_carmake')}}</h3>
@endsection
<div class="col s12">
    @if(!$errors->isEmpty())
        <span class="wrong-error">* {{get_string('validation_error')}}</span>
    @endif
        {!! Form::open(['method' => 'post', 'url' => route('admin.taxonomy.carmake.store'), 'files' => true]) !!}
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
                                                {{Form::label('name['.$language->id.']', get_string('carmake_name'))}}
                                                {{Form::text('name['.$language->id.']', null, ['class' => 'form-control', 'placeholder' => get_string('enter_carmake_name')])}}
                                                @if($errors->has('name.'.$language->id.''))
                                                    <span class="wrong-error">* {{$errors->first('name.'.$language->id.'')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="form-group">
                            {{Form::label('order', get_string('order'))}}
                            {{Form::number('order', null, ['class' => 'form-control', 'min' => '0', 'step' => 1, 'placeholder' => get_string('order')])}}
                        </div>
                    </div>
                    <div class="col s12">
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
                </div>
            </div>
            <div class="col clearfix s12 mtop10">
                <div class="form-group">
                    <button class="btn waves-effect" type="submit" name="action">{{get_string('save')}}</button>
                    <a href="{{route('admin.taxonomy.carmake.index')}}" class="btn waves-effect">{{get_string('carmake_all')}}</a>
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
        });
    </script>
@endsection