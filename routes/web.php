<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;




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

Route::view('/lay','layout.layout');
Route::view('/','pages/home');
Route::view('/contact','pages/contact');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/profil',UserController::class);
Route::resource('/offre',CompanyController::class);