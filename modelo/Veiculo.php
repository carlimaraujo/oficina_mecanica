<?php

class Veiculos
{

    private $codigo;
    private $placa;
    private $modelo;
    private $codigo_cliente;
    private $codigo_servico;
    private $marca;


    public function __construct($codigo, $placa, $codigo_cliente, $marca, $modelo, $codigo_servico)
    {
        $this->codigo = $codigo;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->codigo_cliente = $codigo_cliente;
        $this->codigo_servico = $codigo_servico;
    }


    public function getCodigo()
    {
        return $this->codigo;
    }


    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }


    public function getPlaca()
    {
        return $this->placa;
    }


    public function setPlaca($placa): self
    {
        $this->placa = $placa;

        return $this;
    }


    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    public function setCodigoCliente($codigo_cliente): self
    {
        $this->codigo_cliente = $codigo_cliente;

        return $this;
    }

    public function getCodigoServico()
    {
        return $this->codigo_servico;
    }

    public function setCodigoServico($codigo_servico): self
    {
        $this->codigo_servico = $codigo_servico;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
    }

    