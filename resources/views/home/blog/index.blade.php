@extends('layouts.home_layout', ['static_data', $static_data])
@section('title')
    <title>{{ $static_data['strings']['title_blog'] }}</title>
    <meta charset="UTF-8">
    <meta name="title" content="{{ $static_data['strings']['title_blog'] }}">
    <meta name="description" content="{{ $static_data['strings']['desc_blog'] }}">
    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">
    <meta name="author" content="{{ $static_data['strings']['site_name'] }}">
    <meta car="og:title" content="{{$static_data['strings']['blog']}} - {{ $static_data['strings']['site_name'] }}" />
    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />
@endsection
@section('bg')
    {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
@endsection
@section('content')
    <div class="row  marginalized">
        <div class="col-sm-12">
            <h1 class="section-title-dark">{{$static_data['strings']['blog']}}</h1>
            <div class="row">
            @if($posts->count())
                @foreach($posts as $post)
                    <div class="box col-md-4 col-sm-12">
                        {{-- <div class="item box-shadow">
                            <div class="main-image bg-overlay">
                                <img class="responsive-img" src="{{ url('/').$post->image }}"/>
                            </div>
                            <div class="data">
                                <a href="{{route('single-post', $post->alias)}}"><h3 class="item-title primary-color">{{$post->contentload->title}}</h3></a>
                                <div class="item-category">{!! Str::limit(strip_tags($post->contentload->content), 120)  !!}</div>
                                @if($post->user)<div class="small-text">{{$static_data['strings']['posted_by']}} : {{$post->user->username}} | {{$post->created_at}}</div>@endif
                            </div>
                        </div> --}}
                        <div class="opt-fl-text-title">
                            <a href="{{route('single-post', $post->alias)}}"><img class="responsive-img" style="width: 100%;" src="{{ url('/').$post->image }}" alt="{{$post->contentload->title}}"></a>
                            <h3 class="title"><a href="{{route('single-post', $post->alias)}}">{{$post->contentload->title}}</a></h3>
                            <div class="opt-fl-text">
                                <p>{!! Str::limit(strip_tags($post->contentload->content), 120)  !!}</p>
                                @if($post->user)<div class="small-text">{{$static_data['strings']['posted_by']}} : {{$post->user->username}} | {{$post->created_at}}</div>@endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$posts->links()}}
                @else
                    <div class="col-sm-12"><strong class="center-align">{{$static_data['strings']['no_results']}}</strong></div>
                @endif
            </div>
        </div>
    </div>
@endsection