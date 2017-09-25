<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:55
 */

class FilaDeTrabalho {

    private $comandos;

    function __construct() {
        $this->comandos = array();
    }

    public function adiciona(Comando $comando) {
        $this->comandos[] = ($comando);
    }

    public function processa() {
        foreach($this->comandos as $comando) {
            $comando->executa();
        }
    }
}