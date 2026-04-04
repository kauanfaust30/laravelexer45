<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    // Mostrar o formulário do IMC
    public function form()
    {
        return view('imc.form'); // aponta para resources/views/imc/form.blade.php
    }

    // Processar o cálculo do IMC
    public function calcular(Request $request)
    {
        $nome = $request->nome;
        $data = $request->data;
        $peso = $request->peso;
        $altura = $request->altura;

        // calcular idade
        $idade = date('Y') - date('Y', strtotime($data));

        // calcular IMC
        $imc = $peso / ($altura * $altura);

        // classificar IMC
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc <= 24.9) {
            $classificacao = "Peso normal";
        } elseif ($imc <= 29.9) {
            $classificacao = "Sobrepeso";
        } elseif ($imc <= 34.9) {
            $classificacao = "Obesidade I";
        } elseif ($imc <= 39.9) {
            $classificacao = "Obesidade II";
        } else {
            $classificacao = "Obesidade III";
        }

        // enviar dados para a view
        return view('imc.resultado', compact(
            'nome',
            'idade',
            'peso',
            'altura',
            'imc',
            'classificacao'
        ));
    }
}