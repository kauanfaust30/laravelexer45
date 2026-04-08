<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    public function index() {
        return view('consumo.form'); 
    }

    public function gasto(Request $request) {

        $calculo = new CalculoDeCombustivel();

        $combustivel = $request->combustivel;
        $valorcombustivel = $request->valorcombustivel;
        $distancia = $request->distancia;
        $autonomia = $request->autonomia;

        $valor = $calculo->calcular($valorcombustivel, $distancia, $autonomia);

        return view('consumo.resultado', [ 
            'combustivel' => $combustivel,
            'valor' => $valor
        ]);
    }
}