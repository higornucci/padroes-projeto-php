<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:20
 */

class Aprovado implements EstadoDeUmOrcamento {
    private $descontoAplicado = false;
    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if(!$this->descontoAplicado) {
            $orcamento->valor -= $orcamento->valor * 0.02;
            $this->descontoAplicado = true;
        }
        else {
            throw new Exception("Desconto já aplicado!");
        }
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orçamento já está em estado de aprovação");
    }

    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orçamento está em estado de aprovação e não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}