<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:06
 */

class Iccc extends Imposto
{
    function __construct(Imposto $imposto = null){
        parent::__construct($imposto);
    }

    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() < 1000) {
            return $orcamento->getValor() * 0.05;
        } else if ($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $orcamento->getValor() * 0.08 + 30;
        }
    }
}