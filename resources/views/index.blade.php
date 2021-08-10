@extends('common.master')
@section('content')
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">   -->

<div class="banner position-relative">
    <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('public/images/book-holiday.jpg') }}" alt="flight discount" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('public/images/flight-discount2.jpg') }}" alt="flight discount" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('public/images/flight-discount1.jpg') }}" alt="flight discount" class="img-fluid">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
    </div>

<div class="container r-container">
    <div class="cld__book__form booking-form">
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#flight"><i class="las la-plane"></i> Flight</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#hotel"><i class="las la-hotel"></i> Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#fligh-and-hotel"><i class="las la-umbrella-beach"></i> Flights & Hotels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#visa"><i class="las la-file-contract"></i> Visa</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="flight" class="tab-pane active">
                <form method="post" action="{{route('flights')}}">
                    @csrf
                    <div class="form-group">
                        <ul class="cld__selectors">
                            <li><a href="javascript:void(0)" class="active" id="one_way">One way</a></li>
                            <li><a href="javascript:void(0)" id="round_trip">Round trip</a></li>
                            <li><a href="{{route('multicityindex')}}">Multi city</a></li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="direct_flight" name="direct_flight"  value="DF">
                            <label class="custom-control-label text-dark" for="direct_flight">Direct flights only</label>
                          </div>
                        <div class="custom-control custom-checkbox custom-control-inline" id="flexiDiv">
                            <input type="checkbox" class="custom-control-input" id="flexi" name="flexi"  value="F">
                            <label class="custom-control-label text-dark" for="flexi">
                                Flexi (+/- 3 days)</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" name="addFrom" id="addFrom"  placeholder="(IXC) | Chandigarh Airport" class="form-control search_input" >
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="addTo" id="addTo"  placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input" >
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Departure Date</label>
                                <div id="departure_date_datetimepicker" class="input-group departure_date_datetimepickerclass">
                                    <input type="text" name="departure_date" id="departure_date" value="<?php echo date('d-m-Y')?>" placeholder="dd-mm-yyyy" class="form-control border-right-0 departure_date_datetimepickerclass" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on departure_date_datetimepickerclass">
                                      <span class="input-group-text bg-white pl-0 departure_date_datetimepickerclass"><i class="lar la-calendar-alt departure_date_datetimepickerclass"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" id="returnDateDiv" returnDateDiv-data="0">
                            <div class="form-group">
                                <label>Returning Date</label>
                                <div id="returning_date_datetimepicker" class="input-group returning_date_datetimepickerclass">
                                    <input type="text" name="returning_date" id="returning_date" placeholder="dd-mm-yyyy" class="form-control border-right-0 returning_date_datetimepickerclass" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on returning_date_datetimepickerclass">
                                      <span class="input-group-text bg-white pl-0 returning_date_datetimepickerclass"><i class="lar la-calendar-alt returning_date_datetimepickerclass"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Passangers & Class</label>
                        <input type="text" name="" id="flight_travel_details" placeholder="1 Adult,  Economy" class="form-control" onclick="traveller_selection();">
                    
                        <div id="traveller_selection" style="display:none;">
                            <div class="row m-0">
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Adults <small>(12+ yrs)</small></label>
                                        <select name="adults" id="adults" class="custom-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Children <small>(2-15 yrs)</small></label>
                                        <select name="children" id="children" class="custom-select">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Infant <small>(0-23 mths)</small></label>
                                        <select id="infant" name="infant" class="custom-select">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Travel Class</label>
                                        <select name="travel_class" id="travel_class" class="custom-select">
                                            <option value="Economy" selected>Economy</option>
                                            <option value="Business">Business</option>
                                            <option value="First Class">First Class</option>
                                            <option value="Premium Economy">Premium Economy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <input type="button" name="" id="buttonApply" class="btn btn-primary" onclick="traveller_selection();" value="Apply">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="flight_submit" name="" class="btn btn-primary">Search Flight</button>
                    <!-- <a href="flights.php" class="btn btn-primary">Search Flight</a> -->
                </form>
            </div>
            <div id="hotel" class="tab-pane fade mt-3">
                <form method="post" action="">
                    <div class="form-group">
                        <label>Destination</label>
                        <input type="text" name="" placeholder="New Delhi" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Check In</label>
                                <div id="datetimepicker2" class="input-group">
                                    <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                      <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Check Out</label>
                                <div id="datetimepicker3" class="input-group">
                                    <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                      <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Room & Guests</label>
                        <input type="text" name="" placeholder="1 Room, 2 Adult, 1 Child" class="form-control" onclick="hotel_traveller_selection();">
                    
                        <div id="hotel_traveller_selection" style="display:none;">
                            <div class="row m-0">
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Room</label>
                                        <select name="travel-class" class="custom-select">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Adults <small>(18+ yrs)</small></label>
                                        <select name="adults" class="custom-select">
                                            <option selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Child <small>(2-15 yrs)</small></label>
                                        <select name="adults" class="custom-select">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 px-2">
                                    <div class="form-group">
                                        <label>Infant <small>(0-23 mths)</small></label>
                                        <select name="adults" class="custom-select">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Search Hotels</button> -->
                    <a href="hotels.php" class="btn btn-primary">Search Hotels</a>
                </form>
            </div>
            <div id="fligh-and-hotel" class="tab-pane fade mt-3">
                <form method="post" action="">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" name="" placeholder="(IXC) | Chandigarh Airport" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="" placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Departure Date</label>
                                <div id="datetimepicker" class="input-group">
                                    <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                      <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Returning Date</label>
                                <div id="datetimepicker" class="input-group">
                                    <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                      <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Rooms</label>
                        <select name="adults" class="custom-select">
                            <option selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <div class="repeat__row">
                            <div class="row">
                                <div class="col-2 pl-3 pr-0">
                                    <small>Room 1</small>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Adults <small>(18+ yrs)</small></label>
                                        <select name="adults" class="custom-select">
                                            <option selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Children <small>(0-17 yrs)</small></label>
                                        <select name="adults" class="custom-select">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Search Flight & Hotel</button> -->
                    <a href="flight-hotel.php" class="btn btn-primary">Search Flight & Hotel</a>
                </form>
            </div>
            <div id="visa" class="tab-pane fade mt-3">
                <form method="post" action="">
                    <div class="form-group">
                        <label>For Citizens of</label>
                        <input type="text" name="" placeholder="Ex. United kingdom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Traveling To</label>
                        <input type="text" name="" placeholder="Which country?" class="form-control">
                    </div>
                    <a href="visa-requirements.php" class="btn btn-primary">Check Requirements</a>
                    <!-- <button type="submit" class="btn btn-primary">Check Requirements</button> -->
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="middle bg-white">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1 class="font-weight-light h1 mb-1">Top <span class="font-weight-bold">holiday destination</span></h1>
                <p>Find our lowest price to destinations worldwide guaranteed.</p>
            </div>
            <div class="col-md-12 mt-2">
                <div id="cld__holiday__destination__banner" class="owl-carousel owl-theme owl__control__top">
                    <div class="item">
                        <a href="#">
                            <div class="destination__wrapper" style="background:url('traveltest/../public/images/QrOnUx.jpg') no-repeat;background-size:cover;">
                                <figcaption>
                                    <h3>Cuba</h3>
                                    <span>Special offers from <span class="text-warning"><i class="las la-rupee-sign"></i>620</span></span>
                                </figcaption>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="destination__wrapper" style="background:url('traveltest/../public/images/SaintLucia.jpg') no-repeat;background-size:cover;">
                                <figcaption>
                                    <h3>Saint Lucia</h3>
                                    <span>Special offers from <span class="text-warning"><i class="las la-rupee-sign"></i>710</span></span>
                                </figcaption>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="destination__wrapper" style="background:url('traveltest/../public/images/aerial-view-of-fairmont.jpg') no-repeat;background-size:cover;">
                                <figcaption>
                                    <h3>Maldives</h3>
                                    <span>Special offers from <span class="text-warning"><i class="las la-rupee-sign"></i>948</span></span>
                                </figcaption>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="destination__wrapper" style="background:url('traveltest/../public/images/parcarou1_720x500.jpg') no-repeat;background-size:cover;">
                                <figcaption>
                                    <h3>Paris</h3>
                                    <span>Special offers from <span class="text-warning"><i class="las la-rupee-sign"></i>1020</span></span>
                                </figcaption>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="destination__wrapper" style="background:url('traveltest/../public/images/australia-sydney-opera-house.jpg') no-repeat;background-size:cover;">
                                <figcaption>
                                    <h3>Australia</h3>
                                    <span>Special offers from <span class="text-warning"><i class="las la-rupee-sign"></i>620</span></span>
                                </figcaption>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary py-4 my-5">
        <div class="container">
            <div class="row cld__bes__wrap">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-light h1 mb-4 text-white">Why choose <span class="font-weight-bold">Cloud Travels</span></h2>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="media align-items-center">
                            <div class="media-left mr-3"><img src="{{ asset('public/images/best-price.png') }}" alt="best price" class="img-fluid"/></div>
                            <div class="media-body">
                                <h5>Best price guarantee</h5>
                                <p>Find our lowest price to destinations worldwide guaranteed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="media align-items-center">
                            <div class="media-left mr-3"><img src="{{ asset('public/images/easy-booking.png') }}" alt="easy booking"/></div>
                            <div class="media-body">
                                <h5>Easy booking</h5>
                                <p>Search, select and save - the fastest way to book your trip.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="media align-items-center">
                            <div class="media-left mr-3"><img src="{{ asset('public/images/support.png') }}" alt="support"/></div>
                            <div class="media-body">
                                <h5>24/7 Customer support</h5>
                                <p>Receive free support from our friendly and reliable team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    <div class="container mb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-light h1 mb-1">Holidays to <span class="font-weight-bold">inspire you…</span></h2>
                    <p>Discover a different world…</p>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="destination__wrapper short rounded-0" style="background:url('traveltest/../public/images/family2-1.jpg') no-repeat;background-size:cover;">
                    <figcaption>
        <h4 class="text-uppercase font-weight-600">Family Holidays</h4>
    <span class="d-block mb-2">Theme parks, water sports and kids clubs…keeping the whole family happy</span>
        <a href="#" class="font-weight-bold">More details <i class="las la-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-md-4 mb-3 pl-md-0">
                    <div class="destination__wrapper short small_box rounded-0" style="background:url('traveltest/../public/images/c1aa5740.jpg') no-repeat;background-size:cover;">
                        <figcaption>
                            <h4 class="text-uppercase font-weight-600">Luxury Holidays</h4>
                            <span class="d-block mb-2">From the richest city in the world to holiday destinations</span>
                            <a href="#" class="font-weight-bold">More details <i class="las la-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0 pr-md-0">
                    <div class="destination__wrapper short small_box rounded-0" style="background:url('traveltest/../public/images/Hero-Cruise-ship.jpg') no-repeat;background-size:cover;">
                        <figcaption>
                            <h4 class="text-uppercase font-weight-600">Cruises</h4>
                            <span class="d-block mb-2">Incredible Cruise Deals</span>
                            <a href="#" class="font-weight-bold">More details <i class="las la-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="destination__wrapper short rounded-0" style="background:url('traveltest/../public/images/Honeymoon-destination.jpg') no-repeat;background-size:cover;">
                        <figcaption>
                            <h4 class="text-uppercase font-weight-600">Honeymoon Holidays</h4>
                            <span class="d-block mb-2">Beach escapes, luxury resorts and unforgettable island paradises</span>
                            <a href="#" class="font-weight-bold">More details <i class="las la-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                </div>
            </div>
    </div>

    <div class="bg-primary py-4 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="font-weight-light h1 mb-1 text-white">Best <span class="font-weight-bold">offers for you!</span></h3>
                    <p class="text-white">Discover a different world…</p>
                </div>
                <div class="col-md-12 mt-2">
                    <div id="cld__home__discount__banner" class="owl-carousel owl-theme cld__home__discount__banner owl__control__top">
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount1.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount2.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount3.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount4.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount1.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount2.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount3.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount4.jpg') }}" alt="discount1" class="img-fluid"/></a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <a href="#"><img src="{{ asset('public/images/Landing-page-banner-mobile.jpg') }}" alt="" class="img-fluid"/></a>
            </div>
            <div class="col-md-6">
                <a href="#"><img src="{{ asset('public/images/SME_Desktop-Landingpage-mobile-banner.jpg') }}" alt="" class="img-fluid"/></a>
            </div>
        </div>
    </div>

</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" />
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->
<script type="text/javascript">
    $( document ).ready(function() {
        $('#loading').hide();
        $('#loading_small').hide();
        $('#flexiDiv').hide();
        $('#returnDateDiv').hide();
        
        var path = "{{ route('searchairport') }}";

        // Set the Options for "Bloodhound" suggestion engine
        var engine = new Bloodhound({
            remote: {
                // url: '/find?q=%QUERY%',
                url: path+'?q=%QUERY%',
                wildcard: '%QUERY%'
            },
            datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });


        $(".search_input").typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                source: engine.ttAdapter(),
                // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                name: 'airportList',
                // the key from the array we want to display (name,id,email,etc...)
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function (data) {
                        return '<span class="list-group-item">' + data + '</span>'
                    }
                }
        });

        // departure_date_datetimepickerclass
        $('.departure_date_datetimepickerclass').click(function(){
            $('#returning_date').val('');
            $("#returning_date_datetimepicker").datetimepicker("destroy");
            $('#departure_date_datetimepicker').datetimepicker({
                pickTime: false,
                autoclose: true, 
                startDate: new Date(),
                todayHighlight: true,
                // minDate: new Date(),
                // defaultDate: new Date(),
            });
            $('#departure_date_datetimepicker').datetimepicker("show").on('changeDate', function(){
                // $('#departure_date_datetimepicker').hide();
                $('#departure_date_datetimepicker').datetimepicker("hide")
            });
            // $('#returnDateDiv').attr('returnDateDiv-data','1'); 
        
        });

        $('.returning_date_datetimepickerclass').on('click',function(){
            // alert("return hii")
            // $("#returning_date_datetimepicker").datetimepicker("destroy");
            // returning_date
            var dep_val=$('#departure_date').val();
            $('#returning_date').val('');
            $('#returning_date').val(dep_val);
            
            var newdate = dep_val.split("-").reverse().join("/");
            var datePeriode= new Date(newdate);
            var adddate=datePeriode.setDate(datePeriode.getDate() + 1);
            // alert(adddate);
            // alert(new Date(adddate))
            $('#returning_date_datetimepicker').datetimepicker({
                pickTime: false,
                startDate: new Date(adddate),
                autoclose: true,
                todayHighlight: true,
            });

            // $('#returning_date_datetimepicker').datetimepicker("show");
            $('#returning_date_datetimepicker').datetimepicker("show").on('changeDate', function(){
                $('#returning_date_datetimepicker').datetimepicker("hide")
            });
        });

        
        $('.returning_date_datetimepickerclass').click(function(){
            // alert("hii");
            $('#one_way').removeAttr('class');
            $('#round_trip').attr('class','active');
            $('#flexiDiv').show();

        });
        $(".returning_date_datetimepickerclass").blur(function(){
            // alert("This input field has lost its focus.");
            // alert($('#returning_date').val());
            if($('#returning_date').val()==''){
                $('#round_trip').removeAttr('class');
                $('#one_way').attr('class','active');
            }
            
        });
        
        $('#one_way').click(function(){
            // returning_date
            $('#returning_date').val('');
            $('#round_trip').removeAttr('class');
            $('#one_way').attr('class','active');
            $('#flexiDiv').hide();
            $('#returnDateDiv').hide(); 
            // $('#returnDateDiv').removeAttr('returnDateDiv-data'); 
            $('#returnDateDiv').attr('returnDateDiv-data','0'); 

        });
        $('#round_trip').click(function(){
            // alert("hii");
            $('#flexiDiv').show();
            $('#one_way').removeAttr('class');
            $('#round_trip').attr('class','active');
            $('#returnDateDiv').show(); 
            $('#returnDateDiv').attr('returnDateDiv-data','1'); 
            // $('#returning_date').attr('required','required'); 
            
            // $("#returning_date_datetimepicker").datetimepicker("show"); 
            var dep_val=$('#departure_date').val();
            var newdate = dep_val.split("-").reverse().join("/");
            var datePeriode= new Date(newdate);
            var adddate=datePeriode.setDate(datePeriode.getDate() + 1)
            // // alert("hii")
            $('#returning_date_datetimepicker').datetimepicker({
                pickTime: false,
                autoclose: true, 
                startDate: new Date(adddate),
                todayHighlight: false,
            });
            $("#returning_date_datetimepicker").datetimepicker("show"); 


        });
        // returning_date
        // $(".returning_date_datetimepickerclass").on('click', function(event){
        //     alert("hii");
            
        // });

        $("#adults").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });

        $("#children").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });
        $("#infant").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });
        $("#travel_class").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });

      

        $('#flight_submit').click(function(){
            // alert("hii");
            var addFrom=$('#addFrom').val();
            var addTo=$('#addTo').val();
            var returning_date=$('#returning_date').val();
            // alert(returning_date);
            var returnDateDivval=$("#returnDateDiv").attr("returnDateDiv-data");
            if(returnDateDivval==1){
                if(addFrom==""){
                    // alert('Please enter From');
                    var blankval="Please enter From";
                    blankCheck(blankval);
                    return false;
                    // $('#addFrom').focus();
                }else if(addTo==""){
                    // alert('Please enter To');
                    var blankval="Please enter To";
                    blankCheck(blankval);
                    return false;
                }else if(returning_date==""){
                    // alert('Please enter To');
                    var blankval="Please enter Return Date";
                    blankCheck(blankval);
                    return false;
                }else{
                    $('#loading').show();
                }
            }else if(returnDateDivval==0){
                if(addFrom==""){
                    // alert('Please enter From');
                    var blankval="Please enter From";
                    blankCheck(blankval,'addFrom');
                    return false;
                    // $('#addFrom').focus();

                }else if(addTo==""){
                    // alert('Please enter To');
                    var blankval="Please enter To";
                    blankCheck(blankval);
                    return false;
                }else{
                    $('#loading').show();
                }
            }
            // var returnDateDivval=$("#returnDateDiv").attr("returnDateDiv-data");
            // alert(returning_date);
            // if(returnDateDivval==1){
            //     if(addFrom!='' && addTo!='' && returning_date!=''){
            //         $('#loading').show();
            //     }
            // }else if(returnDateDivval==0){
            //     if(addFrom!='' && addTo!=''){
            //         $('#loading').show();
            //     }
            // }
            // alert(addFrom);
            // path='<?php echo route('flights');?>';
            // var url=("{{route('flights')}}")
            // window.location.href(path);
            // window.location.assign(url);
        })

    });
    function blankCheck(blankval,adval){
        $.confirm ( {
            title: false,
            content: blankval,
            animation: 'scale',
            type: 'blue',
            opacity: 0.5,
            buttons: {
                'confirm': {
                    text: 'Ok',
                    btnClass: 'btn-blue',
                    // action: function ( ) {
                    //     // alert("hii");
                    //     $('#'+adval).focus();
                    //     // $('#'+adval).focus();
                    //     // return false;
                    // }
                }
            }
        });
        // return false;
    }
</script>
@endsection