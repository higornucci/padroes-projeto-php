<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:49
 */

class NotaFiscalBuilder
{
    private $razaoSocial;
    private $cnpj;
    private $todosItens = Array();
    private $valorBruto;
    private $impostos;
    private $observacoes;
    private $data;
    private $todasAcoesASeremExecutadas;

    public function __construct()
    {
        $this->data = date("m/d/Y");
        $this->todasAcoesASeremExecutadas = Array();
    }

    public function adicionaAcao(AcaoAposGerarNota $novaAcao) {
        $this->todasAcoesASeremExecutadas[] = $novaAcao;
    }

    public function paraEmpresa($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function comCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function com(ItemDaNota $item) {
        $this->todosItens[] = $item;
        $this->valorBruto += $item->getValor();
        $this->impostos += $item->getValor() * 0.05;
        return $this;
    }

    public function comObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    public function naData($novaData)
    {
        $this->data = $novaData;
        return $this;
    }

    public function naDataAtual()
    {
        $this->data = date("d/m/Y");
        return $this;
    }

    public function constroi()
    {
        $notaFiscal = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->data, $this->valorBruto, $this->impostos, $this->todosItens , $this->observacoes);

        foreach($this->todasAcoesASeremExecutadas as $acao) {
            $acao->executa($notaFiscal);
        }

        return $notaFiscal;
    }
}