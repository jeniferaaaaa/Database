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
Route::get('/form', function(){
    return view('form.form');
});
Route::post('/form/confirm','Form\ConfirmController@index');
Route::post('/form/confirm/done','Form\DoneController@index');

Auth::routes();

Route::get('/menu', function () {
    return view('arbi.menu');
});
Route::get('/basic', 'Arbi\basic\EditController@index');
Route::post('/basic/confirm', 'Arbi\basic\ConfirmController@index');
Route::post('/basic/confirm/done', 'Arbi\basic\DoneController@index');



// fukase_test
// site_front
Route::get('list', 'SiteFrontController@list');

