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
Route::post('create',function(){ 
    return view('create');
});
Route::get('login',[login::class,'userLogin']);
Route::get('register',[register::class,'userRegister']);
Route::resource('dashboard',dashboardController::class);
Route::get('edit',function(){
    return view('edit');
});
Route::post('register',[register::class,'store'])->name('store');
Route::post('login',[login::class,'userLogin'])->name('userLogin');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
