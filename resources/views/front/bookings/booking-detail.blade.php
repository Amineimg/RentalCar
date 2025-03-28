<?php $page = 'booking-detail'; ?>
@extends('front.layout.mainlayout')
@section('content')
    @component('front.components.breadcrumb')
        @slot('title')
            Checkout
        @endslot

        @slot('li_1')
            Checkout
        @endslot
        @slot('li_2')
            Checkout
        @endslot
    @endcomponent

    <div class="booking-new-module">
        <div class="container">

            <div class="booking-detail-info">
                <div class="row">
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="booking-sidebar">

                            <div class="booking-sidebar-card">
                                <div class="booking-sidebar-head">
                                    <h5>Car Details</h5>
                                </div>
                                <div class="booking-sidebar-body">
                                    <div class="booking-car-detail">
                                        <span class="car-img">
                                            <img src="{{ URL::asset('images/data/'.$car->front_image->image ??  '') }}" class="img-fluid"
                                                alt="Car">
                                        </span>
                                        <div class="care-more-info">
                                            <h5>{{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }}</h5>
                                            <p>{{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$car->carmodel->carmake) }}</p>
                                            <a href="{{ url('listing-details') }}">View Car Details</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="booking-sidebar-head d-flex justify-content-between align-items-center">
                                    <h5>Location & Time</h5>
                                    <a href="{{ url('booking-checkout') }}" class="d-flex align-items-center"><i
                                            class="bx bx-edit-alt me-2"></i>Edit</a>
                                </div>
                                <div class="booking-sidebar-body">
                                    <ul class="location-address-info">
                                        <li>
                                            @php
                                                $pickup_location_city =  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$pickup_location)
                                            @endphp
                                            <h6>{{ __("website.departure")}} : {{ Carbon::parse($start_date)->format("Y-m-d H:i") }}</h6>

                                            <p>{{ $pickup_location_city }} ( {{ __("website.convoyage").' : '.$pickup_location_city}} {{ Helpers::moneyFormatDevise($pickup_location->tarif)}} )</p>
                                            <p></p>
                                        </li>
                                        <li>
                                            @php
                                                $dropoff_location_city =  Helpers::getAttributeFromTranslate("location",Helpers::getDefaultLanguage('id'),1,$dropoff_location)
                                            @endphp
                                            <h6>{{ __("website.return")}} : {{ Carbon::parse($end_date)->format("Y-m-d H:i") }}</h6>

                                            <p>{{ $dropoff_location_city }} ( {{ __("website.convoyage").' : '.$dropoff_location_city}} {{ Helpers::moneyFormatDevise($dropoff_location->tarif)}} )</p>
                                            <p></p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="total-rate-card">
                                <div class="vehicle-total-price">
                                    <h5 >Estimated Total</h5>
                                    <span class="total"></span>
                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="booking-information-main booking-sidebar">
                            <form action="{{ route('book_car') }}" method="post">
                                @csrf
                                <div class="booking-sidebar-card">
                                    <div class="booking-sidebar-head d-flex justify-content-between align-items-center">
                                        <h5>Add-ons</h5>
                                        <a href="{{ url('booking-adon') }}" class="d-flex align-items-center"><i
                                                class="bx bx-edit-alt me-2"></i>Edit</a>
                                    </div>
                                    <div class="booking-sidebar-body">
                                        <div class="booking-vehicle-rates">
                                            <ul class="mt-0">
                                                {{-- @dd(Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$services[0])); --}}
                                              @forelse ($services as $service)
                                                <li>
                                                    <div>
                                                        @php
                                                            $service_name= Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$service)
                                                        @endphp
                                                        <h6>{{ $service_name }}</h6>
                                                    </div>
                                                    <span>{{ Helpers::moneyFormatDevise($service->price) }}</span>
                                                    <div>
                                                        <select class=" form-control select service_select" name="services[{{ $service->id }}]" id="">
                                                           @for ($i = 0; $i < $service->max_number; $i++)
                                                                <option data-price='{{ $service->price }}' data-name='{{ $service_name }}' value="{{ $i }}">{{ $i }}</option>
                                                           @endfor
                                                        </select>
                                                    </div>
                                                </li>
                                              @empty

                                              @endforelse
                                                <li class="total-rate">
                                                    <h6>Total</h6>
                                                    <h5 class="total-service"></h5>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <div class="book-our-drivers">
                                            <h4 class="title-head">Driver</h4>
                                            <ul class="acting-driver-list">
                                                <li class="d-block">
                                                    <div class="driver-profile-info">
                                                        <span class="driver-profile"><img
                                                                src="{{ URL::asset('/front/build/img/drivers/driver-02.jpg') }}"
                                                                alt="Img"></span>
                                                        <div class="driver-name">
                                                            <h5>Ruban</h5>
                                                            <ul>
                                                                <li>No of Rides Completed : 32</li>
                                                                <li>Age : 36</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="change-driver">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-secondary d-inline-flex align-items-center"><i
                                                                class="bx bx-check-circle me-2"></i>Change Driver</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Billing Info</h5>
                                        </div>
                                        {{-- <div class="d-flex align-items-center">
                                            <h6>Returning customer?</h6>
                                            <a href="javascript:void(0);" class="btn btn-secondary ms-3"
                                                data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i
                                                    class="bx bx-user me-2"></i>Sign In</a>
                                        </div> --}}

                                    </div>
                                    <div class="booking-info-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">First Name <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Last Name <span class="text-danger">
                                                            *</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Last Name" name="last_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Email Address <span class="text-danger">
                                                            *</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter Email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Phone Number <span class="text-danger">
                                                            *</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Phone Number" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Vole Number <span
                                                            class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Vole Number" name="flight_number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Choisissez le mode de paiement<span
                                                            class="text-danger"> *</span></label>
                                                    <select class=" form-control select payment_method" name="payment_method" id="">
                                                        @forelse (Constant::getPaymentTypes() as $item)
                                                            <option value="{{ $item["value"] }}">{{ $item["name"] }}</option>
                                                        @empty

                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Additional Information</label>
                                                    <textarea class="form-control" placeholder="Enter Additional Information" rows="5" name="description"></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="car_id" value="{{ isset($car) ? $car->id : null }}">

                                            <div class="col-md-12">
                                                <table class="table resume">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Location {{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }} pour {{ $nombreDeJours }} Jours</td>
                                                            <td scope="row">{{ Helpers::moneyFormatDevise($price) }}</td>
                                                        </tr>
                                                        @if ($pickup_location->tarif>0)
                                                        <tr>
                                                            <td>{{ __("website.convoyage").' : '.$pickup_location_city}} ( Départ )</td>
                                                            <td>{{ Helpers::moneyFormatDevise($pickup_location->tarif) }}</td>

                                                        </tr>
                                                        @endif
                                                        @if ($dropoff_location->tarif>0)
                                                            <tr>
                                                                <td>{{ __("website.convoyage").' : '.$dropoff_location_city}} ( Retour )</td>
                                                                <td>{{ Helpers::moneyFormatDevise($dropoff_location->tarif) }}</td>
                                                            </tr>
                                                        @endif

                                                        <tr class="services">

                                                        </tr>
                                                        <tr class="bank_fees">

                                                        </tr>
                                                        <tr class="booking_total">
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="input-block m-0">
                                                    <label class="custom_check d-inline-flex location-check m-0"><span>I have Read and Accept Terms & Conditions</span> <span class="text-danger"> *</span>
                                                        <input type="checkbox" name="remeber" name="general_condition">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    {{-- <a href="{{ url('booking-adon') }}" class="btn btn-secondary">Back to Add-ons</a> --}}
                                    <button class="btn btn-primary continue-book-btn" type="submit">Confirm & Pay
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @component('front.components.scrolltotop')
    @endcomponent
@endsection
@section('scripts')
<script>
    $(document).ready(function() {

        var days = "{{ $nombreDeJours }}";
        var pickup_location = @json($pickup_location);
        var dropoff_location = @json($dropoff_location);
        var totalAllServices=0;
        var priceOfDays = @json($price);;
        console.log(priceOfDays)
        const  calculateServicesPrice= ()=> {
            if($('.service_select').length>0){
                $('.resume tbody .services').remove()
                var resume=''
                $('.service_select').each(function(){
                    var  totalService = 0;
                    totalAllServices = 0;
                    var quantity = $(this).val();
                    if(quantity>0){
                        resume +='<tr class="services">'
                        var selectedOption = $(this).find(":selected"); // Get selected option
                        var name = selectedOption.data('name');
                        var price = selectedOption.data('price');
                        totalService = price * quantity;
                        var money = formatMoney(totalService);

                        resume+=`<td>${name} X ${quantity}  </td> <td> ${money} </td>`
                        resume+='<tr>'
                        }
                        totalAllServices+= totalService;
                    console.log(totalAllServices)
                    //  console.log("{{  Helpers::moneyFormatDevise(150) }}")
                    var money = formatMoney(totalAllServices);
                    $('.total-service').text(`${money}`)

                });
                $('.resume tbody').append(resume)
            }
            calculateTotal();

        }


        const calculateTotal = async()=>{
            var total = 0;
            pickup_tarif = pickup_location.tarif;
            dropoff_tarif = dropoff_location.tarif;
            total = priceOfDays + pickup_tarif + dropoff_tarif + totalAllServices;
            var html = ""
            if($('.payment_method').val() == "{{ Constant::BANK_PAYMENT }}"){
                total = total + ( total *0.03)
            }

            var money = formatMoney(total);

            $(".resume .booking_total").remove();
            var text = ` <tr class='booking_total'><td> <strong> Total de la réservation </strong>  </td> <td> <span class="">${money}</span> </td> </tr>`;
                $('.resume tbody').append(text)


            $('.total').text(formatMoney(total));

        }
        calculateTotal();
        $(document).on("change",'.payment_method',function(){
            calculateTotal();
        })
        $(document).on("change",'.service_select',function(){
            calculateServicesPrice();
        })


    })
</script>

@endsection
