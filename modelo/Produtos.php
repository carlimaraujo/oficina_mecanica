<?php

class Produto
{
    private $codigo;
    private $nome;
    private $descricao;
    private $valor;

    public function __construct($codigo, $nome, $descricao, $valor, $marca, $codigofornecedor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->marca = $marca;
        $this->codigofornecedor = $codigofornecedor;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        return $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        return $this->valor = $valor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        return $this->marca = $marca;
    }

    public function getCodigofornecedor()
    {
        return $this->codigofornecedor;
    }

    public function setCodigofornecedor($codigofornecedor)
    {
        return $this->codigofornecedor = $codigofornecedor;
    }
}
