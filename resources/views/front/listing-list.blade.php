<?php $page = 'listing-list'; ?>
@extends('front.layout.mainlayout')
@section('content')
<div class="main-wrapper listing-page">
    @component('front.components.breadcrumb')
        @slot('title')
           {{ __("menu.parking")}}
        @endslot
        @slot('li_1')
            {{ __("menu.parking")}}

        @endslot
        @slot('li_1_url')
            {{ route('search_home')}}

        @endslot

    @endcomponent
    <!-- Search -->
   @component('front.components.search_v1',["locations"=>$locations ?? []])

   @endcomponent
    <!-- /Search -->

    <!-- Sort By -->
    {{-- <div class="sort-section">
        <div class="container">
            <div class="sortby-sec">
                <div class="sorting-div">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                            <div class="count-search">
                                <p>Showing 1-9 of 154 Cars</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                            <div class="product-filter-group">
                                <div class="sortbyset">
                                    <ul>
                                        <li>
                                            <span class="sortbytitle">Show : </span>
                                            <div class="sorting-select select-one">
                                                <select class="form-control select">
                                                    <option>5</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="sortbytitle">Sort By </span>
                                            <div class="sorting-select select-two">
                                                <select class="form-control select">
                                                    <option>Newest</option>
                                                    <option>Relevance</option>
                                                    <option>Low to High</option>
                                                    <option>High to Low</option>
                                                    <option>Best Rated</option>
                                                    <option>Distance</option>
                                                    <option>Popularity</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-listview">
                                    <ul>
                                        <li>
                                            <a href="{{ url('listing-grid') }}">
                                                <i class="feather-grid"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('listing-list') }}" class="active">
                                                <i class="feather-list"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('listing-map') }}">
                                                <i class="feather-map-pin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Sort By -->

    <!-- Car Grid View -->
    <section class="section car-listing pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                    <form action="{{ route('search_home') }}" method="POST" autocomplete="off" class="sidebar-form">
                        @csrf
                        <div class="sidebar-heading">
                            <h3>{{ __("website.filter") }}</h3>
                        </div>
                        {{-- <div class="product-search">
                            <div class="form-custom">
                                <input type="text" class="form-control" id="member_search1" placeholder="">
                                <span><img src="{{ URL::asset('/front/build/img/icons/search.svg') }}" alt="img"></span>
                            </div>
                        </div> --}}
                        {{-- <div class="product-availability">
                            <h6>Availability</h6>
                            <div class="status-toggle">
                                <input id="mobile_notifications" class="check" type="checkbox" checked="">
                                <label for="mobile_notifications" class="checktoggle">checkbox</label>
                            </div>
                        </div> --}}
                        <div class="accord-list">
                            <div class="accordion" id="accordionMain1">
                                <div class="card-header-new" id="headingOne">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ __("website.brands") }}
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body-chat">
                                        <div class="row">
                                            {{-- @dd(old('brands')); --}}
                                            <div class="col-md-12">
                                                <div id="checkBoxes1">
                                                    <div class="selectBox-cont">
                                                        {{-- @dd($filterDate); --}}
                                                        @forelse ($brands as $brand)
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="filterData[brands][]" value="{{ $brand->id }}" {{   isset($filterDate["brands"]) && in_array($brand->id,$filterDate["brands"]) ? 'checked': ''  }} >
                                                            <span class="checkmark"></span> {{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$brand) }}
                                                        </label>
                                                        @empty

                                                        @endforelse


                                                        {{-- <!-- View All -->
                                                        <div class="view-content">
                                                            <div class="viewall-One">
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Kia
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Honda
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username">
                                                                    <span class="checkmark"></span> Toyota
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- /View All --> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain2">
                                <div class="card-header-new" id="headingTwo">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            {{ __("website.categories") }}
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes2">
                                            <div class="selectBox-cont">
                                                {{-- @dd($filterDate["brands"]) --}}
                                                @forelse ($categories as $category)
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="filterData[categories][]" value="{{ $category->id }}" {{   isset($filterDate["categories"]) && in_array($category->id,$filterDate["categories"]) ? 'checked': ''  }}>
                                                        <span class="checkmark"></span> {{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$category) }}
                                                    </label>

                                                @empty

                                                @endforelse

                                                {{-- <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Hatchback (123)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Luxury (06)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> SUV (6)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Wagon (5)
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /View All --> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain4">
                                <div class="card-header-new" id="headingfuel">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefuel" aria-expanded="true"
                                            aria-controls="collapsefuel">
                                            {{ __("website.transmission") }}
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsefuel" class="collapse show" aria-labelledby="headingfuel"
                                    data-bs-parent="#accordionExample2">

                                    <div class="card-body-chat">
                                        <div id="checkBoxes3">
                                            <div class="selectBox-cont">
                                                @forelse (Constant::getTransmissions() as $key => $item)
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="filterData[transmission][]" value="{{ $item['value'] }}" {{   isset($filterDate["transmission"]) && in_array($item['value'],$filterDate["transmission"]) ? 'checked': ''  }} >
                                                        <span class="checkmark"></span> {{ $item["name"] }}
                                                    </label>

                                                @empty

                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionMain05">
                                <div class="card-header-new" id="headingtransmiss">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsetransmission" aria-expanded="true"
                                            aria-controls="collapsetransmission">
                                            {{ __("website.fuel_type") }}
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsetransmission" class="collapse show" aria-labelledby="headingtransmiss"
                                    data-bs-parent="#accordionExample2">
                                    {{-- <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                @forelse (Constant::getFuelTypes() as $key => $item)
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" name="furl" id="fuel_{{$key}}"
                                                            value="{{ $item['value'] }}" checked="">
                                                        <label for="fuel_{{$key}}">{{ $item["name"] }}</label>
                                                    </div>
                                                </li>
                                                @empty

                                                @endforelse
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="card-body-chat">
                                        <div id="checkBoxes3">
                                            <div class="selectBox-cont">
                                                @forelse (Constant::getFuelTypes() as $key => $item)
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="filterData[fuel][]" value="{{ $item['value'] }}"{{   isset($filterDate["fuel"]) && in_array($item['value'],$filterDate["fuel"]) ? 'checked': ''  }} >
                                                        <span class="checkmark"></span> {{ $item["name"] }}
                                                    </label>

                                                @empty

                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                            <span><i class="feather-filter me-2"></i></span>{{ __("website.filter") }}
                        </button>
                        {{-- <a href="#" class="reset-filter"></a> --}}
                        <input class="reset-filter form-control" type="reset" value="Reset Filter">

                    </form>
                </div>

                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        @forelse ($cars as $car)
                            <div class="col-xxl-5 col-lg-6 col-md-6 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="{{ url('listing-details') }}">
                                                    <img src="{{ URL::asset('images/data/'.$car->front_image->image ??  '') }}"
                                                        class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            @forelse ($car->images as $image)
                                                <div class="slide-images">
                                                    <a href="{{ url('listing-details') }}">
                                                        <img src="{{ URL::asset('images/data/'.$image->image ?? '') }}"
                                                        class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            @empty

                                            @endforelse
                                        </div>
                                        <div class="fav-item justify-content-end">
                                            <span class="img-count"><i class="feather-image"></i>04</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <span class="featured-text">{{ Helpers::getAttributeFromTranslate("name",Helpers::getDefaultLanguage('id'),1,$car->carmodel->carmake) }}</span>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features d-flex align-items-end justify-content-between">
                                            <div class="list-rating">
                                                {{-- <a href="javascript:void(0)" class="author-img">
                                                    <img src="{{ URL::asset('/front/build/img/profiles/avatar-04.jpg') }}"
                                                        alt="author">
                                                </a> --}}
                                                <h3 class="listing-title">
                                                    <a href="{{url('listing-details')}}">{{ Helpers::getAttributeFromTranslate("name",2,Helpers::getDefaultLanguage('id'),$car) }}</a>
                                                </h3>
                                                {{-- <div class="list-rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>(4.0) 138 Reviews</span>
                                                </div> --}}
                                            </div>
                                            {{-- <div class="list-km">
                                                <span class="km-count"><img
                                                        src="{{ URL::asset('/front/build/img/icons/map-pin.svg') }}"
                                                        alt="author">3.2m</span>
                                            </div> --}}
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="{{ URL::asset('/front/build/img/icons/car-parts-01.svg') }}" alt="Auto"></span>
                                                    <p>{{ $car->transmission=="automatic" ? __("website.transmission_auto") : __("website.transmission_manual")  }}</p>
                                                </li>
                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-03.svg') }}"
                                                            alt="Petrol"></span>
                                                    <p>{{ $car->carburant=="diesel" ? __("website.diesel") : __("website.petrol") }}</>
                                                </p>
                                                </li>

                                                <li>
                                                    <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-06.svg') }}"
                                                            alt="Persons"></span>
                                                    <p>{{ $car->passengers_number.' '.__("website.persons") }} </p>
                                                </li>

                                            </ul>
                                            <ul>
                                                @if ($car->airconditioner ==1)
                                                    <li>
                                                        <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-07.svg') }}"
                                                            alt="Persons"></span>
                                                            <p>{{ __("website.air_condition") }}</p>
                                                    </li>
                                                @endif
                                                <li>
                                                    {{-- <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2022</p> --}}
                                                </li>
                                                <li>
                                                    {{-- <span><img
                                                            src="{{ URL::asset('/front/build/img/icons/car-parts-05.svg') }}"
                                                            alt="2018"></span>
                                                    <p>2022</p> --}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span></span>{{ __("website.from") }}
                                            </div>
                                            <div class="listing-price">
                                                <h6>{{ Helpers::moneyFormatDevise($car->price_per_night) }} <span>/ {{ __("website.day") }}</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            {{-- <form action="{{ route('booking_details') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="car_id" value="{{ $car->id }}">
                                                <button type="submit"  class="btn btn-order">
                                                    <span><i class="feather-calendar me-2"></i></span>{{ __("website.book_now") }}
                                                </button>
                                            </form> --}}
                                            <a href="{{ route('booking_details',['car_alias'=>$car->alias]) }}" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>{{ __("website.book_now") }}</a>
                                        </div>
                                    </div>
                                    @if ($car->featured==1)
                                        <div class="feature-text">
                                            <span class="bg-danger">{{ __("website.featured") }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @empty
                            <div class="col-xxl-4 col-lg-6 col-md-6 col-12">
                                <span>{{ __("website.list_empty") }}</span>
                            </div>
                        @endforelse
                    </div>
                        <!--Pagination-->
                        {{-- <div class="blog-pagination">
                            <nav>
                                <ul class="pagination page-item justify-content-center">
                                    <li class="previtem">
                                        <a class="page-link" href="#"><i
                                                class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
                                    </li>
                                    <li class="justify-content-center pagination-center">
                                        <div class="page-group">
                                            <ul>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="active page-link" href="#">2 <span
                                                            class="visually-hidden">(current)</span></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nextlink">
                                        <a class="page-link" href="#">Next <i
                                                class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                        {{-- <div class="d-flex justify-content-center">
                            {{ $cars->links('pagination::bootstrap-5') }}
                        </div> --}}
                        <!--/Pagination-->

                </div>
            </div>
        </div>
    </section>
    <!-- /Car Grid View -->
</div>
@endsection
