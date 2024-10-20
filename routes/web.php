<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','home');
Route::view('/register','register');
Route::view('/login','login');
Route::view('/booking','booking');
Route::view('/search','search');
Route::view('/cart','cart-pay');


