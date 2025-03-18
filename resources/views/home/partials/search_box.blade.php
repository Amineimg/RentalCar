{!! Form::open(['method' => 'post', 'url' => route('search'), 'id' => 'slider-search-form']) !!}
    <div class="row">
        <div class="col-sm-12">
            <div class="slider-box">
                <div class="form-group not-after">
                    <input type="text" value="" name="keyword" class="form-control slider-field" placeholder="{{$static_data['strings']['keywords']}} ...">
                </div>
                <div class="form-group">
                    <input type="text" value="" readonly class="form-control slider-field" placeholder="{{$static_data['strings']['choose_your_location']}}">
                    <input type="hidden" name="location_id" value="0" class="form-control slider-hidden hidden" placeholder="{{$static_data['strings']['choose_your_category']}}">
                    <ul class="dropdown-slider-menu">
                        <li data-id="" data-name="{{ $static_data['strings']['all'] }}">
                            <a href="#" class="location_id_picker">
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $static_data['strings']['all'] }}</span>
                            </a>
                        </li>
                        @foreach($static_data['locations'] as $location)
                            <li data-id="{{ $location->id }}" data-name="{{ $location->contentload->location }}">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span>{{ $location->contentload->location }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="form-group">
                    <input type="text" readonly class="form-control slider-field" placeholder="{{$static_data['strings']['choose_your_category']}}">
                    <input type="hidden" name="category_id" value="0" class="form-control slider-hidden hidden" placeholder="{{$static_data['strings']['choose_your_category']}}">
                    <ul class="dropdown-slider-menu">
                        <li data-id="" data-name="{{ $static_data['strings']['all'] }}">
                            <a href="#" class="category_id_picker">
                                <i class="fa fa-th-large"></i>
                                <span>{{ $static_data['strings']['all'] }}</span>
                            </a>
                        </li>
                        @foreach($static_data['categories'] as $category)
                            <li data-id="{{ $category->id }}" data-name="{{ $category->contentload->name }}">
                                <a href="#">
                                    <i class="fa fa-th-large"></i>
                                    <span>{{ $category->contentload->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <button type="submit" class="primary-button"><i class="fa fa-search"></i> {{$static_data['strings']['search']}}</button>
            </div>
        </div>
    </div>
{!! Form::close() !!}
