<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $fruits = array('Am','Kola','Peyara','Jam','Anaros','Jambura','Tomato');
        return view('welcome',compact('fruits'));
    }
}
