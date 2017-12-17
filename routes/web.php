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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pages/admin/admindashboard', 'AdminController@index');

/*Route::get('/pages/admin/manage/places', 'AdminPlaceController@index');

Route::get('/pages/admin/manage/addplaces', 'AdminPlaceController@create')->name('addplaces');
*/

Route::get('AdminPlaces', 'AdminPlaceController@index');
Route::get('AdminPlaces/create', 'AdminPlaceController@create');
Route::post('AdminPlaces', 'AdminPlaceController@store');