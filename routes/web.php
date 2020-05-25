<?php

use Illuminate\Support\Facades\Route;

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

//LaravelTOPページ
Route::get('/', function () {
    return view('welcome');
});

//図書管理システムログイン後画面
Route::get('/after_login_top', function () {
    return view('after_login_top');
});

//資料検索
Route::get('/document_search', function () {
    return view('document_search');
});
Route::post('/document_search_result','RegisterCatalogController@find_document');

////資料検索結果
Route::get('/document_search_result', function () {
    return view('document_search_result');
});

//資料変更
Route::get('/document_change','RegisterCatalogController@document_change');
Route::post('/document_change','RegisterCatalogController@document_change');
Route::post('/document_change_confirming','RegisterCatalogController@edit_document_check');

////資料変更確認
Route::get('/document_change_confirming', function () {
    return view('document_change_confirming');
});

////資料変更完了
Route::get('/document_change_complete', function () {
    return view('document_change_complete');
});

Route::post('/document_change_complete','RegisterCatalogController@document_change_complete');
