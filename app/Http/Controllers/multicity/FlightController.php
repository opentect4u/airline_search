<?php

namespace App\Http\Controllers\multicity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AirportCodes;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Arr;

class FlightController extends Controller
{
    public function search(Request $request){
        // return $request;
        $return_flights=[];
        $return_stops=[];
        $return_airlines=[];
        $flights=[];
        $stops=[];
        $airlines=[];
        $var_from1 =  str_replace(')','',explode('(',$request->from1)[1]);
        $var_to1 =  str_replace(')','',explode('(',$request->to1)[1]);

        $var_from2 =  str_replace(')','',explode('(',$request->from2)[1]);
        $var_to2 =  str_replace(')','',explode('(',$request->to2)[1]);

        $var_from3 =  str_replace(')','',explode('(',$request->from3)[1]);
        $var_to3 =  str_replace(')','',explode('(',$request->to3)[1]);

        $var_flight0_date = Carbon::parse($request->flight0_date)->format('Y-m-d');
        $var_flight1_date = Carbon::parse($request->flight1_date)->format('Y-m-d');
        $var_flight2_date = Carbon::parse($request->flight2_date)->format('Y-m-d');

        // return $var_from1;

        $var_direct_flight='';
        $var_flexi='';
        // flight 1
        $travel_class=$request->travel_class;
        $flightFrom=$var_from1;
        $flightTo=$var_to1;
        $SearchDate=$var_flight0_date;
        $xmldata=app('App\Http\Controllers\UtilityController')->Universal_API_SearchXML($travel_class,$flightFrom,$flightTo,$SearchDate);
        $api_url = "https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService";
        $return =app('App\Http\Controllers\UtilityController')->universal_API($xmldata,$api_url);
        $content = $this->prettyPrint($return);
        $flights = ($this->parseOutput($content));
        $stops=$this->Stops($flights,$var_direct_flight,$var_flexi);
        $airlines=$this->Airline($flights,$var_direct_flight,$var_flexi);
        // return $flights;

        // flight 2
        $travel_class=$request->travel_class;
        $flightFrom=$var_from2;
        $flightTo=$var_to2;
        $SearchDate=$var_flight1_date;
        $xmldata=app('App\Http\Controllers\UtilityController')->Universal_API_SearchXML($travel_class,$flightFrom,$flightTo,$SearchDate);
        $api_url = "https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService";
        $return =app('App\Http\Controllers\UtilityController')->universal_API($xmldata,$api_url);
        $content = $this->prettyPrint($return);
        $flights1 = ($this->parseOutput($content));
        $stops1=$this->Stops($flights1,$var_direct_flight,$var_flexi);
        $airlines1=$this->Airline($flights1,$var_direct_flight,$var_flexi);
        // return $flights1;

        // flight 3
        $travel_class=$request->travel_class;
        $flightFrom=$var_from3;
        $flightTo=$var_to3;
        $SearchDate=$var_flight2_date;
        $xmldata=app('App\Http\Controllers\UtilityController')->Universal_API_SearchXML($travel_class,$flightFrom,$flightTo,$SearchDate);
        $api_url = "https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService";
        $return =app('App\Http\Controllers\UtilityController')->universal_API($xmldata,$api_url);
        $content = $this->prettyPrint($return);
        $flights2 = ($this->parseOutput($content));
        $stops2=$this->Stops($flights2,$var_direct_flight,$var_flexi);
        $airlines2=$this->Airline($flights2,$var_direct_flight,$var_flexi);
        // return $flights2;

        // $min_val=min(count($flights),count($flights1),count($flights2));
        $min_val=max(count($flights),count($flights1),count($flights2));
        // $multiflights=[];
        // $totalarr=[];
        $multiflights = collect();

        for ($i=0; $i <$min_val ; $i++) { 
            // echo $i;
            $totalarr=[];
            if(isset($flights[$i])){
            array_push($totalarr,$flights[$i]);
            }
            if(isset($flights1[$i])){
            array_push($totalarr,$flights1[$i]);
            }
            if(isset($flights2[$i])){
            array_push($totalarr,$flights2[$i]);
            }
            // array_push($totalarr,$flights[$i],$flights1[$i],$flights2[$i]);
            // $multiflights['multiflights']=$totalarr;
            $multiflights->push(['multiflights'=>collect($totalarr)]);				

            // $totalarr='';

        }
        // return $multiflights;
        // return count($flights)." - ". count($flights1)." - ".count($flights2);
        // return $request;
        // return $flights[0];
        // return $return_flights[0];
        // foreach($multiflights[0] as $data){
        //     foreach($data as $datas){
        //         // echo $datas[0]['Airline'];
        //         // print_r($datas);
        //         // echo "<br/><br/>";
        //         foreach($datas as $datas1){
        //             // print_r($datas1);
        //             // echo "<br/><br/>";
        //             foreach($datas1[0] as $datas2){
        //                 print_r($datas2);
        //                 // echo count($datas2);
        //                 echo "<br/><br/>";
        //                 for ($i=0; $i < count($datas2); $i++) { 
        //                    echo $datas2[$i]['Flight'];
        //                    echo "<br/><br/>";
        //                 }
        //                 // foreach($datas2 as $datas3){
        //                 //     print_r($datas3);
        //                 //     echo "<br/><br/>";

        //                 // }
        //             }
        //             // foreach($datas1 as $datas2){
        //             //     print_r($datas2);
        //             //     echo "<br/><br/>";
        //             // }
        //         }
        //     }
        //     // print_r($data);
        //     //     echo "<br/>";
        // }
        
        return view('multicity.flights',[
            'searched' => $request,
            'multiflights'=>$multiflights,
            'airlines'=>$airlines,
            'stops'=>$stops,
        ]);
        
    }
    public function prettyPrint($result){
        $dom = new \DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($result);
        $dom->formatOutput = true;
        //call function to write request/response in file
//        outputWriter($file,$dom->saveXML());
        return $dom->saveXML();
    }

    public function parseOutput($content){	//parse the Search response to get values to use in detail request
        $data = collect();
        $LowFareSearchRsp = $content; //use this if response is not saved anywhere else use above variable
        //echo $LowFareSearchRsp;
        // return $LowFareSearchRsp;
        $xml = simplexml_load_String("$LowFareSearchRsp", null, null, 'SOAP', true);
        // return $xml;
        if(!$xml){
            trigger_error("Encoding Error!", E_USER_ERROR);
        }

        $Results = $xml->children('SOAP',true);
        foreach($Results->children('SOAP',true) as $fault){
            if(strcmp($fault->getName(),'Fault') == 0){
                // trigger_error("Error occurred request/response processing!", E_USER_ERROR);
                return $data;
            }
        }

        $count = 0;
        // return $Results;
        foreach($Results->children('air',true) as $lowFare){		
            foreach($lowFare->children('air',true) as $airPriceSol){	
                        
                if(strcmp($airPriceSol->getName(),'AirPricingSolution') == 0){		
                    // $count = $count + 1;
                    foreach($airPriceSol->children('air',true) as $journey){					
                        if(strcmp($journey->getName(),'Journey') == 0){
                            $Journey= collect();
                            $journeydetails = collect();
                            foreach($journey->children('air', true) as $segmentRef){	
                                if(strcmp($segmentRef->getName(),'AirSegmentRef') == 0){								
                                    $details=[];
                                    foreach($segmentRef->attributes() as $a => $b){	
                                        $segment = $this->ListAirSegments($b, $lowFare);
                                        foreach($segment->attributes() as $c => $d){
                                            // $details[$c]=$d;
                                            if(strcmp($c, "Key") == 0){
                                                $details["Key"]=$d;
                                            }
                                            if(strcmp($c, "Group") == 0){
                                                $details["Group"]=$d;
                                            }
                                            if(strcmp($c, "Origin") == 0){
                                                $details["From"]=$d;
                                            }
                                            if(strcmp($c, "Destination") == 0){
                                                $details["To"]=$d;
                                            }
                                            if(strcmp($c, "Carrier") == 0){		
                                                $details["Airline"]=$d;								
                                            }
                                            if(strcmp($c, "FlightNumber") == 0){	
                                                $details["Flight"]=$d;
                                            }
                                            if(strcmp($c, "DepartureTime") == 0){	
                                                $details["Depart"]=$d;										
                                            }
                                            if(strcmp($c, "ArrivalTime") == 0){	
                                                $details["Arrive"]=$d;
                                            }
                                            if(strcmp($c, "FlightTime") == 0){	
                                                $details["FlightTime"]=$d;
                                            }
                                            if(strcmp($c, "Distance") == 0){	
                                                $details["Distance"]=$d;
                                            }		
                                        }
                                    }
                                    $journeydetails->push($details);
                                }
                            }	
                            $Journey->push(['journey'=>collect($journeydetails)]);				
                        }					
                    }
                   // Price Details
                    foreach($airPriceSol->children('air',true) as $priceInfo){
                        $flightPrice = [];
                        if(strcmp($priceInfo->getName(),'AirPricingInfo') == 0){
                            foreach($priceInfo->attributes() as $e => $f){
                                if(strcmp($e, "ApproximateBasePrice") == 0){
                                    $flightPrice['Approx Base Price'] = $f;
                                }
                                if(strcmp($e, "ApproximateTaxes") == 0){
                                    $flightPrice['Approx Taxes'] = $f;
                                }
                                if(strcmp($e, "ApproximateTotalPrice") == 0){
                                    $flightPrice['Approx Total Value'] = $f;
                                }
                                if(strcmp($e, "BasePrice") == 0){
                                    $flightPrice['Base Price'] = $f;
                                }
                                if(strcmp($e, "Taxes") == 0){
                                    $flightPrice['Taxes'] = $f;
                                }
                                if(strcmp($e, "TotalPrice") == 0){
                                    $flightPrice['Total Price'] = $f;
                                }
                            }
                            foreach($priceInfo->children('air',true) as $bookingInfo){
                                if(strcmp($bookingInfo->getName(),'BookingInfo') == 0){
                                    foreach($bookingInfo->attributes() as $e => $f){
                                        if(strcmp($e, "CabinClass") == 0){
                                            $flightPrice['Cabin Class'] = $f;
                                        }
                                    }
                                }
                            }
                        }
                        if(count($flightPrice)){
                            $Journey->push(['price'=>$flightPrice]);
                            // $flight['price'] = collect($flightPrice);
                        }
                    }
                    $data->push(['flight'=>collect($Journey)]);
                    // file_put_contents($fileName,"\r\n", FILE_APPEND);
                }
            }
        }
        
        return $data;

    }

    public function ListAirSegments($key, $lowFare){
        foreach($lowFare->children('air',true) as $airSegmentList){
            if(strcmp($airSegmentList->getName(),'AirSegmentList') == 0){
                foreach($airSegmentList->children('air', true) as $airSegment){
                    if(strcmp($airSegment->getName(),'AirSegment') == 0){
                        foreach($airSegment->attributes() as $a => $b){
                            if(strcmp($a,'Key') == 0){
                                if(strcmp($b, $key) == 0){
                                    return $airSegment;
                                }
                            }
                        }
                    }
                }
            }
        }
    }


    public function Stops($data,$direct_flight,$flexi){
        $stops= [];
        foreach($data as $datas){
            foreach($datas as $datass){
                foreach($datass[0] as $journeys){
                    if($direct_flight=="DF" && count($journeys)>1 && $flexi=="")
                    {
                        continue;
                    }elseif ($direct_flight=="" && count($journeys)==1 && $flexi=="F") {
                        continue;
                    }
                    array_push($stops,count($journeys)-1);
                }
            }
        }
        $stops = array_unique($stops);
        return $stops;
    }
    public function Airline($data,$direct_flight,$flexi){
        $airlines = [];
        foreach($data as $datas){
            foreach($datas as $datass){
                foreach($datass[0] as $journeys){
                    for ($i=0; $i < count($journeys); $i++) { 
                    if($direct_flight=="DF" && count($journeys)>1 && $flexi=="")
                    {
                        continue;
                    }elseif ($direct_flight=="" && count($journeys)==1 && $flexi=="F") {
                        continue;
                    }
                        array_push($airlines,$journeys[$i]['Airline']);
                    }
                }
            }
        }
        $airlines = array_unique($airlines);
        return $airlines;
    }

}
