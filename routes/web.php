<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewLoaderController;

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

// these routes are use to load the blades
Route::get('/', [ViewLoaderController::class, 'home_view']);
Route::get('/register', [ViewLoaderController::class, 'register_view']);
Route::get('/login', [ViewLoaderController::class, 'login_view']);
Route::get('/resume', [ViewLoaderController::class, 'resume_view']);

// these routes has functionality
Route::post('/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');
Route::post('/sign-in', [AuthController::class, 'sign_in'])->name('sign_in');