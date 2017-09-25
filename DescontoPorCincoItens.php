<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:17
 */

class DescontoPorCincoItens implements Desconto {
    private $proximo;

    public function setProximo(Desconto $proximo) {
        $this->proximo = $proximo;
    }

    public function desconta(Orcamento $orcamento) {
        if(count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximo->desconta($orcamento);
        }
    }
}