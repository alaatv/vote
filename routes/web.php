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

use App\Http\Controllers\Auth\MobileVerificationController;
use App\Http\Controllers\Web\HomeController;

Auth::routes(['verify' => true]);
Route::group(['prefix' => 'mobile'], function () {
    Route::get('verify', [MobileVerificationController::class, 'show'])->name('verification.mobile.notice');
    Route::post('verify', [MobileVerificationController::class, 'verify'])->name('verification.mobile.verify');
    Route::get('resend', [MobileVerificationController::class, 'resend'])->name('verification.mobile.resend');
});
Route::get('debug', [HomeController::class, 'debug']);
Route::group(['middleware' => 'auth'] , function (){
    Route::get('home', [HomeController::class, 'index'])->middleware('mobile.verified');
    Route::get('/', [HomeController::class, 'index'])->name('web.home')->middleware('mobile.verified');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});
