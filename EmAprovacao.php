<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:19
 */

class EmAprovacao implements EstadoDeUmOrcamento {
    private $descontoAplicado = false;
    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if(!$this->descontoAplicado) {
            $orcamento->valor -= $orcamento->valor * 0.05;
            $this->descontoAplicado = true;
        }
    }

    public function aprova(Orcamento $orcamento) {
        // desse estado posso ir para o estado de aprovado
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento) {
        // desse estado posso ir para o estado de reprovado tambem
        $orcamento->estadoAtual = new Reprovado();
    }

    public function finaliza(Orcamento $orcamento) {
        // daqui não posso ir direto para finalizado
        throw new Exception("Orcamento em aprovação não podem ir para finalizado diretamente");
    }
}