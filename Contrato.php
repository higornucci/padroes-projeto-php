<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:37
 */

class Contrato
{

    private $data;
    private $cliente;
    private $tipo;

    public function __construct($data, $cliente, $tipo)
    {
        $this->data = $data;
        $this->cliente = $cliente;
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function avanca()
    {
        $this->tipo->avanca($this);
    }

    public function salvaEstado()
    {
        return new Estado(new Contrato($this->data, $this->cliente, $this->tipo));
    }

    public function restaura($estado)
    {
        $this->data = $estado->getEstado()->getData();
        $this->cliente = $estado->getEstado()->getCliente();
        $this->tipo = $estado->getEstado()->getTipo();
    }
}