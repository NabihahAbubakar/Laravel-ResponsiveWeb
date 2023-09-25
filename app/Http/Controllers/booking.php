<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking extends Controller
{
    public function index(){
        return view('contact');
    }
    public function result(Request $request){
        $request->validate(
            [
              'firstname'=>'required',
              'lastName'=>'required',
              'phoneNumber'=>'required',
              'date'=>'required',
              'appointmentTime'=>'required'
            ]
            );
        echo "<pre>";
        print_r($request->all());
    }
}
