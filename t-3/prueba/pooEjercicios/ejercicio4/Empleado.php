<?php
class Empleado extends Persona
{
    private $salario;

    public function __construct($nombre, $edad, $salario)
    {
        parent::__construct($nombre, $edad);
        $this->salario = $salario;
    }

    function presentarse(): string
    {
        $mensajePadre = parent::presentarse();
        return $mensajePadre . "salario $this->salario";
    }
}


$empleado = new Empleado("Ana", 25, 1800);
echo $empleado->presentarse();
