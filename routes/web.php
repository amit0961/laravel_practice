<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\ProductController;
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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [ProductController::class, 'index'])->name('product.index');
/*
|--------------------------------------------------------------------------
| Web Routes For Controller 
|--------------------------------------------------------------------------
| Here we use ? sign after parameter that means its optional and 
| function parameter will be null
*/
Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');


Route::get('login', [LoginController::class,'index'])->name('login.index')->middleware('checkUser'); 
Route::post('loginSubmit', [LoginController::class,'loginSubmit'])->name('login.submit'); 

Route::get('users/', [UserController::class, 'index'])->name('user.index');
Route::get('posts/', [ClientController::class, 'getAllpost'])->name('post.getAllPost');
Route::get('posts/{id}', [ClientController::class, 'postByID'])->name('post.postByID');
Route::get('add-post', [ClientController::class, 'addPost'])->name('post.addPost');
Route::get('edit-post', [ClientController::class, 'updatePost'])->name('post.updatePost');
Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->name('post.deletePost');

Route::get('users-pagination',[PaginationController::class, 'allUsers']);



Route::get('fluent/', [FluentController::class, 'index'])->name('fluent.index');