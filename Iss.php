<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:00
 */

class Iss extends Imposto
{

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    public function calcula(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06 + $this->calculaOutroImposto($orcamento);
    }
}