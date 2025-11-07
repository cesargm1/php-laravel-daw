<?php

class Circulo extends Figura implements identificable
{
    private $radio;

    public function __construct($radio, $color)
    {
        parent::__construct($color);
        $this->radio = $radio;
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
        return 2 * pi() * $this->radio;
    }

    public function calcularArea(): float
    {
        return pi() * pow($this->radio, 2);
    }

    public function obtenerTipo(): string
    {
        return "Circulo";
    }

    public function __toString(): string
    {
        return "La figura es un " . $this->obtenerTipo() . "\n" .
            "Radio: " . $this->radio . "\n" .
            "Color: " . $this->color . "\n" .
            "Perímetro del círculo: " . $this->calcularPerimetro() . "\n" .
            "Área: " . $this->calcularArea() . "\n\n";
    }
}
