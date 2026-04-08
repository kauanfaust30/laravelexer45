<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\CombustivelController;

Route::get('/', function () {
    return view('menu');
});


Route::get('/imc', [ImcController::class, 'form']);
Route::post('/imc/calcular', [ImcController::class, 'calcular']);


Route::get('/sono', [SonoController::class, 'form']);
Route::post('/sono/calcular', [SonoController::class, 'calcular']);

Route::get('/consumo', [CombustivelController::class, 'index']);
Route::get('/gasto', [CombustivelController::class, 'gasto']);