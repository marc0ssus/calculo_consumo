<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;

    public function combustivel() {
        return $_GET['combustivel'];
    }

    public function calcular() {
        $valorcombustivel = $_GET['valorcombustivel'];
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $consumoGasolina = round((($distancia / $autonomia) * $valorcombustivel),2);

        return $consumoGasolina;
    }
}
