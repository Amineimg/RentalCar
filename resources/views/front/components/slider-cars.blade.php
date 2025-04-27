
<section class="car-rentals-section section-padding fix">
    <div class="container">
        <!-- Heading title-->
        <div class="section-title text-center">
            <img src="{{asset('assets_v2/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">{{ __('website.recommended_car_description') }}</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                {{ __('website.recommended_car_title') }}
            </h2>
        </div>
        <!-- /Heading title -->
        <div class="car-rentals-wrapper">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                <button class="array-next"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="swiper car-rentals-slider">
                <div class="swiper-wrapper">
                    @forelse ($bestCars as $car)

                        <div class="swiper-slide">
                            <div class="car-rentals-items">
                                <div class="car-image" style="width: 100%;height: 200px; overflow: hidden;display: flex; align-items: center;justify-content: center; ">
                                    <a href="{{ route('car_details',['id'=>$car->id,'car_name'=>$car->alias]) }}">
                                        <img src="{{ URL::asset('images/data/' . $car->front_image->image ?? '') }}"
                                            class="img-fluid" alt="dacia" style=" width: 100%;height: 100%;object-fit: coverobject-position: center;">
                                    </a>
                                </div>
                                <div class="car-content  equal-height  p-3 d-flex flex-column justify-content-between" >
                                    <div class="post-cat">
                                        <span class="featured-text">{{ Helpers::getAttributeFromTranslate('name', Helpers::getDefaultLanguage('id'), 1, $car->carmodel) }} Model</span>
                                    </div>

                                    <h4><a href="{{ route('car_details', ['id' => $car->id, 'car_name' => $car->alias]) }}">{{  $car->carmodel->carmake->alias }}</a></h4>
                                    <h6>From {{ Helpers::moneyFormatDevise($car->d_11) }} <span>/ {{ __("website.day") }}</span></h6>
                                    <div class="icon-items" style="display: flex;justify-content: center; gap: 20px;margin: 15px 0;">
                                        <ul style="padding:0; margin:0">
                                            <li>
                                                <img src="{{ URL::asset('/assets_v2/img/car/seat.svg') }}" alt="img" class="me-1">
                                                {{ $car->passengers_number . ' ' . __('website.persons') }}
                                            </li>
                                            <li>
                                                <img src="{{ URL::asset('/assets_v2/img/car/door.svg') }}" alt="img" class="me-1">
                                                {{ $car->doors }} Doors
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="{{ URL::asset('/assets_v2/img/car/automatic.svg') }}" alt="img" class="me-1">
                                                {{ $car->transmission == 'automatic' ? __('website.transmission_auto') : __('website.transmission_manual') }}
                                            </li>
                                            <li>
                                                <img src="{{ URL::asset('/assets_v2/img/car/petrol.svg') }}" alt="img" class="me-1">
                                                {{ $car->carburant == 'diesel' ? __('website.diesel') : __('website.petrol') }}
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('car_details', ['id' => $car->id, 'car_name' => $car->alias]) }}" class="theme-btn bg-color w-100 text-center">{{ __('website.book_now') }} <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                </div>
                            </div>
                        </div>

                    @empty
                    @endforelse
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

        <!-- View More -->
    </div>
</section>

