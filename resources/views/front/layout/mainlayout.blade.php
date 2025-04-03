<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/front/build/img/favicon.png') }}">
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
@if (!Route::is(['forgot-password', 'login', 'register', 'reset-password', 'index-3', 'listing-grid', 'listing-list','listing-map']))
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
</div>
@component('front.components.scrolltotop')
@endcomponent
@include('front/layout.partials.footer-scripts')
@component('front/components.modalpopup')
@endcomponent
</body>

</html>
