<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;


Route::get('/', function () {
    return view('main', ['phone' => config('top.phone')]);
})->name('main');


Route::get('/about', function () {
    return view('about', ['phone' => config('top.phone')]);
})->name('about');


Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');

Route::post('/registration', 
    [RegistrationController::class, 'store'])->name('registration.store');



Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', 
    [LoginController::class, 'post'])->name('login.post');


Route::get('/reset', [ResetController::class, 'index'])->name('reset');

Route::post('/reset', 
    [ResetController::class, 'post'])->name('reset.post');
