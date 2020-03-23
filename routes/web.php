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

Route::model('category', 'App\Category');

Route::get('inicio', 'CategoryController@index');
Route::get('/la-empresa', function () {
    return view('about-us');
})->name('about-us');
Route::get('/', 'CategoryController@index')->name('home');
Route::get('categories/{category}/{slug?}', 'CategoryController@show')->name('categories.show');

Route::model('subcategory', 'App\Subcategory');
