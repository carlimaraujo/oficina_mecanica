<?php
class Cliente
{

    private $codigo;
    private $nome;
    private $cpf;
    private $telefone;

    public function __construct($codigo, $nome, $cpf, $telefone)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
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

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        return $this->telefone = $telefone;
    }
}
