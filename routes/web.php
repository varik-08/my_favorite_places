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

Route::get('/places', "UserController@index");
Route::get('/places/create', "UserController@createPlace");
Route::post('/places/create', "UserController@getCreateForm");
Route::get('/places/{id}/photos/add','UserController@addPhotosIdGet');
Route::post('/places/{id}/photos/add','UserController@addPhotosIdPost');
Route::post('/places/photos/add','UserController@addPhotos');
Route::get('/places/{id}', "UserController@place");
