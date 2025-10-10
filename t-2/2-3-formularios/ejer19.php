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
            <input type="text">
        </label>

        <p class="text">A quien va dirigida la carta</p>

        <label>
            <input type="checkbox">
            <span class="text"> melchor </span>
        </label>

        <label>
            <input type="checkbox">
            <span class="text"> gaspar </span>
        </label>

        <label>
            <input type="checkbox">
            <span class="text"> baltasar </span>
        </label>

        <div id="margin">
            <span class="text">Title:</span>
            <input id="title" type="text" name="title">
        </div>
        <textarea placeholder="Escribe una carta para los reyes magos aqui" id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>
        <br>
        <button id="button" type="submit">Enviar</button>
    </form>
</body>

</html>