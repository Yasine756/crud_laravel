<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
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

Route::get('/',[StagiaireController::class,'Afficher']);
Route::get('/Modifier/{id}',[StagiaireController::class,'Modifier']);
Route::get('/Ajouter',[StagiaireController::class,'Ajouter']);
Route::post('/Ajouter/traitement',[StagiaireController::class,'Ajouter_traitement']);
Route::get('/supprimer/{id}',[StagiaireController::class,'supprimer']);
Route::post('/Modifier/traitement',[StagiaireController::class,'Modifier_Ttraitement']);
