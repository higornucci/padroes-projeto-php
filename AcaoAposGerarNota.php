<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:12
 */

interface AcaoAposGerarNota {
    public function executa(NotaFiscal $notaFiscal);
}