<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 09:59
 */

class Orcamento
{
    public $valor;
    private $estado;
    private $itens = array();

    function __construct($valor)
    {
        $this->estado = new EmAprovacao();
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getItens() {
        return $this->itens;
    }

    public function adicionaItem(Item $item) {
        $this->itens[] = $item;
    }

    public function aplicaDescontoExtra() {
        $this->estado->aplicaDescontoExtra($this);
    }

    public function aprova() {
        $this->estado->aprova($this);
    }

    public function reprova() {
        $this->estado->reprova($this);
    }

    public function finaliza() {
        $this->estado->finaliza($this);
    }

    public function setEstado(EstadoDeUmOrcamento $estado) {
        $this->estado = $estado;
    }

}