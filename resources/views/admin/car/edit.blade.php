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
    {!!Form::open(['method' => 'patch', 'url' => route('admin.car.update', $car->id), 'files' => 'true'])!!}
    <div class="panel">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="tab active"><a href="#content-panel" data-toggle="tab">{{get_string('content')}}</a></li>
                <li class="tab"><a href="#data-panel" data-toggle="tab">{{get_string('data')}}</a></li>
                <li class="tab"><a href="#car-panel" data-toggle="tab">{{get_string('pricing')}}</a></li>
                {{-- <li class="tab"><a href="#meta-panel" data-toggle="tab">{{get_string('meta')}}</a></li> --}}
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
                                            <div class="form-group {{$errors->has('name.'.$language->id.'') ? 'has-error' : ''}}">
                                                {{Form::label('name['.$language->id.']', get_string('car_name'))}}
                                                {{Form::text('name['.$language->id.']',  $car->content($language->id)->name ?? '', ['class' => 'form-control', 'placeholder' => get_string('car_name')])}}
                                                @if($errors->has('name.'.$language->id.''))
                                                    <span class="wrong-error">* {{$errors->first('name.'.$language->id.'')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col s12 mtop10 mbot20">
                                            {{Form::label('description['.$language->id.']', get_string('description'))}}
                                            {{Form::textarea('description['.$language->id.']', $car->content($language->id)->description ?? '', ['class' => 'form-control'])}}
                                            @if($errors->has('description.'.$language->id.''))
                                                <span class="wrong-error">* {{$errors->first('description.'.$language->id.'')}}</span>
                                            @endif
                                        </div>
                                        <div class="col s12 mtop10 mbot20">
                                            {{Form::label('meta_title['.$language->id.']', get_string('meta_title'))}}
                                            {{Form::text('meta_title['.$language->id.']',  $car->content($language->id)->meta_title ?? '', ['class' => 'form-control', 'placeholder' => get_string('car_name')])}}
                                            @if($errors->has('meta_title.'.$language->id.''))
                                                <span class="wrong-error">* {{$errors->first('meta_title.'.$language->id.'')}}</span>
                                            @endif
                                        </div>
                                        <div class="col s12 mtop10 mbot20">
                                            {{Form::label('meta_description['.$language->id.']', get_string('meta_description'))}}
                                            {{Form::textarea('meta_description['.$language->id.']', $car->content($language->id)->meta_description ?? '', ['class' => 'form-control'])}}
                                            @if($errors->has('meta_description.'.$language->id.''))
                                                <span class="wrong-error">* {{$errors->first('meta_description.'.$language->id.'')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div id="data-panel" class="tab-pane">
                    <div class="col m8 s6">
                         <div class="form-group {{$errors->has('alias') ? 'has-error' : ''}}">
                            {{Form::label('alias', get_string('alias'))}}
                            {{Form::text('alias', $car->alias, ['class' => 'form-control', 'placeholder' => get_string('alias')])}}
                            @if($errors->has('alias'))
                                <span class="wrong-error">* {{$errors->first('alias')}}</span>
                            @endif
                         </div>
                    </div>
                    <div class="col m4 s6 right right-align mbot0">
                        <div class="form-group">
                            <div class="switch">
                                <label>
                                    {{get_string('standard')}}{{ Form::checkbox('featured', $car->featured, false, ['value' => $car->featured, 'id' => 'activeSwitch', 'class' => 'form-control', $car->featured ? 'checked': ''])}}<span class="lever"></span>{{get_string('featured')}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('general')}}</h5>
                    </div>
                    <div class="col m4 s6">
                        <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
                            {{Form::label('category_id', get_string('category'))}}
                            {{Form::select('category_id', $categories, $car->category_id, ['class' => 'category-select form-control', 'placeholder' => get_string('choose_category')])}}
                            @if($errors->has('category_id'))
                                <span class="wrong-error">* {{$errors->first('category_id')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col m4 s6">
                        <div class="form-group {{$errors->has('location_id') ? 'has-error' : ''}}">
                            {{Form::label('carmake_id', get_string('car_make'))}}
                            {{Form::select('carmake_id', $carmakes, $selected_carmake, ['class' => 'location-select form-control', 'placeholder' => get_string('choose_carmake')])}}
                            @if($errors->has('carmake_id'))
                                <span class="wrong-error">* {{$errors->first('carmake_id')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col m4 s6">
                        <div class="form-group {{$errors->has('location_id') ? 'has-error' : ''}}">
                            {{Form::label('carmodel_id', get_string('car_model'))}}
                            {{Form::select('carmodel_id', $carmodels, $selected_carmodel, ['class' => 'location-select form-control', 'placeholder' => get_string('choose_carmodel')])}}
                            @if($errors->has('carmodel_id'))
                                <span class="wrong-error">* {{$errors->first('carmodel_id')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('car_info')}}</h5>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('transmission') ? 'has-error' : ''}}">
                            {{Form::label('transmission', get_string('transmission'))}}
                            {{Form::select('transmission', ['manual' => get_string('manual'),'automatic' => get_string('automatic')], $car->transmission, ['class' => 'location-select form-control'])}}
                            @if($errors->has('transmission'))
                                <span class="wrong-error">* {{$errors->first('transmission')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('carburant') ? 'has-error' : ''}}">
                            {{Form::label('carburant', get_string('carburant'))}}
                            {{Form::select('carburant', ['petrol' => get_string('petrol'), 'diesel' => get_string('diesel')], $car->carburant, ['class' => 'location-select form-control'])}}
                            @if($errors->has('carburant'))
                                <span class="wrong-error">* {{$errors->first('carburant')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('airconditioner') ? 'has-error' : ''}}">
                            {{Form::label('airconditioner', get_string('air_conditioner'))}}
                            {{Form::select('airconditioner', ['0' => get_string('no'), '1' => get_string('yes')], $car->airconditioner, ['class' => 'location-select form-control'])}}
                            @if($errors->has('airconditioner'))
                                <span class="wrong-error">* {{$errors->first('airconditioner')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('passengers_number') ? 'has-error' : ''}}">
                            {{Form::label('passengers_number', get_string('passengers_number'))}}
                            {{Form::number('passengers_number', $car->passengers_number, ['class' => 'form-control', 'placeholder' => get_string('passengers_number')])}}
                            @if($errors->has('passengers_number'))
                                <span class="wrong-error">* {{$errors->first('passengers_number')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('doors') ? 'has-error' : ''}}">
                            {{Form::label('doors', get_string('doors'))}}
                            {{Form::number('doors', $car->doors, ['class' => 'form-control', 'placeholder' => get_string('doors')])}}
                            @if($errors->has('doors'))
                                <span class="wrong-error">* {{$errors->first('doors')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="form-group {{$errors->has('suitcases') ? 'has-error' : ''}}">
                            {{Form::label('suitcases', get_string('suitcases'))}}
                            {{Form::number('suitcases', $car->suitcases, ['class' => 'form-control', 'placeholder' => get_string('suitcases')])}}
                            @if($errors->has('suitcases'))
                                <span class="wrong-error">* {{$errors->first('suitcases')}}</span>
                            @endif
                        </div>
                    </div>
                    {{--
                    <div class="col s12 well checkbox-grid">
                        <p>{{get_string('choose_features')}}</p>
                        @foreach($features as $feature)
                        <div class="col s2">
                            <div class="form-group">
                                <input type="checkbox" name="features[]" @if((old('features') && in_array_r($feature->id, old('features'))) || ($car->features && in_array($feature->id, $car->features))) checked @endif value="{{$feature->id}}" class="filled-in primary-color" id="feature-{{$feature->id}}" />
                                <label for="feature-{{$feature->id}}"></label>
                                <span class="checkbox-label">{{$feature->feature[$default_language->id]}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col s12 well checkbox-grid">
                        <p>{{get_string('choose_highlights')}}</p>
                        @foreach($highlights as $highlight)
                        <div class="col s2">
                            <div class="form-group">
                                <input type="checkbox" name="highlights[]" @if((old('highlights') && in_array_r($highlight->id, old('highlights'))) || ($car->highlights && in_array($highlight->id, $car->highlights))) checked @endif value="{{$highlight->id}}" class="filled-in primary-color" id="highlight-{{$highlight->id}}" />
                                <label for="highlight-{{$highlight->id}}"></label>
                                <span class="checkbox-label">{{$highlight->highlight[$default_language->id]}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col s12 well checkbox-grid">
                        <p>{{get_string('choose_extra_services')}}</p>
                        @foreach($extraservices as $extraservice)
                        <div class="col s2">
                            <div class="form-group">
                                <input type="checkbox" name="extraservices[]" @if((old('extraservices') && in_array_r($extraservice->id, old('extraservices'))) || ($car->extraservices && in_array($extraservice->id, $car->extraservices))) checked @endif value="{{$extraservice->id}}" class="filled-in primary-color" id="extraservice-{{$extraservice->id}}" />
                                <label for="extraservice-{{$extraservice->id}}"></label>
                                <span class="checkbox-label">{{$extraservice->extraservice[$default_language->id]}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    --}}
                    <div class="col s12 well checkbox-grid">
                        <p>{{get_string('choose_options')}}</p>
                        @foreach($services as $service)
                        <div class="col s2">
                            <div class="form-group">
                                <input type="checkbox" name="services[]" @if((old('services') && in_array_r($service->id, old('services'))) || ($car->services && in_array($service->id, $car->services))) checked @endif value="{{$service->id}}" class="filled-in primary-color" id="service-{{$service->id}}" />
                                <label for="service-{{$service->id}}"></label>
                                <span class="checkbox-label">{{$service->service[$default_language->id]}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('front_image')}}</h5>
                    </div>
                    <div class="col l12 m12 s12">
                        <div id="front-file-dropzone" class="dropzone">
                            <div class="dz-message">{{get_string('upload_image')}}<br/><i class="material-icons medium">cloud_upload</i>
                            </div>
                            <div class="fallback">
                            </div>
                        </div>
                    </div>
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('gallery')}}</h5>
                    </div>
                    <div class="col l12 m12 s12">
                        <div id="file-dropzone" class="dropzone square">
                            <div class="dz-message">{{get_string('upload_images')}}<br/><i class="material-icons medium">cloud_upload</i>
                            </div>
                            <div class="fallback">
                            </div>
                        </div>
                    </div>
                    <div class="hidden-fields hidden"></div>
                </div>
                <div id="car-panel" class="tab-pane">
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('car_prices')}}</h5>
                    </div>
                    <div class="col l3 m3 s12">
                        <div class="form-group {{$errors->has('d_1') ? 'has-error' : ''}}">
                            {{Form::label('d_1', 'Prix 1 ( 1 Jour )')}}
                            {{Form::number('d_1', $car->d_1, ['class' => 'form-control', 'placeholder' => 'Prix 1 ( 1 Jour )'])}}
                            @if($errors->has('d_1'))
                                <span class="wrong-error">* {{$errors->first('d_1')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l3 m3 s12">
                        <div class="form-group {{$errors->has('price_per_night') ? 'has-error' : ''}}">
                            {{Form::label('price_per_night', 'Prix 2 ( 2  à  4 Jours )')}}
                            {{Form::number('price_per_night', $car->price_per_night, ['class' => 'form-control', 'placeholder' => 'Prix 1 ( 1  à  4 Jours )'])}}
                            @if($errors->has('price_per_night'))
                                <span class="wrong-error">* {{$errors->first('price_per_night')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l3 m3 s12">
                        <div class="form-group {{$errors->has('d_10') ? 'has-error' : ''}}">
                            {{Form::label('d_10', 'Prix 3 ( 5  à  10 Jours )')}}
                            {{Form::number('d_10', $car->d_10, ['class' => 'form-control', 'placeholder' => 'Prix 2 ( 5  à  10 Jours )'])}}
                            @if($errors->has('d_10'))
                                <span class="wrong-error">* {{$errors->first('d_10')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l3 m3 s12">
                        <div class="form-group {{$errors->has('d_11') ? 'has-error' : ''}}">
                            {{Form::label('d_11', 'Prix 4 ( Plus de 11 Jours )')}}
                            {{Form::number('d_11', $car->d_11, ['class' => 'form-control', 'placeholder' => 'Prix 3 ( Plus de 11 Jours )'])}}
                            @if($errors->has('d_11'))
                                <span class="wrong-error">* {{$errors->first('d_11')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group {{$errors->has('franchise') ? 'has-error' : ''}}">
                            {{Form::label('franchise', get_string('franchise_amount'))}}
                            {{Form::number('franchise', $car->franchise, ['class' => 'form-control', 'placeholder' => get_string('franchise_amount')])}}
                            @if($errors->has('franchise'))
                                <span class="wrong-error">* {{$errors->first('franchise')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group {{$errors->has('full_fuel') ? 'has-error' : ''}}">
                            {{Form::label('full_fuel', get_string('full_fuel'))}}
                            {{Form::number('full_fuel', $car->full_fuel, ['class' => 'form-control', 'placeholder' => get_string('full_fuel')])}}
                            @if($errors->has('full_fuel'))
                                <span class="wrong-error">* {{$errors->first('full_fuel')}}</span>
                            @endif
                        </div>
                    </div>
                    <div id="seasons" class="clearfix">
                    @if(!empty($seasons))
                        <?php $i = 0; ?>
                        @foreach($seasons as $season)
                        {{Form::hidden('seasons['.$i.'][id]', $season->id)}}
                        <div class="row season">
                            <div class="col l4 m4 s12">
                                <div class="form-group {{$errors->has('season') ? 'has-error' : ''}}">
                                    {{Form::label('seasons['.$i.'][season]', get_string('season_name'))}}
                                    {{Form::text('seasons['.$i.'][season]', $season->season, ['class' => 'form-control', 'placeholder' => get_string('season_name')])}}
                                    @if($errors->has('season'))
                                        <span class="wrong-error">* {{$errors->first('season')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l4 m4 s12">
                                <div class="form-group {{$errors->has('start_date') ? 'has-error' : ''}}">
                                    {{Form::label('seasons['.$i.'][start_date]', get_string('start_date'))}}
                                    {{Form::date('seasons['.$i.'][start_date]', $season->start_date, ['class' => 'form-control', 'placeholder' => get_string('start_date')])}}
                                    @if($errors->has('start_date'))
                                        <span class="wrong-error">* {{$errors->first('start_date')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l4 m4 s12">
                                <div class="form-group {{$errors->has('end_date') ? 'has-error' : ''}}">
                                    {{Form::label('seasons['.$i.'][end_date]', get_string('end_date'))}}
                                    {{Form::date('seasons['.$i.'][end_date]', $season->end_date, ['class' => 'form-control', 'placeholder' => get_string('end_date')])}}
                                    @if($errors->has('end_date'))
                                        <span class="wrong-error">* {{$errors->first('end_date')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group">
                                    {{Form::label('seasons['.$i.'][price_per_night]', get_string('price_per_night'))}}
                                    {{Form::number('seasons['.$i.'][price_per_night]', $season->price_per_night, ['class' => 'form-control', 'placeholder' => get_string('price_per_night')])}}
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group">
                                    {{Form::label('seasons['.$i.'][prices][p_2]', get_string('price_d_2'))}}
                                    {{Form::number('seasons['.$i.'][prices][d_2]', $season->prices['d_2'], ['class' => 'form-control', 'placeholder' => get_string('price_per_night')])}}
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group {{$errors->has('prices.d_7') ? 'has-error' : ''}}">
                                    {{Form::label('seasons['.$i.'][prices][d_7]', get_string('price_d_7'))}}
                                    {{Form::number('seasons['.$i.'][prices][d_7]', $season->prices['d_7'], ['class' => 'form-control', 'placeholder' => get_string('price_d_7')])}}
                                    @if($errors->has('prices.d_7'))
                                        <span class="wrong-error">* {{$errors->first('prices.d_7')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col l3 m4 s12">
                                <div class="form-group {{$errors->has('prices.d_14') ? 'has-error' : ''}}">
                                    {{Form::label('seasons['.$i.'][prices][d_14]', get_string('price_d_14'))}}
                                    {{Form::number('seasons['.$i.'][prices][d_14]', $season->prices['d_14'], ['class' => 'form-control', 'placeholder' => get_string('price_d_14')])}}
                                    @if($errors->has('prices.d_14'))
                                        <span class="wrong-error">* {{$errors->first('prices.d_14')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                        @endforeach
                    @endif
                    </div>
                    {{-- <a href="#" class="btn waves-effect" id="add-season">{{get_string('add_season')}} <i class="material-icons small accordion-disabled">add_circle</i></a> --}}

                    <br><br>
                </div>
                {{-- <div id="meta-panel" class="tab-pane">
                    <div class="col s12 clearfix">
                        <h5 class="section-title">{{get_string('meta')}}</h5>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group">
                            {{Form::label('meta_title', get_string('meta_title'))}}
                            {{Form::text('meta_title', $car->meta_title, ['class' => 'form-control', 'placeholder' => get_string('meta_title')])}}
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="form-group">
                            {{Form::label('meta_keywords', get_string('meta_keywords'))}}
                            {{Form::text('meta_keywords', $car->meta_keywords, ['class' => 'form-control', 'placeholder' => get_string('meta_keywords')])}}
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="form-group">
                            {{Form::label('meta_description', get_string('meta_description') )}}<span id="meta-counter">{{mb_strlen($car->meta_description)}}</span>
                            {{Form::textarea('meta_description', $car->meta_description, ['class' => 'form-control', 'placeholder' => get_string('meta_description')])}}
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col clearfix s12 mtop10">
                <div class="form-group">
                    @if(empty($car->status))
                    <button class="btn waves-effect" type="submit" name="status" value="1">{{get_string('publish')}}</button>
                    <button class="btn waves-effect" type="submit" name="status" value="0">{{get_string('update')}}</button>
                    @else
                    <button class="btn waves-effect" type="submit" name="status" value="1">{{get_string('update')}}</button>
                    @endif
                    <a href="{{route('admin.car.index')}}" class="btn waves-effect">{{get_string('car_all')}}</a>
                    <a href="#" class="delete-button btn waves-effect btn-red" data-id="{{$car->id}}"><i class="material-icons color-white">delete</i></a>
                </div>
            </div>
            {{Form::hidden('user_id', $car->user_id)}}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('.desc-content').summernote({
                height: 200,
                maxwidth: false,
                minwidth: false,
                placeholder: '{{get_string('enter_car_content')}}',
                disableDragAndDrop: true,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                ],callbacks: {
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });
        });

        Dropzone.autoDiscover = false;
        $(document).ready(function(){
            Dropzone.autoDiscover = false;
            $('#file-dropzone').dropzone({
                url: '{{url('/image_handler/upload')}}',
                paramsName: 'image',
                params: {_token: $('[name=_token]').val()},
                maxFilesize: 100,
                uploadMultiple: false,
                addRemoveLinks: true,
                maxfilesize: 10,
                parallelUploads: 1,
                maxFiles: 60,
                init: function() {

                    @if($car->images)
                        @foreach($car->images as $image)
                            var mockFile = { name: '{{ $image->image }}', size: 100000 };
                            this.emit("addedfile", mockFile);
                            this.createThumbnailFromUrl(mockFile, '{{ asset("images/data/".$image->image) }}');
                            this.emit("success", mockFile);
                        $('.hidden-fields').append('<input type="hidden" name="images[]" value="{{ $image->image }}">');
                        @endforeach
                    @endif

                    this.on('success', function(file, json) {
                        var selector = file._removeLink;
                        $(selector).attr('data-dz-remove', json.data);
                        $('.hidden-fields').append('<input type="hidden" name="images[]" value="'+ json.data +'">');
                    });

                    this.on('addedfile', function(file) {

                    });

                    this.on("removedfile", function(file) {
                        var selector = file._removeLink;
                        var data = $(selector).attr('data-dz-remove');
                        if(!data){
                            data = file.name;
                            $.ajax({
                                type: 'POST',
                                url: '{{url('/image_handler/deleteBase')}}',
                                data: {data: data, _token: $('[name=_token]').val(), type: 'car', id: '{{$car->id}}'},
                                dataType: 'html',
                                success: function(msg){
                                    $('.hidden-fields').find('[value="'+ data +'"]').remove();
                                }
                            });
                        }else{
                            $.ajax({
                                type: 'POST',
                                url: '{{url('/image_handler/delete')}}',
                                data: {data: data, _token: $('[name=_token]').val()},
                                dataType: 'html',
                                success: function(msg){
                                    $('.hidden-fields').find('[value="'+ data +'"]').remove();
                                }
                            });
                        }
                    });
                }
            });

            $("#file-dropzone").sortable({
                items:'.dz-preview',
                cursor: 'move',
                opacity: 0.5,
                containment: '#file-dropzone',
                distance: 20,
                tolerance: 'pointer',
                update: function( event, ui ) {
                    $('.hidden-fields').find('[name="images[]"]').remove();
                    var fl_name = '';
                    $('#file-dropzone .dz-preview').each( function() {
                        fl_name = $(this).find('.dz-remove').attr('data-dz-remove');
                        if(fl_name == '' || fl_name == undefined){
                            fl_name = $(this).find('.dz-filename span').html();
                        }
                        $('.hidden-fields').append('<input type="hidden" name="images[]" value="'+ fl_name +'">');
                    });
                }
            });
            //---------------------------------
            $('#front-file-dropzone').dropzone({
                url: '{{url('/image_handler/upload')}}',
                paramsName: 'front_image',
                params: {_token: $('[name=_token]').val(), filetype:'front_image'},
                maxFilesize: 100,
                uploadMultiple: false,
                addRemoveLinks: true,
                maxfilesize: 10,
                parallelUploads: 1,
                maxFiles: 1,
                init: function() {

                    @if($car->front_image)
                        var mockFile = { name: '{{ $car->front_image->image }}', size: 100000 };
                        this.emit("addedfile", mockFile);
                        this.createThumbnailFromUrl(mockFile, '{{ asset("images/data/".$car->front_image->image) }}');
                        this.emit("success", mockFile);
                        $('.hidden-fields').append('<input type="hidden" name="front_image" value="{{ $car->front_image->image }}">');
                    @endif

                    this.on('success', function(file, json) {
                        var selector = file._removeLink;
                        $(selector).attr('data-dz-remove', json.data);
                        $('.hidden-fields').append('<input type="hidden" name="front_image" value="'+ json.data +'">');
                    });

                    this.on('addedfile', function(file) {

                    });

                    this.on("removedfile", function(file) {
                        var selector = file._removeLink;
                        var data = $(selector).attr('data-dz-remove');
                        if(!data){
                            data = file.name;
                            $.ajax({
                                type: 'POST',
                                url: '{{url('/image_handler/deleteBase')}}',
                                data: {data: data, _token: $('[name=_token]').val(), type: 'car', id: '{{$car->id}}'},
                                dataType: 'html',
                                success: function(msg){
                                    $('.hidden-fields').find('[value="'+ data +'"]').remove();
                                }
                            });
                        }else{
                            $.ajax({
                                type: 'POST',
                                url: '{{url('/image_handler/delete')}}',
                                data: {data: data, _token: $('[name=_token]').val()},
                                dataType: 'html',
                                success: function(msg){
                                    $('.hidden-fields').find('[value="'+ data +'"]').remove();
                                }
                            });
                        }
                    });
                }
            });
        });

        $(document).ready(function(){
            $('#carmake_id').on('change', function(event){
                $.ajax({
                    url : '{{ route('get_carmodels') }}',
                    type : 'POST',
                    data : {
                        '_token' : '{{ csrf_token() }}',
                        carmake_id : $(this).val()
                    },
                    success : function(data){
                        $('#carmodel_id').find('option').remove();
                        $.each(data, function(i, item) {
                            $('#carmodel_id').append(new Option(item.name, item.id));
                        });
                        //console.log(data);
                    }
                });
            });
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
                                url: '{{ url('/admin/car/') }}/'+id,
                                type: 'post',
                                data: {_method: 'delete', _token :token},
                                success:function(msg) {
                                    window.location = "/admin/car";
                                }
                            });
                        }
                    }
                });
            });

            $(document).on('keyup', '#meta_description', function(event) {
                var currentString = $(this).val()

                $("#meta-counter").html(currentString.length);
                if (currentString.length > 160 )  {  /*or whatever your number is*/
                   $("#meta-counter").css('color', '#ff0000');
                } else {
                   $("#meta-counter").css('color', '#009900');
                }
            });

            var seasons_count = $("#seasons .season").length;
            $(document).on('click', '#add-season', function(event){
                var season_html =
                    '<div class="row season">'+
                    '    <div class="col l4 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][season]">{{get_string("season_name")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("season_name")}}" name="seasons['+seasons_count+'][season]" type="text" value="" id="seasons['+seasons_count+'][season]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l4 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][start_date]">{{get_string("start_date")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("start_date")}}" name="seasons['+seasons_count+'][start_date]" type="date" value="" id="seasons['+seasons_count+'][start_date]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l4 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][end_date]">{{get_string("end_date")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("end_date")}}" name="seasons['+seasons_count+'][end_date]" type="date" value="" id="seasons['+seasons_count+'][end_date]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l3 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][price_per_night]">{{get_string("price_per_night")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("price_per_night")}}" name="seasons['+seasons_count+'][price_per_night]" type="number" value="" id="seasons['+seasons_count+'][price_per_night]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l3 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][prices][d_2]">{{get_string("price_d_2")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("price_d_2")}}" name="seasons['+seasons_count+'][prices][d_2]" type="number" value="" id="seasons['+seasons_count+'][prices][d_2]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l3 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][prices][d_7]">{{get_string("price_d_7")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("price_d_7")}}" name="seasons['+seasons_count+'][prices][d_7]" type="number" value="" id="seasons['+seasons_count+'][prices][d_7]">'+
                    '        </div>'+
                    '    </div>'+
                    '    <div class="col l3 m4 s12">'+
                    '        <div class="form-group">'+
                    '            <label for="seasons['+seasons_count+'][prices][d_14]">{{get_string("price_d_14")}}</label>'+
                    '            <input class="form-control" placeholder="{{get_string("price_d_14")}}" name="seasons['+seasons_count+'][prices][d_14]" type="number" value="" id="seasons['+seasons_count+'][prices][d_14]">'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
                $('#seasons').append(season_html);
                seasons_count++;

                return false;
            });
        });
    </script>
@endsection
