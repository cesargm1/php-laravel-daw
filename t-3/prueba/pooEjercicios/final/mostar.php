<?php
include_once 'identificable.php';
include_once 'Figura.php';
include_once 'Circulo.php';
include_once 'Rectangulo.php';


$circulo1 = new Circulo(5, "rojo");
$circulo2 = new Circulo(10, "amarillo");
$rectangulo1 = new Rectangulo(6, 12, 7, "verde");
$rectangulo2 = new Rectangulo(8, 32, 1, "azul");

$figuras = [$circulo1, $circulo2, $rectangulo1, $rectangulo2];

foreach ($figuras as $figura) {
    echo $figura;
}
