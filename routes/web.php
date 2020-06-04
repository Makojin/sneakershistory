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
Route::group(['prefix' => 'user','middleware'=>'auth'],function() {
    Route::get('mypage', 'user`\ProfileController@add');
    Route::get('profile/create','user\ProfileController@create');
    Route::get('profile/edit','user\ProfileController@edit');
    Route::get('history/create','user\HistoryController@creater');
    Route::post('history/index','user\HistoryController@index');
    Route::post('history/detaile','user\HistoryController@detaile');
    
    
    
    
});
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('history/search','HomeController@search');
Route::get('history/detaile','HomeController@detaile');
Route::get('about','HomeController@about');

