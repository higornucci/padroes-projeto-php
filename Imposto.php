<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:02
 */

abstract class Imposto {

    private $outroImposto;
    function __construct(Imposto $outroImposto = null) {

        $this->outroImposto = $outroImposto;
    }

    protected function calculaOutroImposto(Orcamento $orcamento) {
        return ($this->outroImposto == null? 0 : $this->outroImposto->calcula($orcamento));
    }

    public abstract function calcula(Orcamento $orcamento);
}
