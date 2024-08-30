<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main', ['phone' => config('top.phone')]);
});

// Route::get('/', function () {
//     return view('welcome');
// });
