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

Route::get('/admin', 'AdminController@index');

/*Route::get('/pages/admin/manage/places', 'AdminPlaceController@index');

Route::get('/pages/admin/manage/addplaces', 'AdminPlaceController@create')->name('addplaces');
*/

//Route::get('AdminPlaces', 'AdminPlaceController@index');
//Route::get('AdminPlaces/create', 'AdminPlaceController@create');
//Route::post('AdminPlaces', 'AdminPlaceController@store');
//Route::get('AdminPlaces/{place->idPlace}/edit', 'AdminPlaceController@edit')->name('AdminPlaces.edit');

Route::resource('admin/places', 'AdminPlaceController');

Route::resource('admin/users', 'AdminUsersController');
Route::get('/admin/rang', 'AdminUsersController@indexRang')->name('indexRang');
Route::get('/admin/userNotValid', 'AdminUsersController@indexNotValid')->name('indexNotValid');
Route::get('/admin/{id}', 'AdminUsersController@valider')->name('validerUser');

Route::resource('user', 'UserController');