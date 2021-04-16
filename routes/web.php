<?php

use Illuminate\Support\Facades\Route;

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
    $ages = range(18, 80);
    $ages = array_combine($ages, $ages);

    $religions = ConfigHelper::getReligionList();
    $settings = App\Models\Setting::all()->toArray();
    return view('website.welcome', compact('ages', 'religions', 'settings'));
});

Route::get('/setting', function () {
    return view('dashboard');
});

Route::get('/search', 'SearchController@search');

Route::get('/profiles/{pid}', 'ProfileController@show');
Route::get('/shareprofile/share', 'ShareProfileController@share')->name('shareprofile.share');

Route::get('/shortlist/{id}', 'ProfileController@shortListProfile');

Route::get('/item/add/{id}', 'CartController@addItem')->name('cart.item.add');
Route::get('/item/remove/{rowId}', 'CartController@removeItem')->name('cart.item.remove');

// auth
Route::get('/register', function () {
    return view('website.auth.register');
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
Route::get('/message', 'MessageController@index')->name('message');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message/id');
Route::post('message/send', 'MessageController@sendMessage');

Route::get('/checkout', 'CartController@index')->name('checkout');
Route::group(['middleware' => ['auth:customer']], function () {
    Route::get('home', function () {
        return view('website.customer.home');
    })->name('home');

    Route::get('shortlisted-profiles', 'Customer\ShortlistController@index')->name('shortlistedProfiles');
    Route::post('shortlist/delete/{id}', 'Customer\ShortlistController@destroy');

    Route::get('unlocked-profiles', 'Customer\UnlockedProfileController@index')->name('unlocked-Profiles');

    Route::get('settings', 'SettingController@edit')->name('customer.settings');
    Route::post('settings/update', 'SettingController@update')->name('customer.udpate-settings');

    Route::get('profile/create', 'ProfileController@create');
    Route::post('profile/save', 'ProfileController@store');
    Route::get('profile/edit', 'ProfileController@edit');
    Route::post('profile/update', 'ProfileController@update');
});


//bKash
Route::prefix('/bkash')->group(function () {
    Route::post('/token', 'BKashController@token')->name('bkash.token');
    Route::get('/payment/create', 'BKashController@createPayment')->name('bkash.payment.create');
    Route::any('/payment/execute', 'BKashController@executePayment')->name('bkash.payment.execute');
});
