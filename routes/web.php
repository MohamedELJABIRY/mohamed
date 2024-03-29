<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\OffreCondidatController;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;

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
Route::post('/recherche', 'App\Http\Controllers\CompanyController@search')->name('recherche');

Route::resource('/condidat',CondidatController::class);
Route::post('/searchC', 'App\Http\Controllers\CondidatController@searchC')->name('searchC');

Route::resource('/offre_condidat',OffreCondidatController::class);
Route::post('store',"App\Http\Controllers\OffreCondidatController@store")->name('store');
Route::delete('destroy',"App\Http\Controllers\OffreCondidatController@destroy")->name('destroy');

Route::get('/nbrPostuler/{id}',"App\Http\Controllers\CompanyController@nbrPostuler")->name('nbrPostuler');

Route::get('/test/{id}',"App\Http\Controllers\TestController@index")->name('test')->middleware('offre');/**/
Route::get('/count',"App\Http\Controllers\UserController@Count")->name('count');

Route::post('/search', 'App\Http\Controllers\UserController@search')->name('search');
Route::view('/affiche','pages/affiche');

// Route::get('/sear',"App\Http\Controllers\TestController@search")->name('sear');
