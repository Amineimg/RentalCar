<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets_v2/img/bg-header-banner.jpg') }}');">
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
                    Gallery
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Gallery</h1>
        </div>
    </div>
</div>
<div class="gallery-section-3 fix section-padding">
    <div class="container">
        <div class="galley-wrapper-2">
            <div class="gallery-items">
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-14.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-14.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-15.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-15.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-16.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-16.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-two">
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-17.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-17.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-18.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-18.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-three">
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-19.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-19.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="{{asset('assets_v2/img/gallery/g-20.jpg')}}" alt="ga-img">
                    <div class="icon-box">
                        <a href="{{asset('assets_v2/img/gallery/g-20.jpg')}}" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
        </div>
    </div>
</div>

















@endsection
