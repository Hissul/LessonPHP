<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('main', ['phone' => config('top.phone')]);
})->name('main');


Route::get('/about', function () {
    return view('about', ['phone' => config('top.phone')]);
})->middleware('auth')->name('about');


Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');

Route::post('/registration', 
    [RegistrationController::class, 'store'])->name('registration.store');



Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', 
    [LoginController::class, 'post'])->name('login.post');
