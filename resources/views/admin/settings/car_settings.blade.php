@extends('layouts.admin')

@section('title')
    <title>{{get_string('cars_settings') . ' - ' . get_setting('site_name', 'site')}}</title>
@endsection

@section('content')
@section('page_title')
    <h3 class="page-title mbot10">{{get_string('cars_settings')}}</h3>
@endsection
<div class="panel col s12">
    <div class="row">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="tab active"><a data-toggle="tab" href="#general_settings">{{get_string('general')}}</a></li>
            </ul>
        </div>
        {!! Form::open(['url' => route('admin_car_settings_update'), 'method' => 'post', 'id' => "car_settings", 'class' => 'table-responsive', 'files' => 'true']) !!}
        <div class="panel-body">
            <div class="tab-content">
                <div id="general_settings" class="tab-pane active">
                    <!-- <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('show_car_categories_0') ? 'has-error' : ''}}">
                            {{Form::label('show_car_categories_0', get_string('show_car_categories_0'))}}
                            {{Form::select('show_car_categories_0', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('show_car_categories_0', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('show_car_categories_0'))
                                <span class="wrong-error">* {{$errors->first('show_car_categories_0')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('show_car_types_0') ? 'has-error' : ''}}">
                            {{Form::label('show_car_types_0', get_string('show_car_types_0'))}}
                            {{Form::select('show_car_types_0', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('show_car_types_0', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('show_car_types_0'))
                                <span class="wrong-error">* {{$errors->first('show_car_types_0')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('show_car_locations_0') ? 'has-error' : ''}}">
                            {{Form::label('show_car_locations_0', get_string('show_car_locations_0'))}}
                            {{Form::select('show_car_locations_0', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('show_car_locations_0', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('show_car_locations_0'))
                                <span class="wrong-error">* {{$errors->first('show_car_locations_0')}}</span>
                            @endif
                        </div>
                    </div> -->
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('cars_approved_by_admin') ? 'has-error' : ''}}">
                            {{Form::label('cars_approved_by_admin', get_string('cars_approved_by_admin'))}}
                            {{Form::select('cars_approved_by_admin', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('cars_approved_by_admin', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('cars_approved_by_admin'))
                                <span class="wrong-error">* {{$errors->first('cars_approved_by_admin')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('allow_featured_cars') ? 'has-error' : ''}}">
                            {{Form::label('allow_featured_cars', get_string('allow_featured_cars'))}}
                            {{Form::select('allow_featured_cars', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('allow_featured_cars', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('allow_featured_cars'))
                                <span class="wrong-error">* {{$errors->first('allow_featured_cars')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('show_available_amenities_only') ? 'has-error' : ''}}">
                            {{Form::label('show_available_amenities_only', get_string('show_available_amenities_only'))}}
                            {{Form::select('show_available_amenities_only', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('show_available_amenities_only', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('show_available_amenities_only'))
                                <span class="wrong-error">* {{$errors->first('show_available_amenities_only')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('autoapprove_booking') ? 'has-error' : ''}}">
                            {{Form::label('autoapprove_booking', get_string('autoapprove_booking'))}}
                            {{Form::select('autoapprove_booking', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('autoapprove_booking', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('autoapprove_booking'))
                                <span class="wrong-error">* {{$errors->first('autoapprove_booking')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('show_first_image') ? 'has-error' : ''}}">
                            {{Form::label('show_first_image', get_string('show_first_image'))}}
                            {{Form::select('show_first_image', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('show_first_image', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('show_first_image'))
                                <span class="wrong-error">* {{$errors->first('show_first_image')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('filter_by_features') ? 'has-error' : ''}}">
                            {{Form::label('filter_by_features', get_string('filter_by_features'))}}
                            {{Form::select('filter_by_features', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('filter_by_features', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('filter_by_features'))
                                <span class="wrong-error">* {{$errors->first('filter_by_features')}}</span>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="col l6 m6 s6">
                        <div class="form-group  {{$errors->has('autoapprove_booking') ? 'has-error' : ''}}">
                            {{Form::label('phone_required_booking', get_string('phone_required_booking'))}}
                            {{Form::select('phone_required_booking', ['0' => get_string('no'), '1' => get_string('yes')], get_setting('phone_required_booking', 'car'), ['class' => 'form-control'])}}
                            @if($errors->has('phone_required_booking'))
                                <span class="wrong-error">* {{$errors->first('phone_required_booking')}}</span>
                            @endif
                        </div>
                    </div> -->
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('passengers_number_max') ? 'has-error' : ''}}">
                            {{Form::label('passengers_number_max', get_string('passengers_number_max'))}}
                            {{Form::number('passengers_number_max', get_setting('passengers_number_max', 'car'), ['class' => 'form-control', 'min' => 1, 'placeholder' => get_string('passengers_number_max')])}}
                            @if($errors->has('passengers_number_max'))
                                <span class="wrong-error">* {{$errors->first('passengers_number_max')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('rooms_number_max') ? 'has-error' : ''}}">
                            {{Form::label('rooms_number_max', get_string('rooms_number_max'))}}
                            {{Form::number('rooms_number_max', get_setting('rooms_number_max', 'car'), ['class' => 'form-control', 'min' => 1, 'placeholder' => get_string('rooms_number_max')])}}
                            @if($errors->has('rooms_number_max'))
                                <span class="wrong-error">* {{$errors->first('rooms_number_max')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group  {{$errors->has('price_range_max') ? 'has-error' : ''}}">
                            {{Form::label('price_range_max', get_string('price_range_max'))}}
                            {{Form::number('price_range_max', get_setting('price_range_max', 'car'), ['class' => 'form-control', 'min' => 1, 'placeholder' => get_string('price_range_max')])}}
                            @if($errors->has('price_range_max'))
                                <span class="wrong-error">* {{$errors->first('price_range_max')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col clearfix l4 m4 s12 mtop10">
                <div class="form-group">
                    <button class="btn waves-effect" type="submit" name="action">{{get_string('update')}}</button></div>
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
