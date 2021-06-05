<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function Search(){
        return view('flights.flights');
    }

    public function FlightDetails(){
        return view('flights.flight-details');
    }

    public function PassengerDetails(){
        return view('flights.passenger-details');
    }
    public function Payment(){
        return view('flights.payment');
    }
    public function ConfirmBooking(){
        return view('flights.confirm-booking');
    }
}
