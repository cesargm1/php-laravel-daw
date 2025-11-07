<?php

class Libro
{
    public $titulo;
    public $anio;
    public $autor;

    public function __construct($titulo, $anio, $autor)
    {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function __toString(): string
    {
        $infoMensaje = "El titulo del libro es $this->titulo , El autor es $this->autor y el ano es $this->anio";
        return $infoMensaje;
    }
}
