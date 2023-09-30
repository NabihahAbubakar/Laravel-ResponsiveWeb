<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookingform;

class booking extends Controller
{
    public function index(){
        return view('contact');
    }
    public function result(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $bookingform = new Bookingform;
        $bookingform->firstName = $request['firstName'];
        $bookingform->lastName = $request['lastName'];
        $bookingform->phoneNumber = $request['phoneNumber'];
        $bookingform->date = $request['date'];
        $bookingform->appointmentTime = $request['appointmentTime'];
        $bookingform->save();



        return back()->with('success', 'Form submitted successfully!');

    }
    
}
