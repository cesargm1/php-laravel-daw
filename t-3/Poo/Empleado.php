<?php
class Empleado
{
    public $id;
    public $nombre;
    public $sueldo;
    public function  __construct($nombre, $sueldo = 0)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function printMensagge(): void
    {

        echo ($this->sueldo > 3000) ? "$this->nombre tienes que pagar $this->sueldo" : "$this->nombre no tienes que pagar $this->sueldo <br>";
    }
}
