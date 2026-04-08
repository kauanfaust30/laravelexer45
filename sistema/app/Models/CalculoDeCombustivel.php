<?php

namespace App\Models;

class CalculoDeCombustivel
{
    public function calcular($valorcombustivel, $distancia, $autonomia) {

        $litros = $distancia / $autonomia;
        return $litros * $valorcombustivel;
    }
}