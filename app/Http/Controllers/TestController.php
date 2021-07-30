<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SoapClient;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{

public function Test(){
    $TARGETBRANCH = 'P7141733';
    $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
    $Provider = '1G'; // Any provider you want to use like 1G/1P/1V/ACH
    $returnSearch = '';
    $searchLegModifier = '';
    $query = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
    <soapenv:Body>
       <univ:UniversalRecordRetrieveReq TargetBranch="'.$TARGETBRANCH.'" TraceId="trace" xmlns:univ="http://www.travelport.com/schema/universal_v42_0" xmlns:com="http://www.travelport.com/schema/common_v42_0">
          <com:BillingPointOfSaleInfo OriginApplication="UAPI" xmlns="http://www.travelport.com/schema/common_v42_0"/>
          <univ:UniversalRecordLocatorCode>13UIBZ</univ:UniversalRecordLocatorCode>
       </univ:UniversalRecordRetrieveReq>
    </soapenv:Body>
 </soapenv:Envelope>';
// return $query; 13WX71 13WUOT
        $message = <<<EOM
$query
EOM;
    $auth = base64_encode($CREDENTIALS);
    $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/UniversalRecordService");
    // $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");
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
    $return2 = curl_exec($soap_do);
    curl_close($soap_do);
    // return $return2;

    $dom2 = new \DOMDocument();
    $dom2->loadXML($return2);
    $json2 = new \FluentDOM\Serializer\Json\RabbitFish($dom2);
    $object2 = json_decode($json2,true);
    // return $object2;

    // array_key_exists($index, $array);
    // universal:UniversalRecordRetrieveRsp
    $unidata=collect();
        foreach($object2 as $unvjson){
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
                                                        $per_details['AddressName']=$value;
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
        // foreach($unidata[1] as $unidatas){
        //     // print_r($unidatas);
        //     // foreach($unidatas[0] as $unidatass){
        //     //     print_r($unidatass);
        //     foreach($unidatas as $unidatass1){
        //         echo $unidatass1['Carrier'];
        //         // for ($i=1; $i <= count($unidatass1); $i++) { 
        //         //     echo $unidatass1[$i]['Carrier'];
        //         //     echo "<br/>";

        //         // }
        //     }
        //     // }
        //     // echo "<br/>";
        //     // foreach($unidatas[1] as $unidatass){
        //     //     print_r($unidatass);
        //     //     // for ($i=1; $i <= count($unidatass); $i++) { 
        //     //     //     echo $unidatass[$i]['Carrier'];
        //     //     // }
        //     // }
        // }
}
   
public function Test1(){
    $TARGETBRANCH = 'P7141733';
    $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
$Provider = '1G';//1G/1V/1P/ACH
$PreferredDate = date('Y-m-d', strtotime("+2 day"));
$returnDate= date('Y-m-d', strtotime("+3 day"));
$returnDate1= date('Y-m-d', strtotime("+5 day"));
$message = <<<EOM
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Header/>
   <soapenv:Body>
      <air:LowFareSearchReq TraceId="trace" AuthorizedBy="user" SolutionResult="true" TargetBranch="$TARGETBRANCH" xmlns:air="http://www.travelport.com/schema/air_v42_0" xmlns:com="http://www.travelport.com/schema/common_v42_0">
         <com:BillingPointOfSaleInfo OriginApplication="UAPI"/>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="CCU"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="DEL"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="$PreferredDate">
            </air:SearchDepTime>            
         </air:SearchAirLeg>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="DEL"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="PNQ"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="$returnDate">
            </air:SearchDepTime>            
         </air:SearchAirLeg>
         <air:SearchAirLeg>
            <air:SearchOrigin>
               <com:Airport Code="PNQ"/>
            </air:SearchOrigin>
            <air:SearchDestination>
               <com:Airport Code="MAA"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="$returnDate1">
            </air:SearchDepTime>            
         </air:SearchAirLeg>
         <air:AirSearchModifiers>
            <air:PreferredProviders>
               <com:Provider Code="$Provider"/>
            </air:PreferredProviders>
         </air:AirSearchModifiers>
		 <com:SearchPassenger BookingTravelerRef="1" Code="ADT" xmlns:com="http://www.travelport.com/schema/common_v42_0"/>
      </air:LowFareSearchReq>
   </soapenv:Body>
</soapenv:Envelope>
EOM;


$file = "001-".$Provider."_LowFareSearchReq.xml"; // file name to save the request xml for test only(if you want to save the request/response)
$this->prettyPrint($message,$file);//call function to pretty print xml


$auth = base64_encode("$CREDENTIALS"); 
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
//curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 30); 
//curl_setopt($soap_do, CURLOPT_TIMEOUT, 30); 
// curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false); 
// curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false); 
// curl_setopt($soap_do, CURLOPT_POST, true ); 
curl_setopt($soap_do, CURLOPT_POSTFIELDS, $message); 
curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header); 
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($soap_do);
curl_close($soap_do);
// return $return;
$file = "001-".$Provider."_LowFareSearchRsp.xml"; // file name to save the response xml for test only(if you want to save the request/response)
$content = $this->prettyPrint($return,$file);
// return $content;
$f=$this->parseOutput($content);
return $f;
//outputWriter($file, $return);
//print_r(curl_getinfo($soap_do));
}



//Pretty print XML
public function prettyPrint($result,$file){
	$dom = new \DOMDocument;
	$dom->preserveWhiteSpace = false;
	$dom->loadXML($result);
	$dom->formatOutput = true;		
	//call function to write request/response in file	
	// outputWriter($file,$dom->saveXML());	
	return $dom->saveXML();
}

//function to write output in a file
function outputWriter($file,$content){	
	file_put_contents($file, $content); // Write request/response and save them in the File
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


public function parseOutput($content){	//parse the Search response to get values to use in detail request
	$LowFareSearchRsp = $content; //use this if response is not saved anywhere else use above variable
	//echo $LowFareSearchRsp;
	$xml = simplexml_load_String("$LowFareSearchRsp", null, null, 'SOAP', true);	
	
	if(!$xml){
        trigger_error("Encoding Error!", E_USER_ERROR);
    }

	$Results = $xml->children('SOAP',true);
	foreach($Results->children('SOAP',true) as $fault){
		if(strcmp($fault->getName(),'Fault') == 0){
			trigger_error("Error occurred request/response processing!", E_USER_ERROR);
		}
	}
	
	
	$count = 0;
	$fileName = public_path('flight/')."flights.txt";
	if(file_exists($fileName)){
		file_put_contents($fileName, "");
	}

	$data = collect();
    
	foreach($Results->children('air',true) as $lowFare){		
		foreach($lowFare->children('air',true) as $airPriceSol){	
            		
			if(strcmp($airPriceSol->getName(),'AirPricingSolution') == 0){		
				$count = $count + 1;
				file_put_contents($fileName, "Air Pricing Solutions Details ".$count.":\r\n", FILE_APPEND);
				file_put_contents($fileName,"--------------------------------------\r\n", FILE_APPEND);
                $Journey= collect();
                $Journey_Outbound_Inbound= collect();
                $var_toggle_journey_conunt=0;
				foreach($airPriceSol->children('air',true) as $journey){					
					if(strcmp($journey->getName(),'Journey') == 0){
                        $var_toggle_journey_conunt+=1;
						file_put_contents($fileName,"\r\nJourney Details: ", FILE_APPEND);
						file_put_contents($fileName,"\r\n", FILE_APPEND);
						file_put_contents($fileName,"--------------------------------------\r\n", FILE_APPEND);						
                        $journeydetails = collect();
                        foreach($journey->children('air', true) as $segmentRef){	
                           						
							if(strcmp($segmentRef->getName(),'AirSegmentRef') == 0){								
                                $details=[];
                                foreach($segmentRef->attributes() as $a => $b){	
                                   
									$segment = $this->ListAirSegments($b, $lowFare);
									foreach($segment->attributes() as $c => $d){
                                        if(strcmp($c, "Origin") == 0){
                                            // $journeydetails->push(['From'=>$d]);
                                            $details["From"]=$d;
											file_put_contents($fileName,"From ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "Destination") == 0){
                                            // $journeydetails->push(['To'=>$d]);
                                            $details["To"]=$d;
											file_put_contents($fileName,"To ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "Carrier") == 0){		
                                            // $journeydetails->push(['Airline'=>$d]);	
                                            $details["Airline"]=$d;								
											file_put_contents($fileName,"Airline: ".$d."\r\n", FILE_APPEND);	
										}
										if(strcmp($c, "FlightNumber") == 0){	
                                            // $journeydetails->push(['flight'=>$d]);
                                            $details["Flight"]=$d;
											file_put_contents($fileName,"Flight ".$d."\r\n", FILE_APPEND);
										}
										if(strcmp($c, "DepartureTime") == 0){	
                                            // $journeydetails->push(['Depart'=>$d]);	
                                            $details["Depart"]=$d;										
											file_put_contents($fileName,"Depart ".$d."\r\n", FILE_APPEND);	
										}
										if(strcmp($c, "ArrivalTime") == 0){	
                                            // $journeydetails->push(['Arrive'=>$d]);
                                            $details["Arrive"]=$d;
											file_put_contents($fileName,"Arrive ".$d."\r\n", FILE_APPEND);	
										
                                        }	
                                       
									}
                                    
								}
                                $journeydetails->push($details);
                                
									
							}
						}	
										
						
                        if($var_toggle_journey_conunt==1)
                        {
                            $Journey_Outbound_Inbound->push(['outbound'=>collect($journeydetails)]);	
                        }
                        else if($var_toggle_journey_conunt==2)
                        {
                            $Journey_Outbound_Inbound->push(['inbound'=>collect($journeydetails)]);	
                        }
                        else if($var_toggle_journey_conunt==3)
                        {
                            $Journey_Outbound_Inbound->push(['inbound1'=>collect($journeydetails)]);	
                        }	
                       			
					}					
				}
                $Journey->push(['journey'=>collect($Journey_Outbound_Inbound)]);
               // Price Details
                foreach($airPriceSol->children('air',true) as $priceInfo){
                    $flightPrice = [];
                    if(strcmp($priceInfo->getName(),'AirPricingInfo') == 0){
                        foreach($priceInfo->attributes() as $e => $f){
                            if(strcmp($e, "ApproximateBasePrice") == 0){
                                // $flightPrice->push('Approx. Base Price: '.$f);
                                $flightPrice['Approx Base Price'] = $f;
                                // array_push($flightPrice, 'Approx. Base Price: '.$f);
                            }
                            if(strcmp($e, "ApproximateTaxes") == 0){
                                // $flightPrice->push('Approx Taxes: '.$f);
                                $flightPrice['Approx Taxes'] = $f;
                                // array_push($flightPrice, 'Approx. Taxes: '.$f);
                            }
                            if(strcmp($e, "ApproximateTotalPrice") == 0){
                                // $flightPrice->push('Approx Total Value: '.$f);
                                $flightPrice['Approx Total Value'] = $f;
                                // array_push($flightPrice, 'Approx. Total Price: '.$f);
                            }
                            if(strcmp($e, "BasePrice") == 0){
                                // $flightPrice->push('Base Price'.$f);
                                $flightPrice['Base Price'] = $f;
                                // array_push($flightPrice, 'Base Price: '.$f);
                            }
                            if(strcmp($e, "Taxes") == 0){
                                // $flightPrice->push('Taxes '.$f);
                                $flightPrice['Taxes'] = $f;
                                // array_push($flightPrice, 'Taxes: '.$f);
                            }
                            if(strcmp($e, "TotalPrice") == 0){
                                // $flightPrice->push('Total Price '.$f);
                                $flightPrice['Total Price'] = $f;
                                // array_push($flightPrice, 'Total Price: '.$f);
                            }

                        }
                        foreach($priceInfo->children('air',true) as $bookingInfo){
                            if(strcmp($bookingInfo->getName(),'BookingInfo') == 0){
                                foreach($bookingInfo->attributes() as $e => $f){
                                    if(strcmp($e, "CabinClass") == 0){
                                        // $flightPrice->push('Cabin Class'.$f);
                                        // $flightPrice[$e] = $f;
                                        $flightPrice['Cabin Class'] = $f;
                                        // array_push($flightPrice, 'Cabin Class'.$f);
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
                file_put_contents($fileName,"\r\n", FILE_APPEND);
 
            
            
            }

			
		}
	}
	
	// print_r($data) ;
    // echo $data;
    return $data;
	// echo "\r\n"."Processing Done. Please check results in files.";

}

    public function ShowJson1(){
        $array=array (
            'soap:envelope' => 
            array (
              'soap:body' => 
              array (
                'universal:universalrecordretrieversp' => 
                array (
                  'universal:universalrecord' => 
                  array (
                    'common_v42_0:bookingtraveler' => 
                    array (
                      'common_v42_0:bookingtravelername' => 
                      array (
                        'common_v42_0:phonenumber' => 
                        array (
                          'common_v42_0:providerreservationinforef' => 
                          array (
                            '@value' => '',
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'YMSqyr+pWDKAaZdUAAAAAA==',
                            'type' => 'Home',
                            'location' => 'LON',
                            'number' => '435464646',
                            'text' => 'Abc-Xy',
                          ),
                        ),
                        'common_v42_0:email' => 
                        array (
                          'common_v42_0:providerreservationinforef' => 
                          array (
                            '@value' => '',
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'YMSqyr+pWDKAcZdUAAAAAA==',
                            'type' => 'Home',
                            'emailid' => 'fefr@rtergygy.rgerg',
                          ),
                        ),
                        'common_v42_0:ssr' => 
                        array (
                          'common_v42_0:address' => 
                          array (
                            'common_v42_0:addressname' => 'drfgarf',
                            'common_v42_0:street' => 
                            array (
                              0 => 'refgre',
                              1 => 'refgre',
                            ),
                            'common_v42_0:city' => 'rferf',
                            'common_v42_0:state' => 'REFREF',
                            'common_v42_0:postalcode' => 'sdff',
                            'common_v42_0:country' => 'IN',
                            'common_v42_0:providerreservationinforef' => 
                            array (
                              '@value' => '',
                              '@attributes' => 
                              array (
                                'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKAdZdUAAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'YMSqyr+pWDKAbZdUAAAAAA==',
                            'status' => 'HK',
                            'type' => 'DOCS',
                            'freetext' => 'P/CA/F9850356/GB/04JAN80/M/01JAN14/LINDELOEV/CARSTENGJELLERUPMR -1FDGD/SDFGDMR',
                            'carrier' => 'AI',
                            'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                          ),
                        ),
                        '@attributes' => 
                        array (
                          'prefix' => 'Mr',
                          'first' => 'sdfgd',
                          'last' => 'fdgd',
                        ),
                      ),
                      '@attributes' => 
                      array (
                        'key' => 'YMSqyr+pWDKAZZdUAAAAAA==',
                        'travelertype' => 'ADT',
                        'dob' => '2021-07-27',
                        'gender' => 'M',
                      ),
                    ),
                    'common_v42_0:actionstatus' => 
                    array (
                      'universal:providerreservationinfo' => 
                      array (
                        'air:airreservation' => 
                        array (
                          'common_v42_0:supplierlocator' => 
                          array (
                            'common_v42_0:bookingtravelerref' => 
                            array (
                              'common_v42_0:providerreservationinforef' => 
                              array (
                                'air:airsegment' => 
                                array (
                                  0 => 
                                  array (
                                    'air:flightdetails' => 
                                    array (
                                      'air:connection' => 
                                      array (
                                        'common_v42_0:sellmessage' => 
                                        array (
                                          0 => 'DEPARTS LHR TERMINAL 2  - ARRIVES MUC TERMINAL 2',
                                          1 => '*PLS ADD PAX MOBILE CTC FOR IRREG COMMUNICATION*',
                                        ),
                                        '@attributes' => 
                                        array (
                                          'duration' => '150',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'key' => 'YMSqyr+pWDKAqZdUAAAAAA==',
                                        'origin' => 'LHR',
                                        'destination' => 'MUC',
                                        'departuretime' => '2021-10-28T06:50:00.000+01:00',
                                        'arrivaltime' => '2021-10-28T09:40:00.000+02:00',
                                        'flighttime' => '110',
                                        'traveltime' => '110',
                                        'equipment' => '32N',
                                        'originterminal' => '2',
                                        'destinationterminal' => '2',
                                        'automatedcheckin' => 'false',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'key' => 'kbntyrAqWDKAsbDUAAAAAA==',
                                      'group' => '0',
                                      'carrier' => 'LH',
                                      'cabinclass' => 'Economy',
                                      'flightnumber' => '2483',
                                      'providercode' => '1G',
                                      'origin' => 'LHR',
                                      'destination' => 'MUC',
                                      'departuretime' => '2021-10-28T06:50:00.000+01:00',
                                      'arrivaltime' => '2021-10-28T09:40:00.000+02:00',
                                      'traveltime' => '110',
                                      'distance' => '569',
                                      'classofservice' => 'V',
                                      'eticketability' => 'Yes',
                                      'equipment' => '32N',
                                      'marriagegroup' => '1',
                                      'status' => 'HK',
                                      'changeofplane' => 'false',
                                      'guaranteedpaymentcarrier' => 'No',
                                      'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                                      'travelorder' => '1',
                                      'providersegmentorder' => '1',
                                      'optionalservicesindicator' => 'false',
                                      'participantlevel' => 'Secure Sell',
                                      'linkavailability' => 'true',
                                    ),
                                  ),
                                  1 => 
                                  array (
                                    'air:flightdetails' => 
                                    array (
                                      'common_v42_0:sellmessage' => 
                                      array (
                                        0 => 'DEPARTS MUC TERMINAL 2  - ARRIVES DEL TERMINAL 3',
                                        1 => '*PLS ADD PAX MOBILE CTC FOR IRREG COMMUNICATION*',
                                        2 => 'ADD ADVANCE PASSENGER INFORMATION SSRS DOCA/DOCO/DOCS',
                                        3 => 'PERSONAL DATA WHICH IS PROVIDED TO US IN CONNECTION',
                                        4 => 'WITH YOUR TRAVEL MAY BE PASSED TO GOVERNMENT AUTHORITIES',
                                        5 => 'FOR BORDER CONTROL AND AVIATION SECURITY PURPOSES',
                                      ),
                                      '@attributes' => 
                                      array (
                                        'key' => 'YMSqyr+pWDKArZdUAAAAAA==',
                                        'origin' => 'MUC',
                                        'destination' => 'DEL',
                                        'departuretime' => '2021-10-28T12:10:00.000+02:00',
                                        'arrivaltime' => '2021-10-28T23:15:00.000+05:30',
                                        'flighttime' => '455',
                                        'traveltime' => '455',
                                        'equipment' => '359',
                                        'originterminal' => '2',
                                        'destinationterminal' => '3',
                                        'automatedcheckin' => 'false',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'key' => 'kbntyrAqWDKAubDUAAAAAA==',
                                      'group' => '0',
                                      'carrier' => 'LH',
                                      'cabinclass' => 'Economy',
                                      'flightnumber' => '762',
                                      'providercode' => '1G',
                                      'origin' => 'MUC',
                                      'destination' => 'DEL',
                                      'departuretime' => '2021-10-28T12:10:00.000+02:00',
                                      'arrivaltime' => '2021-10-28T23:15:00.000+05:30',
                                      'traveltime' => '455',
                                      'distance' => '3667',
                                      'classofservice' => 'V',
                                      'eticketability' => 'Yes',
                                      'equipment' => '359',
                                      'marriagegroup' => '1',
                                      'status' => 'HK',
                                      'changeofplane' => 'false',
                                      'guaranteedpaymentcarrier' => 'No',
                                      'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                                      'travelorder' => '2',
                                      'providersegmentorder' => '2',
                                      'optionalservicesindicator' => 'false',
                                      'participantlevel' => 'Secure Sell',
                                      'linkavailability' => 'true',
                                    ),
                                  ),
                                ),
                                'air:airpricinginfo' => 
                                array (
                                  'air:fareinfo' => 
                                  array (
                                    0 => 
                                    array (
                                      'common_v42_0:endorsement' => 
                                      array (
                                        'air:baggageallowance' => 
                                        array (
                                          'air:numberofpieces' => '1',
                                        ),
                                        '@attributes' => 
                                        array (
                                          'value' => 'FARE RESTRICTION MAY APPLY',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'key' => 'YMSqyr+pWDKAnZdUAAAAAA==',
                                        'farebasis' => 'VNCOWGB',
                                        'passengertypecode' => 'ADT',
                                        'origin' => 'LHR',
                                        'destination' => 'MUC',
                                        'effectivedate' => '2021-07-30T00:00:00.000+01:00',
                                        'pseudocitycode' => '8W37',
                                      ),
                                    ),
                                    1 => 
                                    array (
                                      'common_v42_0:endorsement' => 
                                      array (
                                        'air:baggageallowance' => 
                                        array (
                                          'air:numberofpieces' => '1',
                                        ),
                                        '@attributes' => 
                                        array (
                                          'value' => 'FARE RESTRICTION MAY APPLY',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'key' => 'YMSqyr+pWDKAoZdUAAAAAA==',
                                        'farebasis' => 'VNCOWGB',
                                        'passengertypecode' => 'ADT',
                                        'origin' => 'MUC',
                                        'destination' => 'DEL',
                                        'effectivedate' => '2021-07-30T00:00:00.000+01:00',
                                        'amount' => 'NUC247.53',
                                        'pseudocitycode' => '8W37',
                                      ),
                                    ),
                                  ),
                                  'air:bookinginfo' => 
                                  array (
                                    'air:bookinginfo' => 
                                    array (
                                      'air:taxinfo' => 
                                      array (
                                        'air:taxinfo' => 
                                        array (
                                          'air:taxinfo' => 
                                          array (
                                            'air:taxinfo' => 
                                            array (
                                              'air:taxinfo' => 
                                              array (
                                                'air:taxinfo' => 
                                                array (
                                                  'air:farecalc' => 'LON LH X/MUC LH DEL 247.53VNCOWGB NUC247.53END ROE0.719092',
                                                  'air:passengertype' => 
                                                  array (
                                                    'air:fareguaranteeinfo' => 
                                                    array (
                                                      '@value' => '',
                                                      '@attributes' => 
                                                      array (
                                                        'guaranteedate' => '2021-07-30',
                                                        'guaranteetype' => 'Guaranteed',
                                                      ),
                                                    ),
                                                    '@attributes' => 
                                                    array (
                                                      'code' => 'ADT',
                                                      'bookingtravelerref' => 'YMSqyr+pWDKAZZdUAAAAAA==',
                                                    ),
                                                  ),
                                                  'common_v42_0:bookingtravelerref' => 
                                                  array (
                                                    'air:changepenalty' => 
                                                    array (
                                                      'air:percentage' => '0.00',
                                                    ),
                                                    'air:cancelpenalty' => 
                                                    array (
                                                      'air:percentage' => '100.00',
                                                    ),
                                                    'air:ticketingmodifiersref' => 
                                                    array (
                                                      '@value' => '',
                                                      '@attributes' => 
                                                      array (
                                                        'key' => 'YMSqyr+pWDKA1ZdUAAAAAA==',
                                                      ),
                                                    ),
                                                    '@attributes' => 
                                                    array (
                                                      'key' => 'YMSqyr+pWDKAZZdUAAAAAA==',
                                                    ),
                                                  ),
                                                  '@attributes' => 
                                                  array (
                                                    'category' => 'YR',
                                                    'amount' => 'GBP17.00',
                                                    'key' => 'YMSqyr+pWDKA7ZdUAAAAAA==',
                                                  ),
                                                ),
                                                '@attributes' => 
                                                array (
                                                  'category' => 'YQ',
                                                  'amount' => 'GBP81.50',
                                                  'key' => 'YMSqyr+pWDKA6ZdUAAAAAA==',
                                                ),
                                              ),
                                              '@attributes' => 
                                              array (
                                                'category' => 'RA',
                                                'amount' => 'GBP14.30',
                                                'key' => 'YMSqyr+pWDKA5ZdUAAAAAA==',
                                              ),
                                            ),
                                            '@attributes' => 
                                            array (
                                              'category' => 'UB',
                                              'amount' => 'GBP17.77',
                                              'key' => 'YMSqyr+pWDKA4ZdUAAAAAA==',
                                            ),
                                          ),
                                          '@attributes' => 
                                          array (
                                            'category' => 'R1',
                                            'amount' => 'GBP8.90',
                                            'key' => 'YMSqyr+pWDKA3ZdUAAAAAA==',
                                          ),
                                        ),
                                        '@attributes' => 
                                        array (
                                          'category' => 'GB',
                                          'amount' => 'GBP82.00',
                                          'key' => 'YMSqyr+pWDKA2ZdUAAAAAA==',
                                        ),
                                      ),
                                      '@attributes' => 
                                      array (
                                        'bookingcode' => 'V',
                                        'cabinclass' => 'Economy',
                                        'fareinforef' => 'YMSqyr+pWDKAoZdUAAAAAA==',
                                        'segmentref' => 'kbntyrAqWDKAubDUAAAAAA==',
                                      ),
                                    ),
                                    '@attributes' => 
                                    array (
                                      'bookingcode' => 'V',
                                      'cabinclass' => 'Economy',
                                      'fareinforef' => 'YMSqyr+pWDKAnZdUAAAAAA==',
                                      'segmentref' => 'kbntyrAqWDKAsbDUAAAAAA==',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'key' => 'kbntyrAqWDKAybDUAAAAAA==',
                                    'totalprice' => 'GBP399.47',
                                    'baseprice' => 'GBP178.00',
                                    'approximatetotalprice' => 'GBP399.47',
                                    'approximatebaseprice' => 'GBP178.00',
                                    'taxes' => 'GBP221.47',
                                    'latestticketingtime' => '2021-08-02T06:19:00.000+01:00',
                                    'truelastdatetoticket' => '2021-08-02T06:19:00.000+01:00',
                                    'pricingmethod' => 'Guaranteed',
                                    'exchangeable' => 'true',
                                    'includesvat' => 'false',
                                    'eticketability' => 'Yes',
                                    'providercode' => '1G',
                                    'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                                    'airpricinginfogroup' => '1',
                                    'pricingtype' => 'StoredFare',
                                    'farecalculationind' => 'G',
                                  ),
                                ),
                                'air:ticketingmodifiers' => 
                                array (
                                  'air:documentselect' => 
                                  array (
                                    '@value' => '',
                                    '@attributes' => 
                                    array (
                                      'issueelectronicticket' => 'true',
                                    ),
                                  ),
                                  '@attributes' => 
                                  array (
                                    'platingcarrier' => 'LH',
                                    'key' => 'YMSqyr+pWDKA1ZdUAAAAAA==',
                                  ),
                                ),
                                '@attributes' => 
                                array (
                                  'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                                ),
                              ),
                              '@attributes' => 
                              array (
                                'key' => 'YMSqyr+pWDKAZZdUAAAAAA==',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'suppliercode' => 'LH',
                              'supplierlocatorcode' => 'RDCW9G',
                              'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                              'createdatetime' => '2021-07-30T05:19:00.000+00:00',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'locatorcode' => '13UIC0',
                            'createdate' => '2021-07-30T05:19:51.447+00:00',
                            'modifieddate' => '2021-07-30T05:19:52.103+00:00',
                          ),
                        ),
                        'common_v42_0:generalremark' => 
                        array (
                          0 => 
                          array (
                            'common_v42_0:remarkdata' => 'BOOKING 1',
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKAeZdUAAAAAA==',
                              'typeingds' => 'Basic',
                              'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                              'createdate' => '2021-07-30T05:19:00.000+00:00',
                            ),
                          ),
                          1 => 
                          array (
                            'common_v42_0:remarkdata' => 'MISSING SSR CTCM MOBILE OR SSR CTCE EMAIL OR SSR CTCR NON-CONSENT FOR LH',
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKApZdUAAAAAA==',
                              'category' => 'Vendor',
                              'typeingds' => 'Vendor',
                              'suppliertype' => 'Air',
                              'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                              'suppliercode' => 'LH',
                              'direction' => 'Incoming',
                              'createdate' => '2021-07-30T05:19:00.000+00:00',
                            ),
                          ),
                        ),
                        'common_v42_0:agencyinfo' => 
                        array (
                          'common_v42_0:agentaction' => 
                          array (
                            '@value' => '',
                            '@attributes' => 
                            array (
                              'actiontype' => 'Created',
                              'agentcode' => 'uAPI4648209292-e1e4ba84',
                              'branchcode' => 'P7141733',
                              'agencycode' => 'S7141726',
                              'eventtime' => '2021-07-30T05:19:48.257+00:00',
                            ),
                          ),
                        ),
                        'common_v42_0:formofpayment' => 
                        array (
                          'common_v42_0:creditcard' => 
                          array (
                            'common_v42_0:billingaddress' => 
                            array (
                              'common_v42_0:addressname' => 'Jan Testora',
                              'common_v42_0:street' => 
                              array (
                                0 => '6901 S. Havana',
                                1 => 'Apt 2',
                              ),
                              'common_v42_0:city' => 'Englewood',
                              'common_v42_0:state' => 'CO',
                              'common_v42_0:postalcode' => '8011',
                              'common_v42_0:country' => 'AU',
                              '@attributes' => 
                              array (
                                'key' => 'YMSqyr+pWDKAgZdUAAAAAA==',
                              ),
                            ),
                            '@attributes' => 
                            array (
                              'type' => 'CA',
                              'number' => '************5557',
                              'expdate' => '2022-03',
                              'name' => 'JAYA KUMAR',
                            ),
                          ),
                          'common_v42_0:providerreservationinforef' => 
                          array (
                            '@value' => '',
                            '@attributes' => 
                            array (
                              'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                            ),
                          ),
                          '@attributes' => 
                          array (
                            'key' => 'YMSqyr+pWDKAfZdUAAAAAA==',
                            'type' => 'Credit',
                            'reusable' => 'false',
                            'profilekey' => 'CHR8a9nVSBm8F7StmHpS8Q==',
                          ),
                        ),
                        '@attributes' => 
                        array (
                          'key' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                          'providercode' => '1G',
                          'locatorcode' => '0012XH',
                          'createdate' => '2021-07-30T05:19:52.103+00:00',
                          'modifieddate' => '2021-07-30T05:19:52.103+00:00',
                          'hostcreatedate' => '2021-07-30',
                          'owningpcc' => '8W37',
                        ),
                      ),
                      '@attributes' => 
                      array (
                        'key' => 'YMSqyr+pWDKAhZdUAAAAAA==',
                        'type' => 'ACTIVE',
                        'providerreservationinforef' => 'YMSqyr+pWDKAuZdUAAAAAA==',
                        'providercode' => '1G',
                      ),
                    ),
                    '@attributes' => 
                    array (
                      'locatorcode' => '13UIBZ',
                      'version' => '0',
                      'status' => 'Active',
                    ),
                  ),
                  '@attributes' => 
                  array (
                    'traceid' => 'trace',
                    'transactionid' => 'F5E40DD20A0D6A8064667D9791DE7C4F',
                    'responsetime' => '885',
                  ),
                ),
              ),
            ),
        );
        return $array;
    }

    public function ShowJson(){
        $TARGETBRANCH = 'P7141733';
        $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
        $Provider = '1G'; // Any provider you want to use like 1G/1P/1V/ACH
        $returnSearch = '';
        $searchLegModifier = '';
        $query = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
        <soapenv:Body>
           <univ:UniversalRecordRetrieveReq TargetBranch="'.$TARGETBRANCH.'" TraceId="trace" xmlns:univ="http://www.travelport.com/schema/universal_v42_0" xmlns:com="http://www.travelport.com/schema/common_v42_0">
              <com:BillingPointOfSaleInfo OriginApplication="UAPI" xmlns="http://www.travelport.com/schema/common_v42_0"/>
              <univ:UniversalRecordLocatorCode>13UIBZ</univ:UniversalRecordLocatorCode>
           </univ:UniversalRecordRetrieveReq>
        </soapenv:Body>
     </soapenv:Envelope>';
    // return $query; 13WX71 13WUOT
            $message = <<<EOM
$query
EOM;
        $auth = base64_encode($CREDENTIALS);
        $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/UniversalRecordService");
        // $soap_do = curl_init("https://apac.universal-api.pp.travelport.com/B2BGateway/connect/uAPI/AirService");
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
        $return2 = curl_exec($soap_do);
        curl_close($soap_do);
        // return $return2;
    
        $dom2 = new \DOMDocument();
        $dom2->loadXML($return2);
        $json2 = new \FluentDOM\Serializer\Json\RabbitFish($dom2);
        $object2 = json_decode($json2,true);
        return $object2;
    
    }

}
