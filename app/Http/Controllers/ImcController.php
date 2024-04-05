<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller {

    public function index() {
        $this->store();
    }

    public function store(Request $request) {

        $request->validate([
            'altura' => 'required|numeric|min:0',
            'peso' => 'required|numeric|min:0',
        ]);

        $altura = $request->altura;
        $peso = $request->peso;
    
        $imc = $this->calcularImc($altura, $peso);
    
        if ($imc === -1) {
            $erro = 'Erro';
            return view('imc', $erro);
        }
    
        return view('imc', $imc);
    }
    
    /**
     * Calcula o IMC com base nos parâmetros fornecidos.
     *
     * @param  float  $altura
     * @param  float  $peso
     * @return float
     */
    public function calcularImc($altura, $peso) {
        // Verificando se altura e peso são válidos
        if ($altura <= 0 || $peso <= 0) {
            return -1; // Retornar um valor negativo para indicar erro
        }

        // Calculando o IMC
        $imc = $peso / ($altura * $altura);
        
        return $imc;
    }
}
