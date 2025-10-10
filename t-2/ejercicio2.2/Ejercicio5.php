<?php

$alumnos = ["pepe", "juan", "sara", "carla"];

echo "el array tiene " .  count($alumnos) . " elementos <br>";

$cadena = implode(" , ", $alumnos);

echo $cadena . "<br>";


// d) Muestra el array ordenado alfabéticamente con las claves reales de cada valor.

sort($alumnos);
foreach ($alumnos as $key => $val) {
    echo "[" . $key . "] = " . $val . "\n";
}

echo " <br>";

// e) Muestra el array en el orden inverso al que fue creado (función array_reverse()).

print_r(array_reverse($alumnos));
echo "<br>";

// f) Muestra la posición que tiene un nombre concreto que quieras encontrar.

$findName = array_search("juan", $alumnos);

echo $findName;

// g) Crea un nuevo array $alumnado donde cada uno de los elementos sea otro array
// que contenga el id, el nombre y la edad de cada alumn@.

$alumnosArray = [
    [
        "id" => 1,
        "nombre" => "Ramon",
        "edad" => 12,
    ],

    [
        "id" => 2,
        "nombre" => "Lucía",
        "edad" => 13,
    ],
    [
        "id" => 3,
        "nombre" => "Carlos",
        "edad" => 14,
    ],
    [
        "id" => 4,
        "nombre" => "Elena",
        "edad" => 12,
    ],
    [
        "id" => 5,
        "nombre" => "Miguel",
        "edad" => 13,
    ],
    [
        "id" => 6,
        "nombre" => "Sofía",
        "edad" => 14,
    ],
    [
        "id" => 7,
        "nombre" => "Andrés",
        "edad" => 15,
    ],
    [
        "id" => 8,
        "nombre" => "Paula",
        "edad" => 13,
    ],
    [
        "id" => 9,
        "nombre" => "Diego",
        "edad" => 12,
    ],
    [
        "id" => 10,
        "nombre" => "Valeria",
        "edad" => 14,
    ]
];



// h) Crea una tabla en html que se muestre todos los datos de $alumnado

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <th>
        <td>id</td>
        <td>nombre</td>
        <td>edad</td>
        </th>
        <?php
        foreach ($alumnosArray as $alumno) {
        ?>
            <tr>
                <td>
                    <?php echo $alumno["id"] ?>
                </td>
                <td>
                    <?php echo $alumno["nombre"] ?>
                </td>
                <td>
                    <?php echo $alumno["edad"] ?>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>


<?php
$nombre = array_column($alumnosArray, "nombre");
print_r($nombre) . "<br>";
?>