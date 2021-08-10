<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirportCodes;

class HomeController extends Controller
{
    public function ShowIndex(){
        return view('index');
    }

    public function SearchAirport1(Request $request){
        $query=$request->input('query');
        $data = AirportCodes::select("name","code")
        // ->where("code","LIKE","%{$query}%")
        ->where("name","LIKE","%{$query}%")
        ->orWhere("code","LIKE","%{$query}%")
        ->get();
        return response()->json($data);
        // return response($data);
    }
    public function SearchAirport(Request $request){
        return AirportCodes::search($request->get('q'))->select('name','code')->get()->map(function($airport){
            return $airport->name . ' ('. $airport->code.')';
        });
    }
}
