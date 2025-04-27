<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')
<div class="breadcrumb-wrapper bg-cover" style="background-image:  url('/assets_v2/img/brand-bg.png')">
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                <li>
                    <a href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    About Us
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">About Us</h1>
        </div>
    </div>
</div>
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper-2">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-image">
                        <img src="{{asset('assets_v2\img\about\header-who-pays.webp')}}" alt="about-image">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <img src="assets_v2/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Trusted & Leading in
                                Car Rent Services
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                        </p>
                        <div class="about-list-wrapper">
                            <div class="about-list-items wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Nsectetur cing elit
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Suspe ndisse suscit sagittis leo
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        If you are going to use pasage
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-arrow-right"></i>
                                        Generators on the to repeatY
                                    </li>
                                </ul>
                                <a href="{{route('about')}}" class="theme-btn">Discover More</a>
                            </div>
                            <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <p>Need help? Talk to an <br> Expert</p>
                                <h6><a href="tel:9288009850">+92 (8800) - 9850</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section fix section-padding">
    <div class="testimonial-bg-shape">
        <img src="assets_v2/img/testimonial/testimonial-bg.jpg" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <img src="assets_v2/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">our testimonials</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    What They’re Talking <br>
                    About Majdoline Travel
                </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit <br> sagitis leo sit.
            </p>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Kevin Martin
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="car-sale-section fix section-padding pt-0">
    <div class="container-fluid">
        <div class="car-sale-wrapper">
            <div class="sale-shape">
                <img src="assets_v2/img/bg-shape-saleoff.png" alt="shape-img">
            </div>
            <div class="badge-shape">
                <img src="assets_v2/img/bagde.png" alt="shape-img">
            </div>
            <div class="car-shape">
                {{-- <img src="assets_v2/img/car.png" alt="img"> --}}
            </div>
            <div class="car-sale-content">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Sale 50% Off</h2>
                <h3 class="wow fadeInUp" data-wow-delay=".5s">on all rental cars for 1 month</h3>
                <a href="{{route('search_home')}}" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your Car</a>
            </div>
        </div>
    </div>
</section>




@endsection


