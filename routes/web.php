<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImcController;
use App\Http\Controllers\SonoController;


Route::get('/', function () {
    return view('home');
});

Route::resource('/imc', ImcController::class);
Route::resource('/sono', SonoController::class);