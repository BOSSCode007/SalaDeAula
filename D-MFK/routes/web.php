<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\novaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController:: class, 'test'])->name('test');
Route::get('/detalhes', [novaController::class, 'detalhes'])->name('detalhes');