<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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
Route::get('/date', function () {
    $dateTime = now();    
    $formattedDateTime = $dateTime->format('Y-m-d H:i:s');    
    return new Response([
        'date' => $formattedDateTime
    ], Response::HTTP_OK);
});
Route::get('/url', function () {
    $url = url()->full();
    dd($url);
});
Route::get('/salam', function () {
   return response()->file('projet.pdf');
});
Route::get('/header', function () {
    
    $response = response()->json(['message' => 'YASSINE SADQI   ']);

    
    $response->header('X-Test', 'bonjour');

    
    return $response;
});
Route::get('/cookie', function () {
   
    $response = response()->json(['message' => 'yassine sadqi']);

   
    $cookie = cookie('note', 16,10); 

   
    $response->withCookie($cookie);

  
    return $response;
});