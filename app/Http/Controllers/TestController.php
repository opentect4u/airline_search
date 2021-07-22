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
          <univ:UniversalRecordLocatorCode>13MTLK</univ:UniversalRecordLocatorCode>
       </univ:UniversalRecordRetrieveReq>
    </soapenv:Body>
 </soapenv:Envelope>';
// return $query; 
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
    $data=collect();
    foreach($object2 as $unvjson){
        foreach($unvjson as $unvjson1){
            // print_r($unvjson1);
            // echo "<br/><br/><br/>";
            if(count($unvjson1)>1){
                if(array_key_exists('SOAP:Fault',$unvjson1)){
                    echo "error";
                    // echo "<br/><br/><br/>";
                }else{
                    // print_r ($unvjson1['common_v42_0:BookingTravelerName']);
                    // echo "<br/><br/><br/>";
                    // echo "hhh";
                    foreach($unvjson1 as $unvjson2){
                        if(count($unvjson2)>1){
                            $count=1;
                            foreach($unvjson2 as $unvjson3){
                                // echo $count;
                                // print_r ($unvjson3);
                                // echo "<br/><br/><br/>";
                                if($count==5){
                                    $count1=1;
                                    foreach($unvjson3 as $key => $unvjson4){
                                        // echo $count1;
                                        // print_r ($unvjson4);
                                        // echo "<br/><br/><br/>";
                                        if(is_string($unvjson4)){
                                            // print_r ($key." - ".$unvjson4);
                                            // echo "<br/><br/><br/>";
                                        }
                                        if($count1==5){
                                            // print_r ($unvjson4);
                                            // echo "<br/><br/><br/>";
                                            $per_details=[];
                                            $count2=1;
                                            foreach($unvjson4 as $key =>$unvjson5){
                                                // echo $count2;
                                                // print_r ($unvjson5);
                                                // echo "<br/><br/><br/>";
                                                if(is_string($unvjson5)){
                                                    // print_r ($key." - ".$unvjson5);
                                                    // echo "<br/><br/><br/>";
                                                    if(strcmp($key, "@Key") == 0){
                                                        $per_details['Key']=$unvjson5;
                                                    }
                                                    if(strcmp($key, "@TravelerType") == 0){
                                                        $per_details['TravelerType']=$unvjson5;
                                                    }
                                                    if(strcmp($key, "@Gender") == 0){
                                                        $per_details['Gender']=$unvjson5;
                                                    }
                                                }
                                                if($count2==7){
                                                    foreach($unvjson5 as $key => $unvjson6){
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if(is_string($unvjson6)){
                                                            // print_r($key." - ".$unvjson6);
                                                            if(strcmp($key, "@Prefix") == 0){
                                                                $per_details['Prefix']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@First") == 0){
                                                                $per_details['First']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Last") == 0){
                                                                $per_details['Last']=$unvjson6;
                                                            }
                                                        }
                                                    }
                                                }
                                                if($count2==8){
                                                    foreach($unvjson5 as $key => $unvjson6){
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if(is_string($unvjson6)){
                                                            // print_r($key." - ".$unvjson6);
                                                            // echo "<br/><br/><br/>";
                                                            if(strcmp($key, "@Key") == 0){
                                                                $per_details['Key']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Type") == 0){
                                                                $per_details['Type']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Number") == 0){
                                                                $per_details['Number']=$unvjson6;
                                                            }
                                                        }
                                                    }
                                                }
                                                if($count2==9){
                                                    foreach($unvjson5 as $key => $unvjson6){
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if(is_string($unvjson6)){
                                                            // print_r($key." - ".$unvjson6);
                                                            // echo "<br/><br/><br/>";
                                                            if(strcmp($key, "@Key") == 0){
                                                                $per_details['Key']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Type") == 0){
                                                                $per_details['Type']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@EmailID") == 0){
                                                                $per_details['EmailID']=$unvjson6;
                                                            }
                                                        }
                                                    }
                                                }
                                                if($count2==11){
                                                    $count3=1;
                                                    foreach($unvjson5 as $unvjson6){
                                                        // echo $count3;
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if($count3==3){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['Address']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        if($count3==4){
                                                            $count4=1;
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if($count4==1){
                                                                    // print_r ($unvjson7);
                                                                    // echo "<br/><br/><br/>"; 
                                                                    foreach($unvjson7 as $key => $unvjson8){
                                                                        // print_r($key." - ".$unvjson7);
                                                                        // echo "<br/><br/><br/>";
                                                                        if(is_string($unvjson8)){
                                                                            if(strcmp($key, "$") == 0){
                                                                                $per_details['street']=$unvjson8;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                if($count4==2){
                                                                    // print_r ($unvjson7);
                                                                    // echo "<br/><br/><br/>"; 
                                                                    foreach($unvjson7 as $key => $unvjson8){
                                                                        // print_r($key." - ".$unvjson7);
                                                                        // echo "<br/><br/><br/>";
                                                                        if(is_string($unvjson8)){
                                                                            if(strcmp($key, "$") == 0){
                                                                                $per_details['street1']=$unvjson8;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                $count4++;
                                                            }
                                                            
                                                        }
                                                        if($count3==5){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['City']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        if($count3==6){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['State']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        if($count3==7){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['PostalCode']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        if($count3==8){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['Country']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        if($count3==9){
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>"; 
                                                                if(is_string($unvjson7)){
                                                                    // print_r($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "$") == 0){
                                                                        $per_details['Key']=$unvjson6;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                        $count3++;
                                                    }
                                                }
                                                $count2++;
                                            }
                                        }
                                        if ($count1==7) {}
                                        if ($count1==8) {
                                            // print_r ($unvjson4);
                                            // echo "<br/><br/><br/>";
                                            $count10=1;
                                            foreach($unvjson4 as $unvjson5){
                                                // echo $count10;
                                                // print_r ($unvjson5);
                                                // echo "<br/><br/><br/>";
                                                if($count10==8){
                                                    // print_r ($unvjson5);
                                                    // echo "<br/><br/><br/>";
                                                    $count12=1;
                                                    $journey=[];
                                                    foreach($unvjson5 as $key => $unvjson6){
                                                        // echo $count12;
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if(is_string($unvjson6)){
                                                            print_r ($key." - ".$unvjson6);
                                                            echo "<br/><br/><br/>";
                                                            if(strcmp($key, "Key") == 0){
                                                                $journey["Key"]=$unvjson6;
                                                            }
                                                            if(strcmp($key, "Group") == 0){
                                                                $journey["Group"]=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Carrier") == 0){
                                                                $journey['Carrier']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@CabinClass") == 0){
                                                                $journey['CabinClass']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@ProviderCode") == 0){
                                                                $journey['ProviderCode']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Origin") == 0){
                                                                $journey['Origin']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Destination") == 0){
                                                                $journey['Destination']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@DepartureTime") == 0){
                                                                $journey['DepartureTime']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@ArrivalTime") == 0){
                                                                $journey['ArrivalTime']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@TravelTime") == 0){
                                                                $journey['TravelTime']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Distance") == 0){
                                                                $journey['Distance']=$unvjson6;
                                                            }
                                                        }
                                                        if($count12==26){
                                                            // print_r ($unvjson6);
                                                            // echo "<br/><br/><br/>";
                                                            foreach($unvjson6 as $key => $unvjson7){
                                                                // print_r ($unvjson7);
                                                                // echo "<br/><br/><br/>";
                                                                if(is_string($unvjson7)){
                                                                    // print_r ($key." - ".$unvjson7);
                                                                    // echo "<br/><br/><br/>";
                                                                    if(strcmp($key, "@OriginTerminal") == 0){
                                                                        $journey['OriginTerminal']=$unvjson7;
                                                                    }
                                                                    if(strcmp($key, "@DestinationTerminal") == 0){
                                                                        $journey['DestinationTerminal']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        $count12++;
                                                    }
                                                }
                                                if($count10==9){
                                                    // print_r ($unvjson5);
                                                    // echo "<br/><br/><br/>";
                                                    $price=[];
                                                    $count11=1;
                                                    foreach($unvjson5 as $key => $unvjson6){
                                                        // echo $count11;
                                                        // print_r ($unvjson6);
                                                        // echo "<br/><br/><br/>";
                                                        if(is_string($unvjson6)){
                                                            // print_r ($key." - ".$unvjson6);
                                                            // echo "<br/><br/><br/>";
                                                            if(strcmp($key, "@Key") == 0){
                                                                $price['Key']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@TotalPrice") == 0){
                                                                $price['TotalPrice']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@BasePrice") == 0){
                                                                $price['BasePrice']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@ApproximateTotalPrice") == 0){
                                                                $price['ApproximateTotalPrice']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@ApproximateBasePrice") == 0){
                                                                $price['ApproximateBasePrice']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@EquivalentBasePrice") == 0){
                                                                $price['EquivalentBasePrice']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@Taxes") == 0){
                                                                $price['Taxes']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@LatestTicketingTime") == 0){
                                                                $price['LatestTicketingTime']=$unvjson6;
                                                            }
                                                            if(strcmp($key, "@TrueLastDateToTicket") == 0){
                                                                $price['TrueLastDateToTicket']=$unvjson6;
                                                            }
                                                        }
                                                        if ($count11==22) {
                                                            foreach($unvjson6 as $key =>$unvjson7){
                                                                if(is_string($unvjson7)){
                                                                    if(strcmp($key, "@BookingCode") == 0){
                                                                        $price['BookingCode']=$unvjson7;
                                                                    }
                                                                    if(strcmp($key, "@CabinClass") == 0){
                                                                        $price['CabinClass']=$unvjson7;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        $count11++; 
                                                    }
                                                }
                                                $count10++;
                                            }
                                        }

                                        $count1++;
                                    }
                                }
                                $count++;
                            }

                        }
                    }
                }
                // unvjson7
                $data->push(['personal_details'=>collect($per_details)]);
                $data->push(['journey'=>collect($journey)]);
                $data->push(['price'=>collect($price)]);
            }
        }
    }

    // return $data;
}
   
public function Test1(){
    $TARGETBRANCH = 'P7141733';
    $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
$Provider = '1G';//1G/1V/1P/ACH
$PreferredDate = date('Y-m-d', strtotime("+2 day"));
$returnDate= date('Y-m-d', strtotime("+3 day"));
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
               <com:Airport Code="CCU"/>
            </air:SearchDestination>
            <air:SearchDepTime PreferredTime="$returnDate">
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

}
