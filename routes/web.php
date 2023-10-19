<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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



Route::get('user.login',[AuthController::class,'login'])->name('login');
Route::post('user.login',[AuthController::class,'loginPost'])->name('login.post');
Route::post('user.logout',[AuthController::class,'logout'])->name('logout');

Route::post('user.register',[AuthController::class,'register'])->name('register');


Route::get('home',[UserController::class,'index'])->name('home');
