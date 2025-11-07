<?php
class Producto
{
    private $codigo;
    private $nombre;
    private $precio;

    public function __construct($codigo, $nombre, $precio)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    public function setnombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setprecio($precio): void
    {

        if ($precio > 0) {
            $this->precio = $precio;
        }
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getnombre(): string
    {
        return $this->nombre;
    }

    public function getprecio(): float
    {
        return $this->precio;
    }

    public function mostrarInfo(): string
    {
        $mostrar = "codigo $this->codigo nombre: $this->nombre  precio: $this->precio";
        return $mostrar;
    }
}
