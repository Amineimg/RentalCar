     <!-- Header -->
     @if (!Route::is(['home']))
        @include('front.layout.partials.top-header')

     @endif

     @if (Route::is(['home']))

     <!-- Hero Sec Main -->
        <div class="hero-sec-main">
            <!-- Header -->
            @include('front.layout.partials.top-header')

            <!-- /Header -->

            <!-- Banner -->
            <section class="banner-section banner-sec-two banner-slider">
                <div class="banner-img-slider owl-carousel">
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/dehbi (3).png') }}" alt="Img">
                    </div>
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/dehbi (5).png') }}" alt="Img">
                    </div>
                    <div class="slider-img">
                        <img src="{{ URL::asset('/front/build/img/bg/home-banner-img-03.png') }}" alt="Img">
                    </div>
                </div>
                <div class="container">
                    <div class="home-banner">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="hero-sec-contents">
                                    <div class="banner-title">
                                        <h1>{{ __("website.home_page_title") }}.
                                            <span>{{ __("website.brand_name") }}</span>
                                        </h1>
                                        <p>{{ __("website.home_page_description") }}
                                        </p>
                                    </div>
                                    <div class="banner-form">
                                        <form action="{{ route("search_home") }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="banner-search-list">
                                                        <div class="input-block">
                                                            <label><i class="bx bx-map"></i> {{ __("website.pickup_location") }}</label>
                                                            <select class="select" name="pickup_location">
                                                                @forelse ($locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                                @empty
                                                                <option>No locations</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="input-block">
                                                            <label><i class="bx bx-calendar"></i>{{ __("website.start_date") }}</label>
                                                            <div class="date-widget">
                                                                <div class="group-img">
                                                                    <input type="text" class="form-control datetimepicker start_date" name="start_date" placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-block">
                                                            <label><i class="bx bx-calendar"></i>{{ __("website.start_time") }}</label>
                                                            <div class="date-widget">
                                                                <div class="group-img">
                                                                    <input type="text" class="form-control timepicker" name="start_time"
                                                                        placeholder="11:00 AM">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="banner-search-list">
                                                    <div class="input-block">
                                                        <label><i class="bx bx-map"></i>{{ __("website.dropoff_location") }}</label>
                                                        <select class="select" name="dropoff_location">
                                                            @forelse ($locations as $location)
                                                                <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                            @empty
                                                            <option>No locations</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="input-block">
                                                        <label><i class="bx bx-calendar"></i>{{ __("website.end_date") }}</label>
                                                        <div class="date-widget">
                                                            <div class="group-img">
                                                                <input type="text" class="form-control datetimepicker end_date" name="end_date"
                                                                placeholder="{{ Carbon::now()->format("d-m-Y") }}" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("d-m-Y") : Carbon::now()->addDay()->format("d-m-Y") }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <label><i class="bx bx-calendar"></i>{{ __("website.end_time") }}</label>
                                                        <div class="date-widget">
                                                            <div class="group-img">
                                                                <input type="text" class="form-control timepicker"  name="end_time"
                                                                    placeholder="11:00 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="input-block-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="bx bx-search-alt me-2"></i> {{ __("website.search") }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="banner-user-group text-center">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-01.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/front/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="Img"></a>
                                            </li>
                                            <li class="users-text">
                                                <h5>6K + Customers</h5>
                                                <span>has used our renting services </span>
                                            </li>
                                        </ul>
                                    </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Banner -->
        </div>
     @endif
     <!-- /Hero Sec Main -->
