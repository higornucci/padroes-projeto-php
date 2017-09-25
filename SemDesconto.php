<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:18
 */

class SemDesconto implements Desconto {

    public function desconta(Orcamento $orcamento) {
        return 0;
    }

    public function setProximo(Desconto $desconto) {
        // nao tem!
    }
}