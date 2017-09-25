<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 14:30
 */

class ConnectionFactory {

    public function getConnection() {

        $conexao = false;

        $tipoBanco = parse_ini_file('config.php');
        $tipoBanco = $tipoBanco['tipoBanco'];

        if($tipoBanco == "mysql") {
            $conexao = mysqli_connect("meuHost","meuUsuario","minhaSenha","meuBanco");
        }else if($tipoBanco == "postgre") {
            $conexao = pg_connect("host=meuHost port=5432 dbname=meuBanco user=meuUsuario password=meuBanco");
        }
        return $conexao;

    }
}