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
                            conditions generales
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">conditions generale</h1>
                </div>
            </div>
        </div>
        <section class="faq-section-2 fix section-padding bg-light py-5" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h4 class="mb-4">Terms and Conditions</h4>
                                <p>
                                    Majdoline Travel and its entire team welcome you to Morocco. We are a Marrakech car rental agency offering vehicles and 4x4s (with or without driver), based in Marrakech. Our diversified fleet allows for a wide choice tailored to your needs for a cheap, simple, and efficient car rental service.
                                </p>

                                <h5 class="mt-4">Guarantee & Payment</h5>
                                <p>
                                    A credit card guarantee or cash deposit is mandatory: 500 Euros for standard vehicles and 3000 Euros for 4x4s. The guarantee/deposit is returned upon return of the car.<br>
                                    The total rental amount is payable on the day of delivery and is non-refundable.
                                </p>

                                <h5 class="mt-4">Important Reminders</h5>
                                <p>
                                    Only 4x4 vehicles are allowed on off-road tracks. Any damage from misuse will be invoiced.<br>
                                    Standard vehicles are insured for 5 people, 4x4s for 7 people. Exceeding this limit is your responsibility.<br>
                                    Return the vehicle with the same fuel level. Excess fuel is non-refundable.
                                </p>

                                <h5 class="mt-4">Responsibility</h5>
                                <p>
                                    In case of accident or breakdown, you are responsible until a Majdoline Travel agent arrives.<br>
                                    Damage to interior (burns, tears, stains) or bodywork (if at your fault) is your responsibility.<br>
                                    We are not responsible for lost or damaged items inside the vehicle, nor for tire damage.
                                </p>

                                <h5 class="mt-4">Car Radio</h5>
                                <p>
                                    For vehicles with car radios, please remove the front panel when parking. In case of theft or damage, charges will apply.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







@endsection
