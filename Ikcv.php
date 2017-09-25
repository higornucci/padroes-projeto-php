<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:29
 */

class Ikcv extends TemplateDeImpostoCondicional {

    function __construct(Imposto $imposto = null){
        parent::__construct($imposto);
    }

    protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($orcamento);
    }
    protected function maximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.10;
    }
    protected function minimaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }

    private function temItemMaiorQue100ReaisNo(Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if($item->getValor() > 100) return true;
        }
        return false;
    }
}