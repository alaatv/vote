<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\IndexPageController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\UserVoteOptionContoller;
use App\Http\Controllers\Api\VoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('/' , '\\'.IndexPageController::class)->name('api.index');
        Route::resource('uservoteoption' , '\\'.UserVoteOptionContoller::class);
        Route::resource('category' , '\\'.CategoryController::class);
        Route::resource('vote' , '\\'.VoteController::class);
        Route::resource('option' , '\\'.OptionController::class);
    });
});
