<?php
include_once 'pelicula,php';
class Videoteca
{
    private array $peliculas = [];

    public function __construct() {}

    public function addPelicula(Pelicula $pelicula): void
    {
        $this->peliculas[] = $pelicula;
    }
}
