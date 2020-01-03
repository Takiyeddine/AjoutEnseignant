<?php

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
Route::get('/ajout','AfficherEnsController@afficher');
Route::get('/ajouter_enseignant', function () {
    return view('ajouter_enseignant');
});
Route::post('/ajout', function () {
	$enseignant=new App\enseignants;
	$enseignant->nom=request('nom');
	$enseignant->prenom=request('prenom');
	$enseignant->email=request('email');
	$enseignant->date_naissance=request('date_naissance');
	$enseignant->specialite=request('specialite');
	$enseignant->licence=request('licence');
	$enseignant->master=request('master');
	$enseignant->doctorat=request('doctorat');
	$enseignant->experience=request('experience');
	$enseignant->save();
    return view('ajout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('importer_file', 'FileController@create');
Route::post('importer_file', 'FileController@store');
Route::get('/consulter_file', function () {

    return view('consulter_file');
});

//Route::post('/importer_file',function () {
            
          //  $module=new App\modules;
        	///$module->file=request('file');
        //	$module->nom=request('nom_module'); 
        	//$module->id_module=request('1');
	      //  $module->save();
	        //return'le ficher a ete bien sauvegardé';
//});



