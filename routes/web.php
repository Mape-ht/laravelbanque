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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',"ClientmoralController@index");
Route::get('/edit/{id}',"ClientmoralController@edit");
Route::get('/show/{id}',"ClientmoralController@show");
Route::get('/create',"ClientmoralController@create");
Route::post('/store',"ClientmoralController@store");
Route::post('/update/{id}',"ClientmoralController@update");
Route::post('/destroy/{id}',"ClientmoralController@destroy");

Route::get('/clientphysique',"ClientphysiqueController@indexClientphysique");
Route::get('/clientphysique/editClientphysique/{id}',"ClientphysiqueController@editClientphysique");
Route::get('/clientphysique/showClientphysique/{id}',"ClientphysiqueController@showClientphysique");
Route::get('/clientphysique/createClientphysique',"ClientphysiqueController@createClientphysique");
Route::post('/clientphysique/storeClientphysique',"ClientphysiqueController@storeClientphysique");
Route::post('/clientphysique/updateClientphysique/{id}',"ClientphysiqueController@updateClientphysique");
Route::post('/clientphysique/destroyClientphysique/{id}',"ClientphysiqueController@destroyClientphysique");

Route::get('/compte',"CompteController@indexCompte");
Route::get('/compte/editCompte/{id}',"CompteController@editCompte");
Route::get('/compte/showCompte/{id}',"CompteController@showCompte");
Route::get('/compte/createCompte',"CompteController@createCompte");
Route::post('/compte/storeCompte',"CompteController@storeCompte");
Route::post('/compte/updateCompte/{id}',"CompteController@updateCompte");
Route::post('/compte/destroyCompte/{id}',"CompteController@destroyCompte");