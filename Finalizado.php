<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:21
 */

class Finalizado implements EstadoDeUmOrcamento {
    public function aplicaDescontoExtra(Orcamento $orcamento) {
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Não posso mudar mais, já estou finalizado!");
    }

    public function reprova(Orcamento $orcamento) {
        throw new Exception("Não posso mudar mais, já estou finalizado!");
    }

    public function finaliza(Orcamento $orcamento) {
        throw new Exception("Não posso mudar mais, já estou finalizado!");
    }
}