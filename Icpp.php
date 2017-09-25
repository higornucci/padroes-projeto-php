<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:29
 */

class Icpp extends TemplateDeImpostoCondicional {

    protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() > 500;
    }
    protected function maximaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.07;
    }
    protected function minimaTaxacao(Orcamento $orcamento) {
        return $orcamento->getValor() * 0.05;
    }
}