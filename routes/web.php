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

Route::group([
    'prefix' => 'places',
],
    function () {
        Route::get('/', "UserController@index")->name('places');
        Route::get('create', "UserController@createPlace")->name('createPlace');
        Route::post('create', "UserController@getCreateForm")->name('uploadFormCreatePlace');
        Route::get('{id}/photos/add', 'PhotoController@selectPhotosId')->name('selectPhotoById');
        Route::post('{id}/photos/add', 'PhotoController@addPhotoId')->name('uploadFormAddPhotoId');
        Route::post('photos/add', 'UserController@addPhotos')->name('addPhotos')->middleware('testExistPlace');
        Route::get('{id}', "UserController@place")->name('aboutAsPlace');
    });

