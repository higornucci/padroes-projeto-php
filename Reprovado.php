<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:21
 */

class Reprovado implements EstadoDeUmOrcamento {
    public function aplicaDescontoExtra(Orcamento $orcamento) {
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orçamento está em estado de reprovação, não pode aprovar agora!");
    }

    public function reprova(Orcamento $orcamento) {
        throw new Exception("Já estou reprovado!");
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}