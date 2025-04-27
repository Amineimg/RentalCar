<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')

    <section class="feature-benefit section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ asset('assets_v2/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">our benefits</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Why You Should Use <br>
                    Remons Rental
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/box-icon-bg1.png') }}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/bg-button-iconbox.png') }}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="#">
                                    {{ __('website.why_choose_us_title_step_1') }}
                                </a>
                            </h4>
                            <p>{{ __('website.why_choose_us_description_step_1') }}</p>
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/feature-benefit/icon-1.png') }}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="{{route('search_home')}}" class="link-btn">View More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/box-icon-bg2.png') }}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/bg-button-iconbox.png') }}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="#">
                                    {{ __('website.why_choose_us_title_step_2') }}
                                </a>
                            </h4>
                            <p>{{ __('website.why_choose_us_description_step_2') }}</p>
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/feature-benefit/icon-2.png') }}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="{{route('search_home')}}" class="link-btn">View More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/box-icon-bg3.png') }}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ asset('assets_v2/img/feature-benefit/bg-button-iconbox.png') }}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="#">
                                    {{ __('website.why_choose_us_title_step_3')}}
                                </a>
                            </h4>
                            <p>{{ __('website.why_choose_us_description_step_3')}} <br> <br> </p>
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/feature-benefit/icon-3.png') }}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="{{route('search_home')}}" class="link-btn">View More <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="about-section fix section-padding pt-0">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="color-shape">
                            <img src="{{ asset('assets_v2/img/about/secondary-shape-color-full.png') }}" alt="shape-img">
                        </div>
                        <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                            <img src="{{ asset('assets_v2/img/about/car-shape.png') }}" alt="shape-img">
                        </div>
                        <div class="counter-content wow fadeInLeft" data-wow-delay=".4s">
                            <h2 class="text-white"><span class="count">10</span></h2>
                            <p class="text-white">
                                Years of <br>
                                Experience
                            </p>
                        </div>
                        <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                            <img style="width: 446px; height:347px" src="{{ asset('assets_v2/img/about/Askari-rent-a-car-service-1024x788.jpg') }}" alt="about-image">
                        </div>
                        <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                            <img src="{{ asset('assets_v2/img/about/header-who-pays.webp') }}" alt="about-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <img src="{{ asset('assets_v2/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Services with a Wide
                                Range of Cars
                            </h2>
                        </div>
                        <h4 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                            committed to providing our customers with exceptional service.
                        </h4>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Lorem ipsum is simply ipun txns mane so dummy text of free available in market the printing and typesetting industry has been the industry's standard dummy text ever.
                        </p>
                        <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                            <ul>
                                <li>
                                    Many Pickup Locations
                                </li>
                                <li>
                                    Offering Low Prices
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    Many Pickup Locations
                                </li>
                                <li>
                                    Offering Low Prices
                                </li>
                            </ul>
                        </div>
                        <a href="{{route('about')}}" class="theme-btn wow fadeInUp" data-wow-delay=".8s">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<x-slider-cars />

<section class="car-service-section">
    <div class="container">
        <div class="car-service-wrapper">
            <div class="shape-image">
                <img src="{{ asset('assets_v2/img/car/shape-column.png') }}" alt="shape-img">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-car-image">
                        <img src="{{ asset('front\build\img\car-list-7.jpg') }}" alt="img">
                        <div class="color-shape">
                            <img src="{{ asset('assets_v2/img/car/secondary-shape-color.png') }}" alt="shape-img">
                        </div>
                        <div class="booking-content">
                            <p>Call for booking</p>
                            <h3><a href="tel:+212 618 700 526">+212 618 700 526</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-car-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Looking for a Luxury <br>
                            Car Service?
                        </h2>
                        <h3 class="wow fadeInUp" data-wow-delay=".5s">
                            <span>Starting at</span> <sup>$</sup> 50 <span class="text">/mo</span>
                        </h3>
                        <a href="{{route('home')}}" class="theme-btn wow fadeInUp" data-wow-delay=".7s">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="funfact-section section-padding bg-cover" style="background-image: url('{{ asset('assets_v2/img/brand-bg.png') }}');">
    <div class="container">
        <div class="funfact-wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="section-title mb-0">
                        <img src="{{ asset('assets_v2/img/sub-icon-2.png') }}" alt="icon-img" class="wow fadeInUp">
                        <span class="wow fadeInUp" data-wow-delay=".2s">{{ __('website.fact_numbers') }}</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                            {{ __('website.fact_numbers_description') }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="funfact-counter-area">
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/icon/car.png') }}" alt="img">
                            </div>
                            <h2><span class="count">210</span></h2>
                            <p>
                                {{ __('website.count_of_cars') }}
                            </p>
                        </div>
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/icon/center.png') }}" alt="img">
                            </div>
                            <h2><span class="count">150</span></h2>
                            <p>
                                {{ __('website.car_center_solutions') }}
                            </p>
                        </div>
                        <div class="funfact-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon">
                                <img src="{{ asset('assets_v2/img/icon/like.png') }}" alt="img">
                            </div>
                            <h2><span class="count">200</span></h2>
                            <p>
                                {{ __('website.happy_customers') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-car-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <img src="{{ asset('assets_v2/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">select car types</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                We’re Offering Popular <br>
                Cars Models
            </h2>
        </div>
        <div class="row g-4 mt-30">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">Sedan</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{('images\data\12-2024\67659c07449e40451.png')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">Sports</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{ asset('front\build\img\cars\car-10.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">Jeep</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{('images\data\12-2024\front-676536b31e4a04918.png')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">SUV</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{ asset('front\build\img\cars\car-08-slide1.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">Luxury</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{ asset('front\build\img\cars\rental-car-04.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="popular-card-items">
                    <div class="content">
                        <h4><a href="{{route('search_home')}}">Pick-up</a></h4>
                        <p>Available for Rent</p>
                    </div>
                    <div class="car-image">
                        <img src="{{ asset('front\build\img\cars\car-07-slide2.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div class="popular-car-text wow fadeInUp" data-wow-delay=".4s">
            <h6>Car rental services specifically for our customers.</h6>
            <a href="{{route('search_home')}}" class="theme-btn">Find a car</a>
        </div>
    </div>
</section>






    @component('front.components.client-section', ['posts' => $posts])
    @endcomponent
    <!-- /Pricing Plan -->
    <!-- /FAQ  -->
    <!-- /About us Testimonials -->
    <!--/Why Choose Us-->
@endsection
