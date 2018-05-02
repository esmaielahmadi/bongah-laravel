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
Auth::routes();

Route::get('/', function () {
    return view('pages.home');
});
Route::resource('banners','BannersController');
Route::post('banners.save','BannersController@store');
Route::get('{zip}/{street}','BannersController@show');
Route::post('{zip}/{street}/photos', 'BannersController@addPhotos')->name('addPhotos');
Route::get('/home', 'HomeController@index')->name('home');

