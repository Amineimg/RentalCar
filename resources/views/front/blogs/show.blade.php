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
                    blog details
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">blog details</h1>
        </div>
    </div>
</div>

    <!-- /Blog Grid-->
    <section class="news-details-section fix section-padding">
        <div class="container">
            <div class="news-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="news-details-items">
                            <div class="news-image">
                                <img src="{{ URL::asset($post->image) }}" alt="news-img">
                            </div>
                            <div class="news-details-content">
                                <ul class="list-admin">
                                    <li>
                                        <i class="fa-solid fa-circle-user"></i>
                                        by {{ $post->author_name ?? 'Admin' }}
                                    </li>
                                    <li>
                                        /
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-comments"></i>
                                        {{ $post->comments_count ?? 2 }} Comments
                                    </li>
                                </ul>
                                <h3>The best fastest and most powerful road car</h3>
                                <p class="mt-3">

                                    {!! Helpers::getAttributeFromTranslate('content', 2, Helpers::getDefaultLanguage('id'), $post) !!}
                                </p>

                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="main-sidebar">
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ URL::asset($post->image) }}" alt="img" width="73px" height="76px">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ URL::asset($post->image) }}" alt="img" width="73px" height="76px">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="{{ URL::asset($post->image) }}" alt="img" width="73px" height="76px">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-comments"></i>
                                                    2 Comments
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Hassle-free Rental
                                                    Experience
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="#">Rental <i class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="#">Luxury Cars <i class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li class="active"><a href="news-details.html">Dream Cars <i class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="#">Dream Cars <i class="fa-solid fa-arrow-right-long"></i></a></li>
                                        <li><a href="#">Off Road <i class="fa-solid fa-arrow-right-long"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="#">Off Road</a>
                                        <a href="#">Luxury</a>
                                        <a href="#">Cars</a>
                                        <a href="#">Rentals</a>
                                        <a href="#">Engine</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
