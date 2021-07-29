<?php

namespace App\Http\Controllers\multicity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirportCodes;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Arr;

class PassengerDetailsController extends Controller
{
    public function PassengerDetails(Request $request){
        // return $request;
        $flights1=json_decode($request->flights1,true);
        $flights2=json_decode($request->flights2,true);
        $flights3=json_decode($request->flights3,true);

        $flights4=json_decode($request->flights4,true);
        $flights5=json_decode($request->flights5,true);
        $flights6=json_decode($request->flights6,true);

        $price=json_decode($request->price,true);
        // return $price;
        // return $request;

        return view('multicity.passenger-details',[
            'flights1'=>$flights1,
            'flights2'=>$flights2,
            'flights3'=>$flights3,
            'flights4'=>$flights4,
            'flights5'=>$flights5,
            'flights6'=>$flights6,
            'searched'=>$request,
            'price'=>$price
        ]);
    }
}
