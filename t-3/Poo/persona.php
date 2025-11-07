<?php
include "Persona.php";

$maria = new Persona(28, 1.75, 65);

echo "Edad: " . $maria->getEdad() . "\n";
echo "Altura: " . $maria->getAltura() . "\n";
echo "Peso: " . $maria->getPeso() . "\n";
echo "IMC: " . $maria->ICM();
