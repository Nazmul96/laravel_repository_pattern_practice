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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers'],function(){

    Route::get('category-list','CategoryController@index')->name('category_list');
    Route::get('category-create','CategoryController@create')->name('category_create');
    Route::post('category-store','CategoryController@store')->name('category_store');
    Route::get('category-edit/{id}','CategoryController@edit')->name('category_edit');
    Route::post('category-update','CategoryController@update')->name('category_update');
    Route::get('category-delete/{id}','CategoryController@delete')->name('category_delete'); 
});