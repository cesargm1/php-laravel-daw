<?php
 include_once 'Libro.php';
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $paginas = (int) $_POST['paginas'] ?? '';
    $isOk = false;

    if(empty($titulo) || empty($autor) ||  empty($paginas)) {
        echo "Alguno de los campos no es valido";
    }

    if($isOk) {
        Libro::addBook($titulo, $autor, $paginas);
        header("status.php");
    }
    
  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/style/formulario.css">

</head>
<body>
    <?php
      if($isOk == true) {
        ?>
    <form method="post">
        <input type="hidden" name="id">

        <label>
            titulo de la pelicula
            <input type="text" name="titulo">
        </label>

        <label>
            autor
            <input type="text" name="autor">
        </label>

        <label>
            paginas
            <input type="number" name="paginas">
        </label>
        <button type="submit" value="ok">enviar</button>
     </form>
      <?php }?>
    
</body>
</html>