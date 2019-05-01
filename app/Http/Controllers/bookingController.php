<?php

namespace App\Http\Controllers;

use App\booking;

use App\contact;

use Illuminate\Http\Request;


use DB; 

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req)
    {


          $firstName = $req->input('firstName');
          $lastName = $req->input('lastName');
          $email = $req->input('email');
          $roomType = $req->input('roomType');
          $checkIntime = $req->input('checkIntime');
          $timeIn = $req->input('timeIn');
          $checkOuttime = $req->input('checkOuttime');
          $timeOut = $req->input('timeOut');
          $numOfguests = $req->input('numOfguests');
          
     
          $data = array(

            "firstName"=>$firstName,
            "lastName"=>$lastName,
            "email"=>$email,
            "roomType"=>$roomType,
            "checkIntime"=>$checkIntime,
            "timeIn"=>$timeIn,
            "checkOuttime"=>$checkOuttime,
            "timeOut"=>$timeOut,
            "numOfguests"=>$numOfguests,
          );

         $id = 
         \DB::table('bookings')->insertGetId($data);
         return $id;
       }
       public function contact(Request $req)
        {


          $FirstName = $req->input('FirstName');
          $LastName = $req->input('LastName');
          $phone = $req->input('phone');
          $Email = $req->input('Email');
          $Message = $req->input('Message');
          
          $data = array(

            "FirstName"=>$FirstName,
            "LastName"=>$LastName,
            "phone"=>$phone,
            "Email"=>$Email,
            "Message"=>$Message,
          );
          \DB::table('contact')->insertGetId($data);
        }


          

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
    {
     DB::table('bookings')
     ->where('id',request('id'))
     ->where('email',request('email'))
     ->delete();
      return back();
       /*
      if (id::where('id', '=', Input::get('id'))->exists()) 
      {
        DB::table('bookings')->where($id, '=', 'id')->delete(); 
         
       }
       */
    }
  
}