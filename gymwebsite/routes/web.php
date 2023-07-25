<?php

use App\Http\Controllers\users;
use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//Route::view('home','home');
//Route::get('home',[users::class,'showHomePage']);
Route::view('register','register');
Route::post('register',[register::class,'registerUser']);

