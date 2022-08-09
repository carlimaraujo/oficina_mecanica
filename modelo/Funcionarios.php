<?php

class Funcionario
{
    private $idfuncionario;
    private $nome;
    private $cpf;
    private $salario;
    private $funcao;
    private $datanasc;


    public function __construct($idfuncionario, $nome, $cpf, $datanasc, $salario, $funcao)
    {
        $this->idfuncionario = $idfuncionario;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->datanasc = $datanasc;
        $this->salario = $salario;
        $this->funcao = $funcao;
    }
    public function getIdfuncionario()
    {
        return $this->idfuncionario;
    }

    public function setCodigo($idfuncionario)
    {
        return $this->idfuncionario = $idfuncionario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        return $this->salario = $salario;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        return $this->funcao = $funcao;
    }

    public function getDatanasc()
    {
        return $this->datanasc;
    }

    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    }
}
