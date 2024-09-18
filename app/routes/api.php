<?php

use App\Http\Controllers\ApiLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::middleware('auth:sanctum')->group(function(){
    Route::get('post', [PostController::class, 'index']);
});
    

Route::post('login', [ApiLoginController::class, 'login'])->name('api_login');