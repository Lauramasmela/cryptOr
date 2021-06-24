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



Route::get('/', '\App\Http\Controllers\MonnaieController@index')->name('page.index');
Route::get('/create', '\App\Http\Controllers\MonnaieController@create')->name('page.create');
Route::post('/', '\App\Http\Controllers\MonnaieController@store')->name('page.store');
Route::delete('/{id}', '\App\Http\Controllers\MonnaieController@destroy')->name('page.destroy');
Route::get('/create/{id}', '\App\Http\Controllers\MonnaieController@edit')->name('page.edit');
Route::put('/create/{id}', '\App\Http\Controllers\MonnaieController@update')->name('page.update');



