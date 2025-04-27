<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('/assets_v2/img/brand-bg.png')">
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
                            Faqs
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Faqs</h1>
                </div>
            </div>
        </div>
        <section class="faq-section-2 fix section-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="faq-sidebar">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <h3>
                                Still have Questions? <br>
                                Call Now!
                            </h3>
                            <div class="icon-items">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Call Anytime</p>
                                    <h6><a href="tel:+212 524 448 489">+212 524 448 489</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="faq-content">
                            <div class="section-title">
                                <img src="{{asset('assets_v2/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">{{ __('website.faq_title') }}</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    {{ __('website.faq_description') }}
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    @forelse (__("website.faqs") as $key => $faq)
                                        <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_{{ $key }}" aria-expanded="false" aria-controls="faq_{{ $key }}">
                                                    {{ $faq['question'] ?? '' }}
                                                </button>
                                            </h5>
                                            <div id="faq_{{ $key }}" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{ $faq['answer'] ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>






@endsection
