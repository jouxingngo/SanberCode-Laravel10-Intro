<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage(){
        return view("register");
    }

    public function registerPostWelcome(Request $request){
        $firstName = $request->input("firstName");
        $lastName = $request->input("lastName");
        $fullName = $firstName." ".$lastName;
        $gender = $request->input("gender");
        $nationality = $request->input("nationality");
        $l_spokens = $request->input("language",[]);
        $bio = $request->input("bio");
        
        return view("welcome", compact("fullName", "gender", "nationality", "l_spokens","bio"));
    }

}
