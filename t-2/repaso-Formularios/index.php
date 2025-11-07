<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [
        "name" => "",
        "email" => "",
        "mensaje" => "",
        "date" => "",
        "file" => "",
        "gender" => "",
        "pais" => "",
    ];
    $isOK = false;
    $name = $_POST['name'] ?? '';

    if (empty($name)) {
        $errors['name'] = "El nombre es requerido";
    }

    $email = $_POST['email'] ?? '';
    if (empty($email)) {
        $errors['email'] = "El email es requerido";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Pon un formato válido";
    }

    $mensaje = $_POST['mensaje'] ?? '';
    if (empty($mensaje)) {
        $errors['mensaje'] = "El mensaje es requerido";
    }

    $date = $_POST['date'] ?? '';
    $dateFormat = (new DateTime($fecha))->format('d-m-Y');

    if (empty($date)) {
        $errors['date'] = " La fecha es requerida";
    }
    $file = $_FILES['file'] ?? '';

    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        $errors['file'] = "El fichero es requerido o no se pudo subir";
    }
    $gender = $_POST['gender'] ?? '';

    if (empty($gender)) {
        $errors['gender'] = "Pon al menos un genero";
    }

    $pais = $_POST['pais'] ?? '';

    if (empty($pais)) {
        $errors['pais'] = "Seleciona al menos un pais";
    }

    $isOK = !array_filter($errors);
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php?name=pepe&email=pepe@gmail.com">nombre y email de ejemplo</a>
    <form method="post" enctype="multipart/form-data">
        <label>
            nombre:
            <input type="text" name="name" value="<?= $_GET['name'] ?>">
            <span style="color:red"><?= $errors['name'] ?></span><br><br>
        </label>

        <label>
            email:
            <input type=" email" name="email" value="<?= $_GET['email'] ?>">
            <span style="color:red"><?= $errors['email'] ?></span><br><br>
        </label>

        <textarea name="mensaje" placeholder="escribe algo" value="<?= $_POST['date'] ?? '' ?>"></textarea>
        <span style="color:red"><?= $errors['mensaje'] ?></span><br><br>

        <label>
            fecha:
            <input type="date" name="date" value="<?= $_POST['fecha'] ?? '' ?> ">
            <span style="color:red"><?= $errors['date'] ?></span><br><br>
        </label>

        <label>
            fichero:
            <input type="file" name="file">
            <span style="color:red"><?= $errors['file'] ?></span><br><br>

        </label>

        <div class="radio-group">
            <label>
                Hombre
                <input type="radio" name="gender" default="" value="M" <?= (($_POST['gender'] ?? '') == 'M') ? 'checked' : '' ?>>
            </label>

            <label>
                Mujer
                <input type="radio" name="gender" default="" value="W" <?= (($_POST['gender'] ?? '') == 'W') ? 'checked' : '' ?>>
            </label>
            <span style="color:red"><?= $errors['gender'] ?></span><br><br>
        </div>

        <label>
            País:
            <select name="pais" id="pais">
                <option value="">Selecciona un país...</option>
                <option value="es" <?= (($_POST['pais'] ?? '') == 'es') ? 'selected' : '' ?>>España</option>
                <option value="mx" <?= (($_POST['pais'] ?? '') == 'mx') ? 'selected' : '' ?>>México</option>
                <option value="ar" <?= (($_POST['pais'] ?? '') == 'ar') ? 'selected' : '' ?>>Argentina</option>
                <option value="cl" <?= (($_POST['pais'] ?? '') == 'cl') ? 'selected' : '' ?>>Chile</option>
                <option value="co" <?= (($_POST['pais'] ?? '') == 'co') ? 'selected' : '' ?>>Colombia</option>
                <option value="pe" <?= (($_POST['pais'] ?? '') == 'pe') ? 'selected' : '' ?>>Perú</option>
                <option value="us" <?= (($_POST['pais'] ?? '') == 'us') ? 'selected' : '' ?>>Estados Unidos</option>
                <option value="fr" <?= (($_POST['pais'] ?? '') == 'fr') ? 'selected' : '' ?>>Francia</option>
                <option value="it" <?= (($_POST['pais'] ?? '') == 'it') ? 'selected' : '' ?>>Italia</option>
                <option value="de" <?= (($_POST['pais'] ?? '') == 'de') ? 'selected' : '' ?>>Alemania</option>
            </select>
            <span style="color:red"><?= $errors['pais'] ?></span><br><br>
        </label>
        <button type="reset" value="reset">Limpar</button>
        <button type="submit" value="enviar">Enviar</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $isOK) {
            echo "<h3 style='color:green'>Formulario válido</h3>";
            echo "<p>El nombre introducido es: $name </p>";
            echo "<p>El email introducido es: $email </p>";
            echo "<p>El mensaje introducido es: $mensaje </p>";
            echo "<p>El fichero introducido es: $file </p>";
            echo "<p>El genero introducido es: $gender </p>";
            echo "<p>El pais introducido es: $pais </p>";
        }
        ?>
    </form>


</body>

</html>