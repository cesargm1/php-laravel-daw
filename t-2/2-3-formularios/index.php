<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="mostrar.php" method="get">
        <label>
            Introducce tu nombre
            <input type="text" name="name">
        </label>

        <label>Seleciona tu refresco favorita:
            <select name="drinks" id="drink">
                <option value="Coccacola">Coccacola</option>
                <option value="Agua">Agua</option>
                <option value="Acuarius">Acuarius</option>
                <option value="Fanta">Fanta</option>
            </select>
        </label>

        <span>como te gustaria tu refresco </span>

        <label>
            Sin hielo
            <input type="radio" name="quiereHielo" value="sin Hielo">
        </label>

        <label>
            Con hielo
            <input type="radio" name="quiereHielo" value="con Hielo">
        </label>
        <button type="submit">enviar</button>
    </form>
</body>

</html>