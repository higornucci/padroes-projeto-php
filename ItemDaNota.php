<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:04
 */

class ItemDaNota
{
    private $descricao;
    private $valor;

    public function __construct($descricao, $valor)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
}