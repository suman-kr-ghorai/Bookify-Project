<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','home');
Route::view('/register','register');
Route::view('/login','login');
Route::view('/booking','booking');
Route::view('/search','search');
Route::view('/cart','cart-pay');





// ****************REGISTER INSERT API***************************
Route::post('/new-user/register', [RegisterController::class,'register']);

