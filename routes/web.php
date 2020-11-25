<?php

use Illuminate\Support\Facades\Route;
use App\Http\Repositories\Config;

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

Route::get('profile-form', function () {
	$bloodGroups = [''=>'Select', 'A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+','B+-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'];	
	$martialStatuses = [''=>'Select', 'single'=>'Single', 'married'=>'Married', 'devorced'=>'Devorced'];
	$bodyTypes = [''=>'Select', 'slim'=>'Slim', 'average'=>'Average', 'chubby'=> 'Chubby', 'fat'=>'Fat', 'fit'=> 'Fit', 'athletic'=>'Athletic', 'bodybuilder'=>'Bodybuilder'];
	$eyeColors = [''=>'Select', 'amber'=>'Amber', 'blue'=>'Blue', 'brown'=>'Brown', 'gray'=>'Gray', 'green'=>'Green', 'hazel'=>'Hazel', 'red'=>'Red'];
	$hairColors = [''=>'Select', 'black'=>'black', 'brown'=>'brown', 'blond'=>'blond', 'red'=>'red', 'gray'=>'gray', 'white'=>'white', 'red'=>'Red'];
	$complexions = [''=>'Select', 'fair'=>'fair', 'brown'=>'brown', 'black'=>'black', 'light'=>'light', 'medium'=>'medium', 'olive'=>'olive'];
	$educations = Config::getEducationList();
	$occupations = Config::getOccupationList();
	$cities = Config::getCityList();
	$districts = Config::getDistrictList();
	$countries = Config::getCountryList();
    return view('website.profile-form', compact(
    	'bloodGroups', 
    	'martialStatuses', 
    	'bodyTypes', 
    	'eyeColors', 
    	'hairColors', 
    	'complexions',
    	'educations',
    	'occupations',
    	'cities',
    	'districts',
    	'countries'
	));
});

Route::get('/checkout', function () {
    return view('website.checkout');
});

Route::get('/verify/phone', 'OTPController@sendOTP');

Route::post('/register', 'Auth\RegisterController@register')->name('customer.register');

Route::post('/otp/send', 'OTPController@sendOTP')->name('otp.send');
Route::post('/otp/resend', 'OTPController@resendOTP')->name('otp.resend');
Route::post('/otp/verify', 'OTPController@verifyOTP')->name('otp.verify');
