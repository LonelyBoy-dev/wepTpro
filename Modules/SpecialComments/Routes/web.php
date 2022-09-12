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
    Route::resource('/special-comments', 'SpecialCommentsController')->except(['show']);
    Route::get('/work-samples/categories', 'WorkSampleController@categories')->name('work-samples.categories.index');
    Route::post('/work-samples/slug', 'WorkSampleController@generate_slug');

});