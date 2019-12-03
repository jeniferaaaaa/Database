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

//フロント----------------------------------------------------------------
Route::get('/', 'TopController');
Route::get('/form', function(){
    return view('form.form');
});
Route::post('/form/confirm','Form\ConfirmController');
Route::post('/form/confirm/done','Form\DoneController');

//管理者側--------------------------------------------------------------------

Auth::routes();

Route::get('reset_pass', function (){
    return view ('auth.reset_pass.reset');
});
Route::post('reset_pass/done','Arbi\ResetController');

Route::middleware(['auth'])->group(function () {
    //メニュー画面表示
    Route::get('/menu', 'Arbi\MenuController');
    //基本情報編集
    Route::get('/basic', 'Arbi\basic\EditController');
    Route::post('/basic/confirm', 'Arbi\basic\ConfirmController');
    Route::post('/basic/confirm/done', 'Arbi\basic\DoneController');
    //表示項目設定
    Route::get('/item', 'Arbi\item\EditController');
    Route::post('/item/confirm', 'Arbi\item\ConfirmController');
    Route::post('/item/confirm/done', 'Arbi\item\DoneController');
    //デザイン設定
    Route::get('/design', 'Arbi\design\EditController');
    Route::post('/design/confirm', 'Arbi\design\ConfirmController');
    Route::post('/design/confirm/done', 'Arbi\design\DoneController');
    //TOPページ編集
    Route::get('/top', 'Arbi\top\EditController');
    Route::post('/top/confirm', 'Arbi\top\ConfirmController');
    Route::post('/top/confirm/done', 'Arbi\top\DoneController');
    //カテゴリ編集
    Route::get('/category/list', 'Arbi\category\ListController');
    Route::get('/category/edit', 'Arbi\category\EditController');
    Route::post('/category/edit/confirm', 'Arbi\category\ConfirmController');
    Route::post('/category/edit/confirm/done', 'Arbi\category\DoneController');
    Route::post('/category/list/delete','Arbi\category\DeleteController');
    
    //投稿内容編集
    Route::get('/post/list', 'Arbi\post\ListController');
    Route::post('/post/edit', 'Arbi\post\EditController');
    Route::post('/post/list/delete','Arbi\post\DeleteController');
    Route::post('/post/edit/confirm', 'Arbi\post\ConfirmController');
    Route::post('/post/edit/confirm/done', 'Arbi\post\DoneController');
    
    //パスワード変更
    Route::get('/change_pass', 'Arbi\pass\EditController');
    Route::post('/change_pass/done', 'Arbi\pass\DoneController');
    
});

//各フロント画面--------------------------------------------------------------------

