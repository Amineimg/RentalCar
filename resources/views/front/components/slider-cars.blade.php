<div>
    <section class="section popular-services">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>{{ __('website.recommended_car_title') }}</h2>
                <p>{{ __('website.recommended_car_description') }}</p>
            </div>
            <!-- /Heading title -->
            <div class="row">
                <div class="popular-slider-group">
                    <div class="owl-carousel rental-deal-slider owl-theme">
                        @forelse ($bestCars as $car)
                            <!-- owl carousel item -->
                            <!-- owl carousel item -->
                            <div class="rental-car-item">
                                <div class="listing-item pb-0">
                                    <div class="listing-img">
                                        <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">
                                            <img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}"
                                                class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <span
                                            class="featured-text">{{ Helpers::getAttributeFromTranslate('name', Helpers::getDefaultLanguage('id'), 1, $car->carmodel->carmake) }}</span>
                                    </div>
                                    <div class="listing-content">
                                        <div
                                            class="listing-features d-flex align-items-end justify-content-between">
                                            <div class="list-rating">
                                                <a href="javascript:void(0)" class="author-img">
                                                    {{-- <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                        alt="author"> --}}
                                                </a>
                                                <h3 class="listing-title">
                                                    <a
                                                        href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">{{ Helpers::getAttributeFromTranslate('name', 2, Helpers::getDefaultLanguage('id'), $car) }}</a>
                                                </h3>
                                                <div class="list-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(4.0) 150 Reviews</span>
                                                </div>
                                            </div>
                                            {{-- <div class="list-km">
                                                <span class="km-count"><img
                                                        src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                        alt="author">3.5m</span>
                                            </div> --}}
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                            alt="Auto"></span>
                                                    <p>{{ $car->transmission == 'automatic' ? __('website.transmission_auto') : __('website.transmission_manual') }}
                                                    </p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>{{ $car->carburant == 'diesel' ? __('website.diesel') : __('website.petrol') }}
                                                        </>
                                                    </p>
                                                </li>

                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>{{ $car->passengers_number . ' ' . __('website.persons') }}
                                                    </p>
                                                </li>

                                            </ul>
                                            <ul>
                                                @if ($car->airconditioner == 1)
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/front/build/img/icons/car-parts-07.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>{{ __('website.air_condition') }}</p>
                                                    </li>
                                                @endif
                                                <li>
                                                    {{-- <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2022</p> --}}
                                                </li>
                                                <li>
                                                    {{-- <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2022</p> --}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i
                                                        class="feather-map-pin"></i></span>{{ __('website.from') }}
                                            </div>
                                            <div class="listing-price">
                                                <h6> {{ Helpers::moneyFormatDevise($car->price_per_night) }}<span>/{{ __('website.day') }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>{{ __('website.book_now') }}</a>
                                        </div>
                                    </div>
                                    <div class="feature-text">
                                        <span class="bg-warning">Top Rated</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /owl carousel item -->
                            <!-- /owl carousel item -->
                        @empty
                        @endforelse



                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="details-car-grid">
                        <div class="details-slider-heading">
                            <h3>You May be Interested in</h3>
                        </div>
                        <div class="owl-carousel rental-deal-slider details-car owl-theme">
                            @forelse ($bestCars as $car)
                                <!-- owl carousel item -->
                                <div class="rental-car-item">
                                    <div class="listing-item pb-0">
                                        <div class="listing-img">
                                            <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">
                                                <img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}"
                                                    class="img-fluid" alt="Audi">
                                            </a>
                                            <div class="fav-item justify-content-end">
                                                <a href="javascript:void(0)" class="fav-icon">
                                                    <i class="feather-heart"></i>
                                                </a>
                                            </div>
                                            <span
                                                class="featured-text">{{ Helpers::getAttributeFromTranslate('name', Helpers::getDefaultLanguage('id'), 1, $car->carmodel->carmake) }}</span>
                                        </div>
                                        <div class="listing-content">
                                            <div
                                                class="listing-features d-flex align-items-end justify-content-between">
                                                <div class="list-rating">
                                                    <a href="javascript:void(0)" class="author-img">
                                                        <img src="{{ URL::asset('/build/img/profiles/avatar-03.jpg') }}"
                                                            alt="author">
                                                    </a>
                                                    <h3 class="listing-title">
                                                        <a
                                                            href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">{{ Helpers::getAttributeFromTranslate('name', 2, Helpers::getDefaultLanguage('id'), $car) }}</a>
                                                    </h3>
                                                    <div class="list-rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>(4.0) 150 Reviews</span>
                                                    </div>
                                                </div>
                                                <div class="list-km">
                                                    <span class="km-count"><img
                                                            src="{{ URL::asset('/build/img/icons/map-pin.svg') }}"
                                                            alt="author">3.5m</span>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}"
                                                                alt="Auto"></span>
                                                        <p>{{ $car->transmission == 'automatic' ? __('website.transmission_auto') : __('website.transmission_manual') }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                                alt="Petrol"></span>
                                                        <p>{{ $car->carburant == 'diesel' ? __('website.diesel') : __('website.petrol') }}
                                                            </>
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                                alt="Persons"></span>
                                                        <p>{{ $car->passengers_number . ' ' . __('website.persons') }}
                                                        </p>
                                                    </li>

                                                </ul>
                                                <ul>
                                                    @if ($car->airconditioner == 1)
                                                        <li>
                                                            <span><img
                                                                    src="{{ URL::asset('/front/build/img/icons/car-parts-07.svg') }}"
                                                                    alt="Persons"></span>
                                                            <p>{{ __('website.air_condition') }}</p>
                                                        </li>
                                                    @endif
                                                    <li>
                                                        <span><img
                                                                src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                                alt="2018"></span>
                                                        <p>2022</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-location-details">
                                                <div class="listing-price">
                                                    <span><i
                                                            class="feather-map-pin"></i></span>{{ __('website.from') }}
                                                </div>
                                                <div class="listing-price">
                                                    <h6> {{ Helpers::moneyFormatDevise($car->price_per_night) }}<span>/{{ __('website.day') }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="listing-button">
                                                <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}" class="btn btn-order"><span><i
                                                            class="feather-calendar me-2"></i></span>{{ __('website.book_now') }}</a>
                                            </div>
                                        </div>
                                        <div class="feature-text">
                                            <span class="bg-warning">Top Rated</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /owl carousel item -->
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- View More -->
            <div class="view-all text-center" data-aos="fade-down">
                <a href="{{ route('search_home') }}"
                    class="btn btn-view d-inline-flex align-items-center">{{ __('website.show_all') }}<span><i
                            class="feather-arrow-right ms-2"></i></span></a>
            </div>
            <!-- View More -->
        </div>
    </section>
</div>
