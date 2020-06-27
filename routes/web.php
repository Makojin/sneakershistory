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
    return view('home');
});
Route::group(['prefix' => 'user','middleware'=>'auth'],function() {
    Route::get('mypage', 'user\ProfileController@add');
    Route::get('profile/create','user\ProfileController@create');
    Route::get('profile/edit','user\ProfileController@edit');
    Route::get('history/create','user\HistoryController@create');
    Route::post('history/create','user\HistoryController@create');
    Route::get('history/index','user\HistoryController@index');
    Route::get('history/detaile','user\HistoryController@detaile');
    Route::get('history/edit','user\HistoryController@edit');
    Route::get('history/contact','HomeController@contact');
    Route::get('history/about','HomeController@about');
    Route::get('history/home','HomeController@index');
    
    
    
    
});
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('history/search','HomeController@search');
Route::get('history/detaile','HomeController@detaile');
Route::get('about','HomeController@about');
Route::get('contact','HomeController@contact');
