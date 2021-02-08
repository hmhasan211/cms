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



Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');


Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
});

Route::group(['as'=>'service.','prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('service','ServiceController@index')->name('index');
    Route::get('service/create','ServiceController@create')->name('create');
    Route::post('service/store','ServiceController@store')->name('store');
    Route::get('service/edit/{id}','ServiceController@edit')->name('edit');
    Route::get('service/onstatus{id}','ServiceController@onlineStatus')->name('online');
    Route::get('service/offstatus{id}','ServiceController@offlineStatus')->name('offline');
    Route::post('service/update/{id}','ServiceController@update')->name('update');
    Route::post('service/destroy/{id}','ServiceController@destroy')->name('destroy');
});
