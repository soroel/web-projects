<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\register;
use App\Http\Controllers\dashboardController;


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
    return view('login');
});
Route::get('create',function(){ 
    return view('create');
});
Route::post('login',[login::class,'userLogin']);
Route::get('register',[register::class,'userRegister']);
Route::resource('dashboard',dashboardController::class);
Route::get('edit',function(){
    return view('edit');
});





