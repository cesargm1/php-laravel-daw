<?php
class Rectangulo extends Figura implements Identificable
{
    private $altura;
    private $base;
    public function __construct($altura, $base)
    {
        $this->altura = $altura;
        $this->base = $base;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function calcularPerimetro(): float
    {
        return 2 * ($this->base + $this->altura);
    }

    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }

    public function obtenerTipo(): string
    {
        return "son un rectamgulo";
    }
}
