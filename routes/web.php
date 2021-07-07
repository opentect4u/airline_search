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

Route::post('/passengerDetails',[App\Http\Controllers\PassengerDetailsController::class,'PassengerDetails'])->name('passengerDetails');
// Route::get('/flightDetails',[App\Http\Controllers\FlightsController::class,'FlightDetails'])->name('flightDetails');
// Route::get('/passengerDetails',[App\Http\Controllers\FlightsController::class,'PassengerDetails'])->name('passengerDetails');
Route::post('/showpayment',[App\Http\Controllers\PaymentController::class,'ShowPayment'])->name('showpayment');
Route::post('/paymentcredit',[App\Http\Controllers\PaymentController::class,'PaymentCredit'])->name('paymentcredit');

Route::get('/confirmBooking',[App\Http\Controllers\FlightsController::class,'ConfirmBooking'])->name('confirmBooking');



            // Multi City
Route::get('/multicity',[App\Http\Controllers\multicity\HomeController::class,'Index'])->name('multicityindex');
