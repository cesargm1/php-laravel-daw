<?php

class rectangulo extends Figura implements identificable
{
    private $base;
    private $altura;
    private $radio;

    public function __construct($base, $altura, $radio, $color)
    {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
        $this->radio = $radio;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
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

    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function calcularPerimetro()
    {
        return 2 * ($this->base + $this->altura);
    }

    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }

    public function obtenerTipo(): string
    {
        return "Rectangulo";
    }

    public function __toString(): string
    {
        return "La figura es un " . $this->obtenerTipo() . "\n" .
            "Base: " . $this->base . "\n" .
            "Altura: " . $this->altura . "\n" .
            "Radio: " . $this->radio . "\n" .
            "Color: " . $this->color . "\n" .
            "Área: " . $this->calcularArea() . "\n" .
            "Perímetro: " . $this->calcularPerimetro() . "\n\n";
    }
}
