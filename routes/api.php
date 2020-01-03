<?php

use Illuminate\Http\Request;

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
Route::get('/enseignants','EnseignantController@index'); //recuperer les infos de la BDD
Route::post('/save','EnseignantController@store');  //sauvegarder les infos dans la BDD
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
