<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\espacioController;
use App\http\Controllers\reservaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('espacios', espacioController::class);
Route::resource('reservas', reservaController::class);
