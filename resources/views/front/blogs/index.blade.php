<?php $page = 'listing-details'; ?>
@extends('front.layout.mainlayout')
@section('content')
    @component('front.components.breadcrumb')
        @slot('title')
            {{ __('website.blogs_list') }}
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
        @endslot
    @endcomponent
    <div class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @forelse ($posts as $post)
                            <div class="col-lg-4 col-md-4 d-lg-flex">
                                <div class="blog grid-blog">
                                    <div class="blog-image">
                                        <a href="{{ route('single-post',['alias'=>$post->alias]) }}"><img class="img-fluid"
                                                src="{{ URL::asset($post->image) }}" alt="Post Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        {{-- <p class="blog-category">
                                            <a href="javascript:void(0)"><span>Car Showcase</span></a>
                                        </p> --}}
                                        <h3 class="blog-title"><a
                                                href="{{ route('single-post',['alias'=>$post->alias]) }}">{{ Helpers::getAttributeFromTranslate('title', 2, Helpers::getDefaultLanguage('id'), $post) }}
                                            </a></h3>
                                        <p class="blog-description">{!! Str::limit(
                                            Helpers::getAttributeFromTranslate('content', 2, Helpers::getDefaultLanguage('id'), $post),
                                            150,
                                            '...',
                                        ) !!}</p>
                                        <ul class="meta-item">
                                            <li>
                                                <div class="post-author">
                                                    <div class="post-author-img">
                                                        <img src="{{ URL::asset('/front/build/img/profiles/avatar-13.jpg') }}"
                                                            alt="author">
                                                    </div>
                                                    {{-- <a href="javascript:void(0)"> <span> Alphonsa Daniel </span></a> --}}
                                                </div>
                                            </li>
                                            <li class="date-icon"><i class="fa-solid fa-calendar-days"></i>
                                                <span>{{ isset($post->created_at) ? Carbon::parse($post->created_at)->format('M j, Y') : '' }}</span>
                                            </li>
                                        </ul>
                                        <a href="{{  route('single-post',['alias'=>$post->alias]) }}"
                                            class="viewlink btn btn-primary">{{ __('website.read_more') }} <i
                                                class="feather-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    {{-- Pagination Links --}}
                    <div class="d-flex justify-content-center mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
