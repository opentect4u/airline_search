<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelCurrency;
use App\Models\HotelGuestDetails;
use App\Models\HotelGuestRoom;
use App\Models\HotelPaymentDetails;

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
            // return $bookdetails;
            // return $bookdetails[0];
            
        }
        // return $bookdetails[0];
        // return $bookdetails;

        // HotelGuestDetails
        // HotelGuestRoom
        // HotelPaymentDetails::create(array(
        //     'booking_reference' => $bookdetails[0]['BookingReference'],
        //     'payment_id' => 'TEST12',
        //     'room_charges'=> $bookdetails[0]['TotalPrice'],
        //     'gst' => $request->GST,
        //     'convenience_fees' => $request->Convenience_Fees,
        //     'taxes_and_fees' => $request->Taxes_and_Fees,
        // ));

        HotelGuestDetails::create(array(
            'booking_reference'=>$bookdetails[0]['BookingReference'],
            'booking_status'=>$bookdetails[0]['BookingStatus'],
            'payment_status'=>$bookdetails[0]['PaymentStatus'],
            'booking_time'=>$bookdetails[0]['BookingTime'],
            'your_reference'=>$bookdetails[0]['YourReference'],
            'currency'=>$bookdetails[0]['Currency'],
            'total_price'=>$bookdetails[0]['TotalPrice'],
            'hotel_id'=>$bookdetails[0]['HotelId'],
            'hotel_name'=>$bookdetails[0]['HotelName'],
            'city'=>$bookdetails[0]['City'],
            'check_in_date'=>$bookdetails[0]['CheckInDate'],
            'check_out_date'=>$bookdetails[0]['CheckOutDate'],
            'leader_name'=>$bookdetails[0]['LeaderName'],
            'nationality'=>$bookdetails[0]['Nationality'],
            'board_type'=>$bookdetails[0]['BoardType'],
            'cancellation_deadline'=>$bookdetails[0]['CancellationDeadline'],
        ));
        if(isset($bookdetails[0]['Rooms']['Room']['RoomName'])){
            // return $bookdetails[0]['Rooms']['Room']['RoomName'];
            HotelGuestRoom::create(array(
                'booking_reference'=>$bookdetails[5]['BookingReference'],
                'room_name'=>$bookdetails[0]['Rooms']['Room']['RoomName'],
                'num_adults'=>$bookdetails[0]['Rooms']['Room']['NumAdults'],
                'num_children'=>$bookdetails[0]['Rooms']['Room']['NumChildren'],
            ));

        }else{
            // return $bookdetails[0]['Rooms']['Room'];
            $rooms = $bookdetails[0]['Rooms']['Room'];
            $count=1;
            foreach($rooms as $room){
                HotelGuestRoom::create(array(
                    'booking_reference'=>$bookdetails[0]['BookingReference'],
                    'room_name'=>$room['RoomName'],
                    'room_no'=>$count,
                    'num_adults'=>$room['NumAdults'],
                    'num_children'=>$room['NumChildren'],
                ));
                $count++;
            }
        }


        // return view('hotel.confirm-booking',[
        //     'bookdetails'=>$bookdetails,
        //     'searched'=>[]
        // ]);
    }
}
