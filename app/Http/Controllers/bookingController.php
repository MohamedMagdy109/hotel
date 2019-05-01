<?php

namespace App\Http\Controllers;
use App\booking;
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

         $ids = \DB::table('bookings')->insertGetId($data);
           
           /* "your id is "; 
        return $id;
        */
     /*   <script type="text/javascript">
             alert("your id is", return $id);
        </script1>
       */
     //   dd($ids );
       // return $ids;
        //return View::make($id); 
        //return View::make('index')->with('ids',$ids); 
     // return view('master')->with($ids);   //////
      return view('destroy', ['ids'=>$ids]);

         //return view("master", ['students'=>$ids]);
       // return view("master",compact('ids'));

     //  return view('destroy');
    }  
    
    public function getid(){
       return $id;

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)

    {
        
    }
}
