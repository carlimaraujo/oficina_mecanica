<?php

class Fornecedor
{
    private $idfornecedor;
    private $nome;
    private $contato;
    private $produtos;

    public function __construct($idfornecedor, $nome, $contato, $produtos)
    {
        $this->idfornecedor = $idfornecedor;
        $this->nome = $nome;
        $this->contato = $contato;
        $this->produtos = $produtos;
    }
    public function getCodigo()
    {
        return $this->idfornecedor;
    }

    public function setCodigo($idfornecedor)
    {
        return $this->codigo = $idfornecedor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getContato()
    {
        return $this->contato;
    }

    public function setContato($contato)
    {
        return $this->contato = $contato;
    }

    
    public function getProdutos()
    {
        return $this->produtos;
    }

    public function setProdutos($produtos)
    {
        return $this->produtos = $produtos;
    }
}
