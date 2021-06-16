<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Arr;

class FlightsController extends Controller
{
    public function search(Request $request){
        // return $request;
        $flightFrom =  str_replace(')','',explode('(',$request->addFrom)[1]);
        // return $flightFrom;
        $flightTo =  str_replace(')','',explode('(',$request->addTo)[1]);
        // return $flightTo;
        $TARGETBRANCH = 'P7141733';
        //  $CREDENTIALS = '';
        $CREDENTIALS = 'Universal API/uAPI4648209292-e1e4ba84:9Jw*C+4c/5';
        $Provider = '1P'; // Any provider you want to use like 1G/1P/1V/ACH
        $returnSearch = '';
        // $searchLegModifier ='';
        $searchLegModifier =$request->travel_class;
        $PreferredDate = Carbon::parse($request->departure_date)->format('Y-m-d');
        // return $PreferredDate;
        if($request->travel_class != 'All'){
             $searchLegModifier = ' <air:AirLegModifiers>
                   <air:PreferredCabins>
                   <com:CabinClass xmlns="http://www.travelport.com/schema/common_v42_0" Type="'. $request ->travel_class.'"></com:CabinClass>
                   </air:PreferredCabins>
               </air:AirLegModifiers>';
        }
        if($request->returning_date != null) {
             $returnDate = Carbon::parse($request->returning_date)->format('Y-m-d');
             $returnSearch = '
          <air:SearchAirLeg>
             <air:SearchOrigin>
                <com:Airport Code="'.$flightTo.'"/>
             </air:SearchOrigin>
             <air:SearchDestination>
                <com:Airport Code="'.$flightFrom.'"/>
             </air:SearchDestination>
             <air:SearchDepTime PreferredTime="'.$returnDate.'">
             </air:SearchDepTime>
             '. $searchLegModifier.'
          </air:SearchAirLeg>';
        }
 
            $query = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
                <soapenv:Header/>
                <soapenv:Body>
                <air:LowFareSearchReq TraceId="trace" AuthorizedBy="user" SolutionResult="true" TargetBranch="' . $TARGETBRANCH. '" xmlns:air="http://www.travelport.com/schema/air_v33_0" xmlns:com="http://www.travelport.com/schema/common_v33_0">
                    <com:BillingPointOfSaleInfo OriginApplication="UAPI"/>
                    <air:SearchAirLeg>
                        <air:SearchOrigin>
                            <com:Airport Code="'.$flightFrom.'"/>
                        </air:SearchOrigin>
                        <air:SearchDestination>
                            <com:Airport Code="'.$flightTo.'"/>
                        </air:SearchDestination>
                        <air:SearchDepTime PreferredTime="'.$PreferredDate.'">
                        </air:SearchDepTime>
                        '. $searchLegModifier.'
                    </air:SearchAirLeg>
                    '. $returnSearch .'
                    <air:AirSearchModifiers>
                        <air:PreferredProviders>
                            <com:Provider Code="'.$Provider.'"/>
                        </air:PreferredProviders>
                    </air:AirSearchModifiers>
                    <com:SearchPassenger BookingTravelerRef="1" Code="ADT" xmlns:com="http://www.travelport.com/schema/common_v33_0"/>
                </air:LowFareSearchReq>
                </soapenv:Body>
                </soapenv:Envelope>';
        $message ="<<<EOM $query EOM";
        $auth = base64_encode("$CREDENTIALS");
        //  return $auth;
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

        // return  $header;
        // curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
        // curl_setopt($soap_do, CURLOPT_POST, true );
        curl_setopt($soap_do, CURLOPT_POSTFIELDS, $message);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER, $header);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);
        $return = curl_exec($soap_do);
        curl_close($soap_do);
        return $return;

        // $content = $this->prettyPrint($return);
        // return $content;
        // $flights = ($this->parseOutput($content));
         
        
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
