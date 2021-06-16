<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//ROUTES VOOR VIRTUELE BIBLIOTHEEK:
Route::get('/bibliotheek', [\App\Http\Controllers\BibliotheekController::class, 'index']);
Route::get('/bibliotheek/details/{id}', [\App\Http\Controllers\BibliotheekController::class, 'show']);
Route::get('/bibliotheek/{genre}', [\App\Http\Controllers\BibliotheekController::class, 'showGenre']);
Route::get('/bibliotheek/choose/genre', [\App\Http\Controllers\BibliotheekController::class, 'chooseGenre']);
Route::post('/bibliotheek/favorite/{id}', [\App\Http\Controllers\BibliotheekController::class, 'addToFavorites']);
Route::delete('/bibliotheek/favorite/{id}', [\App\Http\Controllers\BibliotheekController::class, 'deleteFromFavorites']);

Route::post('/user/create', [\App\Http\Controllers\UserController::class, 'store']);