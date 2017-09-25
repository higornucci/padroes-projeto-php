<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:38
 */

class Estado
{

    private $contrato;

    public function __construct($contrato)
    {
        $this->contrato = $contrato;
    }

    public function getEstado()
    {
        return $this->contrato;
    }
}