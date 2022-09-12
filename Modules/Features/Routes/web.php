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
    Route::resource('/features', 'FeaturesController')->except(['show']);
    Route::get('/features/categories', 'FeaturesController@categories')->name('features.categories.index');
    Route::post('/features/slug', 'FeaturesController@generate_slug');
    Route::post('features/sort','FeaturesController@sort')->name('features.sort');
});
