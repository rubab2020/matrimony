<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShareProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Helpers\ConfigHelper;

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
    $ages = range(18,80);
    $ages = array_combine($ages,$ages);

    $religions = ConfigHelper::getReligionList();
    return view('website.welcome', compact('ages', 'religions'));
});

Route::get('/setting', function () {
    return view('dashboard');
});

Route::get('/search', 'SearchController@search');

Route::get('/profile', function () {
    return view('website.profile.profile');
});
Route::get('/shareprofile/share', 'ShareProfileController@share')->name('shareprofile.share');

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

// otp
Route::post('/otp/send', 'OTPController@sendOTP')->name('otp.send');
Route::post('/otp/resend', 'OTPController@resendOTP')->name('otp.resend');
Route::post('/otp/verify', 'OTPController@verifyOTP')->name('otp.verify');

// message
Route::get('/message','MessageController@index')->name('message');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message/id');
Route::post('message/send', 'MessageController@sendMessage');

Route::group(['middleware' => ['auth:customer']], function() {
    Route::get('home', function () {
        return view('website.home');
    })->name('home');

    Route::get('profile/create', 'ProfileController@create');
    Route::post('profile/save', 'ProfileController@store');
    Route::get('profile/edit', 'ProfileController@edit');
    Route::post('profile/update', 'ProfileController@update');
});
