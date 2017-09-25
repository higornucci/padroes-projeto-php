<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 09:59
 */

function autoload($class) {
    include $class.".php";
}
spl_autoload_register("autoload");

$orcamento = new Orcamento(1000);

$icms = new Icms( new Iss());
$iss = new Iss($icms);
$novoImposto = new Iccc($iss);

$calculadorDeImposto = new CalculadorDeImpostos();

echo $calculadorDeImposto->realizaCalculo($orcamento,$icms);
echo "<br />";
echo $calculadorDeImposto->realizaCalculo($orcamento,$iss);
echo "<br />";
$reforma = new Orcamento(5000);
echo $novoImposto->calcula($reforma);
echo "<br />";
echo "<br />";
// Descontos

$d1 = new DescontoPorCincoItens();
$d2 = new DescontoPorMaisDeQuinhentosReais();
$d3 = new DescontoPorVendaCasada();
$d4 = new SemDesconto();

$d1->setProximo($d2);
$d2->setProximo($d3);
$d3->setProximo($d4);

$orcamento = new Orcamento(600.0);

$desconto = $d1->desconta($orcamento);
echo $desconto;