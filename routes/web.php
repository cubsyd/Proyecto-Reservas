<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EspacioController;
use App\http\Controllers\ReservaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('espacios', EspacioController::class);
Route::resource('reservas', ReservaController::class);
