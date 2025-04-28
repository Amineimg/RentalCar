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
                            {{ __('menu.general_condition') }}
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s"> {{ __('website.terms_title') }}</h1>
                </div>
            </div>
        </div>
        <section class="faq-section-2 fix section-padding bg-light py-5" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h4 class="mb-4"> {{ __('website.terms_title') }}</h4>
                                <p>
                                    {{ __('website.terms_description') }}
                                </p>
                                @forelse(__('website.terms') as $key => $term)
                                <h5 class="mt-4">{{ $term['title'] ?? '' }}</h5>
                                <p>
                                    {!! nl2br(e($term['description'] ?? '')) !!}
                                </p>
                            @empty
                            @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







@endsection
