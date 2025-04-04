<?php $page = 'index'; ?>
@extends('front.layout.mainlayout')
@section('content')
    <div class="blogbanner" style="background-image: url('{{ URL::asset($post->image) }}');">
        <div class="blogbanner-content">
            {{-- <span class="blog-hint">Health</span> --}}
            <h1>{{ Helpers::getAttributeFromTranslate('title', 2, Helpers::getDefaultLanguage('id'), $post) }}</h1>
            <ul class="entry-meta meta-item justify-content-center">
                <li>
                    {{-- <div class="post-author">
                    <div class="post-author-img">
                        <img src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}" alt="author">
                    </div>
                    <a href="javascript:void(0)"><span> John Doe </span></a>
                </div> --}}
                </li>
                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> June 6, 2023</li>
            </ul>
        </div>
    </div>
    <div class="blog-section">
        <div class="container">
            <div class="blog-description">
                {!! Helpers::getAttributeFromTranslate('content', 2, Helpers::getDefaultLanguage('id'), $post) !!}
            </div>
        </div>
    </div>
    <!-- /Blog Grid-->
@endsection
