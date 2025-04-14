<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="icon" type="image/png" href="{{ asset('front/build/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('front/build/img/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('front/build/img/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/build/img/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('front/build/img/favicon/site.webmanifest') }}" />

    @if(View::hasSection('seo_head'))
        @yield('seo_head')
    @else
        @include('front.layout.partials.default_seo_head')
    @endif

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('front/build/img/DEHBI LUX LOGO-WHITE v2.png') }}"> --}}
    @include('front/layout.partials.head')


</head>
@if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance', 'index-2']))

    <body>
@endif
@if (Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance']))

    <body class="error-page">
@endif
@if (Route::is(['index-2']))

    <body class="home-two">
@endif
@if (
    !Route::is([
        'forgot-password',
        'login',
        'register',
        'reset-password',
        'index-3',
        'listing-grid',
        'listing-list',
        'listing-map',
    ]))
    <div class="main-wrapper">
@endif
@if (Route::is(['forgot-password', 'login', 'register', 'reset-password']))
    <div class="main-wrapper login-body">
@endif
@if (Route::is(['index-3']))
    <div class="main-wrapper home-three">
@endif
@if (Route::is(['listing-grid', 'listing-list']))
    <div class="main-wrapper listing-page">
@endif
@if (Route::is(['listing-map']))
    <div class="main-wrapper listing-page map-page">
@endif
{{-- @if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance'])) --}}
@include('front/layout.partials.header')
{{-- @endif --}}
@include('front.components.alett')
@yield('content')
{{-- @if (!Route::is(['coming-soon', 'error-404', 'error-500', 'maintenance'])) --}}
@include('front/layout.partials.footer')
{{-- @endif --}}
@include('front/layout.partials.bottom-bar')

{{-- @endif --}}
{{-- @endcomponent --}}
@include('front/layout.partials.footer-scripts')
@component('front/components.modalpopup')
@endcomponent
<div class="tr-widget" data-id="{{ Config::get('app.trust_review_secret') }}" data-view="flash" data-lang=""><a
        href="https://trust.reviews/" class="trcr" target="_blank">Powered by <span>Trust.Reviews</span></a></div>
<script type="text/javascript" src="https://cdn.trust.reviews/widget/embed.min.js" defer></script>
</body>

</html>
