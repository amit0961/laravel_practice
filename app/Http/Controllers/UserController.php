<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        // return $request->method();      //To get method name 
        // return $request->path();         // To get path
        // return $request->url();         // To get url address
        return $request->fullUrl();         // To get Full url address

        /*
        $name = 'Amit';
        $details = array(
            "name" => "Amit Saha",
            "email"=> "amitsaha5bd@gmail.com",
            "phone"=> "8801775239873"
        );

        // dd($details);

        return view('users', compact('name','details')); */
    }
}
