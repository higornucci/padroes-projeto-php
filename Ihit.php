<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:29
 */

class Ihit extends TemplateDeImpostoCondicional {

    function __construct(Imposto $imposto = null){
        parent::__construct($imposto);
    }

    public function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        $noOrcamento = Array();

        foreach($orcamento->getItens() as $item) {
            if(in_array($item->getNome(),$noOrcamento)) return true;
            else $noOrcamento[] = $item->getNome();
        }

        return false;
    }
    protected function maximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.13 + 100;
    }
    protected function minimaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
    }
}