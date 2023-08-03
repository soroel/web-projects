<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\register;
use App\Http\Controllers\NotepadController;
use Illuminate\Support\Facades\DB;


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
Route::get('login',[login::class,'userLogin']);
Route::get('register',[register::class,'userRegister']);
Route::get('dashboard',[NotepadController::class,'showDashboard']);
Route::get('dashboard', [NotepadController::class,'store'])->name('store');
Route::post('dashboard',[NotepadController::class,'create'])->name('create');





