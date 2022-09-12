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

Route::group(['as' => 'admin.', 'prefix' => 'admin/' . admin_route_prefix(), 'middleware' => ['Admin', 'verified', 'CheckPasswordChange']], function () {
    Route::resource('/work-samples', 'WorkSampleController')->except(['show']);
    Route::get('/work-samples/categories', 'WorkSampleController@categories')->name('work-samples.categories.index');
    Route::post('/work-samples/slug', 'WorkSampleController@generate_slug');

    Route::get('/work-samples/technology', 'WorkSampleController@technology')->name('work-samples.technology.index');
    Route::get('/work-samples/technology/create', 'WorkSampleController@technology_create')->name('work-samples.technology.create');
    Route::post('/work-samples/technology/store', 'WorkSampleController@technology_store')->name('work-samples.technology.store');
    Route::get('/work-samples/technology/edit/{technology}', 'WorkSampleController@technology_edit')->name('work-samples.technology.edit');
    Route::post('/work-samples/technology/update/{technology}', 'WorkSampleController@technology_update')->name('work-samples.technology.update');
    Route::delete('/work-samples/technology/destroy/{technology}', 'WorkSampleController@technology_destroy')->name('work-samples.technology.destroy');


});
