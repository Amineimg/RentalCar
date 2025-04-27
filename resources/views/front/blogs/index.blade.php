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
                    blog
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">blog</h1>
        </div>
    </div>
</div>
<section class="news-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            @forelse ($posts as $post)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="{{ URL::asset($post->image) }}" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('d') }} <br>
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('M') }}
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                {{-- <img src="{{ asset('assets/img/news/client.png') }}" alt="img"> --}}
                            </div>
                            <div class="news-cont">
                                <span>by {{ $post->author_name ?? 'Admin' }}</span>
                                <h3>
                                    <a href="{{ route('single-post', ['alias' => $post->alias]) }}">
                                        {{ Helpers::getAttributeFromTranslate('title', 2, Helpers::getDefaultLanguage('id'), $post) }}
                                    </a>
                                </h3>
                                <p>
                                    {!! Str::limit(
                                        Helpers::getAttributeFromTranslate('content', 2, Helpers::getDefaultLanguage('id'), $post),
                                        150,
                                        '...',
                                    ) !!}
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    {{ $post->comments_count ?? 2 }} Comments
                                </li>
                                <li>
                                    <a href="{{ route('single-post', ['alias' => $post->alias]) }}">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        {{ __('website.read_more') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">{{ __('No posts available.') }}</p>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</section>

@endsection
