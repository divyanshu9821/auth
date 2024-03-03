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

Route::get('/sign-up',[Auth_Controller::class,'sign_up']);
Route::get('/login',[Auth_Controller::class,'login']);
