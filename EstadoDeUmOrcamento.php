<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:19
 */

interface EstadoDeUmOrcamento {
    public function aplicaDescontoExtra(Orcamento $orcamento);
    public function aprova(Orcamento $orcamento);
    public function reprova(Orcamento $orcamento);
    public function finaliza(Orcamento $orcamento);
}