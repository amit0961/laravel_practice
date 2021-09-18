<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Amit';
        $details = array(
            "name" => "Amit Saha",
            "email"=> "amitsaha5bd@gmail.com",
            "phone"=> "8801775239873"
        );

        // dd($details);

        return view('users', compact('name','details'));
    }
}
