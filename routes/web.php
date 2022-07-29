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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('delete/{id}', [HomeController::class, 'Delete']);
Route::post('/edit', [HomeController::class, 'update']);

Route::get('/dashboared', [ChartController::class, 'index'])->name('Dashboared');

Route::get('/HomeM', function () {return view('HomeContent');});
Route::get('/sidebar', function () {return view('sidebar');});
Route::get('/user-registration', function () {return view('UserRegistration');});
Route::post('/userRegister', [AllUserController::class, 'create']);
Route::get('/profile', function () {return view('Profile');});