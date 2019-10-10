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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'customers'], function () {
    Route::get('/index', 'CustomerController@index')->name('customers.index');
    Route::get('/create', 'CustomerController@create')->name('customers.create');
    Route::post('/a', 'CustomerController@store')->name('customers.store');
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customers.edit');
    Route::post('/update/{id}', 'CustomerController@update')->name('customers.update');
    Route::get('/show{id}', 'CustomerController@show')->name('customers.show');
    Route::get('/delete/{id}', 'CustomerController@delete')->name('customers.delete');
    Route::get('/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');
    Route::get('/search', 'CustomerController@search')->name('customers.search');
});
Route::group(['prefix' => 'cities'], function () {
    Route::get('/', 'CityController@index')->name('cities.index');
    Route::get('/create', 'CityController@create')->name('cities.create');
    Route::post('/store', 'CityController@store')->name('cities.store');
    Route::get('/edit{id}', 'CityController@edit')->name('cities.edit');
    Route::post('/update/{id}', 'CityController@update')->name('cities.update');
    Route::get('/show/{id}', 'CityController@show')->name('cities.show');
    Route::get('/delete/{id}', 'CityController@delete')->name('cities.delete');
    Route::get('/destroy/{id}', 'CityController@destroy')->name('cities.destroy');
    Route::get('/{id}/customers', 'CityController@listCustomers')->name('cities.customers');
});
