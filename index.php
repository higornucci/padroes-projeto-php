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
echo "<br />";echo "<br />";echo "<br />";

// Descontos
$reforma = new Orcamento(500.0);

$reforma->aplicaDescontoExtra();
echo $reforma->getValor(); // imprime 475,00 pois descontou 5%
$reforma->aprova(); // aprova nota!
echo "<br />";
$reforma->aplicaDescontoExtra();
echo $reforma->getValor();// imprime 465,50 pois descontou 2%
echo "<br />";echo "<br />";

$item = new ItemDaNotaBuilder();
$item = $item->comDescricao("")->comValor(10)->constroi();
$nf = new NotaFiscalBuilder();
$nf->paraEmpresa("Caelum")->comCnpj("123.456.789/0001-10")->com($item);
$nf->com(new ItemDaNota("item 2", 200.0))->com(new ItemDaNota("item 3", 300.0))->comObservacoes("entregar nf pessoalmente");
$nf->naDataAtual();
$itens = $nf->constroi()->getItens();
$valorTotal = 0;
foreach($itens as $item) {
    $valorTotal += $item->getValor();
}
$impostos = $valorTotal * 0.05;

$nf = new NotaFiscal("razao social qualquer", "um cnpj", date("Y-m-d h:i:s"), $valorTotal, $impostos, $itens, "observacoes quaisquer aqui");