<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\NavberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/container', [ContainerController::class, 'index']);
Route::get('/grid', [GridController::class, 'index']);
Route::get('/navber', [NavberController::class, 'index']);