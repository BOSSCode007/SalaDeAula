<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\novaController;
use App\Http\Controllers\reservaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController:: class, 'test'])->name('test');
Route::resource('reservations', reservaController::class);