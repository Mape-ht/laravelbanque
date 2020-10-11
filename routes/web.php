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
Route::get('/editClientphysique/{id}',"ClientphysiqueController@editClientphysique");
Route::get('/showClientphysique/{id}',"ClientphysiqueController@showClientphysique");
Route::get('/createClientphysique',"ClientphysiqueController@createClientphysique");
Route::post('/storeClientphysique',"ClientphysiqueController@storeClientphysique");
Route::post('/updateClientphysique/{id}',"ClientphysiqueController@updateClientphysique");
Route::post('/destroyClientphysique/{id}',"ClientphysiqueController@destroyClientphysique");

Route::get('/compte',"CompteController@indexCompte");
Route::get('/editCompte/{id}',"CompteController@editCompte");
Route::get('/showCompte/{id}',"CompteController@showCompte");
Route::get('/createCompte',"CompteController@createCompte");
Route::post('/storeCompte',"CompteController@storeCompte");
Route::post('/updateCompte/{id}',"CompteController@updateCompte");
Route::post('/destroyCompte/{id}',"CompteController@destroyCompte");