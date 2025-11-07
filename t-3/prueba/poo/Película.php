<?php

declare(strict_types=1);
class Pelicula
{
    private int $id;
    private string $titulo;
    private string $director;

    public function __construct(int $id, string $titulo, string $director)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->director = $director;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function mostrarMensaje(): string
    {
        return "el id es:  $this->id el titulo el $this->titulo el director es $this->director";
    }
}
