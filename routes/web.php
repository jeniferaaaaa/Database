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

//共通フロント----------------------------------------------------------------
Route::get('/', 'TopController@incdex');
Route::get('/form', function(){
    return view('form.form');
});
Route::post('/form/confirm','Form\ConfirmController@index');
Route::post('/form/confirm/done','Form\DoneController@index');

//管理者側--------------------------------------------------------------------

Auth::routes();

Route::get('/menu', 'Arbu\MenuController@index');
//基本情報編集
Route::get('/basic', 'Arbi\basic\EditController@index');
Route::post('/basic/confirm', 'Arbi\basic\ConfirmController@index');
Route::post('/basic/confirm/done', 'Arbi\basic\DoneController@index');
//表示項目設定
Route::get('/item', 'Arbi\item\EditController@index');
Route::post('/item/confirm', 'Arbi\item\ConfirmController@index');
Route::post('/item/confirm/done', 'Arbi\item\DoneController@index');
//デザイン設定

//TOPページ編集

//カテゴリ編集

//投稿内容編集

// fukase_test
// site_front
Route::get('list', 'SiteFrontController@list');

