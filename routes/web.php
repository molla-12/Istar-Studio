<?php

use App\Http\Controllers\AllUserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomeContent');
});

Auth::routes();
Route::resource('home', HomeController::class);
Route::resource('Dashboared', ChartController::class);
Route::resource('userRegister', AllUserController::class);

Route::get('/HomeM', function () {return view('HomeContent');});
Route::get('/sidebar', function () {return view('sidebar');});
Route::get('/user-registration', function () {return view('UserRegistration');});
Route::get('/profile', function () {return view('Profile');});