<?php

abstract class Figura
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    abstract function calcularArea();
    abstract function calcularPerimetro();
}
