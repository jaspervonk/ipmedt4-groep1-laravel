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

// Route voor de winkel
Route::get('/winkel/{id}', [\App\Http\Controllers\ItemController::class, 'soorten']);
Route::put('/winkel/update/color/{id}', [\App\Http\Controllers\BoekenkastenController::class, 'updateColor']);
Route::post('/winkel/koop/item/{id}', [\App\Http\Controllers\ItemController::class, 'koopItem']);

// Routes voor de boekenkast
Route::get('/boekenkast/{id}', [App\Http\Controllers\BoekenkastenController::class, 'show']);
Route::put('/boekenkast/update/medaille/{id}', [App\Http\Controllers\BoekenkastenController::class, 'updateMedaille']);
Route::put('/boekenkast/update/item/{id}', [App\Http\Controllers\BoekenkastenController::class, 'updateItem']);

// Routes voor de virtuele bibliotheek
Route::get('/bibliotheek', [\App\Http\Controllers\BibliotheekController::class, 'index']);
Route::get('/bibliotheek/details/{id}', [\App\Http\Controllers\BibliotheekController::class, 'show']);
Route::get('/bibliotheek/{genre}', [\App\Http\Controllers\BibliotheekController::class, 'showGenre']);
Route::get('/bibliotheek/choose/genre', [\App\Http\Controllers\BibliotheekController::class, 'chooseGenre']);
Route::post('/bibliotheek/favorite/{id}', [\App\Http\Controllers\BibliotheekController::class, 'addToFavorites']);
Route::delete('/bibliotheek/favorite/delete/{id}', [\App\Http\Controllers\BibliotheekController::class, 'deleteFromFavorites']);

// Routes voor de gebruikers
Route::post('/user/create', [\App\Http\Controllers\UserController::class, 'store']);

// Routes voor de puzzels
Route::get('/puzzel/{id}', [\App\Http\Controllers\PuzzelController::class, 'show']);
Route::get('/medaille/{id}', [\App\Http\Controllers\PuzzelController::class, 'showMedaille']);
Route::post('/verdienmedaille/{id}/{medaille}', [\App\Http\Controllers\PuzzelController::class, 'geefMedaille']);
Route::patch('/puzzelklaar/{id}/{muntjes}', [\App\Http\Controllers\PuzzelController::class, 'geefMuntjes']);

// Routes voor de boekenlijst:
Route::post('/boekenlijst/add/{id}', [\App\Http\Controllers\BibliotheekController::class, 'addToBoekenlijst']);
Route::delete('/boekenlijst/delete/{id}', [\App\Http\Controllers\BibliotheekController::class, 'deleteFromBoekenlijst']);

Route::get('/boekenlijst/{id}', [\App\Http\Controllers\BoekenlijstController::class, 'gekozenBoeken']);
Route::get('/boekenlijst/detail/{id}', [\App\Http\Controllers\BoekenlijstController::class, 'boekDetail']);
Route::get('/hoofdstukken/{id}' , [\App\Http\Controllers\BoekenlijstController::class, 'alleHoofdstukken']);
Route::get('/hoofdstukken/gelezen/{boek}/{id}' , [\App\Http\Controllers\BoekenlijstController::class, 'gelezenHoofdstukken']);

Route::post('/hoofdstukken/gelezen/{boek}/{hoofdstuk}/{id}' , [\App\Http\Controllers\BoekenlijstController::class, 'hoofdstukAfvinken']);
Route::delete('/hoofdstukken/gelezen/{boek}/{hoofdstuk}/{id}' , [\App\Http\Controllers\BoekenlijstController::class, 'hoofdstukVerwijder']);
Route::delete('/boekenlijst/delete/{boek}/{id}', [\App\Http\Controllers\BoekenlijstController::class, 'verwijderBoek']);