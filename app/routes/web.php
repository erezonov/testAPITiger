<?php

use Illuminate\Support\Facades\Route;

Route::get('/getNumber', [\App\Http\Controllers\SMSController::class, 'getNumber']);
Route::get('/getSms', [\App\Http\Controllers\SMSController::class, 'getSms']);
Route::get('/cancelNumber', [\App\Http\Controllers\SMSController::class, 'cancelNumber']);
Route::get('/getStatus', [\App\Http\Controllers\SMSController::class, 'getStatus']);
