@extends('layouts.home_layout', ['static_data', $static_data])
@section('title')
    <title>{{$static_data['strings']['page'] .' - '. $page->contentload->title}}</title>
    <meta name="title" content="{{$static_data['strings']['page'] .' - '. $page->contentload->title}}">
    <meta name="description" content="{{ strip_tags(str_limit($page->contentload->content, 200)) }}">
    <meta name="keywords" content="{{ $static_data['site_settings']['site_keywords'] }}">
    <meta name="author" content="{{ $static_data['site_settings']['site_name'] }}">
    <meta car="og:title" content="{{ $static_data['strings']['page'] .' - '. $page->contentload->title}}" />
    <meta car="og:image" content="{{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}" />
    <meta car="og:description" content="{{ strip_tags(str_limit($page->contentload->content, 200)) }}">
@endsection
@section('bg')
    {{asset('/assets/images/home/').'/'.$static_data['design_settings']['slider_background']}}
@endsection
@section('content')
    <div class="row marginalized">
        <div class="col-sm-12">
            <h1 class="section-title-dark">{{ $page->contentload->title }}</h1>
            <div class="row">
                <div class="col-sm-12">{!! $page->contentload->content  !!}</div>
            </div>
        </div>
    </div>
@endsection