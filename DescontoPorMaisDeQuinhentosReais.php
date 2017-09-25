<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:18
 */

class DescontoPorMaisDeQuinhentosReais implements Desconto {
    private $proximo;

    public function setProximo(Desconto $proximo) {
        $this->proximo = $proximo;
    }

    public function desconta(Orcamento $orcamento) {
        if($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        }
        else {
            return $this->proximo->desconta($orcamento);
        }
    }
}