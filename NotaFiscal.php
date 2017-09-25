<?php
/**
 * Created by PhpStorm.
 * User: higor.nucci
 * Date: 25/09/2017
 * Time: 13:48
 */

class NotaFiscal
{
    private $razaoSocial;
    private $cnpj;
    private $dataDeEmissao;
    private $valorBruto;
    private $impostos;
    public $itens;
    public $observacoes;

    public function __construct($razaoSocial, $cnpj, $dataDeEmissao,
                                $valorBruto, $impostos, $itens,
                                $observacoes) {
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->dataDeEmissao = $dataDeEmissao;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->itens = $itens;
        $this->observacoes = $observacoes;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getDataDeEmissao()
    {
        return $this->dataDeEmissao;
    }

    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    public function getImpostos()
    {
        return $this->impostos;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }
}