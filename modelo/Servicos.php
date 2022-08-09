<?php
class Servicos
{

    private $codigo;
    private $nome;
    private $descricao;
    private $valor;

    public function __construct($codigo, $nome, $descricao, $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
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
}
