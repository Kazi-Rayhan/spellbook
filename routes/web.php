<?php

use App\Http\Controllers\ScreenLockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::controller(ScreenLockController::class)->group(function () {
    Route::get('/lock-screen', 'lockscreen')->name('lockscreen');
    Route::post('/lock', 'lock')->name('lock');
    Route::post('/unlock', 'unlock')->name('unlock');
});
