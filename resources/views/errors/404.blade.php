<?php $page = 'error-404'; ?>
@extends('front.layout.mainlayout')
@section('content')
    <div class="error-box">
        <img src="{{ URL::asset('/front/build/img/404.png') }}" class="img-fluid" alt="Page not found">
        <h3>Oops! Page not found!</h3>
        <p>The page you requested was not found.</p>
        <div class="back-button">
            <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
@endsection
