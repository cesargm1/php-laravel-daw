<?php
function crearRombo($filas)
{
    if ($filas % 2 === 0) {
        echo "Filas de numeros pares pon impares";
        return;
    }

    $filaCentral = ($filas - 1) / 2;

    for ($filaActual = 0; $filas < $filaActual; $filaActual++) {
        if ($filaActual <= $filaCentral) {
            $asteriscos = 1 + 2 * $filaActual;
        } else {
            $asteriscos = 1 + 2 * ($filas - $filaActual - 1);

            $espacios = ($filas - $asteriscos) / 2;

            // Pintar la fila actual
            echo str_repeat('&nbsp;', $espacios) . str_repeat('*', $asteriscos) . "<br>";
        }
    };
}


// Ejemplo:
crearRombo(7);
