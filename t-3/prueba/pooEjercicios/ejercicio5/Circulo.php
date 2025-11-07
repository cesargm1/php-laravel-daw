<?php
class Circulo extends Figura implements Identificable
{
    private $radio;
    public function __construct($radio)
    {
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

    public function calcularPerimetro(): float
    {
        return 2 * pi() * $this->radio;
    }

    public function calcularArea(): float
    {
        return pi() * pow($this->radio, 2);
    }

    public function obtenerTipo(): string
    {
        return "son un circulo";
    }
}
