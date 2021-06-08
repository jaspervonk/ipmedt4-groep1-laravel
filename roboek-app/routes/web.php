<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ROUTES VOOR VIRTUELE BIBLIOTHEEK:
Route::get('/bibliotheek', [\App\Http\Controllers\BibliotheekController::class, 'index']);
Route::get('/bibliotheek/details/{id}', [\App\Http\Controllers\BibliotheekController::class, 'show']);
Route::get('/bibliotheek/{genre}', [\App\Http\Controllers\BibliotheekController::class, 'showGenre']);