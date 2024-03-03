<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth_Controller;

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


Route::get('/register',[Auth_Controller::class,'register_view']);
Route::get('/login',[Auth_Controller::class,'login_view']);

Route::post('/sign-up',[Auth_Controller::class,'sign_up'])->name('sign_up');
Route::post('/sign-in',[Auth_Controller::class,'sign_in'])->name('sign_in');





Route::get('/resume',function(){
    return view('resume');
});