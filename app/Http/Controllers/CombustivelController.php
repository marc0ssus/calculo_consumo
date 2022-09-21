<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $CalculoDeCombustivel = new CalculoDeCombustivel();

        $valor = $CalculoDeCombustivel->calcular();

        return view('resultado',['valor'=>$valor]);
    }
}
