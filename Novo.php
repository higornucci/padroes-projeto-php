<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:36
 */

class Novo implements Estados
{
    public function avanca($contrato)
    {
        $contrato->setTipo(new EmAndamento());
    }
}