<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XMlToParseDataController extends Controller
{
    // api return xml data, this data convert to json format
    public function XMlToJSON($return){
        $dom = new \DOMDocument();
        $dom->loadXML($return);
        $json = new \FluentDOM\Serializer\Json\RabbitFish($dom);
        $object = json_decode($json,true);
        return $object;
    }

    // json data to parse particular record
    public function UniversalRecord($object){
        $unidata=collect();
        foreach($object as $unvjson){
            foreach($unvjson as $unvjson1){
                // print_r($unvjson1);
                // echo "<br/><br/><br/>";
                if(count($unvjson1)>1){
                    if(array_key_exists('SOAP:Fault',$unvjson1)){
                        echo "error";
                        return "error";
                        // echo "<br/><br/><br/>";
                    }else{
                        // print_r($unvjson1);
                        // echo "<br/><br/><br/>";
                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']);
                        // echo "<br/><br/><br/>";
                        if(array_key_exists('universal:UniversalRecordRetrieveRsp',$unvjson1)){
                            // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']);
                            $Transaction_details=[];
                            foreach($unvjson1['universal:UniversalRecordRetrieveRsp'] as $key => $value){
                                if(is_string($value)){
                                    if(strcmp($key, "@TransactionId") == 0){
                                        $Transaction_details['TransactionId']=$value;
                                    }
                                }
                            }
                            $UniversalRecord=[];
                            if(array_key_exists('universal:UniversalRecord',$unvjson1['universal:UniversalRecordRetrieveRsp'])){
                                // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']);
                                foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord'] as $key => $value){
                                    if(is_string($value)){
                                        if(strcmp($key, "@LocatorCode") == 0){
                                            $UniversalRecord['LocatorCode']=$value;
                                        }
                                        if(strcmp($key, "@Version") == 0){
                                            $UniversalRecord['Version']=$value;
                                        }
                                        if(strcmp($key, "@Status") == 0){
                                            $UniversalRecord['Status']=$value;
                                        }
                                    }
                                }
                            }
                            $per_details=[];
                            if(array_key_exists('common_v42_0:BookingTraveler',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord'])){
                                // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']);
                                foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler'] as $key => $value){
                                    if(is_string($value)){
                                        if(strcmp($key, "@TravelerType") == 0){
                                            $per_details['TravelerType']=$value;
                                        }
                                        if(strcmp($key, "@DOB") == 0){
                                            $per_details['DOB']=$value;
                                        }
                                        if(strcmp($key, "@Status") == 0){
                                            $per_details['Gender']=$value;
                                        }
                                    }
                                }
                                if(array_key_exists('common_v42_0:BookingTravelerName',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:BookingTravelerName']);
                                    foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:BookingTravelerName'] as $key => $value){
                                        if(is_string($value)){
                                            if(strcmp($key, "@Prefix") == 0){
                                                $per_details['Prefix']=$value;
                                            }
                                            if(strcmp($key, "@First") == 0){
                                                $per_details['First']=$value;
                                            }
                                            if(strcmp($key, "@Last") == 0){
                                                $per_details['Last']=$value;
                                            }
                                        }
                                    }
                                }
                                if(array_key_exists('common_v42_0:PhoneNumber',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:PhoneNumber']);
                                    foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:PhoneNumber'] as $key => $value){
                                        if(is_string($value)){
                                            if(strcmp($key, "@Type") == 0){
                                                $per_details['Type']=$value;
                                            }
                                            if(strcmp($key, "@Location") == 0){
                                                $per_details['Location']=$value;
                                            }
                                            if(strcmp($key, "@Number") == 0){
                                                $per_details['Number']=$value;
                                            }
                                            if(strcmp($key, "@Text") == 0){
                                                $per_details['Text']=$value;
                                            }
                                        }
                                    }
                                }
                                if(array_key_exists('common_v42_0:Email',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Email']);
                                    foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Email'] as $key => $value){
                                        if(is_string($value)){
                                            if(strcmp($key, "@EmailID") == 0){
                                                $per_details['EmailID']=$value;
                                            }
                                            
                                        }
                                    }
                                }
                                if(array_key_exists('common_v42_0:Address',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']);
                                    if(array_key_exists('common_v42_0:AddressName',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:AddressName']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:AddressName'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['Address']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                    if(array_key_exists('common_v42_0:Street',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:Street']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:Street'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['Street']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                    if(array_key_exists('common_v42_0:City',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:City']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:City'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['City']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                    if(array_key_exists('common_v42_0:State',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:State']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:State'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['State']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                    if(array_key_exists('common_v42_0:PostalCode',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:PostalCode']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:PostalCode'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['PostalCode']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                    if(array_key_exists('common_v42_0:Country',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address'])){
                                        // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:Country']);
                                        foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['common_v42_0:BookingTraveler']['common_v42_0:Address']['common_v42_0:Country'] as $key => $value){
                                            if(is_string($value)){
                                                if(strcmp($key, "$") == 0){
                                                    $per_details['Country']=$value;
                                                }
                                                
                                            }
                                        }
                                    }
                                }
                            }
                            $journey1=collect();
                            $price=[];
                            if(array_key_exists('air:AirReservation',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord'])){
                                // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation']);
                                if(array_key_exists('air:AirSegment',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation']['air:AirSegment']);
                                    $Journey=[];
                                    foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation']['air:AirSegment'] as $value){
                                        // print_r($value);
                                        // echo "<br/><br/>";
                                        foreach($value as $key => $value1){
                                            if(is_string($value1)){
                                                if(strcmp($key, "@Key") == 0){
                                                    $Journey["Key"]=$value1;
                                                }
                                                if(strcmp($key, "Group") == 0){
                                                    $Journey["Group"]=$value1;
                                                }
                                                if(strcmp($key, "@Carrier") == 0){
                                                    $Journey['Carrier']=$value1;
                                                }
                                                if(strcmp($key, "@CabinClass") == 0){
                                                    $Journey['CabinClass']=$value1;
                                                }
                                                if(strcmp($key, "@FlightNumber") == 0){
                                                    $Journey['FlightNumber']=$value1;
                                                }
                                                if(strcmp($key, "@Origin") == 0){
                                                    $Journey['Origin']=$value1;
                                                }
                                                if(strcmp($key, "@Destination") == 0){
                                                    $Journey['Destination']=$value1;
                                                }
                                                if(strcmp($key, "@DepartureTime") == 0){
                                                    $Journey['DepartureTime']=$value1;
                                                }
                                                if(strcmp($key, "@ArrivalTime") == 0){
                                                    $Journey['ArrivalTime']=$value1;
                                                }
                                                if(strcmp($key, "@TravelTime") == 0){
                                                    $Journey['TravelTime']=$value1;
                                                }
                                                if(strcmp($key, "@Distance") == 0){
                                                    $Journey['Distance']=$value1;
                                                }
                                                if(strcmp($key, "@ChangeOfPlane") == 0){
                                                    $Journey['ChangeOfPlane']=$value1;
                                                }
                                            }
                                        }
                                        if(array_key_exists('air:FlightDetails',$value)){
                                            // print_r($value['air:FlightDetails']);
                                            // echo "<br/><br/>";
                                            foreach($value['air:FlightDetails'] as $key => $value1){
                                                if(is_string($value1)){
                                                    if(strcmp($key, "@OriginTerminal") == 0){
                                                        $Journey['OriginTerminal']=$value1;
                                                    }
                                                    if(strcmp($key, "@DestinationTerminal") == 0){
                                                        $Journey['DestinationTerminal']=$value1;
                                                    }
                                                }
                                            }
                                        }
                                        $journey1->push($Journey);
                                    }
                                }
                                if(array_key_exists('air:AirPricingInfo',$unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation'])){
                                    // print_r ($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation']['air:AirPricingInfo']);
                                    foreach($unvjson1['universal:UniversalRecordRetrieveRsp']['universal:UniversalRecord']['air:AirReservation']['air:AirPricingInfo'] as $key => $value){
                                        if(is_string($value)){
                                            if(strcmp($key, "@Key") == 0){
                                                $price['Key']=$value;
                                            }
                                            if(strcmp($key, "@TotalPrice") == 0){
                                                $price['TotalPrice']=$value;
                                            }
                                            if(strcmp($key, "@BasePrice") == 0){
                                                $price['BasePrice']=$value;
                                            }
                                            if(strcmp($key, "@ApproximateTotalPrice") == 0){
                                                $price['ApproximateTotalPrice']=$value;
                                            }
                                            if(strcmp($key, "@ApproximateBasePrice") == 0){
                                                $price['ApproximateBasePrice']=$value;
                                            }
                                            if(strcmp($key, "@EquivalentBasePrice") == 0){
                                                $price['EquivalentBasePrice']=$value;
                                            }
                                            if(strcmp($key, "@Taxes") == 0){
                                                $price['Taxes']=$value;
                                            }
                                            if(strcmp($key, "@LatestTicketingTime") == 0){
                                                $price['LatestTicketingTime']=$value;
                                            }
                                            if(strcmp($key, "@TrueLastDateToTicket") == 0){
                                                $price['TrueLastDateToTicket']=$value;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        
                    }
                    // unvjson7
                    $unidata->push(['personal_details'=>collect($per_details)]);
                    $unidata->push(['journey'=>collect($journey1)]);
                    $unidata->push(['price'=>collect($price)]);
                    $unidata->push(['UniversalRecord'=>collect($UniversalRecord)]);
                    $unidata->push(['Transaction_details'=>collect($Transaction_details)]);
                }
            }
        }
        return $unidata;
    }
}
