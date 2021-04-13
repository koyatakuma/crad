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

/*Route::get('/', function () {
    return view('welcome');
});*/

//初期表示
Route::get('/','CustomerController@index')->name('index');

//検索処理
Route::post('/search','CustomerController@search')->name('search');

//新規登録画面の表示
Route::get('/create','CustomerController@create')->name('create');

//編集画面の表示
Route::get('/edit/{id}','CustomerController@edit')->name('edit');

//詳細画面の表示
Route::get('/detail/{id}','CustomerController@detail')->name('detail');

//登録処理
Route::post('/store','CustomerController@store')->name('store');

//更新処理
Route::post('/update','CustomerController@update')->name('update');

//削除処理
Route::get('/delete/{id}','CustomerController@delete')->name('delete');