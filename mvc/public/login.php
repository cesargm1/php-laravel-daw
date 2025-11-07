<?php
include_once __DIR__ . '/../src/Usuarios.php';
$user = $_POST['user'] ?? '';
$password = $_POST['password'] ?? '';

Usuarios::insert($user, $password);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form method="post">
        <label>
            Usuario
            <input name="user" type="text" placeholder="Escribe tu usuario">
        </label>

        <label>
            Contraseña
            <input name="password" type="password" placeholder="Escribe tu contraseña">
        </label>

        <label>
            Repetir contraseña
            <input name="repeatP" type="password" placeholder="Repite tu contraseña">
        </label>

        <button type="submit" name="submit">Enviar</button>
    </form>
</body>

</html>