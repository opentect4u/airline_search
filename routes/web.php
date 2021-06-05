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
Route::post('/searchairport',[App\Http\Controllers\HomeController::class,'SearchAirport'])->name('searchairport');


Route::get('/flights',[App\Http\Controllers\FlightsController::class,'Search'])->name('flights');
Route::get('/flightDetails',[App\Http\Controllers\FlightsController::class,'FlightDetails'])->name('flightDetails');
Route::get('/passengerDetails',[App\Http\Controllers\FlightsController::class,'PassengerDetails'])->name('passengerDetails');
Route::get('/payment',[App\Http\Controllers\FlightsController::class,'Payment'])->name('payment');
Route::get('/confirmBooking',[App\Http\Controllers\FlightsController::class,'ConfirmBooking'])->name('confirmBooking');