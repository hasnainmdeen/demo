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
Route::resource('places','PlaceController');

Route::resource('packages','PackageController');

//Route::resource('places','PlaceController');


Route::get('/', function () {
    return view('welcome');
});
