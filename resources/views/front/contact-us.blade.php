<?php $page = 'contact-us'; ?>
@extends('front.layout.mainlayout')
@section('content')
    @component('front.components.breadcrumb')
            @slot('title')
                {{ __("website.contact_us") }}
            @endslot
            @slot('li_1')
            {{ __("website.contact_us") }}
            @endslot
            @slot('li_2')

            @endslot
    @endcomponent
    <!-- Contact us -->
    <section class="contact-section-1 fix section-padding pb-0">
        <div class="container">
            <div class="contact-wrapper-area">
                <div class="row g-4">
                    <div class="col-lg-9">
                        <div class="contact-content">
                            <div class="section-title">
                                <img src="{{asset('assets_v2/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">contact us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    {{ __("website.contact_us") }}
                                </h2>
                            </div>
                            <form action="{{ route('send_contact') }}" id="contact-form" method="POST" class="contact-form-items mt-5 mt-md-0">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder={{ __("website.full_name") }} required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="email" name="email" id="email2" placeholder={{ __("website.email") }} required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="subject" id="subject" placeholder={{ __("website.subject") }} required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="number" name="phone" id="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder={{ __("website.message") }} required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="theme-btn">
                                            {{ __("website.submit") }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="contact-right-items">

                            <div class="icon-items">
                                <div class="icon">
                                    <img src="{{asset('assets_v2/img/question.png')}}" alt="img">
                                </div>
                                <div class="content">
                                    <p>Have Question?</p>
                                    <h6><a href="tel:+212 524 448 489">+212 524 448 489</a></h6>
                                </div>
                            </div>
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="{{asset('assets_v2/img/email.png')}}" alt="img">
                                </div>
                                <div class="content">
                                    <p>Write Email</p>
                                    <h6><a href="contact@seocom.ma" class="link">contact@seocom.ma</a></h6>
                                </div>
                            </div>
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="{{asset('assets_v2/img/location.png')}}" alt="img">
                                </div>
                                <div class="content">
                                    <p>Visit Office</p>
                                    <h6>
                                        Avenue 11 janvier <br> Marrakech, Maroc

                                    </h6>
                                </div>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact us -->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4298.045230060755!2d-7.998483144573187!3d31.639439441049262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafef6bd2f62c69%3A0x49157de7e7388939!2sSEOCOM%20web%20agency!5e0!3m2!1sfr!2sma!4v1744581653740!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
