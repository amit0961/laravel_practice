<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Flent String</h1>';

        $slice = Str::of('Welcome to the Laravel Practise Course')->after('Welcome to');
        echo 'After =>'.$slice.'<br>';

        $slice = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo 'After_last =>'.$slice.'<br>';

        $string = Str::of('Taylor')->append(' Otwell');
        echo 'Append =>'.$string.'<br>';
    }
}
