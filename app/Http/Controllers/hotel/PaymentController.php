<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Show(Request $request){
        // return $request;
        $options=json_decode($request->option,true);
        // return $option[0];
        // $options=$option[0];
        // return $options;
        return view('hotel.payment',[
            'options'=>$options,
            'searched'=>$request
        ]);
    }

    public function Confirm(Request $request){
        // return $request;
        $options=json_decode($request->options,true);
        // return $options;
        // return $options['OptionId'];
        // return $options['Rooms']['Room']['RoomId'];
        $allxmldata='';
        if($request->hotel_room > 1){
            // return "hh";
            for ($i=1; $i <= $request->hotel_room; $i++) { 
                // echo $i;
                $adult = 'room'.$i.'_hotel_adults';
                // echo "</br>";
                $child ='room'.$i.'_hotel_child';
                // echo "</br>";
                $infant ='room'.$i.'_hotel_infant';
                // echo "</br>";
                $allxmldata0='<Room>
                     <RoomId>'.$options['Rooms']['Room'][($i-1)]['RoomId'].'</RoomId>
                     <PaxNames>';
                $allxmldata1='';
                for ($j=1; $j <= $request->$adult; $j++) { 
                    $firstname= 'room'.$i.'_first_name'.$j;
                    $lastname= 'room'.$i.'_last_name'.$j;
                    // echo "</br>";
                    $allxmldata1.='<AdultName>
                         <Title>Mr.</Title>
                         <FirstName>'.$request->$firstname.'</FirstName>
                         <LastName>'.$request->$lastname.'</LastName>
                     </AdultName>';
                }
                $allxmldata2='';
                if($request->$child>0){
                    $child1_first= 'room'.$i.'_child1_first_name';
                    $child1_last= 'room'.$i.'_child1_last_name';
                    $allxmldata2='<ChildName>
                        <FirstName>'.$request->$child1_first.'</FirstName>
                        <LastName>'.$request->$child1_last.'</LastName>
                    </ChildName>';
                }
                $allxmldata3='';
                if($request->$infant>0){
                    $child2_first= 'room'.$i.'_child2_first_name';
                    $child2_last= 'room'.$i.'_child2_last_name';
                    $allxmldata3='<ChildName>
                        <FirstName>'.$request->$child2_first.'</FirstName>
                        <LastName>'.$request->$child2_last.'</LastName>
                    </ChildName>';
                }
                $allxmldata4='</PaxNames>
                </Room>';
                $allxmldata.=$allxmldata0.$allxmldata1.$allxmldata2.$allxmldata3.$allxmldata4;
                $allxmldata0='';
                $allxmldata1='';
                $allxmldata2='';
                $allxmldata3='';
                $allxmldata4='';
            }
            // room1_hotel_adults": "2",
            // "room1_hotel_child": "11",
            // "room1_hotel_infant": "7",
            // return $options['Rooms']['Room'][0]['RoomId'];
            // $allxmldata0='<Room>
            //     <RoomId>'.$options['Rooms']['Room']['RoomId'].'</RoomId>
            //     <PaxNames>';
            // $allxmldata1='';
            

            

        }else{
            // room1_hotel_adults
            // room1_hotel_child
            // room1_hotel_infant
            // return $options['Rooms']['Room']['RoomId'];
            // $allxmldata
            
            $allxmldata0='<Room>
                <RoomId>'.$options['Rooms']['Room']['RoomId'].'</RoomId>
                <PaxNames>';
                $allxmldata1='';
                for ($j=1; $j <= $request->$adult; $j++) { 
                    $firstname= 'room'.$i.'_first_name'.$j;
                    $lastname= 'room'.$i.'_last_name'.$j;
                    // echo "</br>";
                    $allxmldata1.='<AdultName>
                         <Title>Mr.</Title>
                         <FirstName>'.$request->$firstname.'</FirstName>
                         <LastName>'.$request->$lastname.'</LastName>
                     </AdultName>';
                }
                $allxmldata2='';
                if($request->$child>0){
                    $child1_first= 'room'.$i.'_child1_first_name';
                    $child1_last= 'room'.$i.'_child1_last_name';
                    $allxmldata2='<ChildName>
                        <FirstName>'.$request->$child1_first.'</FirstName>
                        <LastName>'.$request->$child1_last.'</LastName>
                    </ChildName>';
                }
                $allxmldata3='';
                if($request->$infant>0){
                    $child2_first= 'room'.$i.'_child2_first_name';
                    $child2_last= 'room'.$i.'_child2_last_name';
                    $allxmldata3='<ChildName>
                        <FirstName>'.$request->$child2_first.'</FirstName>
                        <LastName>'.$request->$child2_last.'</LastName>
                    </ChildName>';
                }
                $allxmldata4='</PaxNames>
                </Room>';
                $allxmldata.=$allxmldata0.$allxmldata1.$allxmldata2.$allxmldata3.$allxmldata4;
            


        }
        // return $allxmldata;
        // if(isset($options['Rooms']['Room']['RoomId'])){
        //     return $options['Rooms']['Room']['RoomId'];
        // }else{
        //     return $options['Rooms']['Room'];
        // }
        // $first_name1=$request->first_name1;
        // $last_name1=$request->last_name1;
        // return $first_name1;

        // $xmldata='';
            // <ChildName>
            // <FirstName>First Name 5</FirstName>
            // <LastName>Last Name 5</LastName>
            // </ChildName>

        $Username='4e136e82c5b549a71dabbc9627cb4673';
        $Password='Y1qgGuaZiHN0';

        $url = "http://xmldemo.travellanda.com/xmlv1";
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
                <Request>
                    <Head>
                        <Username>'.$Username.'</Username>
                        <Password>'.$Password.'</Password>
                        <RequestType>HotelBooking</RequestType>
                    </Head>
                    <Body>
                        <OptionId>'.$options['OptionId'].'</OptionId>
                        <YourReference>XMLTEST</YourReference>
                        <Rooms>
                            '.$allxmldata.'  
                        </Rooms>
                    </Body>
                </Request>';


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "xml=" . $xml);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $return = curl_exec($ch);
        curl_close($ch);
        // return $return;
        $object =app('App\Http\Controllers\XMlToParseDataController')->XMlToJSON($return);
        // return $object;
        // $data=collect();
        foreach($object as $json){
            if(array_key_exists('Error',$json['Body'])){
                // return $json['Body']['Error'];
                // return [];
                // return $data->push($json['Body']['Error']);
            }else if(array_key_exists('HotelBooking',$json['Body'])){
                // return $json['Body']['HotelBooking'];
                // $hotel= $json['Body']['HotelBooking'];
                // if(array_key_exists('HotelId',$hotel['Hotel'])){
                //     // return $hotel['Hotel']['HotelId'];
                //     array_push($hotelDetails,$hotel['Hotel']);
                // }else{
                //     $hotelDetails= $json['Body']['Hotels']['Hotel'];
                //     // array_push($hotelDetails,$hotels);
                // }
                
            }
        }
        $bookdetails=[];
        if(isset($json['Body']['HotelBooking']['BookingReference'])){
            $xml1 = '<?xml version="1.0" encoding="UTF-8"?>
                <Request>
                    <Head>
                        <Username>'.$Username.'</Username>
                        <Password>'.$Password.'</Password>
                        <RequestType>HotelBookingDetails</RequestType>
                    </Head>
                    <Body>
                        <CheckInDates>
                            
                        </CheckInDates>
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
            }
            return view('hotel.confirm-booking',[
                'bookdetails'=>$bookdetails,
                'searched'=>$request
            ]);

        }else{
            return view('hotel.confirm-booking',[
                'bookdetails'=>$bookdetails,
                'searched'=>$request
            ]);
        }
       


    }
}
