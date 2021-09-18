<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
|  Routes with where condition
|--------------------------------------------------------------------------
|
Route::get('/users/{name?}', function ($name = null) {
    return 'HI '.$name;
})->where('name','[a-zA-Z]+');

Route::get('product/{id?}', function ($id = null) {
    return 'The Product id is '. $id ;
})->where('id', '[0-9]+');

*/


Route::get('/users/{name?}', function ($name = null) {
    return 'HI '.$name;
});

Route::get('product/{id?}', function ($id = null) {
    return 'The Product id is '. $id ;
});

Route::match(['get', 'post'], '/method', function (Request $request) {
    return 'The requested method is '.$request->method();
});

Route::any('/post', function (Request $request) {
    return 'The request method is '.$request->method() ;
});