<?php

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

Route::get('/', function () {
/*schema:: table('bookings',function($mytable)
{
	$mytable->string('name');
});

$network = new App\booking;

$network->first_name = "mohamed";
$network->last_name = "mohamed";
$network->save();
*/





    return view('welcome');

});


//Route::POST('/insert','Controller@insert');

Route::POST('add/booking','bookingController@store'); /// sf7t add booking , kode php bta3ha gwa booking controller @ al function aly sha8al 3lyha asmha store

//Route::resource('booking','bookingController');

Route::get('master', function () {
    return view('master');
});


Route::get('destroy', function () {
    return view('destroy');
});