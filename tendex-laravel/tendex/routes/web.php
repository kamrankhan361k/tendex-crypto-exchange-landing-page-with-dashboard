<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
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


// auth
Route::post('/save', [mainController::class,"save"])->name('auth.save');
Route::post('/check', [mainController::class,"check"])->name('auth.check');
Route::get('/logout',[mainController::class, 'logout'])->name('auth.logout');

Route::get('/demo', function () {
    return view('/pages/demo');
});
// Landing
Route::get('/', function () {
    return view('/pages/landing/home-1');
});
Route::get('/home-2', function () {
    return view('/pages/landing/home-2');
});
Route::get('/home-3', function () {
    return view('/pages/landing/home-3');
});
Route::get('/price', function () {
    return view('/pages/landing/price');
});
Route::get('/app', function () {
    return view('/pages/landing/app');
});
Route::get('/about', function () {
    return view('/pages/landing/about');
});
Route::get('/team', function () {
    return view('/pages/landing/team');
});
Route::get('/blog', function () {
    return view('/pages/landing/blog');
});
Route::get('/career', function () {
    return view('/pages/landing/career');
});
Route::get('/contact', function () {
    return view('/pages/landing/contact');
});
Route::get('/helpdesk', function () {
    return view('/pages/landing/helpdesk');
});
Route::get('/privacy-policy', function () {
    return view('/pages/landing/privacy-policy');
});
Route::get('/faq', function () {
    return view('/pages/landing/faq');
});
// auth

Route::get('/reset', function () {
    return view('/pages/reset');
});
Route::get('/lock', function () {
    return view('/pages/lock');
});
Route::get('/verify-email', function () {
    return view('/pages/verify-email');
});
Route::get('/otp-1', function () {
    return view('/pages/otp-1');
});
Route::get('/otp-2', function () {
    return view('/pages/otp-2');
});

Route::group(['middleware'=>['AuthCheck']], function(){

    // Route::get('/signin', function () {
    //     return view('/pages/signin');
    // });
    // Route::get('/signup', function () {
    //     return view('/pages/signup');
    // });

// auth
Route::get('/signin', [mainController::class,"login"])->name('pages.signin');
Route::get('/signup', [mainController::class,"register"])->name('pages.signup');


// Dashboard
Route::get('/dashboard', function () {
    return view('/pages/dashboard');
});
Route::get('/trade', function () {
    return view('/pages/trade');
});
Route::get('/wallet', function () {
    return view('/pages/wallet');
});
Route::get('/profile', function () {
    return view('/pages/profile');
});
Route::get('/price-details', function () {
    return view('/pages/price-details');
});
// Setting
Route::get('/settings-profile', function () {
    return view('/pages/settings-profile');
});
Route::get('/settings-application', function () {
    return view('/pages/settings-application');
});
Route::get('/settings-security', function () {
    return view('/pages/settings-security');
});
Route::get('/settings-activity', function () {
    return view('/pages/settings-activity');
});
Route::get('/settings-privacy', function () {
    return view('/pages/settings-privacy');
});
Route::get('/settings-payment-method', function () {
    return view('/pages/settings-payment-method');
});
Route::get('/settings-api', function () {
    return view('/pages/settings-api');
});
Route::get('/settings-fees', function () {
    return view('/pages/settings-fees');
});

});