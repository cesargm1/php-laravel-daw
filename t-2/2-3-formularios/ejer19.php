<?php
$errors = [
    "name" => "",
    "card" => "",
    "title" => "",
    "magos" => "",
];

$name = "";
$card = "";
$title = "";
$magos = [];
$isSubmit = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    if (empty($name)) {
        $errors['name'] = "El campo nombre no puede estar vacio";
    }

    $card = $_POST['card'] ?? '';

    if (empty($card)) {
        $errors['card'] = "Rellena tu carta";
    }

    $title = $_POST['title'] ?? '';
    if (empty($title)) {
        $errors['title'] = "El campo titulo no puede estar vacio";
    }

    $magos = $_POST['magos'] ?? [];

    if (empty($magos)) {
        $errors['magos'] = "Mandesela por lo menos a un mago";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="card.css">

</head>

<body>
    <form method="post">
        <label>
            <span class="text">Escribe tu nombre</span>
            <input name="name" type="text" value="<?= htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>">
            <?php if ($errors['name']) {
                echo "<span class ='errors'> {$errors['name']} </span>";
            } ?>
        </label>

        <p class="text">A quien va dirigida la carta</p>

        <?php if ($errors['magos']) {
            echo "<span class ='errors'> {$errors['magos']} </span>";
        } ?>

        <label>
            <input name="magos[]" value="melchor" type="checkbox" <?= in_array("melchor", $magos) ? 'checked' : '' ?>>
            <span class="text"> melchor </span>
        </label>

        <label>
            <input name="magos[]" value="gaspar" type="checkbox" <?= in_array("gaspar", $magos) ? 'checked' : '' ?>>
            <span class="text"> gaspar </span>
        </label>

        <label>
            <input name="magos[]" value="baltasar" type="checkbox" <?= in_array("baltasar", $magos) ? 'checked' : '' ?>>
            <span class="text"> baltasar </span>
        </label>



        <div id="margin">
            <span class="text">Title:</span>
            <input id="title" type="text" name="title" value="<?= htmlspecialchars($_POST['title'] ?? '', ENT_QUOTES); ?>">
            <?php if ($errors['title']) {
                echo "<span class ='errors'> {$errors['title']} </span>";
            } ?>
        </div>

        <textarea
            placeholder="Escribe una carta para los reyes magos aqui"
            id="text"
            name="card"
            rows="4"
            style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px;"><?= htmlspecialchars($_POST['card'] ?? 'Queridos Reyes Magos,', ENT_QUOTES); ?>
        </textarea>

        <?php if ($errors['card']) {
            echo "<span class ='errors'> {$errors['card']} </span>";
        } ?>
        <br>
        <button id="button" type="submit">Enviar</button>
    </form>
</body>

</html>