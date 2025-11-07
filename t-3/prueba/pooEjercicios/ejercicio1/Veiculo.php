<?php
class Veiculo
{
    public $marca;
    public $modelo;

    public function __construct($marca,  $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mostarInfo(): string
    {
        $veiculoInfo = "La marca del veiculo es $this->marca y el modelo es $this->modelo";
        return $veiculoInfo;
    }
}
