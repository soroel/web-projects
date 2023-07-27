<?php

use App\Http\Controllers\registration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\martial;
use App\Http\Controllers\aboutus;
use App\Http\Controllers\accomplishment;
use App\Http\Controllers\classes;
use App\Http\Controllers\contactus;
use App\Http\Controllers\home;
use App\Http\Controllers\login;
use App\Http\Controllers\news;
use App\Http\Controllers\office;
use App\Http\Controllers\staff;



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
    return view('pages.index');
});
Route::get('register',[registration::class,'registerUser']);
Route::get('/pages.about',[aboutus::class,'showAbout']);
Route::get('/pages.accomplishment',[accomplishment::class,'registerUser']);
Route::get('/pages.classes',[classes::class,'class']);
Route::get('/pages.contact',[contactus::class,'showContact']);
Route::get('/pages.home',[home::class,'showHome']);
Route::get('/pages.login',[login::class,'userLogin']);
Route::get('/pages.martial',[martial::class,'showMartial']);
Route::get('/pages.news',[news::class,'showNews']);
Route::get('/pages.office',[office::class,'showOffice']);
Route::get('/pages.staff',[staff::class,'showStaff']);