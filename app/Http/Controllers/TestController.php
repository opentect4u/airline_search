<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SoapClient;

class TestController extends Controller
{
    public function Test(){
        $client = new SoapClient('https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl', array('soap_version'=>SOAP_1_1,'ubiNum' => 1,'exceptions' => true));
        $response = $client->NumberToWords();
  $response = $client->someFunction();
  var_dump($response);
        // return "hii";
    }
}
