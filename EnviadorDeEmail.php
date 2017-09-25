<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:12
 */
class EnviadorDeEmail implements AcaoAposGerarNota {

    public function executa(NotaFiscal $notaFiscal) {
        echo "enviando por e-mail ";
    }
}