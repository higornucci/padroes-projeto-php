<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:52
 */

class Pedido
{
    private $cliente;
    private $valor;
    private $status;
    private $dataFinalizacao;

    public function __construct($cliente, $valor)
    {
        parent::__construct();
        $this->cliente = $cliente;
        $this->valor = $valor;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function paga()
    {
        $this->status = new Pago();
    }

    public function getDataFinalizacao()
    {
        return $this->dataFinalizacao;
    }

    public function finaliza()
    {
        $this->dataFinalizacao = date("m/d/Y");
        $this->status = new Entregue();
    }
}