<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Parameter 1 = URL
//Parameter 2 = Controller
//Parameter 3 = Method
Route::get('/home',[HomeController::class,'home']);

//Jalur Route ke Halaman About
Route::get('/about',[HomeController::class,'about']);

//Jalur Route ke Halaman Contact
Route::get('/contact',[HomeController::class,'contact']);