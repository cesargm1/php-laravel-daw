<?php

class Persona
{
    private $edad;
    private $altura;
    private $peso;

    public function __construct($edad, $altura, $peso)
    {
        $this->edad = $edad;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function ICM(): float
    {
        return $this->peso / ($this->altura ** 2);
    }

    public function ICMMostrarMensaje(): void
    {
        if ($this->peso <= 0) {
            echo "Peso no valido";
        }

        $imc = $this->ICM();
        echo "Tu índice de masa corporal es de: $imc" . PHP_EOL;
    }
}
