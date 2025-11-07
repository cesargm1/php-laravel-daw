<?php
include_once 'Figura.php';
include_once 'Identificable.php';
include_once 'Rectangulo.php';

$figura = new Rectangulo(5, 2);

echo $figura->obtenerTipo() . "<br>";
echo "Área: " . $figura->calcularArea() . "<br>";
echo "Perímetro: " . $figura->calcularPerimetro() . "<br>";
