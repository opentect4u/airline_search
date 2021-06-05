<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirportCodes;

class HomeController extends Controller
{
    public function ShowIndex(){
        return view('index');
    }

    public function SearchAirport(Request $request){
        $query=$request->input('query');
        $data = AirportCodes::select("name","code")->where("name","LIKE","%{$query}%")->where("code","LIKE","%{$query}%")->get();
        return response()->json($data);
    }
}
