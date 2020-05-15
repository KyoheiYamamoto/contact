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
Route::get('/', 'ContactController@index')->name('top');   /* 入力ページ */
Route::post('contact/confirm', 'ContactController@confirm') ->name('contact.confirm');   /* 確認ページ */
Route::post('contact/complete', 'ContactController@complete') ->name('contact.complete');   /* 送信完了ページ */

