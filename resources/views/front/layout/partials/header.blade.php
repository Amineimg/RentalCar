     <!-- Header -->
     @if (!Route::is(['home']))
        @include('front.layout.partials.top-header')

     @endif

     @if (Route::is(['home']))

     <!-- Hero Sec Main -->
            <!-- Header -->
            @include('front.layout.partials.top-header')

            <!-- /Header -->

            <!-- Banner -->
            <section class="hero-section hero-1 fix">
                <div class="array-button">
                    <button class="image-array-left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="image-array-right">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-image bg-cover" style="background-image: url('assets_v2/img/hero/location-de-voiture-marrakech.jpg');">
                                <div class="overlay-shape">
                                </div>
                            </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                           <div class="hero-content text-center">
                                                <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                    Car <span>Rental</span>
                                                </h4>
                                                <h2 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                    {{ __("website.home_page_title") }}

                                                </h2>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="hero-image bg-cover" style="background-image: url('assets_v2/img/hero/dacia-duster-marrakech.jpg');">


                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                        <div class="hero-content text-center" >
                                            <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Car <span>Rental</span>
                                            </h4>
                                            <h2 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                {{ __("website.home_page_title") }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pickup-loaction-area bg-cover" style="background-image: url('{{ asset('assets_v2/img/brand-bg.png') }}'); ">
                    <div class="container">
                        <form action="{{ route("search_home") }}" method="post">
                            @csrf
                            <div class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                                <div class="pickup-items">
                                    <label class="field-label">{{ __("website.pickup_location") }}</label>
                                    <div class="category-oneadjust">
                                        <select class="category" name="pickup_location">

                                            @forelse ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                @empty
                                                <option>No locations</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="pickup-items">
                                    <label class="field-label">{{ __("website.start_date") }}</label>
                                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" type="text" name="start_date" placeholder="Check in" data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("start_date") && !empty(Session::get("start_date")) ? Carbon::parse(Session::get("start_date"))->format("d-m-Y") : Carbon::now()->format("d-m-Y") }}">
                                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                    </div>
                                </div>
                                <div class="pickup-items">
                                    <label class="field-label">{{ __("website.end_date") }}</label>
                                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" type="text" name="end_date" placeholder="Check in"  data-min-date="{{ Carbon::now()->format("d-m-Y") }}" data-current-date="{{Session::has("end_date") && !empty(Session::get("end_date")) ? Carbon::parse(Session::get("end_date"))->format("d-m-Y") : Carbon::now()->addDay()->format("d-m-Y") }}" >
                                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                    </div>
                                </div>
                                <div class="pickup-items">
                                    <label class="field-label">{{ __("website.dropoff_location") }}</label>
                                    <div class="category-oneadjust">
                                        <select name="dropoff_location" class="category">

                                            @forelse ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->contentload->location }}</option>
                                                @empty
                                                <option>No locations</option>
                                            @endforelse


                                        </select>
                                    </div>
                                </div>
                                <div class="pickup-items">
                                    <label class="field-label style-2">button</label>
                                <button class="pickup-btn" type="submit">
                                    {{ __("website.search") }}
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="brand-wrapper pt-80 pb-80">
                        <div class="array-button">
                            <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
                            <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
                        </div>
                        <div class="swiper brand-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="{{asset('assets_v2/img/brand/01.png')}}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="{{asset('assets_v2/img/brand/02.png')}}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="{{asset('assets_v2/img/brand/03.png')}}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="{{asset('assets_v2/img/brand/04.png')}}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand-image">
                                        <img src="{{asset('assets_v2/img/brand/05.png')}}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </section>






     @endif
     <!-- /Hero Sec Main -->
