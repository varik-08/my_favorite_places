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
        Route::get('rating','OpinionController@rating')->name('allRating');
        Route::get('create', 'UserController@createPlace')->name('createPlace');
        Route::post('create', 'UserController@getCreateForm')->name('uploadFormCreatePlace');
        Route::get('{id}/photos/add', 'PhotoController@selectPhotosId')->name('selectPhotoById');
        Route::post('{id}/photos/add', 'PhotoController@addPhotoId')->name('uploadFormAddPhotoId');
        Route::get('photos/add', 'PhotoController@addPhotos')->name('addPhotos')->middleware('testExistPlace');
        Route::get('{id}', 'UserController@place')->name('aboutAsPlace');
    });
Route::redirect('/', '/places');
Route::get('addOpinion/{idPlace}/{id}/{typeEssence}/{typeOpinion}','OpinionController@addOpinion')->name('addOpinion');

Route::get('/filesplace/{id}/download','FilesplaceController@download')->name('downloadPhoto');
Route::resource('filesplace','FilesplaceController')->only(['destroy']);

Route::get('/setLang/{id}','UserController@setLang')->name('setLang');

