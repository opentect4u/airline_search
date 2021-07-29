<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test',[App\Http\Controllers\TestController::class,'Test']);


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\HomeController::class,'ShowIndex']);
Route::get('/index',[App\Http\Controllers\HomeController::class,'ShowIndex'])->name('index');
Route::get('/searchairport',[App\Http\Controllers\HomeController::class,'SearchAirport'])->name('searchairport');
// Route::post('/searchairport',[App\Http\Controllers\HomeController::class,'SearchAirport'])->name('searchairport');


// Route::get('/flights',[App\Http\Controllers\FlightsController::class,'Search'])->name('flights');
Route::get('/flights',[App\Http\Controllers\FlightController::class,'Search'])->name('flights');
// Route::post('/flightDetails',[App\Http\Controllers\FlightDetailsController::class,'FlightDetails'])->name('flightDetails');
Route::post('/flightDetails',[App\Http\Controllers\FlightController::class,'FlightDetails'])->name('flightDetails');

Route::post('/BaggageCancelRuleajax',[App\Http\Controllers\FlightDetailsController::class,'FlightDetails'])->name('BaggageCancelRuleajax');
Route::post('/BaggageCancelRuleReturnajax',[App\Http\Controllers\FlightDetailsController::class,'FlightDetailsReturn'])->name('BaggageCancelRuleReturnajax');

Route::post('/passengerDetails',[App\Http\Controllers\PassengerDetailsController::class,'PassengerDetails'])->name('passengerDetails');
// Route::get('/flightDetails',[App\Http\Controllers\FlightsController::class,'FlightDetails'])->name('flightDetails');
// Route::get('/passengerDetails',[App\Http\Controllers\FlightsController::class,'PassengerDetails'])->name('passengerDetails');
Route::post('/showpayment',[App\Http\Controllers\PaymentController::class,'ShowPayment'])->name('showpayment');
Route::post('/paymentcredit',[App\Http\Controllers\PaymentController::class,'PaymentCredit'])->name('paymentcredit');

Route::get('/confirmBooking',[App\Http\Controllers\FlightsController::class,'ConfirmBooking'])->name('confirmBooking');


                // round trip
Route::post('/roundflightDetails',[App\Http\Controllers\RoundFlightController::class,'FlightDetails'])->name('roundflightDetails');
Route::post('/roundpaymentcredit',[App\Http\Controllers\RoundPaymentController::class,'PaymentCredit'])->name('roundpaymentcredit');
Route::post('/roundBaggageCancelRuleReturnajax',[App\Http\Controllers\RoundFlightController::class,'FlightDetailsAJax'])->name('roundBaggageCancelRuleReturnajax');

            // Multi City
Route::get('/multicity',[App\Http\Controllers\multicity\HomeController::class,'Index'])->name('multicityindex');
Route::get('/multicityflight',[App\Http\Controllers\multicity\FlightController::class,'Search'])->name('multicityflight');
Route::post('/multicityflightdetails',[App\Http\Controllers\multicity\FlightDetailsController::class,'FlightDetails'])->name('multicityflightdetails');
Route::post('/multicitypassengerDetails',[App\Http\Controllers\multicity\PassengerDetailsController::class,'PassengerDetails'])->name('multicitypassengerDetails');

Route::post('/multicityshowpayment',[App\Http\Controllers\multicity\PaymentController::class,'ShowPayment'])->name('multicityshowpayment');
Route::post('/multicitypaymentcredit',[App\Http\Controllers\multicity\PaymentController::class,'PaymentCredit'])->name('multicitypaymentcredit');
