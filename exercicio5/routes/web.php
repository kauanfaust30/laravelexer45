<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SonoController;

Route::get('/', [SonoController::class, 'form']);
Route::post('/resultado', [SonoController::class, 'calcular']);
