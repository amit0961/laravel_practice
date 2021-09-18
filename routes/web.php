<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Web Routes For Controller 
|--------------------------------------------------------------------------
| Here we use ? sign after parameter that means its optional and 
| function parameter will be null
*/
Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');



Route::get('users/', [UserController::class, 'index'])->name('user.index');