<div class="section-search page-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="{{ route('search_home') }}" method="POST">
                @csrf
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-map"></i>{{ __("website.pickup_location") }}</label>
                            <div class="group-img">
                                <select class="form-control select" name="pickup_location">
                                    @forelse ($locations as $location)
                                        <option {{ Session::has("pickup_location") && !empty(Session::get("pickup_location")) && Session::get("pickup_location")==$location->id ? "selected" : '' }} value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                    @empty
                                        <option>No locations</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-calendar"></i>{{ __("website.start_date") }}</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block date-widget">
                                <div class="group-img">
                                        <input type="text" class="form-control datetimepicker start_date" name="start_date"
                                        value="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}"
                                            placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-calendar"></i>{{ __("website.start_time") }}</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" name="start_time"
                                    value="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("H:i") : Carbon::now()->format("H:i") }}"

                                        placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-map"></i>{{ __("website.dropoff_location") }}</label>
                            <div class="group-img">
                                <select name="dropoff_location" class=" form-control select " id="">

                                    @forelse ($locations as $location)
                                    <option {{ Session::has("dropoff_location") && !empty(Session::get("dropoff_location") && Session::get("dropoff_location")==$location->id ? "selected" : '') }} value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                    @empty
                                    <option>No locations</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-calendar"></i>{{ __("website.end_date") }}</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block date-widget">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" name="end_date"
                                    value="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}"

                                        placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label><i class="bx bx-calendar"></i>{{ __("website.end_time") }}</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" name="end_time"
                                    value="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("H:i") : Carbon::now()->format("H:i") }}"

                                        placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <li class="column-group-last">
                    <div class="input-block">
                        <div class="search-btn">
                            <button class="btn search-button" type="submit"> <i class="fa fa-search"
                                    aria-hidden="true"></i>{{ __("website.search") }}</button>
                        </div>
                    </div>
                </li>
            </form>
        </div>
    </div>
</div>
