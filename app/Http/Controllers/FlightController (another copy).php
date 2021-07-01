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
            $return_flights = $this->parseOutput($return_content);
            $return_stops=$this->Stops($return_flights,$var_direct_flight,$var_flexi);
            $return_airlines=$this->Airline($return_flights,$var_direct_flight,$var_flexi);
            // return $return_stops;
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
            $flights= array_reverse(collect($flights)->toArray());
            // $search = collect($search)->sortByDesc('available_from_dt')->toArray();

        }
        // else{
        //     // $flights = collect($flights)->sortBy('Total Price')->toArray();
        // }
        if($request->departure_order == "ASC"){
            $flights = collect($flights)->sortBy('Depart')->toArray();
            // return $flights;
        }else if($request->departure_order == "DESC"){

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
        $flights=json_decode($request->flights);
        // return  $flights;
        // echo count($flights[0]);
        $datasegment='';
        foreach($flights[0] as $journeys){
            for ($i=0; $i < count($journeys); $i++) {
                $datasegment.= '<air:AirSegment Key="'.get_object_vars($journeys[$i]->Key)[0].'" Group="'.get_object_vars($journeys[$i]->Group)[0].'" Carrier="'.get_object_vars($journeys[$i]->Airline)[0].'" FlightNumber="'.get_object_vars($journeys[$i]->Flight)[0].'" Origin="'.get_object_vars($journeys[$i]->From)[0].'" Destination="'.get_object_vars($journeys[$i]->To)[0].'" DepartureTime="'.get_object_vars($journeys[$i]->Depart)[0].'" ArrivalTime="'.get_object_vars($journeys[$i]->Arrive)[0].'" FlightTime="'.get_object_vars($journeys[$i]->FlightTime)[0].'" Distance="'.get_object_vars($journeys[$i]->Distance)[0].'" ETicketability="Yes" ProviderCode="1G" ></air:AirSegment>';
            }
        }
        // $datasegment.= '<air:AirSegment Key="'.get_object_vars($journeys[$i]->Key)[0].'" Group="'.get_object_vars($journeys[$i]->Group)[0].'" Carrier="'.get_object_vars($journeys[$i]->Airline)[0].'" FlightNumber="'.get_object_vars($journeys[$i]->Flight)[0].'" Origin="'.get_object_vars($journeys[$i]->From)[0].'" Destination="'.get_object_vars($journeys[$i]->To)[0].'" DepartureTime="'.get_object_vars($journeys[$i]->Depart)[0].'" ArrivalTime="'.get_object_vars($journeys[$i]->Arrive)[0].'" FlightTime="'.get_object_vars($journeys[$i]->FlightTime)[0].'" Distance="'.get_object_vars($journeys[$i]->Distance)[0].'" ETicketability="Yes" Equipment="E90" ChangeOfPlane="false" ParticipantLevel="Secure Sell" LinkAvailability="true" PolledAvailabilityOption="Polled avail used" OptionalServicesIndicator="false" AvailabilitySource="S" AvailabilityDisplayType="Fare Shop/Optimal Shop" ProviderCode="1G" ClassOfService="W"></air:AirSegment>';
        // echo  get_object_vars($journeys[$i]->Key)[0]; echo "<br/>";
        
        // return $datasegment;
        // foreach($flights[1] as $prices){
        // }
        $TARGETBRANCH = 'P7141733';
        $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
        $Provider = '1G'; // Any provider you want to use like 1G/1P/1V/ACH
        $returnSearch = '';
        $searchLegModifier = '';
        // $PreferredDate = Carbon::parse($request->departure_date)->format('Y-m-d');

        $query = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
        <soap:Body>
           <air:AirPriceReq AuthorizedBy="user" TargetBranch="'.$TARGETBRANCH.'" FareRuleType="long" xmlns:air="http://www.travelport.com/schema/air_v42_0">
              <BillingPointOfSaleInfo OriginApplication="UAPI" xmlns="http://www.travelport.com/schema/common_v42_0"/>
              <air:AirItinerary>
                '.$datasegment.'
              </air:AirItinerary>
              <air:AirPricingModifiers/>
              <com:SearchPassenger Key="1" Code="ADT" xmlns:com="http://www.travelport.com/schema/common_v42_0"/>
              <air:AirPricingCommand/>
           </air:AirPriceReq>
        </soap:Body>
     </soap:Envelope>';
            $message = <<<EOM
$query
EOM;
        $auth = base64_encode($CREDENTIALS);
        // $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/UniversalRecordService");
        $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");
        /*("https://americas.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");*/
        $header = array(
            "Content-Type: text/xml;charset=UTF-8",
            "Accept: gzip,deflate",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"\"",
            "Authorization: Basic $auth",
            "Content-length: ".strlen($message),
        );
        curl_setopt($soap_do, CURLOPT_POSTFIELDS, $message);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
        $return = curl_exec($soap_do);
        curl_close($soap_do);
        // return $return ;
        // $xmlObject = simplexml_load_string($return);
                   
        // $json = json_encode($xmlObject);
        // return $json;
        // $phpDataArray = json_decode($json, true); 
        // return $phpDataArray;
        // $json = json_encode($data);
        // // array
        // $array = json_decode($json, true);
        // return $array;
        // // array - dot notation
        // $array_dot = array_dot($array);
        // // collection
        // $collection = collect($array);
        // return $collection;
        // ====================================
        $dom = new \DOMDocument();
        // $dom->preserveWhiteSpace = false;
        $dom->loadXML($return);
        // $dom->formatOutput = true;
        //call function to write request/response in file
//        outputWriter($file,$dom->saveXML());
        // return $dom->saveXML();

        $json = new \FluentDOM\Serializer\Json\RabbitFish($dom);
        $object = json_decode($json,true);
        // $jsonData = json_encode($json, JSON_PRETTY_PRINT);
        // return $object;
        // return $json;
        // print_r($json) ;
        // return count($object);
        $data=collect();
        $journey=collect();
        $count=1;
        foreach($object as $jsons){
            foreach($jsons as $jsons1){
                if(count($jsons1)>1){
                    foreach($jsons1 as $jsons2){
                        // print_r($jsons3);
                        if(count($jsons2)>1){
                            foreach($jsons2 as $jsons3){
                                if(is_array($jsons3)){
                                    // echo $count." count";
                                        // echo "<br/>"; 
                                    if($count==3){
                                        // print_r($jsons3);
                                        // echo "<br/><br/>"; 
                                        foreach($jsons3 as $jsons4){
                                            // print_r($jsons4);
                                            // echo "<br/><br/>"; 
                                            // $journey=collect();     
                                            // if(count($jsons4)==2){
                                            //     foreach($jsons4 as $jsons5){
                                            //         $details=[];
                                            //         foreach($jsons5 as $k => $jsons6){
                                            //             // print_r($jsons6);
                                            //             // echo "<br/>";
                                            //             // $r=collect();
                                            //             if(is_string($jsons6)){
                                            //                 if(strcmp($k, "@Key") == 0){
                                            //                     $details["key"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@Group") == 0){
                                            //                     $details["Group"] =$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@Carrier") == 0){
                                            //                     $details["Carrier"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@FlightNumber") == 0){
                                            //                     $details["FlightNumber"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@Origin") == 0){
                                            //                     $details["Origin"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@Destination") == 0){
                                            //                     $details["Destination"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@DepartureTime") == 0){
                                            //                     $details["DepartureTime"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@ArrivalTime") == 0){
                                            //                     $details["ArrivalTime"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@FlightTime") == 0){
                                            //                     $details["FlightTime"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@TravelTime") == 0){
                                            //                     $details["TravelTime"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@Distance") == 0){
                                            //                     $details["Distance"]=$jsons6;
                                            //                 }
                                            //                 if(strcmp($k, "@ClassOfService") == 0){
                                            //                     $details["ClassOfService"]=$jsons6;
                                            //                 }
                                            //                 // $details["changeofplane"] =$jsons6;
                                            //                 // $details["optionalservicesindicator"]=$jsons6; 
                                            //                 // $details["availabilitysource"] =$jsons6;
                                            //                 // $details["polledavailabilityoption"] =$jsons6;
                                            //                 // print_r($jsons6);
                                            //                 // echo "<br/>";
                                            //                 // $journey->push($details);   
                                            //                 // print_r($k." - ".$jsons6);
                                            //                 // echo "<br/>";  

                                            //             }
                                            //         }
                                            //         $journey->push($details);     
                                            //     }
                                            //     // return $journey;
                                            //     // $data->push(["journey"=>collect($journey)]);     
                                            // }
                                        }

                                    }
                                    if($count==4){
                                        foreach($jsons3 as $jsons13){
                                            if(count($jsons13)==2){
                                                // print_r($jsons13);
                                                // echo "<br/><br/>";
                                                $count1=1;
                                                foreach($jsons13 as $jsons14){
                                                    // echo "count";
                                                    // print_r($jsons14);
                                                    // echo "<br/><br/><br/>";
                                                    if($count1==1){
                                                        // echo "count";
                                                        // print_r($jsons14);
                                                        // echo "<br/><br/><br/>";
                                                        foreach($jsons14 as $jsons15){
                                                            print_r($jsons15);
                                                            echo "<br/><br/><br/>";
                                                        }
                                                    }
                                                    $count1++;
                                                }
                                            }
                                        }
                                        // print_r($jsons3);
                                        // echo "<br/>"; 
                                    }
                                    $count++;
                                }
                               
                            }
                            // print_r($jsons2);
                            // echo "<br/><br/><br/><br/><br/>"; 
                        }
                    } 
                }
            }
        }
        // return $data;
        //=====================================================
        // $content = $this->prettyPrint($return);
        // $xml_file = simplexml_load_string($content);
        // $json = json_encode($xml_file);
        // $array = json_decode($json,TRUE);
        // return $array;
        // return $content;
        // header('content-Type: application/json');
        //    echo $result;
        // $jsonData = json_encode($content, JSON_PRETTY_PRINT);
        // return $jsonData ;
        // $json = json_encode($content);
        // return $json ;
        // $flights_details =$this->parseOutputSingle($content);
        // return $flights_details;
        //         return view('flights.flight-details',[
        //             'per_flight_details'=>$request,
        //             'cal_approxBaseFare'=>$cal_approxBaseFare,
        //             'cal_taxes'=>$cal_taxes
        //         ]);
        // return view('flights.flight-details');
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

    public function parseOutputSingle($content){	//parse the Search response to get values to use in detail request
        $data = collect();
        $LowFareSearchRsp = $content; //use this if response is not saved anywhere else use above variable
        //echo $LowFareSearchRsp;
        // return $LowFareSearchRsp;
        $xml = simplexml_load_String("$LowFareSearchRsp", null, null, 'SOAP', true);
        // $json = json_encode($xml);
        // return $json;
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
         //return $Results;
        foreach($Results->children('air',true) as $airpricersp){
            // if(strcmp($airpricersp->getName(),'Airitinerary') == -32){	
            foreach($airpricersp->children('air',true) as $a=> $airpricerspdel){
                $AirItinerary= collect();
               
                if(strcmp($airpricerspdel->getName(),'AirItinerary') == 0){
                    // return "hii";
                    foreach($airpricerspdel->children('air',true) as $Airitinerary){
                        $AirSegmentS=collect();
                        if(strcmp($Airitinerary->getName(),'AirSegment') == 0){
                            foreach($airpricerspdel->children('air',true) as $AirSegment){
                                $details=[];
					            foreach($AirSegment->attributes() as $e => $f){
                                    $details[$e] = $f;
                                    
                                }
                                $AirSegmentS->push($details);
                            }
                        
                      
                        }   
                    
                    }
                    // $data->push(["AirSegment"=>collect($AirSegmentS)]);     
                }
                
               // return $AirItinerary;
                $pricedetilas=collect();
                if(strcmp($airpricerspdel->getName(),'AirPriceResult') == 0){
                    foreach($airpricerspdel->children('air',true) as $airpricingsolution){
                         //return $airpricingsolution->getName();
                        if(strcmp($airpricingsolution->getName(),'AirPricingSolution') == 0){
                        $Countairsegmentref=0;
                        foreach($airpricingsolution->children('air',true) as $airsegmentref){
                            $Countairsegmentref+=1;
                            if(strcmp($airsegmentref->getName(),'AirSegmentRef') == 0 && $Countairsegmentref==1){

                                $Countsss="";
                                 $Countsss.=$airsegmentref->getName()." ";
                                foreach($airsegmentref->children('air',true) as $airsegmentrefS){
                                return $airsegmentrefS->getName();
                                // $Countsss ++;
                                }
                                return $Countsss;
                            }
                            
                        }
                       
                     }
                    }
                }
                
            }
           
        }
         
        //return $data;

    }


}
