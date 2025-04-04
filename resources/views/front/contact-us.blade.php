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
    <section class="contact-section">
        <div class="container">
            <div class="contact-info-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="0.1">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-phone-call"></i></span>
                            <h3>{{ __("website.phone") }}</h3>
                            <a href="tel:{{ config('dehbi.primary_phone') }}">{{ config('dehbi.primary_phone') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="0.2">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-mail"></i></span>
                            <h3>{{ __("website.email") }}</h3>
                            <a href="mailto:{{ config('dehbi.primary_emails') }}">{{ config('dehbi.primary_emails') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="0.3">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-map-pin"></i></span>
                            <h3>{{ __("website.address") }}</h3>
                            <a href="javascript:void(0);">{{ config('dehbi.address') }}</a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200"
                        data-aos-delay="0.4">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-clock"></i></span>
                            <h3>Opening Hours</h3>
                            <a href="javascript:void(0);">Mon - Sat (10.00AM - 05.30PM)</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="form-info-area" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.5">
                <div class="row d-flex align-items-center justify-content-center">
                    {{-- <div class="col-lg-6 d-flex">
                        <img src="{{ URL::asset('/build/img/contact-info.jpg') }}" class="img-fluid" alt="Contact">
                    </div> --}}
                    <div class="col-lg-8">
                        <form action="{{ route('send_contact') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <h1>{{ __("website.contact_us") }}</h1>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>{{ __("website.full_name") }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name='name' required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>{{ __("website.subject") }}<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name='subject' required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>{{ __("website.email") }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name='email' required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>{{ __("website.message") }} <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4" cols="50" placeholder="" required name='message'> </textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn contact-btn">{{ __("website.submit") }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact us -->
@endsection
