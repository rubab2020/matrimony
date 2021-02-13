<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/users', 'UserController');
Route::resource('/setting', 'SettingController');
Route::resource('/galleries', 'GalleryController');
Route::resource('/pages', 'PageController');
Route::post('/pages/upload', 'PageController@upload')->name('pages.upload');
