<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareProfileController;
use App\Http\Controllers\MessageController;

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

Route::get('/', function () {
    return view('website.home');
});

Route::get('/home', function () {
    return view('website.home');
});

Route::get('/setting', function () {
    return view('dashboard');
});

Route::get('/search', function () {
    return view('website.search');
});

Route::get('/profile', function () {
    return view('website.profile.profile');
});
Route::get('/shareprofile/share','App\Http\Controllers\ShareProfileController@share')->name('shareprofile.share');
Route::get('profile/create', 'ProfileController@create');
Route::post('profile/save', 'ProfileController@store');


Route::get('/checkout', function () {
    return view('website.checkout');
});


// auth
Route::get('/register', function () {
    return view('website..auth.register');
});
Route::post('/register', 'Auth\RegisterController@register')->name('customer.register');
Route::get('/login', function () {
    return view('website.auth.login');
});
Route::post('/login', 'Auth\LoginController@login')->name('customer.login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/verify/phone', 'OTPController@sendOTP');

Route::post('/otp/send', 'OTPController@sendOTP')->name('otp.send');
Route::post('/otp/resend', 'OTPController@resendOTP')->name('otp.resend');
Route::post('/otp/verify', 'OTPController@verifyOTP')->name('otp.verify');
<<<<<<< HEAD
Route::get('/message','MessageController@index')->name('message');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message/id');
Route::post('send_message', 'MessageController@sendMessage');
=======

Route::group(['prefix' => 'customer', 'middleware' => ['auth:customer']], function() {
	Route::get('dashboard', function() {
		return view('website.dashboard');
	})->name('customer.dashboard');
});
>>>>>>> 9d57137504c8065dc288842ab86a055ab3225a8c

