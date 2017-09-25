<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:10
 */

interface Desconto
{
    public function desconta(Orcamento $orcamento);
    public function setProximo(Desconto $proximo);
}