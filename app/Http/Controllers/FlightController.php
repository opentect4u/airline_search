<?php

namespace App\Http\Controllers;

use App\Models\AirportCodes;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
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
        $var_flightFrom =  str_replace(')','',explode('(',$request->addFrom)[1]);
        $var_flightTo =  str_replace(')','',explode('(',$request->addTo)[1]);
        $var_PreferredDate = Carbon::parse($request->departure_date)->format('Y-m-d');
        $var_direct_flight=$request->direct_flight;
        $var_flexi=$request->flexi;

        if($request->returning_date != null) {
            $var_returnDate = Carbon::parse($request->returning_date)->format('Y-m-d');
            $travel_class=$request->travel_class;
            $flightFrom=$var_flightTo;
            $flightTo=$var_flightFrom;
            $SearchDate=$var_returnDate;
            $xmldata=app('App\Http\Controllers\UtilityController')->Universal_API_SearchXML($travel_class,$flightFrom,$flightTo,$SearchDate);
            $api_url = "https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService";
            $return_return =app('App\Http\Controllers\UtilityController')->universal_API($xmldata,$api_url);
            $return_content = $this->prettyPrint($return_return);
            // $return_flights = $this->parseOutput($return_content);
            $return_stops=$this->Stops($flights,$var_direct_flight,$var_flexi);
            $return_airlines=$this->Airline($flights,$var_direct_flight,$var_flexi);
        }

        $travel_class=$request->travel_class;
        $flightFrom=$var_flightFrom;
        $flightTo=$var_flightTo;
        $SearchDate=$var_PreferredDate;
        $xmldata=app('App\Http\Controllers\UtilityController')->Universal_API_SearchXML($travel_class,$flightFrom,$flightTo,$SearchDate);
        $api_url = "https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService";
        $return =app('App\Http\Controllers\UtilityController')->universal_API($xmldata,$api_url);
        $content = $this->prettyPrint($return);
        $flights = ($this->parseOutput($content));
        $stops=$this->Stops($flights,$var_direct_flight,$var_flexi);
        $airlines=$this->Airline($flights,$var_direct_flight,$var_flexi);
        // return $flights;

        if($request->price_order == "price_order"){
            // $flights= array_reverse(collect($flights)->toArray());
            // $search = collect($search)->sortByDesc('available_from_dt')->toArray();

        }else{
            // $flights = collect($flights)->sortBy('Total Price')->toArray();
        }
        // return $request;
        return view('flights.flights',[
            'searched' => $request,
            'flights'=>$flights,
            'airlines'=>$airlines,
            'stops'=>$stops,
            'return_flights'=>$return_flights,
            'return_stops'=>$return_stops,
            'return_airlines'=>$return_airlines
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

    public function SearchAirport(Request $request){
        return AirportCodes::search($request->get('q'))->select('name','code')->get()->map(function($airport){
            return $airport->name . '('. $airport->code.')';
        });
    }

    public function FlightDetails(Request $request){
        // $v1=str_replace('GBP','',$request->totalPrice);
        // $adults=$request->adults;
        // $approxBaseFare=str_replace('GBP','',$request->approxBaseFare);
        // $taxes=str_replace('GBP','',$request->taxes);
        // $cal_approxBaseFare= ($approxBaseFare * $adults);
        // $cal_taxes= ($taxes * $adults);
        // return $v1;
//         $flights=json_decode($request->flights);
//         foreach($flights as $datass){
//             // echo $datass;
//             print_r($datass) ;
//             // foreach($datass[0] as $journeys){
//             //     for ($i=0; $i < count($journeys); $i++) { 
//             //         echo $journeys[$i]['To'];
//             //         // echo "<br/><br/>";
//             //     }
//             // }
//         }
//         return json_decode($request->flights);
//         // $flightFrom =  str_replace(')','',explode('(',$request->addFrom)[1]);
//         // $flightTo =  str_replace(')','',explode('(',$request->addTo)[1]);
//         $TARGETBRANCH = 'P7141733';
//         $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
//         $Provider = '1G'; // Any provider you want to use like 1G/1P/1V/ACH
//         $returnSearch = '';
//         $searchLegModifier = '';
//         // $PreferredDate = Carbon::parse($request->departure_date)->format('Y-m-d');

//         $query = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
//         <soap:Body>
//            <air:AirPriceReq AuthorizedBy="user" TargetBranch="'.$TARGETBRANCH.'" FareRuleType="long" xmlns:air="http://www.travelport.com/schema/air_v42_0">
//               <BillingPointOfSaleInfo OriginApplication="UAPI" xmlns="http://www.travelport.com/schema/common_v42_0"/>
//               <air:AirItinerary>
//                  <air:AirSegment Key="'.$request->key.'" Group="0" Carrier="KQ" FlightNumber="'.$request->flight.'" Origin="'.$request->from.'" Destination="'.$request->to.'" DepartureTime="'.$request->depart.'" ArrivalTime="'.$request->arrive.'" FlightTime="'.$request->flightTime.'" Distance="'.$request->distance.'" ETicketability="Yes" Equipment="E90" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail used" OptionalServicesIndicator="false" AvailabilitySource="S" AvailabilityDisplayType="Fare Shop/Optimal Shop" ProviderCode="1G" ClassOfService="W">
//                  </air:AirSegment>
//               </air:AirItinerary>
//               <air:AirPricingModifiers/>
//               <com:SearchPassenger Key="1" Code="ADT" xmlns:com="http://www.travelport.com/schema/common_v42_0"/>
//               <air:AirPricingCommand/>
//            </air:AirPriceReq>
//         </soap:Body>
//      </soap:Envelope>';
//             $message = <<<EOM
// $query
// EOM;
//         $auth = base64_encode($CREDENTIALS);
//         $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");
//         /*("https://americas.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");*/
//         $header = array(
//             "Content-Type: text/xml;charset=UTF-8",
//             "Accept: gzip,deflate",
//             "Cache-Control: no-cache",
//             "Pragma: no-cache",
//             "SOAPAction: \"\"",
//             "Authorization: Basic $auth",
//             "Content-length: ".strlen($message),
//         );
//         curl_setopt($soap_do, CURLOPT_POSTFIELDS, $message);
//         curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
//         curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
//         $return = curl_exec($soap_do);
//         curl_close($soap_do);
//         return $return ;
//         $content = $this->prettyPrint($return);
//         // return $content;
//         $flights = ($this->parseOutput($content));
//         return $flights;
//         return view('flights.flight-details',[
//             'per_flight_details'=>$request,
//             'cal_approxBaseFare'=>$cal_approxBaseFare,
//             'cal_taxes'=>$cal_taxes
//         ]);
        return view('flights.flight-details');
    }

    public function PassengerDetails(){
        return view('flights.passenger-details');
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
