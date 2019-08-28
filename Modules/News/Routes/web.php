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
Auth::routes(['verify' => true]);
Route::prefix('news')->group(function() {

    Route::get('/', 'NewsController@index');
    Route::get('/create', 'NewsController@create')->name('create');
    Route::post('store','NewsController@store')->name('store');
    Route::get('show','NewsController@show')->name('show');
    Route::post('upload',['as'=>'image.upload','uses'=>'NewsController@uploadImages']);
});
