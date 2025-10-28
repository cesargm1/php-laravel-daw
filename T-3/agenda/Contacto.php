<?php
class Contacto
{
    private $idRegistro;
    private $nombre;
    private $telefono;

    public function __construct(int $idRegistro, string $nombre, string $telefono)
    {
        $this->idRegistro = $idRegistro;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public function setIdRegistro(int $idRegistro)
    {
        $this->idRegistro = $idRegistro;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;
    }

    public function getIdRegistro(): int
    {
        return $this->idRegistro;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function __toString(): string
    {
        return "$this->idRegistro $this->nombre ($this->telefono)";
    }
}
