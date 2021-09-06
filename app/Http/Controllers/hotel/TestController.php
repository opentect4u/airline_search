<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelCurrency;

class TestController extends Controller
{
    public function Test(){
        // return "hii";


        // <BookingDates>
        // <BookingDateStart>2021-09-02</BookingDateStart>
        // <BookingDateEnd>2021-09-04</BookingDateEnd>
        // </BookingDates>

        $Username='4e136e82c5b549a71dabbc9627cb4673';
        $Password='Y1qgGuaZiHN0';

        $url = "http://xmldemo.travellanda.com/xmlv1";
        $xml1 = '<?xml version="1.0" encoding="UTF-8"?>
                <Request>
                    <Head>
                        <Username>'.$Username.'</Username>
                        <Password>'.$Password.'</Password>
                        <RequestType>HotelBookingDetails</RequestType>
                    </Head>
                    <Body>
                        
                    </Body>
                </Request>';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "xml=" . $xml1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $return1 = curl_exec($ch);
        curl_close($ch);
        // return $return;
        $object1 =app('App\Http\Controllers\XMlToParseDataController')->XMlToJSON($return1);
        // return $object1;
        foreach($object1 as $json){
            $bookdetails=$json['Body']['Bookings']['HotelBooking'];
            return $bookdetails;
            // return $bookdetails[0];
            return view('hotel.confirm-booking',[
                'bookdetails'=>$bookdetails,
                'searched'=>[]
            ]);
        }
    }
}
