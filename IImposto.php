<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 10:02
 */

interface IImposto {
    public function calcula(Orcamento $orcamento);
}
