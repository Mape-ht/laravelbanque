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
