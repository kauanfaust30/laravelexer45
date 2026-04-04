<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonoController extends Controller
{
    // Mostrar o formulário do Sono
    public function form()
    {
        return view('sono.form'); // aponta para resources/views/sono/form.blade.php
    }

    // Processar cálculo da qualidade do sono
    public function calcular(Request $request)
    {
        $idade = $request->idade;
        $horas = $request->horas;

        $min = 0;
        $max = 0;
        $faixa = "";

        // determinar faixa etária
        if ($idade <= 0.25) { 
            $min = 14; $max = 17; $faixa = "Recém-nascido";
        } elseif ($idade <= 1) {
            $min = 12; $max = 15; $faixa = "Bebê";
        } elseif ($idade <= 2) {
            $min = 11; $max = 14; $faixa = "Primeira infância";
        } elseif ($idade <= 5) {
            $min = 10; $max = 13; $faixa = "Pré-escolar";
        } elseif ($idade <= 13) {
            $min = 9; $max = 11; $faixa = "Idade escolar";
        } elseif ($idade <= 17) {
            $min = 8; $max = 10; $faixa = "Adolescente";
        } elseif ($idade <= 64) {
            $min = 7; $max = 9; $faixa = "Adulto";
        } else {
            $min = 7; $max = 8; $faixa = "Idoso";
        }

        // determinar qualidade do sono
        if ($horas < $min) {
            $qualidade = "Sono insuficiente ";
        } elseif ($horas > $max) {
            $qualidade = "Sono excessivo ";
        } else {
            $qualidade = "Sono adequado ";
        }

        // enviar dados para a view
        return view('sono.resultado', compact(
            'idade',
            'horas',
            'min',
            'max',
            'faixa',
            'qualidade'
        ));
    }
}