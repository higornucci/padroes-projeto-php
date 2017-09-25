<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:00
 */

class CalculadorDeImpostos {

    public function realizaCalculo(Orcamento $orcamento, IImposto $imposto) {
        $valor = $imposto->calcula($orcamento);
        return $valor;
    }
}