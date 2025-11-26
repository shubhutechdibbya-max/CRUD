<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\auth\AuthController;



use App\Http\Controllers\BlogController;

Route::view('/','welcome');

Route::resource('blogs', BlogController::class);
// Route::resource('blogs', BlogController::class)
//     ->only(['index', 'show']);  // public view routes

// Route::resource('blogs', BlogController::class)
//     ->except(['index', 'show'])
//     ->middleware('auth');      // protected routes

Route::get('/contact',[BlogController::class,'contact']);

Route::get('send-email',[ContactController::class,'sendEmail']);
Route::post('send-email',[ContactController::class,'sendEmail']);

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login']);


Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);
