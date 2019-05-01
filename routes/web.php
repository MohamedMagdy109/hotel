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

Route::POST('add/booking','bookingController@store'); //DE EL METHOD ELY MWGODA F SAF7A HTML ,BOOKING CONTROOLER DE SAF7A CONTROLLER W STORE DE ASM FUNCTION
Route::POST('destroy/booking','bookingController@destroy');
Route::POST('contact/booking','bookingController@contact');

//Route::resource('booking','bookingController');

Route::get('master', function () {
    return view('master'); // dh master saf7a html
});


Route::get('/fun_pdf', 'bookingController@fun_pdf');