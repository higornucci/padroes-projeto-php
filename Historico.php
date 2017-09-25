<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:38
 */

class Historico
{
    private $estadosSalvos;

    public function __construct()
    {
        $this->estadosSalvos = Array();
    }

    public function pega($index)
    {
        return $this->estadosSalvos[$index];
    }

    public function adiciona($estado)
    {
        $this->estadosSalvos[] = $estado;
    }
}