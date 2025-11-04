<?php

include_once 'Libro.php';
$libros = Libro::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de libros</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Paginas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($libros as $libro): ?>
            <tr>
                <td><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['titulo']; ?></td>
                <td><?php echo $libro['autor']; ?></td>
                <td><?php echo $libro['paginas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="./formulario.php">Volver al formulario</a>

</body>
</html>