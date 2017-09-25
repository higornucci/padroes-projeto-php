<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:00
 */

class Iss implements IImposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}