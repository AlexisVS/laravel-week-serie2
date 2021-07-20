<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\CouleurController;
use App\Http\Controllers\OutilsScolaire;
use App\Http\Controllers\PlatController;
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

Route::get('/nom', function () {
    return view('pages.nom');
});

Route::get('/prenom', function () {
    return view('pages.prenom');
});

Route::get('/age', function () {
    return view('pages.age');
});

Route::get('/chat', [ChatController::class, "index"]);

Route::get('/couleur', [CouleurController::class, "index"]);

Route::get('/plat', [PlatController::class, "index"]);

Route::get('/outilsScolaire', [OutilsScolaire::class, "index"]);
