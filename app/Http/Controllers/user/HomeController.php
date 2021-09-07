<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\HotelCurrency;
use App\Models\HotelGuestDetails;
use App\Models\HotelGuestRoom;
use App\Models\HotelPaymentDetails;
use App\Models\HotelGuestRoomDetails;
use App\Models\UserLogin;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('is_user');
    }

    public function Show(){
        return view('user.dashboard');
    }

    public function BookingHotels(){
        $id=Session::get('user_details')[0]['id'];
        // return $id;
        $details=HotelGuestDetails::where('user_id',$id)->orderBy('created_at', 'desc')->get();
        // return $details;
        return view('user.hotels',['details'=>$details]);
    }
    public function HotelInvoice(Request $request){
        $booking_reference=$request->booking_reference;
        // return $booking_reference;
        $invoice_data= DB::table('hotel_guest_details')
                ->leftjoin('hotel_guest_room', 'hotel_guest_details.booking_reference', '=', 'hotel_guest_room.booking_reference')
                // ->leftjoin('hotel_guest_room_details', 'hotel_guest_room.booking_reference', '=', 'hotel_guest_room_details.booking_reference')
                ->leftjoin('hotel_payment_details', 'hotel_guest_room.booking_reference', '=', 'hotel_payment_details.booking_reference')
                ->select('hotel_guest_details.*', 'hotel_guest_room.*', 'hotel_payment_details.*')
                ->where('hotel_guest_details.booking_reference',$booking_reference)
                // ->where('td_sc_profile.on_off_flag', '=', "Y")
                // ->where('td_sc_profile.badge_type', '=', $badge_code)
                // ->where('td_sc_profile.trade_description', 'LIKE', "%{$search_trade_type}%")
                // ->where('td_sc_profile.sc_lat', '=', $lat)
                // ->where('td_sc_profile.sc_long', '=', $long)
                // ->where('td_sc_profile.booking_reference', '=', $booking_reference)
                ->orderBy('hotel_guest_details.created_at', 'desc')
                ->get();
        // return $invoice_data;
        $guest_details=HotelGuestRoomDetails::where('booking_reference',$booking_reference)->get();
        // return $guest_details;
        return view('user.invoice',['invoice_data'=>$invoice_data,'guest_details'=>$guest_details]);
    }
}
