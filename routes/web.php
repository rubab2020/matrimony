<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareProfileController;

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

Route::get('/login', function () {
    return view('website.login');
});

Route::get('/register', function () {
    return view('website.register');
});

Route::get('/setting', function () {
    return view('dashboard');
});

Route::get('/search', function () {
    return view('website.search');
});

Route::get('/profile', function () {
    return view('website.profile');
});
Route::get('/shareprofile/share','App\Http\Controllers\ShareProfileController@share')->name('shareprofile.share');

Route::get('profile-form', function () {
    return view('website.customer.profile-form');
});

Route::get('/checkout', function () {
    return view('website.checkout');
});

Route::get('/verify/phone', 'OTPController@sendOTP');

Route::post('/register', 'Auth\RegisterController@register')->name('customer.register');

Route::post('/otp/send', 'OTPController@sendOTP')->name('otp.send');
Route::post('/otp/resend', 'OTPController@resendOTP')->name('otp.resend');
Route::post('/otp/verify', 'OTPController@verifyOTP')->name('otp.verify');

