<?php
class Persona
{
    protected $nombre;
    protected $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEdad(string $edad)
    {
        $this->nombre = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function presentarse(): string
    {
        return "Hola soy $this->nombre y tengo $this->edad";
    }
}
